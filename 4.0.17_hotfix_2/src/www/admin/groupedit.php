<?php
//
// SourceForge: Breaking Down the Barriers to Open Source Development
// Copyright 1999-2000 (c) The SourceForge Crew
// http://sourceforge.net
//
// 

require_once('pre.php');    
require_once('vars.php');
require_once('www/admin/admin_utils.php');
require_once('www/project/admin/project_admin_utils.php');
require_once('common/include/TemplateSingleton.class.php');
require_once('common/event/EventManager.class.php');


session_require(array('group'=>'1','admin_flags'=>'A'));
$pm = ProjectManager::instance();
$group = $pm->getProject($group_id,false,true);
$request = HTTPRequest::instance();
$currentproject= new project($group_id);

$em = EventManager::instance();

$Rename=$request->get('Rename');
if ($Rename) {
    $new_name =$request->get('new_name');
    if (isset($new_name) && $group_id) {
        if (SystemEventManager::instance()->canRenameProject($group)) {
            $rule = new Rule_ProjectName();
            if (!$rule->isValid($new_name)) {
                $GLOBALS['Response']->addFeedback('error', $GLOBALS['Language']->getText('admin_groupedit','invalid_short_name'));
                $GLOBALS['Response']->addFeedback('error', $rule->getErrorMessage());
            } else {
                $em->processEvent(Event::PROJECT_RENAME, array('group_id' => $group_id,
                                                           'new_name' => $new_name));
                //update group history
                group_add_history('rename_request', $group->getUnixName(false).' :: '.$new_name, $group_id);
                $GLOBALS['Response']->addFeedback('info', $Language->getText('admin_groupedit','rename_project_msg', array($group->getUnixName(false), $new_name )));
                $GLOBALS['Response']->addFeedback('warning', $Language->getText('admin_groupedit','rename_project_warn'));
                
            }
        }else {
            $GLOBALS['Response']->addFeedback('warning', $Language->getText('admin_groupedit', 'rename_project_already_queued'), CODENDI_PURIFIER_DISABLED);
        }
    }
}        
// group public choice
$Update=$request->get('Update');
if ($Update) {
    $res_grp = db_query("SELECT * FROM groups WHERE group_id=$group_id");

	//audit trail
        if ($group->getStatus() != $form_status)
		{ group_add_history ('status',$group->getStatus(),$group_id);  }
	if ($group->isPublic() != $form_public) { 
        group_add_history('is_public',$group->isPublic(),$group_id);
        $em->processEvent('project_is_private', array(
            'group_id'           => $group_id, 
            'project_is_private' => $form_public ? 0 : 1
        ));
    }
	if ($group->getType() != $group_type)
		{ group_add_history ('group_type',$group->getType(),$group_id);  }
	if ($group->getHTTPDomain()!= $form_domain)
		{ group_add_history ('http_domain',$group->getHTTPDomain(),$group_id);  }
	if ($group->getUnixBox() != $form_box)
		{ group_add_history ('unix_box',$group->getUnixBox(),$group_id);  }
	db_query("UPDATE groups SET is_public=$form_public,status='$form_status',"
		. "license='$form_license',type='$group_type',"
		. "unix_box='$form_box',http_domain='$form_domain', "
		. "type='$group_type' WHERE group_id=$group_id");

	$feedback .= $Language->getText('admin_groupedit','feedback_info');

	$group = $pm->getProject($group_id,false,true);
	
	// ZD: Raise an event for group update 
        if(isset($form_status) && $form_status && ($form_status=="H" || $form_status=="P")){
	        $em->processEvent('project_is_suspended_or_pending', array(
	            'group_id'       => $group_id
	        ));
        }else if(isset($form_status) && $form_status && $form_status=="A" ){
        	$em->processEvent('project_is_active', array(
	            'group_id'       => $group_id
	        ));
        }else if(isset($form_status) && $form_status && $form_status=="D"){
        	$em->processEvent('project_is_deleted', array('group_id' => $group_id ));
        }

}

// get current information
$res_grp = db_query("SELECT * FROM groups WHERE group_id=$group_id");

if (db_numrows($res_grp) < 1) {
	exit_error("ERROR",$Language->getText('admin_groupedit','error_group'));
}

$row_grp = db_fetch_array($res_grp);

site_admin_header(array('title'=>$Language->getText('admin_groupedit','title')));

echo '<H2>'.$row_grp['group_name'].'</H2>' ;?>

<p>
<A href="/project/admin/?group_id=<?php print $group_id; ?>"><B><BIG>[<?php echo $Language->getText('admin_groupedit','proj_admin'); ?>]</BIG></B></A><BR/>
<A href="userlist.php?group_id=<?php print $group_id; ?>"><B><BIG>[<?php echo $Language->getText('admin_groupedit','proj_member'); ?>]</BIG></B></A><BR/>
<A href="show_pending_documents.php?group_id=<?php print $group_id; ?>"><B><BIG>[<?php echo 'show pending documents'; ?>]</BIG></B></A><BR/>
<?php $em->processEvent('groupedit_data', array('group_id' => $group_id)); ?>
</p>

