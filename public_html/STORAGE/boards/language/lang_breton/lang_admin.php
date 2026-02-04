<?php

/***************************************************************************
 *                            lang_admin.php [Breton]
 *                              -------------------
 *     begin                : Oct 2004
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.35.2.9 2003/07/16 22:26:02 psotfx Exp $
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

/* CONTRIBUTORS 
	Translation produced by Malo-net
	http://malomorvan.free.fr
*/ 

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Merañs hollek';
$lang['Users'] = 'Merañs an implijerien';
$lang['Groups'] = 'Merañs ar Rummadoù';
$lang['Forums'] = 'Merañs ar Forumoù';
$lang['Styles'] = 'Merañs an Temoù';

$lang['Configuration'] = 'Ardremmez';
$lang['Permissions'] = 'Aotreoù';
$lang['Manage'] = 'Ober war-dro';
$lang['Disallow'] = 'Difenn un anv implijer';
$lang['Prune'] = 'Disammañ';
$lang['Mass_Email'] = 'Postel a-stroll';
$lang['Ranks'] = 'Renkoù';
$lang['Smilies'] = 'Smilies';
$lang['Ban_Management'] = 'Merañs ar skarzhadennoù';
$lang['Word_Censor'] = 'Teñserezh';
$lang['Export'] = 'Ermaeziañ';
$lang['Create_new'] = 'Krouiñ';
$lang['Add_new'] = 'Ouzhpennañ';
$lang['Backup_DB'] = 'Saveteiñ an diaz-titouroù';
$lang['Restore_DB'] = 'Resteurel an diaz-titouroù';


//
// Index
//
$lang['Admin'] = 'Merañs';
$lang['Not_admin'] = 'N\'oc\'h ket aotreet da verañ ar forum-mañ';
$lang['Welcome_phpBB'] = 'Degemer mat war phpBB';
$lang['Admin_intro'] = 'Trugarez da vezañ dibabet phpBB evit ho forum. Gant ar bajenn-mañ ho po ur berrsel war statistikoù ho forum. Klikit war <u>Roll ar Merañs</u> el lodenn a-gleiz evit distreiñ d\'ar bajenn-mañ. Klikit war skeudennig phpBB evit distreiñ da Roll ho Forum. Gant liammoù all al lodenn a-gleiz e c\'helloc\'h merañ holl neuzioù ho forum. War bep pajenn e vo ar binviji a zere.';
$lang['Main_index'] = 'Roll ar Forum';
$lang['Forum_stats'] = 'Statistikoù ar Forum';
$lang['Admin_Index'] = 'Roll ar Merañs';
$lang['Preview_forum'] = 'Berrsel eus ar Forum';

$lang['Click_return_admin_index'] = 'Klikit %samañ%s evit distreiñ da Roll ar Merañs';

$lang['Statistic'] = 'Statistik';
$lang['Value'] = 'Talvoud';
$lang['Number_posts'] = 'Niver a gemennadennoù';
$lang['Posts_per_day'] = 'Kemennadennoù dre zevezh';
$lang['Number_topics'] = 'Niver a sujedoù';
$lang['Topics_per_day'] = 'Sujedoù dre zevezh';
$lang['Number_users'] = 'Niver a implijerien';
$lang['Users_per_day'] = 'Implijerien dre zevezh';
$lang['Board_started'] = 'Dieziad-digeriñ ar forum';
$lang['Avatar_dir_size'] = 'Ment teuliad an Avatarioù';
$lang['Database_size'] = 'Ment an diaz-titouroù';
$lang['Gzip_compression'] ='Gwaegañ Gzip';
$lang['Not_available'] = 'Ket da gaout';

$lang['ON'] = 'ON'; // This is for GZip compression
$lang['OFF'] = 'OFF';


//
// DB Utils
//
$lang['Database_Utilities'] = 'Binviji an diaz-titouroù';

$lang['Restore'] = 'Resteurel';
$lang['Backup'] = 'Saveteiñ';
$lang['Restore_explain'] = 'Resteurel a raio holl daolioù phpBB adal ur restr ho poa saveteet en a-raok. Ma vez aotreet gant ho servijour e c\'hellit kas ur restr gwaeget er stumm Gzip, ha diwaeget e vo e-unan. <B>DIWALLIT</B>: Gant an oberadenn-mañ e tiverkoc\'h an holl roadennoù a zo bremañ en ho tiaz-titouroù. Gallout a ra ar resteurel padout pellik, neuze n\'it war bajenn all ebet betek ma vefe peurechu.';
$lang['Backup_explain'] = 'Amañ e c\'hellit saveteiñ holl roadennoù phpBB. M\'ho peus taolioù ouzhpenn deoc\'h en hevelep diaz-titouroù ha phpBB ha m\'ho peus c\'hoant d\'o saveteiñ ivez, lakit o anvioù, gant ur skej etre pep anv, e-barzh \'Taolioù Ouzhpenn\' amañ-dindan. Ma vez aotreet gant ho servijour e c\'hellit gwaegañ ar restr-saveteiñ er stumm gzip evit krennañ e vent a-raok e bellgargañ.';

$lang['Backup_options'] = 'Dilennoù Saveteiñ';
$lang['Start_backup'] = 'Loc\'hañ gant ar saveteiñ';
$lang['Full_backup'] = 'Saveteiñ pep tra';
$lang['Structure_backup'] = 'Saveteiñ ar framm hepken';
$lang['Data_backup'] = 'Saveteiñ ar roadennoù hepken.';
$lang['Additional_tables'] = 'Taolioù Ouzhpenn';
$lang['Gzip_compress'] = 'Gwaegañ Gzip';
$lang['Select_file'] = 'Diuz ur restr';
$lang['Start_Restore'] = 'Loc\'hañ gant ar Resteurel';

$lang['Restore_success'] = 'Restaolet eo bet ho tiaz-titouroù.<br /><br />Rankout a rafe ho forum distreiñ d\'ar stad ma oa pa oa bet saveteet.';
$lang['Backup_download'] = 'A-benn nebeut e krogo ar bellgargadenn; gortozit un tammig mar-plij.';
$lang['Backups_not_supported'] = 'Digarez, met gant ar sistem diaz-titouroù implijet ganeoc\'h, n\'eus ket tu da saveteiñ ho tiaz-titouroù.';

$lang['Restore_Error_uploading'] = 'Ur fazi \'zo bet o kas ar saveteadenn.';
$lang['Restore_Error_filename'] = 'Ur gudenn \'zo gant anv ur restr, klaskit gant ur restr all mar-plij.';
$lang['Restore_Error_decompress'] = 'Dibosupl eo diwaegañ er restr gzip; kasit anezhañ en ur stumm ket gwaeget.';
$lang['Restore_Error_no_file'] = 'N\'eus bet kavet restr ebet.';


//
// Auth pages
//
$lang['Select_a_User'] = 'Diuz un Implijer';
$lang['Select_a_Group'] = 'Diuz ur Rummad';
$lang['Select_a_Forum'] = 'Diuz ur Forum';
$lang['Auth_Control_User'] = 'Merañ Aotreoù an Implijerien';
$lang['Auth_Control_Group'] = 'Merañ Aotreoù ar Rummadoù';
$lang['Auth_Control_Forum'] = 'Merañ Aotreoù ar Forumoù';
$lang['Look_up_User'] = 'Klask an Implijer';
$lang['Look_up_Group'] = 'Klask ar Rummad';
$lang['Look_up_Forum'] = 'Klask ar Forum';

