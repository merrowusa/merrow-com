<?php
// File : danish.tutorial.php3
// Translation by Kenneth Kristiansen <kk@linuxfreak.adsl.dk>

// Get the names and values for vars sent by the script that called this one
if (isset($HTTP_GET_VARS))
{
	while(list($name,$value) = each($HTTP_GET_VARS))
	{
		$$name = $value;
	};
};
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>

<HEAD>
<TITLE>Dansk Tutorial for <?php echo(APP_NAME." - ".APP_VERSION); ?></TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<STYLE>
A.topLink
{
	text-decoration: underline;
	color: #0000C0;
}

A.topLink:hover, A.topLink:active
{
	color: #FF9900;
	text-decoration: none;
	font-weight: 800;
}

.redText
{
	font-weight: 800;
	color: #FF0000;
}
</STYLE>
</HEAD>

<BODY BGCOLOR="#CCCCFF">

<P><A NAME="top"></P>
<TABLE BORDER="5" CELLPADDING="5">
<TR>
	<TD><FONT SIZE="+2">Indholdet af denne Tutorial</FONT></TD>
</TR>
</TABLE><BR>

<P CLASS="redText">
Advarsel: Netscape brugere skal angive deres sprog som standard oversættelse ellers vil hver karakter i beskederne blive erstattet af '?'.<BR>
Dette kan gøres på følgende måde: View/CharacterSet/your language Auto-Detect, og så View/CharacterSet/SetDefault.
</P>

<?php
if (C_MULTI_LANG == "1") 
{
	?>
	<A HREF="#language" CLASS="topLink">Vælg et sprog</A><BR>
	<?php
}
?>
<A HREF="#login" CLASS="topLink">Log ind i chatten</A><BR>
<A HREF="#register" CLASS="topLink">Registrering</A><BR>
<A HREF="#modProfile" CLASS="topLink">Ændre<?php if (C_SHOW_DEL_PROF == "1") echo("/slette"); ?> din profil</A><BR>
<?php
if (C_VERSION == "2") 
{
	?>
	<A HREF="#create_room" CLASS="topLink">Oprette et rum</A><BR>
	<?php
};
if ($Ver == "H") 
{
	?>
	<A HREF="#connection_state" CLASS="topLink">Forståelsen af tilslutningstilstanden</A><BR>
	<?php
};
?>
<A HREF="#sending" CLASS="topLink">Send en besked</A><BR>
<A HREF="#users_list" CLASS="topLink">Forstå bruger listen</A><BR>
<A HREF="#exit" CLASS="topLink">Forlad chatten</A><BR>
<A HREF="#users_popup" CLASS="topLink">Vide hvem som chatter uden at logge ind</A><BR>
<P>
<A HREF="#customize" CLASS="topLink">Tilpasset chat vindue</A><BR>
<P>
<A HREF="#commands" CLASS="topLink">Egenskaber og kommandoer:</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#help" CLASS="topLink">Hjælp kommando</A><BR>
<?php
if (C_USE_SMILIES == "1")
{
	?>
	&nbsp&nbsp&nbsp&nbsp<A HREF="#smilies" CLASS="topLink">Grafiske smilies</A><BR>
	<?php
};
if (C_HTML_TAGS_KEEP != "none")
{
	?>
	&nbsp&nbsp&nbsp&nbsp<A HREF="#text" CLASS="topLink">Tekst formatering</A><BR>
	<?php
};
?>
&nbsp&nbsp&nbsp&nbsp<A HREF="#invite" CLASS="topLink">Invitere en bruger til dit chat rum</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#changeroom" CLASS="topLink">Skift fra et rum til et andet</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#private" CLASS="topLink">Private beskeder</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#actions" CLASS="topLink">Handling</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#ignore" CLASS="topLink">Ignorere andre brugere</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#whois" CLASS="topLink">Få information om andre brugere</A><BR>
<?php
if (C_SAVE != "0")
{
	?>
	&nbsp&nbsp&nbsp&nbsp<A HREF="#save" CLASS="topLink">Gemme beskeder</A><BR>
	<?php
};
?>
<P>
<A HREF="#moderator" CLASS="topLink">Specielle kommandoer for moderator og/eller administrator:</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#announce" CLASS="topLink">Send en annoncering</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#kick" CLASS="topLink">Udsmid en bruger</A><BR>
<?php
if (C_BANISH != "0")
{
	?>
	&nbsp&nbsp&nbsp&nbsp<A HREF="#banish" CLASS="topLink">Forvise en bruger</A><BR>
	<?php
};
?>
&nbsp&nbsp&nbsp&nbsp<A HREF="#promote" CLASS="topLink">Forfremme en bruger til moderator</A><BR>
<P>
<HR>
<HR>


