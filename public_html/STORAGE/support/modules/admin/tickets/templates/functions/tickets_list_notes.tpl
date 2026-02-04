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
		var ml = document.notes_form;
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
		var ml = document.notes_form;
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
    <td height="20" colspan="4" class="head">&nbsp;{LANG_TICKETS_LIST_NOTES}</td>
    <td height="20" colspan="4" class="head" align="right">Show next 20 notes starting at row: <input type="text" class="input"  name="limit" size="4"><input type="hidden" name="tpl" value="tickets_list_notes"><input type="hidden" name="lang" value="{LANG}"><input type="hidden" name="order_table" value="notes"> <input type="submit" class="button" name="submit" value="Go!"></td>
  </tr>
  <tr>
    <td height="17" colspan="4"><b>{FIRST}</b></td>
    <td height="17" colspan="4" align="right"><b>{LAST} </b></td>
  </tr>
  <tr>
    <td height="17" colspan="4"><b>{PREVIOUS}</b></td>
    <td height="17" colspan="4" align="right"><b>{NEXT}</b></td>
  </tr>
</form>
<form name="notes_form" method="post" action="{SELF}">
  <tr>
    <td height="17"><b>{LANG_TICKETS_NOTES_ID}</b>&nbsp;{ORDER_ID}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_ID_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17"><b>{LANG_TICKETS_TICKET_ID}</b>&nbsp;{ORDER_TICKET_ID}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_TICKET_ID_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17"><b>{LANG_TICKETS_SENDER}</b>&nbsp;{ORDER_SENDER}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_SENDER_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17"><b>{LANG_TICKETS_SENT_DATE}</b>&nbsp;{ORDER_SENT_DATE}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_SENT_DATE_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17"><b>{LANG_TICKETS_SHOW_TO}</b>&nbsp;{ORDER_SHOW_TO}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_SHOW_TO_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17"><b>{LANG_TICKETS_WHO_IS}</b>&nbsp;{ORDER_WHO_IS}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_WHO_IS_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" align="center"><b>{LANG_SLOGIC_EDIT}</b></td>
    <td height="17" align="center">{DELETE_BUTTON} <input type="checkbox" class="checkbox" name="delete_all" title="{LANG_SLOGIC_STAFF_DELETE_ALL}" onclick="toggle_all(this)">({LANG_SLOGIC_ANNOUNCEMENTS_ALL})</td>
  </tr>
<NOTE>
  <tr class="subhead">
  	<td height="17">{ID}</td>  
  	<td height="17">{TICKET_ID}</td>
    <td height="17">{SENDER}</td>
    <td height="17">{SENT_DATE}</td>
    <td height="17">{SHOW_TO}</td>
    <td height="17">{WHO_IS}</td>
    <td height="17" align="center">{EDIT}</td>
    <td height="17" align="center">{DELETE}</td>
  </tr>
</NOTE>
<NO_NOTES>
  <tr class="subhead"> 
    <td height="17" colspan="8">{LANG_TICKETS_LIST_NOTES_NO_NOTES}</td>
  </tr>
</NO_NOTES>
</table>
</form>