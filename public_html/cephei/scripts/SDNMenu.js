SDNMenu = function () {
// Release Date: 19 June 2008
	if (!document.getElementById || !document.getElementByTagName) { return false; }
	SDNMenu.prototype.menu = null;
	SDNMenu.prototype.defaultStates = null;
	SDNMenu.prototype.submenuState = null;
	SDNMenu.prototype.submenus = null;
	SDNMenu.prototype.titles = null;
	SDNMenu.prototype.titletext = null;
	SDNMenu.prototype.submenu_haschildren = null;
	SDNMenu.prototype.rgb = null;
	//IE flicker bug
	try {
		document.execCommand("BackgroundImageCache", false, true);
	} catch(err) {}
	//IE flicker bug end
};

SDNMenu.prototype.define = function(aVar, val) { if (typeof(this[aVar]) == "undefined") this[aVar] = val; };

SDNMenu.prototype.init = function (id) {
	var thisMenu = this;
	this.menu = document.getElementById(id);
	this.define("remember", true);	//Remember menu states, and restore them on next visit.
	this.define("contractall_default", true);	//Should all submenus be contracted by default? (true or false)

//defaultStates - An array of zeros, ones and twos (0,1,2,0) that represent closed (0), open (1), and always open (2) menus.
//if the array is empty, no default state of menu will be loaded. if the array has values, but not as many as there are menus, you will be alerted.
//The init function must be called after the Default States have been set. Init can be called multiple times.
//0 is closed, 1 is open, 2 is always open.... if you want an always closed state, make sure there are no child submenus!

//NOTE: order or priority for menu states is 'remember' (ie. use cookie), defaultStates (if array not empty), 'contractall_default'

	this.define("bypixels", -1);	//Basicly it's speed,
				//but if the (number of submenu elements * bypixels) is larger than the submenu height
				//the menu will change height by ~50% each step.
	this.define("collapse_lastmenu", false); //if true, close the last menu that was opened if it was not a parent or child menu.
	this.define("collapse_topmenus_only", false); //if true, collapse top level menus only; requires collapse_lastmenu to be true.
	this.define("collapse_children_too", false); //if true, collapse child menus when collapsing the lastmenu; requires collapse_lastmenu to be true.
	this.define("bInstantMenus", false); //if you want the menus to open instantly
	this.define("bRefreshMenu", true);	//if true, the submenus will be refreshed if needed at the redraw_timeout interval.
								//this allows the menu to work with font and window resizing.
	this.define("iSubmenuIndent", 10); //number of pixels for submenu menu title indents.
	this.define("iSubmenuItemIndent", 10); //number of pixels for submenu item indent level.
	this.define("bOnMouseOver", false); //if true, menus will expand a closed menu on mouseover.
	this.define("iOnMouseOverDelay", 500); //time in milliseconds to delay activing a menu onmouseover, allowing menus to be passed over.
	this.define("bOnClick", true); //if true, menus will expand/collapse on click rather than on mouseover.
	//this.define("rgb", {start:{r:137,g:133,b:133},end:{r:216,g:214,b:214}}); //determines the colour gradient to be used. CSS defaults used if this is not set.
	this.define("redraw_timeout", 30); //milliseconds to menu redraw incase of window or font resize.
	this.define("bRightLeft", false);  //draw the menu right to left (true) or left to right (false)
//================= should be no need to configure anything below this line, but feel free to be adventurous ===================================

//var menu, titles, titletext, submenus, bypixels;

	this.menuWidth = 0;
	this.menuHeight = 0;
	this.lastMenu = -1;
	this.maxdepth = 0;
	this.refreshdelay;
	this.qOpen = -1; //no menu opening
	this.qClose = -1; //no menu closing

	if (this.submenus == null) {
		// to load default states again after init, you must run init again
		// if we allow loadDefaultStates to be run after menu has changed state, then we shouldn't expect titles to be titles.
		// provided the menu has not changed in number of submenus we don't need to find them again.
		this.titles = this.getElementsByClassName("title", "span");
		this.submenus = this.getElementsByClassName("submenu", "div");
		this.titletext = this.getElementsByClassName("tt", "span");
		this.submenu_haschildren = new Array(this.submenus.length);
	}

	if (this.defaultStates == null) { this.defaultStates = []; } //no defaults provided

	if ((this.defaultStates.length > 0) && (this.defaultStates.length != this.submenus.length)) { alert('The number of default states is ' + this.defaultStates.length + ', but the number of menus is ' + this.submenus.length + '. Assuming no defaults.')
		this.defaultStates = new Array(this.submenus.length); //defaults provided, but they are no good
	}

	for(var i=0; i < this.submenus.length; i++) {
		//overwrite default state when there is no children to show
		this.submenu_haschildren[i] = this.hasChildren(i);
		this.defaultStates[i] = (this.submenu_haschildren[i] && this.defaultStates[i]) ? this.defaultStates[i] : ((this.contractall_default)? 0 : 1 );
		if (this.bOnMouseOver) {
			var tmo;
			this.titles[i].onmouseover = function () {
				clearTimeout(tmo);
				var thisTitle = this;
				tmo = setTimeout(function() { if (thisTitle.className == "titlehidden") thisMenu.gomenu(thisMenu.titles.indexOf(thisTitle)); }, thisMenu.iOnMouseOverDelay);
			};
			this.titles[i].onmouseout = function () { if (tmo) clearTimeout(tmo); }
		}
		if (this.bOnClick) {
			if ((this.defaultStates[i] < 2) && this.submenu_haschildren[i]) {
				this.titles[i].onclick = function () { thisMenu.gomenu(thisMenu.titles.indexOf(this)) };
			} else {
				this.titles[i].onclick = "";
			}
		}
		this.submenus[i].style.height = this.submenuHeight(this.submenus[i])+"px";
		if (this.rgb != null) { this.maxdepth = Math.max(this.maxdepth, this.getDepth(this.submenus[i])) };
	}

	this.setSubmenuMargins(this.menu, 0);

	//set the menu to the appropriate collapse/expand state
	(this.remember) ? this.restoreFromCookie() : this.restoreStates(this.defaultStates);
	var f = function () { thisMenu.refreshmenu() };
	this.refreshdelay = setInterval(f, this.redraw_timeout);
	this.setColour();
};

