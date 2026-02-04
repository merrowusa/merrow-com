<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   	<!--all of this javascript appears necessary to drive movies and drawers -->	
<head>	
<link rel="stylesheet" href="http://css.imerrow.com/css_major/added_parts.css" type="text/css" charset="utf-8">
<link href="http://css.imerrow.com/css_major/menu.css" rel="stylesheet" type="text/css" />
<link href="http://css.imerrow.com/css_major/thickbox.css" rel="stylesheet" type="text/css" />

<!--[if IE 7]>

<style>



</style>

<![endif]-->



</head>

 <?php 
// for example: thispage.php?word=abracadabra 

$val = $_GET['keyword']; 
$munt = $_GET['mediakeyword']; 


?>
<?


$munt = $_GET['mediakeyword']; 


// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM asin WHERE media_keyword='$munt'")
or die(mysql_error());
?>


<?
// then define juju as the result array
 $juju = mysql_fetch_array($result); 
 $setnumber = $juju['media_setnumber'];
 $railname = $juju['msmc_id'];


?>

<?php 

$rail = $_GET['rail'];


if ($rail=='yes') {

include('widget_sub_railmenu.php'); } else {

include('widget_sub_machinemenu.php'); }

?>

<script src="http://merrow.com/cephei/scripts/jquery.js" type="text/javascript" language="javascript"> </script>
<script src="http://merrow.com/cephei/scripts/thickbox.js" type="text/javascript" language="javascript"> </script>


<script>
var RecaptchaOptions = {
   theme : 'white',
   tabindex : 2
};
</script>


<? $mature = $_GET['mature'];
$countryvalue = $_POST['country']; ?>

<div class="theformwhole">
 

 
 <form action="widget_sub_datamover.php" method="post">
<input name="party_id" type="hidden" value="<? echo $agents['party_id']; ?>" />
<input name="production_country" type="hidden" value="<? echo $countryvalue; ?>" />

<? // Get all the data from the "asin" table which is where our product info is kept
$result1 = mysql_query("SELECT * FROM rail_options WHERE rail_model='$railname'")
or die(mysql_error());

$num_rows1 = mysql_num_rows($result1); 
// Get all the data from the "asin" table which is where our product info is kept
$result2 = mysql_query("SELECT * FROM rails WHERE rail_model='$railname'")
or die(mysql_error());

$num_rows2 = mysql_num_rows($result2); 
// Display the results 

$num_rows = $num_rows1 + $num_rows2 + '1';

$counter = $num_rows1 + '1';
$counter2 = '1';

?>
<script>
function UpdateCost() {
  var sum = 0;
  var gn, elem;
  for (i=1; i<<? echo $num_rows;?>; i++) {
    gn = 'game'+i;
    elem = document.getElementById(gn);
    if (elem.checked == true) { sum += Number(elem.value); }
  }
  
  document.getElementById('totalcost').value = sum.toFixed(2);
}

function checkUncheckAll(checkAllState, cbGroup)
{
	// Check that the group has more than one element
	if(cbGroup.length > 0)
	{
		// Loop through the array
		for (i = 0; i < cbGroup.length; i++)
		{
			cbGroup[i].checked = checkAllState.checked;
		}
	}
	else
	{
		// Single element so not an array
		cbGroup.checked = checkAllState.checked;
	}
}
</script>

<div class="clear"> <input type=checkbox name=checkall onclick="checkUncheckAll(this, wackytobaky);">Select (unslect) All </div>


<div class="rail_options"><strong> Optional Choices<br /></strong><?
// then define juju as the result array
while($mojo = mysql_fetch_array($result1))
 { ?>
<div class="rail_words">

<input type="checkbox" name="wackytobaky" id='game<? echo $counter2++;?>' value="<? echo $mojo['price']; ?>"  onclick="UpdateCost()"><a href="widget_sub_railinfo.php?height=220&width=400&global=<? echo $mojo['global']; ?>" class="thickbox" title="<? echo $mojo['option']; ?>"><? echo $mojo['option']; ?></a> <br>
</div>

<? } ?>
</div>



<div class="rail_length"><strong> Rail Length<br /><br /></strong>

<?
// then define juju as the result array
$game_number = $moZo['id'];
while($moZo = mysql_fetch_array($result2))


 { ?>
 
 

<label><input type="checkbox" id='game<? echo $counter++;?>' value="<? echo $moZo['price']; ?>"  onclick="UpdateCost()"><a class="handsome"><? echo $moZo['length']; ?></a> </label><br>


<? } ?>
</div>




<div class="money"> Estimated rail cost...</div>  <input type="text" id="totalcost" value="">


</form>

    
    


</div>
  
    
  
</div>
</div>
</div>