$lang['Group_auth_explain'] = 'Amañ e c\'hellit kemm aotreoù ha statudoù-kuñvaat ar Rummadoù. N\'ankouit ket eo posupl e vefe bet roet un aotre hiniennel hag un aotre a-stroll asambles, o kemm an aotre a-stroll ne gemmit ket an aotre hiniennel, ha posupl eo neuze e chomfe o aotreoù hiniennel gant izili \'zo er Rummad. Kelaouet e voc\'h ma c\'hoarvez kement-mañ.';
$lang['User_auth_explain'] = 'Amañ e c\'hellit kemm aotreoù ha statudoù-kuñvaat an Implijerien. N\'ankouit ket eo posupl e vefe bet roet un aotre hiniennel hag un aotre a-stroll asambles, o kemm an aotre hiniennel ne gemmit ket an aotre a-stroll, ha posupl eo neuze e chomfe o aotreoù a-stroll gant izili \'zo. Kelaouet e voc\'h ma c\'hoarvez kement-mañ.';
$lang['Forum_auth_explain'] = 'Amañ e c\'hellit kemm liveoù-digeriñ ar Forumoù. Un doare eeun hag unan klokoc\'h, gant muioc\'h a vunudoù kemmadus, a vo kinniget deoc\'h. N\'ankoueit ket e c\'hell ho cheñchamantoù war live-digeriñ ar Forumoù kaout efedoù bras pe vrasoc\'h war an implijerien.';

$lang['Simple_mode'] = 'Doare Eeun';
$lang['Advanced_mode'] = 'Doare Klokoc\'h';
$lang['Moderator_status'] = 'Statud kasour';

$lang['Allowed_Access'] = 'Aotreet da vont';
$lang['Disallowed_Access'] = 'Difennet da vont';
$lang['Is_Moderator'] = 'a zo kasour';
$lang['Not_Moderator'] = 'n\'eo ket kasour';

$lang['Conflict_warning'] = 'Diwallit: bec\'h a sav etre an Aotreoù';
$lang['Conflict_access_userauth'] = 'Dre m\'emañ an ezel-mañ en ur Rummad e c\'hell c\'hoazh mont war ar forum. Gallout a rit kemm aotreoù ar Rummad, pe tennañ anezhañ outañ evit herzel outañ penn-da-benn da vont war ar forum. Amañ-dindan eo bet skrivet Aotreoù ar Rummadoù war Forumoù \'zo :';
$lang['Conflict_mod_userauth'] = 'Dre m\'emañ an ezel-mañ en ur Rummad e c\'hell c\'hoazh kuñvaat ar forum. Gallout a rit kemm aotreoù ar Rummad, pe tennañ anezhañ outañ evit herzel outañ penn-da-benn da vont war ar forum. Amañ-dindan eo bet skrivet Aotreoù ar Rummadoù.';

$lang['Conflict_access_groupauth'] = 'Abalamour d\'e (o) aoteroù hiniennel e c\'hell c\'hoazh an implijer(ien)-mañ mont war ar forum. Gallout a rit kemm e (o) aotreoù hiniennel evit herzel outañ (outo) penn-da-benn da vont war ar forum. Amañ-dindan eo bet skrivet an aotreoù hiniennel.';
$lang['Conflict_mod_groupauth'] = 'Abalamour d\'e (o) aoteroù hiniennel e c\'hell c\'hoazh an implijer(ien)-mañ kuñvaat ar forum. Gallout a rit kemm e (o) aotreoù hiniennel evit herzel outañ (outo) penn-da-benn da guñvaat ar forum. Amañ-dindan eo bet skrivet an aotreoù hiniennel.';

$lang['Public'] = 'Foran';
$lang['Private'] = 'Prevez';
$lang['Registered'] = 'Enrollet';
$lang['Administrators'] = 'Merourien';
$lang['Hidden'] = 'Kuzh';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'HOLL';
$lang['Forum_REG'] = 'IZILI';
$lang['Forum_PRIVATE'] = 'PREVEZ';
$lang['Forum_MOD'] = 'KAS';
$lang['Forum_ADMIN'] = 'MER';

$lang['View'] = 'Gwelet';
$lang['Read'] = 'Lenn';
$lang['Post'] = 'Kas';
$lang['Reply'] = 'Respont';
$lang['Edit'] = 'Kemm';
$lang['Delete'] = 'Diverkañ';
$lang['Sticky'] = 'Post-it';
$lang['Announce'] = 'Kemenn';
$lang['Vote'] = 'Mouezhiañ';
$lang['Pollcreate'] = 'Sevel ur sontadeg';

$lang['Permissions'] = 'Aotreoù';
$lang['Simple_Permission'] = 'Aotre eeun';

$lang['User_Level'] = 'Live an implijer';
$lang['Auth_User'] = 'Implijer';
$lang['Auth_Admin'] = 'Merour';
$lang['Group_memberships'] = 'Titouroù war ar Rummadoù';
$lang['Usergroup_members'] = 'An izili da-heul a zo er rummad-mañ';

$lang['Forum_auth_updated'] = 'Kemmet eo bet Aotreoù ar Forum';
$lang['User_auth_updated'] = 'Kemmet eo bet Aotreoù an Implijer';
$lang['Group_auth_updated'] = 'Kemmet eo bet Aotreoù ar Rummad';

$lang['Auth_updated'] = 'Kemmet eo bet an Aotreoù';
$lang['Click_return_userauth'] = 'klikit %samañ%s evit distreiñ da Aotreoù an Implijerien';
$lang['Click_return_groupauth'] = 'Klikit %samañ%s evit distreiñ da Aotreoù ar Rummadoù';
$lang['Click_return_forumauth'] = 'Klikit %samañ%s evit distreiñ da Aotreoù ar Forumoù';


//
// Banning
//
$lang['Ban_control'] = 'Merañs ar Skarzherezh';
$lang['Ban_explain'] = 'Amañ e c\'hellit ober war-dro skarzherezh an Implijerien. Gallout a rit difenn un anv implijer, ur chomplec\'h IP, pe anv ur servijer. Herzel a raio an hentennoù-se ouzh un implijer da vont war ho forum, met evit herzel outañ da grouiñ ur gont nevez eo ret deoc\'h difenn e bostel. Ma difennit ar postel hepken hep difenn e berzhioù all menneget a-us e c\'hello hennezh kennaskañ ha kas kemennadennoù war ho forum, setu perak eo ret deoc\'h implijout an div hentenn asambles.';
$lang['Ban_explain_warn'] = 'Ma skrivit un teskad chomlec\'hioù IP e vo difennet an holl chomlec\'hioù IP a zo etre hini kentañ hag hini ziwezhañ an teskad. Amprouadennoù a vo graet evit krennaat niver ar chomlec\'hioù IP a zo en diaz-titouroù o lakaat Jokerioù el lec\'hioù a zere. Ma \'z hoc\'h rediet da vat da lakaat un teskad chomlec\'hioù IP, klaskit lakaat an hini bihanañ posupl, ha, gwelloc\'h c\'hoazh, roit chomlec\'hioù unan-hag-unan.';

$lang['Select_username'] = 'Diuz un Anv Implijer';
$lang['Select_ip'] = 'Diuz ur chomlec\'h IP';
$lang['Select_email'] = 'Diuz ur postel';

$lang['Ban_username'] = 'Skarzhañ un implijer resis pe meur a hini';
$lang['Ban_username_explain'] = 'Gallout a rit skrazhañ meur a implijer d\'un taol oc\'h implijout ar c\'henaozadur a zere war ho touchennaoueg pe gant ho logodenn.';

