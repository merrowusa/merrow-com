<?php

$scrub = $_GET['lang'];  
$nifty = $_COOKIE["lang"];
$app = $_GET['app']; 

// there are three varables above this line EDIT THIS IF THAT CHANGES (scrub, nifty, app)

if ( $scrub!=null) { 
$lang = $_GET['lang']; }
elseif ($scrub = null) {
$lang = '$nifty'; }
  

if ( $scrub!=null) { 
setcookie("lang", "$scrub", time()+3600);


} else { } ?>


<?php include ("ip_lang_database.php") ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	
<head>
	<title>Merrow Stitching</title>
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="Applications for Overlock Sewing and Merrow stitching">
	<meta name="Keywords" content="merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,merrow stitching">
	<meta name="viewport" content="width=1024">
	<meta name='robots' content='index,follow' />

	<link rel="stylesheet" type="text/css" href="http://css.imerrow.com/css_major/stitching_styles_default.css">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
	<style type="text/css" media="all"> @import "http://merrowservices.s3.amazonaws.com/css/services_cleanup.css";
	</style>
	
	

</head>

<body class="centerAlign">

<div id="pageWrap" class="contain">
	
<!-- ##################  
	 HEADER 
	 ################## -->	
	
	<? include ("widget_main_google_menu.php"); ?>


	
	
<!-- ##################  
	DECORATIVE CONTENT
	 ################## -->	
<? if ($app == 'decorative') { ?>

	<div class="content contain">
		
		<div class="mainCol contain">
			<div class="homeImg homeImg0" id="homeHeader">
				<p class="header">the Merrow Edge <br><span>thousands of stitches for the edging of fabric and the design of fine goods</span></p>
			</div>
			
				
			<div class="lrgMid">
				<div class="lrgBtm">
					<div class="lrgTop contain">

						<p class="title">Merrow Decorative Stitching</p>
						
						<div class="imgTxt tool">
							<p>Decorative Stitching is the art of applying an overlock stitch to products. Merrow invented the overlock stitch more than a century ago and we've spent the last 100 years improving it. Merrow offers more decorative overlock stitches than anyone in the business. Our job is to help you find the right one. </p>
	
				
							
							
							<div class="greyMain">

								<div class="greyTop">
									<div class="greyBtm">
									 
										<p class="title">Find  a specific stitch</p>
										<div class="searchapps"> <a href="http://merrow.com/applications/app/decorative/">search by application</a></div>
					
								  </div><!-- }}} greyBtm -->
								</div><!-- }}} greyTop -->
							</div><!-- }}} greyMain -->

						
						</div><!-- }}} imgTxt -->
						
						<div class="imgTxt arrow">
							<p class="title">New to Merrow?</p>
							<p>Merrow designs and builds sewing machines. Established in 1838 Merrow is now based in Fall River Massachusettes, USA.   </p>	
							
						</div><!-- }}} imgTxt -->
						
					
					</div><!-- }}} lrgTop -->
				</div><!-- }}} lrgBtm -->
			</div><!-- }}} lrgMid -->

			
			<div class="lrgMid">
				<div class="lrgBtm">
					<div class="lrgTop contain">
						<h2>How to get the stitch into production?</h2>
						
						 <ul id="howItWorksLarge">
              <li class="register"><a href="http://merrow.com/applications/app/decorative">Stitch</a></li>
              <li class="arrowBlack"></li>
              <li class="promote"><a href="http://store.merrow.com/category/10239033441/1/Sewing-Machines.htm">Machine</a></li>

              <li class="arrowBlack"></li>
              <li class="pricing"><a href="http://store.merrow.com/category/10398246041/1/Accessories.htm">Accessories</a></li>
              <li class="arrowBlack"></li>
              <li class="optimise"><a href="#"></a></li>
            </ul>
					</div><!-- }}} lrgTop -->
				</div><!-- }}} lrgBtm -->
			</div><!-- }}} lrgMid -->

			
		</div><!-- }}} mainCol -->
		
		<div class="rightCol contain">
			<hr />
			<h2 class="access">Related content</h2>
			
			<div class="joinTopBlue contain">
				<div class="joinBtm">
					<h3>Search for your Decorative Stitch</h3>
					
					<p>the Application configurator</p>

					
					<p class="btnLnk contain"><a href="http://merrow.com/applications/app/decorative"><span>Search Stitches</span></a></p>
				</div><!-- }}} joinBtm -->
			</div><!-- }}} joinTop -->

			
			<div class="smlMid contain">
				<div class="smlTop">
					<div class="smlBtmShade">
						<h3>Glossary</h3>
                        <h2>Decorative Edging:</h2>
                        <p class="answer">Merrow Deocorative Edging is the process of adding a sewn edge to any product. </p>
                                 <h2>Seaming:</h2>
                         <p class="answer">Merrow Seaming is the process of assembling a product with an overlock stitch.  </p>
                                 <h2>Textile Finishing:</h2>
                        <p class="answer">The process of Seaming fabric together in a continuous operation also called 'Butt-Seaming'. This stitch is often flat and very strong</p>

												<ul class="datedList" id="blogList"></ul>
						<p class="view"><a href="http://en.wikipedia.org/wiki/Overlock">to the Wikipedia (for Merrow)</a></p>
					</div><!-- }}} smlBtm -->
				</div><!-- }}} smlTop -->
			</div><!-- }}} smlMid -->
			
			
			<div class="smlMid contain">
				<div class="smlTop">
					<div class="smlBtm">

						<h3>Useful links</h3>
						
						<ul class="links">
							<li><a href="http://merrow.com/videoHD.php">Sewing Videos</a></li>
							<li><a href="http://merrow.com/stitch.php">General Stitch Browser</a></li>
							<li><a href="http://merrow.com/needle_configurator.php">Find the right Needle</a></li>
                          
	<li><a href="http://merrow.com/ebay.php">Merrow Machines on Ebay</a></li>
                            
						</ul>

					</div><!-- }}} smlBtm -->
				</div><!-- }}} smlTop -->
			</div><!-- }}} smlMid -->

		</div><!-- }}} rightCol -->


	</div><!-- }}} content -->




