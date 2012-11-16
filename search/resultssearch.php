<?php // $Revision: 1.7 $
/* vim: set expandtab ts=4 sw=4 sts=4: */

/**
 * $Id: resultssearch.php,v 1.7 2004/12/15 19:43:37 madbear Exp $
 * 
 * Copyright (c) 2003 by the NetOffice developers
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */

$checkSession = true;
require_once("../includes/library.php");


$searchFor = urldecode($searchFor);
$searchfor = convertData($searchfor);
$searchfor = strtolower($searchfor);
$mots = split(" ", $searchfor);
$nombre_mots = count($mots);

if ($heading == "ALL") {
    $validNotes = "true";
    $validOrganizations = "true";
    $validProjects = "true";
    $validTasks = "true";
    $validTopics = "true";
    $validMembers = "true";
    $selectedAll = "selected";
} 

if ($heading == "notes") {
    $validNotes = "true";
    $selectedNotes = "selected";
} 
if ($heading == "organizations") {
    $validOrganizations = "true";
    $selectedOrganizations = "selected";
} 
if ($heading == "projects") {
    $validProjects = "true";
    $selectedProjects = "selected";
} 
if ($heading == "tasks") {
    $validTasks = "true";
    $selectedTasks = "selected";
} 
if ($heading == "discussions") {
    $validTopics = "true";
    $selectedDiscussions = "selected";
} 
if ($heading == "members") {
    $validMembers = "true";
    $selectedMembers = "selected";
} 

$searchProjects = "WHERE (pro.name like '%$mots[0]%'";
$z = 1;
while ($z < $nombre_mots) {
    $searchProjects .= " OR pro.name like '%$mots[$z]%' ";
    $z++;
} 
$searchProjects .= " OR pro.description like '%$mots[0]%'";
$y = 1;
while ($y < $nombre_mots) {
    $searchProjects .= " OR pro.description like '%$mots[$y]%' ";
    $y++;
} 

$searchProjects .= " OR org.name like '%$mots[0]%'";
$x = 1;
while ($x < $nombre_mots) {
    $searchProjects .= " OR org.name like '%$mots[$x]%' ";
    $x++;
} 
$searchProjects .= ")";

$searchTasks = "WHERE (tas.name like '%$mots[0]%'";
$z = 1;
while ($z < $nombre_mots) {
    $searchTasks .= " OR tas.name like '%$mots[$z]%' ";
    $z++;
} 
$searchTasks .= " OR tas.description like '%$mots[0]%'";
$y = 1;
while ($y < $nombre_mots) {
    $searchTasks .= " OR tas.description like '%$mots[$y]%' ";
    $y++;
} 
$searchTasks .= ")";

$searchMembers = "WHERE (mem.login like '%$mots[0]%'";
$z = 1;
while ($z < $nombre_mots) {
    $searchMembers .= " OR mem.login like '%$mots[$z]%' ";
    $z++;
} 
$searchMembers .= " OR mem.name like '%$mots[0]%'";
$y = 1;
while ($y < $nombre_mots) {
    $searchMembers .= " OR mem.name like '%$mots[$y]%' ";
    $y++;
} 

$searchOrganizations = "WHERE (org.name like '%$mots[0]%'";
$z = 1;
while ($z < $nombre_mots) {
    $searchOrganizations .= " OR org.name like '%$mots[$z]%' ";
    $z++;
} 
$searchOrganizations .= ")";

$searchTopics = "WHERE topic.subject like '%$mots[0]%'";
$z = 1;
while ($z < $nombre_mots) {
    $searchTopics .= " OR topic.subject like '%$mots[$z]%' ";
    $z++;
} 

$searchNotes = "WHERE note.subject like '%$mots[0]%'";
$z = 1;
while ($z < $nombre_mots) {
    $searchNotes .= " OR note.subject like '%$mots[$z]%' ";
    $z++;
} 
$searchNotes .= " OR note.description like '%$mots[0]%'";
$y = 1;
while ($y < $nombre_mots) {
    $searchNotes .= " OR note.description like '%$mots[$y]%' ";
    $y++;
} 


