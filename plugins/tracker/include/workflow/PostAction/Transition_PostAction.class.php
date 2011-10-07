<?php
/*
 * Copyright (c) Enalean, 2011. All Rights Reserved.
 *
 * This file is a part of Tuleap.
 *
 * Tuleap is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Tuleap is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tuleap. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * class Transition_PostAction
 * Post action occuring when transition is run
 */
abstract class Transition_PostAction {
    
    /**
     * Log feedback to be displayed to the user
     * @see Response::addFeedback()
     * 
     * @param string $level    One of info|warning|error
     * @param string $pagename The primary key for BaseLanguage::getText()
     * @param string $category The secondary key for BaseLanguage::getText()
     * @param string $args     The args for BaseLanguage::getText()
     *
     * @return void
     */
    protected function addFeedback($level, $pagename, $category, $args) {
        $GLOBALS['Response']->addFeedback($level, $GLOBALS['Language']->getText($pagename, $category, $args));
    }
    
    /**
     * Execute actions before transition happens
     * 
     * @param Array $fields_data Request field data (array[field_id] => data)
     * 
     * @return void
     */
    public function before(array &$fields_data) {
    }
    
    /**
     * @return string The shortname of the post action
     */
    public abstract function getShortName();
    
    /**
     * @return string The label of the post action
     */
    public abstract function getLabel();
    
    /**
     * Get the html code needed to display the post action in workflow admin
     *
     * @return string html
     */
    public abstract function fetch();
    
}
?>
