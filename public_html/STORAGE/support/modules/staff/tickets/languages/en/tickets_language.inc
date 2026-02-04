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
$tickets_language['TICKETS_MENU'] = 'Ticket Menu';
$tickets_language['TICKETS_NEW_TICKET'] = 'New Ticket';
$tickets_language['TICKETS_LIST_CLOSED'] = 'Closed Tickets';
$tickets_language['TICKETS_LIST_OPEN'] = 'New Tickets';
$tickets_language['TICKETS_LIST_MY_USER_UPDATED'] = 'Awaiting my response';
$tickets_language['TICKETS_LIST_USER_UPDATED'] = 'Awaiting staff response';
$tickets_language['TICKETS_LIST_STAFF_UPDATED'] = 'Awaiting user response';
$tickets_language['TICKETS_LIST_MY_ASSIGNED'] = 'My open Tickets';
$tickets_language['TICKETS_LIST_ASSIGNED'] = 'Open Tickets';
$tickets_language['TICKETS_LIST_CLOSE'] = 'Awaiting closure';
// end of main mavigation

// start of functions

// start of tickets_list_assigned.php
$tickets_language['TICKETS_ASSIGNED_TICKETS'] = 'Open Tickets';
$tickets_language['TICKETS_SENTDATE'] = 'Sent';
$tickets_language['TICKETS_STAFF'] = 'Staff';
$tickets_language['TICKETS_USER'] = 'User';
$tickets_language['TICKETS_PRIORITY'] = 'Priority';
$tickets_language['TICKETS_CATEGORY'] = 'Category';
$tickets_language['TICKETS_SUBJECT'] = 'Subject';
$tickets_language['TICKETS_LAST_UPDATE'] = 'Last update';
$tickets_language['TICKETS_NO_TICKETS'] = '<i>No Tickets available.</i>';
$tickets_language['TICKETS_ARROW_UP'] = '<img src="'.SCRIPT_URL.'modules/staff/tickets/languages/en/arrow_up.gif" border="0">';
$tickets_language['TICKETS_ARROW_DOWN'] = '<img src="'.SCRIPT_URL.'modules/staff/tickets/languages/en/arrow_down.gif" border="0">';
// end of tickets_list_assigned.php

// start of tickets_list_my_assigned.php
$tickets_language['TICKETS_MY_ASSIGNED_TICKETS'] = 'My open Tickets';
// end of tickets_list_my_assigned.php

// start of tickets_list_open.php
$tickets_language['TICKETS_OPEN_TICKETS'] = 'New Tickets';
// end of tickets_list_open.php

// start of tickets_list_closed.php
$tickets_language['TICKETS_CLOSED_TICKETS'] = 'Closed Tickets';
// end of tickets_list_closed.php

// start of tickets_list_close.php
$tickets_language['TICKETS_CLOSE_TICKETS'] = 'Awaiting closure';
// end of tickets_list_close.php

// start of tickets_list_user_updated.php
$tickets_language['TICKETS_USER_UPDATED_TICKETS'] = 'Awaiting Staff Response';
// end of tickets_list_user_updated.php

// start of tickets_list_my_user_updated.php
$tickets_language['TICKETS_MY_USER_UPDATED_TICKETS'] = 'Awaiting My Response';
// end of tickets_list_my_user_updated.php

// start of tickets_list_staff_updated.php
$tickets_language['TICKETS_STAFF_UPDATED_TICKETS'] = 'Awaiting User Response';
// end of tickets_list_staff_updated.php

