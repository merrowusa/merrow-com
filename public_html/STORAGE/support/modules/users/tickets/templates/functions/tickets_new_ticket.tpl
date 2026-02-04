<script language="JavaScript">
<!--
function empty_subject()
{
	if(document.new_ticket_form.subject.value=="{SUBJECT}")
	{
		document.new_ticket_form.subject.value="";
	}
}	

function empty_content()
{
	if(document.new_ticket_form.content.value=="{CONTENT}")
	{
		document.new_ticket_form.content.value="";
	}
}	
-->
</script>
<form enctype="multipart/form-data" name="new_ticket_form" method="post" action="{SELF}">
<table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" class="boxtable">
  <tr> 
    <td height="20" colspan="2" class="head" align="center">&nbsp;{LANG_TICKETS_NEW_TICKET}</td>
  </tr>
  <tr> 
    <td height="17" class="formfield">&nbsp;{LANG_TICKETS_SELECT_PRIORITY}</td>
  </tr>
  <tr> 
	<td height="17">{PRIORITY}</td>
  </tr>
  <tr>
    <td height="17" class="formfield">&nbsp;{LANG_TICKETS_SELECT_CATEGORY}</td>
  </tr>
  <tr> 
    <td height="17">{CATEGORY}</td>
  </tr>
  <tr>
    <td height="17" class="formfield">&nbsp;{LANG_TICKETS_ENTER_SUBJECT}</td>
  </tr>
  <tr> 
    <td height="17"><input type="text" class="input"  name="subject" size="50" maxlength="150" value="{SUBJECT}" onmousedown="empty_subject()"></td>
  </tr>
  <tr>
    <td height="17" valign="top" class="formfield">&nbsp;{LANG_TICKETS_ENTER_CONTENT}</td>
  </tr>
  <tr> 
    <td height="17"><textarea name="content" rows="9" cols="80" onmousedown="empty_content()">{CONTENT}</textarea></td>
  </tr>
  <tr>
    <td height="17" class="formfield">&nbsp;{LANG_TICKETS_ADD_ATTACHMENT}</td>
  </tr>
  <tr> 
    <td height="17"><input type="file" class="input"  name="attachment" size="35"> <input class="button" type="submit" name="Submit" value="Upload!"></td>
  </tr>
  <tr>
    <td height="17" class="formfield">&nbsp;{LANG_TICKETS_CURRENT_ATTACHMENTS}</td>
  </tr>
  <tr> 
    <td height="17">{ATTACHMENTS}</td>
  </tr>
  <tr>
    <td colspan="2" height="17">
      <table width="100%" border="0">
        <tr>
		  <td height="17" align="center"><input type="submit" name="Submit" value="{LANG_TICKETS_SUBMIT}" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="Reset" value="{LANG_TICKETS_RESET}" class="button"></td>
        </tr>
      </table>
      {HIDDEN}
      </form>
    </td>
  </tr>
</table>