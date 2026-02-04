<?php

/***************************************************************************
 *                         lang_bbcode.php [Croatian]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.3.2.2 2002/12/18 15:40:20 psotfx Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/***************************************************************************
 *   CONTRIBUTORS
  *   ANÈI - START
 *   <NE bri¹i i NE mijenjaj!>
 *   Danas æe biti toplo i sunèano.
 *   [Hrvatski]
 *   Prevela s engleskog na hrvatski: Anèica Seèan [Ancica Secan].
 *   Verzija: 1.0.0.
 *   Vrijeme: 22. travnja 2003. godine [utorak].
 *   Verzija: 1.0.1.
 *   A¾urirano za 2.0.5: 19. lipnja 2003. godine [èetvrtak].
 *   Verzija: 1.0.2.
 *   A¾urirano za 2.0.11: 30. sijeènja 2005. godine [nedjelja].
 *   Verzija: 1.0.3.
 *   A¾urirano za 2.0.12: 24. veljaèe 2005. godine [èetvrtak].
 *   Verzija: 1.0.4.
 *   A¾urirano za 2.0.15: 08. svibnja 2005. godine [nedjelja].
 *   Verzija: 1.0.5.
 *   A¾urirano za 2.0.15: 20. lipnja 2005. godine [ponedjeljak].
 *   Verzija: 1.0.6.
 *   A¾urirano za 2.0.15: 24. lipnja 2005. godine [petak].
 *   Verzija: 1.0.7.
 *   A¾urirano za 2.0.17: 11. rujna 2005. godine [nedjelja].
 *   Verzija: 1.0.8.
 *   A¾urirano za 2.0.17: 05. listopada 2005. godine [srijeda].
 *   Verzija: 1.0.9.
 *   A¾urirano za 2.0.18: 31. listopada 2005. godine [ponedjeljak].
 *   Verzija: 2.0.0.
 *   A¾urirano za 2.0.19: 05. sijeènja 2006. godine [èetvrtak].
 *   Verzija: 2.0.1.
 *   A¾urirano za 2.0.19: 16. veljaèe 2006. godine [èetvrtak].
 *   Verzija: 2.0.2.
 *   A¾urirano za 2.0.20: 07. travnja 2006. godine [petak].
 *   Verzija: 2.0.3.
 *   A¾urirano za 2.0.20: 09. travnja 2006. godine [nedjelja].
 *   Verzija: 2.0.4.
 *   A¾urirano za 2.0.22: 23. prosinca 2006. godine [subota].
 *   Url: http://ancica.sunceko.net.
 *   Danas æe biti toplo i sunèano.
 *   [Zadnju] Slu¾benu verziju ovog mog prijevoda mo¾e¹ skinuti sa www.phpbb.com.
 *   [Zadnju] NeSlu¾benu verziju ovog mog prijevoda mo¾e¹ skinuti sa forum.sunceko.net.
 *   Danas æe biti toplo i sunèano.
 *   </NE bri¹i i NE mijenjaj!>
  *   ANÈI - END
 ***************************************************************************/

// 
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\";
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//

$faq[] = array("--","Uvod");
$faq[] = array("©to je BBCode?", "<br />BBCode je specijalna implementacija HTML-a.<br />Moguænost kori¹tenja BBCode-a daje administrator/ica foruma aktiviranjem/deaktiviranjem ove opcije. Bez obzira na to ¹to je administrator/ica odredio/la, opcionalno sam/a mo¾e¹ deaktivirati kori¹tenje BBCode-a.<br />BBCode je slièan HTML-u u stilu; tagovi se umeæu u vitièaste zagrade [i] [umjesto &lt;i&gt;] - ¹to nudi veæu kontrolu prikaza. Kod [tagovi] se mo¾e pisati ruèno, no, ovisno o predlo¹ku kojeg koristi¹, vidjet æe¹ da je dodavanje BBCode-a postovima moguæe i putem suèelja iznad prostora za post [poruku] na obrascu za pisanje postova.<br />");

