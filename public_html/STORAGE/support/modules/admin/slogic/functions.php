<?php

function slogic_functions()
{
	return array('slogic_output','slogic_logout', 'slogic_nav_main', 'slogic_select_language', 
				 'slogic_show_username', 'slogic_profile', 'slogic_list_announcements', 'slogic_show_announcement',
				 'slogic_count_users','slogic_count_open_tickets','tickets_show_grab','tickets_grab_ticket',
				 'slogic_show_user_profile', 'slogic_config', 'slogic_maintenance', 'slogic_delete_announcement',
				 'slogic_add_announcement', 'slogic_edit_announcement', 'slogic_list_users', 
				 'slogic_delete_user', 'slogic_add_user', 'slogic_edit_user', 'slogic_count_staff',
				 'slogic_list_staff', 'slogic_add_staff', 'slogic_edit_staff', 'slogic_delete_staff',
				 'slogic_email_content','slogic_pipe_content','slogic_list_quick_replies',
				 'slogic_delete_quick_replies','slogic_edit_quick_reply','slogic_reset_flood'
				 );
}

function slogic_main_navigation()
{
	return array('slogic_main', 'slogic_config', 'slogic_email_content', 'slogic_pipe_content', 'slogic_maintenance', 
			     'slogic_list_announcements', 'slogic_list_users', 'slogic_list_staff', 'slogic_list_quick_replies',
			     'slogic_profile', 'slogic_logout');
}

function slogic_language($selected_language)
{
	if (file_exists(SCRIPT_PATH.'modules/admin/slogic/languages/'.$selected_language.'/slogic_language.inc'))
	{
		include SCRIPT_PATH.'modules/admin/slogic/languages/'.$selected_language.'/slogic_language.inc';
	}
	else 
	{
		include SCRIPT_PATH.'modules/admin/slogic/languages/'.DEFAULT_LANGUAGE.'/slogic_language.inc';
	}
	
	return $slogic_language;
}
?>