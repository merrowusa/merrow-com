<?php
include 'dbclass.php';
include 'bomfunctions.php';
include 'mysqlfunctions.php';
include 'printfunctions.php';
include 'htmlfunctions.php';

$db = new db_class();
if(!$db->connect())
{
	echo "Crap.";
	exit();
}

$title = "Reset Sales";

include 'includes/top.html';

$result = $db->execute_file('sql/Sales.sql');

echo $db->last_error;

include 'includes/bottom.html';
?>