<?php
// File : bosanski.tutorial.php3
// Translation by Nermina Akkaya <Seka@bosna.de>

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
<TITLE>Bosanske Instrukcije za<?php echo(APP_NAME." - ".APP_VERSION); ?></TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-2">
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
        <TD><FONT SIZE="+2">Sadrzaj ovih instrukcija</FONT></TD>
</TR>
</TABLE><BR>

<P CLASS="redText">
Warning: Netscape users have to define their language as the default encoding else each characters in messages will be replace by a '?'.<BR>
This can be done so: View/CharacterSet/your language Auto-Detect, then View/CharacterSet/SetDefault.
</P>

<?php
if (C_MULTI_LANG == "1")
{
        ?>
        <A HREF="#language" CLASS="topLink">Izabiranje jezika</A><BR>
        <?php
}
?>
<A HREF="#login" CLASS="topLink">Ukljucivanje u chat</A><BR>
<A HREF="#register" CLASS="topLink">Registrovanje</A><BR>
<A HREF="#modProfile" CLASS="topLink">Modificiranje<?php if (C_SHOW_DEL_PROF == "1") echo("/brisanje"); ?> tvog profila</A><BR>
<?php
if (C_VERSION == "2")
{
        ?>
        <A HREF="#create_room" CLASS="topLink">Kreiranje sobe</A><BR>
        <?php
};
if ($Ver == "H")
{
	?>
	<A HREF="#connection_state" CLASS="topLink">Understanding connection state</A><BR>
	<?php
};
?>
<A HREF="#sending" CLASS="topLink">Poslati poruku</A><BR>
<A HREF="#users_list" CLASS="topLink">Understanding the users list</A><BR>
<A HREF="#exit" CLASS="topLink">Napustanje chat sobe</A><BR>
<A HREF="#users_popup" CLASS="topLink">znati ko je na chatu bez da si ukljucen</A><BR>
<P>
<A HREF="#customize" CLASS="topLink">Namjestiti chat pogled</A><BR>
<P>
<A HREF="#commands" CLASS="topLink">Obiljezja i komande:</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#help" CLASS="topLink">Komande za pomoc</A><BR>
<?php
if (C_USE_SMILIES == "1")
{
        ?>
        &nbsp&nbsp&nbsp&nbsp<A HREF="#smilies" CLASS="topLink">Graficki smilies</A><BR>
        <?php
};
if (C_HTML_TAGS_KEEP != "none")
{
        ?>
        &nbsp&nbsp&nbsp&nbsp<A HREF="#text" CLASS="topLink">Formatiranje teksta</A><BR>
        <?php
};
?>
&nbsp&nbsp&nbsp&nbsp<A HREF="#invite" CLASS="topLink">Suggesting an user to join your current chatroom</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#changeroom" CLASS="topLink">Prelazak iz jedne chat sobe u drugu</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#private" CLASS="topLink">Privatne poruke</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#actions" CLASS="topLink">Actions</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#ignore" CLASS="topLink">Ignorisanje ostalih korisnika</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#whois" CLASS="topLink">Dobivanje javnih informacija odrugim korisnicima</A><BR>
<?php
if (C_SAVE != "0")
{
        ?>
        &nbsp&nbsp&nbsp&nbsp<A HREF="#save" CLASS="topLink">Spasi poruke</A><BR>
        <?php
};
?>
<P>
<A HREF="#moderator" CLASS="topLink">Specijalne komande za moderatore i/ili za administratora:</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#announce" CLASS="topLink">Poslati  oglas</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#kick" CLASS="topLink">Izbacivanje korisnika</A><BR>
<?php
if (C_BANISH != "0")
{
	?>
	&nbsp&nbsp&nbsp&nbsp<A HREF="#banish" CLASS="topLink">Banish an user</A><BR>
	<?php
};
?>
&nbsp&nbsp&nbsp&nbsp<A HREF="#promote" CLASS="topLink">Unaprijediti korisnika u moderatora</A><BR>
<P>
<HR>
<HR>


