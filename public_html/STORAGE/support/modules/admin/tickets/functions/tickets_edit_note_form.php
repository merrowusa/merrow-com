<?php
/***************************************************************************
								tickets_edit_note_form.php
							----------------------------------
			created				: 19.01.2003
			edited				: 24.01.2003
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// add the edit note form
function tickets_edit_note_form()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/staff/tickets/templates/functions/tickets_edit_note_form.tpl'));
	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl=tickets_edit_note&lang='.LANGUAGE.'&id='.$_GET['id'].'&note_id='.$_GET['note_id'],$output);
	$output = str_replace('{BACK_TO_ADD_NOTE}','<a href="'.$_SERVER['PHP_SELF'].'?tpl=tickets_show_ticket&lang='.LANGUAGE.'&id='.$_GET['id'].'">{LANG_TICKETS_BACK_TO_ADD}</a>',$output);

	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$this->query_result = $db->db_query('SELECT * FROM notes WHERE id=\''.$_GET['note_id'].'\'');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$row = $db->db_fetch_array($this->query_result);
			if (($row['sender'] != $_SESSION['login_user']) && ($row['who_is'] != 'staff'))
			{
				$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
				$user_screen = str_replace('{SECONDS}','3',$user_screen);
				$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_main&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
				$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_EDIT_NOTE_PERMISSION}',$user_screen);
			}
			else 
			{
				foreach ($row as $key => $value) 
				{
					$output = str_replace('{'.strtoupper($key).'}',$value,$output);
				}
			}
		}
		else 
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_main&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_EDIT_NOTE_FORM_INVALID}',$user_screen);
		}
	}
	$db->db_close();
	
	
	return $output;
}
?>