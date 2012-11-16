<?php // $Revision: 1.1.1.1 $
                                                                                
/* vim: set expandtab ts=4 sw=4 sts=4: */
                                                                                
/***************************************************************************
 * $Id: lang_zh.php,v 1.1.1.1 2004/11/02 03:30:22 madbear Exp $
 *
 * Copyright (c) 2003 by the NetOffice developers
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 ***************************************************************************/

//translator(s): Yanmiao Liu (yanmiao_liu(at)yahoo.com)
$topicNote = array(
    1 => '�绰�Ի�',
    2 => '���鱸ע',
    3 => 'һ�㱸ע'
  );
                                                                                
$phaseArraySets = array(
    #Define the names of your phase sets
    'sets' => array(1 => '��վ', 2 => 'Ӧ�ó���'),
      #List the individual items within each phase set.
      #Website Set
      1 => array(0 => '����', 1 => '�ƻ�', 2 => '����',
                 3 => '����', 4 => '����',  5 => 'ά��'),
      #Application Set
      2 => array(0 => '����', 1 => '�ƻ�', 2 => '����',
                 3 => '����', 4 => '����',  5 => 'ά��')
  );

$autoLogoutOptions = array(
           0 => '����',
         300 => '5 ����',
         600 => '10 ����',
         900 => '15 ����',
        1800 => '30 ����',
        2700 => '45 ����',
        3600 => '60 ����'
    );

$setCharset = 'GB2312';

$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$dayNameArray = array(1 =>'����һ', 2 =>'���ڶ�', 3 =>'������', 4 =>'������', 5 =>'������', 6 =>'������', 7 =>'������');

$monthNameArray = array(1=> 'һ��', '����', '����', '����', '����', '����', '����', '����', '����', 'ʮ��', 'ʮһ��', 'ʮ����'); 

$status = array(0 => '�ͻ����', 1 => '���', 2 => 'δ��ʼ', 3 => '����', 4 => '��ͣ');

$profil = array(0 => '����Ա', 1 => '��Ŀ����', 2 => '�û�', 3 => '�ͻ��û�', 4 => '����', 5 => '��Ŀ�������Ա');

$priority = array(0 => '��', 1 => '�ܵ�', 2 => '��', 3 => '��', 4 => '��', 5 => '�ܸ�');

$statusTopic = array(0 => '�ر�', 1 => '����');
$statusTopicBis = array(0 => '��', 1 => '��');

$statusPublish = array(0 => '��', 1 => '��');

$statusFile = array(0 => '�Ѿ��Ͽ�', 1 => '�Ͽɵ��и���', 2 => '�ȴ��Ͽ�', 3 => '�����Ͽ�', 4 => 'δ���Ͽ�');

$phaseStatus = array(0 => 'δ��ʼ', 1 => '����', 2 => '���', 3 => '��ͣ');

$requestStatus = array(0 => '�½�', 1 => '����', 2 => '���');

$projectType = array(0 => '�����Ŀ', 1 => '�շ���Ŀ');

