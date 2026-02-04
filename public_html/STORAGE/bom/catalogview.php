<?php

inlcude "dbclass.php"

function makeCatalog($db, &$array, &$parent){

	echo $parent->'id'."<br />\n";

	$query="SELECT categoryid, categoryname, parentid FROM catalog WHERE parentid = {$array->'id'}";
	
	$childquery = $db->select($query);
	
	if($childquery){
		
		while($row = mysql_fetch_array($childquery))
		{
			$child=array('id'->$row[0], 'name'->$row[1], 'parent'->&$parent);
			$children[]=&$child;
			$array[]=&$child;
		}
		foreach($children as $child){
			$array=makeCatalog($db, &$array, &$child);
		}
	}
	else return $array;
}

$db = new db_class();

if(!$db->connect())
{
  echo "Crap";
  exit();
}

$array = new array();

$query = "SELECT categoryid, categoryname, parentid FROM catalog WHERE parentid IS NULL";

$rootquery = $db->select($query);

if($rootquery)
{
	$rootrow = mysql_fetch_array($rootquery);
	$array[0]= array('id'->rootrow[0],'name'->rootrow[1],'parent'->null);
}

$array = makeCatalog($db, $array, &$array[0]);

?>