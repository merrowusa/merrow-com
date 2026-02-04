<?php
/***************************************************************************
								parse_language.inc
							--------------------------
			created				: 04.01.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// replaces the "{LANG_...}" placeholders in $input with the right entry from the $language_array array
// and returns the modified $input
function parse_language($input, $language_array)
{
	$get_placeholders = explode('{LANG_',$input);
	for ($i = 1; $i != sizeof($get_placeholders); $i++)
	{
		$placeholder = explode('}',$get_placeholders[$i]);
		$placeholder = $placeholder[0];
		if (isset($language_array[$placeholder]))
		{
			$input = str_replace('{LANG_'.$placeholder.'}',$language_array[$placeholder],$input);
		}
		else if (DEBUG_MODE == 'on')
		{
			echo show_debug_message($placeholder,' - is undefined in the modules ..._language.inc file!');
		}
	}
	return $input;
}
?>