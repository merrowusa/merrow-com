<?php
/***************************************************************************
								tickets_language.inc
							----------------------------
			created				: 09.01.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// language file of tickets module

// start of main mavigation
$tickets_language['TICKETS_MENU'] = 'Ticket Menu';
$tickets_language['TICKETS_NEW_TICKET'] = 'Neues Ticket erstellen';
$tickets_language['TICKETS_LIST_CLOSED'] = 'Abgeschlossene Tickets';
$tickets_language['TICKETS_LIST_OPEN'] = 'Neue Tickets';
$tickets_language['TICKETS_LIST_MY_USER_UPDATED'] = 'Meine Tickets, die auf eine Antwort warten';
$tickets_language['TICKETS_LIST_USER_UPDATED'] = 'Tickets, die auf eine Antwort warten';
$tickets_language['TICKETS_LIST_STAFF_UPDATED'] = 'Beantwortete Tickets';
$tickets_language['TICKETS_LIST_MY_ASSIGNED'] = 'Meine offenen Tickets';
$tickets_language['TICKETS_LIST_ASSIGNED'] = 'Offene Tickets';
$tickets_language['TICKETS_LIST_CLOSE'] = 'Zu schliessende Tickets';
// end of main mavigation

// start of functions

// start of tickets_list_assigned.php
$tickets_language['TICKETS_ASSIGNED_TICKETS'] = 'Offene Tickets';
$tickets_language['TICKETS_SENTDATE'] = 'Datum';
$tickets_language['TICKETS_STAFF'] = 'Bearbeitet von';
$tickets_language['TICKETS_USER'] = 'Absender';
$tickets_language['TICKETS_PRIORITY'] = 'Priorit&auml;t';
$tickets_language['TICKETS_CATEGORY'] = 'Kategorie';
$tickets_language['TICKETS_SUBJECT'] = 'Betreff';
$tickets_language['TICKETS_LAST_UPDATE'] = 'Letze Aktualisierung';
$tickets_language['TICKETS_NO_TICKETS'] = '<i>Keine Tickets vorhanden.</i>';
$tickets_language['TICKETS_ARROW_UP'] = '<img src="'.SCRIPT_URL.'modules/staff/tickets/languages/de/arrow_up.gif" border="0">';
$tickets_language['TICKETS_ARROW_DOWN'] = '<img src="'.SCRIPT_URL.'modules/staff/tickets/languages/de/arrow_down.gif" border="0">';
// end of tickets_list_assigned.php

// start of tickets_list_my_assigned.php
$tickets_language['TICKETS_MY_ASSIGNED_TICKETS'] = 'Meine offene Tickets';
// end of tickets_list_my_assigned.php

// start of tickets_list_open.php
$tickets_language['TICKETS_OPEN_TICKETS'] = 'Neue Tickets';
// end of tickets_list_open.php

// start of tickets_list_closed.php
$tickets_language['TICKETS_CLOSED_TICKETS'] = 'Abgeschlossene Tickets';
// end of tickets_list_closed.php

// start of tickets_list_close.php
$tickets_language['TICKETS_CLOSE_TICKETS'] = 'Zu schliessende Tickets';
// end of tickets_list_close.php

// start of tickets_list_user_updated.php
$tickets_language['TICKETS_USER_UPDATED_TICKETS'] = 'Warten auf Antwort';
// end of tickets_list_user_updated.php

// start of tickets_list_my_user_updated.php
$tickets_language['TICKETS_MY_USER_UPDATED_TICKETS'] = 'Warten auf meine Antwort';
// end of tickets_list_my_user_updated.php

// start of tickets_list_staff_updated.php
$tickets_language['TICKETS_STAFF_UPDATED_TICKETS'] = 'Beantwortete Tickets';
// end of tickets_list_staff_updated.php

// start of tickets_new_ticket.php
$tickets_language['TICKETS_SELECT_PRIORITY'] = 'Priorit&auml;t ausw&auml;hlen';
$tickets_language['TICKETS_SELECT_CATEGORY'] = 'Kategorie ausw&auml;hlen';
$tickets_language['TICKETS_ENTER_SUBJECT'] 	 = 'Betreff';
$tickets_language['TICKETS_ENTER_CONTENT']   = 'Inhalt';
$tickets_language['TICKETS_NO_PRIORITIES']   = 'Leider gibt es noch keine Priorit&auml;ten!';
$tickets_language['TICKETS_NO_CATEGORIES']   = 'Leider gibt es noch keine Kategorien!';
$tickets_language['TICKETS_DATA_SAVED'] 	 = 'Ihr Ticket wurde erfolgreich abgeschickt.<br>Ein Mitarbeiter wird sich so schnell wie m&ouml;glich um Ihr Problem k&uuml;mmern.';
$tickets_language['TICKETS_SUBMIT'] 		 = 'Daten senden';
$tickets_language['TICKETS_RESET'] 			 = 'Zur&uuml;cksetzen';
$tickets_language['TICKETS_SUBJECT_DEFAULT'] = 'Bitte geben Sie hier den Betreff Ihrer Frage ein.';
$tickets_language['TICKETS_CONTENT_DEFAULT'] = 'Bitte geben Sie hier Ihre Frage ein.';
$tickets_language['TICKETS_UPLOAD_ERROR'] 	 = '<i>Keine Dateianh&auml;nge vorhanden.</i>';
// end of tickets_new_ticket.php

// start of tickets_show_ticket.php
$tickets_language['TICKETS_NO'] = 'Ticket ID';
$tickets_language['TICKETS_CONTENT'] = 'Inhalt';
$tickets_language['TICKETS_STATUS'] = 'Status';
$tickets_language['TICKETS_PIPE_ID'] = 'Email ID';
$tickets_language['TICKETS_ATTACHMENT_ICON'] = '<IMG src="'.SCRIPT_URL.'modules/staff/tickets/languages/de/attachment.gif" border="0">';
$tickets_language['TICKETS_TRASH_ICON'] = '<IMG src="'.SCRIPT_URL.'modules/staff/tickets/languages/de/trash.gif" border="0">';
$tickets_language['TICKETS_HISTORY_ICON'] = '<IMG src="'.SCRIPT_URL.'modules/staff/tickets/languages/de/icon_history.gif" title="Ticket Liste" border="0">';
$tickets_language['TICKETS_PROFILE_ICON'] = '<IMG src="'.SCRIPT_URL.'modules/staff/tickets/languages/de/icon_profile.gif" title="Profil anzeigen" border="0">';
$tickets_language['TICKETS_SHOW_USER_HISTORY'] = 'Ticket Liste';
$tickets_language['TICKETS_TICKET_STATS'] = 'Ticket Stats';
$tickets_language['TICKETS_TICKET_CONTENT'] = 'Ticket Inhalt';
// end of tickets_show_ticket.php

// start of tickets_list_notes.php
$tickets_language['TICKETS_NOTES'] = '&raquo; Notizen';
// end of tickets_list_notes.php

// start of tickets_add_note_form.php
$tickets_language['TICKETS_ADD_NOTE'] = 'Notiz hinzuf&uuml;gen';
// end of tickets_add_note_form.php

// start of tickets_add_note.php
$tickets_language['TICKETS_ADD_NOTE_PERMISSION'] 	= 'Sie k&ouml;nnen keine Notizen zu Tickets hinzuf&uuml;gen, die Ihnen nicht geh&ouml;ren.';
$tickets_language['TICKETS_ADD_NOTE_CLOSED'] 		= 'Sie k&ouml;nnen keine Notizen zu einem abgeschlossenem Ticket hinzuf&uuml;gen.<br>Sie k&ouml;nnen das Ticket jedoch wieder &ouml;ffnen und dann neue Notizen hinzuf&uuml;gen.';
$tickets_language['TICKETS_ADD_NOTE_CONTENT'] 		= 'Sie haben vergessen den Inhalt Ihrer Notiz einzugeben.';
$tickets_language['TICKETS_ADD_NOTE_UPLOAD'] 		= 'Die Datei wurde erfolgreich gespeichert.';
$tickets_language['TICKETS_ADD_NOTE_ADDED'] 		= 'Ihre Notiz wurde gespeichert.<br>Sie werden nun automatisch weitergeleitet.';
$tickets_language['TICKETS_ADD_NOTE_INVALID'] 		= 'Illegale Funktion.';
// end of tickets_add_note.php

// start of tickets_show_grab.php
$tickets_language['TICKETS_CLAIM'] = 'Ticket ausw&auml;hlen';
$tickets_language['TICKETS_GRAB'] = 'Ticket &uuml;bernehmen';
$tickets_language['TICKETS_MOVE'] = 'Ticket weiterreichen';
$tickets_language['TICKETS_REOPEN'] = 'Ticket wieder &ouml;ffnen';
// end of tickets_show_grab.php

// start of tickets_edit_note_form.php
$tickets_language['TICKETS_EDIT_NOTE'] = 'Notiz &auml;ndern';
$tickets_language['TICKETS_BACK_TO_ADD'] = '<i>Klicken Sie hier, um zur&uuml;ck zur "Notiz hinzuf&uuml;gen" Seite zu gelangen.</i>';
$tickets_language['TICKETS_EDIT_NOTE_FORM_INVALID'] = 'Illegale Funktion.';
// end of tickets_edit_note_form.php

// start of tickets_edit_note.php
$tickets_language['TICKETS_EDIT_NOTE_PERMISSION'] 	= 'Sie k&ouml;nnen keine Notizen &auml;ndern, die Ihnen nicht geh&ouml;ren!';
$tickets_language['TICKETS_EDIT_NOTE_CONTENT'] 		= 'Sie haben vergessen, den Inhalt Ihrer Notiz einzugeben.';
$tickets_language['TICKETS_EDIT_NOTE_EDITED'] 		= 'Notiz erfolgreich ge&auml;ndert.<br>Sie werden nun automatisch weitergeleitet.';
$tickets_language['TICKETS_EDIT_NOTE_INVALID'] 		= 'Illegale Funktion.';
// end of tickets_edit_note.php

// start of tickets_delete_note.php
$tickets_language['TICKETS_DELETE_NOTE_PERMISSION'] = 'Sie k&ouml;nnen keine Notizen l&ouml;schen, die Ihnen nicht geh&ouml;ren.';
$tickets_language['TICKETS_DELETE_NOTE_DELETED'] 	= 'Die Notiz wurde erfolgreich gel&ouml;scht.<br>Sie werden nun automatisch weitergeleitet.';
$tickets_language['TICKETS_DELETE_NOTE_INVALID'] 	= 'Illegale Funktion.';
// end of tickets_delete_note.php

// start of tickets_delete_attachment.php
$tickets_language['TICKETS_DELETE_ATTACHMENT_DELETED'] 	= 'Der Anhang wurde erfolgreich gel&ouml;scht.<br>Sie werden nun automatisch weitergeleitet.';
$tickets_language['TICKETS_DELETE_ATTACHMENT_INVALID'] 	= 'Illegale Funktion.';
// end of tickets_delete_attachment.php

// start of tickets_confirm_delete_note.php
$tickets_language['TICKETS_CONFIRM_DELETION'] = 'Diese Notiz l&ouml;schen?';
$tickets_language['TICKETS_CONFIRM_OK'] = '<img src="'.SCRIPT_URL.'modules/staff/tickets/languages/en/ok.gif" border="0"><br>&nbsp;&nbsp;Ja';
$tickets_language['TICKETS_CONFIRM_NO'] = '<img src="'.SCRIPT_URL.'modules/staff/tickets/languages/en/no.gif" border="0">&nbsp;&nbsp;<br>Nein&nbsp;&nbsp;';
// end of tickets_confirm_delete_note.php

// start of tickets_confirm_delete_attachment.php
$tickets_language['TICKETS_CONFIRM_ATTACHMENT_DELETION'] = 'Diesen Anhang l&ouml;schen?';
// start of tickets_confirm_delete_attachment.php

// start of tickets_list_notes.php
$tickets_language['TICKETS_NOTE_EDIT'] 		= '&Auml;ndern';
$tickets_language['TICKETS_NOTE_DELETE'] 	= 'L&ouml;schen';
// end of tickets_list_notes.php

// start of tickets_show_ticket.php
$tickets_language['TICKETS_SHOW_TICKET_PERMISSION'] = 'Sie k&ouml;nnen nur Tickets einsehen, die Ihnen geh&ouml;ren!';
$tickets_language['TICKETS_EDIT_ICON'] = '<IMG src="'.SCRIPT_URL.'modules/staff/tickets/languages/de/icon_edit.gif" title="&Auml;ndern" border="0" align="bottom">';
$tickets_language['TICKETS_DELETE_ICON'] = '<IMG src="'.SCRIPT_URL.'modules/staff/tickets/languages/de/icon_delete.gif" title="L&ouml;schen" border="0" align="bottom">';
// end of tickets_show_ticket.php

// start of tickets_grab_ticket.php
$tickets_language['TICKETS_GRAB_GRABBED']  = 'Sie haben das Ticket &uuml;bernommen von';
$tickets_language['TICKETS_GRAB_CLAIMED']  = 'Dieses Ticket ist nun Ihnen zugewiesen.<br>Bitte haben Sie einen Moment Geduld, Sie werden automatisch weitergeleitet.';
$tickets_language['TICKETS_GRAB_REOPENED'] = 'Sie haben das Ticket wieder ge&ouml;ffnet.';
$tickets_language['TICKETS_GRAB_INVALID']  = 'Illegale Funktion.';
// end of tickets_grab_ticket.php

// start of tickets_move_ticket.php
$tickets_language['TICKETS_MOVE_MOVED']  	= 'Ticket weitergeleitet an:';
$tickets_language['TICKETS_MOVE_OPEN']  	= 'Sie k&ouml;nnen keine ge&ouml;ffneten Tickets weiterreichen.';
$tickets_language['TICKETS_MOVE_CLOSED'] 	= 'Sie k&ouml;nnen keine geschlossenen Tickets weiterreichen.';
$tickets_language['TICKETS_MOVE_INVALID']  	= 'Illegale Funktion.';
// end of tickets_move_ticket.php

// end of functions

// start of templates - pages
// start of tickets_confirm_delete_note.tpl
$tickets_language['TICKETS_CONFIRM_DELETE_TITLE'] = 'Support Logic - L&ouml;schen best&auml;tigen';
// end of tickets_confirm_delete_note.tpl

// start of tickets_list_assigned.tpl
$tickets_language['TICKETS_LIST_ASSIGNED_TITLE'] = 'Support Logic - Offene Tickets';
// end of tickets_list_assigned.tpl

// start of tickets_list_my_assigned.tpl
$tickets_language['TICKETS_LIST_MY_ASSIGNED_TITLE'] = 'Support Logic - Meine offenen Tickets';
// end of tickets_list_my_assigned.tpl

// start of tickets_list_close.tpl
$tickets_language['TICKETS_LIST_CLOSE_TITLE'] = 'Support Logic - Zu schliessende Tickets';
// end of tickets_list_close.tpl

// start of tickets_list_closed.tpl
$tickets_language['TICKETS_LIST_CLOSED_TITLE'] = 'Support Logic - Abgeschlossene Tickets';
// end of tickets_list_closed.tpl

// start of tickets_list_open.tpl
$tickets_language['TICKETS_LIST_OPEN_TITLE'] = 'Support Logic - Neue Tickets';
// end of tickets_list_open.tpl

// start of tickets_list_staff_updated.tpl
$tickets_language['TICKETS_LIST_STAFF_UPDATED_TITLE'] = 'Support Logic - Beantwortete Tickets';
// end of tickets_list_staff_updated.tpl

// start of tickets_list_user_updated.tpl
$tickets_language['TICKETS_LIST_USER_UPDATED_TITLE'] = 'Support Logic - Auf Antwort wartende Tickets';
// end of tickets_list_user_updated.tpl

// start of tickets_list_my_user_updated.tpl
$tickets_language['TICKETS_LIST_MY_USER_UPDATED_TITLE'] = 'Support Logic - Auf meine Antwort wartende Tickets';
// end of tickets_list_my_user_updated.tpl

// start of tickets_confirm_delete_attachment.tpl
$tickets_language['TICKETS_CONFIRM_DELETE_ATTACHMENT_TITLE'] = 'Support Logic - Anhang l&ouml;schen best&auml;tigen';
// end of tickets_confirm_delete_attachment.tpl

// start of tickets_show_ticket.tpl
$tickets_language['TICKETS_SHOW_TICKET_TITLE'] = 'Support Logic - Ticket Inhaltsseite';
// end of tickets_show_ticket.tpl

// start of tickets_show_ticket_edit.tpl
$tickets_language['TICKETS_SHOW_TICKET_EDIT_TITLE'] = 'Support Logic - Notiz &auml;ndern';
// end of tickets_show_ticket_edit.tpl

// start of tickets_show_history.tpl
$tickets_language['TICKETS_SHOW_HISTORY_TITLE'] = 'Support Logic - Ticket Liste f&uuml;r diesen Benutzer';
// end of tickets_show_history.tpl

// start of tickets_confirm_delete_note.tpl
$tickets_language['TICKETS_CONFIRM_DELETE_NOTE_TITLE'] = 'Support Logic - Notiz l&ouml;schen best&auml;tigen';
// end of tickets_confirm_delete_note.tpl
// end of templates - pages

// start of templates - functions
// start of tickets_add_note_form.tpl & tickets_new_ticket.tpl & tickets_show_ticket.tpl & tickets_list_notes.tpl
$tickets_language['TICKETS_GO'] = 'Los!';
$tickets_language['TICKETS_JUMPER_TEXT'] = 'Gehe zu Ticket no.:';
$tickets_language['TICKETS_STAFF_TO_STAFF'] = 'Mitarbeiter Notiz?';
$tickets_language['TICKETS_PREVIOUS'] = 'Vorherige';
$tickets_language['TICKETS_NEXT'] = 'N&auml;chste';
$tickets_language['TICKETS_ATTACHMENTS'] = 'Anlage(n)';
$tickets_language['TICKETS_ADD_ATTACHMENT'] = 'Datei hinzuf&uuml;gen:';
$tickets_language['TICKETS_CURRENT_ATTACHMENTS'] = 'Angef&uuml;gte Dateien:';
$tickets_language['TICKETS_CLOSE_TICKET_VERIFY'] = 'Ticket abschliessen?';
$tickets_language['TICKETS_YES'] = 'Ja';
$tickets_language['TICKETS_NO_NOTES'] = 'Keine Notizen vorhanden.';
$tickets_language['TICKETS_SHOW_HISTORY'] = 'Ticket-Liste f&uuml;r folgenden Benutzer:';
// end of tickets_add_note_form.tpl & tickets_new_ticket.tpl & tickets_show_ticket.tpl & tickets_list_notes.tpl
// end of templates - functions
?>