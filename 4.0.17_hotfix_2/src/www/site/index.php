<?php
//
// Copyright (c) Xerox Corporation, Codendi Team, 2001-2009. All rights reserved
//
// 
//

require_once('pre.php');
$title = $Language->getText('include_layout','Help');
site_header(array('title' => $title));

include($Language->getContent('help/site'));

site_footer(array());
?>