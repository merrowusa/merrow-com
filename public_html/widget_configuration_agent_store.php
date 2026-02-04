<?php

// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());
mysql_select_db("merrowco_cephei") or die(mysql_error());

?>

<? 



   // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT * FROM `eurowell`")
or die(mysql_error());

 // then define juju as the result array
 $agent_store = mysql_fetch_array($result); 
 

 
 ?>




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
     <a href="/agent_store_help.php?party_id=<? echo $agents['party_id']; ?>"  ><? echo $tongue['store_help']; ?></a>
       </li>
			<li id="u_account">
            <a href="http://merrow.com/formb.php?party_id=<? echo $agents['party_id']; ?>" ><? echo $tongue['store_contact']; ?></a>
       		 </li>
        		<li id="u_cart">
           		 <a href="/agent_store_help.php?party_id=<? echo $agents['party_id']; ?> " ><? echo $tongue['store_buy']; ?></a>
            
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

	
    
    <li class="product first" id="family-prod">
<a href=""  ><span>
			<img src="/nebula/images/aos/new.png" class="new-icon pngfix" alt="NEW">
			<img src="http://images.imerrow.com/images/store/new_jpgs/yourproducthere1.jpg" alt="">
			
			<div class="custome_product_name"><strong><? echo $agent_store['custom_center_product1_name'];?></strong> 
		</span></a></li></div>
	
	  
      
      
   
    <li class="product" id="family-prod-air">
	<a href="<? echo $url; ?>"  ><span>
			<img src="/nebula/images/aos/new.png" class="new-icon pngfix" alt="NEW">
			<img src="http://images.imerrow.com/images/store/new_jpgs/yourproducthere2.jpg" alt="">
			
		<div class="custom_product_name">	<strong><? echo $agent_store['custom_center_product2_name'];?></strong> 
		</span></a></li></div>
	
	   
    <li class="product" id="family-prod-pro">
		<a href="<? echo $url; ?>"  ><span>
			<img src="/nebula/images/aos/new.png" class="new-icon pngfix" alt="NEW">
			<img src="http://images.imerrow.com/images/store/new_jpgs/yourproducthere3.jpg" alt="">
			
			<div class="custom_product_name"><strong><? echo $agent_store['custom_center_product3_name'];?></strong> 
		</span></a></li></div>
	
	
	 
	
	    
    <li class="product last" id="family-prod-pro">
	<a href="<? echo $url; ?>"  ><span>
			<img src="/nebula/images/aos/new.png" class="new-icon pngfix" alt="NEW">
			<img src="http://images.imerrow.com/images/store/new_jpgs/yourproducthere4.jpg" alt="">
			
			<div class="custom_product_name"><strong><? echo $agent_store['custom_center_product4_name'];?></strong> 
		</span></a></li></div>
</ul>
<div class="edit3"> <a href="http://merrow.com/widget_config_center_parts.php?placeValuesBeforeTB_=savedValues&TB_iframe=true&height=400&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div>
</div>
				
    <!-- ##################  
	end second row of products
	 ################## -->		
     				
	<ul class="banner-grid">
	<li class="first"><a href=""><img src="http://images.imerrow.com/images/store/new_jpgs/emblemad.jpg" alt="merrow emblems are....awesome!" width="204" height="250" /></a></li><li class="middle"><a href=""><img src="http://images.imerrow.com/images/store/new_jpgs/netting1.jpg" alt="netting machines from merrow" width="204" height="250" /></a></li><li class="last"><a href=""><img src="http://images.imerrow.com/images/store/new_jpgs/blankets.jpg" alt="blankets, whose cold? you...or you?" width="204" height="250" /></a></li>
	</ul>

<div class="module producttiles">
<h2><span>Products Available in <? echo $agents['city']; ?>, <? echo $agents['Country']; ?></span></h2>
<div class="modulecontent">
<div class="product-grid">

    <? 
	
	$productname==$agent_store['custom_merrow_center1'];
	// Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='$productname'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 $advert = $juju['advertisement_line_for_store'];
 
?>
<ul class="product-row first-row">
<li class="product first-tile">
<dl>
<dt class="name">
<a href="<? echo $url; ?>" ><? echo $msmc; ?></a>
</dt>
 <dd class="image">
