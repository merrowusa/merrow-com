<?php
/***************************************************************************
								tickets_edit_category.php
							-----------------------------
			created				: 04.04.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display edit category form & add category to database
function tickets_edit_category()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/admin/tickets/templates/functions/tickets_edit_category.tpl'));
	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl=tickets_edit_category&lang='.LANGUAGE.'&id='.$_GET['id'],$output);
	
	if (isset($_POST['name']))
	{
		// check if all data was submitted
		if ((!isset($_POST['info'])) || (!isset($_POST['subscribers']))
		   )
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_list_categories&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_CATEGORY_EDITED_INVALID}',$user_screen);
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
				// update categories
				$this->query_result = $db->db_query('UPDATE categories SET '.implode(',',$make_query).' WHERE id="'.$_GET['id'].'"');
			}
			$db->db_close();
		
			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_list_categories&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_CATEGORY_EDITED}',$user_screen);
		}
	}
	else 
	{
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{
			// get category info
			$this->query_result = $db->db_query('SELECT * FROM categories WHERE id="'.$_GET['id'].'"');
			$row = $db->db_fetch_array($this->query_result);
		}
		$db->db_close();

		// make it a little upward compatible right away
		foreach ($row as $key => $value)
		{
			if (ereg('{'.strtoupper($key).'}',$output))
			{
				$output = str_replace('{'.strtoupper($key).'}',$value,$output);
			}
		}
			
		return $output;
	}
	return;
}
?>