//--- header ----
$bodyCommand = "onLoad=\"document.searchForm.searchfor.focus()\"";
$pageSection = 'search';
require_once("../themes/" . THEME . "/header.php");

$breadcrumbs[]=buildLink("../search/createsearch.php?", $strings["search"], LINK_INSIDE);
$breadcrumbs[]=$strings["search_results"];




//--- content ---
$block1 = new block();
$blockPage= new block();

$block1->borne = $blockPage->returnBorne("1");
$block1->rowsLimit = "10";

$block1->sorting("projects", $sortingUser->sor_projects[0], "pro.name ASC", $sortingFields = array(0 => "pro.id", 1 => "pro.name", 2 => "pro.priority", 3 => "org.name", 4 => "pro.status", 5 => "mem.login", 6 => "pro.published"));

if ($projectsFilter == "true") {
    $tmpquery = "LEFT OUTER JOIN " . $tableCollab["teams"] . " teams ON teams.project = pro.id ";
    $tmpquery .= "$searchProjects AND teams.member = '" . $_SESSION['idSession'] . "' ORDER BY $block1->sortingValue";
} else {
    $tmpquery = "$searchProjects ORDER BY $block1->sortingValue";
} 
$comptListProjects = "0";
if ($validProjects == "true") {
    $block1->recordsTotal = compt($initrequest["projects"] . " " . $tmpquery);

    $listProjects = new request();
    $listProjects->openProjects($tmpquery, $block1->borne, $block1->rowsLimit);
    $comptListProjects = count($listProjects->pro_id); 
    // echo "$tmpquery<br>";
} 

$block2 = new block();

$block2->borne = $blockPage->returnBorne("2");
$block2->rowsLimit = "10";

$block2->sorting("home_tasks", $sortingUser->sor_home_tasks[0], "tas.name ASC", $sortingFields = array(0 => "tas.name", 1 => "tas.priority", 2 => "tas.status", 3 => "tas.due_date", 4 => "mem.login", 5 => "tas.project", 6 => "tas.published"));

if ($projectsFilter == "true") {
    $tmpquery = "LEFT OUTER JOIN " . $tableCollab["teams"] . " teams ON teams.project = pro.id ";
    $tmpquery .= "WHERE pro.status IN(0,2,3) AND teams.member = '" . $_SESSION['idSession'] . "' ORDER BY pro.id";

    $listProjectsFilter = new request();
    $listProjectsFilter->openProjects($tmpquery);
    $comptListProjectsFilter = count($listProjectsFilter->pro_id);

    if ($comptListProjectsFilter != "0") {
        for ($i = 0;$i < $comptListProjectsFilter;$i++) {
            $filterResults .= $listProjectsFilter->pro_id[$i];
            if ($comptListProjectsFilter-1 != $i) {
                $filterResults .= ",";
            } 
        } 
    } 
} 

if ($projectsFilter == "true") {
    if ($comptListProjectsFilter != "0") {
        $tmpquery = "$searchTasks AND pro.id IN($filterResults) ORDER BY $block2->sortingValue";
    } else {
        $validTasks = "false";
    } 
} else {
    $tmpquery = "$searchTasks ORDER BY $block2->sortingValue";
} 

$comptListTasks = "0";
if ($validTasks == "true") {
    $block2->recordsTotal = compt($initrequest["tasks"] . " " . $tmpquery);

    $listTasks = new request();
    $listTasks->openTasks($tmpquery, $block2->borne, $block2->rowsLimit);
    $comptListTasks = count($listTasks->tas_id); 
    // echo "$tmpquery<br>";
} 

$block3 = new block();

$block3->borne = $blockPage->returnBorne("3");
$block3->rowsLimit = "10";

