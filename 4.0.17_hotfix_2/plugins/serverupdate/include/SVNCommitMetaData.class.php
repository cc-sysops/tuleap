<?php
/**
 * @copyright Copyright (c) Xerox Corporation, Codendi Team, 2001-2009. All rights reserved
 * @author Marc Nazarian <marc.nazarian@xrce.xerox.com>
 * 
 *
 * SVNUpdate
 */

// Waiting PHP 5, we use define as 'class constant'
define("LEVEL_TXT", "level=");
define("UPDATE_TYPE_TXT", "update=");

class SVNCommitMetaData {
    
    /**
     * @var string $level the level of criticality for the commit (minor, normal or critical)
     */
    var $level;
    
    /**
     * @var bool $needManualUpdate if the commit needs a manual update or not
     */
    var $needManualUpdate;
    /**
    * @var array{string} $updateType array of type values to define the update
     * @example authorized values are: db, manual, auto
     */
    var $updateType;
    
    
    /**
     * SVNCommitMetaData constructor
     */
    function SVNCommitMetaData() {
        $this->setLevel(null);
        $this->setNeedManualUpdate(null);
        $this->setUpdateType(null);
    }
    
    function getLevel() {
        return $this->level;
    }
    function setLevel($level) {
        $this->level = $level;
    }
    function getNeedManualUpdate() {
        return $this->needManualUpdate;
    }
    function setNeedManualUpdate($needManualUpdate) {
        $this->needManualUpdate = $needManualUpdate;
    }
    function getUpdateType() {
        return $this->updateType;
    }
    function setUpdateType($updateType) {
        $this->updateType = $updateType;
    }
    
    function containsDBUpdate() {
        return (is_array($this->getUpdateType()) && array_key_exists("db", array_flip($this->getUpdateType())));
    }
    function getAvailableLevels() {
        return array('minor', 'normal', 'critical');
    }
    
    /**
     * Get the CSS class regarding to the level of criticality for this CommitMetaData
     *
     * @return string the CSS class for the level of this CommitMetaData
     */
    function getLevelClass() {
        // By default, if no level specified, we assign the lower importance
        $class = 'priore';
        switch ($this->getLevel()) {
            case "minor":
                $class = 'priora';
                break;
            case "normal":
                $class = 'priore';
                break;
            case "critical":
                $class = 'priori';
                break;
        }
        return $class;
    }
    
    /**
     * Set the meta data of the commit by parsing the commit message.
     * This is very closed to the commit message convention.
     * The current commit message looks like this :
     * <pre>
     *  {HERE IS THE NORMAL MESSAGE}
     *  -- update info --
     *  level={minor|normal|critical}
     *  update={db|manual|auto|db,manual|...}
     *  --
     *  
     * </pre>
     *
     * @param string $commitMessage the commit log message we want to analyse
     *
     */
    function setMetaData($commitMessage) {
        // By default, the update doesn't need a manual intervention (auto)
        $this->setNeedManualUpdate(false);
        $lines = explode("\n", $commitMessage);
        foreach($lines as $line) {
            // Trying to recognize the 'level' line
            if (ereg(LEVEL_TXT.'(minor|normal|critical)', $line, $regs)) {
                $this->setLevel($regs[1]);
            }
            // Trying to recognize the 'need manual update' line
            if (ereg(UPDATE_TYPE_TXT.'(.*)', $line, $regs)) {
                $update_info = $regs[1];
                $update_infos = explode(",", $update_info);
                if (array_key_exists("manual", array_flip($update_infos))) {
                    $this->setNeedManualUpdate(true);
                } else {
                    // By default, the update doesn't need a manual intervention (auto)
                    $this->setNeedManualUpdate(false);
                }
                $this->setUpdateType($update_infos);
            }
        }
    }

}

?>