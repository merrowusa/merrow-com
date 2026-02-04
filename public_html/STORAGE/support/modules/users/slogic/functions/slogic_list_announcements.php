<?php
/***************************************************************************
								slogic_list_announcements.php
							-------------------------------------
			created				: 18.01.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display current announcements
// announcement database:
//			sent_date = date when the message should appear if show_date != now
// 			show_date = never, now, equal, equal_up
//			show_to	  = users, staff, both
function slogic_list_announcements()
{
	$output = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/functions/slogic_list_announcements.tpl'));

	$get_announcements = explode('<ANNOUNCEMENT>',$output);
	$get_announcements = explode('</ANNOUNCEMENT>',$get_announcements[1]);
	
	$get_no_announcements = explode('<NO_ANNOUNCEMENTS>',$output);
	$get_no_announcements = explode('</NO_ANNOUNCEMENTS>',$get_no_announcements[1]);
	
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		// get announcements
		$this->query_result = $db->db_query('SELECT id,subject,sent_date,show_date FROM announcements WHERE (show_to=\'users\' OR show_to=\'both\') AND (show_date!=\'never\') ORDER BY sent_date DESC');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$i = 0;
			$make_announcement = array();
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
					$make_announcement[$i] = $get_announcements[0];
					$make_announcement[$i] = str_replace('{SUBJECT}','<a href="'.$_SERVER['PHP_SELF'].'?tpl=slogic_show_announcement&lang='.LANGUAGE.'&id='.$row['id'].'">'.strip_tags($row['subject']).'</a>',$make_announcement[$i]);
					$make_announcement[$i] = str_replace('{SENT_DATE}',$row['sent_date'],$make_announcement[$i]);
					$i++;
				}
			}
			$output = str_replace($get_no_announcements[0],'',$output);
			$output = str_replace($get_announcements[0],implode('',$make_announcement),$output);
		}
		else 
		{
			$output = str_replace($get_announcements[0],'',$output);
		}
	}
	$db->db_close();
	return $output;
}
?>