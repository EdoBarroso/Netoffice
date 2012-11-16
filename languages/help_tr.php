<?php // $Revision: 1.1.1.1 $
/* vim: set expandtab ts=4 sw=4 sts=4: */

/**
 * $Id: help_tr.php,v 1.1.1.1 2004/11/02 03:30:24 madbear Exp $
 * 
 * Copyright (c) 2003 by the NetOffice developers
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */
// translator(s):
$help["setup_mkdirMethod"] = "E�er g�venli-mode aktif ise [safe-mode on] Dosya y�netimi ile klas�r yaratabilmeniz i�in �nce Ftp hesab� a�man�z gereklidir.";
$help["setup_notifications"] = "Kullan�c�lara e-posta bildirimleri i�in (g�rev atamas�, yeni mesaj, g�rev de�i�iklikleri...)<br> Ge�erli smtp/sendmail gereklidir.";
$help["setup_forcedlogin"] = "E�er iptal edilmi� ise, giri� ekran� URL'sinde d�� ba�lant�lara izin vermez.";
$help["setup_langdefault"] = "Giri� ekran�nda varsay�lan dil se�imi i�in se�in veya bo� b�rakarak internet gezgininin dilinin otomatik alg�lanmas�n� kullan�n.";
$help["setup_myprefix"] = "E�er mevcut veritaban�nda ayn� isimde tablolar var ise bu de�eri kullan�n <br><br>assignments<br>bookmarks<br>bookmarks_categories<br>calendar<br>files<br>logs<br>members<br>notes<br>notifications<br>organizations<br>phases<br>posts<br>projects<br>reports<br>sorting<br>subtasks<br>support_posts<br>support_requests<br>tasks<br>teams<br>topics<br>updates<br><br>Tablo adlar�na �n ek yapmamak i�in bo� b�rak�n.";
$help["setup_loginmethod"] = "Veritaban�nda �ifre saklama y�ntemi.<br>CVS do�rulamas� ve htaccess do�rulamas�n�n �al��mas� i�in &quot;Crypt&quot; se�in (e�er CVS deste�i ve/veya htaccess do�rulamalar� aktif edilmi� ise).";
$help["admin_update"] = "S�r�m g�ncellemesi i�in belirtilen s�ralamaya kesin olarak uyun<br>1. Ayarlar� d�zenleyin (yeni parametreleri doldurun)<br>2. Veritaban�n� d�zenleyin (�nceki s�r�mdeki anla�maya uygun olarak g�ncelleyin)";
$help["task_scope_creep"] = "Beklenen biti� tarihi ile tamamlanma tarihi aras�ndaki g�n fark� (e�er s�f�rdan b�y�k ise koyu renklidir)";
$help["max_file_size"] = "Y�klenebilecek dosyan�n maksimum boyutu";
$help["project_disk_space"] = "Proje i�in toplam dosyalar�n b�y�kl���";
$help["project_scope_creep"] = "Beklenen biti� tarihi ile tamamlanma tarihi aras�ndaki g�n fark� (e�er s�f�rdan b�y�k ise koyu renklidir). B�t�n g�revler i�in toplamd�r";
$help["mycompany_logo"] = "Firman�z�n logosunu y�kleyin . Site ba�l��� yerine ba�ta g�z�k�r";
$help["calendar_shortname"] = "Ayl�k takvim g�r�nt�s�nde g�z�kecek olan yaz�. Mecburidir.";
$help["user_autologout"] = "Sistemde faaliyet olmamas� durumunda ba�lant�n�n kesilece�i saniye s�resi. �ptal etmek i�in 0 yaz�n";
$help["user_timezone"] = "GMT zaman dilimini [timezone] ayarlay�n.";
// 2.4
$help["setup_clientsfilter"] = "Filter to see only logged user clients";
$help["setup_projectsfilter"] = "Filter to see only the project when the user are in the team";
// 2.5
$help["setup_notificationMethod"] = "Set method to send email notifications: with internal php mail function (need for having a smtp server or sendmail configured in the parameters of php) or with a personalized smtp server";

?>
