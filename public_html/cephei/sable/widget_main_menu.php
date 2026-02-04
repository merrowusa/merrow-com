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




<!-- START MENU -->
<div>
</div>



	<div class="ContentContainer" id="TopContainer"><!-- Portal Top -->

		<div class="pnav">

<table border="0" align="right"  cellpadding="0" cellspacing="0">
        
<tbody>

	<tr>
		<td>
        

			<table class="pnav" border="0" cellpadding="0" cellspacing="0">
            
<tbody>
        

		<tr>


				<td id="buyitem" class="fc">
                <a id="nuy" href="http://merrow.com/announcements/party_id/767911/drawers4/a"><? echo $tongue['menu_localsupport']; ?></a>
		
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
        
        		<table border="0" cellpadding="0" cellspacing="0" width="100%">

					<tbody>
    				
                    		<tr>
        	
            					<td><!-- headerType=FULL:CCHP_PAGE-->




								
                                
                                	<table class="logobar" border="0" cellpadding="0" cellspacing="0" width="100%">


										<tbody>
						
                        						<tr>
    			
                									<td class="logoimg" valign="top" width="1%">

													<a href="http://merrow.com/" rel="nofollow">
													<? if ($headertest!=null) { $asshump=$store; }
													
													if ($asshump=='65533122844756220294') {  ?>
                                                    
                                                    <img src="http://images.imerrow.com/images/menubar/merrow_tsm21.jpg" alt="" border="0">
                                                    
                                                     <? } else { ?><img src="http://images.imerrow.com/images/menubar/merrow_tsm20.jpg" alt="" border="0"> 
                                                     
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
													
                                                    <a href="http://merrow.com/agentmap.html"><img src="http://images.imerrow.com/images/lilgooglepin.png" alt="help" border="0"><? echo $tongue['menu_agent_map']; ?></a>

					 								| 
 													<? if ($agents['store_db_name']!=null) { ?> <a href="http://merrow.com/agentlogin.php?asap=2231020293383445&party_id=<? echo $_GET['party_id']; ?>&choice=<? echo $_GET['choice']; ?>" target="_self" rel="nofollow"><? echo $tongue['menu_agent_login']; ?> <? } else { ?> <a href="http://merrow.com/agentlogin.php" rel="nofollow"><? echo $tongue['menu_agent_login']; ?></a><? } ?>

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
                 
                 
                 
         <form name="language" id="form17" action="http://merrow.com/merrow.php">
 		 	
            <select name="jumpMenu35" id="jumpMenu35" onchange="MM_jumpMenu('parent',this,0)">
 		 <!--  <option value="/nebula/sable/<? // echo curPageName();?>?lang=en">Choose your language</option> THIS IS HOW THE MENU SHOULD BE FORMATTED, DISCARD FORMATTING BELOW IT IS BUNK AND HOKEY __ K MAN? -->
  			  <option value="#">Choose your language</option>
  			  <option value="#">English</option>
  			  <option value="#">More Coming Soon</option>
 			  <!--  <option value="/nebula/sable/<?// echo curPageName();?>?lang=sp">Spanish</option> -->

 			 </select>
             
		</form>
                 
                 
                 
     <div class="colorbar" id="all">
     
         <table border="0" cellpadding="0" cellspacing="0" width="100%">
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
 



 <? if ($var='767911') {include ('widget_sub_productmenu_us.php'); } else { include ('widget_sub_productmenu_int.php'); }?>



                
  
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