$lang['Ban_IP'] = 'Skarzhañ ur chomlec\'h IP, meur a hini, pe anv ur servijer';
$lang['IP_hostname'] = 'Chomlec\'hioù IP pe anvioù servijer';
$lang['Ban_IP_explain'] = 'Lakait skejoù etre ar chomlec\'hioù IP pe anv anvioù servijer ma zo meur a hini. Lakait un tired (-) etre talvoud kentañ hag hini ziwezhañ un teskad m\'ho peus da lakaat unan. Implijit ar steredenn (*) m\'ho peus ezhomm ouzh un joker.';

$lang['Ban_email'] = 'Difenn ur postel, pe meur a hini';
$lang['Ban_email_explain'] = 'Lakait skejoù etre ar postelioù ma vez ouzhpenn unan. Implijit * m\'ho peus ezhomm ouzh un joker, da skouer *@hotmail.com';

$lang['Unban_username'] = 'Adaotreañ un Implijer pe meur a hini';
$lang['Unban_username_explain'] = 'Gallout a rit adaotreañ meur a implijer oc\'h implijout ar c\'henaozadur a zere war ho touchennaoueg pe gant ho logodenn.';

$lang['Unban_IP'] = 'Adaotreañ ur chomlec\'h IP pe meur a hini';
$lang['Unban_IP_explain'] = 'Gallout a rit adaotreañ meur a chomlec\'h IP oc\'h implijout ar c\'henaozadur a zere war ho touchennaoueg pe gant ho logodenn.';

$lang['Unban_email'] = 'Adaotreañ ur postel pe meur a hini';
$lang['Unban_email_explain'] = 'Gallout a rit adaotreañ meur a bostel oc\'h implijout ar c\'henaozadur a zere war ho touchennaoueg pe gant ho logodenn.';

$lang['No_banned_users'] = 'Anv implijer ebet skarzhet';
$lang['No_banned_ip'] = 'Chomlec\'h IP ebet skarzhet';
$lang['No_banned_email'] = 'Postel ebet skarzhet';

$lang['Ban_update_sucessful'] = 'Kemmet eo bet listenn ar skarzherezh';
$lang['Click_return_banadmin'] = 'klikit %samañ%s evit distreiñ da verañs ar Skarzherezh';


//
// Configuration
//
$lang['General_Config'] = 'Ardremmez hollek';
$lang['Config_explain'] = 'Gant ar furmskrid amañ-dindan e c\'helloc\'h kemm holl dilennoù hollek ar forum. Klikit el liammoù el lodenn a-gleiz evit dilennoù resisoc\'h.';

$lang['Click_return_config'] = 'Klikit %samañ%s evit distreiñ d\'an Ardremmez Hollek';

$lang['General_settings'] = 'Dilennoù Hollek ar Forum';
$lang['Server_name'] = 'Anv an domani';
$lang['Server_name_explain'] = 'Anv an domani a vez implijet gant ar forum';
$lang['Script_path'] = 'Treug ar script';
$lang['Script_path_explain'] = 'Treug phpBB2 e-keñver anv an domani';
$lang['Server_port'] = 'Porzh ar servijer';
$lang['Server_port_explain'] = 'Peuliesañ e vez implijet ar porzh 80 gant ar servijer. Na gemmit nemet ma vefe disheñvel.';
$lang['Site_name'] = 'Anv al lec\'hienn';
$lang['Site_desc'] = 'Deskrivadenn al lec\'hienn';
$lang['Board_disable'] = 'Disenaouiñ ar forum';
$lang['Board_disable_explain'] = 'Ne c\'hello ket an implijerien mont war ar forum ken. Ar merourien a c\'hello koulskoude mont war ar banell-merañ.';
$lang['Acct_activation'] = 'Enaouiñ ar c\'hont';
$lang['Acc_None'] = 'Ebet'; // These three entries are the type of activation
$lang['Acc_User'] = 'Implijer';
$lang['Acc_Admin'] = 'Merour';

$lang['Abilities_settings'] = 'Dilennoù diazez an Implijer hag ar Forum';
$lang['Max_poll_options'] = 'Niver brasañ posupl a zilennoù en ur sontadeg';
$lang['Flood_Interval'] = 'Padelezh Floodiñ';
$lang['Flood_Interval_explain'] = 'An amzer en devo un implijer da c\'hortoz a-raok gallout kas ur gemennadenn all goude bezañ kaset unan.';
$lang['Board_email_form'] = 'Postelañ dre ar forum';
$lang['Board_email_form_explain'] = 'Kas a ra an implijerien posteloù dre ar forum-mañ';
$lang['Topics_per_page'] = 'Sujedoù war bep pajenn';
$lang['Posts_per_page'] = 'Kemennadennoù war bep pajenn';
$lang['Hot_threshold'] = 'Niver a gemennadennoù da zibaseal evit bezañ lakaet da \\"entanus\\"';
$lang['Default_style'] = 'Tem dre ziouer';
$lang['Override_style'] = 'Nulañ tem an Implijer';
$lang['Override_style_explain'] = 'Erlec\'hiañ a ra an tem dibabet gant an implijer gant an hini dre-ziouer';
$lang['Default_language'] = 'Yezh dre ziouer';
$lang['Date_format'] = 'Stumm an deiziad';
$lang['System_timezone'] = 'Gwerzhid-Eur';
$lang['Enable_gzip'] = 'Ober gant ar gwaegañ Gzip';
$lang['Enable_prune'] = 'Ober gant Disammañ ar Forum';
$lang['Allow_HTML'] = 'Aotreañ an HTML';
$lang['Allow_BBCode'] = 'Aotreañ ar BBCode';
$lang['Allowed_tags'] = 'Balizennoù HTML aotreet';
$lang['Allowed_tags_explain'] = 'Lakait skejoù etre ar balizennoù';
$lang['Allow_smilies'] = 'Aotreañ ar Smilies';
$lang['Smilies_path'] = 'Treug mirout ar Smilies';
$lang['Smilies_path_explain'] = 'An treug adal ho teuliad phpBB, da skouer: images/smilies';
$lang['Allow_sig'] = 'Aotreañ ar Sinadurioù';
$lang['Max_sig_length'] = 'Hirder brasañ posupl ar sinadur';
$lang['Max_sig_length_explain'] = 'An niver brasañ a arouezioù a vo aotreet an implijer da lakaat';
$lang['Allow_name_change'] = 'Aotreañ an implijer da gemm e Anv-Implijer';

$lang['Avatar_settings'] = 'Dilennoù an Avatarioù';
$lang['Allow_local'] = 'Ober gant garidenn an Avatarioù';
$lang['Allow_remote'] = 'Ober gant an Avatarioù a-bell';
$lang['Allow_remote_explain'] = 'War ul lec\'hienn all e vez miret an Avatarioù';
$lang['Allow_upload'] = 'Enaouiñ ar c\'has Avatarioù';
$lang['Max_filesize'] = 'Ment brasañ posupl restr an Avatarioù';
$lang['Max_filesize_explain'] = 'Evit an Avatarioù bet kaset';
$lang['Max_avatar_size'] = 'Mentoù brasañ posupl an Avatar';
$lang['Max_avatar_size_explain'] = '(Hirder x Ledander e pixeloù)';
$lang['Avatar_storage_path'] = 'Treug mirout an Avatarioù';
$lang['Avatar_storage_path_explain'] = 'An treug adal ho teuliad phpBB, da skouer : images/avatars';
$lang['Avatar_gallery_path'] = 'Treug garidenn an Avatarioù';
$lang['Avatar_gallery_path_explain'] = 'An treug adal ho teuliad phpBB evit ar skeudennoù rak-karget, da skouer : images/avatars/gallery';

