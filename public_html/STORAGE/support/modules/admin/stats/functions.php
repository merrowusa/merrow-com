<?php

function stats_functions()
{
	return array('stats_top10','stats_raw','stats_user_stats','stats_staff_stats'
	             );
}

function stats_main_navigation()
{
	return array('stats_top10','stats_raw'
				);
}

function stats_language($selected_language)
{
	if (file_exists(SCRIPT_PATH.'modules/admin/stats/languages/'.$selected_language.'/stats_language.inc'))
	{
		include SCRIPT_PATH.'modules/admin/stats/languages/'.$selected_language.'/stats_language.inc';
	}
	else 
	{
		include SCRIPT_PATH.'modules/admin/stats/languages/'.DEFAULT_LANGUAGE.'/stats_language.inc';
	}
	
	return $stats_language;
}
?>