<?php
if (C_MULTI_LANG == "1")
{
        ?>
        <P>
        <FONT SIZE="+1"><A NAME="language"><B>Izabiranje jezika:</B></A></FONT>
        <P>
        Mozete izabrati jezik u koji se vec preveo <?php echo(APP_NAME); ?>  tako sto cete kliknuti na jednu od zastava na pocetnoj stranici. U primjeru koji slijedi, korisnik je izabrao francuski jezik:
        <P ALIGN="center">
        <IMG SRC="images/tutorials/flags.gif" HEIGHT="44" WIDTH="424" ALT="Zastave za selekciju jezika">
        <BR><P ALIGN="right"><A HREF="#top">povratak na vrh</A></P>
        <HR>
        <?php
}
?>

<P>
<FONT SIZE="+1"><A NAME="login"><B>Ukljucivanje:</B></A></FONT>
<P>
Ako ste vec registrovani, jednostavno se ukljucite unoseci svoje korisnicko ime i sifru. Onda izaberite u koju chat sobu zelite da udjete i kliknite na chat dugme.<BR>
<?php
if (C_REQUIRE_REGISTER == "1")
{
        ?>
        <P>
        Ukoliko niste <A HREF="#register">registrovani</A>, onda to prvo uradite .
        <?php
}
else
{
        ?>
        <P>
        Ukoliko niste <A HREF="#register">registrovani</A>, onda to prvo uradite ili jednostavno udjite u sobu, ali vas nadimak nece biti zasticen ( drugi korisnici moci ce koristiti isti cim se vi iskljucite ).
        <?php
};
?>
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh </A></P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="register"><B>Registrovanje:</B></A></FONT>
<P>
Ako jos niste registrovani <?php if (C_REQUIRE_REGISTER == "0") echo("a zelite biti"); ?>, molimo izaberite registarsku opciju. Pojavit ce se mali pop-up prozor.
<P>
<UL>
		<!-- To Update
        <LI>Prvo kreirajte korisnicko ime i sifru  za sebe , unesite to u odgovarajuce polje. Korisnicko ime koje ste izabrali  je ime koje ce se automatski prikazati u chat sobi.Ima ne moze sadrzavati medju prostor, zarez ili kose crte (\).
<?php if (C_NO_SWEAR == "1") echo("  Ime ne moze sadrzavati \"ruzne rijeci - swear words\"."); ?>
		-->
	<LI>First, create a username<?php if (!C_EMAIL_PASWD) echo(" and a password"); ?> for yourself by typing it into the appropriate boxes. The username you choose is the name that will be automatically displayed in the chat room. It cannot contain space, comma or backslash (\).
<?php if (C_NO_SWEAR == "1") echo(" It can no more contains \"swear words\"."); ?>
        <LI>Drugo , molimo unesite vase ime, prezime i vasu  email adresu. Da biste se mogli registrovati za chat , sve ove informacije moraju biti dostupne.  You can skip gender selection.
        <LI>Ako imate svoju web stranicu ,mozete unijeti  URL  takodjer.
        <LI>Polje sa jezicima moze pomoci drugim korisnicima u buducim diskusijama: oni ce znati koje jezike vi razumijete.
        <LI>Napokon,ako zelite dopustiti da  drugi korisnici mogu vidjeti vasu email adresu, molimo oznacite na  "checkbox "odmah do  "pokazi e-mail u javnim informacijama".Ako ne zelite da vasa e-mail adresa bude vidljiva ,ostavite " checkbox " neoznacenu.
        <LI>Onda , pritisnite na dugme za registrovanje i vas profil ce biti kreiran. Ako zelite prekinuti registraciju, kliknite na dugme  Zatvori.
