<form enctype="multipart/form-data" name="new_note_form" method="post" action="{SELF}">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr> 
    <td height="20" class="head" align="center">&nbsp;{LANG_TICKETS_ADD_NOTE}</td>
  </tr>
  <tr>
    <td height="17" align="center"><textarea name="content" rows="9" cols="80"></textarea></td>
  </tr>
  <tr>
    <td height="17" align="center">&nbsp;{LANG_TICKETS_ADD_ATTACHMENT} <input type="file" class="input"  name="attachment" size="35"> <input type="submit" name="Submit" class="button" value="Upload!"></td>
  </tr>
  <tr>
    <td height="17" align="center">{SHOW_QUICK_REPLIES}</td>
  </tr>
  <tr>
    <td height="17" align="center">
      <table>
        <tr>
    	  <td>{LANG_TICKETS_CLOSE_TICKET_VERIFY}</td>
    	  <td><input type="checkbox" class="checkbox" name="close_verified" value="yes" {CLOSE_CHECK}> {LANG_TICKETS_YES}</td>
    	</tr>
    	<tr>
    	  <td>{LANG_TICKETS_STAFF_TO_STAFF}</td>
    	  <td><input type="checkbox" class="checkbox" name="show_to" value="staff"> {LANG_TICKETS_YES}</td>
    	</tr>
      </table>
    </td>
  </tr>
   <tr>
    <td height="17" align="center"><input class="button" type="submit" name="Submit" value="{LANG_TICKETS_SUBMIT}"></td>
  </tr>
</table>
</form>