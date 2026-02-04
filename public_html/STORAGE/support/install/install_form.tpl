<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Support Logic - Install Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="install/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
<div align="center">
<table width="50%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
        	<tr>
    	      	<td><img src="install/logo.gif" width="250" height="46" border="0"></td>
	        </tr>
		</table>
		</td>
	</tr>
</table>
<table width="50%" border="0" cellspacing="0" cellpadding="2">
	<tr> 
		<td>
		<form name="config_form" method="post" action="install.php">
		<table border="0" width="100%" cellpadding="6" cellspacing="0" align="center" class="boxtable">
			<tr>
				<td height="20" class="head" align="center" colspan="2">Support Logic - Installation</td>
			</tr>
			<tr>
				<td height="17" colspan="2">Please make sure that the config.php file is set to chmod 666 before submitting any data!</td>
			</tr>
			<tr>
				<td height="17" class="formfield">Session management by</td>
				<td height="17">
				<select name="session_management">
					<option value="database">Database (default)</option>
					<option value="files">Files</option>
	      		</select>
				</td>
			</tr>
			<tr>
				<td height="17" class="formfield">Session expiration (in sec.)</td>
				<td height="17"><input type="text" name="session_timeout" value="600" size="30"></td>
			</tr>
			<tr>
				<td height="17" class="formfield">Cookie expiration (in sec.)</td>
				<td height="17"><input type="text" name="cookie_timeout" value="360000" size="30"></td>
			</tr>
			<tr>
				<td height="17" class="formfield">Database</td>
				<td height="17">
				<select name="sql_module">
					<option value="mysql">mysql</option>
				</select>
				</td>
			</tr>
			<tr>
				<td height="17" class="formfield">Debug Mode</td>
				<td height="17">
				<select name="debug_mode">
					<option value="on">On</option>
					<option value="off">Off</option>
				</select>
				</td>
			</tr>
			<tr>
				<td height="17" class="formfield">Script-Path<b><span style="color:red">*</span></b> <span style="font-weight: normal">Example: /home/username/public_html/slogic1.1/</span></td>
				<td height="17"><input type="text" name="script_path" size="30"></td>
			</tr>
			<tr>
				<td height="17" class="formfield">Script-URL<b><span style="color:red">*</span></b> <span style="font-weight: normal"> Example: http://www.support-logic.com/slogic1.1/</span></td>
				<td height="17"><input type="text" name="script_url" size="30"></td>
			</tr>
			<tr>
				<td height="17" class="formfield">Database Server<b><span style="color:red">*</span></b></td>
				<td height="17"><input type="text" name="db_host" value="localhost" size="30"></td>
			</tr>
			<tr>
				<td height="17" class="formfield">Database User<b><span style="color:red">*</span></b></td>
				<td height="17"><input type="text" name="db_user" size="30"></td>
			</tr>
			<tr>
				<td height="17" class="formfield">Database Password<b><span style="color:red">*</span></b></td>
				<td height="17"><input type="text" name="db_pass" size="30"></td>
			</tr>
			<tr>
				<td height="17" class="formfield">Database Name<b><span style="color:red">*</span></b></td>
				<td height="17"><input type="text" name="db_database" size="30"></td>
			</tr>
			<tr>
				<td height="17" class="formfield">Initial Ticket no.</td>
				<td height="17"><input type="text" name="initial_ticket_no" size="30"></td>
			</tr>
			<tr>
				<td height="17" class="formfield">Allowed HTML-Tags <span style="font-weight: normal">(in tickets, notes and announcements content)</span><b><span style="color:red">*</span></b></td>
				<td height="17"><input type="text" name="allowed_tags" size="30" value="<a><b><img>"></td>
			</tr>
			<tr>
				<td height="17" class="formfield">Default Language</td>
				<td height="17">
				<select name="default_language">
					<option value="en" selected>en</option>
					<option value="de">de</option>
				</select>
				</td>
			</tr>
			<tr>
				<td height="17" class="formfield">Email Alert</td>
				<td height="17">
				<select name="slogic_send_alert">
					<option value="TRUE">Activated</option>
					<option value="FALSE">Deactivated</option>
				</select>
				</td>
			</tr>
			<tr>
				<td height="17" class="formfield">Email Sender<b><span style="color:red">*</span></b></td>
				<td height="17"><input type="text" name="slogic_email_from" size="30"></td>
			</tr>
			<tr>
				<td height="17" class="formfield">Send emails via</td>
				<td height="17">
				<select name="slogic_send_email">
					<option value="smtp">SMTP</option>
					<option value="mail">php mail()</option>
				</select>
				</td>
			</tr>
			<tr>
				<td height="17" class="formfield">User account creation via email pipe</td>
				<td height="17">
				<select name="slogic_pipe_auto_user">
					<option value="yes">yes</option>
					<option value="no">no</option>
				</select>
				</td>
			</tr>
			<tr>
				<td height="17" class="formfield">Administrator Username<b><span style="color:red">*</span></b></td>
				<td height="17"><input type="text" name="admin_username" size="30"></td>
			</tr>
			<tr>
				<td height="17" class="formfield">Administrator Password<b><span style="color:red">*</span></b></td>
				<td height="17"><input type="text" name="admin_password" size="30"></td>
			</tr>
			<tr>
				<td height="17" class="formfield">Administrator Email<b><span style="color:red">*</span></b></td>
				<td height="17"><input type="text" name="admin_email" size="30"></td>
			</tr>
			<tr>
				<td height="17" width="100%" align="center" colspan="2"><br>&nbsp;&nbsp;<input class="button" type="submit" name="Submit" value="Save Config!">&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" type="reset" name="Reset" value="Reset Form">&nbsp;&nbsp;<br>&nbsp;</td>
			</tr>
		</table>
		</form>
		</td>
	</tr>
</table>
<table width="50%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td height="17" class="cright"><div align="center">Copyright Support Logic 2002 - 2003</div></td>
	</tr>
</table>
</div>
</body>
</html>