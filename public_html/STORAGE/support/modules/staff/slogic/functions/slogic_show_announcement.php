<?php
/***************************************************************************
								slogic_show_announcement.php
							------------------------------------
			created				: 18.01.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display selected announcement (approve the user is allowed to access it -> show it / redirect him)
// announcement database:
//			sent_date = date when the message should appear if show_date != now
// 			show_date = never, now, equal, equal_up
//			show_to	  = users, staff, both
function slogic_show_announcement()
{
	GLOBAL $user_screen;
	
	if (!isset($_GET['id']))
	{
		$_GET['id'] = '0';
	}
	$output = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/functions/slogic_show_announcement.tpl'));

	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		// get announcement
		$this->query_result = $db->db_query('SELECT id,subject,content,sent_date,show_date FROM announcements WHERE (id=\''.$_GET['id'].'\') AND (show_date != \'never\') AND (show_to != \'users\')');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$date_verified = 0;
				if ($row['show_date'] == 'now')
				{
					$date_verified = 1;
				}
				else if (($row['show_date'] == 'equal') && ($row['sent_date'] == date('Y-m-d')))
				{
					$date_verified = 1;
				}
				else if (($row['show_date'] == 'equal_up') && ($row['sent_date'] <= date('Y-m-d')))
				{
					$date_verified = 1;
				}
				if ($date_verified)
				{
					$output = str_replace('{SUBJECT}',strip_tags($row['subject']),$output);
					
					$smilies_result = $db->db_query('SELECT find_match,replace_with FROM placeholders');
					$smilies_rows = $db->db_num_rows($this->query_result);
					if ($smilies_rows != 0)
					{
						while ($smilies_row = $db->db_fetch_array($smilies_result))
						{
							$row['content'] = str_replace($smilies_row['find_match'],$smilies_row['replace_with'],$row['content']);
						}
					}
					$output = str_replace('{CONTENT}',nl2br(strip_tags($row['content'],ALLOWED_TAGS)),$output);
					$output = str_replace('{SENT_DATE}',$row['sent_date'],$output);
				}
				else 
				{
					$output = str_replace('{SUBJECT}','{LANG_SLOGIC_INVALID_ANNOUNCEMENT}',$output);
					$output = str_replace('{CONTENT}','',$output);
					$output = str_replace('{SENT_DATE}','',$output);
				}
			}
		}
		else 
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_main&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_WRONG_ANNOUNCEMENT}',$user_screen);
		}
	}
	$db->db_close();

	return $output;
}
?>