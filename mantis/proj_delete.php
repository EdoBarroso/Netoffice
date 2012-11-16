<?php
#Application name: PhpCollab
#Status page: 0
	# Mantis - a php based bugtracking system
	# Copyright (C) 2000 - 2002  Kenzaburo Ito - kenito@300baud.org
	# This program is distributed under the terms and conditions of the GPL
	# See the README and LICENSE files for details
?>
<?php include( "../mantis/core_API.php" ) ?>
<?php //login_cookie_check() ?>
<?php
	db_connect( $g_hostname, $g_db_username, $g_db_password, $g_database_name );
	//check_access( MANAGER );

	$f_project_id = "$id";

	# Delete the bugs, bug text, bugnotes, and bugnote text
	# first select the bug ids
	$query = "SELECT id, bug_text_id
			FROM $g_mantis_bug_table
    		WHERE project_id IN($f_project_id)";
    $result = db_query( $query );
    $bug_count = db_num_rows( $result );

	for ($i=0;$i<$bug_count;$i++) {
		$row = db_fetch_array( $result );
		$t_bug_id = $row["id"];
		$t_bug_text_id = $row["bug_text_id"];

		# Delete the bug texts
		$query2 = "DELETE
				FROM $g_mantis_bug_text_table
	    		WHERE id ='$t_bug_text_id'";
	    $result2 = db_query( $query2 );

		# select bugnotes to delete
		$query3 = "SELECT id, bugnote_text_id
				FROM $g_mantis_bugnote_table
	    		WHERE bug_id='$t_bug_id'";
	    $result3 = db_query( $query3 );
	    $bugnote_count = db_num_rows( $result3 );

		for ($j=0;$j<$bugnote_count;$j++) {
			$row2 = db_fetch_array( $result3 );
			$t_bugnote_id = $row2["id"];
			$t_bugnote_text_id = $row2["bugnote_text_id"];

			# Delete the bugnotes
			$query = "DELETE
					FROM $g_mantis_bugnote_table
		    		WHERE id='$t_bugnote_id'";
		    $result = db_query( $query );

			# Delete the bugnote texts
			$query4 = "DELETE
					FROM $g_mantis_bugnote_text_table
		    		WHERE id='$t_bugnote_text_id'";
		    $result4 = db_query( $query4 );
		}
	}

	# now finally remove all bugs that are part of the project
	$query = "DELETE
			FROM $g_mantis_bug_table
    		WHERE project_id IN($f_project_id)";
    $result = db_query( $query );

	# Delete the project entry
	$query = "DELETE
			FROM $g_mantis_project_table
    		WHERE id IN($f_project_id)";
    $result = db_query( $query );

	# Delete the project categories
	$query = "DELETE
			FROM $g_mantis_project_category_table
    		WHERE project_id IN($f_project_id)";
    $result = db_query( $query );

	# Delete the project versions
	$query = "DELETE
			FROM $g_mantis_project_version_table
    		WHERE project_id IN($f_project_id)";
    $result = db_query( $query );

// bug in mantis when project is removed 
    	# Delete user list for this project 
	# All user should unassign from that project.
	$query = "DELETE
    			FROM $g_mantis_project_user_list_table
    		WHERE project_id IN($f_project_id)";
	    $result = db_query( $query );

?>