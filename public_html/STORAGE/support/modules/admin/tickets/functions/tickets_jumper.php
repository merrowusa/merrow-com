<?php
/***************************************************************************
								tickets_jumper.php
							--------------------------
			created				: 13.02.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// jump to ticket
function tickets_jumper()
{
	$output = join ('', file (SCRIPT_PATH.'modules/staff/tickets/templates/functions/tickets_jumper.tpl'));
	
	// make sure that all variables passed by URL get passed as well!
	$hidden = array();
	if (isset($_GET))
	{
		$i = 0;
		$hidden[$i] = '<input type="hidden" name="tpl" value="tickets_show_ticket">';
		$i++;
		foreach ($_GET as $key => $value)
		{
			if (($key != 'SLOGIC') && ($key != 'tpl') && ($key != 'Submit'))
			{
				$hidden[$i] = '<input type="hidden" name="'.$key.'" value="'.$value.'">';
				$i++;
			}
		}
	}
	$output = str_replace('{HIDDEN}',implode('',$hidden),$output);
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'],$output);
	
	return $output;
}
?>