$block3->sorting("users", $sortingUser->sor_users[0], "mem.name ASC", $sortingFields = array(0 => "mem.name", 1 => "mem.login", 2 => "mem.email_work", 3 => "mem.phone_work", 4 => "log.connected"));

if ($demoMode == true) {
    $tmpquery = "$searchMembers ) ORDER BY $block3->sortingValue";
} else {
    $tmpquery = "$searchMembers ) AND mem.id != '2' ORDER BY $block3->sortingValue";
} 
$comptListMembers = "0";
if ($validMembers == "true") {
    $block3->recordsTotal = compt($initrequest["members"] . " " . $tmpquery);

    $listMembers = new request();
    $listMembers->openMembers($tmpquery, $block3->borne, $block3->rowsLimit);
    $comptListMembers = count($listMembers->mem_id); 
    // echo "$tmpquery<br>";
} 

$block4 = new block();

$block4->borne = $blockPage->returnBorne("4");
$block4->rowsLimit = "10";

$block4->sorting("organizations", $sortingUser->sor_organizations[0], "org.name ASC", $sortingFields = array(0 => "org.name", 1 => "org.url", 2 => "org.phone"));

if ($clientsFilter == "true" && $_SESSION['profilSession'] == "2") {
    $teamMember = "false";
    $tmpquery = "WHERE tea.member = '" . $_SESSION['idSession'] . "'";
    $memberTest = new request();
    $memberTest->openTeams($tmpquery);
    $comptMemberTest = count($memberTest->tea_id);
    if ($comptMemberTest == "0") {
        $listClients = "false";
    } else {
        for ($i = 0;$i < $comptMemberTest;$i++) {
            $clientsOk .= $memberTest->tea_org2_id[$i];
            if ($comptMemberTest-1 != $i) {
                $clientsOk .= ",";
            } 
        } 
        if ($clientsOk == "") {
            $listClients = "false";
        } else {
            $tmpquery = "$searchOrganizations AND org.id IN($clientsOk) AND org.id != '1' ORDER BY $block4->sortingValue";
        } 
    } 
} else if ($clientsFilter == "true" && $_SESSION['profilSession'] == "1") {
    $tmpquery = "$searchOrganizations AND org.owner = '" . $_SESSION['idSession'] . "' AND org.id != '1' ORDER BY $block4->sortingValue";
} else {
    $tmpquery = "$searchOrganizations AND org.id != '1' ORDER BY $block4->sortingValue";
} 

$comptListOrganizations = "0";
if ($validOrganizations == "true") {
    $block4->recordsTotal = compt($initrequest["organizations"] . " " . $tmpquery);

    $listOrganizations = new request();
    $listOrganizations->openOrganizations($tmpquery, $block4->borne, $block4->rowsLimit);
    $comptListOrganizations = count($listOrganizations->org_id); 
    // echo "$tmpquery<br>";
} 

$block5 = new block();

$block5->borne = $blockPage->returnBorne("5");
$block5->rowsLimit = "10";

$block5->sorting("home_discussions", $sortingUser->sor_home_discussions[0], "topic.last_post DESC", $sortingFields = array(0 => "topic.subject", 1 => "mem.login", 2 => "topic.posts", 3 => "topic.last_post", 4 => "topic.status", 5 => "topic.project", 6 => "topic.published"));

if ($projectsFilter == "true") {
    if ($comptListProjectsFilter != "0") {
        $tmpquery = "$searchTopics AND topic.project IN($filterResults) ORDER BY $block5->sortingValue";
    } else {
        $validTopics = "false";
    } 
} else {
    $tmpquery = "$searchTopics ORDER BY $block5->sortingValue";
} 

$comptListTopics = "0";
if ($validTopics == "true") {
    $block5->recordsTotal = compt($initrequest["topics"] . " " . $tmpquery);

    $listTopics = new request();
    $listTopics->openTopics($tmpquery, $block5->borne, $block5->rowsLimit);
    $comptListTopics = count($listTopics->top_id); 
    // echo "$tmpquery<br>";
}

