<form name="priority" method="post" action="{SELF}">
<table width="80%" border="0" align="center" cellpadding="4" cellspacing="0" class="boxtable">
  <tr> 
    <td height="20" colspan="2" class="head">&nbsp;{LANG_TICKETS_ADD_PRIORITY}</td>
  </tr>
  <tr> 
    <td height="17" class="formfield" width="30%"><b>{LANG_TICKETS_URGENCY_LEVEL}</b></td>
    <td height="17" width="70%"><input type="text" class="input"  name="urgency_level" size="30"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_NAME}</b></td>
    <td height="17"><input type="text" class="input"  name="name" size="30"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_INFO}</b></td>
    <td height="17"><input type="text" class="input"  name="info" size="50"></td>
  </tr>    
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_SEND_ALERT}</b></td>
    <td height="17"><select name="send_alert"><option value="no">{LANG_SLOGIC_NO}</option><option value="yes">{LANG_SLOGIC_YES}</option></select></td>
  </tr>    
  <tr>
    <td height="17" colspan="2" align="center"><input type="submit" class="button" name="submit" value="{LANG_SLOGIC_ANNOUNCEMENT_SUBMIT}"></td>
  </tr>
</table>
</form>