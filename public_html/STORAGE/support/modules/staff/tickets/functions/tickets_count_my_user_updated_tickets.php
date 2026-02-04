<?php
/***************************************************************************
								tickets_count_my_user_updated_tickets.php
							------------------------------------------------
			created				: 15.06.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display current number of my user updated tickets
function tickets_count_my_user_updated_tickets()
{
	$row = 0;
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		// get no. of logged in staff's user updated tickets
		$this->query_result = $db->db_query('SELECT COUNT(*) FROM tickets WHERE staff=\''.$_SESSION['login_user'].'\' AND status=\'assigned\' AND who_updated=\'user\'');
		$row = implode('',$db->db_fetch_array($this->query_result));
	}
	$db->db_close();
	return $row;
}
?>