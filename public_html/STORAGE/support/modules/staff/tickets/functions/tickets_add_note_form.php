<?php
/***************************************************************************
								tickets_add_note_form.php
							---------------------------------
			created				: 19.01.2003
			edited				: 24.01.2003
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// add the notes form
function tickets_add_note_form()
{
	GLOBAL $status;
	GLOBAL $close_verify;
	
	if ($status == 'assigned')
	{
		$output = join ('', file (SCRIPT_PATH.'modules/staff/tickets/templates/functions/tickets_add_note_form.tpl'));
		
		$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl=tickets_add_note&lang='.LANGUAGE.'&id='.$_GET['id'],$output);
		
		$quick_replies = '';
		
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{
			// get staff members quick replies
			$this->query_result = $db->db_query('SELECT id,info FROM quick_replies WHERE username="'.$_SESSION['login_user'].'" ORDER BY info');
			$numrows = $db->db_num_rows($this->query_result);
			if ($numrows != 0)
			{
				while($row = $db->db_fetch_array($this->query_result))
				{
					$quick_replies .= '<option value="'.$row['id'].'">'.$row['info'].'</option>';
				}
				$quick_replies = '<select name="quick_reply"><option value="none">{LANG_SLOGIC_ADD_QUICK_REPLY}</option>'.$quick_replies.'</select>';
			}
			else 
			{
				$quick_replies = '<input type="hidden" name="quick_reply" value="none">';
			}
		}
		$db->db_close();
		
		$output = str_replace('{SHOW_QUICK_REPLIES}',$quick_replies,$output);
		
		if ($close_verify == 'yes')
		{
			$output = str_replace('{CLOSE_CHECK}','checked',$output);
		}
		else
		{
			$output = str_replace('{CLOSE_CHECK}','',$output);
		}
		
		return $output;
	}
	return;
}
?>