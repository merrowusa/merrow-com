<?php
/***************************************************************************
								admin.php
							-----------------
			created				: 09.03.2003
			edited				: 11.07.2003
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// disable the default error reporting
error_reporting(0);

// include the general config file
include ('config.php');

define('SCRIPT_CATEGORY','admin');

// <-- <START> - VARIABLE DEFINITIONS - <START> -->
if (!isset($user_screen))
{
	// define the main output variable
	$user_screen = "";
}

if (!isset($num_queries))
{
	// define the global database queries variable
	$num_queries = 0;
}
GLOBAL $num_queries;
// <-- <END> - VARIABLE DEFINITIONS - <END> -->

// <-- <START> - INCLUDE FILES - <START> -->
// the custom error handler
include ('includes/error_handler.inc');
set_error_handler('slogic_error_handler');

// selected SQL module
include ('includes/db_modules/'.SQL_MODULE.'.inc');

// show_debug_message($debug_variable, $debug_message) function
include ('includes/debug.inc');

// get_modules() function
include ('includes/modules.inc');

// start_ & end_microtime($start_time) functions
include ('includes/microtime.inc');

// parse_language($input, $language_array) function
include ('includes/parse_language.inc');

// login_verify($verify_user, $verify_pass, $verify_table) function, sets Session or Cookie
include ('includes/login_verify.inc');
// <-- <END> - INCLUDE FILES - <END> -->

// <-- <START> - SESSION OPTIONS - <START> -->
if (SESSION_MANAGEMENT == "database")
{
	// self defined session management functions
	include ('includes/session.inc');
	
	// if the DB_SESSION option is true, init the self defined session management
	session_set_save_handler('on_session_start',   'on_session_end',
  							 'on_session_read',    'on_session_write',
							 'on_session_destroy', 'on_session_gc');
}

session_name('SLOGIC');
if (isset($_COOKIE['admin_sid']))
{
	session_id($_COOKIE['admin_sid']);
	$session_timeout = COOKIE_TIMEOUT;
}
if (isset($_POST['set_cookie']))
{
	$session_timeout = COOKIE_TIMEOUT;
}
else if (!isset($_COOKIE['admin_sid']))
{
	$session_timeout = 0; // use default SESSION_TIMEOUT
}
session_start();
// <-- <END> - SESSION OPTIONS - <END> -->

// used to time execution time of pages
$start_time = start_microtime();

// if the session saved in the cookie is expired or got deleted, delete the cookie and go to login form
if ((isset($_COOKIE['admin_sid'])) && ((!isset($_SESSION['login_verified'])) || ($_SESSION['browser_type'] != $_SERVER['HTTP_USER_AGENT'])))
{
	// the user is unknown, so reset the cookie (can result, when the session gets deleted from the server)
	setcookie ('admin_sid', '', time()-48*3600);
}

// if the user just submitted his login data verify the login and redirect to $_POST['tpl'] page
if ((isset($_POST['login_user'])) && (!isset($_SESSION['login_verified'])))
{
	// verify the login
	if (login_verify($_POST['login_user'], $_POST['login_pass'], 'admin'))
	{
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{
			// get the user selected language from his profile
			$db->db_query('SELECT language FROM admin
					   	   WHERE username="'.$_POST['login_user'].'"
					  	  ');
			$row = $db->db_fetch_array();
		
			if ($row['language'] != '')
			{
				$_POST['lang'] = $row['language'];
			}
			else
			{
				$_POST['lang'] = DEFAULT_LANGUAGE;
			}
		}
		$db->db_close();
		
		// get all the variables posted through the form, to make access to any page inside slogic possible
		$i = 0;
		$arguments = array();
		foreach ($_POST as $key => $value) 
		{
			// filter some keywords, we don't want to see in the URL
			if (($key != 'SLOGIC') && ($key != 'login_user') && ($key != 'login_pass') && ($key != 'Submit'))
			{
				$arguments[$i] = $key.'='.$value;
				$i++;
			}
			
		}
		$arguments = implode('&',$arguments);
		
		// redirect the user to the desired page
		$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
		$user_screen = str_replace('{SECONDS}','3',$user_screen);
		$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?'.$arguments,$user_screen);
		$user_screen = str_replace('{MESSAGE}','You are being redirected to the requested page.',$user_screen);
		$user_screen = str_replace('{LANG_SLOGIC_REDIRECT_TITLE}','Support Logic - Redirect Page',$user_screen);
		$user_screen = str_replace('{LANG_SLOGIC_REDIRECT_TOPIC}','Please wait...',$user_screen);
		$user_screen = str_replace('{LANG_SLOGIC_REDIRECT_URL}','Please click here if your browser doesn\'t support automatic redirection.',$user_screen);
		
		// replace the "{SCRIPT_PATH}" placeholder in $user_screen with the script path constant
		$user_screen = str_replace('{SCRIPT_PATH}',SCRIPT_PATH,$user_screen);
	
		// replace the "{SCRIPT_URL}" placeholder in $user_screen with the script url constant
		$user_screen = str_replace('{SCRIPT_URL}',SCRIPT_URL,$user_screen);

		echo $user_screen;
		exit;
	}
}

// if the session is verified, parse the template file
if ((isset($_SESSION['login_verified'])) && ($_SESSION['browser_type'] == $_SERVER['HTTP_USER_AGENT'])  && ($_SESSION['table'] == 'admin'))
{
	// define functions, navigation and language arrays
	$executable_functions = array();
	$main_navigation = array();
	$language = array();

	// make sure a language gets set, even when none was selected
	if (isset($_POST['lang']))
	{
		$lang = $_POST['lang'];
	}
	if (isset($_GET['lang']))
	{
		$lang = $_GET['lang'];
	}
	if (!isset($lang))
	{
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{
			// get the user selected language from his profile
			$db->db_query('SELECT language FROM admin
					   	   WHERE username="'.$_SESSION['login_user'].'"
					  	  ');
			$row = $db->db_fetch_array();
		
			if ($row['language'] != '')
			{
				$lang = $row['language'];
			}
			else
			{
				$lang = DEFAULT_LANGUAGE;
			}
		}
		$db->db_close();
	}
	define('LANGUAGE',$lang);
	// get modules and add their modulename_functions array to the executable_functions array
	// 				   add their modulename_main_navigation array to the main_navigation array
	//				   add their modulename_language array to the language array
	$get_modules = get_modules();
	if (sizeof($get_modules) != 0)
	{
		for ($i = 0; $i != sizeof($get_modules); $i++)
		{
			if (file_exists(SCRIPT_PATH.'modules/'.SCRIPT_CATEGORY.'/'.$get_modules[$i].'/functions.php'))
			{
				include SCRIPT_PATH.'modules/'.SCRIPT_CATEGORY.'/'.$get_modules[$i].'/functions.php';
				
				$temp_functions = $get_modules[$i].'_functions';
				if (function_exists($temp_functions))
				{
					$executable_functions = array_merge($executable_functions, $temp_functions());
				}
				else if (DEBUG_MODE == 'on')
				{
					echo show_debug_message('The <u>'.$get_modules[$i].'','</u> module doesn\'t have the needed <u>'.$temp_functions.'()</u> function in its "functions.php" file!');
				}

				$temp_navigation = $get_modules[$i].'_main_navigation';
				if (function_exists($temp_navigation))
				{
					$main_navigation = array_merge($main_navigation, $temp_navigation());
				}
				else if (DEBUG_MODE == 'on')
				{
					echo show_debug_message('The <u>'.$get_modules[$i].'','</u> module doesn\'t have the needed <u>'.$temp_navigation.'()</u> function in its "functions.php" file!');
				}

				$temp_language = $get_modules[$i].'_language';
				if (function_exists($temp_language))
				{
					$language = array_merge($language, $temp_language(LANGUAGE));
				}
				else if (DEBUG_MODE == 'on')
				{
					echo show_debug_message('The <u>'.$get_modules[$i].'','</u> module doesn\'t have the needed <u>'.$temp_language.'()</u> function in its "functions.php" file!');
				}
			}
			else if (DEBUG_MODE == 'on')
			{
				echo show_debug_message('The <u>'.$get_modules[$i].'','</u> module doesn\'t have the needed "functions.php" file!');
			}
		}
	}
	
	// get the template file, else report debug error message
	if ((!isset($_GET['tpl'])) && (!isset($_POST['tpl'])))
	{
		$_GET['tpl'] = 'slogic_main';
		$_POST['tpl'] = 'slogic_main';
		$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_main.tpl'));
		define('TEMPLATE','slogic_main');
	}
	else 
	{
		if (isset($_GET['tpl']))
		{
			$tpl = $_GET['tpl'];
			
		}
		else if (isset($_POST['tpl']))
		{
			$tpl = $_POST['tpl'];
		}
		// define the TEMPLATE constant to make it available in any module
		define('TEMPLATE',$tpl);
		
		$template = explode('_',$tpl);
		$template = $template[0];
		
		if (in_array($template,$get_modules))
		{
			if (file_exists(SCRIPT_PATH.'modules/admin/'.$template.'/templates/pages/'.$tpl.'.tpl'))
			{
				$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/'.$template.'/templates/pages/'.$tpl.'.tpl'));
			}
			else if (DEBUG_MODE == 'on')
			{
				echo show_debug_message($tpl.'.tpl','file doesn\'t exist!'.SCRIPT_PATH.'modules/admin/'.$template.'/templates/pages/'.$tpl.'.tpl');
			}
		}
		else if (DEBUG_MODE == 'on')
		{
			echo show_debug_message($template,'module doesn\'t exist!');
		}
	}
	
	// check the template system - if it's "header_footer", then the neccessary files get added to the $user_screen,
	// so that they can also contain function placeholders!
	if ($template_system == 'header_footer')
	{
		$get_header = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/functions/slogic_header.tpl'));
		$get_footer = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/functions/slogic_footer.tpl'));
		if (TEMPLATE == 'slogic_logout')
		{
			$get_header = str_replace('{TITLE}','[TITLE]',$get_header);
			// replace the "{SCRIPT_URL}" placeholder in $user_screen with the script url constant
			$get_header = str_replace('{SCRIPT_URL}',SCRIPT_URL,$get_header);
			// clear all remaining placeholders
			$get_header = ereg_replace('{(.*)}','',$get_header);
			$get_header = str_replace('[TITLE]','{LANG_'.strtoupper(TEMPLATE).'_TITLE}',$get_header);
			
			$get_footer = str_replace('{DATABASE_QUERIES}','[DATABASE_QUERIES]',$get_footer);
			$get_footer = str_replace('{EXECUTION_TIME}','[EXECUTION_TIME]',$get_footer);
			// replace the "{SCRIPT_URL}" placeholder in $user_screen with the script url constant
			$get_footer = str_replace('{SCRIPT_URL}',SCRIPT_URL,$get_footer);
			// clear all remaining placeholders
			$get_footer = ereg_replace('{(.*)}','',$get_footer);
			$get_footer = str_replace('[DATABASE_QUERIES]','{DATABASE_QUERIES}',$get_footer);
			$get_footer = str_replace('[EXECUTION_TIME]','{EXECUTION_TIME}',$get_footer);
			
		}
		else 
		{
			$get_header = str_replace('{TITLE}','{LANG_'.strtoupper(TEMPLATE).'_TITLE}',$get_header);
		}
		
		$user_screen = $get_header.$user_screen.$get_footer;

	}

	// get the placeholders out of the template and replace them, or output debug error message
	$get_functions = explode('{',$user_screen);
	for ($i = 1; $i != sizeof($get_functions); $i++)
	{
		$get_function = explode('}',$get_functions[$i]);
		$execute_function = strtolower($get_function[0]);
	
		$get_module_name = explode('_',$get_function[0]);
		$get_module_name = strtolower($get_module_name[0]);

		// make sure the current placeholder is a function, is defined in its module function.php file and itself exists
		if ((in_array($execute_function,$executable_functions)) 
			&& (is_file(SCRIPT_PATH.'modules/admin/'.$get_module_name.'/functions/'.$execute_function.'.php'))
			&& ('LANG_' != substr(strtoupper($execute_function),0,5))
  		    && ('SCRIPT_PATH' != strtoupper($execute_function))
			&& ('SCRIPT_URL' != strtoupper($execute_function))
			&& ('DATABASE_QUERIES' != strtoupper($execute_function))
			&& ('EXECUTION_TIME' != strtoupper($execute_function))
			)
		{
			// make sure to prevent problems with functions, that get called more than 1x in a template file!
			if (!function_exists($execute_function))
			{
				require SCRIPT_PATH.'modules/admin/'.$get_module_name.'/functions/'.$execute_function.'.php';
			}
			
			if (function_exists($execute_function))
			{
				$user_screen = str_replace('{'.$get_function[0].'}',$execute_function(),$user_screen);
			}
			else if (DEBUG_MODE == 'on')
			{
				$user_screen = str_replace('{'.$get_function[0].'}',
											show_debug_message('{'.$get_function[0].'}',' - the function file doesn\'t contain the needed '.$execute_function.'() function!'),
											$user_screen);
			}
		}
		else if ((DEBUG_MODE == 'on')
				 && ('LANG_' != substr(strtoupper($execute_function),0,5))
				 && ('SCRIPT_PATH' != strtoupper($execute_function))
				 && ('SCRIPT_URL' != strtoupper($execute_function))
				 && ('DATABASE_QUERIES' != strtoupper($execute_function))
				 && ('EXECUTION_TIME' != strtoupper($execute_function))
				)
		{
			if (!file_exists(SCRIPT_PATH.'modules/admin/'.$get_module_name.'/'))
			{
				$user_screen = str_replace('{'.$get_function[0].'}',
											show_debug_message('{'.$get_function[0].'}',' - the needed module doesn\'t exist!'),
											$user_screen);
			}
			else if (!file_exists(SCRIPT_PATH.'modules/admin/'.$get_module_name.'/functions/'.$execute_function.'.php'))
			{
				$user_screen = str_replace('{'.$get_function[0].'}',
											show_debug_message('{'.$get_function[0].'}',' - the needed function file doesn\'t exist!'),
											$user_screen);
			}
			else if (!in_array($execute_function,$executable_functions))
			{
				$user_screen = str_replace('{'.$get_function[0].'}',
											show_debug_message('{'.$get_function[0].'}','isn\'t defined in the "functions.php" functions() array!'),
											$user_screen);
			}
			
		}
		
		
	}
	
	// replace the "{LANG_...}" placeholders in $user_screen with the right entry from the $language array
	$user_screen = parse_language($user_screen, $language);
	
	// replace the "{SCRIPT_PATH}" placeholder in $user_screen with the script path constant
	$user_screen = str_replace('{SCRIPT_PATH}',SCRIPT_PATH,$user_screen);
	
	// replace the "{SCRIPT_URL}" placeholder in $user_screen with the script url constant
	$user_screen = str_replace('{SCRIPT_URL}',SCRIPT_URL,$user_screen);

	// replace the "{DATABASE_QUERIES}" placeholder in $user_screen with the number of database queries used for the current page
	$user_screen = str_replace('{DATABASE_QUERIES}',$num_queries,$user_screen);
	
	// replace the "{EXECUTION_TIME}" placeholder in $user_screen with the millisecs needed to parse the current page
	$user_screen = str_replace('{EXECUTION_TIME}',end_microtime($start_time),$user_screen);
	
	// finally output that thing
	echo $user_screen;
}
else 
{
	// if neither SESSION nor COOKIE are set, the user needs to login
	$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_login.tpl'));
	
	// check the template system - if it's "header_footer", then the neccessary files get added to the $user_screen,
	// so that they can also contain function placeholders!
	if ($template_system == 'header_footer')
	{
		$get_header = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/functions/slogic_header.tpl'));
		$get_header = str_replace('{TITLE}','[TITLE]',$get_header);
		// replace the "{SCRIPT_URL}" placeholder in $user_screen with the script url constant
		$get_header = str_replace('{SCRIPT_URL}',SCRIPT_URL,$get_header);
		// clear all remaining placeholders
		$get_header = ereg_replace('{(.*)}','',$get_header);
		$get_header = str_replace('[TITLE]','{LANG_SLOGIC_LOGIN_TITLE}',$get_header);
		
		$get_footer = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/functions/slogic_footer.tpl'));
		$get_footer = str_replace('{DATABASE_QUERIES}','[DATABASE_QUERIES]',$get_footer);
		$get_footer = str_replace('{EXECUTION_TIME}','[EXECUTION_TIME]',$get_footer);
		// replace the "{SCRIPT_URL}" placeholder in $user_screen with the script url constant
		$get_footer = str_replace('{SCRIPT_URL}',SCRIPT_URL,$get_footer);
		// clear all remaining placeholders
		$get_footer = ereg_replace('{(.*)}','',$get_footer);
		$get_footer = str_replace('[DATABASE_QUERIES]','{DATABASE_QUERIES}',$get_footer);
		$get_footer = str_replace('[EXECUTION_TIME]','{EXECUTION_TIME}',$get_footer);

		$user_screen = $get_header.$user_screen.$get_footer;
		
		// replace the "{LANG_...}" placeholders in $user_screen with the right entry from the $language array
		require (SCRIPT_PATH.'modules/admin/slogic/languages/'.DEFAULT_LANGUAGE.'/slogic_language.inc');
		$user_screen = parse_language($user_screen, $slogic_language);
		
		// remove the "{SLOGIC_NAV_MAIN}" placeholder
		$user_screen = str_replace('{SLOGIC_NAV_MAIN}','',$user_screen);
		
		// replace the "{SCRIPT_PATH}" placeholder in $user_screen with the script path constant
		$user_screen = str_replace('{SCRIPT_PATH}',SCRIPT_PATH,$user_screen);
	
		// replace the "{SCRIPT_URL}" placeholder in $user_screen with the script url constant
		$user_screen = str_replace('{SCRIPT_URL}',SCRIPT_URL,$user_screen);
	
		// replace the "{DATABASE_QUERIES}" placeholder in $user_screen with the number of database queries used for the current page
		$user_screen = str_replace('{DATABASE_QUERIES}',$num_queries,$user_screen);
	
		// replace the "{EXECUTION_TIME}" placeholder in $user_screen with the millisecs needed to parse the current page
		$user_screen = str_replace('{EXECUTION_TIME}',end_microtime($start_time),$user_screen);
	}

	// if the login_user was already sent, the user submitted a wrong pass -> so display error message
	if (isset($_POST['login_user']))
	{
		$user_screen = str_replace('{WRONG_LOGIN}','<font color="red">You have either entered an incorrect password or you aren\'t a registered user yet.  Usernames and passwords are case sensitive.<br>&nbsp;<br>Please click below to register a helpdesk account.</font>',$user_screen);
	}
	else
	{
		$user_screen = str_replace('{WRONG_LOGIN}','',$user_screen);
	}
	
	// make sure to add all passed variables via the URL to the form as hidden fields to make direct 
	// login anywhere inside slogic possible
	if (isset($_GET['tpl']))
	{
		$i = 0;
		$keys = array();
		$values = array();
		foreach ($_GET as $key => $value) 
		{
			if ($key != 'SLOGIC')
			{
				$keys[$i] = $key;
				$values[$i] = $value;
				$i++;
			}
			
		}
		
		$tmp_hidden = array();
		for($i = 0; $i != sizeof($keys); $i++)
		{
			$tmp_hidden[$i] = '<input type="hidden" name="'.$keys[$i].'" value="'.$values[$i].'">';
		}

		$user_screen = str_replace('{HIDDEN}',implode('',$tmp_hidden),$user_screen);
	}
	else 
	{
		// if no values were passed, login the user to the main page
		$user_screen = str_replace('{HIDDEN}','<input type="hidden" name="tpl" value="slogic_main">',$user_screen);
	}

	// replace the "{SCRIPT_PATH}" placeholder in $user_screen with the script path constant
	$user_screen = str_replace('{SCRIPT_PATH}',SCRIPT_PATH,$user_screen);
	
	// replace the "{SCRIPT_URL}" placeholder in $user_screen with the script url constant
	$user_screen = str_replace('{SCRIPT_URL}',SCRIPT_URL,$user_screen);

	echo $user_screen;
}
?>