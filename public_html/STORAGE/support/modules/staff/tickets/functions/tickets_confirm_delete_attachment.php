<?php
/***************************************************************************
								tickets_confirm_delete_attachment.php
							---------------------------------------------
			created				: 09.02.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// ask for confirmation before deleting the attachment
function tickets_confirm_delete_attachment()
{
	$output = join ('', file (SCRIPT_PATH.'modules/staff/tickets/templates/functions/tickets_confirm_delete_attachment.tpl'));
	$output = str_replace('{YES}','<a href="'.$_SERVER['PHP_SELF'].'?tpl=tickets_delete_attachment&lang='.LANGUAGE.'&id='.$_GET['id'].'&attachment_id='.$_GET['attachment_id'].'">{LANG_TICKETS_CONFIRM_OK}</a>',$output);
	$output = str_replace('{NO}','<a href="'.$_SERVER['PHP_SELF'].'?tpl=tickets_show_ticket&lang='.LANGUAGE.'&id='.$_GET['id'].'">{LANG_TICKETS_CONFIRM_NO}</a>',$output);
	
	return $output;
}
?>