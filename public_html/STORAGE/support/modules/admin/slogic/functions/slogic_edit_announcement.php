<?php
/***************************************************************************
								slogic_edit_announcement.php
							------------------------------------
			created				: 13.03.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display edit announcement form & add announcement to database
function slogic_edit_announcement()
{
	GLOBAL $user_screen;
	
	$output = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/functions/slogic_edit_announcement.tpl'));
	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl=slogic_edit_announcement&lang='.LANGUAGE.'&id='.$_GET['id'],$output);
	
	if (isset($_POST['subject']))
	{
		// check if all data was submitted
		if ((!isset($_POST['content'])) || (!isset($_POST['day'])) || (!isset($_POST['month'])) ||
			(!isset($_POST['year'])) || (!isset($_POST['show_date'])) || (!isset($_POST['show_to']))
		   )
		{
			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_list_announcements&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_ANNOUNCEMENT_EDITED_INVALID}',$user_screen);
		}
		else 
		{	
			$make_query = array();
			$i = 0;
			foreach ($_POST as $key => $value) 
			{
				if (($key != 'submit') && ($key != 'SLOGIC') && ($key != 'day') && ($key != 'month') && ($key != 'year') )
				{
					$make_query[$i] = $key.'="'.$value.'"';
					$i++;
				}
			}
			
			$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
			if ($db->db_connected)
			{
				// update announcement
				$this->query_result = $db->db_query('UPDATE announcements SET '.implode(',',$make_query).',sent_date="'.$_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'].'" WHERE id="'.$_GET['id'].'"');
			}
			$db->db_close();
		
			$user_screen = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/pages/slogic_redirect.tpl'));
			$user_screen = str_replace('{SECONDS}','3',$user_screen);
			$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_list_announcements&lang='.LANGUAGE,$user_screen);
			$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_ANNOUNCEMENT_EDITED}',$user_screen);
		}
	}
	else 
	{
		$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if ($db->db_connected)
		{
			// get announcement info
			$this->query_result = $db->db_query('SELECT * FROM announcements WHERE id="'.$_GET['id'].'"');
			$row = $db->db_fetch_array($this->query_result);
		}
		$db->db_close();

		// make it a little upward compatible right away
		foreach ($row as $key => $value)
		{
			if (ereg('{'.strtoupper($key).'}',$output))
			{
				$output = str_replace('{'.strtoupper($key).'}',$value,$output);
			}
		}
			
		// add the sent_date info
		$get_date = explode('-',$row['sent_date']);
		$output = str_replace('{DAY}',$get_date[2],$output);
		$output = str_replace('{MONTH}',$get_date[1],$output);
		$output = str_replace('{YEAR}',$get_date[0],$output);
		
		// add show_date info
		$make_show_dates = '<select name="show_date"><option value="'.$row['show_date'].'">{LANG_SLOGIC_ANNOUNCEMENT_'.strtoupper($row['show_date']).'}</option>';
		
		$possible_show_date = array('now','equal','equal_up','never');
		for ($i = 0; $i != sizeof($possible_show_date); $i++)
		{
			if ($possible_show_date[$i] != $row['show_date'])
			{
				$make_show_dates .= '<option value="'.$possible_show_date[$i].'">{LANG_SLOGIC_ANNOUNCEMENT_'.strtoupper($possible_show_date[$i]).'}</option>';
			}
		}		
		$make_show_dates .= '</select>';
		
		$output = str_replace('{SELECT_SHOW_DATE}',$make_show_dates,$output);
		
		// add show_to info
		$make_show_tos = '<select name="show_to"><option value="'.$row['show_to'].'">{LANG_SLOGIC_ANNOUNCEMENT_'.strtoupper($row['show_to']).'}</option>';
		
		$possible_show_to = array('both','users','staff');
		for ($i = 0; $i != sizeof($possible_show_to); $i++)
		{
			if ($possible_show_to[$i] != $row['show_to'])
			{
				$make_show_tos .= '<option value="'.$possible_show_to[$i].'">{LANG_SLOGIC_ANNOUNCEMENT_'.strtoupper($possible_show_to[$i]).'}</option>';
			}
		}		
		$make_show_tos .= '</select>';
		
		$output = str_replace('{SELECT_SHOW_TO}',$make_show_tos,$output);
		
		return $output;
	}
	return;
}
?>