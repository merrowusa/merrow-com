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
			if (($key != 'SLOGIC') && ($key != 'Submit') && ($key != 'category'))
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
			$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
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
				$this->query_result = $db->db_query('UPDATE staff SET '.implode(',',$make_query).' WHERE username=\''.$_SESSION['login_user'].'\'');
				
				// if the category array doesn't exist, the user unselected all checkboxes, so create an empty array
				if (!isset($_POST['category']))
				{
					$_POST['category'] = array();
				}
				
				// get the category IDs and the subscribers to check them with the $_POST['category'] array
				$this->query_result = $db->db_query('SELECT id,subscribers FROM categories');
				$numrows = $db->db_num_rows($this->query_result);
				if ($numrows != 0)
				{
					while ($row = $db->db_fetch_array($this->query_result))
					{
						// if the subscribers field contains an "," then there are more than 1 subscriber
						if (ereg(',',$row['subscribers']))
						{
							// get the subscribers in an array
							$get_subscribers = explode(',',$row['subscribers']);
							// if the username exists in the subscriber field, but not in the $_POST['category'], then he unselected it and so delete him from the subscription
							if ((in_array($_SESSION['login_user'],$get_subscribers)) && (!in_array($row['id'],$_POST['category'])))
							{
								$j = 0;
								for ($i=0; $i != sizeof($get_subscribers); $i++)
								{
									if ($get_subscribers[$i] != $_SESSION['login_user'])
									{
										$new_subscribers[$j] = $get_subscribers[$i];
										$j++;
									}
								}
								$res = $db->db_query('UPDATE categories SET subscribers="'.implode(',',$new_subscribers).'" WHERE id="'.$row['id'].'"');
							}
							else if ((!in_array($_SESSION['login_user'],$get_subscribers)) && (in_array($row['id'],$_POST['category'])))
							{
								// the user does not exist as an subscriber, but selected it in the form, so add him to the subscription
								$res = $db->db_query('UPDATE categories SET subscribers="'.$row['subscribers'].','.$_SESSION['login_user'].'" WHERE id="'.$row['id'].'"');
							}
						}
						else
						{
							// here we continue, if there is only 1 or none subscriber for that category
							
							// check again where the user unsubscribed from
							if (($_SESSION['login_user'] == $row['subscribers']) && (!in_array($row['id'],$_POST['category'])))
							{
								$res = $db->db_query('UPDATE categories SET subscribers="" WHERE id="'.$row['id'].'"');
							}
							else if (($_SESSION['login_user'] != $row['subscribers']) && (in_array($row['id'],$_POST['category'])))
							{
								// ...and where he subscribes to - divided by "none" and "1"
								if ($row['subscribers'] == '')
								{
									$res = $db->db_query('UPDATE categories SET subscribers="'.$_SESSION['login_user'].'" WHERE id="'.$row['id'].'"');	
								}
								else
								{
									$res = $db->db_query('UPDATE categories SET subscribers="'.$row['subscribers'].','.$_SESSION['login_user'].'" WHERE id="'.$row['id'].'"');
								}
							}
						}
							
					}
				}
				$db->db_close();
			}
			$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_profile&lang='.$_POST['language'],$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_PROFILE_UPDATED}',$user_screen);
		}
	}
	else
	{
		$output = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/functions/slogic_profile.tpl'));
		
		$output = str_replace('{ALLOWED_TAGS}','HTML Tags: '.htmlspecialchars(ALLOWED_TAGS),$output);
		
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{
			// get the category subscription data and show it
			$this->query_result = $db->db_query('SELECT id,name,subscribers FROM categories');
			$numrows = $db->db_num_rows($this->query_result);
			if ($numrows != 0)
			{
				$tmp_checkbox = '';
				while ($row = $db->db_fetch_array($this->query_result))
				{
					if (ereg($_SESSION['login_user'],$row['subscribers']))
					{
						$tmp_checkbox .= '<input type="checkbox" class="checkbox" name="category[]" value="'.$row['id'].'" checked> '.$row['name'].'<br>';
					}
					else
					{
						$tmp_checkbox .= '<input type="checkbox" class="checkbox" name="category[]" value="'.$row['id'].'"> '.$row['name'].'<br>';
					}
				}
				$output = str_replace('{SUBSCRIBE_CATEGORIES}',$tmp_checkbox,$output);
			}
			
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
			// get the current profile data and display it properly in the form
			$this->query_result = $db->db_query('SELECT '.implode(',',$placeholders).' FROM staff WHERE username="'.$_SESSION['login_user'].'"');
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
							else if ($key == 'signature')
							{
								$output = str_replace('{'.strtoupper($key).'}',strip_tags($value,ALLOWED_TAGS),$output);
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