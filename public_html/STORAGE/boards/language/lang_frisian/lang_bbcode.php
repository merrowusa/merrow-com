<?php
/***************************************************************************
 *                         lang_bbcode.php [frisian]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.1.2.1 2002/11/14 14:00:11 psotfx Exp $
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
  
$faq[] = array("--","Yntroduksje");
$faq[] = array("Wat is BBKoade?", "BBKoade is in spesjale bewurking fan HTML. Ofsto al dan net BBKoade yn dyn berjochten op it foarum brûke kinst wurdt bepaald troch de behearder. Do kinst BBKOADE oan as úsette yn in nij berjocht. BBKoade is gelyk oan HTML, mar de tags wurde ynsletten yn rjochte haken [ en ] ynstee fan &lt; en &gt; en it jout mear kontrôle oer wat brûkt wurde kin. Alles hinget ôf fan de template dy\'t brûkt wurd atst de BBKOADE yn dyn berjochten brûke kinst fia in klikbare ynterfees boppe it berjochtenfak op dyn ynstjoerformulier.");

$faq[] = array("--","Tekst opmaak");
$faq[] = array("Hoe fet, skean en ûnderstreke tekst meitsje", "BBKoade hat ek tags dy\'t dy helpe kinne om de basisopmaak fan in tekst oan te passen. Dit kin op op tal fan wizen: <ul><li>Om in part fan de tekst yn it fet te toanen pleatst do dy tusken <b>[b][/b]</b>, byg: <br /><br /><b>[b]</b>Hoi<b>[/b]</b><br /><br />wurdt dan <b>Hoi</b></li><li>Foar ûnderstreke tekst brûkst <b>[u][/u]</b>, byg:<br /><br /><b>[u]</b>Middei<b>[/u]</b><br /><br />wurdt <u>Middei</u></li><li>Foar skeane tekst brûkst de <b>[i][/i]</b>, byg:<br /><br />Dit is <b>[i]</b>Geweldich!<b>[/i]</b><br /><br />wurdt: <i>Geweldich!</i></li></ul>");

$faq[] = array("Hoe tekstkleur as grutte oanpasse", "Om de grutte as kleur fan in tekst oan te passen brûkst de folchjende tags. Ferjit net dat de lêzer fan dyn berjochten net de selde webswalker as it selde bestjoeringssysteem hoecht te hawwen. Der kin dus wat ferskil optrede: <ul><li>Tekst in kleurke jaan kin troch de tekst tusken de folchjende tags te pleatsen <b>[color=][/color]</b>. Do kinst in bepaalde kleur brûke (byg. red, blue, yellow, ensfh.) as de heksagonale koade, byg. #FFFFFF, #000000. Om in tekst read te meitsjen brûkst do:<br /><br /><b>[color=red]</b>Hoi!<b>[/color]</b><br /><br />as<br /><br /><b>[color=#FF0000]</b>Hoi!<b>[/color]</b><br /><br />Dit jout beide as risseltaat <span style=\"color:red\">Hallo!</span></li><li>De grutte fan in tekst oanpasse bart hast op de selde wize <b>[size=][/size]</b>. Dizze tag kin ferskille mei de templates dy\'tst brûkst mar it meast brûkte formaat is in nûmerike wearde dy\'t de tekstgrutte wjerjout yn piksels, begjinnend by 1 (sa lyts dat it net iens te sjen is) oant 29 (hiel grut). Byg:<br /><br /><b>[size=9]</b>LYTS<b>[/size]</b><br /><br />wurdt <span style=\"font-size:9px\">LYTS</span><br /><br />en:<br /><br /><b>[size=24]</b>GRUT!<b>[/size]</b><br /><br />wurdt <span style=\"font-size:24px\">GRUT!</span></li></ul>");

$faq[] = array("Kin ik ferskate tags troch elkoar brûke?", "Fansels kin dat, bygelyks om omtinken te freegjen fan immen kinst skriuwe:<br /><br /><b>[size=18][color=red][b]</b>SJOCHST MY WOL!<b>[/b][/color][/size]</b><br /><br />dit jout as risseltaat <span style=\"color:red;font-size:18px\"><b>SJOCHST MY WOL!</b></span><br /><br />Wy riede dy oan dizze tekstfoarm net te faak te brûken! Ferjit net dat alle tags ek wer sletten wurde yn dyn berjocht, en yn de goeie folchoarder. It neigeande is bygelyks net goed:<br /><br /><b>[b][u]</b>Dit is net goed<b>[/b][/u]</b>");

$faq[] = array("--","Kwotes (oanhelling) en fêste-ôfmjittings tekst");
$faq[] = array("Kwotes út in tekst", "Der binne twa wizen om in tekst oan te heljen, mei as sûnder in referinsje.<ul><li>Atst de kwote (oanhelling) funksje brûkst om op in berjocht te antwurdsjen silst sjen dat de tekst fan it berjocht taheakke is oan it finster yn in <b>[quote=\"\"][/quote]</b> blok. Dizze metoade lit ta datst in stik tekst fan immen oars oanhellest. Om bygelyks in stik tekst fan de Webmaster oan te heljen:<br /><br /><b>[quote=\"Webmaster\"]</b>Hjir komt de Webmaster syn tekst<b>[/quote]</b><br /><br />It einrisseltaat pleatst automatysk wat de Webmaster skreaun hat der by foar jo tekst. Tink der om dat der \"\" tekens pleatst wurde <b>moatte</b> om de namme dy\'t oanhelle wurdt!</li><li>De twadde metoade lit dy ta om blyn wat oan te heljen. Dit kin troch de tekst tusken <b>[quote][/quote]</b> tags te pleatsen. Wanear\'tst de tekst besjochst sjochsto Kwote: foar de tekst sels.</li></ul>");

$faq[] = array("Koade foar fêste-ôfmjittings data", "Hasto foar in part fan de tekst as foar in koade in tekst nedich fan fêste ôfmjittings, bygelyks it Courier font moatst de tekst tusken <b>[code][/code]</b> tags pleatse, bygelyks:<br/><br /><b>[code]</b>echo \"Dit is in koade\";<b>[/code]</b><br /><br />Alle brûkte formaten binnen de <b>[code][/code]</b> tags bliuwe dan bewarre atst de tekst letter oppenij besjochst.");

$faq[] = array("--","Listen meitsje");
$faq[] = array("In net oardene list meitsje", "BBKoade hat twa soarten lysten, oardene en net oardene. Dizzen binne eins it selde as harren HTML famylje. In ûnoardene lyst pleatst alle opsommings fuort ûnder inander mei in swart baltsje der foar. Om in net oardene lyst te meitsjen brûkst <b>[list][/list]</b> en om elts ûnderdiel oan te jaan brûkst <b>[*]</b>. Om bygelyks dyn favorite kleuren oan te jaan brûkst do:<br /><br /><b>[list]</b><br /><b>[*]</b>Read<br /><b>[*]</b>Blau<br /><b>[*]</b>Giel<br /><b>[/list]</b><br /><br />Dit makket de ûndersteande lyst:<ul><li>Read</li><li>Blau</li><li>Giel</li></ul>");

$faq[] = array("In oardene lyst meitsje", "De twadde soart lyst, in oardene lyst jout dy kontrôle oer wat der foar elk ûnderdiel stiet. Om in oardene lyst te meitsjen brûkst: <b>[list=1][/list]</b> foar in nûmere lyst en <b>[list=a][/list]</b> foar in alfabetyske. Krekt as by de net oardene lyst wurde de ûnderdielen oanjûn mei <b>[*]</b>. Bygelyks:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Gean nei de winkel<br /><b>[*]</b>Keapje in nije kompjûter<br /><b>[*]</b>Faaks ek in printer<br /><b>[/list]</b><br /><br />makket it ûndersteande:<ol type=\"1\"><li>Gean nei de winkel</li><li>Keapje in nije kompjûter</li><li>Faaks ek in printer</li></ol>Foar in alfabetyske lyst brûkst:<br /><br /><b>[list=a]</b><br /><b>[*]</b>It foarste antwurd<br /><b>[*]</b>It twadde antwurd<br /><b>[*]</b>It tredde antwurd<br /><b>[/list]</b><br /><br />wurdt<ol type=\"a\"><li>It foarste antwurd</li><li>It twadde antwurd</li><li>It tredde antwurd</li></ol>");

$faq[] = array("--", "Ferwizings oanmeitsje");
$faq[] = array("Ferwizing nei in oare side", "BBKoade ûndersteund tal fan wizen om URIs, (Uniform Resource Indicators) te meitsjen better bekend as URLs.<ul><li>De earste dy\'tst brûke kinst is de <b>[url=][/url]</b> tag, watst ek typst nei it = teken sil in URL wurde. Om bygelyks in ferwizing nei Thaeke.com te meitsjen kinst dit brûke:<br /><br /><b>[url=http://www.thaeke.com/]</b>Thaeke.com foar al jo domeinnammen en hosting<b>[/url]</b><br /><br />Dit levert it neigeande risseltaat: <a href=\"http://www.thaeke.com/\" target=\"_blank\">Thaeke.com foar al jo domeinnammen en hosting</a> Dizze ferwizing iepent in nij finster sadat de besiker yn it foarum bliuwe kin.</li><li>Mei de neigeande tag kinst de URL sels as ferwizing opnimme:<br /><br /><b>[url]</b>http://www.thaeke.com/<b>[/url]</b><br /><br />Dit jout de neigeande ferwizing, <a href=\"http://www.thaeke.com/\" target=\"_blank\">http://www.thaeke.com/</a></li><li>No hat phpBB ek noch soks as <i>Magyske Ferwizings</i>, dit makket fan elke URL in ferwizing sûnder dat dêr in koade oan te pas komt. Ek http:// is dan net nedich. Typst do bygelyks www.thaeke.com yn in berjocht dan makket phpBB dêr <a href=\"http://www.thaeke.com/\" target=\"_blank\">www.thaeke.com</a> fan.</li><li>Dit jildt ek foar eameladressen, it is mooglik om in eameladres te spesifisearjen:<br /><br /><b>[email]</b>eamelje@my.net<b>[/email]</b><br /><br />wat dan sa wjerjûn wurdt: <a href=\"eamelje@my.net\">eamelje@my.net</a> mar do kinst ek gewoan eamelje@my.net yntikke. Dit wurdt dan automatysk oerset nei in eamelferwizing.</li></ul>Lykas mei alle BBKoade tags kinst in ferskaat oan tags brûke yn in URL lykas <b>[img][/img]</b> (sjoch it ûnderwerp hjirnei), <b>[b][/b]</b>, ensfh. It is oan jim om de goeie tags te brûken, bygelyks:<br /><br /><b>[url=http://www.thaeke.com/][img]</b>http://www.thaeke.com/plaatsjes/ljip.png<b>[/url][/img]</b><br /><br />is <u>net</u> yn oarder. Dit kin liede ta in fuortheljen fan dyn berjocht, dus hâld it yn de gaten.");

$faq[] = array("--", "Plaatsjes taheakje oan berjochten");
$faq[] = array("In plaatsje taheakje oan in berjocht", "BBKoade hat fansels ek in tag om plaatsjes op it foarum te krijen. Tink der al in bytsje om mei dizze tag; in soad brûkers sitte net te wachtsjen op in soad plaatsjes yn berjochten, dêrneist moat it plaatsje earne op ynternet stean. Op dit stuit kin der gjin ôfbyldings opslein wurde yn phpBB. Om in plaatsje op it foarum te pleatsen moat de URL tusken <b>[img][/img]</b> tags pleatst wurde. Bygelyks:<br /><br/><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />

Lykas yn it boppesteande stikje beskreaun is kinst ôfbyldings ek brûke yn ferwizings troch de neigeande BBKoade te brûken. <b>[url][/url]</b> Bygelyks:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />levert:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Oare");
$faq[] = array("Kin ik myn eigen tags taheakje?", "Nee, net yn phpBB 2.0. Miskien yn in lettere fersy.");

//
// This ends the BBCode guide entries
//

?>