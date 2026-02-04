<?php
/***************************************************************************
								slogic_language.inc
							---------------------------
			created				: 04.01.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// language file of slogic module

// start of main mavigation
$slogic_language['SLOGIC_MENU']					= 'Hauptmenu';
$slogic_language['SLOGIC_MAIN'] 				= 'Haupseite';
$slogic_language['SLOGIC_LOGOUT'] 				= 'Logout';
$slogic_language['SLOGIC_PROFILE'] 				= 'Profil &auml;ndern';
$slogic_language['SLOGIC_CONFIG'] 				= 'Einstellungen &auml;ndern';
$slogic_language['SLOGIC_EMAIL_CONTENT'] 		= 'Email Einstellungen &auml;ndern';
$slogic_language['SLOGIC_PIPE_CONTENT'] 		= 'Pipe Einstellungen &auml;ndern';
$slogic_language['SLOGIC_MAINTENANCE'] 			= 'Daten- &amp; Skript-Verwaltung';
$slogic_language['SLOGIC_LIST_ANNOUNCEMENTS'] 	= 'Ank&uuml;ndigungen';
$slogic_language['SLOGIC_LIST_USERS'] 			= 'Benutzer';
$slogic_language['SLOGIC_LIST_STAFF'] 			= 'Mitarbeiter';
$slogic_language['SLOGIC_LIST_QUICK_REPLIES']	= 'Gespeicherte Antworten';
// end of main mavigation

// start of table field names
$slogic_language['SLOGIC_YES'] 			= 'Ja';
$slogic_language['SLOGIC_NO']	 		= 'Nein';
$slogic_language['SLOGIC_EDIT'] 		= '&Auml;ndern';
$slogic_language['SLOGIC_DELETE'] 		= 'L&ouml;schen';

$slogic_language['SLOGIC_USER'] 		= 'Benutzer';
$slogic_language['SLOGIC_STAFF'] 		= 'Mitarbeiter';
$slogic_language['SLOGIC_BOTH'] 		= 'Beide';
$slogic_language['SLOGIC_SUBJECT'] 		= 'Thema';
$slogic_language['SLOGIC_CONTENT']	 	= 'Inhalt';
$slogic_language['SLOGIC_SENT_DATE'] 	= 'Datum';
$slogic_language['SLOGIC_SHOW_DATE'] 	= 'Anzeigen';
$slogic_language['SLOGIC_SHOW_TO']	 	= 'Anzeigen f&uuml;r';
$slogic_language['SLOGIC_USERNAME']	 	= 'Username';
$slogic_language['SLOGIC_PASSWORD']	 	= 'Passwort';

$slogic_language['SLOGIC_INFO']	 		= 'Info';
$slogic_language['SLOGIC_MESSAGE']	 	= 'Notiz';
// end of table field names

// start of functions

// start of slogic_select_language.php
$slogic_language['SLOGIC_SELECT_LANGUAGE'] 	= 'Sprache ausw&auml;hlen';
// end of slogic_select_language.php

// start of slogic_profile.php
$slogic_language['SLOGIC_PROFILE_SUBMIT'] 	= 'Profil speichern';
$slogic_language['SLOGIC_RESET'] 			= 'Zur&uuml;cksetzen';
$slogic_language['SLOGIC_PASSWORD_MISMATCH']	= 'Die eingegebenen Passw&ouml;rter stimmen nicht &uuml;berein!';
$slogic_language['SLOGIC_PROFILE_UPDATED']	= 'Ihr Profil wurde erfolgreich ge&auml;ndert.';
// end of slogic_profile.php

// start of slogic_config.php
$slogic_language['SLOGIC_CONFIG_PIPE_AUTO_USER']	= 'User-Account kann per email eingreichtet werden';
$slogic_language['SLOGIC_CONFIG_FORM'] 				= 'Konfigurationsmenu';
$slogic_language['SLOGIC_CONFIG_SESSION'] 			= 'Sessionmanagement via';
$slogic_language['SLOGIC_CONFIG_SESSION_DATABASE'] 	= 'Datenbank (empfohlen)';
$slogic_language['SLOGIC_CONFIG_SESSION_FILES'] 	= 'Dateien';
$slogic_language['SLOGIC_CONFIG_SESSION_TIMEOUT'] 	= 'Session Lebensdauer (in sek.)';
$slogic_language['SLOGIC_CONFIG_COOKIE_TIMEOUT'] 	= 'Cookie Lebensdauer (in sek.)';
$slogic_language['SLOGIC_CONFIG_SQL_MODULE'] 		= 'Datenbank';
$slogic_language['SLOGIC_CONFIG_DEBUG_MODE'] 		= 'Debug Mode';
$slogic_language['SLOGIC_CONFIG_DEBUG_ON']			= 'Aktiviert';
$slogic_language['SLOGIC_CONFIG_DEBUG_OFF']			= 'Deaktiviert';
$slogic_language['SLOGIC_CONFIG_SCRIPT_PATH']		= 'Skript-Pfad';
$slogic_language['SLOGIC_CONFIG_SCRIPT_URL']		= 'Skript-URL';
$slogic_language['SLOGIC_CONFIG_DB_HOST']			= 'Datenbank Server';
$slogic_language['SLOGIC_CONFIG_DB_USER']			= 'Datenbank User';
$slogic_language['SLOGIC_CONFIG_DB_PASS']			= 'Datenbank Passwort';
$slogic_language['SLOGIC_CONFIG_DB_DATABASE']		= 'Datenbank Name';
$slogic_language['SLOGIC_CONFIG_ALLOWED_TAGS']		= 'HTML-Tags (in ticket-, note- and announcement content)';
$slogic_language['SLOGIC_CONFIG_DEFAULT_LANGUAGE']	= 'Standard Sprache';
$slogic_language['SLOGIC_CONFIG_SEND_ALERT']		= 'Email Alarm';
$slogic_language['SLOGIC_CONFIG_SEND_EMAIL']		= 'Sende emails via';
$slogic_language['SLOGIC_CONFIG_SEND_ALERT_ON']		= 'Aktiviert';
$slogic_language['SLOGIC_CONFIG_SEND_ALERT_OFF']	= 'Deaktiviert';
$slogic_language['SLOGIC_CONFIG_TEMPLATE_SYSTEM']	= 'Welches Template-System?';
$slogic_language['SLOGIC_CONFIG_HEADER_FOOTER']		= 'Kopf- und Fuss-Templates';
$slogic_language['SLOGIC_CONFIG_PAGES']				= 'Ganze Seiten';
$slogic_language['SLOGIC_CONFIG_EMAIL_FROM']		= 'Email Absender';
$slogic_language['SLOGIC_CONFIG_FLOOD_LIMIT']		= 'Email-Limit (pro Adresse innerhalb 24std.)';
$slogic_language['SLOGIC_CONFIG_PIPE_PRIORITY']		= 'Pipe-tickets priority';
$slogic_language['SLOGIC_CONFIG_WARNING']			= '<font color="red">Ihre &Auml;nderungen werden erst dann gespeichert, wenn die Datei zum Schreiben ge&ouml;ffnet werden kann. (z.B.: chmod 666)<br>
														Achten Sie darauf, anschliessend die Datei wieder auf chmod 644 zu setzen!</font>';
$slogic_language['SLOGIC_CONFIG_FILE_OPEN_FAIL']	= 'Die Datei kann nicht ge&ouml;ffnet werden.<br>Stellen Sie sicher, dass die Datei die n&ouml;tigen Leserechte besitzt.';
$slogic_language['SLOGIC_CONFIG_FILE_WRITE_FAIL']	= 'Die Daten konnten nicht in die Datei geschrieben werden.<br>Stellen Sie sicher, dass die Datei die n&ouml;tigen Schreibrechte besitzt.';
$slogic_language['SLOGIC_CONFIG_FILE_WRITE']		= 'Die Daten wurden erfolgreich gespeichert.';
// end of slogic_config.php

// start of slogic_maintenance.php
$slogic_language['SLOGIC_MAINTENANCE_DUMP_CHMOD']   = '<font color="red"><b><i>(Achtung: slogic_dump.sql Datei muss &uuml;ber Schreibrechte verf&uuml;gen (chmod 666)!)</i></b></font>';
$slogic_language['SLOGIC_MAINTENANCE_DUMP_INVALID']	= 'Leider gab es Probleme beim Backup der Datenbank.<br>Bitte versuchen Sie es erneut und &uuml;berpr&uuml;fen Sie n&ouml;tige Schreibrechte.';
$slogic_language['SLOGIC_MAINTENANCE_DUMP_DONE']   	= 'Es wurde ein aktuelles Backup der Datenbank in die Datei slogic_dump.sql im Skriptverzeichnis geschrieben.';
// end of slogic_maintenance.php

// start of slogic_show_user_profile.php
$slogic_language['SLOGIC_SHOW_USER_PROFILE_NONE']   = 'Benutzer existiert nicht.';
$slogic_language['SLOGIC_SHOW_USER_PROFILE']		= 'Profil anzeigen';
$slogic_language['SLOGIC_SHOW_USER_PROFILE_OF']		= 'Profil von Benutzer:';
$slogic_language['SLOGIC_EMAIL'] 					= 'Email:';
$slogic_language['SLOGIC_DOMAIN']					= 'Domain:';
$slogic_language['SLOGIC_ACT_SERVER']				= 'Server:';
$slogic_language['SLOGIC_ACT_USERNAME']				= 'Server-Username:';
$slogic_language['SLOGIC_GET_EMAIL']				= 'Erh&auml;lt Email-Benachrichtigungen:';
$slogic_language['SLOGIC_LANGUAGE']					= 'Voreingestellte Sprache:';
// end of slogic_show_user_profile.php

// start of slogic_list_announcements.php
$slogic_language['SLOGIC_ANNOUNCEMENTS']	= 'Ank&uuml;ndigungen';
$slogic_language['SLOGIC_ANNOUNCEMENT']		= 'Ank&uuml;ndigung';
$slogic_language['SLOGIC_NO_ANNOUNCEMENTS'] = '<i>Keine Ank&uuml;ndigungen vorhanden.</i>';
// end of slogic_list_announcements.php

// start of slogic_delete_announcement.php
$slogic_language['SLOGIC_ANNOUNCEMENTS_DELETED'] = 'Ank&uuml;ndigung(en) gel&ouml;scht!';
// end of slogic_delete_announcement.php

// start of slogic_delete_user.php
$slogic_language['SLOGIC_LIST_USERS_DELETED'] = 'Benutzer gel&ouml;scht!';
// end of slogic_delete_user.php

// start of slogic_delete_staff.php
$slogic_language['SLOGIC_LIST_STAFF_DELETED'] = 'Mitarbeiter gel&ouml;scht!';
// end of slogic_delete_staff.php

// start of slogic_edit_user.php
$slogic_language['SLOGIC_USER_EDITED'] 			= 'Benutzer wurde erfolgreich ge&auml;ndert.';
$slogic_language['SLOGIC_USER_EDITED_INVALID'] 	= 'Leider konnten die &Auml;nderungen nicht gespeicher werden.<br>Bitte &uuml;berpr&uuml;fen Sie die eingegebenen Daten.';
// end of slogic_edit_user.php

// start of slogic_show_announcement.php
$slogic_language['SLOGIC_WRONG_ANNOUNCEMENT'] 	= 'Sie haben nicht die n&ouml;tige Berechtigung diese Ank&uuml;ndigung zu lesen.';
$slogic_language['SLOGIC_INVALID_ANNOUNCEMENT'] = 'Sie versuchen eine nicht vorhandene Ank&uuml;ndigung zu lesen.';
// end of slogic_show_announcement.php

// start of slogic_email_content.php
$slogic_language['SLOGIC_STAFF_ADD_NOTE_CLOSE_VERIFIED'] = 'Email an Benutzer, wenn das Ticket geschlossen wird:';
$slogic_language['SLOGIC_STAFF_ADD_NOTE_USER'] = 'Email an Benutzer:';
$slogic_language['SLOGIC_STAFF_ADD_NOTE_STAFF'] = 'Email an Mitarbeiter:';
$slogic_language['SLOGIC_STAFF_GRAB_TICKET'] = 'Email wenn Mitarbeiter Ticket von anderem Mitarbeiter &uuml;bernimmt:';
$slogic_language['SLOGIC_STAFF_CLAIM_TICKET'] = 'Email wenn Mitarbeiter Ticket ausw&auml;hlt:';
$slogic_language['SLOGIC_STAFF_MOVE_TICKET'] = 'Email wenn Mitarbeiter Ticket an anderen Mitarbeiter weiterreicht:';
$slogic_language['SLOGIC_USER_ADD_NOTE_CLOSE_VERIFIED'] = 'Email an Mitarbeiter, wenn der Benutzer das Ticket schliesst:';
$slogic_language['SLOGIC_USER_ADD_NOTE_STAFF'] = 'Email an Mitarbeiter (von Benutzer):';
$slogic_language['SLOGIC_USER_REOPEN_TICKET'] = 'Email an Mitarbeiter, wenn Ticket wieder ge&ouml;ffnet wurde (von Benutzer):';
$slogic_language['SLOGIC_USER_NEW_TICKET_ALERT'] = 'Neues Ticket (dringend) -> Email an alle Mitarbeiter:';
$slogic_language['SLOGIC_USER_NEW_TICKET'] = 'Neues Ticket -> Email an entsprechende Mitarbeiter:';
$slogic_language['SLOGIC_USER_REGISTER'] = 'Registrierungs email (an Benutzer):';
$slogic_language['SLOGIC_USER_LOST_PASSWORD'] = 'Password zur&uuml;cksetzen (an Benutzer):';
$slogic_language['SLOGIC_EMAIL_UPDATED'] = '&Auml;nderungen gespeichert.';
$slogic_language['SLOGIC_SAVE'] = 'Speichern';
// end of slogic_email_content.php

// start of slogic_pipe_content.php
$slogic_language['SLOGIC_TOGGLE_EMAIL'] = 'Email Benachrichtigung:';
$slogic_language['SLOGIC_EMAIL_FLOOD_RESET'] = 'Alle Email-Z&auml;hler zur&uuml;ckgesetzt auf 0';
$slogic_language['SLOGIC_RESET_FLOOD_ALERTS'] = 'Alle Email-Z&auml;hler zur&uuml;cksetzen';
$slogic_language['SLOGIC_PIPE_NEW_USER'] = 'Email an Benutzer, wenn neues Benutzer-Konto eingerichtet wurde:';
$slogic_language['SLOGIC_PIPE_TICKET_ERROR'] = 'Email an Benutzer, wenn die Email nicht in Ticket konvertiert werden konnte:';
$slogic_language['SLOGIC_PIPE_NEW_TICKET_USER'] = 'Email an Benutzer, wenn Email in Ticket konvertiert wurde:';
$slogic_language['SLOGIC_PIPE_NEW_TICKET_STAFF'] = 'Email an Mitarbeiter, wenn Email in Ticket konvertiert wurde:';
$slogic_language['SLOGIC_PIPE_ADD_NOTE_ERROR'] = 'Email an Benutzer, wenn die Email nicht in Notiz konvertiert werden konnte:';
$slogic_language['SLOGIC_PIPE_ADD_NOTE_CLOSED'] = 'Email an Benutzer, wenn eine [#ID] eines bereits geschlossenen Tickets benutzt wurde:';
$slogic_language['SLOGIC_PIPE_ADD_NOTE_USER'] = 'Email an Benutzer, wenn Email in Notiz konvertiert wurde:';
$slogic_language['SLOGIC_PIPE_ADD_NOTE_STAFF'] = 'Email an Mitarbeiter, wenn Email in Notiz konvertiert wurde:';
$slogic_language['SLOGIC_PIPE_FLOOD_REPORT'] = 'Email Absender hat das Tageslimit &uuml;berschritten (an Admin!):';
$slogic_language['SLOGIC_PIPE_UPDATED'] = '&Auml;nderungen gespeichert.';
// end of slogic_pipe_content.php

// start of slogic_delete_quick_replies.php
$slogic_language['SLOGIC_LIST_QUICK_REPLIES_DELETED'] = 'Gespeicherte Nachricht wurde erfolgreich gel&ouml;scht.';
// end of slogic_delete_quick_replies.php

// start of slogic_edit_quick_reply.php
$slogic_language['SLOGIC_EDIT_QUICK_REPLY'] = 'Gespeicherte Nachricht &auml;ndern';
$slogic_language['SLOGIC_QUICK_REPLY_EDITED_INVALID'] = 'Illegale Aktion.';
$slogic_language['SLOGIC_QUICK_REPLY_EDITED'] = 'Gespeicherte Nachricht wurde erfolgreich gel&auml;ndert.';
// end of slogic_edit_quick_reply.php

// end of functions

// *************************************************************** \\

// start of templates

// start of templates - pages
// start of slogic_login.tpl
$slogic_language['SLOGIC_LOGIN_TITLE'] = 'Support Logic - Login';
// end of slogic_login.tpl

// start of slogic_logout.tpl
$slogic_language['SLOGIC_LOGOUT_TITLE'] = 'Support Logic - Logout';
// end of slogic_logout.tpl

// start of slogic_main.tpl
$slogic_language['SLOGIC_MAIN_TITLE'] = 'Support Logic - Hauptseite';
// end of slogic_main.tpl

// start of slogic_profile.tpl
$slogic_language['SLOGIC_PROFILE_TITLE'] = 'Support Logic - Ihre Profileinstellungen';
// end of slogic_profile.tpl

// start of slogic_config.tpl
$slogic_language['SLOGIC_CONFIG_TITLE'] = 'Support Logic - Skripteinstellungen';
// end of slogic_config.tpl

// start of slogic_maintenance.tpl
$slogic_language['SLOGIC_MAINTENANCE_TITLE'] = 'Support Logic - Daten- &amp; Skript-Verwaltung';
// end of slogic_maintenance.tpl

// start of slogic_list_announcements.tpl
$slogic_language['SLOGIC_LIST_ANNOUNCEMENTS_TITLE'] = 'Support Logic - Ank&uuml;ndigungen Verwalten';
// end of slogic_list_announcements.tpl

// start of slogic_add_announcement.tpl
$slogic_language['SLOGIC_ADD_ANNOUNCEMENT_TITLE'] = 'Support Logic - Ank&uuml;ndigung Hinzuf&uuml;gen';
// end of slogic_add_announcement.tpl

// start of slogic_edit_announcement.tpl
$slogic_language['SLOGIC_EDIT_ANNOUNCEMENT_TITLE'] = 'Support Logic - Ank&uuml;ndigung &Auml;ndern';
// end of slogic_edit_announcement.tpl

// start of slogic_list_users.tpl
$slogic_language['SLOGIC_LIST_USERS_TITLE'] = 'Support Logic - Benutzer Verwalten';
// end of slogic_list_users.tpl

// start of slogic_list_staff.tpl
$slogic_language['SLOGIC_LIST_STAFF_TITLE'] = 'Support Logic - Mitarbeiter Verwalten';
// end of slogic_list_staff.tpl

// start of slogic_add_user.tpl
$slogic_language['SLOGIC_ADD_USER_TITLE'] = 'Support Logic - Benutzer Hinzuf&uuml;gen';
// end of slogic_add_user.tpl

// start of slogic_add_staff.tpl
$slogic_language['SLOGIC_ADD_STAFF_TITLE'] = 'Support Logic - Mitarbeiter &Auml;ndern';
// end of slogic_add_staff.tpl

// start of slogic_edit_user.tpl
$slogic_language['SLOGIC_EDIT_USER_TITLE'] = 'Support Logic - Benutzer &Auml;ndern';
// end of slogic_edit_user.tpl

// start of slogic_edit_staff.tpl
$slogic_language['SLOGIC_EDIT_STAFF_TITLE'] = 'Support Logic - Mitarbeiter &Auml;ndern';
// end of slogic_edit_staff.tpl

// start of slogic_show_user_profile.tpl
$slogic_language['SLOGIC_SHOW_USER_PROFILE_TITLE'] = 'Support Logic - Profileinstellungen Ansehen';
// end of slogic_show_user_profile.tpl

// start of slogic_redirect.tpl
$slogic_language['SLOGIC_REDIRECT_TITLE'] 	= 'Support Logic - Automatische Weiterleitung';
$slogic_language['SLOGIC_REDIRECT_TOPIC'] 	= 'Bitte haben Sie einen Augenblick Geduld...';
$slogic_language['SLOGIC_REDIRECT_URL'] 	= 'Bitte klicken Sie hier, wenn Ihr Browser keine automatische Weiterleitung unterst&uuml;tzt.';
// end of slogic_redirect.tpl

// start of slogic_show_announcement.tpl
$slogic_language['SLOGIC_ANNOUNCEMENT_TITLE'] = 'Support Logic - Ank&uuml;ndigung';
// end of slogic_show_announcement.tpl

// start of slogic_email_content.tpl
$slogic_language['SLOGIC_EMAIL_CONTENT_TITLE'] = 'Support Logic - Email Inhalte';
// end of slogic_email_content.tpl

// start of slogic_pipe_content.tpl
$slogic_language['SLOGIC_PIPE_CONTENT_TITLE'] = 'Support Logic - Pipe Inhalte';
// end of slogic_pipe_content.tpl

// start of slogic_list_quick_replies.tpl
$slogic_language['SLOGIC_LIST_QUICK_REPLIES_TITLE'] = 'Support Logic - Gespeicherte Antworten';
// end of slogic_list_quick_replies.tpl

// start of slogic_edit_quick_reply.tpl
$slogic_language['SLOGIC_EDIT_QUICK_REPLY_TITLE'] = 'Support Logic - Gespeicherte Antwort &auml;ndern';
// end of slogic_edit_quick_reply.tpl

// start of slogic_reset_flood.tpl
$slogic_language['SLOGIC_RESET_FLOOD_TITLE'] = 'Support Logic - Email Z&auml;hler zur&uuml;cksetzen';
// end of slogic_reset_flood.tpl
// end of templates - pages

// start of templates - functions
// start of slogic_profile.tpl
$slogic_language['SLOGIC_PROFILE_PASSWORD_INFO'] 	= 'Falls Sie ein neues Passwort eingeben funktioniert dieses beim n&auml;chsten Login.';
$slogic_language['SLOGIC_PROFILE_PASSWORD'] 	 	= 'Passwort';
$slogic_language['SLOGIC_PROFILE_PASSWORD_2'] 		= 'Passwort best&auml;tigen';
$slogic_language['SLOGIC_PROFILE_EMAIL'] 			= 'Email';
$slogic_language['SLOGIC_PROFILE_DOMAIN'] 			= 'Domain';
$slogic_language['SLOGIC_PROFILE_SERVER'] 			= 'Server';
$slogic_language['SLOGIC_PROFILE_ACT_USERNAME'] 	= 'Server-username';
$slogic_language['SLOGIC_PROFILE_LANGUAGE']			= 'Gespeicherte Sprache';
$slogic_language['SLOGIC_PROFILE_NOTIFICATION'] 	= 'Benachrichtigungen per email schicken';
$slogic_language['SLOGIC_PROFILE_SUBSCRIBE'] 		= 'Kategorien ausw&auml;hlen';
// end of slogic_profile.tpl

// start of slogic_config.tpl
$slogic_language['SLOGIC_CONFIG_SUBMIT'] = 'Speichern!';
// end of slogic_config.tpl

// start of slogic_maintenance.tpl
$slogic_language['SLOGIC_MAINTENANCE_DUMP'] 		= 'Datenbank Verwaltung';
$slogic_language['SLOGIC_MAINTENANCE_DUMP_FORM'] 	= 'W&auml;hlen Sie eine Backup Methode:';
$slogic_language['SLOGIC_MAINTENANCE_DUMP_SUBMIT'] 	= 'Backup!';
// end of slogic_maintenance.tpl

// start of slogic_list_announcements.tpl
$slogic_language['SLOGIC_ANNOUNCEMENTS_DELETE_ALL']	= 'Alle Ank&uuml;ndigungen ausw&auml;hlen';
$slogic_language['SLOGIC_ANNOUNCEMENTS_DELETE']		= 'Ank&uuml;ndigung ausw&auml;hlen';
$slogic_language['SLOGIC_ANNOUNCEMENTS_ALL']		= 'alle';
// end of slogic_list_announcements.tpl

// start of slogic_add_announcement.tpl
$slogic_language['SLOGIC_ADD_ANNOUNCEMENT']				= 'Ank&uuml;ndigung hinzuf&uuml;gen';
$slogic_language['SLOGIC_ANNOUNCEMENT_NOW']				= 'Immer';
$slogic_language['SLOGIC_ANNOUNCEMENT_EQUAL']			= 'Datum = aktuelles Datum';
$slogic_language['SLOGIC_ANNOUNCEMENT_EQUAL_UP']		= 'Datum >= aktuelles Datum';
$slogic_language['SLOGIC_ANNOUNCEMENT_NEVER']			= 'Nie';
$slogic_language['SLOGIC_ANNOUNCEMENT_BOTH']			= 'Beide';
$slogic_language['SLOGIC_ANNOUNCEMENT_USERS']			= 'Benutzer';
$slogic_language['SLOGIC_ANNOUNCEMENT_STAFF']			= 'Mitarbeiter';
$slogic_language['SLOGIC_ANNOUNCEMENT_YYYY']			= 'TT - MM - JJJJ';
$slogic_language['SLOGIC_ANNOUNCEMENT_SUBMIT']			= 'Speichern';
$slogic_language['SLOGIC_ANNOUNCEMENT_ADDED']			= 'Ank&uuml;ndigung hinzugef&uuml;gt!';
$slogic_language['SLOGIC_ANNOUNCEMENT_ADDED_INVALID'] 	= 'Leider konnte die Ank&uuml;ndigung nicht gespeichert werden.<br>Bitte stellen Sie sicher, dass die eingegebenen Daten g&uuml;ltig sind!';
// end of slogic_add_announcement.tpl

// start of slogic_list_users.tpl
$slogic_language['SLOGIC_LIST_USERS_NO_USERS'] 	= '<i>Keine Benutzer vorhanden.</i>';
$slogic_language['SLOGIC_USERS_DELETE_ALL'] 	= 'Alle Benutzer ausw&auml;hlen';
$slogic_language['SLOGIC_USERS_DELETE'] 		= 'Benutzer ausw&auml;hlen';
// end of slogic_list_users.tpl

// start of slogic_list_staff.tpl
$slogic_language['SLOGIC_LIST_STAFF_NO_STAFF'] 	= '<i>Keine Mitarbeiter vorhanden.</i>';
$slogic_language['SLOGIC_STAFF_DELETE_ALL'] 	= 'Alle Mitarbeiter ausw&auml;hlen';
$slogic_language['SLOGIC_STAFF_DELETE'] 		= 'Mitarbeiter ausw&auml;hlen';
// end of slogic_list_staff.tpl

// start of slogic_add_user.tpl
$slogic_language['SLOGIC_ADD_USER'] 			= 'Benutzer hinzuf&uuml;gen.';
$slogic_language['SLOGIC_USER_ADDED_INVALID'] 	= 'Der Benutzer konnte leider nicht hinzugef&uuml;gt werden.<br>Stellen Sie sicher, dass alle Felder korrekt ausgef&uuml;llt wurden.';
$slogic_language['SLOGIC_USER_ADDED'] 			= 'Der Benutzer wurde erfolgreich der Datenbank hinzugef&uuml;gt.';
// end of slogic_add_user.tpl

// start of slogic_edit_user.tpl
$slogic_language['SLOGIC_EDIT_USER'] 			= 'Benutzer &auml;ndern.';
$slogic_language['SLOGIC_USER_EDITED_INVALID'] 	= 'Der Benutzer konnte leider nicht ge&auml;ndert werden.<br>Stellen Sie sicher, dass alle Felder korrekt ausgef&uuml;llt wurden.';
$slogic_language['SLOGIC_USER_EDITED'] 			= 'Benutzerdaten erfolgreich ge&auml;ndert.';
// end of slogic_edit_user.tpl

// start of slogic_edit_staff.tpl
$slogic_language['SLOGIC_SIGNATURE'] 				= 'Signatur';
$slogic_language['SLOGIC_EDIT_STAFF'] 				= 'Mitarbeiter &auml;ndern.';
$slogic_language['SLOGIC_STAFF_EDITED_INVALID'] 	= 'Der Mitarbeiter konnte leider nicht ge&auml;ndert werden.<br>Stellen Sie sicher, dass alle Felder korrekt ausgef&uuml;llt wurden.';
$slogic_language['SLOGIC_STAFF_EDITED'] 			= 'Mitarbeiterdaten erfolgreich ge&auml;ndert.';
// end of slogic_edit_staff	.tpl

// start of slogic_add_staff.tpl
$slogic_language['SLOGIC_ADD_STAFF'] 			= 'Mitarbeiter hinzuf&uuml;gen.';
$slogic_language['SLOGIC_STAFF_ADDED_INVALID'] 	= 'Der Mitarbeiter konnte leider nicht hinzugef&uuml;gt werden.<br>Stellen Sie sicher, dass alle Felder korrekt ausgef&uuml;llt wurden.';
$slogic_language['SLOGIC_STAFF_ADDED'] 			= 'Der Mitarbeiter wurde erfolgreich der Datenbank hinzugef&uuml;gt.';
// end of slogic_add_staff.tpl

// start of slogic_edit_announcement.tpl
$slogic_language['SLOGIC_EDIT_ANNOUNCEMENT'] 			= 'Ank&uuml;ndigung &auml;ndern';
$slogic_language['SLOGIC_ANNOUNCEMENT_EDITED']			= 'Ank&uuml;ndigung ge&auml;ndert!';
$slogic_language['SLOGIC_ANNOUNCEMENT_EDITED_INVALID'] 	= 'Leider konnte die Ank&uuml;ndigung nicht ge&auml;ndert werden.<br>Bitte stellen Sie sicher, dass die eingegebenen Daten g&uuml;ltig sind!';
// end of slogic_edit_announcement.tpl

// start of slogic_list_quick_replies.tpl
$slogic_language['SLOGIC_LIST_QUICK_REPLIES_DELETE_ALL'] = 'Alle l&ouml;schen';
$slogic_language['SLOGIC_LIST_QUICK_REPLIES_NO_REPLIES'] = '<i>Keine Daten vorhanden.</i>';
// end of slogic_list_quick_replies.tpl

// end of templates - functions

// end of templates
?>