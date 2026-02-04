<!-- INSTRUCTION 
1. REPLACE DATES WHERE SRC ="http://merrow-media.s3....." WITH NEW MAIL DATES eg. http://merrow-media.s3.amazonaws.com/mail-media/   022811   /mail_06.jpg
2. REPLACE LINKS WITH APPROPRIATE LINKS
3. PUBLISH TO MAIN DIRECTORY
4. TEST MAIL BEFORE SENDING !!!
5. REMOVE ANALYTICS FROM TEMPLATE
-->

<?php ob_start("ob_gzhandler");$scrub = $_GET['lang'];$nifty = $_COOKIE["lang"];if ( $scrub!=null) {$lang = $_GET['lang']; }elseif ($scrub = null) {$lang = '$nifty'; }if ( $scrub!=null) {setcookie("lang", "$scrub", time()+3600);} else { } include ("ip_lang_database.php"); $ap = $_GET['app']; include ('widget_sql.php');

$setup = $_GET['id'];

$result = mysql_query("SELECT * from marketing where `id` = '$setup'")
or die(mysql_error());
$mail = mysql_fetch_array($result);
$fullofwin = $mail['key_code'];

$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
?>

<html>
<head>
<title>Merrow Mail for <? echo $fullofwin; ?></title>
</head>

<!-- REMOVE ANALYTICS FOR MAIL!! --> 
<? include ('widget_analytics.php'); ?>
  
<BODY><TABLE cellpadding="0" cellspacing="0" align="center"><TR><TD><font face="Verdana, Arial, Helvetica, sans-serif" size="-2">Having trouble with images or links? 
<!-- EMAIL BROADCAST LINK --> 
<a target="_self" href="<? echo $url; ?>" class="" title="">click here</a>
<!-- END EMAIL BROADCAST LINK --> 

</font></TD></TR><TR><TD><TABLE cellSpacing=0 cellPadding=0 width=600 summary="" border=0 ><TBODY><TR ><TD ><a target="_self" href="http://merrow.com" class="" title=""><img border="0" vspace="7" hspace="0" width="121" alt="Merrow.com" 
src="http://merrow-media.s3.amazonaws.com/mail-media/<? echo $fullofwin; ?>/mail_03.gif" class="" height="24"></a></TD></TR><TR ><TD height=5 ><TABLE cellSpacing=0 cellPadding=0 width=0 summary="" border=0 ><TBODY>

<!-- TOP MENU ITEMS AND LINKS -->
<TR >
<TD vAlign=middle align=left width=170 ><a target="_self" href="http://merrow.com/" class="" title=""><font  ><font face=Verdana color=#996633 size=1   >MERROW.COM<STRONG>: <br />sewing machine catalog</STRONG></font></font></a></TD>
<TD vAlign=middle align=center width=17 ><img border="0" vspace="0px" hspace="0" width="1" alt=" " src="http://mail-assets.s3.amazonaws.com/oem_mail_102710/5-veticle_dots.gif" class="" height="17"></TD>
<TD vAlign=middle align=center width=50 ><a target="_self" href="http://merrow.com/support.html" class="" title=""><font color=#996633  ><font face="Verdana, Arial, Helvetica, sans-serif" size=1  >Support</font></font></a></TD>
<TD vAlign=middle align=center width=17 ><img border="0" vspace="0px" hspace="0" width="1" alt=" " src="http://mail-assets.s3.amazonaws.com/oem_mail_102710/5-veticle_dots.gif" class="" height="17"></TD>
<TD vAlign=middle align=center width=69 ><a target="_self" href="http://merrow.com/agent_dashboard.php" class="" title=""><font color=#996633  ><font face="Verdana, Arial, Helvetica, sans-serif" size=1  >Reseller Login</font></font></a></TD>
<TD vAlign=middle align=center width=17 ><img border="0" vspace="0px" hspace="0" width="1" alt=" " src="http://mail-assets.s3.amazonaws.com/oem_mail_102710/5-veticle_dots.gif" class="" height="17"></TD>
<TD vAlign=middle align=center width=120 ><a target="_self" href="http://merrow.com/applications/app/finishing" class="" title=""><font color=#996633  ><font face="Verdana, Arial, Helvetica, sans-serif" size=1  >Application Configurator</font></font></a></TD>
<TD vAlign=middle align=center width=17 ><img border="0" vspace="0px" hspace="0" width="1" alt=" " src="http://mail-assets.s3.amazonaws.com/oem_mail_102710/5-veticle_dots.gif" class="" height="17"></TD>
<TD vAlign=middle align=center width=77 ><a target="_self" href="http://merrow.com/needle_configurator.html" class="" title=""><font color=#996633  ><font face="Verdana, Arial, Helvetica, sans-serif" size=1  >Sewing Needles</font></font></a></TD></TR></TBODY></TABLE></TD></TR>
<TR ><TD height=12 ></TD></TR><TR ><TD ><TABLE cellSpacing=0 cellPadding=0 summary="" border=0 ><TBODY><TR ><TD vAlign=top align=left >
<!-- END TOP MENU ITEMS AND LINKS -->


<!-- TOP IMAGE LINK -->
<a target="_self" href="<? echo $mail['img_1_link']; ?>" class="" title="Main Graphic (load images to view...)">
<!-- END TOP IMAGE LINK --> 

<img border="0" vspace="0px" hspace="0" width="600" alt="merrow mail image 1" src="http://merrow-media.s3.amazonaws.com/mail-media/<? echo $fullofwin; ?>/mail_06.jpg" class="" height="420"></a></TD></TR></TBODY></TABLE></TD></TR><TR ><TD height=5 ></TD></TR><TR ><TD height=10 ></TD></TR><TR >

