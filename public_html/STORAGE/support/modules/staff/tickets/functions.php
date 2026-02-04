<?php

function tickets_functions()
{
	return array('tickets_list_closed','tickets_show_ticket','tickets_list_notes','tickets_count_close_tickets',
				 'tickets_add_note_form','tickets_add_note','tickets_edit_note_form','tickets_edit_note',
				 'tickets_confirm_delete_note','tickets_delete_note','tickets_jumper','tickets_move_ticket',
				 'tickets_count_open_tickets','tickets_count_user_updated_tickets','tickets_count_assigned_tickets',
				 'tickets_count_staff_updated_tickets','tickets_count_closed_tickets','tickets_list_open',
				 'tickets_list_user_updated','tickets_list_open','tickets_list_assigned','tickets_list_staff_updated',
				 'tickets_list_close','tickets_show_attachment','tickets_confirm_delete_attachment','tickets_delete_attachment',
				 'tickets_show_history','tickets_list_my_user_updated','tickets_list_my_assigned',
				 'tickets_count_my_user_updated_tickets','tickets_count_my_assigned_tickets'
	             );
}

function tickets_main_navigation()
{
	return array('tickets_list_closed','tickets_list_open','tickets_list_my_user_updated','tickets_list_user_updated',
				 'tickets_list_my_assigned', 'tickets_list_assigned', 'tickets_list_staff_updated','tickets_list_close'
				);
}

function tickets_language($selected_language)
{
	if (file_exists(SCRIPT_PATH.'modules/staff/tickets/languages/'.$selected_language.'/tickets_language.inc'))
	{
		include SCRIPT_PATH.'modules/staff/tickets/languages/'.$selected_language.'/tickets_language.inc';
	}
	else 
	{
		include SCRIPT_PATH.'modules/staff/tickets/languages/'.DEFAULT_LANGUAGE.'/tickets_language.inc';
	}
	
	return $tickets_language;
}
?>