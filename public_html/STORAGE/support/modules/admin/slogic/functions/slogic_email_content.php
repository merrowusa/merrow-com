<?php
/***************************************************************************
								slogic_email_content.php
							-------------------------------
			created				: 14.05.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// displays the email messages form
function slogic_email_content()
{
	GLOBAL $user_screen;
	
	if (isset($_POST['submit']))
	{
		
		// make changes & redirect
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_staff_add_note_close_verified'].'" WHERE name="toggle_staff_add_note_close_verified"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_staff_add_note_user'].'" WHERE name="toggle_staff_add_note_user"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_staff_add_note_staff'].'" WHERE name="toggle_staff_add_note_staff"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_staff_move_ticket'].'" WHERE name="toggle_staff_move_ticket"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_staff_grab_ticket'].'" WHERE name="toggle_staff_grab_ticket"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_staff_claim_ticket'].'" WHERE name="toggle_staff_claim_ticket"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_user_add_note_close_verified'].'" WHERE name="toggle_user_add_note_close_verified"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_user_add_note_staff'].'" WHERE name="toggle_user_add_note_staff"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_user_reopen_ticket'].'" WHERE name="toggle_user_reopen_ticket"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_user_new_ticket_alert'].'" WHERE name="toggle_user_new_ticket_alert"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_user_new_ticket'].'" WHERE name="toggle_user_new_ticket"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_user_register'].'" WHERE name="toggle_user_register"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['toggle_user_lost_password'].'" WHERE name="toggle_user_lost_password"');

			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['staff_add_note_close_verified_subject'].'",content="'.$_POST['staff_add_note_close_verified_content'].'" WHERE name="staff_add_note_close_verified"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['staff_add_note_user_subject'].'",content="'.$_POST['staff_add_note_user_content'].'" WHERE name="staff_add_note_user"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['staff_add_note_staff_subject'].'",content="'.$_POST['staff_add_note_staff_content'].'" WHERE name="staff_add_note_staff"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['staff_move_ticket_subject'].'",content="'.$_POST['staff_move_ticket_content'].'" WHERE name="staff_move_ticket"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['staff_grab_ticket_subject'].'",content="'.$_POST['staff_grab_ticket_content'].'" WHERE name="staff_grab_ticket"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['staff_claim_ticket_subject'].'",content="'.$_POST['staff_claim_ticket_content'].'" WHERE name="staff_claim_ticket"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['user_add_note_close_verified_subject'].'",content="'.$_POST['user_add_note_close_verified_content'].'" WHERE name="user_add_note_close_verified"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['user_add_note_staff_subject'].'",content="'.$_POST['user_add_note_staff_content'].'" WHERE name="user_add_note_staff"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['user_reopen_ticket_subject'].'",content="'.$_POST['user_reopen_ticket_content'].'" WHERE name="user_reopen_ticket"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['user_new_ticket_alert_subject'].'",content="'.$_POST['user_new_ticket_alert_content'].'" WHERE name="user_new_ticket_alert"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['user_new_ticket_subject'].'",content="'.$_POST['user_new_ticket_content'].'" WHERE name="user_new_ticket"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['user_register_subject'].'",content="'.$_POST['user_register_content'].'" WHERE name="user_register"');
			$this->query_result = $db->db_query('UPDATE config SET subject="'.$_POST['user_lost_password_subject'].'",content="'.$_POST['user_lost_password_content'].'" WHERE name="user_lost_password"');
			$db->db_close();
		}
		$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
		$user_screen = str_replace('{SECONDS}','3',$user_screen);
		$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_email_content&lang='.LANGUAGE,$user_screen);
		$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_EMAIL_UPDATED}',$user_screen);
	}
	else
	{
		$output = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/functions/slogic_email_content.tpl'));
		
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{

			$this->query_result = $db->db_query('SELECT * FROM config WHERE name NOT LIKE "pipe_%" AND name NOT LIKE "toggle_%"');
			$numrows = $db->db_num_rows($this->query_result);
			if ($numrows != 0)
			{
				while ($row = $db->db_fetch_array($this->query_result))
				{
					$output = str_replace('{'.strtoupper($row['name']).'_SUBJECT}',$row['subject'],$output);
					$output = str_replace('{'.strtoupper($row['name']).'_CONTENT}',$row['content'],$output);
				}
			}

			$this->query_result = $db->db_query('SELECT * FROM config WHERE name LIKE "toggle_%" AND name NOT LIKE "toggle_pipe_%"');
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