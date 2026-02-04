<?php
/***************************************************************************
								tickets_edit_note.php
							-----------------------------
			created				: 19.01.2003
			edited				: 24.01.2003
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// edit existing note in the database
//		-> make sure the sender didn't forge the 'id'
//		-> edit note in database &/ redirect user to ticket content
//		<- the note form can add anything to the database, as long as it is setup properly in the form & exists in the "notes" table
function tickets_edit_note()
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
				$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_main&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
				$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_EDIT_NOTE_PERMISSION}',$user_screen);
			}
			else if ($_POST['content'] == '')
			{
				$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
				$user_screen = str_replace('{SECONDS}','3',$user_screen);
				$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_show_ticket_edit&lang='.LANGUAGE.'&id='.$_GET['id'].'&note_id='.$_GET['note_id'],$user_screen);
				$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_EDIT_NOTE_CONTENT}',$user_screen);
			}
			else 
			{
				// get all form posted vars & values for the MySQL query
				$i = 0;
				foreach ($_POST as $key => $value) 
				{
					if (($key != 'SLOGIC') && ($key != 'Submit'))
					{
						$make_query[$i] = $key.'=\''.$value.'\'';
						$i++;
					}
				}
				
				$this->query_result = $db->db_query('UPDATE notes SET '.implode(',',$make_query).' WHERE id=\''.$_GET['note_id'].'\'');
				
				$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
				$user_screen = str_replace('{SECONDS}','3',$user_screen);
				$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_show_ticket&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
				$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_EDIT_NOTE_EDITED}',$user_screen);
			}
		}
		else 
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_main&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_EDIT_NOTE_INVALID}',$user_screen);
		}
	}
	$db->db_close();
	
	return;
}
?>