<p>
<FORM action="?" method="POST">
<B><?php echo $Language->getText('admin_groupedit','group_type'); ?>:</B>
<?php

$template =& TemplateSingleton::instance();
echo $template->showTypeBox('group_type',$group->getType());

?>

<B><?php echo $Language->getText('global','status'); ?></B>
<SELECT name="form_status">
<OPTION <?php if ($row_grp['status'] == "I") print "selected "; ?> value="I">
<?php echo $Language->getText('admin_groupedit','incomplete'); ?></OPTION>
<OPTION <?php if ($row_grp['status'] == "A") print "selected "; ?> value="A">
<?php echo $Language->getText('admin_groupedit','active'); ?>
<OPTION <?php if ($row_grp['status'] == "P") print "selected "; ?> value="P">
<?php echo $Language->getText('admin_groupedit','pending'); ?>
<OPTION <?php if ($row_grp['status'] == "H") print "selected "; ?> value="H">
<?php echo $Language->getText('admin_groupedit','holding'); ?>
<OPTION <?php if ($row_grp['status'] == "D") print "selected "; ?> value="D">
<?php echo $Language->getText('admin_groupedit','deleted'); ?>
</SELECT>

<B><?php echo $Language->getText('admin_groupedit','public'); ?></B>
<SELECT name="form_public">
<OPTION <?php if ($row_grp['is_public'] == 1) print "selected "; ?> value="1">
<?php echo $Language->getText('global','yes'); ?>
<OPTION <?php if ($row_grp['is_public'] == 0) print "selected "; ?> value="0">
<?php echo $Language->getText('global','no'); ?>
</SELECT>

<P><B><?php echo $Language->getText('admin_groupedit','license'); ?></B>
<SELECT name="form_license">
<OPTION value="none"><?php echo $Language->getText('admin_groupedit','license_na'); ?>
<OPTION value="other"><?php echo $Language->getText('admin_groupedit','other'); ?>
<?php
	while (list($k,$v) = each($LICENSE)) {
		print "<OPTION value=\"$k\"";
		if ($k == $row_grp['license']) print " selected";
		print ">$v\n";
	}
?>
</SELECT>


<INPUT type="hidden" name="group_id" value="<?php print $group_id; ?>">
<BR><?php echo $Language->getText('admin_groupedit','home_box'); ?>:
<INPUT type="text" name="form_box" value="<?php print $row_grp['unix_box']; ?>">
<BR><?php echo $Language->getText('admin_groupedit','http_domain'); ?>:
<INPUT size=40 type="text" name="form_domain" value="<?php print $row_grp['http_domain']; ?>">
<BR><INPUT type="submit" name="Update" value="<?php echo $Language->getText('global','btn_update'); ?>">
</FORM>

<P><A href="newprojectmail.php?group_id=<?php print $group_id; ?>">
<?php echo $Language->getText('admin_groupedit','send_email'); ?></A>

<?php

// ########################## OTHER INFO

print "<h3>".$Language->getText('admin_groupedit','other_info')."</h3>";
print $Language->getText('admin_groupedit','unix_grp').": $row_grp[unix_group_name]";
?>
<FORM action="?" method="POST">
<INPUT type="hidden" name="group_id" value="<?php print $group_id; ?>">
<?php echo $Language->getText('admin_groupedit','rename_project_label'); ?>:
<INPUT type="text" name="new_name" value="<?php $new_name; ?>" id="new_name">
<INPUT type="submit" name="Rename" value="<?php echo $Language->getText('global','btn_update'); ?>">
</FORM>

<?php 
$currentproject->displayProjectsDescFieldsValue();

print "<h3>".$Language->getText('admin_groupedit','license_other')."</h3> $row_grp[license_other]";

$template_group = $pm->getProject($group->getTemplate());
print "<h3>".$Language->getText('admin_groupedit','built_from_template').':</h3> <a href="/projects/'.$template_group->getUnixName().'"> <B> '.$template_group->getPublicname().' </B></A>';

// Check if group_id is valid
$vGroupId = new Valid_GroupId();
$vGroupId->required();
if($request->valid($vGroupId)) {
    $group_id = $request->get('group_id');
} else {
    exit_no_group();
}

$offset = $request->getValidated('offset', 'uint', 0);
if ( !$offset || $offset < 0 ) {
    $offset = 0;
}
$limit  = 50;


echo "<P><HR><P>";

echo '
<P>'.show_grouphistory ($group_id, $offset, $limit);

site_admin_footer(array());

?>