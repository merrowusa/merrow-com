<?php
/***************************************************************************
								slogic_pipe_content.php
							-------------------------------
			created				: 12.06.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// displays the pipe messages form
function slogic_pipe_content()
{
	GLOBAL $user_screen;
	
	if (isset($_POST['submit']))
	{
		
		// make changes & redirect
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_pipe_new_user'].'" WHERE name="toggle_pipe_new_user"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_pipe_ticket_error'].'" WHERE name="toggle_pipe_ticket_error"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_pipe_new_ticket_user'].'" WHERE name="toggle_pipe_new_ticket_user"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_pipe_new_ticket_staff'].'" WHERE name="toggle_pipe_new_ticket_staff"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_pipe_add_note_error'].'" WHERE name="toggle_pipe_add_note_error"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_pipe_add_note_closed'].'" WHERE name="toggle_pipe_add_note_closed"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_pipe_add_note_user'].'" WHERE name="toggle_pipe_add_note_user"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_pipe_add_note_staff'].'" WHERE name="toggle_pipe_add_note_staff"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_pipe_flood_report'].'" WHERE name="toggle_pipe_flood_report"');
			
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['pipe_new_user_subject'].'",content="'.$_POST['pipe_new_user_content'].'" WHERE name="pipe_new_user"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['pipe_ticket_error_subject'].'",content="'.$_POST['pipe_ticket_error_content'].'" WHERE name="pipe_ticket_error"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['pipe_new_ticket_user_subject'].'",content="'.$_POST['pipe_new_ticket_user_content'].'" WHERE name="pipe_new_ticket_user"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['pipe_new_ticket_staff_subject'].'",content="'.$_POST['pipe_new_ticket_staff_content'].'" WHERE name="pipe_new_ticket_staff"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['pipe_add_note_error_subject'].'",content="'.$_POST['pipe_add_note_error_content'].'" WHERE name="pipe_add_note_error"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['pipe_add_note_closed_subject'].'",content="'.$_POST['pipe_add_note_closed_content'].'" WHERE name="pipe_add_note_closed"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['pipe_add_note_user_subject'].'",content="'.$_POST['pipe_add_note_user_content'].'" WHERE name="pipe_add_note_user"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['pipe_add_note_staff_subject'].'",content="'.$_POST['pipe_add_note_staff_content'].'" WHERE name="pipe_add_note_staff"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['pipe_flood_report_subject'].'",content="'.$_POST['pipe_flood_report_content'].'" WHERE name="pipe_flood_report"');
			$db->db_close();
		}
		$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
		$user_screen = str_replace('{SECONDS}','3',$user_screen);
		$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_pipe_content&lang='.LANGUAGE,$user_screen);
		$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_PIPE_UPDATED}',$user_screen);
	}
	else
	{
		$output = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/functions/slogic_pipe_content.tpl'));
		
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{

			$this->query_result = $db->db_query('SELECT * FROM config WHERE name LIKE "pipe_%"');
			$numrows = $db->db_num_rows($this->query_result);
			if ($numrows != 0)
			{
				while ($row = $db->db_fetch_array($this->query_result))
				{
					$output = str_replace('{'.strtoupper($row['name']).'_SUBJECT}',$row['subject'],$output);
					$output = str_replace('{'.strtoupper($row['name']).'_CONTENT}',$row['content'],$output);
				}
			}

			$this->query_result = $db->db_query('SELECT * FROM config WHERE name LIKE "toggle_pipe_%"');
			$numrows = $db->db_num_rows($this->query_result);
			if ($numrows != 0)
			{
				while ($row = $db->db_fetch_array($this->query_result))
				{
					if ($row['subject'] == 'yes')
					{
						$output = str_replace('{'.strtoupper($row['name']).'}','<select name="'.$row['name'].'"><option selected>yes</option><option>no</option></select>',$output);
					}
					else
					{
						$output = str_replace('{'.strtoupper($row['name']).'}','<select name="'.$row['name'].'"><option>yes</option><option selected>no</option></select>',$output);
					}
				}
			}
		}
		$db->db_close();

		$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl='.TEMPLATE.'&lang='.LANGUAGE,$output);
		
		return $output;
	}
	return;
}
?>