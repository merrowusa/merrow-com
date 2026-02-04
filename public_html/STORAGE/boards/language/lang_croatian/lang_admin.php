<?php

/***************************************************************************
 *                            lang_admin.php [Croatian]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.35.2.10 2005/02/21 18:38:17 acydburn Exp $
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
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//

$lang['General'] = 'Opæenito';
$lang['Users'] = 'Korisnici/e';
$lang['Groups'] = 'Grupe';
$lang['Forums'] = 'Forumi';
$lang['Styles'] = 'Stilovi';

$lang['Configuration'] = 'Konfiguracija';
$lang['Permissions'] = 'Dozvole';
$lang['Manage'] = 'Administracija';
$lang['Disallow'] = 'Nedopu¹tena imena';
$lang['Prune'] = 'Izbrisivanje';
$lang['Mass_Email'] = 'Skupni e-mail';
$lang['Ranks'] = 'Statusi';
$lang['Smilies'] = 'Smajliæi';
$lang['Ban_Management'] = 'Iskljuèivanje';
$lang['Word_Censor'] = 'Cenzura rijeèi';
$lang['Export'] = 'Eksport';
$lang['Create_new'] = 'Kreiranje';
$lang['Add_new'] = 'Dodavanje';
$lang['Backup_DB'] = 'Backup baze';
$lang['Restore_DB'] = 'Restore baze';

//
// Index
//

$lang['Admin'] = 'Izbornik';
$lang['Not_admin'] = 'Nisi ovla¹ten/a za administriranje foruma.';
$lang['Welcome_phpBB'] = 'Dobro do¹ao/la na phpBB';
$lang['Admin_intro'] = 'Hvala ti ¹to si izabrao/la phpBB kao rje¹enje za svoj forum.<br />Na ovu stranicu se mo¾e¹ vratiti  
klikom na <u>Index</u> link na Izborniku lijevo.<br />Na poèetnu stranicu foruma se mo¾e¹ vratiti klikom na  
<u>Forum</u> link na Izborniku lijevo.<br />Ostali linkovi, s Izbornika lijevo, vode na stranice na kojima mo¾e¹  
podesiti sve postavke foruma.';
$lang['Main_index'] = 'Forum';
$lang['Forum_stats'] = 'Statistika';
$lang['Admin_Index'] = 'Index';
$lang['Preview_forum'] = 'Prikaz foruma';

$lang['Click_return_admin_index'] = 'Klikni %sovdje%s za povratak na Index.';

$lang['Statistic'] = 'Statistika';
$lang['Value'] = 'Vrijednost';
$lang['Number_posts'] = 'Broj postova';
$lang['Posts_per_day'] = 'Postova dnevno';
$lang['Number_topics'] = 'Broj tema';
$lang['Topics_per_day'] = 'Tema dnevno';
$lang['Number_users'] = 'Broj korisnika/ca';
$lang['Users_per_day'] = 'Korisnika/ca dnevno';
$lang['Board_started'] = 'Forum pokrenut';
$lang['Avatar_dir_size'] = 'Velièina Avatar mape';
$lang['Database_size'] = 'Velièina baze';
$lang['Gzip_compression'] ='Gzip kompresija';
$lang['Not_available'] = 'Nedostupno';

$lang['ON'] = 'DA'; // This is for GZip compression
$lang['OFF'] = 'NE'; 


//
// DB Utils
//

$lang['Database_Utilities'] = 'Alati za bazu';

$lang['Restore'] = 'Restore';
$lang['Backup'] = 'Backup';
$lang['Restore_explain'] = 'Ovdje mo¾e¹ izvr¹iti potpuni povrat svih phpBB tabela iz [ranije] snimljene datoteke.<br  
/>Ako server podr¾ava tu opciju, mo¾e¹ uploadati gzip-kompresiranu tekst datoteku koja æe automatski biti  
dekompresirana.<br /><b>UPOZORENJE:</b> ovime æe¹ prepisati postojeæe podatke.<br />Proces mo¾e [po]trajati  
podu¾e, stoga, ostani na ovoj stranici dok operacija ne bude zgotovljena.';
$lang['Backup_explain'] = 'Ovdje mo¾e¹ backupirati [napraviti kopiju] sve phpBB podatke.<br />Ako ima¹ bilo  
kakve dodatne tabele, u istoj bazi s phpBB-om, koje bi ¾elio/la backupirati, unesi njihova imena, odvojena zarezima, u  
<i>Dodatne tabele</i>.<br />Ako server podr¾ava tu opciju, mo¾e¹ koristiti gzip kompresiju kako bi smanjio/la  
velièinu datoteke prije preuzimanja.';

$lang['Backup_options'] = 'Backup opcije';
$lang['Start_backup'] = 'Zapoèni Backup';
$lang['Full_backup'] = 'Potpun Backup';
$lang['Structure_backup'] = 'Strukturalni Backup';
$lang['Data_backup'] = 'Podatkovni Backup';
$lang['Additional_tables'] = 'Dodatne tabele';
$lang['Gzip_compress'] = 'Gzip kompresirana datoteka';
$lang['Select_file'] = 'Izaberi datoteku';
$lang['Start_Restore'] = 'Zapoèni Restore';

$lang['Restore_success'] = 'Baza je uspje¹no povraæena.<br /><br />Forum bi sada trebao biti u stanju u kakvom je bio  
kada je napravljen Backup.';
$lang['Backup_download'] = 'Preuzimanje æe poèeti ubrzo; prièekaj dok ne poène.';
$lang['Backups_not_supported'] = 'Backup baze trenutno nije sistemski podr¾an.';

$lang['Restore_Error_uploading'] = 'Do¹lo je do gre¹ke prilikom uploadiranja Backup datoteke.';
$lang['Restore_Error_filename'] = 'Do¹lo je do problema s imenom datoteke; probaj s alternativnom datotekom.';
$lang['Restore_Error_decompress'] = 'Nije moguæe dekompresirati Gzip datoteku.<br />Poku¹aj s uploadom Plain Text  
verzije.';
$lang['Restore_Error_no_file'] = 'Nijedna datoteka nije uploadirana.';

//
// Auth pages
//

$lang['Select_a_User'] = 'Izaberi korisnika/cu';
$lang['Select_a_Group'] = 'Izaberi grupu';
$lang['Select_a_Forum'] = 'Izaberi forum';
$lang['Auth_Control_User'] = 'Kontrola dozvola korisnika/ca';
$lang['Auth_Control_Group'] = 'Kontrola dozvola grupa';
$lang['Auth_Control_Forum'] = 'Kontrola dozvola foruma';
$lang['Look_up_User'] = 'Potra¾i korisnika/cu';
$lang['Look_up_Group'] = 'Potra¾i grupu';
$lang['Look_up_Forum'] = 'Potra¾i forum';

$lang['Group_auth_explain'] = 'Ovdje mo¾e¹ definirati dozvole i moderatorski status svake Korisnièke grupe.<br  
/>Obrati pa¾nju na individualne postavke koje si dodijelio/la korisniku/ci - ako su drugaèije od postavki koje si dodijelio/la Korisnièkoj grupi korisnik/ca æe i dalje moæi koristiti dozvole koje si mu/joj individualno dodijelio/la [ukoliko se dogodi da postavke ne budu identiène - bit æe¹ obavije¹ten/a o tome].';
$lang['User_auth_explain'] = 'Ovdje mo¾e¹ definirati dozvole i moderatorski status svakog/e korisnika/ce.<br />Obrati  
pa¾nju na postavke koje si dodijelio/la Korisnièkoj grupi [ako je koje korisnik/ca èlan/ica] - ako su drugaèije od postavki  
koje si dodijelio/la individualno korisniku/ci on/a æe i dalje moæi koristiti dozvole koje si dodijelio/la Korisnièkoj grupi  
[ukoliko se dogodi da postavke ne budu identiène - bit æe¹ obavije¹ten/a o tome].';
$lang['Forum_auth_explain'] = 'Ovdje mo¾e¹ [jednostavnim ili naprednim suèeljem] definirati moguænosti pristupa  
forumima.<br />Obrati pa¾nju na to da se promjenom dozvola pristupa odreðuje i koji/e korisnici/e æe imati prava  
kori¹tenja/upravljanja forumima.';

$lang['Simple_mode'] = 'Jednostavno suèelje';
$lang['Advanced_mode'] = 'Napredno suèelje';
$lang['Moderator_status'] = 'Moderatorski status';

$lang['Allowed_Access'] = 'Dozvoljen pristup';
$lang['Disallowed_Access'] = 'Nedozvoljen pristup';
$lang['Is_Moderator'] = 'Je Moderator/ica';
$lang['Not_Moderator'] = 'Nije Moderator/ica';

$lang['Conflict_warning'] = 'Autorizacijski konflikt';
$lang['Conflict_access_userauth'] = 'Korisnik/ca jo¹ uvijek ima pristup forumu na konto prava Korisnièke grupe koje je  
èlan/ica.<br />Ukoliko mu/joj ¾eli¹ uskratiti pravo pristupa forumu: ili promijeni prava Korisnièke grupe ili ga/ju  
izbri¹i iz èlanstva u toj Korisnièkoj grupi. Prava Korisnièke grupe vidljiva su ispod.';
$lang['Conflict_mod_userauth'] = 'Korisnik/ca jo¹ uvijek ima moderatorska prava na forumu na konto prava Korisnièke  
grupe koje je èlan/ica.<br />Ukoliko mu/joj ¾eli¹ uskratiti pravo pristupa forumu: ili promijeni prava Korisnièke grupe  
ili ga/ju izbri¹i iz èlanstva u toj Korisnièkoj grupi. Prava Korisnièke grupe vidljiva su ispod.';

$lang['Conflict_access_groupauth'] = 'Korisnik(ci)/ca(e) jo¹ uvijek ima/ju pristup forumu na konto individualnih prava.<br  
/>Ukoliko mu/joj/im ¾eli¹ uskratiti pravo pristupa forumu: promijeni mu/joj/im individualna prava. Korisnièka prava  
vidljiva su ispod.';
$lang['Conflict_mod_groupauth'] = 'Korisnik(ci)/ca(e) jo¹ uvijek moderatorska prava na forumu na konto individualnih  
prava.<br />Ukoliko mu/joj/im ¾eli¹ uskratiti pravo pristupa forumu: promijeni mu/joj/im individualna prava. Korisnièka prava vidljiva su ispod.';

$lang['Public'] = 'Javan/na';
$lang['Private'] = 'Privatan/na';
$lang['Registered'] = 'Registriran/a/e/i';
$lang['Administrators'] = 'Administratori/ce';
$lang['Hidden'] = 'Skriven/a';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!

$lang['Forum_ALL'] = 'SVI';
$lang['Forum_REG'] = 'REG';
$lang['Forum_PRIVATE'] = 'PRI';
$lang['Forum_MOD'] = 'MOD';
$lang['Forum_ADMIN'] = 'ADM';

$lang['View'] = 'Pogledaj';
$lang['Read'] = 'Proèitaj';
$lang['Post'] = 'Postaj';
$lang['Reply'] = 'Odgovori';
$lang['Edit'] = 'Uredi';
$lang['Delete'] = 'Izbri¹i';
$lang['Sticky'] = 'Va¾no';
$lang['Announce'] = 'Obavijesti';
$lang['Vote'] = 'Glasuj';
$lang['Pollcreate'] = 'Kreiranje anketa';

$lang['Permissions'] = 'Dozvole';
$lang['Simple_Permission'] = 'Jednostavne dozvole';

$lang['User_Level'] = 'Korisnièki status'; 
$lang['Auth_User'] = 'Korisnik/ca';
$lang['Auth_Admin'] = 'Administrator/ica';
$lang['Group_memberships'] = 'Èlanstvo Korisnièkih grupa';
$lang['Usergroup_members'] = 'Èlanstvo ove Korisnièke grupe';

$lang['Forum_auth_updated'] = 'Dozvole foruma a¾urirane.';
$lang['User_auth_updated'] = 'Korisnièke dozvole a¾urirane.';
$lang['Group_auth_updated'] = 'Dozvole Korisnièke grupe a¾urirane.';

$lang['Auth_updated'] = 'Dozvole su a¾urirane.';
$lang['Click_return_userauth'] = 'Klikni %sovdje%s za povratak na korisnièke dozvole.';
$lang['Click_return_groupauth'] = 'Klikni %sovdje%s za povratak na dozvole Korisnièkih grupa.';
$lang['Click_return_forumauth'] = 'Klikni %sovdje%s za povratak na dozvole foruma.';

//
// Banning
//

$lang['Ban_control'] = 'Iskljuèivanje';
$lang['Ban_explain'] = 'Ovdje mo¾e¹ iskljuèiti [zabraniti pristup] korisnika/cu s foruma.<br />Mo¾e¹ iskljuèiti  
korisnika/cu, IP adresu pristupa, adresu pru¾atelja usluga...<br />Ovime se iskljuèenoj osobi mo¾e zabraniti pristup èak i  
na Poèetnu stranicu foruma.<br />Da bi sprijeèio/la iskljuèenu osobu da se ponovo registrira, mo¾e¹ iskljuèiti i odreðenu  
e-mail adresu [iskljuèivanje samo e-mail adrese neæe sprijeèiti osobu da se loginira i posta].';
$lang['Ban_explain_warn'] = 'Uno¹enje opsega IP adresa rezultira time da æe sve IP adrese, od poèetne do zadnje, biti  
dodane na listu iskljuèenih [blokiranih] IP adresa.<br />Poku¹aj minimizirati broj dodatnih IP adresa uno¹enjem  
zvjezdica (*) gdje god je to moguæe.<br />Ako stvarno mora¹ blokirati opseg adresa, pazi da bude ¹to manji.';

$lang['Select_username'] = 'Izaberi korisnièko ime';
$lang['Select_ip'] = 'Izaberi IP adresu';
$lang['Select_email'] = 'Izaberi e-mail adresu';

$lang['Ban_username'] = 'Iskljuèi korisnika(e)/cu(e)';
$lang['Ban_username_explain'] = 'Mo¾e¹ iskljuèiti vi¹e korisnika/ca odjednom koristeæi kombinaciju mi¹a i tipkovnice.';

$lang['Ban_IP'] = 'Iskljuèi IP adresu(e)/adresu(e) pru¾atelja usluga';
$lang['IP_hostname'] = 'IP adrese/adrese pru¾atelja usluga';
$lang['Ban_IP_explain'] = 'Da bi specificirao/la vi¹e razlièitih IP adresa/adresa pru¾atelja usluga - odvoji ih  
zarezima.<br />Da bi specificirao/la opseg IP adresa - odvoji poèetak i kraj crticom (-); mo¾e¹ koristiti i zvjezdice (*).';

$lang['Ban_email'] = 'Iskljuèi e-mail adresu/e';
$lang['Ban_email_explain'] = 'Da bi specificirao/la vi¹e razlièitih e-mail adresa - odvoji ih zarezima; mo¾e¹ koristiti i  
zvjezdice (*) [npr. *@hotmail.com].';

$lang['Unban_username'] = 'Odiskljuèi korisnika(e)/cu(e)';
$lang['Unban_username_explain'] = 'Mo¾e¹ odiskljuèiti vi¹e korisnika/ca odjednom koristeæi kombinaciju mi¹a i  
tipkovnice.';

$lang['Unban_IP'] = 'Odiskljuèi IP adresu/e';
$lang['Unban_IP_explain'] = 'Mo¾e¹ odiskljuèiti vi¹e IP adresa odjednom koristeæi kombinaciju mi¹a i tipkovnice.';

$lang['Unban_email'] = 'Odiskljuèi e-mail adresu/e';
$lang['Unban_email_explain'] = 'Mo¾e¹ odiskljuèiti vi¹e e-mail adresa odjednom koristeæi kombinaciju mi¹a i tipkovnice.';

$lang['No_banned_users'] = 'Nema iskljuèenih korisnika/ca';
$lang['No_banned_ip'] = 'Nema iskljuèenih IP adresa';
$lang['No_banned_email'] = 'Nema iskljuèenih e-mail adresa';

$lang['Ban_update_sucessful'] = 'Iskljuèna lista je a¾urirana.';
$lang['Click_return_banadmin'] = 'Klikni %sovdje%s za povratak na Iskljuèivanje.';

//
// Configuration
//

$lang['General_Config'] = 'Opæa konfiguracija';
$lang['Config_explain'] = 'Donja forma omoguæava pode¹avanje svih opæih postavki foruma.<br />Za konfiguriranje  
korisnika(ca)/foruma koristi linkove na Izborniku lijevo.';

$lang['Click_return_config'] = 'Klikni %sovdje%s za povratak na Opæu konfiguraciju.';

$lang['General_settings'] = 'Opæe postavke foruma';
$lang['Server_name'] = 'Naziv domene';
$lang['Server_name_explain'] = '<i>Naziv domene pokretanja foruma.</i>';
$lang['Script_path'] = 'Putanja skripte';
$lang['Script_path_explain'] = '<i>Putanja smje¹taja phpBB-a u odnosu na naziv domene.</i>';
$lang['Server_port'] = 'Port servera';
$lang['Server_port_explain'] = '<i>Port na kojemu radi server, obièno 80 [promijeni samo ako je drugi].</i>';
$lang['Site_name'] = 'Naziv stranica';
$lang['Site_desc'] = 'Opis stranica';
$lang['Board_disable'] = 'Onemoguæi forum';
$lang['Board_disable_explain'] = '<i>Ovo æe forum uèiniti nedostupnim korisnicima/ama.<br />Nemoj se logoutirati  
[odjaviti] ako disableira¹ [onemoguæi¹] forum jer se vi¹e neæe¹ moæi loginirati.</i>';
$lang['Acct_activation'] = 'Omoguæi aktivaciju korisnièkog raèuna';
$lang['Acc_None'] = '/'; // These three entries are the type of activation
$lang['Acc_User'] = 'Korisnik/ca';
$lang['Acc_Admin'] = 'Administrator/ica';

$lang['Abilities_settings'] = 'Osnovne korisnièke i foruma postavke';
$lang['Max_poll_options'] = 'Max broj odgovora u anketama';
$lang['Flood_Interval'] = 'Interval èekanja';
$lang['Flood_Interval_explain'] = '<i>Broj sekundi koje moraju proæi izmeðu postanja dvaju postova korisnika/ce.</i>'; 
$lang['Board_email_form'] = 'Forumski e-mail';
$lang['Board_email_form_explain'] = '<i>Moguænost korisnièkog meðusobnog slanja e-mailova putem forme foruma.</i>';
$lang['Topics_per_page'] = 'Tema po stranici';
$lang['Posts_per_page'] = 'Postova po stranici';
$lang['Hot_threshold'] = 'Popularni postovi';
$lang['Default_style'] = 'Zadani stil';
$lang['Override_style'] = 'Onemoguæen korisnièki stil';
$lang['Override_style_explain'] = '<i>Zamjenjuje korisnièki stil zadanim.</i>';
$lang['Default_language'] = 'Zadani jezik';
$lang['Date_format'] = 'Format datuma';
$lang['System_timezone'] = 'Vremenska zona';
$lang['Enable_gzip'] = 'Omoguæi GZip kompresiju';
$lang['Enable_prune'] = 'Omoguæi izbrisivanje foruma';
$lang['Allow_HTML'] = 'Dozvoli HTML';
$lang['Allow_BBCode'] = 'Dozvoli BBCode';
$lang['Allowed_tags'] = 'Dozvoli HTML tagove';
$lang['Allowed_tags_explain'] = '<i>Tagove odvoji zarezima.</i>';
$lang['Allow_smilies'] = 'Dozvoli Smajliæe';
$lang['Smilies_path'] = 'Putanja spremanja Smajliæa';
$lang['Smilies_path_explain'] = '<i>Putanja smje¹taja [mape] spremanja Smajliæa u odnosu na phpBB [npr.  
images/smiles].</i>';
$lang['Allow_sig'] = 'Dozvoli potpise';
$lang['Max_sig_length'] = 'Max du¾ina potpisa';
$lang['Max_sig_length_explain'] = '<i>Max broj znakova u potpisu korisnika/ce.</i>';
$lang['Allow_name_change'] = 'Dozvoli promjene korisnièkih imena';

$lang['Avatar_settings'] = 'Postavke Avatara';
$lang['Allow_local'] = 'Omoguæi galeriju Avatara';
$lang['Allow_remote'] = 'Omoguæi linkane Avatare';
$lang['Allow_remote_explain'] = '<i>Avatari koji su smje¹teni na drugim i pozivaju se s tih stranica.</i>';
$lang['Allow_upload'] = 'Omoguæi uploadanje Avatara';
$lang['Max_filesize'] = 'Max velièina Avatara';
$lang['Max_filesize_explain'] = '<i>Za uploadane Avatare.</i>';
$lang['Max_avatar_size'] = 'Max dimenzije Avatara';
$lang['Max_avatar_size_explain'] = '<i>Visina x ¹irina u px.</i>';
$lang['Avatar_storage_path'] = 'Putanja spremanja Avatara';
$lang['Avatar_storage_path_explain'] = '<i>Putanja smje¹taja [mape] spremanja Avatara u odnosu na phpBB [npr.  
images/avatars].</i>';
$lang['Avatar_gallery_path'] = 'Putanja galerije Avatara';
$lang['Avatar_gallery_path_explain'] = '<i>Putanja galerije Avatara u odnosu na phpBB [npr.  
images/avatars/gallery].</i>';

$lang['COPPA_settings'] = 'COPPA postavke';
$lang['COPPA_fax'] = 'COPPA broj faksa';
$lang['COPPA_mail'] = 'COPPA po¹tanska adresa';
$lang['COPPA_mail_explain'] = '<i>Po¹tanska adresa na koju roditelji/staratelji mogu poslati COPPA registracijski  
formular.</i>';

$lang['Email_settings'] = 'E-mail postavke';
$lang['Admin_email'] = 'E-mail adresa administratora/ice';
$lang['Email_sig'] = 'E-mail potpis';
$lang['Email_sig_explain'] = '<i>Ovaj potpis æe biti dodan svakoj e-mail poruci koja bude poslana u ime foruma.</i>';
$lang['Use_SMTP'] = 'Kori¹tenje SMTP servera za e-mail';
$lang['Use_SMTP_explain'] = '<i>Izaberi <i>Da</i> ukoliko ¾eli¹/mora¹ slati e-mail poruke putem imenovanog servera umjesto lokalne e-mail funkcije.</i>';
$lang['SMTP_server'] = 'Adresa SMTP servera';
$lang['SMTP_username'] = 'SMTP korisnièko ime';
$lang['SMTP_username_explain'] = '<i>Korisnièko ime unesi samo ako to SMTP server zahtjeva.</i>';
$lang['SMTP_password'] = 'SMTP zaporka';
$lang['SMTP_password_explain'] = '<i>Zaporku unesi samo ako to SMTP server zahtjeva.</i>';

$lang['Disable_privmsg'] = 'Privatne poruke';
$lang['Inbox_limits'] = 'Max poruka u Inboxu';
$lang['Sentbox_limits'] = 'Max poruka u Sentboxu';
$lang['Savebox_limits'] = 'Max poruka u Saveboxu';

$lang['Cookie_settings'] = 'Cookie postavke'; 
$lang['Cookie_settings_explain'] = '<i>Ovi detalji definiraju kako se Cookies [Kolaèiæi] ¹alju preglednicima korisnika/ca. <br /> Najèe¹æe su zadane vrijednosti postavki Kolaèiæa dostatne, no, ako ih mora¹ mijenjati - pazi ¹to  
radi¹ jer nepravilne postavke mogu dovesti do nemoguænosti loginiranja.</i>';
$lang['Cookie_domain'] = 'Domena Kolaèiæa';
$lang['Cookie_name'] = 'Naziv Kolaèiæa';
$lang['Cookie_path'] = 'Putanja Kolaèiæa';
$lang['Cookie_secure'] = 'Sigurnost Kolaèiæa';
$lang['Cookie_secure_explain'] = '<i>Ako server radi preko SSL-a - omoguæi ovu opciju; u suprotnom ju  
onemoguæi.</i>';
$lang['Session_length'] = 'Vremensko trajanje [sec]';

// Visual Confirmation

$lang['Visual_confirm'] = 'Vizualna potvrda';
$lang['Visual_confirm_explain'] = '<i>Zahtijeva unos koda, definiranog slikom, kod Registracije.</i>';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Omoguæi automatsko loginiranje';
$lang['Allow_autologin_explain'] = '<i>Odreðuje da li æe korisnici/e moæi odabrati automatsko loginiranje.</i>';
$lang['Autologin_time'] = 'Automatsko isticanje kljuèa za loginiranje';
$lang['Autologin_time_explain'] = '<i>Odreðuje koliko æe dugo, u danima, vrijediti [trajati] kljuè za automatsko  
loginiranje [0 = neogranièeno trajanje].</i>';
// Search Flood Control - added 2.0.20
$lang['Search_Flood_Interval'] = 'Interval èekanja za pretra¾ivanje';
$lang['Search_Flood_Interval_explain'] = '<i>Broj sekundi koje moraju proæi izmeðu pokretanja dvaju pretra¾ivanja [prethodnog i sljedeæeg] od strane istog/e korisnika/ce.</i>'; 

//
// Forum Management
//

$lang['Forum_admin'] = 'Administracija foruma';
$lang['Forum_admin_explain'] = 'Ovdje mo¾e¹ dodavati, izbrisati, ureðivati, mijenjati redoslijed, te resinkronizirati  
kategorije/forume.';
$lang['Edit_forum'] = 'Uredi forum';
$lang['Create_forum'] = 'Kreiraj novi forum';
$lang['Create_category'] = 'Kreiraj novu kategoriju';
$lang['Remove'] = 'Ukloni';
$lang['Action'] = 'Akcija';
$lang['Update_order'] = 'A¾uriraj redoslijed';
$lang['Config_updated'] = 'Konfiguracija foruma je uspje¹no a¾urirana.';
$lang['Edit'] = 'Uredi';
$lang['Delete'] = 'Izbri¹i';
$lang['Move_up'] = 'Gore';
$lang['Move_down'] = 'Dolje';
$lang['Resync'] = 'ReSin';
$lang['No_mode'] = 'Nije pode¹en mod';
$lang['Forum_edit_delete_explain'] = 'Donja forma omoguæava pode¹avanje svih opæih postavki foruma.<br />Za  
konfiguriranje korisnika(ca)/foruma koristi linkove na Izborniku lijevo.';

$lang['Move_contents'] = 'Premjesti kompletan sadr¾aj';
$lang['Forum_delete'] = 'Izbri¹i forum';
$lang['Forum_delete_explain'] = 'Donja forma omoguæava da izbri¹e¹ forum(e)/kategoriju(e), te da odluèi¹ kamo  
¾eli¹ premjestiti sadr¾aj.';

$lang['Status_locked'] = 'Zakljuèano';
$lang['Status_unlocked'] = 'Otkljuèano';
$lang['Forum_settings'] = 'Opæe postavke foruma';
$lang['Forum_name'] = 'Naziv foruma';
$lang['Forum_desc'] = 'Opis';
$lang['Forum_status'] = 'Status';
$lang['Forum_pruning'] = 'Auto-izbrisivanje';

$lang['prune_freq'] = 'Provjeri starost tema svakih';
$lang['prune_days'] = 'Ukloni teme u kojima nije bilo postanja';
$lang['Set_prune_data'] = 'Upalio/la si opciju auto-izbrisivanja foruma ali nisi podesio/la frekvenciju ili broj dana za  
izbrisivanje.<br />Vrati se i podesi [to].';

$lang['Move_and_Delete'] = 'Premjesti i izbri¹i';

$lang['Delete_all_posts'] = 'Izbri¹i sve postove';
$lang['Nowhere_to_move'] = 'Nema lokacije za premje¹tanje';

$lang['Edit_Category'] = 'Uredi kategoriju';
$lang['Edit_Category_explain'] = 'Ovom formom mo¾e¹ promijeniti naziv kategorije.';

$lang['Forums_updated'] = 'Informacije o forumu/ima i kategoriji/ama su uspje¹no a¾urirane.';

$lang['Must_delete_forums'] = 'Mora¹ izbrisati sve forume kako bi mogao/la izbrisati ovu kategoriju.';

$lang['Click_return_forumadmin'] = 'Klikni %sovdje%s za povratak na Administraciju foruma.';

//
// Smiley Management
//

$lang['smiley_title'] = 'Administracija Smajliæa';
$lang['smile_desc'] = 'Ovdje mo¾e¹ dodavati, uklanjati i ureðivati Smajliæe koje korisnici/e mogu dodavati u svoje  
postove/privatne poruke.';

$lang['smiley_config'] = 'Konfiguracija Smajliæa';
$lang['smiley_code'] = 'Kod Smajliæa';
$lang['smiley_url'] = 'Datoteka Smajliæa';
$lang['smiley_emot'] = 'Emocija Smajliæa';
$lang['smile_add'] = 'Dodaj Smajliæa';
$lang['Smile'] = 'Smajliæ';
$lang['Emotion'] = 'Emocija';

$lang['Select_pak'] = 'Izaberi paket (.pak) datoteku';
$lang['replace_existing'] = 'Zamijeni Smajliæa';
$lang['keep_existing'] = 'Zadr¾i Smajliæa';
$lang['smiley_import_inst'] = 'Odzipaj paket Smajliæa i uploadaj sve datoteke u odgovarajuæu mapu Smajliæa, te izaberi toènu informaciju u ovoj formi kako bi ubacio/la paket Smajliæa.';
$lang['smiley_import'] = 'Umetanje paketa Smajliæa';
$lang['choose_smile_pak'] = 'Izaberi paket .pak datoteku Smajliæa';
$lang['import'] = 'Importiraj Smajliæe';
$lang['smile_conflicts'] = '©to bi trebalo napraviti u sluèaju konflikata?';
$lang['del_existing_smileys'] = 'Izbri¹i postojeæe Smajliæe prije importiranja';
$lang['import_smile_pack'] = 'Importiraj paket Smajliæa';
$lang['export_smile_pack'] = 'Kreiraj paket Smajliæa';
$lang['export_smiles'] = 'Da bi kreirao/la paket Smajliæa od trenutno instaliranih Smajliæa, klikni %sovdje%s kako bi  
preuzeo/la smiles.pak datoteku.<br />Nazovi adekvatno ovu datoteku pazeæi pri tome da saèuva¹ .pak  
ekstenziju.<br />Zatim kreiraj zip datoteku koja sadr¾i sve Smajliæe plus ovu .pak konfiguracijsku datoteku.';

$lang['smiley_add_success'] = 'Smajliæ je uspje¹no dodan.';
$lang['smiley_edit_success'] = 'Smajliæ je uspje¹no a¾uriran.';
$lang['smiley_import_success'] = 'Paket Smajliæa je uspje¹no importiran.';
$lang['smiley_del_success'] = 'Smajliæ je uspje¹no uklonjen.';
$lang['Click_return_smileadmin'] = 'Klikni %sovdje%s za povratak na Administraciju Smajliæa.';
$lang['Confirm_delete_smiley'] = 'Jesi li siguran/na da ¾eli¹ izbrisati ovog Smajliæa?';

//
// User Management
//

$lang['User_admin'] = 'Administracija korisnika/ca';
$lang['User_admin_explain'] = 'Ovdje mo¾e¹ promijeniti odreðene postavke i informacije korisnika/ca.<br />Za  
modificiranje dozvola korisnika/ca koristi sistem dozvola za korisnike/ce i Korisnièke grupe.';

$lang['Look_up_user'] = 'Pronaði korisnika/cu';

$lang['Admin_user_fail'] = 'Nije bilo moguæe a¾urirati korisnièki profil.';
$lang['Admin_user_updated'] = 'Korisnièki profil je uspje¹no a¾uriran.';
$lang['Click_return_useradmin'] = 'Klikni %sovdje%s za povratak na Administraciju korisnika/ca.';

$lang['User_delete'] = 'Izbrisivanje korisnika/ce';
$lang['User_delete_explain'] = '<i>Oznaèi kuæicu ukoliko ¾eli¹ izbrisati korisnika/cu; ova operacija ne mo¾e biti  
poni¹tena.</i>';
$lang['User_deleted'] = 'Korisnik/ca je uspje¹no izbrisan/a.';

$lang['User_status'] = 'Korisnik/ca je aktivan/na';
$lang['User_allowpm'] = 'Mo¾e slati privatne poruke';
$lang['User_allowavatar'] = 'Mo¾e koristiti Avatara';

$lang['Admin_avatar_explain'] = 'Ovdje mo¾e¹ vidjeti/izbrisati Avatara korisnika/ce.';

$lang['User_special'] = 'Posebna polja samo za administratore/ice';
$lang['User_special_explain'] = 'Ova polja ne mogu modificirati korisnici/e.<br />Ovdje mo¾e¹ podesiti njihov status i  
druge opcije kojima korisnici/e nemaju pristup.';

//
// Group Management
//

$lang['Group_administration'] = 'Administracija Korisnièkih grupa';
$lang['Group_admin_explain'] = 'Ovdje mo¾e¹ administrirati Korisnièke grupe.<br />Mo¾e¹ kreirati nove, te  
ureðivati/izbrisati postojeæe Korisnièke grupe.<br />Mo¾e¹ odreðivati moderatore/ice, status kao i nazive i opise  
Korisnièkih grupa.';
$lang['Error_updating_groups'] = 'Do¹lo je do gre¹ke prilikom a¾uriranja Korisnièke grupe.';
$lang['Updated_group'] = 'Korisnièka grupa je uspje¹no a¾urirana.';
$lang['Added_new_group'] = 'Korisnièka grupa je uspje¹no kreirana.';
$lang['Deleted_group'] = 'Korisnièka grupa je uspje¹no izbrisana.';
$lang['New_group'] = 'Kreiraj novu Korisnièku grupu';
$lang['Edit_group'] = 'Uredi Korisnièku grupu';
$lang['group_name'] = 'Naziv';
$lang['group_description'] = 'Opis';
$lang['group_moderator'] = 'Moderator/ica';
$lang['group_status'] = 'Status';
$lang['group_open'] = 'Otvorena';
$lang['group_closed'] = 'Zatvorena';
$lang['group_hidden'] = 'Skrivena';
$lang['group_delete'] = '®eli¹ izbrisati ovu Korisnièku grupu?';
$lang['group_delete_check'] = 'Da';
$lang['submit_group_changes'] = 'Po¹alji promjene';
$lang['reset_group_changes'] = 'Izbri¹i promjene';
$lang['No_group_name'] = 'Mora¹ specificirati naziv Korisnièke grupe.';
$lang['No_group_moderator'] = 'Mora¹ specificirati moderatora/icu Korisnièke grupe.';
$lang['No_group_mode'] = 'Mora¹ specificirati mod Korisnièke grupe, otvorena ili zatvorena.';
$lang['No_group_action'] = 'Nije specificirana akcija.';
$lang['delete_group_moderator'] = '®eli¹ izbrisati trenutnog/u moderatora/icu ove Korisnièke grupe?';
$lang['delete_moderator_explain'] = '<i>Ukoliko mijenja¹ moderatora/icu Korisnièke grupe, oznaèi ovu kuæicu kako  
bi izbrisao/la trenutnog moderatora/icu [ukoliko ne oznaèi¹ kuæicu, trenutni moderator/ica æe postati regularan èlan  
Korisnièke grupe].</i>';
$lang['Click_return_groupsadmin'] = 'Klikni %sovdje%s za povratak na Administraciju Korisnièkih grupa.';
$lang['Select_group'] = 'Izaberi Korisnièku grupu';
$lang['Look_up_group'] = 'Potra¾i Korisnièku grupu';

//
// Prune Administration
//

$lang['Forum_Prune'] = 'Administracija izbrisivanja foruma';
$lang['Forum_Prune_explain'] = 'Ovdje mo¾e¹ izbrisati svaku temu u kojoj nije bilo novih postova u rasponu dana kojeg  
odredi¹.<br />Ukoliko ne odredi¹ broj dana - sve teme æe biti izbrisane.<br />Samo aktualne ankete [one koje jo¹ traju]  
i Obavijesti neæe biti izbrisane [njih æe¹ morati izbrisati ruèno].';
$lang['Do_Prune'] = 'Pokreni izbrisivanje';
$lang['All_Forums'] = 'Svi forumi';
$lang['Prune_topics_not_posted'] = 'Izbri¹i teme u kojima nije bilo novih postova dana';
$lang['Topics_pruned'] = 'Izbrisane teme';
$lang['Posts_pruned'] = 'Izbrisani postovi';
$lang['Prune_success'] = 'Izbrisivanje foruma je uspje¹no obavljeno.';

//
// Word censor
//

$lang['Words_title'] = 'Administracija cenzure rijeèi';
$lang['Words_explain'] = 'Ovdje mo¾e¹ dodavati, ureðivati i izbrisati rijeèi koje æe automatski biti cenzurirane na  
forumu. <br />Automatski æe biti onemoguæeno i registriranje pod korisnièkim imenom koje sadr¾i cenzuriranu rijeè.<br  
/>Mo¾e¹ se koristiti i zvjezdicama (*) [npr.: *test* æe obuhvatiti sve rijeèi koje u sebi sadr¾e rijeè test; test* sve koje  
poèinju sa test; *test sve koje zavr¹avaju sa test].';
$lang['Word'] = 'Rijeè';
$lang['Edit_word_censor'] = 'Uredi';
$lang['Replacement'] = 'Zamjena';
$lang['Add_new_word'] = 'Dodaj novu rijeè';
$lang['Update_word'] = 'A¾uriraj';

$lang['Must_enter_word'] = 'Mora¹ unijeti i rijeè i zamjenu za nju.';
$lang['No_word_selected'] = 'Nisi oznaèio/la rijeè koju ¾eli¹ urediti.';

$lang['Word_updated'] = 'Rijeè je uspje¹no a¾urirana.';
$lang['Word_added'] = 'Rijeè je uspje¹no dodana.';
$lang['Word_removed'] = 'Rijeè je uspje¹no izbrisana.';

$lang['Click_return_wordadmin'] = 'Klikni %sovdje%s za povratak na Administraciju cenzure rijeèi.';
$lang['Confirm_delete_word'] = 'Jesi li siguran/na da ¾eli¹ izbrisati ovu rijeè?';

//
// Mass Email
//

$lang['Mass_email_explain'] = 'Ovdje mo¾e¹ poslati e-mail svim korisnicima/ama foruma odnosno èlanovima/icama  
Korisnièkih grupa.<br />E-mail æe otiæi s e-mail adrese administratora/ice foruma; primatelji/ce æe biti navedeni/e u BCC  
[Na znanje] odjeljku.<br />Ukoliko je primatelja/ica puno, mo¾da æe slanje e-maila potrajati neko vrijeme - bit æe¹  
obavije¹ten/a kada e-mail bude poslan.';
$lang['Compose'] = 'Sastavi'; 

$lang['Recipients'] = 'Primatelji/ce'; 
$lang['All_users'] = 'Kompletno Èlanstvo';

$lang['Email_successfull'] = 'Poruka je poslana.';
$lang['Click_return_massemail'] = 'Klikni %sovdje%s za povratak na formu Skupnog e-maila.';

//
// Ranks admin
//

$lang['Ranks_title'] = 'Administracija statusa';
$lang['Ranks_explain'] = 'Ovdje mo¾e¹ dodavati, ureðivati, pregledavati i izbrisati statuse.<br />Mo¾e¹ kreirati  
proizvoljne statuse koji mogu biti primijenjeni na korisnike/ce preko Administracije korisnika/ca.';

$lang['Add_new_rank'] = 'Dodaj novi status';

$lang['Rank_title'] = 'Status';
$lang['Rank_special'] = 'Specijalni status';
$lang['Rank_minimum'] = 'Min postova';
$lang['Rank_maximum'] = 'Max postova';
$lang['Rank_image'] = 'Slika statusa [u odnosu na phpBB]';
$lang['Rank_image_explain'] = '<i>Ova slièica æe se vidjeti ispod korisnièkog imena kod pregledavanja postova.</i>';

$lang['Must_select_rank'] = 'Mora¹ izabrati status.';
$lang['No_assigned_rank'] = 'Nije dodijeljen specijalan status';

$lang['Rank_updated'] = 'Status je uspje¹no a¾uriran.';
$lang['Rank_added'] = 'Status je uspje¹no dodan.';
$lang['Rank_removed'] = 'Status je uspje¹no izbrisan.';
$lang['No_update_ranks'] = 'Status je uspje¹no izbrisan.<br />Korisnièki raèuni koju su bili oznaèeni ovim statusom nisu  
a¾urirani; to æe¹ morati napraviti ruèno.';

$lang['Click_return_rankadmin'] = 'Klikni %sovdje%s za povratak na Administraciju statusa.';
$lang['Confirm_delete_rank'] = 'Jesi li siguran/na da ¾eli¹ izbrisati ovaj status?';

//
// Disallow Username Admin
//

$lang['Disallow_control'] = 'Administracija nedopu¹tenih korisnièkih imena';
$lang['Disallow_explain'] = 'Ovdje mo¾e¹ dodavati/izbrisati korisnièka imena pod kojima se nitko neæe moæi  
registrirati.<br />Mo¾e¹ koristiti i zvjezdice (*).<br />Naravno, neæe¹ moæi dodati niti jedno korisnièko ime koje je veæ  
registrirano [ukoliko to ¾eli¹ - mora¹ prvo promijeniti/izbrisati postojeæe korisnièko ime].';

$lang['Delete_disallow'] = 'Izbri¹i';
$lang['Delete_disallow_title'] = 'Izbri¹i nedopu¹teno korisnièko ime';
$lang['Delete_disallow_explain'] = 'Korisnièko ime mo¾e¹ izbrisati tako da ga izabere¹ s liste i klikne¹ na gumb  
Izbri¹i.';

$lang['Add_disallow'] = 'Dodaj';
$lang['Add_disallow_title'] = 'Dodaj nedopu¹teno korisnièko ime';
$lang['Add_disallow_explain'] = 'Mo¾e¹ koristiti i zvjezdice (*) - koje zamjenjuju bilo koji znak.';

$lang['No_disallowed'] = 'Nema nedopu¹tenih korisnièkih imena';

$lang['Disallowed_deleted'] = 'Nedopu¹teno korisnièko ime je izbrisano.';
$lang['Disallow_successful'] = 'Nedopu¹teno korisnièko ime je dodano.';
$lang['Disallowed_already'] = 'Ime koje si unio/la ne mo¾e biti nedopu¹teno.<br />Ili veæ postoji na listi, ili postoji na listi  
cenzuriranih rijeèi ili postoji takvo korisnièko ime.';

$lang['Click_return_disallowadmin'] = 'Klikni %sovdje%s za povratak na Administraciju nedopu¹tenih korisnièkih  
imena.';

//
// Styles Admin
//

$lang['Styles_admin'] = 'Administracija stilova';
$lang['Styles_explain'] = 'Ovdje mo¾e¹ dodavati, ureðivati i izbrisati stilove [teme i predlo¹ke].';
$lang['Styles_addnew_explain'] = 'Sljedeæa lista sadr¾i sve teme koje su dostupne za predlo¹ke koje ima¹.<br />Stavke  
liste nisu instalirane u phpBB bazu.<br />Da bi instalirao/la temu, klikni na gumb Instalirajte.';

$lang['Select_template'] = 'Izaberi predlo¾ak';

$lang['Style'] = 'Stil';
$lang['Template'] = 'Predlo¾ak';
$lang['Install'] = 'Instaliraj';
$lang['Download'] = 'Preuzmi';

$lang['Edit_theme'] = 'Uredi temu';
$lang['Edit_theme_explain'] = 'Donjom formom mo¾e¹ urediti postavke izabrane teme.';

$lang['Create_theme'] = 'Kreiraj temu';
$lang['Create_theme_explain'] = 'Donjom formom mo¾e¹ kreirati novu temu za izabrani predlo¾ak.<br />Kod uno¹enja  
boja [za koje koristi¹ heksadecimalni oblik] nemoj unositi znak ljestve (#) [npr.: CCCCCC je pravilno; #CCCCCC nije].';

$lang['Export_themes'] = 'Eksportiraj teme';
$lang['Export_explain'] = 'Ovdje mo¾e¹ eksportirati podatke teme za izabrani predlo¾ak.<br />Izaberi predlo¾ak sa  
donje liste i skripta æe kreirati konfiguracijsku datoteku teme te ju poku¹ati spremiti u izabranu mapu predlo¾aka.<br  
/>Ukoliko ju neæe moæi spremiti, predlo¾it æe da ju preuzme¹.<br />Da bi skripta mogla spremiti datoteku,  
mora¹ dati pravo pristupa serveru za izabranu mapu predlo¾aka.<br />Za vi¹e informacija o ovome, pogledaj  
phpBB 2 vodiè.';

$lang['Theme_installed'] = 'Tema je uspje¹no instalirana.';
$lang['Style_removed'] = 'Izabrani stil je izbrisan iz baze.<br />Da bi stil potpuno uklonio/la iz sistema mora¹ izbrisati  
odgovarajuæi stil iz mape predlo¾aka.';
$lang['Theme_info_saved'] = 'Informacije o temi za izabrani predlo¾ak su spremljene.<br />Sada bi trebao/la vratiti  
dozvole za theme_info.cfg [ako je moguæe i za izabranu mapu predlo¾aka] u read-only [samo za èitanje].';
$lang['Theme_updated'] = 'Tema je uspje¹no a¾urirana.<br />Sada bi trebao/la eksportirati nove postavke teme.';
$lang['Theme_created'] = 'Tema je kreirana.<br />Sada bi trebao/la eksportirati temu u konfiguracijsku datoteku teme  
zbog backupa ili uporabe negdje drugdje.';

$lang['Confirm_delete_style'] = 'Jesi li siguran/na da ¾eli¹ izbrisati ovaj stil?';

$lang['Download_theme_cfg'] = 'Nije bilo moguæe zapisati konfiguracijsku datoteku teme.<br />Klikni na donji gumb kako bi preuzeo/la ovu datoteku preglednikom.<br />Kada ju preuzme¹, mo¾e¹ ju transferirati u mapu  
predlo¾aka.<br />Tada mo¾e¹ spakirati datoteke za distribuciju ili uporabu negdje drugdje.';
$lang['No_themes'] = 'Predlo¾ak kojeg si izabrao/la nema tema vezanih uz sebe.<br />Da bi kreirao/la novu temu, klikni  
na link lijevo za kreiranje nove teme.';
$lang['No_template_dir'] = 'Nije bilo moguæe otvoriti mapu predlo¾aka.<br />Mo¾da je neèitljiva serveru ili ne  
postoji.';
$lang['Cannot_remove_style'] = 'Ne mo¾e¹ izbrisati izabrani stil jer je oznaèen kao zadani za forum.<br />Promijeni  
zadani stil foruma i poku¹aj ponovo.';
$lang['Style_exists'] = 'Izabrano ime stila veæ postoji; vrati se natrag i izaberi drugo ime.';

$lang['Click_return_styleadmin'] = 'Klikni %sovdje%s za povratak na Administraciju stilova.';

$lang['Theme_settings'] = 'Postavke teme';
$lang['Theme_element'] = 'Elementi teme';
$lang['Simple_name'] = 'Jednostavan naziv';
$lang['Value'] = 'Vrijednost';
$lang['Save_Settings'] = 'Spremi postavke';

$lang['Stylesheet'] = 'CSS';
$lang['Stylesheet_explain'] = '<i>Naziv datoteke</i>';
$lang['Background_image'] = 'Slika pozadine';
$lang['Background_color'] = 'Boja pozadine';
$lang['Theme_name'] = 'Naziv teme';
$lang['Link_color'] = 'Boja linkova';
$lang['Text_color'] = 'Boja teksta';
$lang['VLink_color'] = 'Boja posjeæenih linkova';
$lang['ALink_color'] = 'Boja aktivnih linkova';
$lang['HLink_color'] = 'Boja prelazeæih linkova';
$lang['Tr_color1'] = 'Boja 1 redova tabela';
$lang['Tr_color2'] = 'Boja 2 redova tabela';
$lang['Tr_color3'] = 'Boja 3 redova tabela';
$lang['Tr_class1'] = 'Class 1 redova tabela';
$lang['Tr_class2'] = 'Class 2 redova tabela';
$lang['Tr_class3'] = 'Class 3 redova tabela';
$lang['Th_color1'] = 'Boja 1 zaglavlja tabela';
$lang['Th_color2'] = 'Boja 2 zaglavlja tabela';
$lang['Th_color3'] = 'Boja 3 zaglavlja tabela';
$lang['Th_class1'] = 'Class 1 zaglavlja tabela';
$lang['Th_class2'] = 'Class 2 zaglavlja tabela';
$lang['Th_class3'] = 'Class 3 zaglavlja tabela';
$lang['Td_color1'] = 'Boja 1 æelija tabela';
$lang['Td_color2'] = 'Boja 2 æelija tabela';
$lang['Td_color3'] = 'Boja 3 æelija tabela';
$lang['Td_class1'] = 'Class 1 æelija tabela';
$lang['Td_class2'] = 'Class 2 æelija tabela';
$lang['Td_class3'] = 'Class 3 æelija tabela';
$lang['fontface1'] = 'Vrsta fonta 1';
$lang['fontface2'] = 'Vrsta fonta 2';
$lang['fontface3'] = 'Vrsta fonta 3';
$lang['fontsize1'] = 'Velièina fonta 1';
$lang['fontsize2'] = 'Velièina fonta 2';
$lang['fontsize3'] = 'Velièina fonta 3';
$lang['fontcolor1'] = 'Boja fonta 1';
$lang['fontcolor2'] = 'Boja fonta 2';
$lang['fontcolor3'] = 'Boja fonta 3';
$lang['span_class1'] = 'Class 1 mjera';
$lang['span_class2'] = 'Class 2 mjera';
$lang['span_class3'] = 'Class 3 mjera';
$lang['img_poll_size'] = 'Velièina anketne slike [px]';
$lang['img_pm_size'] = 'Velièina statusa privatne poruke [px]';

//
// Install Process
//

$lang['Welcome_install'] = 'Dobro do¹ao/la u phpBB 2 instalaciju';
$lang['Initial_config'] = 'Osnovna konfiguracija';
$lang['DB_config'] = 'Konfiguracija baze';
$lang['Admin_config'] = 'Admin konfiguracija';
$lang['continue_upgrade'] = 'Kada preuzme¹ konfiguracijsku datoteku, mo¾e¹ kliknuti na gumb \'Nastavi  
nadogradnju\' kako bi nastavio/la s nadogradnjom.<br />Prièekaj s uploadiranjem konfiguracijske datoteke dok proces  
nadogradnje ne zavr¹i.';
$lang['upgrade_submit'] = 'Nastavi nadogradnju';

$lang['Installer_Error'] = 'Do¹lo je do gre¹ke prilikom instalacije.';
$lang['Previous_Install'] = 'Uoèena je prethodna instalacija.';
$lang['Install_db_error'] = 'Do¹lo je do gre¹ke prilikom poku¹aja nadogradnje baze.';

$lang['Re_install'] = 'Prethodna instalacija je jo¹ uvijek aktivna.<br />Ukoliko ¾eli¹ reinstalirati phpBB 2 klikni na Da  
gumb ispod.<br />Obrati pa¾nju na to da æe to dovesti do uni¹tenja svih postojeæih podataka i backupova.<br  
/>Korisnièko ime i zaporka administratora/ice, koje si koristio/la za loginiranje, bit æe ponovo kreirani nakon reinstalacije; ostale postavke neæe biti saèuvane.<br />Dobro razmisli prije klika na Da.';

$lang['Inst_Step_0'] = 'Hvala ¹to si izabrao/la phpBB 2.<br />Da bi zavr¹io/la instalaciju, ispuni tra¾ene podatke  
ispod.<br />Baza u koju instalira¹ bi veæ trebala postojati.<br />Ukoliko instalira¹ u bazu koja koristi ODBC, npr. MS  
Access, kreiraj DSN za nju prije nastavka.';

$lang['Start_Install'] = 'Poèni instalaciju';
$lang['Finish_Install'] = 'Zavr¹i instalaciju';

$lang['Default_lang'] = 'Zadani jezik foruma';
$lang['DB_Host'] = 'Hostname servera baze / DSN';
$lang['DB_Name'] = 'Ime baze';
$lang['DB_Username'] = 'Korisnièko ime baze';
$lang['DB_Password'] = 'Zaporka baze';
$lang['Database'] = 'Baza';
$lang['Install_lang'] = 'Izaberi jezik instalacije';
$lang['dbms'] = 'Tip baze';
$lang['Table_Prefix'] = 'Prefiks za tabele u bazi';
$lang['Admin_Username'] = 'Korisnièko ime administratora/ice';
$lang['Admin_Password'] = 'Zaporka administratora/ice';
$lang['Admin_Password_confirm'] = 'Zaporka administratora/ice [potvrdi]';

$lang['Inst_Step_2'] = 'Korisnièko ime administratora/ice je kreirano.<br />Ovime je osnovna instalacija zavr¹ena.<br  
/>Otvorit æe ti se stranica na kojoj æe¹ moæi izadministrirati novu instalaciju.<br />Provjeri postavke Opæe  
konfiguracije i uredi sve ¹to treba.<br />Hvala ¹to si izabrao/la phpBB 2.';

$lang['Unwriteable_config'] = 'Konfiguracijsku datoteku nije moguæe urediti.<br /> Kopija konfiguracijske datoteke bit æe preuzeta kada klikne¹ na donji gumb.<br />Uploadaj tu datoteku u istu mapu gdje si uploadirao/la i phpBB 2.<br  
/>Tada æe¹ se moæi loginirati koristeæi korisnièko ime i zaporku administratora/ice, koje si unio/la u prethodnoj formi, te otiæi u AdministratorPanel da provjeri¹ postavke Opæe konfiguracije.<br />Hvala ¹to si izabrao/la phpBB 2.';
$lang['Download_config'] = 'Preuzmi konfiguracijsku datoteku';

$lang['ftp_choose'] = 'Izaberi metodu preuzimanja';
$lang['ftp_option'] = '<br />S obzirom da su FTP ekstenzije omoguæene u ovoj verziji PHP-a, bit æe ti dana moguænost  
da prvo putem FTP-a postavi¹ konfiguracijsku datoteku na mjesto.';
$lang['ftp_instructs'] = 'Izabrao/la si FTP-iranje datoteke.<br />Unesi informacije ispod kako bi olak¹ao/la proces.<br  
/>FTP putanja mora biti toèno do phpBB 2 instalacije.';
$lang['ftp_info'] = 'Unesi FTP informacije';
$lang['Attempt_ftp'] = 'Poku¹aj FTP-irati konfiguracijsku datoteku';
$lang['Send_file'] = 'Po¹alji konfiguracijsku datoteku meni - ruèno æu je FTP-irati';
$lang['ftp_path'] = 'FTP putanja do phpBB 2';
$lang['ftp_username'] = 'FTP korisnièko ime';
$lang['ftp_password'] = 'FTP zaporka';
$lang['Transfer_config'] = 'Zapoèni transfer';
$lang['NoFTP_config'] = 'Poku¹aj FTP-iranja konfiguracijske datoteke nije uspio<br />Preuzmi konfiguracijsku  
datoteku i FTP-iraj ju ruèno.';

$lang['Install'] = 'Instaliranje';
$lang['Upgrade'] = 'Nadogradnja';

$lang['Install_Method'] = 'Izaberi metodu instalacije';

$lang['Install_No_Ext'] = 'PHP konfiguracija servera ne podr¾ava tip baze koji si izabrao/la.';

$lang['Install_No_PCRE'] = 'phpBB2 zahtijeva <i>Perl-Compatible Regular Expressions Module</i> za PHP koji tvoja PHP  
konfiguracija, èini se, ne podr¾ava.';

//
// Version Check
//

$lang['Version_up_to_date'] = 'Ima¹ instaliranu zadnju verziju phpBB foruma ¹to æe reæi da nema potrebe za  
a¾uriranjem.';
$lang['Version_not_up_to_date'] = 'Èini se da <b>nema¹</b> instaliranu zadnju verziju phpBB foruma ¹to æe reæi da ne  
bi bilo zgorega obaviti a¾uriranje.<br />Informacije i upute potra¾i na <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a>.';
$lang['Latest_version_info'] = 'Zadnja dostupna verzija <b>phpBB</b> foruma je <b>%s</b>.<br />';
$lang['Current_version_info'] = 'Verzija <b>phpBB</b> foruma koju koristi¹ je <b>%s</b>.';
$lang['Connect_socket_error'] = 'Nije moguæe uspostaviti vezu sa phpBB serverom.<br />%s';
$lang['Socket_functions_disabled'] = 'Nije moguæe koristiti socket funkcije.';
$lang['Mailing_list_subscribe_reminder'] = 'Ukoliko ¾eli¹ dobivati informacije o a¾uriranju te ostalim novostima vezanim  
uz phpBB - <a href="http://www.phpbb.com/support/" target="_new">pretplati se na na¹u mailing listu</a>.';
$lang['Version_information'] = 'Verzija';

//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'Broj dopu¹tenih poku¹aja loginiranja';
$lang['Max_login_attempts_explain'] = '<i>Koliko je puta zaredom, u sluèaju netoènog unosa, dopu¹teno loginiranje za  
jedan [odreðen] korisnièki raèun.</i>';
$lang['Login_reset_time'] = 'Trajanje zabrane loginiranja';
$lang['Login_reset_time_explain'] = '<i>Vremenski period koji mora proæi kako bi se korisnik/ca, koji/a je iskoristio/la  
dozvoljen broj neuspjelih poku¹aja uzastopnog loginiranja, mogao/la ponovo poku¹ati loginirati.</i>';

//
// That's all Folks!
//

?>