SDNMenu.prototype.setColour = function () {
	var o = this;
	if (o.rgb != null) {
		for(var i=0; i < this.titles.length; i++) {
			o.titles[i].style.backgroundColor = o.getColour(o.getDepth(o.submenus[i]), o.maxdepth);
		}
		//this.menu.style.backgroundColor = this.getColour(1,this.maxdepth);
		o.getElementsByClassName("top_lft", "dl")[0].style.backgroundColor = o.getColour(0, o.maxdepth);
		o.getElementsByClassName("bot_lft", "dl")[0].style.backgroundColor = o.getColour(0, o.maxdepth);
	}
};

SDNMenu.prototype.getDepth = function (oElm) {
	var o = this;
	var depth = 1;
	while ((oElm.className != o.menu.className)) {
		depth = depth - 1;
		oElm = oElm.parentNode;
	}
	return Math.abs(depth);
};

SDNMenu.prototype.getColour = function (depth, maxdepth) {
	var o = this;
	var r = o.rgb.start.r;
	var g = o.rgb.start.g;
	var b = o.rgb.start.b;
	if (maxdepth>0) {
		r = r + Math.floor(((o.rgb.end.r - o.rgb.start.r)/maxdepth)*depth);
		g = g + Math.floor(((o.rgb.end.g - o.rgb.start.g)/maxdepth)*depth);
		b = b + Math.floor(((o.rgb.end.b - o.rgb.start.b)/maxdepth)*depth);
	}
	return 'rgb('+r+','+g+','+b+')';
};

