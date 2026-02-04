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
	$end   = getSQLDate($_GET['toyear'], $_GET['tomonth'], $_GET['today']);
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

include 'includes/top.html';

echo "<p><a href=\"editschedule.php\">Edit Shipment Schedule</a></p>";

include 'includes/bomform.html';

if($start && $end)
{
	//echo "<p>Start: $start<br />End: $end</p>";

	// Get Period, for kicks
	$period = getPeriod($db, $start, $end);
	
	echo "<p>BOM primary part</p>";
	// Get accumulation data
	$bom = getBOM($db, $part);
	
	echo "<p>Accumulate primary part</p>";
	
	$parts = accumulateBOM($db, $part, $start, $end);
	if(!$parts){
		echo "<p>No BOM in this range</p>";
		exit(0);
	}
	else{

		//print_ar($parts);
	
		
		$colspan = "rowspan=\"3\"";
		$tablerows= 9;
		echo <<<END
			<table>
				<tr class="head">
					<td>$period</td>
					<td $colspan>Part</td>
					<td $colspan>Order Quantity</td>
					<td $colspan>Total Need</td>
					<td $colspan>Stock</td>
					<td $colspan>Machine Need</td>
					<td $colspan>Spare Need</td>
				</tr>
				<tr class="head"><td>From $start</td></tr>
				<tr class="head"><td>To $end</td></tr>
END;
		
		
		echo "<tr class=\"b primary\">". getAccumulationReport($part, $parts, $bom[$part]) ."</tr>";			
		
		unset($bom[$part]);
		
		$assemblies = getAssembliesUsingWithStock($db, $part);
		
		$report = array('Subassemblies'=>$bom, 'Superassemblies'=>$assemblies);
		
		//print_ar($report);
		
		foreach($report as $category=>$partlist)
		{
			
			if(count($partlist)>1)
			{
				switch($category)
				{
					case "Subassemblies":
						$class="sub";
						break;
					case "Superassemblies":
						$class="super";
						break;
				}
				echo "<tr class=\"subhead $class\"><td colspan=\"$tablerows\">$category</td></tr>";
				foreach($partlist as $bompart=>$info)
				{
					if(strtolower($bompart) != strtolower($part))
					{
						$parts = accumulateBOM($db, $bompart, $start, $end);
						if($parts['purchase'][strtolower($bompart)] > 0 || $parts['work'][strtolower($bompart)]>0)
							$extraclass = "warn";
						echo "<tr class=\"". ($extraclass?$extraclass:$class) ."\">\n";
						echo getAccumulationReport($bompart, $parts, $info);
						unset($extraclass);
						echo "</tr>\n";
					}
				}
				
			}
		}
		echo "</table>";
	}	
	
	
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