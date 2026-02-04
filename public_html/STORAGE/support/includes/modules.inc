<?php
/***************************************************************************
								modules.inc
							-------------------
			created				: 31.12.2002
			edited				: 02.01.2003
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// returns an array with all subdirectories of the (users, staff or admin) modules directory
function get_modules()
{
	$existing_modules = array();
	$z=0;
	if ($handle = @opendir(SCRIPT_PATH.'modules/'.SCRIPT_CATEGORY.'/'))
	{
		while (false !== ($file = @readdir($handle)))
		{
			if (($file != '.') && ($file != '..') && (!is_file(SCRIPT_PATH.'modules/'.SCRIPT_CATEGORY.'/'.$file))) 
			{
				$existing_modules[$z] = $file;
				$z++;
			} 
		}
		closedir($handle); 
	}
	return $existing_modules;
}
?>