<?php
/***************************************************************************
                            config.php
                        ------------------
            created             : 09.03.2003
            edited              : 11.07.2003
            copyright           : (C) 2002 Support-Logic
            email               : hendrik@support-logic.com

            based on coding standards: codingstandards.htm, v1.0 27.12.2002

***************************************************************************/

// <-- <START> - GENERAL CONFIG OPTIONS - <START> -->
define('SESSION_MANAGEMENT','database');
define('SESSION_TIMEOUT','600');
define('COOKIE_TIMEOUT','360000');
define('SQL_MODULE','mysql');
define('DEBUG_MODE','off');
define('SCRIPT_PATH','/home/merrowco/public_html/support/');
define('SCRIPT_URL','http://merrow.com/support/');
define('DB_HOST','localhost');
define('DB_USER','merrowco_slhd1');
define('DB_PASS','m3nUnZk3PD5F');
define('DB_DATABASE','merrowco_slhd1');
define('DEFAULT_LANGUAGE','en');
define('ALLOWED_TAGS','<a><b><img>');
// <-- <START> - EMAIL DEFINITIONS - <START> -->
$slogic_send_alert = TRUE; // TRUE if all staff members should receive an email regardless their get_email status - FALSE if deactivated
$slogic_send_email = "smtp"; // "smtp" if it shall be sent through smtp - "mail" if it shall be sent via php mail() function
$slogic_email_from = "From: merrowco@merrow.com\r\nReply-To: merrowco@merrow.com\r\n";
$email_flood_limit = 50; // daily email limit for each email-sender for emails being sent to the helpdesk (only needed, if you are using the pipe.php script)
$default_pipe_priority = 'email_pipe';  // priority used for tickets created by the pipe.php script
$slogic_pipe_auto_user = 'yes';  // user accounts can be created by the pipe.php script => yes, no
// <-- <END> - EMAIL DEFINITIONS - <END> -->
// <-- <START> - TEMPLATE DEFINITIONS - <START> -->
$template_system = 'header_footer'; // can be 'header_footer' or 'pages'
// <-- <END> - TEMPLATE DEFINITIONS - <END> -->
// <-- <END> - GENERAL CONFIG OPTIONS - <END> -->

?>