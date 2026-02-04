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

$title = "";

include 'includes/top.html';

include 'includes/bottom.html';
?>