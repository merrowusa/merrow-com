<?php

/***************************************************************************
 *                            lang_admin.php [Frisian]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.4.2.1 2002/05/27 11:58:06 psotfx Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Algemien behear';
$lang['Users'] = 'brûkers behear';
$lang['Groups'] = 'Groeps behear';
$lang['Forums'] = 'Foarum behear';
$lang['Styles'] = 'Styl behear';

$lang['Configuration'] = 'Konfiguraasje';
$lang['Permissions'] = 'Tastimmings';
$lang['Manage'] = 'Management';
$lang['Disallow'] = 'Net Tastiene Nammen';
$lang['Prune'] = 'Pruning';
$lang['Mass_Email'] = 'Bulk Eamel';
$lang['Ranks'] = 'Rangen';
$lang['Smilies'] = 'Emoasje ikoantsjes';
$lang['Ban_Management'] = 'Ban Behear';
$lang['Word_Censor'] = 'Wurd Sensuer';
$lang['Export'] = 'Eksportearje';
$lang['Create_new'] = 'Oanmeitsje';
$lang['Add_new'] = 'Taheakje';
$lang['Backup_DB'] = 'Kopiear Databank';
$lang['Restore_DB'] = 'Herstel Databank';


//
// Index
//
$lang['Admin'] = 'Behear';
$lang['Not_admin'] = 'Do hast gjin rjochten om dit foarum te behearen!';
$lang['Welcome_phpBB'] = 'Wolkom by phpBB';
$lang['Admin_intro'] = 'Bedankt datst foar phpBB keazen hast as dyn foarumprogramma. Dit skerm jout dy in koart oersjoch fan de ferskate statistykjes fan dyn foarum. Do kinst hjir werom komme troch te klikken op de <u>Behearder Yndeks</u> ferwizing yn it lofter fak. Om werom te gean nei de yndeks fan it foarum kinst op it phpBB logo klikke dat ek yn it lofter fak stiet. Mei de oare ferwizings oan de loftserside fan dit skerm kinst elk aspekt fan dyn foarum beheare, elk skerm jout útlis oer it brûken fan it ark.';
$lang['Main_index'] = 'Foarum Yndeks';
$lang['Forum_stats'] = 'Foarum Statistiken';
$lang['Admin_Index'] = 'Behearder Yndeks';
$lang['Preview_forum'] = 'Yn it foar besjen Foarum';

$lang['Click_return_admin_index'] = 'Klik %shjir%s om werom te gean nei de Behearders Yndeks';

$lang['Statistic'] = 'Statistiken';
$lang['Value'] = 'Wearde';
$lang['Number_posts'] = 'Tal berjochten';
$lang['Posts_per_day'] = 'Berjochten per dei';
$lang['Number_topics'] = 'Tal ûnderwerpen';
$lang['Topics_per_day'] = 'Underwerpen per dei';
$lang['Number_users'] = 'Tal brûkers';
$lang['Users_per_day'] = 'brûkers per dei';
$lang['Board_started'] = 'Foarum begûn';
$lang['Avatar_dir_size'] = 'Plaatsjes direktory formaat';
$lang['Database_size'] = 'Databank formaat';
$lang['Gzip_compression'] ='Gzip kompresje';
$lang['Not_available'] = 'Net beskikber';

$lang['ON'] = 'OAN'; // This is for GZip compression
$lang['OFF'] = 'UT';


//
// DB Utils
//
$lang['Database_Utilities'] = 'Databank tapassings';

$lang['Restore'] = 'Weromsette';
$lang['Backup'] = 'Kopy opslaan';
$lang['Restore_explain'] = 'Dit set alle phpBB tabellen folslein werom fanút in bestân. At dyn server it oan kin, kinst do in mei gzip ynpakt tekstbestân oplade, dit wurdt automatysk útpakt. <b>WARSKOGING</B> Dit oerskriuwt alle besteande data. De \'Weromsette\' aksje kin in flink skoft duorje, ferlit dizze side net eart dizze aksje dien is.';
$lang['Backup_explain'] = 'Hjir kinst alle oan phpBB relatearre data opslaan. Wannear\'tst ekstra tabellen oanmakke hast yn de selde databank as dy fan phpBB, dy\'t ek opslein wurde moatte, fier dan de nammen yn, skieden troch komma\'s, yn it \'ekstra tabellen\' tekstvak hjirûnder. Wannear\'t dyn server it oankin kinst it bestân earst mei gzip ynpakke eartst it delhellest.';

$lang['Backup_options'] = 'Kopy opslaan opsjes';
$lang['Start_backup'] = 'Start opslaan kopy';
$lang['Full_backup'] = 'Folsleine kopy';
$lang['Structure_backup'] = 'Allinnich struktuur kopiearje';
$lang['Data_backup'] = 'Allinnich data kopiearje';
$lang['Additional_tables'] = 'Ekstra tabellen';
$lang['Gzip_compress'] = 'Gzip ynpakt bestân';
$lang['Select_file'] = 'Selektearje in bestân';
$lang['Start_Restore'] = 'Start weromsetten';

$lang['Restore_success'] = 'De databank waard súksesfol hersteld.<br /><br />At it goed is is it foarum no wer krekt as as op it tiidstip fan de kopy.';
$lang['Backup_download'] = 'In amerijke, dyn del te heljen bestân komt sa gau mooglik. Wachtsje oant it komt.';
$lang['Backups_not_supported'] = 'It spyt ús mar de databank kin op dit stuit net kopieard wurde op dyn systeem';

$lang['Restore_Error_uploading'] = 'Flater by it opladen fan it bestân';
$lang['Restore_Error_filename'] = 'Probleem mei de bestânsnamme, besykje in oar bestân';
$lang['Restore_Error_decompress'] = 'Kin gjin gzip bestân útpakke, laad in gewoane tekstfersy op';
$lang['Restore_Error_no_file'] = 'Daar waard gjin bestân opladen';


//
// Auth pages
//
$lang['Select_a_User'] = 'Selektearje in brûker';
$lang['Select_a_Group'] = 'Selektearje in groep';
$lang['Select_a_Forum'] = 'Selektearje in foarum';
$lang['Auth_Control_User'] = 'brûkers tastimmingsbehear';
$lang['Auth_Control_Group'] = 'Groeps tastimmingsbehear';
$lang['Auth_Control_Forum'] = 'Foarum tastimmingsbehear';
$lang['Look_up_User'] = 'Sykje in brûker';
$lang['Look_up_Group'] = 'Sykje in groep';
$lang['Look_up_Forum'] = 'Sykje in foarum';

$lang['Group_auth_explain'] = 'Hjir kinst de tastimmings en masterstatus feroarje dy\'t tawezen waarden oan eltse brûkersgroep. Ferjit net dat, wannear\'t de groepstastimmings feroarje, yndividuele brûkers noch altyd tagong ha kinne ta foarums ensfh. Do krijst in warskôging wannear\'t dat it gefal is.';
$lang['User_auth_explain'] = 'Hjir kinst de tastimmings en masterstatus feroarje dy\'t tawezen waarden oan eltse yndividuele brûker. Ferjit net dat, wannear\'t de brûkerstastimmings feroarje, groepsleden noch altyd tagong ha kinne ta foarums ensfh. Do krijst in warskôging wannear\'t dat it gefal is.';
$lang['Forum_auth_explain'] = 'Hjir kinst it tagongsbeliid fan elk foarum oanpasse. Do hast hjirfoar in ienfâldige en in útwreide mooglikheid, de útwreide mooglikheid jout dy mear ynfloed op eltse foarum aksje. Tink der om dat wannear\'t it tastimmingsnivo fan foarums oanpast wurdt, dit ynfloed hat op de aksjes dy\'t brûkers op bepaalde foarums útfiere kinne.';

$lang['Simple_mode'] = 'Ienfâldige Moadus';
$lang['Advanced_mode'] = 'Utwreide Moadus';
$lang['Moderator_status'] = 'Master status';

$lang['Allowed_Access'] = 'Jou tagong';
$lang['Disallowed_Access'] = 'Wegerje tagong';
$lang['Is_Moderator'] = 'Is master';
$lang['Not_Moderator'] = 'Gjin master';

$lang['Conflict_warning'] = 'Tastimmingskonflikt warskôging';
$lang['Conflict_access_userauth'] = 'Dizze brûker hat noch tagong ta dit foarum fia in groep dêr\'t hy as sy part fan útmakket. Do kinst de groepstastimming oanpasse om foar te kommen dat hy as sy hjir gebrûk fan makket. De groepstastimmings (en de foarums wêr\'t it om giet) stean hjirûnder opneamd.';
$lang['Conflict_mod_userauth'] = 'Dizze brûker hat noch master rjochten op dit foarum fia in groep dêr\'t hy as sy part fan útmakket. Do kinst de groepstastimming oanpasse om foar te kommen dat hy as sy noch masterrjochten hat. De rjochten (en de foarums wêr\'t it om giet) stean hjirûnder opneamd.';

$lang['Conflict_access_groupauth'] = 'De folchjende brûker (as brûkers) hat noch tagong ta dit foarum fia de brûkerstastimming. Do kinst de tagongsrjochten oanpasse om foar te kommen dat hy as sy tagongsrjochten hat. De brûkersrjochten (en de foarums wêr\'t it om giet) stean hjirûnder opneamd.';
$lang['Conflict_mod_groupauth'] = 'De folchjende brûker (as brûkers) ha noch master rjochten op dit foarum fia harren brûkerstastimming. Do kinst de brûkerstastimming oanpasse om foar te wêzen dat hy as sy master rjochten hat. De rjochten (en de foarums wêr\'t it om giet) stean hjirûnder opneamd.';

$lang['Public'] = 'Iepenbaar';
$lang['Private'] = 'Privee';
$lang['Registered'] = 'Registrearre';
$lang['Administrators'] = 'Behearders';
$lang['Hidden'] = 'Ferburgen';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'ALL';
$lang['Forum_REG'] = 'REG';
$lang['Forum_PRIVATE'] = 'PRIVEE';
$lang['Forum_MOD'] = 'MASTER';
$lang['Forum_ADMIN'] = 'BEHEAR';

$lang['View'] = 'Besjoch';
$lang['Read'] = 'Lês';
$lang['Post'] = 'Ferstjoer';
$lang['Reply'] = 'Antwurdzje';
$lang['Edit'] = 'Bewurkje';
$lang['Delete'] = 'Fuorthelje';
$lang['Sticky'] = 'Plakkerke';
$lang['Announce'] = 'Oankondiging';
$lang['Vote'] = 'Stimmen';
$lang['Pollcreate'] = 'Fraachpetearke meitsje';

$lang['Permissions'] = 'Tastimming';
$lang['Simple_Permission'] = 'Ienvâldige tastimming';

$lang['User_Level'] = 'brûkersnivo';
$lang['Auth_User'] = 'brûker';
$lang['Auth_Admin'] = 'Behearder';
$lang['Group_memberships'] = 'brûkersgroep lidmaatskip';
$lang['Usergroup_members'] = 'Dizze groep hat de folchjende leden';

$lang['Forum_auth_updated'] = 'Foarum tastimmings oanpast';
$lang['User_auth_updated'] = 'brûkers tastimmings oanpast';
$lang['Group_auth_updated'] = 'Groeps tastimmings oanpast';

$lang['Auth_updated'] = 'Tastimmings bin oanpast';
$lang['Click_return_userauth'] = 'Klik %shjir%s om om werom te gean nei brûkers Tastimmings';
$lang['Click_return_groupauth'] = 'Klik %shjir%s om om werom te gean nei Groeps Tastimmings';
$lang['Click_return_forumauth'] = 'Klik %shjir%s om om werom te gean nei Foarum Tastimmings';


//
// Banning
//
$lang['Ban_control'] = 'Ban Behear';
$lang['Ban_explain'] = 'Hjir kinsto it ferbannen fan brûkers behearje. Do kinst dit berikke troch in spesifike brûker, in persoan as in rige fan IP adressen as hostnammen te ferbannen. Dizze metoade soarget der foar dat de brûker sels net op de yndeksside fan dyn foarum komme kin. Om foar te kommen dat de brûker him as har ûnder in oare brûkersnamme oppenij oanmeld kinst ek ferbannen eameladressen spesifisearje. Tink der oan dat allinnich it ferbannen fan in eameladres net foarkomt dat in brûker ynlogge kin en berjochten pleatst op it foarum. Dêrfoar moatst ien fan de earste wizen brûke.';
$lang['Ban_explain_warn'] = 'Tink der om dat by it ynfieren fan in IP-reeks alle adresssen tusken it begjin en einde op de banlist stean. Der wurdt besocht om it tal adressen yn de databank te minimalisearjen troch, wêr mooglik, automatysk wylde kaarten ta te passen. Wannear\'tst echt in reeks ynfiere wolst, besykje dizze dan lyts te hâlden as better noch, fermeld it spesifike adres.';

$lang['Select_username'] = 'Selektearje in brûkersnamme';
$lang['Select_ip'] = 'Selektearje in IP';
$lang['Select_email'] = 'Selektearje in eameladres';

$lang['Ban_username'] = 'Ban ien as mear spesifike brûkers';
$lang['Ban_username_explain'] = 'Do kinst meardere brûkers yn ien kear ferbanne troch de júste kombinaasje fan mûs en kaaiboerd foar dyn kompjûter en webswalker';

$lang['Ban_IP'] = 'Ban ien as mear IP adressen as hostnammen';
$lang['IP_hostname'] = 'IP adressen as hostnammen';
$lang['Ban_IP_explain'] = 'Om meardere IP\'s as hostnammen yn te fieren moat dizzen skieden wurde troch komma\'s. Om in IP-reeks yn te fieren setst in lizzend streekje (-) tusken it begjin en it ein. Om in wylde kaart oan te jaan brûkst do *';

$lang['Ban_email'] = 'Ferban ien as meardere eameladressen';
$lang['Ban_email_explain'] = 'Om meardere eameladressen yn te fieren moat dizzen skieden wurde troch komma\'s. Om in wylde kaart oan te jaan brûkst do *, bygelyks *@hotmail.com';

$lang['Unban_username'] = 'Nim de ban fuort fan ien as meardere spesifike brûkers';
$lang['Unban_username_explain'] = 'Do kinst de ban fan mear as ien brûker tagelyk fuorthelje troch de júste kombinaasje fan mûs en kaaiboerd foar dyn kompjûter en webswalker';

$lang['Unban_IP'] = 'Nim de ban fuort fan ien as meardere IP adressen';
$lang['Unban_IP_explain'] = 'Do kinst de ban fan mear as ien IP-adres tagelyk fuorthelje troch de júste kombinaasje fan mûs en kaaiboerd foar dyn kompjûter en webswalker';

$lang['Unban_email'] = 'Nim de ban fuort fan ien as meardere eameladressen';
$lang['Unban_email_explain'] = 'Do kinst de ban fan mear as ien eameladres tagelyk fuorthelje troch de júste kombinaasje fan mûs en kaaiboerd foar dyn kompjûter en webswalker';

$lang['No_banned_users'] = 'Gjin brûkersnammen yn de ban';
$lang['No_banned_ip'] = 'Gjin IP-adressen yn de ban';
$lang['No_banned_email'] = 'Gjin eameladressen yn de ban';

$lang['Ban_update_sucessful'] = 'De banlist waard súksesfol bywurke';
$lang['Click_return_banadmin'] = 'Klik %shjir%s om werom te gean nei it banbehear';


//
// Configuration
//
$lang['General_Config'] = 'Algemiene ynstellings';
$lang['Config_explain'] = 'Mei it ûndersteande formulier kinsto alle algemiene foarumopsjes oanpasse. Foar brûkers- en foarumynstellings brûkst de ferwizings oan de lofter side.';

$lang['Click_return_config'] = 'Klik %shjir%s om werom te gean nei de Algemiene ynstellings';

$lang['General_settings'] = 'Algemiene Foarum Ynstellings';
$lang['Server_name'] = 'Domeinnamme';
$lang['Server_name_explain'] = 'De domeinnamme fan de server (byg. www.thaeke.com)';
$lang['Script_path'] = 'Skript paad';
$lang['Script_path_explain'] = 'It paad nei wêr\'t phpBB ynstalleard waard (byg. /foarum/)';
$lang['Server_port'] = 'Server Poart';
$lang['Server_port_explain'] = 'De poart wêr\'t de HTTP server op draait, gewoanwei 80.';
$lang['Site_name'] = 'Side namme';
$lang['Site_desc'] = 'Side omskriuwing';
$lang['Board_disable'] = 'Foarum útskeakelje';
$lang['Board_disable_explain'] = 'Dit makket it foarum ûnberikber foar brûkers. Loch net út neidatst it foarum útskeakele hast, do kinst dan net mear ynlogge!';
$lang['Acct_activation'] = 'brûkersnammen aktivearje oansette';
$lang['Acc_None'] = 'Gjin'; // These three entries are the type of activation
$lang['Acc_User'] = 'brûker';
$lang['Acc_Admin'] = 'Behearder';

$lang['Abilities_settings'] = 'brûkers- en Foarumbasisynstellings';
$lang['Max_poll_options'] = 'Maks oantal fraachpetearke opsjes';
$lang['Flood_Interval'] = 'Floed ynterfal';
$lang['Flood_Interval_explain'] = 'Oantal tellen dy\'t in brûker wachtsje moat tusken twa bydragen';
$lang['Board_email_form'] = 'brûkers eamel fia foarum';
$lang['Board_email_form_explain'] = 'brûkers stjoere inander eamels fia dit foarum';
$lang['Topics_per_page'] = 'Underwerpen Per Side';
$lang['Posts_per_page'] = 'Berjochten Per Side';
$lang['Hot_threshold'] = 'Oantal berjochten foar in populêr ûnderwerp';
$lang['Default_style'] = 'Standaard styl';
$lang['Override_style'] = 'Negear brûkers styl';
$lang['Override_style_explain'] = 'Fervang brûkersstyl troch de standaard';
$lang['Default_language'] = 'Standaard taal';
$lang['Date_format'] = 'Datum formaat';
$lang['System_timezone'] = 'Tiidsône fan it systeem';
$lang['Enable_gzip'] = 'GZip Kompresje oansette';
$lang['Enable_prune'] = 'Foarum Pruning oanzette';
$lang['Allow_HTML'] = 'HTML tastean';
$lang['Allow_BBCode'] = 'BBKoade tastean';
$lang['Allowed_tags'] = 'Tastiene HTML tags';
$lang['Allowed_tags_explain'] = 'Tags skiede mei komma\'s';
$lang['Allow_smilies'] = 'Emoasje ikoantsjes tastean';
$lang['Smilies_path'] = 'Emoasje ikoantsjes Opslachplak';
$lang['Smilies_path_explain'] = 'Map ûnder dyn phpBB root dir, byg. images/smilies';
$lang['Allow_sig'] = 'Underskrift tastean';
$lang['Max_sig_length'] = 'Maksimale lengte fan it ûnderskrift';
$lang['Max_sig_length_explain'] = 'Maksimaal tal karakters yn ûnderskriften fan brûkers';
$lang['Allow_name_change'] = 'brûkersnamme wizigings tastean';

$lang['Avatar_settings'] = 'Plaatsjes Ynstellings';
$lang['Allow_local'] = 'Galerij plaatsjes tastean';
$lang['Allow_remote'] = 'Eksterne plaatsjes tastean';
$lang['Allow_remote_explain'] = 'Plaatsjes wêrnei\'t ferwiist wurdt fanôf in oare thússide';
$lang['Allow_upload'] = 'Plaatsjes oplade tastean';
$lang['Max_filesize'] = 'Maksimale plaatsjes bestânsgrutte';
$lang['Max_filesize_explain'] = 'Foar opladen plaatsjesbestannen';
$lang['Max_avatar_size'] = 'Maksimale plaatsjes ôfmjittings';
$lang['Max_avatar_size_explain'] = '(Hichte x bridte yn piksels)';
$lang['Avatar_storage_path'] = 'Plaatsjes opslach map';
$lang['Avatar_storage_path_explain'] = 'Map ûnder phpBB root dir, byg. images/avatars';
$lang['Avatar_gallery_path'] = 'Plaatsjesgalerij map';
$lang['Avatar_gallery_path_explain'] = 'Map ûnder phpBB root dir foar opladen plaatsjes, byg. images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA ynstellings';
$lang['COPPA_fax'] = 'COPPA faks nûmer';
$lang['COPPA_mail'] = 'COPPA postadres';
$lang['COPPA_mail_explain'] = 'Dit is it postadres dêr\'t âlden COPPA registraasje formulieren hinne stjoere kinne';

$lang['Email_settings'] = 'Eamel Ynstellings';
$lang['Admin_email'] = 'Behearder eameladres';
$lang['Email_sig'] = 'Eamel ûnderskrift';
$lang['Email_sig_explain'] = 'Dizze tekst wurdt taheakke oan alle eamels dy\'t it foarum ferstjoert';
$lang['Use_SMTP'] = 'Gebrûk SMTP server foar eamel';
$lang['Use_SMTP_explain'] = 'Folje \'ja\' yn atst de eamel fia in beneamde server ferstjoere wolst ynstee fan fia de \'local mail\' funksje';
$lang['SMTP_server'] = 'SMTP server adres';
$lang['SMTP_username'] = 'SMTP brûkersnamme';
$lang['SMTP_username_explain'] = 'Folje allinnich in brûkersnamme yn at dit nedich is';
$lang['SMTP_password'] = 'SMTP wachtwurd';
$lang['SMTP_password_explain'] = 'Folje allinnich in wachtwurd yn at dit nedich is';

$lang['Disable_privmsg'] = 'Privee; berjochten';
$lang['Inbox_limits'] = 'Maks berjochten yn Ynboks';
$lang['Sentbox_limits'] = 'Maks berjochten yn Ferstjoerdboks';
$lang['Savebox_limits'] = 'Maks berjochten yn Opslachboks';

$lang['Cookie_settings'] = 'Koekje ynstellings';
$lang['Cookie_settings_explain'] = 'Dizzen bepale hoe\'t in koekje dy\'t net de webswalker stjoerd wurdt definiearre is. Yn de measte gefallen foldogge de standaardynstellings. Atst se dochs oanpasse moatst, pas dan goed op, troch flaters kinne brûkers faaks net mear ynlogge.';
$lang['Cookie_domain'] = 'Koekje domein';
$lang['Cookie_name'] = 'Koekje namme';
$lang['Cookie_path'] = 'Koekje paad';
$lang['Cookie_secure'] = 'Koekje feilich [ https ]';
$lang['Cookie_secure_explain'] = 'Set dizze opsje allinnich oan at de server gebrûk makket fan SSL';
$lang['Session_length'] = 'Sessy lengte [ tellen ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'Fisuele befestiging oanzetten';
$lang['Visual_confirm_explain'] = 'brûkers moat in koade út in plaatsje ynfolje by it registrearjen.';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Automatysk ynlogge tastean';
$lang['Allow_autologin_explain'] = 'Bepaald at brûkers it seleksjefakje automatysk ynlogge brûke kinne by it ynloggen';
$lang['Autologin_time'] = 'Automatyske ynlochtiid';
$lang['Autologin_time_explain'] = 'It tal dagen dat in automatyske ynlochsesje jildich is. Set dizze op nul foar ûneindich.';

// Search Flood Control - added 2.0.20
$lang['Search_Flood_Interval'] = 'Tiid tusken sykopdrachten';
$lang['Search_Flood_Interval_explain'] = 'It tal tellen dat in brûker geduld hawwe moat tusken twa sykopdrachten'; 


//
// Forum Management
//
$lang['Forum_admin'] = 'Foarum Behear';
$lang['Forum_admin_explain'] = 'Fanôf dit paneel kinst de kattegoaryen en foarums taheakje, fuorthelje, reorganisearje en opnij synchroanisearje';
$lang['Edit_forum'] = 'Bewurkje foarum';
$lang['Create_forum'] = 'Meitsje in nij foarum';
$lang['Create_category'] = 'Meitsje in nije kattegoary';
$lang['Remove'] = 'Fuorthelje';
$lang['Action'] = 'Aksje';
$lang['Update_order'] = 'Folchoarder oanpasse';
$lang['Config_updated'] = 'Foarum ynstellings mei súkses oanpast';
$lang['Edit'] = 'Bewurkje';
$lang['Delete'] = 'Fuorthelje';
$lang['Move_up'] = 'Sko Omheech';
$lang['Move_down'] = 'Sko Omdel';
$lang['Resync'] = 'Op nij syngroan meitsje';
$lang['No_mode'] = 'Der waard gjin moadus set';
$lang['Forum_edit_delete_explain'] = 'Mei it formulier hjirûnder kinst alle algemiene foarumopsjes oanpasse. Foar brûkers- en foarum ynstellings kinst de ferwizings oan de lofter side brûke';

$lang['Move_contents'] = 'Ferpleats alle ynhâld';
$lang['Forum_delete'] = 'Helje dit foarum fuort';
$lang['Forum_delete_explain'] = 'Mei it formulier hjirûnder kinst in foarum (as kattegoary) fuorthelje en bepale atst alle ûnderwerpen (as foarums) ferpleatse wolst';

$lang['Status_locked'] = 'Sletten';
$lang['Status_unlocked'] = 'Untsletten';
$lang['Forum_settings'] = 'Algemiene Foarum Ynstellings';
$lang['Forum_name'] = 'Foarum namme';
$lang['Forum_desc'] = 'Omskriuwing';
$lang['Forum_status'] = 'Foarum status';
$lang['Forum_pruning'] = 'Auto-pruning';

$lang['prune_freq'] = 'Kontrolearje de leeftiid fan in ûnderwerp elke';
$lang['prune_days'] = 'Helje alle ûnderwerpen fuort dêr\'t neat yn skreaun is foar';
$lang['Set_prune_data'] = 'Do hast auto-prune oansetten foar dit foarum, mar hast gjin frekwinsje as tal dagen oanjûn. Gean werom en doch dit alsnoch';

$lang['Move_and_Delete'] = 'Ferpleats en helje fuort';

$lang['Delete_all_posts'] = 'Alle bydragen fuorthelje';
$lang['Nowhere_to_move'] = 'Gjin plak om hinne te ferpleatsen';

$lang['Edit_Category'] = 'Bewurkje Kattegoary';
$lang['Edit_Category_explain'] = 'Gebrûk dit formulier om de namme fan in kattegoary oan te passen.';

$lang['Forums_updated'] = 'Foarum en kattegoary ynformaasje mei súkses oanpast';

$lang['Must_delete_forums'] = 'Do moatst earst alle foarums fuorthelje eartst dizze kattegoary fuorthelje kinst';

$lang['Click_return_forumadmin'] = 'Klik %shjir%s om werom te gean nei Foarum Behear';


//
// Smiley Management
//
$lang['smiley_title'] = 'Emoasjeikoantsjes Bewurke';
$lang['smile_desc'] = 'Fanôf dizze side kinst do de emoasjeikoantsjes dy\'t de brûkers yn harren bydragen as priveeberjochten brûke kinne taheakje, fuorthelje as oanpasse.';

$lang['smiley_config'] = 'Emoasjeikoantsje ynstellings';
$lang['smiley_code'] = 'Emoasjeikoantsje koade';
$lang['smiley_url'] = 'Emoasjeikoantsje grafysk bedtân';
$lang['smiley_emot'] = 'Emoasjeikoantsje emoasje';
$lang['smile_add'] = 'Heakje in nij emoasjeikoantsje ta';
$lang['Smile'] = 'Emoasjeikoantsje';
$lang['Emotion'] = 'Emoasjeikoantsje';

$lang['Select_pak'] = 'Selektearje Pak (.pak) Bestân';
$lang['replace_existing'] = 'Ferfang besteande emoasjeikoantsje';
$lang['keep_existing'] = 'Hâld besteande emoasjeikoantsje';
$lang['smiley_import_inst'] = 'Do moatst it emoasjeikoantsjepakket unzippe en alle bestannen oplade nei de emoasjeikoantsje directory foar dyn foarum. Selektearje dan de goeie ynformaasje yn dit formulier om it emoasjeikoantsjepak te ymportearjen.';
$lang['smiley_import'] = 'emoasjeikoantsjespak ymportearje';
$lang['choose_smile_pak'] = 'Kies in emoasjeikoantsjespak .pak bestân';
$lang['import'] = 'Ymportearje emoasjeikoantsje';
$lang['smile_conflicts'] = ' Wat moat der dien wurde by in konflikt';
$lang['del_existing_smileys'] = 'Helje de besteande emoasjeikoantsje fuort foar it ymportearjen';
$lang['import_smile_pack'] = 'Ymportearje emoasjeikoantsjespak';
$lang['export_smile_pack'] = 'Meitsje emoasjeikoantsjespak oan';
$lang['export_smiles'] = 'Om in emoasjeikoantsjespak oan te meitsjen mei de notiidske emoasjeikoantsjes kinst %shjir%s klikke om it emoasjeikoantsjes.pak bestân del te heljen. Jou it bestân in nije namme mar hâld de .pak ekstinsje. Meitsje dan in zip bestân oan mei al de emoasjeikoantsjes plus dit .pak ynstellingsbestân.';

$lang['smiley_add_success'] = 'It emoasjeikoantsje waard súksesfol taheakke';
$lang['smiley_edit_success'] = 'It emoasjeikoantsje is súksesfol oanpast';
$lang['smiley_import_success'] = 'It emoasjeikoantsjespak waard súksesfol ymportearre!';
$lang['smiley_del_success'] = 'It emoasjeikoantsje waard súksesfol fuorthelle';
$lang['Click_return_smileadmin'] = 'Klik %shjir%s om werom te gean nei it emoasjeikoantsjes behear';

$lang['Confirm_delete_smiley'] = 'Bist der wis fan datst dit emoasjeikoantsje fuorthelje wolst?';

//
// User Management
//
$lang['User_admin'] = 'brûkers behear';
$lang['User_admin_explain'] = 'Hjir kinst ynformaasje en bepaalde spesifike opsjes fan brûkers oanpasse. Ast do de brûkers tastimming oanpasse wolst moatst it brûkers- en groepstastimmingsysteem brûke.';

$lang['Look_up_user'] = 'Sykje brûker';

$lang['Admin_user_fail'] = 'brûkers profyl koe net oanpast wurde.';
$lang['Admin_user_updated'] = 'brûkersprofyl waard súksesfol oanpast';
$lang['Click_return_useradmin'] = 'Klik %shjir%s om werom te gean nei it brûkers behear';

$lang['User_delete'] = 'Helje dizze brûker fuort.';
$lang['User_delete_explain'] = 'Klik hjir om dizze brûker fuort te heljen, dit kin net mear ûndien makke wurde.';
$lang['User_deleted'] = 'brûker waard súksesfol fuorthelle.';

$lang['User_status'] = 'brûker is aktyf';
$lang['User_allowpm'] = 'Kin privee berjochten ferstjoere';
$lang['User_allowavatar'] = 'Kin in plaatsje ha';

$lang['Admin_avatar_explain'] = 'Hjir kinst it notiidske plaatsje fan de brûker sjen en fuorthelje.';

$lang['User_special'] = 'Spesjale allinnich behearder fjilden';
$lang['User_special_explain'] = 'Dizze fjilden kinne troch brûkers net oanpast wurde. Hjir kinst harren status ynstelle en oare opsjes dy\'t net beskikber bin foar de brûkers.';


//
// Group Management
//
$lang['Group_administration'] = 'Groeps Behear';
$lang['Group_admin_explain'] = 'Hjirwei kinst alle brûkersgroepen beheare, do kinst: fuorthelje, oanmeitsje en besteande groepen oanpasse. Do kint masters kieze, groep iepen/sletten status oanpasse en de groepsnamme en omskriuwing opjaan';
$lang['Error_updating_groups'] = 'Der is in flater ûntstien by it ferwurkjen fan de groepen';
$lang['Updated_group'] = 'De groep waard súksesfol oanpast';
$lang['Added_new_group'] = 'De nije groep waard súksesfol oanmakke';
$lang['Deleted_group'] = 'De groep waard súksesfol fuorthelle';
$lang['New_group'] = 'Meitsje in nije groep';
$lang['Edit_group'] = 'Bewurkje groep';
$lang['group_name'] = 'Groep namme';
$lang['group_description'] = 'Groep omskriuwing';
$lang['group_moderator'] = 'Groep master';
$lang['group_status'] = 'Groep status';
$lang['group_open'] = 'Iepen groep';
$lang['group_closed'] = 'Sletten groep';
$lang['group_hidden'] = 'Ferburgen groep';
$lang['group_delete'] = 'Groep fuorthelje';
$lang['group_delete_check'] = 'Dizze groep fuorthelje';
$lang['submit_group_changes'] = 'Wizigings bevestigje';
$lang['reset_group_changes'] = 'Herstel oanpassings';
$lang['No_group_name'] = 'Do moatst in namme opjaan foar dizze groep';
$lang['No_group_moderator'] = 'Do moatst in master oanwize foar dizze groep';
$lang['No_group_mode'] = 'Do moatst oanjaan at dizze groep iepen as sletten is';
$lang['No_group_action'] = 'Gjin aksje opjûn';
$lang['delete_group_moderator'] = 'De âlde groepsmaster fuorthelje?';
$lang['delete_moderator_explain'] = 'Selektearje dit fjld ast do tidens it oanpassen fan in groepsmaster wolst dat de âlde master fuorthelle wurdt. Atst dit net selektearrest wurdt de âlde master gewoan in lid fan de groep.';
$lang['Click_return_groupsadmin'] = 'Klik %shjir%s om werom te gean nei Groep behear.';
$lang['Select_group'] = 'Selektearje in groep';
$lang['Look_up_group'] = 'Sykje in groep';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Forum Prune';
$lang['Forum_Prune_explain'] = 'Dit hellet alle ûnderwerpen fuort dêr\'t gjin reaksje op kaam is yn it tal dagen datst oanjûn hast. Atst gjin nûmer opjoust wurdt alles fuorthelle. Dit hellet gjin ûnderwerpen fuort wêryn\'t noch fraachpetearkes rinne, ek oankondigings wurde net fuorthelle. Dy ûnderwerpen moat mei de hân fuorthelle wurde.';
$lang['Do_Prune'] = 'Fier prune út';
$lang['All_Forums'] = 'Alle foarums';
$lang['Prune_topics_not_posted'] = 'Prune ûnderwerpen sûnder reaksjes yn bepaald tal dagen';
$lang['Topics_pruned'] = 'Underwerpen prune';
$lang['Posts_pruned'] = 'Berjochten prune';
$lang['Prune_success'] = 'Prune fan it forums waard súksesfol ôfrûne';


//
// Word censor
//
$lang['Words_title'] = 'Wurd Sensuur';
$lang['Words_explain'] = 'Op dit paneel kinst de wurden taheakje, bewurkje en fuorthelje dy\'t automatysk op alle foarums sensurearre wurde. Boppedat kin brûkers harren net registrearje mei in brûkersnamme dêr\'t sa\'n wurd yn foarkomt. Wylde kaarten (*) bin mooglik yn it wurdfjild, byg. *pik* komt oerien me einepiken, pik* met piksjitte en *pik meihospik.';
$lang['Word'] = 'Wurd';
$lang['Edit_word_censor'] = 'Bewurkje sensuur wurd';
$lang['Replacement'] = 'Ferfange troch';
$lang['Add_new_word'] = 'Nij wurd taheakje';
$lang['Update_word'] = 'Wurd sensuur oanpast';

$lang['Must_enter_word'] = 'Do moatst in wurd en de ferfanging dêrfan opjaan';
$lang['No_word_selected'] = 'Gjin wurd selektearre om te bewurkjen';

$lang['Word_updated'] = 'It selektearre sensuur wurd waard súksesfol oanpast';
$lang['Word_added'] = 'It sensuur wurd waard súksesfol taheakke';
$lang['Word_removed'] = 'It selektearre sensuur wurd waard súksesfol fuorthelle';

$lang['Click_return_wordadmin'] = 'Klik %shjir%s om werom te gean nei Sensuur Wurden Behear';

$lang['Confirm_delete_word'] = 'Bist der wis fan datst dizze sensuur opheffe wolst?';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Hjir kinst in eamel stjoere oan al dyn brûkers, as oan brûkers út in spesifike groep. Hjirfoar wurdt in eamel ferstjoerd oan it behearders eameladres dat opjûn is, mei in \'blind carbon copy\' oan alle ûntfangers. Atst in grutte groep eamelje wolst, wês dan net te hastich nei it ferstjoeren en stopje de side net healweis. It is normaal dat massa eamel efkes duorret, do krijst in melding at it skript klear is.';
$lang['Compose'] = 'Opstelle';

$lang['Recipients'] = 'Untfangers';
$lang['All_users'] = 'Alle brûkers';

$lang['Email_successfull'] = 'Dyn berjocht waard ferstjoerd';
$lang['Click_return_massemail'] = 'Klik %shjir%s om werom te gean nei it massa eamel formulier';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Rang Behear';
$lang['Ranks_explain'] = 'Mei dit formulier kinst rangen taheakje, bewurkje, besjen en fuorthelje. Do kinst ek oanpaste rangen oanmeitsje dy\'t tapast wurde kinne fia de brûkers behear mooglikheid';

$lang['Add_new_rank'] = 'Nije rang taheakje';

$lang['Rank_title'] = 'Rang titel';
$lang['Rank_special'] = 'As spesjale rang ynstelle';
$lang['Rank_minimum'] = 'Minimum Berjochten';
$lang['Rank_maximum'] = 'Maksimum Berjochten';
$lang['Rank_image'] = 'Rang ôfbylding';
$lang['Rank_image_explain'] = 'Gebrûk dit om in lyts plaatsje oan in rang te ferbinen';

$lang['Must_select_rank'] = 'Do moatst in rang selektearje';
$lang['No_assigned_rank'] = 'Gjin spesjale rang tawezen';

$lang['Rank_updated'] = 'De rang waard súksesfol oanpast';
$lang['Rank_added'] = 'De rang waard súksesfol taheakke';
$lang['Rank_removed'] = 'De rang waard súksesfol fuorthelle';
$lang['No_update_ranks'] = 'De rang waard súksesfol fuorthelle, mar de brûkers dy\'t dizze rang brûkten bin net oanpast. Dit sil mei de hân barre moatte.';

$lang['Click_return_rankadmin'] = 'Klik %shjir%s om werom te gean nei Rang Behear';

$lang['Confirm_delete_rank'] = 'Bist der wis fan datst dizze rang fuorthelje wolst?';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Ferbeane brûkersnammen behear';
$lang['Disallow_explain'] = 'Hjir kinst bepale hokker brûkersnammen net brûkt wurde meie. Wegere brûkersnammen meie ek wylde kaarten (*) befetsje. Tink der om datst gjin brûkersnamme kieze kinst dy\'t al brûkt wurdt, dizze moatst dan earst fuorthelje eart dizze wegere wurde kin';

$lang['Delete_disallow'] = 'Fuorthelje';
$lang['Delete_disallow_title'] = 'Helje de wegere brûkersnamme fuort';
$lang['Delete_disallow_explain'] = 'Do kinst in wegere namme fuorthelje troch dizze namme yn dizze list te selektearjen en dit dêrnei te befestigjen';

$lang['Add_disallow'] = 'Taheakje';
$lang['Add_disallow_title'] = 'Heakje in ferbeane namme ta';
$lang['Add_disallow_explain'] = 'Do kinst by ferbeane nammen ek brûk meitsje fan in wylde kaart (*) om in tal karakters te ferfangen';

$lang['No_disallowed'] = 'Gjin ferbeane nammen';

$lang['Disallowed_deleted'] = 'De ferbeane namme waard súksesfol fuorthelle';
$lang['Disallow_successful'] = 'De ferbeane namme waard súksesfol taheakke';
$lang['Disallowed_already'] = 'De namme dy\'tst taheakje woest koe net taheakke wurde. Dizze stiet der al yn as der is al in besteande brûkersnamme oanwêzich';

$lang['Click_return_disallowadmin'] = 'Klik %shjir%s om werom te gean nei Ferbeane brûkersnammen behear';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Styl Behear';
$lang['Styles_explain'] = 'Mei dit ûnderdiel kinsto de stilen (templates en tema\'s) beheare dy\'t beskikber binne foar dyn brûkers';
$lang['Styles_addnew_explain'] = 'De folchjende lyst toant alle tema\'s dy\'t op dit stuit beskikber binne foar de templates dy\'tst hast. De ûnderdielen op dizze lyst bin noch net ynstalleard yn de phpBB database. Om dizzen te ynstallearjen kinst ienfâldichwei klikke op de \'ynstallear\' ferwizing neist de fermelding';

$lang['Select_template'] = 'Selektearje in Template';

$lang['Style'] = 'Styl';
$lang['Template'] = 'Template';
$lang['Install'] = 'Ynstallearje';
$lang['Download'] = 'Delhelje';

$lang['Edit_theme'] = 'Bewurkje Tema';
$lang['Edit_theme_explain'] = 'Yn dit formulier kinsto de ynstellings fan it selektearre tema bewurkje';

$lang['Create_theme'] = 'Tema oanmeitsje';
$lang['Create_theme_explain'] = 'Gebrûk dit formulier om in nij tema oan te meitsjen foar in selektearre template. Wannear\'tst kleuren taheakkest (dêrfoar moatst de heksadesimale skriuwwize brûke) moatst de foargeande # fuortlitte, byg. CCCCCC kin brûkt wurde, #CCCCCC net';

$lang['Export_themes'] = 'Tema\'s eksportearje';
$lang['Export_explain'] = 'Yn dit finster kinst de data fan in bepaald tema foar in selektearre template eksportearje. Selektearje it template út de lyst hjirûnder en it skript sil it ynstellingsbestân fan it tema oanmeitsje en besykje dit op te slaan yn de map fan it selektearre template. As it bestân net fuortskreaun wurde kin krijst de mooglikheid om it del te heljen. Om it bestân op te slaan mei it skript moat de webserver skriuwrjochten hawwe yn de map fan de selektearre template. Sjoch, foar mear ynformaasje hjiroer, de phpBB2 brûkersgids.';

$lang['Theme_installed'] = 'It selektearre tema waard súksesfol ynstalleard';
$lang['Style_removed'] = 'De selektearre styl waard fuorthelle út de database. Om de styl hielendal fan it systeem te krijen moat de oanbelangjende bestannen fuorthelle wurde út de templates map.';
$lang['Theme_info_saved'] = 'De tema ynformaasje foar it selektearre template waard opslein. Do moatst no de tastimmings op \'theme_info.cfg (en at dat fan tapassing is, de map fan it selektearre template) werom te setten nei allinnich-lêzen (read-only)';
$lang['Theme_updated'] = 'It selektearre tema waard oanpast. Do moatst no de nije temaynstellings eksportearjen.';
$lang['Theme_created'] = 'Tema oanmakke. Do moatst no it tema opslaan yn it ynstellings bestân om dit feilich earne oars te bewarjen';

$lang['Confirm_delete_style'] = 'Bisto der wis fan datst dizze styl fuorthelje wolst?';

$lang['Download_theme_cfg'] = 'De \'eksporter\' koe net skriuwe nei it tema ynformaasje bestân. Klik op de knop hjirûnder om dit bestân fia dyn webswalker del te heljen. Wannear\'tst it delhelle hast, kinst it ferpleatse nei de map dêr\'t de template bestannen stean. Do kinst de bestannen dêrnei ferpakke foar distribúzje as earne oars brûke';
$lang['No_themes'] = 'Oan it template datst selektearre hast bin gjin tema\'s ferbûn. Om in nij tema oan te meitsjen, klikst op \'Meitsje nij tema\' yn it fak oan de lofterside';
$lang['No_template_dir'] = 'Koe de template map net iepenje. It kin mooglik net lêzen wurde troch de webserver as de map bestiet net';
$lang['Cannot_remove_style'] = 'Dizze styl kinsto net fuorthelje omdat it de standaard is foar it foarum. Feroarje earst de standaardstyl en besykje it dan jitris.';
$lang['Style_exists'] = 'De namme dy\'tst opjûn hast foar de styl bestiet al, gean werom en kies in oare namme.';

$lang['Click_return_styleadmin'] = 'Klik %shjir%s om werom te gean nei it styl behear';

$lang['Theme_settings'] = 'Tema Ynstellings';
$lang['Theme_element'] = 'Tema Elemint';
$lang['Simple_name'] = 'Ienfâldige namme';
$lang['Value'] = 'Wearde';
$lang['Save_Settings'] = 'Sla Ynstellings Op';

$lang['Stylesheet'] = 'CSS Stylesheet';
$lang['Stylesheet_explain'] = 'Bestânsnamme foar de CSS stylesheet dy\'t brûkt wurdt foar dit tema.';
$lang['Background_image'] = 'Eftergrûn ôfbylding';
$lang['Background_color'] = 'Eftergrûn kleur';
$lang['Theme_name'] = 'Tema naam';
$lang['Link_color'] = 'Ferwizings Kleur';
$lang['Text_color'] = 'Tekst Kleur';
$lang['VLink_color'] = 'Besjoene Ferwizings Kleur';
$lang['ALink_color'] = 'Aktive Ferwizings Kleur';
$lang['HLink_color'] = 'Sweefjende Ferwizings Kleur';
$lang['Tr_color1'] = 'Tabel Rij Kleur 1';
$lang['Tr_color2'] = 'Tabel Rij Kleur 2';
$lang['Tr_color3'] = 'Tabel Rij Kleur 3';
$lang['Tr_class1'] = 'Tabel Rij Klasse 1';
$lang['Tr_class2'] = 'Tabel Rij Klasse 2';
$lang['Tr_class3'] = 'Tabel Rij Klasse 3';
$lang['Th_color1'] = 'Tabel Kop Kleur 1';
$lang['Th_color2'] = 'Tabel Kop Kleur 2';
$lang['Th_color3'] = 'Tabel Kop Kleur 3';
$lang['Th_class1'] = 'Tabel Kop Klasse 1';
$lang['Th_class2'] = 'Tabel Kop Klasse 2';
$lang['Th_class3'] = 'Tabel Kop Klasse 3';
$lang['Td_color1'] = 'Tabel Sel Kleur 1';
$lang['Td_color2'] = 'Tabel Sel Kleur 2';
$lang['Td_color3'] = 'Tabel Sel Kleur 3';
$lang['Td_class1'] = 'Tabel Sel Klasse 1';
$lang['Td_class2'] = 'Tabel Sel Klasse 2';
$lang['Td_class3'] = 'Tabel Sel Klasse 3';
$lang['fontface1'] = 'Font 1';
$lang['fontface2'] = 'Font 2';
$lang['fontface3'] = 'Font 3';
$lang['fontsize1'] = 'Font Grootte 1';
$lang['fontsize2'] = 'Font Grootte 2';
$lang['fontsize3'] = 'Font Grootte 3';
$lang['fontcolor1'] = 'Font Kleur 1';
$lang['fontcolor2'] = 'Font Kleur 2';
$lang['fontcolor3'] = 'Font Kleur 3';
$lang['span_class1'] = 'Span Klasse 1';
$lang['span_class2'] = 'Span Klasse 2';
$lang['span_class3'] = 'Span Klasse 3';
$lang['img_poll_size'] = 'Fraachpetear ôfbyldingsgrutte [pks]';
$lang['img_pm_size'] = 'Privee berjocht Status grutte [pks]';


//
// Install Process
//
$lang['Welcome_install'] = 'Wolkom by de phpBB2 ynstallaasje';
$lang['Initial_config'] = 'Basis Ynstellings';
$lang['DB_config'] = 'Databank Ynstellings';
$lang['Admin_config'] = 'Behear Ynstellings';
$lang['continue_upgrade'] = 'Sa gau atst it config bestân nei dyn lokale kompjûter delhelle hast, kinst op de \'Gean troch mei de upgrade\' knop hjirûnder klikke om fierder te gean mei de upgrade. Wachtsje mei it opladen fan it config bestân eart de upgrade dien is.';
$lang['upgrade_submit'] = 'Gean troch mei de upgrade';

$lang['Installer_Error'] = 'By de ynstallaasje hat him in flater foardien';
$lang['Previous_Install'] = 'In eartiidske ynstallaasje waard fûn';
$lang['Install_db_error'] = 'Der is in flater ûntstien by it oanpassen fan de databank';

$lang['Re_install'] = 'Dyn eardere ynstallaasje is noch aktyf. <br /><br />Atst dyn phpBB2 opnij ynstallearje wolst, klik dan op de knop hjirûnder. TINK DER OM: hjirmei hellest alle besteande data fuort, der wurdt gjin kopy makke! De brûkersnamme en it wachtwurd fan de behearder dy\'tst brûktest om op it foarum yn te loggen wurde oppenij oanmakke nei de herynstallaasje, gjin inkelde oare ynstelling wurdt bewarre. <br /><br />Tink goed nei foardatst op \'Ja\' drukst!';

$lang['Inst_Step_0'] = 'Bedankt datst foar phpBB2 keazen hast. Folje, om de ynstallaasje dien te meitsjen, de gegevens yn dy\'t hjirûnder frege wurde. Tink der om dat de database wêrnei\'tst ynstallearst al bestean moat. Wannear\'tst ynstallearst op in database dy\'t ek ODBC brûkt (byg. MS Access) moatst earst in DSN oan meitsje ear datst fierder gean kinst.';

$lang['Start_Install'] = 'Start Ynstallaasje';
$lang['Finish_Install'] = 'Meitsje de ynstallaasje dien';

$lang['Default_lang'] = 'Standaard foarum taal';
$lang['DB_Host'] = 'Database Server Hostnamme / DSN';
$lang['DB_Name'] = 'Dyn Databank Namme';
$lang['DB_Username'] = 'Databank brûkersnamme';
$lang['DB_Password'] = 'Databank Wachtwurd';
$lang['Database'] = 'Dyn Databank';
$lang['Install_lang'] = 'Kies taal foar Ynstallaasje';
$lang['dbms'] = 'Databank Type';
$lang['Table_Prefix'] = 'Prefiks foar tabellen yn de databank';
$lang['Admin_Username'] = 'Behearder brûkersnamme';
$lang['Admin_Password'] = 'Behearders wachtwurd';
$lang['Admin_Password_confirm'] = 'Behearders wachtwurd [ Befestichje ]';

$lang['Inst_Step_2'] = 'Dyn behearders brûkersnamme waard oanmakke, no is de basis ynstallaasje klear. Do komst no yn in skerm wêrmei\'tst de nijste ynstallaasje ynrjochtsje kinst. Soargje der foar datst de algemiene ynstellings details kontrolearst en sa nedich oanpast. Tige tank datst foar phpBB2 keazen hast.';

$lang['Unwriteable_config'] = 'Dyn config bestân is net te beskriuwen op dit stuit. In kopy fan it config bestân wurdt delhelle atst op de knop hjirûnder klikst. Dit bestân moatst oplade yn de selde directory as dyn foarum. Neidatst dat dien hast moatst ynlogge mei dyn behearders brûkersnamme en it byhearrende wachtwurd, dy\'tst yn it eardere skerm opjûn hast. Sykje it behearders kontrôle sintrum op (der ferskynt in ferwizing ûnderyn elk skerm atst ynlogt bist) om de algemiene ynstellings te kontrolearjen. Tige tank datst foar phpBB2 keazen hast.';
$lang['Download_config'] = 'Helje de Config del';

$lang['ftp_choose'] = 'Kies Delhelmetoade';
$lang['ftp_option'] = '<br />Sjoen it feit dat FTP ekstinsjes tastien bin yn dizze fersy fan PHP kinst ek de earste mooglikheid brûke om sa te besykjen it config bestân automatysk nei it goeie plak te FTP-en.';
$lang['ftp_instructs'] = 'Do hast der foar keazen it bestân automatysk nei it bestân, dêr\'t phpBB2 stiet, te ftp-en. Folje hjirûnder de foar dit proses benedige ynformaasje yn. Tink der om dat it FTP paad it eksakte paad nei dyn phpBB2 ynstallaasje wêze moat, lykas soedest it mei in normale ftpclient ftp-e.';
$lang['ftp_info'] = 'Fier dyn FTP ynformaasje yn';
$lang['Attempt_ftp'] = 'Besykje it config bestân nei it goeie plak te ftp-en';
$lang['Send_file'] = 'Stjoer my gewoan it bestân ta dan ftp ik it mei de hân';
$lang['ftp_path'] = 'FTP paad nei phpBB 2';
$lang['ftp_username'] = 'Dyn FTP brûkersnamme';
$lang['ftp_password'] = 'Dyn FTP Wachtwurd';
$lang['Transfer_config'] = 'Start Oerdracht';
$lang['NoFTP_config'] = 'De poging om it config bestân nei it goeie plak te FTP-en is mislearre. Helje it config bestân del en FTP it mei de hân nei it goeie plak.';

$lang['Install'] = 'Ynstallear';
$lang['Upgrade'] = 'Upgrade';


$lang['Install_Method'] = 'Kies de ynstallaasje metoade';

$lang['Install_No_Ext'] = 'Dyn PHP ynstellings stypje gjin databank systeem dat phpBB gebrûke kin.';

$lang['Install_No_PCRE'] = 'phpBB2 hat de Perl-Compatible Regular Expressions Module foar PHP nedich. Dizze is net aktyf yn dyn PHP ynstallaasje.';

//
// Version Check
//
$lang['Version_up_to_date'] = 'Dyn ynstallaasje is by de tiid, der binne gjin oanpassings nedich foar dyn fersje fan phpBB.';
$lang['Version_not_up_to_date'] = 'Dyn ynstallaasje liket <b>net</b> by de tiid te wêzen. Der is in nije fersy foar phpBB, bring in besite oan <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> foar de nijste fersje.';
$lang['Latest_version_info'] = 'De nijste fersje is <b>phpBB %s</b>.';
$lang['Current_version_info'] = 'De fersje dy\'t hjir brûkt wurdt is <b>phpBB %s</b>.';
$lang['Connect_socket_error'] = 'Der kin gjin ferbining makke wurde mei de phpBB server, de flater is:<br />%s';
$lang['Socket_functions_disabled'] = 'Der kin gjin socket funksjes brûkt wurde.';
$lang['Mailing_list_subscribe_reminder'] = 'Foar de lêste nijtsjes en fersjes kinst dy it bêste <a href="http://www.phpbb.com/support/" target="_new">ynskriuwe op de melinglist</a>.';
$lang['Version_information'] = 'Fersje ynformaasje';

//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'Tastiene ynlochpogings';
$lang['Max_login_attempts_explain'] = 'It tal kearen dat besocht wurde kin yn te loggen.';
$lang['Login_reset_time'] = 'Ynloch blokkeartiid';
$lang['Login_reset_time_explain'] = 'De tiid yn minuten dy\'t in brûker wachtsje moat ear\'t er wer ynlogge kin nei in te grut tal mislearre pogings om yn te loggen.';


//
// That's all Folks!
// -------------------------------------------------

?>