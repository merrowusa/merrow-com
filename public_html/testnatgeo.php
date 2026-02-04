<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Google Maps JavaScript APIadsdasaample</title>
    <script src="http://www.google.com/jsapi?key=ABQIAAAADizr7-TCJzgpJyUo_GBo-RS__Kf-IlIVJkgAx4Cxw4mlXnWodBQy-vGGOuTVBFC-o6N8AIw9NfBVvw"
      type="text/javascript"></script>
    

<link rel="stylesheet" href="http://css.imerrow.com/css_major/added_parts.css" type="text/css" charset="utf-8">
<link href="http://css.imerrow.com/css_major/menu.css" rel="stylesheet" type="text/css" />

   
 <?php 
// for example: thispage.php?word=abracadabra 

$val = $_GET['keyword']; 
$munt = $_GET['mediakeyword']; 
$section = $_GET['section'];


?>
<?


$munt = $_GET['mediakeyword']; 


// then we connect to the database as renter and access table: inventory 
#
mysql_connect("localhost", "merrowco_renter", "7679") or die(mysql_error());

#
mysql_select_db("merrowco_inventory") or die(mysql_error());


// Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT media_setnumber FROM asin WHERE media_keyword='$munt'")
or die(mysql_error());
?>


<?
// then define juju as the result array
 $juju = mysql_fetch_array($result); 
 $setnumber = $juju['media_setnumber'];


?>

<?php 
$rail = $_GET['rail'];
$parts = $_GET['parts'];



if ($rail=='yes') {

include('widget_sub_railmenu.php'); } elseif ($parts=='yes') {

include('widget_sub_partsmenu.php'); } elseif ($juju['show_what'] ='4') {

include('widget_sub_partsmenu.php'); } else {

include('widget_sub_machinemenu.php'); }

?>


<script type="text/javascript">
  google.load("maps", "2");
  google.load("search", "1");