<TD ><TABLE cellSpacing=0 cellPadding=0 width=600 align=left summary="" border=0 >
<TBODY><TR ><TD vAlign=top width=400 ><p><font face="Verdana, Arial, Helvetica, sans-serif" size=2  ><img border="0" alt="merrow mail image 1.5" vspace="0px" align="top" height="53" src="http://merrow-media.s3.amazonaws.com/mail-media/<? echo $fullofwin; ?>/mail_09.gif" hspace="0" width="359" class=""></font></p><p><font face="Verdana, Arial, Helvetica, sans-serif" size=2  >

<!-- BODY TEXT -->
<? echo $mail['main_copy']; ?>
   
<!-- END BODY TEXT -->

</font></p><p><font face="Verdana, Arial, Helvetica, sans-serif" size=2  >
<!-- SUBHEADING LINK -->
<a target="_self" href="<? echo $mail['contact_link']; ?>" class="" title="">
<!-- SUBHEADING TEXT -->
<? echo $mail['contact_copy']; ?></a>
</font></p></TD>

<TD vAlign=top align=center width=20 ></TD><TD vAlign=top><font face="Verdana, Arial, Helvetica, sans-serif" size=1 ><a href="<? echo $mail['img_2_link']; ?>"><img border="" width="180" height="290" alt="merrow mail image 2" vspace="0px" align="left" height="" src="http://merrow-media.s3.amazonaws.com/mail-media/<? echo $fullofwin; ?>/mail_11.png" hspace="4" width="" class=""></a><p></p></font></p></TD></TR></TBODY></TABLE></TD></TR><TR ><TD height=20 ></TD></TR><TR ><TD height=10 ></TD></TR><TR ><TD ><TABLE cellSpacing=0 cellPadding=0 width=600 align=left summary="" border=0 ><TBODY><TR ><TD width=150 >

<!-- BOTTOM 2 IMAGES -->
<a target="_self" href="<? echo $mail['img_3_link']; ?>" class="" title=""><img border="0" vspace="0px" hspace="0" width="" alt="merrow mail image 3" src="http://merrow-media.s3.amazonaws.com/mail-media/<? echo $fullofwin; ?>/mail_13.gif" class="" height=""></a></TD><TD width=4 ></TD><TD width=150 ><a target="_self" href="<? echo $mail['img_4_link']; ?>" class="" title=""><img border="0" vspace="0px" hspace="0" width="" alt="merrow mail image 4" src="http://merrow-media.s3.amazonaws.com/mail-media/<? echo $fullofwin; ?>/mail_14.gif" class="" height=""></a>
<!-- END BOTTOM 2 IMAGES -->

</TD> </TR><TR ><TD height=20 ></TD></TR></TBODY></TABLE></TD></TR><TR><TD></TD></TR><TR ><TD ></TD></TR><TR ><TD height=20 ></TD></TR><TR ><TD ><TABLE cellSpacing=0 cellPadding=0 width=600 align=left summary="" border=0 ><TBODY><TR ><TD ><font face='Verdana, Arial, Helvetica, sans-serif"' size=1  >Call us any time: <STRONG  >800-431-6677</STRONG></font></TD><TD width=15 ></TD><TD width=53 ><a target="_self" href="http://www.youtube.com/user/merrowstitch?feature=mhum" class="" title=""><img border="0" width="53" alt="YouTube" src="http://mail-assets.s3.amazonaws.com/oem_mail_102710/icon_youtube.gif" class="" height="21"></a></TD><TD width=15 ></TD><TD width=63 ><a target="_self" href="http://twitter.com/merrow_machine" class="" title=""><img border="0" width="63" alt="twitter" src="http://mail-assets.s3.amazonaws.com/oem_mail_102710/icon_twitter.gif" class="" height="21"></a></TD><TD width=15 ></TD><TD width=57 ></TD></TR></TBODY></TABLE></TD></TR><TR ><TD height=15 ></TD></TR><TR ><TD ></TD></TR><TR ><TD ><p></p></TD></TR><TR ><TD height=8 ></TD></TR><TR ><TD ><font face="Verdana, Arial, Helvetica, sans-serif" size="1">* As With all Merrow products, calling us first is a great idea. We will be more than happy to provide marketing information, customer references and options for purchasing and shipping equipment. </font></TD></TR><TR ><TD height=10 ></TD></TR></TBODY></TABLE></TD></TR><TR><TD><font face="Verdana, Arial, Helvetica, sans-serif" size=-2   ><p style="width:613px;text-align:left;margin-top:15px;margin-bottom:12px;" ><font size="1" face="Arial, Helvetica, sans-serif">&copy; 2011
Merrow, All rights reserved.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*|SHARE:Twitter,Digg,reddit,StumbleUpon|* *|FACEBOOK:LIKE|*</font></p><p style="width:613px;text-align:left;margin-bottom:12px;" > <font size="1" face="Arial, Helvetica, sans-serif"> <font color="#cc0000"><STRONG>*</STRONG></font>Cannot be combined with any other offers or discounts. If
you have any questions, please call 1-800-431-6677 or email us at <a href="mailto:sales@merrow.com">sales@merrow.com</a>.</font></p> 
<p style="width:613px;text-align:left;margin-bottom:12px;" ><font size="1" face="Arial, Helvetica, sans-serif"> Merrow Sewing Machine Co. 502 Bedford St. Fall River, MA 02720.<br>  1-800-431-6677</font></p> <p style="width:613px;text-align:left;" ><font size="1" face="Arial, Helvetica, sans-serif">This email was sent to *|EMAIL|*. You can <em>instantly</em> <a href="*|UNSUB|*">Unsubscribe from these emails by clicking here.</a> </font></p> </font></TD></TR></TABLE></BODY></html>