<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<!-- script to color code the js code in the page -->
 <script type="text/javascript" src="http://merrow.com/cephei/scripts/jquery-base.js"></script>
 <script>
 $(document).ready(function(){

//Code for example A
$("input.buttonAsize").click(function(){ alert($("div.contentToChange").find("p").size()); });
//show code example A
$("a.codeButtonA").click(function(){$("pre.codeA").toggle()});

//Code for example B
$("input.buttonBslidedown").click(function(){ $("div.contentToChange").find("p.fourthparagraph:hidden").slideDown("slow"); });
$("input.buttonBslideup").click(function(){ $("div.contentToChange").find("p.fourthparagraph:visible").slideUp("slow"); });
//show code example B
$("a.codeButtonB").click(function(){$("pre.codeB").toggle()});

//Code for example C
$("input.buttonCAdd").click(function(){$("div.contentToChange").find("p").not(".alert").append("<strong class=\"addedtext\">&nbsp;This text was just appended to this paragraph</strong>")});
$("input.buttonCRemove").click(function(){$("strong.addedtext").remove()});
//show code example C
$("a.codeButtonC").click(function(){$("pre.codeC").toggle()});

//Code for example D
$("input.buttonDhide").click(function(){ $("div.contentToChange").find("p.fifthparagraph").hide("slow"); });
//show code example D
$("a.codeButtonD").click(function(){$("pre.codeD").toggle()});

//Code for example E
$("input.buttonEitalics").click(function(){ $("div.contentToChange").find("em").css({color:"#993300", fontWeight:"bold"}); });
//show code example E
$("a.codeButtonE").click(function(){$("pre.codeE").toggle()});

//Code for example F
$("input.buttonFaddclass").click(function(){ $("p.firstparagraph").addClass("changeP"); });
$("input.buttonFremoveclass").click(function(){ $("p.firstparagraph").removeClass("changeP"); });
//show code example F
$("a.codeButtonF").click(function(){$("pre.codeF").toggle()});

//Code for example G
$("input.buttonGyellowfade").click(function(){ $("div.contentToChange").find("p").not(".alert").bind("mouseover",addFade); });
//show code example G
$("a.codeButtonG").click(function(){$("pre.codeG").toggle()});


function easeInOut(minValue,maxValue,totalSteps,actualStep,powr) {
	var delta = maxValue - minValue;
	var stepp = minValue+(Math.pow(((1 / totalSteps)*actualStep),powr)*delta);
	return Math.ceil(stepp)
}

function addFade() {
		doBGFade(this,[255,255,100],[255,255,255],'transparent',75,20,4);
	}
	
function doBGFade(elem,startRGB,endRGB,finalColor,steps,intervals,powr) {
	if (elem.bgFadeInt) window.clearInterval(elem.bgFadeInt);
	var actStep = 0;
	elem.bgFadeInt = window.setInterval(
		function() {
			elem.style.backgroundColor = "rgb("+
				easeInOut(startRGB[0],endRGB[0],steps,actStep,powr)+","+
				easeInOut(startRGB[1],endRGB[1],steps,actStep,powr)+","+
				easeInOut(startRGB[2],endRGB[2],steps,actStep,powr)+")";
			actStep++;
			if (actStep > steps) {
			elem.style.backgroundColor = finalColor;
			window.clearInterval(elem.bgFadeInt);
			}
		}
		,intervals)
}


});
</script>
<style type="text/css">
<!--
/* ----- Uncomment the global selector below to over-ride the default margin and padding added to all tags  ----- */

*{padding: 0; margin: 0;}

