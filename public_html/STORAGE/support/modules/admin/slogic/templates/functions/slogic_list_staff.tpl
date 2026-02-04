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
		var ml = document.staff_form;
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
		var ml = document.staff_form;
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
    <td height="20" colspan="3" class="head">&nbsp;{LANG_SLOGIC_LIST_STAFF}</td>
    <td height="20" colspan="3" class="head" align="right">Show next 20 staff starting at row: <input type="text" class="input"  name="limit" size="4"><input type="hidden" name="tpl" value="slogic_list_staff"><input type="hidden" name="lang" value="{LANG}"><input type="hidden" name="order_table" value="staff"> <input type="submit" class="button" name="submit" value="Go!"></td>
  </tr>
  <tr>
    <td height="17" colspan="3"><b>{FIRST}</b></td>
    <td height="17" colspan="3" align="right"><b>{LAST} </b></td>
  </tr>
  <tr>
    <td height="17" colspan="3"><b>{PREVIOUS}</b></td>
    <td height="17" colspan="3" align="right"><b>{NEXT}</b></td>
  </tr>
</form>
<form name="staff_form" method="post" action="{SELF}">
  <tr>
    <td height="17"><b>{LANG_SLOGIC_USERNAME}</b>&nbsp;{ORDER_USERNAME}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_USERNAME_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="30%"><b>{LANG_SLOGIC_EMAIL}</b>&nbsp;{ORDER_EMAIL}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_EMAIL_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="15%"><b>{LANG_SLOGIC_GET_EMAIL}</b>&nbsp;{ORDER_GET_EMAIL}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_GET_EMAIL_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="10%"><b>{LANG_SLOGIC_LANGUAGE}</b>&nbsp;{ORDER_LANGUAGE}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_LANGUAGE_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" align="center" width="10%"><b>{LANG_SLOGIC_EDIT}</b></td>
    <td height="17" align="center" width="15%">{DELETE_BUTTON} <input type="checkbox" class="checkbox" name="delete_all" title="{LANG_SLOGIC_STAFF_DELETE_ALL}" onclick="toggle_all(this)">({LANG_SLOGIC_ANNOUNCEMENTS_ALL})</td>
  </tr>
<STAFF>
  <tr class="subhead">
    <td height="17">{USERNAME}</td>
    <td height="17">{EMAIL}</td>
    <td height="17" align="center">{GET_EMAIL}</td>
    <td height="17" align="center">{LANGUAGE}</td>
    <td height="17" align="center">{EDIT}</td>
    <td height="17" align="center">{DELETE}</td>
  </tr>
</STAFF>
<NO_STAFF>
  <tr class="subhead"> 
    <td height="17" colspan="6">{LANG_SLOGIC_LIST_STAFF_NO_STAFF}</td>
  </tr>
</NO_STAFF>
</table>
</form>