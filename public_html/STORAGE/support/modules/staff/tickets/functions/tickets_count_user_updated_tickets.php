<?php
/***************************************************************************
								tickets_count_user_updated_tickets.php
							----------------------------------------------
			created				: 23.01.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display current number of user updated tickets
function tickets_count_user_updated_tickets()
{
	$row = 0;
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		// get no. of user updated tickets
		$this->query_result = $db->db_query('SELECT COUNT(*) FROM tickets WHERE status=\'assigned\' AND who_updated=\'user\'');
		$row = implode('',$db->db_fetch_array($this->query_result));
	}
	$db->db_close();
	return $row;
}
?>