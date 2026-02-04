<?php

function tickets_functions()
{
	return array('tickets_list_closed','tickets_show_ticket','tickets_count_close_tickets',
				 'tickets_add_note_form','tickets_add_note','tickets_edit_note_form','tickets_edit_note',
				 'tickets_confirm_delete_note','tickets_delete_note','tickets_jumper','tickets_move_ticket',
				 'tickets_count_open_tickets','tickets_count_user_updated_tickets','tickets_count_assigned_tickets',
				 'tickets_count_staff_updated_tickets','tickets_count_closed_tickets','tickets_list_open',
				 'tickets_list_user_updated','tickets_list_open','tickets_list_assigned','tickets_list_staff_updated',
				 'tickets_list_close','tickets_show_attachment','tickets_confirm_delete_attachment','tickets_delete_attachment',
				 'tickets_show_history','tickets_count_attachments','tickets_list_attachments','tickets_list_tickets',
				 'tickets_delete_ticket','tickets_list_notes','tickets_count_notes','tickets_list_categories',
				 'tickets_count_categories','tickets_delete_category','tickets_add_category','tickets_edit_category',
				 'tickets_list_priorities','tickets_delete_priority','tickets_add_priority','tickets_edit_priority',
				 'tickets_edit_ticket','ticket_edit_note','tickets_count_placeholders','tickets_list_placeholders',
				 'tickets_add_placeholder','tickets_edit_placeholder','tickets_delete_placeholder'
	             );
}

function tickets_main_navigation()
{
	return array('tickets_list_tickets','tickets_list_notes','tickets_list_categories','tickets_list_priorities',
				 'tickets_list_attachments','tickets_list_placeholders'
				);
}

function tickets_language($selected_language)
{
	if (file_exists(SCRIPT_PATH.'modules/admin/tickets/languages/'.$selected_language.'/tickets_language.inc'))
	{
		include SCRIPT_PATH.'modules/admin/tickets/languages/'.$selected_language.'/tickets_language.inc';
	}
	else 
	{
		include SCRIPT_PATH.'modules/admin/tickets/languages/'.DEFAULT_LANGUAGE.'/tickets_language.inc';
	}
	
	return $tickets_language;
}
?>