$faq[] = array("--","Oblikovanje teksta");
$faq[] = array("Kako kreirati podebljan/podcrtan/nako¹en tekst?", "<br />BBCode sadr¾i tagove koji omoguæavaju brzo mijenjanje osnovnog stila teksta.<br />To mo¾e¹ napraviti na vi¹e naèina:<ul><li>za podebljanje - tekst umetne¹ u: <b>[b][/b]</b>; npr.:<br /><br /><b>[b]</b>Pozdrav<b>[/b]</b><br /><br />æe biti prikazano kao: <b>Pozdrav</b>;</li><br /><br /><li>za podcrtanje - tekst umetne¹ u: <b>[u][/u]</b>; npr.:<br /><br /><b>[u]</b>Dobro jutro<b>[/u]</b><br /><br />æe biti prikazano kao: <u>Dobro jutro</u>;</li><br /><br /><li>za nako¹enje - tekst umetne¹ u: <b>[i][/i]</b>; npr.:<br /><br /><b>[i]</b>Ovo je supaè<b>[/i]</b><br /><br />æe biti prikazano kao: <i>Ovo je supaè</i>.</li></ul>");
$faq[] = array("Kako promijeniti boju/velièinu teksta?", "<br />Za promjenu boje/velièine teksta mo¾e¹ koristiti sljedeæe tagove:<ul><li>za promjenu boje - tekst umetne¹ u: <b>[color=][/color]</b>;<br />mo¾e¹ upisati naziv boje [npr.: white=bijela; black=crna; itd.] ili njezin heksadecimalni kod [npr.: #FFFFFF=bijela; #000000=crna; itd.];<br />npr.: za promjenu boje teksta u crvenu - umetne¹ ga u:<br /><br /><b>[color=red]</b>Pozdrav!<b>[/color]</b><br /><br />ili<br /><br /><b>[color=#FF0000]</b>Pozdrav!<b>[/color]</b><br /><br />¹to æe oboje dati: <span style=\"color:red\">Pozdrav!</span>;</li><br /><br /><li>za promjenu velièine - tekst umetne¹ u: <b>[size=][/size]</b>;<br />ovaj tag ovisi o predlo¹ku kojeg koristi¹; preporuèeni format je numerièka vrijednost koja predstavlja velièinu teksta u pikselima, poèev¹i od 1 [toliko sitno da æe¹ ga jedva vidjeti] pa sve do 29 [vrlo veliko];<br />npr.:<br /><br /><b>[size=9]</b>SITNO<b>[/size]</b><br /><br />æe dati: <span style=\"font-size:9px\">SITNO</span>;<br /><br /><b>[size=24]</b>OGROMNO<b>[/size]</b><br /><br />æe dati: <span style=\"font-size:24px\">OGROMNO</span>;</li></ul>krajnji rezultat [izgled] ovisit æe o pregledniku i sustavu gledatelja/ice(a).<br />");
$faq[] = array("Kako kombinirati tagove?", "<br />Tagove mo¾e¹ kombinirati...<br />Npr.: da bi privukao/la neèiju pa¾nju mo¾e¹ napisati:<br /><br /><b>[size=18][color=red][b]</b>POGLEDAJ ME!<b>[/b][/color][/size]</b><br /><br />¹to æe dati: <span style=\"color:red;font-size:18px\"><b>POGLEDAJ ME!</b></span>.<br /><br />Nije preporuèljivo koristiti puno teksta koji je vi¹estruko oblikovan jer se time gube èitljivost i preglednost.<br />Na tebi je da se pobrine¹ zatvoriti sve tagove.<br />Npr.: donje oblikovanje je <u>nepravilno</u>:<br /><br /><b>[b][u]</b>Ovo ne valja<b>[/b][/u]</b>.<br />");
$faq[] = array("--","Citiranje i stvaranje teksta fiksne ¹irine");
$faq[] = array("Kako citirati tekst u odgovoru?", "<br />Postoje dva naèina citiranja teksta: sa referencom ili bez reference.<ul><li>Kada koristi¹ Citiraj funkciju za odgovaranje na post vidjet æe¹ da je tekst posta na koji odgovara¹ umetnut u: <b>[quote=\"\"][/quote]</b> tagove. Ova metoda omoguæava citiranje s referencom prema osobi ili bilo èemu drugome ¹to stavi¹.<br />Npr.: za citiranje dijela teksta koji je napisao Mr. Blobby upi¹e¹:<br /><br /><b>[quote=\"Mr. Blobby\"]</b>Tekst koji je Mr. Blobby napisao...<b>[/quote]</b>.<br /><br />Rezultat æe biti taj da æe pisati: Mr. Blobby napisa: - prije stvarnog teksta.<br /><br />Zapamti da ime koje citira¹ <b>mora¹</b> unijeti izmeðu \"\" - navodnici nisu opcionalni.</li><br /><br /><li>Druga metoda omoguæava naslijepo citiranje neèega.<br />Za postizanje toga umetne¹ tekst u: <b>[quote][/quote]</b> tagove.<br />Kod gledanja posta vidjet æe¹ da pi¹e: Citat: - prije samog teksta.</li></ul>");
$faq[] = array("Kako prikazati kod ili ne¹to drugo fiksne ¹irine teksta?", "<br />®eli¹ li prikazati dio koda ili bilo ¹to drugo ¹to zahtijeva fiksnu ¹irinu, [npr.: Courier tip slova...], umetne¹ tekst u: <b>[code][/code]</b> tagove; npr.:<br /><br /><b>[code]</b>echo \"Ovo je neki kod\";<b>[/code]</b>.<br /><br />Svo oblikovanje radi se unutar <b>[code][/code]</b> tagova i zadr¾ava se kada kasnije pogleda¹ napisano.<br />");

