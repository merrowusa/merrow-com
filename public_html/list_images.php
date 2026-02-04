


<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>
<? 
function get_remotetitle($urlpage)
{
        $dom = new DOMDocument();

        if($dom->loadHTMLFile($urlpage)) {

            $list = $dom->getElementsByTagName("title");
            if ($list->length > 0) {
                return $list->item(0)->textContent;
            }
        }
}
?>


<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<?php

// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowso_udate", "MSMC11761111") or die(mysql_error());

#
mysql_select_db("merrowso_hydedata") or die(mysql_error());
// Get all the data from the "asin" table which is where our product info is kept


$updated = FALSE;

if(count($_POST['admin']) > 0){
    $admin = $_POST['admin'];
    array_map('intval',$admin);
    $admin = implode(',',$admin);
    mysql_query("UPDATE MGSdata_thread SET image_ref5=1 WHERE id IN ($admin)") or trigger_error(mysql_error(),E_USER_ERROR);
    $updated=TRUE;
}

// mysql_query("UPDATE MGSdata_thread SET image_ref5=0") or trigger_error(mysql_error(),E_USER_ERROR);
// mysql_query("UPDATE MGSdata_thread SET image_ref4=0") or trigger_error(mysql_error(),E_USER_ERROR);

if(count($_POST['primary']) > 0){
    $primary = $_POST['primary'];
    array_map('intval',$primary);
    $primary = implode(',',$primary);
    mysql_query("UPDATE MGSdata_thread SET image_ref4=1 WHERE id IN ($primary)") or trigger_error(mysql_error(),E_USER_ERROR);
    $updated=TRUE;
}

?>
<head>
<link rel="stylesheet" href="http://merrowservices.s3.amazonaws.com/css/services_cleanup.css" type="text/css" charset="utf-8">
</head>

Welcome to the Boston Thread color debugger tool. This private beta tool is LIVE -- you can add colors, change hues, add products and manage the portfolio of product offered on Boston Thread. This tool allows us to quickly examine color groups and other variables for errors or omissions. Please drive carefully.



<div class="AGE_title">Enter Manufacturer and ONE Color choice</div>
<form name="form" action="list_images.php" method="get">

<select name="q">

<option value="YLI">YLI</option>
<option value="SULKY">SULKY</option>
</select>
 




<select name="m" >
<option value="">Primary Colors</option>
<option value="all">ALL Colors</option>
<option value="discrete">----------------------</option>

<? 
$sql5="
  SELECT distinct Cat1
  FROM MGSdata_thread
  WHERE `Cat1` != ''

  order by `Cat1`;
  
  ";
$result5 = mysql_query($sql5)
  or die("Failed Query : ".mysql_error() . $sql5);  //do the query

while ($ROW5 = mysql_fetch_array($result5,MYSQL_ASSOC)) {
  $COLORS5[] = $ROW5;
}
?>


<? foreach ($COLORS5 as $COLOR5) { 
	echo "<option value=\"" . $COLOR5['Cat1'] . "\">". $COLOR5['Cat1'] . "</option>";
	
}
?>

: OR CHOOSE : 

</select>
<select name="l">
<option value="">Sub Group Colors</option>
<option value="all">ALL Colors</option>
<option value="discrete">----------------------</option>

<? 
$sql4="
  SELECT distinct Cat3
  FROM MGSdata_thread
  WHERE `Cat3` != ''

  order by `Cat3`;
  
  ";
$result4 = mysql_query($sql4)
  or die("Failed Query : ".mysql_error() . $sql4);  //do the query

while ($ROW4 = mysql_fetch_array($result4,MYSQL_ASSOC)) {
  $COLORS4[] = $ROW4;
}
?>


<? foreach ($COLORS4 as $COLOR4) { 
	echo "<option value=\"" . $COLOR4['Cat3'] . "\">". $COLOR4['Cat3'] . "</option>";
	
}
?>

</select>




 
  <input type="submit" name="Submit1" value="Search" />
</form>

<?php

  // Get the search variable from URL

  $var = @$_GET['q'] ;
  $var_3 = @$_GET['l'] ;
  $var_1 = @$_GET['m'] ;

  if ($var_3 != '') { 
  	$cat = 'Cat3';
  	
  } 
  
  else if ($var_1 != '') {
  	$cat = 'Cat1';
  	
  }	
  $trimmed = trim($var); //trim whitespace from the stored variable
#echo "THIS IS THE SAVED var1: " . $var_1 . " <br /> <br />";
#echo "THIS IS THE SAVED var3: " . $var_3 . " <br /> <br />";
#echo "THIS IS THE SAVED CAT: " . $cat . " <br /> <br />";

