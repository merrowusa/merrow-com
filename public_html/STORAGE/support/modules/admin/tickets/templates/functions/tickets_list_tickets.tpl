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
		var ml = document.tickets_form;
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
		var ml = document.tickets_form;
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
    <td height="20" colspan="7" class="head">&nbsp;{LANG_TICKETS_LIST_TICKETS}</td>
    <td height="20" colspan="7" class="head" align="right">Show next 20 tickets starting at ticket: <input type="text" class="input"  name="limit" size="4"><input type="hidden" name="tpl" value="tickets_list_tickets"><input type="hidden" name="lang" value="{LANG}"><input type="hidden" name="order_table" value="tickets"> <input type="submit" class="button" name="submit" value="Go!"></td>
  </tr>
  <tr>
    <td height="17" colspan="7"><b>{FIRST}</b></td>
    <td height="17" colspan="7" align="right"><b>{LAST} </b></td>
  </tr>
  <tr>
    <td height="17" colspan="7"><b>{PREVIOUS}</b></td>
    <td height="17" colspan="7" align="right"><b>{NEXT}</b></td>
  </tr>
</form>
<form name="tickets_form" method="post" action="{SELF}">
  <tr>
    <td height="17" width="3%" valign="bottom" align="center"><b>{LANG_TICKETS_ID}</b><br>&nbsp;{ORDER_ID}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_ID_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="8%" valign="bottom" align="center"><b>{LANG_TICKETS_USER}</b><br>&nbsp;{ORDER_USER}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_USER_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="8%" valign="bottom" align="center"><b>{LANG_TICKETS_STAFF}</b><br>&nbsp;{ORDER_STAFF}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_STAFF_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="5%" valign="bottom" align="center"><b>{LANG_TICKETS_PRIORITY}</b><br>&nbsp;{ORDER_PRIORITY}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_PRIORITY_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="8%" valign="bottom" align="center"><b>{LANG_TICKETS_CATEGORY}</b><br>&nbsp;{ORDER_CATEGORY}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_CATEGORY_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="25%" valign="bottom" align="center"><b>{LANG_TICKETS_SUBJECT}</b><br>&nbsp;{ORDER_SUBJECT}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_SUBJECT_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="5%" valign="bottom" align="center"><b>{LANG_TICKETS_STATUS}</b><br>&nbsp;{ORDER_STATUS}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_STATUS_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="10%" valign="bottom" align="center"><b>{LANG_TICKETS_SENTDATE}</b><br>&nbsp;{ORDER_SENTDATE}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_SENTDATE_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="10%" valign="bottom" align="center"><b>{LANG_TICKETS_LAST_UPDATE}</b><br>&nbsp;{ORDER_LAST_UPDATE}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_LAST_UPDATE_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="5%" valign="bottom" align="center"><b>{LANG_TICKETS_WHO_UPDATED}</b>&nbsp;{ORDER_WHO_UPDATED}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_WHO_UPDATED_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="5%" valign="bottom" align="center"><b>{LANG_TICKETS_CLOSE_VERIFIED}</b><br>&nbsp;{ORDER_CLOSE_VERIFIED}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_CLOSE_VERIFIED_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" align="center" valign="bottom" width="3%"><b>{LANG_SLOGIC_EDIT}</b></td>
    <td height="17" align="center" width="5%">{DELETE_BUTTON}<br> <input type="checkbox" class="checkbox" name="delete_all" title="{LANG_SLOGIC_STAFF_DELETE_ALL}" onclick="toggle_all(this)">({LANG_SLOGIC_ANNOUNCEMENTS_ALL})</td>
  </tr>
<TICKET>
  <tr class="subhead">
  	<td height="17">{ID}</td>  
  	<td height="17">{USER}</td>
    <td height="17">{STAFF}</td>
    <td height="17">{PRIORITY}</td>
    <td height="17">{CATEGORY}</td>
    <td height="17">{SUBJECT}</td>
    <td height="17">{STATUS}</td>
    <td height="17">{SENTDATE}</td>
    <td height="17">{LAST_UPDATE}</td>
    <td height="17" align="center">{WHO_UPDATED}</td>
    <td height="17" align="center">{CLOSE_VERIFIED}</td>
    <td height="17" align="center">{EDIT}</td>
    <td height="17" align="center">{DELETE}</td>
  </tr>
</TICKET>
<NO_TICKETS>
  <tr class="subhead"> 
    <td height="17" colspan="14">{LANG_TICKETS_LIST_TICKETS_NO_TICKETS}</td>
  </tr>
</NO_TICKETS>
</table>
</form>