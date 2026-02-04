<form name="users" method="post" action="{SELF}">
<table width="80%" border="0" align="center" cellpadding="4" cellspacing="0" class="boxtable">
  <tr> 
    <td height="20" colspan="2" class="head">&nbsp;{LANG_SLOGIC_ADD_USER}</td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="30%"><b>{LANG_SLOGIC_USERNAME}</b></td>
    <td height="17" width="70%"><input type="text" class="input"  name="username" size="25"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="30%"><b>{LANG_SLOGIC_PASSWORD}</b></td>
    <td height="17"><input type="text" class="input"  name="password" size="25"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="30%"><b>{LANG_SLOGIC_EMAIL}</b></td>
    <td height="17"><input type="text" class="input"  name="email" size="40"></td>
  </tr>    
  <tr> 
    <td height="17" class="formfield" width="30%"><b>{LANG_SLOGIC_DOMAIN}</b></td>
    <td height="17"><input type="text" class="input"  name="domain" size="40"></td>
  </tr>    
  <tr> 
    <td height="17" class="formfield" width="30%"><b>{LANG_SLOGIC_ACT_USERNAME}</b></td>
    <td height="17"><input type="text" class="input"  name="act_username" size="25"></td>
  </tr>    
  <tr> 
    <td height="17" class="formfield" width="30%"><b>{LANG_SLOGIC_ACT_SERVER}</b></td>
    <td height="17"><input type="text" class="input"  name="act_server" size="25"></td>
  </tr>    
  <tr> 
    <td height="17" class="formfield" width="30%"><b>{LANG_SLOGIC_GET_EMAIL}</b></td>
    <td height="17">
      <select name="get_email">
        <option value="yes">{LANG_SLOGIC_YES}</option>
        <option value="no">{LANG_SLOGIC_NO}</option>
      </select>
    </td>
  </tr>    
  <tr> 
    <td height="17" class="formfield"><b>{LANG_SLOGIC_LANGUAGE}</b></td>
    <td height="17">{LANGUAGE}</td>
  </tr>
  <tr>
    <td height="17" colspan="2" align="center"><input type="submit" class="button" name="submit" value="{LANG_SLOGIC_ANNOUNCEMENT_SUBMIT}"></td>
  </tr>
</table>
</form>