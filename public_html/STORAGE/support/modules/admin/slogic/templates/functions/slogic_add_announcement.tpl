<form name="add_announcement" method="post" action="{SELF}">
<table width="80%" border="0" align="center" cellpadding="4" cellspacing="0" class="boxtable">
  <tr> 
    <td height="20" colspan="2" class="head">&nbsp;{LANG_SLOGIC_ADD_ANNOUNCEMENT}</td>
  </tr>
  <tr> 
    <td height="17" width="30%" class="formfield"><b>{LANG_SLOGIC_SUBJECT}</b></td>
    <td height="17" width="70%"><input type="text" class="input"  name="subject" size="67"></td>
  </tr>
    <td height="17" width="30%" class="formfield"><b>{LANG_SLOGIC_CONTENT}</b></td>
	<td height="17"><textarea name="content" cols="50" rows="5"></textarea></td>
  </tr>
    <td height="17" width="30%" class="formfield"><b>{LANG_SLOGIC_SENT_DATE}</b></td>
    <td height="17"><input type="text" class="input"  name="day" size="2" maxlength="2"> - <input type="text" class="input"  name="month" size="2" maxlength="2"> - <input type="text" class="input"  name="year" size="4" maxlength="4"> ({LANG_SLOGIC_ANNOUNCEMENT_YYYY})</td>
  </tr>
    <td height="17" class="formfield"><b>{LANG_SLOGIC_SHOW_DATE}</b></td>
    <td height="17">
      <select name="show_date">
        <option value="now">{LANG_SLOGIC_ANNOUNCEMENT_NOW}</option>
        <option value="equal">{LANG_SLOGIC_ANNOUNCEMENT_EQUAL}</option>
        <option value="equal_up">{LANG_SLOGIC_ANNOUNCEMENT_EQUAL_UP}</option>
        <option value="never">{LANG_SLOGIC_ANNOUNCEMENT_NEVER}</option>
      </select>
    </td>
  </tr>    
    <td height="17" class="formfield"><b>{LANG_SLOGIC_SHOW_TO}</b></td>
    <td height="17">
      <select name="show_to">
        <option value="both">{LANG_SLOGIC_ANNOUNCEMENT_BOTH}</option>
        <option value="users">{LANG_SLOGIC_ANNOUNCEMENT_USERS}</option>
        <option value="staff">{LANG_SLOGIC_ANNOUNCEMENT_STAFF}</option>
      </select>
    </td>
  </tr>
  <tr>
    <td height="17" colspan="2" align="center"><input type="submit" class="button" name="submit" value="{LANG_SLOGIC_ANNOUNCEMENT_SUBMIT}"></td>
  </tr>
</table>
</form>