<form name="category" method="post" action="{SELF}">
<table width="80%" border="0" align="center" cellpadding="4" cellspacing="0" class="boxtable">
  <tr> 
    <td height="20" colspan="2" class="head">&nbsp;{LANG_TICKETS_EDIT_CATEGORY}</td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="30%"><b>{LANG_TICKETS_NAME}</b></td>
    <td height="17" width="70%"><input type="text" class="input"  name="name" size="40" value="{NAME}"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_INFO}</b></td>
    <td height="17"><input type="text" class="input"  name="info" size="40" value="{INFO}"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_SUBSCRIBERS}</b></td>
    <td height="17"><textarea name="subscribers" cols="30" rows="3">{SUBSCRIBERS}</textarea></td>
  </tr>    
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_EMAIL_PIPE}</b></td>
    <td height="17"><input type="text" class="input"  name="email_pipe" size="40" value="{EMAIL_PIPE}"></td>
  </tr>    
  <tr>
    <td height="17" colspan="2" align="center"><input type="submit" class="button" name="submit" value="{LANG_TICKETS_NOTE_EDIT}"></td>
  </tr>
</table>
</form>