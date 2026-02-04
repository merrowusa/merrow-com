<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{$conf.company} - Live Support Solution (Powered By Help Center Live)</title>
<meta http-equiv="Content-Type" content="text/html; charset={$lang.charset}" />
<link href="{$conf.url}/templates/{$conf.template}/css/chat.css" rel="stylesheet" type="text/css" />
</head>
<body{$onload}>
{if $visitor == 'true'}
<div align="center">
<table cellspacing="0" cellpadding="0" width="100%" class="bg">
  <tr>
    <td>
      <table width="100%" cellspacing="0" cellpadding="0" class="chat_bg">
        <tr>
          <td><img src="{$conf.url}/templates/{$conf.template}/images/logo/popup.jpg" alt="" /></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</div>
<div align="center" id="content">
{if $display == 'default'}
{$end_message}<br />
<br />
<br />
<form action="{$conf.url}/live/chat/end.php?chatid={$chatid}" method="post">
<table cellspacing="0" cellpadding="0" width="80%" class="list">
  <tr class="alt">
    <td align="center">{$lang.email_transcript}</td>
  </tr>
  <tr>
    <td style="padding: 10px;" align="center">{$lang.email}: <input type="text" name="email" /></td>
  </tr>
</table>
<br />
<input type="submit" value="{$lang.send}" name="submit" />
</form>
<br />
<br />
<a href="{$conf.url}/live/chat/end.php?print&chatid={$chatid}">{$lang.print_transcript}</a>
{elseif $display == 'print'}
<table cellspacing="0" cellpadding="0" class="list" width="100%">
  <tr class="main">
    <td width="100">{$lang.nick}: </td>
    <td>{$nick}</td>
  </tr>
  <tr>
    <td>{$lang.operator}: </td>
    <td>{$operator}</td>
  </tr>
  <tr class="main">
    <td>{$lang.department}: </td>
    <td>{$department}</td>
  </tr>
  <tr>
    <td>{$lang.email}: </td>
    <td>{$email}</td>
  </tr>
  <tr class="main">
    <td>{$lang.time}: </td>
    <td>{$time}</td>
  </tr>
  <tr>
    <td colspan="2">
      {$chat}
    </td>
  </tr>
</table>
{elseif $display == 'email'}
<table cellspacing="0" cellpadding="0" width="80%">
  <tr>
    <td align="center">{$lang.sent_transcript}</td>
  </tr>
</table>
{/if}
</div>
{/if}
</body>
</html>