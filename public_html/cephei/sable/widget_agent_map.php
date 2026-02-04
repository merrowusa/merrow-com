<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
	<head>
		<base target="_top" />
		<title></title>
	</head>
 

	<body onunload="GUnload();">
		
		
		<!--
			If you want to transplant this map into another Web page, the easiest way to do it is to
			simply include it in a IFRAME tag (see http://www.gpsvisualizer.com/faq.html#google_html).
			But, if you must paste the code into another page, be sure to include all of these parts:
			   1. The DOCTYPE declaration and the extra attributes in the "html" tag (xmlns:v=...)
			     that allow Internet Explorer for Windows to render polylines (tracks)
			   2. The "div" tags that contain the map and its widgets
			   3. Three sections of JavaScript code:
			      a. Your Google Maps API key and the maps.google.com code
			      b. "gv_options" and the code that calls "functions.js" on maps.gpsvisualizer.com
			      c. The "GV_Map" function, which contains all the geographic info for the map
		-->
		<div style="margin-left:0px; margin-right:0px; margin-top:0px; margin-bottom:0px;">

			<div id="gmap_div" style="width:736px; height:496px; margin:0px; margin-right:12px; background-color:#F0F0F0; float:left; overflow:hidden;">
				<p align="center" style="font:10px Arial;">This map was created using <a target="_blank" href="http://www.gpsvisualizer.com/">GPS Visualizer</a><br><br>Please wait while the map data loads...</p>
			</div>
				
			<div id="gv_legend_container" style="display:none;">
				<table id="gv_legend_table" style="position:relative; filter:alpha(opacity=95); -moz-opacity:0.95;" cellpadding="0" cellspacing="0" border="0"><tr><td>
					<div id="gv_legend_handle" align="center" style="height:6px; max-height:6px; background:#CCCCCC; border-left:1px solid #999999; border-top:1px solid #EEEEEE; border-right:1px solid #999999; padding:0px; cursor:move;"><!-- --></div>
					<div id="gv_legend" align="left" style="font-family:Arial; font-size:11px; line-height:13px; border:solid #000000 1px; background:#FFFFFF; padding:4px;">

						<!-- Although GPS Visualizer didn't create a legend with your map, you can use this box for something else if you'd like; enable it by setting legend:true in the 'gv_options' -->
					</div>
				</td></tr></table>
			</div>


			<div id="gv_marker_list_container" style="display:none;">
				<table id="gv_marker_list_table" style="position:relative; filter:alpha(opacity=95); -moz-opacity:0.95;" cellspacing="0" cellpadding="0" border="0"><tr><td>
					<div id="gv_marker_list_handle" align="center" style="height:6px; max-height:6px; background:#CCCCCC; border-left:1px solid #999999; border-top:1px solid #EEEEEE; border-right:1px solid #999999; padding:0px; cursor:move;"><!-- --></div>
					<div id="gv_marker_list" align="left" class="gv_marker_list" style="overflow:auto; background:#FFFFFF; border:solid #666666 1px; padding:4px;"></div>

				</td></tr></table>
			</div>
			
			<div id="gv_marker_list_static" align="left" class="gv_marker_list" style="width:250px; height:350px; overflow:auto; display:none;"></div>
			<div id="gv_clear_margins" style="height:0px; clear:both;"><!-- clear the "float" --></div>
		</div>

		
		<script type="text/javascript">
			// If you put this map on another Web site, you must include your API key or nothing will work!
			var google_api_key = 'ABQIAAAADizr7-TCJzgpJyUo_GBo-RS__Kf-IlIVJkgAx4Cxw4mlXnWodBQy-vGGOuTVBFC-o6N8AIw9NfBVvw';
			if (document.location.toString().indexOf('http://www.gpsvisualizer.com') > -1) { eval(unescape("%67%6F%6F%67%6C%65%5F%61%70%69%5F%6B%65%79")+" = '"+unescape("%41%42%51%49%41%41%41%41%61%47%39%4A%44%62%43%65%36%52%61%31%4F%67%30%68%4B%43%6E%32%4C%52%52%6F%6B%57%5F%49%74%45%49%6D%42%6F%37%65%77%62%56%45%4A%41%7A%73%74%53%73%52%57%68%52%4A%33%52%4D%44%41%57%70%4C%35%35%51%61%63%47%5A%32%7A%51%46%32%6B%4C%43%5F%65%41")+"'"); }
			document.writeln('<script src="http://maps.google.com/maps?v=2&file=api&key='+google_api_key+'" type="text/javascript"><'+'/'+'script>');
		</script>

		<!-- end Google Maps script; begin GPS Visualizer setup script (they must be separate) -->
		<script type="text/javascript">
			/* Global variables used by the GPS Visualizer functions (1214067562): */
			gv_options = new Array(); gv_options = {
				// important variable names:
				map:'gmap', map_div:'gmap_div', marker_array:'wpts', track_array:'trk', track_info_array:'trk_info', // probably 'gmap','gmap_div','wpts','trk','trk_info'
				
				// basic map parameters:
				full_screen:false,              // should the map fill the entire page (or frame)?
				center:[10.4844115,0], // latitude,longitude - be sure to keep the square brackets
				zoom:2,                        // higher number means closer view; at 600px wide, 7 = width of New Mexico, 12 = width of San Francisco
				map_opacity:1, map_type:'G_NORMAL_MAP', // opacity is from 0 to 1; popular map_type choices are 'G_NORMAL_MAP', 'G_SATELLITE_MAP', 'G_HYBRID_MAP', 'G_PHYSICAL_MAP', 'USGS_TOPO_TILES'
				doubleclick_zoom:true, mousewheel_zoom:false, // true or false; or, value of 'reverse' for mousewheel_zoom makes down=in and up=out
				
				// widgets on the map:
				map_type_control:{ // style: 'menu', 'list', 'none', or 'google'; filter: when map loads, are irrelevant maps ignored?; excluded: list of map types that will never show in the list, e.g., ['USGS_TOPO_TILES','USGS_AERIAL_TILES','NRCAN_TOPO_TILES','NRCAN_TOPO_NAMES_TILES','LANDSAT_TILES','BLUEMARBLE_TILES','DAILY_TERRA_TILES','DAILY_AQUA_TILES']
					style:'menu', filter:true, excluded:[]
				},
				zoom_control:'large', scale_control:true, map_opacity_control:true, // zoom is 'large' or 'small', scale and opacity are true or false
				center_coordinates:true, crosshair_hidden:false, // true or false: Show a "center coordinates" box and crosshair? Hide the crosshair initially?
				legend_options:{ // position: [Google anchor, x, y]; id: id of a DIV tag that holds the legend (other associated DIVs -- e.g., _handle, _table, -container -- must be similarly named)
					legend:true, id:'gv_legend', position:['G_ANCHOR_TOP_LEFT',70,6], draggable:true, collapsible:true
				},
				
				// marker-related options:
				default_marker:{ color:'green',icon:'googlemini' }, // icon can be a URL, but be sure to also include size:[w,h] and optionally anchor:[x,y]
				icon_directory:'http://maps.gpsvisualizer.com/google_maps/icons/', // don't change this unless you really know what you're doing
				marker_link_target:'_blank',    // the name of the window or frame into which markers' URLs will load
				info_window_width:0, thumbnail_width:0, // in pixels, the width of the markers' info windows or thumbnails; 0 for default (override with window_width: or thumbnail_width: in an individual marker's options)
				hide_labels:false, label_offset:[0,0], // hide_labels causes the "permanent" labels to be hidden at first; global label_offset setting is [x,y] (positive numbers are right and down)
				driving_directions:true,       // put a small "driving directions" form in each marker's pop-up window? (override with dd:true or dd:false in the marker's options)
				marker_filter_options:{ // options for removing waypoints that are out of the current view
					filter:false, limit:0, update_list:true, sort_list_by_distance:false, min_zoom:0, zoom_message:''
				},
				marker_list_options:{ // options for a dynamically-created list of markers
					list:false, id_floating:'gv_marker_list', id_static:'gv_marker_list_static', // id_static: id of a DIV with a non-floating list; id_floating: id of a DIV tag that holds a floating list (other associated DIVs -- _handle, _table, _container -- must be similarly named)
					floating:true, position:['G_ANCHOR_BOTTOM_RIGHT',0,32], width:150, height:346, draggable:true, collapsible:true, // these only affect a "floating" list
					colors:false, default_color:'', icons:true, desc:true, dividers:true, thumbnails:true, wrap_names:false, limit:0, // overall appearance of the list items
					center:false, zoom:true, zoom_level:6, info_window:true, toggle:true, url_links:true, help_tooltips:true, // these define what happens when you click on an item in the list ("toggle" affects only the text)
					header:'',footer:'',include_tickmarks:false,include_trackpoints:false // header & footer are HTML snippets
				},
				

				zzz:false // this is just here to prevent possible "hanging comma" JS errors
			};
			// Load GPS Visualizer's Google Maps functions ORIGINAL FILE IS HERE http://maps.gpsvisualizer.com/google_maps/functions.js   (this must be loaded AFTER gv_options are set):
			document.writeln('<script src="http://merrow.com/cephei/scripts/mapfunctions.js" type="text/javascript"><'+'/'+'script>');
		</script>

		<style type="text/css">
			/* Put any custom style definitions here (e.g., .gv_marker_list_item, .gv_tooltip, .gv_label, .gv_wpt, etc.) */
			div.agent_image {
			height: 130px;
			width: 300px;
			margin-top: 7px;
			}
		</style>
		<!-- end GPSV setup script and styles; begin map-drawing script (they must be separate) -->
		<script type="text/javascript">
			function GV_Map() {
				if (GBrowserIsCompatible()) { 
					if (gv_options['full_screen']) { GV_Fill_Window_With_Map(gv_options['map_div']); }
					gmap = new GMap2(document.getElementById(gv_options['map_div'])); // create map
					GV_Setup_Map(gv_options);
					
					
					
					wpts = new Array();
									
<? // Get all the data from the "asin" table which is where our product info is kept
$result = mysql_query("SELECT latitude, longitude, account_name, party_id, full_address, Country, city, store, state, color, icon FROM agents ")
or die(mysql_error());
?>
				<?
//then get a agent which we'll use to call the rest of the images
       while($agents = mysql_fetch_array( $result )) { ?>					
		wpts.push( GV_Marker(gmap,{lat:<? echo $agents['latitude']; ?>,lon:<? echo $agents['longitude']; ?>,name:'<? if($agents['store']=="yes") { ?> Merrow has a Premier Agent in <? } else { ?> Merrow has an Agent in  <? } ?><? echo $agents['city']; if($agents['state']!=null) {?>,<? echo $agents['state']; } ?>',desc:'<a href="http://merrow.com/cephei/sable/fp_agent_choice.php?party_id=<? echo $agents['party_id']; ?>" target="_blank"><?  if ($agents['store']=="yes") { ?> visit the Merrow store <br>in <? echo $agents['Country']; ?> <br><div class="agent_image"><img name="" src="http://images.imerrow.com/images/store/new_jpgs/ads_fordealer.jpg" alt="" /></div> <? } elseif ($agents['Country']=="United States") {echo $agents['state']; } else { ?>Please click here to contact our agent in <? echo $agents['Country']; }?></a>',color:'<? echo $agents['color']; ?>',icon:'<? echo $agents['icon']; ?>'}) );<? } ?>
	              <!--  wpts.push( GV_Marker(gmap,{lat:54.4983710,lon:-115.0014570,name:'Alberta',desc:'',color:'',icon:''}) );	-->
					GV_Finish_Map(gv_options);
					
				
					
				} else {
					document.getElementById('gmap_div').style.backgroundColor = '#DDDDDD';
					document.getElementById('gmap_div').innerHTML = 'Sorry, your Google Map cannot be displayed.';
				}
			}
			GV_Map(); // execute the above code
		</script>
		
	</body>

</html>