<?php
if (C_MULTI_LANG == "1") 
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="language"><B>Vælg et sprog:</B></A></FONT>
	<P>
	Du kan vælge et sprog i hvilken <?php echo(APP_NAME); ?> er oversat til ved at klikke på et af flagene i startbillede. I det efterfølgende eksempel har en bruger valgt det franske sprog:
	<P ALIGN="center">
	<IMG SRC="images/tutorials/flags.gif" HEIGHT="44" WIDTH="424" ALT="Flag for sprog valg">
	<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
	<HR>
	<?php
}
?>

<P>
<FONT SIZE="+1"><A NAME="login"><B>Login:</B></A></FONT>
<P>
Hvis du allerede er registrede her så logges der bare ind ved at taste dit brugernavn og kodeord. Vælg dernæst hvilken chat rum du vil deltage i og tryk på chat knappen.<BR>
<?php
if (C_REQUIRE_REGISTER == "1")
{
	?>
	<P>
	Ellers er du nød til at <A HREF="#register">registrere</A> dig først.
	<?php
}
else
{
	?>
	<P>
	Eller du kan <A HREF="#register">registrere</A> dig først eller bare tilgå et chatrum hvorved at dit brugernavn ikke er reserveret og en anden kan vælge at registrere sig med det når du senere logger ud).
	<?php
}
?>
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="register"><B>Registrering:</B></A></FONT> 
<P>
Du er endnu ikke registreret<?php if (C_REQUIRE_REGISTER == "0") echo("og ønsker at blive det"); ?>, vælg venligst registreringsmuligheden. Et lille pop-up vindue vil fremkomme.
<P>	
<UL>
	<LI>Først, opret et brugernavne<?php if (!C_EMAIL_PASWD) echo(" og vælg et kodeord"); ?> for dig selv i de respektive bokse. Brugernavnet som du vælger er det som automatisk vises i chatten. Det må ikke indeholde mellemrum, komma'er eller backslashes (\).
<?php if (C_NO_SWEAR == "1") echo(" Det kan heller ikke indeholde \"afviste ord\"."); ?>
	<LI>Dernæst, indtast dit fornavn, efternavn og en gyldig e-mail adresse. For at kunne registrere skal denne information leveres. Køn muligheden er valgfri. 
	<LI>Hvis du har en website kan du skrive URL'en i boksen.
	<LI>Sprog boksen gør det nemmere for andre brugere at kende dine egenskaber så angiv her hvilken sprog du vil kommunikere på.
	<LI>Sidst, hvis du ønsker at din e-mail adresse skal være synlig for alle i chatten, så afkryds boksen ved siden af "vis e-mail". Hvis du
ikke ønsker at den skal være offentligt kendt så undlad og afkrydse her.
	<LI>Og nu, Klik registrer knappen og din konto vil blive oprettet. Du kan til enhver tid stoppe ved at trykke på lukke knappen og undlade at registrere dig.
</UL>
<P>
<A NAME="modProfile"></A>Og ja, registrerede brugere har mulighed for at ændre <?php if (C_SHOW_DEL_PROF == "1") echo("/ slette"); ?> deres egen profil ved at klikke på det respektive <?php echo((C_SHOW_DEL_PROF == "0" ? "link" : "links")); ?>.<BR>
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>
<HR>

