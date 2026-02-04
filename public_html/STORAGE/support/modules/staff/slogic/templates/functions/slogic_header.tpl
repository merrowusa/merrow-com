<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>{TITLE}</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="{SCRIPT_URL}modules/staff/slogic/templates/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
<div align="center">
<!-- Staff section header -->
	<!-- 	
			- For help and advice in customising the helpdesk page headers, please visit the Support Logic website at http://www.support-logic.com or email marie@support-logic.com
			- Quick tips:
				- If you want to place the helpdesk in a 'wrapper' based on your existing website layout, place the opening part of the wrapper in the comments below, and the closing section in footer.php
				- If you want to change the table width, edit the width property of the first table tag 
				- If you want to replace the Support Logic logo with your own image, edit the image src, width and height properties where prompted in the source comments below
				- Do not edit anything after the Support Logic logo, or you may end up with no Support Logic menus!
	-->

<!-- Begin user header -->
<!-- *** Add your website header or the opening section of your website wrapper here *** -->
<!-- End user header -->

<!-- SL Staff Header begins - edit at your own risk! -->
<table width="760" border="0" cellspacing="0" cellpadding="2" class="maintable">
	<tr>
		<td>
		<table width="100%" border="0" cellspacing="0" cellpadding="2">
			<tr>
				<td><a href="{SCRIPT_URL}staff.php">
			<!-- Support Logic logo - change src, width and height if you would like to replace with your own image -->
				<img src="{SCRIPT_URL}modules/staff/slogic/templates/logo.gif" width="250" height="46" border="0">
				</a></td>
			</tr>
			<tr>
				<td align="right">
				<table border="0" cellspacing="0" cellpadding="3" class="boxtable">
             		<tr>
               			<td height="20" class="head"> &raquo; Shortcuts </td>
              		</tr>
              		<tr>
			        	<td>{TICKETS_JUMPER}{SLOGIC_SELECT_LANGUAGE}</td>
		        	</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td align="left" colspan="2">{SLOGIC_NAV_MAIN}</td>
			</tr>
		</table>
		<br>&nbsp;<br>
		<div align="center">
		<table width="95%" border="0" cellpadding="4" cellspacing="0">
	  		<tr>
				<td>
				<!-- SL Staff content begins -->