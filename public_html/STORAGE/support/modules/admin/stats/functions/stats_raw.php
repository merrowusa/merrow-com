<?php
/***************************************************************************
								stats_raw.php
							---------------------
			created				: 11.04.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display raw stats
function stats_raw()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/admin/stats/templates/functions/stats_raw.tpl'));
	
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$make_row = '';
		$this->query_result = $db->db_query('select count(*) as no from tickets');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$num_tickets = $row['no'];
				$make_row .= '<tr><td align="center">{LANG_STATS_TOTAL_TICKETS}</td><td>'.$row['no'].'</td></tr>';
			}
		}
		
		$this->query_result = $db->db_query('select count(*) as no from notes');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">{LANG_STATS_TOTAL_NOTES}</td><td>'.$row['no'].'</td></tr>';
			}
		}
		
		$this->query_result = $db->db_query('select count(*) as no from announcements');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">{LANG_STATS_TOTAL_ANNOUNCEMENTS}</td><td>'.$row['no'].'</td></tr>';
			}
		}
		
		$this->query_result = $db->db_query('select count(*) as no from attachments');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">{LANG_STATS_TOTAL_ATTACHMENTS}</td><td>'.$row['no'].'</td></tr>';
			}
		}
		
		$this->query_result = $db->db_query('select count(*) as no from categories');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">{LANG_STATS_TOTAL_CATEGORIES}</td><td>'.$row['no'].'</td></tr>';
			}
		}
		
		$this->query_result = $db->db_query('select count(*) as no from priorities');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">{LANG_STATS_TOTAL_PRIORITIES}</td><td>'.$row['no'].'</td></tr>';
			}
		}
		
		$this->query_result = $db->db_query('select count(*) as no from users');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">{LANG_STATS_TOTAL_USERS}</td><td>'.$row['no'].'</td></tr>';
			}
		}
		
		$this->query_result = $db->db_query('select count(*) as no from staff');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">{LANG_STATS_TOTAL_STAFF}</td><td>'.$row['no'].'</td></tr>';
			}
		}
		
		$make_row .= '<tr><td colspan="2">&nbsp;</td></tr>';
		
		$this->query_result = $db->db_query('SELECT date_format(sentdate, "%H") as hour, count(*) AS no FROM tickets GROUP BY date_format(sentdate, "%H") ORDER BY no DESC');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$row = $db->db_fetch_array($this->query_result);
			$make_row .= '<tr><td align="center">{LANG_STATS_TOP_HOUR}</td><td>'.$row['hour'].'</td></tr>';
		}
		
		$this->query_result = $db->db_query('SELECT date_format(sentdate, "%m") as month, count(*) AS no FROM tickets GROUP BY date_format(sentdate, "%m") ORDER BY no DESC');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$row = $db->db_fetch_array($this->query_result);
			$make_row .= '<tr><td align="center">{LANG_STATS_TOP_MONTH}</td><td>'.$row['month'].'</td></tr>';
		}
		
		$this->query_result = $db->db_query('SELECT date_format(sentdate, "%Y") as year, count(*) AS no FROM tickets GROUP BY date_format(sentdate, "%Y") ORDER BY no DESC');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$row = $db->db_fetch_array($this->query_result);
			$make_row .= '<tr><td align="center">{LANG_STATS_TOP_YEAR}</td><td>'.$row['year'].'</td></tr>';
		}
		$output = str_replace('{STATS}',$make_row,$output);	
		
		$make_row = '';
		$this->query_result = $db->db_query('SELECT date_format(sentdate, "%H") AS hour, count(*) AS no FROM tickets GROUP BY date_format(sentdate, "%H")');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">'.$row['hour'].'</td><td>'.$row['no'].'</td><td>'.round((100 / $num_tickets) * $row['no'], 2).' %</td></tr>';
			}
		}
		$output = str_replace('{HOURS_STATS}',$make_row,$output);
		
		$make_row = '';
		$this->query_result = $db->db_query('SELECT date_format(sentdate, "%m.%Y") AS date, COUNT(*) AS no FROM tickets GROUP BY date_format(sentdate, "%m.%Y") ORDER BY date');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">'.$row['date'].'</td><td>'.$row['no'].'</td><td>'.round((100 / $num_tickets) * $row['no'], 2).' %</td></tr>';
			}
		}
		$output = str_replace('{DATE_STATS}',$make_row,$output);
		
		$make_row = '';
		$this->query_result = $db->db_query('SELECT staff, COUNT(*) AS no FROM tickets GROUP BY staff ORDER BY no');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">'.$row['staff'].'</td><td>'.$row['no'].'</td><td>'.round((100 / $num_tickets) * $row['no'], 2).' %</td></tr>';
			}
		}
		$output = str_replace('{STAFF_STATS}',$make_row,$output);
		
	}
	$db->db_close();
	
	return $output;
}
?>