// check for an empty string and display a message.
if ($trimmed == "")
  {
  echo "<p>please enter manufacturer: YLI or SULKY</p>";
  exit;
  }

// check for a search parameter
if (!isset($var))
  {
  echo "<p>You don't seem to have a manufacturer entered</p>";
  exit;
  }
// Get all the data from the "asin" table which is where our product info is kept
$result2 = mysql_query("SELECT `ID`from MGSdata_thread

where  `manufacturer` = '$var'

 ")
or die(mysql_error());

  
   
if ($var_3 != '' && $var_3 !== 'all') 
   {

$sql3="
  SELECT distinct Cat3
  FROM MGSdata_thread
  WHERE `Cat3` = '$var_3'

  order by `Cat3`;
  
  ";
   } else if ($var_1 != '' && $var_1 !== 'all')
   { 
   	
   	$sql3="
  SELECT distinct Cat1
  FROM MGSdata_thread
  WHERE `Cat1` = '$var_1'

  order by `Cat1`;
   ";
   } else if   ($var_1 == 'all'){
   	
   $sql3="
  SELECT distinct Cat1
  FROM MGSdata_thread
  WHERE `Cat1` != ''

  order by `Cat1`;
   ";
   }
     else if   ($var_3 == 'all'){
   	
   $sql3="
  SELECT distinct Cat3
  FROM MGSdata_thread
  WHERE `Cat3` != ''

  order by `Cat3`;
   ";
   }

$result1 = mysql_query($sql3)
  or die("Failed Query : ".mysql_error() . $sql3);  //do the query



while ($ROW = mysql_fetch_array($result1,MYSQL_ASSOC)) {
  $COLORS[] = $ROW;
}
?>


<? foreach ($COLORS as $COLOR) { ?>

<!-- ______________________________________________________________________________
#######################################################################
______________________________________________________________________________ -->
<? $COLOR_SAMPLE = $COLOR[$cat]; ?>
<div class="HUE_image_set">
<div class="HUE_subhead">
COLOR = <? echo $COLOR[$cat]  ?>
</div>

 
 <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT `ID`,`image_ref`,`hue_number`,`image_palette`, $cat,`image_category`,`image_mosaic`,`color_map`,`color_type`,`image_productpage`,`color`,`image_thumbnail`,`manufacturer`,`sku`,`group`,`spool_size`,`image_ref5`,`image_ref4`,`Cat1`,`Cat3`
from MGSdata_thread

where `$cat` = '$COLOR_SAMPLE'

and `manufacturer` = '$var'
and `Cat1` != 'AMISS'
and `Cat1` != ''
and `image_master` != 'missed'

 
order by `hue_number`
 ")
or die(mysql_error());


 ?> <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
 <?
   while($juju = mysql_fetch_array( $result )) { 
    $checked = ($juju['image_ref5']==1) ? 'checked="checked"' : '';
    $checked1 = ($juju['image_ref4']==1) ? 'checked="checked"' : '';
    $msmc = $juju['image_palette'];
    $url = $juju['ID'];
 
?>
                
                                <div class="HUE_item1">
                                <div class="HUE_lilbox"><strong>Approve SKU: <?echo $juju['sku'];?>
                                <br>
                                <? echo '<tr><td> primary color:' .$juju['Cat1']. ' </td><td><input type="checkbox" name="admin[]" value="'.$url.'" '.$checked.'/></td></tr>'."\n"; ?>
                                <br>
                                <? echo '<tr><td>scecondary color:'.$juju['Cat3']. ' </td><td><input type="checkbox" name="primary[]" value="'.$url.'" '.$checked1.'/></td></tr>'."\n"; ?>
                                </strong></div>                
                <a href="http://swi9flu.com/www/index.php/?c=tables&m=edit&table_name=MGSdata_thread&id=<? echo $url; ?>"> <img src="<? echo $msmc; ?>"  /><target="new"></a><div class="HUE_liltext">REF:<? echo $juju['image_ref']; ?><br />COLOR:  <? echo $juju['color']; ?>  <br><? echo $juju['group']; ?> <br/>SPOOL SIZE:  <? echo $juju['spool_size']; ?><br />
                
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
 
 <div class="2ndbutton">
 <input class="coup" type="submit" name="submit" value="Update Published Products" />
 </div>
 
 </form>

<!-- ______________________________________________________________________________
#######################################################################
______________________________________________________________________________ -->

<? } ?>


