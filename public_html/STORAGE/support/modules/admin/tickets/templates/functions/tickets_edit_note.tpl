<form name="ticket" method="post" action="{SELF}">
<table width="60%" border="0" align="center" cellpadding="4" cellspacing="0" class="boxtable">
  <tr> 
    <td height="20" colspan="2" class="head">&nbsp;{LANG_TICKETS_EDIT_NOTE}</td>
  </tr>
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_TICKET_ID}</b></td>
    <td height="17"><input type="text" class="input"  name="ticket_id" size="15" value="{TICKET_ID}"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_SENDER}</b></td>
    <td height="17"><input type="text" class="input"  name="sender" size="15" value="{SENDER}"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_CONTENT}</b></td>
    <td height="17"><textarea name="content" cols="40" rows="4">{CONTENT}</textarea></td>
  </tr>    
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_SENT_DATE}</b></td>
    <td height="17"><input type="text" class="input"  name="sent_date" size="20" value="{SENT_DATE}"></td>
  </tr>    
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_SHOW_TO}</b></td>
    <td height="17">{SELECT_SHOW_TO}</td>
  </tr>    
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_WHO_IS}</b></td>
    <td height="17">{SELECT_WHO_IS}</td>
  </tr>    
  <tr>
    <td height="17" colspan="2" align="center"><input type="submit" class="button" name="submit" value="{LANG_TICKETS_EDIT_NOTE}"></td>
  </tr>
</table>
</form>