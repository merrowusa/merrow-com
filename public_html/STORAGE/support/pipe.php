#!/usr/bin/php -q
<?php
/* email pipe
 * - supports plain text & MIME emails (7bit, 8bit, quoted-printable, base64)
 * - generates a ticket from the email content
 * - if the recipient email is assigned to a category, the ticket gets added to that category
 * - if attachments are included, they get added to the attachments database table
 *
 * so far tested with: mozilla, Outlook Express, Webmail clients
 *
 * known problems:
 * 				  - zip files get corrupted (show no data) IF tried to access, BUT if you select "save as.." on the URL, then it works just fine!
 *				    add a file selection, so that the file gets marked for "save as...", if it's not an image, txt or html file!
 *				  - flood control!
 */

$email = '';
$email_array = array();
$get_boundary = '';

// read from stdin
$fd = fopen("php://stdin", "r");
$email = "";
while (!feof($fd)) 
{
    //$email_array[] = fread($fd, 1024);
    $email_array[] = fgets($fd, 4096);
}
fclose($fd);

$email = implode('',$email_array);

$i=0;
foreach($email_array as $get_header) 
{
    if (preg_match("/^$/", $get_header)) break;
	$get_header = preg_replace("/:\s/", ":", $get_header);
	if (preg_match("/:/", $get_header)) 
	{
		$vars = preg_split("/:/", $get_header, 2);
		if ($vars[1]) 
		{
			if (($vars[0] == 'Content-Type') && (!ereg('text/plain',$vars[1])))
			{
				preg_match("/oundary=\"(.*)\"/",trim($email_array[$i+1]), $matches);
				$get_boundary = $matches[1];
			}
			chop($header[$vars[0]] = $vars[1]);
		}
	}
	$i++;
}
$i++;
$email_content = implode('',array_slice($email_array,$i,sizeof($email_array)));

$i=1;
foreach ($header as $key => $value) 
{
    $content .= $i." ".$key.": ".$value."\n\n\n";
    $i++;
}

