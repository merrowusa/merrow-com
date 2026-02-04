<!--STYLE SHEETS-->
<? include ('widget_new_styles.php'); ?><div class="new_menu">
<div id="new_menu_a">
<div class="new_menu_top">  
<div class="title_img"><a href="/"><img width="341px" height="68px" alt="merrow sewing machine co. logo" src="http://merrow-media.s3.amazonaws.com/general-http/merrowlogo_03.png"></a></div><div class="rightlinks">
<ul id="rightlinks">
<li><a href="/support.html">Support</a></li>
<li id="last"><a href="contact_general.html">Contact Us</a></li></ul>
</div></div><div class="new_menu_middle">
<div class="cse-search-form_container">
<div id="cse-search-form" style="width: 100%;"></div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
</div><div class="css-arrow-right"></div> 
<div class="logo_box">
<ul id="logo_text"><li>
Manufacturing Sewing Machines since</li> </ul>
<div class="laroush"> <img src="http://merrow-media.s3.amazonaws.com/general-http/1838.png" /></div></div></div><div class="new_menu_bottom"><ul id="menu"><li id="top"><a href="#" class="drop">Sewing Machines</a><!-- Begin 5 columns Item -->
<div class ="bammo_m">
<div class="dropdown_5columns"><!-- Begin 5 columns container --><div class="col_2">
<h2 class="apps">Merrow Sewing Machines</h2>
</div><div class="col_3">
<p class="clear_box">Merrow Stitches bring visual impact, perfomance and distinction to consumer products. In a word, they bring value. Listed below are some of the popular applications for which Merrow Stitching makes the difference</p>
</div>
<div class="clear"></div>
<div class="buffer">
<div class="m_holder">	
<div class="col_1">
<!-- MG SECTION ID -->
<? $mkey='6612'; ?> 
<img src="http://merrow-media.s3.amazonaws.com/general-http/m1.png" />         
</div>
<div class="col_1" id="first">
<ul class="machine_list">