// start of tickets_new_ticket.php
$tickets_language['TICKETS_SELECT_PRIORITY'] = 'Select Priority';
$tickets_language['TICKETS_SELECT_CATEGORY'] = 'Select Category';
$tickets_language['TICKETS_ENTER_SUBJECT']   = 'Enter Subject';
$tickets_language['TICKETS_ENTER_CONTENT']   = 'Enter Content';
$tickets_language['TICKETS_NO_PRIORITIES']   = 'No priorities exist!';
$tickets_language['TICKETS_NO_CATEGORIES'] 	 = 'No categories exist!';
$tickets_language['TICKETS_DATA_SAVED'] 	 = 'Your ticket was sent successfully.<br>A staff member will take care of your problem shortly.';
$tickets_language['TICKETS_SUBMIT'] 		 = 'Submit';
$tickets_language['TICKETS_RESET'] 			 = 'Reset';
$tickets_language['TICKETS_SUBJECT_DEFAULT'] = 'Please enter the subject of your problem/question.';
$tickets_language['TICKETS_CONTENT_DEFAULT'] = 'Please enter your problem/question.';
$tickets_language['TICKETS_UPLOAD_ERROR'] 	 = '<i>No Files uploaded.</i>';
// end of tickets_new_ticket.php

// start of tickets_show_ticket.php
$tickets_language['TICKETS_NO'] = 'Ticket ID';
$tickets_language['TICKETS_PRIORITY'] = 'Priority';
$tickets_language['TICKETS_CATEGORY'] = 'Category';
$tickets_language['TICKETS_SUBJECT'] = 'Subject';
$tickets_language['TICKETS_CONTENT'] = 'Content';
$tickets_language['TICKETS_STATUS'] = 'Status';
$tickets_language['TICKETS_PIPE_ID'] = 'Tracking ID';
$tickets_language['TICKETS_ATTACHMENT_ICON'] = '<IMG src="'.SCRIPT_URL.'modules/staff/tickets/languages/en/attachment.gif" border="0">';
$tickets_language['TICKETS_TRASH_ICON'] = '<IMG src="'.SCRIPT_URL.'modules/staff/tickets/languages/en/trash.gif" border="0">';
$tickets_language['TICKETS_HISTORY_ICON'] = '<IMG src="'.SCRIPT_URL.'modules/staff/tickets/languages/en/icon_history.gif" title="View User Ticket History" border="0" align="bottom">';
$tickets_language['TICKETS_PROFILE_ICON'] = '<IMG src="'.SCRIPT_URL.'modules/staff/tickets/languages/en/icon_profile.gif" title="View User Profile" border="0" align="baseline">';
$tickets_language['TICKETS_SHOW_USER_HISTORY'] = 'Ticket History';
$tickets_language['TICKETS_TICKET_STATS'] = 'Ticket Stats';
$tickets_language['TICKETS_TICKET_CONTENT'] = 'Ticket Content';
// end of tickets_show_ticket.php

// start of tickets_list_notes.php
$tickets_language['TICKETS_NOTES'] = '&laquo;&raquo; Notes';
// end of tickets_list_notes.php

// start of tickets_add_note_form.php
$tickets_language['TICKETS_ADD_NOTE'] = 'Add Note';
// end of tickets_add_note_form.php

// start of tickets_add_note.php
$tickets_language['TICKETS_ADD_NOTE_PERMISSION'] 	= 'You are not allowed to add notes to a ticket which doesn\'t belong to you.';
$tickets_language['TICKETS_ADD_NOTE_CLOSED'] 		= 'You cannot add a note to a closed ticket.<br>In order to add a note to a closed ticket, you need to re-open it first.';
$tickets_language['TICKETS_ADD_NOTE_CONTENT'] 		= 'You forgot to enter the content of your note.';
$tickets_language['TICKETS_ADD_NOTE_UPLOAD'] 		= 'File successfully uploaded.';
$tickets_language['TICKETS_ADD_NOTE_ADDED'] 		= 'Note added.<br>You will now be redirected to the ticket.';
$tickets_language['TICKETS_ADD_NOTE_INVALID'] 		= 'You tried to add data to an invalid ticket.';
// end of tickets_add_note.php

// start of tickets_show_grab.php
$tickets_language['TICKETS_CLAIM'] = 'Claim Ticket';
$tickets_language['TICKETS_GRAB'] = 'Grab Ticket';
$tickets_language['TICKETS_MOVE'] = 'Move Ticket';
$tickets_language['TICKETS_REOPEN'] = 'Reopen Ticket';
// end of tickets_show_grab.php

