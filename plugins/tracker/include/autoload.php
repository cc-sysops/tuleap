<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
function autoloadb4c23defce575b26e70efe4b9b806e12($class) {
    static $classes = null;
    if ($classes === null) {
        $classes = array(
            'artifactnode' => '/Tracker/CrossSearch/ArtifactNode.class.php',
            'nulltracker' => '/Tracker/NullTracker.class.php',
            'servicetracker' => '/ServiceTracker.class.php',
            'tracker' => '/Tracker/Tracker.class.php',
            'tracker_action_createartifact' => '/Tracker/Action/CreateArtifact.class.php',
            'tracker_artifact' => '/Tracker/Artifact/Tracker_Artifact.class.php',
            'tracker_artifact_burndown_pane' => '/Tracker/Artifact/Burndown/Pane.class.php',
            'tracker_artifact_burndown_paneinfo' => '/Tracker/Artifact/Burndown/PaneInfo.class.php',
            'tracker_artifact_changeset' => '/Tracker/Artifact/Tracker_Artifact_Changeset.class.php',
            'tracker_artifact_changeset_comment' => '/Tracker/Artifact/Tracker_Artifact_Changeset_Comment.class.php',
            'tracker_artifact_changeset_commentdao' => '/Tracker/Artifact/dao/Tracker_Artifact_Changeset_CommentDao.class.php',
            'tracker_artifact_changeset_null' => '/Tracker/Artifact/Tracker_Artifact_Changeset_Null.class.php',
            'tracker_artifact_changeset_valuedao' => '/Tracker/Artifact/dao/Tracker_Artifact_Changeset_ValueDao.class.php',
            'tracker_artifact_changesetdao' => '/Tracker/Artifact/dao/Tracker_Artifact_ChangesetDao.class.php',
            'tracker_artifact_changesetvalue' => '/Tracker/Artifact/Tracker_Artifact_ChangesetValue.class.php',
            'tracker_artifact_changesetvalue_artifactlink' => '/Tracker/Artifact/Tracker_Artifact_ChangesetValue_ArtifactLink.class.php',
            'tracker_artifact_changesetvalue_date' => '/Tracker/Artifact/Tracker_Artifact_ChangesetValue_Date.class.php',
            'tracker_artifact_changesetvalue_file' => '/Tracker/Artifact/Tracker_Artifact_ChangesetValue_File.class.php',
            'tracker_artifact_changesetvalue_float' => '/Tracker/Artifact/Tracker_Artifact_ChangesetValue_Float.class.php',
            'tracker_artifact_changesetvalue_integer' => '/Tracker/Artifact/Tracker_Artifact_ChangesetValue_Integer.class.php',
            'tracker_artifact_changesetvalue_list' => '/Tracker/Artifact/Tracker_Artifact_ChangesetValue_List.class.php',
            'tracker_artifact_changesetvalue_numeric' => '/Tracker/Artifact/Tracker_Artifact_ChangesetValue_Numeric.class.php',
            'tracker_artifact_changesetvalue_openlist' => '/Tracker/Artifact/Tracker_Artifact_ChangesetValue_OpenList.class.php',
            'tracker_artifact_changesetvalue_permissionsonartifact' => '/Tracker/Artifact/Tracker_Artifact_ChangesetValue_PermissionsOnArtifact.class.php',
            'tracker_artifact_changesetvalue_reference' => '/Tracker/Artifact/Tracker_Artifact_ChangesetValue_Reference.class.php',
            'tracker_artifact_changesetvalue_string' => '/Tracker/Artifact/Tracker_Artifact_ChangesetValue_String.class.php',
            'tracker_artifact_changesetvalue_text' => '/Tracker/Artifact/Tracker_Artifact_ChangesetValue_Text.class.php',
            'tracker_artifact_prioritydao' => '/Tracker/Artifact/dao/PriorityDao.class.php',
            'tracker_artifact_redirect' => '/Tracker/Artifact/Redirect.class.php',
            'tracker_artifactdao' => '/Tracker/Artifact/dao/Tracker_ArtifactDao.class.php',
            'tracker_artifactfactory' => '/Tracker/Artifact/Tracker_ArtifactFactory.class.php',
            'tracker_artifactlinkinfo' => '/Tracker/Artifact/Tracker_ArtifactLinkInfo.class.php',
            'tracker_cannedresponse' => '/Tracker/CannedResponse/Tracker_CannedResponse.class.php',
            'tracker_cannedresponsedao' => '/Tracker/CannedResponse/dao/Tracker_CannedResponseDao.class.php',
            'tracker_cannedresponsefactory' => '/Tracker/CannedResponse/Tracker_CannedResponseFactory.class.php',
            'tracker_cannedresponsemanager' => '/Tracker/CannedResponse/Tracker_CannedResponseManager.class.php',
            'tracker_cannotaccesstrackerexception' => '/Tracker/Tracker_CannotAccessTrackerException.class.php',
            'tracker_cardfields' => '/Tracker/CardFields.class.php',
            'tracker_cardpresenter' => '/Tracker/CardPresenter.class.php',
            'tracker_chart_burndown' => '/Tracker/Chart/Burndown.class.php',
            'tracker_chart_burndown_data_linkedartifacts' => '/Tracker/Chart/Data/LinkedArtifacts.class.php',
            'tracker_chart_burndown_data_linkedartifactsdao' => '/Tracker/Chart/Data/LinkedArtifactsDao.class.php',
            'tracker_chart_burndownview' => '/Tracker/Chart/BurndownView.class.php',
            'tracker_chart_data_burndown' => '/Tracker/Chart/Data/Burndown.class.php',
            'tracker_chart_data_burndowntimeperiod' => '/Tracker/Chart/Data/BurndownTimePeriod.class.php',
            'tracker_chart_data_iprovidedataforburndownchart' => '/Tracker/Chart/Data/IProvideDataForBurndownChart.class.php',
            'tracker_crosssearch_artifactreportfield' => '/Tracker/CrossSearch/ArtifactReportField.class.php',
            'tracker_crosssearch_criteriabuilder' => '/Tracker/CrossSearch/CriteriaBuilder.class.php',
            'tracker_crosssearch_projectnotfoundexception' => '/Tracker/CrossSearch/ProjectNotFoundException.class.php',
            'tracker_crosssearch_query' => '/Tracker/CrossSearch/Query.class.php',
            'tracker_crosssearch_search' => '/Tracker/CrossSearch/Search.class.php',
            'tracker_crosssearch_searchcontentview' => '/Tracker/CrossSearch/SearchContentView.class.php',
            'tracker_crosssearch_searchcontroller' => '/Tracker/CrossSearch/SearchController.class.php',
            'tracker_crosssearch_searchdao' => '/Tracker/CrossSearch/SearchDao.class.php',
            'tracker_crosssearch_searchview' => '/Tracker/CrossSearch/SearchView.class.php',
            'tracker_crosssearch_searchviewbuilder' => '/Tracker/CrossSearch/SearchViewBuilder.class.php',
            'tracker_crosssearch_semanticstatusreportfield' => '/Tracker/CrossSearch/SemanticStatusReportField.class.php',
            'tracker_crosssearch_semantictitlereportfield' => '/Tracker/CrossSearch/SemanticTitleReportField.class.php',
            'tracker_crosssearch_semanticvaluefactory' => '/Tracker/CrossSearch/SemanticValueFactory.class.php',
            'tracker_crosssearch_servicenotusedexception' => '/Tracker/CrossSearch/ServiceNotUsedException.class.php',
            'tracker_crosssearch_sharedfield' => '/Tracker/CrossSearch/SharedField.class.php',
            'tracker_crosssearch_sharedfielddao' => '/Tracker/CrossSearch/SharedFieldDao.class.php',
            'tracker_crosssearch_sharedfieldfactory' => '/Tracker/CrossSearch/SharedFieldFactory.class.php',
            'tracker_crosssearch_viewbuilder' => '/Tracker/CrossSearch/ViewBuilder.class.php',
            'tracker_datereminder' => '/Tracker/DateReminder/Tracker_DateReminder.class.php',
            'tracker_datereminderdao' => '/Tracker/DateReminder/dao/Tracker_DateReminderDao.class.php',
            'tracker_datereminderexception' => '/Tracker/DateReminder/Tracker_DateReminderException.class.php',
            'tracker_datereminderfactory' => '/Tracker/DateReminder/Tracker_DateReminderFactory.class.php',
            'tracker_dateremindermanager' => '/Tracker/DateReminder/Tracker_DateReminderManager.class.php',
            'tracker_datereminderrenderer' => '/Tracker/DateReminder/Tracker_DateReminderRenderer.class.php',
            'tracker_dispatchable_interface' => '/Tracker/Tracker_Dispatchable_Interface.class.php',
            'tracker_exception' => '/Tracker/Exception.class.php',
            'tracker_fileinfo' => '/Tracker/Tracker_FileInfo.class.php',
            'tracker_fileinfodao' => '/Tracker/dao/Tracker_FileInfoDao.class.php',
            'tracker_fileinfofactory' => '/Tracker/FileInfoFactory.class.php',
            'tracker_formelement' => '/Tracker/FormElement/Tracker_FormElement.class.php',
            'tracker_formelement_container' => '/Tracker/FormElement/Tracker_FormElement_Container.class.php',
            'tracker_formelement_container_column' => '/Tracker/FormElement/Tracker_FormElement_Container_Column.class.php',
            'tracker_formelement_container_column_group' => '/Tracker/FormElement/Tracker_FormElement_Container_Column_Group.class.php',
            'tracker_formelement_container_fieldset' => '/Tracker/FormElement/Tracker_FormElement_Container_Fieldset.class.php',
            'tracker_formelement_field' => '/Tracker/FormElement/Tracker_FormElement_Field.class.php',
            'tracker_formelement_field_alphanum' => '/Tracker/FormElement/Tracker_FormElement_Field_Alphanum.class.php',
            'tracker_formelement_field_artifactid' => '/Tracker/FormElement/Tracker_FormElement_Field_ArtifactId.class.php',
            'tracker_formelement_field_artifactlink' => '/Tracker/FormElement/Tracker_FormElement_Field_ArtifactLink.class.php',
            'tracker_formelement_field_burndown' => '/Tracker/FormElement/Tracker_FormElement_Field_Burndown.class.php',
            'tracker_formelement_field_burndowndao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_BurndownDao.class.php',
            'tracker_formelement_field_burndownexception' => '/Tracker/FormElement/Tracker_FormElement_Field_BurndownException.class.php',
            'tracker_formelement_field_checkbox' => '/Tracker/FormElement/Tracker_FormElement_Field_Checkbox.class.php',
            'tracker_formelement_field_computed' => '/Tracker/FormElement/Tracker_FormElement_Field_Computed.class.php',
            'tracker_formelement_field_computeddao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_ComputedDao.class.php',
            'tracker_formelement_field_crossreferences' => '/Tracker/FormElement/Tracker_FormElement_Field_CrossReferences.class.php',
            'tracker_formelement_field_date' => '/Tracker/FormElement/Tracker_FormElement_Field_Date.class.php',
            'tracker_formelement_field_datedao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_DateDao.class.php',
            'tracker_formelement_field_file' => '/Tracker/FormElement/Tracker_FormElement_Field_File.class.php',
            'tracker_formelement_field_float' => '/Tracker/FormElement/Tracker_FormElement_Field_Float.class.php',
            'tracker_formelement_field_floatdao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_FloatDao.class.php',
            'tracker_formelement_field_integer' => '/Tracker/FormElement/Tracker_FormElement_Field_Integer.class.php',
            'tracker_formelement_field_integerdao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_IntegerDao.class.php',
            'tracker_formelement_field_lastupdatedate' => '/Tracker/FormElement/Tracker_FormElement_Field_LastUpdateDate.class.php',
            'tracker_formelement_field_list' => '/Tracker/FormElement/Tracker_FormElement_Field_List.class.php',
            'tracker_formelement_field_list_bind' => '/Tracker/FormElement/Tracker_FormElement_Field_List_Bind.class.php',
            'tracker_formelement_field_list_bind_defaultvaluedao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_List_Bind_DefaultvalueDao.class.php',
            'tracker_formelement_field_list_bind_null' => '/Tracker/FormElement/Tracker_FormElement_Field_List_Bind_Null.class.php',
            'tracker_formelement_field_list_bind_static' => '/Tracker/FormElement/Tracker_FormElement_Field_List_Bind_Static.class.php',
            'tracker_formelement_field_list_bind_static_valuedao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_List_Bind_Static_ValueDao.class.php',
            'tracker_formelement_field_list_bind_staticdao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_List_Bind_StaticDao.class.php',
            'tracker_formelement_field_list_bind_staticvalue' => '/Tracker/FormElement/Tracker_FormElement_Field_List_Bind_StaticValue.class.php',
            'tracker_formelement_field_list_bind_staticvalue_null' => '/Tracker/FormElement/Tracker_FormElement_Field_List_Bind_StaticValue_Null.class.php',
            'tracker_formelement_field_list_bind_ugroups' => '/Tracker/FormElement/Tracker_FormElement_Field_List_Bind_Ugroups.class.php',
            'tracker_formelement_field_list_bind_ugroups_valuedao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_List_Bind_Ugroups_ValueDao.class.php',
            'tracker_formelement_field_list_bind_ugroupsvalue' => '/Tracker/FormElement/Tracker_FormElement_Field_List_Bind_UgroupsValue.class.php',
            'tracker_formelement_field_list_bind_users' => '/Tracker/FormElement/Tracker_FormElement_Field_List_Bind_Users.class.php',
            'tracker_formelement_field_list_bind_usersdao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_List_Bind_UsersDao.class.php',
            'tracker_formelement_field_list_bind_usersvalue' => '/Tracker/FormElement/Tracker_FormElement_Field_List_Bind_UsersValue.class.php',
            'tracker_formelement_field_list_binddecorator' => '/Tracker/FormElement/Tracker_FormElement_Field_List_BindDecorator.class.php',
            'tracker_formelement_field_list_binddecoratordao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_List_BindDecoratorDao.class.php',
            'tracker_formelement_field_list_bindfactory' => '/Tracker/FormElement/Tracker_FormElement_Field_List_BindFactory.class.php',
            'tracker_formelement_field_list_bindvalue' => '/Tracker/FormElement/Tracker_FormElement_Field_List_BindValue.class.php',
            'tracker_formelement_field_list_openvalue' => '/Tracker/FormElement/Tracker_FormElement_Field_List_OpenValue.class.php',
            'tracker_formelement_field_list_openvaluedao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_List_OpenValueDao.class.php',
            'tracker_formelement_field_list_unsavedvalue' => '/Tracker/FormElement/Tracker_FormElement_Field_List_UnsavedValue.class.php',
            'tracker_formelement_field_list_value' => '/Tracker/FormElement/Tracker_FormElement_Field_List_Value.class.php',
            'tracker_formelement_field_listdao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_ListDao.class.php',
            'tracker_formelement_field_multiselectbox' => '/Tracker/FormElement/Tracker_FormElement_Field_MultiSelectbox.class.php',
            'tracker_formelement_field_multiselectboxdao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_MultiSelectboxDao.class.php',
            'tracker_formelement_field_numeric' => '/Tracker/FormElement/Tracker_FormElement_Field_Numeric.class.php',
            'tracker_formelement_field_openlist' => '/Tracker/FormElement/Tracker_FormElement_Field_OpenList.class.php',
            'tracker_formelement_field_openlistdao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_OpenListDao.class.php',
            'tracker_formelement_field_permissionsonartifact' => '/Tracker/FormElement/Tracker_FormElement_Field_PermissionsOnArtifact.class.php',
            'tracker_formelement_field_readonly' => '/Tracker/FormElement/Tracker_FormElement_Field_ReadOnly.class.php',
            'tracker_formelement_field_selectbox' => '/Tracker/FormElement/Tracker_FormElement_Field_Selectbox.class.php',
            'tracker_formelement_field_shareable' => '/Tracker/FormElement/Tracker_FormElement_Field_Shareable.class.php',
            'tracker_formelement_field_string' => '/Tracker/FormElement/Tracker_FormElement_Field_String.class.php',
            'tracker_formelement_field_stringdao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_StringDao.class.php',
            'tracker_formelement_field_submittedby' => '/Tracker/FormElement/Tracker_FormElement_Field_SubmittedBy.class.php',
            'tracker_formelement_field_submittedon' => '/Tracker/FormElement/Tracker_FormElement_Field_SubmittedOn.class.php',
            'tracker_formelement_field_text' => '/Tracker/FormElement/Tracker_FormElement_Field_Text.class.php',
            'tracker_formelement_field_textdao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_TextDao.class.php',
            'tracker_formelement_field_value_artifactlinkdao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_Value_ArtifactLinkDao.class.php',
            'tracker_formelement_field_value_datedao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_Value_DateDao.class.php',
            'tracker_formelement_field_value_filedao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_Value_FileDao.class.php',
            'tracker_formelement_field_value_floatdao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_Value_FloatDao.class.php',
            'tracker_formelement_field_value_integerdao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_Value_IntegerDao.class.php',
            'tracker_formelement_field_value_listdao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_Value_ListDao.class.php',
            'tracker_formelement_field_value_numericdao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_Value_NumericDao.class.php',
            'tracker_formelement_field_value_openlistdao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_Value_OpenListDao.class.php',
            'tracker_formelement_field_value_permissionsonartifactdao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_Value_PermissionsOnArtifactDao.class.php',
            'tracker_formelement_field_value_textdao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_Value_TextDao.class.php',
            'tracker_formelement_field_valuedao' => '/Tracker/FormElement/dao/Tracker_FormElement_Field_ValueDao.class.php',
            'tracker_formelement_fielddao' => '/Tracker/FormElement/dao/Tracker_FormElement_FieldDao.class.php',
            'tracker_formelement_fieldsetdao' => '/Tracker/FormElement/dao/Tracker_FormElement_FieldSetDao.class.php',
            'tracker_formelement_icomputevalues' => '/Tracker/FormElement/IComputeValues.class.php',
            'tracker_formelement_ihaveanid' => '/Tracker/FormElement/IHaveAnId.class.php',
            'tracker_formelement_interface' => '/Tracker/FormElement/Tracker_FormElement_Interface.class.php',
            'tracker_formelement_iprovidefactorybuttoninformation' => '/Tracker/FormElement/IProvideFactoryButtonInformation.class.php',
            'tracker_formelement_shared' => '/Tracker/FormElement/Tracker_FormElement_Shared.class.php',
            'tracker_formelement_specificpropertiesdao' => '/Tracker/FormElement/dao/Tracker_FormElement_SpecificPropertiesDao.class.php',
            'tracker_formelement_staticfield' => '/Tracker/FormElement/Tracker_FormElement_StaticField.class.php',
            'tracker_formelement_staticfield_linebreak' => '/Tracker/FormElement/Tracker_FormElement_StaticField_LineBreak.class.php',
            'tracker_formelement_staticfield_richtext' => '/Tracker/FormElement/Tracker_FormElement_StaticField_RichText.class.php',
            'tracker_formelement_staticfield_richtextdao' => '/Tracker/FormElement/dao/Tracker_FormElement_StaticField_RichTextDao.class.php',
            'tracker_formelement_staticfield_separator' => '/Tracker/FormElement/Tracker_FormElement_StaticField_Separator.class.php',
            'tracker_formelement_usable' => '/Tracker/FormElement/Tracker_FormElement_Usable.class.php',
            'tracker_formelement_view_admin' => '/Tracker/FormElement/View/Admin.class.php',
            'tracker_formelement_view_admin_container' => '/Tracker/FormElement/View/Admin/Container.class.php',
            'tracker_formelement_view_admin_createsharedvisitor' => '/Tracker/FormElement/View/Admin/CreateSharedVisitor.class.php',
            'tracker_formelement_view_admin_createvisitor' => '/Tracker/FormElement/View/Admin/CreateVisitor.class.php',
            'tracker_formelement_view_admin_field' => '/Tracker/FormElement/View/Admin/Field.class.php',
            'tracker_formelement_view_admin_field_artifactid' => '/Tracker/FormElement/View/Admin/Field/ArtifactId.class.php',
            'tracker_formelement_view_admin_field_burndown' => '/Tracker/FormElement/View/Admin/Field/Burndown.class.php',
            'tracker_formelement_view_admin_field_checkbox' => '/Tracker/FormElement/View/Admin/Field/Checkbox.class.php',
            'tracker_formelement_view_admin_field_crossreferences' => '/Tracker/FormElement/View/Admin/Field/CrossReferences.class.php',
            'tracker_formelement_view_admin_field_lastupdatedate' => '/Tracker/FormElement/View/Admin/Field/LastUpdateDate.class.php',
            'tracker_formelement_view_admin_field_list' => '/Tracker/FormElement/View/Admin/Field/List.class.php',
            'tracker_formelement_view_admin_field_multiselectbox' => '/Tracker/FormElement/View/Admin/Field/MultiSelectbox.class.php',
            'tracker_formelement_view_admin_field_permissionsonartifact' => '/Tracker/FormElement/View/Admin/Field/PermissionsOnArtifact.class.php',
            'tracker_formelement_view_admin_field_selectbox' => '/Tracker/FormElement/View/Admin/Field/Selectbox.class.php',
            'tracker_formelement_view_admin_field_submittedby' => '/Tracker/FormElement/View/Admin/Field/SubmittedBy.class.php',
            'tracker_formelement_view_admin_field_submittedon' => '/Tracker/FormElement/View/Admin/Field/SubmittedOn.class.php',
            'tracker_formelement_view_admin_shared' => '/Tracker/FormElement/View/Admin/Shared.class.php',
            'tracker_formelement_view_admin_staticfield' => '/Tracker/FormElement/View/Admin/StaticField.class.php',
            'tracker_formelement_view_admin_staticfield_linebreak' => '/Tracker/FormElement/View/Admin/StaticField/LineBreak.class.php',
            'tracker_formelement_view_admin_staticfield_separator' => '/Tracker/FormElement/View/Admin/StaticField/Separator.class.php',
            'tracker_formelement_view_admin_updatesharedvisitor' => '/Tracker/FormElement/View/Admin/UpdateSharedVisitor.class.php',
            'tracker_formelement_view_admin_updatevisitor' => '/Tracker/FormElement/View/Admin/UpdateVisitor.class.php',
            'tracker_formelement_view_admin_visitor' => '/Tracker/FormElement/View/Admin/Visitor.class.php',
            'tracker_formelement_visitor' => '/Tracker/FormElement/Tracker_FormElement_Visitor.class.php',
            'tracker_formelementfactory' => '/Tracker/FormElement/Tracker_FormElementFactory.class.php',
            'tracker_globalnotification' => '/Tracker/Tracker_GlobalNotification.class.php',
            'tracker_globalnotificationdao' => '/Tracker/dao/Tracker_GlobalNotificationDao.class.php',
            'tracker_hierarchy' => '/Tracker/Hierarchy/Hierarchy.class.php',
            'tracker_hierarchy_controller' => '/Tracker/Hierarchy/Controller.class.php',
            'tracker_hierarchy_cyclichierarchyexception' => '/Tracker/Hierarchy/CyclicHierarchyException.class.php',
            'tracker_hierarchy_dao' => '/Tracker/Hierarchy/Dao.class.php',
            'tracker_hierarchy_hierarchicaltracker' => '/Tracker/Hierarchy/HierarchicalTracker.class.php',
            'tracker_hierarchy_hierarchicaltrackerfactory' => '/Tracker/Hierarchy/HierarchicalTrackerFactory.class.php',
            'tracker_hierarchy_notinhierarchyexception' => '/Tracker/Hierarchy/NotInHierarchyException.class.php',
            'tracker_hierarchy_presenter' => '/Tracker/Hierarchy/Presenter.class.php',
            'tracker_hierarchy_sorter' => '/Tracker/Hierarchy/Sorter.class.php',
            'tracker_hierarchyfactory' => '/Tracker/Hierarchy/HierarchyFactory.class.php',
            'tracker_history' => '/Tracker/Tracker_History.class.php',
            'tracker_historydao' => '/Tracker/dao/Tracker_HistoryDao.class.php',
            'tracker_homenavpresenter' => '/Tracker/HomeNavPresenter.class.php',
            'tracker_idisplaytrackerlayout' => '/Tracker/IDisplayTrackerLayout.class.php',
            'tracker_ifetchtrackerswitcher' => '/Tracker/IFetchTrackerSwitcher.class.php',
            'tracker_import' => '/Tracker/Tracker_Import.class.php',
            'tracker_migration_v3' => '/Tracker/Migration/V3.class.php',
            'tracker_migration_v3_attachmentfielddao' => '/Tracker/Migration/V3/AttachmentFieldDao.class.php',
            'tracker_migration_v3_canneddao' => '/Tracker/Migration/V3/CannedDao.class.php',
            'tracker_migration_v3_ccfielddao' => '/Tracker/Migration/V3/CcFieldDao.class.php',
            'tracker_migration_v3_columnsdao' => '/Tracker/Migration/V3/ColumnsDao.class.php',
            'tracker_migration_v3_dao' => '/Tracker/Migration/V3/Dao.class.php',
            'tracker_migration_v3_fielddependenciesdao' => '/Tracker/Migration/V3/FieldDependenciesDao.class.php',
            'tracker_migration_v3_fieldpermsdao' => '/Tracker/Migration/V3/FieldPermsDao.class.php',
            'tracker_migration_v3_fieldsdao' => '/Tracker/Migration/V3/FieldsDao.class.php',
            'tracker_migration_v3_fieldsdefaultvaluesdao' => '/Tracker/Migration/V3/FieldsDefaultValuesDao.class.php',
            'tracker_migration_v3_fieldsetsdao' => '/Tracker/Migration/V3/FieldsetsDao.class.php',
            'tracker_migration_v3_permissionsonartifactfielddao' => '/Tracker/Migration/V3/PermissionsOnArtifactFieldDao.class.php',
            'tracker_migration_v3_referencefielddao' => '/Tracker/Migration/V3/ReferenceFieldDao.class.php',
            'tracker_migration_v3_renderersgraphdao' => '/Tracker/Migration/V3/RenderersGraphDao.class.php',
            'tracker_migration_v3_rendererstabledao' => '/Tracker/Migration/V3/RenderersTableDao.class.php',
            'tracker_migration_v3_reportsdao' => '/Tracker/Migration/V3/ReportsDao.class.php',
            'tracker_migration_v3_semanticdao' => '/Tracker/Migration/V3/SemanticDao.class.php',
            'tracker_nochangeexception' => '/Tracker/NoChangeException.class.php',
            'tracker_nomachingresourceexception' => '/Tracker/Tracker_NoMachingResourceException.class.php',
            'tracker_notificationdao' => '/Tracker/dao/Tracker_NotificationDao.class.php',
            'tracker_notificationsmanager' => '/Tracker/Tracker_NotificationsManager.class.php',
            'tracker_permdao' => '/Tracker/dao/Tracker_PermDao.class.php',
            'tracker_report' => '/Tracker/Report/Tracker_Report.class.php',
            'tracker_report_criteria' => '/Tracker/Report/Tracker_Report_Criteria.class.php',
            'tracker_report_criteria_alphanum_valuedao' => '/Tracker/Report/dao/Tracker_Report_Criteria_Alphanum_ValueDao.class.php',
            'tracker_report_criteria_artifactlink_valuedao' => '/Tracker/Report/dao/Tracker_Report_Criteria_ArtifactLink_ValueDao.class.php',
            'tracker_report_criteria_date_valuedao' => '/Tracker/Report/dao/Tracker_Report_Criteria_Date_ValueDao.class.php',
            'tracker_report_criteria_file_valuedao' => '/Tracker/Report/dao/Tracker_Report_Criteria_File_ValueDao.class.php',
            'tracker_report_criteria_float_valuedao' => '/Tracker/Report/dao/Tracker_Report_Criteria_Float_ValueDao.class.php',
            'tracker_report_criteria_int_valuedao' => '/Tracker/Report/dao/Tracker_Report_Criteria_Int_ValueDao.class.php',
            'tracker_report_criteria_list_valuedao' => '/Tracker/Report/dao/Tracker_Report_Criteria_List_ValueDao.class.php',
            'tracker_report_criteria_openlist_valuedao' => '/Tracker/Report/dao/Tracker_Report_Criteria_OpenList_ValueDao.class.php',
            'tracker_report_criteria_permissionsonartifact_valuedao' => '/Tracker/Report/dao/Tracker_Report_Criteria_PermissionsOnArtifact_ValueDao.class.php',
            'tracker_report_criteria_text_valuedao' => '/Tracker/Report/dao/Tracker_Report_Criteria_Text_ValueDao.class.php',
            'tracker_report_criteria_valuedao' => '/Tracker/Report/dao/Tracker_Report_Criteria_ValueDao.class.php',
            'tracker_report_criteriadao' => '/Tracker/Report/dao/Tracker_Report_CriteriaDao.class.php',
            'tracker_report_criteriafactory' => '/Tracker/Report/Tracker_Report_CriteriaFactory.class.php',
            'tracker_report_field' => '/Tracker/Tracker_Report_Field.class.php',
            'tracker_report_renderer' => '/Tracker/Report/Tracker_Report_Renderer.class.php',
            'tracker_report_renderer_artifactlinkable' => '/Tracker/Report/Tracker_Report_Renderer_ArtifactLinkable_Interface.class.php',
            'tracker_report_renderer_table' => '/Tracker/Report/Tracker_Report_Renderer_Table.class.php',
            'tracker_report_renderer_table_columnsdao' => '/Tracker/Report/dao/Tracker_Report_Renderer_Table_ColumnsDao.class.php',
            'tracker_report_renderer_table_functionsaggregatesdao' => '/Tracker/Report/dao/Tracker_Report_Renderer_Table_FunctionsAggregatesDao.class.php',
            'tracker_report_renderer_table_sortdao' => '/Tracker/Report/dao/Tracker_Report_Renderer_Table_SortDao.class.php',
            'tracker_report_renderer_tabledao' => '/Tracker/Report/dao/Tracker_Report_Renderer_TableDao.class.php',
            'tracker_report_rendererdao' => '/Tracker/Report/dao/Tracker_Report_RendererDao.class.php',
            'tracker_report_rendererfactory' => '/Tracker/Report/Tracker_Report_RendererFactory.class.php',
            'tracker_report_session' => '/Tracker/Report/Tracker_Report_Session.class.php',
            'tracker_report_soap' => '/Tracker/Report/Tracker_Report_SOAP.class.php',
            'tracker_reportdao' => '/Tracker/Report/dao/Tracker_ReportDao.class.php',
            'tracker_reportfactory' => '/Tracker/Report/Tracker_ReportFactory.class.php',
            'tracker_resourcedoesntexistexception' => '/Tracker/Tracker_ResourceDoesntExistException.class.php',
            'tracker_rule' => '/Tracker/Rule/Tracker_Rule.class.php',
            'tracker_rule_date' => '/Tracker/Rule/Date.class.php',
            'tracker_rule_date_dao' => '/Tracker/Rule/Date/Dao.class.php',
            'tracker_rule_date_factory' => '/Tracker/Rule/Date/Factory.class.php',
            'tracker_rule_date_invalidcomparatorexception' => '/Tracker/Rule/Date/InvalidComparatorException.class.php',
            'tracker_rule_date_missingcomparatorexception' => '/Tracker/Rule/Date/MissingComparatorException.class.php',
            'tracker_rule_list' => '/Tracker/Rule/List.class.php',
            'tracker_rule_list_dao' => '/Tracker/Rule/List/Dao.class.php',
            'tracker_rule_list_factory' => '/Tracker/Rule/List/Factory.class.php',
            'tracker_rule_list_view' => '/Tracker/Rule/List/View.class.php',
            'tracker_ruledao' => '/Tracker/Rule/dao/Tracker_RuleDao.class.php',
            'tracker_rulefactory' => '/Tracker/Rule/Tracker_RuleFactory.class.php',
            'tracker_rulesmanager' => '/Tracker/Rule/Tracker_RulesManager.class.php',
            'tracker_semantic' => '/Tracker/Semantic/Tracker_Semantic.class.php',
            'tracker_semantic_contributor' => '/Tracker/Semantic/Tracker_Semantic_Contributor.class.php',
            'tracker_semantic_contributordao' => '/Tracker/Semantic/dao/Tracker_Semantic_ContributorDao.class.php',
            'tracker_semantic_contributorfactory' => '/Tracker/Semantic/Tracker_Semantic_ContributorFactory.class.php',
            'tracker_semantic_iretrievesemantic' => '/Tracker/Semantic/IRetrieveSemantic.class.php',
            'tracker_semantic_status' => '/Tracker/Semantic/Tracker_Semantic_Status.class.php',
            'tracker_semantic_statusdao' => '/Tracker/Semantic/dao/Tracker_Semantic_StatusDao.class.php',
            'tracker_semantic_statusfactory' => '/Tracker/Semantic/Tracker_Semantic_StatusFactory.class.php',
            'tracker_semantic_title' => '/Tracker/Semantic/Tracker_Semantic_Title.class.php',
            'tracker_semantic_titledao' => '/Tracker/Semantic/dao/Tracker_Semantic_TitleDao.class.php',
            'tracker_semantic_titlefactory' => '/Tracker/Semantic/Tracker_Semantic_TitleFactory.class.php',
            'tracker_semanticfactory' => '/Tracker/Semantic/Tracker_SemanticFactory.class.php',
            'tracker_semanticmanager' => '/Tracker/Semantic/Tracker_SemanticManager.class.php',
            'tracker_sharedformelementfactory' => '/Tracker/FormElement/Tracker_SharedFormElementFactory.class.php',
            'tracker_soap_temporaryfile' => '/Tracker/SOAP/TemporaryFile.class.php',
            'tracker_soapserver' => '/Tracker/SOAPServer.class.php',
            'tracker_tooltip' => '/Tracker/Tooltip/Tracker_Tooltip.class.php',
            'tracker_tooltipdao' => '/Tracker/Tooltip/dao/Tracker_TooltipDao.class.php',
            'tracker_tooltipfactory' => '/Tracker/Tooltip/Tracker_TooltipFactory.class.php',
            'tracker_treenode_cardpresenternode' => '/Tracker/TreeNode/CardPresenterNode.class.php',
            'tracker_url' => '/Tracker/Tracker_URL.class.php',
            'tracker_urlverification' => '/Tracker/Tracker_URLVerification.class.php',
            'tracker_valid_rule_artifactid' => '/Tracker/Tracker_Valid_Rule.class.php',
            'tracker_watcherdao' => '/Tracker/dao/Tracker_WatcherDao.class.php',
            'tracker_widget_myartifacts' => '/Tracker/Widget/Tracker_Widget_MyArtifacts.class.php',
            'tracker_widget_myrenderer' => '/Tracker/Widget/Tracker_Widget_MyRenderer.class.php',
            'tracker_widget_projectrenderer' => '/Tracker/Widget/Tracker_Widget_ProjectRenderer.class.php',
            'tracker_widget_renderer' => '/Tracker/Widget/Tracker_Widget_Renderer.class.php',
            'tracker_workflow_action' => '/workflow/Action.class.php',
            'tracker_workflow_action_rules' => '/workflow/Action/Rules.class.php',
            'tracker_workflow_action_rules_editrules' => '/workflow/Action/Rules/EditRules.class.php',
            'tracker_workflow_action_transitions' => '/workflow/Action/Transitions.class.php',
            'tracker_workflow_action_transitions_create' => '/workflow/Action/Transitions/Create.class.php',
            'tracker_workflow_action_transitions_creatematrix' => '/workflow/Action/Transitions/CreateMatrix.class.php',
            'tracker_workflow_action_transitions_defineworkflow' => '/workflow/Action/Transitions/DefineWorkflow.class.php',
            'tracker_workflow_action_transitions_delete' => '/workflow/Action/Transitions/Delete.class.php',
            'tracker_workflow_action_transitions_details' => '/workflow/Action/Transitions/Details.class.php',
            'tracker_workflow_action_transitions_edittransition' => '/workflow/Action/Transitions/EditTransition.class.php',
            'trackerdao' => '/Tracker/dao/TrackerDao.class.php',
            'trackerfactory' => '/Tracker/TrackerFactory.class.php',
            'trackermanager' => '/Tracker/TrackerManager.class.php',
            'trackerplugin' => '/trackerPlugin.class.php',
            'trackerplugindescriptor' => '/trackerPluginDescriptor.class.php',
            'trackerplugininfo' => '/trackerPluginInfo.class.php',
            'transition' => '/workflow/Transition.class.php',
            'transition_conditionmanager' => '/workflow/Transition/ConditionManager.class.php',
            'transition_postaction' => '/workflow/PostAction/Transition_PostAction.class.php',
            'transition_postaction_cibuild' => '/workflow/PostAction/CIBuild/Transition_PostAction_CIBuild.class.php',
            'transition_postaction_cibuilddao' => '/workflow/PostAction/CIBuild/Transition_PostAction_CIBuildDao.class.php',
            'transition_postaction_cibuildfactory' => '/workflow/PostAction/CIBuild/Transition_PostAction_CIBuildFactory.class.php',
            'transition_postaction_field' => '/workflow/PostAction/Field/Transition_PostAction_Field.class.php',
            'transition_postaction_field_date' => '/workflow/PostAction/Field/Transition_PostAction_Field_Date.class.php',
            'transition_postaction_field_datedao' => '/workflow/PostAction/Field/dao/Transition_PostAction_Field_DateDao.class.php',
            'transition_postaction_field_float' => '/workflow/PostAction/Field/Transition_PostAction_Field_Float.class.php',
            'transition_postaction_field_floatdao' => '/workflow/PostAction/Field/dao/Transition_PostAction_Field_FloatDao.class.php',
            'transition_postaction_field_int' => '/workflow/PostAction/Field/Transition_PostAction_Field_Int.class.php',
            'transition_postaction_field_intdao' => '/workflow/PostAction/Field/dao/Transition_PostAction_Field_IntDao.class.php',
            'transition_postaction_field_numeric' => '/workflow/PostAction/Field/Transition_PostAction_Field_Numeric.class.php',
            'transition_postaction_fielddao' => '/workflow/PostAction/Field/dao/Transition_PostAction_FieldDao.class.php',
            'transition_postaction_fieldfactory' => '/workflow/PostAction/Field/Transition_PostAction_FieldFactory.class.php',
            'transition_postaction_notfoundexception' => '/workflow/PostAction/Transition_PostAction_NotFoundException.class.php',
            'transition_postactionfactory' => '/workflow/PostAction/Transition_PostActionFactory.class.php',
            'transition_postactionmanager' => '/workflow/PostAction/Transition_PostActionManager.class.php',
            'transition_postactionsubfactories' => '/workflow/PostAction/PostActionSubFactories.class.php',
            'transition_postactionsubfactory' => '/workflow/PostAction/PostActionSubFactory.class.php',
            'transitionfactory' => '/workflow/TransitionFactory.class.php',
            'workflow' => '/workflow/Workflow.class.php',
            'workflow_dao' => '/workflow/Workflow_Dao.class.php',
            'workflow_transition_condition' => '/workflow/Transition/Condition.class.php',
            'workflow_transition_condition_fieldnotempty' => '/workflow/Transition/Condition/FieldNotEmpty.class.php',
            'workflow_transition_condition_fieldnotempty_dao' => '/workflow/Transition/Condition/FieldNotEmpty/Dao.class.php',
            'workflow_transition_condition_fieldnotempty_factory' => '/workflow/Transition/Condition/FieldNotEmpty/Factory.class.php',
            'workflow_transition_condition_permissions' => '/workflow/Transition/Condition/Permissions.class.php',
            'workflow_transition_condition_permissions_factory' => '/workflow/Transition/Condition/Permissions/Factory.class.php',
            'workflow_transition_conditionfactory' => '/workflow/Transition/ConditionFactory.class.php',
            'workflow_transition_conditionscollection' => '/workflow/Transition/ConditionsCollection.class.php',
            'workflow_transitiondao' => '/workflow/Workflow_TransitionDao.class.php',
            'workflowfactory' => '/workflow/WorkflowFactory.class.php',
            'workflowmanager' => '/workflow/WorkflowManager.class.php'
        );
    }
    $cn = strtolower($class);
    if (isset($classes[$cn])) {
        require dirname(__FILE__) . $classes[$cn];
    }
}
spl_autoload_register('autoloadb4c23defce575b26e70efe4b9b806e12');
// @codeCoverageIgnoreEnd