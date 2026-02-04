<?php
/***************************************************************************
								tickets_add_note_form.php
							---------------------------------
			created				: 19.01.2003
			edited				: 01.02.2003
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// add the notes form
function tickets_add_note_form()
{
	GLOBAL $status;
	GLOBAL $close_verify;
	
	if ($status != 'closed')
	{
		$output = join ('', file (SCRIPT_PATH.'modules/users/tickets/templates/functions/tickets_add_note_form.tpl'));
		
		$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl=tickets_add_note&lang='.LANGUAGE.'&id='.$_GET['id'],$output);
		
		if ($close_verify == 'yes')
		{
			$output = str_replace('{CLOSE_CHECK}','checked',$output);
		}
		else
		{
			$output = str_replace('{CLOSE_CHECK}','',$output);
		}
		
		return $output;
	}
	else 
	{
		return '<div align=center><a href="'.$_SERVER['PHP_SELF'].'?tpl=tickets_reopen_ticket&lang='.LANGUAGE.'&id='.$_GET['id'].'">{LANG_TICKETS_REOPEN_TICKET}</a></div>';
	}
	return;
}
?>