<?php
/***************************************************************************
								tickets_list_notes.php
							------------------------------
			created				: 19.01.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// list all notes belonging to the referring ticket
function tickets_list_notes()
{
	GLOBAL $status;
	
	$output = join ('', file (SCRIPT_PATH.'modules/users/tickets/templates/functions/tickets_list_notes.tpl'));
	
	$get_note_part = explode('<NOTE>',$output);
	$get_note_part = explode('</NOTE>',$get_note_part[1]);

	$get_nonotes_part = explode('<NO_NOTES>',$output);
	$get_nonotes_part = explode('</NO_NOTES>',$get_nonotes_part[1]);
	
	$get_placeholders = explode('{',$get_note_part[0]);
	$list_placeholders = array();
	for ($i = 0; $i != sizeof($get_placeholders); $i++)
	{
		$list_placeholders[$i] = explode('}',$get_placeholders[$i]);
		$list_placeholders[$i] = strtolower($list_placeholders[$i][0]);
	}
	
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$this->query_result = $db->db_query('SELECT * FROM notes WHERE ticket_id=\''.$_GET['id'].'\' AND show_to!=\'staff\' ORDER BY sent_date');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$tmp_output = array();
			$i = 0;
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$tmp_output[$i] = $get_note_part[0];
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

							// add staff signature
							if ($row['who_is'] == 'staff')
							{
								$tmp_result = $db->db_query('SELECT signature FROM staff WHERE username="'.$row['sender'].'"');
								$get_sig = $db->db_fetch_array($tmp_result);
								if ($get_sig['signature'] != '')
								{
									$tmp_content .= "\n".$get_sig['signature'];
								}
							}
							
							$smilies_result = $db->db_query('SELECT find_match,replace_with FROM placeholders');
							$smilies_rows = $db->db_num_rows($this->query_result);
							if ($smilies_rows != 0)
							{
								while ($smilies_row = $db->db_fetch_array($smilies_result))
								{
									$tmp_content = str_replace($smilies_row['find_match'],$smilies_row['replace_with'],$tmp_content);
								}
							}
							$tmp_output[$i] = str_replace('{'.strtoupper($key).'}',nl2br(strip_tags($tmp_content,ALLOWED_TAGS)),$tmp_output[$i]);
						}
						else 
						{
							$tmp_output[$i] = str_replace('{'.strtoupper($key).'}',strip_tags($value),$tmp_output[$i]);
						}
					}
					if (($row['sender'] == $_SESSION['login_user']) && ($row['who_is'] != 'staff') && ($status != 'closed'))
					{
						$tmp_output[$i] = str_replace('{EDIT}','<a href="'.$_SERVER['PHP_SELF'].'?tpl=tickets_show_ticket_edit&lang='.LANGUAGE.'&id='.$_GET['id'].'&note_id='.$row['id'].'">{LANG_TICKETS_NOTE_EDIT}</a>',$tmp_output[$i]);
						$tmp_output[$i] = str_replace('{DELETE}','<a href="'.$_SERVER['PHP_SELF'].'?tpl=tickets_confirm_delete_note&lang='.LANGUAGE.'&id='.$_GET['id'].'&note_id='.$row['id'].'">{LANG_TICKETS_NOTE_DELETE}</a>',$tmp_output[$i]);
					}
					else 
					{
						$tmp_output[$i] = str_replace('{EDIT}','',$tmp_output[$i]);
						$tmp_output[$i] = str_replace('{DELETE}','',$tmp_output[$i]);
					}

				}
				$i++;
			}
			$output = str_replace($get_nonotes_part[0],'',$output);
			$output = str_replace($get_note_part[0],implode('',$tmp_output),$output);
		}
		else 
		{
			$output = str_replace($get_note_part[0],'',$output);
		}
	}
	$db->db_close();
	
	return $output;
}
?>