$content = '';
$z=0;
if ($get_boundary)
{
	$content_array = explode($get_boundary,$email_content);
	
	for($i=1; $i != sizeof($content_array); $i++)
	{
		$get_header_part = explode("\n\n",$content_array[$i]);
		// does the email have several attachments?
		if (ereg('multipart/alternative',$get_header_part[0]))
		{
			// get the sub-boundary part
			preg_match("/oundary=\"(.*)\"/",$get_header_part[0], $matches);
			$get_alternative_boundary = $matches[1];
			
			$get_plain_text_part = explode($get_alternative_boundary,$content_array[$i]);
			for($j=1; $j != sizeof($get_plain_text_part); $j++)
			{
				$sub_headers = explode("\n\n",$get_plain_text_part[$j]);
				
				// is the text plain part in a sub-boundary, then make it the content
				if (ereg('text/plain',$sub_headers[0]))
				{
					$tmp_content = trim($get_plain_text_part[$j]);
					$tmp_content = explode("\n\n",$tmp_content);
					$tmp_content = implode('',array_slice($tmp_content,1,sizeof($tmp_content)));
					if (substr($tmp_content,-2) == '--')
					{
						$content = trim(substr($tmp_content,0,(strlen($tmp_content)-2)));
					}
					else 
					{
						$content = trim($tmp_content);
					}
				}
			}
		}
		
		// make sure to grab the plain text part of the email, if available
		if ((ereg('text/plain',$get_header_part[0])) && ($content == ''))
		{
			$tmp_content = trim($content_array[$i]);
			$tmp_content = explode("\n\n",$tmp_content);
			if (!ereg('filename',$tmp_content[0]))
			{
				$tmp_content = implode('',array_slice($tmp_content,1,sizeof($tmp_content)));
				if (substr($tmp_content,-2) == '--')
				{
					$content = trim(substr($tmp_content,0,(strlen($tmp_content)-2)));
				}
				else 
				{
					$content = trim($tmp_content);
				}
			}
		}
		
		// lets grab the HTML part as well, just to make sure, s.th. gets converted as a ticket
		if ((ereg('text/html',$get_header_part[0])) && ($content == ''))
		{
			$tmp_content = trim($content_array[$i]);
			$tmp_content = explode("\n\n",$tmp_content);
			if (!ereg('filename',$tmp_content[0]))
			{
				$tmp_content = implode('',array_slice($tmp_content,1,sizeof($tmp_content)));
				if (substr($tmp_content,-2) == '--')
				{
					$html_content = trim(substr($tmp_content,0,(strlen($tmp_content)-2)));
				}
				else 
				{
					$html_content = trim($tmp_content);
				}
			}
		}

		if (ereg('name',$get_header_part[0]))
		{
			$tmp_headers = trim($content_array[$i]);
			$tmp_headers = explode("\n\n",$tmp_headers);
					
			if (ereg('filename',$tmp_headers[0]))
			{
				preg_match("/filename=\"(.*)\"/",$tmp_headers[0], $matches);
				$attachment[$z]['name'] = $matches[1];
			}
			else 
			{
				preg_match("/name=\"(.*)\"/",$tmp_headers[0], $matches);
				$attachment[$z]['name'] = $matches[1];
			}
			preg_match("/Content-Type: (.*)/",$tmp_headers[0], $matches);
			$attachment[$z]['type'] = $matches[1];
			if (ereg(';',$attachment[$z]['type']))
			{
				$attachment[$z]['type'] = explode(';',$attachment[$z]['type']);
				$attachment[$z]['type'] = $attachment[$z]['type'][0];
			}
			preg_match("/Encoding: (.*)/",$tmp_headers[0], $matches);
			$attachment[$z]['encoding'] = trim($matches[1]);
			
			if ($attachment[$z]['encoding'] == 'base64')
			{
				$attachment[$z]['data'] = base64_decode(trim($tmp_headers[1]));
			}
			else if ($attachment[$z]['encoding'] == 'quoted-printable')
			{
				if (sizeof($tmp_headers) > 1)
				{
					$get_data = trim(implode('',array_slice($tmp_headers,1,sizeof($tmp_headers))));
				}
				else 
				{
					$get_data = trim($tmp_headers[1]);
				}
		        // Remove soft line breaks
		        $get_data = preg_replace("/=\r?\n/", '', $get_data);
		
		        // Replace encoded characters
				$get_data = preg_replace('/=([a-f0-9]{2})/ie', "chr(hexdec('\\1'))", $get_data);
				
				if (substr($get_data,-2) == '--')
				{
					$get_data = trim(substr($get_data,0,(strlen($get_data)-2)));
				}
				else 
				{
					$get_data = trim($get_data);
				}
				$attachment[$z]['data'] = $get_data;
			}
			else
			{
				if (sizeof($tmp_headers) > 1)
				{
					$get_data = trim(implode('',array_slice($tmp_headers,1,sizeof($tmp_headers))));
				}
				else 
				{
					$get_data = trim($tmp_headers[1]);
				}

				if (substr($get_data,-2) == '--')
				{
					$get_data = trim(substr($get_data,0,(strlen($get_data)-2)));
				}
				else 
				{
					$get_data = trim($get_data);
				}
				$attachment[$z]['data'] = $get_data;
			}
			$z++;
		}
	}
	
	// ok, no content? then use the HTML part - stupid Outlook :(
	if ($content == '')
	{
		$content = $html_content;
	}
		
	
}
else 
{
	$content = $email_content;
}

include 'config.php';

include SCRIPT_PATH.'includes/db_modules/mysql.inc';

