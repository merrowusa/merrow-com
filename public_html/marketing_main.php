<? $page_id = 'index';?>
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

<script type="text/javascript" src="marketing_site_marketing_site_assets/assets/marketing_site_assets/assets/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="marketing_site_marketing_site_assets/assets/marketing_site_assets/assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="marketing_site_marketing_site_assets/assets/marketing_site_assets/assets/plugins/hover-dropdown.min.js"></script> 
<script type="text/javascript" src="marketing_site_marketing_site_assets/assets/marketing_site_assets/assets/plugins/back-to-top.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="marketing_site_marketing_site_assets/assets/marketing_site_assets/assets/js/app.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<!-- ##################
DOCUMENT LOAD
################## -->
<body id="daypass">
<a name="top"></a>
		<div class="container_16">
<!-- NEW MENU -->
<? include ("header_test.php"); ?>
<!--END MENU -->
<div class="background_gradient">
	<div class="center_bloc">
		<div class="body_doc">
	<div class="man" id="fat"></div>
<div class="clear"></div>
<div class="bridge_container">

<!--MAIN PAGE -->
<? if ($_GET['branded']=='complete') {?>
<script>
 $(document).ready(function(){
$("div.main_content").hide();
$("div.branded_content").show();

return false;
});
</script>
<div class="branded_content">
<div class="headline"><h1>THE BRANDED STITCH&reg;</h1><h2>A Revolutionary Industrial Idea</h2></div>
<div class="byline"><h2>Stitching is a mark of Quality</h2><h2>Merrow is Premium Stitching</h2><h2>You can now communicate this to your customers</h2>
<div class="center_text">The Merrow Branded Stitch Tag lets you make more money by advertising to your customer that the product they are buying uses premium stitching. Contact us now to learn how The Merrow Branded Stitch Tag can help promote your product's value</div>
<div class="form_branded"><h3>ENTER YOUR EMAIL ADDRESS TO LEARN MORE</h3></div>
<form action="widget_sub_datamover.php" method="post">
<input name="party_id" type="hidden" value="0007679" />
<input name="source" type="hidden" value="nbp" />
<input name="captcha" type="hidden" value="no" />
<div class="center_box">
<input id="dixie" type="text_box" name="email" name="bronx_box" value="" />
</div>
<div class="center_box">
<div class="thank_you"><h2>THANK YOU!</h2><p class="thanks">We'll be in touch shortly!</p></div>
</div>
</form>
<? if ($_GET['branded']=='complete') {?>
<div class="return_1"><a href="/">Return to Machines</a></div>
<? } else { ?>
<div class="return">Return to Machines</div>
<? } ?>
</div>

</div>
<? } else { }?>
<script>
 $(document).ready(function(){
$("div.main_content").show();
$("div.branded_content").hide();

return false;
});
</script>


<!--=== Content Part ===-->
<div class="container"> 	
    <div class="row"> 
        <div class="col-sm-6">
            <div class="view view-tenth">
                <img class="img-responsive" src="marketing_site_assets/assets/img/main/1.jpg" alt="" />
                <div class="mask">
                    <h2>Portfolio Item</h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    <a href="portfolio_item.html" class="info">Read More</a>
                </div>                
            </div>
        </div>
        <div class="col-sm-6">
            <div class="view view-tenth">
                <img class="img-responsive" src="marketing_site_assets/assets/img/main/2.jpg" alt="" />
                <div class="mask">
                    <h2>Portfolio Item</h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    <a href="portfolio_item.html" class="info">Read More</a>
                </div>                
            </div>
        </div>
    </div><!--/row-->
<!--END MAIN PAGE -->

<div class="clear"></div>
</div>
</div>
</div></div></div>

<!-- ##################
FOOTER LOAD
################## -->
<? include ('widget_feet.php'); ?>
<? include ('widget_footer_js.php'); ?>

		
	</body>
</html>