<?  $apps = mysql_query("SELECT style_key,style  FROM  machine_pages
WHERE machine_pages.class_key = '$mkey' 
AND `publish` = 'yes'  
ORDER BY `style_key`LIMIT 0,4 ")
or die(mysql_error()); 
while($machine_list = mysql_fetch_array( $apps )) { 
foreach($machine_list AS $key => $value) { $machine_list[$key] = stripslashes($value);
} ?>
<li class="c_app_list"><a href="/Sergers_and_Overlock_Sewing_Machines/<? echo $machine_list['style_key']; ?>"><? echo $machine_list['style']; ?></a></li><? } ?>
</ul>
</div>	
<div class="col_1">
<ul class="machine_list"> 
<?  $apps = mysql_query("SELECT style_key,style  FROM  machine_pages
WHERE machine_pages.class_key = '$mkey' 
AND `publish` = 'yes'  
ORDER BY `style_key`LIMIT 4,4 ")
or die(mysql_error()); 
while($machine_list = mysql_fetch_array( $apps )) { 
foreach($machine_list AS $key => $value) { $machine_list[$key] = stripslashes($value);
} ?>
<li class="c_app_list"><a href="/Sergers_and_Overlock_Sewing_Machines/<? echo $machine_list['style_key']; ?>"><? echo $machine_list['style']; ?></a></li><? } ?>
</ul>
</div>	
<div class="col_1">
<ul class="machine_list"> 
<?  $apps = mysql_query("SELECT style_key,style  FROM  machine_pages
WHERE machine_pages.class_key = '$mkey' 
AND `publish` = 'yes'  
ORDER BY `style_key`LIMIT 8,4 ")
or die(mysql_error()); 
while($machine_list = mysql_fetch_array( $apps )) { 
foreach($machine_list AS $key => $value) { $machine_list[$key] = stripslashes($value);
} ?>
<li class="c_app_list"><a href="/Sergers_and_Overlock_Sewing_Machines/<? echo $machine_list['style_key']; ?>"><? echo $machine_list['style']; ?></a></li><? } ?>
</ul>
</div>	
<div class="col_1">
<ul class="machine_list"> 
<?  $apps = mysql_query("SELECT style_key,style  FROM  machine_pages
WHERE machine_pages.class_key = '$mkey' 
AND `publish` = 'yes'  
ORDER BY `style_key`LIMIT 12,4 ")
or die(mysql_error()); 
while($machine_list = mysql_fetch_array( $apps )) { 
foreach($machine_list AS $key => $value) { $machine_list[$key] = stripslashes($value);
} ?>
<li class="c_app_list"><a href="/Sergers_and_Overlock_Sewing_Machines/<? echo $machine_list['style_key']; ?>"><? echo $machine_list['style']; ?></a></li><? } ?>
</ul>
</div>	
<div class="col_1">
<ul class="machine_list"> 
<?  $apps = mysql_query("SELECT style_key,style  FROM  machine_pages
WHERE machine_pages.class_key = '$mkey' 
AND `publish` = 'yes'  
ORDER BY `style_key`LIMIT 16,4 ")
or die(mysql_error()); 
while($machine_list = mysql_fetch_array( $apps )) { 
foreach($machine_list AS $key => $value) { $machine_list[$key] = stripslashes($value);
} ?>
<li class="c_app_list"><a href="/Sergers_and_Overlock_Sewing_Machines/<? echo $machine_list['style_key']; ?>"><? echo $machine_list['style']; ?></a></li><? } ?>
</ul>
</div>
<? $mkey='6613'; ?>	
<div class="col_1">
<ul class="machine_list"> 
<?  $apps = mysql_query("SELECT style_key,style  FROM  machine_pages
WHERE machine_pages.class_key = '$mkey' 
AND `publish` = 'yes'  
ORDER BY `style_key`LIMIT 0,4 ")
or die(mysql_error()); 
while($machine_list = mysql_fetch_array( $apps )) { 
foreach($machine_list AS $key => $value) { $machine_list[$key] = stripslashes($value);
} ?>
<li class="c_app_list"><a href="/Sergers_and_Overlock_Sewing_Machines/<? echo $machine_list['style_key']; ?>"><? echo $machine_list['style']; ?></a></li><? } ?>
</ul>
</div>
</div>
<div class="clear"></div>
<div class="m_holder">	
<div class="col_1">
<!-- 70 CLASS ID -->
<? $mkey='70'; ?>

<img src="http://merrow-media.s3.amazonaws.com/general-http/m2.png" />         
</div>
<div class="col_1" id="first">
<ul class="machine_list"> 
<? $apps = mysql_query("SELECT style_key,style  FROM  machine_pages
WHERE machine_pages.class_key = '$mkey' 
AND `publish` = 'yes'  
ORDER BY `style_key`LIMIT 0,3 ")
or die(mysql_error()); 
while($machine_list = mysql_fetch_array( $apps )) { 
foreach($machine_list AS $key => $value) { $machine_list[$key] = stripslashes($value);
} ?>
<li class="c_app_list"><a href="/Overlock_Sewing_Machines/Continuous_Processing/<? echo $machine_list['style_key']; ?>"><? echo $machine_list['style']; ?></a></li><? } ?>
</ul>
</div>	
<div class="col_1">
<ul class="machine_list"> 
<? $apps = mysql_query("SELECT style_key,style  FROM  machine_pages
WHERE machine_pages.class_key = '$mkey' 
AND `publish` = 'yes'  
ORDER BY `style_key`LIMIT 3,3 ")
or die(mysql_error()); 
while($machine_list = mysql_fetch_array( $apps )) { 
foreach($machine_list AS $key => $value) { $machine_list[$key] = stripslashes($value);
} ?>
<li class="c_app_list"><a href="/Overlock_Sewing_Machines/Continuous_Processing/<? echo $machine_list['style_key']; ?>"><? echo $machine_list['style']; ?></a></li><? } ?>
</ul>
</div>	
<div class="col_1">
<ul class="machine_list"> 
<? $apps = mysql_query("SELECT style_key,style  FROM  machine_pages
WHERE machine_pages.class_key = '$mkey' 
AND `publish` = 'yes'  
ORDER BY `style_key`LIMIT 6,3 ")
or die(mysql_error()); 
while($machine_list = mysql_fetch_array( $apps )) { 
foreach($machine_list AS $key => $value) { $machine_list[$key] = stripslashes($value);
} ?>
<li class="c_app_list"><a href="/Overlock_Sewing_Machines/Continuous_Processing/<? echo $machine_list['style_key']; ?>"><? echo $machine_list['style']; ?></a></li><? } ?>
</ul>
</div>	
<div class="col_1">
<ul class="machine_list"> 
<? $mkey='72'; $apps = mysql_query("SELECT style_key,style  FROM  machine_pages
WHERE machine_pages.class_key = '$mkey' 
AND `publish` = 'yes'  
ORDER BY `style_key`LIMIT 0,4 ")
or die(mysql_error()); 
while($machine_list = mysql_fetch_array( $apps )) { 
foreach($machine_list AS $key => $value) { $machine_list[$key] = stripslashes($value);
} ?>
<li class="c_app_list"><a href="/Overlock_Sewing_Machines/Continuous_Processing/<? echo $machine_list['style_key']; ?>"><? echo $machine_list['style']; ?></a></li><? } ?>
</ul>
</div>
</div>
<div class="clear"></div>
<div class="m_holder">	
<div class="col_1">

<!-- CROCHET CLASS ID -->
<?  $mkey='6611'; ?>

<img src="http://merrow-media.s3.amazonaws.com/general-http/m3.png" />         
</div>
<div class="col_1" id="first">
<ul class="machine_list"> 
<?$apps = mysql_query("SELECT style_key,style  FROM  machine_pages
WHERE machine_pages.class_key = '$mkey' 
AND `publish` = 'yes'  
ORDER BY `style_key`LIMIT 0,3 ")
or die(mysql_error()); 
while($machine_list = mysql_fetch_array( $apps )) { 
foreach($machine_list AS $key => $value) { $machine_list[$key] = stripslashes($value);
} ?>
<li class="c_app_list"><a href="/crochet-sewing-machines/<? echo $machine_list['style_key']; ?>"><? echo $machine_list['style']; ?></a></li><? } ?>
</ul>
</div>
<div class="col_1">
<ul class="machine_list"> 
<?$apps = mysql_query("SELECT style_key,style  FROM  machine_pages
WHERE machine_pages.class_key = '$mkey' 
AND `publish` = 'yes'  
ORDER BY `style_key`LIMIT 3,3 ")
or die(mysql_error()); 
while($machine_list = mysql_fetch_array( $apps )) { 
foreach($machine_list AS $key => $value) { $machine_list[$key] = stripslashes($value);
} ?>
<li class="c_app_list"><a href="/Sergers_and_Overlock_Sewing_Machines/<? echo $machine_list['style_key']; ?>"><? echo $machine_list['style']; ?></a></li><? } ?>
</ul>
</div>
</div> 	
<div class="clear"></div>
 </div><!-- End 5 columns container -->
</div>    
</div></li>
<!-- End Home Item --><li id="top"><a href="#" class="drop">Sewing Applications</a><!-- Begin 5 columns Item -->
<div class ="bammo">
<div class="dropdown_5columns"><!-- Begin 5 columns container --><div class="col_2">
<h2 class="apps">Merrow Sewing Applications</h2>
</div><div class="col_3">
<p class="clear_box">Merrow Stitches bring visual impact, perfomance and distinction to consumer products. In a word, they bring value. Listed below are some of the popular applications for which Merrow Stitching makes the difference</p>
</div>
<div class="clear"></div><div class="buffer">
<div class="col_1">
<? $app1 = '5525' ?> 
<h4><a href="/sewing/applications/<? echo $app1; ?>">ActiveSeam</a></h4><ul> 
<? $apps = mysql_query("SELECT *  FROM application_categories, application_pages
WHERE application_categories.app_key = application_pages.app_key 
AND `publish` = 'yes'  
AND `application_pages`.`app_key` = $app1
ORDER BY `layout_order`")
or die(mysql_error()); 
while($app_list = mysql_fetch_array( $apps )) { 
foreach($app_list AS $key => $value) { $app_list[$key] = stripslashes($value);
} ?>
<li class="app_list"><a href="/sewing/applications/<? echo $app_list['app_key']; ?>/#<? echo $app_list['d_key']; ?>"><? echo $app_list['app_menu_title']; ?></a></li>
<? } ?>
</ul>
</div>
<div class="col_1">
<? $app1 = '5514' ?> 
<h4><a href="/sewing/applications/<? echo $app1; ?>">Blanket Stitching</a></h4><ul> 
<? $apps = mysql_query("SELECT *  FROM application_categories, application_pages
WHERE application_categories.app_key = application_pages.app_key 
AND `publish` = 'yes'  
AND `application_pages`.`app_key` = $app1
ORDER BY `layout_order`")
or die(mysql_error()); 
while($app_list = mysql_fetch_array( $apps )) { 
foreach($app_list AS $key => $value) { $app_list[$key] = stripslashes($value);
} ?>
<li class="app_list"><a href="/sewing/applications/<? echo $app_list['app_key']; ?>/#<? echo $app_list['d_key']; ?>"><? echo $app_list['app_menu_title']; ?></a></li>
<? } ?>
</ul>
</div> 
<div class="col_1">
<? $app1 = '5516' ?> 
<h4><a href="/sewing/applications/<? echo $app1; ?>">Baby Garments</a></h4><ul> 
<? $apps = mysql_query("SELECT *  FROM application_categories, application_pages
WHERE application_categories.app_key = application_pages.app_key 
AND `publish` = 'yes'  
AND `application_pages`.`app_key` = $app1
ORDER BY `layout_order`")
or die(mysql_error()); 
while($app_list = mysql_fetch_array( $apps )) { 
foreach($app_list AS $key => $value) { $app_list[$key] = stripslashes($value);
} ?>
<li class="app_list"><a href="/sewing/applications/<? echo $app_list['app_key']; ?>/#<? echo $app_list['d_key']; ?>"><? echo $app_list['app_menu_title']; ?></a></li>
<? } ?>
</ul>
</div> 
<div class="col_1">
<? $app1 = '5512' ?> 
<h4><a href="/sewing/applications/<? echo $app1; ?>">Emblems and Labels</a></h4><ul> 
<? $apps = mysql_query("SELECT *  FROM application_categories, application_pages
WHERE application_categories.app_key = application_pages.app_key 
AND `publish` = 'yes'  
AND `application_pages`.`app_key` = $app1
ORDER BY `layout_order`")
or die(mysql_error()); 
while($app_list = mysql_fetch_array( $apps )) { 
foreach($app_list AS $key => $value) { $app_list[$key] = stripslashes($value);
} ?>
<li class="app_list"><a href="/sewing/applications/<? echo $app_list['app_key']; ?>/#<? echo $app_list['d_key']; ?>"><? echo $app_list['app_menu_title']; ?></a></li>
<? } ?>
</ul>
</div>					
<div class="col_1">
<? $app1 = '5519' ?> 
<h4><a href="/sewing/applications/<? echo $app1; ?>">Home Decor</a></h4><ul> 
<? $apps = mysql_query("SELECT *  FROM application_categories, application_pages
WHERE application_categories.app_key = application_pages.app_key 
AND `publish` = 'yes'  
AND `application_pages`.`app_key` = $app1
ORDER BY `layout_order`")
or die(mysql_error()); 
while($app_list = mysql_fetch_array( $apps )) { 
foreach($app_list AS $key => $value) { $app_list[$key] = stripslashes($value);
} ?>
<li class="app_list"><a href="/sewing/applications/<? echo $app_list['app_key']; ?>/#<? echo $app_list['d_key']; ?>"><? echo $app_list['app_menu_title']; ?></a></li>
<? } ?>
</ul>
</div><!-- CLEAR AFTER 5 --> 
<div class="clear"></div><div class="col_1">
<? $app1 = '5515' ?> 
<h4><a href="/sewing/applications/<? echo $app1; ?>">Lingerie</a></h4><ul> 
<? $apps = mysql_query("SELECT *  FROM application_categories, application_pages
WHERE application_categories.app_key = application_pages.app_key 
AND `publish` = 'yes'  
AND `application_pages`.`app_key` = $app1
ORDER BY `layout_order`")
or die(mysql_error()); 
while($app_list = mysql_fetch_array( $apps )) { 
foreach($app_list AS $key => $value) { $app_list[$key] = stripslashes($value);
} ?>
<li class="app_list"><a href="/sewing/applications/<? echo $app_list['app_key']; ?>/#<? echo $app_list['d_key']; ?>"><? echo $app_list['app_menu_title']; ?></a></li>
<? } ?>
</ul>
</div> 
<div class="col_1">
<? $app1 = '5517' ?> 
<h4><a href="/sewing/applications/<? echo $app1; ?>">Military Sewing</a></h4><ul> 
<? $apps = mysql_query("SELECT *  FROM application_categories, application_pages
WHERE application_categories.app_key = application_pages.app_key 
AND `publish` = 'yes'  
AND `application_pages`.`app_key` = $app1
ORDER BY `layout_order`")
or die(mysql_error()); 
while($app_list = mysql_fetch_array( $apps )) { 
foreach($app_list AS $key => $value) { $app_list[$key] = stripslashes($value);
} ?>
<li class="app_list"><a href="/sewing/applications/<? echo $app_list['app_key']; ?>/#<? echo $app_list['d_key']; ?>"><? echo $app_list['app_menu_title']; ?></a></li>
<? } ?>
</ul>
</div> 		<div class="col_1">
<? $app1 = '5518' ?> 
<h4><a href="/sewing/applications/<? echo $app1; ?>">Women's Garments</a></h4><ul> 
<? $apps = mysql_query("SELECT *  FROM application_categories, application_pages
WHERE application_categories.app_key = application_pages.app_key 
AND `publish` = 'yes'  
AND `application_pages`.`app_key` = $app1
ORDER BY `layout_order`")
or die(mysql_error()); 
while($app_list = mysql_fetch_array( $apps )) { 
foreach($app_list AS $key => $value) { $app_list[$key] = stripslashes($value);
} ?>
<li class="app_list"><a href="/sewing/applications/<? echo $app_list['app_key']; ?>/#<? echo $app_list['d_key']; ?>"><? echo $app_list['app_menu_title']; ?></a></li>
<? } ?>
</ul>
</div>

<div class="col_1">
<? $app1 = '5520' ?> 
<h4><a href="/sewing/applications/<? echo $app1; ?>">Netting &amp; Mesh</a></h4><ul> 
<? $apps = mysql_query("SELECT *  FROM application_categories, application_pages
WHERE application_categories.app_key = application_pages.app_key 
AND `publish` = 'yes'  
AND `application_pages`.`app_key` = $app1
ORDER BY `layout_order`")
or die(mysql_error()); 
while($app_list = mysql_fetch_array( $apps )) { 
foreach($app_list AS $key => $value) { $app_list[$key] = stripslashes($value);
} ?>
<li class="app_list"><a href="/sewing/applications/<? echo $app_list['app_key']; ?>/#<? echo $app_list['d_key']; ?>"><? echo $app_list['app_menu_title']; ?></a></li>
<? } ?>
</ul>
</div>
<div class="clear"></div>
<div class="col_1">
<? $app1 = '5523' ?> 
<h4><a href="/sewing/applications/<? echo $app1; ?>">Joining Knit Material</a></h4><ul> 
<? $apps = mysql_query("SELECT *  FROM application_categories, application_pages
WHERE application_categories.app_key = application_pages.app_key 
AND `publish` = 'yes'  
AND `application_pages`.`app_key` = $app1
ORDER BY `layout_order`")
or die(mysql_error()); 
while($app_list = mysql_fetch_array( $apps )) { 
foreach($app_list AS $key => $value) { $app_list[$key] = stripslashes($value);
} ?>
<li class="app_list"><a href="/sewing/applications/<? echo $app_list['app_key']; ?>/#<? echo $app_list['d_key']; ?>"><? echo $app_list['app_menu_title']; ?></a></li>
<? } ?>
</ul>
</div>
<div class="col_1">
<? $app1 = '5513' ?> 
<h4><a href="/sewing/applications/<? echo $app1; ?>">Joining Woven Fabric</a></h4><ul> 
<? $apps = mysql_query("SELECT *  FROM application_categories, application_pages
WHERE application_categories.app_key = application_pages.app_key 
AND `publish` = 'yes'  
AND `application_pages`.`app_key` = $app1
ORDER BY `layout_order`")
or die(mysql_error()); 
while($app_list = mysql_fetch_array( $apps )) { 
foreach($app_list AS $key => $value) { $app_list[$key] = stripslashes($value);
} ?>
<li class="app_list"><a href="/sewing/applications/<? echo $app_list['app_key']; ?>/#<? echo $app_list['d_key']; ?>"><? echo $app_list['app_menu_title']; ?></a></li>
<? } ?>
</ul>
</div>
<div class="col_1">
<? $app1 = '5524' ?> 
<h4><a href="/sewing/applications/<? echo $app1; ?>">Joining Non-Wovens</a></h4><ul> 
<? $apps = mysql_query("SELECT *  FROM application_categories, application_pages
WHERE application_categories.app_key = application_pages.app_key 
AND `publish` = 'yes'  
AND `application_pages`.`app_key` = $app1
ORDER BY `layout_order`")
or die(mysql_error()); 
while($app_list = mysql_fetch_array( $apps )) { 
foreach($app_list AS $key => $value) { $app_list[$key] = stripslashes($value);
} ?>
<li class="app_list"><a href="/sewing/applications/<? echo $app_list['app_key']; ?>/#<? echo $app_list['d_key']; ?>"><? echo $app_list['app_menu_title']; ?></a></li>
<? } ?>
</ul>
</div>
</div>                          </div><!-- End 5 columns container -->
</div>    
</li><!-- End 5 columns Item --><li id="top"><a href="#" class="drop">Customer Stories</a><!-- Begin 4 columns Item -->
<div class ="bammo_p">
<div class="dropdown_5columns"><!-- Begin 4 columns container -->
<div class="col_2">
<h2 class="apps">Merrow <br /> Customer Stories</h2>
</div><div class="col_3">
<p class="clear_box">For 172 Years Companies have depended on Merrow to provide customized sewing solutions. Merrow Machines are used by forutune 100 companies, design schools, circuses, tailor shops and every type of industrial material processing company. These are just a few interesting ones we gathered along the way. 
</p>
</div>
<div class="clear"></div><div class="buffer">
<div class="cs_container"><div class="col_5" id="smaller"><a href="/customer-stories/featured/csrw"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/csrw_09.jpg" width="643px" height="200px"/></a></div>
<div class="col_2"><h2>Ramblers Way</h2><p>"Merrow knows sewing, from machine to stitch to garment. During our 172 years in the business we've accumulated a vast amount of knowledge on what it means to design, construct, and market a product. We take pride in our work and in our customer relationships and strive to go above and beyond what is expected of us."</p></div>
</div>
<div class="cs_container">
<div class="col_5"  id="smaller"><a href="/customer-stories/featured/csb"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/csb_09.jpg" width="643px" height="200px"/></a></div>
<div class="col_2"><h2>Brightec</h2><p>When Brightec needed a complimentary finish to some patches designed, they contacted Merrow for a solution. The result, three new models of emblem edging machines based on Merrow's vaunted MG-3U - the MG-3U NARROW, the MG-3U WIDE, and the MG-2U. "I told them we had various sized patches with different backings and they created a unique edging for each application..."</p></div>
</div>
<div class="cs_container">
<div class="col_5"  id="smaller"><a href="/customer-stories/featured/csam"><img src="http://merrow-media.s3.amazonaws.com/general-http/2011_live/csam_09.jpg" width="643px" height="200px"/></a></div>
<div class="col_2"><h2>ACME Mills</h2><p>"Merrow's partnerships with various OEM manufacturers really helped us on this one - we were able to get the equipment we needed to fit our in-house operation without any disruption to our existing set-up."</p></div>
</div>
</div><!-- End 4 columns container -->
</div>
</div></li><!-- End 4 columns Item --><li id="top"><a href="#" class="drop">Genuine Parts</a><!-- Begin 4 columns Item -->
<div class ="bammo_c">
<div class="dropdown_5columns"><!-- Begin 4 columns container -->
<div class="col_2">
<h2 class="apps">Genuine Merrow <br /> Spare Parts</h2>
</div><div class="col_3">
<p class="clear_box">Machined to .001 tolerances, Merrow maintains an inventory of spare parts for almost all legacy machines (600 models), ALL Parts are available immediately. The Spare Parts Quality is unmatched. You can depend on the parts Merrow provides as all Genuine Parts are machined to very specific tolerances and tested before shipping
</p>
</div>
<div class="clear"></div><div class="buffer">
<div class="col_1"><ul>
<li class="app_list"><a href="">Cast Off Horn</a></li> 
<li class="app_list"><a href="">Cutters</a></li> 
<li class="app_list"><a href="">Dust Shield</a></li> 
<li class="app_list"><a href="">Eccentric Block</a></li> 
<li class="app_list"><a href="">Fabric Guard</a></li> 
<li class="app_list"><a href="">Fabric Guide</a></li> 
<li class="app_list"><a href="">Feed Carrier</a></li> 
<li class="app_list"><a href="">Feed Dog</a></li> 
<li class="app_list"><a href="">Feed Dog Ear</a></li> 
<li class="app_list"><a href="">Feed Eccentric</a></li> 
<li class="app_list"><a href="">Finger</a></li>
<li class="app_list"><a href="">Flange</a></li> 
<li class="app_list"><a href="">Frame Cap</a></li> 
<li class="app_list"><a href="">Gasket</a></li> 
<li class="app_list"><a href="">Guard</a></li> 
<li class="app_list"><a href="">Guide</a></li> 
<li class="app_list"><a href="">Hand Wheel</a></li> 
<li class="app_list"><a href="">Head</a></li> </ul></div><div class="col_1"><ul><li class="app_list"><a href="">Head Cap</a></li> 
<li class="app_list"><a href="">Hem Fold Guide</a></li> 
<li class="app_list"><a href="">Hem Fold Pivot</a></li> 
<li class="app_list"><a href="">Hinge</a></li> 
<li class="app_list"><a href="">Hook Carrier</a></li> 
<li class="app_list"><a href="">Looper</a></li> 
<li class="app_list"><a href="">Looper Carrier</a></li> 
<li class="app_list"><a href="">Lower Cutter Clamp</a></li>
<li class="app_list"><a href="">Lower Cutter Holder</a></li> 
<li class="app_list"><a href="">Lower Cutter Holder Support</a></li>
<li class="app_list"><a href="">Machine Base</a></li> 
<li class="app_list"><a href="">Main Cams</a></li> 
<li class="app_list"><a href="">Needle Carrier</a></li> 
<li class="app_list"><a href="">Needle Carrier Bolt</a></li> 
<li class="app_list"><a href="">Needle Carrier Collar</a></li></ul></div>
<div class="col_1"><ul>
<li class="app_list"><a href="">Needle Carrier Link</a></li> 
<li class="app_list"><a href="">Needle Guard</a></li> 
<li class="app_list"><a href="">Needle Guard Cap</a></li> 
<li class="app_list"><a href="">Needle Guard Holder</a></li> 
<li class="app_list"><a href="">Needle Plate</a></li> 
<li class="app_list"><a href="">Nut</a></li> 
<li class="app_list"><a href="">Oil Distribution Rod</a></li> 
<li class="app_list"><a href="">Other &amp; Misc.</a></li> 
<li class="app_list"><a href="">Pin</a></li> 
<li class="app_list"><a href="">Plug</a></li> 
<li class="app_list"><a href="">Plunger</a></li> 
<li class="app_list"><a href="">Presser Arm Pivot</a></li> 
<li class="app_list"><a href="">Presser Bar</a></li> 
<li class="app_list"><a href="">Presser Foot</a></li> 
<li class="app_list"><a href="">Presser Foot Arm</a></li> 
<li class="app_list"><a href="">Presser Foot Bracket</a></li> 
</ul></div>
<div class="col_1"><ul><li class="app_list"><a href="">Spring</a></li> 
<li class="app_list"><a href="">Stud</a></li> 
<li class="app_list"><a href="">Tension Rod</a></li> 
<li class="app_list"><a href="">Thread Cutter</a></li> 
<li class="app_list"><a href="">Thread Guide</a></li> 
<li class="app_list"><a href="">Thread Stand</a></li> 
<li class="app_list"><a href="">Thread Takeup</a></li> 
<li class="app_list"><a href="">Thread Tube</a></li> 
<li class="app_list"><a href="">Threading Plate</a></li> 
<li class="app_list"><a 
href="">Uncurling Block</a></li> 
<li class="app_list"><a href="">Upper Cutter Carrier</a></li> 
<li class="app_list"><a href="">Upper Cutter Carrier Cap</a></li> 
<li class="app_list"><a href="">Upper Cutter Carrier Clamp</a></li> 
<li class="app_list"><a href="">Upper Cutter Carrier Extension</a></li>
<li class="app_list"><a href="">Presser Foot Finger</a></li> </ul></div>
<div class="col_1"><ul>
<li class="app_list"><a href="">Pulley</a></li> 
<li class="app_list"><a href="">Rocker Shaft</a></li> 
<li class="app_list"><a href="">Screws</a></li> 
<li class="app_list"><a href="">Shaft</a></li> 
<li class="app_list"><a href="">Shim</a></li>
<li class="app_list"><a href="">Upper Cutter Holder</a></li> 
<li class="app_list"><a href="">Upper Cutter Holder Clamp</a></li> 
<li class="app_list"><a href="">Washer</a></li> 
<li class="app_list"><a href="">Wheel Foot</a></li> 
<li class="app_list"><a href="">Work Plate</a></li> 
<li class="app_list"><a href="">Work Plate Support</a></li> 
<li class="app_list"><a href="">by Sewing Machine Class</a></li><li class="app_list"><a href="">Sewing Machine Needles</a></li><li class="app_list"><a href="">Sewing Machine Hooks</a></li>
</ul></div>
</div><!-- End 4 columns container -->
</div>
</div></li><!-- End 4 columns Item -->
<li id="top_right" class="menu_right"><a href="#" class="drop">Resources</a><!-- Begin 5 columns Item --><div class="dropdown_5columns align_right"><!-- Begin 5 columns container --><div class="col_2">
<div class="resource_container">
<a href="http://www.merrow.com/agentmap.html">
<div class="r_image" id="a"></div>
<div class="r_headline">Agent Locater</div>
<div class="r_body">Find a dealer in your area to help with sales, service, or repairs.</div>
</a>
</div>
</div><div class="col_2">
<div class="resource_container">
<a href="http://www.merrow.com/stitch.html">
<div class="r_image" id="b"></div>
<div class="r_headline">Stitch Browser</div>
<div class="r_body">Search our visual database to find the stitch of the merrow machine you're after</div>
</a>
</div>
</div><div class="col_2">
<div class="resource_container">
<a href="http://www.merrow.com/needle_configurator.html">
<div class="r_image" id="c"></div>
<div class="r_headline">Needle Selector Tool</div>
<div class="r_body">The online needle selector tells you which Merrow needle is best for your applications and/or fabric</div>
</a>
</div>
</div><div class="col_2">
<div class="resource_container">
<a href="http://www.youtube.com/user/merrowmachine">
<div class="r_image" id="d"></div>
<div class="r_headline">Video</div>
<div class="r_body">Visit the Merrow Video Section for technical demonstrations, product information, and useful tips. </div>
</a>
</div>
</div><div class="col_2">
<div class="resource_container">
<a href="http://merrow.com/search1.php?iframe=true&height=120&width=578" rel="prettyPhoto[iframes2]" title="How Olde is my Merrow">
<div class="r_image" id="e"></div>
<div class="r_headline">How Old is My Merrow</div>
<div class="r_body">Enter the serial number of your Merrow Machine to determine if your Merrow is "old as dirt".</div>
</a>
</div>
</div><div class="col_2">
<div class="resource_container">
<a href="/agent_dashboard.php">
<div class="r_image" id="f"></div>
<div class="r_headline">Dealer Login</div>
<div class="r_body">Dealer Pricing and Marketing Material</div>
</a>
</div>
</div><div class="col_2">
<div class="resource_container">
<a href="/about.html">
<div class="r_image" id="g"></div>
<div class="r_headline">The Merrow Story</div>
<div class="r_body">Learn the story behind Merrow's invention of the overlock stitch and other company milestones</div>
</a>
</div>
</div><div class="col_2">
<div class="resource_container">
<a href="/widget_marketing_material.php?iframe=true&width=500&height=600" rel="prettyPhoto[iframes3]">
<div class="r_image" id="h"></div>
<div class="r_headline">Marketing Downloads</div>
<div class="r_body">Our download section for a list of available marketing tools</div>
</a>
</div>
</div><div class="col_2">
<div class="resource_container">
<a href="http://travels.merrow.com">
<div class="r_image" id="i"></div>
<div class="r_headline">JOBS!</div>
<div class="r_body">Working at Merrow is awsome - join us!</div>
</a>
</div>
</div>
<div class="col_2">
<div class="resource_container">
<a href="/merrow_login.html">
<div class="r_image" id="j"></div>
<div class="r_headline">Merrow Login</div>
<div class="r_body">log in to Merrow</div>
</a>
</div>
</div>
<div class="col_2">
<div class="resource_container">
<a href="http://www.merrowing.com">
<div class="r_image" id="k"></div>
<div class="r_headline">Merrow Community</div>
<div class="r_body">Exchange ideas. See what's going on. Talk to others that value their Merrow Machines and Stitches</div>
</a>
</div>
</div>
<div class="col_2">
<div class="resource_container">
<a href="http://blog.merrow.com">
<div class="r_image" id="l"></div>
<div class="r_headline">Blog</div>
<div class="r_body">The latest and greates happenings at the Merrow Company from product releases to pie contests</div>
</a>
</div>
</div>
</div><!-- End 5 columns container --></li></ul>
</div></div>
<div id="cse" style="width:100%;"></div>
<div id="pageContent"> 
<div id="visitorContentWrapper" class="daypass"> <div id="availableTitles"> 
<div id="lab_container">
<div class="bottom_lab">
<div class="c_grid_1 prefix_14 suffix_1"><p class="close">CLOSE</p></div>
<div class="c_grid_5">
<img src="http://merrow-media.s3.amazonaws.com/general-http/g_07.png" />
<p class="lab_text">Your Stitching has value. With Merrow's Stitch Lab you have the power to ensure that it won't be compromised while being sewn. Our stitch Lab will sew off your material the way you need it with the stitch you want on your customized Merrow Machine. Send us a stitch sample and your material: we'll sew it and have it back to you in 14 days.</p></div>
<div class="c_grid_4">
<div id="instruction_first"><div id="number">1.</div><span class="first">Send us your material</span></div>
<div id="instruction"><div id="number">2.</div><span class="first">We'll work with you to create the stitch that brings you value</span></div>
<div id="instruction"><div id="number">3.</div><span class="first">We'll hand build a machine to sew on your material</span></div>                            <div id="instruction_last"><div id="number">4.</div><span class="first">We'll ship your machine sewn off and ready for production</span></div>
</div>
<div class="c_grid_7">
<? if ($_GET['form'] == 'complete') { ?>
<div class="thankyou">
<img id="bars" src="http://merrow-media.s3.amazonaws.com/general-http/g_21.png" />
<img src="http://merrow-media.s3.amazonaws.com/general-http/g_22.png">
<div class="thx_text"><p class="bigred">Thank You for your interest in the merrow stitch lab!</p><div class="bottom_third"><p class="thanks_text">We will get back you promptly regarding your request</p></div>
</div>
</div><?  } else { ?>
<div class="form_container">
<img id="bars" src="http://merrow-media.s3.amazonaws.com/general-http/g_21.png" />
<img src="http://merrow-media.s3.amazonaws.com/general-http/g_09.png" />
<form action="widget_sub_datamover.php" method="post">
<input name="party_id" type="hidden" value="0007679" />
<input name="source" type="hidden" value="nfp" />
<input name="captcha" type="hidden" value="no" />
<input id="virgil" type="text_box" name="email" name="bronx_box" value="enter your email here..." />
<div id="directions">Enter your email address to coordinate shipment of your material to us for <span class="red">FREE</span>.</div>
<div class="submit_l">
<input type="submit" id="hera" value="Send Message" src="http://merrow-media.s3.amazonaws.com/general-http/g_14.png" name="submit"><!-- <input id="hera" type="submit" value="submit" src="http://merrow-media.s3.amazonaws.com/general-http/g_14.png" name="image"  /> -->
</div>
</form>
</div>
<? } ?>
</div>
<div class="clear"></div>
<div class="the_fold"><div class="c_grid_16"><div id="dots"></div></div>
<div class="c_grid_4"><img id="lab_c_logo" src="http://merrow-media.s3.amazonaws.com/general-http/g_18.jpg"></div>
<div class="c_grid_12"><p class="quote">"With Merrow I created a new stitch for my Outdoor Apparel mid-weight line, it's awesome! We were able to develop the stitch and move into production in less than six weeks. The service is unequalled. "</p><p class="source">- Rob Nadler, Ragged Mountain CEO</p></div>
</div>
</div>
<div class="fat_boy"></div></div>                          </div>
</div>
</div>
</div>