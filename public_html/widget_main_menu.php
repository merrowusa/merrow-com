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
  
		<form method="get" action="http://store.merrow.com/search.htm" name="searchForm" id="searchForm">
        
        	<div class="srchBox">
            
            	<div class="srchBoxE">
                
                	<div class="srchBoxW">
                    	<input class="searchBox" name="keyword" tabindex="1" type="text" value=""><br>
					
                	</div>
                            
                     		<div class="button" id="searchb">
                         		<input value="Search the Store" tabindex="3" type="submit"> 
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

