		<form name="login_form" method="post" action="{SCRIPT_URL}admin.php">
		<table width="100%" border="0" cellspacing="0" cellpadding="2">
	  		<tr> 
				<td>
				<table border="0" align="center" cellpadding="4" cellspacing="0" class="boxtable" width="400">
					<tr> 
						<td height="20" colspan="2" class="head">Please login to your account:</td>
					</tr>
			        <tr>
						<td height="17" class="formfield"><br><b>Username:</b></td>
						<td height="17"><br><input type="text" class="input"  name="login_user"></td>
					</tr>
					<tr>
						<td height="17" class="formfield"><b>Password:</b></td>
						<td height="17"><input type="password" class="input"  name="login_pass"></td>
					</tr>
					<tr> 
						<td height="17"><i>Set cookie?</i></td>
						<td height="17">
						<table border="0" width="100%">
							<tr>
								<td><input type="checkbox" class="checkbox" style="border:none" name="set_cookie" value="1" style="border:none"></td>
								<td align="right"><font size=-2><a href="{SCRIPT_URL}cookie_info.htm">[Info]</a></font></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td height="17">{HIDDEN}</td>
						<td height="17" align="right"><input type="submit" class="button" name="Submit" value="log in" class="button"></td>
					</tr>
					<tr>
						<td height="17" colspan="2">{WRONG_LOGIN}</td>
					</tr>
					</table>
				</form></td>
			</tr>
		</table>
		