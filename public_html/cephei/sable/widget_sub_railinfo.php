<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<?
// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());


 $global = $_GET['global'];


?>

<? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM rail_options WHERE global='$global'")
or die(mysql_error());

 $juju = mysql_fetch_array($result); 



?>


</head>

<body>

<div class="lilheadline"> What is the <? echo $juju['option']; ?>? </div>

<div class="lilanswer"><?
echo $juju['whatisit']; 
?>
</div>

<div class="lilheadline"> Why should I buy it?</div>
<div class="lilanswer">
<? echo $juju['whybuy']; ?>

</div>
<div class="lilheadline"> What does it cost?</div>
<div class="lilanswer">
US <? echo $juju['price']; ?>.00

</div>
</body>
</html>
