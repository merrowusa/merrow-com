<?php

function search_functions()
{
	return array('search_tickets','search_users'
				 );
}

function search_main_navigation()
{
	return array('search_tickets','search_users');
}

function search_language($selected_language)
{
	if (file_exists(SCRIPT_PATH.'modules/admin/search/languages/'.$selected_language.'/search_language.inc'))
	{
		include SCRIPT_PATH.'modules/admin/search/languages/'.$selected_language.'/search_language.inc';
	}
	else 
	{
		include SCRIPT_PATH.'modules/admin/search/languages/'.DEFAULT_LANGUAGE.'/search_language.inc';
	}
	
	return $search_language;
}
?>