</script>

 <script type="text/javascript">
   
   
 //<![CDATA[
    var map;
    var geocoder;

    function load() {
      if (GBrowserIsCompatible()) {
        geocoder = new GClientGeocoder();
        map = new GMap2(document.getElementById('map'));
        map.addControl(new GSmallMapControl());
        map.addControl(new GMapTypeControl());
        if (google.loader.ClientLocation &&
        google.loader.ClientLocation.address.country_code == "US" &&
        google.loader.ClientLocation.address.region) {
		if (google.loader.ClientLocation.latitude != null) {
        // geo locate was successful and user is in the states
        map.setCenter(
            new google.maps.LatLng(google.loader.ClientLocation.latitude,
                                   google.loader.ClientLocation.longitude
                                   ), 8
            );
	
     var radius = document.getElementById('radiusSelect').value;
     var searchUrl = 'phpsqlsearch_genxml.php?lat=' + google.loader.ClientLocation.latitude + '&lng=' + google.loader.ClientLocation.longitude + '&radius=50';
     GDownloadUrl(searchUrl, function(data) {
       var xml = GXml.parse(data);
       var markers = xml.documentElement.getElementsByTagName('marker');
       map.clearOverlays();

       var sidebar = document.getElementById('sidebar');
       sidebar.innerHTML = '';
       if (markers.length == 0) {
         sidebar.innerHTML = 'no results found';
         map.setCenter(new GLatLng(40, -100), 4);
         return;
       }

       var bounds = new GLatLngBounds();
       for (var i = 0; i < markers.length; i++) {
         var name = markers[i].getAttribute('name');
         var address = markers[i].getAttribute('address');
         var distance = parseFloat(markers[i].getAttribute('distance'));
         var point = new GLatLng(parseFloat(markers[i].getAttribute('lat')),
                                 parseFloat(markers[i].getAttribute('lng')));
         
         var marker = createMarker(point, name, address);
         map.addOverlay(marker);
         var sidebarEntry = createSidebarEntry(marker, name, address, distance);
         sidebar.appendChild(sidebarEntry);
         bounds.extend(point);
       }
       map.setCenter(bounds.getCenter(), map.getBoundsZoomLevel(bounds));
     });
   

    
      var marker = new GMarker(point);
      var html = '<b>' + name + '</b> <br/>' + address;
      GEvent.addListener(marker, 'click', function() {
        marker.openInfoWindowHtml(html);
      });
      return marker;
    
			 
			}
      }
    }
	}

   function searchLocations() {
     var address = document.getElementById('addressInput').value;
     geocoder.getLatLng(address, function(latlng) {
       if (!latlng) {
         alert(address + ' not found');
       } else {
         searchLocationsNear(latlng);
       }
     });
   }

   function searchLocationsNear(center) {
     var radius = document.getElementById('radiusSelect').value;
     var searchUrl = 'phpsqlsearch_genxml.php?lat=' + center.lat() + '&lng=' + center.lng() + '&radius=' + radius;
     GDownloadUrl(searchUrl, function(data) {
       var xml = GXml.parse(data);
       var markers = xml.documentElement.getElementsByTagName('marker');
       map.clearOverlays();

       var sidebar = document.getElementById('sidebar');
       sidebar.innerHTML = '';
       if (markers.length == 0) {
         sidebar.innerHTML = '<br><br>At this distance there are no results <br><br> try increasing the distance or entering a different location. <br><br>For example if you search for \'Texas\' at a 25 mile distance you will get no results because we start mapping from the center of the state... <br><br>instead try \Houston\' or set the distance to 200 miles';
         map.setCenter(new GLatLng(40, -100), 4);
         return;
       }

       var bounds = new GLatLngBounds();
       for (var i = 0; i < markers.length; i++) {
         var name = markers[i].getAttribute('name');
         var address = markers[i].getAttribute('address');
         var distance = parseFloat(markers[i].getAttribute('distance'));
         var point = new GLatLng(parseFloat(markers[i].getAttribute('lat')),
                                 parseFloat(markers[i].getAttribute('lng')));
         
         var marker = createMarker(point, name, address);
         map.addOverlay(marker);
         var sidebarEntry = createSidebarEntry(marker, name, address, distance);
         sidebar.appendChild(sidebarEntry);
         bounds.extend(point);
       }
       map.setCenter(bounds.getCenter(), map.getBoundsZoomLevel(bounds));
     });
   }

    function createMarker(point, name, address) {
      var marker = new GMarker(point);
      var html = '<b>' + name + '</b> <br/>' + address;
      GEvent.addListener(marker, 'click', function() {
        marker.openInfoWindowHtml(html);
      });
      return marker;
    }

    function createSidebarEntry(marker, name, address, distance) {
      var div = document.createElement('div');
      var html = '<b>' + name + '</b> (' + distance.toFixed(1) + ')<br/>' + address;
      div.innerHTML = html;
      div.style.cursor = 'pointer';
      div.style.marginBottom = '5px'; 
      GEvent.addDomListener(div, 'click', function() {
        GEvent.trigger(marker, 'click');
      });
      GEvent.addDomListener(div, 'mouseover', function() {
        div.style.backgroundColor = '#eee';
      });
      GEvent.addDomListener(div, 'mouseout', function() {
        div.style.backgroundColor = '#fff';
      });
      return div;
    }
    //]]>

  </script>
  </head>

  <body onload="load()" onunload="GUnload()">
   <div class="medium_sized"> 
   
   Address or Zipcode: <input type="text" id="addressInput"/>
     
   Distance:  <select id="radiusSelect"> 

      <option value="25">25</option>
      <option value="100">100</option>

      <option value="200" selected>200</option>
    </select>

    <input type="button" onclick="searchLocations()" value="Search Locations"/>
    
    </div>
    <div class="indentmap">
    <br/>    
    <br/>
<div style="width:730px; font-family:Arial, 
sans-serif; font-size:11px; border:1px solid black">
  <table> 
    <tbody> 
      <tr id="cm_mapTR">

        <td width="200" valign="top"> <div id="sidebar" style="overflow: auto; height: 400px; font-size: 11px; color: #000"></div>

        </td>
        <td> <div id="map" style="overflow: hidden; width:530px; height:400px"></div> </td>

      </tr> 
    </tbody>
  </table>
  </div>
</div>    
  </body>
</html>
