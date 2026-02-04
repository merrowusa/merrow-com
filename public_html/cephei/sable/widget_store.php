<!DOCTYPE html PUBLIC "-//W3C//HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<title>welcome to the Merrow store!</title>
<meta name="description" content="Welcome to the Merrow Store" />

<? if ($agents['account_name'] == null) { ?> fiddling with the URL eh? .... click <a href="http://merrow.com/cephei/sable/fp_dynamicstore.php">here</a> to continue <? } else { ?> 

	<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
    </script>
</head>
    

    
<body class="home">
	
	<div class="as-js-wrap">
    </div>

	
	<img name="Image" style="display:none"></img>

	<div id="aos-page">
	<div class="store" id="globalheader">
    <div id="aos_header">
    <div id="masthead">
    <div id="masthead_wrap">
       
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
        
        <li class="title"><span>Welcome to the Merrow store for <? echo $country_name; ?></span></li>
         
		
    </ol>

  


 

</div><div id="cgmheader"> </div>

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
				<div id="aos_family">
				   <h3 class="xs">70 Class</h3>
                     <ul id="family-ipod" class="hc first-row">
                        
    
    <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, mrsp FROM asin WHERE id='2732'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
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
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, mrsp FROM asin WHERE id='2733'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
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
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, mrsp FROM asin WHERE id='2734'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
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
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, mrsp FROM asin WHERE id='2735'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
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

	    <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='3251'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 $advert = $juju['advertisement_line_for_store'];
 
?>
    
    <li class="product first" id="family-prod">
<a href="<? echo $url; ?>"  ><span>
			<img src="/nebula/images/aos/new.png" class="new-icon pngfix" alt="NEW">
			<img src="<? echo $img; ?>" alt="">
			
			<strong><? echo $msmc; ?></strong> From <? echo $two_letter_country_code;?> <? echo $price; ?>
		</span></a></li>
	
	   
	
	    <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='2741'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 $advert = $juju['advertisement_line_for_store'];
 
?>
    <li class="product" id="family-prod-pro">
		<a href="<? echo $url; ?>"  ><span>
			<img src="/nebula/images/aos/new.png" class="new-icon pngfix" alt="NEW">
			<img src="<? echo $img; ?>" alt="">
			
			<strong><? echo $msmc; ?></strong> From <? echo $two_letter_country_code;?> <? echo $price; ?>
		</span></a></li>
	
	
	    <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='3253'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 $advert = $juju['advertisement_line_for_store'];
 
?>
    <li class="product" id="family-prod-i">
	<a href="<? echo $url; ?>"  ><span>
			<img src="/nebula/images/aos/new.png" class="new-icon pngfix" alt="NEW">
			<img src="<? echo $img; ?>" alt="">
			
			<strong><? echo $msmc; ?></strong> From <? echo $two_letter_country_code;?> <? echo $price; ?>
		</span></a></li>
	
	    <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='3252'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 $advert = $juju['advertisement_line_for_store'];
 
?>
    <li class="product last" id="family-prod-pro">
	<a href="<? echo $url; ?>"  ><span>
			<img src="/nebula/images/aos/new.png" class="new-icon pngfix" alt="NEW">
			<img src="<? echo $img; ?>" alt="">
			
			<strong><? echo $msmc; ?></strong> From <? echo $two_letter_country_code;?> <? echo $price; ?>
		</span></a></li>
</ul>
</div>
				
    <!-- ##################  
	end second row of products
	 ################## -->		
     				
	<ul class="banner-grid">
		<li class="first"><a href="http://store.merrow.com/Merrow-MG3U-High-Speed-Industrial-Sewing/M/B001AVK6R0.htm"><img src="http://images.imerrow.com/images/store/new_jpgs/emblemad.jpg" alt="merrow emblems are....awesome!" width="204" height="250" /></a></li><li class="middle"><a href="http://store.merrow.com/Model-MG3DGE7-Merrow-Sewing-Machine/M/B001AVNB1S.htm"><img src="http://images.imerrow.com/images/store/new_jpgs/netting1.jpg" alt="netting machines from merrow" width="204" height="250" /></a></li><li class="last"><a href="http://store.merrow.com/Model-18E-Merrow-Sewing-Machine-for/M/B001AVPDNW.htm"><img src="http://images.imerrow.com/images/store/new_jpgs/blankets.jpg" alt="blankets, whose cold? you...or you?" width="204" height="250" /></a></li>
	</ul>

<div class="module producttiles">
<h2><span>Hot Stuff</span></h2>
<div class="modulecontent">
<div class="product-grid">

  
    
</ul>
</div>
</div>
						
<div class="module_btm">&nbsp;</div>
</div>
       
                  
				
   <div class="module">
	<h2 class="promos">Merrow has more...</h2>
	<div class="module_top">&nbsp;</div>
	<div class="modulecontent">
		<ul id="more_promos">
		<li class="first">
				    <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='2729'")
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
				<img src="http://images.imerrow.com/images/store/new_jpgs/dress_store.jpg" alt="Merrow Apparel!"></a>
			</li>
			<li>
				    <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='2730'")
or die(mysql_error());
 $juju = mysql_fetch_array($result); 
 $msmc = $juju['msmc_id'];
 $url = $juju['amzn_url'];
 $img = $juju['imgstoreurl'];
 $price = $juju['mrsp'];
 $advert = $juju['advertisement_line_for_store'];
 
?>

                <h3>The RAIL</h3>
				<p>Designed for Merrow</p>
				<a href="<? echo $url; ?>" class="superlink"  >
				<img src="http://images.imerrow.com/images/store/new_jpgs/rail_store.jpg" alt="RAIL"></a>

			</li>
			<li class="last">
				    <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT imgstoreurl, msmc_id, amzn_url, advertisement_line_for_store, mrsp FROM asin WHERE id='2731'")
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
<div class="module footerblock">
						<h2><span>Why Buy at the Merrow Store</span></h2>
						<div class="modulecontent">
				<div id="store_details">

	<div class="column first">
		<div class="modulecontentwrap">
			<div align="center"><a href="http://merrow.com/cephei/sable/fp_merrow_stitching.php?app=mainpage&version=first" ><img src="http://images.imerrow.com/images/store/new_jpgs/rube_test_130.jpg" alt=""></a>
			  </div>
			<h3>Choose by Stitch</h3>
			<p>Order the perfect stitch</p>
			<p class="more"><a href="http://merrow.com/cephei/sable/fp_merrow_stitching.php?app=mainpage&version=first" >Learn more</a></p>
		</div>									
		<div class="modulecontentwrap last-row">

			<div align="center"><a href="" ><img src="http://images.imerrow.com/images/store/new_jpgs/freeshipping.png" alt=""></a>
			  </div>
			<h3>Free shipping</h3>
			<p>Free ground shipping on retail orders over $500.</p>
				
		</div>					
	</div>
	<div class="column last">								
		<div class="modulecontentwrap">
			<div align="center"><a href="http://merrow.com/cephei/sable/fp_ebay.php" ><img src="http://images.imerrow.com/images/store/new_jpgs/logoEbay_x130.png" alt="Signature Ebay"></a>
			  
			  </div>
			<h3>Buy Used Merrow</h3>
			<p>We support our community</p>
			<p class="more"><a href="http://merrow.com/cephei/sable/fp_ebay.php" >Learn more</a></p>
		</div>
		<div class="modulecontentwrap last-row">
			<div align="center"><a href="" ><img src="http://images.imerrow.com/images/store/new_jpgs/zigg_stainless.jpg" alt=""></a>
			  </div>
			<h3>Custom Built Products</h3>

			<p>We'll build to order</p>
			<p class="more"><a href="http://store.merrow.com/Merrow-70Z1-Ziggurat-Sewing-Table/M/B001AVK3L4.htm" >See an Example</a></p>
		</div>
	</div>
</div>
<div id="store_updates">
	<div class="modulecontentwrap">

		<h3>Check Your Order</h3>
		<p>See order status, track shipment, pre-sign for your package, make a change, return items, and more.</p>
		<p class="more"><a href="http://store.merrow.com/myAccount.htm" >Visit Order Status</a></p>
	</div>


	<div id="email_notification" class="modulecontentwrap email_notification">
		<div class="notify_off">

			
			<h3>Keep me informed</h3>
			<p>Receive emails about special offers, promotions, exclusive product information and news.</p>
			<p class="more"><a href="http://merrow.com/cephei/sable/fp_contact_general.php">Sign up now</a></p>
		</div>
		
	
	</div>
</div>
		
        
					</div>
						<div class="module_btm">&nbsp;</div>

					</div>
					</div>
			
			<hr/>
            
			<div id="secondary"><div id="owmheader"> </div>
                 <div id="I_am_user_nav">
  <ul>
    <li id="I_help">
     <a href="http://merrow.com/cephei/sable/fp_support.php"  >Help</a>
       </li>
			<li id="I_account">
            <a href="http://store.merrow.com/myAccount.htm"  >Account</a>
       		 </li>
        		<li id="I_cart">
           		 <a href="http://store.merrow.com/cart.htm" >Cart</a>
            
 </li>
</ul>

</div>
				<div class="module list" id="newtothestore">
						<h2><span>Merrow Needles</span></h2>
						<div class="modulecontent">
 <div class="list_content">
        <ul>

<? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT product_name, brand, msmc_id, amzn_url, advertisement_line_for_store FROM asin WHERE store_needles='1'")
or die(mysql_error());


 
   while($juju = mysql_fetch_array( $result )) { 
    $msmc = $juju['brand'];
	$nd = $juju['msmc_id'];
    $url = $juju['amzn_url'];
 
?>
                <li><a href="<? echo $url; ?>"><? echo $msmc; ?> <? echo $nd; ?></a></li>
                
                <? }  ?>
           
            
        </ul>
    </div>        
</div>
	<div class="module_btm">&nbsp;</div>
					</div>
				<div class="module" id="topsellers">
						<h2><span>Top Sellers</span></h2>
						<div class="modulecontent">
	
    <div class="list_head"><h3><span>Machine Related</span></h3></div>
    <div class="list_content">
        <ul class="ordered">
            
              <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT product_name, amzn_url, advertisement_line_for_store FROM asin WHERE store_topsellers='1'")
or die(mysql_error());


 
   while($juju = mysql_fetch_array( $result )) { 
    $msmc = $juju['product_name'];
    $url = $juju['amzn_url'];
 
?>
                <li><a href="<? echo $url; ?>"><? echo $msmc; ?></a></li>
                
                <? }  ?>
            
        </ul>
    </div>        
        
<div class="list_head"><h3><span>Specials</span></h3>
</div>
    <div class="list_content">
        <ul class="ordered">
            
             <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT product_name, amzn_url, advertisement_line_for_store FROM asin WHERE store_specials='1'")
or die(mysql_error());


 
   while($juju = mysql_fetch_array( $result )) { 
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
<div class="service_picture">	<a href=""  ><img src="http://images.imerrow.com/images/service_machine.jpg" alt=""></a></div>
	<h3>Factory Service</h3>
	<p>With every machine purchase comes the optional Merrow Support Plan</p>
	<p class="more"><a href="http://merrow.com/cephei/sable/fp_contact_general.php?key=learnsupport"  >Learn more</a></p>
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
    
        <li><a href="http://store.merrow.com/category/10239033441/1/Sewing-Machines.htm"  >Buy Machines</a></li>
    
        <li><a href="http://store.merrow.com/category/10239014321/1/Genuine-Merrow-Parts.htm" >Buy Parts</a></li>
    
        <li><a href="http://store.merrow.com/category/10239030961/1/Sewing-Machine-Needles.htm" >Buy Needles</a></li>
    
</ul>
	             <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT product_name, amzn_url FROM asin WHERE store_bomlist='1'")
or die(mysql_error());

?>
 
 
            
                
             
    
    <ul id="shopaccessories">
    <li><a href="http://store.merrow.com/category/10239014441/1/By-Sewing-Machine-Class.htm" >parts Catalog by Machine type</a></li>
      <div class="machineform" id="store">
        <form action="http://store.merrow.com" name="form" target="_parent" id="form1" >
          <select name="jumpMenu1" id="jumpMenu1" onChange="MM_jumpMenu('parent',this,0)">
           
           
		   
		   <option selected>Choose Machine</option>
		   
		   <? while($juju = mysql_fetch_array( $result )) { 
    $msmc = $juju['product_name'];
    $url = $juju['amzn_url'];
 
?>
            <option value="<? echo $url; ?>"><? echo $msmc; ?></option>
         <? }  ?>
         
          </select>
              </form>
              
                
      </div>
	</ul>
	
    <div id="morestores">
<div class="list_content">

        <ul>
            
                <li><a href="http://merrow.com/cephei/sable/fp_agentlogin.php">Distributor Login</a></li>
            	<li><a href="http://merrow.com/cephei/sable/fp_agentmap.php">Find a Distributor</a></li>
            	<li><a href="http://merrow.com/cephei/sable/fp_contact_general.php">Request Local Support</a></li>
            
        </ul>
    </div>        
        
						</div>
					
				</div>

				<div class="module_btm">&nbsp;</div>
			</div>

			
				<div class="module list" id="popularaccessories">
					<h2><span>Merrow Tools</span></h2>
					<div class="modulecontent">
	 <div class="list_head"><h3><a href="http://store.merrow.com/category/10398246041/1/Accessories.htm">for Sewing Machines</a></h3></div>

    <div class="list_content">
        <ul>
            
              <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT product_name, amzn_url, advertisement_line_for_store FROM asin WHERE store_tools='1'")
or die(mysql_error());


 
   while($juju = mysql_fetch_array( $result )) { 
    $msmc = $juju['product_name'];
    $url = $juju['amzn_url'];
 
?>
                <li><a href="<? echo $url; ?>"><? echo $msmc; ?></a></li>
                
                <? }  ?>
            
        </ul>

    </div>        
    <div class="list_foot"><p class="more"><a href="http://store.merrow.com/category/10398246041/1/Accessories.htm">more&hellip;</a></p></div>    
<div class="list_head"><h3><a href="http://store.merrow.com/category/10400034481/1/Tables.htm">for Tables &amp; Motors</a></h3></div>
    <div class="list_content">
        <ul>
            
           <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT product_name, amzn_url, advertisement_line_for_store FROM asin WHERE store_tablesmotors='1'")
or die(mysql_error());


 
   while($juju = mysql_fetch_array( $result )) { 
    $msmc = $juju['product_name'];
    $url = $juju['amzn_url'];
 
?>
                <li><a href="<? echo $url; ?>"><? echo $msmc; ?></a></li>
                
                <? }  ?>
            
        </ul>

    </div>        
    <div class="list_foot"><p class="more"><a href="http://store.merrow.com/category/10400034481/1/Tables.htm">more&hellip;</a></p></div>    


 <div class="list_head"><h3><a href="http://store.merrow.com/category/10239014321/1/Genuine-Merrow-Parts.htm">General Catalog</a></h3></div>
    <div class="list_content">
        <ul>
            
              
            
        </ul>
    </div>        
    <div class="list_foot"><p class="more"><a href="http://store.merrow.com/category/10239014321/1/Genuine-Merrow-Parts.htm">click to see our entire general catalog&hellip;</a></p></div>    
 
 
 <div class="list_head"><h3><a href="http://store.merrow.com/category/10239012361/1/Sewing-Extras.htm">Sewing Extras</a></h3></div>
    <div class="list_content">
        <ul>

            

            
        </ul>
    </div>        
    <div class="list_foot"><p class="more"><a href="http://store.merrow.com/category/10239012361/1/Sewing-Extras.htm">click to see lot's of sewing extras&hellip;</a></p></div>    
			</div>
					
                    
                    <div class="module_btm">&nbsp;</div>
				</div>
			
            
            <div class="module footerblock">
					<h2><span>Helpful Links</span></h2>
					<div class="modulecontent">
				<div id="specialdeals-list">
			<ul>
				    <li><a href="http://merrow.com/cephei/sable/fp_needle_configurator.php"> the Needle Configurator</a> </li>
                    <li> <a href="http://merrow.com/cephei/sable/fp_merrow_stitching.php?app=mainpage&version=store">the Application Configurator</a></li>
                    <li> <a href="http://merrow.com/cephei/sable/fp_support.php">our Support Pages</a> </li>
                    <li> <a href="http://merrow.com/cephei/sable/fp_stitch.php">the stitch sample tools</a> </li>
			</ul>
				
			</div>
	<div class="moduledetail">
	
	
		<h3> or call us 800.431.6677 </h3>
	</div>
    </div>
	<div class="module_btm">&nbsp;</div>
			</div>
			
            
  
        
    </div>
</div>







</body>
</html>
<? } ?>

