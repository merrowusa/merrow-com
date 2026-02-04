<? $page_id = $_GET['s']; ?>
<? include ('widget_new_sql_genpageload.php'); ?>
<!DOCTYPE html><html lang="en">
<head>
<!--META DATA-->
<? include ('widget_new_metadata.php'); ?>
<!--STYLE SHEETS-->
<? include ('widget_new_styles.php'); ?>
<!--GOOGLE ANALYTICS-->
<? include ('widget_analytics.php'); ?>
</head>
<!--JS TOP-->
<? include ("widget_js.php"); ?>
<? include ("site.js"); ?>

<!-- ##################
DOCUMENT LOAD
################## -->
   <body id="daypass"> 
    	  <a name="top"></a>
   		 <div class="container_16">	
   
   <!-- NEW MENU -->
   <? include ("header_test.php"); ?>
   <!--END MENU -->
   

	<div class="center_bloc">
		 <div class="body_doc">
	 		 <div class="man" id="fat"></div>
 		  		<div class="clear"></div>
 		   
<!-- SEGUE TRANSITION -->

<!--MAIN PAGE -->
<? $bateman = $_GET['s']; 
   $creamy = mysql_query("SELECT *  FROM customer_stories
   WHERE customer_stories.app_key = '$bateman' 
   AND `publish` = 'yes'")
   or die(mysql_error()); 
   $cumbutter = mysql_fetch_array($creamy);
   $KEY = $cumbutter['app_key']; ?>

 <div class="c_content">
   	<div class="top_container_c">
 	<img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/<? echo $KEY;?>_03.gif" width="698" height="87" id="logo"/>
	 	<ul id="customer_links"><li id="<? if($bateman=='csrw'){ echo 'active';} ?>"><a href="/ncs1.php?s=csrw">FASHION &amp; DESIGN CUSTOMER STORY</a></li><li id="<? if($bateman=='csb'){ echo 'active';} ?>"><a href="/ncs1.php?s=csb">TECHNICAL SEAMING CUSTOMER STORY</a></li><li id="<? if($bateman=='csam'){ echo 'active';} ?>"><a href="/ncs1.php?s=csam">END-TO-END JOINING CUSTOMER STORY</a></li></ul>	</div>
 	<div class="splash_container_c">
 	<img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/<? echo $KEY;?>_07.gif" width="698" height="314" id="customer"/>
 	 <div class="customer_boxes" id="customer"><p>"<? echo $cumbutter['quote']; ?>"</p><p class="signed">-<? echo $cumbutter['quote_author']; ?></p></div>
 	</div>
 	<div class="clear"></div>
 	
 	<div class="copy_container_c" id=""><div class="left_col"><div class="c_titles"><? echo $cumbutter['p1_title']; ?></div><p class="c_copy"><? echo $cumbutter['p1']; ?></p><div class="c_titles"><? echo $cumbutter['p2_title']; ?></div><p class="c_copy"><? echo $cumbutter['p2']; ?></p></div><div class="right_col"><div class="c_titles"><? echo $cumbutter['p3_title']; ?></div><p class="c_copy"><? echo $cumbutter['p3']; ?></p><div class="c_titles"><? echo $cumbutter['p4_title']; ?></div><p class="c_copy"><? echo $cumbutter['p4']; ?> </p></div></div>
 	<div class="adbox_container_c"> <div class="customer_ads" id="boxshadow"><div class="ad_title">The Application</div><div class="app_subhead"><? echo $cumbutter['app_title']; ?></div><a href="<? echo $cumbutter['app_link']; ?>"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/<? echo $KEY;?>_11.gif" id="left" /></a><div class="ad_copy"><? echo $cumbutter['app_copy']; ?></div></div><div class="customer_ads" id="boxshadow"><div class="ad_title">The Machine</div><div class="app_subhead"><? echo $cumbutter['machine_title']; ?></div><a href="<? echo $cumbutter['machine_link']; ?>"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/<? echo $KEY;?>_15.gif" id="left" /></a><div class="ad_copy"><? echo $cumbutter['machine_copy']; ?></div></div><div class="customer_ads" id="boxshadow"><div class="ad_title">The Stitch</div><div class="app_subhead"><? echo $cumbutter['stitch_title']; ?></div><a href="<? echo $cumbutter['stitch_link']; ?>" rel="prettyPhoto" title=""><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/<? echo $KEY;?>_19.gif"  alt="Customer Stitch Sample" id="left"/> </a><div class="ad_copy"><? echo $cumbutter['stitch_copy']; ?></div></div></div>



 </div>
       
<!--END MAIN PAGE -->        
      
<div class="clear"></div>
             	
             
             	
 <!-- RESOLVE TRANSITION -->                               
                      
         </div>    
      <div class="footer_border"></div> 
      </div>
     </div>
   

<!-- ##################
FOOTER LOAD
################## -->
<? include ('widget_feet.php'); ?>

		    </body> 
</html>