<a href="<? echo $url; ?>"  >
<img src="<? echo $img; ?>" alt="Thread" width="90" height="80" />
 </a>
 </dd>
 <dd class="starrating">
<span class="defstar">
<abbr class="rating" title="3.5">
<img src="http://images.imerrow.com/images/aos/stars_61x13_bluonwht_35.gif" alt="3.5" width="61" height="13" />
 </abbr>
  </span>
 </dd>
 <dd class="price">from <? echo $price; ?>
 </dd>
 <dd class="more">
<a href="<? echo $url; ?>"  ><? echo $advert; ?></a>
</dd>
 </dl>
 </li>
 
 
     <? $productname==$agent_store['custom_merrow_center2'];
	// Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='$productname'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 $advert = $juju['advertisement_line_for_store'];
 
?>
 
 <li class="product">
<dl>
<dt class="name">
 <a href="<? echo $url; ?>" ><? echo $msmc; ?></a>
</dt>
 <dd class="image">
<a href="<? echo $url; ?>"  ></a>
<img src="<? echo $img; ?>" alt="titanium" width="90" height="80" />
</dd>
 <dd class="starrating">
<span class="defstar">
 <abbr class="rating" title="4.0">
<img src="/nebula/images/aos/stars_61x13_bluonwht_40.gif" alt="4.0" width="61" height="13" />
</abbr>
</span>
</dd>
<dd class="price">from <? echo $price; ?>
</dd>
<dd class="more">
<a href="<? echo $url; ?>" ><? echo $advert; ?></a>
</dd>
</dl>
</li>
   
   
       <? $productname==$agent_store['custom_merrow_center3'];
	// Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='$productname'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 $advert = $juju['advertisement_line_for_store'];
 
?>     
          
 <li class="product">
<dl>
<dt class="name">
 <a href="<? echo $url; ?>" ><? echo $msmc; ?></a>
</dt>
 <dd class="image">
<a href="<? echo $url; ?>" ></a>
<img src="<? echo $img; ?>" alt="tools" width="90" height="80" />
</dd>
 <dd class="starrating">
<span class="defstar">
 <abbr class="rating" title="4.0">
<img src="/nebula/images/aos/stars_61x13_bluonwht_40.gif" alt="4.0" width="61" height="13" />
</abbr>
</span>
</dd>
<dd class="price">from <? echo $price; ?>
</dd>
<dd class="more">
<a href="<? echo $url; ?>" ><? echo $advert; ?></a>
</dd>
</dl>
</li>
    
    
        <? $productname==$agent_store['custom_merrow_center4'];
	// Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='$productname'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 $advert = $juju['advertisement_line_for_store'];
 
?>
    
<li class="product last-tile">
<dl>
<dt class="name" title="screws">
<a href="<? echo $url; ?>" ><? echo $msmc; ?></a>
</dt>
<dd class="image">
<a href="<? echo $url; ?>" >
<img src="<? echo $img; ?>" alt="you're screwed" width="90" height="80" /> </a>
</dd>
<dd class="starrating">
<span class="defstar">
<abbr class="rating" title="5.0">
<img src="/nebula/images/aos/stars_61x13_bluonwht_50.gif" alt="5.0" width="61" height="13" />
 </abbr>
  </span>
</dd>
<dd class="price"> from <? echo $price; ?>
 </dd>
<dd class="more">
<a href="<? echo $url; ?>" ><? echo $advert; ?></a>
</dd>
</dl>
</li>
</ul>

      <? $productname==$agent_store['custom_merrow_center5'];
	// Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='$productname'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 $advert = $juju['advertisement_line_for_store'];
 
?>
    
<ul class="product-row last-row">
        
<li class="product first-tile">
<dl>
<dt class="name">
<a href="<? echo $url; ?>" ><? echo $msmc; ?></a>
</dt>
 <dd class="image">
<a href="<? echo $url; ?>"  >
<img src="<? echo $img; ?>" alt="middle finger" width="90" height="80" />
 </a>
 </dd>
 <dd class="starrating">