SDNMenu.prototype.setCurrent = function (objA) {
	var o = this;
	var currentlinks = o.getElementsByClassName("current", "a");
	for (var i=0; i < currentlinks.length; i++) {
		currentlinks[i].className = "";
	}
	objA.className = "current";
};

SDNMenu.prototype.hasChildren = function (sm) {
	return (this.submenus[sm].getElementsByTagName("*").length > 0)
};

SDNMenu.prototype.gomenu = function (sm) {
	var o = this;
	if (o.qClose == sm) { o.qClose = -1; o.qOpen = sm; return; }
	else if (o.qOpen == sm) { o.qOpen = -1; o.qClose = sm; return; }
	else if (o.qOpen >= 0 || o.qClose >= 0) return;
	if (parseInt(o.submenus[sm].style.height) > 0) {
		//menu is open, so we must close it.
		o.qClose = sm;
	} else if (parseInt(o.submenus[sm].style.height) == 0) {
		//menu is closed, so we must open it... and perhaps close the previous menu
		if ((o.collapse_lastmenu == true) && (o.lastMenu != -1)) {
			//don't collapse lastmenu when it is related... menu 1/submenu 1.1/submenu 1.1.1
			if (o.isAncestor(o.submenus[sm], o.submenus[o.lastMenu]) != true) {
				if (o.isAncestor(o.submenus[o.lastMenu], o.submenus[sm]) != true) {
					o.qClose = o.lastMenu;
				}
			}
		}
		o.qOpen = sm; //action taken in function refreshMenus
	}
};

SDNMenu.prototype.forceRedraw = function () {
	var o = this;
	if ((o.qClose == -1) && (o.qOpen == -1)) {
		if ( ( (o.menuWidth != o.menu.offsetWidth) || (o.menuHeight != o.menu.offsetHeight) ) ) {
			o.restoreFromCookie();
		}
	}
};

SDNMenu.prototype.refreshmenu = function () {
	var o = this;
	var cbRememberLastMenu = true;
	var cbStore = true;
	if ((o.qOpen >= 0) || (o.qClose >= 0)) {
		o.showhidemenu(o.qOpen, o.qClose, cbStore, cbRememberLastMenu, o.bInstantMenus);
	} else {
		// only redraw the menu if we aren't closing or opening a submenu
		//and only do it if the menu dimensions have changed
		if ( ( (o.menuWidth != o.menu.offsetWidth) || (o.menuHeight != o.menu.offsetHeight) ) ) {
			if (o.bRefreshMenu) o.restoreFromMemory();
		}
	}
};

SDNMenu.prototype.slash_expandall = function (bStore) {
	var o = this;
	var cbNow = true;
	var cbRememberLastMenu = false;
	if (typeof o.menu!="undefined"){
		for(var i=o.submenus.length-1; i >= 0; i--){
			if (o.submenu_haschildren[i] == true) {
				o.showhidemenu(i, -1, bStore, cbRememberLastMenu, cbNow);
			}
		}
	}
};

SDNMenu.prototype.slash_contractall = function (bStore) {
	var o = this;
	var cbNow = true;
	var cbRememberLastMenu = false;
	if (typeof o.menu!="undefined"){
		for(var i=0; i<o.submenus.length; i++){
			if (o.defaultStates[i] < 2) { o.showhidemenu(-1, i, bStore, cbRememberLastMenu , cbNow); } //don't hide always open menus
		}
	}
};