</UL>
<P>
<A NAME="modProfile"></A>Naravno, registrovani korisnici ce moci modificirati<?php if (C_SHOW_DEL_PROF == "1") echo("/izbrisati"); ?> svoj profil tako sto ce kliknuti na odgovarajuci <?php echo((C_SHOW_DEL_PROF == "0" ? "link" : "link")); ?>.<BR>
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
<P>
<HR>

<?php
if (C_VERSION == "2")
{
        ?>
        <P>
        <FONT SIZE="+1"><A NAME="create_room"><B>Kreiranje sobe:</B></A></FONT>
        <P>
        Registrovani korisnici mogu kreirati sobe. Privtne sobe mogu biti dostupne samo korsnicima koji znaju njihovo ime i nikada nece biti prikazane osim ako su korisnici vec unutra .<BR>
        <P>
        Ime sobe ne moze sadrzavati zarez ili kosu crtu (\).<?php if (C_NO_SWEAR == "1") echo(" It can no more contains \"swear words\"."); ?>
        <BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
        <P>
        <HR>
        <?php
};
if ($Ver == "H")
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="connection_state"><B>Understanding connection state:</B></A></FONT>
	<P>
	A sign representing your connection state is dipslayed at the top-right corner of the screen. It may take three forms:
	<P>
	<UL>
		<LI><IMG SRC="images/connectOff.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="No connection"> when no connection is required ;
		<LI><IMG SRC="images/connectOn.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="Connecting"> when there is a connection in progress ;
		<LI><IMG SRC="images/connectError.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="Connection failed"> when a connection failed.
	</UL>
	<P>
	In the third case, clicking on the red "button" will launch a new connection attempt.
	<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
	<P>
	<HR>
	<?php
};
?>

<P>
<FONT SIZE="+1"><A NAME="sending"><B>Poslati poruke:</B></A></FONT>
<P>
Da bi poslali poruku u chat sobu, napisite tekst u polje za pisanje koje se nalazi u donjem lijevom uglu i onda kliknite na  Enter/Return da je posaljete. Poruke od svih korisnika biti ce izlistane u chat box.<BR>
<?php if (C_NO_SWEAR == "1") echo("Note that \"swear words\" are skipped from messages."); ?>
<P>
Mozete promijeniti  boju teksta vase poruke , tako sto cete izabrati novu boju sa liste izbora koja se nalazi desno od poja za tekst.
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="users_list"><B>Understanding the users list (not for users popup window):</B></A></FONT> 
<P>
<OL>
	Two basic rules have been defined for the users list:<BR>
	<LI>a little icon that shows gender is displayed before the nick of a registered user (clicking on it will launch the <A HREF="#whois">whois popup</A> for this user), while unregistered users have nothing but blank spaces displayed before their nick;<BR>
	<LI>the nick of the administrator or of a moderator is italicized.
</OL>
<P><I>For example</I>, from the snapshot bellow you can conclude that:
<TABLE BORDER=0 CELLSPACING=10>
<TR>
	<TD>
		<IMG SRC="images/tutorials/usersList.gif" WIDTH=99 HEIGHT=131 BORDER=0 ALT="users list">
	</TD>
	<TD>
	<UL>
		<LI>Nicolas is the admin or one of the moderators of the phpMyChat room;<BR><BR>
		<LI>alien (whose gender is unknown), Jezek2 and Caridad are registered users with no extra "power" for the phpMyChat room;<BR><BR>
		<LI>lolo is a simple unregistered user.
	</UL>
	</TD>
