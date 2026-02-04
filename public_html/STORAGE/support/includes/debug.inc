<?php
/***************************************************************************
								debug.inc
							-----------------
			created				: 31.12.2002
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// displays a debug message
// 		$debug_variable = unknown variable
//		$debug_message  = optional message
function show_debug_message($debug_variable, $debug_message)
{
	if ($debug_message == '')
	{
		$debug_message = '<b class="debug">DEBUG MESSAGE: '.$debug_variable.' is an unknown placeholder!</b>';
	}
	else 
	{
		$debug_message = '<b class="debug">DEBUG MESSAGE: '.$debug_variable.' '.$debug_message.'</b>';
	}
	return $debug_message;
}
?>