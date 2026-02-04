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

<style>
div.copy_container_d {
	width: 650px;
	margin-left: 20px;
	float: left;

	overflow: visible;
}

li.li1 {
	font-family:"Helvetica Neue",Arial,Helvetica,Geneva,sans-serif;
	list-style-position: outside;
	color: #4c4c4c;
	line-height: 17px;



}
li.li2 {
font-family:"Helvetica Neue",Arial,Helvetica,Geneva,sans-serif;
list-style-position: outside;
color: #4c4c4c;
line-height: 17px;
}
p.p1 {
	line-height: 17px;
}
div.copy_container_c h1 {
	margin-bottom: 20px;
}
div.left_col p.more {
	margin-top: -15px;
	margin-bottom: 20px;
}
div.right_col p.more {
	margin-top: -15px;
	margin-bottom: 20px;
}

div.splash_container_c{margin-bottom:20px;height:314px;
	float: left;
	width: 70%;
}
div.apply {
	margin-bottom: 20px;
	margin-top: 20px;
}
div.copy_container_c span.title_d3b {
	line-height: 60px;
}
</style>

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

<? $p = $_GET['p'];
	$bateman = $_GET['j']; 
   $creamy = mysql_query("SELECT *  FROM jobs
   WHERE jobs.app_key = '$bateman' 
   AND `publish` = 'yes'")
   or die(mysql_error()); 
   $cumbutter = mysql_fetch_array($creamy);
   $KEY = $cumbutter['app_key']; ?>

 <div class="c_content">
   	<div class="top_container_c">
 	<a href="http://www.merrow.com/njp.php?j=jobs"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/<? echo $KEY;?>_03.gif" width="698" height="87" id="logo"/></a>
	 	<ul id="customer_links"><li id="<? if($bateman=='csrw'){ echo 'active';} ?>"><a href="">INTERESTED IN WORKING  AT MERROW?</a></li><li id="<? if($bateman=='csb'){ echo 'active';} ?>"><a href="">EMAIL OR CALL US:</a></li><li id="<? if($bateman=='csam'){ echo 'active';} ?>"><a href="mailto:working@merrow.com">WORKING@MERROW.COM, 800.431.6677</a></li></ul>	</div>
 	
 	
 	<? if ($p==1) { ?>
 		<div class="copy_container_d">
 		<div class="apply"><a href="mailto:working@merrow.com?subject=purchasing agent"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/ApplyButton.png" /></a></div>
 		<? echo $cumbutter['p1_desc']; ?>
 		</div>
 	
    <? 
 	}
 	else if ($p==2) {
 	?>
 			<div class="copy_container_d">
 				<div class="apply"><a href="mailto:working@merrow.com?subject=engineering"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/ApplyButton.png" /></a></div>
 			<? echo $cumbutter['p2_desc']; ?>
 			</div>
 		
 	<? 
 	
 	}
 	else if ($p==3) {
 		?>
 				<div class="copy_container_d">
 					<div class="apply"><a href="mailto:working@merrow.com?subject=inside sales"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/ApplyButton.png" /></a></div>
 				<? echo $cumbutter['p3_desc']; ?>
 				</div>
 			
 		<? 
 		
 	}
 	
 	else { ?>
 	<div class="splash_container_c">
 		<img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/<? echo $KEY;?>_07.gif" width="698" height="314" id="customer"/></div>
 	<? } ?>
 	
 	
 	 <div class="customer_boxes" id="customer"><p>"<? echo $cumbutter['quote'];?>"</p><p class="signed">-<? echo $cumbutter['quote_author']; ?></p></div>
 	
 
 	

<? if ($p>=1) {
	
}

else { ?>
	<div class="copy_container_c" id=""><span class="title_d3b">OPEN POSITIONS <?echo date("m/d/Y"); ?></span>
		<div class="left_col">
		 	<!--ADD THIS BACK WHEN WE NEED TO HIRE 2 MORE PEOPLE!!!-->
		 	
		 	<div class="c_titles"><? echo $cumbutter['p1_title']; ?></div><p class="c_copy"><? echo $cumbutter['p1']; ?></p><p class="more"><a href="/njp.php?j=jobs&p=1"><!--READ MORE--></a></p>
		 	<div class="c_titles"><? echo $cumbutter['p2_title']; ?></div><p class="c_copy"><? echo $cumbutter['p2']; ?></p><p class="more"><a href="/njp.php?j=jobs&p=2"><!--READ MORE--></a></p>
		 	
		</div>
		
	 	<div class="right_col">
		 	<div class="c_titles"><? echo $cumbutter['p3_title']; ?></div><p class="c_copy"><? echo $cumbutter['p3']; ?></p><p class="more"><a href="/njp.php?j=jobs&p=3">READ MORE</a></p>
		 	<div class="c_titles"><? echo $cumbutter['p4_title']; ?></div><p class="c_copy"><? echo $cumbutter['p4']; ?> </p>
		</div>
	</div>
<? } ?>
 	<div class="adbox_container_c"> 
 	
 	<div class="job_ads" id="boxshadow"><div class="ad_title">FUN</div><div class="app_subhead"><? echo $cumbutter['app_title']; ?></div><a href="<? echo $cumbutter['app_link']; ?>"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/<? echo $KEY;?>_11.gif" id="" /></a><div class="ad_copy"><? echo $cumbutter['app_copy']; ?></div></div>
 	
 	<div class="job_ads" id="boxshadow"><div class="ad_title">HISTORY</div><div class="app_subhead"><? echo $cumbutter['machine_title']; ?></div><a href="<? echo $cumbutter['machine_link']; ?>"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/<? echo $KEY;?>_15.gif" id="" /></a><div class="ad_copy"><? echo $cumbutter['machine_copy']; ?></div></div>
 	
 	<div class="job_ads" id="boxshadow"><div class="ad_title">LOCATION</div><div class="app_subhead"><? echo $cumbutter['stitch_title']; ?></div><a href="<? echo $cumbutter['stitch_link']; ?>"  title=""><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/<? echo $KEY;?>_19.gif"  alt="Locate Merrow" id=""/> </a><div class="ad_copy"><? echo $cumbutter['stitch_copy']; ?></div></div></div>



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