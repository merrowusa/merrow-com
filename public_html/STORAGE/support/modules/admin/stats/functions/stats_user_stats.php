<?php
/***************************************************************************
								stats_user_stats.php
							----------------------------
			created				: 11.04.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display stats for the selected user
function stats_user_stats()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/admin/stats/templates/functions/stats_user_stats.tpl'));
	
	$output = str_replace('{USER}',$_GET['user'],$output);
	
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$make_row = '';
		$this->query_result = $db->db_query('SELECT COUNT(*) AS no FROM tickets WHERE user="'.$_GET['user'].'"');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">{LANG_STATS_TOTAL_TICKETS}</td><td>'.$row['no'].'</td></tr>';
			}
		}
		
		$this->query_result = $db->db_query('SELECT COUNT(*) AS no FROM notes WHERE sender="'.$_GET['user'].'" AND who_is="user"');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">{LANG_STATS_TOTAL_NOTES}</td><td>'.$row['no'].'</td></tr>';
			}
		}
		
		$this->query_result = $db->db_query('SELECT COUNT(*) AS no FROM attachments WHERE user="'.$_GET['user'].'"');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">{LANG_STATS_TOTAL_ATTACHMENTS}</td><td>'.$row['no'].'</td></tr>';
			}
		}
		
		$make_row .= '<tr><td colspan="2">&nbsp;</td></tr>';
		
		$make_row .= '<tr><td colspan="2" align="center"><b>No. of Tickets per category</b></td></tr>';
		$this->query_result = $db->db_query('SELECT category,COUNT(*) AS no FROM tickets WHERE user="'.$_GET['user'].'" GROUP BY category ORDER BY no DESC');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">'.$row['category'].'</td><td>'.$row['no'].'</td></tr>';
			}
		}
		
		$make_row .= '<tr><td colspan="2">&nbsp;</td></tr>';

		$make_row .= '<tr><td colspan="2" align="center"><b>No. of Tickets per priority</b></td></tr>';
		$this->query_result = $db->db_query('SELECT priority,COUNT(*) AS no FROM tickets WHERE user="'.$_GET['user'].'" GROUP BY priority ORDER BY no DESC');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_row .= '<tr><td align="center">'.$row['priority'].'</td><td>'.$row['no'].'</td></tr>';
			}
		}
		
		$make_row .= '<tr><td colspan="2">&nbsp;</td></tr>';

		$this->query_result = $db->db_query('SELECT date_format(sentdate, "%H") as hour, count(*) AS no FROM tickets  WHERE user="'.$_GET['user'].'" GROUP BY date_format(sentdate, "%H") ORDER BY no DESC');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$row = $db->db_fetch_array($this->query_result);
			$make_row .= '<tr><td align="center">{LANG_STATS_TOP_HOUR}</td><td>'.$row['hour'].'</td></tr>';
		}
		
		$this->query_result = $db->db_query('SELECT date_format(sentdate, "%m") as month, count(*) AS no FROM tickets  WHERE user="'.$_GET['user'].'" GROUP BY date_format(sentdate, "%m") ORDER BY no DESC');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$row = $db->db_fetch_array($this->query_result);
			$make_row .= '<tr><td align="center">{LANG_STATS_TOP_MONTH}</td><td>'.$row['month'].'</td></tr>';
		}
		
		$this->query_result = $db->db_query('SELECT date_format(sentdate, "%Y") as year, count(*) AS no FROM tickets  WHERE user="'.$_GET['user'].'" GROUP BY date_format(sentdate, "%Y") ORDER BY no DESC');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$row = $db->db_fetch_array($this->query_result);
			$make_row .= '<tr><td align="center">{LANG_STATS_TOP_YEAR}</td><td>'.$row['year'].'</td></tr>';
		}
		
		$output = str_replace('{STATS}',$make_row,$output);	
	}
	$db->db_close();
	
	return $output;
}
?>