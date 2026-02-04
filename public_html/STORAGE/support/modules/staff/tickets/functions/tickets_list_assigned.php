<?php
/***************************************************************************
								tickets_list_assigned.php
							---------------------------------
			created				: 24.01.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// list all assigned tickets
function tickets_list_assigned()
{
	$order_this = 'no';
	if (isset($_GET['order_table']))
	{
		if ($_GET['order_table'] == 'assigned')
		{
			$order_this = 'yes';
		}
	}
	$order_table = 'assigned';

	if (!function_exists('tickets_count_assigned_tickets'))
	{
		include SCRIPT_PATH.'modules/staff/tickets/functions/tickets_count_assigned_tickets.php';
	}
	$limit_max = tickets_count_assigned_tickets();
	$get_max_limit = $limit_max;
	$limit_max = ceil($limit_max / 20);
	
	if (!function_exists('parse_ticket'))
	{
		include SCRIPT_PATH.'modules/staff/tickets/functions/parse_ticket.php';
	}
	$output = join ('', file (SCRIPT_PATH.'modules/staff/tickets/templates/functions/tickets_list_assigned.tpl'));
	
	if ((isset($_GET['order'])) && ($order_this == 'yes'))
	{
		$order = $_GET['order'];
	}
	else 
	{
		$order = 'sentdate';
	}

	if (!isset($_GET['limit']))
	{
		$_GET['limit'] = 0;
	}
	
	$limit = $_GET['limit'];
	if (($limit < 0) || ($limit > ($get_max_limit-1)))
	{
		$limit = 0;
	}
	
	if (($limit > 0) && ($limit < $get_max_limit) && ($get_max_limit >= 20))
	{
		if (($limit-20) <= 0)
		{
			
			$output = str_replace('{PREVIOUS}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.$_GET['tpl'].'&lang='.LANGUAGE.'&order='.$order.'&order_table=assigned">{LANG_TICKETS_PREVIOUS} [0-19]</a>',$output);
		}
		else 
		{
			$output = str_replace('{PREVIOUS}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.$_GET['tpl'].'&lang='.LANGUAGE.'&order='.$order.'&order_table=assigned&limit='.($limit-20).'">{LANG_TICKETS_PREVIOUS} ['.($limit-20).'-'.($limit-1).']</a>',$output);
		}
	}
	else 
	{
		$output = str_replace('{PREVIOUS}','',$output);
	}
	
	if ((($limit+20) < $get_max_limit)  && ($get_max_limit >= 20))
	{
		if (($limit+40) >= ($get_max_limit-1))
		{
			$output = str_replace('{NEXT}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.$_GET['tpl'].'&lang='.LANGUAGE.'&order='.$order.'&order_table=assigned&limit='.($limit+20).'">{LANG_TICKETS_NEXT} ['.($limit+20).'-'.($get_max_limit-1).']</a>',$output);
		}
		else
		{
			$output = str_replace('{NEXT}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.$_GET['tpl'].'&lang='.LANGUAGE.'&order='.$order.'&order_table=assigned&limit='.($limit+20).'">{LANG_TICKETS_NEXT} ['.($limit+20).'-'.($limit+39).']</a>',$output);
		}
	}
	else 
	{
		$output = str_replace('{NEXT}','',$output);
	}
	
	if ($get_max_limit > 20)
	{
		$output = str_replace('{FIRST}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.$_GET['tpl'].'&lang='.LANGUAGE.'&order='.$order.'&order_table=assigned">[0-19]</a>',$output);
		$output = str_replace('{LAST}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.$_GET['tpl'].'&lang='.LANGUAGE.'&order='.$order.'&order_table=assigned&limit='.($get_max_limit-20).'">['.($get_max_limit-20).'-'.($get_max_limit-1).']</a>',$output);
	}
	else 
	{
		$output = str_replace('{FIRST}','',$output);
		$output = str_replace('{LAST}','',$output);
	}

	$output = str_replace('{LANG}',LANGUAGE,$output);	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'],$output);	

	$query = 'SELECT * FROM tickets WHERE status="assigned" ORDER BY '.$order.' LIMIT '.$limit.',20';
	
	$output = parse_ticket($output, $query, 'assigned');
	
	return $output;
}
?>