</TR>
</TABLE>
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="exit"><B>Napustanje chat sobe:</B></A></FONT>
<P>
Da bi izasli iz chata, jednostavno kliknite jednom na  "Exit". Takodjer, mozete i unijete jednu od slijedecih komandi u polje za tekst x:<BR>
/exit<BR>
/bye<BR>
/quit
<P>
Ove komande mogu biti napisane zajedno sa tekstom poruke i poslate prije vec sto napustite the chat sobu.
<I>Na primjer :</I> /quit CU soon!
<P>
Poruka "CU soon!" biti ce poslana i onda cete se iskljuciti.
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="users_popup"><B>Saznati ko je na chatu, bez da ste vi ukljuceni:</B></A></FONT>
<P>
Mozete na pocetnoj stranici kliknuti na link koji pokazuje broj konektovanih korisnika  ili , ako vi pricate , kliknuti sliku <IMG SRC="images/popup.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="Users popup"> koja se na ekranu nalazi na vrhu desno, nakon cega ce se otvoriti nezavisni prozor koji pokazuje broj konektovanih korisnika i sobe u kojima su oni u to vrijeme.<BR>
Naziv ovog prozora sadrzi imena korisnika ako ih je manje od tri, borj korisnika i broj otvorenih soba.
<P>
Ako kliknete na ovu <IMG SRC="images/sound.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="Beeps"> slicicu na vrhu prozora, ukljucit/iskljuct cete zvucni signal, ako udje novi korisnik.
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
<P>
<HR>
<HR>


<P>
<FONT SIZE="+1"><A NAME="customize"><B>Prilagodjavanje pogleda u Chat :</B></A></FONT>
<P>
Postoji mnogo nacina da sebi prilagodite pogled u Chat. Da to promijenite, jednostavnu napisite odgovarajucu komandu u polje za tekst i onda kliknite na Enter/Return .
<P>
<UL>
        <?php
        if ($Ver == "H")
        {
                ?>
                <LI> <B>Komanda za ciscenje</B> pomocu koje mozete ocistiti chat ekran i premjestiti zadnjih 5 poruka koje su vam na ekranu.<BR>Napisite "/clear" bez navodnih znakova.
                <P>
                <?php
        }
		else
        {
                ?>
                <LI> <B>Komanda za naredjivanje</B> pomocu koje mozete narediti , da li zelite da vam se novi tekst poruke pojavi n avrhu ili na dnu ekrana.<BR>napisite "/order" bez quotes.
                <P>
                <?php
        };
        ?>
        <LI> <B>Komanda za oznake</B> dopusta vam da ukljucite ili iskljucite opciju vidjenja oznaka kada drugi korisnici  udju ili izadju iz chat sobe. By default this option is <?php echo(C_NOTIFY ? "on" : "off"); ?> and the notices <?php echo(C_NOTIFY ? "will" : "won't"); ?> be seen.<BR>Type "/notify" without quotes.
        <P>
        <LI> <B>Komanda za vrijeme</B> dopusta vam da ukljucite ili iskljucite  opciju  of seeing the time the message was posted before each message and the server time in the status bar. By default this option is <?php echo(C_SHOW_TIMESTAMP ? "on" : "off"); ?>.<BR>Type "/timestamp" without quotes.
        <P>
        <LI> <B>Komanda za pregled poruka</B> pomocu koje mozete odretiti nakon kojeg vremena zelite pregledati nove poruke.Trenutno je vremenski razmak <?php echo(C_MSG_REFRESH); ?> sekundi. Da promijenite vrijeme, napisite  "/refresh n" bez navodnih znakova, gdje je n  vrijeme u sekundama.
		<P>
		<I>Na primjer:</I> /refresh 5
		<P>
		i vrijeme ce se primjeniti  u 5 sec.*Pazite, ako je vrijeme namjesteno na manje od 3 , nove poruke se nece pojavljivati (korisno je kada zelite da citate stare poruke, a ne zelite da vas neko uznemirava)!*
		<P>
		<?php
        if ($Ver == "L")
        {
                ?>
                <LI> <B>Komanda pokazi</B> pomocu koje odredjujete broj poruka koje mozete vidjeti na ekranu. Da promijenite broj poruka, napisite"/show n" bez navodnih znakova, gdje je n broj poruka koje koje se vide na ekranu.
                <P>
                <I>Na primer :</I> /show 50
                <P>
                nakon cega ce na ekranu biti zadnjih 50 pristiglih poruka.</UL>
                <?php
        }
        else
        {
                ?>
                <LI> <B>Komanda pokazi i komanda poslednje</B> pomocu koje mozete ocistit ekran i narediti da se na ekranu prikazu samo <I>n</I> zadnjih poruka.Napisite "/show n" ili "/last n" bez navodnih znakova,gdje je n broj poruka koje koje se vide na ekranu.
                <P>
                <I>Na primjer: </I> /show 50 ili /last 50
                <P>
                nakon cega ce se prozor ocistiti i biti ce prikazano samo zadnjih 50 poruka. </UL>
                <?php
        };
        ?>
        <BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
        <P>
