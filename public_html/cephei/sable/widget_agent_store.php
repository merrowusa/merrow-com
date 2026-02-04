




	<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
    </script>
    

    





<?


 
$result2 = mysql_query("SELECT * FROM agents WHERE party_id=$val ")
or die(mysql_error());
$agents = mysql_fetch_array( $result2 )

?>
<? $top1= $agents['top1'];
$top2= $agents['top2'];
$top3= $agents['top3'];
$top4= $agents['top4'];
$top5= $agents['top5'];
$top6= $agents['top6'];
$top7= $agents['top7'];
$top8= $agents['top8'];
$top9= $agents['top9'];
$top10= $agents['top10'];
$top11= $agents['top11'];
$top12= $agents['top12'];
$top13= $agents['top13'];
$top14= $agents['top14'];
$top15= $agents['top15'];
$top15= $agents['top16'];
$top15= $agents['top17'];
$top15= $agents['top18'];
$top15= $agents['top19'];
$top15= $agents['top20'];
$top15= $agents['top21'];


 ?>
 
 
<? if ($agents['account_name']!=null) { ?>

    
<body class="home">
	
	<div class="as-js-wrap">
    </div>

	
	<img name="Image" style="display:none"></img>

	<div id="aos-page">
	<div class="store" id="globalheader">
    <div id="aos_header">
    <div id="masthead">
    <div id="masthead_wrap">
      <div class="big" id="names">  
        <div id="cattop"> <span><h1><? echo $agents['store_catalogname']; ?> </span></div><br />
        <div id="catbottom"> offered by <? echo $agent_store['name']; ?>    </h1>  </div>
      </div>
      <h1><a id="usernav-home" href=""  >Home</a></h1>

				  <ul>
                
                  <li>
                    <address class="phone pngfix">1-800-431-6677</address>
                  </li>
    			  </ul>
 	</div>
    
    <div id="masthead_btm"></div>
 
    </div>

    <div id="guide">
        <div id="guide_wrap">
            
    <ol id="breadcrumb">
        <li id="bc-home">
            <a class="home" id="usernav-home" href=""""  >Home</a>
        </li>



<? 
$result2 = mysql_query("SELECT * FROM agents WHERE party_id=$val ")
or die(mysql_error());
$agents = mysql_fetch_array( $result2 )

?>
<?  if ($agents['Country']!='United States') { ?>

    <li class="title"><span><? echo $tongue['menu_welcomecatalog']; ?> <? echo $agents['Country']; ?></span></li>

                
 
 <? } else { ?>
 
      <li class="title"><span>Welcome to local access to Merrow products in <? echo $agents['city']; ?>, <? echo $agents['state']; ?></span></li>
 
       
    

  <? } ?>

</ol>
 <div id="user_nav">
  <ul>
    <li id="u_help">
     <a href="/fp_agent_store_help.php?party_id=<? echo $agents['party_id']; ?>"  ><? echo $tongue['store_help']; ?></a>
       </li>
			<li id="u_account">
            <a href="http://merrow.com/cephei/sable/formb.php?party_id=<? echo $agents['party_id']; ?>" ><? echo $tongue['store_contact']; ?></a>
       		 </li>
        		<li id="u_cart">
           		 <a href="/fp_agent_store_help.php?party_id=<? echo $agents['party_id']; ?> " ><? echo $tongue['store_buy']; ?></a>
            
 </li>
</ul>
</div>
</div>
</div>
    
 <div id="guide_wrap_btm">&nbsp;</div>
</div>
 <hr/>
		<!-- ##################  
	 top center column widgets
	 ################## -->		

        
        <div id="primary">
			<div id="primary_main">
			  <div class="module_top">&nbsp;</div>
                               <? if ($bandwidth=='low') { } else  { include('widget_customagent_map.php');   } ?>

				<div id="aos_family">
				   <h3 class="xs">70 Class</h3>
                     <ul id="family-ipod" class="hc first-row">
<?php

// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());
mysql_select_db("merrowco_inventory") or die(mysql_error());

?>                        
    
    <? // Get all the data from the "asin" table which is where our product info is kept
$result3 = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, mrsp FROM asin WHERE id='2732'")
or die(mysql_error());
 $juju = mysql_fetch_array($result3); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 
?>

    <li class="product first" id="family-prod-shuffle">
		<a href="<? echo $url; ?>"  ><span>
			<img src="/nebula/images/aos/new.png" class="new-icon pngfix" alt="NEW">
			<img src="<? echo $img; ?>" alt="">
			
			<strong><? echo $msmc; ?></strong> From <? echo $two_letter_country_code;?> <? echo $price;; ?>
		    </span></a></li>

	
    <? // Get all the data from the "asin" table which is where our product info is kept
$result3 = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, mrsp FROM asin WHERE id='2733'")
or die(mysql_error());
 $juju = mysql_fetch_array($result3); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 
?>
	<li class="product" id="family-prod-nano">
	<a href="<? echo $url; ?>"  ><span>
			<img src="/nebula/images/aos/new.png" class="new-icon pngfix" alt="NEW">
			<img src="<? echo $img; ?>" alt="">
			
			<strong><? echo $msmc; ?></strong> From <? echo $two_letter_country_code;?> <? echo $price; ?>
		</span></a></li>
	
    <? // Get all the data from the "asin" table which is where our product info is kept
$result3 = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, mrsp FROM asin WHERE id='2734'")
or die(mysql_error());
 $juju = mysql_fetch_array($result3); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 
?>
	<li class="product" id="family-prod-classic">

	<a href="<? echo $url; ?>"  ><span>
			<img src="/nebula/images/aos/new.png" class="new-icon pngfix" alt="NEW">
			<img src="<? echo $img; ?>" alt="">
			
			<strong><? echo $msmc; ?></strong> From <? echo $two_letter_country_code;?> <? echo $price; ?>
		</span></a></li>
	
	
	    <? // Get all the data from the "asin" table which is where our product info is kept
$result3 = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, mrsp FROM asin WHERE id='2735'")
or die(mysql_error());
 $juju = mysql_fetch_array($result3); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 
?>
    <li class="product last" id="family-prod-appletv">
	<a href="<? echo $url; ?>"  ><span>
			<img src="/nebula/images/aos/new.png" class="new-icon pngfix" alt="NEW">
			<img src="<? echo $img; ?>" alt="">
			
			<strong><? echo $msmc; ?></strong> From <? echo $two_letter_country_code;?> <? echo $price; ?>
		</span></a></li>
</ul>

<!-- ##################  
	end top center column
	 ################## -->	
     
     <!-- ##################  
	start second row of products
	 ################## -->		
     




<h3 class="xs">Spare Parts</h3>
<ul id="family-mac">

	
  <div class="custom_product_width">  
    <li class="product first" id="family-prod">
	
    <a href="<? if ($keyman=='configuration') { ?>http://merrow.com/cephei/public_images/index.php<? } else { ?>http://merrow.com/cephei/sable/widget_custom_store_feature_product.php<? } ?>?location=center&unit=1&unit_on_ur_knees=store1Alpha&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&<? if ($keyman=='configuration') { ?>height=250&width=600<? } else { ?>height=500&width=400<? } ?>" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox">
    
    <span>
			
			<img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store1Alpha.jpg&w=130" alt="merrow store image">
			
			
		</span></a></li> <div class="loud_product_name"><strong><? echo $agent_store['custom_center_product1_name'];?></strong> </div></div>
	
	  
      
      
   <div class="custom_product_width">
    <li class="product" id="family-prod-air">
	 <a href="<? if ($keyman=='configuration') { ?>http://merrow.com/cephei/public_images/index.php<? } else { ?>http://merrow.com/cephei/sable/widget_custom_store_feature_product.php<? } ?>?location=center&unit=2&unit_on_ur_knees=store1Beta&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&<? if ($keyman=='configuration') { ?>height=250&width=600<? } else { ?>height=500&width=400<? } ?>" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox"><span>
		
			<img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store1Beta.jpg&w=130" alt="merrow store image">
			
		</span></a></li>	<div class="loud_product_name"><strong><? echo $agent_store['custom_center_product2_name'];?></strong> </div></div>
	
	<div class="custom_product_width">   
    <li class="product" id="family-prod-pro">
		 <a href="<? if ($keyman=='configuration') { ?>http://merrow.com/cephei/public_images/index.php<? } else { ?>http://merrow.com/cephei/sable/widget_custom_store_feature_product.php<? } ?>?location=center&unit=3&unit_on_ur_knees=store1Gamma&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&<? if ($keyman=='configuration') { ?>height=250&width=600<? } else { ?>height=500&width=400<? } ?>" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox">
		
			<img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store1Gamma.jpg&w=130" alt="merrow store image">
			
		
		</span></a></li>	<div class="loud_product_name"><strong><? echo $agent_store['custom_center_product3_name'];?></strong> </div></div>
	
	
	 
	<div class="custom_product_width">
	    
    <li class="product last" id="family-prod-pro">
	<a href="<? if ($keyman=='configuration') { ?>http://merrow.com/cephei/public_images/index.php<? } else { ?>http://merrow.com/cephei/sable/widget_custom_store_feature_product.php<? } ?>?location=center&unit=4&unit_on_ur_knees=store1Delta&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&<? if ($keyman=='configuration') { ?>height=250&width=600<? } else { ?>height=500&width=400<? } ?>" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox"><span>
			
				<img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store1Delta.jpg&w=130" alt="merrow store image">
                			
			</span></a></li>	<div class="loud_product_name"><strong><? echo $agent_store['custom_center_product4_name'];?></strong> </div></div>
</ul>
<? if ($keyman=='configuration') { ?> <div class="edit3"> <a href="http://merrow.com/cephei/sable/widget_config_center_parts.php?party_id=<? echo $party_id; ?>&dbname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&<? if ($keyman=='configuration') { ?>height=250&width=600<? } else { ?>height=400&width=800<? } ?>" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div> <? } ?>
</div>
				
    <!-- ##################  
	end second row of products
	 ################## -->		
     				
	<ul class="banner-grid">
	<li class="first"><a href=""><img src="http://images.imerrow.com/images/store/new_jpgs/emblemad.jpg" alt="merrow emblems are....awesome!" width="204" height="250" /></a></li><li class="middle"><a href=""><img src="http://images.imerrow.com/images/store/new_jpgs/netting1.jpg" alt="netting machines from merrow" width="204" height="250" /></a></li><li class="last"><a href=""><img src="http://images.imerrow.com/images/store/new_jpgs/blankets.jpg" alt="blankets, whose cold? you...or you?" width="204" height="250" /></a></li>
	</ul>
    
    <!-- ##################  
	start third and fourth row of products
	 ################## -->	

<div class="module producttiles">
<h2><span>Products Available in <? echo $agents['city']; ?>, <? echo $agents['Country']; ?></span></h2>
<div class="modulecontent">
<div class="product-grid">

    <? 
	
	
 
?>
<ul class="product-row first-row">
<li class="product first-tile">
<dl>
<dt class="name">
<a href="<? echo $url; ?>" ><? echo $agent_store['custom_center_product5_name'];?></a>
</dt>
 <dd class="image">
 <a href="<? if ($keyman=='configuration') { ?>http://merrow.com/cephei/public_images/index.php<? } else { ?>http://merrow.com/cephei/sable/widget_custom_store_feature_product.php<? } ?>?location=center&unit=5&unit_on_ur_knees=store5&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&<? if ($keyman=='configuration') { ?>height=250&width=600<? } else { ?>height=500&width=400<? } ?>" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox">
    
    <span>
			
			<img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store5.jpg&w=80" alt="merrow store image">
			
			
		</span></a>
 </dd>
 <dd class="starrating">
<span class="defstar">
<abbr class="rating" title="3.5">
<img src="http://images.imerrow.com/images/aos/stars_61x13_bluonwht_35.gif" alt="3.5" width="61" height="13" />
 </abbr>
  </span>
 </dd>
 <dd class="price">from <? echo $agent_store['custom_center_product5_price'];?>
 </dd>
 <dd class="more">

</dd>
 </dl>
 </li>
 
 
    
 
 <li class="product">
<dl>
<dt class="name">
<a href="<? echo $url; ?>" ><? echo $agent_store['custom_center_product6_name'];?></a>
</dt>
 <dd class="image">
 <a href="<? if ($keyman=='configuration') { ?>http://merrow.com/cephei/public_images/index.php<? } else { ?>http://merrow.com/cephei/sable/widget_custom_store_feature_product.php<? } ?>?location=center&unit=6&unit_on_ur_knees=store6&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&<? if ($keyman=='configuration') { ?>height=250&width=600<? } else { ?>height=500&width=400<? } ?>" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox">
    
    <span>
			
			<img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store6.jpg&w=80" alt="merrow store image">
			
			
		</span></a>
 </dd>
 <dd class="starrating">
<span class="defstar">
<abbr class="rating" title="3.5">
<img src="http://images.imerrow.com/images/aos/stars_61x13_bluonwht_35.gif" alt="3.5" width="61" height="13" />
 </abbr>
  </span>
 </dd>
 <dd class="price">from <? echo $agent_store['custom_center_product6_price'];?>
</dd>
<dd class="more">
<a href="<? echo $url; ?>" ><? echo $advert; ?></a>
</dd>
</dl>
</li>
   
   
          
 <li class="product">
<dl>
<dt class="name">
 <a href="<? echo $url; ?>" ><? echo $agent_store['custom_center_product7_name'];?></a>
</dt>
 <dd class="image">
 <a href="<? if ($keyman=='configuration') { ?>http://merrow.com/cephei/public_images/index.php<? } else { ?>http://merrow.com/cephei/sable/widget_custom_store_feature_product.php<? } ?>?location=center&unit=7&unit_on_ur_knees=store7&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&<? if ($keyman=='configuration') { ?>height=250&width=600<? } else { ?>height=500&width=400<? } ?>" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox">
    
    <span>
			
			<img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store7.jpg&w=80" alt="merrow store image">
			
			
		</span></a>
 </dd>
 <dd class="starrating">
<span class="defstar">
<abbr class="rating" title="3.5">
<img src="http://images.imerrow.com/images/aos/stars_61x13_bluonwht_35.gif" alt="3.5" width="61" height="13" />
 </abbr>
  </span>
 </dd>
 <dd class="price">from <? echo $agent_store['custom_center_product7_price'];?>
</dd>
<dd class="more">
<a href="<? echo $url; ?>" ><? echo $advert; ?></a>
</dd>
</dl>
</li>
    
    
       
    
<li class="product last-tile">
<dl>
<dt class="name" title="screws">
<a href="<? echo $url; ?>" ><? echo $agent_store['custom_center_product8_name'];?></a>
</dt>
 <dd class="image">
 <a href="<? if ($keyman=='configuration') { ?>http://merrow.com/cephei/public_images/index.php<? } else { ?>http://merrow.com/cephei/sable/widget_custom_store_feature_product.php<? } ?>?location=center&unit=8&unit_on_ur_knees=store8&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&<? if ($keyman=='configuration') { ?>height=250&width=600<? } else { ?>height=500&width=400<? } ?>" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox">
    
    <span>
			
			<img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store8.jpg&w=80" alt="merrow store image">
			
			
		</span></a>
 </dd>
 <dd class="starrating">
<span class="defstar">
<abbr class="rating" title="3.5">
<img src="http://images.imerrow.com/images/aos/stars_61x13_bluonwht_35.gif" alt="3.5" width="61" height="13" />
 </abbr>
  </span>
 </dd>
 <dd class="price">from <? echo $agent_store['custom_center_product8_price'];?>
 </dd>
<dd class="more">
<a href="<? echo $url; ?>" ><? echo $advert; ?></a>
</dd>
</dl>
</li>
</ul>

      
    
<ul class="product-row last-row">
        
<li class="product first-tile">
<dl>
<dt class="name">
<a href="<? echo $url; ?>" ><? echo $agent_store['custom_center_product9_name'];?></a>
</dt>
 <dd class="image">
 <a href="<? if ($keyman=='configuration') { ?>http://merrow.com/cephei/public_images/index.php<? } else { ?>http://merrow.com/cephei/sable/widget_custom_store_feature_product.php<? } ?>?location=center&unit=9&unit_on_ur_knees=store9&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&<? if ($keyman=='configuration') { ?>height=250&width=600<? } else { ?>height=500&width=400<? } ?>" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox">
    
    <span>
			
			<img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store9.jpg&w=80" alt="merrow store image">
			
			
		</span></a>
 </dd>
 <dd class="starrating">
<span class="defstar">
<abbr class="rating" title="3.5">
<img src="http://images.imerrow.com/images/aos/stars_61x13_bluonwht_35.gif" alt="3.5" width="61" height="13" />
 </abbr>
  </span>
 </dd>
 <dd class="price">from <? echo $agent_store['custom_center_product9_price'];?>
 </dd>
 <dd class="more">
<a href="<? echo $url; ?>"  ><? echo $advert; ?></a>
</dd>
 </dl>
 </li>
 
   
       
<li class="product">
<dl>
<dt class="name">
<a href="<? echo $url; ?>" ><? echo $agent_store['custom_center_product10_name'];?></a>
</dt>
 <dd class="image">
 <a href="<? if ($keyman=='configuration') { ?>http://merrow.com/cephei/public_images/index.php<? } else { ?>http://merrow.com/cephei/sable/widget_custom_store_feature_product.php<? } ?>?location=center&unit=10&unit_on_ur_knees=store10&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&<? if ($keyman=='configuration') { ?>height=250&width=600<? } else { ?>height=500&width=400<? } ?>" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox">
    
    <span>
			
			<img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store10.jpg&w=80" alt="merrow store image">
			
			
		</span></a>
 </dd>
 <dd class="starrating">
<span class="defstar">
<abbr class="rating" title="3.5">
<img src="http://images.imerrow.com/images/aos/stars_61x13_bluonwht_35.gif" alt="3.5" width="61" height="13" />
 </abbr>
  </span>
 </dd>
 <dd class="price">from <? echo $agent_store['custom_center_product10_price'];?>
</dd>
<dd class="more">
<a href="<? echo $url; ?>" ><? echo $advert; ?></a>
</dd>
</dl>
</li>
    
   
        
<li class="product">
<dl>
<dt class="name">
<a href="<? echo $url; ?>" ><? echo $agent_store['custom_center_product11_name'];?></a>
</dt>
 <dd class="image">
 <a href="<? if ($keyman=='configuration') { ?>http://merrow.com/cephei/public_images/index.php<? } else { ?>http://merrow.com/cephei/sable/widget_custom_store_feature_product.php<? } ?>?location=center&unit=11&unit_on_ur_knees=store11&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&<? if ($keyman=='configuration') { ?>height=250&width=600<? } else { ?>height=500&width=400<? } ?>" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox">
    
    <span>
			
			<img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store11.jpg&w=80" alt="merrow store image">
			
			
		</span></a>
 </dd>
 <dd class="starrating">
<span class="defstar">
<abbr class="rating" title="3.5">
<img src="http://images.imerrow.com/images/aos/stars_61x13_bluonwht_35.gif" alt="3.5" width="61" height="13" />
 </abbr>
  </span>
 </dd>
 <dd class="price">from <? echo $agent_store['custom_center_product11_price'];?>
</dd>
<dd class="more">
<a href="<? echo $url; ?>" ><? echo $advert; ?></a>
</dd>
</dl>
</li>

   
<li class="product last-tile">
<dl>
<dt class="name" title="screws">
<a href="<? echo $url; ?>" ><? echo $agent_store['custom_center_product12_name'];?></a>
</dt>
 <dd class="image">
 <a href="<? if ($keyman=='configuration') { ?>http://merrow.com/cephei/public_images/index.php<? } else { ?>http://merrow.com/cephei/sable/widget_custom_store_feature_product.php<? } ?>?location=center&unit=12&unit_on_ur_knees=store12&party_id=<? echo $party_id; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&<? if ($keyman=='configuration') { ?>height=250&width=600<? } else { ?>height=500&width=400<? } ?>" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox">
    
    <span>
			
			<img src="http://merrow.com/cephei/phpThumb/phpThumb.php?src=/cephei/public_images/uploads/<? echo $party_id; ?>/store12.jpg&w=80" alt="merrow store image">
			
			
		</span></a>
 </dd>
 <dd class="starrating">
<span class="defstar">
<abbr class="rating" title="3.5">
<img src="http://images.imerrow.com/images/aos/stars_61x13_bluonwht_35.gif" alt="3.5" width="61" height="13" />
 </abbr>
  </span>
 </dd>
 <dd class="price">from <? echo $agent_store['custom_center_product12_price'];?>
 </dd>
<dd class="more">
<a href="<? echo $url; ?>" ><? echo $advert; ?></a>
</dd>
</dl>
</li>
</ul>
</div>
</div>
	<? if ($keyman=='configuration') { ?>  <div class="edit2"> <a href="http://merrow.com/cephei/sable/widget_config_center_products.php?party_id=<? echo $party_id; ?>&dbname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=400&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div>  <? } ?>					
<div class="module_btm">&nbsp;</div>
</div>
       
                  
				
   <div class="module">
	<h2 class="promos">Merrow has more...</h2>
	<div class="module_top">&nbsp;</div>
	<div class="modulecontent">
		<ul id="more_promos">
		<li class="first">
				    <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='$top19'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 $advert = $juju['advertisement_line_for_store'];
 
?>

                <h3>Merrow Apparel</h3>
				<p>It's about the stitch.</b></p>

				<a href="<? echo $url; ?>" class="superlink"  >
				<img src="http://images.imerrow.com/images/store/new_jpgs/dress_store.jpg" alt="merrow products"></a>
			</li>
			<li>
				    <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='$top20'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 $advert = $juju['advertisement_line_for_store'];
 
?>

                <h3>The RAIL</h3>
				<p>Designed by Merrow</p>
				<a href="<? echo $url; ?>" class="superlink"  >
				<img src="http://images.imerrow.com/images/store/new_jpgs/rail_store.jpg" alt="RAIL"></a>

			</li>
			<li class="last">
				    <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='$top21'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 $advert = $juju['advertisement_line_for_store'];
 
?>

                <h3>Go Green with Merrow</h3>
				<p>Battery Powered!</p>
				<a href="<? echo $url; ?>" class="superlink" >
				<img src="http://images.imerrow.com/images/store/new_jpgs/table_store.jpg" alt="merrow products"></a>
			</li>
		</ul>

	</div>
	<div class="module_btm"></div>
</div>
</div>
			<hr/>
			<? // Get all the data from the "agents" table which is where our agent info is kept
$result = mysql_query("SELECT * FROM agents WHERE party_id=$val ")
or die(mysql_error());
$agents = mysql_fetch_array( $result )

?>



            <div id="secondary">
				<div class="module list" id="newtothestore">
						<h2><span>about <? echo $agent_store['name']; ?> </span></h2>
						<div class="modulecontent">
 <div class="list_content">
        <ul>

<p><? echo $agent_store['company_sells']; ?> <br /><br /><? echo $agent_store['company_about']; ?><br /><br /><? echo $agent_store['company_territory']; ?></p>
           
            
        </ul>
    </div> 
    	<? if ($keyman=='configuration') { ?>   <div class="edit4"> <a href="http://merrow.com/cephei/sable/widget_config_description.php?party_id=<? echo $party_id; ?>&dbname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=400&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div>  <? } ?>		       
</div>
	<div class="module_btm">&nbsp;</div>
					</div>
				<div class="module" id="topsellers">
						<h2><span>More Products</span></h2>
						<div class="modulecontent">
	
    <div class="list_head"><h3><span>Machine Related</span></h3></div>
    <? if ($keyman=='configuration') { ?>   <div class="edit5"> <a href="http://merrow.com/cephei/sable/widget_config_catalog.php?party_id=<? echo $party_id; ?>&dbname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=400&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div>  <? } ?>		
    <div class="list_content">
        <ul class="ordered">
            
              <? 
			  
   $catalog1=$agent_store['merrow_catalog1']; 
    $catalog2=$agent_store['merrow_catalog2']; 
	 $catalog3=$agent_store['merrow_catalog3']; 
			  
			  // Get all the data from the "asin" table which is where our product info is kept
$result5 = mysql_query("SELECT product_name, amzn_url, advertisement_line_for_store FROM asin WHERE search_terms_3='$catalog1' LIMIT 0, 5")
or die(mysql_error());

 while($juju = mysql_fetch_array( $result5 )) { 
    $msmc = $juju['product_name'];
    $url = $juju['amzn_url'];
 
?>
                <li><a href="<? echo $url; ?>"><? echo $msmc; ?></a></li>
                
                <? }  ?>
            
        </ul>
    </div>        
        
<div class="list_head"><h3><span>Specials</span></h3>
</div>
<? if ($keyman=='configuration') { ?>   <div class="edit5"> <a href="http://merrow.com/cephei/sable/widget_config_catalog.php?party_id=<? echo $party_id; ?>&dbname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=400&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div>  <? } ?>		
    <div class="list_content">
        <ul class="ordered">
            
             <?   // Get all the data from the "asin" table which is where our product info is kept
$result5 = mysql_query("SELECT product_name, amzn_url, advertisement_line_for_store FROM asin WHERE search_terms_3='$catalog2' LIMIT 0, 5")
or die(mysql_error());



 
   while($juju = mysql_fetch_array( $result5 )) { 
    $msmc = $juju['product_name'];
    $url = $juju['amzn_url'];
 
?>
                <li><a href="<? echo $url; ?>"><? echo $msmc; ?></a></li>
                
                <? }  ?>
            
        </ul>
    </div>        
        
<div class="list_head"><h3><span>More Products</span></h3></div>
<? if ($keyman=='configuration') { ?>   <div class="edit5"> <a href="http://merrow.com/cephei/sable/widget_config_catalog.php?party_id=<? echo $party_id; ?>&dbname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=400&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div>  <? } ?>		
    <div class="list_content">
        <ul class="ordered">
            
             <?   // Get all the data from the "asin" table which is where our product info is kept
$result5 = mysql_query("SELECT product_name, amzn_url, advertisement_line_for_store FROM asin WHERE search_terms_3='$catalog3' LIMIT 0, 10")
or die(mysql_error());


 
   while($juju = mysql_fetch_array( $result5 )) { 
    $msmc = $juju['product_name'];
    $url = $juju['amzn_url'];
 
?>
                <li><a href="<? echo $url; ?>"><? echo $msmc; ?></a></li>
                
                <? }  ?>
            
        </ul>
    </div>       
        
					</div>
						<div class="module_btm">&nbsp;</div>
					</div>
				
                <div class="module footerblock">
						<h2><span>Need Support?</span></h2>

						<div class="modulecontent">
							
<div class="modulecontentwrap" id="juniper">
	
	<h3>Service in <? echo $agents['Country']; ?></h3>
	<p>There is terrific local support for Merrow close by</p>
	<p class="more"><a href=""  >Learn more</a></p>
</div>
	</div>

						<div class="module_btm">&nbsp;</div>
					</div>
				

			</div>
		</div>
		<hr/>

		<div id="navigation">

			<div class="module" id="shop">
				<div class="module_top">&nbsp;</div>

				<div class="modulecontent">
					<ul id="shopapple">
    


<? // Get all the data from the "agents" table which is where our agent info is kept
$result = mysql_query("SELECT * FROM agents WHERE party_id=$val ")
or die(mysql_error());
$agents = mysql_fetch_array( $result )

?>
        
        <li><a href=""  > <? echo $agent_store['name']; ?> </a></li>
    
        <li><a href="" >is a certified Merrow Agent for 2008</a></li>
    
        <li><a href="" ></a></li>
    
</ul>
	             <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT product_name, amzn_url FROM asin WHERE store_bomlist='1'")
or die(mysql_error());

?>
 
 
            
                
             
    
    <ul id="shopaccessories">
    <li><a href="http://merrow.com/cephei/sable/fp_contact_general.php?key=agentcontact&party_id=<? echo $agent['party_id']; ?>" >contact us</a></li>
      
	</ul>
	
    <div id="morestores">
<div class="list_content">

        <ul>
            
                    
           	  <li><a href="http://merrow.com/cephei/sable/formb.php?party_id=<? echo $agents['party_id']; ?>">Phone: <? echo $agent_store['phone']; ?></a></li>
                <li><a href="http://merrow.com/cephei/sable/formb.php?party_id=<? echo $agents['party_id']; ?>">Fax: <? echo $agent_store['fax']; ?></a></li>
                <li><a href="">Email:<? echo $agent_store['email']; ?></a></li> 
               
            
        </ul>
        <? if ($keyman=='configuration') { ?>   <div class="edit1"> <a href="http://merrow.com/cephei/sable/widget_config_contactinfo.php?party_id=<? echo $party_id; ?>&dbname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=400&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div>  <? } ?>		
           
    </div>
   
        
				  </div>
					
				</div>

				<div class="module_btm">&nbsp;</div>
			</div>

			
				<div class="module list" id="popularaccessories">
					<h2><span>Merrow </span></h2>
					<div class="modulecontent">
	 <div class="list_head"><h3><a href=""> Sewing Machines</a></h3></div>

    <div class="list_content">
        <ul>
 
 
 
  <?
  
  
   $machine1=$agent_store['machine1']; 
    $machine2=$agent_store['machine2']; 
	 $machine3=$agent_store['machine3']; 
	  $machine4=$agent_store['machine4']; 
	   $machine5=$agent_store['machine5']; 
	    $machine6=$agent_store['machine6']; 
		
   
  $result4 = mysql_query("SELECT msmc_id, amzn_url FROM `asin` WHERE ot_id=$machine1")
or die(mysql_error());
 
   $ourmachines = mysql_fetch_array( $result4 );
   
   
   ?>          
             
     <li><a href="<? echo $ourmachines['amzn_url']; ?>">  <? echo $ourmachines['msmc_id']; ?></a></li>
     
	 <?
       $result4 = mysql_query("SELECT product_name, msmc_id, amzn_url, advertisement_line_for_store FROM asin WHERE ot_id=$machine2")
or die(mysql_error());
 
   $ourmachines = mysql_fetch_array( $result4 );
   
   
   ?>          
             
     <li><a href="<? echo $ourmachines['amzn_url']; ?>">  <? echo $ourmachines['msmc_id']; ?></a></li>
     
      <?
       $result4 = mysql_query("SELECT product_name, msmc_id, amzn_url, advertisement_line_for_store FROM asin WHERE ot_id=$machine3")
or die(mysql_error());
 
   $ourmachines = mysql_fetch_array( $result4 );
   
   
   ?>          
             
     <li><a href="<? echo $ourmachines['amzn_url']; ?>">  <? echo $ourmachines['msmc_id']; ?></a></li>
     
      <?
       $result4 = mysql_query("SELECT product_name, msmc_id, amzn_url, advertisement_line_for_store FROM asin WHERE ot_id=$machine4")
or die(mysql_error());
 
   $ourmachines = mysql_fetch_array( $result4 );
   
   
   ?>          
             
     <li><a href="<? echo $ourmachines['amzn_url']; ?>">  <? echo $ourmachines['msmc_id']; ?></a></li>
     
      <?
       $result4 = mysql_query("SELECT product_name, msmc_id, amzn_url, advertisement_line_for_store FROM asin WHERE ot_id=$machine5")
or die(mysql_error());
 
   $ourmachines = mysql_fetch_array( $result4 );
   
   
   ?>          
             
     <li><a href="<? echo $ourmachines['amzn_url']; ?>">  <? echo $ourmachines['msmc_id']; ?></a></li>
     
      <?
       $result4 = mysql_query("SELECT product_name, msmc_id, amzn_url, advertisement_line_for_store FROM asin WHERE ot_id=$machine6")
or die(mysql_error());
 
   $ourmachines = mysql_fetch_array( $result4 );
   
   
   ?>          
             
     <li><a href="<? echo $ourmachines['amzn_url']; ?>">  <? echo $ourmachines['msmc_id']; ?></a></li>
     
			
  </ul>

    </div>        
    <div class="list_foot"><p class="more"><a href="">more&hellip;</a></p>
    <? if ($keyman=='configuration') { ?>   <div class="edit2"> <a href="http://merrow.com/cephei/sable/widget_config_machines.php?party_id=<? echo $party_id; ?>&dbname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=400&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div>  <? } ?>		</div>    
<div class="list_head"><h3><a href="">more products</a></h3></div>
    <div class="list_content">
        <ul>
            
    <? if ($agent_store['custom_product1_name']!=null) { ?>  <li> <a href="http://merrow.com/cephei/sable/widget_custom_store_feature_product.php?location=column&unit=1&unit_on_ur_knees=store13&party_id=<? echo $agents['party_id']; ?>&suixname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=500&width=500" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox"><? echo $agent_store['custom_product1_name']; ?></a></li><? } ?>
         <? if ($agent_store['custom_product2_name']!=null) { ?> <li><a href="http://merrow.com/cephei/sable/widget_custom_store_feature_product.php?location=column&unit=2&unit_on_ur_knees=store14&party_id=<? echo $agents['party_id']; ?>&suixname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=500&width=500" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox"><? echo $agent_store['custom_product2_name']; ?></a></li><? } ?>
            <? if ($agent_store['custom_product3_name']!=null) { ?> <li><a href="http://merrow.com/cephei/sable/widget_custom_store_feature_product.php?location=column&unit=3&unit_on_ur_knees=store15&party_id=<? echo $agents['party_id']; ?>&suixname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=500&width=500" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox"><? echo $agent_store['custom_product3_name']; ?></a></li><? } ?>
              <? if ($agent_store['custom_product4_name']!=null) { ?>  <li><a href="http://merrow.com/cephei/sable/widget_custom_store_feature_product.php?location=column&unit_on_ur_knees=store16&unit=4&party_id=<? echo $agents['party_id']; ?>&suixname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=500&width=500" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox"><? echo $agent_store['custom_product4_name']; ?></a></li><? } ?>
                 <? if ($agent_store['custom_product5_name']!=null) { ?>  <li><a href="http://merrow.com/cephei/sable/widget_custom_store_feature_product.php?location=column&unit_on_ur_knees=store17&unit=5&party_id=<? echo $agents['party_id']; ?>&suixname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=500&width=500" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox"><? echo $agent_store['custom_product5_name']; ?></a></li><? } ?>
                    <? if ($agent_store['custom_product6_name']!=null) { ?>  <li><a href="http://merrow.com/cephei/sable/widget_custom_store_feature_product.php?location=column&unit=6&unit_on_ur_knees=store18&party_id=<? echo $agents['party_id']; ?>&suixname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=500&width=500" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox"><? echo $agent_store['custom_product6_name']; ?></a></li><? } ?>
                       <? if ($agent_store['custom_product7_name']!=null) { ?>  <li><a href="http://merrow.com/cephei/sable/widget_custom_store_feature_product.php?location=column&unit=7&unit_on_ur_knees=store19&party_id=<? echo $agents['party_id']; ?>&suixname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=500&width=500" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox"><? echo $agent_store['custom_product7_name']; ?></a></li><? } ?>
                          <? if ($agent_store['custom_product8_name']!=null) { ?>  <li><a href="http://merrow.com/cephei/sable/widget_custom_store_feature_product.php?location=column&unit=8&unit_on_ur_knees=store20&party_id=<? echo $agents['party_id']; ?>&suixname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=500&width=500" title="new products available from <? echo $agent_store['name']; ?> "change" and updating the fields" class="thickbox"><? echo $agent_store['custom_product8_name']; ?></a></li><? } ?>
                  
            
        </ul>

    </div>        
    <div class="list_foot"><p class="more"><a href="">more&hellip;</a></p>
    <? if ($keyman=='configuration') { ?>   <div class="edit2"> <a href="http://merrow.com/cephei/sable/widget_config_column_parts.php?party_id=<? echo $party_id; ?>&dbname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=400&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div><div class="edit6"> <a href="http://merrow.com/cephei/sable/widget_sub_config_multipic.php?party_id=<? echo $party_id; ?>&location=column&dbname=<? echo $agents['city']; ?>&placeValuesBeforeTB_=savedValues&TB_iframe=true&height=500&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/binocs.jpg" alt=""><br>add images</a></div>  <? } ?>		</div>  


 <div class="list_head"><h3><a href="">General Catalog</a></h3></div>
    <div class="list_content">
        <ul>
            
              
            
        </ul>
    </div>        
    <div class="list_foot"><p class="more"><a href="">more&hellip;</a></p></div>    
 
 
 <div class="list_head"><h3><a href="">Sewing Extras</a></h3></div>
    <div class="list_content">
        <ul>

            

            
        </ul>
    </div>        
    <div class="list_foot"><p class="more"><a href="">more&hellip;</a></p></div>    
			</div>
					
                    
                    <div class="module_btm">&nbsp;</div>
				</div>
			
            
            <div class="module footerblock">
					<h2><span>Special Deals</span></h2>
					<div class="modulecontent">
				
	<div class="moduledetail">
	
	
		<h3>Merrow  <nobr>Training</nobr></h3>
			

			<p><b>Need support for Merrow</b><br/><br/>Available <br>by request</p>
			<p class="more"><a href="http://merrow.com/cephei/fp_contact_general.php?key=agent&name=<? echo $agents['party_id']; ?>" ><nobr>learn more</nobr></a></p>
	</div>
    </div>
	<div class="module_btm">&nbsp;</div>
			</div>
			
            
  
        
    </div>
</div>







</body>
</html>

<? } else { ?> fiddling with the URL eh? .... click <a href="http://merrow.com/cephei/sable/fp_merrow.php">here</a> to continue <? }?> 

