<?php

function slogic_functions()
{
	return array('slogic_output','slogic_logout', 'slogic_nav_main', 'slogic_select_language', 
				 'slogic_show_username', 'slogic_profile', 'slogic_list_announcements', 'slogic_show_announcement',
				 'slogic_count_users','slogic_count_open_tickets','tickets_show_grab','tickets_grab_ticket',
				 'slogic_show_user_profile','slogic_list_quick_replies','slogic_edit_quick_reply',
				 'slogic_delete_quick_replies','slogic_add_quick_reply'
				 );
}

function slogic_main_navigation()
{
	return array('slogic_main', 'slogic_profile', 'slogic_list_quick_replies', 'slogic_logout');
}

function slogic_language($selected_language)
{
	if (file_exists(SCRIPT_PATH.'modules/staff/slogic/languages/'.$selected_language.'/slogic_language.inc'))
	{
		include SCRIPT_PATH.'modules/staff/slogic/languages/'.$selected_language.'/slogic_language.inc';
	}
	else 
	{
		include SCRIPT_PATH.'modules/staff/slogic/languages/'.DEFAULT_LANGUAGE.'/slogic_language.inc';
	}
	
	return $slogic_language;
}
?>