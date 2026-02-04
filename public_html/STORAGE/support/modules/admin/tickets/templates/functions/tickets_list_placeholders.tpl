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
		var ml = document.placeholders_form;
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
		var ml = document.placeholders_form;
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
    <td height="20" colspan="1" class="head">&nbsp;{LANG_TICKETS_LIST_PLACEHOLDERS}</td>
    <td height="20" colspan="3" class="head" align="right">Show next 20 placeholders starting at row: <input type="text" class="input"  name="limit" size="4"><input type="hidden" name="tpl" value="tickets_list_placeholders"><input type="hidden" name="lang" value="{LANG}"><input type="hidden" name="order_table" value="placeholders"> <input class="button" type="Submit" name="submit" value="Go!"></td>
  </tr>
  <tr> 
    <td height="17" colspan="2"><b>{FIRST}</b></td>
    <td height="17" colspan="2" align="right"><b>{LAST} </b></td>
  </tr>
  <tr> 
    <td height="17" colspan="2"><b>{PREVIOUS}</b></td>
    <td height="17" colspan="2" align="right"><b>{NEXT}</b></td>
  </tr>
</form>
<form name="placeholders_form" method="post" action="{SELF}">
  <tr> 
    <td height="17" width="32%"><b>{LANG_TICKETS_FIND_MATCH}</b>&nbsp;{ORDER_URGENCY_LEVEL}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_URGENCY_LEVEL_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" width="32%"><b>{LANG_TICKETS_REPLACE_WITH}</b>&nbsp;{ORDER_NAME}{LANG_TICKETS_ARROW_DOWN}</a>&nbsp;{ORDER_NAME_DESC}{LANG_TICKETS_ARROW_UP}</a></td>
    <td height="17" align="center" width="11%"><b>{LANG_SLOGIC_EDIT}</b></td>
    <td height="17" align="center" width="15%">{DELETE_BUTTON} <input type="checkbox" class="checkbox" name="delete_all" title="{LANG_SLOGIC_STAFF_DELETE_ALL}" onclick="toggle_all(this)">({LANG_SLOGIC_ANNOUNCEMENTS_ALL})</td>
  </tr>
<PLACEHOLDER>
  <tr class="subhead">
  	<td height="17">{FIND_MATCH}</td>  
  	<td height="17">{REPLACE_WITH}</td>
    <td height="17" align="center">{EDIT}</td>
    <td height="17" align="center">{DELETE}</td>
  </tr>
</PLACEHOLDER>
<NO_PLACEHOLDERS>
  <tr class="subhead"> 
    <td height="17" colspan="4">{LANG_TICKETS_LIST_PLACEHOLDERS_NO_PLACEHOLDERS}</td>
  </tr>
</NO_PLACEHOLDERS>
</table>
</form>