// JavaScript Document

<!--
var cleanReturn = 1; //do you want a full youtube return, or just an image list
var inlineVideo = 1; //do you want to redirect to youtube, or play inlinevideo

var timer;
var i =0;
var youtubediv = new Array();

function clearList(ul){
	var list = document.getElementById(ul);
	while (list.firstChild) 
	 {
	    list.removeChild(list.firstChild);
	 }		
}

function hideOverlay(){

	var overlay = document.getElementById('youtubeoverlay');
	overlay.style.display = 'none';
	overlay.innerHTML = "";
}

function videoOverlay(id){
	var objBody = document.getElementsByTagName("body").item(0);
	if(objBody){
    var video = document.createElement('div');
	video.setAttribute('id', 'youtubeoverlay');
	video.innerHTML = '<div id="youtubecontent"><a href="javascript:hideOverlay()" id="close">Close</a><br /><object width="510" height="420"><param name="movie" value="http://www.youtube.com/v/'+id+'"></param><param name="autoplay" value="1"><param name="wmode" value="transparent"></param><embed src="http://www.youtube.com/v/'+id+'&autoplay=1" type="application/x-shockwave-flash" wmode="transparent" width="510" height="420"></embed></object></div>';
	objBody.insertBefore(video, objBody.firstChild);
	}else{
		alert('no body element. please add');
	}

}

function mousOverImage(name,id,nr){

	if(name)
		imname = name;
	//make border orange
	imname.style.border = 	'4px solid orange';

	imname.src = "http://img.youtube.com/vi/"+id+"/"+nr+".jpg";
	nr++;
	if(nr > 3)
		nr = 1;
	timer =  setTimeout("mousOverImage(false,'"+id+"',"+nr+");",1000);

}


function mouseOutImage(name){

	if(name)
		imname = name;
	//make border back to greyish
	imname.style.border = 	'4px solid #333333';
	if(timer)
		clearTimeout(timer)

}

function getVideoId(url){

    var match = url.lastIndexOf('=');
    if (match) {
      id = url.substring(match+1);
      return id;
    }
}

function getId(string){

    var match = string.lastIndexOf("'s Videos");
    if (match != -1) {
      id = string.substring(0,match);
      return id.toLowerCase();
    }

    var match = string.lastIndexOf("query");
    if (match != -1) {
      id = string.substring(match+7);
      return id.toLowerCase();
    }

}
function listVideos(json,divid) {
  divid.innerHTML = '';
  var ul = document.createElement('ul');
  ul.setAttribute('id', 'youtubelist');
  if(json.feed.entry){
	  for (var i = 0; i < json.feed.entry.length; i++) {
	    var entry = json.feed.entry[i];
	
	    for (var k = 0; k < entry.link.length; k++) {
	      if (entry.link[k].rel == 'alternate') {
	        url = entry.link[k].href;
	        break;
	      }
	    }
   	

   	var thumb = entry['media$group']['media$thumbnail'][1].url;


    var li = document.createElement('li');

    li.setAttribute('id', 'youtubebox');
    if(cleanReturn == 1){

		if(inlineVideo == 1){
        	li.innerHTML = '<a href="javascript:videoOverlay(\''+getVideoId(url)+'\');"><img src="'+thumb+'" id="youtubethumb" alt="'+entry.title.$t+'"  onmouseout="mouseOutImage(this)" onmouseover="mousOverImage(this,\''+getVideoId(url)+'\',2)"></a>';

		}else{

        	li.innerHTML = '<a href="'+url+'"><img src="'+thumb+'" id="youtubethumb" alt="'+entry.title.$t+'" onmouseout="mouseOutImage(this)" onmouseover="mousOverImage(this,\''+getVideoId(url)+'\',2)"></a>';
		}
    }else{
        li.innerHTML = entry.content.$t;
    }

    ul.appendChild(li);
	}
  }else{
  	divid.innerHTML = 'No Results Found';

  }

  document.getElementById(divid).appendChild(ul);
}

function youtubeInit(root) {
  //this hacks the layer for mutiple json queries
  id = getId(root.feed.title.$t);
  listVideos(root, youtubediv[id]);

}


function insertVideos(div,typ,q,results,overlay){
  inlineVideo = overlay;
  youtubediv[q.toLowerCase()] = div;

  var script = document.createElement('script');
  if(typ == "search")
  	script.setAttribute('src', 'http://gdata.youtube.com/feeds/videos?vq='+q+'&max-results='+results+'&alt=json-in-script&callback=youtubeInit');

  if(typ == "user")
  	script.setAttribute('src', 'http://gdata.youtube.com/feeds/users/'+q+'/uploads?max-results='+results+'&alt=json-in-script&callback=youtubeInit');

  if(typ == "playlist"){
	//doesn't function
	alert('oops.. working on it');
  	script.setAttribute('src', 'http://gdata.youtube.com/feeds/playlists/'+q+'?max-results='+results+'&alt=json-in-script&callback=youtubeInit');
  }

  script.setAttribute('id', 'jsonScript');
  script.setAttribute('type', 'text/javascript');
  document.documentElement.firstChild.appendChild(script);
}

//-->