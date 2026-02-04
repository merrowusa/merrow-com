<?php
/***************************************************************************
								microtime.inc
							---------------------
			created				: 30.12.2002
			edited				: -
			copyright			: (C) 2002 Support-Logic
			email				: hendrik@support-logic.com

			based on coding standards: codingstandards.htm, v1.0 27.12.2002 
		
***************************************************************************/

// functions needed to calculate the execution start- & end-time

// return current microtime
function start_microtime()
{
	list($microseconds, $seconds) = explode(" ",microtime());
	return ((float)$microseconds + (float)$seconds);
}

// return current microtime substracted by argument start time and round it to 2 digits after the "."
function end_microtime($start_time = 0)
{
	if ($start_time <= 0)
	{
		return 0;
	}
	else 
	{
		$end_time = start_microtime()-$start_time;
		return round($end_time,2);
	}
}
?>