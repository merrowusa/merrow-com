<?php
/***************************************************************************
 *                         lang_bbcode.php [Breton]
 *                            -------------------
 *   begin                : Mon Sep 13 2004
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.3.2.2 2002/12/21 22:26:02 psotfx Exp $
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
 
/* CONTRIBUTORS 
	Translation produced by Malo-net
	http://malomorvan.free.fr/
*/ 

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
  
$faq[] = array("--","Digoradur");
$faq[] = array("Petra eo ar BBCode ?", "Ur c'heflouerañ ispisial deus an HTML eo ar BBCode. Ar merour an hini eo a zibab enaouiñ pe get ar BBCode. P'ho peus c'hoant e c'hellit dizenaouiñ ar BBCode e-keit ma skrivit ur gemennadenn. Damheñvel eo doare ar BBCode ouzh hini an HTML, etre krochedoù [ ha ] emañ ar balizennoù kentoc'h eget etre re &lt; ha &gt;, ha gwelloc'h eo evit merañ an doare ma vo diskouezet un destenn. Peurliesañ e vo trawalc'h klikañ war nozelennoù evit implijout ar BBCode. Ar sturiell-mañ a c'hellfe sikour ac'hanoc'h koulskoude.");

$faq[] = array("--","Stumm an destenn");
$faq[] = array("Skrivañ un destenn druz, stouet, pe islinennet", "Balizennoù ar BBCode a aotre ac'hanoc'h da gemm buan stumm ho testenn. En doare-mañ e vez graet: <ul><li>Evit drusaat un destenn, lakait anezhañ etre <b>[b]</b>ha<b>[/b]</b>, da skouer: <br /><br /><b>[b]</b>Salud<b>[/b]</b><br /><br />a roio <b>Salud</b></li><li>Evit islinennañ un destenn,lakait anezhañ etre <b>[u]</b> ha<b>[/u]</b>, da skouer:<br /><br /><b>[u]</b>Demat<b>[/u]</b><br /><br />a roio <u>Demat</u></li><li>Evit stouañ un destenn, lakait anezhañ etre<b>[i]</b> ha <b>[/i]</b>, da skouer:<br /><br /><b>[i]</b>Dreist<b>[/i]</b>eo !<br /><br />a roio <i>Dreist</i>eo !</li></ul>");
$faq[] = array("Kemm ment ha liv an destenn", "Sed amañ ar balizennoù da implijout evit kemm ment pe liv ho testenn. Dalc'hit soñj e vo ar c'hemm hervez ho merdeer hag ho reizhiad korvoiñ: <ul><li>Kemmet 'vez liv un destenn o lakaat anezhañ e-barzh <b>[color=][/color]</b>. Gallout a rit reiñ anv e saozneg ul liv implijet kalzik (da skouer: red, blue, yellow, hag all.), pe neuze ur c'hod dre c'hwec'h degad, da skouer: #FFFFFF, #000000. Da skouer, evit kaout un destenn e ruz e c'hellit lakaat:<br /><br /><b>[color=red]</b>Salud !<b>[/color]</b><br /><br />pe<br /><br /><b>[color=#FF0000]</b>Salud !<b>[/color]</b><br /><br />. An daou a roio <span style=\"color:red\">Salud !</span></li><li>En hevelep doare e c'hellit kemm ment ho testenn, oc'h implijout <b>[size=][/size]</b>. A-hervez patrom ar bajenn e vo efedoù ar balizenn-se. Ar doare aliet da skrivañ ar ment a zo skrivañ an niver a bixelioù e rank bezañ, etre 1 (ken bihan ma vo diweladus) ha 29 (bras-kenañ). Da skouer:<br /><br /><b>[size=9]</b>BIHAN<b>[/size]</b><br /><br />a roio <span style=\"font-size:9px\">BIHAN</span><br /><br />, ha:<br /><br /><b>[size=24]</b>DIVENT !<b>[/size]</b><br /><br />a roio <span style=\"font-size:24px\">DIVENT !</span></li></ul>");
$faq[] = array("Ha gallout a ran implijout meur a valizenn asambles ?", "Evel just. Da skouer, evit disachañ evezh unan bennak e c'hellit skrivañ::<br /><br /><b>[size=18][color=red][b]</b>SELL OUZHIN!<b>[/b][/color][/size]</b><br /><br />, ar pezh a roio <span style=\"color:red;font-size:18px\"><b>SELL OUZHIN !</b></span><br /><br />Koulskoude, n'eo ket aliet da skrivañ un destenn hir gant ar stumm-se ! Dalc'hit soñj eo deoc'h da serriñ ar balizennoù en un doare reizh (evel kromelloù). Da skouer, direizh eo se :<br /><br /><b>[b][u]</b>Direizh eo se<b>[/b][/u]</b>. Rankout a rafe bezañ ::<br /><br /><b>[b][u]</b>Reizh eo se<b>[/u][/b]</b>.");

