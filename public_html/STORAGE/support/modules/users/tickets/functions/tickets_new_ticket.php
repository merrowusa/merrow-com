<?php
/***************************************************************************
								tickets_new_ticket.php
							------------------------------
			created				: 09.01.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/


// displays the new ticket form
//   including valid value check
//   if values ok -> save in database & redirect
function tickets_new_ticket()
{
	// override the index.php $user_screen var to make the redirect work!
	GLOBAL $user_screen;
	GLOBAL $language;
	GLOBAL $slogic_send_email;
	GLOBAL $slogic_email_from;
	GLOBAL $slogic_send_alert;

	if (!isset($_POST['subject']))
	{
		$_POST['subject'] = '{LANG_TICKETS_SUBJECT_DEFAULT}';
	}
	if (!isset($_POST['content']))
	{
		$_POST['content'] = '{LANG_TICKETS_CONTENT_DEFAULT}';
	}
	if (!isset($_FILES['attachment']['size']))
	{
		$_FILES['attachment']['size'] = -1;
	}
	
	if (($_POST['subject'] != '') && ($_POST['content'] != '') && 
		($_POST['subject'] != $language['TICKETS_SUBJECT_DEFAULT']) && ($_POST['content'] != $language['TICKETS_CONTENT_DEFAULT']) &&
		($_POST['subject'] != '{LANG_TICKETS_SUBJECT_DEFAULT}') && ($_POST['content'] != '{LANG_TICKETS_CONTENT_DEFAULT}') &&
		($_FILES['attachment']['size'] == 0)
		)
	{
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{
			// add the ticket into the database
			$this->query_result = $db->db_query('INSERT INTO tickets 
												 SET user="'.$_SESSION['login_user'].'", staff="none", priority="'.$_POST['priority'].'", 
												 category="'.$_POST['category'].'", subject="'.$_POST['subject'].'", content="'.$_POST['content'].'", 
												 status="open", sentdate=now(), last_update=now(), who_updated="user"
												');
			
			// get the ticket_id, so that the attachments can be updated
			$get_last_id = $db->db_insert_id();
			
			// we can use the ticket ID as pipe-ID, since the pipe includes an email verification
			$this->query_result = $db->db_query('UPDATE tickets SET pipe_id="'.$get_last_id.'" WHERE id="'.$get_last_id.'"');
			
			// if there are any attachments, update their ticket_id and user
			if (isset($_POST['ticket_file']))
			{
				for ($i = 0; $i != sizeof($_POST['ticket_file']); $i++)
				{
					$this->query_result = $db->db_query('UPDATE attachments SET ticket_id="'.$get_last_id.'" WHERE ticket_id="-1" AND user="'.$_SESSION['login_user'].'" AND filename="'.$_POST['ticket_file'][$i].'"');
				}
			}

			// get the priority's send_alert status
			$this->query_result = $db->db_query('SELECT send_alert FROM priorities
												 WHERE name="'.$_POST['priority'].'"
												');
			$row = $db->db_fetch_array($this->query_result);
			
			// if the send_alert is set and the slogic_send_alert config is set to TRUE -> send an email to all staff members
			if (($row['send_alert'] == 'yes') && ($slogic_send_alert == TRUE))
			{
				$this->query_result = $db->db_query('SELECT subject FROM config WHERE name="toggle_user_new_ticket_alert"');
				$row8 = $db->db_fetch_array($this->query_result);
				$send_out_email = $row8['subject'];
				
				$this->query_result = $db->db_query('SELECT subject,content FROM config WHERE name="user_new_ticket_alert"');
				$row2 = $db->db_fetch_array($this->query_result);
						
				$email_subject = $row2['subject'];
				$email_subject = str_replace('{ID}',$get_last_id,$email_subject);
				//$email_subject = str_replace('{STAFF_HOLDER}',$staff_name,$email_subject);
				//$email_subject = str_replace('{STAFF_SENDER}',$_SESSION['login_user'],$email_subject);
				$email_subject = str_replace('{USER}',$_SESSION['login_user'],$email_subject);
				$email_subject = str_replace('{PRIORITY}',$_POST['priority'],$email_subject);
				$email_subject = str_replace('{CATEGORY}',$_POST['category'],$email_subject);
				$email_subject = str_replace('{DATE}',date("F j, Y, g:i a"),$email_subject);
				$email_subject = str_replace('{SUBJECT}',$_POST['subject'],$email_subject);
				$email_subject = str_replace('{CONTENT}',$_POST['content'],$email_subject);
							
				$email_content = $row2['content'];
				$email_content = str_replace('{ID}',$get_last_id,$email_content);
				$email_content = str_replace('{USER}',$_SESSION['login_user'],$email_content);
				$email_content = str_replace('{PRIORITY}',$_POST['priority'],$email_content);
				$email_content = str_replace('{CATEGORY}',$_POST['category'],$email_content);
				$email_content = str_replace('{DATE}',date("F j, Y, g:i a"),$email_content);
				$email_content = str_replace('{SUBJECT}',$_POST['subject'],$email_content);
				$email_content = str_replace('{CONTENT}',$_POST['content'],$email_content);
				$email_content = str_replace('{CONTENT_URL}',SCRIPT_URL.'staff.php?tpl=tickets_show_ticket&id='.$get_last_id,$email_content);
				$email_content = str_replace('{URL}',SCRIPT_URL.'staff.php',$email_content);

				if ($send_out_email == 'yes')
				{
					$this->query_result = $db->db_query('SELECT email FROM staff');
					while ($row = $db->db_fetch_array($this->query_result))
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
			else 
			{
				// if the ticket doesn't have the send_alert set: get the selected categories subscribers and check whether email notification is activated or not
				$this->query_result = $db->db_query('SELECT subscribers FROM categories
													 WHERE name="'.$_POST['category'].'"
													');
				$row = $db->db_fetch_array($this->query_result);
				if (ereg(',',$row['subscribers']))
				{
					$row = explode(',',$row['subscribers']);
					$row = implode('" OR username="',$row);
				}
				else 
				{
					$row = $row['subscribers'];
				}

				$this->query_result = $db->db_query('SELECT subject FROM config WHERE name="toggle_user_new_ticket"');
				$row8 = $db->db_fetch_array($this->query_result);
				$send_out_email = $row8['subject'];

				$this->query_result = $db->db_query('SELECT subject,content FROM config WHERE name="user_new_ticket"');
				$row2 = $db->db_fetch_array($this->query_result);
						
				$email_subject = $row2['subject'];
				$email_subject = str_replace('{ID}',$get_last_id,$email_subject);
				$email_subject = str_replace('{USER}',$_SESSION['login_user'],$email_subject);
				$email_subject = str_replace('{PRIORITY}',$_POST['priority'],$email_subject);
				$email_subject = str_replace('{CATEGORY}',$_POST['category'],$email_subject);
				$email_subject = str_replace('{DATE}',date("F j, Y, g:i a"),$email_subject);
				$email_subject = str_replace('{SUBJECT}',$_POST['subject'],$email_subject);
				$email_subject = str_replace('{CONTENT}',$_POST['content'],$email_subject);
							
				$email_content = $row2['content'];
				$email_content = str_replace('{ID}',$get_last_id,$email_content);
				$email_content = str_replace('{USER}',$_SESSION['login_user'],$email_content);
				$email_content = str_replace('{PRIORITY}',$_POST['priority'],$email_content);
				$email_content = str_replace('{CATEGORY}',$_POST['category'],$email_content);
				$email_content = str_replace('{DATE}',date("F j, Y, g:i a"),$email_content);
				$email_content = str_replace('{SUBJECT}',$_POST['subject'],$email_content);
				$email_content = str_replace('{CONTENT}',$_POST['content'],$email_content);
				$email_content = str_replace('{CONTENT_URL}',SCRIPT_URL.'staff.php?tpl=tickets_show_ticket&id='.$get_last_id,$email_content);
				$email_content = str_replace('{URL}',SCRIPT_URL.'staff.php',$email_content);

				if ($send_out_email == 'yes')
				{
					$this->query_result = $db->db_query('SELECT email,get_email FROM staff WHERE username="'.$row.'"');
					while ($row = $db->db_fetch_array($this->query_result))
					{
						if ($row['get_email'] == 'yes')
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
			
			
		}
		$db->db_close();

		$user_screen = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/pages/slogic_redirect.tpl'));
		$user_screen = str_replace('{SECONDS}','3',$user_screen);
		$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_main&lang='.LANGUAGE,$user_screen);
		$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_DATA_SAVED}',$user_screen);
	}
	else 
	{
		
		$output = join ('', file (SCRIPT_PATH.'modules/users/tickets/templates/functions/tickets_new_ticket.tpl'));

		// file upload for the attachments
		// if not needed simply delete the upload form from the template
		if ($_FILES['attachment']['size'] > 0)
		{
			// if the file was uploaded, move it to the upload dir
			if (is_uploaded_file($_FILES['attachment']['tmp_name']))
			{
				$realname = $_FILES['attachment']['name'];
				$realname = str_replace(' ','',$realname);

				// if files are already uploaded, add the current one to the hidden list
				if (isset($_POST['ticket_file']))
				{
					$tmp_name = '';
					$tmp_hidden = '';
					
					// as long as hidden fields exist, recreate those fields
					for ($i = 0; $i != sizeof($_POST['ticket_file']); $i++)
					{
						$tmp_name .= $_POST['ticket_file'][$i].'<br>';
						$tmp_hidden .= '<input type="hidden" name="ticket_file[]" value="'.$_POST['ticket_file'][$i].'">';
					}
					$output = str_replace('{ATTACHMENTS}',$tmp_name.$realname,$output);
					$output = str_replace('{HIDDEN}',$tmp_hidden.'<input type="hidden" name="ticket_file[]" value="'.$realname.'">',$output);
				}
				else 
				{
					// if no file was uploaded so far, simply display the current files name and add it as hidden
					$output = str_replace('{ATTACHMENTS}',$realname,$output);
					$output = str_replace('{HIDDEN}','<input type="hidden" name="ticket_file[]" value="'.$realname.'">',$output);
				}
				
				// copy the file to the upload dir (below: if file based!)

				// get the temp file and insert it into the database
				$fp = fopen ($_FILES['attachment']['tmp_name'], 'r');
		        $data = addslashes (fread ($fp, $_FILES['attachment']['size']));
        		fclose ($fp);
				$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
				if ($db->db_connected)
				{
					// insert into database. Add username, "-1", filename as the identifiers
					$this->query_result = $db->db_query('INSERT INTO attachments (ticket_id,bin_data,filename,filetype,filesize,user,sent_date) VALUES ("-1","'.$data.'","'.$_FILES['attachment']['name'].'","'.$_FILES['attachment']['type'].'","'.$_FILES['attachment']['size'].'","'.$_SESSION['login_user'].'",now())');
				}
				$db->db_close();
        		
				// delete the temp file
				unlink ($_FILES['attachment']['tmp_name']);

			}
			else
			{
				// if the upload didn't work properly, display an error message
				if (DEBUG_MODE == 'on')
				{
					echo show_debug_message('File upload problem.',' Possible file upload attack: filename'.$_FILES['attachment']['name'].'!');
				}
			}
		}
		else 
		{
			// if the user made an error during the form submission, make sure all attachments keep on getting added to the ticket!
			if (isset($_POST['ticket_file']))
			{
				$tmp_name = '';
				$tmp_hidden = '';
				
				// as long as hidden fields exist, recreate those fields
				for ($i = 0; $i != sizeof($_POST['ticket_file']); $i++)
				{
					$tmp_name .= $_POST['ticket_file'][$i].'<br>';
					$tmp_hidden .= '<input type="hidden" name="ticket_file[]" value="'.$_POST['ticket_file'][$i].'">';
				}
				$output = str_replace('{ATTACHMENTS}',$tmp_name,$output);
				$output = str_replace('{HIDDEN}',$tmp_hidden,$output);
			}
			else 
			{
				// display placeholders if no files were uploaded so far.
				$output = str_replace('{ATTACHMENTS}','{LANG_TICKETS_UPLOAD_ERROR}',$output);
				$output = str_replace('{HIDDEN}','',$output);
			}
		}

		if ($_POST['subject'] == '')
		{
			$output = str_replace('{SUBJECT}','{LANG_TICKETS_SUBJECT_DEFAULT}',$output);
		}
		else 
		{
			$output = str_replace('{SUBJECT}',$_POST['subject'],$output);
		}

		if ($_POST['content'] == '')
		{
			$output = str_replace('{CONTENT}','{LANG_TICKETS_CONTENT_DEFAULT}',$output);
		}
		else
		{
			$output = str_replace('{CONTENT}',$_POST['content'],$output);
		}	
		
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{
			// get priorities
			$this->query_result = $db->db_query('SELECT name,info FROM priorities ORDER BY urgency_level');
			$numrows = $db->db_num_rows($this->query_result);
			if ($numrows != 0)
			{
				$make_priorities = '';
				$selected_priority = '';
				while ($row = $db->db_fetch_array($this->query_result))
				{
					if (isset($_POST['priority']))
					{
						if ($row['name'] == $_POST['priority'])
						{
							$selected_priority = '<option value="'.$row['name'].'"> '.$row['name'].' - '.$row['info'].'</option>';
						}
						else 
						{
							$make_priorities .= '<option value="'.$row['name'].'"> '.$row['name'].' - '.$row['info'].'</option>';
						}
					}
					else 
					{
						$make_priorities .= '<option value="'.$row['name'].'"> '.$row['name'].' - '.$row['info'].'</option>';
					}
				}
				if (isset($_POST['priority']))
				{
					$output = str_replace('{PRIORITY}','<select name="priority">'.$selected_priority.$make_priorities.'</select>',$output);					
				}
				else 
				{
					$output = str_replace('{PRIORITY}','<select name="priority">'.$make_priorities.'</select>',$output);
				}
			}
			else 
			{
				$output = str_replace('{PRIORITY}','{LANG_TICKETS_NO_PRIORITIES}',$output);
			}
	
			// get categories
			$this->query_result = $db->db_query('SELECT name,info FROM categories ORDER BY name');
			$numrows = $db->db_num_rows($this->query_result);
			if ($numrows != 0)
			{
				$make_categories = '';
				while ($row = $db->db_fetch_array($this->query_result))
				{
					if (isset($_POST['category']))
					{
						if ($row['name'] == $_POST['category'])
						{
							$selected_category = '<option value="'.$row['name'].'"> '.$row['name'].' - '.$row['info'].'</option>';
						}
						else 
						{
							$make_categories .= '<option value="'.$row['name'].'"> '.$row['name'].' - '.$row['info'].'</option>';
						}
					}
					else 
					{
						$make_categories .= '<option value="'.$row['name'].'"> '.$row['name'].' - '.$row['info'].'</option>';
					}
				}
				if (isset($_POST['category']))
				{
					$output = str_replace('{CATEGORY}','<select name="category">'.$selected_category.$make_categories.'</select>',$output);
				}
				else 
				{
					$output = str_replace('{CATEGORY}','<select name="category">'.$make_categories.'</select>',$output);
				}
			}
			else 
			{
				$output = str_replace('{CATEGORY}','{LANG_TICKETS_NO_CATEGORIES}',$output);
			}
		}
		$db->db_close();

		$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl='.TEMPLATE.'&lang='.LANGUAGE,$output);
	}

	if (isset($output))
	{
		return $output;
	}
	else 
	{
		return;
	}
}
?>