// start of tickets_edit_note_form.php
$tickets_language['TICKETS_EDIT_NOTE'] = 'Edit Note';
$tickets_language['TICKETS_BACK_TO_ADD'] = '<i>Click here to go back to the "Add Note" page.</i>';
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

// start of tickets_delete_attachment.php
$tickets_language['TICKETS_DELETE_ATTACHMENT_DELETED'] 	= 'Attachment deleted.<br>You will now be redirected to the ticket.';
$tickets_language['TICKETS_DELETE_ATTACHMENT_INVALID'] 	= 'Invalid function.';
// end of tickets_delete_attachment.php

// start of tickets_confirm_delete_attachment.php
$tickets_language['TICKETS_CONFIRM_ATTACHMENT_DELETION'] = 'Delete attachment?';
// start of tickets_confirm_delete_attachment.php

// start of tickets_confirm_delete_note.php
$tickets_language['TICKETS_CONFIRM_DELETION'] = 'Are you sure you want to delete this note?';
$tickets_language['TICKETS_CONFIRM_OK'] = '<img src="'.SCRIPT_URL.'modules/staff/tickets/languages/en/ok.gif" border="0"><br>&nbsp;&nbsp;Yes';
$tickets_language['TICKETS_CONFIRM_NO'] = '<img src="'.SCRIPT_URL.'modules/staff/tickets/languages/en/no.gif" border="0">&nbsp;&nbsp;<br>No&nbsp;&nbsp;';
// end of tickets_confirm_delete_note.php

// start of tickets_list_notes.php
$tickets_language['TICKETS_NOTE_EDIT'] 		= 'Edit';
$tickets_language['TICKETS_NOTE_DELETE'] 	= 'Delete';
$tickets_language['TICKETS_EDIT_ICON'] = '<IMG src="'.SCRIPT_URL.'modules/staff/tickets/languages/en/icon_edit.gif" title="Edit" border="0" align="bottom">';
$tickets_language['TICKETS_DELETE_ICON'] = '<IMG src="'.SCRIPT_URL.'modules/staff/tickets/languages/en/icon_delete.gif" title="Delete" border="0" align="bottom">';
// end of tickets_list_notes.php

// start of tickets_show_ticket.php
$tickets_language['TICKETS_SHOW_TICKET_PERMISSION'] = 'You are not allowed to view this ticket!';
// end of tickets_show_ticket.php

// start of tickets_grab_ticket.php
$tickets_language['TICKETS_GRAB_GRABBED']  = 'You grabbed this ticket from';
$tickets_language['TICKETS_GRAB_CLAIMED']  = 'You claimed this ticket.<br>Please wait, you are being redirected to the ticket content page.';
$tickets_language['TICKETS_GRAB_REOPENED'] = 'You re-opened the ticket.';
$tickets_language['TICKETS_GRAB_INVALID']  = 'Invalid action!';
// end of tickets_grab_ticket.php

// start of tickets_move_ticket.php
$tickets_language['TICKETS_MOVE_MOVED']  	= 'Ticket moved to:';
$tickets_language['TICKETS_MOVE_OPEN']  	= 'You cannot move new tickets.';
$tickets_language['TICKETS_MOVE_CLOSED'] 	= 'You cannot move closed tickets.';
$tickets_language['TICKETS_MOVE_INVALID']  	= 'Invalid action!';
// end of tickets_move_ticket.php

// end of functions

// start of templates - pages
// start of tickets_confirm_delete_note.tpl
$tickets_language['TICKETS_CONFIRM_DELETE_TITLE'] = 'Support Logic - Confirm Deletion';
// end of tickets_confirm_delete_note.tpl

// start of tickets_list_assigned.tpl
$tickets_language['TICKETS_LIST_ASSIGNED_TITLE'] = 'Support Logic - Open Tickets';
// end of tickets_list_assigned.tpl

