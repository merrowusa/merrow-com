<?php

// defines the executable functions of this module
function tickets_functions()
{
	return array('tickets_list_closed','tickets_new_ticket','tickets_show_ticket','tickets_list_notes',
				 'tickets_add_note_form','tickets_add_note','tickets_edit_note_form','tickets_edit_note',
				 'tickets_confirm_delete_note','tickets_delete_note','tickets_list_open_assigned',
				 'tickets_show_attachment','tickets_reopen_ticket','tickets_change_priority'
	             );
}

// defines the navigation & its order
function tickets_main_navigation()
{
	return array('tickets_new_ticket','tickets_list_open_assigned','tickets_list_closed');
}

// defines the language files of the module
function tickets_language($selected_language)
{
	if (file_exists(SCRIPT_PATH.'modules/users/tickets/languages/'.$selected_language.'/tickets_language.inc'))
	{
		include SCRIPT_PATH.'modules/users/tickets/languages/'.$selected_language.'/tickets_language.inc';
	}
	else 
	{
		include SCRIPT_PATH.'modules/users/tickets/languages/'.DEFAULT_LANGUAGE.'/tickets_language.inc';
	}
	
	return $tickets_language;
}
?>