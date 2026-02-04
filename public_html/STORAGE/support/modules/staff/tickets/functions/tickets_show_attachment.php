<?php
/***************************************************************************
								tickets_show_attachment.php
							----------------------------------
			created				: 28.01.2003
			edited				: 01.02.2003
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// show the attachment from the database
//		-> make sure the sender didn't forge the 'id'
//		-> display output
function tickets_show_attachment()
{
	GLOBAL $user_screen;
	
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$this->query_result = $db->db_query('SELECT * FROM attachments WHERE id=\''.$_GET['id'].'\'');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$row = $db->db_fetch_array($this->query_result);
   			header('Content-disposition: filename='.$row['filename']);
           	header('Content-type: '.$row['filetype']);
           	echo $row['bin_data'];
           	$db->db_close();
           	exit();
		}
		else 
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_main&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_SHOW_ATTACHMENT_INVALID}',$user_screen);
		}
	}
	$db->db_close();
	
	return;
}
?>