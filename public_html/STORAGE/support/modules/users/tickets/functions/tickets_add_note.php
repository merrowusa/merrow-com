<?php
/***************************************************************************
								tickets_add_note.php
							----------------------------
			created				: 19.01.2003
			edited				: 01.02.2003
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// add the note to the database
//		-> make sure the sender didn't forge the 'id'
//		-> add note to database &/ redirect user to content
//		<- the note form can add anything to the database, as long as it is setup properly in the form & exists in the "notes" table
function tickets_add_note()
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
				$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_ADD_NOTE_PERMISSION}',$user_screen);
			}
			else if ($row['status'] == 'closed')
			{
				$user_screen = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/pages/slogic_redirect.tpl'));
				$user_screen = str_replace('{SECONDS}','3',$user_screen);
				$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_show_ticket&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
				$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_ADD_NOTE_CLOSED}',$user_screen);
			}
			else if (($_POST['content'] == '') && ($_FILES['attachment']['size'] == 0))
			{
				$user_screen = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/pages/slogic_redirect.tpl'));
				$user_screen = str_replace('{SECONDS}','3',$user_screen);
				$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_show_ticket&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
				$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_ADD_NOTE_CONTENT}',$user_screen);
			}
			else 
			{
				if ($_FILES['attachment']['size'] > 0)
				{
					// if the file was uploaded, move it to the upload dir
					if (is_uploaded_file($_FILES['attachment']['tmp_name']))
					{
						$realname = $_FILES['attachment']['name'];
						$realname = str_replace(' ','',$realname);
		
						// get the temp file and insert it into the database
						$fp = fopen ($_FILES['attachment']['tmp_name'], 'r');
				        $data = addslashes (fread ($fp, $_FILES['attachment']['size']));
		        		fclose ($fp);
						
		        		// insert into database. Add username, "-1", filename as the identifiers
						$this->query_result = $db->db_query('INSERT INTO attachments (ticket_id,bin_data,filename,filetype,filesize,user,sent_date) VALUES ("'.$_GET['id'].'","'.$data.'","'.$_FILES['attachment']['name'].'","'.$_FILES['attachment']['type'].'","'.$_FILES['attachment']['size'].'","'.$_SESSION['login_user'].'",now())');
		        		
						// delete the temp file
						unlink ($_FILES['attachment']['tmp_name']);

						$user_screen = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/pages/slogic_redirect.tpl'));
						$user_screen = str_replace('{SECONDS}','3',$user_screen);
						$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_show_ticket&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
						$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_ADD_NOTE_UPLOAD}',$user_screen);
					}
				}
				else 
				{
					$get_keys[0] = 'ticket_id';
					$get_values[0] = $_GET['id'];
					$get_keys[1] = 'sender';
					$get_values[1] = $_SESSION['login_user'];
					$get_keys[2] = 'who_is';
					$get_values[2] = 'user';
					$get_keys[3] = 'show_to';
					$get_values[3] = 'both';
					$i = 4;
					// get all form posted vars & values for the MySQL query
					foreach ($_POST as $key => $value) 
					{
						if (($key != 'SLOGIC') && ($key != 'Submit') && ($key != 'close_verified') && ($key != 'attachment'))
						{
							$get_keys[$i] = $key;
							$get_values[$i] = $value;
							$i++;
						}
					}
	
					$this->query_result = $db->db_query('INSERT INTO notes (sent_date,'.implode(',',$get_keys).') VALUES (now(),\''.implode('\',\'',$get_values).'\')');
					
					// get the staff members email address
					$this->query_result = $db->db_query('SELECT staff FROM tickets
														 WHERE id="'.$_GET['id'].'"
														');
					$row = $db->db_fetch_array($this->query_result);
					
					// if the ticket is assigned to a staff member ( staff != none ) then send him an email, if set in his profile
					if ($row['staff'] != 'none')
					{
						$staff_name = $row['staff'];
						$user_name = $_SESSION['login_user'];
						$this->query_result = $db->db_query('SELECT email,get_email FROM staff WHERE username="'.$row['staff'].'"');
						$row = $db->db_fetch_array($this->query_result);
						if ($row['get_email'] == 'yes')
						{
							if ((isset($_POST['close_verified'])) && ($_POST['close_verified'] == 'yes'))
							{
								// we can use the following placeholders here:
								// 		ID 			 = ticket id
								//		STAFF_HOLDER = staff member, who holds the ticket
								//		USER		 = username 
								//		CONTENT		 = content of the note
								//		CONTENT_URL	 = will insert URL to the "show_ticket_content" page
								//		REOPEN_URL	 = will insert URL to the "reopen_ticket" page
								//		SCRIPT_URL 	 = script URL (for self definition)
								
								$this->query_result = $db->db_query('SELECT subject FROM config WHERE name="toggle_user_add_note_close_verified"');
								$row8 = $db->db_fetch_array($this->query_result);
								$send_out_email = $row8['subject'];

								$this->query_result = $db->db_query('SELECT subject,content FROM config WHERE name="user_add_note_close_verified"');
								$row2 = $db->db_fetch_array($this->query_result);
								
								$email_subject = $row2['subject'];
								$email_subject = str_replace('{ID}',$_GET['id'],$email_subject);
								$email_subject = str_replace('{STAFF_HOLDER}',$staff_name,$email_subject);
								$email_subject = str_replace('{USER}',$user_name,$email_subject);
								$email_subject = str_replace('{CONTENT}',$_POST['content'],$email_subject);
								
								$email_content = $row2['content'];
								$email_content = str_replace('{ID}',$_GET['id'],$email_content);
								$email_content = str_replace('{STAFF_HOLDER}',$staff_name,$email_content);
								$email_content = str_replace('{USER}',$user_name,$email_content);
								$email_content = str_replace('{CONTENT}',$_POST['content'],$email_content);
								$email_content = str_replace('{CONTENT_URL}',SCRIPT_URL.'staff.php?tpl=tickets_show_ticket&id='.$_GET['id'],$email_content);
								//$email_content = str_replace('{REOPEN_URL}',SCRIPT_URL.'staff.php?tpl=tickets_reopen_ticket&id='.$_GET['id'],$email_content);
								$email_content = str_replace('{SCRIPT_URL}',SCRIPT_URL.'staff.php',$email_content);
								
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
							else
							{
								$this->query_result = $db->db_query('SELECT subject FROM config WHERE name="toggle_user_add_note_staff"');
								$row8 = $db->db_fetch_array($this->query_result);
								$send_out_email = $row8['subject'];

								$this->query_result = $db->db_query('SELECT subject,content FROM config WHERE name="user_add_note_staff"');
								$row2 = $db->db_fetch_array($this->query_result);
								
								$email_subject = $row2['subject'];
								$email_subject = str_replace('{ID}',$_GET['id'],$email_subject);
								$email_subject = str_replace('{STAFF_HOLDER}',$staff_name,$email_subject);
								$email_subject = str_replace('{USER}',$user_name,$email_subject);
								$email_subject = str_replace('{CONTENT}',$_POST['content'],$email_subject);
								
								$email_content = $row2['content'];
								$email_content = str_replace('{ID}',$_GET['id'],$email_content);
								$email_content = str_replace('{STAFF_HOLDER}',$staff_name,$email_content);
								$email_content = str_replace('{USER}',$user_name,$email_content);
								$email_content = str_replace('{CONTENT}',$_POST['content'],$email_content);
								$email_content = str_replace('{CONTENT_URL}',SCRIPT_URL.'staff.php?tpl=tickets_show_ticket&id='.$_GET['id'],$email_content);
								$email_content = str_replace('{SCRIPT_URL}',SCRIPT_URL.'staff.php',$email_content);
								
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
					}

					if ((isset($_POST['close_verified'])) && ($_POST['close_verified'] == 'yes'))
					{
						$this->query_result = $db->db_query('UPDATE tickets SET who_updated=\'user\',close_verified=\'yes\',last_update=now() WHERE id=\''.$_GET['id'].'\'');
					}
					else 
					{
						$this->query_result = $db->db_query('UPDATE tickets SET who_updated=\'user\',close_verified=\'no\',last_update=now() WHERE id=\''.$_GET['id'].'\'');
					}
					
					$user_screen = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/pages/slogic_redirect.tpl'));
					$user_screen = str_replace('{SECONDS}','3',$user_screen);
					$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_show_ticket&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
					$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_ADD_NOTE_ADDED}',$user_screen);
				}
			}
		}
		else 
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_main&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_ADD_NOTE_INVALID}',$user_screen);
		}
	}
	$db->db_close();
	
	return;
}
?>