$lang['COPPA_settings'] = 'Dilennoù COPPA';
$lang['COPPA_fax'] = 'Niverenn fax COPPA';
$lang['COPPA_mail'] = 'Chomlec\'h post COPPA';
$lang['COPPA_mail_explain'] = 'Ar chomlec\'h-post m\'ho do ar gerent da gas ar furmskrid-enrollañ dezhi.';

$lang['Email_settings'] = 'Dilennoù ar postel';
$lang['Admin_email'] = 'Postel ar Merour';
$lang['Email_sig'] = 'Sinadur ar Postelioù';
$lang['Email_sig_explain'] = 'Staget e vo an destennig-mañ ouzh pep postel kaset gant ar Forum';
$lang['Use_SMTP'] = 'Implijout ur servijer SMTP evit ar postelioù';
$lang['Use_SMTP_explain'] = 'Lakait Ya m\'ho peus c\'hoant da implijout ur servijer ispisial kentoc\'h eget ar c\'hefridi locale mail() evit kas postelioù';
$lang['SMTP_server'] = 'Chomlec\'h ar servijer SMTP';
$lang['SMTP_username'] = 'Anv implijer SMTP';
$lang['SMTP_username_explain'] = 'Na skrivit netra ma n\'ez eus ket ezhomm';
$lang['SMTP_password'] = 'Ger-tremen SMTP';
$lang['SMTP_password_explain'] = 'Na skrivit netra ma n\'ez eus ket ezhomm';

$lang['Disable_privmsg'] = 'Gerigoù Prevez';
$lang['Inbox_limits'] = 'Niver brasañ posupl a gemennadennoù er voest-degemer';
$lang['Sentbox_limits'] = 'Niver brasañ posupl a gemennadennoù er voest \'gerigoù kaset\'';
$lang['Savebox_limits'] = 'Niver brasañ posupl a gerigoù en Dielloù';

$lang['Cookie_settings'] = 'Dilennoù ar C\'hookie';
$lang['Cookie_settings_explain'] = 'Amañ e c\'hellit kemm an doare ma vez kaset ar c\'hookies da verdeer an implijerien. Peurliesañ ez eus trawalc\'h gant an talvoudoù a zo lakaet dre ziouer. Diwallit ma kemmit traoù \'zo amañ, kemmoù direizh a c\'hellfe herzel ouzh an implijerien da gennaskañ.';
$lang['Cookie_domain'] = 'Domani ar c\'hookie';
$lang['Cookie_name'] = 'Anv ar c\'hookie';
$lang['Cookie_path'] = 'Hent ar c\'hookie';
$lang['Cookie_secure'] = 'Cookie surentezet';
$lang['Cookie_secure_explain'] = 'Enaouit an dilenn-mañ ma\'z a ho servijour en-ro dre SSL, na rit ket e mod all.';
$lang['Session_length'] = 'Padelezh ar gweladenn [ eilennoù ]';


//
// Visual Confirmation
//
$lang['Visual_confirm'] = 'Enaouiñ ar gwiriañ dre-welet';
$lang['Visual_confirm_explain'] = 'Goulenn a ra digant an implijerien nevez-enrollet skrivañ ur c\'hod hag a zo war ur skeudenn pa enrollont';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Aotreañ ar c\'hennaskañ emgefreek';
$lang['Allow_autologin_explain'] = 'Divizout a ra ha gallout a ra pe get an implijerien dibab kennaskañ ez-emgefreek pa weladennont ar forum';
$lang['Autologin_time'] = 'Padelezh an Alc\'hwez Kennaskañ emgefreek';
$lang['Autologin_time_explain'] = 'E-pad pet devezh e vez miret talvoudegezh an Alc\hwez Kennaskañ Emgefreek ma ne vez ket gweladennet ar forum. Skrivit 0 evit ma ne zidalvoudekafe ket.';

// Search Flood Control - added 2.0.20
$lang['Search_Flood_Interval'] = 'Padelezh Floodañ evit an enklask';
$lang['Search_Flood_Interval_explain'] = 'An amzer da c\'hortoz etre div enklask'; 

//
// Forum Management
//
$lang['Forum_admin'] = 'Merañs ar Forumoù';
$lang['Forum_admin_explain'] = 'Adal ar panell-mañ e c\'hellit ouzhpennañ, diverkañ, kemm, adurzhiañ, hag adkenamzeriañ ho Rummadoù hag ho Forumoù.';
$lang['Edit_forum'] = 'Kemm ur forum';
$lang['Create_forum'] = 'Krouiñ ur forum nevez';
$lang['Create_category'] = 'Krouiñ ur rummad nevez';
$lang['Remove'] = 'Tennañ';
$lang['Action'] = 'Oberenn';
$lang['Update_order'] = 'Hizivaat an Urzh';
$lang['Config_updated'] = 'Kemmet eo bet ardremmez ar Forum';
$lang['Edit'] = 'Kemm';
$lang['Delete'] = 'Diverkañ';
$lang['Move_up'] = 'Pignat';
$lang['Move_down'] = 'Disken';
$lang['Resync'] = 'Adkenamzeriañ';
$lang['No_mode'] = 'N\'eus bet roet mod ebet';
$lang['Forum_edit_delete_explain'] = 'Gant ar furmskrid amañ-dindan e c\'helloc\'h kemm holl dilennoù hollek ar forum. Klikit war liammoù al lodenn a-gleiz evit dilennoù spisoc\'h.';

$lang['Move_contents'] = 'Dilec\'hiañ pep tra davet';
$lang['Forum_delete'] = 'Diverkañ ur forum';
$lang['Forum_delete_explain'] = 'Gant ar furmskrid amañ-dindan e c\'helloc\'h diverkañ ur forum (pe ur Rummad) ha dibab pelec\'h lakaat an holl gemennadennoù (pe Forumoù) a oa ennañ.';

$lang['Status_locked'] = 'Prennet';
$lang['Status_unlocked'] = 'Dibrenn';
$lang['Forum_settings'] = 'Dilennoù Hollek ar Forum';
$lang['Forum_name'] = 'Anv ar Forum';
$lang['Forum_desc'] = 'Deskrivadenn';
$lang['Forum_status'] = 'Statud ar Forum';
$lang['Forum_pruning'] = 'Disammañ emgefreek';

$lang['prune_freq'] = 'Gwiriañ oad ar sujedoù bep';
$lang['prune_days'] = 'Tennañ an holl sujedoù n\'eo ket bet respontet dezho abaoe';
$lang['Set_prune_data'] = 'Enaouet ho peus an disammañ emgefreek evit ar forum-mañ, met n\'ho peus ket roet ur frekañs pe un niver a zevezhioù da zisammañ. Kit war-gil hag en c\'hrit, mar plij.';

$lang['Move_and_Delete'] = 'Dilerc\'hiañ ha Diverkañ';

$lang['Delete_all_posts'] = 'Diverkañ an holl gemennadennoù';
$lang['Nowhere_to_move'] = 'Lec\'h ebet da zilec\'hiañ';

$lang['Edit_Category'] = 'Kemm ur Rummad';
$lang['Edit_Category_explain'] = 'Implijit ar furmskrid-mañ evit kemm anv ur Rummad.';

$lang['Forums_updated'] = 'Kemmet eo bet titouroù ar Forum hag ar Rummad.';

$lang['Must_delete_forums'] = 'Ret eo deoc\'h diverkañ an holl forumoù a-raok gallout diverkañ ar Rummad';

$lang['Click_return_forumadmin'] = 'Klikit %samañ%s evit distreiñ da Verañs ar Forumoù';


