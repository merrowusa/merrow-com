<?php
/***************************************************************************
								mysql.inc
							-----------------
			created				: 04.01.2003
			edited				: 28.01.2003
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// MySQL database include
if(!defined('SQL_MODULE'))
{
	define('SQL_MODULE','mysql');
}
	
class db_module
{
	var $db_connected;
	var $query_result;
	var $row = array();

	// make sure it gets connected and uses the proper database right away
	function db_module($db_server, $db_user, $db_password, $database)
	{

		$this->db_server = $db_server;
		$this->db_user = $db_user;
		$this->db_password = $db_password;
		$this->database = $database;

		$this->db_connected = @mysql_connect($this->db_server, $this->db_user, $this->db_password);

		if($this->db_connected)
		{
			if($database != '')
			{
				$this->database = $database;
				$db_select = @mysql_select_db($this->database);
				if(!$db_select)
				{
					@mysql_close($this->db_connected);
					$this->db_connected = $db_select;
				}
			}
			return $this->db_connected;
		}
		else
		{
			return false;
		}
	}

	// close the connection
	function db_close()
	{
		if($this->db_connected)
		{
			$result = @mysql_close($this->db_connected);
			return $result;
		}
		else
		{
			return false;
		}
	}

	// pass a query to the database and return the result
	function db_query($query = '')
	{
		GLOBAL $num_queries;
		
		//unset($this->query_result);
		if($query != '')
		{
			$num_queries++;

			$this->query_result = @mysql_query($query, $this->db_connected);
		}
		if($this->query_result)
		{
			//unset($this->row[$this->query_result]);
			return $this->query_result;
		}
	}

	// return the associative array output of a query
	function db_fetch_array($query_id = 0)
	{
		if(!$query_id)
		{
			$query_id = $this->query_result;
		}
		if($query_id)
		{
			$this->row[$query_id] = @mysql_fetch_assoc($query_id);
			return $this->row[$query_id];
		}
		else
		{
			return false;
		}
	}

	// return the raw-row output of a query
	function db_fetch_row($query_id = 0)
	{
		if(!$query_id)
		{
			$query_id = $this->query_result;
		}
		if($query_id)
		{
			$this->row[$query_id] = @mysql_fetch_row($query_id);
			return $this->row[$query_id];
		}
		else
		{
			return false;
		}
	}

	// return the number of affected rows of a query
	function db_num_rows($query = '')
	{
		return $this->query_result = @mysql_num_rows($query);
	}

	// get last insert ID
	function db_insert_id()
	{
		return mysql_insert_id($this->db_connected);
	}
}
?>