SDNMenu.prototype.setSubmenuMargins = function (oElm, currentMargin) {
	var o = this;
	var oElmCurrent = oElm.firstChild;
	while (oElmCurrent) {
		if (oElmCurrent.className == "submenu") {
			o.setSubmenuMargins(oElmCurrent, parseInt(currentMargin) + parseInt(o.iSubmenuIndent));
		} else if (oElmCurrent.nodeType == 1) {//nodeType test to skip non-HTML elements, i.e. text nodes
			if (oElmCurrent.nodeName == "A") {
				if ((oElmCurrent.firstChild.className == "title") || (oElmCurrent.firstChild.className == "titlehidden") || (oElmCurrent.firstChild.className == "rtitlehidden")) {//submenu title link
					if (o.bRightLeft) {
						oElmCurrent.firstChild.firstChild.style.marginRight = String(currentMargin) + "px" ;
					} else {
						oElmCurrent.firstChild.firstChild.style.marginLeft = String(currentMargin) + "px" ;
					}
				} else {//normal menu link
					if (o.bRightLeft) {
						oElmCurrent.firstChild.style.marginRight = String(parseInt(currentMargin)+(parseInt(o.iSubmenuItemIndent))) + "px" ;
					} else {
						oElmCurrent.firstChild.style.marginLeft = String(parseInt(currentMargin)+(parseInt(o.iSubmenuItemIndent))) + "px" ;
					}
				}
			} else if ((oElmCurrent.className == "title") || (oElmCurrent.className == "titlehidden") || (oElmCurrent.className == "rtitlehidden")) {
				if (o.bRightLeft) {
					oElmCurrent.firstChild.style.marginRight = String(currentMargin) + "px" ;
				} else {
					oElmCurrent.firstChild.style.marginLeft = String(currentMargin) + "px" ;
				}
			}
		}
		oElmCurrent = oElmCurrent.nextSibling;
	}
};

SDNMenu.prototype.loadDefaultStates = function (arrDefaultStates) {
	var thisMenu = this;
	this.defaultStates = [];
	this.defaultStates = arrDefaultStates;
	if (this.submenus != null) {
		if ((this.defaultStates.length > 0) && (this.defaultStates.length != this.submenus.length)) { alert('The number of default states is ' + this.defaultStates.length + ', but the number of menus is ' + this.submenus.length + '. Assuming no defaults.')
			this.defaultStates = new Array(this.submenus.length); //defaults provided, but they are no good
		}
		for(var i=0; i < this.submenus.length; i++) {
			//overwrite default state when there is no children to show
			this.submenu_haschildren[i] = this.hasChildren(i);
			this.defaultStates[i] = (this.submenu_haschildren[i] && this.defaultStates[i]) ? this.defaultStates[i] : ((this.contractall_default)? 0 : 1 );
			if (this.bOnMouseOver) {
				this.titles[i].onmouseover = function () { thisMenu.gomenu(thisMenu.titles.indexOf(this)) };
			} else {
				if ((this.defaultStates[i] < 2) && this.submenu_haschildren[i]) {
					this.titles[i].onclick = function () { thisMenu.gomenu(thisMenu.titles.indexOf(this)) };
				} else {
					this.titles[i].onclick = "";
				}
			}
			this.submenus[i].style.height = this.submenuHeight(this.submenus[i])+"px";
		}
		this.setSubmenuMargins(this.menu, 0);
		this.restoreStates(this.defaultStates);
	}
};

SDNMenu.prototype.restoreStates = function (arrStates) {
	var o = this;
	var cbRememberLastMenu = false;
	var cbNow = true;
	var cbStore = true;
	if (o.submenus.length == arrStates.length) {
		for (var i=arrStates.length-1; i>=0; i--) {
			if (arrStates[i] == 0 || o.submenu_haschildren[i] == false) {
				o.showhidemenu(-1, i, cbStore, cbRememberLastMenu, cbNow)
			} else {
				o.showhidemenu(i, -1, cbStore, cbRememberLastMenu, cbNow);
			}
		}
	} else {
		o.restoreStates(o.defaultStates);
	}
};