<!-- ##################  
	TEXTILE FINISHING CONTENT
	 ################## -->	
<? } elseif ($app == 'finishing') { ?>

<div class="content contain">
		
		<div class="mainCol contain">
			<div class="homeImg homeImg4" id="homeHeader">
				<p class="header1">Fabric Joining <br><span>the industries most robust and flexible solution for joining wovens, non-wovens, &amp felt</span></p>
			</div>
			
				
			<div class="lrgMid">
				<div class="lrgBtm">
					<div class="lrgTop contain">

						<p class="title">Merrow End to End Seaming Stitching</p>
						
						<div class="imgTxt tool">
							<p>Used almost exclusively in the finishing or processing of fabrics, Merrow's end-to-end seaming solutions are flexible and powerful. With support for Wet or Dry environments, woven, non-woven, felt and scrim fabrics, as well as heavy and durable goods like fiberglass -- Merrow can provide a solution to almost any type of material seaming problem.  </p>
	
				
							
							
							<div class="greyMain">

								<div class="greyTop">
									<div class="greyBtm">
									 
										<p class="title">Find  a specific stitch</p>
										<div class="searchapps"> <a href="http://merrow.com/applications/app/finishing">search by application</a> </div>
                                        <div class="sendus"> send us an email if you have questions....</div>
					
								  </div><!-- }}} greyBtm -->
								</div><!-- }}} greyTop -->
							</div><!-- }}} greyMain -->

						
						</div><!-- }}} imgTxt -->
						
						<div class="imgTxt arrow">
							<p class="title">Need a Rail or a Table? </p>
							<p>With Railways up to 6 Meters, Merrow can provide full service solutions for seaming equipment. Our new Battery Powered seaming table, along with the fully mechanized equipment for tubular knits are supported worldwide.   </p>	
							
						</div><!-- }}} imgTxt -->
						
					
					</div><!-- }}} lrgTop -->
				</div><!-- }}} lrgBtm -->
			</div><!-- }}} lrgMid -->

			
			<div class="lrgMid">
				<div class="lrgBtm">
					<div class="lrgTop contain">
						<h2>How to get the stitch into production?</h2>
						
						 <ul id="howItWorksLarge">
              <li class="register"><a href="http://merrow.com/applications/app/finishing">Stitch</a></li>
              <li class="arrowBlack"></li>
              <li class="promote"><a href="http://store.merrow.com/category/10239033441/1/Sewing-Machines.htm">Machine</a></li>

              <li class="arrowBlack"></li>
              <li class="pricing"><a href="http://store.merrow.com/category/10398246041/1/Accessories.htm">Accessories</a></li>
              <li class="arrowBlack"></li>
              <li class="optimise"><a href="#"></a></li>
            </ul><div class="sendus"> send us an email if you have questions....</div>
					</div><!-- }}} lrgTop -->
				</div><!-- }}} lrgBtm -->
			</div><!-- }}} lrgMid -->

			
		</div><!-- }}} mainCol -->
		
		<div class="rightCol contain">
			<hr />
			<h2 class="access">Related content</h2>
			
			<div class="joinTopBlue contain">
				<div class="joinBtm">
					<h3>Search Textile Finshing Seams</h3>
					
					<p>the Application configurator</p>

					
					<p class="btnLnk contain"><a href="http://merrow.com/applications/app/finishing"><span>Search Stitches</span></a></p>
				</div><!-- }}} joinBtm -->
			</div><!-- }}} joinTop -->

			
			<div class="smlMid contain">
				<div class="smlTop">
					<div class="smlBtmShade">
						<h3>Glossary</h3>
                        <h2>Decorative Edging:</h2>
                        <p class="answer">Merrow Deocorative Edging is the process of adding a sewn edge to any product. </p>
                                 <h2>Seaming:</h2>
                         <p class="answer">Merrow Seaming is the process of assembling a product with an overlock stitch.  </p>
                                 <h2>Textile Finishing:</h2>
                        <p class="answer">The process of Seaming fabric together in a continuous operation also called 'Butt-Seaming'. This stitch is often flat and very strong</p>

												<ul class="datedList" id="blogList"></ul>
						<p class="view"><a href="http://en.wikipedia.org/wiki/Overlock">to the Wikipedia (for Merrow)</a></p>
					</div><!-- }}} smlBtm -->
				</div><!-- }}} smlTop -->
			</div><!-- }}} smlMid -->
			
			
			<div class="smlMid contain">
				<div class="smlTop">
					<div class="smlBtm">

						<h3>Useful links</h3>
						
						<ul class="links">
							<li><a href="http://merrow.com/videoHD.php">Sewing Videos</a></li>
							<li><a href="http://merrow.com/stitch.php">General Stitch Browser</a></li>
							<li><a href="http://merrow.com/needle_configurator.php">Find the right Needle</a></li>
                          
	<li><a href="http://merrow.com/ebay.php">Merrow Machines on Ebay</a></li>
                            
						</ul>

					</div><!-- }}} smlBtm -->
				</div><!-- }}} smlTop -->
			</div><!-- }}} smlMid -->

		</div><!-- }}} rightCol -->


	</div><!-- }}} content -->
    


