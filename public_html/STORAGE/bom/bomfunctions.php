<?php

function getBOMforStock($db, $assemblyID, $numparts, $parts=array('stock'=>array(), 'used'=>array(), 'purchase'=>array(), 'work'=>array(), 'bom'=>array()), $bucket='machine')
{  
	/*	Gets bill of materials for a part, dependent on stock.
	 *  Returns a list of all parts used with quantities needed,
	 *  what needs to be purchased,
	 *  what needs to be ordered, and
	 *  the stock of the parts used before and after they're built
	 */


  if($parts=='') $parts=array('stock'=>array(), 'used'=>array(), 'purchase'=>array(), 'work'=>array(), 'bom'=>array());
  $assemblyID = strtolower($assemblyID);
  if(!$parts[$bucket]) $parts[$bucket] = array();


  //  Check if part has been used in parent assembly, and set current stock if it hasn't
  if(!array_key_exists($assemblyID,$parts['stock']))
  {
    $stockquery = $db->select("SELECT stock FROM Part WHERE msmcID='$assemblyID'");
    if($stockquery){
      $stockrow = mysql_fetch_array($stockquery);
      $stock=$stockrow[0];
      $parts['stock'][$assemblyID] = $stock;
      $parts['beforestock'][$assemblyID] = $stock;
    }
    else
      echo $db->last_error;
  }

  //  Remove the needed quantity from the stock
  $parts['stock'][$assemblyID] -= $numparts;
  $parts['bom'][$assemblyID] += $numparts;
  $parts[$bucket][$assemblyID] += $numparts;
     
  // Assembly has sufficient stock, so return list of parts
  if ($parts['stock'][$assemblyID]>=0)
  {
    //  Track what you'll use of the remaining inventory
    $parts['used'][$assemblyID] += $numparts;
    return $parts;
  }
  else
  {
    /* Assembly stock is insufficient, so look at parts list.
     * If empty parts list, then add assembly to purchase list
     * If parts list, then subtract the stock of the assembly
     */
    
    //  What you're using from inventory
    if(($parts['stock'][$assemblyID] + $numparts)>0)
    {
      $remaining = $parts['stock'][$assemblyID] + $numparts;
      $parts['used'][$assemblyID] += $remaining;
      // New number of parts needed is the total number of parts needed - stock if stock < 0
      $numparts -= $remaining;
    }
 
    //  Get the parts list for the assembly, with stock for each of the subassemblies/parts
    $bomquery = $db->select("SELECT A.partID, quantity, stock FROM (SELECT msmcID partID, stock FROM Part) P NATURAL JOIN (SELECT partID, quantity from Assembly WHERE assemblyID = '$assemblyID') A");
    if(!$bomquery) echo "<p>$db->last_error</p>";

    //  Parts list is empty, so part must be purchased.  
    if(mysql_num_rows($bomquery)==0){
      $parts['purchase'][$assemblyID] += $numparts;
      return $parts;
    }
    else
    {
      //  Parts list exists, so put in a work order
      $parts['work'][$assemblyID] += $numparts;
      while($part=$db->get_row($bomquery))
		$parts = getBOMforStock($db, $part['partID'], $part['quantity']*$numparts, $parts, $bucket);
      return $parts;
    }
  }
}


function getBOM($db, $assemblyID, $numparts=1, $parts=array(), $parent='Primary Part')
{
  /*
   *	Gets full BOM, regardless of stock
   */
   
  $assemblyID = strtolower($assemblyID);
  
  //  Check if part has been used in parent assembly, and set current stock if it hasn't
  if(!array_key_exists($assemblyID,$parts))
  {
	//  Record parent
	$parts[$assemblyID]['assembly'] = $parent;

    $stockquery = $db->select("SELECT stock FROM Part WHERE msmcID='$assemblyID'");
    if($stockquery){
      $stockrow = mysql_fetch_array($stockquery);
      $stock=$stockrow[0];
      $parts[$assemblyID]['stockonhand'] = $stock;
    }
    else
      echo $db->last_error;
  }
  else
  {
  	$parts[$assemblyID]['assembly'] .= ", $parent";
  }

  //  Remove the needed quantity from the stock
  $parts[$assemblyID]['qtyneededtotal'] += $numparts;
  
     
  //  Get the parts list for the assembly, with stock for each of the subassemblies/parts
  $bomquery = $db->select("SELECT A.partID, quantity, stock FROM (SELECT msmcID partID, stock FROM Part) P NATURAL JOIN (SELECT partID, quantity from Assembly WHERE assemblyID = '$assemblyID') A");
  if(!$bomquery) echo "<p>$db->last_error</p>";

  //  Parts list is empty, so part must be purchased.  
  if(mysql_num_rows($bomquery)==0){
    return $parts;
  }
  else
  {
    //  Parts list exists, so put in a work order
    while($part=$db->get_row($bomquery))
      $parts = getBOM($db, strtolower($part['partID']), $part['quantity']*$numparts, $parts, $assemblyID);
    return $parts;
  }
}