$block6 = new block();

$comptTopic = count($topicNote);

$block6->borne = $blockPage->returnBorne("6");
$block6->rowsLimit = "10";

if ($comptTopic != "0") {
    $block6->sorting("notes", $sortingUser->sor_notes[0], "note.date DESC", $sortingFields = array(0 => "note.subject", 1 => "note.topic", 2 => "note.date", 3 => "mem.login", 4 => "note.published"));
} else {
    $block6->sorting("notes", $sortingUser->sor_notes[0], "note.date DESC", $sortingFields = array(0 => "note.subject", 1 => "note.date", 2 => "mem.login", 3 => "note.published"));
} 

if ($projectsFilter == "true") {
    if ($comptListProjectsFilter != "0") {
        $tmpquery = "$searchNotes AND note.project IN($filterResults) ORDER BY $block6->sortingValue";
    } else {
        $validNotes = "false";
    } 
} else {
    $tmpquery = "$searchNotes ORDER BY $block6->sortingValue";
} 

$comptListNotes = "0";
if ($validNotes == "true") {
    $block6->recordsTotal = compt($initrequest["notes"] . " " . $tmpquery);

    $listNotes = new request();
    $listNotes->openNotes($tmpquery, $block6->borne, $block6->rowsLimit);
    $comptListNotes = count($listNotes->note_id);
    // echo "$tmpquery<br>";
}

$comptTotal = $block1->recordsTotal + $block2->recordsTotal + $block3->recordsTotal + $block4->recordsTotal + $block5->recordsTotal + $block6->recordsTotal;


$blockPage= new block();
$blockPage->bornesNumber = "6";

$block0 = new block();

$block0->openContent();
$block0->contentTitle($strings["results_for_keywords"] . " : <b>$searchfor</b>");

echo "<tr class=\"odd\"><td valign=\"top\" class=\"leftvalue\">&nbsp;</td><td>";

if ($comptTotal == "1") {
    echo "1&#160;" . $strings["match"];
}
if ($comptTotal > "1" || $comptTotal == "0") {
    echo "$comptTotal&#160;" . $strings["matches"];
}

if ($comptTotal == "0") {
    echo "<br>" . $strings["no_results_search"];
} else {
}

echo "</td></tr>";

$block0->closeContent();

