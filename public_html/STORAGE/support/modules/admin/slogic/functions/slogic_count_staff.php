<?php
/***************************************************************************
								slogic_count_staff.php
							-----------------------------
			created				: 19.03.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display current number of staff members
function slogic_count_staff()
{
	$row = 0;
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		// get no. of staff members
		$this->query_result = $db->db_query('SELECT COUNT(*) FROM staff');
		$row = implode('',$db->db_fetch_array($this->query_result));
	}
	$db->db_close();
	return $row;
}
?>