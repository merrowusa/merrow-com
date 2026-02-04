<?php

/***************************************************************************
 *                          lang_faq.php [Croatian]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_faq.php,v 1.4.2.3 2002/12/18 15:40:20 psotfx Exp $
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
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\";
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//

$faq[] = array("--","Loginiranje i Registracija");
$faq[] = array("Za¹to se ne mogu loginirati?", "<br />Jesi li se <i>registrirao/la</i>? Mora¹ se registrirati kako bi se mogao/la loginirati na forum.<br /> Da li si <i>iskljuèen/a</i> s foruma [zabranjen ti je pristup]? Ako jesi, [kod loginiranja æe¹ vidjeti poruku o tome], kontaktiraj administratora/icu kako bi saznao/la razlog(e) iskljuèenja.<br /> Da li si upisao/la <i>toène podatke</i> za loginiranje? Provjeri korisnièko ime i zaporku.<br />Ukoliko si eliminirao/la sve tri gornje moguænosti, i jo¹ uvijek se ne mo¾e¹ loginirati, kontaktiraj administratora/icu [da provjeri ¹to (ni)je u redu s tvojim korisnièkim raèunom].<br />");
$faq[] = array("Za¹to se uopæe moram registrirati?", "<br />Ne mora¹ ukoliko administrator/ica nije postavio/la uvjet da samo registrirane osobe mogu postati.<br />Bilo kako bilo, Registracijom æe¹ dobiti pristup dodatnim opcijama koje nisu dostupne neregistriranim osobama [Avatari, privatne poruke, e-mailovi, Korisnièke grupe, itd.].<br />S obzirom da Registracija traje svega nekoliko minuta, preporuèljivo je da se registrira¹.<br />");
$faq[] = array("Kako mogu onemoguæiti automatsko odjavljivanje s foruma?", "<br />Ako ne upali¹ opciju <i>Loginiraj me automatski</i> kada se loginira¹, forum æe te dr¾ati loginiranim/om samo za tvojeg boravka na forumu [odjavit æe te kad ode¹ s foruma]. To spreèava zlouporabu tvojeg korisnièkog raèuna.<br />Da bi ostao/la loginiran/a, upali¹ opciju <i>Loginiraj me automatski</i> prilikom loginiranja [¹to nije preporuèljivo ako forumu pristupa¹ s tuðeg, a ne sa svojeg raèunala].<br />");
$faq[] = array("Kako mogu onemoguæiti pojavu mog korisnièkog imena na Online popisu?", "<br />U svom korisnièkom profilu upali¹ opciju <i>Sakrij moj online status</i> - èime æe¹ [p]ostati vidljiv/a samo sebi i administratoru/ici, a za ostale æe¹ postati skriven/a.<br />");
$faq[] = array("Izgubih zaporku!", "<br />Nije smak svijeta! Jest da je tvoja trenutna zaporka izgubljena [jer je kriptirana u bazi i ne mo¾e ti biti ponovo poslana], no, mo¾e¹ zatra¾iti novu.<br />Klikne¹ na <i>Login</i> te na stranici koja æe ti se otvoriti klikne¹ na <i>Zaboravih zaporku</i>. Daljnje upute æe ti stiæi e-mailom.<br />");
$faq[] = array("Registrirah se, ali se ne mogu loginirati!", "<br />Prvo provjeri da li si unio/la toèno <i>korisnièko ime</i> i <i>zaporku</i>.<br />Ako jesi, dogodila se jedna od dvije moguæe stvari: ako si prilikom Registracije, a COPPA podr¹ka je bila omoguæena, kliknuo/la na <i>Sla¾em se i imam manje od 13 godina</i> morat æe¹ slijediti upute koje su ti stigle e-mailom; ili je mo¾da potrebna aktivacija tvojeg korisnièkog raèuna [za ¹to vidje obavijest ili prilikom same Registracije ili ti je stigla e-mailom].<br />Ukoliko si eliminirao/la obje gornje moguænosti, i jo¹ uvijek se ne mo¾e¹ loginirati, kontaktiraj administratora/icu [da provjeri ¹to (ni)je u redu s tvojim korisnièkim raèunom].<br />");
$faq[] = array("Registrirah se davno, ali se sada vi¹e ne mogu loginirati!", "<br />Dva su moguæa razloga: ili si upisao/la <i>netoèno</i> korisnièko ime i/ili zaporku; ili je administrator/ica <i>izbrisao/la</i> tvoj korisnièki raèun. Ukoliko je u pitanju potonje: mo¾da nikada nisi ni¹ta postao/la, [uobièajeno je periodièno izbrisivanje korisnièkih raèuna korisnika/ca koji/e ni¹ta ne postaju kako bi se smanjila velièina baze], pa se poku¹aj ponovo registrirati.<br />");

$faq[] = array("--","Korisnièke postavke");
$faq[] = array("Kako mogu promijeniti svoje postavke?", "<br />[Sve tvoje postavke, ako si registriran/a, su spremljene u bazi.]<br/><i>Loginira¹ se</i> i klikne¹ na link <i>Profil</i> ¹to æe te odvesti na stranicu na kojoj mo¾e¹ promijenite sve svoje postavke.<br />");
$faq[] = array("Ne¹to ne valja s prikazom vremena!", "<br />Vrijeme je gotovo uvijek toèno prikazano, no, mo¾e biti da je ono ¹to vidi¹ vrijeme <i>druge vremenske zone</i>. Ako je to sluèaj, promijeni postavke svojeg korisnièkog profila tako da izabere¹ onu vremensku zonu koja odgovara podruèju u kojem se nalazi¹. Uzmi u obzir da mijenjanje vremenske zone, kao i veæinu postavki, mo¾e napraviti samo registrirani/a korisnik/ca.<br />");
$faq[] = array("Promijenih vremensku zonu, ali je vrijeme i dalje netoèno prikazano!", "<br />Ako si siguran/na da si postavio/la toènu vremensku zonu, ali je vrijeme i dalje netoèno prikazano, najvjerojatniji razlog je <i>ljetno vrijeme</i>. Forum nema postavke praæenja prelaska izmeðu standardnog i ljetnog vremena ¹to æe reæi da prilikom ljetnog vremena vrijeme prikazuje s razlikom od sat vremena u odnosu na pravo lokalno vrijeme.<br />");
$faq[] = array("Mog jezika nema na popisu!", "<br />Dva su moguæa razloga: ili administrator/ica <i>nije instalirao/la</i> tvoj jezik ili forum <i>nije preveden</i> na tvoj jezik.<br />Pitaj administratora/icu foruma da li mo¾e instalirati paket za jezik koji ¾eli¹. Ukoliko ne postoji prijevod na tvoj jezik - slobodno ga napravi. Vi¹e informacija o tome mo¾e¹ naæi na sljedeæem linku: <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>.<br />");
$faq[] = array("©to moram napraviti da bi se vidjela slika ispod mog korisnièkog imena?", "<br />Prilikom pregledavanja postova moguæe je vidjeti dvije slike ispod tvojeg korisnièkog imena.<br />Prva slika je povezana s tvojim statusom; obièno su to zvjezdice/blokovi koji oznaèavaju: koliko si postova postao/la odnosno tvoju funkciju na forumu [npr. administrator/ica].<br />Ispod nje se mo¾e nalaziti veæa slika zvana Avatar [obièno jedinstvena/osobna za svakog/u korisnika/cu].<br />Dopu¹tenja o kori¹tenju Statusnica/Avatara, kao i izbor dostupnosti istih, daje administrator/ica foruma [slobodno ga/ju kontaktiraj (sa) zamolbom o dopu¹tenju Statusnica/Avatara ukoliko isto/a nije dao/la].<br />");
$faq[] = array("Kako mogu promijeniti svoj status?", "<br />U pravilu, svoj status ne mo¾e¹ direktno promijeniti.<br />Veæina foruma koristi statuse da prika¾e broj postova koje je postao/la odreðeni/a korisnik/ca, te da identificira korisnike/ce koji/e obavljaju odreðene funkcije na forumu [obièno oni/e imaju poseban status, npr. administratori/ce, moderatori/ce].<br />Zloupotrebljavanje foruma, u smislu postanja puno postova samo zato da bi se dosegao ¹to veæi status, nema nikakvog smisla jer administratori(ce)/moderatori(ce) mogu <i>smanjiti</i> neèiji status [npr. smanjenjem broja postova...].<br />");
$faq[] = array("Za¹to se moram loginirati kada ¾elim korisniku/ci foruma poslati e-mail?", "<br />Ukoliko je administrator/ica omoguæio/la slanje e-mailova korisnicima/ama foruma preko ugraðenog e-mail obrasca - tu opciju mogu koristiti samo registrirani/e korisnici/e [èime se spreèava zlouporaba forumova e-mail sistema od strane anonimnih osoba.]<br />");

$faq[] = array("--","Postanje");
$faq[] = array("Kako mogu postati [objaviti] temu/post na forumu?", "<br />Klikne¹ na odgovarajuæi gumb na forumu/temi [npr. <i>nova tema</i>, <i>odgovori</i>...].<br />Radnje koje (ne)mo¾e¹ raditi su uvijek prikazane na dnu ekrana foruma/teme [npr. <i>Mo¾e¹ zapoèinjati nove teme</i>, <i>Ne mo¾e¹ zapoèinjati nove teme</i>...].<br />Ovisno o tome kako je administrator/ica odredio/la, postanje mo¾e biti omoguæeno svima ili, pak, samo registriranim korisnicima/ama.<br />");
$faq[] = array("Kako mogu urediti/izbrisati post?", "<br />Post mo¾e¹ urediti klikom na gumb <i>uredi</i>.<br />Primijetit æe¹ da neke postove neæe¹ moæi naknadno ureðivati/urediti [npr. ako je u meðuvremenu tema oznaèena kao zakljuèana].<br />Post mo¾e¹ izbrisati klikom na gumb <i>izbri¹i</i>. Primijetit æe¹ da neke postove neæe¹ moæi izbrisati [npr. ako je u meðuvremenu netko odgovorio na njih].<br />Postoji moguænost da administrator(ica)/moderator(ica) izmijeni/izbri¹e tvoj post [u prvom sluèaju bi svakako trebao/la napisati opasku ¹to je i za¹to izmijenio/la].<br />");
$faq[] = array("Kako mogu dodati potpis?", "<br />Potpis mo¾e¹ napraviti/urediti u svom korisnièkom profilu.<br />Ako si upalio/la opciju da se potpis automatski dodaje svim tvojim postovima/porukama, a  u neki post/poruku ne ¾eli¹ dodati potpis, jednostavno za vrijeme pisanja samog posta/poruke odoznaèi¹ opciju dodavanja potpisa.<br />Ako nisi upalio/la opciju da se potpis automatski dodaje svim tvojim postovima/porukama, a  u neki post/poruku ¾eli¹ dodati potpis, jednostavno za vrijeme pisanja samog posta/poruke oznaèi¹ opciju dodavanja potpisa.<br />");
$faq[] = array("Kako mogu kreirati anketu?", "<br />Kada zapoène¹ [otvori¹] novu temu [ili izmijeni¹ prvi post postojeæe teme - ako ima¹ dopu¹tenje] vidjet æe¹ formu <i>Anketa</i> ispod okvira za pisanje teksta posta [ako to ne vidi¹, vjerojatno nema¹ dopu¹tenje za kreiranje anketa]. Upi¹e¹ pitanje i [barem] dva moguæa odgovora - kojih, unaprijed, za sve ankete, maksimalni limit odreðuje administrator/ica [da bi dodao/la odgovor klikne¹ na <i>Dodaj odgovor</i>]. Mo¾e¹ postaviti i vremensko ogranièenje trajanja ankete [upi¹e¹ broj dana; 0 = neogranièeno].<br />");
$faq[] = array("Kako mogu urediti/izbrisati anketu?", "<br />Ankete mo¾e ureðivati/urediti/izbrisati samo ona/j koja/i ih je i kreirala/o, moderator/ica i/ili administrator/ica. Da bi izmijenio/la anketu, ako ima¹ dopu¹tenje, uredi¹ prvi post u temi [ako je kreirana, anketa se uvijek nalazi u prvom postu u temi]. Ti anketu mo¾e¹ izmijeniti samo ako nitko jo¹ nije glasovao, dok ju moderatori(ce)/administratori(ce), mogu mijenjati bilo kada.<br />Anketu mo¾e¹ izbrisati samo ako nitko jo¹ nije glasovao.<br />");
$faq[] = array("Za¹to ne mogu pristupiti forumu?", "<br />Nekim forumima mogu pristupiti samo odreðeni/e korisnici/e i/ili Korisnièke grupe. Za pregledavanje, postanje... na takvim forumima treba ti posebna autorizacija koju mo¾e¹ (za)tra¾iti/dobiti samo od moderatora(ice)/administratora(ice).<br />");
$faq[] = array("Za¹to ne mogu glasovati u anketama?", "<br />Da bi se sprijeèilo namje¹tanje rezultata, samo registrirani/e korisnici/e mogu glasovati u anketama. Ukoliko jesi registrirani/a korisnik/ca, a ipak ne mo¾e¹ glasovati - nema¹ potrebita prava pristupa.<br />");
$faq[] = array("--","Ureðivanje i tipovi tema");
$faq[] = array("©to je BBCode?", "<br />BBCode je specijalna implementacija HTML-a.<br />Moguænost kori¹tenja BBCode-a daje administrator/ica foruma aktiviranjem/deaktiviranjem ove opcije. Bez obzira na to ¹to je administrator/ica odredio/la, opcionalno sam/a mo¾e¹ deaktivirati kori¹tenje BBCode-a.<br />BBCode je slièan HTML-u u stilu; tagovi se umeæu u vitièaste zagrade [i] [umjesto &lt;i&gt;] - ¹to nudi veæu kontrolu prikaza. Kod [tagovi] se mo¾e pisati ruèno, no, ovisno o predlo¹ku kojeg koristi¹, vidjet æe¹ da je dodavanje BBCode-a postovima moguæe i putem suèelja iznad prostora za post [poruku] na obrascu za pisanje postova.<br />Za vi¹e informacija o BBCode-u pogledaj Vodiè kojemu mo¾e¹ pristupiti sa stranice za pisanje/ureðivanje postova.<br />");
$faq[] = array("Smijem li koristiti HTML?", "<br />Moguænost kori¹tenja HTML-a daje administrator/ica foruma aktiviranjem/deaktiviranjem ove opcije. Bez obzira na to ¹to je administrator/ica odredio/la, ti opcionalno sam/a mo¾e¹ deaktivirati kori¹tenje HTML-a.<br />Kod kori¹tenja HTML-a, primijetit æe¹ da rade samo pojedini tagovi [oni koje je dopustio/la administrator/ica] - to je zbog onemoguæavanja zlouporabe foruma.<br />");
$faq[] = array("©to su Smajliæi?", "<br />Smajliæi [Smileys/Emoticons] su male slièice koje <i>prikazuju</i> emocije/razmi¹ljanja osobe [koja ih je <i>ubacila</i> u post].<br />Smajliæe u post mo¾e¹ <i>ubaciti</i> na dva naèina: upisivanjem kratkog koda [ako je administrator/ica odobrio/la, svaki Smajliæ ima svoj vlastiti kod] i/ili klikom na Smajliæa [Smajliæi se nalaze u sklopu obrasca za pisanje postova; u pravilu se vidi samo <i>prvih</i> 20, a ostale mo¾e¹ vidjeti (i <i>ubaciti</i>) klikom na <i>Ostali Smajliæi</i>].<br />Nije preporuèljivo ubacivati/ubaciti puno Smajliæa u post jer se time gube èitljivost i preglednost.<br />");
$faq[] = array("Kako mogu postati slike?", "<br />Postoje dvije bitne stvari koje treba zapamtiti kod postanja slika: prvo, mnogi/e korisnici/e ne vole puno slika u porukama, i drugo, slika koju umeæe¹/umetne¹ mora biti dostupna na Internetu [Ne mo¾e postojati samo na tvojem raèunalu - osim ako ima¹ webserver!]. Trenutno ne postoji naèin pohranjivanja slika lokalno pomoæu phpBB-a [oèekuje se da æe sve ovo biti rije¹eno u sljedeæem izdanju phpBB-a].<br />Da bi postao/la sliku: mora¹ obuhvatiti URL, na kojem se slika nalazi, sa BBCode [img][/img] tagovima; odnosno, ako je dopu¹teno, upotrijebiti HTML tagove.<br />Npr.<br />[img]http://ime_domene/ime_slike[/img]  ([img]http://www.nekaj.hr/slika.jpg[/img])<br />odnosno<br />&lt;img src=\"http://ime_domene/ime_slike\"&gt; (&lt;img src=\"http://www.nekaj.hr/slika.jpg\"&gt;).<br />");
$faq[] = array("©to su Obavijesti?", "<br />Obavijesti su postovi koji èesto sadr¾e va¾ne informacije ¹to æe reæi da bi ih bilo pametno proèitati èim ih uoèi¹.<br />Pojavljuju se na vrhu svake stranice foruma na kojem su postane.<br />Administrator/ica odreðuje tko sve ima pravo postati Obavijesti.<br />");
$faq[] = array("©to je \"Va¾no\"?", "<br />\"Va¾no\" su postovi koji èesto sadr¾e va¾ne informacije ¹to æe reæi da bi ih bilo pametno proèitati èim ih uoèi¹.<br />Pojavljuju se na vrhu stranice foruma [ispod eventualnih Obavijesti] na kojem su postani.<br />Administrator/ica odreðuje tko ih sve ima pravo postati.<br />");
$faq[] = array("©to su Zakljuèane teme?", "<br />Zakljuèane teme su teme koje je moderator(ica)/administrator(ica) [zbog nekog, a mo¾e ih biti puno, razloga] zakljuèao/la.<br />Moguæe ih je samo pregledavati [dakle, nije moguæe ureðivati/izbrisati... postove...]. Ankete koje se nalaze u njima [ako nisu po odreðenju] zavr¹avaju istog trena kada moderator(ica)/administrator(ica) zakljuèa temu.<br />");
$faq[] = array("--","Stupnjevanje korisnika/ca i Korisnièke grupe");
$faq[] = array("©to su administratori/ce?", "<br />Administratori/ce su osobe s najvi¹om razinom kontrole nad cijelim forumom.<br />Mogu kontrolirati sve aspekte foruma [postavljanje dopu¹tenja, iskljuèivanje korisnika/ca, stvaranje Korisnièkih grupa/moderatora(ica), itd.].<br />");
$faq[] = array("©to su moderatori/ce?", "<br />Moderatori/ce su osobe èiji je <i>posao</i> odr¾avanje foruma.<br />Imaju ovlasti mijenjanja/izbrisivanja postova, zakljuèavanja/otkljuèavanja/premje¹tanja/izbrisivanja/razdvajanja tema u forumima koje odr¾avaju.<br />Tu su i da bi sprijeèili/e korisnike/ce od skretanja s tema/objavljivanja nedopu¹tenih sadr¾aja...<br />");
$faq[] = array("©to su Korisnièke grupe?", "<br />Korisnièke grupe su grupe u koje administratori/ce grupiraju korisnike/ce.<br />Svaki/a korisnik/ca mo¾e pripadati veæem broju Korisnièkih grupa.<br />Svakoj Korisnièkoj grupi mogu biti dodijeljena individualna prava pristupa, ¹to administratorima/cama olak¹ava dodjeljivanje odreðenih prava odreðenim korisnicima/ama [npr. progla¹avanje vi¹e korisnika/ca moderatorima/cama foruma].<br />");
$faq[] = array("Kako se mogu pridru¾iti Korisnièkoj grupi?", "<br />Klikne¹ na <i>Korisnièke grupe</i> ¹to æe te odvesti na stranicu na kojoj æe¹ vidjeti Korisnièke grupe.<br />Nemaju sve grupe <i>otvoren pristup</i>; neke su zatvorene, neke skrivene...<br />Ako ima¹ pristup Korisnièkoj grupi, za pridru¾ivanje klikne¹ na odgovarajuæu naredbu [obièno <i>Pridru¾i se grupi</i>].<br />Ako ti moderator/ica odbije zahtjev bilo bi lijepo da ga/ju ne gnjavi¹ tra¾enjem obja¹njenja - jer, ako se zaista dogodilo da ti je odbio/la zahtjev - sigurno je imao/la dobar razlog.<br />");
$faq[] = array("Kako mogu postati moderator/ica Korisnièke grupe?", "<br />Korisnièke grupe inicijalno kreira administrator/ica pri èemu odmah odreðuje i moderatora(e)/icu(e).<br />Ukoliko ¾eli¹ postati moderatorom/icom veæ postojeæe Korisnièke grupe ili, pak, (za)tra¾iti otvaranje nove Korisnièke grupe koju ¾eli¹ moderirati - kontaktiraj administratora/icu [npr. privatnom porukom].<br />");

$faq[] = array("--","Privatne poruke");
$faq[] = array("Ne mogu poslati privatnu poruku!", "<br />Tri su moguæa razloga:<br /> - ili nisi registriran(a)/loginiran(a);<br /> - ili je administrator/ica onesposobio/la privatne poruke za cijeli forum;<br /> - ili je administrator/ica tebe sprijeèio/la u slanju privatnih poruka.<br />U potonjem sluèaju zatra¾i od administratora/ice obja¹njenje.<br />");
$faq[] = array("Dobivam ne¾eljene privatne poruke!", "<br />U planu je dodavanje liste za ignoriranje u sistemu privatnih poruka. Do tada, ako i dalje dobiva¹ ne¾eljene privatne poruke, obavijesti administratora/icu [ima ovlasti sprijeèiti korisnika(e)/cu(e) u slanju privatnih poruka ikome].<br />");
$faq[] = array("Primih spamerski/uvredljiv e-mail od nekoga s ovog foruma!", "<br />E-mail obrazac foruma ukljuèuje osiguranje koje prati korisnike/ce koji/e ¹alju poruke. E-mailiraj administratora/icu s obavijesti o tome [prilo¾i èitav e-mail, ukljuèujuæi i zaglavlje - ono sadr¾i detalje o korisniku/ci koji/a je poslao/la e-mail]. Po primitku tvojeg e-maila, administrator/ica mo¾e poduzeti za to predviðene mjere.<br />");

//
// These entries should remain in all languages and for all modifications
//

$faq[] = array("--","phpBB 2");
$faq[] = array("Tko je napisao ovaj forum?", "<br />Ovaj software [u njegovom originalnom obliku] napravljen je i objavljen od strane <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Groupe</a>. Dostupan je pod GNU General Public Licence i mo¾e se slobodno distribuirati [klikni na <a href=\"http://www.phpbb.com/\" target=\"_blank\">link</a> za detalje]. <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Groupa</a> zadr¾ava sva autorska prava na ovaj software.<br />");
$faq[] = array("Za¹to X karakteristika nije dostupna?", "<br />Ako smatra¹ da X karakteristika treba biti dodana, posjeti <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpbb.com</a> i pogledaj ¹to o tome <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Groupa</a> ima za reæi [nemoj zahtjeve za ovime postati na <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpbb.com</a> forumu]. Proèitaj na forumima stajali¹te <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Groupe</a> o ovome i prati proceduru koja je tamo naznaèena.<br />");
$faq[] = array("Koga kontaktirati u vezi zlouporabe/pravnih stvari vezanih uz ovaj forum?", "<br />Kontaktiraj administratora(e)/icu(e) foruma. Ako ga/ju/ih ne mo¾e¹ naæi, kontaktiraj moderatore/ice foruma i njih pitaj koga bi trebao/la pitati. Ako i dalje ne dobije¹ odgovor, kontaktiraj vlasnika/cu domene ili pru¾atelja usluga. <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Groupa</a> nema apsolutno nikakvu kontrolu i ne mo¾e ni u kojem sluèaju odgovarati za to kako se, gdje i od strane koga ovaj forum koristi. Potpuno je besmisleno kontaktirati <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Groupu</a> u vezi bilo kakve pravne stvari koja nije direktno vezana uz <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpbb.com</a> Web stranice ili <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB</a> software. Ako e-mailira¹ <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Groupu</a> oko toga kako bilo koja treæa stran(k)a koristi ovaj software - ne oèekuj odgovor.<br />");

/***************************************************************************
   *   ANÈI - START
  *   <NE bri¹i i NE mijenjaj!>
  *   Danas æe biti toplo i sunèano.
  *   Anèica Seèan [Ancica Secan].
  *   Url: http://ancica.sunceko.net.
 ***************************************************************************/
$faq[] = array("--","O prijevodu");
$faq[] = array("Tko i kako do?", "<br />Ovaj prijevod, s engleskog [originalna verzija] na hrvatski, u potpunosti, napravila je <a href=\"http://ancica.sunceko.net/\" target=\"_blank\">Anèica Seèan</a>.<br />[U kompletu, s prijevodom, dolaze i lokalizirane slièke.]<br />[Zadnju] Slu¾benu verziju ovog prijevoda mo¾e¹ skinuti sa <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a>.<br />[Zadnju] NeSlu¾benu verziju ovog prijevoda mo¾e¹ skinuti sa <a href=\"http://forum.sunceko.net/\" target=\"_blank\">forum.sunceko.net</a>.<br />");
/***************************************************************************
  *   Danas æe biti toplo i sunèano.
  *   </NE bri¹i i NE mijenjaj!>
   *   ANÈI - END
 ***************************************************************************/

//
// This ends the FAQ entries...
//

?>