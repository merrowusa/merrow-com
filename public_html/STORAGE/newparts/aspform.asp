 <%
    For Each x In Request.Form
    message=message & x & ": " & Request.Form(x) & CHR(10)
    Next
    Set smtp = Server.CreateObject("Bamboo.SMTP")
    smtp.Server = "smtp.merrow.com"
    smtp.Rcpt = "info@merrow.com"
    smtp.From = "jen@merrow.com"
    smtp.FromName = "user@YOURSERVER.com"
    smtp.Subject = "Message Recieved From Web Form"
    smtp.Message = message
    On Error Resume Next
    smtp.Send
    if err Then
    response.Write err.Description 
    else
    response.redirect "/thanks.asp"
    End if
    Set smtp = Nothing
    %>