</UL>
<HR>
<HR>


<P>
<FONT SIZE="+2"><A NAME="commands"><B><U>Karakteristike i komande</U></B></A></FONT>
<P>

<FONT SIZE="+1"><A NAME="help"><B>komanda za pomoc:</B></A></FONT>
<P>
U chat sobi mozete traziti pomoc , tako sto cete kliknuti na <IMG SRC="images/helpOff.gif" WIDTH=15 HEIGHT=15 BORDER=0 ALT="?"> ikonu koja se nalazi na dnu lijevo.Takodje mozete i napisati <B>"/help" ili "/?" commands</B>.
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
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
	<P>Mozete praviti i graficke smilies u porukama.Pogledajte kodove koji se nalaze u tabeli ispod , a koje zelite napisati.
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
	<I>Na primjer</I>, saljete tekst"Hi Jack :)" bez navodnih bez navodnih znakova  i ona ce biti prikazana kao slijedece Hi Jack <IMG SRC="images/smilies/smile1.gif" WIDTH=15 HEIGHT=15 ALT=":)"> u chatu.
	<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
	<P>
	<HR>
	<?php
};

if (C_HTML_TAGS_KEEP != "none")
{
        ?>
        <FONT SIZE="+1"><A NAME="text"><B>Formatiranje teksta:</B></A></FONT>
        <P>
        Slova mogu biti debela, kosa ili  podvucena sa crtom , tako sto ih zagradite sa npr: &LT;B&GT; &LT;/B&GT, &LT;I&GT; &LT;/I&GT; or &LT;U&GT; &LT;/U&GT HTML .
        <P>
        <I>Na primjer</I>, &LT;B&GT;ovaj tekst &LT;/B&GT; ce napraviti <B>ovaj tekst</B>.
        <P>
        Za kreiranje  hyperlinka za e-mail adresu ili URL, napisite adresu  (bez ijedne HTML komande).Hyperlink ce biti kreiran automatski.
        <BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
        <P>
        <P>
        <HR>
        <?php
};
?>

<P>
<FONT SIZE="+1"><A NAME="invite"><B>Suggesting an user to join your current chat room:</B></A></FONT>
<P>
You can use the <B>invite command</B> to suggest an user to join the room you are chatting into.
<P>
<I>For example:</I> /invite Jack
<P>
will send a private message to Jack suggesting him to join you in your current chat room. This message contains the name of the target room and this name appears as a link.
<P>
Note that you can put more than one username in the invite command (eg "/invite Jack,Helen,Alf"). They must be splitted by comma (,) without spaces.
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
<P>
<HR>


