<form name="staff" method="post" action="{SELF}">
<table width="80%" border="0" align="center" cellpadding="4" cellspacing="0" class="boxtable">
  <tr> 
    <td height="20" colspan="2" class="head">&nbsp;{LANG_SLOGIC_EDIT_STAFF}</td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="30%"><b>{LANG_SLOGIC_USERNAME}</b></td>
    <td height="17" width="70%"><input type="text" class="input"  name="username" size="25" value="{USERNAME}"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="30%"><b>{LANG_SLOGIC_PASSWORD}</b></td>
    <td height="17" width="70%"><input type="text" class="input"  name="password" size="25"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="30%"><b>{LANG_SLOGIC_EMAIL}</b></td>
    <td height="17" width="70%"><input type="text" class="input"  name="email" size="40" value="{EMAIL}"></td>
  </tr>    
  <tr> 
    <td height="17" class="formfield" width="30%"><b>{LANG_SLOGIC_SIGNATURE}</b></td>
    <td height="17" width="70%"><textarea name="signature" cols="30" rows="3">{SIGNATURE}</textarea></td>
  </tr>    
  <tr> 
    <td height="17" class="formfield" width="30%"><b>{LANG_SLOGIC_GET_EMAIL}</b></td>
    <td height="17" width="70%">{SELECT_GET_EMAIL}</td>
  </tr>    
  <tr> 
    <td height="17" class="formfield" width="30%"><b>{LANG_SLOGIC_LANGUAGE}</b></td>
    <td height="17" width="70%">{SELECT_LANGUAGE}</td>
  </tr>
  <tr>
    <td height="17" colspan="2" align="center"><input class="button" type="submit" name="submit" value="{LANG_SLOGIC_EDIT}"></td>
  </tr>
</table>
</form>