//
// Smiley Management
//
$lang['smiley_title'] = 'Benveg Kemm ar Smilies';
$lang['smile_desc'] = 'Adal ar bajenn-mañ e c\'hellit ouzhpennañ, tennañ, ha kemm ar skeudennigoù-imor pe ar smilies implijet er forumoù pe er gerigoù prevez.';

$lang['smiley_config'] = 'Ardremmez ar Smilies';
$lang['smiley_code'] = 'Kod ar Smilie';
$lang['smiley_url'] = 'Restr Skeudenn ar Smilie';
$lang['smiley_emot'] = 'Skeudennig ar Smilie';
$lang['smile_add'] = 'Ouzhpennañ ur Smilie nevez';
$lang['Smile'] = 'Mousc\'hoarzh';
$lang['Emotion'] = 'Trivliad';

$lang['Select_pak'] = 'Diuz ar restr Pack (.pak)';
$lang['replace_existing'] = 'Erlec\'hiañ ar Smilies a zo outo c\'hoazh';
$lang['keep_existing'] = 'Mirout ar Smilies a zo outo c\'hoazh';
$lang['smiley_import_inst'] = 'Ret eo deoc\'h dizipañ pack ar Smilies ha kas an holl restroù en teuliad Smilies a zere evit ar staliadur. Goude-se eo ret deoc\'h diuz an titouroù reizh er furmskrid-mañ evit gallout enbarzhañ pack ar Smilies';
$lang['smiley_import'] = 'Enbarzhañ ur Pack Smilies';
$lang['choose_smile_pak'] = 'Dibab ur restr Pack Smilies .pak';
$lang['import'] = 'Enbarzhañ ar Smilies';
$lang['smile_conflicts'] = 'Petra ober ma sav bec\'h ?';
$lang['del_existing_smileys'] = 'Diverkañ ar Smilies a oa a-raok an enbarzhañ';
$lang['import_smile_pack'] = 'Enbarzhañ ur pack Smilies';
$lang['export_smile_pack'] = 'Krouiñ ur Pack Smilies';
$lang['export_smiles'] = 'Evit krouiñ ur pack Smilies adal ar Smilies a zo staliet, klikit da gentañ %samañ%s evit pellgargañ restr .pak ar smilies. Roit un anv a zere d\'ar pack en doare da virout an astenn .pak, ha krouit ur restr .zip, ma lakoc\'h ar restr ardremmeziñ er stumm .pak hag an holl skeudennoù ennañ.';

$lang['smiley_add_success'] = 'Ouzhpennet eo bet ar Smilie';
$lang['smiley_edit_success'] = 'Kemmet eo bet ar Smilie';
$lang['smiley_import_success'] = 'Enbarzhet eo bet ar pack Smilies';
$lang['smiley_del_success'] = 'Tennet eo bet ar Smilie';
$lang['Click_return_smileadmin'] = 'Klikti %samañ%s evit distreiñ da verañs ar Smilies';
$lang['Confirm_delete_smiley'] = 'Sur oc\'h ho peus c\'hoant da ziverkañ ar Smilie-mañ ?';


//
// User Management
//
$lang['User_admin'] = 'Merañs an Implijerien';
$lang['User_admin_explain'] = 'Amañ e c\'hellit kemm titouroù an implijerien ha dilennoù ispisial all. Implijit pajenn an Aotreoù evit kemm o Aotreoù.';

$lang['Look_up_user'] = 'Klask an Implijer';

$lang['Admin_user_fail'] = 'Dibosupl eo kemm Aelad an Implijer.';
$lang['Admin_user_updated'] = 'Kemmet eo bet Aelad an Implijer.';
$lang['Click_return_useradmin'] = 'Klikit %samañ%s evit distreiñ da Verañs an Implijerien';

$lang['User_delete'] = 'Diverkañ an Implijer-mañ';
$lang['User_delete_explain'] = 'Klikit amañ evit diverkañ an Implijer. Ne vo ket tu deoc\'h mont war-gil.';
$lang['User_deleted'] = 'Diverket eo bet an Implijer.';

$lang['User_status'] = 'Oberiant eo an Implijer.';
$lang['User_allowpm'] = 'A c\'hell kas Gerigoù Prevez';
$lang['User_allowavatar'] = 'A c\'hell diskouez un Avatar';

$lang['Admin_avatar_explain'] = 'Amañ e c\'hellit diverkañ Avatar an Implijer.';

$lang['User_special'] = 'Lec\'hioù ispisial, evit ar merour(ien) hepken.';
$lang['User_special_explain'] = 'Ne c\'hell ket an titouroù-mañ bezañ kemmet gant an implijer. Amañ e c\'hellit kemm o statud, ha dilennoù all na vezont ket roet d\'an Implijerien.';


//
// Group Management
//
$lang['Group_administration'] = 'Merañs ar Rummadoù';
$lang['Group_admin_explain'] = 'Adal ar bajenn-mañ e c\'hellit merañ ho Rummadoù-Implijerien. Gallout a rti diverkañ, krouiñ, pe kemm anezho; dibab kasourien dezho, lakaat statud ar Rummad da zigor/serret, kemm anv ha deskrivadur ar Rummad.';
$lang['Error_updating_groups'] = 'Ur fazi a zo bet pa\'z eo bet kemmet ar Rummadoù';
$lang['Updated_group'] = 'Kemmet eo bet ar Rummad';
$lang['Added_new_group'] = 'Krouet eo bet ar Rummad';
$lang['Deleted_group'] = 'Diverket eo bet ar Rummad';
$lang['New_group'] = 'Krouiñ ur Rummad nevez';
$lang['Edit_group'] = 'Kemm ur Rummad';
$lang['group_name'] = 'Anv ar Rummad';
$lang['group_description'] = 'Deskrivadur ar Rummad';
$lang['group_moderator'] = 'Kasour ar Rummad';
$lang['group_status'] = 'Statud ar Rummad';
$lang['group_open'] = 'Rummad digor';
$lang['group_closed'] = 'Rummad serret';
$lang['group_hidden'] = 'Rummad kuzh';
$lang['group_delete'] = 'Diverkañ ur Rummad';
$lang['group_delete_check'] = 'Diverkañ ar Rummad-mañ';
$lang['submit_group_changes'] = 'Kas ar c\'hemmoù';
$lang['reset_group_changes'] = 'Adlakaat da vann';
$lang['No_group_name'] = 'Ret eo deoc\'h reiñ un anv d\'ar Rummad';
$lang['No_group_moderator'] = 'Ret eo deoc\'h reiñ ur c\'hasour d\'ar Rummad';
$lang['No_group_mode'] = 'Ret eo deoc\'h resisaat ma\'z eo digor pe serret ar Rummad';
$lang['No_group_action'] = 'N\'eus bet roet oberenn ebet';
$lang['delete_group_moderator'] = 'Diverkañ ar c\'hasour kozh eus ar Rummad ?';
$lang['delete_moderator_explain'] = 'Ma kemmit kasour ar Rummad, klikit amañ evit tennañ he c\'hasour kozh outi. Ma ne glikit ket e chomo hennezh er Rummad, evel un Implijer boutin.';
$lang['Click_return_groupsadmin'] = 'Klikit %samañ%s evit distreiñ da Verañs ar Rummadoù.';
$lang['Select_group'] = 'Diuz ur Rummad';
$lang['Look_up_group'] = 'Klask ur Rummad';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Disammañ ur Forum';
$lang['Forum_Prune_explain'] = 'Diverket e vo an holl sujedoù n\'eus ket bet respontet outo abaoe un niver a zevezhioù roet ganeoc\'h. Ma ne roit niver ebet e vo diverket an holl sujedoù estreget ar sontadegoù oberiant c\'hoazh, hag ar c\'hemennoù. Evit ar re-se e vo dav deoc\'h diverkañ anezho ho-unan.';
$lang['Do_Prune'] = 'Ober an disammañ';
$lang['All_Forums'] = 'An holl Forumoù';
$lang['Prune_topics_not_posted'] = 'Disammañ an holl sujedoù n\'eus ket bet repontet dezhe abaoe an niver a zevezhioù-mañ :';
$lang['Topics_pruned'] = 'Sujedoù disammet';
$lang['Posts_pruned'] = 'Kemennadennoù disammet';
$lang['Prune_success'] = 'Disammet eo bet ar Forumoù';