SDNMenu.prototype.restoreFromMemory = function () {
	var o = this;
	var cbRememberLastMenu = false;
	var cbNow = true;
	var cbStore = false;
	for (var i=o.submenuState.length-1; i>=0; i--) {
		if (o.submenuState[i] == 0) {
			if (parseInt(o.submenus[i].style.height) != 0) { // || o.submenu_haschildren[i] == false) {
				o.showhidemenu(-1, i, cbStore, cbRememberLastMenu, cbNow); // no need to store cookie info, it will be the same in the end
			}
		} else {
			if (parseInt(o.submenus[i].style.height) != o.submenuHeight(o.submenus[i])) {
				o.showhidemenu(i, -1, cbStore, cbRememberLastMenu, cbNow); // no need to store cookie info, it will be the same in the end
			}
		}
	}
	o.menuWidth = o.menu.offsetWidth;
	o.menuHeight = o.menu.offsetHeight;
};

SDNMenu.prototype.restoreFromCookie = function () {
	var o = this;
	if (o.getcookie(o.menu.id) != null) {
		o.submenuState = o.getcookie(o.menu.id).split(",");
		o.restoreStates(o.submenuState);
	} else {
		o.restoreStates(o.defaultStates);
	}
	o.menuWidth = o.menu.offsetWidth;
	o.menuHeight = o.menu.offsetHeight;
};

SDNMenu.prototype.isAncestor = function (oElm, oElmTest) {
	var o = this;
	if (oElm.className != o.menu.className) {
		if (oElm == oElmTest) {
			return (true);
		} else {
			return (o.isAncestor(oElm.parentNode, oElmTest));
		}
	} else {
		return (false);
	}
};

SDNMenu.prototype.expandChildren = function (oElm) {
	//recursively expand child submenus (that are not hidden) of the given menu element
	//I don't believe this should be needed, but without it the auto-resize/restore function
	//prevented submenus from being drawn as menus expand.
	var o = this;
	var oElmCurrent = oElm.firstChild;
	while (oElmCurrent) {
		if (oElmCurrent.className == "submenu") {
			if (oElmCurrent.style.display != "none") {
				oElmCurrent.style.height = o.submenuHeight(oElmCurrent)+"px";
				o.expandChildren(oElmCurrent);
			}
		}
		oElmCurrent = oElmCurrent.nextSibling;
	}
};

SDNMenu.prototype.collapseChildren = function (bStore, sm) {
	var o = this;
	var cbNow = true;
	var cbRememberLastMenu = false;
	if (typeof o.menu!="undefined"){
		for(var i=o.submenus.length-1; i>sm; i--){
			if (o.isAncestor(o.submenus[i], o.submenus[sm]) == true) {
				if (o.defaultStates[i] < 2) { o.showhidemenu(-1, i, bStore, cbRememberLastMenu , cbNow); } //don't hide always open menus
			}
		}
	}
	o.bCCNow = false;
};

SDNMenu.prototype.changeHeight = function (oElm, iDelta) {
	//recursively change the height of the object oElm and its parent until the parent object is 'sdmenu' or the parent not displayed
	//Note: if iDelta is negative, the menu height will be decreased, if it is positive, the menu height will increase.
	var o = this;
	var newHeight;
	o.expandChildren(oElm); //ensure submenus that should be displayed are displayed.
	while ((oElm.className != o.menu.className) && (oElm.style.display != "none")) {
		newHeight = parseInt(oElm.style.height) + iDelta;
		if (newHeight <= 0) {
			oElm.style.height = "0px";
		} else {
			oElm.style.height = newHeight+"px";
		}
		var lastElm = oElm;
		oElm = oElm.parentNode;
	}
};

