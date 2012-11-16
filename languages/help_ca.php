<?php // $Revision: 1.1.1.1 $
/* vim: set expandtab ts=4 sw=4 sts=4: */

/**
 * $Id: help_ca.php,v 1.1.1.1 2004/11/02 03:30:24 madbear Exp $
 * 
 * Copyright (c) 2003 by the NetOffice developers
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */
// translator(s): Sergi Nadal <sergi@espintime.net>
$help['setup_mkdirMethod'] = 'Si teniu activat el mode-segur, cal que doneu d\'alta un compte de Ftp per tal de poder crear subdirectoris amb el gestor de fitxers.';
$help['setup_notifications'] = 'Notificacions a usuaris per correu-e (assignaci� de tasques, nous missatges, canvis de tasques...)<br>Cal un smtp/sendmail v�lid.';
$help['setup_forcedlogin'] = 'Si �s fals, desactiva l\'enlla� extern a la url amb login/clau';
$help['setup_langdefault'] = 'Escolliu l\'idioma que apareixer� per defecte a l\'entrada o deixeu-lo en blanc si voleu que aquest sigui el que el navegador t� assignat per defecte.';
$help['setup_myprefix'] = 'Establiu aquest valor si teniu taules amb el mateix nom a la Base de Dades.<br><br>assignments<br>bookmarks<br>bookmarks_categories<br>calendar<br>files<br>logs<br>members<br>notes<br>notifications<br>organizations<br>phases<br>posts<br>projects<br>reports<br>sorting<br>subtasks<br>support_posts<br>support_requests<br>tasks<br>teams<br>topics<br>updates<br><br>Deixeu-ho en blanc si no voleu usar prefixos per a les taules.';
$help['setup_loginmethod'] = 'M�tode per guardar claus a la Base de Dades.<br>Establiu-ho en &quot;Crypt&quot; per tal que funcioni l\'autentificaci� CVS i la del htaccess (aix� sempre que estigui habilitada l\'autentificaci� CVS i/o htaccess).';
$help['admin_update'] = 'Respecteu estrictament l\'ordre indicat per actualitzar la vostra versi�<br>1. Editar prefer�ncies (imposici� dels nous par�metres)<br>2. Editar la Base de Dades (actualitzaci� d\'acord amb la vostra versi� anterior)';
$help['task_scope_creep'] = 'Difer�ncia en dies entre la data de finalitzaci� i la de lliurament (en negreta si �s positiva)';
$help['max_file_size'] = 'Tamany m�xim que ha de tenir un fitxer per poder-lo pujar';
$help['project_disk_space'] = 'Tamany total dels fitxers del projecte';
$help['project_scope_creep'] = 'Difer�ncia en dies entre la data de finalitzaci� i la de lliurament (en negreta si �s positiva). Total per a totes les tasques';
$help['mycompany_logo'] = 'Pugeu el logotip de l\'empresa. Apareixer� a la cap�alera, enlloc del t�tol del lloc';
$help['calendar_shortname'] = 'Etiqueta que apareixer� a la vista del calendari mensual. �s obligat�ria';
$help['user_autologout'] = 'Temps en segons per desconnectar-se en cas de no activitat. Poseu 0 per deshabilitar aquesta opci�';
$help['user_timezone'] = 'Establiu la vostra zona hor�ria GMT';
// 2.4
$help['setup_clientsfilter'] = 'Filter to see only logged user clients';
$help['setup_projectsfilter'] = 'Filter to see only the project when the user are in the team';
// 2.5
$help['setup_notificationMethod'] = 'Set method to send email notifications: with internal php mail function (need for having a smtp server or sendmail configured in the parameters of php) or with a personalized smtp server';

?>