//
// Word censor
//
$lang['Words_title'] = 'Teñserezh ar gerioù';
$lang['Words_explain'] = 'Gant ar banell-mañ e c\'hellit ouzhpennañ, kemm, pe diverkañ ar gerioù a vo teñsaet en un doare emgefreek war ho forumoù. Ne vo ket aotreet d\'an dud enrollañ dindan unan eus an anvioù-se. Gallout a rit implijout jokerioù (*), da skouer *an* (pe *-an-*); boest* (pe boest-*) pe *diaoul (pe *-diaoul) a gloto gant boest-an-diaoul.';
$lang['Word'] = 'Ger';
$lang['Edit_word_censor'] = 'Kemm teñserezh ar ger';
$lang['Replacement'] = 'Erlec\'hiañ';
$lang['Add_new_word'] = 'Ouzhpennañ ur ger nevez';
$lang['Update_word'] = 'Hizivaat teñserezh ar ger';

$lang['Must_enter_word'] = 'Ret eo deoc\'h skrivañ ur ger hag an hini a erlec\'hio anezhañ';
$lang['No_word_selected'] = 'N\'eo bet diuzet ger ebet';

$lang['Word_updated'] = 'Hizivaet eo bet ar ger teñsaet diuzet';
$lang['Word_added'] = 'Ouzhpennet eo bet ar ger teñsaet';
$lang['Word_removed'] = 'Tennet eo bet ar ger teñsaet diuzet';

$lang['Click_return_wordadmin'] = 'klikit %samañ%s evit distreiñ da Verañs Teñserezh ar Gerioù';
$lang['Confirm_delete_word'] = 'Sur oc\'h ho peus c\'hoant da ziverkañ an teñsaer-mañ ?';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Amañ e c\'hellit kas an hevelep postel da holl implijerien ho forum pe da re ur rummad resis hepken. Evit hen ober e vo kaset un eilskouerenn kuzh adalek postel ar merour d\'an implijerien. Gallout a ra padout pellik, neuze gortozit da vezañ kelaouet eo echu.';
$lang['Compose'] = 'Aozañ';

$lang['Recipients'] = 'Da';
$lang['All_users'] = 'An holl implijerien';

$lang['Email_successfull'] = 'Kaset eo bet ho postel';
$lang['Click_return_massemail'] = 'Klikit %samañ%s evit distreiñ da furmskrid ar postelioù a-stroll';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Merañs ar Renkoù';
$lang['Ranks_explain'] = 'Gant ar furmskrid-mañ e c\'hellit ouzhpennañ, kemm, gwelet, ha diverkañ renkoù. Gallout a rit ivez krouiñ renkoù ispisial a vo roet da implijerien resis gant ar benveg Merañs an Implijerien.';

$lang['Add_new_rank'] = 'Ouzhpennañ ur renk nevez';

$lang['Rank_title'] = 'Titl ar Renk';
$lang['Rank_special'] = 'Lakaat da Renk Ispisial';
$lang['Rank_minimum'] = 'Niver bihanañ a gemennadennoù';
$lang['Rank_maximum'] = 'Niver brasañ a gemennadennoù';
$lang['Rank_image'] = 'Skeudenn ar Renk (diouzh treug phpBB2)';
$lang['Rank_image_explain'] = 'Gallout a rit stagañ ur skeudennig ouzh ar Renk';

$lang['Must_select_rank'] = 'Ret eo deoc\'h diuz ur renk';
$lang['No_assigned_rank'] = 'Renk ispisial ebet';

$lang['Rank_updated'] = 'Kemmet eo bet ar Renk';
$lang['Rank_added'] = 'Ouzhpennet eo bet ar Renk';
$lang['Rank_removed'] = 'Diverket eo bet ar Renk';
$lang['No_update_ranks'] = 'Diverket eo bet ar Renk, met n\'eo ket bet kemmet kontoù an Implijerien. Ret eo deoc\'h kemm o renk unan hag unan.';

$lang['Click_return_rankadmin'] = 'Klikit %samañ%s evit distreiñ da verañs ar Renkoù';
$lang['Confirm_delete_rank'] = 'Ha sur oc\'h ho peus c\'hoant da ziverkañ ar renk-mañ ?';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Merañs an Anv-Implijerien difennet';
$lang['Disallow_explain'] = 'Amañ e c\'hellit dibab an Anvioù-Implijer a vo difennet. Gallout a rit implijout an joker (*). Ne c\'hellit ket difenn un anv-implijer a zo outañ c\'hoazh. Ret eo deoc\'h diverkañ an implijer, ha difenn an Anv-Implijer goude-se.';

$lang['Delete_disallow'] = 'Diverkañ';
$lang['Delete_disallow_title'] = 'Tennañ un Anv-Implijer difennet';
$lang['Delete_disallow_explain'] = 'Gallout a rit tennañ un anv-implijer difennet o tiuz anv an implijer el listenn hag o klikañ war Diverkañ';

$lang['Add_disallow'] = 'Ouzhpennañ';
$lang['Add_disallow_title'] = 'Ouzhpennañ un Anv-Implijer difennet';
$lang['Add_disallow_explain'] = 'Gallout a rit implijout an Joker (*).';

$lang['No_disallowed'] = 'Anv-Implijer difennet ebet';

$lang['Disallowed_deleted'] = 'Tennet eo bet an Anv-Implijer difennet';
$lang['Disallow_successful'] = 'Ouzhpennet eo bet an Anv-Implijer';
$lang['Disallowed_already'] = 'N\'eo ket posupl difenn ar ger bet skrivet ganeoc\'h. Pe emañ c\'hoazh el listenn, pe emañ e listenn ar Gerioù Teñsaet, pe ez eus un implijer enrollet gant an anv-se.';

$lang['Click_return_disallowadmin'] = 'Klikit %samañ%s evit distreiñ da Verañs an Anv-Implijerien Difennet';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Merañs an Temoù';
$lang['Styles_explain'] = 'Gant ar benveg-mañ e c\'hellit ouzhpennañ, kemm, diverkañ ha merañ temoù ha patromoù teul a c\'hell bezañ implijet gant an implijerien.';
$lang['Styles_addnew_explain'] = 'El listenn-mañ emañ an holl temoù da gaout evit ar patrom implijet. Elfennoù al listenn-mañ n\'int ket bet staliet c\'hoazh war diaz-titouroù phpBB. Klikit war Staliañ evit staliañ un tem.';

$lang['Select_template'] = 'Diuz ur patrom teul.';

$lang['Style'] = 'Tem';
$lang['Template'] = 'Patrom teul';
$lang['Install'] = 'Staliadur';
$lang['Download'] = 'Pellgargañ';

$lang['Edit_theme'] = 'Kemm un tem';
$lang['Edit_theme_explain'] = 'Gant ar furmskrid amañ-dindan e c\'hellit kemm arventerioù an tem diuzet.';