<?php
if (C_VERSION == "2") 
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="create_room"><B>Oprette et rum:</B></A></FONT> 
	<P>
	Registrerede brugere kan oprette chat rums. Private rum kan kun tilgås af brugere som kender dens navn og vil aldrig blive vist bortset fra brugere som er i den.<BR>
	<P>
	Rummet navn må ikke indeholde komma'er eller backslash (\).<?php if (C_NO_SWEAR == "1") echo(" Kan heller ikke indeholde \"bandlyste ord\"."); ?>
	<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
	<P>
	<HR>
	<?php
};
if ($Ver == "H")
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="connection_state"><B>Forståelse af tilslutningstilstanden:</B></A></FONT> 
	<P>
	En blinkene cirkel, repræsenterende din tilslutningstilstand er vist i øverste højre hjørne af browseren. Denne kan have tre forskellige udseende :
	<P>	
	<UL>
		<LI><IMG SRC="images/connectOff.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="Ingen forbindelse"> når ingen forbindelse er nødvendig ;
		<LI><IMG SRC="images/connectOn.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="Forbindelse"> når en forbindelse er undervejs ;
		<LI><IMG SRC="images/connectError.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="Forbindelse fejlede"> når en forbindelse fejlede.
	</UL>
	<P>
	I det tredje tilfælde, klikkes der på den røde "knap", vil det starte et nyt tilslutningsforsøg.
	<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
	<P>
	<HR>
	<?php
};
?>

<P>
<FONT SIZE="+1"><A NAME="sending"><B>Send en besked:</B></A></FONT> 
<P>
For at poste en besked i chatten, skriv din besked i tekst boksen nederst i venstre hjørne og tryk efterfølgede på Enter / Return tasten for at sende den. Beskeder fra alle brugere ruller over skærmen i chatten.<BR>
<?php if (C_NO_SWEAR == "1") echo("Notér venligst at \"fy ord\" er udeladt fra den skrevne besked."); ?>
<P>
Du kan også skifte farve på din skrevne tekst ved at vælge en ny farve fra listen af valg til højre for tekst boksen.
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="users_list"><B>Forståelse af bruger listen (ikke gældende for brugeres popup vinduer):</B></A></FONT> 
<P>
<OL>
	To simple regler er defieneret for bruger listen:<BR>
	<LI>Et lille icon som viser kønnet er vist før navnet på registrede brugere (klik på det vil åbne <A HREF="#whois">whois pop-up vinduet</A> for denne bruger), mens uregisterede brugere kun har et blank mellemrum vist før brugernavnet;<BR>
	<LI>Nick navnet på moderator eller administrator er skrevet i kursiv form.
</OL>
<P><I>For eksempel</I>, fra snapshottet nedenuden kan du konkludere at:
<TABLE BORDER=0 CELLSPACING=10>
<TR>
	<TD>
		<IMG SRC="images/tutorials/usersList.gif" WIDTH=128 HEIGHT=145 BORDER=0 ALT="Bruger liste">
	</TD>
	<TD>
	<UL>
		<LI>Nicolas er admin eller en af moderatorerne i chat rummet;<BR><BR>
		<LI>alien (hvis køn er ukendt), Jezek2 og Caridad er registerede alm. brugere uden ekstra "funktioner" i chatten;<BR><BR>
		<LI>lolo er en alm. ikke registrerede bruger.
	</UL>
	</TD>
</TR>
</TABLE>
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="exit"><B>Forlad chat rummet:</B></A></FONT>
<P>
For at forlade chatten klikkes der på "Farvel" foroven til højre. Alternativt kan du også bruge en af følgende kommandoer i din tekst boks:<BR><BR>
/exit<BR>
/bye<BR>
/quit<BR><BR>
Disse kommandoer kan efterfølges af en tekst som sendes inde du forlader chatten.
<I>Feks.:</I> /quit Vi ses snart igen!
<P>
vil sende beskeden "Vi ses snart igen!" i chatten og så logge dig ud.

