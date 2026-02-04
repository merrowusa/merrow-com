<?php
/***************************************************************************
								tickets_edit_plcaeholder.php
							-----------------------------------
			created				: 26.06.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display edit placeholder form & add placeholder to database
function tickets_edit_placeholder()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/admin/tickets/templates/functions/tickets_edit_placeholder.tpl'));
	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl=tickets_edit_placeholder&lang='.LANGUAGE.'&id='.$_GET['id'],$output);
	
	if (isset($_POST['find_match']))
	{
		// check if all data was submitted
		if (!isset($_POST['replace_with']))
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_list_placeholders&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_PLACEHOLDER_EDITED_INVALID}',$user_screen);
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
				// update placeholder
				$this->query_result = $db->db_query('UPDATE placeholders SET '.implode(',',$make_query).' WHERE id="'.$_GET['id'].'"');
			}
			$db->db_close();
		
			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_list_placeholders&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_PLACEHOLDER_EDITED}',$user_screen);
		}
	}
	else 
	{
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{
			// get placeholder info
			$this->query_result = $db->db_query('SELECT * FROM placeholders WHERE id="'.$_GET['id'].'"');
			$row = $db->db_fetch_array($this->query_result);
		}
		$db->db_close();

		// make it a little upward compatible right away
		foreach ($row as $key => $value)
		{
			if (ereg('{'.strtoupper($key).'}',$output))
			{
				if ($key == 'replace_with')
				{
					$value = htmlspecialchars($value);
				}

				$output = str_replace('{'.strtoupper($key).'}',$value,$output);
			}
		}
			
		return $output;
	}
	return;
}
?>