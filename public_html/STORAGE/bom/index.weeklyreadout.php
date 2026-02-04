<?php

include 'dbclass.php';
include 'bomfunctions.nodaterange.php';
include 'mysqlfunctions.php';
include 'printfunctions.php';
include 'htmlfunctions.php';

$db = new db_class();
if(!$db->connect())
{
	echo "Crap.";
	exit();
}

$part = $_GET['part'];
$range = $_GET['daterange'];


//  Check for duration type and get start/end dates if set.
if($range=='increment')
{
	// Get start, increment, make end date from start + increment
	$start   = getSQLDate($_GET['year'],$_GET['month'],$_GET['day']);
	$weeks   = $_GET['increment-length'];
	$days    = $weeks*7;
	
	if($start)
	{
		$end = date_add($db, $start, $days);
//		$end   = getSQLDate(strftime("%Y", $endtime), strftime("%m", $endtime), strftime("%d", $endtime));
	}
	
	echo "<p>Start: $start  |  Weeks: $weeks  |  End: $end</p>";
}

elseif($range=='range')
{
	
	$start = getSQLDate($_GET['fromyear'], $_GET['frommonth'], $_GET['fromday']);
	$end   = getSQLDate($_GET['totoyear'], $_GET['tomonth'], $_GET['today']);
}

elseif($range=='nodaterange')
{
	
	$start = getExtreme($db, 'Outgoing', 'date', 1);
	$end   = getExtreme($db, 'Outgoing', 'date', 0);
}

elseif($range)
{
	
	unset($range);
}

$title = $part?"Weekly Usage of $part":"Get Weekly Usage";

include('includes/top.html');
include('includes/bomform.html');

if($range == 'nodaterange')
{
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
}
elseif($start && $end)
{

	// Get Period, for kicks
	$period = getPeriod($db, $start, $end);
	
	// Get accumulation data
	$parts = accumulateBOM($db, $part, $start, $end);
	if(!$parts){
		echo "<p>No BOM in this range</p>";
		exit(0);
	}
	//print_ar($parts);
		
	echo <<<END
		<table>
			<tr>
				<td>
					<table>
						<tr><td>$period</td></tr>
						<tr><td>From $start</td></tr>
						<tr><td>To $end</td></tr>
					</table>
				</td>
				<td>Part</td>
				<td>Order Quantity</td>
				<td>Total Need</td>
				<td>Stock</td>
				<td>Machine Need</td>
				<td>Stock Need</td>
			</tr>
			<tr>
				<td></td>
END;
	
	echo getAccumulationReport($part, $parts);
	
	echo "</tr></table>";
// End  start and end date section
}
elseif($part)
	echo "<p>No machines scheduled using this part.</p>";
else{
?>
<?php
}
include 'includes/bottom.html';

?>