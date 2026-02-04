<%
'ASP Form Processor
Dim datafile, redirectpage
datafile=Request.Form("filesave")
redirectpage=Request.Form("redirpage")
Dim fso, f
Set fso=Server.CreateObject("Scripting.FileSystemObject")
Set f=fso.OpenTextFile(Server.MapPath(datafile), 8, True)
f.WriteLine "*************************************************************"
f.WriteBlankLines(1)
f.WriteLine "IP : " & Request.ServeVariables("REMOTE_ADDR")
f.WriteLine "Date : " & CStr(Date)
For Each field in Request.Form
If field<>"filesave" And field<>"redirpage" Then
f.WriteLine field & " : " & Request.Form(field)
End If
Next
f.WriteBlankLines(1)
f.WriteLine "*************************************************************"
f.WriteBlankLines(1)
f.Close
Set f=Nothing
Set fso=Nothing
Response.Redirect redirpage
%>



