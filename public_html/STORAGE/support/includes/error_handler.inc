<?php
/***************************************************************************
								error_handler.inc
							-------------------------
			created				: 29.12.2002
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// self defined error handling function
// usage: 	trigger_error("<message>", ERROR_TYPE);
//			message		= any kind of self defined error message
//			ERROR_TYPE 	= E_USER_ERROR, E_USER_WARNING, E_USER_NOTICE (will contain variable info)
//						= E_ERROR, E_WARNING, E_PARSE, E_NOTICE, E_CORE_ERROR, E_CORE_WARNING,
//						  E_COMPILE_ERROR, E_COMPILE_WARNING [, E_ALL] (without variable info)

function slogic_error_handler($error_no, $error_message, $filename, $line_no, $vars)
{
	// timestamp for the error entry
	$error_timestamp = date('Y-m-d H:i:s (T)');

    // define an assoc array of error string
	$error_type = array (
		1   =>  'Error',
		2   =>  'Warning',
		4   =>  'Parsing Error',
		8   =>  'Notice',
		16  =>  'Core Error',
		32  =>  'Core Warning',
		64  =>  'Compile Error',
		128 =>  'Compile Warning',
		256 =>  'User Error',
		512 =>  'User Warning',
		1024=>  'User Notice'
	);
    
	// set of errors for which a var trace will be saved
	$user_errors = array(E_USER_ERROR, E_USER_WARNING, E_USER_NOTICE);
	
	$error = '<b>time:</b> '.$error_timestamp.'<br>';
	$error .= '<b>error no.:</b> '.$error_no.'<br>';
	$error .= '<b>error type:</b> '.$error_type[$error_no].'<br>';
	$error .= '<b>error message:</b> '.$error_message.'<br>';
	$error .= '<b>filename:</b> '.$filename.'<br>';
	$error .= '<b>line no.:</b> '.$line_no.'<br>';

	if (in_array($error_no, $user_errors))
	{
		while (list ($key, $val) = each ($vars)) 
		{
			if (is_array($val))
				$error .= '<b>Array <i>'.$key.'</i> has the following values:</b> [ '.implode(' , ', $val).' ]<br>';
			else 
				$error .= '<b>Variable <i>'.$key.'</i> has the following value:</b> '.$val.'<br>';
		}
	}
	$error .= '<br><br>';

	echo $error;
}
?>