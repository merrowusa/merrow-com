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
<? $cp = $_GET['cp']; ?>
<? include 'widget_sql.php' ?>

<? $murray = mysql_query("SELECT * FROM machine_pages WHERE style_key='$cp'")
or die(mysql_error());
$nate = mysql_fetch_array($murray);

if ($nate['style_key'] != $cp) {
$murray = mysql_query("SELECT * FROM machine_pages WHERE style_key='m3u'")
or die(mysql_error());
$nate = mysql_fetch_array($murray);

} elseif ($cp == NULL  ) {
$murray = mysql_query("SELECT * FROM machine_pages WHERE style_key='m3u'")
or die(mysql_error());
$nate = mysql_fetch_array($murray);
} 

$machine = $nate['style'];
$style_key = $nate['style_key']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<meta name="google-site-verification" content="_9qSOieZ5-cE2EMjUTKZyl8EFWckcJct_jFdb9XhTkY" />
<title><? echo  $nate['seo_title']; ?> </title> 
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<style type="text/css" media="all">@import "http://merrowservices.s3.amazonaws.com/2010_fp_images/css/960.css"; @import "http://merrowservices.s3.amazonaws.com/2010_fp_images/css/style_a.css"; @import "http://css.imerrow.com/css_major/thickbox.css"; @import "http://css.imerrow.com/css_major/whole_vimeo.css"; @import "http://merrowservices.s3.amazonaws.com/css/services_cleanup.css"; @import "http://hydestore.com/skin/frontend/silver/hydestore/lightwindow/lightwindow.css";
</style>
<meta name="y_key" content="b0241928e572e190">
<meta name="description" content="<? echo  $nate['description']; ?>" /> 
<meta name="keywords" content="<? echo  $nate['seo_keywords']; ?>" /> 
<meta name="search_product_id" content="<? echo  $nate['ot_id']; ?>" />
<meta name="search_descr" content="<? echo  $nate['seo_search_description']; ?>" /> 
<meta name="search_keywords" content="<? echo  $nate['seo_keywords']; ?>" /> 
<meta name="search_title" content="<? echo  $nate['seo_search_title']; ?>" /> 
<meta name="search_image" content="" /> 
<meta name="search_price" content="<? echo  $nate['mrsp']; ?>" /> 
<meta name="search_original_price" content="" /> 
<meta name="search_price_break" content="" /> 
<meta name="search_item_number" content="<? echo  $nate['style_key']; ?> " /> 
<meta name="search_brand" content="Merrow" /> 
<meta name="search_review_title" content="" /> 
<meta name="search_review_date" content="" /> 
<meta name="search_review_type" content="" /> 
<meta name="search_review_id" content="" /> 
<meta name="search_review_video" content="" /> 
<meta name="search_review_video_path" content="" /> 
<meta name="search_product_description" content="" /> 
<meta name="search_product_id" content="" /> 
<meta name="search_review_category_name" content="" /> 
<meta name="search_review_category_code" content="" /> 
<meta name="search_review_link_text" content="" /> 
<meta name="search_site_code" content="CP" /> 
<meta name="search_image_zoom_script" content="" /> 
<meta name="search_image_color" content="" /> 
<meta name='robots' content='index,follow' />


                    <meta name="description" content="Vimeo is a respectful community of creative people who are passionate about sharing the videos they make. Use Vimeo if you want the best tools and highest quality video in the universe." /> 
        
        <meta name="keywords" content="video, video sharing, digital cameras, videoblog, vidblog, video blogging, home video, home movie" /> 
 
        <link rel="stylesheet" type="text/css" media="all" href="http://a.vimeocdn.com/combine.php?type=css&amp;version=7489d&amp;files=global,lightbox,jobs,about&amp;ssl=0" /> 
        
        <style type="text/css" media="all">@import "http://merrowservices.s3.amazonaws.com/2010_fp_images/css/960.css"; @import "http://merrowservices.s3.amazonaws.com/2010_fp_images/css/style_a.css"; @import "http://css.imerrow.com/css_major/thickbox.css"; @import "http://css.imerrow.com/css_major/whole_vimeo.css"; @import "http://merrowservices.s3.amazonaws.com/css/services_cleanup.css"; @import "http://hydestore.com/skin/frontend/silver/hydestore/lightwindow/lightwindow.css";
        </style>
        
 
