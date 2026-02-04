<?php
/***************************************************************************
								slogic_profile.php
							--------------------------
			created				: 11.01.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// displays the profile form
//   including valid value check
//   if values ok -> save in database & redirect
function slogic_profile()
{
	GLOBAL $user_screen;
	
	if (isset($_POST['email']))
	{
		$show_output = false;
		$i = 0;
		
		// make sure the get_email also appears when not checked
		if (!isset($_POST['get_email']))
		{
			$_POST['get_email'] = 'no';
		}

		foreach ($_POST as $key => $value) 
		{
			if (($key != 'SLOGIC') && ($key != 'Submit'))
			{
				if ((($key != 'password') && ($key != 'password2')) ||
					(($key == 'password') && ($value != '')) ||
					($key != 'password2')
					)
				{
					if ($key == 'password')
					{
						if ($value != '')
						{
							$make_query[$i] = $key.'=\''.md5($value).'\'';
						}
					}
					else 
					{
						$make_query[$i] = $key.'=\''.$value.'\'';
					}
					$i++;
				}
			}
		}
		if (($_POST['password'] != $_POST['password2']) && ($_POST['password'] != ''))
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_profile&lang='.$_POST['language'],$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_PASSWORD_MISMATCH}',$user_screen);
		}
		else 
		{
			// change requested -> make changes & logout/redirect (verify if password change requested as well

			$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
			if ($db->db_connected)
			{
				$this->query_result = $db->db_query('UPDATE users SET '.implode(',',$make_query).' WHERE username=\''.$_SESSION['login_user'].'\'');
			}
			$db->db_close();
			
			$user_screen = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_profile&lang='.$_POST['language'],$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_PROFILE_UPDATED}',$user_screen);
		}
	}
	else
	{
		$output = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/functions/slogic_profile.tpl'));
		
		$placeholders = array();
		$get_placeholders = explode('{',$output);
		for ($i = 1; $i != sizeof($get_placeholders); $i++)
		{
			$tmp_placeholder = explode('}',$get_placeholders[$i]);
			if ((!ereg('LANG_',$tmp_placeholder[0])) && ($tmp_placeholder[0] != 'SELF'))
			{
				$placeholders[$i] = strtolower($tmp_placeholder[0]);
			}
		}
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{
			// get the current profile data and display it properly in the form
			$this->query_result = $db->db_query('SELECT '.implode(',',$placeholders).' FROM users WHERE username="'.$_SESSION['login_user'].'"');
			$numrows = $db->db_num_rows($this->query_result);
			if ($numrows != 0)
			{
				while ($row = $db->db_fetch_array($this->query_result))
				{
					foreach ($row as $key => $value) 
					{
						if (in_array($key,$placeholders))
						{
							if ($key == 'get_email')
							{
								if ($value == 'yes')
								{
									$output = str_replace('{'.strtoupper($key).'}','checked',$output);
								}
								else 
								{
									$output = str_replace('{'.strtoupper($key).'}','',$output);
								}
							}
							else 
							{
								$output = str_replace('{'.strtoupper($key).'}',strip_tags($value),$output);
							}
						}
					}
				}
			}
		}
		$db->db_close();
		
		$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl='.TEMPLATE.'&lang='.LANGUAGE,$output);
		
		return $output;
	}
	
	return;
}
?>