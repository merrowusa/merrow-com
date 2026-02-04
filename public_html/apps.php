


<?php include ("ip_lang_database.php") ?>





<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Merrow, designers of the Stitch</title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="the worlds best sewing machines.">

	<meta name="Keywords" content="merrow,charlie,merrow machines">
	<meta name="viewport" content="width=1024">





<? 

$wammo = $_GET['party_id']; 
$noire = $_GET['stitch']; 
$drhorrible = $_GET['app'];

?>







	<link rel="stylesheet" href="http://css.imerrow.com/css_major/base_vimeo.css" type="text/css" charset="utf-8">
	<!--<link rel="stylesheet" href="http://css.imerrow.com/nav.css" type="text/css" charset="utf-8"> -->
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/ac_quicktime.css"  type="text/css" charset="utf-8">
	<link rel="stylesheet" href="http://css.imerrow.com/css_major/index_vimeo.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/css_major/whole_vimeo.css" type="text/css" charset="utf-8">
   
  
	<style type="text/css" media="all"> @import "http://merrowservices.s3.amazonaws.com/css/services_cleanup.css";
	</style>
	
  
           
   <style>
       body {
           margin: 1in;
       }
       table.nobelist {
           border:     1px solid #ddd;
           padding:    0.5em;
       }
       div.name {
           font-weight: bold;
           font-size:   30%;
       }
       .discipline {
       }
       .year {
           font-style:  italic;
		   color:  #888;
       }
       .relationship {
           color:  #888;
       }
       .co-winners {
       }
	 
}
div.exhibit-viewPanel-viewSelection {
    text-align: center;
	margin-top: 10px;
	margin-left: 10px;
	top: 15px;
	padding-bottom: 10px;
}
div.name {
	width: 200px;
}
#bar div div.exhibit-text-facet input {
	height: 30px;
	width: 300px;
	margin-top: 10px;
	position: relative;
	right: 140px;
		color: #297fb5;
	font-size: 20px;
	font-weight: bold;
	background-color: #f0f0f0;

}
div#seachheader.h2 {
	color: gray;
	font-size: 16px;
	text-align: left;
}
div.exhibit-collectionView-header-sortControls {
    text-align:     center;
	float: left;
	visibility: hidden;
}
table.nobelist {
	width: 500px;
}
#content div.column table tbody tr td div.exhibit-viewPanel.exhibit-ui-protection div.exhibit-viewPanel-viewContainer div.exhibit-collectionView-body div.exhibit-thumbnailView-group h1 {
	visibility: hidden;
	margin-top: 0;
	margin-bottom: 0;
	height: 1px;
}

div.exhibit-viewPanel-viewSelection {
    text-align: left;
	position: relative;
	width: 200px;
}

div#header.application {
	position: relative;
	left: 58px;
	margin-bottom: 20px;
	margin-top: 20px;
}

   </style>
 
</head>


<!-- ************* DO NOT ALTER ANYTHING BELOW THIS LINE ! ************** --->

<!-- ##################  
	// menu
	// ################## -->	

		<?  include ("widget_main_google_menu.php"); ?>



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
                
				
			
            		<? include ("widget_leftmainmenu.php") ?>
                    
					
				
                
              
 <!-- ################## 
	// ################## -->	
		  </div> <!-- /column.first -->				
              <div class="column">
<!-- ##################  
	// center column widgets
	// ################## -->	 
					
<div class="application" id="header">
  <table width="100%"> 
    
    <tr>
      <td> <div class="header"> <h1 align="center"> choose your application </h1></td></tr></div>
  </table>
</div>
<div class="app" id="images"><table width="750px" >
          <tr>
            <td>  <div align="center"><a href="http://merrow.com/merrow_stitching.php?app=decorative"><img name="tf" src="http://images.imerrow.com/images/act_6.jpg" width="200" height="200" alt="http://images.imerrow.com/images/act.jpg" /></a></div></td><td><div align="center"><a href="http://merrow.com/merrow_stitching.php?app=finishing"><img name="tf1" src="http://images.imerrow.com/images/act_5.jpg" width="200" height="200" alt="" /></a></div></td><td><div align="center"><a href="http://merrow.com/merrow_stitching.php?app=seaming"><img name="tf2" src="http://images.imerrow.com/images/act3.jpg" width="200" height="200" alt="" /></a></div></td>
          </tr>
          <tr>
          <td><div id="lilname" align="center"><span> <a href="http://merrow.com/merrow_stitching.php?app=decorative"><? echo $tongue['application_button_1']; ?></a></span> </div></td>
          <td> <div id="lilname" align="center"><span><a href="http://merrow.com/merrow_stitching.php?app=finishing"><? echo $tongue['application_button_2']; ?></a></span></div></td>
          <td> <div id="lilname" align="center"><span><a href="http://merrow.com/merrow_stitching.php?app=seaming"><? echo $tongue['application_button_3']; ?></a></span> </div></td>
        </table>	
      </div>
      
      <table width="700" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
  
 <!-- ################## 
//	 ################## -->	
     			</div> 
                <!-- /column -->				
                <div class="column last sidebar">
  <!-- ##################  
//	 right column widgets
//	 ################## -->	 	
     	</table>	
				
  <!-- ################## 
//	 ################## -->	               
  </div> <!-- /colum.last -->
    
  <!-- ##################  
//	 FOOTER
//	 ################## -->	
 <? include ('widget_footer.php'); ?>
			</div> <!-- /content -->
		</div> <!-- /container -->

	</div> <!-- /main -->
    
       <? include ('widget_analytics.php'); ?>
	</body>
    </html>