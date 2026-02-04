try { 
	document.execCommand('BackgroundImageCache', false, true); 
} catch(e) {
	// ignore
}

function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			oldonload();
			func();
		}
	}
}

function randomImg() {
	var randomNumber = Math.floor(Math.random()*5) // change this number to no. of images
	var theClasses = "homeImg homeImg" + randomNumber;
	
	if (document.getElementById("homeHeader")) {
		var homeImg = document.getElementById("homeHeader");
		homeImg.className = theClasses;
	}
}

function showHoverBox() {
	
	if (document.getElementById("generateRevenue")) {
	
		var theList = document.getElementById("generateRevenue");
		var theLinks = theList.getElementsByTagName("A");
		var class1 = "hoverBox";
		var class2 = "hoverBoxContent";
		
		for (var i=0; i<theLinks.length; i++) {
			
			if (theLinks[i].getAttribute("title")) {
			
				theLinks[i].onmouseover = function() {
					
					var div1 = document.createElement("div");
					div1.className = class1;
					var div2 = document.createElement("div");
					div2.className = class2;
					var tooltip = document.createElement("p");
					var itemText = this.getAttribute("title");
					var itemText = document.createTextNode(itemText)
					tooltip.appendChild(itemText);
					div2.appendChild(tooltip);
					div1.appendChild(div2);
					this.parentNode.insertBefore(div1,this);
					div1.title = this.title;
					this.title = "";
					
				}
				
				theLinks[i].onmouseout = function() {
					var previous = this.previousSibling;
					if (previous) { 
						this.title = previous.title;
						this.parentNode.removeChild(previous);
					}
				}
		
			}
		
		}
	}
}

function
changeLanguage(langCode)
{
	if(langCode == "es-SP")langCode = "es-ES";

	var curUrl = new String(document.location.href);
	var langLoc = curUrl.indexOf("/files/hub/");
	langLoc += 11;
	var newUrl = curUrl.substring(0, langLoc) + langCode + curUrl.substring(langLoc+5);
	document.location = newUrl;
}

function
doPopup(url, width, height)
{
	opts = "scrollbars=yes,location=no,menubar=no,status=no,toolbar=no,resizable=yes,width=" 
			+ width + ",height=" + height;
	window.open(url, "_blank", opts);
}

function
showPS(f)
{
	progId = f.form.program.value;

	if(progId != "noInput"){
		doPopup("/PublisherProgramsPayStructure?program_id=" + progId, 800, 600);
	}
}

function
getUrlParam(name)
{
	name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
	var regexS = "[\\?&]" + name + "=([^&#]*)"; 
	var regex = new RegExp( regexS );
	var results = regex.exec( window.location.href );
	if(results == null){
		return "";
	}
	else {
		return results[1];
	}
}

function
blogDisplay()
{
	var debug = false;
	var ourFeedUrl = "/PublisherBlog?lang=" + getCurrentLangCode();

	if (window.ActiveXObject){
		xhr = new ActiveXObject("Microsoft.XMLHTTP");
	}
	else if (window.XMLHttpRequest){
		xhr = new XMLHttpRequest();
	}
	else {
		if(debug){
			alert("No Ajax!");
		}
		return; // no ajax, give up
	}

	xhr.open("GET", ourFeedUrl, true);

	xhr.setRequestHeader("Cache-Control", "no-cache");
	xhr.setRequestHeader("Pragma", "no-cache");

	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4){
			if (xhr.status == 200){
				if (xhr.responseText != null){
					blogDisplayFromXml(xhr.responseXML);
				}
				else {
					if(debug){
						alert("Failed to receive RSS file from the server - file not found.");
					}
					return;
				}
			}
			else {
				if(debug){
					alert("Error code " + xhr.status + " received: " + xhr.statusText);
				}
				return;
			}
		}
	}
	xhr.send(null);
}

function
blogDisplayFromXml(rssxml)
{
	var itemList = new Array();
	var itemElements = rssxml.getElementsByTagName("item");

	for(var i = 0; i < itemElements.length; i++){
		curItem = new blogItem(itemElements[i]);
		itemList.push(curItem);

		if(i == 2){
			break;		// only get 3
		}
	}

	var blogListTag = document.getElementById("blogList");

	for(var i = 0; i < itemList.length; i++){
		var newLI = document.createElement("LI");

		var html = "<a href='" + itemList[i].link + "'>" + itemList[i].title + "</a> ";
		html += itemList[i].modified;

		newLI.innerHTML = html;

		blogListTag.appendChild(newLI);
	}

	return true;
}

function
blogItem(itemxml)
{
	this.title = itemxml.getElementsByTagName("title")[0].childNodes[0].nodeValue;
//	this.link = itemxml.getElementsByTagName("link")[0].getAttribute("href");
	this.link = itemxml.getElementsByTagName("link")[0].childNodes[0].nodeValue;
	dateString = itemxml.getElementsByTagName("pubDate")[0].childNodes[0].nodeValue;
	if(dateString != null){
		var d = new Date(dateString);
		this.modified = d.toLocaleDateString() + " " + d.toLocaleTimeString();
	}
}

function
getCurrentLangCode()
{
	var curUrl = new String(document.location.href);
	var langLoc = curUrl.indexOf("/files/hub/");
	langLoc += 11;
	return curUrl.substr(langLoc, 5);
}

function
realLangCodeToBlockheadBlogLangCode(realLangCode)
{
	if(realLangCode == "en-US"){
		return "english";
	}
	else if(realLangCode == "de-DE"){
		return "english";
	}
	else if(realLangCode == "fr-FR"){
		return "french";
	}
	else if(realLangCode == "it-IT"){
		return "italian";
	}
	else if(realLangCode == "es-ES"){
		return "spanish";
	}
	else {
		return "english";
	}
}

function
blogLink()
{
	window.location = "http://www.ebaypartnernetworkblog.com/category/" + realLangCodeToBlockheadBlogLangCode(getCurrentLangCode());
}

function
regLink()
{
	window.location = "/PublisherReg?js=true&lang=" +getCurrentLangCode();
}

function
devProgramLink()
{
	var langCode = getCurrentLangCode();
	var url = "http://developer.ebay.com/";		// default

	if(langCode == "en-US"){
		// use default
	}
	else if(langCode == "de-DE"){
		url = "http://entwickler.ebay.de/";
	}
	else if(langCode == "fr-FR"){
		url = "http://pages.ebay.fr/developpeur/";
	}
	else if(langCode == "it-IT"){
		// use default
	}
	else if(langCode == "es-ES"){
		// use default
	}
	window.location = url;
}



addLoadEvent(randomImg);
addLoadEvent(showHoverBox);