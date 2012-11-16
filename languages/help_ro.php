<?php // $Revision: 1.1.1.1 $
/* vim: set expandtab ts=4 sw=4 sts=4: */

/**
 * $Id: help_ro.php,v 1.1.1.1 2004/11/02 03:30:23 madbear Exp $
 * 
 * Copyright (c) 2003 by the NetOffice developers
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */
// translator(s): Adi
$help["setup_mkdirMethod"] = "Daca este activat safe-mode, trebuie sa setezi un cont FTP ca sa poti crea folderul cu administrarea de fisiere.";
$help["setup_notifications"] = "Notificari prin e-mail pentru utilizatori (atribuiri de lucrari, anunturi noi, modificari de lucrari...)<br>Este necesar un SMTP/sendmail valid.";
$help["setup_forcedlogin"] = "Daca este fals, dezactiveaza linkul extern cu cont/parola in URL";
$help["setup_langdefault"] = "Alege limba care va fi selectata implicit la login, sau lasa gol pentru a detecta automat limba browserului.";
$help["setup_myprefix"] = "Seteaza aceasta valoare daca ai tabele cu acelasi nume in baza de date existenta.<br><br>assignments<br>bookmarks<br>bookmarks_categories<br>calendar<br>files<br>logs<br>members<br>notes<br>notifications<br>organizations<br>phases<br>posts<br>projects<br>reports<br>sorting<br>subtasks<br>support_posts<br>support_requests<br>tasks<br>teams<br>topics<br>updates<br><br>Lasa liber daca nu vei folosi un prefix de tabel.";
$help["setup_loginmethod"] = "Metoda de memorare a parolelor in baza de date.<br>Set to &quot;Crypt&quot; in order CVS authentication and htaccess authentification to work (if CVS support and/or htaccess authentification are enabled).";
$help["admin_update"] = "Respecta strict ordinea indicata ca sa actualizezi versiunea ta<br>1. Editeaza setarile (adauga parametrii noi)<br>2. Editeaza baza de date (actualizare in acord cu versiunea ta precedenta)";
$help["task_scope_creep"] = "Diferenta in zile dintre data de predare si data de incheiere (bold daca este pozitiva)";
$help["max_file_size"] = "Marimea maxima a fisierului pentru upload";
$help["project_disk_space"] = "Marimea totala a fisierelor pentru proiect";
$help["project_scope_creep"] = "Diferenta in zile intre data de predare si data de incheiere (bold daca e pozitiva). Total pentru toate lucrarile";
$help["mycompany_logo"] = "Upload orice sigla a firmei/institutiei tale. Apare in antet, in loc de titlul sitului";
$help["calendar_shortname"] = "Eticheta care apare in calendarul lunii. Obligatoriu";
$help["user_autologout"] = "Timp in secunde pentru a fi deconectat daca nu exista activitate. 0 pentru dezactivare";
$help["user_timezone"] = "Set your GMT timezone";
// 2.4
$help["setup_clientsfilter"] = "Filter to see only logged user clients";
$help["setup_projectsfilter"] = "Filter to see only the project when the user are in the team";
// 2.5
$help["setup_notificationMethod"] = "Set method to send email notifications: with internal php mail function (need for having a smtp server or sendmail configured in the parameters of php) or with a personalized smtp server";

?>