<!--[if gte IE 7]>
    <link rel="stylesheet" type="text/css" href="http://a.vimeocdn.com/css/ie.css?7489d" />
<![endif]--> 
 
<!--[if lte IE 6]>
    <link rel="stylesheet" type="text/css" href="http://a.vimeocdn.com/css/ie6.css?7489d" />
    <script type="text/javascript" src="http://a.vimeocdn.com/js/ie6.js?7489d"></script>
<![endif]--> 
 
<script type="text/javascript" src="http://a.vimeocdn.com/combine.php?type=js&amp;version=7489d&amp;files=mootools.v1.11_jsmin,mootools_ext,lab&amp;ssl=0"></script> 
        
        
        <style type="text/css">
 div.p1 {
 color:#336699;
 	font-family:"Trebuchet MS",serif;
 	font-size:20px;
 	font-weight:bold;
 	margin-bottom:6px;
 }
 
 div.p2 {font-size:12px;line-height:1.6em;margin-bottom:18px; 
 	
 }
 
 div.p3 {
 	font-size: 14px;
 	font-weight: bold;
 }
 
 ul.ul1 {
 	color: gray;
 	font-size: 12px;
 }
        </style>
        
            </head> 

<body>

<!-- ##################
menu
################## -->
<? include ("widget_main_menu.php") ?>
<!-- ##################
end menu
################## -->







<br />
<div class="p1">
<b>PHP Developer, Ecommerce Manager</b></div>
<div class="p2">
You'll help Merrow develop our core marketing assets (merrow.com, bostonthread.com, hydestore.com, merrowing.com etc...), manage and develop our CMS (built with codeigniter) develop adwords and manage SEO. We're a PHP/MySQL shop. Bring a portfolio of code you've written. Of course, you must also love sewing machines.</div>
<div class="p3">
Essential Duties</div>
<div class="p2">
You'll work with our marketing team to distribute content about our products and develop the ecommerce assets.</div>
<div class="p3">
Required Skills</div>
<ul class="ul1">
<li class="li4">Passion for always learning new things and expanding on new ideas</li>
<li class="li4">Able to work independently, with minimal supervision</li>
<li class="li4">Linux, Apache, MySQL, and PHP environment</li>
<li class="li4">JavaScript, XML, and AJAX</li>
</ul>
<div class="p2">
<b>Location: Fall River, MA</b></div>
        
        
                       
           
        
       
 
        <div id="everything"> 
             
 
            
            <div id="main" class="main"> 
 
                                    <div id="toolbar"> 
            
        </div> 
                
                <script type="text/javascript"> 
    function spam(user, domain) {
        locationstring = 'mailto:' + user + '@' + domain;
        window.location = locationstring;
    }
