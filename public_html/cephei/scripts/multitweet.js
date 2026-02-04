//Stripe together tweets from multiple users.

//Free to use and modify at will, but please credit Afterglide Media Thingy, LLC (afterglide.googlepages.com)

//and Twitter (getTimeDelta and getRelativeTime (aka relative_time) were supplied by Twitter

//for the original. Contact jeremy@afterglide.com for support, suggestions, bug fix requests, etc.

//

//v1.0208 February 21, 2008 - Initial version

//v1.1108 November 2, 2008 - Replace URLs with links



//global variables

MultiTweet = new Array(); // array for the tweet info.

MultiTweetMask = "";

MultiTweetTarget = "";



// tweet object constructor

function LoneTweet() {

	this.delta = null; // milliseconds since this tweet;

	this.html = null; // html of tweet to dump to screen;

	this.username = null; // user who made this tweet;



	//define object methods

	this.setDelta = function (deltaval) { this.delta = deltaval; }

	this.setHtml = function (htmlval) { this.html = htmlval; }

	this.setUsername = function (usernameval) { this.username = usernameval; }

} 



function tweetFormatToMask(tweet, mask) {

	var tweettext = mask;



	tweettext = tweettext.replace(/%user_url%/ig, tweet.user.url);

	tweettext = tweettext.replace(/%user_name%/ig, tweet.user.name);

	tweettext = tweettext.replace(/%user_description%/ig, tweet.user.description);

	tweettext = tweettext.replace(/%user_location%/ig, tweet.user.location);

	tweettext = tweettext.replace(/%user_screen_name%/ig, tweet.user.screen_name);

	tweettext = tweettext.replace(/%user_profile_image_url%/ig, tweet.user.profile_image_url);

	tweettext = tweettext.replace(/%user_id%/ig, tweet.user.id);

	tweettext = tweettext.replace(/%user_protected%/ig, tweet.user.protected);

	tweettext = tweettext.replace(/%truncated%/ig, tweet.truncated);

	tweettext = tweettext.replace(/%created_at%/ig, tweet.created_at);

	tweettext = tweettext.replace(/%source%/ig, tweet.source);

	tweettext = tweettext.replace(/%id%/ig, tweet.id);

	tweettext = tweettext.replace(/%text%/ig, tweet.text);

	tweettext = tweettext.replace(/%relative_time%/ig, getRelativeTime(tweet.created_at));



	// oh, heck, while we're at it, why don't we link to screen names in replies.

	tweettext = tweettext.replace(/@([a-zA-Z0-9_]*)/ig, '@<a href="http://twitter.com/$1">$1</a>');

	

	// and replace text URLs with links to those URLs

	tweettext = setURLLink(tweettext);



	return tweettext;

}



function getUserTweet(userlist, numbertweets) {

	var aUser = userlist.split(",");

	

	for (var i=0; i < aUser.length; i++) {

		document.write('<script text="text/javascript" src="http://twitter.com/statuses/user_timeline/' + aUser[i] + '.json?callback=tweetMulti&count=' + numbertweets + '"></' + 'script>');

	}

}



function tweetMulti(twitters) {

    var updateList = document.getElementById('twitter_multi_update_list');

	var newText = '';

	var username = '';

	// set default mask (can be overridden by setting global variable MultiTweetMask)

	var mask = '<li class=\'singletweet\'><span> %text% </span><a style="font-size:85%" href="http://twitter.com/%user_screen_name%/statuses/%id%">%relative_time%</a> via %source%</li>';

	

	try { // use try/catch in case MultiTweetMask isn't defined

		if (MultiTweetMask != '') {

			mask = MultiTweetMask;

		}

	}

	catch (e) {

	}

	

	for (var i=0; i<twitters.length; i++){

		username = twitters[i].user.screen_name

		MultiTweet[MultiTweet.length] = new LoneTweet();

		MultiTweet[MultiTweet.length - 1].setDelta(parseInt(getTimeDelta(twitters[i].created_at)));

		MultiTweet[MultiTweet.length - 1].setHtml(tweetFormatToMask(twitters[i], mask));

		MultiTweet[MultiTweet.length - 1].setUsername(username);

	}

	

	MultiTweet.sort(tweetMultiSort);



	for (var i=0; i<MultiTweet.length; i++){

		newText += MultiTweet[i].html;

	}

	

	updateList.innerHTML = newText;

}