<P>
<FONT SIZE="+1"><A NAME="actions"><B>Actions:</B></A></FONT>
<P>
To describe what you're doing you can use the <B>command "/me action"</B> without quotes.
<P>
<I>For example:</I> If Jack sends the message "/me is smoking a cigarette" the message frame will shown "<B>* Jack</B>" is smoking a cigarette".
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="changeroom"><B>Mijenjanje sobe:</B></A></FONT>
<P>
Lista koja se nalazi desno na ekranu omoguca vam da vidite  broj soba i korisnika koji su trenutno u njima. Da bi naputili sobu u kojoj se nalazite i presli u neku drugu, jednostavno kliknite na ime druge sobe. Sobe koje su prazne se ne pojavljuju na listi. Mozete uci i u praznu sobu tako sto cete napisati <B>komandu"/join #roomname"</B> without quotes.
<P>
<I>Na primjer:</I> /join #RedRoom
<P>
i onda cete biti u crvenoj sobi.
<?php
if (C_VERSION == "2")
{
        echo(C_REQUIRE_REGISTER == "0" ? "<P>Ako ste registrovani korisnik, vi" : "<BR><P>You");
        ?>
         takodje mozete kreirati novu sobu sa istim ovim komandama. Ali s´tim da morate tacno odrediti njihov tip: 0 za privatnu, 1 za javnu (ako se ne napise 0 onda je automatski 1).
        <P>
        <I>Na primejr:</I> /join 0 #MyRoom
        <P>
        Mozete kreirati novu privatnu sobu (pretpostvljamo da javna nije napravljena sa istim imenon) imenom Moja soba i uci u nju.
        <P>
        Imena soba ne mogu sadrzavati zarez ili kosu crtu (\).<?php if (C_NO_SWEAR == "1") echo(" Niti mogu sadrzavati  \"ruzne rijeci\"."); ?>
        <?php
}
?>
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><B>Modificiranje profila unutar chat:</B></FONT>
<P>
The <B>Profil komanda</B> kreira posebni  pop-up prozor u kojem mozete dodavati i mijenjati svoj korisnicki profil , osim nadimka i sifre (morate koristiti link na pocetnoj strani da bi ovo uradili).<BR>Napisite/ profil
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><B>Recalling the last message or command you have submitted:</B></FONT>
<P>
The <B>! command</B> recalls the last message or command you have submitted.<BR>Type /!
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><B>Odgovaranje specificnom korisniku:</B></FONT>
<P>
Ako kliknete jednom na ime drugog korisnika u vasoj chat sobi sa liste (desno na ekranu) pokazat ce se "korisnicko ime>" u vasem polju za tekst. Ovako mozete direktno poslati poruku tom korisniku, mozde kao odgovor na nesto sto je on / ona napisao - la.
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="private"><B>Privatne poruke:</B></A></FONT>
<P>
<!-- To update
Da bi poslali privatnu poruku drugom korisniku (koji je u Vasoj chat sobo ili ne ), napisite <B>komandu "/msg ime korisnika tekst poruke" ili "/za korisnika tekst poruke"</B> bez navodnih znakova.
-->
To send a private message to another user currently in your chat room, type the <B>command "/msg username messagetext" or "/to username messagetext"</B> without quotes.
<P>
<I>Na primjer , gdje je Jack ime korisnika:</I> /msg Jack zdravo, kako si?
<P>
Poruka ce se pojaviti kod Jack i kod Vas, ali ostali korisnici nece vidjeti poruku.
<P>
Note that clicking on the nick of a message sender in the main frame will automatically add this command to the input field for messages.
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="ignore"><B>Ignorisanje ostalih korisnika :</B></A></FONT>
<P>
Da bi ignorisali svu postu od drugog korisnika,napisite  <B>komandu  "/ignorisi ime korisnika"</B>  bez navodnih znakova.
<P>
<I>Na primjer :</I> /ignore Jack
<P>
Od tog vremena pa nadalje , poruke od korisnika Jack nece se prikazivati na vasem ekranu.
<P>
Da bi imali listu korisnika cije su poruke ignorisane, samo napisite <B>komandu "/ignorisi"</B>  bez navodnih znakova.
<P>
Da bi nastavili prikazivanje poruka od ignorisanog korisnika , napisite  <B>komandu "/ignorisi - ime korisnika"</B> bez navodnih znakova gdje je "-" minus. <P>
<P>
<I>Na primjer:</I> /ignore - Jack
<P>
Sada sve poruke od  jacka ce biti opet prikazane , ukljucujuci i njegove prijasne poruke koje je poslao.
Ako ne odredite ime korisnika iza minusa - vasa " lista za ignoriranje " ce biti izbrisana.
<P>
Oznacite da mozete staviti vise od jednog korisnickog imena u ignorirajucu komandu  (npr "/ignorisi Jack,Helen,Alf" ili "/ignorsi - Jack,Alf"). Moraju biti rastavljeni sa zarezom (,) bez razmaka.
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="whois"><B>Dobivanje informacija o ostalim korisnicima :</B></A></FONT>
<P>
Da bi vidjeli javne informacije o drugom korisniku ,napisite  <B>komandu "/ko je korisnik"</B>bez navodnih znakova.
<P>
<I>Na primjer:</I> /whois Jack
<P>
gdje je "Jack" korisnicko ime . Ova komanda ce kreirati posebni  pop-up prozor koji ce  prikazati dostupne javne informacije o tom korisniku.
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh </A></P>
<P>
<HR>

