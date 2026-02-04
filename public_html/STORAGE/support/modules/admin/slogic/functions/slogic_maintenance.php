<?php
/***************************************************************************
							slogic_maintenance.php
						------------------------------
			created				: 12.03.2003
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// display the maintenance options
function slogic_maintenance()
{
	GLOBAL $user_screen;
	
	if (isset($_POST['dump']))
	{
		if ($_POST['dump'] == 'mysqldump')
		{
			if (!is_writeable(SCRIPT_PATH.'slogic_dump.sql'))
			{
				$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
				$user_screen = str_replace('{SECONDS}','3',$user_screen);
				$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_maintenance&lang='.LANGUAGE,$user_screen);
				$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_MAINTENANCE_DUMP_INVALID}',$user_screen);
			}
			else 
			{
				shell_exec('mysqldump -u'.DB_USER.' -p'.DB_PASS.' '.DB_DATABASE.' --add-drop-table > '.SCRIPT_PATH.'slogic_dump.sql');

				$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
				$user_screen = str_replace('{SECONDS}','3',$user_screen);
				$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_maintenance&lang='.LANGUAGE,$user_screen);
				$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_MAINTENANCE_DUMP_DONE}',$user_screen);
			}
			return;
		}
		else
		{
			$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
			if ($db->db_connected)
			{
				$this->query_result = $db->db_query('SHOW TABLES');
				$numrows = $db->db_num_rows($this->query_result);
				if ($numrows != 0)
				{
					// if the user wants to get the file directly via download, add necessary header info
					if ($_POST['dump'] == 'dump_download')
					{
						header("Content-Type: text");
						header("Content-Disposition: filename=slogic_dump_".date("Y_m_d").".sql");
					}
					
					$dump_output = '';
					
					$i = 0;
					while ($row = $db->db_fetch_row($this->query_result))
					{
						$db_tables[$i] = $row[0];
						$i++;
					}
					for ($i = 0; $i != sizeof($db_tables); $i++)
					{
						$this->query_result = $db->db_query('EXPLAIN '.$db_tables[$i]);
						$dump_output .= "--\r\n";
						$dump_output .= "-- Table structure for table '".$db_tables[$i]."'\r\n";
						$dump_output .= "--\r\n";
						$dump_output .= "DROP TABLE IF EXISTS ".$db_tables[$i].";\r\nCREATE TABLE ".$db_tables[$i]." (\r\n";
						$k = 0;
						while ($row = $db->db_fetch_array($this->query_result))
						{
							if ($row['Field'] != '')
							{
								$dump_output .= $row['Field']." ".$row['Type']." NOT NULL";
								if ($row['Default'] != '')
								{
									$dump_output .= " default '".$row['Default']."'";
								}
								else if ((ereg('int',$row['Type'])) && ($row['Extra'] == ''))
								{
									$dump_output .= " default '0'";
								}
								else if (ereg('varchar',$row['Type']))
								{
									$dump_output .= " default ''";
								}
								
								if (ereg('int',$row['Type']))
								{
									$int[$k] = 'int';
								}
								else if (ereg('text',$row['Type']))
								{
									$int[$k] = 'varchar';
								}
								else if (ereg('varchar',$row['Type']))
								{
									$int[$k] = 'varchar';
								}
								else if (ereg('longblob',$row['Type']))
								{
									$int[$k] = 'longblob';
								}
								
								if ($row['Extra'] != '')
								{
									$dump_output .= " ".$row['Extra'];
								}
								$dump_output .= ",\r\n";
								if ($row['Key'] == 'PRI')
								{
									$primary = $row['Field'];
								}
								$k++;
							}
						}
						$dump_output .= "PRIMARY KEY (".$primary.")\r\n) Type=MyISAM;\r\n\r\n";
						
						$dump_output .= "--\r\n";
						$dump_output .= "-- Dumping data for table '".$db_tables[$i]."'\r\n";
						$dump_output .= "--\r\n\r\n";
						
						$this->query_result = $db->db_query('SELECT * FROM '.$db_tables[$i]);
						while ($row = $db->db_fetch_row($this->query_result))
						{
							$dump_output .= "INSERT INTO ".$db_tables[$i]." VALUES (";
							
							$tmp_value = array();
							for ($k = 0; $k != sizeof($row); $k++)
							{
								if (!isset($int[$k]))
								{
									$int[$k] = 'whatever';
								}
								if ($int[$k] == 'int')
								{
									$tmp_value[$k] = $row[$k];
								}
								else if ($int[$k] == 'varchar')
								{
									$tmp_value[$k] = "'".mysql_escape_string($row[$k])."'";
								}
								else if ($int[$k] == 'longblob')
								{
									// make sure, that the binary data doesn't get any chars (slashes, format data, ...) removed
									$tmp_value[$k] = "'".mysql_escape_string($row[$k])."'";
								}
								else
								{
									$tmp_value[$k] = "'".mysql_escape_string($row[$k])."'";
								}
							}
							
							$dump_output .= implode(',',$tmp_value).");\r\n";
						}
						$dump_output .= "\r\n\r\n";
					}
					$db->db_close();
					
					// echo output, if the user selected download dump
					if ($_POST['dump'] == 'dump_download')
					{
						echo $dump_output;
					}
						
					// write output to file, if user selected dump to file
					if ($_POST['dump'] == 'dump_file')
					{
						if (!$handle = fopen(SCRIPT_PATH.'slogic_dump.sql', 'w'))
						{
							$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
							$user_screen = str_replace('{SECONDS}','3',$user_screen);
							$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_maintenance&lang='.LANGUAGE,$user_screen);
							$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_MAINTENANCE_DUMP_INVALID}',$user_screen);
						}
						else 
						{
							if (!fwrite($handle, $dump_output))
							{
								$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
								$user_screen = str_replace('{SECONDS}','3',$user_screen);
								$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_maintenance&lang='.LANGUAGE,$user_screen);
								$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_MAINTENANCE_DUMP_INVALID}',$user_screen);
							}
							else 
							{
								$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
								$user_screen = str_replace('{SECONDS}','3',$user_screen);
								$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_maintenance&lang='.LANGUAGE,$user_screen);
								$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_MAINTENANCE_DUMP_DONE}',$user_screen);
							}
						}
						return;
					}
		           	exit();
				}
				else 
				{
					$user_screen = join ('', file (SCRIPT_PATH.'modules/staff/slogic/templates/pages/slogic_redirect.tpl'));
					$user_screen = str_replace('{SECONDS}','3',$user_screen);
					$user_screen = str_replace('{URL}',$_SERVER['PHP_SELF'].'?tpl=slogic_maintenance&lang='.LANGUAGE,$user_screen);
					$user_screen = str_replace('{MESSAGE}','{LANG_SLOGIC_MAINTENANCE_DUMP_INVALID}',$user_screen);
				}
			}
			$db->db_close();
		}
	}
	
	$output = join ('', file (SCRIPT_PATH.'modules/admin/slogic/templates/functions/slogic_maintenance.tpl'));
	
	$output = str_replace('{SELF}',$_SERVER['PHP_SELF'].'?tpl=slogic_maintenance&lang='.LANGUAGE,$output);

	if (is_writable(SCRIPT_PATH.'slogic_dump.sql')) 
	{
		$dump_chmod = '';
	}
	else 
	{
		$dump_chmod = '{LANG_SLOGIC_MAINTENANCE_DUMP_CHMOD}';
	}
	$output = str_replace('{DUMP_CHMOD}',$dump_chmod,$output);
	
	$db = new db_module(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($db->db_connected)
	{
		$this->query_result = $db->db_query('SHOW TABLE STATUS');
		$numrows = $db->db_num_rows($this->query_result);
		if ($numrows != 0)
		{
			$dump_size = 0;
			while ($row = $db->db_fetch_array($this->query_result))
			{
				$dump_size = $dump_size+$row['Data_length']+$row['Index_length'];
			}
			$output = str_replace('{DUMP_SIZE}',round($dump_size/1000),$output);
		}
	}
	$db->db_close();
	
	return $output;
}
?>