/* ----- global default/initial styles ----- */
body {background-color:#fff; margin: 20px; padding: 0;height:100%}

/* ----- base default font size, type, and line height ----- */
html body{font: 62.5%/1.4em Arial, Helvetica, sans-serif;color:#333333;}
html>body{font: 62.5%/1.4em Arial, Helvetica, sans-serif;color:#333333;}
html {height:100%}

/* ----- add selectors here for font sizing ----- */
.alert{font-size: 1.1em}
p, table, ul, dl {font-size: 1.2em}
code {font-size: 1.4em}
h2 {font-size: 1.6em}

/* ----- base links ----- */
a:link {color: #CC6633;}
a:visited {color: #CC6633;}
a:hover {color: #999966;}
a:active {color: #CC6633;}
a:focus{color: #CC6633;}

h2{padding-top:20px;}
p {line-height:1.4em;margin-right:10px;}
div.contentToChange p {margin:10px 30px 10px 30px;}
ul li {display:inline}
hr{margin:10px 0;}

pre {
border: 1px solid black;
border-color: #BBB #DDD #DDD #BBB;
margin:5px 10px 0 0;
padding: 1em;
line-height: 1.5;
background: white;
overflow: auto;
display:none;
}

code{color:#000000}

.javascript .comment {
		color:#999999;
	}

	.javascript .string{
		color:blue;
	}

	.javascript .keywords {
		color:#blue;
		font-weight:bold;
	}

	.javascript .global {
		color : #0000FF;
	}

	.javascript .brackets {
		color:#FF0000;
	}

.changeP{
	color: #FFFFFF;
	border: 2px solid #CC6633;
	position: absolute;
	z-index: 1;
	width: 150px;
	left: 0px;
	top: 0px;
	background-color: #CC6633;
	padding:10px;
	line-height:1.4em;
}
.alert {
	font-weight: bold;
	color: #FFFFFF;
	background-color: #FF0000;
	padding: 10px;
	text-transform:uppercase;
}

.addedtext{
color:#FF0000;
}

-->
</style>

<title>JQuery</title>
</head>

<body>

<p><a href="http://codylindley.com/Javascript/241/jquery-to-the-rescue">What is this?</a></p>

<div style="float:left;width:40%;height:100%">

<h2>Column 1:</h2>

<hr size="1" noshade="noshade" color="#e8e8e8" />

<p><strong>Example A</strong></p>
<p>Get number of paragraphs in column 2 and display that number in an alert box. Including the one in the red box.</p>
<input type="button" value="# of Paragraphs" class="buttonAsize" />
<a href="#" class="codeButtonA">Show&nbsp;/&nbsp;Hide jquery code</a>
<pre class="codeA"><code class="javascript">//Code for example A
$("input.buttonAsize").click(function(){ alert($("div.contentToChange").find("p").size()); });
//show code example A
$("a.codeButtonA").click(function(){$("pre.codeA").toggle()});
</code></pre>

<hr size="1" noshade="noshade" color="#e8e8e8" />

<p><strong>Example B</strong></p>
<p>Animate a paragraph in Column 2 by using a slide animation.</p>

<input type="button" value="Slide Out" class="buttonBslideup" />
<input type="button" value="Slide In" class="buttonBslidedown" />
<a href="#" class="codeButtonB">Show&nbsp;/&nbsp;Hide jquery code</a>
<pre class="codeB"><code class="javascript">//Code for example B
$("input.buttonBslidedown").click(function(){ $("div.contentToChange").find("p.fourthparagraph:hidden").slideDown("slow"); });
$("input.buttonBslideup").click(function(){ $("div.contentToChange").find("p.fourthparagraph:visible").slideUp("slow"); });
//show code example B
$("a.codeButtonB").click(function(){$("pre.codeB").toggle()});
</code></pre>

<hr size="1" noshade="noshade" color="#e8e8e8" />

<p><strong>Example C</strong></p>
<p>Add/Remove text from the end of all &lt;p&gt; elements in column 2 except the paragraph in the red box.</p>

<input type="button" value="Add" class="buttonCAdd" />
<input type="button" value="Remove" class="buttonCRemove" />
<a href="#" class="codeButtonC">Show&nbsp;/&nbsp;Hide jquery code</a>
<pre class="codeC"><code class="javascript">//Code for example C
$("input.buttonCAdd").click(function(){$("div.contentToChange").find("p").not(".alert").append("&lt;strong class=\"addedtext\"&gt;&nbsp;This text was just appended to this paragraph&lt;/strong&gt;")});
$("input.buttonCRemove").click(function(){$("strong.addedtext").remove()});
//show code example C
$("a.codeButtonC").click(function(){$("pre.codeC").toggle()});
</code></pre>

<hr size="1" noshade="noshade" color="#e8e8e8" />

<p><strong>Example D</strong></p>

<p>Remove paragraph with fade and animation.</p>
<input type="button" value="Remove" class="buttonDhide" />
<a href="#" class="codeButtonD">Show&nbsp;/&nbsp;Hide jquery code</a>
<pre class="codeD"><code class="javascript">//Code for example D
$("input.buttonDhide").click(function(){ $("div.contentToChange").find("strong").hide("slow"); });
//show code example D
$("a.codeButtonD").click(function(){$("pre.codeD").toggle()});
</code></pre>

<hr size="1" noshade="noshade" color="#e8e8e8" />

<p><strong>Example E</strong></p>
<p>Change the font weight and color of all Italic text in column 2 by adding CSS properties and values to all &lt;em&gt; elements.</p>

<input type="button" value="Change Italics" class="buttonEitalics" />
<a href="#" class="codeButtonE">Show&nbsp;/&nbsp;Hide jquery code</a>
<pre class="codeE"><code class="javascript">//Code for example E
$("input.buttonEitalics").click(function(){ $("div.contentToChange").find("em").css({color:"#993300", fontWeight:"bold"}); });
//show code example E
$("a.codeButtonF").click(function(){$("pre.codeF").toggle()});
</code></pre>

<hr size="1" noshade="noshade" color="#e8e8e8" />

<p><strong>Example F</strong></p>
<p>Change the CSS on the first paragraph in Column 2 by adding a class value to the &lt;p&gt; element. Adding this new class value to the first p element will place the paragraph in a absolute position box in the upper left hand corner.</p>

<input type="button" value="Add Class" class="buttonFaddclass" />
<input type="button" value="Remove Class" class="buttonFremoveclass" />
<a href="#" class="codeButtonF">Show&nbsp;/&nbsp;Hide jquery code</a>
<pre class="codeF"><code class="javascript">//Code for example F
$("input.buttonFaddclass").click(function(){ $("p.firstparagraph").addClass("changeP"); });
$("input.buttonFremoveclass").click(function(){ $("p.firstparagraph").removeClass("changeP"); });
//show code example F
$("a.codeButtonF").click(function(){$("pre.codeF").toggle()});
</code></pre>

<hr size="1" noshade="noshade" color="#e8e8e8" />

<p><strong>Example G</strong></p>
<p>Add a yellow fade to each paragraph in column 2 (except text in red box) on mouseover. Must mouse over paragraphs to see yellow fade.</p>
<input type="button" value="Add Mouseover Fade" class="buttonGyellowfade" />
<a href="#" class="codeButtonG">Show&nbsp;/&nbsp;Hide jquery code</a>

<pre class="codeG"><code class="javascript">//Code for example G
$("input.buttonGyellowfade").click(function(){ $("div.contentToChange").find("p").not(".alert").bind("mouseover",addFade); });
//show code example G
$("a.codeButtonG").click(function(){$("pre.codeG").toggle()});


function easeInOut(minValue,maxValue,totalSteps,actualStep,powr) {
	var delta = maxValue - minValue;
	var stepp = minValue+(Math.pow(((1 / totalSteps)*actualStep),powr)*delta);
	return Math.ceil(stepp)
}

function addFade() {
		doBGFade(this,[255,255,100],[255,255,255],'transparent',75,20,4);
	}
	
function doBGFade(elem,startRGB,endRGB,finalColor,steps,intervals,powr) {
	if (elem.bgFadeInt) window.clearInterval(elem.bgFadeInt);
	var actStep = 0;
	elem.bgFadeInt = window.setInterval(
		function() {
			elem.style.backgroundColor = "rgb("+
				easeInOut(startRGB[0],endRGB[0],steps,actStep,powr)+","+
				easeInOut(startRGB[1],endRGB[1],steps,actStep,powr)+","+
				easeInOut(startRGB[2],endRGB[2],steps,actStep,powr)+")";
			actStep++;
			if (actStep > steps) {
			elem.style.backgroundColor = finalColor;
			window.clearInterval(elem.bgFadeInt);
			}
		}
		,intervals)
}
</code></pre>

<hr size="1" noshade="noshade" color="#e8e8e8" />

</div>


<div style="float:right;width:60%;height:100%;background-color:#e8e8e8;min-height:900px" class="contentToChange">
<h2 style="margin-left:30px;">Column 2:</h2>

<p class="alert">Use the buttons to the left in the examples to run JQuery code on the structural markup below. Showing the code for each example will display the javascript required for the input buttons, the changes to the structural markup below, and the hide / show feature in the examples.</p> 

<p class="firstparagraph">Lorem ipsum <em>dolor</em> sit amet, consectetuer <em>adipiscing</em> elit, sed diam nonummy nibh euismod <em>tincidunt</em> ut laoreet dolore magna aliquam erat <strong>volutpat</strong>. Ut wisi enim ad minim <em>veniam</em>, quis nostrud exerci <strong>tation</strong> ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

<p class="secondparagraph">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse <strong>molestie</strong> consequat, vel illum <strong>dolore</strong> eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer <strong>adipiscing</strong> elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
<p class="thridparagraph">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <em>commodo</em> consequat. Duis autem vel eum iriure dolor in hendrerit in <em>vulputate</em> velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te <strong>feugait</strong> nulla facilisi.</p>

<p class="fourthparagraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, <strong>quis</strong> nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
Duis autem vel eum iriure dolor in <em>hendrerit</em> in vulputate velit <em>esse</em> molestie consequat, vel illum dolore eu feugiat nulla <strong>facilisis</strong> at vero eros et accumsan et <em>iusto</em> odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te <strong>feugait</strong> nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh <strong>euismod</strong> tincidunt ut laoreet <em>dolore</em> magna aliquam erat volutpat.</p>

<p class="fifthparagraph">Lorem ipsum <em>dolor</em> sit amet, consectetuer <em>adipiscing</em> elit, sed diam nonummy nibh euismod <em>tincidunt</em> ut laoreet dolore magna aliquam erat <strong>volutpat</strong>. Ut wisi enim ad minim <em>veniam</em>, quis nostrud exerci <strong>tation</strong> ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

<p class="sixthparagraph">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse <strong>molestie</strong> consequat, vel illum <strong>dolore</strong> eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer <strong>adipiscing</strong> elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

</div>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-162561-1";
urchinTracker();
</script>

</body>
</html>
