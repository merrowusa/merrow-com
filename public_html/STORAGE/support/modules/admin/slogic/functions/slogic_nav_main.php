<?php
/***************************************************************************
								slogic_nav_main.php
							---------------------------
			created				: 04.01.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// generates the main navigation of all modules based on their _main_navigation() function in their functions.php file
function slogic_nav_main()
{
	// we need the navigation from the admin.php file, so make it global
	GLOBAL $main_navigation;
	
	// filter the module names and sort them from the main_navigation array
	$j = 0;
	for ($i=0; $i != sizeof($main_navigation); $i++)
	{
		$get_module[$i] = explode('_',$main_navigation[$i]);
		if ($i > 0)
		{
			if (!ereg($get_module[$i][0],$get_module[$i-1][0]))
			{
				$module[$j] = $get_module[$i][0];
				$j++;
			}
		}
		else 
		{
			$module[$j] = $get_module[$i][0];
			$j++;
		}
	}
	
	// get the no. of the module with the most menu links
	$highest = 0;
	$j = 1;
	for ($i=0; $i != sizeof($module); $i++)
	{
		// make sure the slogic module is always the first menu
		if ($module[$i] != 'slogic')
		{
			$tmp_module[$j] = $module[$i];
			$j++;
		}

		$get_navigation2 = $module[$i].'_main_navigation';
		$get_navigation2 = $get_navigation2();
		if (sizeof($get_navigation2) > $highest)
		{
			$highest = sizeof($get_navigation2);
		}
	}
	$module = array();
	$module[0] = 'slogic';
	$module = array_merge($module, $tmp_module);
	
	// show a navigation menu for each module and insert its links
	for ($i=0; $i != sizeof($module); $i++)
	{
		$get_navigation = $module[$i].'_main_navigation';
		$get_navigation = $get_navigation();

		// template needed for the links
		$navigation_template = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/functions/slogic_nav_main.tpl'));
		
		// make sure to reset the array!
		$parsed_navigation = array();
		for ($j=0; $j != sizeof($get_navigation); $j++)
		{
			$tmp_count = '';
			$parsed_navigation[$j] = $navigation_template;
			$parsed_navigation[$j] = str_replace('{TEMPLATE}',$get_navigation[$j].'&lang='.LANGUAGE,$parsed_navigation[$j]);
			$parsed_navigation[$j] = str_replace('{LANG_TEMPLATE}','{LANG_'.strtoupper($get_navigation[$j]).'}'.$tmp_count,$parsed_navigation[$j]);
		}
		
		// template needed for the navigation menu, where the links get included in
		$make_navigation[$i] = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/functions/slogic_nav_module.tpl'));
		$make_navigation[$i] = str_replace('{MODULE_MENU}','{LANG_'.strtoupper($module[$i]).'_MENU}',$make_navigation[$i]);
		$make_navigation[$i] = str_replace('{MODULE_NAV}',implode('',$parsed_navigation),$make_navigation[$i]);
	}

	return '<table><tr><td valign="top">'.implode('</td></tr><tr><td valign="top">',$make_navigation).'</td></tr></table>';
	
}
?>