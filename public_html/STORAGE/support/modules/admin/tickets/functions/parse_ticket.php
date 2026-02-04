<?php
/***************************************************************************
								parse_ticket.php
							------------------------
			created				: 09.01.2003
			edited				: 19.01.2003
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// parses the ticket
// 	where $input is the file to parse
//		  $query is the MySQL query
//		  $order is the result order
//		  $order_table is the MySQL table, which should be "ordered", else all tables would become sorted by that order rule
function parse_ticket($input, $query, $order_table)
{
    $get_ticket_part = explode('<TICKETS>',$input);
    $get_ticket_part = explode('</TICKETS>',$get_ticket_part[1]);
	$get_ticket_part = $get_ticket_part[0];
	
    $get_notickets_part = explode('<NO_TICKETS>',$input);
    $get_notickets_part = explode('</NO_TICKETS>',$get_notickets_part[1]);
	$get_notickets_part = $get_notickets_part[0];
	
	$get_placeholders = explode('{',$get_ticket_part);
	for ($i = 0; $i != sizeof($get_placeholders); $i++)
	{
		$list_placeholders[$i] = explode('}',$get_placeholders[$i]);
		$list_placeholders[$i] = strtolower($list_placeholders[$i][0]);
	}

	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$this->query_result = $db->db_query($query);
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$i = 0;
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_list[$i] = $get_ticket_part;
				foreach ($row as $key => $value) 
				{
					if (in_array($key,$list_placeholders))
					{
						if ($key == 'subject')
						{
							$make_list[$i] = str_replace('{'.strtoupper($key).'}','<a href="'.$_SERVER['PHP_SELF'].'?tpl=tickets_show_ticket&lang='.LANGUAGE.'&id='.$row['id'].'">'.strip_tags($value).'</a>',$make_list[$i]);
						}
						else 
						{
							$make_list[$i] = str_replace('{'.strtoupper($key).'}',$value,$make_list[$i]);
						}
					}
				}
				if (($row['who_updated'] == 'user') && ($row['status'] != 'closed'))
				{
					$make_list[$i] = str_replace('{BG_COLOR}','#f5f5f5',$make_list[$i]);
				}
				else 
				{
					$make_list[$i] = str_replace('{BG_COLOR}','#F5F5F5',$make_list[$i]);
				}
				$i++;
			}
			$input = str_replace('<TICKETS>'.$get_ticket_part.'</TICKETS>',implode('',$make_list),$input);
			$input = str_replace('<NO_TICKETS>'.$get_notickets_part.'</NO_TICKETS>','',$input);
		}
		else 
		{
			$input = str_replace('<TICKETS>'.$get_ticket_part.'</TICKETS>','',$input);
		}
	}
	$db->db_close();

	
	$get_orders = explode('{ORDER_',$input);
	for ($i = 0; $i != sizeof($get_orders); $i++)
	{
		$get_order = explode('}',$get_orders[$i]);
		$input = str_replace('{ORDER_'.$get_order[0].'}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.TEMPLATE.'&lang='.LANGUAGE.'&order='.strtolower($get_order[0]).'&order_table='.$order_table.'">',$input);
		$input = str_replace('{ORDER_'.$get_order[0].'_DESC}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.TEMPLATE.'&lang='.LANGUAGE.'&order='.strtolower($get_order[0]).'%20DESC&order_table='.$order_table.'">',$input);
	}
	
	
	return $input;
}
?>