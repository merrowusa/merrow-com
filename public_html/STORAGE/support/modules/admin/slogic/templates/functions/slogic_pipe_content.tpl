<form name="pipe_form" method="post" action="{SELF}">
<table border="0" width="90%" cellpadding="4" cellspacing="0" align="center" class="boxtable">
  <tr> 
    <td height="20" class="head" align="center" colspan="2">{LANG_SLOGIC_PIPE_CONTENT}</td>
  </tr>
  <tr> 
    <td height="20" class="formfield" align="center" colspan="2"><a href="{SCRIPT_URL}admin.php?tpl=slogic_reset_flood">{LANG_SLOGIC_RESET_FLOOD_ALERTS}</a></td>
  </tr>
  <tr> 
    <td height="17"  valign="top" align="right" class="formfield"><b>{LANG_SLOGIC_PIPE_NEW_USER}</b></td>
    <td height="17" >{LANG_SLOGIC_TOGGLE_EMAIL} {TOGGLE_PIPE_NEW_USER}<br><input type="text" class="input"  name="pipe_new_user_subject" value="{PIPE_NEW_USER_SUBJECT}" size="70"><br><textarea name="pipe_new_user_content" cols="50" rows="5">{PIPE_NEW_USER_CONTENT}</textarea></td>
  </tr>
  <tr> 
    <td height="17"  valign="top" align="right" class="formfield"><b>{LANG_SLOGIC_PIPE_TICKET_ERROR}</b></td>
    <td height="17" >{LANG_SLOGIC_TOGGLE_EMAIL} {TOGGLE_PIPE_TICKET_ERROR}<br><input type="text" class="input"  name="pipe_ticket_error_subject" value="{PIPE_TICKET_ERROR_SUBJECT}" size="70"><br><textarea name="pipe_ticket_error_content" cols="50" rows="5">{PIPE_TICKET_ERROR_CONTENT}</textarea></td>
  </tr>
  <tr> 
    <td height="17"  valign="top" align="right" class="formfield"><b>{LANG_SLOGIC_PIPE_NEW_TICKET_USER}</b></td>
    <td height="17" >{LANG_SLOGIC_TOGGLE_EMAIL} {TOGGLE_PIPE_NEW_TICKET_USER}<br><input type="text" class="input"  name="pipe_new_ticket_user_subject" value="{PIPE_NEW_TICKET_USER_SUBJECT}" size="70"><br><textarea name="pipe_new_ticket_user_content" cols="50" rows="5">{PIPE_NEW_TICKET_USER_CONTENT}</textarea></td>
  </tr>
  <tr> 
    <td height="17"  valign="top" align="right" class="formfield"><b>{LANG_SLOGIC_PIPE_NEW_TICKET_STAFF}</b></td>
    <td height="17" >{LANG_SLOGIC_TOGGLE_EMAIL} {TOGGLE_PIPE_NEW_TICKET_STAFF}<br><input type="text" class="input"  name="pipe_new_ticket_staff_subject" value="{PIPE_NEW_TICKET_STAFF_SUBJECT}" size="70"><br><textarea name="pipe_new_ticket_staff_content" cols="50" rows="5">{PIPE_NEW_TICKET_STAFF_CONTENT}</textarea></td>
  </tr>
  <tr> 
    <td height="17"  valign="top" align="right" class="formfield"><b>{LANG_SLOGIC_PIPE_ADD_NOTE_ERROR}</b></td>
    <td height="17" >{LANG_SLOGIC_TOGGLE_EMAIL} {TOGGLE_PIPE_ADD_NOTE_ERROR}<br><input type="text" class="input"  name="pipe_add_note_error_subject" value="{PIPE_ADD_NOTE_ERROR_SUBJECT}" size="70"><br><textarea name="pipe_add_note_error_content" cols="50" rows="5">{PIPE_ADD_NOTE_ERROR_CONTENT}</textarea></td>
  </tr>
  <tr> 
    <td height="17"  valign="top" align="right" class="formfield"><b>{LANG_SLOGIC_PIPE_ADD_NOTE_CLOSED}</b></td>
    <td height="17" >{LANG_SLOGIC_TOGGLE_EMAIL} {TOGGLE_PIPE_ADD_NOTE_CLOSED}<br><input type="text" class="input"  name="pipe_add_note_closed_subject" value="{PIPE_ADD_NOTE_CLOSED_SUBJECT}" size="70"><br><textarea name="pipe_add_note_closed_content" cols="50" rows="5">{PIPE_ADD_NOTE_CLOSED_CONTENT}</textarea></td>
  </tr>
  <tr> 
    <td height="17"  valign="top" align="right" class="formfield"><b>{LANG_SLOGIC_PIPE_ADD_NOTE_USER}</b></td>
    <td height="17" >{LANG_SLOGIC_TOGGLE_EMAIL} {TOGGLE_PIPE_ADD_NOTE_USER}<br><input type="text" class="input"  name="pipe_add_note_user_subject" value="{PIPE_ADD_NOTE_USER_SUBJECT}" size="70"><br><textarea name="pipe_add_note_user_content" cols="50" rows="5">{PIPE_ADD_NOTE_USER_CONTENT}</textarea></td>
  </tr>
  <tr> 
    <td height="17"  valign="top" align="right" class="formfield"><b>{LANG_SLOGIC_PIPE_ADD_NOTE_STAFF}</b></td>
    <td height="17" >{LANG_SLOGIC_TOGGLE_EMAIL} {TOGGLE_PIPE_ADD_NOTE_STAFF}<br><input type="text" class="input"  name="pipe_add_note_staff_subject" value="{PIPE_ADD_NOTE_STAFF_SUBJECT}" size="70"><br><textarea name="pipe_add_note_staff_content" cols="50" rows="5">{PIPE_ADD_NOTE_STAFF_CONTENT}</textarea></td>
  </tr>
  <tr> 
    <td height="17"  valign="top" align="right" class="formfield"><b>{LANG_SLOGIC_PIPE_FLOOD_REPORT}</b></td>
    <td height="17" >{LANG_SLOGIC_TOGGLE_EMAIL} {TOGGLE_PIPE_FLOOD_REPORT}<br><input type="text" class="input"  name="pipe_flood_report_subject" value="{PIPE_FLOOD_REPORT_SUBJECT}" size="70"><br><textarea name="pipe_flood_report_content" cols="50" rows="5">{PIPE_FLOOD_REPORT_CONTENT}</textarea></td>
  </tr>
  <tr>
    <td height="17" align="center" colspan="2"><input type="submit" class="button" name="submit" value="{LANG_SLOGIC_SAVE}">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" class="button" name="Reset" value="{LANG_SLOGIC_RESET}"></td>
  </tr>
</table>
</form>