<?php



// Define your username and password

$username = "me";

$password = "too";



if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) {



?>



<h1>Login</h1>



<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <p><label for="txtUsername">Username:</label>

    <br /><input type="text" title="Enter your Username" name="txtUsername" /></p>



    <p><label for="txtpassword">Password:</label>

    <br /><input type="password" title="Enter your password" name="txtPassword" /></p>



    <p><input type="submit" name="Submit" value="Login" /></p>



</form>



<?php



}

else {



?>



<p>This is the protected page. Your private content goes here.</p>



<?php



}



?> 


<?


$IPaddress=$_SERVER['REMOTE_ADDR'];
$two_letter_country_code=iptocountry($IPaddress);

include("ip_files/countries.php");
$three_letter_country_code=$countries[ $two_letter_country_code][0];
$country_name=$countries[$two_letter_country_code][1];

	

function iptocountry($ip) {   
    $numbers = preg_split( "/\./", $ip);   
    include("ip_files/".$numbers[0].".php");
    $code=($numbers[0] * 16777216) + ($numbers[1] * 65536) + ($numbers[2] * 256) + ($numbers[3]);   
    foreach($ranges as $key => $value){
        if($key<=$code){
            if($ranges[$key][0]>=$code){$two_letter_country_code=$ranges[$key][1];break;}
            }
    }
    if ($two_letter_country_code==""){$two_letter_country_code="unkown";}
    return $two_letter_country_code;
}

?>


<?  

 if ($wammo!= NULL) { $val = $wammo;}
elseif ($two_letter_country_code=='TR') {$val = '11224'; }
elseif ($two_letter_country_code=='AR') {$val = '10327'; }
elseif ($two_letter_country_code=='AU') {$val = '10936'; }
elseif ($two_letter_country_code=='BE') {$val = '10639'; }
elseif ($two_letter_country_code=='BR') {$val = '10978'; }
elseif ($two_letter_country_code=='CA') {$val = '10996'; }
elseif ($two_letter_country_code=='CO') {$val = '10223'; }
elseif ($two_letter_country_code=='DK') {$val = '10643'; }
elseif ($two_letter_country_code=='EG') {$val = '10529'; }
elseif ($two_letter_country_code=='EE') {$val = '10625'; }
elseif ($two_letter_country_code=='FR') {$val = '10177'; }
elseif ($two_letter_country_code=='DE') {$val = '11034'; }
elseif ($two_letter_country_code=='GR') {$val = '10139'; }
elseif ($two_letter_country_code=='HR') {$val = '12187'; }
elseif ($two_letter_country_code=='HK') {$val = '11318'; }
elseif ($two_letter_country_code=='IS') {$val = '10901'; }
elseif ($two_letter_country_code=='IN') {$val = '10472'; }
elseif ($two_letter_country_code=='IL') {$val = '11031'; }
elseif ($two_letter_country_code=='JP') {$val = '10292'; }
elseif ($two_letter_country_code=='KR') {$val = '10455'; }
elseif ($two_letter_country_code=='MX') {$val = '10922'; }
elseif ($two_letter_country_code=='NL') {$val = '10312'; }
elseif ($two_letter_country_code=='NO') {$val = '10049'; }
elseif ($two_letter_country_code=='PK') {$val = '10058'; }
elseif ($two_letter_country_code=='PY') {$val = '12214'; }
elseif ($two_letter_country_code=='PE') {$val = '12808'; }
elseif ($two_letter_country_code=='PL') {$val = '10607'; }
elseif ($two_letter_country_code=='PT') {$val = '10379'; }
elseif ($two_letter_country_code=='RU') {$val = '10540'; }
elseif ($two_letter_country_code=='ZA') {$val = '10028'; }
elseif ($two_letter_country_code=='ES') {$val = '10943'; }
elseif ($two_letter_country_code=='CH') {$val = '10419'; }
elseif ($two_letter_country_code=='CN') {$val = '10388'; }
elseif ($two_letter_country_code=='AE') {$val = '12856'; }
elseif ($two_letter_country_code=='UK') {$val = '10725'; }
elseif ($two_letter_country_code=='US') {$val = '767911'; }

