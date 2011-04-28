<?php
/**
 * Copyright (c) Xerox Corporation, Codendi Team, 2001-2009. All rights reserved
 *
 * This file is a part of Codendi.
 *
 * Codendi is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Codendi is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Codendi. If not, see <http://www.gnu.org/licenses/>.
 */

require_once('common/mvc/Views.class.php');
require_once('common/include/HTTPRequest.class.php');

class CodendiJRIViews extends Views {
    
    function CodendiJRIViews(&$controler, $view=null) {
        $this->View($controler, $view);
    }
    
    function header() {
        $title = $GLOBALS['Language']->getText('plugin_codendijri','title');
        $GLOBALS['HTML']->header(array('title'=>$title));
        echo '<h2>'.$title.'</h2>';
    }
    function footer() {
        $GLOBALS['HTML']->footer(array());
    }
    
    // {{{ Views
    function index() {
        $this->intro();
        $this->documentation();
        $this->jars();
    }
    // }}}
    
    function intro() {
        echo file_get_contents($GLOBALS['Language']->getContent('intro', null, 'codendijri'));
    }
    
    function documentation() {
        echo file_get_contents($GLOBALS['Language']->getContent('documentation', null, 'codendijri'));
    }
    
    function jars() {
        echo file_get_contents($GLOBALS['Language']->getContent('jars', null, 'codendijri'));
    }

}


?>