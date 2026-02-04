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



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>the Sewing Needle Configuration tool from Merrow</title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="Merrow: the worlds best sewing machines.">
	<meta name="Keywords" content="merrow,charlie merrow,merrow machines,sewing machines,sergers,merrow stitch,merrow stitching">
	<meta name="viewport" content="width=1024">
	<meta name='robots' content='index,follow' />





	<link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
        <link rel="stylesheet" href="http://css.imerrow.com/css_major/needles.css" type="text/css" charset="utf-8">

        <link rel="exhibit/data" 
       type="application/jsonp"
       href="http://spreadsheets.google.com/feeds/list/o08268501926021654611.6003773096830585784/od6/public/basic?alt=json-in-script"
       ex:converter="googleSpreadsheets" />
      
<link rel="stylesheet" href="http://css.imerrow.com/css_major/thickbox.css" type="text/css" media="screen" />


<script src="http://static.simile.mit.edu/exhibit/api-2.0/exhibit-api.js" type="text/javascript"></script>
     
     
 <style>
 
 div.exhibit-toolboxWidget-popup.screen {
	visibility: hidden;
}

     
        
        #content {
	background: white;
	width: 980px;
}
        
        #top-panels {
            padding:        0.5em 0.5in;
            border-top:     1px solid #BCB79E;
            border-bottom:  1px solid #BCB79E;
            background:     #FBF4D3;
        }
        
        .exhibit-tileView-body { list-style: none; }
        .exhibit-collectionView-group-count { display: none; }
        
        table.nobelist {
            border:     1px solid #ddd;
            padding:    0.5em;
        }
        div.name {
            font-weight: bold;
            font-size:   120%;
        }
        .relationship {
            color:  #888;
        }
        
        div.nobelist-thumbnail {
            float:      left;
            width:      200px;
            height:     10em;
            border:     1px solid #BCB79E;
            background: #F0FFF0;
            padding:    1em;
            margin:     0.5em;
            text-align: center;
        }
        div.nobelist-timeline-lens {
            padding:    1em;
            text-align: center;
        }
	   .exhibit-thumbnailView-itemContainer{
   clear:right;
   }
   .exhibit-thumbnailView-itemContainer-IE{
   width:auto !important;
   }
    </style>

<script type="text/javascript">
        function deceaseRowStyler(itemID, database, tr, rowIndex) {
            var deceased = database.getObject(itemID, "deceased");
            if (deceased == "yes") {
                tr.style.backgroundColor = "#f88";
            }
        }
    </script>
    
    
	
<script type="text/javascript" src="http://merrow.com/cephei/scripts/jquery.js"></script>
<script type="text/javascript" src="http://merrow.com/cephei/scripts/thickbox.js"></script>

<script type="text/javascript">
  function showThickbox(a){
    var t = a.title || a.name || null;
    var g = a.rel || false;
    tb_show(t,a.href,g);
    a.blur();
    return false;
  };
</script>
	
</head>


<!-- ##################  
	 menu
	 ################## -->	
<? include ("widget_main_menu.php"); ?> 

</div>


<!-- ##################  
	 div classes for page do not edit
	 ################## -->	

<div id="container">
		<div id="main">
			<div id="content" class="grid3cola">
				
 <!-- ################## 
	 ################## -->	        
              
<!-- ##################  
	 left column widgets
	 ################## -->					
                
				
			
            	
                    
					
				
                
              
 <!-- ################## 
	 ################## -->	
     					
                <div class="column">
<!-- ##################  
	 center column widgets
	 ################## -->	 
					
                    
                    <? include ("widget_needles.php") ?>
					
             		
				
  
             
 <!-- ################## 
	 ################## -->	
     			</div> <!-- /column -->				
                <div class="column last sidebar">
  <!-- ##################  
	 right column widgets
	 ################## -->	 	
    			
				
					
				
  <!-- ################## 
	 ################## -->	               
                </div> <!-- /colum.last -->
    
  <!-- ##################  
	 FOOTER
	 ################## -->	
<div class="footer contain">
	<hr />

	
			
	<p>Copyright &copy; 2008 Merrow Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners.</p>
	
</div><!-- }}} footer -->
			</div> <!-- /content -->
		</div> <!-- /container -->

	</div> <!-- /main -->
    
       <? include ('widget_analytics.php'); ?>
	</body>
    </html>