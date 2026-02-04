<?php
/***************************************************************************
								tickets_show_ticket.php
							-------------------------------
			created				: 18.01.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// show the current ticket content
function tickets_show_ticket()
{
	GLOBAL $user_screen;
	GLOBAL $status;
	GLOBAL $close_verify;
	
	if (!isset($_GET['id']))
	{
		$_GET['id'] = '0';
	}
	$output = join ('', file (SCRIPT_PATH.'modules/users/tickets/templates/functions/tickets_show_ticket.tpl'));

	$get_placeholders = explode('{',$output);
	$list_placeholders = array();
	for ($i = 0; $i != sizeof($get_placeholders); $i++)
	{
		$list_placeholders[$i] = explode('}',$get_placeholders[$i]);
		$list_placeholders[$i] = strtolower($list_placeholders[$i][0]);
	}
	
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$this->query_result = $db->db_query('SELECT * FROM tickets WHERE id=\''.$_GET['id'].'\' AND user=\''.$_SESSION['login_user'].'\'');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$status = $row['status'];
				$close_verify = $row['close_verified'];
				foreach ($row as $key => $value) 
				{
					if (in_array($key,$list_placeholders))
					{
						if ($key == 'content')
						{
							$tmp_content = $value;
							$tmp_content = str_replace("www.","http://www.",$tmp_content);
							$tmp_content = str_replace("http://http://","http://",$tmp_content);
							$tmp_content = str_replace("https://http://","https://",$tmp_content);
							$tmp_content = str_replace("ftp://http://","ftp://",$tmp_content);
							$tmp_content = str_replace("gopher://http://","gopher://",$tmp_content);
							$tmp_content = str_replace("news:http://","news:",$tmp_content);
							$tmp_content = str_replace("mailto:http://","mailto:",$tmp_content);
							$tmp_content = str_replace(" www."," http://www.",$tmp_content);
							$tmp_content = str_replace("\nwww.","\nhttp://www.",$tmp_content);
							
							$tmp_content = eregi_replace("(http://|https://|ftp://|gopher://|news:|mailto:)([[:alnum:]/!#$%&'()*+,.:;=?@~_-]+)([[:alnum:]/!#$%&'()*+:;=?@~_-])","<a href=\"\\1\\2\\3\" target=\"_blank\">\\1\\2\\3</a>", $tmp_content);

							$smilies_result = $db->db_query('SELECT find_match,replace_with FROM placeholders');
							$smilies_rows = $db->db_num_rows($this->query_result);
							if ($smilies_rows != 0)
							{
								while ($smilies_row = $db->db_fetch_array($smilies_result))
								{
									$tmp_content = str_replace($smilies_row['find_match'],$smilies_row['replace_with'],$tmp_content);
								}
							}
							$output = str_replace('{'.strtoupper($key).'}',nl2br(strip_tags($tmp_content,ALLOWED_TAGS)),$output);
						}
						else 
						{
							$output = str_replace('{'.strtoupper($key).'}',strip_tags($value),$output);
						}
					}
				}
			}
		}
		else 
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_main&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_SHOW_TICKET_PERMISSION}',$user_screen);
		}
	}
	
	$this->query_result = $db->db_query('SELECT * FROM attachments WHERE ticket_id=\''.$_GET['id'].'\' AND user=\''.$_SESSION['login_user'].'\'');
	$numrows = $db->db_num_rows($this->query_result);
	if ($numrows != 0)
	{
		$tmp_attachments = '';
		while ($row = $db->db_fetch_array($this->query_result))
		{
			$tmp_attachments .= '<a href="'.$_SERVER['PHP_SELF'].'?tpl=tickets_show_attachment&id='.$row['id'].'" target="_blank">{LANG_TICKETS_ATTACHMENT_ICON} '.$row['filename'].'</a><br>';
		}
		$output = str_replace('{ATTACHMENTS}',$tmp_attachments,$output);
	}
	else
	{
		$output = str_replace('{ATTACHMENTS}','{LANG_TICKETS_UPLOAD_ERROR}',$output);
	}
	$db->db_close();

	return $output;
}
?>