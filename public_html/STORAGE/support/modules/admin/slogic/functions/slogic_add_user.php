<?php
/***************************************************************************
								slogic_add_user.php
							---------------------------
			created				: 14.03.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display add user form & add user to database
function slogic_add_user()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/functions/slogic_add_user.tpl'));
	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl=slogic_add_user&lang='.LANGUAGE,$output);
	
	if (isset($_POST['username']))
	{
		// check if all data was submitted
		if ((!isset($_POST['email'])) || (!isset($_POST['domain'])) || (!isset($_POST['act_username'])) ||
			(!isset($_POST['act_server'])) || (!isset($_POST['get_email'])) || (!isset($_POST['language']))
		   )
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_list_users&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_USER_ADDED_INVALID}',$user_screen);
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
					if ($key == 'password')
					{
						$query_values[$i] = md5(strip_tags($value));
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
				// add user
				$this->query_result = $db->db_query('INSERT INTO users ('.implode(',',$query_fields).') VALUES ("'.implode('","',$query_values).'")');
			}
			$db->db_close();
		
			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_list_users&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_USER_ADDED}',$user_screen);
		}
	}
	else 
	{
		
		if ($handle = @opendir(SCRIPT_PATH.'modules/admin/slogic/languages/'))
		{
			$get_languages = '';
			while (false !== ($file = @readdir($handle)))
			{
				if (($file != '.') && ($file != '..') && (!is_file(SCRIPT_PATH.'modules/admin/slogic/languages/'.$file))) 
				{
					$get_languages .= '<option value="'.$file.'">'.$file.'</option>';
				} 
			}
			closedir($handle); 
		}
		$output = str_replace('{LANGUAGE}','<select name="language">'.$get_languages.'</select>',$output);
	
		return $output;
	}
	return;
}
?>