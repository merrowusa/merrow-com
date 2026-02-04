<?php ob_start("ob_gzhandler");$scrub = $_GET['lang'];$nifty = $_COOKIE["lang"];if ( $scrub!=null) {$lang = $_GET['lang']; }elseif ($scrub = null) {$lang = '$nifty'; }if ( $scrub!=null) {setcookie("lang", "$scrub", time()+3600);} else { } include ("ip_lang_database.php"); $ap = $_GET['app']; include ('widget_sql.php');$murray1 = mysql_query("SELECT * FROM application_categories WHERE  app_key='$ap'")or die(mysql_error());$nate1 = mysql_fetch_array($murray1);?>
<!DOCTYPE html><html lang="en">
<head>
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<meta name="google-site-verification" content="_9qSOieZ5-cE2EMjUTKZyl8EFWckcJct_jFdb9XhTkY" />
<title>Merrow Machine Company</title> 
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<style type="text/css" media="all"> @import "http://css.imerrow.com/css_major/mg_1_css.php"; @import "http://merrow-media.s3.amazonaws.com/general-http/wireframe.css"; @import "http://css.imerrow.com/css_major/c_grid_960.css";</style>
<meta name="y_key" content="b0241928e572e190">
<meta name="description" content="" /> 
<meta name="keywords" content="" /> 
<meta name="Author" content="Merrow">
<meta name="Category" content="products,sewing machines">
<script type='text/javascript' src='http://merrow.com/cephei/scripts/ongo_js.js'></script> 

<? include ('widget_analytics.php'); ?>
</head>

   
      <script> 
    if (top.location != self.location) {
	    top.location = self.location.href
	}
