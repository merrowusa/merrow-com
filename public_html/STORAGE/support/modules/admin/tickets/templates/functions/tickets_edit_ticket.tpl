<form name="ticket" method="post" action="{SELF}">
<table width="80%" border="0" align="center" cellpadding="4" cellspacing="0" class="boxtable">
  <tr> 
    <td height="20" colspan="2" class="head">&nbsp;{LANG_TICKETS_EDIT_TICKET}</td>
  </tr>
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_USER}</b></td>
    <td height="17"><input type="text" class="input"  name="user" size="20" value="{USER}"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_STAFF}</b></td>
    <td height="17"><input type="text" class="input"  name="staff" size="20" value="{STAFF}"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_PRIORITY}</b></td>
    <td height="17">{SELECT_PRIORITY}</td>
  </tr>    
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_CATEGORY}</b></td>
    <td height="17">{SELECT_CATEGORY}</td>
  </tr>    
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_SUBJECT}</b></td>
    <td height="17"><input type="text" class="input"  name="subject" size="60" value="{SUBJECT}"></td>
  </tr>
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_CONTENT}</b></td>
    <td height="17"><textarea name="content" cols="45" rows="4">{CONTENT}</textarea></td>
  </tr>    
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_STATUS}</b></td>
    <td height="17">{SELECT_STATUS}</td>
  </tr>    
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_SENTDATE}</b></td>
    <td height="17"><input type="text" class="input"  name="sentdate" size="20" value="{SENTDATE}"></td>
  </tr>    
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_LAST_UPDATE}</b></td>
    <td height="17"><input type="text" class="input"  name="last_update" size="20" value="{LAST_UPDATE}"></td>
  </tr>    
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_WHO_UPDATED}</b></td>
    <td height="17">{SELECT_WHO_UPDATED}</td>
  </tr>    
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_CLOSE_VERIFIED}</b></td>
    <td height="17">{SELECT_CLOSE_VERIFIED}</td>
  </tr>    
  <tr> 
    <td height="17" class="formfield"><b>{LANG_TICKETS_PIPE_ID}</b></td>
    <td height="17"><input type="text" class="input"  name="pipe_id" size="15" value="{PIPE_ID}"></td>
  </tr>    
  <tr>
    <td height="17" colspan="2" align="center"><input type="submit" class="button" name="submit" value="{LANG_TICKETS_EDIT_TICKET}"></td>
  </tr>
</table>
</form>