$faq[] = array("--","Stvaranje liste [popisa]");
$faq[] = array("Kako stvoriti nepobrojanu listu?", "<br />BBCode podr¾ava dva tipa lista: nepobrojane i pobrojane.<br />One su u principu iste kao i njihovi HTML ekvivalenti.<br /><br />Nepobrojana lista prikazuje svaku stavku u listi, jednu iza druge, oznaèavajuæi svaku sa grafièkom oznakom.<br /><br />Za nepobrojanu listu koristi¹: <b>[list][/list]</b>; te specificira¹ svaku stavku koristeæi <b>[*]</b>.<br />Npr.: za izlistavanje tri odreðene boje koristi¹:<br /><br /><b>[list]</b><br /><b>[*]</b>Crvena<br /><b>[*]</b>Plava<br /><b>[*]</b>®uta<br /><b>[/list]</b><br /><br />Rezultat æe biti sljedeæa lista:<ul><li>Crvena</li><li>Plava</li><li>®uta</li></ul>");
$faq[] = array("Kako stvoriti pobrojanu listu?", "<br />Drugi tip liste, pobrojana lista, prikazuje svaku stavku u listi, jednu iza druge, oznaèavajuæi svaku sa brojèanom odnosno alfabetskom oznakom.<br /><br />Za pobrojanu listu koristi¹: <b>[list=1][/list]</b> za brojèanu listu odnosno <b>[list=a][/list]</b> za alfabetsku listu. Kao i kod nepobrojane liste, stavke specificira¹ koristeæi <b>[*]</b>.<br /><br />Npr.:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Otiæi u ¹oping...<br /><b>[*]</b>Nadograditi komp...<br /><b>[*]</b>Skinuti mejl...<br /><b>[/list]</b><br /><br />Rezultat æe biti sljedeæa lista:<ol type=\"1\"><li>Otiæi u ¹oping...</li><li>Nadograditi komp...</li><li>Skinuti mejl...</li></ol>Npr.:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Odgovor prvi...<br /><b>[*]</b>Odgovor drugi...<br /><b>[*]</b>Odgovor treæi...<br /><b>[/list]</b><br /><br />Rezultat æe biti sljedeæa lista:<ol type=\"a\"><li>Odgovor prvi...</li><li>Odgovor drugi...</li><li>Odgovor treæi...</li></ol>");

