<?php
/***************************************************************************
								slogic_list_users.php
							-----------------------------
			created				: 14.03.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display current users
function slogic_list_users()
{
	if (!function_exists('slogic_count_users'))
	{
		include SCRIPT_PATH.'modules/admin/slogic/functions/slogic_count_users.php';
	}
	$limit_max = slogic_count_users();
	$get_max_limit = $limit_max;
	$limit_max = ceil($limit_max / 20);
	
	$output = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/functions/slogic_list_users.tpl'));

	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?lang='.LANGUAGE,$output);
	
	if ((isset($_GET['order'])) && ($_GET['order_table'] == 'users'))
	{
		$order = $_GET['order'];
	}
	else 
	{
		$order = 'username';
	}

	if ((!isset($_GET['limit'])) || ($_GET['order_table'] != 'users'))
	{
		$_GET['limit'] = 0;
		$_GET['order_table'] = 'users';
	}
	
	if ((isset($_GET['limit'])) && (isset($_GET['order_table'])) && ($_GET['order_table'] == 'users'))
	{
		$limit = $_GET['limit'];
		if (($limit < 0) || ($limit > ($get_max_limit-1)))
		{
			$limit = 0;
		}
		
		if (($limit > 0) && ($limit < $get_max_limit) && ($get_max_limit >= 20))
		{
			if (($limit-20) <= 0)
			{
				
				$output = str_replace('{PREVIOUS}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.$_GET['tpl'].'&lang='.LANGUAGE.'&order='.$order.'&order_table=users">{LANG_TICKETS_PREVIOUS} [0-19]</a>',$output);
			}
			else 
			{
				$output = str_replace('{PREVIOUS}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.$_GET['tpl'].'&lang='.LANGUAGE.'&order='.$order.'&order_table=users&limit='.($limit-20).'">{LANG_TICKETS_PREVIOUS} ['.($limit-20).'-'.($limit-1).']</a>',$output);
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
				$output = str_replace('{NEXT}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.$_GET['tpl'].'&lang='.LANGUAGE.'&order='.$order.'&order_table=users&limit='.($limit+20).'">{LANG_TICKETS_NEXT} ['.($limit+20).'-'.($get_max_limit-1).']</a>',$output);
			}
			else
			{
				$output = str_replace('{NEXT}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.$_GET['tpl'].'&lang='.LANGUAGE.'&order='.$order.'&order_table=users&limit='.($limit+20).'">{LANG_TICKETS_NEXT} ['.($limit+20).'-'.($limit+39).']</a>',$output);
			}
		}
		else 
		{
			$output = str_replace('{NEXT}','',$output);
		}
	}
	
	
	if ($get_max_limit > 20)
	{
		$output = str_replace('{FIRST}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.$_GET['tpl'].'&lang='.LANGUAGE.'&order='.$order.'&order_table=users">[0-19]</a>',$output);
		$output = str_replace('{LAST}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.$_GET['tpl'].'&lang='.LANGUAGE.'&order='.$order.'&order_table=users&limit='.($get_max_limit-20).'">['.($get_max_limit-20).'-'.($get_max_limit-1).']</a>',$output);
	}
	else 
	{
		$output = str_replace('{FIRST}','',$output);
		$output = str_replace('{LAST}','',$output);
	}

	$output = str_replace('{LANG}',LANGUAGE,$output);	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'],$output);	
	
	$get_users = explode('<USERS>',$output);
	$get_users = explode('</USERS>',$get_users[1]);
	
	$get_no_users = explode('<NO_USERS>',$output);
	$get_no_users = explode('</NO_USERS>',$get_no_users[1]);
	
	$get_placeholders = explode('{',$get_users[0]);
	for ($i = 0; $i != sizeof($get_placeholders); $i++)
	{
		$list_placeholders[$i] = explode('}',$get_placeholders[$i]);
		$list_placeholders[$i] = strtolower($list_placeholders[$i][0]);
	}
	
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		// get users
		$this->query_result = $db->db_query('SELECT * FROM users ORDER BY '.$order.' LIMIT '.$limit.',20');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$i = 0;
			$make_user = array();
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$make_user[$i] = $get_users[0];
				foreach ($row as $key => $value) 
				{
					if ($value == '')
					{
						$value = '&nbsp;';
					}
					if (in_array($key,$list_placeholders))
					{
						$make_user[$i] = str_replace('{'.strtoupper($key).'}',$value,$make_user[$i]);
					}
				}
				$make_user[$i] = str_replace('{EDIT}','<a href="'.$_SERVER['PHP_SELF'].'?tpl=slogic_edit_user&lang='.LANGUAGE.'&id='.$row['id'].'">{LANG_SLOGIC_EDIT}</a>',$make_user[$i]);
				$make_user[$i] = str_replace('{DELETE}','<input type="checkbox" class="checkbox" name="del[]" value="'.$row['id'].'" onclick="toggle(this);" title="{LANG_SLOGIC_USERS_DELETE}">',$make_user[$i]);
				$i++;
			}
			$output = str_replace($get_no_users[0],'',$output);
			$output = str_replace($get_users[0],implode('',$make_user),$output);
			$output = str_replace('{DELETE_BUTTON}','<input class="button" type="submit" value="{LANG_SLOGIC_DELETE}">',$output);
		}
		else 
		{
			$output = str_replace($get_users[0],'',$output);
			$output = str_replace('{DELETE_BUTTON}','{LANG_SLOGIC_DELETE}',$output);
		}
		$get_orders = explode('{ORDER_',$output);
		for ($i = 0; $i != sizeof($get_orders); $i++)
		{
			$get_order = explode('}',$get_orders[$i]);
			$output = str_replace('{ORDER_'.$get_order[0].'}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.TEMPLATE.'&lang='.LANGUAGE.'&order='.strtolower($get_order[0]).'&order_table=users">',$output);
			$output = str_replace('{ORDER_'.$get_order[0].'_DESC}','<a href="'.$_SERVER['PHP_SELF'].'?tpl='.TEMPLATE.'&lang='.LANGUAGE.'&order='.strtolower($get_order[0]).'%20DESC&order_table=users">',$output);
		}
	}
	$db->db_close();
	return $output;
}
?>