<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="users_popup"><B>Vide hvem som chatter uden at være logget ind:</B></A></FONT> 
<P>
Du kan klikke på linket der viser antallet af tilsluttede brugere på startsiden, eller hvis du chatter, klikke på icon'et <IMG SRC="images/popup.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="Bruger popup"> i øverste højre hjørne for at åbne et nyt vindue som vil vise de tilsluttede brugere, og de rum de befinder sig i, i noget nær real time.<BR>
<P>
Klik på <IMG SRC="images/sound.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="Beeps"> icon'et i toppen af denne popup vil tænde/slukke beep lydene ved bruger ankomst.
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>
<HR>


<P>
<FONT SIZE="+1"><A NAME="customize"><B>Tilretning af chat vinduet:</B></A></FONT>
<P>
Der er mange måder hvorpå du kan tilrette udseende af chat vinduet på. For at skifte udseende skrives den respektive kommado i tekst boksen og der trykkes enter.
<P>
<UL>
	<?php
	if ($Ver == "H")
	{
		?>
		<LI><B>Clear kommandoen</B> tillader dig at rense/tømme chat vinduet og efterfølgende kun få vist de 5 sidste skrevne beskeder.<BR>Skriv "/clear" uden ".
		<P>
		<?php
	}
	else
	{
		?>
		<LI><B>Order kommandoen</B> tillader dig at skifte mellem at nye beskeder skal starte foroven eller forneden.<BR>Skriv "/order" uden ".
		<P>
		<?php
	};
	?>
	<LI><B>Notify kommandoen</B> tillader dig at skifte mellem at få en meddelelse når andre brugere ankommer eller forlader chatten. Som standard er denne mulighed sat til: <?php echo(C_NOTIFY ? "til" : "fra"); ?> og de <?php echo(C_NOTIFY ? "vil" : "vil ikke"); ?> blive vist.<BR>Skriv "/notify" uden ".
	<P>
	<LI><B>Timestamp kommandoen</B> tillader dig at aktivere og ikke aktivere muligheden for at kunne se tiden for den skrevne besked i chatten, samt fjerne server tiden i browseren. Som standart er denne funktion <?php echo(C_SHOW_TIMESTAMP ? "aktiveret" : "ikke aktiveret"); ?>.<BR>Skriv "/timestamp" uden ".
	<P>
	<LI><B>Refresh kommandoen</B> tillader dig at justere hyppigheden for opfriskning af skærmen i chatten. Standard hyppigheden er <?php echo(C_MSG_REFRESH); ?> sekunder. For at skifte hyppigheden skriver du "/refresh n" uden " hvor n er tiden i sekunder.
	<P>
	<I>For eksempel:</I> /refresh 5
	<P>
	vil skifte hyppigheden til 5 sekunders opfriskning. *Vær opmærksom, hvis n er sat til mindre end 3, nulstilles opfriskningen til SLET ikke at opfriske skærmen (godt hvis du ønsker at læse en masse gamle beskeder i chatten)!*
	<P>
	<?php
	if ($Ver == "L")
	{
		?>
		<LI><B>Show kommadoen</B> tillader dig at justere antallet af viste beskeder i chatten. For at skifte antallet af viste beskeder, skriv "/show n" uden " hvor n er antallet af beskeder der skal vises.
		<P>
		<I>For eksempel:</I> /show 50
		<P>
		vil bevirke at de nyeste 50 beskeder altid vil være synlige for dig i chatten. Hvis ikke alle beskeder kan vises på skærmen af en gang fremkommer der en scroll-bar til højre.</UL>
		<?php
	}
	else
	{
		?>
		<LI><B>Show og Last kommandoen</B> tillader dig at rense skærmen og vise de sidste <I>n</I> beskeder på din skærm. Skriv "/show n" eller "/last n" uden " hvor n er antallet er beskeder der skal vises.
		<P>
		<I>For eksempel:</I> /show 50 eller /last 50
		<P>
		vil rense chat vinduet og vise de 50 nyeste beskeder på skærmen. Hvis ikke alle beskeder kan vises på skærmen af en gang fremkommer der en scroll-bar til højre.</UL>
		<?php
	};
	?>
	<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
	<P>
