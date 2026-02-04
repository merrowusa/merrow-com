<%
  set mailer = server.createobject("SMTPsvg.Mailer")

  Mailer.FromName = "From Your Website"
  Mailer.FromAddress = "info@merrow.com"
  Mailer.RemoteHost = "smtp.merrow.com"
  Mailer.AddRecipient "Subject for email", "you@youremailaddress"
  Mailer.Subject = "Subject line"

  For ix = 1 to Request.Form.Count 
  fieldName = Request.Form.Key(ix) 
  fieldValue = Request.Form.Item(ix) 
  strMsgInfo = strMsgInfo & fieldName & ": " & fieldValue & vbCrLf 
  next 
    
  strMsgHeader = "Form information follows" & vbCrLf & "*************"
  strMsgFooter = vbCrLf & "*************"
  Mailer.BodyText = strMsgHeader & strMsgInfo & strMsgFooter

  if Mailer.SendMail then
     ' Message sent Ok, redirect to a confirmation page
     Response.Redirect ("http://yourwebsite.com/confirm.htm")
  else
     ' Message send failure
     Response.Write ("An error has occurred.<BR>")
     ' Send error message
     Response.Write ("The error was " & Mailer.Response)
  end if
%>
