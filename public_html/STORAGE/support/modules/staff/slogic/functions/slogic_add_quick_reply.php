<?php
/***************************************************************************
								slogic_add_quick_reply.php
							----------------------------------
			created				: 22.06.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display add quick reply form & add quick reply to database
function slogic_add_quick_reply()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/functions/slogic_add_quick_reply.tpl'));
	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl=slogic_add_quick_reply&lang='.LANGUAGE,$output);
	
	if (isset($_POST['info']))
	{
		// check if all data was submitted
		if ((!isset($_POST['info'])) || (!isset($_POST['message']))
		   )
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_list_quick_replies&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_QUICK_REPLY_ADDED_INVALID}',$user_screen);
		}
		else 
		{	
			$query_fields = array();
			$query_values = array();
			$i = 0;
			foreach ($_POST as $key => $value) 
			{
				if (($key != 'submit') && ($key != 'SLOGIC'))
				{
					$query_fields[$i] = $key;
					$query_values[$i] = strip_tags($value);
					$i++;
				}
			}
			
			$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
			if ($db->db_connected)
			{
				// add quick reply
				$this->query_result = $db->db_query('INSERT INTO quick_replies (username,'.implode(',',$query_fields).') VALUES ("'.$_SESSION['login_user'].'","'.implode('","',$query_values).'")');
			}
			$db->db_close();
		
			$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_list_quick_replies&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_QUICK_REPLY_ADDED}',$user_screen);
		}
	}
	else 
	{
		return $output;
	}
	return;
}
?>