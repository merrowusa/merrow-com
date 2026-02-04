<?php
/***************************************************************************
								slogic_edit_staff.php
							-----------------------------
			created				: 19.03.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display edit staff form & add staff to database
function slogic_edit_staff()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/functions/slogic_edit_staff.tpl'));
	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl=slogic_edit_staff&lang='.LANGUAGE.'&id='.$_GET['id'],$output);
	
	if (isset($_POST['username']))
	{
		// check if all data was submitted
		if ((!isset($_POST['email'])) || (!isset($_POST['get_email'])) || (!isset($_POST['language']))
		   )
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_list_staff&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_STAFF_EDITED_INVALID}',$user_screen);
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
						if ($key == 'password')
						{
							$make_query[$i] = $key.'="'.md5($value).'"';
						}
						else 
						{
							$make_query[$i] = $key.'="'.$value.'"';
						}
						$i++;
					}
				}
			}
			
			$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
			if ($db->db_connected)
			{
				// update staff
				$this->query_result = $db->db_query('UPDATE staff SET '.implode(',',$make_query).' WHERE id="'.$_GET['id'].'"');
			}
			$db->db_close();
		
			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_list_staff&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_STAFF_EDITED}',$user_screen);
		}
	}
	else 
	{
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{
			// get user info
			$this->query_result = $db->db_query('SELECT * FROM staff WHERE id="'.$_GET['id'].'"');
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
			
		if ($row['get_email'] == 'yes')
		{
			$make_get_email = '<select name="get_email"><option value="yes">{LANG_SLOGIC_YES}</option><option value="no">{LANG_SLOGIC_NO}</option></select>';
		}
		else 
		{
			$make_get_email = '<select name="get_email"><option value="no">{LANG_SLOGIC_NO}</option><option value="yes">{LANG_SLOGIC_YES}</option></select>';
		}
		$output = str_replace('{SELECT_GET_EMAIL}',$make_get_email,$output);
		
		if ($handle = @opendir(SCRIPT_PATH.'modules/admin/slogic/languages/'))
		{
			$get_languages = '';
			while (false !== ($file = @readdir($handle)))
			{
				if (($file != '.') && ($file != '..') && (!is_file(SCRIPT_PATH.'modules/admin/slogic/languages/'.$file)) && ($file != $row['language'])) 
				{
					$get_languages .= '<option value="'.$file.'">'.$file.'</option>';
				} 
			}
			closedir($handle); 
		}
		$output = str_replace('{SELECT_LANGUAGE}','<select name="language"><option value="'.$row['language'].'">'.$row['language'].'</option>'.$get_languages.'</select>',$output);
		
		return $output;
	}
	return;
}
?>