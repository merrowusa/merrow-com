<?php

ob_start("ob_gzhandler");

?>

<?php

$scrub = $_GET['lang'];  
$nifty = $_COOKIE["lang"];


if ( $scrub!=null) { 
$lang = $_GET['lang']; }
elseif ($scrub = null) {
$lang = '$nifty'; }
  

if ( $scrub!=null) { 
setcookie("lang", "$scrub", time()+3600);


} else { } ?>


<?php include ("ip_lang_database.php") ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>MERROW&reg; SEWING MACHINE Co. - Manufacturer of Sergers and Overlock Sewing Machines since 1838</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/thickbox.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/ac_quicktime.css"  type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://merrowservices.s3.amazonaws.com/css/services_cleanup.css" type="text/css" charset="utf-8">
    

	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewing machines">
	<meta name="Description" content="Merrow Sewing Machine Company since 1838. Merrow has a wide selection of overlock machines, sergers and crochet sewing machines  ">
	<meta name="Keywords" content="serger, sergers, Merrowing Machines, overlock machines, overlock machine, overlock sergers, overlock sergermerrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,overlock sewing, overlock, merrow stitching">
	<meta name="viewport" content="width=1024">
	<META name="y_key" content="b0241928e572e190">  
	<meta name="google-site-verification" content="_9qSOieZ5-cE2EMjUTKZyl8EFWckcJct_jFdb9XhTkY" />
	<meta name='robots' content='index,follow' />
    
  	<script type="text/javascript" src="http://merrow.com/cephei/scripts/jquery.js"></script>
	<script type="text/javascript" src="http://merrow.com/cephei/scripts/thickbox.js"></script>

</head>