<!-- ##################  
	SEAMING CONTENT
	 ################## -->	

    <? } elseif($app == 'seaming') { ?>
    
    
<div class="content contain">
		
		<div class="mainCol contain">
			<div class="homeImg homeImg1"id="homeHeader"> 
				<p class="header">"Merrowing" <br><span>170 years of building the worlds best overlock sewing machines</span></p>
			</div>
			
				
			<div class="lrgMid">
				<div class="lrgBtm">
					<div class="lrgTop contain">

						<p class="title">The Merrow Seam</p>
						
						<div class="imgTxt tool">
							<p>Merrowing is the sewing of an overlock stitch. The Merrow heritage of sewing machine development and industry collaboration has provided a rich history of great seams. We have developed more than 10,000 different sewing machines. The Merrow Machine for seaming is defined by it's  stitch quality, versitility and longeivty.   </p>
	
				
							
							
							<div class="greyMain">

								<div class="greyTop">
									<div class="greyBtm">
									 
										<p class="title">Find  a specific stitch</p>
									<div class="searchapps">	<a href="http://merrow.com/applications/app/seaming">search by application</a> </div>
					
								  </div><!-- }}} greyBtm -->
								</div><!-- }}} greyTop -->
							</div><!-- }}} greyMain -->

						
						</div><!-- }}} imgTxt -->
						
						<div class="imgTxt arrow">
							<p class="title">New to Merrow?</p>
							<p>Merrow designs and builds sewing machines. Established in 1838 Merrow is now based in Fall River Massachusettes, USA.   </p>	
							
						</div><!-- }}} imgTxt -->
						
					
					</div><!-- }}} lrgTop -->
				</div><!-- }}} lrgBtm -->
			</div><!-- }}} lrgMid -->

			
			<div class="lrgMid">
				<div class="lrgBtm">
					<div class="lrgTop contain">
						<div class="bottomlead"> How to get the stitch into production?</div>
						
		<ul id="howItWorksLarge">
              <li class="register"><a href="http://merrow.com/applications/app/seaming">Stitch</a></li>
              <li class="arrowBlack"></li>
              <li class="promote"><a href="http://store.merrow.com/category/10239033441/1/Sewing-Machines.htm">Machine</a></li>

              <li class="arrowBlack"></li>
              <li class="pricing"><a href="http://store.merrow.com/category/10398246041/1/Accessories.htm">Accessories</a></li>
              <li class="arrowBlack"></li>
              <li class="optimise"><a href="#"></a></li>
            </ul><div class="sendus"> send us an email if you have questions....</div>
			</div><!-- }}} lrgTop -->
				</div><!-- }}} lrgBtm -->
			</div><!-- }}} lrgMid -->
			
		</div><!-- }}} mainCol -->
		
		<div class="rightCol contain">
			<hr />
			<h2 class="access">Related content</h2>
			
			<div class="joinTopBlue contain">
				<div class="joinBtm">
					<h3>Search for your Merrow Seam</h3>
					
					<div class="appconfigannouncement"> <p>the Application configurator -- our interactive collection of thousands of stitches and applications with multiple filters</p></div>

					
					<p class="btnLnk contain"><a href="http://merrow.com/applications/app/seaming"><span>Search Applications</span></a></p>
				</div><!-- }}} joinBtm -->
			</div><!-- }}} joinTop -->

			
			<div class="smlMid contain">
				<div class="smlTop">
					<div class="smlBtmShade">
						<h3>Glossary</h3>
                        <h2>Decorative Edging:</h2>
                        <p class="answer">Merrow Deocorative Edging is the process of adding a sewn edge to any product. </p>
                                 <h2>Seaming:</h2>
                         <p class="answer">Merrow Seaming is the process of assembling a product with an overlock stitch.  </p>
                                 <h2>Textile Finishing:</h2>
                        <p class="answer">The process of Seaming fabric together in a continuous operation also called 'Butt-Seaming'. This stitch is often flat and very strong</p>

												<ul class="datedList" id="blogList"></ul>
						<p class="view"><a href="http://en.wikipedia.org/wiki/Overlock">to the Wikipedia (for Merrow)</a></p>
					</div><!-- }}} smlBtm -->
				</div><!-- }}} smlTop -->
			</div><!-- }}} smlMid -->
			
			
			<div class="smlMid contain">
				<div class="smlTop">
					<div class="smlBtm">

						<h3>Useful links</h3>
						
						<ul class="links">
							<li><a href="http://merrow.com/videoHD.php">Sewing Videos</a></li>
							<li><a href="http://merrow.com/stitch.php">General Stitch Browser</a></li>
							<li><a href="http://merrow.com/needle_configurator.php">Find the right Needle</a></li>
                          
	<li><a href="http://merrow.com/ebay.php">Merrow Machines on Ebay</a></li>
                            
						</ul>

					</div><!-- }}} smlBtm -->
				</div><!-- }}} smlTop -->
			</div><!-- }}} smlMid -->

		</div><!-- }}} rightCol -->


	</div><!-- }}} content -->
    
    <? } else { ?>
    
    
<!-- ##################  
	SEAMING CONTENT
	 ################## -->	


<div class="content contain">
		
		<div class="mainCol contain">
			<div class="homeImg homeImg7" id="homeHeader">
				<p class="header">t</span></p>
			</div>
			
				
			<div class="lrgMid">
				<div class="lrgBtm">
					<div class="lrgTop contain">

						<p class="title">Merrow(ing) Applications</p>
                        <div class="app_images">
                        <div class="decorative ex"><a href="http://merrow.com/merrow_stitching/app/decorative"><img name="" src="http://images.imerrow.com/images/act6_lil.jpg" width="100" height="100" alt="act6" /></a>
                        <div class="textcontainer1"> <div class="apptitle1"><a href="http://merrow.com/merrow_stitching/app/decorative"> Decorative Edging</a></div><p class="explination1"> these stitches display Merrow's fine edging in a variety of fabrics and include all shell stitches, emblems and purl edging</p></div></div>
                        <div class="decorative ex"><a href="http://merrow.com/merrow_stitching/app/finishing"><img name="" src="http://images.imerrow.com/images/act5_lil.jpg" width="100" height="100" alt="act6" /></a>
                        <div class="textcontainer1"> <div class="apptitle1"><a href="http://merrow.com/merrow_stitching/app/finishing">End to End Seaming (textile finishing)</a></div><p class="explination1"> Industrial Fabric Joining: Merrow is the world leader joining fabrics with a sewn solution. With machines for wet and dry environments, railways, stainless tables and air-motors</p></div></div>
                        <div class="decorative ex"><a href="http://merrow.com/merrow_stitching/app/seaming"><img name="" src="http://images.imerrow.com/images/act3_lil.jpg" width="100" height="100" alt="act6" /></a>
                        <div class="textcontainer1"><div class="apptitle1"><a href="http://merrow.com/merrow_stitching/app/seaming">Seaming, or the construction of goods with seams </a></div><p class="explination1">we manufacture a complete line of sergers for a wide range of fabrics, running between 2,000 to 5,500 spm</p></div>
                        </div></div> 
						
					
					
						
					<div class="sendus"> send us an email if you have questions....</div>
					</div><!-- }}} lrgTop -->
				</div><!-- }}} lrgBtm -->
			</div><!-- }}} lrgMid -->

			
			<div class="lrgMid">
				<div class="lrgBtm">
					<div class="lrgTop contain">
						<h2>How to get the stitch into production?</h2>
						
						 <ul id="howItWorksLarge">
              <li class="register"><a href="http://merrow.com/applications/app/decorative">Stitch</a></li>
              <li class="arrowBlack"></li>
              <li class="promote"><a href="http://store.merrow.com/category/10239033441/1/Sewing-Machines.htm">Machine</a></li>

              <li class="arrowBlack"></li>
              <li class="pricing"><a href="http://store.merrow.com/category/10398246041/1/Accessories.htm">Accessories</a></li>
              <li class="arrowBlack"></li>
              <li class="optimise"><a href="#"></a></li>
            </ul><div class="sendus"> send us an email if you have questions....</div>
					</div><!-- }}} lrgTop -->
				</div><!-- }}} lrgBtm -->
			</div><!-- }}} lrgMid -->

			
		</div><!-- }}} mainCol -->

		
		<div class="rightCol contain">
			<hr />
			<h2 class="access">Related content</h2>
			
			<div class="joinTopGold contain">
				<div class="joinBtm">
					<div class="didyouknow"> <p class="quick">today's quick Fact:</p> <p class="wider">did you know that Merrow was established in 1838</p></div>
				</div><!-- }}} joinBtm -->
			</div><!-- }}} joinTop -->

			
			<div class="smlMid contain">
				<div class="smlTop">
					<div class="smlBtmShade">
						<h3>Glossary</h3>
                        <h2>Decorative Edging:</h2>
                        <p class="answer">Merrow Deocorative Edging is the process of adding a sewn edge to any product. </p>
                                 <h2>Seaming:</h2>
                         <p class="answer">Merrow Seaming is the process of assembling a product with an overlock stitch.  </p>
                                 <h2>Textile Finishing:</h2>
                        <p class="answer">The process of Seaming fabric together in a continuous operation also called 'Butt-Seaming'. This stitch is often flat and very strong</p>

												<ul class="datedList" id="blogList"></ul>
						<p class="view"><a href="http://en.wikipedia.org/wiki/Overlock">to the Wikipedia (for Merrow)</a></p>
					</div><!-- }}} smlBtm -->
				</div><!-- }}} smlTop -->
			</div><!-- }}} smlMid -->
			
			
			<div class="smlMid contain">
				<div class="smlTop">
					<div class="smlBtm">

						<h3>Useful links</h3>
						
						<ul class="links">
							<li><a href="http://merrow.com/videoHD.php">Sewing Videos</a></li>
							<li><a href="http://merrow.com/stitch.php">General Stitch Browser</a></li>
							<li><a href="http://merrow.com/needle_configurator.php">Find the right Needle</a></li>
                          
	<li><a href="http://merrow.com/ebay.php">Merrow Machines on Ebay</a></li>
                            
						</ul>

					</div><!-- }}} smlBtm -->
				</div><!-- }}} smlTop -->
			</div><!-- }}} smlMid -->

		</div><!-- }}} rightCol -->


	</div><!-- }}} content -->
    
    <? } ?>
    
<!-- ##################  
	 FOOTER
	 ################## -->	

<div class="footer contain">
	<hr />

	<h2 class="access">Footer</h2>
			
	<p>Copyright &copy; 2010 Merrow Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners.</p>
	
</div><!-- }}} footer -->


</div><!-- }}} pageWrap -->

   <? include ('widget_analytics.php'); ?>
	</body>
    </html>