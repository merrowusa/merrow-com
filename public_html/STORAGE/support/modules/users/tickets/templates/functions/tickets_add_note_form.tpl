<form enctype="multipart/form-data" name="new_note_form" method="post" action="{SELF}">
<table width="70%" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr> 
    <td height="20" class="head" align="center">&nbsp;{LANG_TICKETS_ADD_NOTE}</td>
  </tr>
  <tr>
    <td height="17" align="center"><br><textarea name="content" rows="9" cols="80"></textarea></td>
  </tr>
  <tr>
    <td height="17" align="center" class="formfield">&nbsp;{LANG_TICKETS_ADD_ATTACHMENT} <input type="file" class="input"  name="attachment" size="35"> <input type="submit" name="Submit" value="Upload!" class="button"></td>
  </tr>
  <tr>
    <td height="17" align="center" class="formfield">{LANG_TICKETS_CLOSE_TICKET_VERIFY} <input type="checkbox" class="checkbox" name="close_verified" value="yes" {CLOSE_CHECK}> <b>{LANG_TICKETS_YES}</b></td>
  </tr>
   <tr>
    <td height="17" align="center"><input type="submit" name="Submit" value="{LANG_TICKETS_SUBMIT}" class="button"></td>
  </tr>
</table>
</form>