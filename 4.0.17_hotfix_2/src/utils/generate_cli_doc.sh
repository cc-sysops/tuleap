#!/bin/sh
#
# Copyright (c) Xerox Corporation, Codendi 2007-2008.
# This file is licensed under the GNU General Public License version 2. See the file COPYING.
#
# Purpose:
#    Automatically re-generate online documentation
#

# Put all the languages available in the following string, separated by a single space
ALL_LANGUAGES="en_US fr_FR"

FORCE=0
HELP=0
VERBOSE=0

CURRENTDIR=`pwd`
# honor BASEDIR if defined
if [ -z "$BASEDIR" ]; then
    if [ -z "$CODENDI_LOCAL_INC" ]; then
        CODENDI_LOCAL_INC=/etc/codendi/conf/local.inc
    fi
    CODENDI_DOCUMENTATION_PREFIX=`/bin/grep '^\$codendi_documentation_prefix' $CODENDI_LOCAL_INC | /bin/sed -e 's/\$codendi_documentation_prefix\s*=\s*\(.*\);\(.*\)/\1/' | tr -d '"' | tr -d "'"`
    
    BASEDIR=$CODENDI_DOCUMENTATION_PREFIX
fi
CMDDIR=$BASEDIR/cli/cmd
     
# Check arguments
while	((1))	# look for options
do	case	"$1" in
	\-v*)	VERBOSE=1;;
	\-f*)	FORCE=1;;
	\-h*)	HELP=1;;
	\-l*)	LANGUAGES=$2; shift;;
	\-d*)   shift;; # legacy option
	*)	if [ ! -z "$1" ];
	    then
	        echo "Invalid option $1";
	        echo "Use -h flag to see all the valid options";
	        exit 2;
	    fi
	    break;;
	esac
	shift # next argument
done

if [ $HELP == 1 ]
then
    echo "Usage: generate_doc.sh [-f] [-v] [-h]";
    echo "  -f : force to generate the documentation without checking file dates";
    echo "  -v : verbose";
    echo "  -h : help";
    echo "  -l <lang> : generate only the documentation in the <lang> language (lang= en_US, fr_FR, etc ...)";
    echo "Note: the '-d' flag has been deprecated and is no longer used";
    exit 2;
fi

if [ -z $LANGUAGES ]
then
    LANGUAGES=$ALL_LANGUAGES
    if [ $VERBOSE == 1 ]
    then
        echo "Generating documentation in all available languages ($LANGUAGES)";    
    fi    
else
    if [ ! -d $BASEDIR/cli/xml/$LANGUAGES ] 
    then
	echo "Language '$LANGUAGES' unknown.";
	echo "Directory '$BASEDIR/cli/xml/$LANGUAGES' doesn't exists."
	echo "Failed!";
	exit 2;
    fi
    if [ $VERBOSE == 1 ]
    then
        echo "Generating only $LANGUAGES documentation"
    fi    
fi


for lang in $LANGUAGES
do
    cd $BASEDIR/cli/xml/$lang

    if [ ! -e $BASEDIR/cli/pdf/$lang/Codendi_CLI.pdf ]; then
        FORCE=1;
    fi

    if [ $FORCE != 1 ]
    then
        # check if some need some update
        COUNT=`find $BASEDIR/cli/xml -newer $BASEDIR/cli/pdf/$lang/Codendi_CLI.pdf | wc -l`
        if [ $COUNT == 0 ]
        then
            # No changes in the documentation
            if [ $VERBOSE == 1 ]
            then
                echo "No changes in the documentation"
            fi
            exit 0
        fi
    fi

    mkdir -p ../../html/$lang

    $CMDDIR/xml2html.sh Codendi_CLI.xml ../../html/$lang/ $lang >/tmp/log_xml2html_$$ 2>&1
    if [ $? != 0 ]
    then
        echo "Codendi documentation generation failed!"
            echo "See error log below:"
            echo ""
            cat /tmp/log_xml2html_$$
        exit 1
    fi
    if [ $VERBOSE == 1 ]
    then
        cat /tmp/log_xml2html_$$
    fi

    # set the path
    OLD_PATH=${PATH}
    export PATH=${PATH}:${BASEDIR}/cli/cmd
    
    mkdir -p $BASEDIR/cli/pdf/$lang

    $CMDDIR/xml2pdf.sh Codendi_CLI.xml $BASEDIR/cli/pdf/$lang/Codendi_CLI_new.pdf $lang >/tmp/log_xml2pdf_$$ 2>&1 
    if [ $? != 0 ]
    then
        echo "Codendi documentation generation failed!"
            echo "See error log below:"
        echo ""
        cat /tmp/log_xml2pdf_$$
        export PATH=${OLD_PATH}
        exit 1
    fi
    if [ $VERBOSE == 1 ]
    then
        cat /tmp/log_xml2pdf_$$
    fi
    export PATH=${OLD_PATH}

    cd $BASEDIR/cli/pdf/$lang
    if [ -f "Codendi_CLI.pdf" ]; then
        cp -f Codendi_CLI.pdf Codendi_CLI_old.pdf > /dev/null
    fi
    mv Codendi_CLI_new.pdf Codendi_CLI.pdf
done
cd "$CURRENTDIR"
exit 0