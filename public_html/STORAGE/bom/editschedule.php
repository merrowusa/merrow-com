<?php
include 'dbclass.php';
include 'bomfunctions.php';
include 'mysqlfunctions.php';
include 'printfunctions.php';
include 'htmlfunctions.php';

$delete=$_POST['delete'];
$confirmed=$_POST['deleteconfirm'];
$add=$_POST['add'];
$cript = $_SERVER['PHP_SELF'];

$db = new db_class();
if(!$db->connect())
{
	echo "Crap.";
	exit();
}

$title = "Edit Shipment Schedule";

include 'includes/top.html';

echo "<p><a href=\"./\">Get Weekly Usage</a> &#187; Edit Shipment Schedule</a></p>";

if($confirmed && $delete){

	$delete=array_keys($delete);
	
	$i=0;
	
	foreach($delete as $key)
	{
		list($msmcID, $date) = explode("|", $key);
		$query = "DELETE FROM Outgoing WHERE msmcID='$msmcID' AND date='$date'";
		$rows = $db->update_sql($query);
		if($rows)
			if(is_numeric($rows)) $i += $rows;
		else
			echo "<p>Query failed: $db->last_error</p>\n";
	}
	
	echo "<p>$i row". ($i==1?"":"s") ." deleted.</p>";

}elseif($delete){
	$i = -1;
	echo "<p>Are you sure you want to delete";
	echo "<form name=\"delform\" method=\"post\" action=\"$cript\">";
	$delete=array_keys($delete);
	foreach($delete as $key)
	{
		list($id, $date) = explode("|",$key);
		list($array[++$i]['msmcID'],$array[$i]['date']) = explode("|",$key);
	}
	
	print_assoc_results($array, '', array('msmcID'=>'MSMC'), array('msmcID', 'date'), array('Delete'=>'<input type="checkbox" name="delete[%id%]" value="X" checked="checked" onclick="hilight(this)" />'));
	echo "<input type=\"submit\" name=\"deleteconfirm\" value=\"Confirm\" />\n";
	echo "</form>\n";
}elseif($add){
	$date = getSQLDate($_POST['year'], $_POST['month'], $_POST['day']);
	$part = $_POST['part'];
	$quantity = $_POST['quantity'];
	
	print_ar(array('date'=>$date, 'part'=>$part, 'quantity'=>$quantity));
	
	$query="INSERT INTO Outgoing (msmcID, date, quantity) VALUES ('$part','$date',$quantity)";
	
	echo "<p>$query</p>";
	
	$success = $db->insert_sql($query);
	
	if($success)
		echo "<p>Added order successfully</p>";
	else
		echo "<p>$db->last_error</p>";
}

include 'includes/addshipmentform.html';

$schedules = getOutgoingSchedules($db,"any","0000-00-00","9999-12-31", "assoc");

echo <<<END
	<form name="theform" method="post" action="$cript">
END;

print_assoc_results($schedules, "Current Schedule", array('msmcID'=>'MSMC'), array('msmcID', 'date'), array('Delete'=>'<input type="checkbox" name="delete[%id%]" value="X" />'));
echo '<input type="submit" value="Make Changes" />';
echo "</form>";

include 'includes/bottom.html';
?>