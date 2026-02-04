<?php
/***************************************************************************
								slogic_add_announcement.php
							-----------------------------------
			created				: 13.03.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display add announcement form & add announcement to database
function slogic_add_announcement()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/functions/slogic_add_announcement.tpl'));
	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl=slogic_add_announcement&lang='.LANGUAGE,$output);
	
	if (isset($_POST['subject']))
	{
		// check if all data was submitted
		if ((!isset($_POST['content'])) || (!isset($_POST['day'])) || (!isset($_POST['month'])) ||
			(!isset($_POST['year'])) || (!isset($_POST['show_date'])) || (!isset($_POST['show_to']))
		   )
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_list_announcements&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_ANNOUNCEMENT_ADDED_INVALID}',$user_screen);
		}
		else 
		{	
			$query_fields = array();
			$query_values = array();
			$i = 0;
			foreach ($_POST as $key => $value) 
			{
				if (($key != 'submit') && ($key != 'SLOGIC') && ($key != 'day') && ($key != 'month') && ($key != 'year') )
				{
					$query_fields[$i] = $key;
					if ($key == 'content')
					{
						$query_values[$i] = strip_tags($value,ALLOWED_TAGS);
					}
					else 
					{
						$query_values[$i] = strip_tags($value);
					}
					$i++;
				}
			}
			
			
			$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
			if ($db->db_connected)
			{
				// add announcement
				$this->query_result = $db->db_query('INSERT INTO announcements ('.implode(',',$query_fields).',sent_date) VALUES ("'.implode('","',$query_values).'","'.$_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'].'")');
			}
			$db->db_close();
		
			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_list_announcements&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_ANNOUNCEMENT_ADDED}',$user_screen);
		}
	}
	else 
	{
		return $output;
	}
	return;
}
?>