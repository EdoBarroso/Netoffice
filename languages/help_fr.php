<?php // $Revision: 1.1.1.1 $
/* vim: set expandtab ts=4 sw=4 sts=4: */

/**
 * $Id: help_fr.php,v 1.1.1.1 2004/11/02 03:30:23 madbear Exp $
 * 
 * Copyright (c) 2003 by the NetOffice developers
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */
// translator(s):
$help["setup_mkdirMethod"] = "If safe-mode is On, you need to set a Ftp account to be able to create folder with file management.";
$help["setup_notifications"] = "Users e-mail notifications (task assignment, new post, task changes...)<br>Valid smtp/sendmail needed.";
$help["setup_forcedlogin"] = "If false, disallow external link with login/password in url";
$help["setup_langdefault"] = "Choose language to be selected on login by default or leave blank to use auto_detect browser language.";
$help["setup_myprefix"] = "Set this value if you have tables with same name in existing database.<br><br>assignments<br>bookmarks<br>bookmarks_categories<br>calendar<br>files<br>logs<br>members<br>notes<br>notifications<br>organizations<br>phases<br>posts<br>projects<br>reports<br>sorting<br>subtasks<br>support_posts<br>support_requests<br>tasks<br>teams<br>topics<br>updates<br><br>Leave blank for not use table prefix.";
$help["setup_loginmethod"] = "Method to store passwords in database.<br>Set to &quot;Crypt&quot; in order CVS authentication and htaccess authentification to work (if CVS support and/or htaccess authentification are enabled).";
$help["admin_update"] = "Respectez l'ordre des �tapes pour mettre � jour votre version.<br>1. Editer le fichier de param�trage (pour compl�ter les nouveaux �l�ments)<br>2. Editer la base de donn�e (mise � jour en fonction de votre version pr�c�dente)";
$help["task_scope_creep"] = "Difference in days between due date and complete date (bold if positive)";
$help["max_file_size"] = "Maximum file size of a file to upload";
$help["project_disk_space"] = "Total size of files for the project";
$help["project_scope_creep"] = "Diff�rence en nombre de jours entre la date due et la date de fin effective (en gras si positif). Total pour toutes les t�ches";
$help["mycompany_logo"] = "Upload any logo of your company. Appears in header, instead of title site";
$help["calendar_shortname"] = "Label to appear in monthly calendar view. Mandatory";
$help["user_autologout"] = "Time in sec. to be disconnected after no activity. 0 to disable";
$help["user_timezone"] = "Set your GMT timezone";
// 2.4
$help["setup_clientsfilter"] = "Filter to see only logged user clients";
$help["setup_projectsfilter"] = "Filter to see only the project when the user are in the team";
// 2.5
$help["setup_notificationMethod"] = "Set method to send email notifications: with internal php mail function (need for having a smtp server or sendmail configured in the parameters of php) or with a personalized smtp server";

?>
