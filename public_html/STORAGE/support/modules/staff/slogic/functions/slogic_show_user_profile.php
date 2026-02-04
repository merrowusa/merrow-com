<?php
/***************************************************************************
								slogic_show_user_profile.php
							------------------------------------
			created				: 21.02.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// show user profile: displays the users profile
function slogic_show_user_profile()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/functions/slogic_show_user_profile.tpl'));

	if (isset($_POST['user']))
	{
		$_GET['user'] = $_POST['user'];
	}
	
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
		$this->query_result = $db->db_query('SELECT * FROM users WHERE username=\''.$_GET['user'].'\'');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				foreach ($row as $key => $value) 
				{
					if (in_array($key,$list_placeholders))
					{
						$output = str_replace('{'.strtoupper($key).'}',strip_tags($value),$output);
					}
				}
			}
		}
		else 
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_main&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_SHOW_USER_PROFILE_NONE}',$user_screen);
		}
	}
	$db->db_close();

	return $output;
}
?>