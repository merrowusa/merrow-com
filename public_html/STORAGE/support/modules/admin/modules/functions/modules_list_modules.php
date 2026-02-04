<?php
/***************************************************************************
								modules_list_modules.php
							--------------------------------
			created				: 11.04.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display installed modules
function modules_list_modules()
{
	GLOBAL $user_screen, $get_modules;
	
	$output = join ('', file (SCRIPT_PATH.'modules/admin/modules/templates/functions/modules_list_modules.tpl'));
	
	$list_modules = '';
	$tmp_functions = '';
	for ($i = 0; $i != sizeof($get_modules); $i++)
	{
		$tmp_functions = $get_modules[$i].'_functions';
		$tmp_functions = $tmp_functions();
		$list_modules .= '<tr><td>'.$get_modules[$i].'</td><td>'.sizeof($tmp_functions).'</td></tr>';
	}
	$output = str_replace('{ADMIN_MODULES}',$list_modules,$output);
	
	$staff_modules = array();
	$z=0;
	if ($handle = @opendir(SCRIPT_PATH.'modules/staff/'))
	{
		while (false !== ($file = @readdir($handle)))
		{
			if (($file != '.') && ($file != '..') && (!is_file(SCRIPT_PATH.'modules/staff/'.$file))) 
			{
				if (file_exists(SCRIPT_PATH.'modules/staff/'.$file.'/functions.php'))
				{
					$tmp_function = implode('',file(SCRIPT_PATH.'modules/staff/'.$file.'/functions.php'));
					$tmp_function = explode($file.'_functions()',$tmp_function);
					$tmp_function = explode('}',$tmp_function[1]);
					$tmp_function = explode(',',$tmp_function[0]);
					$tmp_function = sizeof($tmp_function);
				}
				$staff_modules[$z] = '<tr><td>'.$file.'</td><td>'.$tmp_function.'</td></tr>';
				$z++;
			} 
		}
		closedir($handle); 
	}
	$output = str_replace('{STAFF_MODULES}',implode('',$staff_modules),$output);
	
	$user_modules = array();
	$z=0;
	if ($handle = @opendir(SCRIPT_PATH.'modules/users/'))
	{
		while (false !== ($file = @readdir($handle)))
		{
			if (($file != '.') && ($file != '..') && (!is_file(SCRIPT_PATH.'modules/users/'.$file))) 
			{
				if (file_exists(SCRIPT_PATH.'modules/users/'.$file.'/functions.php'))
				{
					$tmp_function = implode('',file(SCRIPT_PATH.'modules/users/'.$file.'/functions.php'));
					$tmp_function = explode($file.'_functions()',$tmp_function);
					$tmp_function = explode('}',$tmp_function[1]);
					$tmp_function = explode(',',$tmp_function[0]);
					$tmp_function = sizeof($tmp_function);
				}
				$user_modules[$z] = '<tr><td>'.$file.'</td><td>'.$tmp_function.'</td></tr>';
				$z++;
			} 
		}
		closedir($handle); 
	}
	$output = str_replace('{USER_MODULES}',implode('',$user_modules),$output);
	
	return $output;
}
?>