// start of tickets_list_my_assigned.tpl
$tickets_language['TICKETS_LIST_MY_ASSIGNED_TITLE'] = 'Support Logic - My open Tickets';
// end of tickets_list_my_assigned.tpl

// start of tickets_list_close.tpl
$tickets_language['TICKETS_LIST_CLOSE_TITLE'] = 'Support Logic - Tickets awaiting closure';
// end of tickets_list_close.tpl

// start of tickets_list_closed.tpl
$tickets_language['TICKETS_LIST_CLOSED_TITLE'] = 'Support Logic - Closed Tickets';
// end of tickets_list_closed.tpl

// start of tickets_list_open.tpl
$tickets_language['TICKETS_LIST_OPEN_TITLE'] = 'Support Logic - New Tickets';
// end of tickets_list_open.tpl

// start of tickets_list_staff_updated.tpl
$tickets_language['TICKETS_LIST_STAFF_UPDATED_TITLE'] = 'Support Logic - Tickets awaiting user response';
// end of tickets_list_staff_updated.tpl

// start of tickets_show_ticket.tpl
$tickets_language['TICKETS_SHOW_TICKET_TITLE'] = 'Support Logic - Ticket Content';
// end of tickets_show_ticket.tpl

// start of tickets_confirm_delete_attachment.tpl
$tickets_language['TICKETS_CONFIRM_DELETE_ATTACHMENT_TITLE'] = 'Support Logic - Confirm attachment deletion';
// end of tickets_confirm_delete_attachment.tpl

// start of tickets_list_user_updated.tpl
$tickets_language['TICKETS_LIST_USER_UPDATED_TITLE'] = 'Support Logic - Tickets awaiting staff response';
// end of tickets_list_user_updated.tpl

// start of tickets_list_my_user_updated.tpl
$tickets_language['TICKETS_LIST_MY_USER_UPDATED_TITLE'] = 'Support Logic - Tickets awaiting my response';
// end of tickets_list_my_user_updated.tpl

// start of tickets_show_ticket_edit.tpl
$tickets_language['TICKETS_SHOW_TICKET_EDIT_TITLE'] = 'Support Logic - Edit Note';
// end of tickets_show_ticket_edit.tpl

// start of tickets_show_history.tpl
$tickets_language['TICKETS_SHOW_HISTORY_TITLE'] = 'Support Logic - Ticket History';
// end of tickets_show_history.tpl

// start of tickets_confirm_delete_note.tpl
$tickets_language['TICKETS_CONFIRM_DELETE_NOTE_TITLE'] = 'Support Logic - Confirm note deletion';
// end of tickets_confirm_delete_note.tpl
// end of templates - pages

// start of templates - functions
// start of tickets_add_note_form.tpl & tickets_new_ticket.tpl & tickets_show_ticket.tpl & tickets_list_notes.tpl
$tickets_language['TICKETS_GO'] = 'Go!';
$tickets_language['TICKETS_JUMPER_TEXT'] = 'Go to ticket no.:';
$tickets_language['TICKETS_STAFF_TO_STAFF'] = 'Staff-2-Staff note?';
$tickets_language['TICKETS_PREVIOUS'] = 'Previous';
$tickets_language['TICKETS_NEXT'] = 'Next';
$tickets_language['TICKETS_ATTACHMENTS'] = 'Attachment(s)';
$tickets_language['TICKETS_ADD_ATTACHMENT'] = 'Add an attachment:';
$tickets_language['TICKETS_CURRENT_ATTACHMENTS'] = 'Current attachments:';
$tickets_language['TICKETS_CLOSE_TICKET_VERIFY'] = 'Can the ticket be closed?';
$tickets_language['TICKETS_YES'] = 'Yes';
$tickets_language['TICKETS_NO_NOTES'] = 'No notes available.';
$tickets_language['TICKETS_SHOW_HISTORY'] = 'Ticket history for user:';
// end of tickets_add_note_form.tpl & tickets_new_ticket.tpl & tickets_show_ticket.tpl & tickets_list_notes.tpl
// end of templates - functions
?>