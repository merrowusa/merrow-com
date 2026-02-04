<?php
/***************************************************************************
								tickets_show_grab.php
							-----------------------------
			created				: 19.01.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// shows an URL depending on the ticket status
// 		-> "open"     : "Claim Ticket"
//		-> "assigned" : "Grab Ticket"
//		-> "closed"   :	"Reopen Ticket"
function tickets_show_grab()
{
	GLOBAL $status;
	GLOBAL $staff;
	
	if ($status == 'open')
	{
		$output = '<a href="'.$_SERVER['PHP_SELF'].'?tpl=tickets_grab_ticket&lang='.LANGUAGE.'&id='.$_GET['id'].'">{LANG_TICKETS_CLAIM}</a>';
		
		return $output;
	}
	else if ($status == 'assigned')
	{
		if ($staff != $_SESSION['login_user'])
		{
			$output = '<a href="'.$_SERVER['PHP_SELF'].'?tpl=tickets_grab_ticket&lang='.LANGUAGE.'&id='.$_GET['id'].'">{LANG_TICKETS_GRAB}</a>';
		}
		else 
		{
			// if the staff member views his own ticket, show a "move ticket" form
			$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
			if ($db->db_connected)
			{
				$this->query_result = $db->db_query('SELECT username FROM staff WHERE username!=\''.$_SESSION['login_user'].'\'');
				$numrows = $db->db_num_rows($this->query_result);
				if ($numrows != 0)
				{
					$options = '';
					while ($row = $db->db_fetch_array($this->query_result))
					{
  						
    					$options .= '<option value="'.$row['username'].'">'.$row['username'].'</option>';
					}
				}
			}
			$output = '<form name="move_form" method="post" action="'.$_SERVER['PHP_SELF'].'?tpl=tickets_move_ticket&id='.$_GET['id'].'&lang='.LANGUAGE.'"><input class="button" type="submit" name="Submit" value="{LANG_TICKETS_MOVE}"> <select name="staff">'.$options.'</select></form>';
		}
		return $output;
	}
	else if ($status == 'closed')
	{
		$output = '<a href="'.$_SERVER['PHP_SELF'].'?tpl=tickets_grab_ticket&lang='.LANGUAGE.'&id='.$_GET['id'].'">{LANG_TICKETS_REOPEN}</a><br>&nbsp;';
		
		return $output;
	}
	
	return;
}
?>