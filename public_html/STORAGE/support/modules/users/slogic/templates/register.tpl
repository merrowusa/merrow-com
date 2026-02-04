<form name="register_form" method="post" action="{SELF}">
<table width="100%" border="0" cellspacing="0" cellpadding="2">
	<tr>
		<td>{MESSAGE}
		<table border="0" align="center" cellpadding="4" cellspacing="0" class="boxtable" width="70%">
			<tr> 
				<td height="20" colspan="2" class="head" align="center">Please register a helpdesk account by filling in this form</td>
			</tr>
			<tr>
				<td height="17" colspan="2"><b>ATTENTION:</b> You will be able to use your helpdesk account immediately after submitting this form!<br>&nbsp;</td>
			</tr>
			<tr>
				<td height="17" class="title" colspan="2"><b><i>Helpdesk Account Details:</i></b></td>
			</tr>
			<tr>
				<td height="17" colspan="2">Please enter your preferred helpdesk account username and password, your email address and your default language.</td>
			</tr>
			<tr>
				<td height="17" class="formfield"><b>&nbsp;&nbsp;Username:</b></td>
				<td height="17"><input type="text" class="input"  name="register_username" value="{USERNAME}" size="15"></td>
			</tr>
			<tr>
				<td height="17" class="formfield"><b>&nbsp;&nbsp;Password:</b></td>
				<td height="17"><input type="password" class="input"  name="register_password" size="15"></td>
			</tr>
			<tr>
				<td height="17" class="formfield"><b>&nbsp;&nbsp;Email Address:</b></td>
				<td height="17"><input type="text" class="input"  name="email" value="{EMAIL}" size="30"></td>
			</tr>
			<tr>
				<td height="17" class="formfield"><b>&nbsp;&nbsp;Default Language:</b></td>
				<td height="17"><select name="language"><option value="en">English</option><option value="de">Deutsch</option></select></td>
			</tr>
			<tr>
				<td height="17" class="formfield"><b>&nbsp;&nbsp;Notify me by email:</b><br>&nbsp;&nbsp;<font size=-2>(when a staff member claims, replies to or closes your tickets, you will receive an email)</font><br>&nbsp;</td>
				<td height="17"><input type="checkbox" class="checkbox" name="get_email" value="yes"></td>
			</tr>
			<tr>
				<td height="17" class="title" colspan="2" align="left"><b><i>Hosting Account Details</i></b></td>
			</tr>
			<tr>
				<td height="17">To optimise the efficiency of our support, please provide us with the following details about your hosting account.</td>
			</tr>
			<tr>
				<td height="17" class="formfield"><b>&nbsp;&nbsp;Account Username:</b></td>
				<td height="17"><input type="text" class="input"  name="account_user" value="{ACCOUNT_USER}" size="15"></td>
			</tr>
			<tr>
				<td height="17" class="formfield"><b>&nbsp;&nbsp;Account Server:</b></td>
				<td height="17"><input type="text" class="input"  name="account_server" value="{ACCOUNT_SERVER}" size="15"></td>
			</tr>
			
			<tr>
				<td height="17" class="formfield"><b>&nbsp;&nbsp;Domain:</b></td>
				<td height="17"><input type="text" class="input"  name="domain" value="{DOMAIN}" size="30"></td>
			</tr>
			
			<tr>
				<td height="17" colspan="2" align="center">&nbsp;<br>&nbsp;<input type="submit" name="Submit" value="Register" class="button"><br>&nbsp;<br></td>
			</tr>
		</table>
		</form>
		</td>
	</tr>
</table>		