<?php
/***************************************************************************
								slogic_select_language.php
							----------------------------------
			created				: 09.01.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// select language function: returns the "select language" form
function slogic_select_language()
{
	$output = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/functions/slogic_select_language.tpl'));
	
	$language_part = explode('<LANGUAGE>',$output);
	$language_part = explode('</LANGUAGE>',$language_part[1]);
	$language_part = $language_part[0];
	
	if ($handle = @opendir(SCRIPT_PATH.'modules/users/slogic/languages/'))
	{
		$i=0;
		$get_languages = array();
		while (false !== ($file = @readdir($handle)))
		{
			if (($file != '.') && ($file != '..') && (!is_file(SCRIPT_PATH.'modules/users/slogic/languages/'.$file))) 
			{
				$get_languages[$i] = $language_part;
				$get_languages[$i] = str_replace('{LANGUAGE}',$file,$get_languages[$i]);
				$i++;
			} 
		}
		closedir($handle); 
	}

	$output = str_replace('<LANGUAGE>'.$language_part.'</LANGUAGE>',@implode('',$get_languages),$output);
	
	// make sure that all variables passed by URL get passed as well!
	if (isset($_GET))
	{
		$get_vars = '';
		foreach ($_GET as $key => $value)
		{
			if (($key != 'SLOGIC') && ($key != 'lang') && ($key != 'tpl'))
			{
				$get_vars .= "&$key=$value";
			}
		}
	}
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl='.TEMPLATE.$get_vars,$output);
	
	return $output;
}
?>