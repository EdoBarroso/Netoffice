<?php // $Revision: 1.7 $
/* vim: set expandtab ts=4 sw=4 sts=4: */

/**
 * $Id: initrequests.php,v 1.7 2004/12/22 19:40:52 madbear Exp $
 * 
 * Copyright (c) 2003 by the NetOffice developers
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */

$initrequest["sorting"] = "SELECT *
FROM " . $tableCollab["sorting"] . " sor
";

$initrequest["services"] = "SELECT *
FROM " . $tableCollab["services"] . " serv
";

$initrequest["calendar"] = "SELECT cal.*,mem.email_work
FROM " . $tableCollab["calendar"] . " cal
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = cal.owner
";

$initrequest["notes"] = "SELECT note.id, note.project, note.owner, note.topic, note.subject, note.description, note.date, note.published, mem.id, mem.login, mem.name, mem.email_work
FROM " . $tableCollab["notes"] . " note
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = note.owner
LEFT OUTER JOIN " . $tableCollab["projects"] . " pro ON pro.id = note.project
";

$initrequest["logs"] = "SELECT log.id, log.login, log.password, log.ip, log.session, log.compt, log.last_visite, log.connected, mem.profil
FROM " . $tableCollab["logs"] . " log
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.login = log.login
";

$initrequest["notifications"] = "SELECT noti.*,mem.id,mem.login,mem.name,mem.email_work,mem.organization,mem.profil
FROM " . $tableCollab["notifications"] . " noti
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = noti.member
";

$initrequest["members"] = "SELECT mem.*, org.name, log.connected
FROM " . $tableCollab["members"] . " mem
LEFT OUTER JOIN " . $tableCollab["organizations"] . " org ON org.id = mem.organization
LEFT OUTER JOIN " . $tableCollab["logs"] . " log ON log.login = mem.login
";

$initrequest["projects"] = "SELECT pro.*, org.id, org.name, mem.id, mem.login, mem.name, mem.email_work
FROM " . $tableCollab["projects"] . " pro
LEFT OUTER JOIN " . $tableCollab["organizations"] . " org ON org.id = pro.organization
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = pro.owner
";

$initrequest["files"] = "SELECT fil.*, mem.id, mem.login, mem.name, mem.email_work, mem2.id, mem2.login, mem2.name, mem2.email_work
FROM " . $tableCollab["files"] . " fil
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = fil.owner
LEFT OUTER JOIN " . $tableCollab["members"] . " mem2 ON mem2.id = fil.approver
";

$initrequest["organizations"] = "SELECT org.*,mem.id,mem.login,mem.name,mem.email_work
FROM " . $tableCollab["organizations"] . " org
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = org.owner
";

$initrequest["topics"] = "SELECT topic.id, topic.project, topic.owner, topic.subject, topic.status, topic.last_post, topic.posts, topic.published, mem.id, mem.login, mem.name, mem.email_work, pro.id, pro.name
FROM " . $tableCollab["topics"] . " topic
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = topic.owner
LEFT OUTER JOIN " . $tableCollab["projects"] . " pro ON pro.id = topic.project
";

$initrequest["posts"] = "SELECT pos.id, pos.topic, pos.member, pos.created, pos.message, mem.id, mem.login, mem.name, mem.email_work
FROM " . $tableCollab["posts"] . " pos
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = pos.member
LEFT OUTER JOIN " . $tableCollab["topics"] . " topic ON topic.id = pos.topic
";

$initrequest["assignments"] = "SELECT ass.id, ass.task, ass.owner, ass.assigned_to, ass.comments, ass.assigned, mem1.id, mem1.login, mem1.name, mem1.email_work, mem2.id, mem2.login, mem2.name, mem2.email_work
FROM " . $tableCollab["assignments"] . " ass
LEFT OUTER JOIN " . $tableCollab["members"] . " mem1 ON mem1.id = ass.owner
LEFT OUTER JOIN " . $tableCollab["members"] . " mem2 ON mem2.id = ass.assigned_to
";

$initrequest["reports"] = "SELECT *
FROM " . $tableCollab["reports"] . " rep
";

$initrequest["teams"] = "SELECT tea.id, tea.project, tea.member, tea.published, tea.authorized, mem.id, mem.login, mem.name, mem.email_work, mem.title, mem.phone_work, org.name, pro.id, pro.name, pro.priority, pro.status, pro.published, org2.name, mem2.login, mem2.email_work, org2.id, log.connected, mem.profil, mem.password
FROM " . $tableCollab["teams"] . " tea
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = tea.member
LEFT OUTER JOIN " . $tableCollab["projects"] . " pro ON pro.id = tea.project
LEFT OUTER JOIN " . $tableCollab["organizations"] . " org ON org.id = mem.organization
LEFT OUTER JOIN " . $tableCollab["organizations"] . " org2 ON org2.id = pro.organization
LEFT OUTER JOIN " . $tableCollab["members"] . " mem2 ON mem2.id = pro.owner
LEFT OUTER JOIN " . $tableCollab["logs"] . " log ON log.login = mem.login
";