<!-- ##################  
	 menu
	 ################## -->	

	<?php
	 function curPageName() {
	 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	}
	
	$store = $_GET['store'];
	$headertest = $_GET['party_id'];
	
	?>
	
	<script type="text/javascript">
	<!--
	function MM_jumpMenu(targ,selObj,restore){ //v3.0
	  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
	  if (restore) selObj.selectedIndex=0;
	}
	//-->
	</script>
	
	<style>
	#google_translate_element {
		position: absolute;
		z-index: 999999;
		left: 532px;
		top: 0;
	}
	</style>
	
	
	
	<!-- START MENU -->
	<div>
	</div>

		<div class="ContentContainer" id="TopContainer"><!-- Portal Top -->
				<div class="pnav">
		<table  align="right" >
	<tbody>
		<tr>
			<td>
	        					<table class="pnav" >
	            
	<tbody>
				<tr>
	
	
					<td id="buyitem" class="fc">
					<a id="nuy" href="http://blog.merrow.com"><? echo $tongue['menu_localsupport']; ?></a>
	               <!-- REPLACED ON 12/23/09 <a id="nuy" href="http://merrow.com/announcements/party_id/767911/drawers4/a"><? echo $tongue['menu_localsupport']; ?></a> -->
			
	        		</td>
	
					<td id="nellitem">
	                <a href="http://merrow.com/about.html" id="nell"><? echo $tongue['menu_about']; ?></a>
					
	                </td>
	
					<td id="communityitem">
	                <a href="http://www.merrowing.com" id="nommunity"><? echo $tongue['menu_community']; ?></a>
	
					</td>
	
					<td id="helpitem" class="lc">
	                <a href="http://merrow.com/contact_general.html" id="nelp"><? echo $tongue['menu_contactus']; ?></a>
			
	        		</td>
			</tr>
	
		</tbody>
	
	</table>
							</td>
		
	    	</tr>
	
		</tbody>
	
	</table>
	
				</div> <!--ends Pnav -->
		
	<div>
	
		<div class="pcontent">
	    	
	        	<div id="gnheader" class="gbhdr">
	            	
	                	<div id="dynamicmenu-hdrCtr" class="hdrCtr">
	        
	        		<table  width="100%">
	
						<tbody>
	    				
	                    		<tr>
	        	
	            					<td><!-- headerType=FULL:CCHP_PAGE-->
	     
	                                	<table class="logobar"  width="100%">
		
											<tbody>
							
	                        						<tr>
	    			
	                									<td class="logoimg" valign="top" width="1%">
	
														<a href="http://merrow.com/" rel="nofollow">
														<? if ($headertest!=null) { $asshump=$store; }
														
														if ($asshump=='65533122844756220294') {  ?>
	                                                    
	                                                    <img src="http://images.imerrow.com/images/menubar/merrow_tsm21.jpg" alt="" >
	                                                    
	                                                     <? } else { ?><img src="http://merrowservices.s3.amazonaws.com/2010_fp_images/merrowlogo2d.png" alt="Merrow Logo" > 
	                                                     
	                                                      <? } ?> </a>
				
	            										</td>
		                                               </tr>
	                                        </tbody>
	                                        
	                                   </table>
	                                   
	                          </td>
	
						</tr>
	    
	    			</tbody>
	   	     		
	           </table>
	                     													<div class="twonotesinmenu"><? echo $badcode; ?>
														
	                                                    <a href="http://merrow.com/agentmap.html"><img src="http://images.imerrow.com/images/lilgooglepin.png" alt="help" ><? echo $tongue['menu_agent_map']; ?></a>
	
						 								| 
	 												
	 
	 													<a href="http://merrow.com/merrow_login.html">Merrow Login</a>
	                                                    
	                                                    </div>
	                        
	              		</div>
	              
	     		 </div>
	      
	      
			</div>
	        
	 </div>
	
	<div>
	
	  <b class="spiffy_main">
	  <b class="spiffy_main1"><b></b></b>
	  <b class="spiffy_main2"><b></b></b>
	  <b class="spiffy_main3"></b>
	  <b class="spiffy_main4"></b>
	  <b class="spiffy_main5"></b></b>
	
	  <div class="spiffy_mainfg">
	  
	    <!-- content for the menu bar goes here -->
	  <style type="text/css">
	  
	  input.groovybutton
	  {
	     font-size:12px;
	     font-family:Arial,sans-serif;
	     font-weight:bold;
	     color:#775555;
	     width:107px;
	     height:19px;
	     background-image:url(http://merrow.com/images/back06a.gif);
	     border-style:none;
	  }
	  
	  </style>
	  
	  <script language="javascript">
	  
	  function goLite(FRM,BTN)
	  {
	     window.document.forms[FRM].elements[BTN].style.color = "#AA3300";
	     window.document.forms[FRM].elements[BTN].style.backgroundImage = "url(/images/back06b.gif)";
	  }
	  
	  function goDim(FRM,BTN)
	  {
	     window.document.forms[FRM].elements[BTN].style.color = "#775555";
	     window.document.forms[FRM].elements[BTN].style.backgroundImage = "url(/images/back06a.gif)";
	  }
	  
	  </script>
	  
			<form method="get" action="http://store.merrow.com/search.htm" name="searchForm" id="searchForm">
	        
	        	<div class="srchBox">
	            
	            	<div class="srchBoxE">
	                
	                	<div class="srchBoxW">
	                    	<input class="searchBox" name="keyword" tabindex="1" type="text" value=""><br>
						
	                	</div>
	                            
	                     		<div class="button" id="searchb">
	                         		<input
	                         		   type="button"
	                         		   name="groovybtn1"
	                         		   class="groovybutton"
	                         		   value="Search the Store"
	                         		   title=""
	                         		   onMouseOver="goLite(this.form.name,this.name)"
	                         		   onMouseOut="goDim(this.form.name,this.name)">
	                         		
	                            </div>
	                        
	                </div>
	               
	            </div>
	           
	        </form>
	                
	       <div id="google_translate_element"></div><script>
	      function googleTranslateElementInit() {
	        new google.translate.TranslateElement({
	          pageLanguage: 'en'
	        }, 'google_translate_element');
	      }
	      </script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	             
			</form>
	    <div class="colorbar" id="all">
	     
	         <table  width="100%">
	              <tbody>
	              		<tr>
	                        <td class="brnd1"></td>
	                        <td class="brnd2"></td>
	                        <td class="brnd3"></td>
	                        <td class="brnd4"></td>
	                        <td class="brnd5"></td>
	                        <td class="brnd6"></td>
	                        <td class="brnd7"></td>
	                        
	                     </tr>
	                      
	                      <tr>
	                        <td class="brnd8"></td>
	                        <td class="brnd8"></td>
	                        <td class="brnd8"></td>
	                        <td class="brnd8"></td>
	                        <td class="brnd8"></td>
	                        <td class="brnd8"></td>
	                        <td class="brnd8"></td>
	                      </tr>
	               </tbody>
	          </table>
	    </div>
	 
	
	 <? include 'widget_sub_productmenu_us.php' ?>
	
	</div>
	
	  <b class="spiffy_main">
	  <b class="spiffy_main5"></b>
	  <b class="spiffy_main4"></b>
	  <b class="spiffy_main3"></b>
	  <b class="spiffy_main2"><b></b></b>
	  <b class="spiffy_main1"><b></b></b></b>
	</div>
	                
	 </div>
	<!-- END:Portal Top Div --><!-- Portal Center Div -->
	
	<!-- END MENU -->
	
	


<!-- ##################  
//	 div classes for page do not edit
//	 ################## -->	

<div id="container">
		<div id="main">
			<div id="content" class="grid3cola">
				
 <!-- ################## 
//	 ################## -->	        
               <div class="column first sidebar">
<!-- ##################  
//	 left column widgets
//	 ################## -->					
                
				
			
            	
                    
				
              
 <!-- ################## 
	// ################## -->	
		  </div> <!-- /column.first -->				
              <div class="column">
<!-- ##################  
	// center column widgets
	// ################## -->	 
					
                    
                       
                                     <div class="master_container"> 
                                 
                   
                 	<div class="float"> 
                 	<a href="70class/cp/70d3b2cnp"> 
                 	   <img src="http://merrowhomepage.s3.amazonaws.com/cnpwaterdrops.jpg" width ="900" height =""
                 	  alt="doortodoor" /> 
                 	  </a> 
                 	</div> 
                 	
                 
                 	 
                 	  
                 	</div> 
                 	
                 	<img src="http://merrowservices.s3.amazonaws.com/2010_fp_images/line.jpg" />
                  
                 <div class="kiddy_container"> 
                  
                 	<div class="float"> 
                 	  <a href="http://merrow.com/applications/app/decorative/"> 
                 	  <img src="http://merrowservices.s3.amazonaws.com/2010_fp_images/de_topright.png" width="160" height="187"
                 	  alt="image_stitch" /> 
                 	  </a> 
                 	</div> 
                 	
                 	<div class="float"> 
                 	<a href="http://merrow.com/stitch.html"> 
                 	  <img src="http://merrowservices.s3.amazonaws.com/2010_fp_images/merrowsolution.png" width="160" height="187"
                 	  alt="image_stitch" /> 
                 	  </a> 
                 	</div> 
                 	
                 	<div class="float"> 
                 	<a href="http://merrow.com/why.html"> 
                 	  <img src="http://merrowservices.s3.amazonaws.com/2010_fp_images/cams.png" width="160" height="187"
                 	  alt="image_stitch" /> 
                 	  </a> 
                 	</div> 
                 	
                 	<div class="float"> 
                 	<a href="http://store.merrow.com/Merrow-M3U-Refurbished-for-emblems/M/B001HBDJEA.htm"> 
                 	  <img src="http://merrowservices.s3.amazonaws.com/2010_fp_images/reufurbished.png" width="160" height="187"
                 	  alt="image_stitch" /> 
                 	  </a> 
                 	</div> 
                 	
                 	
                  
                 </div>				
                 <div class="kiddy_container"> 
                  
                 	<div class="float"> 
                 	  <a href="#"> 
                 	  <img src="http://merrowservices.s3.amazonaws.com/2010_fp_images/factoryservice.png" width="160" height="187"
                 	  alt="image_stitch" /> 
                 	  </a> 
                 	</div> 
                 	
                 	<div class="float"> 
                 	<a href="http://merrow.com/needle_configurator.html"> 
                 	  <img src="http://merrowservices.s3.amazonaws.com/2010_fp_images/genuineneedles.png" width="160" height="187"
                 	  alt="image_stitch" /> 
                 	  </a> 
                 	</div> 
                 	
                 	<div class="float"> 
                 	<a href="http://agentmedia.s3.amazonaws.com/printmedia/lowres/linecard_AIRMOTOR_lowres.pdf"> 
                 	  <img src="http://merrowservices.s3.amazonaws.com/2010_fp_images/airmotor.png" width="160" height="187"
                 	  alt="image_stitch" /> 
                 	  </a> 
                 	</div> 
                 	
                 	<div class="float"> 
                 	<a href="http://store.merrow.com/Merrow-70Z1-Ziggurat-Sewing-Table/M/B001AVK3L4.htm"> 
                 	  <img src="http://merrowservices.s3.amazonaws.com/2010_fp_images/tables.png" width="160" height="187"
                 	  alt="image_stitch" /> 
                 	  </a> 
                 	</div> 
                 	
                 	<div class="float"> 
                 	  <a href="#"> 
                 	  <img src="http://merrowservices.s3.amazonaws.com/2010_fp_images/factoryservice.png" width="160" height="187"
                 	  alt="image_stitch" /> 
                 	  </a> 
                 	</div> 
                 	
                 	<div class="float"> 
                 	<a href="http://merrow.com/needle_configurator.html"> 
                 	  <img src="http://merrowservices.s3.amazonaws.com/2010_fp_images/genuineneedles.png" width="160" height="187"
                 	  alt="image_stitch" /> 
                 	  </a> 
                 	</div> 
                  
                 </div>						
            
 <!-- ################## 
//	 ################## -->	
     			</div> <!-- /column -->				
  <!--           <div class="column last sidebar"> -->
  <!-- ##################  
//	 right column widgets
//	 ################## -->	 	
    			
			
					
				
  <!-- ################## 
//	 ################## -->	               
 <!--     </div>  /colum.last -->
   
  <!-- ##################  
//	 FOOTER
//	 ################## -->	

<div class="footer contain">
	<hr />

	
	<p>Copyright &copy; 2010 Merrow Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners. </p>
	
</div><!-- }}} footer -->
			
               <? include ('widget_analytics.php'); ?>
	</body>
    </html>
