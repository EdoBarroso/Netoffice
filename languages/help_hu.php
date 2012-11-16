<?php // $Revision: 1.1.1.1 $
/* vim: set expandtab ts=4 sw=4 sts=4: */

/**
 * $Id: help_hu.php,v 1.1.1.1 2004/11/02 03:30:23 madbear Exp $
 * 
 * Copyright (c) 2003 by the NetOffice developers
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */
// translator(s):
$help["setup_mkdirMethod"] = "Ha a safe-mode be van kapcsolva, sz�ks�g van egy ftp hozz�f�r�sre, hogy filekezel�sre alkalmas k�nyvt�rat lehessen l�trehozni.";
$help["setup_notifications"] = "Felhaszn�l�i e-mail �rtes�t�sek (feladat-hozz�rendel�sek, �j hozz�sz�l�s, �j hozz�sz�l�s, feladat v�ltoz�s, ...)<br>Valid smtp/sendmail sz�ks�ges.";
$help["setup_forcedlogin"] = "Ha hamis, akkor ne engedd k�ls� linket felhaszn�l�n�vvel/jelsz�val az URL-ben";
$help["setup_langdefault"] = "V�laszd ki az alap�rtelmezett bejelentkez�si nyelvet, vagy hagyd �resen, hogy a b�ng�sz� detekt�lja automatikusan.";
$help["setup_myprefix"] = "�ll�tsd be ezt az �rt�ket, ha m�r van azonos nev� t�bl�d az adatb�zisban.<br><br>assignments<br>bookmarks<br>bookmarks_categories<br>calendar<br>files<br>logs<br>members<br>notes<br>notifications<br>organizations<br>phases<br>posts<br>projects<br>reports<br>sorting<br>subtasks<br>support_posts<br>support_requests<br>tasks<br>teams<br>topics<br>updates<br><br>Hagyd �resen t�bla prefix nem-haszn�lata eset�n.";
$help["setup_loginmethod"] = "Jelszavak t�rol�si met�dusa az adatb�zisban.<br>�ll�ts &quot;Crypt&quot;-re a CVS �s htaccess autentik�ci� m�k�d�s�hez (ha a CVS support �s/vagy htaccess autentik�ci� enged�lyezett).";
$help["admin_update"] = "Szigor�an tartsd be a sorrendet a verzi�friss�t�skor<br>1. Be�ll�t�sok szerkeszt�se (eg�sz�tsd ki az �j param�tereket)<br>2. Adatb�zis szerkeszt�se (friss�tsd a kor�bbi verzi�dhoz igazodva)";
$help["task_scope_creep"] = "K�l�nbs�g a hat�rid� �s a teljes�t�s d�tuma k�z�tt (f�lk�v�r, ha pozit�v)";
$help["max_file_size"] = "Maximum file m�ret felt�lt�shez";
$help["project_disk_space"] = "A projekthez tartoz� file-ok �sszm�rete";
$help["project_scope_creep"] = "K�l�nbs�g a hat�rid� �s a teljes�t�s d�tuma k�z�tt (f�lk�v�r, ha pozit�v). Az �sszes feladatra vonatkoz�an.";
$help["mycompany_logo"] = "T�lts fel v�llalatod tetsz�leges log�j�t. Megjelenik a fejl�cben. ";
$help["calendar_shortname"] = "A napt�r havi n�zet�ben megjelen� felirat. K�telez�";
$help["user_autologout"] = "Az az id�intervallum m�sodpercekben, amely ut�n aktivit�s hi�ny�ban kijelentkezteti a felhaszn�l�t. �ll�ts be 0-�t, ha ki akarod iktatni a funkci�t.";
$help["user_timezone"] = "�ll�tsd be a GMT id�z�n�t";
// 2.4
$help["setup_clientsfilter"] = "Filter to see only logged user clients";
$help["setup_projectsfilter"] = "Filter to see only the project when the user are in the team";
// 2.5
$help["setup_notificationMethod"] = "Set method to send email notifications: with internal php mail function (need for having a smtp server or sendmail configured in the parameters of php) or with a personalized smtp server";

?>