SDNMenu.prototype.calcDelta = function (iTotalHeight, sm, bShowing, bNow) {
	var o = this;
	var iDelta;
	var dHalfHeight = iTotalHeight/2;
	var iHalfHeight = Math.floor(dHalfHeight);
	var remainingHeight = (bShowing)?(iTotalHeight-parseInt(o.submenus[sm].style.height)):parseInt(o.submenus[sm].style.height);
	if (bNow) { return remainingHeight; } //don't bother calculating, we only want one step
	if (o.bypixels>0) {
		if (o.bypixels < Math.floor((remainingHeight/2)+1)) {
			return o.bypixels;
		} else {
			return Math.floor(remainingHeight/2)+1;
		}
	}
	if (remainingHeight == iTotalHeight) { //start with a shift of 1px
		iDelta = 1;
	}	else {
		//before we pass halfway, iDelta is equal to the distance alread travelled (ie. travelled px doubles)
		iDelta = iTotalHeight-remainingHeight;
		if (iDelta == o.lowerpoweroftwo(iTotalHeight,3)) {
			//we don't want to have little steps in the middle, so work out if we need one bigger step to reach
			if (iDelta > (iHalfHeight-o.lowerpoweroftwo(iTotalHeight,2))) {
				// take the larger step to the middle now
				iDelta = iHalfHeight-o.lowerpoweroftwo(iTotalHeight,3);
			}
		} else if (iDelta == iHalfHeight) {
			// we are in the middle, work out if we need one bigger step away first
			if (o.lowerpoweroftwo(iTotalHeight,3) >= (iHalfHeight-o.lowerpoweroftwo(iTotalHeight,2))) {
				// take the larger step away from the middle now
				iDelta = iHalfHeight - o.lowerpoweroftwo(iTotalHeight,3);
			} else {
				// just take a normal step away from the middle
				iDelta = iHalfHeight - o.lowerpoweroftwo(iTotalHeight,2);
			}
			//and grab an extra px now if the total menu height is an odd number.
			if (iHalfHeight != dHalfHeight) { iDelta = iDelta + 1; };
		} else if (iDelta == o.lowerpoweroftwo(iTotalHeight,2)) { //not the same as == iHalfHeight
			//we calculated earlier that this would be the larger step to the middle, so take it now.
			iDelta = iHalfHeight-iDelta;
		} else if (iDelta > iHalfHeight) {
			//past halfway
			iDelta = (remainingHeight - o.lowerpoweroftwo(remainingHeight,1));
		} //else just use iDelta as is
	}
	if (iDelta == 0) iDelta = 1;

	iDelta = (o.bypixels>=0)?Math.min(iDelta, Math.pow(2,o.bypixels)):iDelta; //don't step larger than permitted
	return iDelta;
};

SDNMenu.prototype.submenuHeight = function (oElm) {
	var o = this;
	var th = 0;
	if (!oElm.firstChild) { return th; }
	var oElmCurrent = oElm.firstChild;
	while (oElmCurrent) {
		if (oElmCurrent.className == "submenu") {
			if (oElmCurrent.style.display != "none") {
				th = th + o.submenuHeight(oElmCurrent);
			}
		} else if (oElmCurrent.nodeType == 1) { //not submenu so add height of element...
			//nodeType test to skip non-HTML elements, i.e. text nodes
			th = th + oElmCurrent.offsetHeight;
		}
		oElmCurrent = oElmCurrent.nextSibling;
	}
	return th;
};

SDNMenu.prototype.lowerpoweroftwo = function (i, n) {
	//given i, calculate the nth closest value which is less than i, but a power of two.
	var value = 1;
	while ((value*2*n) < i) {
		value = value * 2;
	}
	return value;
};

