<?php

function getMonthSelect($name='', $size='', $multiple='', $disabled='')
{
	$months = array(
				'01'=>'January', 
				'02'=>'February',
				'03'=>'March',
				'04'=>'April',
				'05'=>'May',
				'06'=>'June',
				'07'=>'July',
				'08'=>'August',
				'09'=>'September',
				'10'=>'October',
				'11'=>'November',
				'12'=>'December'
				);
	
	return getSelect($months, $name, $size, $multiple, $disabled);
}

function printMonthSelect($name='', $size='', $multiple='', $disabled='')
{
	echo getMonthSelect($name, $size, $multiple, $disabled);
}

function getDaySelect($name='', $size='', $multiple='', $disabled='')
{
	$day['01']=1;
	for($d=1; $d++<31;){$day[($d<10?"0$d":$d)] = $d;}
	return getSelect($day, $name, $size, $multiple, $disabled);
}

function getSelect($array, $name='', $size='', $multiple='', $disabled='')
{
	$retstring="<select";
	if($name)
		$retstring .= " name=\"$name\"";
	if($size)
		$retstring .= " size=\"$size\"";
	if($multiple)
		$retstring .= " multiple=\"$multiple\"";
	if($disabled)
		$retstring .= " disabled=\"$disabled\"";
	$retstring .= ">\n";
	$months = array(
				'01'=>'January', 
				'02'=>'February',
				'03'=>'March',
				'04'=>'April',
				'05'=>'May',
				'06'=>'June',
				'07'=>'July',
				'08'=>'August',
				'09'=>'September',
				'10'=>'October',
				'11'=>'November',
				'12'=>'December'
				);
			
	foreach($array as $value => $text)
		$retstring .= "\t<option value=\"$value\">$text</option>\n";
	
	$retstring .= "</select>\n";
	
	return $retstring;
}

function printSelect($array, $name='', $size='', $multiple='', $disabled='')
{
	echo getSelect($array, $name, $size, $multiple, $disabled);
}

function getTextBox($name='', $size='', $maxlength='', $disabled='')
{
	$retstring="<input type=\"text\"";
	if($name)
		$retstring .= " name=\"$name\" id=\"$name\"";
	if($size)
		$retstring .= " size=\"$size\"";
	if($maxlength)
		$retstring .= " multiple=\"$maxlength\"";
	if($disabled)
		$retstring .= " disabled=\"$disabled\"";
	$retstring .= " />";
	
	return $retstring;
}

?>