<?php // $Revision: 1.1.1.1 $
/* vim: set expandtab ts=4 sw=4 sts=4: */

/**
 * $Id: help_lv.php,v 1.1.1.1 2004/11/02 03:30:23 madbear Exp $
 * 
 * Copyright (c) 2003 by the NetOffice developers
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */
// translator(s): Krisjanis Berzins <krish@ocean.lv>
$help["setup_mkdirMethod"] = "Ja \"safe mode\" re�ims Iesl�gts, jums j�uzst�da FTP konts lai var�tu veidot mapi ar failu vad�bu.";
$help["setup_notifications"] = "Lietot�ja e-pasta zi�ot�ji (uzdevumu pie��ir�ana, jauns zi�ojums, uzdevuma izmai�as...)<br>Npiecie�ams str�d�jo�s smtp/sendmail.";
$help["setup_forcedlogin"] = "Ja false, ne�aut �r�ju linku ar login/password taj�";
$help["setup_langdefault"] = "Izv�lies noklus�to valodu ieie�anai sist�m� vai atst�j Blank lai noteiktu p�rl�kprogrammas valodu ar auto_detect.";
$help["setup_myprefix"] = "Ievadiet v�rt�bu ja eksist�jo�aj� datub�z� jau ir tabulas ar ��diem nosaukumiem.<br><br>assignments<br>bookmarks<br>bookmarks_categories<br>calendar<br>files<br>logs<br>members<br>notes<br>notifications<br>organizations<br>phases<br>posts<br>projects<br>reports<br>sorting<br>subtasks<br>support_posts<br>support_requests<br>tasks<br>teams<br>topics<br>updates<br><br>Atst�jiet tuk�u lai nelietotu tabulu prefiksus.";
$help["setup_loginmethod"] = "Metode ar k�du saglab�t datub�z� paroles.<br>Uzst�d�t k� &quot;Crypt&quot; lai str�d�tu CVS auturiz�cija un htaccess autentifik�cija (ja CVS atbalsts un/vai htaccess authentifik�cija ir iesl�gta).";
$help["admin_update"] = "Strikti iev�rojiet atjaunin��anas k�rt�bu<br>1. Labot uzst�d�jumus (papildin�t jaunos parametrus)<br>2. Labot datub�zi (atjaunot atbilsot�i iepriek��j�m versij�m)";
$help["task_scope_creep"] = "Starp�ba starp termi�u un pabeig�anas datumu dien�s (bold ja pozit�vs)";
$help["max_file_size"] = "Uzl�d�jamo failu liel�kais at�autais izm�rs";
$help["project_disk_space"] = "Kop�jais projekta failu izm�rs";
$help["project_scope_creep"] = "Starp�ba starp projekta termi�u un pabeig�anas datumu dien�s (bold ja pozit�vs). Visiem uzdevumiem kop�";
$help["mycompany_logo"] = "Uzl�d�jiet komp�nijas logotipu. Ar to tiks aizvietots lapas nosaukums (\"PHPCollab\") aug�pus�.";
$help["calendar_shortname"] = "Nosaukums kuru r�d�t ikm�ne�a kalend�r�. Oblig�ts";
$help["user_autologout"] = "Laiks sekund�s, p�c kura autom�tiski iziet no sist�mas d�kst�ves. 0 lai atsl�gtu";
$help["user_timezone"] = "Uzst�diet GMT laika zonu";
// 2.4
$help["setup_clientsfilter"] = "Filtrs lai redz�tu tikai logotos klienta lietot�jus";
$help["setup_projectsfilter"] = "Filtrs lai r�d�tu tikai projektus kuru komand�s iek�auts lietot�js";
// 2.5
$help["setup_notificationMethod"] = "Set method to send email notifications: with internal php mail function (need for having a smtp server or sendmail configured in the parameters of php) or with a personalized smtp server";

?>
