
<?php

// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowso_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowso_hydedata") or die(mysql_error());

?>
<head>
<link rel="stylesheet" href="http://merrowservices.s3.amazonaws.com/css/services_cleanup.css" type="text/css" charset="utf-8">
</head>



<?php
$sql="
  SELECT distinct color_group
  FROM MGSdata_thread
  order by `color_group`;
  
  ";
$result1 = mysql_query($sql)
  or die("Failed Query : ".mysql_error() . $sql);  //do the query

while ($ROW = mysql_fetch_array($result1,MYSQL_ASSOC)) {
  $COLORS[] = $ROW;
}
?>


<? foreach ($COLORS as $COLOR) { ?>

<!-- ______________________________________________________________________________
#######################################################################
______________________________________________________________________________ -->
<? $COLOR_SAMPLE = $COLOR['color_group']; ?>
<div class="HUE_image_set">
<div class="HUE_subhead">
COLOR = <? echo $COLOR['color_group']  ?>
</div>

 
 <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT `ID`,`image_ref`,`hue_number`,`image_palette`,`image_category`
from MGSdata_thread

where `color_group` = '$COLOR_SAMPLE'
 
order by `hue_number` ")
or die(mysql_error());


 
   while($juju = mysql_fetch_array( $result )) { 
    $msmc = $juju['image_category'];
    $url = $juju['ID'];
 
?>
                <div class="HUE_item1">
                <a href="http://swi9flu.com/www/index.php/?c=tables&m=edit&table_name=MGSdata_thread&id=<? echo $url; ?>"><img src="<? echo $msmc; ?>"</></a>
                </div>
                <? }  ?>
                
 </div>

<!-- ______________________________________________________________________________
#######################################################################
______________________________________________________________________________ -->

<? } ?>





