<?php
require_once('common/user/User.class.php');
Mock::generate('User');
Mock::generatePartial(
    'User',
    'UserTestVersion',
    array('getStatus', 'getUnixStatus', 'getPreferencesDao', 'getId', 'isAnonymous')
);
Mock::generatePartial(
    'User',
    'UserTestVersion2',
    array('getUserGroupData')
);

require_once('common/dao/UserPreferencesDao.class.php');
Mock::generate('UserPreferencesDao');
require_once('common/dao/include/DataAccessResult.class.php');
Mock::generate('DataAccessResult');

/**
 * Copyright (c) Xerox Corporation, Codendi Team, 2001-2009. All rights reserved
 * 
 * 
 *
 * Tests the class User
 */
class UserTest extends UnitTestCase {
    /**
     * Constructor of the test. Can be ommitted.
     * Usefull to set the name of the test
     */
    function UserTest($name = 'User test') {
        $this->UnitTestCase($name);
    }

    function testStatus() {
        $u1 =& new UserTestVersion($this);
        $u1->setReturnValue('getStatus', 'A');
        $u2 =& new UserTestVersion($this);
        $u2->setReturnValue('getStatus', 'S');
        $u3 =& new UserTestVersion($this);
        $u3->setReturnValue('getStatus', 'D');
        $u4 =& new UserTestVersion($this);
        $u4->setReturnValue('isAnonymous', false);
        $u4->setReturnValue('getStatus', 'R');
        $u4 =& new UserTestVersion($this);
        $u4->setReturnValue('isAnonymous', true);
        $u4->setReturnValue('getStatus', 'R');
        
        $this->assertTrue($u1->isActive());
        $this->assertFalse($u1->isSuspended());
        $this->assertFalse($u1->isDeleted());
        $this->assertFalse($u1->isRestricted());
        
        $this->assertFalse($u2->isActive());
        $this->assertTrue($u2->isSuspended());
        $this->assertFalse($u2->isDeleted());
        $this->assertFalse($u2->isRestricted());
        
        $this->assertFalse($u3->isActive());
        $this->assertFalse($u3->isSuspended());
        $this->assertTrue($u3->isDeleted());
        $this->assertFalse($u3->isRestricted());
        
        $this->assertFalse($u4->isActive());
        $this->assertFalse($u4->isSuspended());
        $this->assertFalse($u4->isDeleted());
        $this->assertFalse($u4->isRestricted());
    }

    function testUnixStatus() {
        $u1 =& new UserTestVersion($this);
        $u1->setReturnValue('getUnixStatus', 'A');
        $u2 =& new UserTestVersion($this);
        $u2->setReturnValue('getUnixStatus', 'S');
        $u3 =& new UserTestVersion($this);
        $u3->setReturnValue('getUnixStatus', 'D');
        $u4 =& new UserTestVersion($this);
        $u4->setReturnValue('getUnixStatus', 'N');
        
        $this->assertTrue($u1->hasActiveUnixAccount());
        $this->assertFalse($u1->hasSuspendedUnixAccount());
        $this->assertFalse($u1->hasDeletedUnixAccount());
        $this->assertFalse($u1->hasNoUnixAccount());
        
        $this->assertFalse($u2->hasActiveUnixAccount());
        $this->assertTrue($u2->hasSuspendedUnixAccount());
        $this->assertFalse($u2->hasDeletedUnixAccount());
        $this->assertFalse($u2->hasNoUnixAccount());
        
        $this->assertFalse($u3->hasActiveUnixAccount());
        $this->assertFalse($u3->hasSuspendedUnixAccount());
        $this->assertTrue($u3->hasDeletedUnixAccount());
        $this->assertFalse($u3->hasNoUnixAccount());
        
        $this->assertFalse($u4->hasActiveUnixAccount());
        $this->assertFalse($u4->hasSuspendedUnixAccount());
        $this->assertFalse($u4->hasDeletedUnixAccount());
        $this->assertTrue($u4->hasNoUnixAccount());
    }
    
