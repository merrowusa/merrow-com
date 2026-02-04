<?php
/***************************************************************************
								slogic_cofig.php
							------------------------
			created				: 09.03.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display & save the current config settings to config.php
function slogic_config()
{
	GLOBAL $slogic_send_alert;
	GLOBAL $slogic_send_email;
	GLOBAL $slogic_email_from;
	GLOBAL $slogic_pipe_auto_user;
	GLOBAL $template_system;
	GLOBAL $email_flood_limit;
	GLOBAL $default_pipe_priority;
	GLOBAL $user_screen;
	
	if (isset($_POST['session_management']))
	{
		$filename = SCRIPT_PATH.'config.php';
		
		// Let's make sure the file exists and is writable first.
		if (is_writable($filename)) 
		{
		
		    if (!$handle = fopen($filename, 'w')) 
		    {
				$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
				$user_screen = str_replace('{SECONDS}','3',$user_screen);
				$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_config&lang='.LANGUAGE,$user_screen);
				$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_CONFIG_FILE_OPEN_FAIL}',$user_screen);
		        return;
		    }
		
		    if (substr($_POST['script_path'],-1) != '/')
		    {
		    	// might need to be adjusted, if it is a windows server to '\'
		    	$_POST['script_path'] = $_POST['script_path'].'/';
		    }
		    if (substr($_POST['script_url'],-1) != '/')
		    {
		    	$_POST['script_url'] = $_POST['script_url'].'/';
		    }
		    
		    
		    $file_content = '<?php
/***************************************************************************
							config.php
						------------------
			created				: 09.03.2003
			edited				: '.date('d.m.Y').'
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// <-- <START> - GENERAL CONFIG OPTIONS - <START> -->
define(\'SESSION_MANAGEMENT\',\''.$_POST['session_management'].'\');
define(\'SESSION_TIMEOUT\',\''.$_POST['session_timeout'].'\');
define(\'COOKIE_TIMEOUT\',\''.$_POST['cookie_timeout'].'\');
define(\'SQL_MODULE\',\''.$_POST['sql_module'].'\');
define(\'DEBUG_MODE\',\''.$_POST['debug_mode'].'\');
define(\'SCRIPT_PATH\',\''.$_POST['script_path'].'\');
define(\'SCRIPT_URL\',\''.$_POST['script_url'].'\');
define(\'DB_HOST\',\''.$_POST['db_host'].'\');
define(\'DB_USER\',\''.$_POST['db_user'].'\');
define(\'DB_PASS\',\''.$_POST['db_pass'].'\');
define(\'DB_DATABASE\',\''.$_POST['db_database'].'\');
define(\'DEFAULT_LANGUAGE\',\''.$_POST['default_language'].'\');
define(\'ALLOWED_TAGS\',\''.$_POST['allowed_tags'].'\');
// <-- <START> - EMAIL DEFINITIONS - <START> -->
$slogic_send_alert = '.$_POST['slogic_send_alert'].'; // TRUE if all staff members should receive an email regardless their get_email status - FALSE if deactivated
$slogic_send_email = "'.$_POST['slogic_send_email'].'"; // "smtp" if it shall be sent through smtp - "mail" if it shall be sent via php mail() function
$slogic_email_from = "From: '.$_POST['slogic_email_from'].'\r\nReply-To: '.$_POST['slogic_email_from'].'\r\n";
$email_flood_limit = '.$_POST['email_flood_limit'].'; // daily email limit for each email-sender for emails being sent to the helpdesk (only needed, if you are using the pipe.php script)
$default_pipe_priority = \''.$_POST['default_pipe_priority'].'\';  // priority used for tickets created by the pipe.php script
$slogic_pipe_auto_user = \''.$_POST['slogic_pipe_auto_user'].'\';  // user accounts can be created by the pipe.php script => yes, no
// <-- <END> - EMAIL DEFINITIONS - <END> -->
// <-- <START> - TEMPLATE DEFINITIONS - <START> -->
$template_system = \''.$_POST['template_system'].'\'; // can be \'header_footer\' or \'pages\'
// <-- <END> - TEMPLATE DEFINITIONS - <END> -->
// <-- <END> - GENERAL CONFIG OPTIONS - <END> -->

?>';
		    
		    // Write content to opened file.
		    if (!fwrite($handle, $file_content)) 
		    {
				$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
				$user_screen = str_replace('{SECONDS}','3',$user_screen);
				$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_config&lang='.LANGUAGE,$user_screen);
				$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_CONFIG_FILE_WRITE_FAIL}',$user_screen);
		        return;
		    }
		    
			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_config&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_CONFIG_FILE_WRITE}',$user_screen);

			fclose($handle);
			return;
							
		} 
		else 
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_config&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_CONFIG_FILE_WRITE_FAIL}',$user_screen);
	        return;
		}
	}
	
	$output = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/functions/slogic_config.tpl'));

	$filename = SCRIPT_PATH.'config.php';
	// Let's make sure the file exists and is writable first!
	if (is_writable($filename)) 
	{
		$output = str_replace('{LANG_SLOGIC_CONFIG_WARNING}','',$output);
	}
	
	if (SESSION_MANAGEMENT == 'database')
	{
		$output = str_replace('{SESSION_MANAGEMENT}','<select name="session_management">
        		<option value="database">{LANG_SLOGIC_CONFIG_SESSION_DATABASE}</option>
        		<option value="files">{LANG_SLOGIC_CONFIG_SESSION_FILES}</option>
      		</select>',$output);
	}
	else 
	{
		$output = str_replace('{SESSION_MANAGEMENT}','<select name="session_management">
				<option value="files">{LANG_SLOGIC_CONFIG_SESSION_FILES}</option>
        		<option value="database">{LANG_SLOGIC_CONFIG_SESSION_DATABASE}</option>
      		</select>',$output);
	}
	
	$output = str_replace('{SESSION_TIMEOUT}',SESSION_TIMEOUT,$output);
	$output = str_replace('{COOKIE_TIMEOUT}',COOKIE_TIMEOUT,$output);
	
	// get the available SQL modules
	$existing_sql_modules = array();
	$z=0;
	if ($handle = @opendir(SCRIPT_PATH.'includes/db_modules/'))
	{
		while (false !== ($file = @readdir($handle)))
		{
			if (($file != '.') && ($file != '..') && (is_file(SCRIPT_PATH.'includes/db_modules/'.$file))
				&& ($file != SQL_MODULE.'.inc')) 
			{
				$file = str_replace('.inc','',$file);
				$existing_sql_modules[$z] = '<option value="'.$file.'">'.$file.'</option>';
				$z++;
			} 
		}
		closedir($handle); 
	}
	$output = str_replace('{SQL_MODULE)','<select name="sql_module">
        						<option value="'.SQL_MODULE.'">'.SQL_MODULE.'</option>
								'.implode('',$existing_sql_modules).'
      						</select>',$output);
	
	if (DEBUG_MODE == 'on')
	{
		$output = str_replace('{DEBUG_MODE}','<select name="debug_mode">
        		<option value="on">{LANG_SLOGIC_CONFIG_DEBUG_ON}</option>
        		<option value="off">{LANG_SLOGIC_CONFIG_DEBUG_OFF}</option>
      		</select>',$output);
	}
	else 
	{
		$output = str_replace('{DEBUG_MODE}','<select name="debug_mode">
        		<option value="off">{LANG_SLOGIC_CONFIG_DEBUG_OFF}</option>
        		<option value="on">{LANG_SLOGIC_CONFIG_DEBUG_ON}</option>
      		</select>',$output);
	}

	$output = str_replace('{SCRIPT_PATH}',SCRIPT_PATH,$output);
	$output = str_replace('{SCRIPT_URL}',SCRIPT_URL,$output);
	
	$output = str_replace('{DB_HOST}',DB_HOST,$output);
	$output = str_replace('{DB_USER}',DB_USER,$output);
	$output = str_replace('{DB_PASS}',DB_PASS,$output);
	$output = str_replace('{DB_DATABASE}',DB_DATABASE,$output);
	$output = str_replace('{ALLOWED_TAGS}',ALLOWED_TAGS,$output);
	$output = str_replace('{DEFAULT_PIPE_PRIORITY}',$default_pipe_priority,$output);
	$output = str_replace('{EMAIL_FLOOD_LIMIT}',$email_flood_limit,$output);


	// get languages from admin slogic part
	if ($handle = @opendir(SCRIPT_PATH.'modules/admin/slogic/languages/'))
	{
		$i=0;
		$admin_get_languages = array();
		while (false !== ($file = @readdir($handle)))
		{
			if (($file != '.') && ($file != '..') && (!is_file(SCRIPT_PATH.'modules/admin/slogic/languages/'.$file))
				&& ($file != DEFAULT_LANGUAGE)) 
			{
				$admin_get_languages[$i] = '<option value="'.$file.'">'.$file.'</option>';
				$i++;
			} 
		}
		closedir($handle); 
	}
	$output = str_replace('{DEFAULT_LANGUAGE}','<select name="default_language"><option value="'.DEFAULT_LANGUAGE.'">'.DEFAULT_LANGUAGE.'</option>'.implode('',$admin_get_languages).'</select>',$output);

	if ($slogic_send_alert == TRUE)
	{
		$output = str_replace('{SEND_ALERT}','<select name="slogic_send_alert">
        		<option value="TRUE">{LANG_SLOGIC_CONFIG_SEND_ALERT_ON}</option>
        		<option value="FALSE">{LANG_SLOGIC_CONFIG_SEND_ALERT_OFF}</option>
      		</select>',$output);
	}
	else 
	{
		$output = str_replace('{SEND_ALERT}','<select name="slogic_send_alert">
        		<option value="FALSE">{LANG_SLOGIC_CONFIG_SEND_ALERT_OFF}</option>
        		<option value="TRUE">{LANG_SLOGIC_CONFIG_SEND_ALERT_ON}</option>
      		</select>',$output);
	}

	if ($slogic_send_email == 'smtp')
	{
		$output = str_replace('{SEND_EMAIL}','<select name="slogic_send_email">
        		<option value="smtp">SMTP</option>
        		<option value="mail">php mail()</option>
      		</select>',$output);
	}
	else 
	{
		$output = str_replace('{SEND_EMAIL}','<select name="slogic_send_email">
        		<option value="mail">php mail()</option>
        		<option value="smtp">SMTP</option>
      		</select>',$output);
	}

	if ($template_system == 'header_footer')
	{
		$output = str_replace('{TEMPLATE_SYSTEM}','<select name="template_system">
        		<option value="header_footer">{LANG_SLOGIC_CONFIG_HEADER_FOOTER}</option>
        		<option value="pages">{LANG_SLOGIC_CONFIG_PAGES}</option>
      		</select>',$output);
	}
	else 
	{
		$output = str_replace('{TEMPLATE_SYSTEM}','<select name="template_system">
        		<option value="pages">{LANG_SLOGIC_CONFIG_PAGES}</option>
        		<option value="header_footer">{LANG_SLOGIC_CONFIG_HEADER_FOOTER}</option>
      		</select>',$output);
	}
	
	if ($slogic_pipe_auto_user == 'yes')
	{
		$output = str_replace('{SLOGIC_PIPE_AUTO_USER}','<select name="slogic_pipe_auto_user">
        		<option value="yes">{LANG_SLOGIC_YES}</option>
        		<option value="no">{LANG_SLOGIC_NO}</option>
      		</select>',$output);
	}
	else 
	{
		$output = str_replace('{SLOGIC_PIPE_AUTO_USER}','<select name="slogic_pipe_auto_user">
        		<option value="yes">{LANG_SLOGIC_YES}</option>
        		<option value="no" selected>{LANG_SLOGIC_NO}</option>
      		</select>',$output);
	}
	
	$tmp_email = nl2br($slogic_email_from);
	$tmp_email = explode('<br',$tmp_email);
	$tmp_email = str_replace('From: ','',$tmp_email[0]);
	$output = str_replace('{EMAIL_FROM}',$tmp_email,$output);	
	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl=slogic_config&lang='.LANGUAGE,$output);
	
	return $output;
}
?>