function getAssembliesUsing($db, $part, $list=array())
{
	$part=strtolower($part);

	$query = "SELECT DISTINCT assemblyID FROM Assembly WHERE partID = '$part'";
	$results = $db->select($query);
	if(mysql_num_rows($results)==0)
		return $list;
	else{
		while(list($x) = mysql_fetch_array($results))
		{
			$list = getAssembliesUsing($db, $x, $list);
			$list[] = strtolower($x);
		}
		
		return array_unique($list);
	}	
}

function getAssembliesUsingWithStock($db, $part, $list=array())
{
	$part=strtolower($part);

	$query = "SELECT DISTINCT P.assemblyID, stock FROM Assembly NATURAL JOIN (SELECT msmcID assemblyID, stock from Part) P WHERE partID = '$part'";
	$results = $db->select($query);
	if(mysql_num_rows($results)==0)
		return $list;
	else{
		while(list($assembly, $stock) = mysql_fetch_array($results))
		{
			$list = getAssembliesUsingWithStock($db, $assembly, $list);
			$list[strtolower($assembly)] = array('assembly'=>$part, 'stockonhand'=>$stock);
		}
		
		return $list;
	}	
	
}

function getWeeklyOrdersUsing($db, $part)
{
	$part = strtolower($part);
	
	$superassemblies = getAssembliesUsing($db, $part);
	
	if(!count($superassemblies)) return false;
	
	$query = '';
	
	foreach($superassemblies as $assembly)
		$query .= ($assembly==$superassemblies[0]?"":" UNION ") . "SELECT msmcID, ROUND(AVG(quantity)) quantity FROM Sales WHERE msmcID='$assembly' GROUP BY msmcID";
		
	$r = $db->select($query);
	if($r)
		$ret = mysql_fetch_results($db, $r, 'assoc');
	else
	{
		echo "<p>$query</p>";
		echo "<p>$db->last_error</p>";
	}
		
	return $ret;
}

function getOutgoingSchedules($db, $array="any", $start='0000-00-00', $end='9999-12-31', $artype="array")
{
	if (!count($array)) return false;
	
	$query = '';
	
	if($array=="any"){
		$query = "SELECT * FROM Outgoing WHERE date >= '$start' AND date <= '$end' ORDER BY date ASC";
	}else{
	foreach($array as $id)
		$query .= ($id==$array[0]?"":" UNION ") . "SELECT * FROM Outgoing WHERE msmcID='$id' AND date >= '$start' AND date <= '$end'";
	}
	$r = $db->select($query);
	if($r){
		$ret = mysql_fetch_results($db, $r, $artype);
	}
	else
		echo "<p>$db->last_error</p>";
	
	return $ret;
}


function accumulateBOM($db, $part, $start, $end)
{
	// Get the list of machines that use the part
	$machines = getAssembliesUsing($db, $part);
	$machines[] = strtolower($part);
	$weeklyorders = getWeeklyOrdersUsing($db, $part);
	
	//print_ar($weeklyorders);
	
	$scheduledMachines = getOutgoingSchedules($db, $machines, $start, $end);
	
	$date   = thisFriday($db, $start);
//	echo "<p>Date: $date</p>";

	if($scheduledMachines){
		$part = strtolower($part);
		
		//print_ar($scheduledMachines);
		foreach($scheduledMachines as $machine)
		{
			echo "<p>";
			echo "$date<br />";
			echo date_diff($db, $date, thisFriday($db, $machine['date'])) . "<br />";
			echo date_diff($db, thisFriday($db, $machine['date']), $date) . "<br />";
			echo "</p>";
			$i = 0;
			//die("Date: $date, i: $i");
			while(date_diff($db, $date, thisFriday($db, $machine['date'])) <= 0)
			{
				print_ar($weeklyorders);
				if($weeklyorders)
				{
					foreach($weeklyorders as $order)
					{
						if($parts)
							$parts = getBOMforStock($db, $order['msmcID'], $order['quantity'], $parts, 'spare');
						else
							$parts = getBOMforStock($db, $order['msmcID'], $order['quantity'], '', 'spare');
					}
				}
				$date = nextFriday($db, $date);
			}
			if($parts)
				$parts = getBOMforStock($db, $machine['msmcID'], $machine['quantity'], $parts, 'machine');
			else
				$parts = getBOMforStock($db, $machine['msmcID'], $machine['quantity'], '', 'machine');
		}// end scheduled machines
		
		
		//  Now loop through the weekly orders for all the weeks or the remaining weeks
		//  (date may have been advanced in scheduled machines section
		while(dateCompare($db, $date, $end)<1)
		{
			//echo "<p>2</p>";
			if($weeklyorders)
			{
				foreach($weeklyorders as $order)
				{
					if($parts)
						$parts = getBOMforStock($db, $order['msmcID'], $order['quantity'], $parts, 'spare');
					else
						$parts = getBOMforStock($db, $order['msmcID'], $order['quantity'], '', 'spare');
				}
			}
			$date = nextFriday($db, $date);		
		}
		return $parts;
	}
	
	else return false;
}

?>