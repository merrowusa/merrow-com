<?php

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

function print_assoc_results($array, $title='', $headingreplace='', $idarray='', $extracols='')
{

	if($title)
		echo "<h2>$title</h2>";

	echo "<table class=\"fullwidth\">";

	echo "<tr class=\"head\">\n";
	foreach (array_keys($array[0]) as $col) {
		if(isset($headingreplace[$col]))
			$col = $headingreplace[$col];
		echo "<td>". ucwords($col) ."</td>\n";
	}
	
	if($extracols)
	{
		foreach(array_keys($extracols) as $col){
			echo "<td>". ucwords($col) ."</td>\n";
		}
	}
	
	echo "</tr>\n";

	$i = 0;
	foreach ($array as $row) {
	 	unset($id);
	 	unset($ids);
	 	if($idarray)
	 	{
	 		foreach($idarray as $field)
		 		$ids[] = $row[$field];
		 	$id = implode("|", $ids);
		 }
		$class = ($i++ % 2 == 0)?'even':'odd';
		echo "<tr class=\"$class\"". ($id?" id=\"$id\"":"") .">\n";
		foreach ($row as $value) {
			echo "<td>$value</td>\n";
		}
		
		if($extracols)
		{
			foreach($extracols as $format)
			{
				echo "<td>";
				echo parseformat($format, $row, $id);
				echo "</td>\n";
			}
		}
		
		echo "</tr>\n";
	}

	echo "</table>\n";
}

function parseformat($format, $row, $id)
{

	$format = str_replace("%ideq%", "id=$id", $format);
	$format = str_replace("%id%", $id, $format);
	foreach(array_keys($row) as $field)
	{
		$format = str_replace("%{$field}eq%", "$field=".$row[$field], $format);
		$format = str_replace("%field%", $field, $format);
	}
	
	return $format;

}

function printPartReport($db, $machine, $date, $part, $parts)
{
	if($parts=='')
	{
		unset($parts);
	}
	
	if(isset($parts))
	{
		$parts = getBOMforStock($db, $machine['msmcID'], $machine['quantity'], $parts);
	}else
	{
		$parts = getBOMforStock($db, $machine['msmcID'], $machine['quantity']);
	}

	// Color coding
	if($parts['stock'][$part]<0){
		$status="warn";
	}else if($parts['stock'][$part]>0){
		$status="good";
	}else if(isset($parts['stock'][$part]) && $parts['stock'][$part]==0){
		$status="normal";
	}else{
		// Part not needed yet
		$stock = "--";
		$status = "good";
	}
	
	echo <<<END
	<tr class="$status">
		<td>{$machine['msmcID']}</td>
		<td>{$machine['date']}</td>
		<td>{$machine['quantity']}</td>
END;
	echo  "<td>". ($parts['purchase'][$part]-$runningtotal['purchase']) ."</td>" .
		  "<td>". ($parts['bom'][$part]-$runningtotal['bom']) ."</td>" .
		  "<td>". ($stock?$stock:$parts['stock'][$part]) ."</td>".
	"</tr>";
	
	return $parts;
	
}

function getAccumulationReport($part, $parts, $info)
{
	//print_ar($info);

	$part = strtolower($part);
	$fields = array( $part, (isset($parts['purchase'][$part])?$parts['purchase'][$part]:(isset($parts['work'][$part])?$parts['work'][$part]." (to build)":0)), ($parts['bom'][$part]?$parts['bom'][$part]:0), (isset($parts['beforestock'][$part])?$parts['beforestock'][$part]:(isset($info['stockonhand'])?$info['stockonhand']:"--")), ($parts['machine'][$part]?$parts['machine'][$part]:0), ($parts['spare'][$part]?$parts['spare'][$part]:0));
	$return = "\t<td>". $info['assembly'] ."</td>\n";
	foreach($fields as $field)
		$return .= "\t<td>$field</td>\n";
	return $return;
}


?>