<?php // $Revision: 1.1.1.1 $
                                                                                
/* vim: set expandtab ts=4 sw=4 sts=4: */
                                                                                
/***************************************************************************
 * $Id: lang_sv.php,v 1.1.1.1 2004/11/02 03:30:22 madbear Exp $
 *
 * Copyright (c) 2003 by the NetOffice developers
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 ***************************************************************************/

//translator(s): Patrik Pada <patrik.pada@hssmedia.fi> & Andreas Pada <apada@abo.fi>
$topicNote = array(
    1 => 'Telefonkonversation',
    2 => 'Konferensnoteringar',
    3 => 'Anteckningar'
  );
                                                                                
$phaseArraySets = array(
    #Define the names of your phase sets
    'sets' => array(1 => 'Webbsidor', 2 => 'Applikationer'),
      #List the individual items within each phase set.
      #Website Set
      1 => array(0 => 'Koncept', 1 => 'Planering', 2 => 'Utveckling',
                 3 => 'Testning', 4 => 'Lansering',  5 => 'Underh�ll'),
      #Application Set
      2 => array(0 => 'Koncept', 1 => 'Planering', 2 => 'Utveckling',
                 3 => 'Testning', 4 => 'Lansering',  5 => 'Underh�ll')
  );

$autoLogoutOptions = array(
           0 => 'Av',
         300 => '5 minuter',
         600 => '10 minuter',
         900 => '15 minuter',
        1800 => '30 minuter',
        2700 => '45 minuter',
        3600 => '60 minuter'
    );

$setCharset = 'ISO-8859-1';

$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$dayNameArray = array(1 =>'M�ndag', 2 =>'Tisdag', 3 =>'Onsdag', 4 =>'Torsdag', 5 =>'Fredag', 6 =>'L�rdag', 7 =>'S�ndag');

$monthNameArray = array(1=> 'Januari', 'Februari', 'Mars', 'April', 'Maj', 'Juni', 'Juli', 'Augusti', 'September', 'Oktober', 'November', 'December'); 

$status = array(0 => 'Klar f�r kund', 1 => 'Klar', 2 => 'Ej p�b�rjad', 3 => 'P�g�ende', 4 => 'Uppeh�ll');

$profil = array(0 => 'Administrat�r', 1 => 'Projektledare', 2 => 'Anv�ndare', 3 => 'Kund Anv�ndare', 4 => 'Av', 5 => 'Projektledare Administrat�r');

$priority = array(0 => 'Ingen', 1 => 'V�ldigt l�g', 2 => 'L�g', 3 => 'Medium', 4 => 'H�g', 5 => 'V�ldigt h�g');

$statusTopic = array(0 => 'St�ngd', 1 => '�ppen');
$statusTopicBis = array(0 => 'Ja', 1 => 'Nej');

$statusPublish = array(0 => 'Ja', 1 => 'Nej');

$statusFile = array(0 => 'Godk�nd', 1 => 'Godk�nd med �ndringar', 2 => 'F�r godk�nnande', 3 => 'Beh�ver ej godk�nnas', 4 => 'Ej godk�nd');

$phaseStatus = array(0 => 'Ej p�b�rjad', 1 => 'P�g�ende', 2 => 'Klar', 3 => 'Uppeh�ll');

$requestStatus = array(0 => 'Ny', 1 => 'P�g�ende', 2 => 'Klar');

$projectType = array(0 => 'Kostnadsfritt projekt', 1 => 'Avgiftsbelagt projekt');

