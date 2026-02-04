<?php
/***************************************************************************
								slogic_reset_flood.php
							---------------------------
			created				: 10.08.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// reset all email flood alerts to 0
function slogic_reset_flood()
{
	GLOBAL $user_screen;
	GLOBAL $email_flood_limit;
	
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		// reset flood alerts to 0
		$this->query_result = $db->db_query('UPDATE email_flood SET counter=0 WHERE counter >= '.$email_flood_limit);
	}
	$db->db_close();
		
	$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
	$user_screen = str_replace('{SECONDS}','3',$user_screen);
	$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_pipe_content&lang='.LANGUAGE,$user_screen);
	$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_EMAIL_FLOOD_RESET}',$user_screen);

	return;
}
?>