$initrequest["tasks"] = "SELECT tas.*, mem.id, mem.name, mem.login, mem.email_work, mem2.id, mem2.name, mem2.login, mem2.email_work, mem.organization, pro.name, org.id
FROM " . $tableCollab["tasks"] . " tas
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = tas.assigned_to
LEFT OUTER JOIN " . $tableCollab["projects"] . " pro ON pro.id = tas.project
LEFT OUTER JOIN " . $tableCollab["members"] . " mem2 ON mem2.id = tas.owner
LEFT OUTER JOIN " . $tableCollab["organizations"] . " org ON org.id = pro.organization
";

$initrequest["tasks_time"] = "SELECT tim.*, mem.name, pro.name, pro.type, org.name, svc.name
FROM " . $tableCollab["tasks_time"] . " tim
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = tim.owner
LEFT OUTER JOIN " . $tableCollab["projects"] . " pro ON pro.id = tim.project
LEFT OUTER JOIN " . $tableCollab["organizations"] . " org ON org.id = pro.organization
LEFT OUTER JOIN " . $tableCollab["tasks"] . " tas ON tas.id = tim.task
LEFT OUTER JOIN " . $tableCollab["services"] . " svc ON svc.id = tas.service
";

$initrequest["phases"] = "SELECT pha.id, pha.project_id, pha.order_num, pha.status, pha.name, pha.date_start, pha.date_end, pha.comments
FROM " . $tableCollab["phases"] . " pha
";

$initrequest["updates"] = "SELECT upd.*, mem.id, mem.name, mem.login, mem.email_work
FROM " . $tableCollab["updates"] . " upd
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = upd.member
";

$initrequest["support_requests"] = "SELECT sr.id, sr.status, sr.member, sr.priority, sr.subject, sr.message, sr.owner, sr.date_open, sr.date_close, sr.project, pro.name, mem.name, mem.email_work
FROM " . $tableCollab["support_requests"] . " sr
LEFT OUTER JOIN " . $tableCollab["projects"] . " pro ON pro.id = sr.project
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = sr.member
";

$initrequest["support_posts"] = "SELECT sp.id, sp.request_id, sp.message, sp.date, sp.owner, sp.project, mem.name, mem.email_work
FROM " . $tableCollab["support_posts"] . " sp
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = sp.owner
";

$initrequest["bookmarks"] = "SELECT boo.*, mem.login, mem.email_work, boocat.name
FROM " . $tableCollab["bookmarks"] . " boo
LEFT OUTER JOIN " . $tableCollab["bookmarks_categories"] . " boocat ON boocat.id = boo.category
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = boo.owner
";

$initrequest["bookmarks_categories"] = "SELECT boocat.*
FROM " . $tableCollab["bookmarks_categories"] . " boocat
";

$initrequest["meetings"] = "SELECT mee.*, pro.name, org.id, mem.name, mem2.name, mem.login, mem2.login, mem.email_work, mem2.email_work
FROM " . $tableCollab["meetings"] . " mee
LEFT OUTER JOIN " . $tableCollab["projects"] . " pro ON pro.id = mee.project
LEFT OUTER JOIN " . $tableCollab["organizations"] . " org ON org.id = pro.organization
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = mee.chairman
LEFT OUTER JOIN " . $tableCollab["members"] . " mem2 ON mem2.id = mee.recorder
";

$initrequest["attendants"] = "SELECT att.*, mem.id, mem.login, mem.name, mem.email_work, mem.title, mem.phone_work, mee.id, mee.name, mee.agenda, mee.location, mee.date, mee.priority, mee.status, mee.start_time, mee.end_time, mee.published, org.name, pro.id, pro.name, pro.priority, pro.status, pro.published, org2.name, mem2.login, mem2.email_work, org2.id, log.connected, mem.profil, mem.password
FROM " . $tableCollab["attendants"] . " att
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = att.member
LEFT OUTER JOIN " . $tableCollab["meetings"] . " mee ON mee.id = att.meeting
LEFT OUTER JOIN " . $tableCollab["projects"] . " pro ON pro.id = mee.project
LEFT OUTER JOIN " . $tableCollab["organizations"] . " org ON org.id = mem.organization
LEFT OUTER JOIN " . $tableCollab["organizations"] . " org2 ON org2.id = pro.organization
LEFT OUTER JOIN " . $tableCollab["members"] . " mem2 ON mem2.id = pro.owner
LEFT OUTER JOIN " . $tableCollab["logs"] . " log ON log.login = mem.login
";

$initrequest["meetings_attachment"] = "SELECT mat.*, mem.id, mem.login, mem.name, mem.email_work, mem2.id, mem2.login, mem2.name, mem2.email_work
FROM " . $tableCollab["meetings_attachment"] . " mat
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = mat.owner
LEFT OUTER JOIN " . $tableCollab["members"] . " mem2 ON mem2.id = mat.approver
";

$initrequest["meetings_time"] = "SELECT mti.*, mem.name, mee.name, pro.name, pro.type, org.name
FROM " . $tableCollab["meetings_time"] . " mti
LEFT OUTER JOIN " . $tableCollab["members"] . " mem ON mem.id = mti.owner
LEFT OUTER JOIN " . $tableCollab["projects"] . " pro ON pro.id = mti.project
LEFT OUTER JOIN " . $tableCollab["organizations"] . " org ON org.id = pro.organization
LEFT OUTER JOIN " . $tableCollab["meetings"] . " mee ON mee.id = mti.meeting
";

$initrequest["holiday"] = "SELECT *
FROM " . $tableCollab["holiday"] . " hol
";

?>