$strings['please_login'] = 'V�nligen logga in';
$strings['requirements'] = 'Systembehov';
$strings['login'] = 'Logga in';
$strings['no_items'] = 'Inga h�ndelser';
$strings['logout'] = 'Logga ut';
$strings['preferences'] = 'Inst�llningar';
$strings['my_tasks'] = 'Mina uppgifter';
$strings['edit_task'] = '�ndra uppgifter';
$strings['copy_task'] = 'Kopiera uppgift';
$strings['add_task'] = 'L�gg till uppgift';
$strings['delete_tasks'] = 'Radera uppgift';
$strings['assignment_history'] = 'Delegeringar';
$strings['assigned_on'] = 'Delegerad';
$strings['assigned_by'] = 'Delegerad av';
$strings['to'] = 'Till';
$strings['comment'] = 'Kommentar';
$strings['task_assigned'] = 'Uppgiften delegerad till ';
$strings['task_unassigned'] = 'Uppgiften delegerad till Ingen (Unassigned)';
$strings['edit_multiple_tasks'] = '�ndra fler uppgifter';
$strings['tasks_selected'] = 'uppgifter valda. V�lj nytt v�rde f�r dessa uppgifter, eller v�lj [Inga �ndringar] f�r att beh�lla gamla v�rden.';
$strings['assignment_comment'] = 'Kommentar till delegeringen';
$strings['no_change'] = '[Inga �ndringar]';
$strings['my_discussions'] = 'Mina diskussioner';
$strings['discussions'] = 'Diskussioner';
$strings['delete_discussions'] = 'Radera diskussioner';
$strings['delete_discussions_note'] = 'Notera: Diskussioner kan inte �ppnas p� nytt efter att ha blivit raderade.';
$strings['topic'] = '�mne';
$strings['posts'] = 'Inl�gg';
$strings['latest_post'] = 'Senaste inl�gg';
$strings['my_reports'] = 'Mina rapporter';
$strings['reports'] = 'Rapporter';
$strings['create_report'] = 'Skapa rapport';
$strings['report_intro'] = 'Select your task reporting parameters here and save the query on the results page after running your report.';
$strings['admin_intro'] = 'Projektets inst�llningar och konfiguration.';
$strings['copy_of'] = 'Kopia av ';
$strings['add'] = 'L�gg till';
$strings['delete'] = 'Radera';
$strings['remove'] = 'Ta bort';
$strings['copy'] = 'Kopiera';
$strings['view'] = 'Visa';
$strings['edit'] = '�ndra';
$strings['update'] = 'Uppdatera';
$strings['details'] = 'Detaljer';
$strings['none'] = 'Ingen';
$strings['close'] = 'St�ng';
$strings['new'] = 'Ny';
$strings['select_all'] = 'Markera allt';
$strings['unassigned'] = 'Ej tilldelad';
$strings['administrator'] = 'Administrat�r';
$strings['my_projects'] = 'Mina projekt';
$strings['project'] = 'Projekt';
$strings['active'] = 'Aktiva';
$strings['inactive'] = 'Ej aktiv';
$strings['project_id'] = 'Projekt ID';
$strings['edit_project'] = '�ndra projekt';
$strings['copy_project'] = 'Kopiera projekt';
$strings['add_project'] = 'L�gg till projekt';
$strings['clients'] = 'Kunder';
$strings['organization'] = 'Kundorganisation';
$strings['client_projects'] = 'Kundprojekt';
$strings['client_users'] = 'Kundanv�ndare';
$strings['edit_organization'] = '�ndra kundorganisation';
$strings['add_organization'] = 'L�gg till kundorganisation';
$strings['organizations'] = 'Kundorganisationer';
$strings['info'] = 'Information';
$strings['status'] = 'Status';
$strings['owner'] = '�gare';
$strings['home'] = 'Hem';
$strings['projects'] = 'Projekt';
$strings['files'] = 'Filer';
$strings['search'] = 'S�k';
$strings['admin'] = 'Admin';
$strings['user'] = 'Anv�ndare';
$strings['project_manager'] = 'Projektledare';
$strings['due'] = 'Deadline';
$strings['task'] = 'Uppgift';
$strings['tasks'] = 'Uppgifter';
$strings['team'] = 'Arbetsgrupp';
$strings['add_team'] = 'L�gg till gruppmedlemmar';
$strings['team_members'] = 'Gruppmedlemmar';
$strings['full_name'] = 'Fullst�ndigt namn';
$strings['title'] = 'Titel';
$strings['user_name'] = 'Anv�ndarnamn';
$strings['work_phone'] = 'Telefon jobb';
$strings['priority'] = 'Prioritet';
$strings['name'] = 'Namn';
$strings['id'] = 'ID';
$strings['description'] = 'Beskrivning';
$strings['phone'] = 'Telefon';
$strings['url'] = 'URL';
$strings['address'] = 'Adress';
$strings['comments'] = 'Kommentarer';
$strings['created'] = 'Skapat';
$strings['assigned'] = 'Delegerat';
$strings['modified'] = '�ndrat';
$strings['assigned_to'] = 'Delegerat till';
$strings['due_date'] = 'Deadline datum';
$strings['estimated_time'] = 'Estimerad Tid';
$strings['actual_time'] = 'Verklig tid';
$strings['delete_following'] = 'Radera f�ljande?';
$strings['cancel'] = '�ngra';
$strings['and'] = 'och';
$strings['administration'] = 'Administration';
$strings['user_management'] = 'Hantera anv�ndare';
$strings['system_information'] = 'Systeminformation';
$strings['product_information'] = 'Produktinformation';
$strings['system_properties'] = 'Systemegenskapers';
$strings['create'] = 'Skapa';
$strings['report_save'] = 'Save this report query to your homepage so you can run the query again.';
$strings['report_name'] = 'Rapportens namn';
$strings['save'] = 'Spara';
$strings['matches'] = 'Tr�ffar';
$strings['match'] = 'Tr�ff';
$strings['report_results'] = 'Rapportens resultat';
$strings['success'] = 'Lyckades';
$strings['addition_succeeded'] = 'Inmatningen lyckades';
$strings['deletion_succeeded'] = 'Raderingen lyckades';
$strings['report_created'] = 'Skapad rapport';
$strings['deleted_reports'] = 'Raderade rapporter';
$strings['modification_succeeded'] = '�ndringen lyckades';
$strings['errors'] = 'Fel uppstod!';
$strings['blank_user'] = 'Anv�ndaren kan ej hittas.';
$strings['blank_organization'] = 'Kundorganisationen kan ej hittas.';
$strings['blank_project'] = 'Projektet kan ej hittas.';
$strings['user_profile'] = 'Anv�ndarprofil';
$strings['change_password'] = '�ndra l�senord';
$strings['change_password_user'] = '�ndra anv�ndarens l�senord.';
$strings['old_password_error'] = 'Gamla l�senordet �r fel. V�nligen fyll i ditt gamla l�senord p� nytt.';
$strings['new_password_error'] = 'De tv� l�senord du angav st�mmer inte �verens. F�nligen fyll i ditt nya l�senord p� nytt.';
$strings['notifications'] = 'Meddelanden';
$strings['change_password_intro'] = 'Ange ditt gamla l�senord samt ditt nya l�senord med bekr�ftelse.';
$strings['old_password'] = 'Gammalt l�senord';
$strings['password'] = 'L�senord';
$strings['new_password'] = 'Nytt l�senord';
$strings['confirm_password'] = 'Bekr�fta l�senord';
$strings['email'] = 'E-Post';
$strings['home_phone'] = 'Telefon hem';
$strings['mobile_phone'] = 'Telefon GSM';
$strings['fax'] = 'Fax';
$strings['permissions'] = 'Permissions';
$strings['administrator_permissions'] = 'Administrator Permissions';
$strings['project_manager_permissions'] = 'Project Manager Permissions';
$strings['user_permissions'] = 'User Permissions';
$strings['account_created'] = 'Konto skapades';
$strings['edit_user'] = '�ndra anv�ndare';
$strings['edit_user_details'] = '�ndra anv�ndarkontots detaljer.';
$strings['change_user_password'] = '�ndra anv�ndarens l�senord.';
$strings['select_permissions'] = 'V�lj tilltr�de f�r denna anv�ndare';
$strings['add_user'] = 'L�gg till anv�ndare';
$strings['enter_user_details'] = 'Ange detaljer f�r det konto som du skapar.';
$strings['enter_password'] = 'Ange anv�ndarens l�senord.';
$strings['success_logout'] = 'Du har loggat ut. Du kan logga in igen genom att ange anv�ndarnamn och l�sen nedan.';
$strings['invalid_login'] = 'Anv�ndarnamnet och/eller l�senordet �r felaktigt. V�nligen f�rs�k logga in p� nytt.';
$strings['profile'] = 'Profil';
$strings['user_details'] = 'Anv�ndarens kontodetaljer.';
$strings['edit_user_account'] = '�ndra dina kontodetaljer.';
$strings['no_permissions'] = 'Du har inte tilltr�de till denna funktion.';
$strings['discussion'] = 'Diskussion';
$strings['retired'] = 'Retired';
$strings['last_post'] = 'Senaste inl�gg';
$strings['post_reply'] = 'Skriv inl�gg';
$strings['posted_by'] = 'Skribent';
$strings['when'] = 'N�r';
$strings['post_to_discussion'] = 'Skriv inl�gg till diskussion';
$strings['message'] = 'Meddelande';
$strings['delete_reports'] = 'Radera rapporter';
$strings['delete_projects'] = 'Radera projekt';
$strings['delete_organizations'] = 'Radera kundorganisationer';
$strings['delete_organizations_note'] = 'Notera: This will delete all client users for these client organizations, and disassociate all open projects from these client organizations.';
$strings['delete_messages'] = 'Radera meddelanden';
$strings['attention'] = 'Observera';
$strings['delete_teamownermix'] = 'Raderingen lyckades, men projektets skapare kan inte raderas fr�n arbetsgruppen.';
$strings['delete_teamowner'] = 'Projektets skapare kan inte raderas fr�n arbetsgruppen.';
$strings['enter_keywords'] = 'Ange nyckelord';
$strings['search_options'] = 'Nyckelord och s�kinst�llningar';
$strings['search_note'] = 'Du m�ste ange n�got i s�kf�ltet.';
$strings['search_results'] = 'S�kresultat';
$strings['users'] = 'Anv�ndare';
$strings['search_for'] = 'S�k efter';
$strings['results_for_keywords'] = 'S�kresultat med nyckeolrd';
$strings['add_discussion'] = 'L�gg till diskussion';
$strings['delete_users'] = 'Radera anv�ndarkonto';
$strings['reassignment_user'] = 'Omdelegering av Projekt och Arbetsuppgifter';
$strings['there'] = 'Det finns';
$strings['owned_by'] = '�gs av ovanst�ende anv�ndare.';
$strings['reassign_to'] = 'F�re radering, omdelegera dessa till';
$strings['no_files'] = 'Inga filer l�nkade';
$strings['published'] = 'Publicerat';
$strings['project_site'] = 'Publicerad projektsida';
$strings['approval_tracking'] = 'Uppf�ljning av godk�nnande';
$strings['size'] = 'Storlek';
$strings['add_project_site'] = 'L�gg till publicerade projektsidan';
$strings['remove_project_site'] = 'Radera fr�n publicerade projektsidan';
$strings['more_search'] = 'Mera s�kfunktioner';
$strings['results_with'] = 'Hitta resultat med';
$strings['search_topics'] = 'S�krubriker';
$strings['search_properties'] = 'S�kfunktioner';
$strings['date_restrictions'] = 'Datumavgr�nsningar';
$strings['case_sensitive'] = 'Case Sensitive';
$strings['yes'] = 'Ja';
$strings['no'] = 'Nej';
$strings['sort_by'] = 'Sortera efter';
$strings['type'] = 'Typ';
$strings['date'] = 'Datum';
$strings['all_words'] = 'alla ord';
$strings['any_words'] = 'n�got av orden';
$strings['exact_match'] = 'exakt tr�ff';
$strings['all_dates'] = 'Alla datum';
$strings['between_dates'] = 'Mellan f�ljande datum';
$strings['all_content'] = 'Allt inneh�ll';
$strings['all_properties'] = 'Alla egenskaper';
$strings['no_results_search'] = 'S�kningen gav inga tr�ffar.';
$strings['no_results_report'] = 'Rapporten gav inga tr�ffar.';
$strings['schema_date'] = 'YYYY/MM/DD';
$strings['hours'] = 'timmar';
$strings['choice'] = 'Val';
$strings['missing_file'] = 'Fil saknas !';
$strings['project_site_deleted'] = 'Publicerade projektsidan raderades.';
$strings['add_user_project_site'] = 'Anv�ndaren har f�tt tillg�ng till den publicerade projektsidan.';
$strings['remove_user_project_site'] = 'Avn�ndarens tilltr�de har fr�ntagits.';
$strings['add_project_site_success'] = 'Till�gget till den publicerade projektsidan har lyckats.';
$strings['remove_project_site_success'] = 'Raderingen fr�n den publicerade projektsidan har lyckats.';
$strings['add_file_success'] = '1 fil har lagts till.';
$strings['delete_file_success'] = 'Filen har raderats.';
$strings['update_comment_file'] = 'Kommentar till materialet har lagts till.';
$strings['session_false'] = 'Sessionsfel';
$strings['logs'] = 'Loggar';
$strings['logout_time'] = 'Automatisk Logout';
$strings['noti_foot1'] = 'Detta meddelande genererades av NetOffice.';
$strings['noti_foot2'] = 'G� till NetOffice, bes�k:';
$strings['noti_taskassignment1'] = 'Ny arbetsuppgift:';
$strings['noti_taskassignment2'] = 'Du har blivit delegerad en arbetsuppgift:';
$strings['noti_moreinfo'] = 'F�r ytterligare information, g� till:';
$strings['noti_prioritytaskchange1'] = 'Prioritets�ndring av arbete:';
$strings['noti_prioritytaskchange2'] = 'Prioriteten p� f�ljande arbetsuppgift har �ndrats:';
$strings['noti_statustaskchange1'] = 'Arbetsuppgiftens status har �ndrats:';
$strings['noti_statustaskchange2'] = 'Status p� f�ljande arbetsuppgift har �ndrats:';
$strings['login_username'] = 'Du m�ste ange ett anv�ndarnamn.';
$strings['login_password'] = 'V�nligen ange l�senord.';
$strings['login_clientuser'] = 'Detta �r ett kundkonto. Du kan inte logga in till NetOffice med ett kundkonto.';
$strings['user_already_exists'] = 'Detta anv�ndarnamn finns redan. V�nligen v�lj ett annat anv�ndarnamn.';
$strings['noti_duedatetaskchange1'] = 'Arbetsuppgiftens deadline har �ndrats:';
$strings['noti_duedatetaskchange2'] = 'F�ljande arbetsuppgift har en ny deadline:';
$strings['company'] = 'F�retag';
$strings['show_all'] = 'Visa alla';
$strings['information'] = 'Information';
$strings['delete_message'] = 'Radera detta meddelande';
$strings['project_team'] = 'Arbetsgrupp';
$strings['document_list'] = 'Lista �ver dokument';
$strings['bulletin_board'] = 'Anslagstavla';
$strings['bulletin_board_topic'] = 'Anslagstavlerubrik';
$strings['create_topic'] = 'Skapa en ny rubrik';
$strings['topic_form'] = 'Rubrikformul�r';
$strings['enter_message'] = 'Skriv ditt meddelande';
$strings['upload_file'] = 'Ladda upp en fil';
$strings['upload_form'] = 'Uppladdningsformul�r';
$strings['upload'] = 'Ladda upp';
$strings['document'] = 'Dokument';
$strings['approval_comments'] = 'Kommentarer till godk�nnande';
$strings['client_tasks'] = 'Kundens arbetsuppgifter';
$strings['team_tasks'] = 'Arbetsgruppens uppgifter';
$strings['team_member_details'] = 'Detaljer om arbetsgruppens medlem';
$strings['client_task_details'] = 'Detaljer om kundens arbetsuppgift';
$strings['team_task_details'] = 'Detaljer om arbetsgruppens uppgifter';
$strings['language'] = 'Spr�k';
$strings['welcome'] = 'V�lkommen';
$strings['your_projectsite'] = 'till din publicerade projektsida';
$strings['contact_projectsite'] = 'Om du har fr�gor ang�ende detta extranet eller den information som h�r finns, v�nligen kontakta projektledaren';
$strings['company_details'] = 'F�retagets uppgifter';
$strings['database'] = 'S�kerhetskopiera eller �terst�ll databasen';
$strings['company_info'] = '�ndra f�retagsinfo';
$strings['create_projectsite'] = 'Skapa publicerad projektsida';
$strings['projectsite_url'] = 'Projektsidans URL';
$strings['design_template'] = 'Malldesign';
$strings['preview_design_template'] = 'F�rhandsgranska malldesignen';
$strings['delete_projectsite'] = 'Radera den publicerade projektsidan';
$strings['add_file'] = 'L�gg till fil';
$strings['linked_content'] = 'L�nkat material';
$strings['edit_file'] = '�ndra filens detaljer';
$strings['permitted_client'] = 'Till�tna kundanv�ndare';
$strings['grant_client'] = 'Ge till�telse att se publicerade projektsidan';
$strings['add_client_user'] = 'L�gg till kundanv�ndare';
$strings['edit_client_user'] = '�ndra kundanv�ndare';
$strings['client_user'] = 'Kundanv�ndare';
$strings['client_change_status'] = '�ndra ditt status nedan n�r uppgiften �r utf�rd';
$strings['project_status'] = 'Projektets status';
$strings['view_projectsite'] = 'Visa publicerade projektsidan';
$strings['enter_login'] = 'Skriv in ditt anv�ndarnamn f�r att f� ett nytt l�senord';
$strings['send'] = 'Skicka';
$strings['no_login'] = 'Anv�ndarnamnet fanns inte i databasen';
$strings['email_pwd'] = 'L�senordet skickades';
$strings['no_email'] = 'Anv�ndare utan epostkonto';
$strings['forgot_pwd'] = 'Gl�mt ditt l�senord?';
$strings['project_owner'] = 'Du kan endast g�ra �ndringar i egna projekt.';
$strings['connected'] = 'Inloggad';
$strings['session'] = 'Session';
$strings['last_visit'] = 'Senaste bes�k';
$strings['compteur'] = 'Antal';
$strings['ip'] = 'Ip';
$strings['task_owner'] = 'Du �r inte medlem i arbetsgruppen f�r detta projekt';
$strings['export'] = 'Exportera';
$strings['browse_cvs'] = 'Browse CVS';
$strings['repository'] = 'CVS Repository';
$strings['reassignment_clientuser'] = 'Omdelegering av arbetsuppgift';
$strings['organization_already_exists'] = 'Namnet �r redan i bruk. V�nligen v�lj ett annat namn.';
$strings['blank_organization_field'] = 'Du m�ste ange kundorganisationens namn.';
$strings['blank_fields'] = 'obligatoriska f�lt';
$strings['projectsite_login_fails'] = 'Anv�ndarnamn och l�senord finns inte.';
$strings['start_date'] = 'Startdatum';
$strings['completion'] = 'Klart';
$strings['update_available'] = 'En uppdatering finns!';
$strings['version_current'] = 'Du anv�nder nu version';
$strings['version_latest'] = 'Senaste version �r';
$strings['sourceforge_link'] = 'G� till projektets hemsida p� sourceforge';
$strings['demo_mode'] = 'Demo. �tg�rd ej till�ten.';
$strings['setup_erase'] = 'Radera filen setup.php!!';
$strings['no_file'] = 'Inga filer valda';
$strings['exceed_size'] = '�verskred maximalt till�tna filstorlek';
$strings['no_php'] = 'Php-filer ej till�tna';
$strings['approval_date'] = 'Datum f�r godk�nnande';
$strings['approver'] = 'Godk�nt av';
$strings['error_database'] = 'Kan ej ansluta till databasen';
$strings['error_server'] = 'Kan ej ansluta till server';
$strings['version_control'] = 'Versionkontroll';
$strings['vc_status'] = 'Status';
$strings['vc_last_in'] = 'Senast �ndrad';
$strings['ifa_comments'] = 'Kommentar till godk�nnande';
$strings['ifa_command'] = '�ndra status f�r godk�nnande';
$strings['vc_version'] = 'Version';
$strings['ifc_revisions'] = 'Inb�rdes utv�rderingar';
$strings['ifc_revision_of'] = 'Utv�rdering av version';
$strings['ifc_add_revision'] = 'L�gg till en inb�rdes utv�rdering';
$strings['ifc_update_file'] = 'Uppdatera filen';
$strings['ifc_last_date'] = 'Senaste korrigeringsdatum';
$strings['ifc_version_history'] = 'Historia';
$strings['ifc_delete_file'] = 'Delete file and all child versions & reviews';
$strings['ifc_delete_version'] = 'Radera merkerad version';
$strings['ifc_delete_review'] = 'Radera markerad utv�rdering';
$strings['ifc_no_revisions'] = 'Det finns inga omarbetade versioner av detta dokument';
$strings['unlink_files'] = 'Avl�nka filer';
$strings['remove_team'] = 'Ta bort gruppmedlemmar';
$strings['remove_team_info'] = 'Ta bort f�ljande personer fr�n arbetsgruppen?';
$strings['remove_team_client'] = 'Ta bort tilltr�de till den publicerade projektsidan';
$strings['note'] = 'Anteckning';
$strings['notes'] = 'Anteckningar';
$strings['subject'] = 'Rubrik';
$strings['delete_note'] = 'Radera anteckningar';
$strings['add_note'] = 'L�gg till anteckning';
$strings['edit_note'] = '�ndra anteckning';
$strings['version_increm'] = 'Select the version change to apply:';
$strings['url_dev'] = 'Url under utvecklingen';
$strings['url_prod'] = 'Slutlig url';
$strings['note_owner'] = 'Du kan endast �ndra egna anteckningar.';
$strings['alpha_only'] = 'Endast alfanumerisk login till�ts';
$strings['edit_notifications'] = '�ndra e-postmeddelanden';
$strings['edit_notifications_info'] = 'V�lj vilka h�ndelser du vill bli underr�ttad om per epost.';
$strings['select_deselect'] = 'Markera/Avmarkera allt';
$strings['noti_addprojectteam1'] = 'Medlem i arbetsgrupp :';
$strings['noti_addprojectteam2'] = 'Du har lagts till i f�ljande arbetsgrupp :';
$strings['noti_removeprojectteam1'] = 'Borttagen ur arbetsgrupp :';
$strings['noti_removeprojectteam2'] = 'Du har tagits bort ur f�ljande arbetsgrupp :';
$strings['noti_newpost1'] = 'Nytt inl�gg :';
$strings['noti_newpost2'] = 'Ett inl�gg har lagts till i f�ljande diskussion :';
$strings['edit_noti_taskassignment'] = 'Jag �r delegerad en ny arbetsuppgift.';
$strings['edit_noti_statustaskchange'] = 'En av mina uppgifters status �ndras.';
$strings['edit_noti_prioritytaskchange'] = 'Prioriterings�ndring till en av mina uppgifter.';
$strings['edit_noti_duedatetaskchange'] = '�ndringar i deadline f�r mina uppgifter.';
$strings['edit_noti_addprojectteam'] = 'Jag l�ggs till i en arbetsgrupp.';
$strings['edit_noti_removeprojectteam'] = 'Jag tas bort ur en arbetsgrupp.';
$strings['edit_noti_newpost'] = 'Ett nytt inl�gg l�ggs till en diskussion.';
$strings['add_optional'] = 'L�gg till en valfri';
$strings['assignment_comment_info'] = 'Kommentera delegeringen av denna uppgift';
$strings['my_notes'] = 'Mina anteckningar';
$strings['edit_settings'] = '�ndra inst�llningar';
$strings['max_upload'] = 'Max filstorlek';
$strings['project_folder_size'] = 'Projektets mappstorlek';
$strings['calendar'] = 'Kalender';
$strings['date_start'] = 'Startdatum';
$strings['date_end'] = 'Slutdatum';
$strings['time_start'] = 'Starttid';
$strings['time_end'] = 'Sluttid';
$strings['calendar_reminder'] = 'P�minnelse';
$strings['shortname'] = 'Kort namn';
$strings['calendar_recurring'] = 'H�ndelsen upprepas varje vecka.';
$strings['edit_database'] = '�ndra databasen';
$strings['noti_newtopic1'] = 'Ny diskussion :';
$strings['noti_newtopic2'] = 'En ny diskussion har lagts till f�ljande projekt :';
$strings['edit_noti_newtopic'] = 'Ny diskussionsrubrik.';
$strings['today'] = 'Idag';
$strings['previous'] = 'F�reg�ende';
$strings['next'] = 'N�sta';
$strings['help'] = 'Hj�lp';
$strings['complete_date'] = 'Fullst�ndigt datum';
$strings['scope_creep'] = 'Scope creep';
$strings['days'] = 'Dagar';
$strings['logo'] = 'Logo';
$strings['remember_password'] = 'Kom ih�g l�senord';
$strings['client_add_task_note'] = 'Notera: Den inmatade uppgiften registerades i database, men syns bara om den �r knuten till en medlem i arbetsgruppen!';
$strings['noti_clientaddtask1'] = 'Arbetsuppgift fr�n kund :';
$strings['noti_clientaddtask2'] = 'En ny uppgift har lagts till av en kundanv�ndare fr�n publicerade projektsidan :';
$strings['phase'] = 'Fas';
$strings['phases'] = 'Faser';
$strings['phase_id'] = 'Fas ID';
$strings['current_phase'] = 'P�g�ende fas(er)';
$strings['total_tasks'] = 'Alla arbetsuppgifter';
$strings['uncomplete_tasks'] = 'Of�rdiga uppgifter';
$strings['no_current_phase'] = 'Ingen fas p�g�r just nu';
$strings['true'] = 'Sant';
$strings['false'] = 'Falskt';
$strings['enable_phases'] = 'Anv�nd faser';
$strings['phase_enabled'] = 'Faser anv�nds';
$strings['order'] = 'Best�llning';
$strings['options'] = 'Egenskaper';
$strings['support'] = 'Support';
$strings['support_request'] = 'Support f�rfr�gan';
$strings['support_requests'] = 'Support f�rfr�gningar';
$strings['support_id'] = 'F�rfr�gan ID';
$strings['my_support_request'] = 'Mina supportf�rfr�gningar';
$strings['introduction'] = 'Instroduktion';
$strings['submit'] = 'Skicka';
$strings['support_management'] = 'Supportledning';
$strings['date_open'] = '�ppningsdatum';
$strings['date_close'] = 'St�ngningsdatum';
$strings['add_support_request'] = 'L�gg till supportf�rfr�gan';
$strings['add_support_response'] = 'L�gg till supportsvar';
$strings['respond'] = 'Svara';
$strings['delete_support_request'] = 'Supportf�rfr�gan raderad';
$strings['delete_request'] = 'Radera supportf�rfr�gan';
$strings['delete_support_post'] = 'Radera supportsvar';
$strings['new_requests'] = 'Nya f�rfr�gningar';
$strings['open_requests'] = '�ppna f�rfr�gningar';
$strings['closed_requests'] = 'Avslutade f�rfr�gningar';
$strings['manage_new_requests'] = 'Hantera nya f�rfr�gningar';
$strings['manage_open_requests'] = 'Hantera �ppna f�rfr�gningar';
$strings['manage_closed_requests'] = 'Hantera avslutade f�rfr�gningar';
$strings['responses'] = 'Svar';
$strings['edit_status'] = '�ndra status';
$strings['noti_support_request_new2'] = 'Du har skickat en supportf�rfr�gning ang�ende: ';
$strings['noti_support_post2'] = 'Ett svar har lagts till din supportf�rfr�gan. V�nligen se nedanst�ende detaljer.';
$strings['noti_support_status2'] = 'Din supportf�rfr�gan har uppdaterats. V�nligen se nedanst�ende detaljer.';
$strings['noti_support_team_new2'] = 'En ny supportf�rfr�gan har lagts till projektet : ';
//2.0
$strings['delete_subtasks'] = 'Ta bort underuppgift';
$strings['add_subtask'] = 'L�gg till underuppgift';
$strings['edit_subtask'] = '�ndra underuppgift';
$strings['subtask'] = 'Underuppgift';
$strings['subtasks'] = 'Underuppgifter';
$strings['show_details'] = 'Visa detaljer';
$strings['updates_task'] = 'Logg �ver uppgiftsuppdateringar';
$strings['updates_subtask'] = 'Logg �ver underuppgiftsuppdateringar';
//2.1
$strings['go_projects_site'] = 'G� till projektplatsen';
$strings['bookmark'] = 'Bokm�rke';
$strings['bookmarks'] = 'Bokm�rken';
$strings['bookmark_category'] = 'Kategori';
$strings['bookmark_category_new'] = 'Ny kategori';
$strings['bookmarks_all'] = 'Alla';
$strings['bookmarks_my'] = 'Mina bokm�rken';
$strings['my'] = 'Mina';
$strings['bookmarks_private'] = 'Privat';
$strings['shared'] = 'Utdelad';
$strings['private'] = 'Privat';
$strings['add_bookmark'] = 'L�gg till bokm�rke';
$strings['edit_bookmark'] = '�ndra bokm�rken';
$strings['delete_bookmarks'] = 'Ta bort bokm�rken';
$strings['team_subtask_details'] = 'Underuppgiftsdetaljer (grupp)';
$strings['client_subtask_details'] = 'Underuppgiftsdetaljer (kund)';
$strings['client_change_status_subtask'] = '�ndra din status nedan n�r du har avklarad denna underuppgift';
$strings['disabled_permissions'] = 'Avst�ngt konto';
$strings['user_timezone'] = 'Tidszon (GMT)';
//2.2
$strings['project_manager_administrator_permissions'] = 'Projektledar administrat�r';
$strings['bug'] = 'Feluppf�ljning';
//2.3
$strings['report'] = 'Rapport';
$strings['license'] = 'Licens';
//2.4
$strings['settings_notwritable'] = 'Kan inte skriva till Settings.php';
//2.5
$strings['name_print'] = 'Utskrivet namn';
$strings['calculation'] = 'Kalkylering';
$strings['items'] = 'Artiklar';
$strings['position'] = 'Position';
$strings['completed'] = 'Avklarat';
$strings['service'] = 'Kundtj�nst';
$strings['service_management'] = 'Kundtj�nst administration';
$strings['hourly_rate'] = 'Timl�n';
$strings['add_service'] = 'L�gg till kundtj�nst';
$strings['edit_service'] = '�ndra kundtj�nst';
$strings['delete_services'] = 'Ta bort kundtj�nster';
$strings['worked_hours'] = 'Antal arbetstimmar';
$strings["loghours"] = 'Tidsbokf�ring';
$strings["logtime"] = 'Tidpunkt';
$strings["loggedby"] = 'Skrivet av';
$strings["error_required"] = '�r obligatoriskt';
$strings["error_numerical"] = 'm�ste vara numeriskt';
$strings["hours_updated"] = 'Uppgiftstimmar uppdaterade';
$strings['add_task_time'] = 'L�gg till uppgiftstid';
$strings['edit_task_time'] = '�ndra uppgiftstid';
$strings['delete_task_time'] = 'Ta bort uppgiftstid';
$strings['task_time'] = 'Uppgiftstid';
//2.5.1
$strings["email_users"] = "Skicka E-post till anv�ndare";
$strings["email_following"] = "Skicka E-post till f�ljande";
$strings["email_sent"] = "E-post meddelande s�nt.";
$strings['all'] = 'Alla';
$strings['custom_reports'] = 'Specialrapporter';
$strings['custom_report_intro'] = 'V�lj den rapport som passar b�st baserat p� deras beskrivningar.';
$strings['completed_task_report'] = 'Avklarade uppgifter';
$strings['completed_task_report_desc'] = 'Denna rapport visar alla avklarade arbetsuppgifter under f�reg�ende m�nad.';
$strings['time_report'] = 'Tidsrapport';
$strings['time_report_desc'] = 'Denna rapport visar alla arbetstimmar som angetts per anv�ndare f�r varje projekt under f�reg�ende m�nad samt ger dig m�jlighet att exportera informationen.';
$strings['overdue_tasks'] = 'F�rsenade uppgifter';
$strings['overdue_tasks_desc'] = 'Denna rapport listar alla f�rsenade uppgifter inom alla projekt.';
$strings['project_snapshot'] = 'Projekt�versikt';
$strings['project_snapshot_desc'] = 'Denna rapport ger den inloggade anv�ndaren en �verblick �ver projektet och de tillh�rande uppgifterna.';
$strings['pending_tasks'] = 'V�ntande uppgifter';
$strings['pending_tasks_desc'] = 'Denna rapport ger en �verblick �ver de arbetsuppgifter som �r inf�rda f�r alla projekt.';
$strings['pm_report'] = 'PM Rapport';
$strings['pm_report_desc'] = 'Denna rapport visar de projekt som �r tilldelade enligt tillg�ng och de som �nnu inte �r tilldelade.';
$strings['project_phasestatus'] = 'Projektets fas';
$strings['project_phasestatus_desc'] = 'Visa enkel �versikt �ver alla aktiva projekt och deras faser';
$strings['resource_usage_detail'] = 'Denna rapport summerar den totala tiden som angetts f�r alla projekt och organisationer.';
//2.5.2
$strings['install_erase'] = 'Ta bort katalogen installation och dess inneh�ll!!';
$strings['error_phpversion'] = 'NetOffice kr�ver PHP version 4.1.0 eller nyare!';
?>