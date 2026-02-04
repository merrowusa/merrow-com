<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	 <link rel="stylesheet" href="http://css.imerrow.com/css_major/thickbox.css" type="text/css" media="screen" />
     
     
</head>
<?

$dbname1 = $_COOKIE["dbname"];

if ($dbname1==null) { $dbname = $dbspecial; } else { $dbname = $_COOKIE["dbname"]; }
$party_id = $_GET['party_id'];
$unitstore = $_GET['unit_on_ur_knees'];

?>

<?

mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());
mysql_select_db("merrowco_cephei") or die(mysql_error()); 



   // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM `$dbname`")
or die(mysql_error());

 // then define juju as the result array
 $agent_store = mysql_fetch_array($result); 
 
$location = $_GET['location'];
$unit = $_GET['unit'];
 
 ?>
 
<body>



<? if ($location == 'column') { ?>







<? } ?>




</body>
</html>
<div class="product_name">Add your pictures for the Column Products here....</div>



<div class="table_format">
<table width="250">
  <tr>
    <td> <a href="http://merrow.com/cephei/public_images/index.php?location=column&unit=13&unit_on_ur_knees=store13&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=250&width=600" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store13.jpg&w=100" alt="merrow store image"><br>
	<? if ($agent_store['custom_product1_name']!=null) { ?>Add Image for: <br /><? echo $agent_store['custom_product1_name']; } else { ?>Click <br> to add an image <br /> but note that no <br />product is yet configured <br> for item 1<? } ?></a></td>
    
    
    <td> <a href="http://merrow.com/cephei/public_images/index.php?location=column&unit=14&unit_on_ur_knees=store14&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=250&width=600" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store14.jpg&w=100" alt="merrow store image"><br>
	<? if ($agent_store['custom_product2_name']!=null) { ?>Add Image for: <br /><? echo $agent_store['custom_product2_name']; } else { ?>Click <br> to add an image <br /> but note that no <br />product is yet configured <br>for item 2<? } ?></a></td>
    
    
    <td> <a href="http://merrow.com/cephei/public_images/index.php?location=column&unit=15&unit_on_ur_knees=store15&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=250&width=600" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store15.jpg&w=100" alt="merrow store image"><br>
	<? if ($agent_store['custom_product3_name']!=null) { ?>Add Image for: <br /><? echo $agent_store['custom_product3_name']; } else { ?>Click <br> to add an image <br /> but note that no <br />product is yet configured<br> for item 3<? } ?></a></td>
    
    
    <td> <a href="http://merrow.com/cephei/public_images/index.php?location=column&unit=16&unit_on_ur_knees=store16&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=250&width=600" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store16.jpg&w=100" alt="merrow store image"><br>
	<? if ($agent_store['custom_product4_name']!=null) { ?>Add Image for: <br /><? echo $agent_store['custom_product4_name']; } else { ?>Click <br> to add an image <br /> but note that no <br />product is yet configured<br> for item 4<? } ?></a></td>
    
    
  </tr>
  <tr>
        <td> <a href="http://merrow.com/cephei/public_images/index.php?location=column&unit=17&unit_on_ur_knees=store17&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=250&width=600" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store17.jpg&w=100" alt="merrow store image"><br>
	<? if ($agent_store['custom_product5_name']!=null) { ?>Add Image for: <br /><? echo $agent_store['custom_product5_name']; } else { ?>Click <br> to add an image <br /> but note that no <br />product is yet configured<br> for item 5<? } ?></a></td>
    
        <td> <a href="http://merrow.com/cephei/public_images/index.php?location=column&unit=18&unit_on_ur_knees=store18&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=250&width=600" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store18.jpg&w=100" alt="merrow store image"><br>
	<? if ($agent_store['custom_product6_name']!=null) { ?>Add Image for: <br /><? echo $agent_store['custom_product6_name']; } else { ?>Click <br> to add an image <br /> but note that no <br />product is yet configured<br> for item 6<? } ?></a></td>
    
        <td> <a href="http://merrow.com/cephei/public_images/index.php?location=column&unit=19&unit_on_ur_knees=store19&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=250&width=600" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store19.jpg&w=100" alt="merrow store image"><br>
	<? if ($agent_store['custom_product7_name']!=null) { ?>Add Image for: <br /><? echo $agent_store['custom_product7_name']; } else { ?>Click <br> to add an image <br /> but note that no <br />product is yet configured <br>for item 7<? } ?></a></td>
    
        <td> <a href="http://merrow.com/cephei/public_images/index.php?location=column&unit=20&unit_on_ur_knees=store20&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=250&width=600" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store20.jpg&w=100" alt="merrow store image"><br>
	<? if ($agent_store['custom_product8_name']!=null) { ?>Add Image for: <br /><? echo $agent_store['custom_product8_name']; } else { ?>Click <br> to add an image <br /> but note that no <br />product is yet configured <br>for item 8<? } ?></a></td>
  </tr>
</table>
</div>