<?php
/***************************************************************************
								stats_top10.php
							-----------------------
			created				: 11.04.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display TOP10 stats
function stats_top10()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/admin/stats/templates/functions/stats_top10.tpl'));
	
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$this->query_result = $db->db_query('select user,count(*) as no from tickets group by user order by no desc limit 0,10');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$make_row = '';
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">'.$row['no'].'</td><td>'.$row['user'].'</td></tr>';
			}
			$output = str_replace('{TOP10_USERS}',$make_row,$output);
		}
		else 
		{
			$output = str_replace('{TOP10_USERS}','<b><i>No data in database!</i></b>',$output);
		}
		
		$this->query_result = $db->db_query('select staff,count(*) as no from tickets WHERE staff!="none" group by staff order by no desc limit 0,10');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$make_row = '';
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">'.$row['no'].'</td><td>'.$row['staff'].'</td></tr>';
			}
			$output = str_replace('{TOP10_STAFF}',$make_row,$output);
		}
		else 
		{
			$output = str_replace('{TOP10_STAFF}','<b><i>No data in database!</i></b>',$output);
		}

		$this->query_result = $db->db_query('select sender,count(*) as no from notes WHERE who_is="user" group by sender order by no desc limit 0,10');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$make_row = '';
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">'.$row['no'].'</td><td>'.$row['sender'].'</td></tr>';
			}
			$output = str_replace('{TOP10_USER_NOTES}',$make_row,$output);
		}
		else 
		{
			$output = str_replace('{TOP10_USER_NOTES}','<b><i>No data in database!</i></b>',$output);
		}
		
		$this->query_result = $db->db_query('select sender,count(*) as no from notes WHERE who_is="staff" group by sender order by no desc limit 0,10');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$make_row = '';
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">'.$row['no'].'</td><td>'.$row['sender'].'</td></tr>';
			}
			$output = str_replace('{TOP10_STAFF_NOTES}',$make_row,$output);
		}
		else 
		{
			$output = str_replace('{TOP10_STAFF_NOTES}','<b><i>No data in database!</i></b>',$output);
		}

		$this->query_result = $db->db_query('select priority,count(*) as no from tickets group by priority order by no desc limit 0,10');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$make_row = '';
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">'.$row['no'].'</td><td>'.$row['priority'].'</td></tr>';
			}
			$output = str_replace('{TOP10_PRIORITY}',$make_row,$output);
		}
		else 
		{
			$output = str_replace('{TOP10_PRIORITY}','<b><i>No data in database!</i></b>',$output);
		}
		
		$this->query_result = $db->db_query('select category,count(*) as no from tickets group by category order by no desc limit 0,10');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$make_row = '';
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">'.$row['no'].'</td><td>'.$row['category'].'</td></tr>';
			}
			$output = str_replace('{TOP10_CATEGORY}',$make_row,$output);
		}
		else 
		{
			$output = str_replace('{TOP10_CATEGORY}','<b><i>No data in database!</i></b>',$output);
		}
		
	}
	$db->db_close();
	
	
	return $output;
}
?>