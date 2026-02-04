<?php
/***************************************************************************
								slogic_language.inc
							---------------------------
			created				: 04.01.2003
			edited				: 11.07.2003
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// language file of slogic module

// start of main mavigation
$slogic_language['SLOGIC_MENU']					= 'Main Menu';
$slogic_language['SLOGIC_MAIN'] 				= 'Main';
$slogic_language['SLOGIC_LOGOUT'] 				= 'Logout';
$slogic_language['SLOGIC_PROFILE'] 				= 'Profile';
$slogic_language['SLOGIC_CONFIG'] 				= 'Config';
$slogic_language['SLOGIC_EMAIL_CONTENT'] 		= 'Email Config';
$slogic_language['SLOGIC_PIPE_CONTENT'] 		= 'Pipe Config';
$slogic_language['SLOGIC_MAINTENANCE'] 			= 'Maintenance';
$slogic_language['SLOGIC_LIST_ANNOUNCEMENTS'] 	= 'Announcements';
$slogic_language['SLOGIC_LIST_USERS'] 			= 'Users';
$slogic_language['SLOGIC_LIST_STAFF'] 			= 'Staff';
$slogic_language['SLOGIC_LIST_QUICK_REPLIES']	= 'Quick Replies';
// end of main mavigation

// start of table field names
$slogic_language['SLOGIC_YES'] 			= 'Yes';
$slogic_language['SLOGIC_NO']	 		= 'No';
$slogic_language['SLOGIC_EDIT'] 		= 'Edit';
$slogic_language['SLOGIC_DELETE'] 		= 'Delete';

$slogic_language['SLOGIC_USER'] 		= 'User';
$slogic_language['SLOGIC_STAFF'] 		= 'Staff';
$slogic_language['SLOGIC_BOTH'] 		= 'Both';
$slogic_language['SLOGIC_SUBJECT'] 		= 'Subject';
$slogic_language['SLOGIC_CONTENT']	 	= 'Content';
$slogic_language['SLOGIC_SENT_DATE'] 	= 'Sent';
$slogic_language['SLOGIC_SHOW_DATE'] 	= 'Display';
$slogic_language['SLOGIC_SHOW_TO']	 	= 'Show to';
$slogic_language['SLOGIC_USERNAME']	 	= 'Username';
$slogic_language['SLOGIC_PASSWORD']	 	= 'Password';

$slogic_language['SLOGIC_INFO']	 		= 'Info';
$slogic_language['SLOGIC_MESSAGE']	 	= 'Note';
// end of table field names

// start of functions

// start of slogic_select_language.php
$slogic_language['SLOGIC_SELECT_LANGUAGE'] 	= 'Set language';
// end of slogic_select_language.php

// start of slogic_profile.php
$slogic_language['SLOGIC_PROFILE_SUBMIT'] 	= 'Save Profile';
$slogic_language['SLOGIC_RESET'] 			= 'Reset';
$slogic_language['SLOGIC_PASSWORD_MISMATCH']	= 'Your passwords don\'t match!';
$slogic_language['SLOGIC_PROFILE_UPDATED']	= 'Your profile was successfully updated!';
// end of slogic_profile.php

// start of slogic_config.php
$slogic_language['SLOGIC_CONFIG_PIPE_AUTO_USER'] 	= 'User account creation via email pipe';
$slogic_language['SLOGIC_CONFIG_FORM'] 				= 'Support Logic - Configuration';
$slogic_language['SLOGIC_CONFIG_SESSION'] 			= 'Session management by';
$slogic_language['SLOGIC_CONFIG_SESSION_DATABASE'] 	= 'Database (default)';
$slogic_language['SLOGIC_CONFIG_SESSION_FILES'] 	= 'Files';
$slogic_language['SLOGIC_CONFIG_SESSION_TIMEOUT'] 	= 'Session expiration (in sec.)';
$slogic_language['SLOGIC_CONFIG_COOKIE_TIMEOUT'] 	= 'Cookie expiration (in sec.)';
$slogic_language['SLOGIC_CONFIG_SQL_MODULE'] 		= 'Database';
$slogic_language['SLOGIC_CONFIG_DEBUG_MODE'] 		= 'Debug Mode';
$slogic_language['SLOGIC_CONFIG_DEBUG_ON']			= 'On';
$slogic_language['SLOGIC_CONFIG_DEBUG_OFF']			= 'Off';
$slogic_language['SLOGIC_CONFIG_SCRIPT_PATH']		= 'Script Path';
$slogic_language['SLOGIC_CONFIG_SCRIPT_URL']		= 'Script URL';
$slogic_language['SLOGIC_CONFIG_DB_HOST']			= 'Database Server';
$slogic_language['SLOGIC_CONFIG_DB_USER']			= 'Database User';
$slogic_language['SLOGIC_CONFIG_DB_PASS']			= 'Database Password';
$slogic_language['SLOGIC_CONFIG_DB_DATABASE']		= 'Database Name';
$slogic_language['SLOGIC_CONFIG_ALLOWED_TAGS']		= 'Allowed HTML Tags (in ticket, note and announcement content)';
$slogic_language['SLOGIC_CONFIG_DEFAULT_LANGUAGE']	= 'Default Language';
$slogic_language['SLOGIC_CONFIG_SEND_ALERT']		= 'Email Alert';
$slogic_language['SLOGIC_CONFIG_SEND_EMAIL']		= 'Send emails via';
$slogic_language['SLOGIC_CONFIG_SEND_ALERT_ON']		= 'Activated';
$slogic_language['SLOGIC_CONFIG_SEND_ALERT_OFF']	= 'Deactivated';
$slogic_language['SLOGIC_CONFIG_HEADER_FOOTER']		= 'Header and Footer';
$slogic_language['SLOGIC_CONFIG_TEMPLATE_SYSTEM']	= 'Use template system';
$slogic_language['SLOGIC_CONFIG_PAGES']				= 'Pages';
$slogic_language['SLOGIC_CONFIG_EMAIL_FROM']		= 'Email Sender';
$slogic_language['SLOGIC_CONFIG_FLOOD_LIMIT']		= 'Email flood limit (per address a day)';
$slogic_language['SLOGIC_CONFIG_PIPE_PRIORITY']		= 'Pipe-tickets priority';
$slogic_language['SLOGIC_CONFIG_WARNING']			= '<font color="red">Your changes cannot be saved to the file until you make it writeable. (e.g. chmod 666)<br>&nbsp;<br>Remember to chmod it back to 644 after saving the changes!</font>';
$slogic_language['SLOGIC_CONFIG_FILE_OPEN_FAIL']	= 'Unable to open the file.<br>&nbsp;<br>Please ensure that the file has the necessary read permissions.';
$slogic_language['SLOGIC_CONFIG_FILE_WRITE_FAIL']	= 'Unable to write data to file.<br>&nbsp;<br>Please ensure that the file has the necessary write permissions.';
$slogic_language['SLOGIC_CONFIG_FILE_WRITE']		= 'Changes saved in config file.';
// end of slogic_config.php

// start of slogic_maintenance.php
$slogic_language['SLOGIC_MAINTENANCE_DUMP_CHMOD']   = '<font color="red"><b><i>(Note: dump file needs to be chmod 666!)</i></b></font>';
$slogic_language['SLOGIC_MAINTENANCE_DUMP_INVALID']	= 'The backup dump request couldn\'t be performed.<br>&nbsp;<br>Please try again and ensure necessary write permission on the dump file.';
$slogic_language['SLOGIC_MAINTENANCE_DUMP_DONE']   	= 'Backup written to slogic_dump.sql file.';
// end of slogic_maintenance.php

// start of slogic_show_user_profile.php
$slogic_language['SLOGIC_SHOW_USER_PROFILE_NONE']   = 'Username Unknown.';
$slogic_language['SLOGIC_SHOW_USER_PROFILE']		= 'View User Profile';
$slogic_language['SLOGIC_SHOW_USER_PROFILE_OF']		= 'Profile of User:';
$slogic_language['SLOGIC_EMAIL'] 					= 'Email:';
$slogic_language['SLOGIC_DOMAIN']					= 'Domain:';
$slogic_language['SLOGIC_ACT_SERVER']				= 'Server:';
$slogic_language['SLOGIC_ACT_USERNAME']				= 'Server Username:';
$slogic_language['SLOGIC_GET_EMAIL']				= 'Receives Emails:';
$slogic_language['SLOGIC_LANGUAGE']					= 'Language:';
// end of slogic_show_user_profile.php

// start of slogic_list_announcements.php
$slogic_language['SLOGIC_ANNOUNCEMENTS']	= 'Announcements';
$slogic_language['SLOGIC_ANNOUNCEMENT']		= 'Announcement';
$slogic_language['SLOGIC_NO_ANNOUNCEMENTS'] = '<i>No announcements available.</i>';
// end of slogic_list_announcements.php

// start of slogic_delete_announcement.php
$slogic_language['SLOGIC_ANNOUNCEMENTS_DELETED'] = 'Announcement(s) deleted!';
// end of slogic_delete_announcement.php

// start of slogic_delete_user.php
$slogic_language['SLOGIC_LIST_USERS_DELETED'] = 'User(s) deleted!';
// end of slogic_delete_user.php

// start of slogic_delete_staff.php
$slogic_language['SLOGIC_LIST_STAFF_DELETED'] = 'Staff(s) deleted!';
// end of slogic_delete_staff.php

// start of slogic_edit_user.php
$slogic_language['SLOGIC_USER_EDITED'] 			= 'Changes saved.';
$slogic_language['SLOGIC_USER_EDITED_INVALID'] 	= 'Your changes couldn\'t be saved.<br>&nbsp;<br>Please ensure the validity of the submitted data.';
// end of slogic_edit_user.php

// start of slogic_show_announcement.php
$slogic_language['SLOGIC_WRONG_ANNOUNCEMENT'] 	= 'You are not allowed to view this announcement!';
$slogic_language['SLOGIC_INVALID_ANNOUNCEMENT'] = 'You selected an invalid announcement.';
// end of slogic_show_announcement.php

// start of slogic_email_content.php
$slogic_language['SLOGIC_STAFF_ADD_NOTE_CLOSE_VERIFIED'] = 'Email sent to user when staff member closes a ticket:';
$slogic_language['SLOGIC_STAFF_ADD_NOTE_USER'] = 'Email sent to user:';
$slogic_language['SLOGIC_STAFF_ADD_NOTE_STAFF'] = 'Staff-2-Staff email:';
$slogic_language['SLOGIC_STAFF_GRAB_TICKET'] = 'Grab Ticket - Email (to staff):';
$slogic_language['SLOGIC_STAFF_CLAIM_TICKET'] = 'Claim Ticket - Email (to user):';
$slogic_language['SLOGIC_STAFF_MOVE_TICKET'] = 'Move Ticket - Email (to staff):';
$slogic_language['SLOGIC_USER_ADD_NOTE_CLOSE_VERIFIED'] = 'Email sent to staff when user closes a ticket:';
$slogic_language['SLOGIC_USER_ADD_NOTE_STAFF'] = 'Email sent to staff (from user):';
$slogic_language['SLOGIC_USER_REOPEN_TICKET'] = 'Reopen Ticket - Email sent to staff (from user):';
$slogic_language['SLOGIC_USER_NEW_TICKET_ALERT'] = 'New Ticket (send alert) - email to all staff members:';
$slogic_language['SLOGIC_USER_NEW_TICKET'] = 'New Ticket - email to all category subscribers:';
$slogic_language['SLOGIC_USER_REGISTER'] = 'Registration email (to user):';
$slogic_language['SLOGIC_USER_LOST_PASSWORD'] = 'Lost password email (to user):';
$slogic_language['SLOGIC_EMAIL_UPDATED'] = 'Changes saved.';
$slogic_language['SLOGIC_SAVE'] = 'Save Changes';
// end of slogic_email_content.php

// start of slogic_pipe_content.php
$slogic_language['SLOGIC_TOGGLE_EMAIL'] = 'Send out email:';
$slogic_language['SLOGIC_EMAIL_FLOOD_RESET'] = 'Email flood alerts reset to 0';
$slogic_language['SLOGIC_RESET_FLOOD_ALERTS'] = 'Reset email flood alerts';
$slogic_language['SLOGIC_PIPE_NEW_USER'] = 'New user account created (to user):';
$slogic_language['SLOGIC_PIPE_TICKET_ERROR'] = 'Email couldn\'t be converted into ticket (to user):';
$slogic_language['SLOGIC_PIPE_NEW_TICKET_USER'] = 'Email converted into ticket (to user):';
$slogic_language['SLOGIC_PIPE_NEW_TICKET_STAFF'] = 'Email converted into ticket (to staff):';
$slogic_language['SLOGIC_PIPE_ADD_NOTE_ERROR'] = 'Email couldn\'t be converted into note (to user):';
$slogic_language['SLOGIC_PIPE_ADD_NOTE_CLOSED'] = 'Email uses [#ID] of already "closed" ticket (to user):';
$slogic_language['SLOGIC_PIPE_ADD_NOTE_USER'] = 'Email converted into note (to user):';
$slogic_language['SLOGIC_PIPE_ADD_NOTE_STAFF'] = 'Email converted into note (to staff):';
$slogic_language['SLOGIC_PIPE_FLOOD_REPORT'] = 'Email sender exceeded the daily limit (to admin!):';
$slogic_language['SLOGIC_PIPE_UPDATED'] = 'Changes saved.';
// end of slogic_pipe_content.php

// start of slogic_delete_quick_replies.php
$slogic_language['SLOGIC_LIST_QUICK_REPLIES_DELETED'] = 'Quick reply/replies deleted.';
// end of slogic_delete_quick_replies.php

// start of slogic_edit_quick_reply.php
$slogic_language['SLOGIC_EDIT_QUICK_REPLY'] = 'Edit Quick Reply';
$slogic_language['SLOGIC_QUICK_REPLY_EDITED_INVALID'] = 'Invalid function.';
$slogic_language['SLOGIC_QUICK_REPLY_EDITED'] = 'Quick reply edited.';
// end of slogic_edit_quick_reply.php

// end of functions

// *************************************************************** \\

// start of templates

// start of templates - pages
// start of slogic_login.tpl
$slogic_language['SLOGIC_LOGIN_TITLE'] = 'Support Logic - Login Page';
// end of slogic_login.tpl

// start of slogic_logout.tpl
$slogic_language['SLOGIC_LOGOUT_TITLE'] = 'Support Logic - Logout Page';
// end of slogic_logout.tpl

// start of slogic_main.tpl
$slogic_language['SLOGIC_MAIN_TITLE'] = 'Support Logic - Main Page';
// end of slogic_main.tpl

// start of slogic_profile.tpl
$slogic_language['SLOGIC_PROFILE_TITLE'] = 'Support Logic - Your Profile';
// end of slogic_profile.tpl

// start of slogic_config.tpl
$slogic_language['SLOGIC_CONFIG_TITLE'] = 'Support Logic - Configuration &amp; Settings Page';
// end of slogic_config.tpl

// start of slogic_maintenance.tpl
$slogic_language['SLOGIC_MAINTENANCE_TITLE'] = 'Support Logic - Maintenance';
// end of slogic_maintenance.tpl

// start of slogic_list_announcements.tpl
$slogic_language['SLOGIC_LIST_ANNOUNCEMENTS_TITLE'] = 'Support Logic - Announcements Administration';
// end of slogic_list_announcements.tpl

// start of slogic_add_announcement.tpl
$slogic_language['SLOGIC_ADD_ANNOUNCEMENT_TITLE'] = 'Support Logic - Add Announcement';
// end of slogic_add_announcement.tpl

// start of slogic_edit_announcement.tpl
$slogic_language['SLOGIC_EDIT_ANNOUNCEMENT_TITLE'] = 'Support Logic - Edit Announcement';
// end of slogic_edit_announcement.tpl

// start of slogic_list_users.tpl
$slogic_language['SLOGIC_LIST_USERS_TITLE'] = 'Support Logic - User Administration';
// end of slogic_list_users.tpl

// start of slogic_list_staff.tpl
$slogic_language['SLOGIC_LIST_STAFF_TITLE'] = 'Support Logic - Staff Administration';
// end of slogic_list_staff.tpl

// start of slogic_add_user.tpl
$slogic_language['SLOGIC_ADD_USER_TITLE'] = 'Support Logic - Add User';
// end of slogic_add_user.tpl

// start of slogic_add_staff.tpl
$slogic_language['SLOGIC_ADD_STAFF_TITLE'] = 'Support Logic - Add Staff Member';
// end of slogic_add_staff.tpl

// start of slogic_edit_user.tpl
$slogic_language['SLOGIC_EDIT_USER_TITLE'] = 'Support Logic - Edit User';
// end of slogic_edit_user.tpl

// start of slogic_edit_staff.tpl
$slogic_language['SLOGIC_EDIT_STAFF_TITLE'] = 'Support Logic - Edit Staff';
// end of slogic_edit_staff.tpl

// start of slogic_show_user_profile.tpl
$slogic_language['SLOGIC_SHOW_USER_PROFILE_TITLE'] = 'Support Logic - View User Profile';
// end of slogic_show_user_profile.tpl

// start of slogic_redirect.tpl
$slogic_language['SLOGIC_REDIRECT_TITLE'] 	= 'Support Logic - Redirect Page';
$slogic_language['SLOGIC_REDIRECT_TOPIC'] 	= 'Please wait...';
$slogic_language['SLOGIC_REDIRECT_URL'] 	= 'Please click here if your browser doesn\'t support automatic redirection.';
// end of slogic_redirect.tpl

// start of slogic_show_announcement.tpl
$slogic_language['SLOGIC_ANNOUNCEMENT_TITLE'] = 'Support Logic - Announcement';
// end of slogic_show_announcement.tpl

// start of slogic_email_content.tpl
$slogic_language['SLOGIC_EMAIL_CONTENT_TITLE'] = 'Support Logic - Configure Email Messages';
// end of slogic_email_content.tpl

// start of slogic_pipe_content.tpl
$slogic_language['SLOGIC_PIPE_CONTENT_TITLE'] = 'Support Logic - Configure Pipe Messages';
// end of slogic_pipe_content.tpl

// start of slogic_list_quick_replies.tpl
$slogic_language['SLOGIC_LIST_QUICK_REPLIES_TITLE'] = 'Support Logic - Quick Replies';
// end of slogic_list_quick_replies.tpl

// start of slogic_edit_quick_reply.tpl
$slogic_language['SLOGIC_EDIT_QUICK_REPLY_TITLE'] = 'Support Logic - Edit Quick Reply';
// end of slogic_edit_quick_reply.tpl

// start of slogic_reset_flood.tpl
$slogic_language['SLOGIC_RESET_FLOOD_TITLE'] = 'Support Logic - Reset Email flood alerts';
// end of slogic_reset_flood.tpl
// end of templates - pages

// start of templates - functions
// start of slogic_profile.tpl
$slogic_language['SLOGIC_PROFILE_PASSWORD_INFO'] 	= 'Password changes will work next time you try to login.';
$slogic_language['SLOGIC_PROFILE_PASSWORD'] 	 	= 'Password';
$slogic_language['SLOGIC_PROFILE_PASSWORD_2'] 		= 'Re-enter Password';
$slogic_language['SLOGIC_PROFILE_EMAIL'] 			= 'Email';
$slogic_language['SLOGIC_PROFILE_DOMAIN'] 			= 'Domain';
$slogic_language['SLOGIC_PROFILE_SERVER'] 			= 'Server';
$slogic_language['SLOGIC_PROFILE_ACT_USERNAME'] 	= 'Account username';
$slogic_language['SLOGIC_PROFILE_LANGUAGE']			= 'Preset Language';
$slogic_language['SLOGIC_PROFILE_NOTIFICATION'] 	= 'Notify me by email';
$slogic_language['SLOGIC_PROFILE_SUBSCRIBE'] 		= 'Select categories to subscribe to';
// end of slogic_profile.tpl

// start of slogic_config.tpl
$slogic_language['SLOGIC_CONFIG_SUBMIT'] = 'Save config!';
// end of slogic_config.tpl

// start of slogic_maintenance.tpl
$slogic_language['SLOGIC_MAINTENANCE_DUMP'] 		= 'Database Maintenance';
$slogic_language['SLOGIC_MAINTENANCE_DUMP_FORM'] 	= 'Select method of database backup:';
$slogic_language['SLOGIC_MAINTENANCE_DUMP_SUBMIT'] 	= 'Dump now!';
// end of slogic_maintenance.tpl

// start of slogic_list_announcements.tpl
$slogic_language['SLOGIC_ANNOUNCEMENTS_DELETE_ALL']	= 'Select or deselect all announcements';
$slogic_language['SLOGIC_ANNOUNCEMENTS_DELETE']		= 'Select or deselect announcement for deletion';
$slogic_language['SLOGIC_ANNOUNCEMENTS_ALL']		= 'All';
// end of slogic_list_announcements.tpl

// start of slogic_add_announcement.tpl
$slogic_language['SLOGIC_ADD_ANNOUNCEMENT']				= 'Add announcement';
$slogic_language['SLOGIC_ANNOUNCEMENT_NOW']				= 'Always';
$slogic_language['SLOGIC_ANNOUNCEMENT_EQUAL']			= 'Date = sent date';
$slogic_language['SLOGIC_ANNOUNCEMENT_EQUAL_UP']		= 'Date >= sent date';
$slogic_language['SLOGIC_ANNOUNCEMENT_NEVER']			= 'Never';
$slogic_language['SLOGIC_ANNOUNCEMENT_BOTH']			= 'Both';
$slogic_language['SLOGIC_ANNOUNCEMENT_USERS']			= 'Users';
$slogic_language['SLOGIC_ANNOUNCEMENT_STAFF']			= 'Staff';
$slogic_language['SLOGIC_ANNOUNCEMENT_YYYY']			= 'DD - MM - YYYY';
$slogic_language['SLOGIC_ANNOUNCEMENT_SUBMIT']			= 'Add!';
$slogic_language['SLOGIC_ANNOUNCEMENT_ADDED']			= 'Announcement added!';
$slogic_language['SLOGIC_ANNOUNCEMENT_ADDED_INVALID'] 	= 'The announcement couldn\'t be added. Please try again, making sure you enter valid data!';
// end of slogic_add_announcement.tpl

// start of slogic_list_users.tpl
$slogic_language['SLOGIC_LIST_USERS_NO_USERS'] 	= '<i>No users in database.</i>';
$slogic_language['SLOGIC_USERS_DELETE_ALL'] 	= 'Select or deselect all users';
$slogic_language['SLOGIC_USERS_DELETE'] 		= 'Select or deselect user';
// end of slogic_list_users.tpl

// start of slogic_list_staff.tpl
$slogic_language['SLOGIC_LIST_STAFF_NO_STAFF'] 	= '<i>No staff members in database.</i>';
$slogic_language['SLOGIC_STAFF_DELETE_ALL'] 	= 'Select or deselect all staff members';
$slogic_language['SLOGIC_STAFF_DELETE'] 		= 'Select or deselect staff members';
// end of slogic_list_staff.tpl

// start of slogic_add_user.tpl
$slogic_language['SLOGIC_ADD_USER'] 			= 'Add User';
$slogic_language['SLOGIC_USER_ADDED_INVALID'] 	= 'The user couldn\'t be saved.<br>Please ensure that the data is valid.';
$slogic_language['SLOGIC_USER_ADDED'] 			= 'User added to database.';
// end of slogic_add_user.tpl

// start of slogic_edit_user.tpl
$slogic_language['SLOGIC_EDIT_USER'] 			= 'Edit User';
$slogic_language['SLOGIC_USER_EDITED_INVALID'] 	= 'The user changes couldn\'t be saved.<br>Please ensure that the data is valid.';
$slogic_language['SLOGIC_USER_EDITED'] 			= 'User changes saved.';
// end of slogic_edit_user.tpl

// start of slogic_edit_staff.tpl
$slogic_language['SLOGIC_SIGNATURE'] 				= 'Signature';
$slogic_language['SLOGIC_EDIT_STAFF'] 				= 'Edit Staff';
$slogic_language['SLOGIC_STAFF_EDITED_INVALID'] 	= 'The staff changes couldn\'t be saved.<br>Please ensure that the data is valid.';
$slogic_language['SLOGIC_STAFF_EDITED'] 			= 'Staff changes saved.';
// end of slogic_edit_staff.tpl

// start of slogic_add_staff.tpl
$slogic_language['SLOGIC_ADD_STAFF'] 			= 'Add Staff Member';
$slogic_language['SLOGIC_STAFF_ADDED_INVALID'] 	= 'The staff member couldn\'t be saved.<br>Please ensure that the data is valid.';
$slogic_language['SLOGIC_STAFF_ADDED'] 			= 'Staff member added to database.';
// end of slogic_add_staff.tpl

// start of slogic_edit_announcement.tpl
$slogic_language['SLOGIC_EDIT_ANNOUNCEMENT'] 			= 'Edit announcement';
$slogic_language['SLOGIC_ANNOUNCEMENT_EDITED']			= 'Announcement edited!';
$slogic_language['SLOGIC_ANNOUNCEMENT_EDITED_INVALID'] 	= 'The announcement couldn\'t be edited. Please try again, making sure you enter valid data!';
// end of slogic_edit_announcement.tpl

// start of slogic_list_quick_replies.tpl
$slogic_language['SLOGIC_LIST_QUICK_REPLIES_DELETE_ALL'] = 'Delete All';
$slogic_language['SLOGIC_LIST_QUICK_REPLIES_NO_REPLIES'] = '<i>No replies in database.</i>';
// end of slogic_list_quick_replies.tpl

// end of templates - functions

// end of templates
?>