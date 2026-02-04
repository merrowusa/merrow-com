<script>
    function highlight(e)
    {
	var r = null;
	if (e.parentNode && e.parentNode.parentNode) {
	    r = e.parentNode.parentNode;
	}
	else if (e.parentElement && e.parentElement.parentElement) {
	    r = e.parentElement.parentElement;
	}
	if (r) {
	    if (r.className == "reset_row") {
		r.className = "mark_row";
	    }
	}
    }

    function unhighlight(e)
    {
	var r = null;
	if (e.parentNode && e.parentNode.parentNode) {
	    r = e.parentNode.parentNode;
	}
	else if (e.parentElement && e.parentElement.parentElement) {
	    r = e.parentElement.parentElement;
	}
	if (r) {
	    if (r.className == "mark_row") {
		r.className = "reset_row";
	    }
	}
    }

    function toggle_all(e)
    {
		if (e.checked) 
		{
		    check_all();
		}
		else 
		{
		    clear_all();
		}
    }

    function toggle(e)
    {
		if (e.checked) 
		{
		    check(e);
		}
		else 
		{
		    clear(e);
		}
    }

    function check(e)
    {
		e.checked = true;
		highlight(e);
    }
    
	function check_all()
    {
		var ml = document.attachment_form;
		var len = ml.elements.length;
		for (var i = 0; i < len; i++) 
		{
		    var e = ml.elements[i];
		    if (e.name == "del[]") 
		    {
				check(e);
		    }
		}
    }

    function clear(e)
    {
		e.checked = false;
		unhighlight(e);
    }
    
    function clear_all()
    {
		var ml = document.attachment_form;
		var len = ml.elements.length;
		for (var i = 0; i < len; i++) 
		{
		    var e = ml.elements[i];
		    if (e.name == "del[]") 
		    {
				clear(e);
		    }
		}
    }
</script>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" class="stafftable">
<form name="limit_form" method="get" action="{SELF}">
  <tr> 
    <td height="20" colspan="3" class="head">&nbsp;{LANG_TICKETS_LIST_ATTACHMENTS}</td>
    <td height="20" colspan="4" class="head" align="right">Show next 20 attachments starting at row: <input type="text" class="input"  name="limit" size="4"><input type="hidden" name="tpl" value="tickets_list_attachments"><input type="hidden" name="lang" value="{LANG}"><input type="hidden" name="order_table" value="attachments"> <input type="submit" class="button" name="submit" value="Go!"></td>
  </tr>
  <tr>
    <td height="17" colspan="3"><b>{FIRST}</b></td>
    <td height="17" colspan="4" align="right"><b>{LAST} </b></td>
  </tr>
  <tr>
    <td height="17" colspan="3"><b>{PREVIOUS}</b></td>
    <td height="17" colspan="4" align="right"><b>{NEXT}</b></td>
  </tr>
</form>
<form name="attachment_form" method="post" action="{SELF}">
  <tr>
    <td height="17"><b>{LANG_TICKETS_TICKET_ID}</b>&nbsp;{ORDER_TICKET_ID}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_TICKET_ID_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17"><b>{LANG_TICKETS_FILENAME}</b>&nbsp;{ORDER_FILENAME}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_FILENAME_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17"><b>{LANG_TICKETS_FILETYPE}</b>&nbsp;{ORDER_FILETYPE}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_FILETYPE_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17"><b>{LANG_TICKETS_FILESIZE}</b>&nbsp;{ORDER_FILESIZE}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_FILESIZE_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17"><b>{LANG_TICKETS_USER}</b>&nbsp;{ORDER_USER}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_USER_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17"><b>{LANG_TICKETS_SENT_DATE}</b>&nbsp;{ORDER_SENT_DATE}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_SENT_DATE_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" align="center">{DELETE_BUTTON} <input type="checkbox" class="checkbox" name="delete_all" title="{LANG_SLOGIC_STAFF_DELETE_ALL}" onclick="toggle_all(this)">({LANG_SLOGIC_ANNOUNCEMENTS_ALL})</td>
  </tr>
<ATTACHMENT>
  <tr class="subhead">
    <td height="17">{TICKET_ID}</td>
    <td height="17">{FILENAME}</td>
    <td height="17">{FILETYPE}</td>
    <td height="17">{FILESIZE}</td>
    <td height="17">{USER}</td>
    <td height="17">{SENT_DATE}</td>
    <td height="17" align="center">{DELETE}</td>
  </tr>
</ATTACHMENT>
<NO_ATTACHMENTS>
  <tr class="subhead"> 
    <td height="17" colspan="7">{LANG_TICKETS_LIST_ATTACHMENTS_NO_ATTACHMENTS}</td>
  </tr>
</NO_ATTACHMENTS>
</table>
</form>