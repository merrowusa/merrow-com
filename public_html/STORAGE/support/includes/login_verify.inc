<?php
/***************************************************************************
								login_verify.inc
							------------------------
			created				: 04.01.2003
			edited				: 26.01.2003
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// verifies the login of $verify_user if $verify_pass matches the record in $verify_table
// if the user selected "set_cookie" in the login form, the $verify_pass gets saved in a cookie
// note: $verify_pass gets md5() encrypted!
function login_verify($verify_user, $verify_pass, $verify_table)
{
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		// encrypt the submitted password and compare it to the saved one
		$verify_pass = md5($verify_pass);
		$db->db_query('SELECT id,username FROM '.$verify_table.'
					   WHERE username="'.$verify_user.'" AND password="'.$verify_pass.'"
					  ');
		$row = $db->db_fetch_array();
		
		if ($row['username'] != '')
		{
			if (strcmp($row['username'], $verify_user) != 0) 
			{
				// CASE SENSITIVE LOGIN!!!
				$_SESSION = array();
				session_destroy();
				return false;
			}
		}
		
		if ($row['id'] != '')
		{
			// set a shortliving cookie, if the user selected to set a cookie
			if (isset($_POST['set_cookie']))
			{
				setcookie ($verify_table.'_sid',session_id(),time()+COOKIE_TIMEOUT);
				$_SESSION['login_pass'] = $verify_pass;
			}
			else 
			{
				$_SESSION['login_pass'] = $verify_pass;
			}
			$_SESSION['table'] = $verify_table;
			$_SESSION['login_user'] = $verify_user;
			$_SESSION['login_verified'] = true;
			$_SESSION['browser_type'] = $_SERVER['HTTP_USER_AGENT'];
			return true;
		}
		else 
		{
			// wrong password
			$_SESSION = array();
			session_destroy();
			return false;
		}
		$db->db_close();
	}
	else 
	{
		echo show_debug_message('MySQL error',' - unable to connect to the database!');
	}
}
?>