if ($comptListProjects != "0") {
    $block1->form = "ProjectForm";
    $block1->openForm("../search/resultssearch.php?searchfor=$searchfor&amp;heading=$heading#" . $block1->form . "Anchor");

    $block1->heading($strings["search_results"] . " : " . $strings["projects"] . " ($block1->recordsTotal)");

    $block1->openPaletteIcon();
    $block1->paletteIcon(0, "export", $strings["export"]);
    $block1->closePaletteIcon();

    $block1->openResults();

    $block1->labels($labels = array(0 => $strings["id"], 1 => $strings["project"], 2 => $strings["priority"], 3 => $strings["organization"], 4 => $strings["status"], 5 => $strings["owner"], 6 => $strings["published"]), "true");

    for ($i = 0;$i < $comptListProjects;$i++) {
        if ($listProjects->pro_org_id[$i] == "1") {
            $listProjects->pro_org_name[$i] = $strings["none"];
        }
        $idStatus = $listProjects->pro_status[$i];
        $idPriority = $listProjects->pro_priority[$i];
        $block1->openRow($listProjects->pro_id[$i]);
        $block1->checkboxRow($listProjects->pro_id[$i]);
        $block1->cellRow(buildLink("../projects/viewproject.php?id=" . $listProjects->pro_id[$i], $listProjects->pro_id[$i], LINK_INSIDE));
        $block1->cellRow(buildLink("../projects/viewproject.php?id=" . $listProjects->pro_id[$i], $listProjects->pro_name[$i], LINK_INSIDE));
        $block1->cellRow('<img src="../themes/' . THEME . '/gfx_priority/' . $idPriority . '.gif" alt="' . $priority[$idPriority] . '">&nbsp;' . $priority[$idPriority], '', true);
        $block1->cellRow($listProjects->pro_org_name[$i]);
        // $block1->cellRow($status[$idStatus]);
        $block1->cellRow('<img src="../themes/' . THEME . '/gfx_status/' . $idStatus . '.gif" alt="' . $status[$idStatus] . '">&nbsp;' . $status[$idStatus], '', true);
        $block1->cellRow(buildLink($listProjects->pro_mem_email_work[$i], $listProjects->pro_mem_login[$i], LINK_MAIL));
        if ($sitePublish == "true") {
            if ($listProjects->pro_published[$i] == "1") {
                $block1->cellRow("&lt;" . buildLink("../projects/addprojectsite.php?id=" . $listProjects->pro_id[$i], $strings["create"] . "...", LINK_INSIDE) . "&gt;");
            } else {
                $block1->cellRow("&lt;" . buildLink("../projects/viewprojectsite.php?id=" . $listProjects->pro_id[$i], $strings["details"], LINK_INSIDE) . "&gt;");
            }
        }
        $block1->closeRow();
    }
    $block1->closeResults();

    $block1->bornesFooter("1", $blockPage->bornesNumber, "", "searchfor=$searchfor&amp;heading=$heading");

    $block1->closeToggle();
    $block3->headingForm_close();
    $block1->closeFormResults();

    $block1->openPaletteScript();
    $block1->paletteScript(0, "export", "../projects/exportproject.php?languageSession=" . $_SESSION['languageSession'] . "&type=project", "false,true,false", $strings["export"]);
    $block1->closePaletteScript($comptListProjects, $listProjects->pro_id);
}

if ($comptListTasks != "0") {
    $block2->form = "TaskForm";
    $block2->openForm("../search/resultssearch.php?searchfor=$searchfor&amp;heading=$heading#" . $block2->form . "Anchor");

    $block2->headingForm($strings["search_results"] . " : " . $strings["tasks"] . " ($block2->recordsTotal)");

    /*$block2->openPaletteIcon();
$block2->paletteIcon(0,"export",$strings["export"]);


$block2->closePaletteIcon();*/

    $block2->openResults();

    $block2->labels($labels = array(0 => $strings["task"], 1 => $strings["priority"], 2 => $strings["status"], 3 => $strings["due_date"], 4 => $strings["assigned_to"], 5 => $strings["project"], 6 => $strings["published"]), "true");

    for ($i = 0;$i < $comptListTasks;$i++) {
        if ($listTasks->tas_due_date[$i] == "") {
            $listTasks->tas_due_date[$i] = $strings["none"];
        }
        $idStatus = $listTasks->tas_status[$i];
        $idPriority = $listTasks->tas_priority[$i];
        $idPublish = $listTasks->tas_published[$i];
        $block2->openRow($listTasks->tas_id[$i]);
        $block2->checkboxRow($listTasks->tas_id[$i]);
        $block2->cellRow(buildLink("../tasks/viewtask.php?id=" . $listTasks->tas_id[$i], $listTasks->tas_name[$i], LINK_INSIDE));
        $block2->cellRow('<img src="../themes/' . THEME . '/gfx_priority/' . $idPriority . '.gif" alt="' . $priority[$idPriority] . '">&nbsp;' . $priority[$idPriority], '', true);
        // $block2->cellRow($status[$idStatus]);
        $block2->cellRow('<img src="../themes/' . THEME . '/gfx_status/' . $idStatus . '.gif" alt="' . $status[$idStatus] . '">&nbsp;' . $status[$idStatus], '', true);
        if ($listTasks->tas_due_date[$i] <= $date && $listTasks->tas_completion[$i] != "10") {
            $block2->cellRow("<b>" . $listTasks->tas_due_date[$i] . "</b>");
        } else {
            $block2->cellRow($listTasks->tas_due_date[$i]);
        }
        if ($listTasks->tas_assigned_to[$i] == "0") {
            $block2->cellRow($strings["unassigned"]);
        } else {
            $block2->cellRow(buildLink($listTasks->tas_mem_email_work[$i], $listTasks->tas_mem_login[$i], LINK_MAIL));
        }
        $block2->cellRow(buildLink("../projects/viewproject.php?id=" . $listTasks->tas_project[$i], $listTasks->tas_pro_name[$i], LINK_INSIDE));
        if ($sitePublish == "true") {
            $block2->cellRow($statusPublish[$idPublish]);
        }
        $block2->closeRow();
    }

    $block2->closeResults();

    $block2->bornesFooter("2", $blockPage->bornesNumber, "", "searchfor=$searchfor&amp;heading=$heading");

    $block2->closeToggle();
    $block3->headingForm_close();
    $block2->closeFormResults();

    /*$block2->openPaletteScript();
$block2->paletteScript(0,"export","../projects/exportproject.php?languageSession=" . $_SESSION['languageSession'] . "&type=project","false,true,false",$strings["export"]);
$block2->closePaletteScript($comptListTasks,$listTasks->tas_id);*/
}

