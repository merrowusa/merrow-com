function
openVid()
{
	var opts = 'scrollbars=no,menubar=no,height=470,width=740,resizable=no,toolbar=no,location=no,status=no';
	var curUrl = new String(document.location.href);
	var langLoc = curUrl.indexOf("/files/hub/");
	langLoc += 11;

	var langCodeTwoChars = curUrl.substr(langLoc, 2).toUpperCase();
	var targetUrl = 'http://eyeview.vo.llnwd.net/o23/eBay/FullMode/Player/Player.html?Video=1&Lang=' + langCodeTwoChars;
	var load = window.open(targetUrl, '', opts);
}