<?php // $Revision: 1.1.1.1 $
/* vim: set expandtab ts=4 sw=4 sts=4: */

/**
 * $Id: help_cs-iso.php,v 1.1.1.1 2004/11/02 03:30:22 madbear Exp $
 * 
 * Copyright (c) 2003 by the NetOffice developers
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */
// translator(s):
$help['setup_mkdirMethod'] = 'Pokud je safe-mode On, mus�te pou��t Ftp ��et pro mo�nost vytv��et adres��e p�i pr�ci se soubory v PHP Collab.';
$help['setup_notifications'] = 'E-mailov� ozn�men� u�ivatel�m (p�i�azen� �kolu, nov� p��sp�vek, zm�ny �kolu...)<br>Je pot�eba spr�vn� nastavit smtp/sendmail.';
$help['setup_forcedlogin'] = 'Pokud nen� aktivn�, nejsou povoleny extern� odkazy s login/heslo v url';
$help['setup_langdefault'] = 'Vyberte jazyk, kter� bude defaultn� vybr�n p�i p�ihla�ov�n� nebo nechte pr�zdn� pro autodetekci jazyka v prohl�e�i.';
$help['setup_myprefix'] = 'Natavte tuto hodnotu, pokud m�te v datab�zi tabulku se shodn�m n�zvem.<br><br>assignments<br>bookmarks<br>bookmarks_categories<br>calendar<br>files<br>logs<br>members<br>notes<br>notifications<br>organizations<br>phases<br>posts<br>projects<br>reports<br>sorting<br>subtasks<br>support_posts<br>support_requests<br>tasks<br>teams<br>topics<br>updates<br><br>Nechte pr�zdn�, pokud nechcete pou��t prefix tabulek.';
$help['setup_loginmethod'] = 'Zp�sob ulo�en� hesla v datab�zi.<br>Set to &quot;Crypt&quot; in order CVS authentication and htaccess authentification to work (if CVS support and/or htaccess authentification are enabled).';
$help['admin_update'] = 'Respect strictly the order indicated to update your version<br>1. Upravte nastaven� (dopl�te nov� parametry)<br>2. Upravte datab�zi (aktualizace v souladu s va�� p�edchoz� verz�)';
$help['task_scope_creep'] = 'Rozd�l v dnech mezi term�nem dokon�en� a datem dokon�en� (tu�n� jestli�e je kladn�)';
$help['max_file_size'] = 'Maxim�ln� velikost souboru pro upload';
$help['project_disk_space'] = 'Celkov� velikost suobor� pro projekt';
$help['project_scope_creep'] = 'Rozd�l v dnech mezi term�nem dokon�en� a datem dokon�en� (tu�n� jestli�e je kladn�). Celkem pro v�echny �koly.';
$help['mycompany_logo'] = 'Nahrej logo va�� spole�nosti. Objev� se v z�hlav� m�sto nadpisu.';
$help['calendar_shortname'] = 'Popisek pro zobrazen� v m�s��n�m kalend��i. povinn�';
$help['user_autologout'] = '�as v sekund�ch pro automatick� odpojen� p�i ne�innosti. 0 pro deaktivaci';
$help['user_timezone'] = 'Nastavte Va�e �asov� p�smo (GMT)';
// 2.4
$help['setup_clientsfilter'] = 'Filter to see only logged user clients';
$help['setup_projectsfilter'] = 'Filter to see only the project when the user are in the team';
// 2.5
$help['setup_notificationMethod'] = 'Set method to send email notifications: with internal php mail function (need for having a smtp server or sendmail configured in the parameters of php) or with a personalized smtp server';

?>
