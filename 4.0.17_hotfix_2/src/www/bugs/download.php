<?php
//
// Codendi
// Copyright (c) Xerox Corporation, Codendi Team, 2001-2009. All rights reserved
// http://www.codendi.com
//
// 
//
//	Originally written by Laurent Julliard 2001, 2002, Codendi Team, Xerox
//

require_once('pre.php');

$sql="SELECT description,file,filename,filesize,filetype FROM bug_file WHERE bug_file_id='$bug_file_id' AND bug_id ='$bug_id'";
$result=db_query($sql);

if ($result && db_numrows($result) > 0) {

    if (db_result($result,0,'filesize') == 0) {

	exit_error('Error','nothing in here - File has a null size');

    } else {
	
	// Download the patch with the correct filetype
	header('Content-Type: '.db_result($result,0,'filetype'));
	header('Content-Length: '.db_result($result,0,'filesize'));
	header('Content-Disposition: filename='.db_result($result,0,'filename'));
	header('Content-Description: '. db_result($result,0,'description'));

	echo db_result($result,0,'file');

    }

} else {
    exit_error('Error',"Couldn't find attached file  (id #$bug_file_id)");
}

?>