    function testPreferences() {
        $dao =& new MockUserPreferencesDao($this);
        $dar =& new MockDataAccessResult($this);
        
        $empty_dar =& new MockDataAccessResult($this);
        $empty_dar->setReturnValue('getRow', false);
        $dar->setReturnValueAt(0, 'getRow', array('preference_value' => '123'));
        $dar->setReturnValueAt(1, 'getRow', false);
        
        $dao->setReturnReference('search', $empty_dar, array(666, 'unexisting_preference'));
        $dao->setReturnReference('search', $dar, array(666, 'existing_preference'));
        $dao->expectCallCount('search', 2);
        $dao->setReturnValue('set', true, array(666, 'existing_preference', '456'));
        $dao->expectOnce('set');
        $dao->setReturnValue('delete', true, array(666, 'existing_preference'));
        $dao->expectOnce('delete');
        
        $user =& new UserTestVersion($this);
        $user->setReturnReference('getPreferencesDao', $dao);
        $user->setReturnValue('getId', 666);
        
        $this->assertFalse($user->getPreference('unexisting_preference'), 'Unexisting preference, should return false');
        $this->assertEqual('123', $user->getPreference('existing_preference'), 'Existing preference should return 123');
        $this->assertEqual('123', $user->getPreference('existing_preference'), 'Existing preference should return 123, should be cached');
        $this->assertTrue($user->setPreference('existing_preference', '456'), 'Updating preference should return true. %s');
        $this->assertEqual('456', $user->getPreference('existing_preference'), 'Existing preference has been updated, should now return 456. No call to dao since cached during update');
        $this->assertTrue($user->delPreference('existing_preference'), 'Deletion of preference should return true');
        $this->assertFalse($user->getPreference('existing_preference'), 'Preferences has been deleted. No call to dao since cached during delete');
    }
    
    function testNone() {
        $user_none =& new UserTestVersion($this);
        $user_none->setReturnValue('getId', 100);
        $this->assertTrue($user_none->isNone());
        
        $user =& new UserTestVersion($this);
        $user->setReturnValue('getId', 666);
        $this->assertFalse($user->isNone());
    }
    
    function testIsMemberSiteAdmin() {
        $siteadmin = new UserTestVersion2($this);
        $ug_siteadmin = array(
            '1' => array(
                    'user_group_id' => '1',
                    'user_id' => '101',
                    'group_id' => '1',
                    'admin_flags' => 'A',
                    'bug_flags' => '2',
                    'forum_flags' => '2',
                    'project_flags' => '2',
                    'patch_flags' => '2',
                    'support_flags' => '2',
                    'doc_flags' => '1',
                    'file_flags' => '2',
                    'wiki_flags' => '2',
                    'svn_flags' => '2',
                    'news_flags' => '2'
                  ));
        $siteadmin->setReturnValue('getUserGroupData', $ug_siteadmin);
        
        $this->assertTrue($siteadmin->isMember(1));
        $this->assertTrue($siteadmin->isMember(1, 'A'));
        // Site admin is member and admin of any project
        $this->assertTrue($siteadmin->isMember(123));
        $this->assertTrue($siteadmin->isMember(123, 'A'));
    }
    
    function testIsMemberProjectAdmin() {
        $projectadmin = new UserTestVersion2($this);
        $ug_project_admin = array(
            '123' => array(
                    'user_group_id' => '1',
                    'user_id' => '101',
                    'group_id' => '123',
                    'admin_flags' => 'A',
                    'bug_flags' => '2',
                    'forum_flags' => '2',
                    'project_flags' => '2',
                    'patch_flags' => '2',
                    'support_flags' => '2',
                    'doc_flags' => '1',
                    'file_flags' => '2',
                    'wiki_flags' => '2',
                    'svn_flags' => '2',
                    'news_flags' => '2'
                  ));
        $projectadmin->setReturnValue('getUserGroupData', $ug_project_admin);
        
        // Project admin is member and admin of only her projects
        $this->assertTrue($projectadmin->isMember(123));
        $this->assertTrue($projectadmin->isMember(123, 'A'));
        $this->assertFalse($projectadmin->isMember(456));
        $this->assertFalse($projectadmin->isMember(456, 'A'));
        $this->assertFalse($projectadmin->isMember(1));
        $this->assertFalse($projectadmin->isMember(1, 'A'));
        
    }
    
    /**
     * This test reproduce bug #20456 on codex.xerox.com
     */
    function testIsMemberProjectMember() {
        $projectmember = new UserTestVersion2($this);
        $ug_project_member = array(
            '789' => array(
                    'user_group_id' => '1',
                    'user_id' => '101',
                    'group_id' => '789',
                    'admin_flags' => '',
                    'bug_flags' => '2',
                    'forum_flags' => '2',
                    'project_flags' => '2',
                    'patch_flags' => '2',
                    'support_flags' => '2',
                    'doc_flags' => '1',
                    'file_flags' => '2',
                    'wiki_flags' => '2',
                    'svn_flags' => '2',
                    'news_flags' => '2'
                  ));
        $projectmember->setReturnValue('getUserGroupData', $ug_project_member);
        
        // Project member is member of only her project
        $this->assertTrue($projectmember->isMember(789));
        $this->assertFalse($projectmember->isMember(789, 'A'));
        $this->assertFalse($projectmember->isMember(456));
        $this->assertFalse($projectmember->isMember(456, 'A'));
        $this->assertFalse($projectmember->isMember(1));
        $this->assertFalse($projectmember->isMember(1, 'A'));
    }
    
}
?>