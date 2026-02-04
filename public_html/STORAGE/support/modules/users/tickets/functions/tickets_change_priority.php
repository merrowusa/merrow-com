<?php
/***************************************************************************
								tickets_change_priority.php
							----------------------------------
			created				: 07.05.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// change priority of a ticket, or display the change priority form
function tickets_change_priority()
{
	GLOBAL $user_screen;
	
	// make sure the ticket isn't a closed one
	$verified = 'yes';
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$this->query_result = $db->db_query('SELECT status FROM tickets WHERE id="'.$_GET['id'].'"');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$row = $db->db_fetch_array($this->query_result);
			if ($row['status'] == 'closed')
			{
				$verified = 'no';
			}
		}
		else 
		{
			$verified = 'no';
		}
		$db->db_close();	
	}
	
	if ($verified == 'yes')
	{
		if (isset($_GET['change_priority']))
		{
			$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
			if ($db->db_connected)
			{
				$this->query_result = $db->db_query('SELECT user FROM tickets WHERE id="'.$_GET['id'].'"');
				$numrows = $db->db_num_rows($this->query_result);
				if ($numrows != 0)
				{
					$row = $db->db_fetch_array($this->query_result);
					if ($row['user'] != $_SESSION['login_user'])
					{
						$user_screen = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/pages/slogic_redirect.tpl'));
						$user_screen = str_replace('{SECONDS}','3',$user_screen);
						$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_main&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
						$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_CHANGE_PRIORITY_INVALID}',$user_screen);
					}
					else 
					{
						
						$this->query_result = $db->db_query('UPDATE tickets SET priority="'.$_GET['change_priority'].'" WHERE id="'.$_GET['id'].'"');
						
						$user_screen = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/pages/slogic_redirect.tpl'));
						$user_screen = str_replace('{SECONDS}','3',$user_screen);
						$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_show_ticket&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
						$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_CHANGE_PRIORITY_CHANGED}',$user_screen);
					}
				}
				else 
				{
					$user_screen = join ('', file (SCRIPT_PATH.'modules/users/slogic/templates/pages/slogic_redirect.tpl'));
					$user_screen = str_replace('{SECONDS}','3',$user_screen);
					$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_main&lang='.LANGUAGE.'&id='.$_GET['id'],$user_screen);
					$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_CHANGE_PRIORITY_INVALID}',$user_screen);
				}
			}
			$db->db_close();
			
		}
		else 
		{
			$output = join ('', file (SCRIPT_PATH.'modules/users/tickets/templates/functions/tickets_change_priority.tpl'));
			
			// make sure that all variables passed by URL get passed as well!
			$hidden = array();
			if (isset($_GET))
			{
				$i = 0;
				$hidden[$i] = '<input type="hidden" name="tpl" value="tickets_show_ticket">';
				$i++;
				foreach ($_GET as $key => $value)
				{
					if (($key != 'SLOGIC') && ($key != 'tpl') && ($key != 'Submit'))
					{
						$hidden[$i] = '<input type="hidden" name="'.$key.'" value="'.$value.'">';
						$i++;
					}
				}
			}
			
			$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
			if ($db->db_connected)
			{
				$this->query_result = $db->db_query('SELECT name,info FROM priorities ORDER BY urgency_level');
				$numrows = $db->db_num_rows($this->query_result);
				if ($numrows != 0)
				{
					$tmp_output = '';
					while ($row = $db->db_fetch_array($this->query_result))
					{
						$tmp_output .= '<option value="'.$row['name'].'" class="input">'.$row['name'].' - '.$row['info'].'</option>';
					}
					$output = str_replace('{PRIORITY}','<select name="change_priority" class="input">'.$tmp_output.'</select>',$output);
				}
			}
			$db->db_close();
			
			$output = str_replace('{HIDDEN}',implode('',$hidden),$output);
			$output = str_replace('{SELF}',$_SERVER['PHP_SELF'],$output);
			return $output;
		}
	}		
	return;
}
?>