SDNMenu.prototype.showhidemenu = function (smOpen, smClose, bStore, bRememberLastMenu, bNow) {
	var o = this;
	var Open = [];
	Open['iDelta'] = 0;
	var Close = [];
	Close['iDelta'] = 0;
	if (smOpen >=0 ) {
		//set Open menu to display
		o.submenus[smOpen].style.display = "";
		o.titletext[smOpen].className = "tt";
		if (o.defaultStates[smOpen] == 2) {
			o.titles[smOpen].className = "rtitlehidden";
		} else {
			o.titles[smOpen].className = "title";
		}
		Open['submenuContentHeight'] = o.submenuHeight(o.submenus[smOpen]);
		Open['iDelta'] = o.calcDelta(Open['submenuContentHeight'], smOpen, true, bNow);
	}
	if (smClose >= 0) {
		Close['submenuContentHeight'] = o.submenuHeight(o.submenus[smClose]);
		Close['iDelta'] = o.calcDelta(Close['submenuContentHeight'], smClose, false, bNow);
	}

	//for smoothest menu transition, keep open and close redraw close together...hmm, perhaps one function call.
	if (smOpen >= 0) o.changeHeight(o.submenus[smOpen], Open['iDelta']);
	if (smClose >= 0) o.changeHeight(o.submenus[smClose], -Close['iDelta']);

	if (smOpen >= 0) {
		if (parseInt(o.submenus[smOpen].style.height) == Open['submenuContentHeight']) {
			if (bRememberLastMenu && ((o.collapse_topmenus_only != true) || (o.submenus[smOpen].parentNode == o.menu))) { o.lastMenu = smOpen; } //remember the appropriate lastmenu
			if (bStore == true) { o.store(); }
			//must set o.qOpen here because this is the only time we know showmenu has finished.
			o.qOpen = -1;
		}
	}
	if (smClose >= 0) {
		if (parseInt(o.submenus[smClose].style.height) == 0) {
			if (o.submenu_haschildren[smClose] == false) {
				o.titles[smClose].className = "rtitlehidden";
			} else {
				o.titles[smClose].className = "titlehidden";
			if ((o.collapse_children_too == true)) { o.collapseChildren( true, smClose); }
			}
			o.titletext[smClose].className = "tthidden";
			o.submenus[smClose].style.display = "none";
			if (bStore == true) { o.store(); }
			//must set o.qClose here because this is the only time we know the hiding has finished.
			o.qClose = -1;
		}
	}
};

SDNMenu.prototype.store = function () {
	var o = this;
	o.submenuState = [];
	for (var i = 0; i < o.submenus.length; i++) {
		if ( ((o.defaultStates[i] < 2) && (o.submenus[i].style.display == "none")) || o.submenu_haschildren[i] == false) {
			o.submenuState.push(0);  //collapsed
		} else {
			o.submenuState.push(1); //expanded
		}
	}
	o.putcookie(o.menu.id, o.submenuState.join(","), 30);
};

SDNMenu.prototype.getElementsByClassName = function (strClassName, strTagName){
	var o = this;
	var arrElements = o.menu.getElementsByTagName(strTagName);
	var arrReturnElements = [];
	strClassName = strClassName.replace(/\-/g, "\\-");
	var oRegExp = new RegExp("(^|\\s)" + strClassName + "(\\s|$)");
	var oElement;
	for(var i=0; i<arrElements.length; i++){
		oElement = arrElements[i];
		if(oRegExp.test(oElement.className)){
			arrReturnElements.push(oElement);
		}
	}
	return (arrReturnElements)
};

SDNMenu.prototype.putcookie = function (c_name,value,expiredays) {
	var c_name_v = c_name + "_v1";
	var exdate=new Date();
	exdate.setDate(exdate.getDate()+expiredays);
	document.cookie = c_name_v + "=" + escape(value) + ((expiredays==null) ? "" : ";expires="+exdate);
};

SDNMenu.prototype.getcookie = function (c_name) {
	var c_name_v = c_name + "_v1";
	if (document.cookie.length > 0) {
		var c_start = document.cookie.indexOf(c_name_v + "=");
		if (c_start != -1) {
			c_start = c_start + c_name_v.length + 1;
			var c_end = document.cookie.indexOf(";",c_start);
			if (c_end == -1) c_end = document.cookie.length;
			return unescape(document.cookie.substring(c_start, c_end));
		}
	}
	return null;
};

// ensure we understand indexOf
if (!Array.prototype.indexOf) {
	Array.prototype.indexOf = function(elt /*, from*/) {
		var len = this.length;
		var from = Number(arguments[1]) || 0;
		from = (from < 0) ? Math.ceil(from) : Math.floor(from);
		if (from < 0) from += len;
		for (; from < len; from++) {
			if (from in this && this[from] === elt) return from;
		}
		return -1;
	};
}