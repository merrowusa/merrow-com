<?php
/***************************************************************************
								search_users.php
							------------------------
			created				: 16.02.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display search form or display the search results
function search_users()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/admin/search/templates/functions/search_users.tpl'));
	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl='.TEMPLATE.'&lang='.LANGUAGE,$output);
	
	if (isset($_POST['search']))
	{
		// generate search URL and redirect to it
		$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
		$user_screen = str_replace('{SECONDS}','3',$user_screen);
		$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=search_users&search='.$_POST['search'].'&lang='.LANGUAGE,$user_screen);
		$user_screen = str_replace('{MESSAGE}','{LANG_SEARCH_REDIRECT}',$user_screen);
	}
	else if (isset($_GET['search']))
	{
		// show search results
		$output = str_replace('{SEARCH}',$_GET['search'],$output);
		
		$row = 0;
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{
			// show tickets results
			$users_output = join ('', file (SCRIPT_PATH.'modules/admin/search/templates/functions/search_results_users.tpl'));
			$this->query_result = $db->db_query('SELECT id,username,email,domain,act_server,act_username FROM users WHERE username LIKE "%'.$_GET['search'].'%"');
			$numrows = $db->db_num_rows($this->query_result);
			if ($numrows != 0)
			{
				$i = 0;
				while ($row = $db->db_fetch_array($this->query_result))
				{
					$users_results[$i] = $users_output;
					$users_results[$i] = str_replace('{USERNAME}','<a href="'.$_SERVER['PHP_SELF'].'?tpl=slogic_edit_user&id='.$row['id'].'&lang='.LANGUAGE.'">'.$row['username'].'</a>',$users_results[$i]);
					$users_results[$i] = str_replace('{EMAIL}','<a href="mailto:'.$row['email'].'">'.$row['email'].'</a>',$users_results[$i]);
					$users_results[$i] = str_replace('{DOMAIN}',$row['domain'],$users_results[$i]);
					$users_results[$i] = str_replace('{ACT_USERNAME}',$row['act_username'],$users_results[$i]);
					$users_results[$i] = str_replace('{ACT_SERVER}',$row['act_server'],$users_results[$i]);
					$i++;
				}
				$output = str_replace('{RESULTS_USERS}',$numrows.' {LANG_SEARCH_USERS_RESULTS}<br>'.implode('',$users_results),$output);
			}
			else 
			{
				$output = str_replace('{RESULTS_USERS}',$numrows.' {LANG_SEARCH_USERS_RESULTS}',$output);
			}
		}
		$db->db_close();
	}
	else  
	{
		$output = str_replace('{SEARCH}','',$output);
		$output = str_replace('{RESULTS_USERS}','',$output);
	}

	return $output;
}
?>