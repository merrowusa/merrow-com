		<br><form name="login_form" method="post" action="{SCRIPT_URL}staff.php">
		<table border="0" align="center" cellpadding="4" cellspacing="0" class="boxtable" width="400">
			<tr> 
				<td height="20" colspan="2" class="head">Please login to your account:</td>
			</tr>
			<tr>
				<td height="17" class="formfield" width="50%" align="right"><br><b>Username:</b></td>
				<td height="17" width="50%"><br><input type="text" class="input"  name="login_user"></td>
			</tr>
			<tr>
				<td height="17" class="formfield" width="50%" align="right"><b>Password:</b></td>
				<td height="17" width="50%"><input type="password" class="input"  name="login_pass"></td>
			</tr>
			<tr> 
				<td height="17" width="50%" align="right"><i>Set cookie?</i></td>
				<td height="17" width="50%">
				<table border="0" width="100%">
					<tr>
						<td width="50%" align="center"><input type="checkbox" class="checkbox" name="set_cookie" value="1" style="border:none"></td>
						<td align="right"><font size=-2><a href="{SCRIPT_URL}cookie_info.htm">[Info]</a></font></td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td height="17">{HIDDEN}</td>
				<td height="17" align="center"><input type="submit" name="Submit" value="log in" class="button"></td>
			</tr>
			<tr>
				<td height="17" colspan="2">{WRONG_LOGIN}</td>
			</tr>
		</table>
		</form>
		