</UL>
<HR>
<HR>


<P>
<FONT SIZE="+2"><A NAME="commands"><B><U>Egenskaber og kommandoer</U></B></A></FONT> 
<P>

<FONT SIZE="+1"><A NAME="help"><B>Hjælpe kommando:</B></A></FONT>
<P>
Inde i chatten kan du altid finde hjælpen ved at klikken på <IMG SRC="images/helpOff.gif" WIDTH=15 HEIGHT=15 BORDER=0 ALT="?"> billedet lige foran tekst boksen. Du kan dog også vælge at skrive <B>"/help" eller "/?" kommandoen</B> i tekst boksen.
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>
<P>
<HR>

<?php
if (C_USE_SMILIES == "1")
{
	include("./lib/smilies.lib.php3");
	$Nb = count($SmiliesTbl);
	$ResultTbl = Array();
	DisplaySmilies($ResultTbl,$SmiliesTbl,$Nb,"tutorial");
	unset($SmiliesTbl);
	?>
	<FONT SIZE="+1"><A NAME="smilies"><B>Smilies:</B></A></FONT>
	<P>Du kan have grafiske smilies inde i dine beskeder. Se nedenstående for koder du skal bruge i dine beskeder for at kunne vise dem.
	<P ALIGN="center">
	<TABLE BORDER=0 CELLPADDING=3 CELLSPACING=5>
	<?php
	$i = "0";
	$Nb = count($ResultTbl);
	while($i < $Nb)
	{
		if ($i > 0) echo("\t");
		echo("<TR VALIGN=\"BOTTOM\">\n");
		echo("$ResultTbl[$i]");
		echo("\t</TR>\n\t<TR>\n");
		$i++;
		echo("$ResultTbl[$i]");
		echo("\t</TR>\n");
		$i++;
	};
	unset($ResultTbl);
	?>
	</TABLE>
	<P>
	<I>For eksempel</I>, send denne tekst: "Hej Bruger :)" uden " vil vise denne tekst Hej Bruger <IMG SRC="images/smilies/smile1.gif" WIDTH=15 HEIGHT=15 ALT=":)"> i chat vinduet.
	<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
	<P>
	<HR>
	<?php
};

if (C_HTML_TAGS_KEEP != "none")
{
	?>
	<FONT SIZE="+1"><A NAME="text"><B>Tekst formatering:</B></A></FONT>
	<P>
	Tekst kan skrives som fed, kursiv og understreget ved at bruge de respektive html koder herfor, såsom &LT;B&GT; &LT;/B&GT, &LT;I&GT; &LT;/I&GT; eller &LT;U&GT; &LT;/U&GT.
	<P>
	<I>For eksempele</I>, &LT;B&GT;Denne tekst&LT;/B&GT; vil frembringe <B>denne tekst</B>.
	<P>
	For at oprette en genvej for en e-mail adresse eller en URL, skrives adressen (uden html koder). Genvejen vil blive oprettet automatisk.
	<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
	<P>
	<P>
	<HR>
	<?php
};
?>