$faq[] = array("--", "Stvaranje linkova [veza]");
$faq[] = array("Kako napraviti link(ove)?", "<br />phpBB BBCode podr¾ava vi¹e naèina stvaranja URI-a, Uniform Resource Indicatora, poznatijih kao URL-ovi.<ul><li>Prvi od njih koristi: <b>[url=][/url]</b> tagove; bez obzira ¹to napi¹e¹ poslije znaka = æe uzrokovati da se sadr¾aj tagova pona¹a kao URL.<br />Npr.: za link na phpBB.com mo¾e¹ koristiti:<br /><br /><b>[url=http://www.phpbb.com/]</b>Posjetite phpBB!<b>[/url]</b>.<br /><br />Rezultat æe biti sljedeæi link: <a href=\"http://www.phpbb.com/\">Posjetite phpBB!</a>.<br /><br />Vidjet æe¹ da se link otvara u novome prozoru zato da bi korisnik/ca mogao/la nastaviti koristiti forum ako ¾eli.</li><br /><br /><li>®eli¹ li da URL bude prikazan kao link mo¾e¹ koristiti:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b>.<br /><br />Rezultat æe biti sljedeæi link: <a href=\"http://www.phpbb.com/\">http://www.phpbb.com/</a>.</li><br /><br /><li>phpBB dodatno sadr¾i ne¹to ¹to se zove <i>Magic Links</i>, a ¹to æe pretvoriti bilo koji ispravan URL u link bez specificiranja tag(ov)a ili prefiksa http://.<br />Npr.: upi¹e¹ li www.phpbb.com u post [bez tagova] automatski æe u prikazu, kad pogleda¹ post, biti vidljiv link: <a href=\"http://www.phpbb.com/\">www.phpbb.com</a>.</li><br /><br /><li>Na isti naèin, osim ¹to æe¹ koristiti druge tagove, mo¾e¹ kreirati e-mail adrese.<br />Npr.:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />æe biti prikazano kao: <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a>.<br /><br />Npr.: upi¹e¹ li no.one@domain.adr u post [bez tagova] automatski æe u prikazu, kad pogleda¹ post, biti vidljiv link: <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a>.</li></ul>Kao i sa svim BBCode tagovima, URL mo¾e¹ postaviti oko bilo kojeg drugog taga kao ¹to su <b>[img][/img]</b> [sljedeæi odjeljak], <b>[b][/b]</b>, i sl..<br /><br />Na tebi je da se pobrine¹ zatvoriti sve tagove.<br />Npr.: donje oblikovanje je <u>nepravilno</u>:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b>,<br /><br />a mo¾e dovesti i do toga da ti post bude izbrisan [stoga pazi].<br />");

$faq[] = array("--", "Prikazivanje slike u postu");
$faq[] = array("Kako dodati sliku u post?", "<br />phpBB BBCode sadr¾i tag za umetanje slika u postove.<br />Postoje dvije bitne stvari koje treba zapamtiti kod postanja slika: prvo, mnogi/e korisnici/e ne vole puno slika u porukama, i drugo, slika koju umeæe¹/umetne¹ mora biti dostupna na Internetu [Ne mo¾e postojati samo na tvojem raèunalu - osim ako ima¹ webserver!]. Trenutno ne postoji naèin pohranjivanja slika lokalno pomoæu phpBB-a [oèekuje se da æe sve ovo biti rije¹eno u sljedeæem izdanju phpBB-a].<br /><br />Da bi postao/la sliku: mora¹ obuhvatiti URL, na kojem se slika nalazi, sa: <b>[img][/img]</b> tagovima.<br />Npr.:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b>.<br /><br />Kao ¹to je spomenuto u URL odjeljku iznad, sliku mo¾e¹ obuhvatiti <b>[url][/url]</b> tagovima; npr.:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b>.<br /><br />Rezultat æe biti:<br /><br /><a href=\"http://www.phpbb.com/\"><img src=\"templates/subSilver/images/logo_phpbb_med.gif\" border=\"0\" alt=\"\" /></a>.<br />");

$faq[] = array("--", "Ostalo");
$faq[] = array("Mogu li doda(va)ti/koristiti vlastite tagove?", "<br />Ne direktno u phpBB-u 2.0; no, ova moguænost bi se mogla pojaviti u sljedeæoj verziji.<br />");

//
// This ends the BBCode guide entries...
//

?>