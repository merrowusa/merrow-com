
    <div class="cgm_menu" id="lostboys"> 
                    
	<ul id="lists">
    
		<li><a href="http://catalog.merrow.com/Merrow-70D3B2-High-Speed-Industrial-Sewing/M/B001AVR0QU.htm" class="tl"><? echo $tongue['menu_product']; ?><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
			
            	<div class="pos1">
			
            			<dl>
 
 							<dt><a href="#nogo"><? echo $tongue['product_menu_title1']; ?></a>
                            
                            </dt>
 
 <? // Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT msmc_id, amzn_url FROM agent_asin WHERE product_menu1='1'")
or die(mysql_error());

 while($juju = mysql_fetch_array( $result )) { 
    $msmc = $juju['msmc_id'];
    $url = $juju['amzn_url'];
 
?>

<dd><a href="<? echo $url; ?>"><? echo $msmc; ?></a></dd>
<? } ?>

</dl>
<dl>
<dt><a href="#nogo"><? echo $tongue['product_menu_title2']; ?></a></dt>
 <? // Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT product_name, amzn_url FROM agent_asin WHERE product_menu2='1'")
or die(mysql_error());

 while($juju = mysql_fetch_array( $result )) { 
    $msmc = $juju['product_name'];
    $url = $juju['amzn_url'];
 
?>

<dd><a href="<? echo $url; ?>"><? echo $msmc; ?></a></dd>
<? } ?>
</dl>
<dl>
<dt><a href="#nogo"><? echo $tongue['product_menu_title3']; ?></a></dt>
 <? // Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT msmc_id, amzn_url FROM agent_asin WHERE product_menu3='1'")
or die(mysql_error());

 while($juju = mysql_fetch_array( $result )) { 
    $msmc = $juju['msmc_id'];
    $url = $juju['amzn_url'];
 
?>

<dd><a href="<? echo $url; ?>"><? echo $msmc; ?></a></dd>
<? } ?>
</dl>

<br class="clear" />
<dl>
<dt><a href="#nogo"><? echo $tongue['product_menu_title4']; ?></a></dt>
 <? // Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT msmc_id, amzn_url FROM agent_asin WHERE product_menu4='1'")
or die(mysql_error());

 while($juju = mysql_fetch_array( $result )) { 
    $msmc = $juju['msmc_id'];
    $url = $juju['amzn_url'];
 
?>

<dd><a href="<? echo $url; ?>"><? echo $msmc; ?></a></dd>
<? } ?>
</dl>
<dl>
<dt><a href="#nogo"><? echo $tongue['product_menu_title5']; ?></a></dt>
 <? // Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT msmc_id, amzn_url FROM agent_asin WHERE product_menu5='1'")
or die(mysql_error());

 while($juju = mysql_fetch_array( $result )) { 
    $msmc = $juju['msmc_id'];
    $url = $juju['amzn_url'];
 
?>

<dd><a href="<? echo $url; ?>"><? echo $msmc; ?></a></dd>
<? } ?>
</dl>
<dl>
<dt><a href="#nogo"><? echo $tongue['product_menu_title6']; ?></a></dt>
 <? // Get all the data from the "agent_asin" table which is where our product info is kept
$result = mysql_query("SELECT product_name, amzn_url FROM agent_asin WHERE product_menu6='1'")
or die(mysql_error());

 while($juju = mysql_fetch_array( $result )) { 
    $msmc = $juju['product_name'];
    $url = $juju['amzn_url'];
 
?>

<dd><a href="<? echo $url; ?>"><? echo $msmc; ?></a></dd>
<? } ?>
</dl>


			</div>
            
<!--[if lte IE 6]></td></tr></table></a><![endif]-->

		</li>
        
<li><a href="http://merrow.com/support.html" class="tl"><? echo $tongue['menu_support']; ?></a>
<li><a href="http://merrow.com/dynamicstore.php?store=65533122844756220293" class="tl"><? echo $tongue['menu_store']; ?></a>
<li><a href="http://merrow.com/" class="tl"><? echo $tongue['menu_home']; ?></a>



	</ul>             
                
 </div>    
     

