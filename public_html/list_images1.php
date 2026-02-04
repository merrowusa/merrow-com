
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
  SELECT distinct Cat3
  FROM MGSdata_thread
  
  where
`manufacturer` = 'SULKY'
and `Cat3` NOT LIKE 'AMISS'
and `Cat3` NOT LIKE 'AMISS Variegated'
and `Cat3` != ''

  order by `Cat3`;
  
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
<? $COLOR_SAMPLE = $COLOR['Cat3']; ?>
<div class="HUE_image_set">
<div class="HUE_subhead">
COLOR = <? echo $COLOR['Cat3']  ?>
</div>

 
 <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT `ID`,`image_ref`,`hue_number`,`image_palette`,`Cat3`,`Cat1`,`image_category`,`image_mosaic`,`color_map`,`color_type`,`image_productpage`,`image_thumbnail`,`manufacturer`,`sku`,`group`,`spool_size`
from MGSdata_thread

where `Cat3` = '$COLOR_SAMPLE'

and `manufacturer` = 'SULKY'
and `Cat3` NOT LIKE 'AMISS'
and `Cat3` != ''

  group by `image_ref`
order by `hue_number`
 ")
or die(mysql_error());


 
   while($juju = mysql_fetch_array( $result )) { 
    $msmc = $juju['image_palette'];
    $url = $juju['ID'];
 
?>
                <div class="HUE_item1"><a href="http://swi9flu.com/www/index.php/?c=tables&m=edit&table_name=MGSdata_thread&id=<? echo $url; ?>"> <img src="<? echo $msmc; ?>"  /><target="new"></a><div class="HUE_liltext"><? echo $juju['image_ref']; ?><br /><? echo $juju['manufacturer']; ?> <? echo $juju['sku']; ?><br />GROUP:  <? echo $juju['group']; ?> <br/>SPOOL:  <? echo $juju['spool_size']; ?><br />
                
                <? if ( $juju['hue_number'] == '' ) 
                {  ?>
            <div class="HUE_NONE">       <strong> HUE: NONE </div></strong> 
                 <? } else { ?> 
                 <strong>HUE: 
                 <? echo $juju['hue_number']; ?>
                  </strong> 
                  <? } ?>
                   </div>
                </div>
                <? }  ?>
                
 </div>

<!-- ______________________________________________________________________________
#######################################################################
______________________________________________________________________________ -->

<? } ?>





