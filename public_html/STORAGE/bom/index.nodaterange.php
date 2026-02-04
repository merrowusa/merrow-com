<?php

include('dbclass.php');
include('bomfunctions.nodaterange.php');
include('htmlfunctions.php');

function printPartReport($db, $machine, $date, $part, $parts)
{
	if($parts=='')
		unset($parts);
/*	echo "\n<!--\n";
	echo "$part\n";
	print_r($machine);
	print_r($parts);
	echo "-->\n";
*/
	if(isset($parts))
		$parts = getBOMforStock($db, $machine['msmcID'], $machine['quantity'], $parts);
	else
	{
		echo "\n<!-- Not set -->\n";
		$parts = getBOMforStock($db, $machine['msmcID'], $machine['quantity']);
	}
	//	print_ar($parts);
	if($parts['stock'][$part]<0)
		$status="warn";
	else if($parts['stock'][$part]>0)
		$status="good";
	else if(isset($parts['stock'][$part]) && $parts['stock'][$part]==0)
		$status="normal";
	else
		$status = "warn";
	echo "<tr class=\"$status\"><td>". $machine['msmcID'] ."</td><td>". $machine['date'] ."</td><td>". $machine['quantity'] ."</td><td>". ($parts['purchase'][$part]-$runningtotal['purchase']) ."</td><td>".  ($parts['bom'][$part]-$runningtotal['bom']) ."</td><td>". $parts['stock'][$part] ."</td></tr>";
	return $parts;
}

$db = new db_class();
if(!$db->connect())
{
	echo "Crap.";
	exit();
}

$part = $_GET['part'];

$title = $part?"Weekly Usage of $part":"Get Weekly Usage";

include('includes/top.html');
include('includes/bomform.html');


// Get the list of machines that use the part
$machines = getMachinesUsing($db, $part);
//print_ar($machines);

$scheduledMachines = getSchedules($db, $machines);
//print_ar($scheduledMachines);


if($scheduledMachines){
//	$weeklyorders = getWeeklyOrdersUsing($db, $part);
	$part = strtolower($part);
	echo <<<END
	<div class="centered">
	<table>
		<tr class="head">
			<td rowspan="2">Machine</td>
			<td rowspan="2">Date</td>
			<td rowspan="2">Machines Needed</td>
			<td colspan="2">Parts Needed For Order</td>
			<td rowspan="2">Stock</td>
		</tr>
		<tr class="head subhead">
			<td>Not in Stock</td>
			<td>Total</td>
		</tr>
END;
	foreach($scheduledMachines as $machine)
	{
		if($date!=$machine['date'])
		{
			$date = $machine['date'];
			if($weeklyorders)
			{
				foreach($weeklyorders as $order)
				{
					
				}
			}
		}
		$parts = printPartReport($db, $machine, $date, $part, $parts?$parts:'');
		$runningtotal['purchase'] = $parts['purchase'][$part];
		$runningtotal['bom'] = $parts['bom'][$part];
	}
	echo "</table></div>";
}

else if($part) echo "<p>No machines scheduled using this part.</p>";
else
{
?>
<?php
}
include('includes/bottom.html');
?>