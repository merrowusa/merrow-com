<?php

function getExtreme($db, $table, $field, $min)
{
	if($min)
		$F = "MIN";
	else
		$F = "MAX";

	$query = "SELECT $F($field) from $table";
	return $db->select_one($query);

}

function getPeriod($db, $start, $end)
{
	$query = "SELECT DATEDIFF('$end', '$start')";
	$period = $db->select_one($query);
	$weeks = $period/7;
	return $weeks . " week" . ($weeks==1?"":"s");
}

function date_add($db, $date, $increment)
{
	$query = "SELECT '$date' + INTERVAL $increment DAY";
	return $db->select_one($query);
}

function date_diff($db, $end, $start)
{
	$query = "SELECT DATEDIFF('$end', '$start')";
	return $db->select_one($query);
}

function dateCompare($db, $ls, $rs)
{
	$days = date_diff($db, $rs, $ls);
	if($days > 0)
		return 1;
	elseif($days < 0)
		return -1;
	else return 0;
}

function getSQLDate($year, $month, $day)
{

	$thirty = array('09', '04', '06', 11);
	
	if($day < 10 && $day[0] != '0') $day = "0$day";
	if($month < 10 && $month[0] != '0') $month = "0$month";

	if(($year < 1000 && $year > 100) || $year < 0)
	{
		error_log("Invalid year '$year' in getSQLDate.");
		return false;
	}
	else if($month < 1 || $month > 12)
	{
		error_log("Invalid month '$month' in getSQLDate.");
		return false;
	}
	else if(($day < 1 || $day > 31) || ($day > 30 && in_array($month, $thirty)) || ($day > 29 && $month==2))
	{
		error_log("Invalid day '$day' or month/day combination '$month/$day' in getSQLDate.");
		return false;
	}
	
	return ($year ."-". $month ."-". $day);
}

function thisFriday($db, $date)
{
	$query = "SELECT DATE_FORMAT('$date', '%w')";
	$day = $db->select_one($query);
	
	if($day==5)
		return $date;
	else if($day < 5)
	{
		$add = 5-$day;
		$query = "SELECT '$date' + INTERVAL $add DAY";
		return $db->select_one($query);
	}
	else
	{
		$query = "SELECT '$date' + INTERVAL 6 DAY";
		return $db->select_one($query);
	}
}

function nextFriday($db, $date)
{
	$query = "SELECT '$date' + INTERVAL 7 DAY";
	return thisFriday($db, $db->select_one($query));
}

function mysql_fetch_results($db, $result, $artype='array')
{
	if($artype == 'array')
	{
		while($x = mysql_fetch_array($result)) $ret[] = $x;
		return $ret;
	}
	
	if($artype == 'assoc')
	{
		while($x = mysql_fetch_assoc($result)) $ret[] = $x;
		return $ret;
	}
		
}

?>