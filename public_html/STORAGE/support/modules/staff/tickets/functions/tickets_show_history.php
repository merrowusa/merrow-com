<?php
/***************************************************************************
								tickets_show_history.php
							--------------------------------
			created				: 16.02.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// list all tickets for that user
function tickets_show_history()
{
	if (!function_exists('tickets_count_history'))
	{
		include SCRIPT_PATH.'modules/staff/tickets/functions/tickets_count_history.php';
	}
	$limit_max = tickets_count_history();
	$limit_max = ceil($limit_max / 20);
	
	if (!function_exists('parse_ticket'))
	{
		include SCRIPT_PATH.'modules/staff/tickets/functions/parse_ticket.php';
	}
	$output = join ('', file (SCRIPT_PATH.'modules/staff/tickets/templates/functions/tickets_show_history.tpl'));
	
	if ((isset($_GET['order'])) && (isset($_GET['order_table'])) && ($_GET['order_table'] == 'history'))
	{
		$order = $_GET['order'];
	}
	else 
	{
		$order = 'sentdate';
	}

	if (isset($_POST['user']))
	{
		$_GET['user'] = $_POST['user'];
	}
	
	$output = str_replace('{USER}',$_GET['user'],$output);
	
	if ((isset($_GET['limit'])) && (isset($_GET['order_table'])) && ($_GET['order_table'] == 'history'))
	{
		$limit = $_GET['limit'];
		if ($limit < 0) 
		{
			$limit = 0;
		}
		
		if (($limit == 0) && (($limit+20)/20 < $limit_max))
		{
			$output = str_replace('{PREVIOUS}','',$output);
			$output = str_replace('{NEXT}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.$_GET['tpl'].'&user='.$_GET['user'].'&lang='.LANGUAGE.'&order='.$order.'&order_table=history&limit='.($limit+20).'">{LANG_TICKETS_NEXT} ['.($limit+21).'-'.($limit+40).']</a>',$output);
		}
		else if (($limit >= 20) && (($limit+20)/20 < $limit_max))
		{
			$output = str_replace('{PREVIOUS}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.$_GET['tpl'].'&user='.$_GET['user'].'&lang='.LANGUAGE.'&order='.$order.'&order_table=history&limit='.($limit-20).'">{LANG_TICKETS_PREVIOUS} ['.($limit-19).'-'.$limit.']</a>',$output);
			$output = str_replace('{NEXT}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.$_GET['tpl'].'&user='.$_GET['user'].'&lang='.LANGUAGE.'&order='.$order.'&order_table=history&limit='.($limit+20).'">{LANG_TICKETS_NEXT} ['.($limit+21).'-'.($limit+40).']</a>',$output);
		}
		else if (($limit >= 20) && (($limit+20)/20 >= $limit_max))
		{
			$output = str_replace('{PREVIOUS}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.$_GET['tpl'].'&user='.$_GET['user'].'&lang='.LANGUAGE.'&order='.$order.'&order_table=history&limit='.($limit-20).'">{LANG_TICKETS_PREVIOUS} ['.($limit-19).'-'.$limit.']</a>',$output);
			$output = str_replace('{NEXT}','',$output);
		}
		else 
		{
			$output = str_replace('{PREVIOUS}','',$output);
			$output = str_replace('{NEXT}','',$output);
		}
		
	}
	else 
	{
		$limit = '0';
		if ($limit_max >= 2)
		{
			$output = str_replace('{PREVIOUS}','',$output);
			$output = str_replace('{NEXT}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.$_GET['tpl'].'&user='.$_GET['user'].'&lang='.LANGUAGE.'&order='.$order.'&order_table=history&limit='.($limit+20).'">{LANG_TICKETS_NEXT} ['.($limit+21).'-'.($limit+40).']</a>',$output);
		}
		else
		{
			$output = str_replace('{PREVIOUS}','',$output);
			$output = str_replace('{NEXT}','',$output);
		}
	}
	
	$query = 'SELECT * FROM tickets WHERE user="'.$_GET['user'].'" ORDER BY '.$order.' LIMIT '.$limit.',20';
	
	$output = parse_ticket($output, $query, 'history');
	
	return $output;
}
?>