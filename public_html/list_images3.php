
<?php

// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowso_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowso_hydedata") or die(mysql_error());

?>
<head>
<link rel="stylesheet" href="http://merrowservices.s3.amazonaws.com/css/services_cleanup.css" type="text/css" charset="utf-8">
<style>


div.HUE_item77 {
	float: left;
}

div.HUE_subhead77 {
	color: black;
	font: 16px verdana;
}

div.img_float {
	float: left;
}

div.block_float {
	float: left;
}



div.HUE_image_set77 {
	float: left;
	width: 1400px;
}

img {
	width: 30px;
}

div.HUE_image_set {
	padding-top: 20px;
	padding-bottom: 200px;
	
	
}

</style>
</head>



<?php
$sql="
  SELECT distinct group_title
  FROM MGSdata_thread
where
    `manufacturer` = 'YLI'
   and `group_title` != ''
   and `product_type_MGS` = 'Thread'
  order by `group_title`;
  
  ";
$result1 = mysql_query($sql)
  or die("Failed Query : ".mysql_error() . $sql);  //do the query

while ($ROW = mysql_fetch_array($result1,MYSQL_ASSOC)) {
  $COLORS[] = $ROW;
}
?>

<div class="gallery">
<? foreach ($COLORS as $COLOR) { ?>

<!-- ______________________________________________________________________________
#######################################################################
______________________________________________________________________________ -->
<? $COLOR_SAMPLE = $COLOR['group_title']; ?>
<div class="HUE_image_set77">
<div class="HUE_subhead77">
<? echo $COLOR['group_title']  ?>
</div>



 
 <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT `ID`,`image_ref`,`hue_number`,`image_large`,`image_mosaic`,`image_category`,`image_thumbnail`,`group`,`image_ref4`,`image_ref5`
from MGSdata_thread

where `group_title` = '$COLOR_SAMPLE'
AND `image_ref4` = '1'
AND `image_ref5` = '1'
 
 group by `image_mosaic`
order by `color_map`,`hue_number`
 ")
or die(mysql_error());


 
   while($juju = mysql_fetch_array( $result )) { 
    $msmc = $juju['image_mosaic'];
    $url = $juju['ID'];
 
?>






               <div class="block_float"><div class="img_float"><a href="http://swi9flu.com/www/index.php/?c=tables&m=edit&table_name=MGSdata_thread&id=<? echo $url; ?>"><img src="<? echo $msmc; ?>" width="15px"  </></a>
                </div></div>
                <? }  ?>
                
</div>

<!-- ______________________________________________________________________________
#######################################################################
______________________________________________________________________________ -->

</div>
<? } ?>


</div>