$lang['Create_theme'] = 'Krouiñ un tem.';
$lang['Create_theme_explain'] = 'Implijit ar furmskrid amañ-dindan evit krouiñ un tem nevez evit ar Patrom teul implijet ganeoc\'h. Evit skrivañ al livioù e vo ret deoc\'h implijout ur skritur dre c\'hwec\'h degad, hep an #. Da skouer, skrivit CCCCCC, met ket #CCCCCC.';

$lang['Export_themes'] = 'Ermaeziañ temoù';
$lang['Export_explain'] = 'Amañ e c\'hellit ermaeziañ roadoù an tem-mañ evit ur Patrom teul ispisial. Diuzit ar Patrom teul el listenn amañ-dindan, ha krouet \'vo restr ardremmeziñ an tem gant ar poellad ha klasket \'vo e gopiañ e teuliad ar Patrom teul a zere. Ma ne teu ket a-benn d\'hen ober e kinnigo deoc\'h pellgargañ an tem. Evit ma c\'hellfe ar poellad kopiañ ar restr eo ret deoc\'h reiñ ar gwirioù da skrivañ evit an teuliad war ar servijour. Gwelit Sturiell an Implijer phpBB2 evit muioc\'h a ditouroù.';

$lang['Theme_installed'] = 'Staliet eo bet an tem diuzet.';
$lang['Style_removed'] = 'Tennet eo bet an tem diuzet eus an diaz-titouroù. Evit e dennañ penn-da-benn eus ho sistem eo ret deoc\'h diverkañ ar restroù a zere e teuliad  ar Patrom teul.';
$lang['Theme_info_saved'] = 'Saveteet eo bet titouroù an tem evit ar patrom teul diuzet. Rankout a rafec\'h krennañ aotreoù ar restr theme_info.cfg (ha, ma\'z eo posupl, e teuliad ar Patrom teul implijet), evit ma c\'hellfe lenn hepken.';
$lang['Theme_updated'] = 'Kemmet eo bet an tem diuzet. Rankout a rafec\'h ermaeziañ arventerioù nevez an tem.';
$lang['Theme_created'] = 'Krouet eo bet an tem. Rankout a rafec\'h ermaeziañ an tem davet e restr ardremmeziñ evit mirout anezhañ en ul lec\'h asur, pe evit gallout implijout anezhañ en ul lec\'h all.';

$lang['Confirm_delete_style'] = 'Ha sur hoc\'h ho peus c\'hoant da ziverkañ an tem-mañ ?';

$lang['Download_theme_cfg'] = 'Ne zeu ket an ermaezier a-benn da skrivañ restr titouroù an tem. Klikit war an nozelenn amañ-a-us evit pellgargañ ar restr gant ho merdeer. Pa vo bet pellgarget e c\'helloc\'h e gas en teuliad m\'emañ ar Patrom teul ennañ. Goude se e c\'helloc\'h krouiñ ur pack restroù evit skignañ anezhañ pe implijout anezhañ en ul lec\'h all ma karit.';
$lang['No_themes'] = 'N\'eus tem ebet evit ar Patrom teul ho peus diuzet. Klikit war Krouiñ un Tem Nevez evit krouiñ un tem nevez.';
$lang['No_template_dir'] = 'Dibosupl eo digeriñ teuliad ar Patrom teul. pe eo dilenadus gant ar servijer, pe n\'ez eus ket outañ.';
$lang['Cannot_remove_style'] = 'Ne c\'hellit ket tennañ an tem diuzet keit ha ma vez implijet hennezh evit bezañ an tem Dre-Ziouer. Kemmit an tem dre-ziouer, ha klaskit en-dro.';
$lang['Style_exists'] = 'C\'hoazh ez eus ouzh anv an tem ho peus dibabet. Dibabit un anv all ha klaksit en-dro.';

$lang['Click_return_styleadmin'] = 'Klkit %samañ%s evit distreiñ da Verañs an Temoù';

$lang['Theme_settings'] = 'Dilennoù an Tem';
$lang['Theme_element'] = 'Elfenn an Tem';
$lang['Simple_name'] = 'Anv eeun';
$lang['Value'] = 'Talvoud';
$lang['Save_Settings'] = 'Saveteiñ an arventerioù';

$lang['Stylesheet'] = 'Folenn-stil CSS';
$lang['Stylesheet_explain'] = 'Anv ar folenn-stil CSS da implijout evit an tem-mañ.';
$lang['Background_image'] = 'Skeudenn a-dreñv';
$lang['Background_color'] = 'Liv a-dreñv';
$lang['Theme_name'] = 'Anv an Tem';
$lang['Link_color'] = 'Liv al Liamm';
$lang['Text_color'] = 'Liv an Destenn';
$lang['VLink_color'] = 'Liv al Liamm Gweladennet';
$lang['ALink_color'] = 'Liv al Liamm Oberiant';
$lang['HLink_color'] = 'Liv al Liamm p\'emañ al logodenn warnañ';
$lang['Tr_color1'] = 'Taolenn Renkenn Liv 1';
$lang['Tr_color2'] = 'Taolenn Renkenn Liv 2';
$lang['Tr_color3'] = 'Taolenn Renkenn Liv 3';
$lang['Tr_class1'] = 'Taolenn Renkenn Class 1';
$lang['Tr_class2'] = 'Taolenn Renkenn Class 2';
$lang['Tr_class3'] = 'Taolenn Renkenn Class 3';
$lang['Th_color1'] = 'Taolenn Talbenn Liv 1';
$lang['Th_color2'] = 'Taolenn Talbenn Liv 2';
$lang['Th_color3'] = 'Taolenn Talbenn Liv 3';
$lang['Th_class1'] = 'Taolenn Talbenn Class 1';
$lang['Th_class2'] = 'Taolenn Talbenn Class 2';
$lang['Th_class3'] = 'Taolenn Talbenn Class 3';
$lang['Td_color1'] = 'Taolenn Kell Liv 1';
$lang['Td_color2'] = 'Taolenn Kell Liv 2';
$lang['Td_color3'] = 'Taolenn Kell Liv 3';
$lang['Td_class1'] = 'Taolenn Kell Class 1';
$lang['Td_class2'] = 'Taolenn Kell Class 2';
$lang['Td_class3'] = 'Taolenn Kell Class 3';
$lang['fontface1'] = 'Anv ar skritur 1';
$lang['fontface2'] = 'Anv ar skritur 2';
$lang['fontface3'] = 'Anv ar skritur 3';
$lang['fontsize1'] = 'Ment ar skritur 1';
$lang['fontsize2'] = 'Ment ar skritur 2';
$lang['fontsize3'] = 'Ment ar skritur 3';
$lang['fontcolor1'] = 'Liv ar skritur 1';
$lang['fontcolor2'] = 'Liv ar skritur 2';
$lang['fontcolor3'] = 'Liv ar skritur 3';
$lang['span_class1'] = 'Span Class 1';
$lang['span_class2'] = 'Span Class 2';
$lang['span_class3'] = 'Span Class 3';
$lang['img_poll_size'] = 'Ment ar skeudenn Sontadeg [px]';
$lang['img_pm_size'] = 'Ment Statud Gerig Prevez [px]';

//
// Install Process
//
$lang['Welcome_install'] = 'Degemer mat war staliadur phpBB2';
$lang['Initial_config'] = 'Ardremmez Diazez';
$lang['DB_config'] = 'Ardremmez an Diaz-Titouroù';
$lang['Admin_config'] = 'Ardremmez kont ar Merour';
$lang['continue_upgrade'] = 'P\'ho po pellgarget ar restr config war ho urzhiataerezh e c\'helloc\'h klikañ war an nozelenn \'Kenderc\'hel gant an Hizivaat\' amañ-dindan evit mont war-raok en Hizivadur. Ret eo deoc\'h gortoz ma vefe echu penn-da-benn an Hizivaat a-raok kas ar Restr config.';
$lang['upgrade_submit'] = 'Kenderc\'hel gant an Hizivaat';

