<form name="edit_announcement" method="post" action="{SELF}">
<table width="80%" border="0" align="center" cellpadding="4" cellspacing="0" class="boxtable">
  <tr> 
    <td height="20" colspan="2" class="head">&nbsp;{LANG_SLOGIC_EDIT_ANNOUNCEMENT}</td>
  </tr>
  <tr> 
    <td height="17" width="30%" class="formfield"><b>{LANG_SLOGIC_SUBJECT}</b></td>
    <td height="17" width="70%"><input type="text" class="input"  name="subject" size="67" value="{SUBJECT}"></td>
  </tr>
    <td height="17" width="30%" class="formfield"><b>{LANG_SLOGIC_CONTENT}</b></td>
	<td height="17"><textarea name="content" cols="50" rows="5">{CONTENT}</textarea></td>
  </tr>
    <td height="17" width="30%" class="formfield"><b>{LANG_SLOGIC_SENT_DATE}</b></td>
    <td height="17"><input type="text" class="input"  name="day" size="2" maxlength="2" value="{DAY}"> - <input type="text" class="input"  name="month" size="2" maxlength="2" value="{MONTH}"> - <input type="text" class="input"  name="year" size="4" maxlength="4"  value="{YEAR}"> ({LANG_SLOGIC_ANNOUNCEMENT_YYYY})</td>
  </tr>
    <td height="17" class="formfield"><b>{LANG_SLOGIC_SHOW_DATE}</b></td>
    <td height="17">{SELECT_SHOW_DATE}</td>
  </tr>    
    <td height="17" class="formfield"><b>{LANG_SLOGIC_SHOW_TO}</b></td>
    <td height="17">{SELECT_SHOW_TO}</td>
  </tr>
  <tr>
    <td height="17" colspan="2" align="center"><input type="submit" class="button" name="submit" value="{LANG_SLOGIC_EDIT}"></td>
  </tr>
</table>
</form>