function tweetMultiSort(a, b) {

	// sort array by value of delta (amount of time since twitter was posted)

	

   if(a.delta > b.delta) 

      { return 1; }

   if(a.delta < b.delta)

      { return -1; }



   return 0;

} 



function getTimeDelta(time_value) {

  // this code is pretty much untouched from the original twitter version, other than being broken out into a separate function.

  var values = time_value.split(" ");

  time_value = values[1] + " " + values[2] + ", " + values[5] + " " + values[3];

  var parsed_date = Date.parse(time_value);

  var relative_to = (arguments.length > 1) ? arguments[1] : new Date();

  var delta = parseInt((relative_to.getTime() - parsed_date) / 1000);

  return delta + (relative_to.getTimezoneOffset() * 60);

}



function getRelativeTime(time_value) {

  // this code is pretty much untouched from the original Twitter version.

  delta = getTimeDelta(time_value);



  if (delta < 60) {

    return 'less than a minute ago';

  } else if(delta < 120) {

    return 'about a minute ago';

  } else if(delta < (60*60)) {

    return (parseInt(delta / 60)).toString() + ' minutes ago';

  } else if(delta < (120*60)) {

    return 'about an hour ago';

  } else if(delta < (24*60*60)) {

    return 'about ' + (parseInt(delta / 3600)).toString() + ' hours ago';

  } else if(delta < (48*60*60)) {

    return '1 day ago';

  } else {

    return (parseInt(delta / 86400)).toString() + ' days ago';

  }

}



