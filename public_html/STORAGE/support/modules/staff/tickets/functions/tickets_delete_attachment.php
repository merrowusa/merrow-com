<?php
/***************************************************************************
								tickets_delete_attachment.php
							-------------------------------------
			created				: 09.02.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// delete existing attachment in the database
//		-> make sure the sender didn't forge the 'id'
//		-> delete note in database &/ redirect user to ticket content
function tickets_delete_attachment()
{
	GLOBAL $user_screen;
	
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$this->query_result = $db->db_query('SELECT username FROM staff WHERE username=\''.$_SESSION['login_user'].'\'');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$row = $db->db_fetch_array($this->query_result);
			$this->query_result = $db->db_query('DELETE FROM attachments WHERE id=\''.$_GET['attachment_id'].'\'');
				
			$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_show_ticket&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_DELETE_ATTACHMENT_DELETED}',$user_screen);
		}
		else 
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_main&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_DELETE_ATTACHMENT_INVALID}',$user_screen);
		}
	}
	$db->db_close();
	
	return;
}
?>