$recipient = $header['To'];
$from = $header['From'];
if (ereg('<',$from))
{
	$from = explode('<',$from);
    $from = explode('>',$from[1]);
    $from = $from[0];
}
if (ereg('<',$recipient))
{
	$recipient = explode('<',$recipient);
    $recipient = explode('>',$recipient[1]);
    $recipient = $recipient[0];
}
$subject = $header['Subject'];
if ($subject == '')
{
	$subject = 'No Subject';
}

	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$current_date = date("Y-m-d");
		
		$this->query_result = $db->db_query('SELECT * FROM email_flood WHERE email="'.$from.'" AND sentdate="'.$current_date.'"');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$email_flood_data = $db->db_fetch_array($this->query_result);
			if ($email_flood_data['counter'] > $email_flood_limit)
			{
				
				if ($email_flood_data['notified'] == 'no')
				{
					$this->query_result = $db->db_query('SELECT email FROM admin');
					$admin_email = $db->db_fetch_array($this->query_result);
					$admin_email = $admin_email['email'];
					
					$this->query_result = $db->db_query('SELECT subject FROM config WHERE name="toggle_pipe_flood_report"');
					$row8 = $db->db_fetch_array($this->query_result);
					$send_out_email = $row8['subject'];

					$this->query_result = $db->db_query('SELECT subject,content FROM config WHERE name="pipe_flood_report"');
					$row2 = $db->db_fetch_array($this->query_result);
		
					$email_subject = $row2['subject'];
										
					$email_content = $row2['content'];
					$email_content = str_replace('{EMAIL}',$from,$email_content);
					$email_content = str_replace('{USER}',$from,$email_content);
								
					if ($send_out_email == 'yes')
					{		
						if ($slogic_send_email == 'smtp')
						{
							require_once(SCRIPT_PATH.'includes/htmlMimeMail.php');
							$smtp_mail = new htmlMimeMail();
	
							$smtp_mail->setHtml(nl2br($email_content), $email_content);
							$get_from = explode(' ',$slogic_email_from);
							$get_from = explode('Reply-To',$get_from[1]);
							$get_from = trim($get_from[0]);
							$smtp_mail->setReturnPath($get_from);
							$smtp_mail->setFrom($get_from);
							$smtp_mail->setSubject($email_subject);
							$smtp_mail->send(array($admin_email));
						}
						else 
						{
							mail($admin_email,$email_subject,$email_content,$slogic_email_from);
						}
					}
					$db->db_query('UPDATE email_flood SET notified="yes" WHERE email="'.$from.'" AND sentdate="'.$current_date.'"');
				}
				$db->db_close();
				exit;
			}
			else
			{
				$db->db_query('UPDATE email_flood SET counter=counter+1 WHERE email="'.$from.'" AND sentdate="'.$current_date.'"');
			}
		}		
		else
		{
			$db->db_query('INSERT INTO email_flood (email,sentdate,counter) VALUES ("'.$from.'",now(),"1")');
		}
		
		$get_pipe = '';
		$get_pipe = explode('[#ID',$subject);
		$get_pipe = explode(']',$get_pipe[1]);
		$get_pipe = $get_pipe[0];
		$this->query_result = $db->db_query('SELECT id,status,user,staff FROM tickets WHERE pipe_id=\''.$get_pipe.'\'');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows == 0)
		{
			// check whether the "to" is a known category name or not
			$this->query_result = $db->db_query('SELECT name FROM categories WHERE email_pipe=\''.trim($recipient).'\'');
			$numrows = $db->db_num_rows($this->query_result);
			if ($numrows != 0)
			{
				$row3 = $db->db_fetch_array($this->query_result);
				$category = $row3['name'];
			}
			else 
			{
				$category = 'email_pipe';
			}
			// $pipe_id = str_replace(' ','',microtime());
			$get_result = $db->db_query('SELECT username,email FROM users WHERE username=\''.$from.'\' OR email=\''.$from.'\'');
			$numrows = $db->db_num_rows($get_result);
			if ($numrows == 0)
			{
				// $password = $from.'-'.str_replace(' ','',microtime());
				$rand_pool = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t',
								   'u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9');
				
				$temp_pass = '';
				for($i=0;$i != 8;$i++)
				{
					$temp_pass .= $rand_pool[rand(0,sizeof($rand_pool))];
				}
				
				$this->query_result = $db->db_query('SELECT subject FROM config WHERE name="toggle_pipe_new_user"');
				$row8 = $db->db_fetch_array($this->query_result);
				$send_out_email = $row8['subject'];

				$this->query_result = $db->db_query('SELECT subject,content FROM config WHERE name="pipe_new_user"');
				$row2 = $db->db_fetch_array($this->query_result);
	
				$email_subject = $row2['subject'];
									
				$email_content = $row2['content'];
				$email_content = str_replace('{EMAIL}',$from,$email_content);
				$email_content = str_replace('{USERNAME}',$from,$email_content);
				$email_content = str_replace('{PASSWORD}',$temp_pass,$email_content);
				$email_content = str_replace('{URL}',SCRIPT_URL.'index.php',$email_content);
								
				if ($slogic_pipe_auto_user == 'yes')
				{
					if ($send_out_email == 'yes')
					{	
						if ($slogic_send_email == 'smtp')
						{
							require_once(SCRIPT_PATH.'includes/htmlMimeMail.php');
							$smtp_mail = new htmlMimeMail();
		
							$smtp_mail->setHtml(nl2br($email_content), $email_content);
							$get_from = explode(' ',$slogic_email_from);
							$get_from = explode('Reply-To',$get_from[1]);
							$get_from = trim($get_from[0]);
							$smtp_mail->setReturnPath($get_from);
							$smtp_mail->setFrom($get_from);
							$smtp_mail->setSubject($email_subject);
							$smtp_mail->send(array($from));
						}
						else 
						{
							mail($from,$email_subject,$email_content,$slogic_email_from);
						}
					}				
					$this->query_result = $db->db_query('INSERT INTO users (username,password,email,get_email,language) VALUES ("'.$from.'","'.md5($temp_pass).'","'.$from.'","yes","en")');
				}			
			}
			$row = $db->db_fetch_array($get_result);
			if ($row['username'] == $from)
			{
				$ticket_username = $from;
				$ticket_result = $db->db_query('INSERT INTO tickets (user,staff,priority,category,subject,content,status,sentdate,last_update,who_updated) VALUES ("'.$from.'","none","'.$default_pipe_priority.'","'.$category.'","'.$subject.'","'.$content.'","open",now(),now(),"user")');
			}
			else if ($row['email'] == $from)
			{
				$ticket_username = $row['username'];
				$ticket_result = $db->db_query('INSERT INTO tickets (user,staff,priority,category,subject,content,status,sentdate,last_update,who_updated) VALUES ("'.$row['username'].'","none","'.$default_pipe_priority.'","'.$category.'","'.$subject.'","'.$content.'","open",now(),now(),"user")');
			}
			else 
			{
				$ticket_username = $from;
				$ticket_result = $db->db_query('INSERT INTO tickets (user,staff,priority,category,subject,content,status,sentdate,last_update,who_updated) VALUES ("'.$from.'","none","'.$default_pipe_priority.'","'.$category.'","'.$subject.'","'.$content.'","open",now(),now(),"user")');
			}
			
			// get the ticket_id, so that the pipe_id can be updated
			$get_last_id = $db->db_insert_id();
			
			// we can use the ticket ID as pipe-ID, since the pipe includes an email verification
			$this->query_result = $db->db_query('UPDATE tickets SET pipe_id="'.$get_last_id.'" WHERE id="'.$get_last_id.'"');
			
			if (!$ticket_result)
			{
				// email to user
				$this->query_result = $db->db_query('SELECT subject FROM config WHERE name="toggle_pipe_ticket_error"');
				$row8 = $db->db_fetch_array($this->query_result);
				$send_out_email = $row8['subject'];
				
				$this->query_result = $db->db_query('SELECT subject,content FROM config WHERE name="pipe_ticket_error"');
				$row2 = $db->db_fetch_array($this->query_result);
	
				$email_subject = $row2['subject'];
									
				$email_content = $row2['content'];
				$email_content = str_replace('{EMAIL}',$from,$email_content);
				$email_content = str_replace('{USERNAME}',$ticket_username,$email_content);
				$email_content = str_replace('{URL}',SCRIPT_URL.'index.php',$email_content);

				if ($send_out_email == 'yes')
				{
					if ($slogic_send_email == 'smtp')
					{
						require_once(SCRIPT_PATH.'includes/htmlMimeMail.php');
						$smtp_mail = new htmlMimeMail();
							
						$smtp_mail->setHtml(nl2br($email_content), $email_content);
						$get_from = explode(' ',$slogic_email_from);
						$get_from = explode('Reply-To',$get_from[1]);
						$get_from = trim($get_from[0]);
						$smtp_mail->setReturnPath($get_from);
						$smtp_mail->setFrom($get_from);
						$smtp_mail->setSubject($email_subject);
						$smtp_mail->send(array($from));
					}
					else 
					{
						mail($from,$email_subject,$email_content,$slogic_email_from);
					}
				}
			}
			else 
			{
				
				if (sizeof($attachment) != 0)
				{
					for($i=0; $i != sizeof($attachment); $i++)
					{
						$this->query_result = $db->db_query('INSERT INTO attachments (ticket_id,bin_data,filename,filetype,filesize,user,sent_date) VALUES ("'.$get_last_id.'","'.addslashes($attachment[$i]['data']).'","'.$attachment[$i]['name'].'","'.$attachment[$i]['type'].'","1","'.$ticket_username.'",now())');
					}
				}
				// email to user
				$this->query_result = $db->db_query('SELECT subject FROM config WHERE name="toggle_pipe_new_ticket_user"');
				$row8 = $db->db_fetch_array($this->query_result);
				$send_out_email = $row8['subject'];

				$this->query_result = $db->db_query('SELECT subject,content FROM config WHERE name="pipe_new_ticket_user"');
				$row2 = $db->db_fetch_array($this->query_result);
	
				$email_subject = $row2['subject'];
				$email_subject = str_replace('{PIPE_ID}',$get_last_id,$email_subject);
									
				$email_content = $row2['content'];
				$email_content = str_replace('{EMAIL}',$from,$email_content);
				$email_content = str_replace('{USERNAME}',$ticket_username,$email_content);
				$email_content = str_replace('{PIPE_ID}',$get_last_id,$email_content);
				$email_content = str_replace('{URL}',SCRIPT_URL.'index.php',$email_content);
						
				if ($send_out_email == 'yes')
				{			
					if ($slogic_send_email == 'smtp')
					{
						require_once(SCRIPT_PATH.'includes/htmlMimeMail.php');
						$smtp_mail = new htmlMimeMail();
	
						$smtp_mail->setHtml(nl2br($email_content), $email_content);
						$get_from = explode(' ',$slogic_email_from);
						$get_from = explode('Reply-To',$get_from[1]);
						$get_from = trim($get_from[0]);
						$smtp_mail->setReturnPath($get_from);
						$smtp_mail->setFrom($get_from);
						$smtp_mail->setSubject($email_subject);
						$smtp_mail->send(array($from));
					}
					else 
					{
						mail($from,$email_subject,$email_content,$slogic_email_from);
					}
				}

				// email to staff members
				$this->query_result = $db->db_query('SELECT subject FROM config WHERE name="toggle_pipe_new_ticket_staff"');
				$row8 = $db->db_fetch_array($this->query_result);
				$send_out_email = $row8['subject'];
				
				$this->query_result = $db->db_query('SELECT subject,content FROM config WHERE name="pipe_new_ticket_staff"');
				$row2 = $db->db_fetch_array($this->query_result);
						
				$email_subject = $row2['subject'];
				$email_subject = str_replace('{ID}',$get_last_id,$email_subject);
				$email_subject = str_replace('{USER}',$ticket_username,$email_subject);
				$email_subject = str_replace('{DATE}',date("F j, Y, g:i a"),$email_subject);
							
				$email_content = $row2['content'];
				$email_content = str_replace('{ID}',$get_last_id,$email_content);
				$email_content = str_replace('{USER}',$ticket_username,$email_content);
				$email_content = str_replace('{DATE}',date("F j, Y, g:i a"),$email_content);
				$email_content = str_replace('{SUBJECT}',$subject,$email_content);
				$email_content = str_replace('{CONTENT}',$content,$email_content);
				$email_content = str_replace('{CONTENT_URL}',SCRIPT_URL.'staff.php?tpl=tickets_show_ticket&id='.$get_last_id,$email_content);
				$email_content = str_replace('{URL}',SCRIPT_URL.'staff.php',$email_content);

				if ($send_out_email == 'yes')
				{
					$this->query_result = $db->db_query('SELECT email,get_email FROM staff');
					while ($row = $db->db_fetch_array($this->query_result))
					{
						if ($row['get_email'] == 'yes')
						{
							if ($slogic_send_email == 'smtp')
							{
								require_once(SCRIPT_PATH.'includes/htmlMimeMail.php');
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
		else 
		{
			$row = $db->db_fetch_array($this->query_result);
			$ticket_id = $row['id'];
			$ticket_status = $row['status'];
			$ticket_user = $row['user'];
			$ticket_staff = $row['staff'];
			
			// verify the username
			$get_result = $db->db_query('SELECT username,email FROM users WHERE username=\''.$from.'\' OR email=\''.$from.'\'');
			$numrows = $db->db_num_rows($get_result);
			$get_details = $db->db_fetch_array($get_result);
			if (!ereg('@',$ticket_user))
			{
				$check_name = 'username';
			}
			else 
			{
				$check_name = 'email';
			}
			if (($numrows == 0) || ($get_details[$check_name] != $ticket_user))
			{
				// user is wrong -> either tried to reply to a ticket, which doesn't belong to him,
				//					or submitted the new email from a different email address
				
				// email to user
				$this->query_result = $db->db_query('SELECT subject FROM config WHERE name="toggle_pipe_add_note_error"');
				$row8 = $db->db_fetch_array($this->query_result);
				$send_out_email = $row8['subject'];
				
				$this->query_result = $db->db_query('SELECT subject,content FROM config WHERE name="pipe_add_note_error"');
				$row2 = $db->db_fetch_array($this->query_result);
	
				$email_subject = $row2['subject'];
									
				$email_content = $row2['content'];
				$email_content = str_replace('{FROM}',$from,$email_content);
				$email_content = str_replace('{URL}',SCRIPT_URL.'index.php',$email_content);
									
				if ($send_out_email == 'yes')
				{
					if ($slogic_send_email == 'smtp')
					{
						require_once(SCRIPT_PATH.'includes/htmlMimeMail.php');
						$smtp_mail = new htmlMimeMail();
	
						$smtp_mail->setHtml(nl2br($email_content), $email_content);
						$get_from = explode(' ',$slogic_email_from);
						$get_from = explode('Reply-To',$get_from[1]);
						$get_from = trim($get_from[0]);
						$smtp_mail->setReturnPath($get_from);
						$smtp_mail->setFrom($get_from);
						$smtp_mail->setSubject($email_subject);
						$smtp_mail->send(array($from));
					}
					else 
					{
						mail($from,$email_subject,$email_content,$slogic_email_from);
					}
				}									
			}
			else
			{
				// if the ticket is not closed, add a note, else send an email asking the user to manually re-open the ticket
				if ($ticket_status != 'closed')
				{
					if ($get_details['username'] == $from)
					{
						$this->query_result = $db->db_query('INSERT INTO notes (ticket_id,sender,content,sent_date,show_to,who_is) VALUES ("'.$get_pipe.'","'.$from.'","'.$content.'",now(),"both","user")');
					}
					else if ($get_details['email'] == $from)
					{
						$this->query_result = $db->db_query('INSERT INTO notes (ticket_id,sender,content,sent_date,show_to,who_is) VALUES ("'.$get_pipe.'","'.$get_details['username'].'","'.$content.'",now(),"both","user")');
					}
					else 
					{
						// this event shouldn't occur anyway, though... but you never know ;)
						// email to user
						$this->query_result = $db->db_query('SELECT subject FROM config WHERE name="toggle_pipe_add_note_error"');
						$row8 = $db->db_fetch_array($this->query_result);
						$send_out_email = $row8['subject'];

						$this->query_result = $db->db_query('SELECT subject,content FROM config WHERE name="pipe_add_note_error"');
						$row2 = $db->db_fetch_array($this->query_result);
			
						$email_subject = $row2['subject'];
											
						$email_content = $row2['content'];
						$email_content = str_replace('{FROM}',$from,$email_content);
						$email_content = str_replace('{URL}',SCRIPT_URL.'index.php',$email_content);
								
						if ($send_out_email == 'yes')
						{			
							if ($slogic_send_email == 'smtp')
							{
								require_once(SCRIPT_PATH.'includes/htmlMimeMail.php');
								$smtp_mail = new htmlMimeMail();
		
								$smtp_mail->setHtml(nl2br($email_content), $email_content);
								$get_from = explode(' ',$slogic_email_from);
								$get_from = explode('Reply-To',$get_from[1]);
								$get_from = trim($get_from[0]);
								$smtp_mail->setReturnPath($get_from);
								$smtp_mail->setFrom($get_from);
								$smtp_mail->setSubject($email_subject);
								$smtp_mail->send(array($from));
							}
							else 
							{
								mail($from,$email_subject,$email_content,$slogic_email_from);
							}
						}
						$db->db_close();
						exit;
					}
					
					if (sizeof($attachment) != 0)
					{
						for($i=0; $i != sizeof($attachment); $i++)
						{
							$this->query_result = $db->db_query('INSERT INTO attachments (ticket_id,bin_data,filename,filetype,filesize,user,sent_date) VALUES ("'.$get_pipe.'","'.addslashes($attachment[$i]['data']).'","'.$attachment[$i]['name'].'","'.$attachment[$i]['type'].'","1","'.$get_details['username'].'",now())');
						}
					}
					
					// email to user
					$this->query_result = $db->db_query('SELECT subject FROM config WHERE name="toggle_pipe_add_note_user"');
					$row8 = $db->db_fetch_array($this->query_result);
					$send_out_email = $row8['subject'];
										
					$this->query_result = $db->db_query('SELECT subject,content FROM config WHERE name="pipe_add_note_user"');
					$row2 = $db->db_fetch_array($this->query_result);
		
					$email_subject = $row2['subject'];
					$email_subject = str_replace('{PIPE_ID}',$get_pipe,$email_subject);
										
					$email_content = $row2['content'];
					$email_content = str_replace('{EMAIL}',$from,$email_content);
					$email_content = str_replace('{USER}',$ticket_user,$email_content);
					$email_content = str_replace('{PIPE_ID}',$get_pipe,$email_content);
					$email_content = str_replace('{URL}',SCRIPT_URL.'index.php',$email_content);
										
					if ($send_out_email == 'yes')
					{
						if ($slogic_send_email == 'smtp')
						{
							require_once(SCRIPT_PATH.'includes/htmlMimeMail.php');
							$smtp_mail = new htmlMimeMail();
	
							$smtp_mail->setHtml(nl2br($email_content), $email_content);
							$get_from = explode(' ',$slogic_email_from);
							$get_from = explode('Reply-To',$get_from[1]);
							$get_from = trim($get_from[0]);
							$smtp_mail->setReturnPath($get_from);
							$smtp_mail->setFrom($get_from);
							$smtp_mail->setSubject($email_subject);
							$smtp_mail->send(array($from));
						}
						else 
						{
							mail($from,$email_subject,$email_content,$slogic_email_from);
						}
					}
					
					// email to staff if status=assigned
					if ($ticket_status == 'assigned')
					{
						$this->query_result = $db->db_query('SELECT subject FROM config WHERE name="toggle_pipe_add_note_staff"');
						$row8 = $db->db_fetch_array($this->query_result);
						$send_out_email = $row8['subject'];

						$this->query_result = $db->db_query('SELECT subject,content FROM config WHERE name="pipe_add_note_staff"');
						$row2 = $db->db_fetch_array($this->query_result);
			
						$email_subject = $row2['subject'];
						$email_subject = str_replace('{USER}',$ticket_user,$email_subject);
											
						$email_content = $row2['content'];
						$email_content = str_replace('{EMAIL}',$from,$email_content);
						$email_content = str_replace('{USER}',$ticket_user,$email_content);
						$email_content = str_replace('{PIPE_ID}',$get_pipe,$email_content);
						$email_content = str_replace('{CONTENT}',$content,$email_content);
						$email_content = str_replace('{URL}',SCRIPT_URL.'staff.php',$email_content);
							
						if ($send_out_email == 'yes')
						{				
							$this->query_result = $db->db_query('SELECT email,get_email FROM staff WHERE username="'.$ticket_staff.'"');
							$row = $db->db_fetch_array($this->query_result);
							if ($row['get_email'] == 'yes')
							{
								if ($slogic_send_email == 'smtp')
								{
									require_once(SCRIPT_PATH.'includes/htmlMimeMail.php');
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
				else 
				{
					// email to user to reopen the ticket
					$this->query_result = $db->db_query('SELECT subject FROM config WHERE name="toggle_pipe_add_note_closed"');
					$row8 = $db->db_fetch_array($this->query_result);
					$send_out_email = $row8['subject'];
					
					$this->query_result = $db->db_query('SELECT subject,content FROM config WHERE name="pipe_add_note_closed"');
					$row2 = $db->db_fetch_array($this->query_result);
		
					$email_subject = $row2['subject'];
										
					$email_content = $row2['content'];
					$email_content = str_replace('{EMAIL}',$from,$email_content);
					$email_content = str_replace('{USER}',$ticket_user,$email_content);
					$email_content = str_replace('{PIPE_ID}',$get_pipe,$email_content);
					$email_content = str_replace('{URL}',SCRIPT_URL.'index.php',$email_content);
							
					if ($send_out_email == 'yes')
					{			
						if ($slogic_send_email == 'smtp')
						{
							require_once(SCRIPT_PATH.'includes/htmlMimeMail.php');
							$smtp_mail = new htmlMimeMail();
	
							$smtp_mail->setHtml(nl2br($email_content), $email_content);
							$get_from = explode(' ',$slogic_email_from);
							$get_from = explode('Reply-To',$get_from[1]);
							$get_from = trim($get_from[0]);
							$smtp_mail->setReturnPath($get_from);
							$smtp_mail->setFrom($get_from);
							$smtp_mail->setSubject($email_subject);
							$smtp_mail->send(array($from));
						}
						else 
						{
							mail($from,$email_subject,$email_content,$slogic_email_from);
						}
					}
				}
			}
		}
	}
	$db->db_close();
?>