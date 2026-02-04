<?php
/***************************************************************************
								slogic_edit_quick_reply.php
							----------------------------------
			created				: 22.06.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display edit quick reply form & add quick reply to database
function slogic_edit_quick_reply()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/functions/slogic_edit_quick_reply.tpl'));
	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl=slogic_edit_quick_reply&lang='.LANGUAGE.'&id='.$_GET['id'],$output);
	
	if (isset($_POST['info']))
	{
		// check if all data was submitted
		if ((!isset($_POST['info'])) || (!isset($_POST['message']))
		   )
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_list_quick_replies&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_QUICK_REPLY_EDITED_INVALID}',$user_screen);
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
				$this->query_result = $db->db_query('SELECT * FROM quick_replies WHERE id="'.$_GET['id'].'"');
				$row = $db->db_fetch_array($this->query_result);
				if ($row['username'] ==  $_SESSION['login_user'])
				{
					// update quick reply
					$this->query_result = $db->db_query('UPDATE quick_replies SET '.implode(',',$make_query).' WHERE id="'.$_GET['id'].'"');
					
					$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
					$user_screen = str_replace('{SECONDS}','3',$user_screen);
					$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_list_quick_replies&lang='.LANGUAGE,$user_screen);
					$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_QUICK_REPLY_EDITED}',$user_screen);
				}
				else 
				{
					$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
					$user_screen = str_replace('{SECONDS}','3',$user_screen);
					$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_list_quick_replies&lang='.LANGUAGE,$user_screen);
					$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_QUICK_REPLY_EDITED_INVALID}',$user_screen);
				}
			}
			$db->db_close();
		}
	}
	else 
	{
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{
			// get quick reply info
			$this->query_result = $db->db_query('SELECT * FROM quick_replies WHERE id="'.$_GET['id'].'"');
			$row = $db->db_fetch_array($this->query_result);
		}
		$db->db_close();

		if ($row['username'] ==  $_SESSION['login_user'])
		{
					
			// make it a little upward compatible right away
			foreach ($row as $key => $value)
			{
				if (ereg('{'.strtoupper($key).'}',$output))
				{
					$output = str_replace('{'.strtoupper($key).'}',$value,$output);
				}
			}
			return $output;
		}
		else 
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_list_quick_replies&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_QUICK_REPLY_EDITED_INVALID}',$user_screen);
		}
	}
	return;
}
?>