if ($comptListMembers != "0") {
    $block3->form = "UserForm";
    $block3->openForm("../search/resultssearch.php?searchfor=$searchfor&amp;heading=$heading#" . $block3->form . "Anchor");

    $block3->headingForm($strings["search_results"] . " : " . $strings["users"] . " ($block3->recordsTotal)");

    /*$block3->openPaletteIcon();
$block3->paletteIcon(0,"export",$strings["export"]);
$block3->closePaletteIcon();*/

    $block3->openResults();

    $block3->labels($labels = array(0 => $strings["full_name"], 1 => $strings["user_name"], 2 => $strings["email"], 3 => $strings["work_phone"], 4 => $strings["connected"]), "false");

    for ($i = 0;$i < $comptListMembers;$i++) {
        $block3->openRow($listMembers->mem_id[$i]);
        $block3->checkboxRow($listMembers->mem_id[$i]);
        $block3->cellRow(buildLink("../users/viewuser.php?id=" . $listMembers->mem_id[$i], $listMembers->mem_name[$i], LINK_INSIDE));
        $block3->cellRow($listMembers->mem_login[$i]);
        $block3->cellRow(buildLink($listMembers->mem_email_work[$i], $listMembers->mem_email_work[$i], LINK_MAIL));
        $block3->cellRow($listMembers->mem_phone_work[$i]);
        if ($listMembers->mem_profil[$i] == "3") {
            $z = "(Client on project site)";
        } else {
            $z = "";
        }
        if ($listMembers->mem_log_connected[$i] > $dateunix-5 * 60) {
            $block3->cellRow($strings["yes"] . " " . $z);
        } else {
            $block3->cellRow($strings["no"]);
        }
        $block3->closeRow();
    }

    $block3->closeResults();

    $block3->bornesFooter("3", $blockPage->bornesNumber, "", "searchfor=$searchfor&amp;heading=$heading");

    $block3->closeToggle();
    $block3->headingForm_close();
    $block3->closeFormResults();

    /*$block3->openPaletteScript();
$block3->paletteScript(0,"export","../projects/exportproject.php?languageSession=" . $_SESSION['languageSession'] . "&type=project","false,true,false",$strings["export"]);
$block3->closePaletteScript($comptListMembers,$listMembers->mem_id);*/
}

