<?php
/***************************************************************************
								slogic_count_quick_replies.php
							--------------------------------------
			created				: 22.06.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display current number of quick replies
function slogic_count_quick_replies()
{
	$row = 0;
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		// get no. of quick replies
		$this->query_result = $db->db_query('SELECT COUNT(*) FROM quick_replies');
		$row = implode('',$db->db_fetch_array($this->query_result));
	}
	$db->db_close();
	return $row;
}
?>