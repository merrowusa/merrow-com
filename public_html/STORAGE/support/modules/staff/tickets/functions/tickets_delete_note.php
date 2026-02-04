<?php
/***************************************************************************
								tickets_delete_note.php
							-------------------------------
			created				: 19.01.2003
			edited				: 24.01.2003
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// delete existing note in the database
//		-> make sure the sender didn't forge the 'id'
//		-> delete note in database &/ redirect user to ticket content
function tickets_delete_note()
{
	GLOBAL $user_screen;
	
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$this->query_result = $db->db_query('SELECT sender,who_is FROM notes WHERE id=\''.$_GET['note_id'].'\'');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$row = $db->db_fetch_array($this->query_result);
			if (($row['sender'] != $_SESSION['login_user']) || ($row['who_is'] == 'user'))
			{
				$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
				$user_screen = str_replace('{SECONDS}','3',$user_screen);
				$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_main&lang='.LANGUAGE,$user_screen);
				$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_DELETE_NOTE_PERMISSION}',$user_screen);
			}
			else 
			{
				$this->query_result = $db->db_query('DELETE FROM notes WHERE id=\''.$_GET['note_id'].'\'');
				
				$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
				$user_screen = str_replace('{SECONDS}','3',$user_screen);
				$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_show_ticket&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
				$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_DELETE_NOTE_DELETED}',$user_screen);
			}
		}
		else 
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_main&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_DELETE_NOTE_INVALID}',$user_screen);
		}
	}
	$db->db_close();
	
	return;
}
?>