<span class="defstar">
<abbr class="rating" title="3.5">
<img src="http://images.imerrow.com/images/aos/stars_61x13_bluonwht_35.gif" alt="3.5" width="61" height="13" />
 </abbr>
  </span>
 </dd>
 <dd class="price">from <? echo $price; ?>
 </dd>
 <dd class="more">
<a href="<? echo $url; ?>"  ><? echo $advert; ?></a>
</dd>
 </dl>
 </li>
 
     <? $productname==$agent_store['custom_merrow_center6'];
	// Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='$productname'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 $advert = $juju['advertisement_line_for_store'];
 
?>
       
<li class="product">
<dl>
<dt class="name">
 <a href="<? echo $url; ?>" ><? echo $msmc; ?></a>
</dt>
 <dd class="image">
<a href="<? echo $url; ?>"  ></a>
<img src="<? echo $img; ?>" alt="Looper Carrier" width="90" height="80" />
</dd>
 <dd class="starrating">
<span class="defstar">
 <abbr class="rating" title="4.0">
<img src="/nebula/images/aos/stars_61x13_bluonwht_40.gif" alt="4.0" width="61" height="13" />
</abbr>
</span>
</dd>
<dd class="price">from <? echo $price; ?>
</dd>
<dd class="more">
<a href="<? echo $url; ?>" ><? echo $advert; ?></a>
</dd>
</dl>
</li>
    
    <? $productname==$agent_store['custom_merrow_center7'];
	// Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='$productname'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 $advert = $juju['advertisement_line_for_store'];
 
?>    
        
<li class="product">
<dl>
<dt class="name">
 <a href="<? echo $url; ?>" ><? echo $msmc; ?></a>
</dt>
 <dd class="image">
<a href="<? echo $url; ?>"  ></a>
<img src="<? echo $img; ?>" alt="Nett Wet Nett hoohah" width="90" height="80" />
</dd>
 <dd class="starrating">
<span class="defstar">
 <abbr class="rating" title="4.0">
<img src="/nebula/images/aos/stars_61x13_bluonwht_40.gif" alt="4.0" width="61" height="13" />
</abbr>
</span>
</dd>
<dd class="price">from <? echo $price; ?>
</dd>
<dd class="more">
<a href="<? echo $url; ?>" ><? echo $advert; ?></a>
</dd>
</dl>
</li>

    <? $productname==$agent_store['custom_merrow_center8'];
	// Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='$productname'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 $advert = $juju['advertisement_line_for_store'];
 
?>

<li class="product last-tile">
<dl>
<dt class="name" title="screws">
<a href="<? echo $url; ?>" ><? echo $msmc; ?></a>
</dt>
<dd class="image">
<a href="<? echo $url; ?>" >
 <img src="<? echo $img; ?>" alt="Feed Me, Dog!" width="90" height="80" />
</dd>
<dd class="starrating">
<span class="defstar">
<abbr class="rating" title="5.0">
<img src="/nebula/images/aos/stars_61x13_bluonwht_50.gif" alt="5.0" width="61" height="13" />
 </abbr>
  </span>
</dd>
<dd class="price"> from <? echo $price; ?>
 </dd>
<dd class="more">
<a href="<? echo $url; ?>" ><? echo $advert; ?></a>
</dd>
</dl>
</li>
</ul>
</div>

    <div class="edit2"> <a href="http://merrow.com/widget_config_contactinfo.php?placeValuesBeforeTB_=savedValues&TB_iframe=true&height=400&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div>       
</div>
						
<div class="module_btm">&nbsp;</div>
</div>
       
                  
				
   <div class="module">
	<h2 class="promos">Merrow has more...</h2>
	<div class="module_top">&nbsp;</div>
	<div class="modulecontent">
		<ul id="more_promos">
		<li class="first">
				    <? // Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM agent_asin WHERE id='$top19'")
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
				<img src="http://images.imerrow.com/images/store/new_jpgs/dress_store.jpg" alt="Buy a Mac plus Adobe and save."></a>
			</li>
			<li>
				    <? // Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM agent_asin WHERE id='$top20'")
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
				    <? // Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM agent_asin WHERE id='$top21'")
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
				<img src="http://images.imerrow.com/images/store/new_jpgs/table_store.jpg" alt=""></a>
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
    <div class="edit4"> <a href="http://merrow.com/widget_config_description.php?placeValuesBeforeTB_=savedValues&TB_iframe=true&height=400&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div>      