</script> 

 
<div class="columns"> 
    <div class="column" id="columnA"> 
 
        <h3>Open positions</h3> 
 
        <ul class="open_positions"> 
            <li class="disclaimer">*All positions require that you can speak and write fluent english and be able to commute to Fall River, MA.</li> 
            <li><a href="#gsm">General Sales Manager</a></li> 
            <li><a href="#application_developer">Channel Sales Manager</a></li> 
            <li><a href="#system_administrator">Ecommerce PHP Guru</a></li> 
            <li><a href="#marketing_communications_manager">Marketing Communications Intern</a></li> 
           
        </ul> 
 
        <a name="gsm"></a> 
        <h2>General Sales Manager</h2> 
        <p class="tip_box">This is a position on the Sales team, responsible for developing and maintaining all of Merrow's sales channels.</p> 
 
        <h5>Responsibilities</h5> 
        <ul class="list"> 
            <li>Monitor overall site performance, stability, and health, including being on call for fun stuff like alert handling and disaster recovery</li> 
            <li>Improve our LAMP, storage and cloud infrastructures</li> 
            <li>Develop internal application services (Beanstalk, Thrift, Solr, stats)</li> 
            <li>Work on profiling and optimizing the lowest layers of application code</li> 
            <li>Maintain and improve our internal package management system</li> 
            <li>Maintain and improve the development environment and release system</li> 
        </ul> 
 
        <h5>Skills</h5> 
        <ul> 
            <li>5+ years experience working on a high volume website</li> 
            <li>Unrivaled proficiency in Linux server administration and LAMP (+ memcached) administration and monitoring</li> 
            <li>A deep and abiding love for building scalable, high performance systems</li> 
            <li>Fluent in PHP</li> 
            <li>Experience with C and scripting using the appropriate language</li> 
            <li>Experience with multi-homed websites a major plus</li> 
            <li>Experience with EC2/S3 a major plus</li> 
            <li>Experience with Puppet or Debian package management a plus</li> 
            <li>Experience with Beanstalk or a general object queue a plus</li> 
            <li>Experience with Thrift or a high-performance notification system a plus</li> 
        </ul> 
 
        <p class="apply"><a href="javascript:spam('jobs', 'vimeo.com?subject=Backend Developer position')">Apply for this position</a></p> 
 
        <a name="application_developer"></a> 
        <h2>Application Developer</h2> 
        <p class="tip_box">This is a position on the Development team, responsible for developing and maintaing the front-end of Vimeo.com</p> 
 
        <h5>Responsibilities</h5> 
        <ul> 
            <li>Implement major new features and feature improvements</li> 
            <li>Identify and solve compatibility issues</li> 
            <li>Work closely with the Product and Design/UX team to steadily improve user experience and the feature set</li> 
            <li>Work closely with the Backend team to profile and optimize code for performance</li> 
        </ul> 
 
        <h5>Skills</h5> 
        <ul> 
            <li>2+ years experience working on a high volume website</li> 
            <li>Expertise in PHP5, MySQL and memcache required</li> 
            <li>Expertise with MVC methodologies required</li> 
            <li>Expertise with HTML/CSS experience required</li> 
            <li>Expertise with Javascript required, along with experience using a JS framework (we use MooTools)</li> 
            <li>Experience with ActiveRecord-style ORM required</li> 
            <li>Experience with SPL a major plus</li> 
            <li>Experience with Solr/Lucene a major plus</li> 
            <li>Comfortable working with in a CLI environment</li> 
            <li>A history of working on modern web applications</li> 
            <li>An unhealthy obsession with building efficient, clean, and modular code and data structures</li> 
            <li>An understanding of the issues surrounding large-volume websites and scalability</li> 
            <li>An ability to work seamlessly between client-facing and backend code</li> 
            <li>Ingenuity to leverage all the tools at your disposal to eke out every last bit of performance and build the best user experience possible</li> 
            <li>A history of working in a cache-heavy environment and an innate understanding of issues surrounding cache</li> 
            <li>A desire to be personally responsible for production-level code (and the willingness to answer 3am phone calls to fix your mistakes)</li> 
            <li>A preoccupation with staying on top of industry trends and technologies</li> 
        </ul> 
 
        <p class="apply"><a href="javascript:spam('jobs', 'vimeo.com?subject=Application Developer position')">Apply for this position</a></p> 
 
        <a name="system_administrator"></a> 
        <h2>System Administrator</h2> 
        <p class="tip_box">This is a position on the Development team, responsible for maintaining and expanding Vimeo's backend infrastructure.</p> 
 
        <h5>Responsibilities</h5> 
        <ul class="list"> 
            <li>Monitor overall site performance, stability, and health, including being on call for fun stuff like alert handling and disaster recovery</li> 
            <li>Improve our LAMP, storage and cloud infrastructures</li> 
            <li>Working with developers, maintain and improve testing and staging environmentments</li> 
            <li>Deploy, maintain and troubleshoot problems with internal application services (Beanstalk, Thrift, Solr, stats)</li> 
            <li>Maintain and improve our internal package and configuration management systems</li> 
            <li>Maintain and improve the release system</li> 
        </ul> 
 
        <h5>Skills</h5> 
        <ul> 
            <li>5+ years experience working on a high volume website</li> 
            <li>Unrivaled proficiency in Linux server administration, including network tuning and kernel optimizations</li> 
            <li>A deep and abiding love for building scalable, high performance systems</li> 
            <li>Expertise with configuration management software and custom Linux packages required</li> 
            <li>Expertise with Apache, nginx and/or lighttpd for a variety of traffic types required</li> 
            <li>Experience with C and expertise scripting using the appropriate language required</li> 
            <li>Experience with multi-homed websites a major plus</li> 
            <li>Experience with virtualization (EC2, xen) a major plus</li> 
            <li>Experience with large memcache clusters a plus</li> 
            <li>Experience with SOLR or Lucene a plus</li> 
            <li>Experience with PHP5+ a plus</li> 
        </ul> 
 
        <p class="apply"><a href="javascript:spam('jobs', 'vimeo.com?subject=System Administrator position')">Apply for this position</a></p> 
 
        <a name="marketing_communications_manager"></a> 
        <h2>Marketing Communications Manager</h2> 
        <p class="tip_box">Vimeo is looking for a Marketing Communications Manager to support its Marketing Communications Department. The successful candidate will help Vimeo with its, trade show and event production, advertising and marketing materials development. This is an exciting year for Vimeo.  The brand continues to grow rapidly and the site has several exciting events, shows, and new site features coming up &ndash; and the Marketing Communications Manager can be right in the thick if it all. This position reports into the Marketing Communications Director.</p> 
 
        <h5>Responsibilities</h5> 
        <ul class="list"> 
            <li><strong>Tradeshows and Events</strong> 
                <ul> 
                    <li>Planning and budgeting for Vimeo's participation in 3rd party events including; tradeshows; film festivals; industry events, etc.
                    <li>Facilitate with shows, exhibit companies, and Vimeo staff to manage the company's presence at live events</li> 
                    <li>Work closely with programs that we sponsor to ensure that we maximize our brand presence (e.g., logo placement, branding, etc.)</li> 
 
                    <li>Support Vimeo specific events, including the Vimeo Festival + Awards</li> 
                </ul> 
            </li> 
            <li><strong>Advertising and Branding</strong> 
                <ul> 
                    <li>Work closely with the Marketing Communications Director and the design team to develop and branded Vimeo advertising (both online, print and collateral)</li> 
                    <li>Measure the effectiveness of each ad placement;</li> 
                    <li>Test different creative approaches against brand specific goals</li> 
                </ul> 
            </li> 
            <li><strong>Surveys</strong>: Working closely with the Marketing Communications Director and the product team to develop, facilitate and analyze site/user surveys</li> 
            <li><strong>Competitive Analysis</strong>:  Collect and analyze competitive data across the online video sharing space; including features, messaging and positions; Update sales, product and PR teams</li> 
            <li><strong>Co-Marketing</strong>: Execute against all of our co-marketing commitments.</li> 
            <li><strong>Premium Items</strong>: Work with our vendors on the purchase and inventory management of Vimeo-branded POS</li> 
            <li><strong>Accolades</strong>: Maintain a database of accolades from press, site members, celebs and awards</li> 
        </ul> 
 
        <h5>Skills</h5> 
        <ul> 
            <li>5 years experience between brand marketing/advertising and/or Tradeshow/Event Planning</li> 
            <li>Superior organization and Project Management skills</li> 
            <li>BA, Marketing or Communications preferred</li> 
            <li>Knowledge and usage of Vimeo a plus</li> 
        </ul> 
 
        <p class="apply"><a href="javascript:spam('jobs', 'vimeo.com?subject=Marketing Communications Manager')">Apply for this position</a></p> 
 
        <a name="video_editor"></a> 
        <h2>Video Editor</h2> 
        <p class="tip_box">This is a position on the Community team, responsible for editing videos that we produce, including the creation of motion graphics elements. You will probably be lending a hand in the production of the videos as well.</p> 
 
        <h5>Responsibilities</h5> 
        <ul class="list"> 
            <li>Organize footage captured by the team</li> 
            <li>Create polished motion graphic elements</li> 
            <li>Edit pieces for various projects geared towards a web audience</li> 
            <li>Handle all aspects of the edit, including sound, color, and effects</li> 
            <li>Deliver final products within short deadlines</li> 
            <li>Assist with pre-production and production when needed</li> 
        </ul> 
 
        <h5>Skills</h5> 
        <ul> 
            <li>3+ years professional editing experience</li> 
            <li>2+ years motion graphics experience</li> 
            <li>A sharp sense of humor in your work</li> 
            <li>The ability to work on multiple simultaneous projects</li> 
            <li>Rapid adoption of new software</li> 
            <li>Experience with a DSLR workflow</li> 
            <li>Experience with dual system sound editing</li> 
            <li>Ability to make fake blood is a bonus</li> 
        </ul> 
 
        <p class="apply"><a href="javascript:spam('jobs', 'vimeo.com?subject=Video Editor')">Apply for this position</a></p> 
 
    </div> 
 
    <div class="column" id="columnB"> 
 
        
        <div class="nippleBox optimusBlue learn_more"> 
	<div class="bar"> 
		<h4>Learn more about Merrow</h4>	</div> 
	<div class="nipple"></div> 
	<div class="content"> 
		<ul> 
                <li> 
                    <a href="/about"><strong>About Merrow</strong></a> 
                </li> 
                <li> 
                    <a href="/press"><strong>Press releases &amp; buzz</strong></a> 
                </li> 
                <li> 
                    <a href="/advertisers"><strong>Advertisers</strong></a> 
                </li> 
                <li> 
                    <strong>Work at Merrow</strong> 
                </li> 
            </ul>	</div> 
