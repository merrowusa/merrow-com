<?php
/***************************************************************************
								slogic_delete_quick_reply.php
							-------------------------------------
			created				: 22.06.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// delete quick reply(s) as provided by $_POST['del'] array
function slogic_delete_quick_replies()
{
	GLOBAL $user_screen;
	
	$make_query = implode('" or id="',$_POST['del']);
	
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		// delete quick reply(s)
		$this->query_result = $db->db_query('DELETE FROM quick_replies WHERE id="'.$make_query.'"');
	}
	$db->db_close();
	
	$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
	$user_screen = str_replace('{SECONDS}','3',$user_screen);
	$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_list_quick_replies&lang='.LANGUAGE,$user_screen);
	$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_LIST_QUICK_REPLIES_DELETED}',$user_screen);
	
	return;
}
?>