<?php
if (C_SAVE != "0")
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="save"><B>Spasi poruke :</B></A></FONT>
	<P>
	Za snimanje porukas na lokalni HTML dokumenat, napisite <B>komandu "/save n"</B> bez navodnih znakova.
	<P>
	<I>Na primjer :  /save 5
	<P>
	gdje je 5 broj poruka koje treba spasiti. Ako nije specificirano, sve dostupne poruke poslate u tekucu sobu biti ce uracunate.
	<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh ></P>
	<P>
	<HR>
	<?php
};
?>
<HR>


<P>
<FONT SIZE="+2"><A NAME="moderator"><B><U>Komande samo za administratora i /ili moderatora </U></B></A></FONT>

<P>
<FONT SIZE="+1"><A NAME="announce"><B>Posalji oglas :</B></A></FONT>
<P>
Administrator moze poslati oglas svim korisnicima u bilo kojoj sobi da pricaju sa  <B>announce command </B>
<P>
<I>Na primjer :</I> /announce  Chat sistem ce biti zatvoren  veceras u 20:00 , zbog odrzavanja.</I>
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="kick"><B>Izbacivanje korisnika :</B></FONT>
<P>
Moderator moze udariti korisnika i administrator moze izbaciti korisnika ili moderatora sa  <B>kick command</B>.
<P>
<I>Na primjer , ako je Jack ime korisnika kojeg treba izbaciti:</I> /kick Jack</I>
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
<P>
<HR>

<?php
if (C_BANISH != "0")
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="banish"><B>Banish an user:</B></A></FONT>
	<P>
	Moderators can banish an user and the administrator can banish an user or a moderator with the <B>ban command</B>.<BR>
	The administrator can banish an user from another room than the one he is chatting into. He can also banish an user forever and from the chat as a whole with the '<B>&nbsp;*&nbsp;</B>' setting that must be inserted before the nick of the user to be banished.
	<P>
	<I>For example</I>, if Jack is the name of the user to banish : <I>/ban Jack</I> or <I>/ban * Jack</I>
	<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh</A></P>
	<P>
	<HR>
	<?php
};
?>

<P>
<FONT SIZE="+1"><A NAME="promote"><B>Unaprijedi korisnika u moderatora :</B></A></FONT>
<P>
Moderatori  i administrator mogu unaprijediti  i drugog korsnika u moderatora sa <B>promote command</B>.
<P>
<I>Na primjer, ako je Jack ime  korisnika kojeg treba unaprijediti :</I> /promote Jack</I>
<P>
Samo administrator moze imati pristup suprotnom obiljezju  ( reducirati moderatora u korisnika ) na namjenskoj stranici . Nema komande koja to moze uraditi.
<BR><P ALIGN="right"><A HREF="#top">Povratak na vrh </A></P>
<P>


</BODY>
</HTML>