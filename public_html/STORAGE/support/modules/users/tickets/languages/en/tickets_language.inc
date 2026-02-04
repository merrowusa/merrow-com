<?php
/***************************************************************************
								tickets_language.inc
							----------------------------
			created				: 09.01.2003
			edited				: 11.07.2003
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// language file of tickets module

// start of main mavigation
$tickets_language['TICKETS_MENU'] 				= 'Ticket Menu';
$tickets_language['TICKETS_NEW_TICKET'] 		= 'New Ticket';
$tickets_language['TICKETS_LIST_CLOSED'] 		= 'Closed Tickets';
$tickets_language['TICKETS_LIST_OPEN_ASSIGNED']	= 'Open Tickets';
// end of main mavigation

// start of functions

// start of tickets_list_assigned.php
$tickets_language['TICKETS_ASSIGNED_TICKETS'] = 'Your assigned tickets';
$tickets_language['TICKETS_SENTDATE'] = 'Sent';
$tickets_language['TICKETS_STAFF'] = 'Staff';
$tickets_language['TICKETS_PRIORITY'] = 'Priority';
$tickets_language['TICKETS_CATEGORY'] = 'Category';
$tickets_language['TICKETS_SUBJECT'] = 'Subject';
$tickets_language['TICKETS_NO_TICKETS'] = '<i>No tickets available.</i>';
$tickets_language['TICKETS_ARROW_UP'] = '<img src="'.SCRIPT_URL.'modules/users/tickets/languages/en/arrow_up.gif" border="0">';
$tickets_language['TICKETS_ARROW_DOWN'] = '<img src="'.SCRIPT_URL.'modules/users/tickets/languages/en/arrow_down.gif" border="0">';
// end of tickets_list_assigned.php

// start of tickets_list_closed.php
$tickets_language['TICKETS_CLOSED_TICKETS'] = 'Your closed tickets';
// end of tickets_list_closed.php

// start of tickets_new_ticket.php
$tickets_language['TICKETS_SELECT_PRIORITY'] 	= 'Select Priority';
$tickets_language['TICKETS_SELECT_CATEGORY'] 	= 'Select Category';
$tickets_language['TICKETS_ENTER_SUBJECT'] 		= 'Enter Subject';
$tickets_language['TICKETS_ENTER_CONTENT']		= 'Enter Content';
$tickets_language['TICKETS_NO_PRIORITIES'] 		= 'No priorities exist!';
$tickets_language['TICKETS_NO_CATEGORIES'] 		= 'No categories exist!';
$tickets_language['TICKETS_DATA_SAVED'] 		= 'Your ticket was sent successfully.<br>A staff member will take care of your problem shortly.';
$tickets_language['TICKETS_SUBMIT'] 			= 'Submit';
$tickets_language['TICKETS_RESET'] 				= 'Reset';
$tickets_language['TICKETS_SUBJECT_DEFAULT'] 	= 'Please enter the subject of your problem/question.';
$tickets_language['TICKETS_CONTENT_DEFAULT'] 	= 'Please enter your problem/question.';
$tickets_language['TICKETS_UPLOAD_ERROR'] 		= '<i>No files uploaded.</i>';
// end of tickets_new_ticket.php

// start of tickets_show_ticket.php
$tickets_language['TICKETS_NO'] = 'Ticket ID';
$tickets_language['TICKETS_CONTENT'] = 'Content';
$tickets_language['TICKETS_STATUS'] = 'Status';
$tickets_language['TICKETS_PIPE_ID'] = 'Tracking ID';
$tickets_language['TICKETS_ATTACHMENT_ICON'] = '<IMG src="'.SCRIPT_URL.'modules/users/tickets/languages/en/attachment.gif" border="0">';
$tickets_language['TICKETS_TICKET_STATS'] = 'Ticket Stats';
$tickets_language['TICKETS_TICKET_CONTENT'] = 'Ticket Content';
// end of tickets_show_ticket.php

// start of tickets_list_notes.php
$tickets_language['TICKETS_NOTES'] = '&laquo;&raquo; Notes';
// end of tickets_list_notes.php

// start of tickets_add_note_form.php
$tickets_language['TICKETS_ADD_NOTE'] 		= 'Add Note';
$tickets_language['TICKETS_REOPEN_TICKET'] 	= 'Re-open Ticket';
// end of tickets_add_note_form.php

// start of tickets_add_note.php
$tickets_language['TICKETS_ADD_NOTE_PERMISSION'] 	= 'You are not allowed to add notes to a ticket which doesn\'t belong to you.';
$tickets_language['TICKETS_ADD_NOTE_CLOSED'] 		= 'You cannot add a note to a closed ticket.<br>In order to add a note to a closed ticket, you will have to re-open it first.';
$tickets_language['TICKETS_ADD_NOTE_CONTENT'] 		= 'You forgot to enter the content of your note.';
$tickets_language['TICKETS_ADD_NOTE_UPLOAD'] 		= 'File successfully uploaded.';
$tickets_language['TICKETS_ADD_NOTE_ADDED'] 		= 'Note added.<br>You will now be redirected to the ticket.';
$tickets_language['TICKETS_ADD_NOTE_INVALID'] 		= 'You tried to add data to an invalid ticket.';
// end of tickets_add_note.php

// start of tickets_edit_note_form.php
$tickets_language['TICKETS_EDIT_NOTE'] 				= 'Edit Note';
$tickets_language['TICKETS_BACK_TO_ADD'] 			= '<i>Click here to go back to the "Add Note" page.</i>';
$tickets_language['TICKETS_EDIT_NOTE_FORM_INVALID'] = 'You tried to edit data from an invalid note.';
// end of tickets_edit_note_form.php

// start of tickets_edit_note.php
$tickets_language['TICKETS_EDIT_NOTE_PERMISSION'] 	= 'You are not allowed to edit a note which doesn\'t belong to you.';
$tickets_language['TICKETS_EDIT_NOTE_CONTENT'] 		= 'You forgot to enter the content of your note.';
$tickets_language['TICKETS_EDIT_NOTE_EDITED'] 		= 'Note edited.<br>You will now be redirected to the ticket.';
$tickets_language['TICKETS_EDIT_NOTE_INVALID'] 		= 'You tried to edit data on an invalid ticket.';
// end of tickets_edit_note.php

// start of tickets_delete_note.php
$tickets_language['TICKETS_DELETE_NOTE_PERMISSION'] = 'You are not allowed to delete a note which doesn\'t belong to you.';
$tickets_language['TICKETS_DELETE_NOTE_DELETED'] 	= 'Note deleted.<br>You will now be redirected to the ticket.';
$tickets_language['TICKETS_DELETE_NOTE_INVALID'] 	= 'You tried to delete data from an invalid ticket.';
// end of tickets_delete_note.php

// start of tickets_confirm_delete_note.php
$tickets_language['TICKETS_CONFIRM_DELETION'] = 'Are you sure you want to delete this note?';
$tickets_language['TICKETS_CONFIRM_OK'] = '<img src="'.SCRIPT_URL.'modules/users/tickets/languages/en/ok.gif" border="0"><br>&nbsp;&nbsp;Yes';
$tickets_language['TICKETS_CONFIRM_NO'] = '<img src="'.SCRIPT_URL.'modules/users/tickets/languages/en/no.gif" border="0">&nbsp;&nbsp;<br>No&nbsp;&nbsp;';
// end of tickets_confirm_delete_note.php

// start of tickets_list_notes.php
$tickets_language['TICKETS_NOTE_EDIT'] 		= 'Edit';
$tickets_language['TICKETS_NOTE_DELETE'] 	= 'Delete';
// end of tickets_list_notes.php

// start of tickets_reopen_ticket.php
$tickets_language['TICKETS_REOPEN_PERMISSION'] 	= 'You are not allowed to re-open a ticket which doesn\'t belong to you.';
$tickets_language['TICKETS_REOPEN_MISMATCH'] 	= 'You cannot re-open an open/assigned ticket.';
$tickets_language['TICKETS_REOPEN_REOPENED'] 	= 'Ticket successfully re-opened.';
$tickets_language['TICKETS_REOPEN_INVALID'] 	= 'Invalid Action!';
// end of tickets_reopen_ticket.php

// start of tickets_show_attachment.php
$tickets_language['TICKETS_SHOW_ATTACHMENT_PERMISSION'] = 'You are not allowed to view attachments which don\'t belong to your tickets.';
$tickets_language['TICKETS_SHOW_ATTACHMENT_INVALID'] 	= 'Invalid option.';
// end of tickets_show_attachment.php

// start of tickets_show_ticket.php
$tickets_language['TICKETS_SHOW_TICKET_PERMISSION'] = 'You are not allowed to view this ticket!';
// end of tickets_show_ticket.php

// start of tickets_change_priority.php
$tickets_language['TICKETS_CHANGE_PRIORITY_INVALID'] = 'Invalid option.';
$tickets_language['TICKETS_CHANGE_PRIORITY_CHANGED'] = 'Priority changed.';
// end of tickets_change_priority.php

// end of functions

// start of templates - pages
// start of tickets_confirm_delete_note.tpl
$tickets_language['TICKETS_CONFIRM_DELETE_TITLE'] = 'Support Logic - Confirm Note Deletion';
// end of tickets_confirm_delete_note.tpl

// start of tickets_list_closed.tpl
$tickets_language['TICKETS_LIST_CLOSED_TITLE'] = 'Support Logic - Closed Tickets';
// end of tickets_list_closed.tpl

// start of tickets_new_ticket.tpl
$tickets_language['TICKETS_NEW_TICKET_TITLE'] = 'Support Logic - New Ticket';
// end of tickets_new_ticket.tpl

// start of tickets_show_ticket.tpl
$tickets_language['TICKETS_SHOW_TICKET_TITLE'] = 'Support Logic - Ticket Content';
// end of tickets_show_ticket.tpl

// start of tickets_show_ticket.tpl
$tickets_language['TICKETS_LIST_OPEN_ASSIGNED_TITLE'] = 'Support Logic - Open Tickets';
// end of tickets_show_ticket.tpl

// start of tickets_show_ticket_edit.tpl
$tickets_language['TICKETS_SHOW_TICKET_EDIT_TITLE'] = 'Support Logic - Edit Note';
// end of tickets_show_ticket_edit.tpl

// start of tickets_confirm_delete_note.tpl
$tickets_language['TICKETS_CONFIRM_DELETE_NOTE_TITLE'] = 'Support Logic - Confirm note deletion';
// end of tickets_confirm_delete_note.tpl
// end of templates - pages

// start of templates - functions
// start of tickets_add_note_form.tpl & tickets_new_ticket.tpl & tickets_show_ticket.tpl & tickets_list_notes.tpl
$tickets_language['TICKETS_PREVIOUS'] = 'Previous';
$tickets_language['TICKETS_NEXT'] = 'Next';
$tickets_language['TICKETS_ATTACHMENTS'] = 'Attachment(s)';
$tickets_language['TICKETS_ADD_ATTACHMENT'] = 'Add an attachment:';
$tickets_language['TICKETS_CURRENT_ATTACHMENTS'] = 'Current attachments:';
$tickets_language['TICKETS_CLOSE_TICKET_VERIFY'] = 'Can the ticket be closed?';
$tickets_language['TICKETS_YES'] = 'Yes';
$tickets_language['TICKETS_NO_NOTES'] = 'No notes available.';
// end of tickets_add_note_form.tpl & tickets_new_ticket.tpl & tickets_show_ticket.tpl & tickets_list_notes.tpl
// end of templates - functions

?>