</div> 
        <div class="nippleBox manateeCloud instruction"> 
	<div class="bar"> 
		<h4>What's Merrow?</h4>	</div> 
	<div class="nipple"></div> 
	<div class="content"> 
		Merrow is a small company <a href='http://www.iacbuilding.com' target='blank'>located in Fall River, MA</a>. We run the web's most creative and exciting Sewing Machine Company and we're only just getting started. Our developers are nasty and our team is one of a kind. We hope to take over the world someday (in a good way of course) and we need your help to do just that. We are only looking for the most talented, fun, and creative people to join our team, so if you fit that bill, then apply today. We're looking forward to hearing from you.	</div> 
</div> 
        
        <div class="nippleBox organicFritos photos"> 
	<div class="bar"> 
		<h4>Merrow's about</h4>	</div> 
	<div class="nipple"></div> 
	<div class="content"> 
		<img src="http://farm5.static.flickr.com/4148/5060516566_f324a33b9d.jpg" width="300" /> 
            <img src="http://farm3.static.flickr.com/2570/3951368946_3d58c654f8.jpg" width="300" /> 
            <img src="http://farm4.static.flickr.com/3607/3674741145_3a1ee8cc22.jpg" width="300" /> 
            <img src="http://farm4.static.flickr.com/3446/3929591800_a445206bea.jpg" width="300" /> 
            <img src="http://farm3.static.flickr.com/2796/4134868566_1612888f06.jpg" width="300" /> 
            <img src="http://farm3.static.flickr.com/2734/4112547156_01b2a9e46f.jpg" width="300" />	</div> 
</div> 
    </div> 
</div> 
                <div class="clear"></div> 
 
                
                 
            </div> 
 
        </div> 
 

        
            </body> 
</html>