$strings['please_login'] = '�����¼';
$strings['requirements'] = 'ϵͳ����';
$strings['login'] = '��¼';
$strings['no_items'] = '�������Ŀ��ʾ';
$strings['logout'] = '�˳�';
$strings['preferences'] = '�����趨';
$strings['my_tasks'] = '�ҵ�����';
$strings['edit_task'] = '�༭����';
$strings['copy_task'] = '��������';
$strings['add_task'] = '�������';
$strings['delete_tasks'] = 'ɾ������';
$strings['assignment_history'] = '����������ʷ��¼';
$strings['assigned_on'] = '������';
$strings['assigned_by'] = '������Ϊ';
$strings['to'] = 'ǰ��';
$strings['comment'] = '���';
$strings['task_assigned'] = '��������';
$strings['task_unassigned'] = '����δ�����䵽��Ա��δ���䣩';
$strings['edit_multiple_tasks'] = '�༭�������';
$strings['tasks_selected'] = '����ѡ����Ϊ��Щ����ѡ���µĲ���������ѡ��[�ޱ䶯]�Ա���ԭ��״̬��';
$strings['assignment_comment'] = '�������';
$strings['no_change'] = '[�ޱ䶯]';
$strings['my_discussions'] = '�ҵ�����';
$strings['discussions'] = '����';
$strings['delete_discussions'] = 'ɾ������';
$strings['delete_discussions_note'] = 'С�ģ�����һ����ɾ�������ٴδ򿪡�';
$strings['topic'] = '����';
$strings['posts'] = '����';
$strings['latest_post'] = '��������';
$strings['my_reports'] = '�ҵı���';
$strings['reports'] = '����';
$strings['create_report'] = '��������';
$strings['report_intro'] = '�ڴ�ѡ���������񱨸������������֮���ڽ��ҳ�汣��˲�ѯ��';
$strings['admin_intro'] = '��Ŀ�趨�����á�';
$strings['copy_of'] = '����';
$strings['add'] = '���';
$strings['delete'] = 'ɾ��';
$strings['remove'] = '�Ƴ�';
$strings['copy'] = '����';
$strings['view'] = '�鿴';
$strings['edit'] = '�༭';
$strings['update'] = '����';
$strings['details'] = '��ϸ';
$strings['none'] = '��';
$strings['close'] = '�ر�';
$strings['new'] = '�½�';
$strings['select_all'] = 'ѡ��ȫ��';
$strings['unassigned'] = 'δ����';
$strings['administrator'] = '����Ա';
$strings['my_projects'] = '�ҵ���Ŀ';
$strings['project'] = '��Ŀ';
$strings['active'] = '����Ծ';
$strings['inactive'] = '�ǻ�Ծ';
$strings['project_id'] = '��Ŀ���';
$strings['edit_project'] = '�༭��Ŀ';
$strings['copy_project'] = '������Ŀ';
$strings['add_project'] = '�����Ŀ';
$strings['clients'] = '�ͻ�';
$strings['organization'] = '�ͻ���֯';
$strings['client_projects'] = '�ͻ���Ŀ';
$strings['client_users'] = '�ͻ�������';
$strings['edit_organization'] = '�༭�ͻ���֯';
$strings['add_organization'] = '��ӿͻ���֯';
$strings['organizations'] = '�ͻ���֯';
$strings['info'] = '��Ϣ';
$strings['status'] = '״̬';
$strings['owner'] = '������';
$strings['home'] = '��ҳ';
$strings['projects'] = '��Ŀ';
$strings['files'] = '�ļ�';
$strings['search'] = '����';
$strings['admin'] = '����';
$strings['user'] = '�û�';
$strings['project_manager'] = '��Ŀ����';
$strings['due'] = '����';
$strings['task'] = '����';
$strings['tasks'] = '����';
$strings['team'] = '�Ŷ�';
$strings['add_team'] = '����Ŷӳ�Ա';
$strings['team_members'] = '�Ŷӳ�Ա';
$strings['full_name'] = 'ȫ��';
$strings['title'] = '�ƺ�';
$strings['user_name'] = '�û�����';
$strings['work_phone'] = '�����绰';
$strings['priority'] = '���ȼ�';
$strings['name'] = '����';
$strings['id'] = '���';
$strings['description'] = '����';
$strings['phone'] = '�绰';
$strings['url'] = '��ַ';
$strings['address'] = '��ַ';
$strings['comments'] = 'ע��';
$strings['created'] = '������';
$strings['assigned'] = '������';
$strings['modified'] = '������';
$strings['assigned_to'] = '�����';
$strings['due_date'] = '��������';
$strings['estimated_time'] = '����ʱ��';
$strings['actual_time'] = 'ʵ��ʱ��';
$strings['delete_following'] = 'ȷ��ɾ����';
$strings['cancel'] = 'ȡ��';
$strings['and'] = '��';
$strings['administration'] = '����';
$strings['user_management'] = '�û�����';
$strings['system_information'] = 'ϵͳ��Ϣ';
$strings['product_information'] = '��Ʒ��Ϣ';
$strings['system_properties'] = 'ϵͳ����';
$strings['create'] = '����';
$strings['report_save'] = '���˱����ѯ������������ҳ�Ա��´�ִ�С�';
$strings['report_name'] = '��������';
$strings['save'] = '����';
$strings['matches'] = 'ƥ��';
$strings['match'] = 'ƥ��';
$strings['report_results'] = '������';
$strings['success'] = '�ɹ�';
$strings['addition_succeeded'] = '��ӳɹ�';
$strings['deletion_succeeded'] = 'ɾ���ɹ�';
$strings['report_created'] = '�Ѵ�������';
$strings['deleted_reports'] = '��ɾ������';
$strings['modification_succeeded'] = '���ĳɹ�';
$strings['errors'] = '����';
$strings['blank_user'] = '���û������ڡ�';
$strings['blank_organization'] = '�ÿͻ���֯�����ڡ�';
$strings['blank_project'] = '����Ŀ�����ڡ�';
$strings['user_profile'] = '�û�����';
$strings['change_password'] = '��������';
$strings['change_password_user'] = '���ĸ��û������롣';
$strings['old_password_error'] = '������ľ����벻��ȷ�����������롣';
$strings['new_password_error'] = '��������������벻ƥ�䡣���������롣';
$strings['notifications'] = '֪ͨ';
$strings['change_password_intro'] = '�������ľ����룬Ȼ�����벢�ٴ�����ȷ�����������롣';
$strings['old_password'] = '������';
$strings['password'] = '����';
$strings['new_password'] = '������';
$strings['confirm_password'] = 'ȷ������';
$strings['email'] = '�����ʼ�';
$strings['home_phone'] = '��ͥ�绰';
$strings['mobile_phone'] = '�ƶ��绰';
$strings['fax'] = '����';
$strings['permissions'] = 'Ȩ��';
$strings['administrator_permissions'] = '����ԱȨ��';
$strings['project_manager_permissions'] = '��Ŀ����Ȩ��';
$strings['user_permissions'] = '��ͨ��ԱȨ��';
$strings['account_created'] = '�˺ű�����';
$strings['edit_user'] = '�༭�û�';
$strings['edit_user_details'] = '�༭��ϸ�û���Ϣ��';
$strings['change_user_password'] = '���ĸ��û������롣';
$strings['select_permissions'] = 'Ϊ���û�ѡ��ѡ��Ȩ��';
$strings['add_user'] = '����û�';
$strings['enter_user_details'] = '��������ӵ��û���ϸ��Ϣ��';
$strings['enter_password'] = '������û������롣';
$strings['success_logout'] = '���Ѿ��ɹ��˳���������ͨ�������¼�����������µ�¼ϵͳ��';
$strings['invalid_login'] = '������ĵ�¼������������������������ĵ�¼��Ϣ��';
$strings['profile'] = '����';
$strings['user_details'] = '��ϸ�û���Ϣ��';
$strings['edit_user_account'] = '�༭�����û���Ϣ��';
$strings['no_permissions'] = '��û���㹻��Ȩ����ɴ˲�����';
$strings['discussion'] = '����';
$strings['retired'] = '����';
$strings['last_post'] = '�������';
$strings['post_reply'] = '�����ظ�';
$strings['posted_by'] = '������Ϊ';
$strings['when'] = '��ʱ';
$strings['post_to_discussion'] = '����������';
$strings['message'] = '��Ϣ';
$strings['delete_reports'] = 'ɾ������';
$strings['delete_projects'] = 'ɾ����Ŀ';
$strings['delete_organizations'] = 'ɾ���ͻ���֯';
$strings['delete_organizations_note'] = 'С�ģ�������Щ�ͻ���֯�Ŀͻ��������ʺŽ�����ɾ����ͬʱ������Щ�ͻ���֯����ĿҲ����ȡ��������';
$strings['delete_messages'] = 'ɾ����Ϣ';
$strings['attention'] = 'ע��';
$strings['delete_teamownermix'] = 'ɾ���ɹ���������Ŀӵ���߲��ܴ���Ŀ��ɾ����';
$strings['delete_teamowner'] = '�����ܽ���Ŀӵ���ߴ���Ŀ��ɾ����';
$strings['enter_keywords'] = '����ؼ���';
$strings['search_options'] = '�ؼ��ֺ���������';
$strings['search_note'] = '��������д������������';
$strings['search_results'] = '�������';
$strings['users'] = '�û�';
$strings['search_for'] = '����';
$strings['results_for_keywords'] = '���ݹؼ����������';
$strings['add_discussion'] = '�������';
$strings['delete_users'] = 'ɾ���û��˺�';
$strings['reassignment_user'] = '��Ŀ����������·���';
$strings['there'] = '����';
$strings['owned_by'] = '�������û�ӵ�С�';
$strings['reassign_to'] = '��ɾ���û�֮ǰ������Щί�ɸ�';
$strings['no_files'] = '�޹����ļ�';
$strings['published'] = '����';
$strings['project_site'] = '��Ŀ��վ';
$strings['approval_tracking'] = '�Ͽ�׷��';
$strings['size'] = '��С';
$strings['add_project_site'] = '��ӵ���Ŀ��վ';
$strings['remove_project_site'] = '����Ŀ��վ��ɾ��';
$strings['more_search'] = '��������ѡ��';
$strings['results_with'] = '���ҵ����';
$strings['search_topics'] = '��������';
$strings['search_properties'] = '��������';
$strings['date_restrictions'] = '��������';
$strings['case_sensitive'] = '��Сд����';
$strings['yes'] = '��';
$strings['no'] = '��';
$strings['sort_by'] = '�����׼Ϊ';
$strings['type'] = '����';
$strings['date'] = '����';
$strings['all_words'] = '���е���';
$strings['any_words'] = '�κε���';
$strings['exact_match'] = 'ȷ��ƥ��';
$strings['all_dates'] = '����ʱ��';
$strings['between_dates'] = '��������';
$strings['all_content'] = '��������';
$strings['all_properties'] = '��������';
$strings['no_results_search'] = '������δ�����κν����';
$strings['no_results_report'] = '�ñ���δ�����κν����';
$strings['schema_date'] = 'YYYY/MM/DD';
$strings['hours'] = 'Сʱ';
$strings['choice'] = 'ѡ��';
$strings['missing_file'] = 'ȱ���ļ���';
$strings['project_site_deleted'] = '��Ŀ��վ���ɹ�ɾ����';
$strings['add_user_project_site'] = '���û��ѱ��ɹ�����Ȩ���Է�����Ŀ��վ��';
$strings['remove_user_project_site'] = '�û�Ȩ���ѱ��ɹ�ɾ����';
$strings['add_project_site_success'] = '������Ŀ��վ��������ӳɹ���';
$strings['remove_project_site_success'] = '������Ŀ��վ������ɾ���ɹ���';
$strings['add_file_success'] = '����һ���ĵ���';
$strings['delete_file_success'] = 'ɾ���ļ��ɹ���';
$strings['update_comment_file'] = '�ļ������Ѿ��ɹ����¡�';
$strings['session_false'] = '�Ự����';
$strings['logs'] = 'ϵͳ��־';
$strings['logout_time'] = '�Զ��˳�';
$strings['noti_foot1'] = '��֪ͨ�� NetOffice ���ɡ�';
$strings['noti_foot2'] = '�鿴���� NetOffice ��ҳ������ʣ�';
$strings['noti_taskassignment1'] = '������';
$strings['noti_taskassignment2'] = 'һ�����񱻷��������';
$strings['noti_moreinfo'] = '��ø�����Ϣ������ʣ�';
$strings['noti_prioritytaskchange1'] = '�������ȼ����ģ�';
$strings['noti_prioritytaskchange2'] = '������������ȼ��Ѿ������ģ�';
$strings['noti_statustaskchange1'] = '����״̬���ģ�';
$strings['noti_statustaskchange2'] = '���������״̬�Ѿ������ģ�';
$strings['login_username'] = '����������һ���û�����';
$strings['login_password'] = '���������롣';
$strings['login_clientuser'] = '�������Կͻ���������ݵ�¼���������Կͻ���������ݽ��� NetOffice ϵͳ��';
$strings['user_already_exists'] = '�Ѿ���ͬ���û����ڡ�����ݸ��û�����������ѡ���¼����';
$strings['noti_duedatetaskchange1'] = '������ʱ����ģ�';
$strings['noti_duedatetaskchange2'] = '��������ĵ���ʱ���Ѿ������ģ�';
$strings['company'] = '��˾';
$strings['show_all'] = '��ʾȫ��';
$strings['information'] = '��Ϣ';
$strings['delete_message'] = 'ɾ��������Ϣ';
$strings['project_team'] = '��Ŀ�Ŷ�';
$strings['document_list'] = '�ĵ��б�';
$strings['bulletin_board'] = '�����';
$strings['bulletin_board_topic'] = '����廰��';
$strings['create_topic'] = '�����»���';
$strings['topic_form'] = '�����';
$strings['enter_message'] = '����������Ϣ';
$strings['upload_file'] = '�ϴ��ļ�';
$strings['upload_form'] = '�ϴ���';
$strings['upload'] = '�ϴ�';
$strings['document'] = '�ĵ�';
$strings['approval_comments'] = '���Ͽɵ����';
$strings['client_tasks'] = '�ͻ�����';
$strings['team_tasks'] = '�Ŷ�����';
$strings['team_member_details'] = '��ϸ��Ŀ�Ŷӳ�Ա��Ϣ';
$strings['client_task_details'] = '��ϸ�ͻ�������Ϣ';
$strings['team_task_details'] = '��ϸ�Ŷ�������Ϣ';
$strings['language'] = '����';
$strings['welcome'] = '��ӭ';
$strings['your_projectsite'] = 'ȥ��������Ŀ��վ';
$strings['contact_projectsite'] = '��������κ��й��������ϵͳ��Ϣ�����ʣ�����ϵ��Ŀ������';
$strings['company_details'] = '��ϸ��˾��Ϣ';
$strings['database'] = '���ݺͻָ����ݿ�';
$strings['company_info'] = '�༭���Ĺ�˾��Ϣ';
$strings['create_projectsite'] = '������Ŀվ��';
$strings['projectsite_url'] = '��Ŀ��վ��ַ';
$strings['design_template'] = '���ģ��';
$strings['preview_design_template'] = 'Ԥ��ģ�����';
$strings['delete_projectsite'] = 'ɾ����Ŀ��վ';
$strings['add_file'] = '����ļ�';
$strings['linked_content'] = '����ĵ�';
$strings['edit_file'] = '�༭��ϸ�ļ���Ϣ';
$strings['permitted_client'] = '����ɵĿͻ�������';
$strings['grant_client'] = '����鿴��Ŀ��վ��Ȩ��';
$strings['add_client_user'] = '��ӿͻ��û�';
$strings['edit_client_user'] = '�༭�ͻ��û�';
$strings['client_user'] = '�ͻ��û�';
$strings['client_change_status'] = '�����������֮���������״̬';
$strings['project_status'] = '��Ŀ״̬';
$strings['view_projectsite'] = '�鿴��Ŀ��վ';
$strings['enter_login'] = '�������ĵ�¼����ȡ������';
$strings['send'] = '����';
$strings['no_login'] = '���ݿ����޸õ�¼��';
$strings['email_pwd'] = '�����Ѿ�����';
$strings['no_email'] = '�޵����ʼ���ַ�û�';
$strings['forgot_pwd'] = '���������룿';
$strings['project_owner'] = '��ֻ�ܶ��Լ�����Ŀ���иĶ���';
$strings['connected'] = '������';
$strings['session'] = '�Ự';
$strings['last_visit'] = '�ϴη���';
$strings['compteur'] = '�ܼ�';
$strings['ip'] = 'IP ��ַ';
$strings['task_owner'] = '�����Ǹ���Ŀ��ĳ�Ա';
$strings['export'] = '����';
$strings['browse_cvs'] = '��� CVS';
$strings['repository'] = 'CVS �����';
$strings['reassignment_clientuser'] = '�����ٷ���';
$strings['organization_already_exists'] = '�������ѱ���ϵͳʹ�á���ʹ���������ơ�';
$strings['blank_organization_field'] = '�����������û���֯�����ơ�';
$strings['blank_fields'] = '������Ŀ';
$strings['projectsite_login_fails'] = '�û�����/����Բ���ȷ��';
$strings['start_date'] = '��ʼ����';
$strings['completion'] = '���';
$strings['update_available'] = '��������ĸ��£�';
$strings['version_current'] = '������ʹ�õİ汾��';
$strings['version_latest'] = '���°汾��';
$strings['sourceforge_link'] = '���� SourceForge �е���Ŀ��ҳ';
$strings['demo_mode'] = '��ʾģʽ��������ʵ�ʲ�����';
$strings['setup_erase'] = 'ɾ���ļ� setup.php����';
$strings['no_file'] = '���ļ���ѡ��';
$strings['exceed_size'] = '�������������ļ�����';
$strings['no_php'] = '������ PHP �ļ�';
$strings['approval_date'] = '�Ͽ�����';
$strings['approver'] = '�Ͽ���';
$strings['error_database'] = '�������ӵ����ݿ�';
$strings['error_server'] = '�������ӵ�������';
$strings['version_control'] = '�汾����';
$strings['vc_status'] = '״̬';
$strings['vc_last_in'] = '����޸�ʱ��';
$strings['ifa_comments'] = '�Ͽ�����';
$strings['ifa_command'] = '�ı��Ͽ�״̬';
$strings['vc_version'] = '�汾';
$strings['ifc_revisions'] = '���Ӳ��а汾';
$strings['ifc_revision_of'] = '�汾����';
$strings['ifc_add_revision'] = '���Ӳ��а汾';
$strings['ifc_update_file'] = '�ļ�����';
$strings['ifc_last_date'] = '����޸�ʱ��';
$strings['ifc_version_history'] = '�汾�����ʷ';
$strings['ifc_delete_file'] = 'ɾ���ļ�����ȫ���Ӱ汾';
$strings['ifc_delete_version'] = 'ɾ��ѡ�����ļ��汾';
$strings['ifc_delete_review'] = 'ɾ��ѡ�������';
$strings['ifc_no_revisions'] = '��ǰ���ĵ�û���޶��汾';
$strings['unlink_files'] = 'ɾ���ļ�';
$strings['remove_team'] = 'ɾ���Ŷӳ�Ա';
$strings['remove_team_info'] = '����Щ��Ա���Ŷ���ɾ����';
$strings['remove_team_client'] = 'ȥ����Ŀվ��Ĳ鿴Ȩ��';
$strings['note'] = '��ע';
$strings['notes'] = '��ע';
$strings['subject'] = '����';
$strings['delete_note'] = 'ɾ����ע��¼';
$strings['add_note'] = '����һ����ע';
$strings['edit_note'] = '�༭һ����ע';
$strings['version_increm'] = 'ѡ��һ���汾�ı����Ӧ�ã�';
$strings['url_dev'] = '�����е�վ������';
$strings['url_prod'] = '����վ������';
$strings['note_owner'] = '��ֻ�ܶ��Լ����ӵı�ע�����޸ġ�';
$strings['alpha_only'] = '��¼ʱֻ������ĸ�������ַ�';
$strings['edit_notifications'] = '�༭�����ʼ�֪ͨ';
$strings['edit_notifications_info'] = 'ѡ����ϣ�����ܵ����ʼ�֪ͨ���¼���';
$strings['select_deselect'] = 'ѡ��ȫ��/ȡ��ѡ��ȫ��';
$strings['noti_addprojectteam1'] = '��ӵ�һ���Ŷӣ�';
$strings['noti_addprojectteam2'] = '���Ѿ�����ӵ��������Ŀ�Ŷ��У�';
$strings['noti_removeprojectteam1'] = '����Ŀ�Ŷ���ɾ����';
$strings['noti_removeprojectteam2'] = '���Ѿ����������Ŀ�Ŷ���ɾ����';
$strings['noti_newpost1'] = '�µ����£�';
$strings['noti_newpost2'] = 'һƪ�������Ѿ������뵽�����У�';
$strings['edit_noti_taskassignment'] = '���Ѿ���ָ����һ��������';
$strings['edit_noti_statustaskchange'] = '�ҵ�һ����������״̬�Ѿ��޸ġ�';
$strings['edit_noti_prioritytaskchange'] = '�ҵ�һ������Ľ������Ѿ��޸ġ�';
$strings['edit_noti_duedatetaskchange'] = '�ҵ�һ������ĵ���ʱ���Ѿ��޸ġ�';
$strings['edit_noti_addprojectteam'] = '�ұ���ӵ�һ���µ��Ŷ��С�';
$strings['edit_noti_removeprojectteam'] = '���Ѿ���һ����Ŀ�Ŷ���ɾ����';
$strings['edit_noti_newpost'] = 'һƪ�������Ѿ�����������������С�';
$strings['add_optional'] = '���ѡ��';
$strings['assignment_comment_info'] = 'Ϊָ�ɸ�������ӱ�ע';
$strings['my_notes'] = '�ҵı���';
$strings['edit_settings'] = '�༭����';
$strings['max_upload'] = '����ļ���С';
$strings['project_folder_size'] = '��Ŀ�ļ��д�С';
$strings['calendar'] = '����';
$strings['date_start'] = '��ʼ����';
$strings['date_end'] = '��������';
$strings['time_start'] = '��ʼʱ��';
$strings['time_end'] = '����ʱ��';
$strings['calendar_reminder'] = '����';
$strings['shortname'] = '���';
$strings['calendar_recurring'] = '�¼�����ÿ�ܵ���һ���ظ����֡�';
$strings['edit_database'] = '�༭���ݿ�';
$strings['noti_newtopic1'] = '�µ����ۣ�';
$strings['noti_newtopic2'] = '�µ����۱���ӵ����µ���Ŀ��';
$strings['edit_noti_newtopic'] = '�µ����ۻ��ⱻ������';
$strings['today'] = '����';
$strings['previous'] = '����';
$strings['next'] = '����';
$strings['help'] = '����';
$strings['complete_date'] = '�������';
$strings['scope_creep'] = 'ʱ�䷶Χ';
$strings['days'] = '��';
$strings['logo'] = '��־';
$strings['remember_password'] = '��ס����';
$strings['client_add_task_note'] = 'ע�⣺����������ѱ��������ݿ⣬��ֻ�б������ĳһ�Ŷӳ�Ա֮��Ż��ٴγ��֣�';
$strings['noti_clientaddtask1'] = '���������û���ӣ�';
$strings['noti_clientaddtask2'] = '�µ����񱻿ͻ�����Ŀ��վ��ӵ�������Ŀ��';
$strings['phase'] = '�׶�';
$strings['phases'] = '�׶�';
$strings['phase_id'] = '�׶α��';
$strings['current_phase'] = '��Ծ�Ľ׶�';
$strings['total_tasks'] = '��������';
$strings['uncomplete_tasks'] = 'δ�������';
$strings['no_current_phase'] = '�޵�ǰ��Ծ�Ľ׶�';
$strings['true'] = '��';
$strings['false'] = '��';
$strings['enable_phases'] = '����׶�';
$strings['phase_enabled'] = '�׶α�����';
$strings['order'] = '����';
$strings['options'] = 'ѡ��';
$strings['support'] = '֧��';
$strings['support_request'] = '֧������';
$strings['support_requests'] = '֧������';
$strings['support_id'] = '������';
$strings['my_support_request'] = '�ҵ�֧������';
$strings['introduction'] = '����';
$strings['submit'] = '�ύ';
$strings['support_management'] = '֧�ֹ���';
$strings['date_open'] = '��������';
$strings['date_close'] = '�ر�����';
$strings['add_support_request'] = '���֧������';
$strings['add_support_response'] = '���֧�ַ���';
$strings['respond'] = '����';
$strings['delete_support_request'] = '֧������ɾ��';
$strings['delete_request'] = 'ɾ��֧������';
$strings['delete_support_post'] = 'ɾ��֧������';
$strings['new_requests'] = '�µ�����';
$strings['open_requests'] = '��������';
$strings['closed_requests'] = '�������';
$strings['manage_new_requests'] = '����������';
$strings['manage_open_requests'] = '����������';
$strings['manage_closed_requests'] = '�����������';
$strings['responses'] = '����';
$strings['edit_status'] = '�༭״̬';
$strings['noti_support_request_new2'] = '���Ѿ�������֧�����󣬹��ڣ�';
$strings['noti_support_post2'] = '�µķ�������ӵ�����֧�������븴�����µ���ϸ��Ϣ��';
$strings['noti_support_status2'] = '����֧�����󱻸��¡��븴�����µ���ϸ��Ϣ��';
$strings['noti_support_team_new2'] = '�µ�֧��������ӵ���Ŀ��';
//2.0
$strings['delete_subtasks'] = 'ɾ��������';
$strings['add_subtask'] = '���������';
$strings['edit_subtask'] = '�༭������';
$strings['subtask'] = '������';
$strings['subtasks'] = '������';
$strings['show_details'] = '��ʾ��ϸ';
$strings['updates_task'] = '���������ʷ';
$strings['updates_subtask'] = '�����������ʷ';
//2.1
$strings['go_projects_site'] = 'ת����Ŀ��վ';
$strings['bookmark'] = '��ǩ';
$strings['bookmarks'] = '��ǩ';
$strings['bookmark_category'] = '���';
$strings['bookmark_category_new'] = '�����';
$strings['bookmarks_all'] = '����';
$strings['bookmarks_my'] = '�ҵ���ǩ';
$strings['my'] = '�ҵ�';
$strings['bookmarks_private'] = '˽��';
$strings['shared'] = '����';
$strings['private'] = '˽��';
$strings['add_bookmark'] = '�����ǩ';
$strings['edit_bookmark'] = '�༭��ǩ';
$strings['delete_bookmarks'] = 'ɾ����ǩ';
$strings['team_subtask_details'] = '�Ŷ�������ϸ��';
$strings['client_subtask_details'] = '�ͻ�������ϸ��';
$strings['client_change_status_subtask'] = '��ɴ����������ı������״̬';
$strings['disabled_permissions'] = '�����˺�';
$strings['user_timezone'] = 'ʱ�� (GMT)';
//2.2
$strings['project_manager_administrator_permissions'] = '��Ŀ�������Ա';
$strings['bug'] = 'ȱ��׷��';
//2.3
$strings['report'] = '����';
$strings['license'] = '���';
//2.4
$strings['settings_notwritable'] = 'Settings.php �ļ�����д';
//2.5
$strings['name_print'] = '��ӡ����';
$strings['calculation'] = '����';
$strings['items'] = '��Ŀ';
$strings['position'] = 'λ��';
$strings['completed'] = '���';
$strings['service'] = '����';
$strings['service_management'] = '�������';
$strings['hourly_rate'] = 'Сʱ����';
$strings['add_service'] = '��ӷ���';
$strings['edit_service'] = '�༭����';
$strings['delete_services'] = 'ɾ������';
$strings['worked_hours'] = '����Сʱ';
$strings['loghours'] = '��¼Сʱ';
$strings['logtime'] = '��¼ʱ��';
$strings['loggedby'] = '��¼��';
$strings['error_required'] = '����Ҫ';
$strings['error_numerical'] = '����������';
$strings['hours_updated'] = '����Сʱ���Ѿ�����';
$strings['add_task_time'] = '�������ʱ��';
$strings['edit_task_time'] = '�༭����ʱ��';
$strings['delete_task_time'] = 'ɾ������ʱ��';
$strings['task_time'] = '����ʱ��';
//2.5.1
$strings['email_users'] = '�����ʼ��û�';
$strings['email_following'] = '���������ʼ�';
$strings['email_sent'] = '�����ʼ��Ѿ��ɹ����͡�';
$strings['all'] = '����';
$strings['custom_reports'] = '�ͻ�����';
$strings['custom_report_intro'] = 'ѡ������Ļ��������ʺ����������������Ŀͻ����档';
$strings['completed_task_report'] = '��ɵ�����';
$strings['completed_task_report_desc'] = '�˱����ṩ�ϸ�����ɵ������б�';
$strings['time_report'] = 'ʱ�䱨��';
$strings['time_report_desc'] = '�˱����ṩ�ϸ���ÿ����Ŀ��Ա��¼��Сʱ���б����ҿ��Ե�������Ϣ��';
$strings['overdue_tasks'] = '��������';
$strings['overdue_tasks_desc'] = '�˱�����ʾ������Ŀ�е���������б�';
$strings['project_snapshot'] = '��Ŀ����';
$strings['project_snapshot_desc'] = '�˱���Ϊ��¼�û��ṩ��Ŀ��������ʱ��¼�û�����Ϊ��ӵ���ߣ��Լ�����Ŀ��ص�����';
$strings['pending_tasks'] = '��ͣ����';
$strings['pending_tasks_desc'] = '�˱����ṩ�Ѿ�������Ŀ����Ŀ�������ҵ��ͼ��';
$strings['pm_report'] = '��Ŀ������';
$strings['pm_report_desc'] = '�˱�����ʾ����Դָ�ɵ���Ŀ����Щ��û��ָ�ɵ���Ŀ��';
$strings['project_phasestatus'] = '��Ŀ�׶�״̬';
$strings['project_phasestatus_desc'] = '��ʾ���л��Ŀ�Ļ�����������׶�';
$strings['resource_usage_detail'] = '�˱����ܽ���Ŀ����֯��¼����ʱ�䡣';
//2.5.2
$strings['install_erase'] = 'ɾ����װĿ¼�������ݣ���';
$strings['error_phpversion'] = '���� PHP �汾������ڻ���� 4.1.0 �������� NetOffice��';
$strings['display_options'] = '��ʾѡ��';
$strings['member_items'] = '��Ա��Ŀ';
$strings['project_totals'] = '��Ŀ�ܺ�';
$strings['organization_totals'] = '��֯�ܺ�';
$strings['member_totals'] = '��Ա�ܺ�';
$strings['member_period_totals'] = '��Ա�ڼ��ܺ�';
// 2.5.3
$strings['project_breakdown'] = '��Ŀ����';
$strings['project_breakdown_desc'] = '��Ŀ�б�����Ŀ��ӵ���ߡ�״̬�ͻ��';
$strings['start_page'] = '��ʼ��';
$strings['task_id'] = '������';
?>