</div>
	<div class="module_btm">&nbsp;</div>
					</div>
				<div class="module" id="topsellers">
						<h2><span>More Products</span></h2>
						<div class="modulecontent">
	
    <div class="list_head"><h3><span>Machine Related</span></h3></div>
  
    <div class="edit5"> <a href="http://merrow.com/widget_config_choices.php?placeValuesBeforeTB_=savedValues&TB_iframe=true&height=400&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div>           
    <div class="list_content">
        <ul class="ordered">
            
              <? 
			  
   $catalog1=$agent_store['merrow_catalog1']; 
    $catalog2=$agent_store['merrow_catalog2']; 
	 $catalog3=$agent_store['merrow_catalog3']; 
			  
			  // Get all the data from the "agent_asin" table which is where our product info is kept
$result5 = mysql_query("SELECT product_name, amzn_url, advertisement_line_for_store FROM agent_asin WHERE search_terms_1='$catalog1'")
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
<div class="edit5"> <a href="http://merrow.com/widget_config_choices.php?placeValuesBeforeTB_=savedValues&TB_iframe=true&height=400&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div>     
    <div class="list_content">
        <ul class="ordered">
            
             <?   // Get all the data from the "agent_asin" table which is where our product info is kept
$result5 = mysql_query("SELECT product_name, amzn_url, advertisement_line_for_store FROM agent_asin WHERE search_terms_1='$catalog2'")
or die(mysql_error());



 
   while($juju = mysql_fetch_array( $result5 )) { 
    $msmc = $juju['product_name'];
    $url = $juju['amzn_url'];
 
?>
                <li><a href="<? echo $url; ?>"><? echo $msmc; ?></a></li>
                
                <? }  ?>
            
        </ul>
    </div>        
        
<div class="list_head"><h3><span>Merrow Customer Testimonials</span></h3></div>
<div class="edit5"> <a href="http://merrow.com/widget_config_choices.php?placeValuesBeforeTB_=savedValues&TB_iframe=true&height=400&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div>     
    <div class="list_content">
        <ul class="ordered">
            
             <?   // Get all the data from the "agent_asin" table which is where our product info is kept
$result5 = mysql_query("SELECT product_name, amzn_url, advertisement_line_for_store FROM agent_asin WHERE search_terms_1='$catalog3'")
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
	             <? // Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT product_name, amzn_url FROM agent_asin WHERE store_bomlist='1'")
or die(mysql_error());

?>
 
 
            
                
             
    
    <ul id="shopaccessories">
    <li><a href="http://merrow.com/contact_general.php?key=agentcontact&party_id=<? echo $agent['party_id']; ?>" >contact us</a></li>
      
	</ul>
	
    <div id="morestores">
<div class="list_content">

        <ul>
            
                    
           	  <li><a href="http://merrow.com/formb.php?party_id=<? echo $agents['party_id']; ?>">Phone: <? echo $agent_store['phone']; ?></a></li>
                <li><a href="http://merrow.com/formb.php?party_id=<? echo $agents['party_id']; ?>">Fax: <? echo $agent_store['fax']; ?></a></li>
                <li><a href="">Email:<? echo $agent_store['email']; ?></a></li> 
               
            
        </ul>
         <div class="edit1"> <a href="http://merrow.com/widget_config_contactinfo.php?placeValuesBeforeTB_=savedValues&TB_iframe=true&height=400&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div>        
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
		
   
  $result4 = mysql_query("SELECT product_name, msmc_id, amzn_url, advertisement_line_for_store FROM agent_asin WHERE ot_id=$machine1")
or die(mysql_error());
 
   $ourmachines = mysql_fetch_array( $result4 );
   
   
   ?>          
             
     <li><a href="<? echo $ourmachines['amzn_url']; ?>">  <? echo $ourmachines['msmc_id']; ?></a></li>
     
	 <?
       $result4 = mysql_query("SELECT product_name, msmc_id, amzn_url, advertisement_line_for_store FROM agent_asin WHERE ot_id=$machine2")
