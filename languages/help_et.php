<?php // $Revision: 1.1.1.1 $
/* vim: set expandtab ts=4 sw=4 sts=4: */

/**
 * $Id: help_et.php,v 1.1.1.1 2004/11/02 03:30:23 madbear Exp $
 * 
 * Copyright (c) 2003 by the NetOffice developers
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */
// translator(s): Priit Ballot <ballot@neo.ee>
$help["setup_mkdirMethod"] = "Kui safe-mode on aktiveeritud, siis pead lisama FTP konto info, kuhu s&uuml;steem saaks katalooge ning faile lisada.";
$help["setup_notifications"] = "teated kasutajate e-postile (&uuml;lesande andmine, uus postitus, &uuml;lesanne muutub...)<br>Vajalik on smtp/sendmail konfigureeerimine.";
$help["setup_forcedlogin"] = "Kui v&auml;lja l&uuml;litatud, siis &auml;ra luba sisse logimist v&auml;ljast ulnud URL-i parooli/kasutajanime kaudu.";
$help["setup_langdefault"] = "Vali logimisel vaikimisi pakutav keel v&otilde;i j&auml;ta t&uuml;hjaks, et brauseri keel automaatselt &auml;ra tuntaks.";
$help["setup_myprefix"] = "M&auml;&auml;ra see valik, kui pareguses andmebaasis on &uuml;he alloleva nimega tabel juba olemas.<br><br>assignments<br>bookmarks<br>bookmarks_categories<br>calendar<br>files<br>logs<br>members<br>notes<br>notifications<br>organizations<br>phases<br>posts<br>projects<br>reports<br>sorting<br>subtasks<br>support_posts<br>support_requests<br>tasks<br>teams<br>topics<br>updates<br><br>J&auml;ta t&uuml;hjaks, kui ei soovi tabeli nime prefiksit kasutada.";
$help["setup_loginmethod"] = "Kuidas hoida paroole andmebaasis.<br>Set to &quot;Crypt&quot; in order CVS authentication and htaccess authentification to work (if CVS support and/or htaccess authentification are enabled).";
$help["admin_update"] = "Versiooni uuendamiseks tee asju kindlasti &otilde;iges j&auml;rjekorras: <br>1. Muuda seadeid(lisa uued parameetrid)<br>2. Muuda andmebaasi(uuenda varasema versiooniga koosk&otilde;las)";
$help["task_scope_creep"] = "Erinevus planeeritud ja tegeliku valmimist�htaja vahel";
$help["max_file_size"] = "Suurim v�imalik projektiga liidetava faili suurus.";
$help["project_disk_space"] = "K�igi projektiga seotud failide maht kokku";
$help["project_scope_creep"] = "Erinevus planeeritud ja tegeliku valmimist�htaja vahel. Summa k�ikide �lesannete t�htaegade �letamisest.";
$help["mycompany_logo"] = "Saada oma firma logo, see ilmub tiitelribale.";
$help["calendar_shortname"] = "L�hike nimi, mida n�idatakse kalendri kuu vaates. Kohustuslik";
$help["user_autologout"] = "Aeg sekundites, mille jooksul teid peale viimast tegevust automaatselt v�lja logitakse.";
$help["user_timezone"] = "Set your GMT timezone";
// 2.4
$help["setup_clientsfilter"] = "Filter to see only logged user clients";
$help["setup_projectsfilter"] = "Filter to see only the project when the user are in the team";
// 2.5
$help["setup_notificationMethod"] = "Set method to send email notifications: with internal php mail function (need for having a smtp server or sendmail configured in the parameters of php) or with a personalized smtp server";

?>
