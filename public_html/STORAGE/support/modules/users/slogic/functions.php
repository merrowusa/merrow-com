<?php

// defines the executable functions of this module
function slogic_functions()
{
	return array('slogic_output','slogic_logout', 'slogic_nav_main', 'slogic_select_language', 
				 'slogic_show_username', 'slogic_profile', 'slogic_list_announcements', 'slogic_show_announcement',
				 );
}

// defines the navigation & its order
function slogic_main_navigation()
{
	return array('slogic_main', 'slogic_profile', 'slogic_logout',);
}

// defines the language files of the module
function slogic_language($selected_language)
{
	if (file_exists(SCRIPT_PATH.'modules/users/slogic/languages/'.$selected_language.'/slogic_language.inc'))
	{
		include SCRIPT_PATH.'modules/users/slogic/languages/'.$selected_language.'/slogic_language.inc';
	}
	else 
	{
		include SCRIPT_PATH.'modules/users/slogic/languages/'.DEFAULT_LANGUAGE.'/slogic_language.inc';
	}
	
	return $slogic_language;
}
?>