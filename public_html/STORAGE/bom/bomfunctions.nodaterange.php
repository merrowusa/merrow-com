<?php

function getBOMforStock($db, $assemblyID, $numparts, $parts=array('stock'=>array(), 'used'=>array(), 'purchase'=>array(), 'work'=>array(), 'bom'=>array()))
{  

  $assemblyID = strtolower($assemblyID);


  //DEBUG  echo "<p>$numparts  of  $assemblyID</p>";
  //DEBUG  print_ar($parts);

  //  Check if part has been used in parent assembly, and set current stock if it hasn't
  if(!array_key_exists($assemblyID,$parts['stock']))
  {
    $stockquery = $db->select("SELECT stock FROM Part WHERE msmcID='$assemblyID'");
    if($stockquery){
      $stockrow = mysql_fetch_array($stockquery);
      $stock=$stockrow[0];
      $parts['stock'][$assemblyID] = $stock;
    }
    else
      echo $db->last_error;
  }

  //  Remove the needed quantity from the stock
  $parts['stock'][$assemblyID] -= $numparts;
  $parts['bom'][$assemblyID] += $numparts;
     
  // Assembly has sufficient stock, so return list of parts
  if ($parts['stock'][$assemblyID]>=0)
  {
    //DEBUG    echo $assemblyID . " is in stock.  Use $numparts of ". $parts['stock'][$assemblyID]+$numparts .".";
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
      //DEBUG      echo $assemblyID ." must be purchased.";
      $parts['purchase'][$assemblyID] += $numparts;
      return $parts;
    }
    else
    {
      //DEBUG      echo $assemblyID . " can be made.";
      //  Parts list exists, so put in a work order
      $parts['work'][$assemblyID] += $numparts;
      while($part=$db->get_row($bomquery))
	$parts = getBOMforStock($db, $part['partID'], $part['quantity']*$numparts, $parts);
      return $parts;
    }
  }
}

function getBOM($db, $assemblyID, $numparts, $parts=array())
{
  
  $assemblyID = strtolower($assemblyID);
  
  //DEBUG  echo "<p>$numparts  of  $assemblyID</p>";
  //DEBUG  print_ar($parts);
  //  Check if part has been used in parent assembly, and set current stock if it hasn't
  if(!array_key_exists($assemblyID,$parts))
  {
    $stockquery = $db->select("SELECT stock FROM Part WHERE msmcID='$assemblyID'");
    if($stockquery){
      $stockrow = mysql_fetch_array($stockquery);
      $stock=$stockrow[0];
      $parts[$assemblyID]['stockonhand'] = $stock;
    }
    else
      echo $db->last_error;
  }

  //  Remove the needed quantity from the stock
  $parts[$assemblyID]['qtyneededtotal'] += $numparts;
     
  //  Get the parts list for the assembly, with stock for each of the subassemblies/parts
  $bomquery = $db->select("SELECT partID, quantity, stock FROM (SELECT msmcID partID, stock FROM Part) P NATURAL JOIN (SELECT partID, quantity from Assembly WHERE assemblyID = '$assemblyID') A");
  if(!$bomquery) echo "<p>$db->last_error</p>";

  //  Parts list is empty, so part must be purchased.  
  if(mysql_num_rows($bomquery)==0){
    //DEBUG      echo $assemblyID ." must be purchased.";
    return $parts;
  }
  else
  {
    //DEBUG      echo $assemblyID . " can be made.";
    //  Parts list exists, so put in a work order
    while($part=$db->get_row($bomquery))
      $parts = getBOM($db, strtolower($part['partID']), $part['quantity']*$numparts, $parts);
    return $parts;
  }
}

function print_ar($array)
{
  echo "<pre>\n";
  print_r($array);
  echo "</pre>\n";
}

function print_table_from_array($array, $headings, $title)
{
  echo "<div class=\"tab\">\n";
  echo "<h2>$title</h2>\n";
  if(!is_array($headings['values'])){
    $notarray = true;
    echo "<table>
    <tr>
      <td>". $headings['key'] ."</td>
      <td>". $headings['values'] ."</td>
    </tr>
    ";
  }
  else
  {
    $notarray = false;
    echo "<table>
    <tr>
       <td>". $headings['key'] ."</td>\n";
    foreach($headings['values'] as $heading)
      echo "<td>$heading</td>\n";
    echo "</tr>\n";
  }
  if($notarray){
    foreach($array as $key => $value)
      echo <<<END
      <tr>
        <td>$key</td>
        <td>$value</td>
      </tr>
END;
  }
  else
  {
    foreach($array as $key => $value)
    {
      echo "<tr><td>$key</td>";
      foreach($value as $val)
	echo "<td>$val</td>";
      echo "</tr>\n";
    }
  }
  echo "</table>";
  echo "</div>\n";
}

function getMachinesUsing($db, $part, $list=array())
{
	$part=strtolower($part);

	$query = "SELECT DISTINCT assemblyID FROM Assembly WHERE partID = '$part'";
	$results = $db->select($query);
	if(mysql_num_rows($results)==0)
		return $list;
	else{
		while(list($x) = mysql_fetch_array($results))
		{
			$list = getMachinesUsing($db, $x, $list);
			$list[] = strtolower($x);
		}
		
		return array_unique($list);
	}	
}

function getSchedules($db, $array)
{
	if (!count($array)) return false;
	$query = "SELECT * FROM Outgoing WHERE";
	foreach($array as $id)
		$query .= ($id==$array[0]?"":" OR") . " msmcID='$id'";
	$r = $db->select($query);
	if($r)
		while($x = mysql_fetch_array($r)) $ret[] = $x;
	else
		echo "<p>$db->last_error</p>";
	return $ret;
}
?>