else {$val = '767911'; }

 ?>
 
 <? if ($IPaddress='65.96.199.154') { ; ?> 
 
 <?php

// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());

?>
 
 <? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT leftmenu_subheadlink1,leftmenu_subhead1,leftmenu_subhead2,leftmenu_subhead3,leftmenu_subhead4,leftmenu_subheadlink2,leftmenu_subheadlink3,leftmenu_subheadlink4 FROM agents WHERE party_id='$val'")
or die(mysql_error());
?>


<?
// then define juju as the result array
 $agents = mysql_fetch_array($result); ?>
 



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Merrow</title>
	
	<meta name="Author" content="Merrow, Inc.">
	<meta name="Category" content="products,sewingmachines">
	<meta name="Description" content="the worlds best sewing machines.">

	<meta name="Keywords" content="merrow,charlie,merrow machines">
	<meta name="viewport" content="width=1024">
    
     


	

     
<? 

$wammo = $_GET['party_id']; 
$noire = $_GET['stitch']; 
$moneymaker = $_GET['moneymaker'];



?>
<script type="text/javascript">
  function showThickbox(a){
    var t = a.title || a.name || null;
    var g = a.rel || false;
    tb_show(t,a.href,g);
    a.blur();
    return false;
  };
</script>

<? if ($moneymaker == 'shake') { ?>
    
      <link rel="exhibit/data" 
       type="application/jsonp"
       href="http://spreadsheets.google.com/feeds/list/o16853670408380817175.6328162703440944680/od4/public/basic?alt=json-in-script"
       ex:converter="googleSpreadsheets" />
    
    
     
    
    <? } elseif ($drhorrible =='finishing') {?> 
    
       <link rel="exhibit/data" 
       type="application/jsonp"
       href="http://spreadsheets.google.com/feeds/list/o08268501926021654611.7566200901081157958/od6/public/basic?alt=json-in-script"
       ex:converter="googleSpreadsheets" />
        
           <? } elseif ($drhorrible =='seaming') {?>
        
        
           <link rel="exhibit/data" 
       type="application/jsonp"
       href="http://spreadsheets.google.com/feeds/list/o08268501926021654611.7566200901081157958/od6/public/basic?alt=json-in-script"
       ex:converter="googleSpreadsheets" />
             
              
            
               <? } else { ?>
               
        <link rel="exhibit/data" 
       type="application/jsonp"
       href="http://spreadsheets.google.com/feeds/list/o08268501926021654611.7566200901081157958/od6/public/basic?alt=json-in-script"
       ex:converter="googleSpreadsheets" />
                 
                    
                 
                 
                 <? } ?> 




<script type="text/javascript" src="http://merrow.com/cephei/scripts/jquery.js"></script>
<script type="text/javascript" src="http://merrow.com/cephei/scripts/thickbox.js"></script>
     <script src="http://static.simile.mit.edu/exhibit/api-2.0/exhibit-api.js" type="text/javascript"></script>
    

<link rel="stylesheet" href="http://css.imerrow.com/thickbox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="http://css.imerrow.com/frontpage/base.css" type="text/css" charset="utf-8">
	<!--<link rel="stylesheet" href="http://css.imerrow.com/nav.css" type="text/css" charset="utf-8"> -->
	<link rel="stylesheet" href="http://css.imerrow.com/frontpage/index.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://css.imerrow.com/frontpage/whole.css" type="text/css" charset="utf-8">
   
  
	
	
 

           
  
           
   <style>

div.exhibit-collectionView-header {
	background-color: silver;
	width: 515px;
	background-image: url(http://images.imerrow.com/images/fp/imgHdrSearchBg1.png);
	height: 40px;
}
table.exhibit-tabularView-body {
    width: 100%;
	position: relative;
	top: 20px;
}


 div#buythis.mylilbutton {
	top: 30px;
	position: relative;
	left: 40px;
}

div.learn {
	position: relative;
	left: 405px;
	bottom: 55px;
}

div.buttons {
	position: relative;
	top: 56px;
}

span.exhibit-collectionSummaryWidget-results {
	position: relative;
	top: 10px;
	text-align: left;
	left: 5px;
	padding-right: 95px;
}
#mamam {
	right: 45px;
	position: relative;
}
       body {
           margin: 1in;
       }
      
       div.name {
           font-weight: bold;
           font-size:   30%;
           width: 200px;
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
	visibility: hidden;
}