$lang['Installer_Error'] = 'Ur fazi \'zo bet da vare ar staliadur';
$lang['Previous_Install'] = 'Ur staliadur kent a zo bet kavet';
$lang['Install_db_error'] = 'Ur fazi \'zo bet o klask hizivaat an Diaz-Titouroù.';

$lang['Re_install'] = 'Oberiant eo c\'hoazh ho staliadur kent. <br /><br />M\'ho peus c\'hoant da adstaliañ phpBB2, klikit war Ya amañ-dindan. DIWALLIT, ma pouezit war Ya e vo diverket an holl roadoù a oa betek-henn, ha ne vo saveteet netra ! Ne chomo mui nemet anv-implijer ar Merour hag ho ker-tremen.<br /><br />Prederiit mat a-raok klikañ war Ya !';

$lang['Inst_Step_0'] = 'Trugarez da vezañ bet dibabet phpBB2. Lakait an titouroù goulennet amañ-dindan evit peurechuiñ ar staliadur. Ret eo d\'an diaz-titouroù ma staliit enni bezañ bet krouet c\'hoazh. Ma staliit war un diaz-titouroù a implij ODBC, MS Access da skouer, eo ret deoc\'h krouiñ un SGBD (DSN) dezhi a-raok kenderc\'hel.';

$lang['Start_Install'] = 'Loc\'hañ gant ar Staliadur';
$lang['Finish_Install'] = 'Echuiñ ar Staliadur';

$lang['Default_lang'] = 'Yezh dre-ziouer ar Forum';
$lang['DB_Host'] = 'Anv Servijer an Diaz-Titouroù / SGBD (DSN)';
$lang['DB_Name'] = 'Anv ho Tiaz-Titouroù';
$lang['DB_Username'] = 'Anv Implijer';
$lang['DB_Password'] = 'Ger-tremen';
$lang['Database'] = 'Ho Tiaz-Titouroù';
$lang['Install_lang'] = 'Dibabit ur Yezh evit ar Staliadur';
$lang['dbms'] = 'Doare an Diaz-Titouroù';
$lang['Table_Prefix'] = 'Rakger an taolioù';
$lang['Admin_Username'] = 'Anv Implijer';
$lang['Admin_Password'] = 'Ger-Tremen';
$lang['Admin_Password_confirm'] = 'Ger-Tremen [ Gwiriañ ]';

$lang['Inst_Step_2'] = 'Krouet eo bet ho kont-merour. Echu eo gant ar staliadur diazez. Adkaset e voc\'h davet ur bajenn all ma c\'helloc\'h merañ ho staliadur nevez warni. Trugarez da vezañ dibabet phpBB2.';

$lang['Unwriteable_config'] = 'Evit ar mare n\'eus tu ober netra all eget lenn ho restr config. Kinniget e vo deoc\'h pellgargañ anezhañ p\'ho po kliket war an nozelenn amañ-dindan. Ret e vo deoc\'h lakaat hennezh en hevelep teuliad ha m\'ho peus staliet phpBB2. Pa vo bet graet kement-mañ e c\'helloc\'h kennaskañ oc\'h implijout ho anv-implier hag ho ker-tremen (bet roet ganeoc\'h bremaik), ha gweladenniñ ar Banell-Merañ (ul liamm a vo e-traoñ pep pajenn pa voc\'h kennasket) evit gwiriañ an ardremmez hollek. Trugarez da vezañ bet dibabet phpBB2.';
$lang['Download_config'] = 'Pellgargañ Config';

$lang['ftp_choose'] = 'Dibab an doare da bellgargañ';
$lang['ftp_option'] = '<br />Keit ha ma vo enaouet an astennoù FTP e stumm-mañ PHP e c\'helloc\'h klask kas diouzhtu ar restr config dre FTP.';
$lang['ftp_instructs'] = 'Dibabet ho peus kas diouzhtu ar restr davet an teuliad phpBB2, dre FTP. Klokait an titouroù goulennet ganeoc\'h amañ-dindan evit aesaat an oberadenn. Rankout a ra an treug FTP bezañ rik hini an teuliad m\'ho peus staliet phpBB2 ennañ, evel ma implijfec\'h forzh peseurt meziant FTP.';
$lang['ftp_info'] = 'Roit ho titouroù FTP';
$lang['Attempt_ftp'] = 'Klask kas config d\'ur servijour FTP';
$lang['Send_file'] = 'Kas ar restr din, hag e lakain anezhañ ma-unan war ar servijer FTP.';
$lang['ftp_path'] = 'Treug FTP phpBB2';
$lang['ftp_username'] = 'Ho anv-implijer FTP';
$lang['ftp_password'] = 'Ho ker-tremen FTP';
$lang['Transfer_config'] = 'Loc\'hañ gant ar c\'has';
$lang['NoFTP_config'] = 'N\'eus ket bet tu da gas ar restr config dre FTP. Pellgargit anezhañ, ha kasit anezhañ ho-unan war ho servijer FTP.';

$lang['Install'] = 'Staliadur';
$lang['Upgrade'] = 'Hizivaat';

$lang['Install_Method'] = 'Dibab an hentenn-staliañ';

$lang['Install_No_Ext'] = 'Ne aotre ket ardremmez PHP ho servijer an doare diaz-titouroù bet dibabet ganeoc\'h.';

$lang['Install_No_PCRE'] = 'Ezhomm en deus phpBB2 ouzh skor ar skriverezhioù reizh Perl evit PHP, met war ar seblant n\'eo ket aotreet gant ho ardremmez PHP !';

//
// Version Check
//
$lang['Version_up_to_date'] = 'Ar staliadur neveshañ a zo ganeoc\'h, n\'eus arreval nevez ebet da gaout.';
$lang['Version_not_up_to_date'] = 'War ar seblant n\'emañ <b>ket</b> an arreval neveshañ ganeoc\'h. Arrevalioù nevez ouzh ar forum a zo da gaout, kit da welet : <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a>.';
$lang['Latest_version_info'] = '<b>phpBB %s</b> eo an arreval neveshañ a zo da gaout.';
$lang['Current_version_info'] = '<b>phpBB %s</b> eo an arreval implijet ganeoc\'h.';
$lang['Connect_socket_error'] = 'Dibosupl kennaskañ ouzh Servijer phpBB, setu ar fazi :<br />%s';
$lang['Socket_functions_disabled'] = 'Dibosupl eo implijout ar c\'hefridi socket.';
$lang['Mailing_list_subscribe_reminder'] = 'Evit an titouroù neveshañ diwar-benn phpBB, <a href="http://www.phpbb.com/support/" target="_new">enskrivit \'ta d\'al listenn-skignañ</a>!';
$lang['Version_information'] = 'Titouroù diwar-benn an arreval';

//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'Niver a gennaskadennoù aotreet';
$lang['Max_login_attempts_explain'] = 'An niver aotreet a glaskadennoù evit kennaskañ.';
$lang['Login_reset_time'] = 'Amzer prennañ ar c\'hennaskañ';
$lang['Login_reset_time_explain'] = 'An niver a vinutennoù en devo an implijer da c\'hortoz a-raok klask kennaskañ en-dro.';

//
// That's all Folks!
// -------------------------------------------------

?>