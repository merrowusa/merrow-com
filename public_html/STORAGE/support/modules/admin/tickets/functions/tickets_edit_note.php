<?php
/***************************************************************************
								tickets_edit_note.php
							-----------------------------
			created				: 04.04.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display edit note form & add note to database
function tickets_edit_note()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/admin/tickets/templates/functions/tickets_edit_note.tpl'));
	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl=tickets_edit_note&lang='.LANGUAGE.'&id='.$_GET['id'],$output);

	if (isset($_POST['ticket_id']))
	{
		// check if all data was submitted
		if ((!isset($_POST['sender'])) || (!isset($_POST['content'])) || (!isset($_POST['sent_date'])) || (!isset($_POST['show_to'])) 
			|| (!isset($_POST['who_is']))
		   )
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_list_notes&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_NOTE_EDITED_INVALID}',$user_screen);
		}
		else 
		{	
			$make_query = array();
			$i = 0;
			foreach ($_POST as $key => $value) 
			{
				if (($key != 'submit') && ($key != 'SLOGIC'))
				{
					if ($value != '')
					{
						$make_query[$i] = $key.'="'.$value.'"';
						$i++;
					}
				}
			}
			
			$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
			if ($db->db_connected)
			{
				// update notes
				$this->query_result = $db->db_query('UPDATE notes SET '.implode(',',$make_query).' WHERE id="'.$_GET['id'].'"');
			}
			$db->db_close();

			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_list_notes&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_NOTE_EDITED}',$user_screen);
		}
	}
	else 
	{
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{
			// get note info
			$this->query_result = $db->db_query('SELECT * FROM notes WHERE id="'.$_GET['id'].'"');
			$row = $db->db_fetch_array($this->query_result);

		}
		$db->db_close();

		// make it a little upward compatible right away
		foreach ($row as $key => $value)
		{
			if ($key == 'show_to')
			{
				if ($value == 'staff')
				{
					$output = str_replace('{SELECT_SHOW_TO}','<select name="show_to"><option value="'.$row['show_to'].'">{LANG_SLOGIC_STAFF}</option><option value="both">{LANG_SLOGIC_BOTH}</option></select>',$output);
				}
				else
				{
					$output = str_replace('{SELECT_SHOW_TO}','<select name="show_to"><option value="'.$row['show_to'].'">{LANG_SLOGIC_BOTH}</option><option value="staff">{LANG_SLOGIC_STAFF}</option></select>',$output);
				}
			}
			else if ($key == 'who_is')
			{
				if ($value == 'staff')
				{
					$output = str_replace('{SELECT_WHO_IS}','<select name="who_is"><option value="'.$row['show_to'].'">{LANG_SLOGIC_STAFF}</option><option value="user">{LANG_SLOGIC_USER}</option></select>',$output);
				}
				else
				{
					$output = str_replace('{SELECT_WHO_IS}','<select name="who_is"><option value="'.$row['show_to'].'">{LANG_SLOGIC_USER}</option><option value="staff">{LANG_SLOGIC_STAFF}</option></select>',$output);
				}
			}
			else if (ereg('{'.strtoupper($key).'}',$output))
			{
				$output = str_replace('{'.strtoupper($key).'}',$value,$output);
			}
		}
			
		return $output;
	}
	return;
}
?>