div.tech {
	position: relative;
	display: inline;
	left: 5px;
}

img.exhibit-toolboxWidget-button {
	visibility: hidden;
}

div.exhibit-toolboxWidget-popup.screen {
	visibility: hidden;
}
table.nobelist {
	width: 500px;
	 border:     1px solid #ddd;
     padding:    0.5em;
}


div.exhibit-viewPanel-viewSelection {
   position: relative;
	width: 200px;
	right: 25px;
	
}
div.mainurl {
	margin-right: 10px;
	border-color: #ccc;
	border-style: solid;
}

td.nobelist {
	width: 400px;
}

div.lilurl {
	border: 1px solid #ccc;
	position: relative;
	border-bottom-style: solid;
	border-right-style: solid;
	bottom: 10px;
	float: left;
	
}

 .discipline {
	position: relative;
	font-weight: bold;
	color: black;
	width: 300px;
}

div.charlie {
	width: 300px;
	height: 100px;
	position: relative;
	float: left;
}

div.weebits {
	width: 250px;
	position: relative;
}
div.exhibit-browsePanel {
}

div.exhibit-browsePanel-notConfigureMessage {
    border:     1px solid #604800;
    padding:    1em;
    background: #FFFFE0;
    text-align: center;
}

div.exhibit-browsePanel-logoContainer {
    text-align: center;
    margin:     1em;
    clear:      both;
}

   </style>

 
 
</head>


<!-- ************* DO NOT ALTER ANYTHING BELOW THIS LINE ! ************** --->

<!-- ##################  
	// menu
	// ################## -->	

		<? if ($val == '767911') { include ("widget_main_menu.php"); }
else { include("widget_int_main_menu"); } ?>



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
					
