<?php
/***************************************************************************
								tickets_reopen_ticket.php
							---------------------------------
			created				: 30.01.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// reopen a ticket
//		-> make sure the sender didn't forge the 'id'
//		-> change database info &/ redirect user to content
function tickets_reopen_ticket()
{
	GLOBAL $user_screen;
	GLOBAL $slogic_send_email;
	GLOBAL $slogic_email_from;
	
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$this->query_result = $db->db_query('SELECT user,status FROM tickets WHERE id=\''.$_GET['id'].'\'');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$row = $db->db_fetch_array($this->query_result);
			if ($row['user'] != $_SESSION['login_user'])
			{
				$user_screen = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/pages/slogic_redirect.tpl'));
				$user_screen = str_replace('{SECONDS}','3',$user_screen);
				$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_main&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
				$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_REOPEN_PERMISSION}',$user_screen);
			}
			else if ($row['status'] != 'closed')
			{
				$user_screen = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/pages/slogic_redirect.tpl'));
				$user_screen = str_replace('{SECONDS}','3',$user_screen);
				$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_show_ticket&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
				$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_REOPEN_MISMATCH}',$user_screen);
			}
			else 
			{
				$this->query_result = $db->db_query('UPDATE tickets SET status="assigned",close_verified="no" WHERE id="'.$_GET['id'].'" AND user="'.$_SESSION['login_user'].'"');
		        		
				// get the staff members email address
				$this->query_result = $db->db_query('SELECT staff FROM tickets
													 WHERE id="'.$_GET['id'].'"
													');
				$row = $db->db_fetch_array($this->query_result);
				
				// if the ticket is assigned to a staff member ( staff != none ) then send him an email, if set in his profile
				if ($row['staff'] != 'none')
				{
					$staff_name = $row['staff'];
					$this->query_result = $db->db_query('SELECT email,get_email FROM staff WHERE username="'.$row['staff'].'"');
					$row = $db->db_fetch_array($this->query_result);
					if ($row['get_email'] == 'yes')
					{
						// we can use the following placeholders here:
						// 		ID 			 = ticket id
						//		STAFF_HOLDER = staff member, who holds the ticket
						//		STAFF_SENDER = staff member, who submitted the note
						//		USER		 = username 
						//		CONTENT		 = content of the note
						//		CONTENT_URL	 = will insert URL to the "show_ticket_content" page
						//		REOPEN_URL	 = will insert URL to the "reopen_ticket" page
						//		URL 	 = script URL (for self definition)
						
						$this->query_result = $db->db_query('SELECT subject FROM config WHERE name="toggle_user_reopen_ticket"');
						$row8 = $db->db_fetch_array($this->query_result);
						$send_out_email = $row8['subject'];

						$this->query_result = $db->db_query('SELECT subject,content FROM config WHERE name="user_reopen_ticket"');
						$row3 = $db->db_fetch_array($this->query_result);
						
						$email_subject = $row3['subject'];
						$email_subject = str_replace('{ID}',$_GET['id'],$email_subject);
						$email_subject = str_replace('{STAFF_HOLDER}',$staff_name,$email_subject);
						$email_subject = str_replace('{USER}',$_SESSION['login_user'],$email_subject);
						
						$email_content = $row3['content'];
						$email_content = str_replace('{ID}',$_GET['id'],$email_content);
						$email_content = str_replace('{STAFF_HOLDER}',$staff_name,$email_content);
						$email_content = str_replace('{USER}',$_SESSION['login_user'],$email_content);
						$email_content = str_replace('{CONTENT_URL}',SCRIPT_URL.'staff.php?tpl=tickets_show_ticket&id='.$_GET['id'],$email_content);
						$email_content = str_replace('{URL}',SCRIPT_URL.'staff.php',$email_content);
								
						if ($send_out_email == 'yes')
						{
							if ($slogic_send_email == 'smtp')
							{
								require(SCRIPT_PATH.'includes/htmlMimeMail.php');
								$smtp_mail = new htmlMimeMail();
		
								$smtp_mail->setHtml(nl2br($email_content), $email_content);
								$get_from = explode(' ',$slogic_email_from);
								$get_from = explode('Reply-To',$get_from[1]);
								$get_from = trim($get_from[0]);
								$smtp_mail->setReturnPath($get_from);
								$smtp_mail->setFrom($get_from);
								$smtp_mail->setSubject($email_subject);
								$smtp_mail->send(array($row['email']));
							}
							else 
							{
								mail($row['email'],$email_subject,$email_content,$slogic_email_from);
							}
						}
					}
				}
				
				$user_screen = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/pages/slogic_redirect.tpl'));
				$user_screen = str_replace('{SECONDS}','3',$user_screen);
				$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_show_ticket&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
				$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_REOPEN_REOPENED}',$user_screen);
			}
		}
		else 
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_main&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_REOPEN_INVALID}',$user_screen);
		}
	}
	$db->db_close();
	
	return;
}
?>