if ($comptListOrganizations != "0") {
    $block4->form = "ClientForm";
    $block4->openForm("../search/resultssearch.php?searchfor=$searchfor&amp;heading=$heading#" . $block4->form . "Anchor");

    $block4->headingForm($strings["search_results"] . " : " . $strings["organizations"] . " ($block4->recordsTotal)");

    /*$block4->openPaletteIcon();
$block4->paletteIcon(0,"export",$strings["export"]);
$block4->closePaletteIcon();*/

    $block4->openResults();

    $block4->labels($labels = array(0 => $strings["name"], 1 => $strings["url"], 2 => $strings["phone"]), "false");

    for ($i = 0;$i < $comptListOrganizations;$i++) {
        $block4->openRow($listOrganizations->org_id[$i]);
        $block4->checkboxRow($listOrganizations->org_id[$i]);
        $block4->cellRow(buildLink("../clients/viewclient.php?id=" . $listOrganizations->org_id[$i], $listOrganizations->org_name[$i], LINK_INSIDE));
        $block4->cellRow(buildLink($listOrganizations->org_url[$i], $listOrganizations->org_url[$i], LINK_OUT));
        $block4->cellRow($listOrganizations->org_phone[$i]);
        $block4->closeRow();
    }

    $block4->closeResults();

    $block4->bornesFooter("4", $blockPage->bornesNumber, "", "searchfor=$searchfor&amp;heading=$heading");

    $block4->closeToggle();
    $block3->headingForm_close();
    $block4->closeFormResults();

    /*$block4->openPaletteScript();
$block4->paletteScript(0,"export","../projects/exportproject.php?languageSession=" . $_SESSION['languageSession'] . "&type=project","false,true,false",$strings["export"]);
$block4->closePaletteScript($comptListOrganizations,$listOrganizations->org_id);*/
}

if ($comptListTopics != "0") {
    $block5->form = "ThreadTopicForm";
    $block5->openForm("../search/resultssearch.php?searchfor=$searchfor&amp;heading=$heading#" . $block5->form . "Anchor");

    $block5->headingForm($strings["search_results"] . " : " . $strings["discussions"] . " ($block5->recordsTotal)");

    /*$block5->openPaletteIcon();
$block5->paletteIcon(0,"export",$strings["export"]);

$block5->closePaletteIcon();*/

    $block5->openResults();

    $block5->labels($labels = array(0 => $strings["topic"], 1 => $strings["owner"], 2 => $strings["posts"], 3 => $strings["latest_post"], 4 => $strings["status"], 5 => $strings["project"], 6 => $strings["published"]), "true");

    for ($i = 0;$i < $comptListTopics;$i++) {
        $idStatus = $listTopics->top_status[$i];
        $idPublish = $listTopics->top_published[$i];
        $block5->openRow($listTopics->top_id[$i]);
        $block5->checkboxRow($listTopics->top_id[$i]);
        $block5->cellRow(buildLink("../topics/viewtopic.php?id=" . $listTopics->top_id[$i], $listTopics->top_subject[$i], LINK_INSIDE));
        $block5->cellRow(buildLink($listTopics->top_email_work[$i], $listTopics->top_mem_login[$i], LINK_MAIL));
        $block5->cellRow($listTopics->top_posts[$i]);
        if ($listTopics->top_last_post[$i] > $_SESSION['lastvisiteSession']) {
            $block5->cellRow("<b>" . $listTopics->top_last_post[$i] . "</b>");
        } else {
            $block5->cellRow($listTopics->top_last_post[$i]);
        }
        $block5->cellRow($statusTopic[$idStatus]);
        $block5->cellRow(buildLink("../projects/viewproject.php?id=" . $listTopics->top_pro_id[$i], $listTopics->top_pro_name[$i], LINK_INSIDE));
        if ($sitePublish == "true") {
            $block5->cellRow($statusPublish[$idPublish]);
        }
        $block5->closeRow();
    }

    $block5->closeResults();

    $block5->bornesFooter("5", $blockPage->bornesNumber, "", "searchfor=$searchfor&amp;heading=$heading");

    $block5->closeToggle();
    $block3->headingForm_close();
    $block5->closeFormResults();

    /*$block5->openPaletteScript();
$block5->paletteScript(0,"export","../projects/exportproject.php?languageSession=" . $_SESSION['languageSession'] . "&type=project","false,true,false",$strings["export"]);
$block5->closePaletteScript($comptListTopics,$listTopics->top_id);*/
}