$faq[] = array("--","Arroudennoù ha testenn gant distokoù ingal");
$faq[] = array("Arroudennoù er respontoù", "Daou doare a zo da arroudenniñ un destenn, gant ur menneg pe get.<ul><li>Pa impijit ar c'hefridi Arroudenn evit respont d'ur gemennadenn war ur forum, ho peus merzhet sur a-walc'h emañ an destenn arroudennet etre <b>[quote=\"\"]</b> ha <b>[/quote]</b>. Gant an hentenn-se e c'hellit arroudenniñ gant ur menneg d'an hini en deus skrivet ar pezh a aroudennit, pe gant forzh petra all, dibabet ganeoc'h ! Da skouer, evit arroudenniñ un destenn skrivet gant Ao. Roparzh, e rankit skrivañ :<br /><br /><b>[quote=\"Ao. Roparzh\"]</b>Amañ e ranko an destenn skrivet gantañ bezañ lakaet.<b>[/quote]</b><br /><br />En dra-se a ouzhpenno e-unan <b>Ao. Roparzh en deus skrivet :</b> d'ho testenn. Dalc'hit soñj e <b>rankit</b> lakaat an tiredoù \"\" tro-dro d'ho arroudenn, n'int ket diret.</li><li>Gant an eil hentenn e c'hellit ober un arroudenn hep mennegiñ en hini en deus skrivet ar pezh a arroudennit. Evit ober ganti, lakait ho testenn etre ar balizennoù <b>[quote]</b> ha <b>[/quote]</b>. Pa vo lennet ho testenn, e vo diskouezet <b>Arroudenn</b> a-raok ho testenn.</li></ul>");
$faq[] = array("Tarzh pe skritur gant distokoù ingal", "M'ho peus c'hoant da ziskouez linennoù tarzh, pe traoù all a rank bezañ diskouezet gant ur skritur distokoù ingal ganti (Police Courrier,  da skouer) e rankit lakaat an destenn pe an tarzh er balizennoù <b>[code][/code]</b>, da skouer: <br /><br /><b>[code]</b>echo \"Tarzh eo an dra-se\";<b>[/code]</b><br /><br />Forzh peseurt urzh a gemm-stumm entoueziet er balizennoù <b>[code][/code]</b> a vo sevenet.");

$faq[] = array("--","Sevel listennoù");
$faq[] = array("Sevel ul listenn hep urzh", "Daou zoare listennoù disheñvel a vez aotreet gant ar BBCode : ar re urzhiet hag ar re hep urzh. Heñvel eo o doare ouzh ar re e HTML. En ul listenn hep urzh e vo ar poentoù an eil dindan egile, gant ur c'wenenn dirak pep linenn. Implijit <b>[list][/list]</b> evit krouiñ ul listenn hep urzh, ha lakait <b>[*]</b> evit pep poent. Da skouer, evit sevel listenn ho livioù muiañ-karet, skrivit :<br /><br /><b>[list]</b><br /><b>[*]</b>Ruz<br /><b>[*]</b>Glas<br /><b>[*]</b>Melen<br /><b>[/list]</b><br /><br />Reiñ a raio ul listenn evel-se:<ul><li>Ruz</li><li>Glas</li><li>Melen</li></ul>");
$faq[] = array("Sevel ul listenn urzhiet", "Gant an eil doare listenn e c'hellit dibab ar pezh a vo lakaet a-raok pep poent. Evit krouiñ ul listenn evel-se e rankit implijout <b>[list=1][/list]</b> evit ul listenn niverennet pe <b>[list=a][/list]</b> evit ul listenn lizherennet. Evel evit al listennoù hep urzh eo dav lakaat <b>[*]</b> da bep poent. Da skouer:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Genel<br /><b>[*]</b>Bevañ<br /><b>[*]</b>Mervel<br /><b>[/list]</b><br /><br />a roio an dra-se:<ol type=\"1\"><li>Genel</li><li>Bevañ</li><li>Mervel</li></ol>Ur skouer evit ul listenn lizherennet :<br /><br /><b>[list=a]</b><br /><b>[*]</b>Dibab kentañ<br /><b>[*]</b>Eil dibab<br /><b>[*]</b>Trede dibab<br /><b>[/list]</b><br /><br />a roio :<ol type=\"a\"><li>Dibab kentañ</li><li>Eil dibab</li><li>Trede dibab</li></ol>");

