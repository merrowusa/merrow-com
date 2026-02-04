<?php
/***************************************************************************
								session.inc
							-------------------
			created				: 07.03.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// self defined session management functions, used to store the session info in a MySQL table
function on_session_start($save_path, $session_name)
{
	// initiate garbage collection
	on_session_gc(SESSION_TIMEOUT);
}

function on_session_end()
{
	
	// nothing
	
}

function on_session_read($key)
{
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$db->db_query('SELECT session_data FROM sessions WHERE session_id="'.$key.'"');
		$row = $db->db_fetch_array();
	}
	$db->db_close();
	return $row['session_data'];
}

function on_session_write($key, $val)
{
	GLOBAL $session_timeout;
	
	$val = addslashes($val);
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$query_result = $db->db_query('INSERT INTO sessions VALUES("'.$key.'", "'.$val.'", (UNIX_TIMESTAMP(now()) + '.$session_timeout.'))');
		if (!$query_result)
		{
			$db->db_query('UPDATE sessions SET session_data="'.$val.'", session_expiration=(UNIX_TIMESTAMP(now()) + '.$session_timeout.') WHERE session_id="'.$key.'"');
		}
	}
	$db->db_close();
}

function on_session_destroy($key)
{
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$db->db_query('DELETE FROM sessions WHERE session_id="'.$key.'"');
	}
	$db->db_close();
}

function on_session_gc($max_lifetime)
{
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$db->db_query('DELETE FROM sessions WHERE (session_expiration + '.$max_lifetime.') < UNIX_TIMESTAMP(now())');
	}
	$db->db_close();
}
?>