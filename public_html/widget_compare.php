<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<style type="text/css" media="all"> @import "http://css.imerrow.com/css_major/c_grid_960.css";</style>

</head>
<? $ap = $_GET['app']; ?>
<? include 'widget_sql.php' ?>

<div class="compare_grid">
<div class="c_grid_3" id="column_labels">

</div>


<? $result = mysql_query("SELECT `d_key`, `app_right_title` FROM application_pages WHERE app_key='$ap' AND `d_key` != 'MASTER' AND `publish`='yes' ORDER BY  `layout_order`")
	or die(mysql_error());
	$i=0;
	while($nate = mysql_fetch_array( $result )) { 
	foreach($nate AS $key => $value) { $nate[$key] = stripslashes($value);
	} 
	?>
	<div class="c_grid_3" id="columns">
	
	<a href="http://merrow-media.s3.amazonaws.com/applications/<? echo  $nate['d_key']; ?>_stitch_highres1.jpg"  rel="prettyPhoto[pp_gal_<? echo $nate['d_key']; ?>]" title="<? echo $nate['app_right_title']; ?>"><img src="http://merrow-media.s3.amazonaws.com/applications/<? echo  $nate['d_key']; ?>_stitch_260x170.png" width="130" height="85" /></a>
	
	</div>
<? } ?>

<div class="clear"></div>

<div class="c_grid_3" id="column_labels">

</div>

<? $result = mysql_query("SELECT `app_nav_title`, `d_key`, `app_right_title` FROM application_pages WHERE app_key='$ap' AND `d_key` != 'MASTER' AND `publish`='yes' ORDER BY  `layout_order`")
	or die(mysql_error());
	$i=0;
	while($nate = mysql_fetch_array( $result )) { 
	foreach($nate AS $key => $value) { $nate[$key] = stripslashes($value);
	} 
	?>
	<div class="c_grid_3" id="columns">
	
	<a href="http://merrow-media.s3.amazonaws.com/applications/<? echo  $nate['d_key']; ?>_stitch_highres1.jpg"  rel="prettyPhoto[pp_gal_<? echo $nate['d_key']; ?>]" title="<? echo $nate['app_right_title']; ?>"><? echo  $nate['app_nav_title']; ?></a>
	
	</div>
<? } ?>

<div class="clear"></div>
<div class="c_grid_3" id="column_labels">
Description
</div>

<? $result = mysql_query("SELECT `seo_description` FROM application_pages WHERE app_key='$ap' AND `d_key` != 'MASTER' AND `publish`='yes' ORDER BY  `layout_order`")
	or die(mysql_error());
	$i=0;
	while($nate = mysql_fetch_array( $result )) { 
	foreach($nate AS $key => $value) { $nate[$key] = stripslashes($value);
	} 
	?>
	<div class="c_grid_3" id="columns_text">
	
	<? echo  $nate['seo_description']; ?>
	
	</div>
<? } ?>

<div class="clear"></div>
<div class="c_grid_3" id="column_labels">
Stitch Width
</div> 
<? $result = mysql_query("SELECT `stitch_width` FROM application_pages WHERE app_key='$ap' AND `d_key` != 'MASTER' AND `publish`='yes' ORDER BY  `layout_order`")
	or die(mysql_error()); $i=0; while($nate = mysql_fetch_array( $result )) { foreach($nate AS $key => $value) { $nate[$key] = stripslashes($value);} ?> 
	<div class="c_grid_3" id="columns">
	<? echo  $nate['stitch_width']; ?>
	</div> 
	<? } ?>
<div class="clear"></div>
<div class="c_grid_3" id="column_labels">
Speed
</div> 
<? $result = mysql_query("SELECT `machine_speed` FROM application_pages WHERE app_key='$ap' AND `d_key` != 'MASTER' AND `publish`='yes' ORDER BY  `layout_order`")
	or die(mysql_error()); $i=0; while($nate = mysql_fetch_array( $result )) { foreach($nate AS $key => $value) { $nate[$key] = stripslashes($value);} ?> 
	<div class="c_grid_3" id="columns">
	<? echo  $nate['machine_speed']; ?>
	</div> 
	<? } ?>
<div class="clear"></div>
<div class="c_grid_3" id="column_labels">
Fabric
</div> 
<? $result = mysql_query("SELECT `fabric_material` FROM application_pages WHERE app_key='$ap' AND `d_key` != 'MASTER' AND `publish`='yes' ORDER BY  `layout_order`")
	or die(mysql_error()); $i=0; while($nate = mysql_fetch_array( $result )) { foreach($nate AS $key => $value) { $nate[$key] = stripslashes($value);} ?> 
	<div class="c_grid_3" id="columns">
	<? echo  $nate['fabric_material']; ?>
	</div> 
	<? } ?>
<div class="clear"></div>
<div class="c_grid_3" id="column_labels">
Threads
</div> 
<? $result = mysql_query("SELECT `thread_number` FROM application_pages WHERE app_key='$ap' AND `d_key` != 'MASTER' AND `publish`='yes' ORDER BY  `layout_order`")
	or die(mysql_error()); $i=0; while($nate = mysql_fetch_array( $result )) { foreach($nate AS $key => $value) { $nate[$key] = stripslashes($value);} ?> 
	<div class="c_grid_3" id="columns">
	<? echo  $nate['thread_number']; ?>
	</div> 
	<? } ?>
<div class="clear"></div>
<div class="c_grid_3" id="column_labels">
Machine Style
</div> 
<? $result = mysql_query("SELECT `machine_model` FROM application_pages WHERE app_key='$ap' AND `d_key` != 'MASTER' AND `publish`='yes' ORDER BY  `layout_order`")
	or die(mysql_error()); $i=0; while($nate = mysql_fetch_array( $result )) { foreach($nate AS $key => $value) { $nate[$key] = stripslashes($value);} ?> 
	<div class="c_grid_3" id="columns">
	<? echo  $nate['machine_model']; ?>
	</div> 
	<? } ?>
<div class="clear"></div>
<div class="c_grid_3" id="column_labels">
Price
</div> 
<? $result = mysql_query("SELECT `machine_price` FROM application_pages WHERE app_key='$ap' AND `d_key` != 'MASTER' AND `publish`='yes' ORDER BY  `layout_order`")
	or die(mysql_error()); $i=0; while($nate = mysql_fetch_array( $result )) { foreach($nate AS $key => $value) { $nate[$key] = stripslashes($value);} ?> 
	<div class="c_grid_3" id="columns">
	<? echo  $nate['machine_price']; ?>
	</div> 
	<? } ?>

</div>
<div class="clear"></div>