<P>
<FONT SIZE="+1"><A NAME="invite"><B>Invitere en bruger til dit chat rum:</B></A></FONT>
<P>
Du kan bruge <B>invite kommandoen</B> til at invitere en bruger til at deltage i det rum som du befinder dig i.
<P>
<I>For eksempel:</I> /invite Bruger 
<P>
vil sende en privat besked til Bruger hvor det fremgår at du ønsker at se ham i dit chat rum. Denne besked indeholder chat rummets navn i form af et link.
<P>
Bemærk at du kan invitere mere end en bruger af gangen med invite kommandoen (f.eks. "/invite Bruger1,Bruger2,Bruger3"). Navnene skal være delt med et (,) uden mellemrum.
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="changeroom"><B>Skifte chat rum:</B></A></FONT>
<P>
I listen til højre er der en oversigt over chat rum og brugerne i disse. For at forlade dit nuværende chat rum og hoppe videre til et andet, klik på et af de rum du vil deltage i. Du kan hoppe ind i tomme chatrums med <B>kommando "/join #chatrum navn"</B> uden ".
<P>
<I>For eksempel:</I> /join #Mandehørm 
<P>
vil føre dig ind i Mandehørm.
<?php
if (C_VERSION == "2")
{
	echo(C_REQUIRE_REGISTER == "0" ? "<P>Hvis du er en registrede bruger, du" : "<BR><P>Du");
	?>
	 kan også oprette et nyt rum med den selvsamme kommando. Men du skal angive typen på dit nye rum: 0 står for privat rum, 1 for offentligt rum (standard værdi).
	<P>
	<I>For eksempel:</I> /join 0 #MitRum 
	<P>
	vil oprette et nyt privat rum (såfremt der ikke er et andet offentligt rum af samme navn) kaldet MitRum og føre dig derind.
	<P>
	Rummet navn kan ikke indholde komma'er eller backslash (\).<?php if (C_NO_SWEAR == "1") echo(" Kan ikke længere indeholde \"Fy ord\"."); ?>
	<?php
}
?>
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><B>Ændring af din egen profil fra chatten:</B></FONT>
<P>
<B>Profil kommandoen</B> opretter et seperat pop-up vindue hvori at du kan ændre og tilpasse din bruger profil undtagen dit nick og kodeord (du skal bruge linket på startsiden for at gøre dette).<BR><BR>Skriv /profile
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><B>Fremkald den sidste besked eller kommando du har skrevet:</B></FONT>
<P>
<B>! kommando</B> frembringer den sidste besked eller kommando du skrev.<BR>Skriv /!
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><B>Svar til en bestemt bruger:</B></FONT>
<P>
Ved at klikke en gang på navnet på en bruger i listen til højre vil gøre, at vedkommendes "brugernavn>" vil fremstå i din tekstboks. Denne funktion tillader dig hurtigt og nemt at sende en offentligt besked til en bruger, måske for at svare på en henvendelse fra ham eller hende tidligere.
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="private"><B>Private beskeder:</B></A></FONT>
<P>
For at sende en privat besked til en anden bruger som er i samme rum som dig, skriv da <B>"/msg brugernavn besked" eller "/to brugernavn besked"</B> uden ".
<P>
<I>For eksempel, hvor Kenneth er brugernavn:</I> /msg Kenneth Hej med dig, hvordan går det ?
<P>
Beskeden vil kun være synlig for bruger Kenneth og dig selv og således kan andre ikke se den.
<P>
Noter lige at ved at klikke på nick navnet i chatten vil automatisk indsætte denne kommando i din tekstboks.
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="actions"><B>Handling:</B></A></FONT>
<P>
For at beskrive hvad du laver kan du bruge kommandoen <B>"/me handling"</B> uden ".
<P>
<I>For eksempel:</I> Hvis Kenneth sender beskeden "/me drikker kaffe" vil beskeden "<B>* Kenneth</B> drikker kaffe".
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="ignore"><B>Ignorér andre brugere:</B></A></FONT>
<P>
For at ignorere alle poster fra en anden bruger, skriv kommandoen <B>"/ignore brugernavn"</B> uden ".
<P>
<I>For eksempel:</I> /ignore Kenneth
<P>
Fra deraf, ingen poster fra brugeren Kenneth vil blive vist på din skærm.
<P>
For at få en liste over brugere som er på din ignorér liste, så skriv kommandoen <B>"/ignore"</B> uden ". 
<P>
For igen at få vist beskeder fra brugeren Kenneth, skriv kommandoen <B>"/ignore - Kenneth"</B> uden " hvor "-" is er minus tegnet. <P> 
<P>
<I>For eksempel:</I> /ignore - Kenneth 
<P>
Nu vil alle beskeder fra brugeren Kenneth igen blive vist på skærmen, også dem der skrevet mens brugeren Kenneth var på din liste.
Hvis du ikke angiver et navn efter - tegnet .. vil din ignorér liste blive tømt.
<P>
Notér at du kan tilføje flere end et navn ad gangen til /ignore kommandoen (f.eks. "/ignore Kenneth,Kiki,Alf" eller "/ignore - Kenneth,Alf"). De skal være adskildt af et komma (,) uden mellemrum.
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="whois"><B>Få information om andre brugere:</B></A></FONT>
<P>
For at se information om andre brugere, skriv kommandoen <B>"/whois brugernavn"</B> uden ".
<P>
<I>For eksempel:</I> /whois Kenneth
<P>
hvor 'Kenneth' er brugernavnet. Denne kommando vil frembringe et seperat pop-up vindue der vil vise den information der er tilgængelig for denne bruger.
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>
<HR>

