<form name="dump_form" method="post" action="{SELF}">
<table border="0" width="90%" cellpadding="4" cellspacing="0" align="center" class="boxtable">
  <tr> 
    <td height="20" class="head" align="center" colspan="2">{LANG_SLOGIC_MAINTENANCE_DUMP_FORM}</td>
  </tr>
  <tr> 
    <td height="17">{LANG_SLOGIC_MAINTENANCE_DUMP} (~{DUMP_SIZE}kb)</td>
    <td height="17">
      <input type="radio" style="border:none" name="dump" value="mysqldump"> MySQLDUMP <i>(Note: doesn't work on all systems!)</i>{DUMP_CHMOD}<br>
      <input type="radio" style="border:none" name="dump" value="dump_download" checked> Download dump file<br>
      <input type="radio" style="border:none" name="dump" value="dump_file"> Dump to file {DUMP_CHMOD}
    </td>
  </tr>
  <tr>
    <td height="17" align="center" colspan="2"><input type="submit" class="button" name="Submit" value="{LANG_SLOGIC_MAINTENANCE_DUMP_SUBMIT}">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" class="button" name="Reset" value="{LANG_SLOGIC_RESET}"></td>
  </tr>
</table>
</form>