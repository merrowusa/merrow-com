<script language="JavaScript" type="text/javascript">
<!--
function PopWindow()
{
window.open('<?php echo($GLOBALS['conf']['modules']['osTicket']['realurl']); ?>help.php','help','width=400,height=250,menubar=no,scrollbars=no,toolbar=no,location=yes,directories=no,resizable=no,top=200,left=300');
}
//-->
</script>
<style type="text/css">
A { color:#006699; text-decoration: none; }
A:hover { color:#DB8606; text-decoration: none; }

td {
	FONT-FAMILY: Arial,Helvetica,sans-serif;
	font-size: 12px;
	color: #3E3E3E;
	text-decoration: none;
	border: none;
}

.inputsubmit {  
	font-family: Arial, Helvetica, sans-serif; 
	font-size: 11px; 
	background-color: #DB8606; 
	color: #FFFFFF;
	border: #666666; 
	border-style: solid;
 	border-top-width: 1px; 
	border-right-width: 1px; 
	border-bottom-width: 1px; 
	border-left-width: 1px
}

.inputsubmit2 {  
	font-family: Arial, Helvetica, sans-serif; 
	font-size: 11px; 
	background-color: #FFFFFF; 
	color: #006699;
	border: #FFFFFF; 
	border-style: solid;
 	border-top-width: 1px; 
	border-right-width: 1px; 
	border-bottom-width: 1px; 
	border-left-width: 1px
}

.barTxt {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #666666;
	text-decoration: none;
	border: none;
}

.error {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FF0000;
	text-decoration: none;
	border: none;
	font-weight: bold;
}

textarea { width: 100%; }
.mainTable { background-color: #F4FAFF; }
.mainTableAlt { background-color: #FFFFFF; }
.mainTableOn { background-color: #FFFFF0; }
.TableHeader { background-color: #E9E9E9; }
.TableMsg { background-color: #ADADAD; }
.TableHeaderText { color: #FFFFFF; font-size: 11px; font-weight: none; }
.TableInfoText { color: #000000; font-size: 11px; background-color: #FFFFFF; }
.priLow { background-color: #DDFFDD; }
.priNormal { background-color: #FFFFF0; }
.priHigh { background-color: #FEE7E7; }
.privReceived { background-color: #3669CF; color: #3E3E3E; }
.privBox { background-color: #FFFFFF; }
.privBorder { background-color: Black; }
.privAttachments { background-color: #94C7FF; }
.msgReceived { background-color: #E9E9E9; color: #3E3E3E; font-size: 10px; }
.msgAnswered { background-color: #FFE0B3; color: #3E3E3E; font-size: 10px; }
.msgAttachments { background-color: #F4FAFF; color: #000000; font-size: 10px; }
.msgBorder { background-color: #ADADAD; }
.msgBorderInfo { background-color: #ffffff; }
.msgBox { background-color: #F9F9F9; }
</style>
</head>
<center>
<table bgcolor="#cccccc" cellspacing="1" cellpadding="1"><tr><td bgcolor="#ffffff">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr><td><a href="<?php echo($GLOBALS['conf']['modules']['osTicket']['url']); ?><?=$page?>"><img src="<?php echo($GLOBALS['conf']['modules']['osTicket']['realurl']); ?>images/logo.jpg" alt="Main" border="0"></a></td></tr>
  <tr><td bgcolor="#999999"><img src="<?php echo($GLOBALS['conf']['modules']['osTicket']['realurl']); ?>images/spacer.gif" width="1" height="2"></td></tr>
  <tr><td align="right" class="TableHeader">
    <table cellpadding="0" cellspacing="3" border="0" class="barTxt">
    <tr>
<td><a class="barTxt" href="<?php echo($GLOBALS['conf']['modules']['osTicket']['url']); ?><?=$page?>"><img src="<?php echo($GLOBALS['conf']['modules']['osTicket']['realurl']); ?>images/arrow.gif" border="0"></a></td>
 <td><a class="barTxt" href="<?php echo($GLOBALS['conf']['modules']['osTicket']['url']); ?><?=$page?>">Main</a></td>
<td><a class="barTxt" href="JavaScript:PopWindow()"><img src="<?php echo($GLOBALS['conf']['modules']['osTicket']['realurl']); ?>images/arrow.gif" border="0"></a></td>
 <td><a class="barTxt" href="JavaScript:PopWindow()">Help</a>
<td><a class="barTxt" href="<?php echo($GLOBALS['conf']['modules']['osTicket']['url']); ?>open.php"><img src="<?php echo($GLOBALS['conf']['modules']['osTicket']['realurl']); ?>images/arrow.gif" border="0"></a></td>
  <td><a class="barTxt" href="<?php echo($GLOBALS['conf']['modules']['osTicket']['url']); ?>open.php">New Ticket</a></td>
<td><a class="barTxt" href="<?php echo($GLOBALS['conf']['modules']['osTicket']['url']); ?>view.php"><img src="<?php echo($GLOBALS['conf']['modules']['osTicket']['realurl']); ?>images/arrow.gif" border="0"></a></td>
   <td><a class="barTxt" href="<?php echo($GLOBALS['conf']['modules']['osTicket']['url']); ?>view.php">View Ticket</a></td><?if ($login) {?>
<td><?if (!$config[search_disp]) {?><a class="barTxt" href="<?php echo($GLOBALS['conf']['modules']['osTicket']['url']); ?>search.php"><img src="<?php echo($GLOBALS['conf']['modules']['osTicket']['realurl']); ?>images/arrow.gif" border="0"></a></td>
 <td><a class="barTxt" href="<?php echo($GLOBALS['conf']['modules']['osTicket']['url']); ?>search.php">Search</a></td><?}?>
<td><a class="barTxt" href="<?php echo($GLOBALS['conf']['modules']['osTicket']['url']); ?><?=$page?>&a=logout"><img src="<?php echo($GLOBALS['conf']['modules']['osTicket']['realurl']); ?>images/arrow.gif" border="0"></a></td>
 <td><a class="barTxt" href="<?php echo($GLOBALS['conf']['modules']['osTicket']['url']); ?><?=$page?>&a=logout">Logout</a><?}?></td></tr>
    </table>
  </td></tr>
</table>

<table bgcolor="#FFFFFF" width="100%" cellpadding="10" cellspacing="0" border="0" align="center">
	<tr>
		<td align="center">