or die(mysql_error());
 
   $ourmachines = mysql_fetch_array( $result4 );
   
   
   ?>          
             
     <li><a href="<? echo $ourmachines['amzn_url']; ?>">  <? echo $ourmachines['msmc_id']; ?></a></li>
     
      <?
       $result4 = mysql_query("SELECT product_name, msmc_id, amzn_url, advertisement_line_for_store FROM agent_asin WHERE ot_id=$machine3")
or die(mysql_error());
 
   $ourmachines = mysql_fetch_array( $result4 );
   
   
   ?>          
             
     <li><a href="<? echo $ourmachines['amzn_url']; ?>">  <? echo $ourmachines['msmc_id']; ?></a></li>
     
      <?
       $result4 = mysql_query("SELECT product_name, msmc_id, amzn_url, advertisement_line_for_store FROM agent_asin WHERE ot_id=$machine4")
or die(mysql_error());
 
   $ourmachines = mysql_fetch_array( $result4 );
   
   
   ?>          
             
     <li><a href="<? echo $ourmachines['amzn_url']; ?>">  <? echo $ourmachines['msmc_id']; ?></a></li>
     
      <?
       $result4 = mysql_query("SELECT product_name, msmc_id, amzn_url, advertisement_line_for_store FROM agent_asin WHERE ot_id=$machine5")
or die(mysql_error());
 
   $ourmachines = mysql_fetch_array( $result4 );
   
   
   ?>          
             
     <li><a href="<? echo $ourmachines['amzn_url']; ?>">  <? echo $ourmachines['msmc_id']; ?></a></li>
     
      <?
       $result4 = mysql_query("SELECT product_name, msmc_id, amzn_url, advertisement_line_for_store FROM agent_asin WHERE ot_id=$machine6")
or die(mysql_error());
 
   $ourmachines = mysql_fetch_array( $result4 );
   
   
   ?>          
             
     <li><a href="<? echo $ourmachines['amzn_url']; ?>">  <? echo $ourmachines['msmc_id']; ?></a></li>
     
			
  </ul>

    </div>        
    <div class="list_foot"><p class="more"><a href="">more&hellip;</a></p>
    <div class="edit2"> <a href="http://merrow.com/widget_config_machines.php?placeValuesBeforeTB_=savedValues&TB_iframe=true&height=400&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div> </div>           
<div class="list_head"><h3><a href="">more products</a></h3></div>
    <div class="list_content">
        <ul>
            
      <li><a href="">  <? echo $agent_store['custom_product1_name']; ?></a></li>
         <li><a href="">  <? echo $agent_store['custom_product2_name']; ?></a></li>
            <li><a href="">  <? echo $agent_store['custom_product3_name']; ?></a></li>
               <li><a href="">  <? echo $agent_store['custom_product4_name']; ?></a></li>
                  <li><a href="">  <? echo $agent_store['custom_product5_name']; ?></a></li>
                     <li><a href="">  <? echo $agent_store['custom_product6_name']; ?></a></li>
                        <li><a href="">  <? echo $agent_store['custom_product7_name']; ?></a></li>
                           <li><a href="">  <? echo $agent_store['custom_product8_name']; ?></a></li>
                  
            
        </ul>

    </div>        
    <div class="list_foot"><p class="more"><a href="">more&hellip;</a></p>
    <div class="edit2"> <a href="http://merrow.com/widget_config_choices.php?placeValuesBeforeTB_=savedValues&TB_iframe=true&height=400&width=700&" title="configure the store by clicking "change" and updating the fields" class="thickbox"><img name="" src="http://images.imerrow.com/images/edit_button.jpg" alt=""></a></div> </div>              


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
			<p class="more"><a href="http://merrow.com/cephei/contact_general.php?key=agent&name=<? echo $agents['party_id']; ?>" ><nobr>learn more</nobr></a></p>
	</div>
    </div>
	<div class="module_btm">&nbsp;</div>
			</div>
			
            
  
        
    </div>
</div>







</body>
</html>

<? } else { ?> fiddling with the URL eh? .... click <a href="http://merrow.com/merrow.php">here</a> to continue <? }?> 

