<?php
/***************************************************************************
								search_tickets.php
							--------------------------
			created				: 13.02.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display search form or display the search results
function search_tickets()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/staff/search/templates/functions/search_tickets.tpl'));
	
	$search_in_arg = '';
	if ((!isset($_POST['search_in_tickets'])) && (!isset($_GET['search_in_tickets'])))
	{
		$output = str_replace('{RESULTS_TICKETS}','',$output); 
	}
	else if (isset($_POST['search_in_tickets']))
	{
		$search_in_arg .= '&search_in_tickets='.$_POST['search_in_tickets'];
	}
	
	if ((!isset($_POST['search_in_notes'])) && (!isset($_GET['search_in_notes'])))
	{
		$output = str_replace('{RESULTS_NOTES}','',$output); 
	}
	else if (isset($_POST['search_in_notes']))
	{
		$search_in_arg .= '&search_in_notes='.$_POST['search_in_notes'];
	}
	
	if (isset($_GET['search_in_tickets']))
	{
		$output = str_replace('{SEARCH_IN_TICKETS}','checked',$output); 
	}
	else 
	{
		$output = str_replace('{SEARCH_IN_TICKETS}','',$output); 
	}
	if (isset($_GET['search_in_notes']))
	{
		$output = str_replace('{SEARCH_IN_NOTES}','checked',$output); 
	}
	else 
	{
		$output = str_replace('{SEARCH_IN_NOTES}','',$output); 
	}
	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl='.TEMPLATE.'&lang='.LANGUAGE,$output);
	
	if (isset($_POST['search']))
	{
		// generate search URL and redirect to it
		$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
		$user_screen = str_replace('{SECONDS}','3',$user_screen);
		$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=search_tickets&search='.$_POST['search'].$search_in_arg.'&lang='.LANGUAGE,$user_screen);
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
			if (isset($_GET['search_in_tickets']))
			{
				// show tickets results
				$tickets_output = join ('', file (SCRIPT_PATH.'modules/staff/search/templates/functions/search_results_tickets.tpl'));
				$this->query_result = $db->db_query('SELECT id,subject,content FROM tickets WHERE (subject LIKE "%'.$_GET['search'].'%") OR (content LIKE "%'.$_GET['search'].'%")');
				$numrows = $db->db_num_rows($this->query_result);
				$i = 0;
				while ($row = $db->db_fetch_array($this->query_result))
				{
					$row['subject'] = eregi_replace($_GET['search'],'<font color="red"><b>'.$_GET['search'].'</b></font>',$row['subject']);
					$row['content'] = eregi_replace($_GET['search'],'<font color="red"><b>'.$_GET['search'].'</b></font>',$row['content']);
					
					$tickets_results[$i] = $tickets_output;
					$tickets_results[$i] = str_replace('{SUBJECT}','<a href="'.$_SERVER['PHP_SELF'].'?tpl=tickets_show_ticket&lang='.LANGUAGE.'&id='.$row['id'].'">'.$row['subject'].'</a>',$tickets_results[$i]);
					$tickets_results[$i] = str_replace('{CONTENT}',$row['content'],$tickets_results[$i]);
					$i++;
				}
				if ($numrows == 0)
				{
					$tickets_results = array();
				}
				$output = str_replace('{RESULTS_TICKETS}',$numrows.' {LANG_SEARCH_TICKETS_RESULTS}<br>'.implode('',$tickets_results),$output);
			}

			if (isset($_GET['search_in_notes']))
			{
				// show notes results
				$notes_output = join ('', file (SCRIPT_PATH.'modules/staff/search/templates/functions/search_results_notes.tpl'));
				$this->query_result = $db->db_query('SELECT ticket_id,content FROM notes WHERE content LIKE "%'.$_GET['search'].'%"');
				$numrows = $db->db_num_rows($this->query_result);
				$i = 0;
				while ($row = $db->db_fetch_array($this->query_result))
				{
					$row['content'] = eregi_replace($_GET['search'],'<font color="red"><b>'.$_GET['search'].'</b></font>',$row['content']);
					
					$notes_results[$i] = $notes_output;
					$notes_results[$i] = str_replace('{TICKET_ID}',$row['ticket_id'],$notes_results[$i]);
					$notes_results[$i] = str_replace('{CONTENT}','<a href="'.$_SERVER['PHP_SELF'].'?tpl=tickets_show_ticket&lang='.LANGUAGE.'&id='.$row['ticket_id'].'">'.$row['content'].'</a>',$notes_results[$i]);
					$i++;
				}
				if ($numrows == 0)
				{
					$notes_results = array();
				}
				$output = str_replace('{RESULTS_NOTES}',$numrows.' {LANG_SEARCH_NOTES_RESULTS}<br>'.implode('',$notes_results),$output);
			}
		}
		$db->db_close();
	}
	else  
	{
		$output = str_replace('{SEARCH}','',$output);
	}

	return $output;
}
?>