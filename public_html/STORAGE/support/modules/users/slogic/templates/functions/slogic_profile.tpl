<form name="profile_form" method="post" action="{SELF}">
<table border="0" width="100%" cellpadding="4" cellspacing="0" align="center" class="boxtable">
  <tr> 
    <td height="20" class="head" align="center" colspan="2">{LANG_SLOGIC_PROFILE}</td>
  </tr>
  <tr> 
    <td height="17" colspan="2" align="center"><i>{LANG_SLOGIC_PROFILE_PASSWORD_INFO}</i></td>
  </tr>
  <tr> 
    <td height="17" class="formfield"><b>{LANG_SLOGIC_PROFILE_PASSWORD}</b></td>
    <td height="17"><input type="password" class="input"  name="password"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield"><b>{LANG_SLOGIC_PROFILE_PASSWORD_2}</b></td>
    <td height="17"><input type="password" class="input"  name="password2"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield">{LANG_SLOGIC_PROFILE_EMAIL}</td>
    <td height="17"><input type="text" class="input"  name="email" value="{EMAIL}"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield">{LANG_SLOGIC_PROFILE_DOMAIN}</td>
    <td height="17"><input type="text" class="input"  name="domain" value="{DOMAIN}"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield">{LANG_SLOGIC_PROFILE_SERVER}</td>
    <td height="17"><input type="text" class="input"  name="act_server" value="{ACT_SERVER}"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield">{LANG_SLOGIC_PROFILE_ACT_USERNAME}</td>
    <td height="17"><input type="text" class="input"  name="act_username" value="{ACT_USERNAME}"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield">{LANG_SLOGIC_PROFILE_LANGUAGE}</td>
    <td height="17"><select name="language"><option value="en">English</option><option value="de">Deutsch</option></select> (currently: {LANGUAGE})</td>
  </tr>
  <tr> 
    <td height="17" class="formfield">{LANG_SLOGIC_PROFILE_NOTIFICATION}</td>
    <td height="17"><input type="checkbox" class="checkbox" name="get_email" value="yes" {GET_EMAIL}></td>
  </tr>
  <tr>
    <td height="17" align="center" colspan="2"><input class="button" type="submit" name="Submit" value="{LANG_SLOGIC_PROFILE_SUBMIT}">&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" type="reset" name="Reset" value="{LANG_SLOGIC_RESET}"></td> 
  </tr>
</table>
</form>