<!-- ##################  
	// decorative stitch content
	// ################## -->	
    

   <!-- ##################  
	// decorative stitch content
	// ################## -->	
    
         
        
           <?  if ($moneymaker =='shake') {?>
        
        
              <td> <div class="h2" id="seachheader">Search by Customer </div> 
          <div class="searchbar" id="bar">
            <tr> <div ex:role="facet" 
   ex:facetClass="TextSearch">
              </div>
            </tr>
          </div>
          </td>
         
         
       <div class="resultBox"><div class="resultboxE"><div class="resultboxW"></div></div></div>          

 
 <table width="760">
       <tr valign="top">
           <td ex:role="viewPanel">
               <table ex:role="lens" class="nobelist" >
                   <tr>
                       <td><img ex:src-content=".name" /></td>
                       <td>
                           <div ex:content=".name" class="name"></div>
                           <div><span ex:content=".name" class="discipline"></span>
                             <span ex:content=".name" class="year"></span> 
                           </div>
                           <div ex:if-exists=".name" class="co-winners">Needle Type: 
                               <span ex:content=".name"></span>
                           </div>
                         <div <img ex:src-content=".name" /> <div>
                           <div ex:content=".name" class="relationship"></div>
                            <div ex:content=".name" class="relationship"></div>
                          
                        
                       </td>
                   </tr>
               </table>
      
               
               
    
                            
                            <table ex:role="lens" class="nobelist" style="display: none;">
                             
                              <div role="view" 
                            ex:viewClass="Thumbnail"
                            ex:showAll="false"
                           ex:abbreviatedCount="6" >
                           
                                <tr><td>
                                
              <div class="mainurl" id="mainimage"><a class="thickbox" 
      ex:href-subcontent="https://65.96.199.153:8443/crmsfa/control/viewAccount?partyId={{.label}}"
      
     <img ex:src-subcontent="http://images.imerrow.com/images/ot.jpg" alt="main square image"/></a></div>                    
                                   
           <!--  <div  <a ex:href-subcontent="http://images.imerrow.com/images/ot.jpg" >  <img ex:src-content="https://merrowsaurus.local:8443/crmsfa/control/viewAccount?partyId={{.label}}" /> </a>  </div>     -->                    
                                   
     
    <a class="" 
     ex:href-subcontent="https://65.96.199.153:8443/crmsfa/control/newOrder?partyId={{.label}}"
     
     
      <div class="learn" id="link">  <img src="/nebula/images/order.jpg" alt="ko"> </a></td> </div>  
                                    
                                    
                                    
                                                              </div></td>
                                   <td valign="bottom" class="nobelist">  <div class="weebits"> 
                                      <div style="position: relative"><div class="itemThumbnail-blocker" id="nanana"></div>
                                      </div>
                                        
     
     
     <div class="charlie">
                                     <div ex:if-exists=".name" class="co-winners">Customer Name: 
                               <span ex:content=".name"></span></div>
                                     <div ex:if-exists=".state" class="discipline">Address: 
                               <span ex:content=".city"></span></div> <div ex:content=".street"></div>
                               <div ex:if-exists=".country" class="year">Country: 
                               <span ex:content=".country"></span></div>
                                 <div ex:if-exists=".man_name" class="year">Name: 
                               <span ex:content=".man_name"></span></div>
                                  <div ex:if-exists=".email" class="year">Email: 
                               <span ex:content=".email"></span></div>
                                  </td> 
                                
                              <td >

                                </tr>
                               
                          
                            </table>
 </div>

             		 
                    
                     <div ex:role="exhibit-view"
                   ex:viewClass="Exhibit.TabularView"
                   ex:columns=".name,.state,.country,.city,.email"
                   ex:columnLabels="Company Name, State, Country, City, Email"
                   ex:columnFormats="list, list, list, list, list, list"
                   ex:sortColumn="3"
                   ex:sortAscending="false">
               </div>
            
              
            </td>
         <td width="25%">
            
            <div class="nanan" id="mamam">
               <div ex:role="facet" ex:expression=".name" ex:height="300px" ex:facetLabel=" Company Name"></div>
                   <br><span> <h2> you can also sort by: </h2> </span><br>
               <div ex:role="facet" ex:expression=".state" ex:showMissing="false" ex:collapsed="false" ex:facetLabel="State"></div>
               <div ex:role="facet" ex:expression=".country" ex:showMissing="false" ex:collapsed="false"ex:facetLabel="Country"></div>
               <div ex:role="facet" ex:expression=".city" ex:showMissing="false"  ex:collapsed="false"ex:facetLabel="City"></div>
          
           </div>

           </td>
       </tr>
             
              <!-- ##################  
	// default stitch content
	// ################## -->	
            
               <? } else { ?>
               
                 
                 <? } ?> 
      
     <? } else { ?>
     
     no soup for you....
     
     <? } ?>
   
				
  
             
 <!-- ################## 
//	 ################## -->	
     			</div> <!-- /column -->				
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
<div class="footer contain">
	<hr />

	
			
	<p>Copyright &copy; 2008 Merrow Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners.</p>
	
</div><!-- }}} footer -->
			</div> <!-- /content -->
		</div> <!-- /container -->

	</div> <!-- /main -->