$faq[] = array("--", "Sevel liammoù");
$faq[] = array("Sevel ul liamm davet ul lec'hienn all", "Meur a doare a zo da sevel liammoù gant ar BBCode.<ul><li>Ar balizennoù <b>[url=][/url]</b>a vez implijet gant an hentenn gentañ,an holl draoù skrivet etre = ha ] a vo lakaet da chomlec'h al liamm. Da skouer, m'ho peus c'hoant da sevel ul liamm davet phpBB.com e rankit implijout :<br /><br /><b>[url=http://www.phpbb.com/]</b>Kit da welet pnpBB !<b>[/url]</b><br /><br />Krouiñ a raio al liamm-se : <a href=\"http://www.phpbb.com/\" target=\"_blank\">Kit da welet phpBB !</a> Merzhout a reoc'h e vez digoret ur prenestr nevez gant all liamm, evel-se e c'hell an implijerien kenderc'hel da implijout ar forum.</li><li>M'ho peus c'hoant e vefe diskouezet an URL warn-eeun gant al liamm eo dav implijout : <br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Al liamm-se a vo roet gantañ neuze, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>An draig ouzhpenn a zo war phpBB, anvet eo <i>Liammoù Bruzhudus</i>, ha treiñ a raio e-unan ur chomlec'h en ul liamm hep m'ho pefe da lakaat ur balizenn BBCode pe HTTP://. Da skouer, ma skrivit www.phpbb.com en ho kemennadenn, e vo troet hennezh e-unan e <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> pa vo lennet gant implijerien ar forum.</li><li>AN hevelep tra eo evit ar postelioù :<br /><br /><b>[email]</b>den@domani.com<b>[/email]</b><br /><br />hag a roio <a href=\"emailto:den@domani.com\">den@domani.com</a>, pe, ma skrivit den@domani.com en ho kemennadenn, e vo troet en ul liamm pa vo lennet.</li></ul>Evel evit an holl valizennoù eo dav deoc'h enkelc'hiañ ar balizennoù all, evel <b>[img][/img]</b> (gwelit pelloc'h), <b>[b][/b]</b>, hag all. Evel evit ar balizennoù cheñch-stumm eo dav deoc'h gwiriañ eo lakaet ar balizennoù en un doare reizh, da skouer :<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /><u>n'eo ket </u> reizh, ha gallout a ra lakaat ho kemennadenn da vezañ diverket.Neuze, diwallit !");

$faq[] = array("--", "Lakaat ur skeudenn en ur gemennadenn");
$faq[] = array("Lakaat ur skeudenn en ur gemennadenn", "Gant ar BBCode e c'hellit lakaat skeudennoù en ho kemennadennoù. Daou dra a-bouez a zo da c'houzout koulskoude : da gentañ, ne blij ket d'an implijerien pa vez re a skeudennoù en ur gemennadenn,ha da eil, rankout a ra ar skeudenn bezañ lakaet war ar rouedad dija (ne c'hell ket bezañ war ho urzhiataerezh nemetken, da skouer, nemet ma vefe hennezh ur servijour web foran !).Evit ar mare n'eus doare ebet da enrollañ skeudennoù e-barzh teuliadoù ar forum,met rankout a rafe ar gudenn-se bezañ renket e stumm a zeu phpBB. Evit diskouezh ur skeudenn e rankit enkelc'hiañ URL ar skeudenn gant ar balizennoù <b>[img][/img]</b>. Da skouer :<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Evel ma'z eo bet lavaret uheloc'h e c'hellit lakaat ur skeudenn e-barzh balizennoù <b>[url][/url]</b> da skouer :<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />a rankfe reiñ :<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "A bep seurt");
$faq[] = array("Ha gallout a ran ouzhpennañ ma balizennoù ?", "N'eo ket posubl evit ar mare, met e stumm a zeu phpBB e vu tu deoc'h hen ober.");

//
// This ends the BBCode guide entries
//

?>