function iTunesRewrite(nodes, url, promoName) {
	
	if (!nodes || typeof(nodes) == 'undefined') {
		return;
	}
	
	if (!url) {
		url = '/itunes/overview/';
	}
	
	if (nodes.href) {
		nodes = [nodes];
	}
	
	promoName = promoName ? '' : 'American Idol Promo'; //TODO need more generic default eventually
	
	var iTunesAvailable = iTunesDetected();
	
	var trackPromo = function(evt, promoName, iTunes) {
		var detected = iTunes ? '' : ' - No iTunes';
		
		var title = promoName + ' - ' + document.title + detected;
		AC.Tracking.trackClick({prop3: title}, this, 'o', title);
	}
	
	for (var i = nodes.length - 1; i >= 0; i--){
		var node = $(nodes[i]);
		node.observe('mousedown', trackPromo.bindAsEventListener(this, promoName, iTunesAvailable));
		if (!iTunesAvailable) {
			node.href = url
		}
	}

}