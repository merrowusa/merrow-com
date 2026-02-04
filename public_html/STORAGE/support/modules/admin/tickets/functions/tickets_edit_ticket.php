<?php
/***************************************************************************
								tickets_edit_ticket.php
							-------------------------------
			created				: 04.04.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display edit ticket form & add ticket to database
function tickets_edit_ticket()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/admin/tickets/templates/functions/tickets_edit_ticket.tpl'));
	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl=tickets_edit_ticket&lang='.LANGUAGE.'&id='.$_GET['id'],$output);

	if (isset($_POST['user']))
	{
		// check if all data was submitted
		if ((!isset($_POST['staff'])) || (!isset($_POST['priority'])) || (!isset($_POST['category'])) || (!isset($_POST['subject'])) 
			|| (!isset($_POST['content'])) || (!isset($_POST['status'])) || (!isset($_POST['sentdate'])) || (!isset($_POST['last_update'])) 
			|| (!isset($_POST['who_updated'])) || (!isset($_POST['close_verified'])) || (!isset($_POST['pipe_id']))
		   )
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_list_tickets&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_TICKET_EDITED_INVALID}',$user_screen);
		}
		else 
		{	
			$make_query = array();
			$i = 0;
			foreach ($_POST as $key => $value) 
			{
				if (($key != 'submit') && ($key != 'SLOGIC'))
				{
					if ($value != '')
					{
						$make_query[$i] = $key.'="'.$value.'"';
						$i++;
					}
				}
			}
			
			$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
			if ($db->db_connected)
			{
				// update tickets
				$this->query_result = $db->db_query('UPDATE tickets SET '.implode(',',$make_query).' WHERE id="'.$_GET['id'].'"');
			}
			$db->db_close();

			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=tickets_list_tickets&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_TICKETS_TICKET_EDITED}',$user_screen);
		}
	}
	else 
	{
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{
			$priorities = array();
			$catgeories = array();
			
			// get ticket info
			$this->query_result = $db->db_query('SELECT * FROM tickets WHERE id="'.$_GET['id'].'"');
			$row = $db->db_fetch_array($this->query_result);

			// get priorities
			$i = 0;
			$this->query_result = $db->db_query('SELECT name FROM priorities WHERE name!="'.$row['priority'].'"');
			while ($row2 = $db->db_fetch_array($this->query_result))
			{
				$priorities[$i] = '<option value="'.$row2['name'].'">'.$row2['name'].'</option>';
				$i++;
			}
			
			// get categories
			$i = 0;
			$this->query_result = $db->db_query('SELECT name FROM categories WHERE name!="'.$row['category'].'"');
			while ($row2 = $db->db_fetch_array($this->query_result))
			{
				$categories[$i] = '<option value="'.$row2['name'].'">'.$row2['name'].'</option>';
				$i++;
			}

		}
		$db->db_close();

		$status[0] = 'open';
		$status[1] = 'assigned';
		$status[2] = 'closed';
		
		// make it a little upward compatible right away
		foreach ($row as $key => $value)
		{
			if ($key == 'priority')
			{
				$output = str_replace('{SELECT_PRIORITY}','<select name="priority"><option value="'.$row['priority'].'">'.$row['priority'].'</option>'.implode('',$priorities).'</select>',$output);
			}
			else if ($key == 'category')
			{
				$output = str_replace('{SELECT_CATEGORY}','<select name="category"><option value="'.$row['category'].'">'.$row['category'].'</option>'.implode('',$categories).'</select>',$output);
			}
			else if ($key == 'status')
			{
				$make_status = '';
				for ($i = 0; $i != sizeof($status); $i++)
				{
					if ($status[$i] != $row['status'])
					{
						$make_status .= '<option value="'.$status[$i].'">'.$status[$i].'</option>';
					}
				}
				$output = str_replace('{SELECT_STATUS}','<select name="status"><option value="'.$row['status'].'">'.$row['status'].'</option>'.$make_status.'</select>',$output);
			}
			else if ($key == 'who_updated')
			{
				if ($value == 'staff')
				{
					$output = str_replace('{SELECT_WHO_UPDATED}','<select name="who_updated"><option value="'.$row['who_updated'].'">{LANG_SLOGIC_STAFF}</option><option value="user">{LANG_SLOGIC_USER}</option></select>',$output);
				}
				else
				{
					$output = str_replace('{SELECT_WHO_UPDATED}','<select name="who_updated"><option value="'.$row['who_updated'].'">{LANG_SLOGIC_USER}</option><option value="staff">{LANG_SLOGIC_STAFF}</option></select>',$output);
				}
			}
			else if ($key == 'close_verified')
			{
				if ($value == 'yes')
				{
					$output = str_replace('{SELECT_CLOSE_VERIFIED}','<select name="close_verified"><option value="'.$row['close_verfied'].'">{LANG_SLOGIC_YES}</option><option value="no">{LANG_SLOGIC_NO}</option></select>',$output);
				}
				else
				{
					$output = str_replace('{SELECT_CLOSE_VERIFIED}','<select name="close_verified"><option value="'.$row['close_verified'].'">{LANG_SLOGIC_NO}</option><option value="no">{LANG_SLOGIC_YES}</option></select>',$output);
				}
			}
			else if (ereg('{'.strtoupper($key).'}',$output))
			{
				$output = str_replace('{'.strtoupper($key).'}',$value,$output);
			}
		}
			
		return $output;
	}
	return;
}
?>