<?php
if (C_SAVE != "0")
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="save"><B>Gemme beskeder:</B></A></FONT>
	<P>
	For at gemme beskeder (start beskederne undtaget) til en lokal HTML fil, skriv kommandoen <B>"/save n"</B> uden ".
	<P>
	<I>For eksempel:</I> /save 5
	<P>
	hvor '5' er antallet af beskeder der skal gemmens. Hvis ikke n er angivet, alle tilgængelige beskeder i det aktuelle chat rum, gemmes.
	<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
	<P>
	<HR>
	<?php
};
?>
<HR>


<P>
<FONT SIZE="+2"><A NAME="moderator"><B><U>Specielle kommandoer for moderator og/eller administrator</U></B></A></FONT> 

<P>
<FONT SIZE="+1"><A NAME="announce"><B>Send en annoncering:</B></A></FONT>
<P>
Administratoren kan have behov for at sende en annoncering til alle brugere på tværs af chatrums. Dertil bruges kommandoen <B>/announce</B>.
<P>
<I>For eksempel: /announce Chatten lukkes ned for systemvedligeholdelse kl. 23:00.</I>
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="kick"><B>Udsmid en bruger:</B></A></FONT>
<P>
Moderator kan udsmide en bruger og administratoren kan udsmide en bruger eller en moderarator med kommandoen <B>/kick</B>. Moderator kan kun udsmide brugere i det aktuelle chatrum mens administrator kan udsmide brugere på tværs af hele chatten.
<P>
<I>For eksempel</I>, hvis Kenneth er navnet på en bruger som skal smides ud, skrive kommandoen:</I> /kick Kenneth</I>
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>
<HR>

<?php
if (C_BANISH != "0")
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="banish"><B>Forvise en bruger:</B></A></FONT>
	<P>
	Moderator kan forvise en bruger og administrator kan forvise en bruger eller en moderator med kommandoen <B>/ban</B>.<BR>
	Administratoren kan modsat moderatoren forvise en bruger på tværs af chatrummene samt forvise en bruger for evigt med '<B>&nbsp;*&nbsp;</B>' værdien der indsættes lige før brugernavnet.
	<P>
	<I>For eksempel</I>, hvis Kenneth er navnet på brugeren som skal forvises : <I>/ban Kenneth</I> eller <I>/ban * Kenneth</I>
	<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
	<P>
	<HR>
	<?php
};
?>

<P>
<FONT SIZE="+1"><A NAME="promote"><B>Forfremme en bruger til moderator:</B></A></FONT>
<P>
Moderatorer og administrator kan forfremme en bruger til moderator med kommandoen <B>/promote</B>.
<P>
<I>For eksempel</I>, hvis Kenneth er navnet på brugeren som skal forfremmes:<I> /promote Kenneth</I>
<P>
Kun administrator kan fratage en forfremmelse fra en bruger (reducere en moderator til alm. bruger). Der findes ikke en kommando for dette.
<BR><P ALIGN="right"><A HREF="#top">Tilbage til toppen</A></P>
<P>


</BODY>
</HTML>