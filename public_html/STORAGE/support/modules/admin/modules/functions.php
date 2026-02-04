<?php

function modules_functions()
{
	return array('modules_list_modules'
	             );
}

function modules_main_navigation()
{
	return array('modules_list_modules'
				);
}

function modules_language($selected_language)
{
	if (file_exists(SCRIPT_PATH.'modules/admin/modules/languages/'.$selected_language.'/modules_language.inc'))
	{
		include SCRIPT_PATH.'modules/admin/modules/languages/'.$selected_language.'/modules_language.inc';
	}
	else 
	{
		include SCRIPT_PATH.'modules/admin/modules/languages/'.DEFAULT_LANGUAGE.'/modules_language.inc';
	}
	
	return $modules_language;
}
?>