</script>
<!-- ##################
menu
################## -->

 <script>
        
        
        (function ($) {
            $.fn.property_list = function(options) {
                var opts = {path: '../'};
        		opts = $.extend($.fn.property_list.defaults, options);
        		return this.each(function(){
                	var $self = $(this);
        
                	/*
                     * Executes a search on the publication list
                     */
                	var search = function(term) {
                    	var subscribedProps = $(document.body).data('subscribedProps'),
                            params = {
                                widget:'propertylist',
                                id: opts.containerId,
                                uid: opts.uid,
                                term: term,
                                subscribedProps: $.toJSON(subscribedProps), 
                                'class': 'scroll_pane', 
                                listType:'anchor', 
                                linkClass:'orangeLink', 
                                showSearch: opts.showSearch,
                                defaultText: opts.defaultText
                            }; 
                            $self.load(Globals.host + '/widget/widget_api.php',params,function (){init();});
                            if (term == "%") 
                                $("#" + opts.searchTerm).val(opts.defaultText);
                            return true; 
                	},
                	init = function() {
                		if (opts.allowScrolling) {
                            // if we're adding the 1st source, add the scrollbar
                            if (Utility.isMobileWebKit()) {
                                var h = $("#pageContainer").parent().height() - 182,
                                    src = $('#listContainer');
                                    src.height("auto");
                                if (($('body#daypass').length > 0) || ($('body#how-it-works').length > 0)) {
                                	var h = $('#propertyDetails').height();
                                }
                                if (!src.parents(".touch_wrapper").get(0)) {
                                    src.wrap('<div class="touch_wrapper" style="float:left;width:100%;overflow:hidden;height:' + h + 'px" />');
                                    MobileWebKit.touchScrollable(src.get(0));
                                }
                                
                            }
                            else {
        	        			$('.scroll_pane').jScrollPane({
        	                        scrollbarWidth: 17,
        	                        showArrows:true,
        	                        verticalArrowPositions: 'split',
        	                        autoReinitialise: false 
        	                    });
                            }
                        }
                	};
                           
                    $("." + opts.searchBtn).live('click',function() {
                        var term = $.trim($("#" + opts.searchTerm).val());
                        if (term == "" || term == opts.defaultText) return false;
                        
                        search(term);
                        return true; 
                    });
        
                    $('.' + opts.listItem).live('click',function() {
                    	var id = $(this).attr('id'),
                            x = id.split('_'),
        	            	cartData = $(document.body).data('cartData'),
        	            	subscribedProps = $(document.body).data('subscribedProps'),
                            params = {
                                widget:"propertyinfo",
                                cmd:opts.cmd,
                                lightMasthead: opts.lightMasthead,
                                noButton: opts.noButton,
                                prop_id: x[1],
                                uid: opts.uid,
                                subscribedProps: $.toJSON(subscribedProps),
                                userPlanInfo: $.toJSON(cartData)
                            };
                        $('.propList > li').find('.selected').removeClass('selected');
                        $('#' + opts.propInfoContainer).load(Globals.host + "/widget/widget_api.php",params,function(){ 
                        	if (opts.resizeCB) { opts.resizeCB();}
                        });
                        $(this).addClass('selected');
                        
                        return true;
                    });
        
                    $("#" + opts.searchTerm).live('focus',function(){
                        if ($.trim($(this).val()) == $.trim(opts.defaultText))
                            $(this).val('');
                    });
                    $("#" + opts.searchTerm).live('blur',function(){
                        if ($.trim($(this).val()) == '')
                            $(this).val(opts.defaultText);
                    });
        
                    shortcut.add("enter",function() {return $("." + opts.searchBtn).click();},true);
                    init();
                });
            };
        
            $.fn.property_list.defaults = {
            		defaultText: 'Search Publications',
            		lightMasthead:true,
            		noButton:false,
            		showSearch:false,
            		cmd:''
            };
        
        })(jQuery); 
        
        </script> 
        
                           

		 
         

 <body id="<? if ($_GET['form'] == 'complete') { echo 'thankyou'; } else { echo 'daypass'; } ?>"> 

 <a name="top"></a>
 <? 
  include ("header_test.php"); ?>
 <div class="container_16">	
        <div id="pageContent"> 
                     <div id="visitorContentWrapper" class="daypass"> 
            	<div id="visitorContent"> 
       <div class="kiddy_container_980"> 
          
         	<div class="float_i"> 
         	<a href="http://www.bostonthread.com/merrowing-thread-10.html?hn=3357&application=3024&limit=55#496=399&497=3047"> 
         	  <img id="first" src="http://merrow-media.s3.amazonaws.com/general-http/h_04.jpg" width="345"
         	  alt="image_stitch" /> 
         	  </a> 
         	</div> 
         	
         	<div class="float_i"> 
         	<a href="/why.html"> 
         	  <img id="middle"  src="http://merrow-media.s3.amazonaws.com/general-http/h_06.jpg"  width="270"
         	  alt="image_stitch" /> 
         	  </a> 
         	</div> 
         	
         	<div class="float_i"> 
         	<a href="/Sergers_and_Overlock_Sewing_Machines/Emblem_Edging/mg3u"> 
         	  <img id="middle" src="http://merrow-media.s3.amazonaws.com/general-http/h_08.jpg"  width="170"
         	  alt="image_stitch" /> 
         	  </a> 
         	</div> 
         	<div class="float_i"> 
         	<a href="/Sergers_and_Overlock_Sewing_Machines/Emblem_Edging/mg3u"> 
         	  <img id="last" src="http://merrow-media.s3.amazonaws.com/general-http/h_10.jpg"  width="155"
         	  alt="image_stitch" /> 
         	  </a> 
         	</div> 
          
         </div>				
         
                        	
            	</div>
                   
                   </div>
                   <!-- visitorContent --> 
          <div id="StitchLabBtn" ><h4><span class="h4 fc_clickable"></span></h4></div> 
            <div id="availableTitles"> 
               <div id="lab_container">
              
                   <div class="top_lab"></div>
                    <div class="bottom_lab">
                           <div class="c_grid_16"></div>
                           <div class="c_grid_5">
                           <img src="http://merrow-media.s3.amazonaws.com/general-http/g_07.png" />
                           <p class="lab_text">Your Stitching has value. With Merrow's Stitch Lab you have the power to ensure that it won't be compromised while being sewn. Out stitch Lab will sew off your material the way you need it with the stitch you want on your customized Merrow Machine. Send us a stitch sample and your material: we'll sew it and have it back to you in 14 days.</p></div>
                           <div class="c_grid_4">
                           <div id="instruction_first"><div id="number">1.</div><span class="first">Send us your material</span></div>
                            <div id="instruction"><div id="number">2.</div><span class="first">We'll work with you to create the stitch that brings you value</span></div>
                            <div id="instruction"><div id="number">3.</div><span class="first">We'll hand buid a machine to sew on your material</span></div>                            <div id="instruction_last"><div id="number">4.</div><span class="first">We'll ship your machine sewn off and ready for production</span></div>
                                                    </div>
                           <div class="c_grid_7">
                           <? if ($_GET['form'] == 'complete') { ?>
                           <div class="thankyou">
                                           <img id="bars" src="http://merrow-media.s3.amazonaws.com/general-http/g_21.png" />
                           <img src="http://merrow-media.s3.amazonaws.com/general-http/g_22.png">
                           <div class="thx_text"><p class="bigred">Thank You for your interest in the merrow stitch lab!</p>
                          
                           <div class="bottom_third"><p class="thanks_text">We will get back you promptly regarding your request</p></div>
                          </div>
                           </div>
                           
                          <?  } else { ?>
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
                           <input type="submit" id="hera" value="Send Message" src="http://merrow-media.s3.amazonaws.com/general-http/g_14.png" name="submit">
                           
                          <!-- <input id="hera" type="submit" value="submit" src="http://merrow-media.s3.amazonaws.com/general-http/g_14.png" name="image"  /> -->
                          </div>
                           </form>
                           </div>
                           <? } ?>
                          </div>
                           <div class="the_fold">
                          	
                          	 <div class="c_grid_16"><div id="dots"></div></div>
                          		 <div class="c_grid_4"><img id="lab_c_logo" src="http://merrow-media.s3.amazonaws.com/general-http/g_18.jpg"></div>
                          		 <div class="c_grid_12"><p class="quote">"With Merrow I created a new stitch for my Outdoor Apparel mid-weight line, it is awesome!"</p><p class="source">- Rob Nadler, Ragged Mountain CEO</p></div>
                           </div>
                           </div>
                           </div>                          
                                        
                   
               
            </div>   
            <!-- visitorContentWrapper --> 
        <div class="kiddy_container_980a"> 
             
           	
            	
            	<div class="float_i"> 
            	  <div class="block_i">
            	<a href="http://www.bostonthread.com/merrowing-thread-10.html?hn=3357&application=3024&limit=55#496=399&497=3047"> 
            	  <img src="http://merrow-media.s3.amazonaws.com/general-http/h_20.png"
            	  alt="image_stitch" /> 
            	  </a> 
            	  <p>Customer Stories.  Merrow has a rich history of working with interesting customers to satisfy their unique problems.  The hallmark of
            	  our business is working to create production solutions for customers whose product involves stitching.  </p>
            	  </div>
            	  	</div> 
            	
            	<div class="float_i"> 
            	  <div class="block_i">
            	<a href="/why.html"> 
            	  <img src="http://merrow-media.s3.amazonaws.com/general-http/h_22.png" 
            	  alt="image_stitch" /> 
            	  </a> 
            	  <p>Merrow is different because our Stitch Lab™ will design a stitch with you, and then produce sewing machines for your production floor. After all, we invented the crochet stitch, the purl stitch, the shell stitch, and the scalloped edge.  Start by sending in your fabric and let the Merrow Branded Stitch communicate the value you put into your product.</p>
            	  </div>
            	</div> 
            	
            	<div class="float_i"> 
            	  <div class="block_i">
            	<a href="/Sergers_and_Overlock_Sewing_Machines/Emblem_Edging/mg3u"> 
            	  <img src="http://merrow-media.s3.amazonaws.com/general-http/h_24.png" 
            	  alt="image_stitch" /> 
            	  </a> 
            	  <p>Check out the Merrow Blog for updates, special deals, new products, and interesting company goings-on.  The Merrow Bllog is updated weekly (if not more often) and is a great resource to find out everything interesting that is happening with Merrow.  For regular updates on Merrow happenings, you can also sign up for our newsletter.  </p>
            	  </div>
            	</div> 
            	<div class="float_i"> 
            	  <div class="block_i">
            	<a href="/Sergers_and_Overlock_Sewing_Machines/Emblem_Edging/mg3u"> 
            	  <img src="http://merrow-media.s3.amazonaws.com/general-http/h_26.png"  
            	  alt="image_stitch" /> 
            	  </a> 
            	  <p>The Merrow Community is made up of end users, agents, merrow employees and others.  The Merrow Community site is a great place to learn and discuss what’s going on in the field, what’s hot in the textile and sewing industries, and what interesting things people are using Merrow machines for.  Join Now!</p>
            	  </div>
            	</div> 
             
            </div>  
            <div class="c_grid_16">
             <div class="foot_bar"><div class="bottomlinks">
               <ul id="centerlinks">
               <li><a href="agent_dashboard.html">Reseller Login</a></li>
               <li id="last"><a href="contact_general.html">Contact Us</a></li>
             
               </ul>
             	</div>
             	</div>
             <div class="footer contain">
             	<hr />
             <p>Copyright &copy; 2011 Merrow Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners. </p>
             	</div><!-- }}} footer -->
             
             	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
             	<script type="text/javascript">
             	  google.load('search', '1', {language : 'en'});
             	  google.setOnLoadCallback(function() {
             	    var customSearchControl = new google.search.CustomSearchControl('000686371167066148373:l8_fk9q_jni');
             	    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
             	    var options = new google.search.DrawOptions();
             	    options.setSearchFormRoot('cse-search-form');
             	    options.setAutoComplete(true);
             	    customSearchControl.draw('cse', options);
             	  }, true);
             	</script>
             	</div>
             		<!-- END MENU JS -->
                    
                        <div class="kiddy_container_980b">  </div>
             
     
      </div>
     </div> 

<!--  end GA --> 
		    </body> 
</html>