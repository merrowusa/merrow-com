<?php
/***************************************************************************
								tickets_add_category.php
							-------------------------------
			created				: 04.04.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display add category form & add category to database
function tickets_add_category()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/admin/tickets/templates/functions/tickets_add_category.tpl'));
	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl=tickets_add_category&lang='.LANGUAGE,$output);
	
	if (isset($_POST['name']))
	{
		// check if all data was submitted
		if ((!isset($_POST['info'])) || (!isset($_POST['subscribers']))
		   )
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_list_categories&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_CATEGORY_ADDED_INVALID}',$user_screen);
		}
		else 
		{	
			$query_fields = array();
			$query_values = array();
			$i = 0;
			foreach ($_POST as $key => $value) 
			{
				if (($key != 'submit') && ($key != 'SLOGIC'))
				{
					$query_fields[$i] = $key;
					$query_values[$i] = strip_tags($value);
					$i++;
				}
			}
			
			$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
			if ($db->db_connected)
			{
				// add category
				$this->query_result = $db->db_query('INSERT INTO categories ('.implode(',',$query_fields).') VALUES ("'.implode('","',$query_values).'")');
			}
			$db->db_close();

			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_list_categories&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_CATEGORY_ADDED}',$user_screen);
		}
	}
	else 
	{
		return $output;
	}
	return;
}
?>