function setURLLink(sStr) {

	// return a string that replaces URLs with clickable link versions.

	var	sValidURLRegEx = "(http://|https://|^www\\.){1,1}"; //getValidTLDList()

	var oValidURLRegEx = new RegExp(sValidURLRegEx, "ig"); // create regex object with "global" attribute to replace all instances.

	sStr = sStr.replace(oValidURLRegEx, '[BeginURL]$1');



	sValidURLRegEx = " (www\\.){1,1}"; //getValidTLDList()

	oValidURLRegEx = new RegExp(sValidURLRegEx, "ig"); // create regex object with "global" attribute to replace all instances.

	sStr = sStr.replace(oValidURLRegEx, ' [BeginURL]$1');

		

	sValidURLRegEx = "\\.(" + getValidTLDList() + ") ";// alert(sValidURLRegEx);

	oValidURLRegEx = new RegExp(sValidURLRegEx, "ig"); // create regex object with "global" attribute to replace all instances.

	sStr = sStr.replace(oValidURLRegEx, '.$1[EndURL] ');



	sValidURLRegEx = "\\.(" + getValidTLDList() + ")$";// alert(sValidURLRegEx);

	oValidURLRegEx = new RegExp(sValidURLRegEx, "ig"); // create regex object with "global" attribute to replace all instances.

	sStr = sStr.replace(oValidURLRegEx, '.$1[EndURL]');



	sValidURLRegEx = "\\.(" + getValidTLDList() + ")(/[/\\-\\.\\?\\%a-zA-Z0-9\\$\\=\\&_~,]{1,}) ";// alert(sValidURLRegEx);

	oValidURLRegEx = new RegExp(sValidURLRegEx, "ig"); // create regex object with "global" attribute to replace all instances.

	sStr = sStr.replace(oValidURLRegEx, '.$1$2[EndURL] ');



	sValidURLRegEx = "\\.(" + getValidTLDList() + ")(/[/\\-\\.\\?\\%a-zA-Z0-9\\$\\=\\&_~,]{1,})$";// alert(sValidURLRegEx);

	oValidURLRegEx = new RegExp(sValidURLRegEx, "ig"); // create regex object with "global" attribute to replace all instances.

	sStr = sStr.replace(oValidURLRegEx, '.$1$2[EndURL]');



	// Get rid of EndURL tags that don't have corresponding BeginURL tags

	sValidURLRegEx = "^([^\\[\\]]{0,})\\[EndURL\\]";// alert(sValidURLRegEx);

	oValidURLRegEx = new RegExp(sValidURLRegEx, "ig"); // create regex object with "global" attribute to replace all instances.

	sStr = sStr.replace(oValidURLRegEx, '$1');



	sValidURLRegEx = " ([^\\[\\]]{0,})\\[EndURL\\]";// alert(sValidURLRegEx);

	oValidURLRegEx = new RegExp(sValidURLRegEx, "ig"); // create regex object with "global" attribute to replace all instances.

	sStr = sStr.replace(oValidURLRegEx, ' $1');



	// Get rid of BeginURL tags that don't have corresponding EndURL tags

	sValidURLRegEx = "\\[BeginURL\\]([^\\[\\]]{0,})$";// alert(sValidURLRegEx);

	oValidURLRegEx = new RegExp(sValidURLRegEx, "ig"); // create regex object with "global" attribute to replace all instances.

	sStr = sStr.replace(oValidURLRegEx, '$1');



	sValidURLRegEx = "\\[BeginURL\\]([^\\[\\]]{0,}) ";// alert(sValidURLRegEx);

	oValidURLRegEx = new RegExp(sValidURLRegEx, "ig"); // create regex object with "global" attribute to replace all instances.

	sStr = sStr.replace(oValidURLRegEx, '$1 ');



	sStr = sStr.replace(/(\[BeginURL\])/ig, '<a href="');

	sStr = sStr.replace(/\[EndURL\]/ig, '">link</a>');

	sStr = sStr.replace(/<a href="(https\:\/\/|http\:\/\/){0,0}/ig, '<a href="http://');

	sStr = sStr.replace(/http:\/\/http:\/\//ig, 'http://');

	sStr = sStr.replace(/http:\/\/https:\/\//ig, 'https://');



	sStr = sStr.replace(/<a href="([^"]{1,})">link<\/a>/ig, '<a href="$1">$1</a>');

	

	return sStr;

}

	

function getValidTLDList() { 

	// Return a pipe-delimited list of all valid ICANN top level domains.

	// TLD list last updated 10/31/2008 from http://data.iana.org/TLD/tlds-alpha-by-domain.txt

	sTLD = "AC|AD|AE|AERO|AF|AG|AI|AL|AM|AN|AO|AQ|AR|ARPA|AS|ASIA|AT|AU|AW|AX|AZ|BA|BB|BD|BE|BF|BG|BH|BI|BIZ|BJ|BM|BN|BO|BR|BS|BT|BV|BW|BY|";

	sTLD += "BZ|CA|CAT|CC|CD|CF|CG|CH|CI|CK|CL|CM|CN|CO|COM|COOP|CR|CU|CV|CX|CY|CZ|DE|DJ|DK|DM|DO|DZ|EC|EDU|EE|EG|ER|ES|ET|EU|FI|FJ|FK|FM|FO|FR|GA|GB|GD|";

	sTLD += "GE|GF|GG|GH|GI|GL|GM|GN|GOV|GP|GQ|GR|GS|GT|GU|GW|GY|HK|HM|HN|HR|HT|HU|ID|IE|IL|IM|IN|INFO|INT|IO|IQ|IR|IS|IT|JE|JM|JO|JOBS|JP|KE|KG|KH|KI|KM|";

	sTLD += "KN|KP|KR|KW|KY|KZ|LA|LB|LC|LI|LK|LR|LS|LT|LU|LV|LY|MA|MC|MD|ME|MG|MH|MIL|MK|ML|MM|MN|MO|MOBI|MP|MQ|MR|MS|MT|MU|MUSEUM|MV|MW|MX|MY|MZ|NA|NAME|";

	sTLD += "NC|NE|NET|NF|NG|NI|NL|NO|NP|NR|NU|NZ|OM|ORG|PA|PE|PF|PG|PH|PK|PL|PM|PN|PR|PRO|PS|PT|PW|PY|QA|RE|RO|RS|RU|RW|SA|SB|SC|SD|SE|SG|SH|SI|SJ|SK|SL|";

	sTLD += "SM|SN|SO|SR|ST|SU|SV|SY|SZ|TC|TD|TEL|TF|TG|TH|TJ|TK|TL|TM|TN|TO|TP|TR|TRAVEL|TT|TV|TW|TZ|UA|UG|UK|US|UY|UZ|VA|VC|VE|VG|VI|VN|VU|WF|WS|YE|YT|YU|ZA|ZM|ZW";

	

	return sTLD;

} // end function