if ($comptListNotes != "0") {
    $block6->form = "notesForm";
    $block6->openForm("../search/resultssearch.php?searchfor=$searchfor&amp;heading=$heading#" . $block6->form . "Anchor");

    $block6->headingForm($strings["search_results"] . " : " . $strings["notes"] . " ($block6->recordsTotal)");

    /*$block6->openPaletteIcon();
$block6->paletteIcon(0,"export",$strings["export"]);
$block6->closePaletteIcon();*/

    $block6->openResults();

    if ($comptTopic != "0") {
        $block6->labels($labels = array(0 => $strings["subject"], 1 => $strings["topic"], 2 => $strings["date"], 3 => $strings["owner"], 4 => $strings["published"]), "true");
    } else {
        $block6->labels($labels = array(0 => $strings["subject"], 1 => $strings["date"], 2 => $strings["owner"], 3 => $strings["published"]), "true");
    }

    for ($i = 0;$i < $comptListNotes;$i++) {
        $idPublish = $listNotes->note_published[$i];
        $block6->openRow($listNotes->note_id[$i]);
        $block6->checkboxRow($listNotes->note_id[$i]);
        $block6->cellRow(buildLink("../notes/viewnote.php?id=" . $listNotes->note_id[$i], $listNotes->note_subject[$i], LINK_INSIDE));
        if ($comptTopic != "0") {
            $block6->cellRow($topicNote[$listNotes->note_topic[$i]]);
        }

        $block6->cellRow($listNotes->note_date[$i]);
        $block6->cellRow(buildLink($listNotes->note_mem_email_work[$i], $listNotes->note_mem_login[$i], LINK_MAIL));
        if ($sitePublish == "true") {
            $block6->cellRow($statusPublish[$idPublish]);
        }
        $block6->closeRow();
    }
    $block6->closeResults();

    $block6->bornesFooter("6", $blockPage->bornesNumber, "", "searchfor=$searchfor&amp;heading=$heading");

    $block6->closeToggle();
    $block3->headingForm_close();
    $block6->closeFormResults();

    /*$block6->openPaletteScript();
$block6->paletteScript(0,"export","../projects/exportproject.php?languageSession=" . $_SESSION['languageSession'] . "&type=project","false,true,false",$strings["export"]);
$block6->closePaletteScript($comptListNotes,$listNotes->note_id);*/
}

$block7 = new block();

$block7->form = "search";
$block7->openForm("../search/createsearch.php?action=search");

$block7->openContent();
$block7->contentTitle($strings["enter_keywords"]);

echo "<tr class=\"odd\"><td valign=\"top\" class=\"leftvalue\">* " . $strings["search_for"] . " :</td><td><input value=\"$searchfor\" type=\"text\" name=searchfor style=\"width: 200px;\"  size=\"30\" maxlength=\"64\">
<select name=\"heading\">
		<option selected value=\"ALL\" $selectedAll>" . $strings["all_content"] . "</option>
		<option value=\"notes\" $selectedNotes>" . $strings["notes"] . "</option>
		<option value=\"organizations\" $selectedOrganizations>" . $strings["organizations"] . "</option>
		<option value=\"projects\" $selectedProjects>" . $strings["projects"] . "</option>
		<option value=\"tasks\" $selectedTasks>" . $strings["tasks"] . "</option>
		<option value=\"discussions\" $selectedDiscussions>" . $strings["discussions"] . "</option>
		<option value=\"members\" $selectedMembers>" . $strings["users"] . "</option>
</select>
</td></tr>
<tr class=\"odd\"><td valign=\"top\" class=\"leftvalue\">&nbsp;</td><td><input type=\"submit\" name=\"Save\" value=\"" . $strings["search"] . "\"></td></tr>";

$block7->closeContent();
$block7->closeForm();

require_once("../themes/" . THEME . "/footer.php");

?>
