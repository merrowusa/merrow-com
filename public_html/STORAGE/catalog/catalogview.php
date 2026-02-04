<?php

include ('dbclass.php');

$j=0;

function &makeCatalog($db, $array, $parent, $i){

	global $j;
	
	$i++;

	echo str_repeat("|\t",$i-1)."+----->{$parent['id']}:{$parent['name']}"."\n";
	
	$query="SELECT categoryid, categoryname, parentid FROM catalog WHERE parentid = {$parent['id']}";
	
	$childquery = $db->select($query);
	
	if($childquery){
		
		//$children= array();
		
		while($row = mysql_fetch_array($childquery))
		{
//			echo "child: {$row[0]}<br/>";
			$child =   array('id'=>$row[0], 'name'=>$row[1], 'parent'=>&$parent);
//			$array[] = &$child;
			makeCatalog($db, &$array, $child, $i);
//			return $array;
//			echo "<pre>";
//			print_r($children);
//			echo "</pre>";
		}
/*		if($children)
		{
			foreach($children as $child){
				echo "Recur: {$child['id']}<br />";
				if($j++ < 350)
					return makeCatalog($db, &$array, &$child, $i++);
			}
		}
		else return $array;
*/
	}
//	else return $array;
}

$db = new db_class();

if(!$db->connect())
{
  echo "Crap";
  echo "<br />". $db->last_error;
  exit();
}

$array = array();

$query = "SELECT categoryid, categoryname, parentid FROM catalog WHERE parentid IS NULL";

$rootquery = $db->select($query);

if($rootquery)
{
	$rootrow = mysql_fetch_array($rootquery);
	$array[0]= array('id'=>$rootrow[0],'name'=>$rootrow[1],'parent'=>null);
}

echo "<pre>";

makeCatalog($db, $array, &$array[0],0);

//print_r($array);
echo "</pre>";

?>