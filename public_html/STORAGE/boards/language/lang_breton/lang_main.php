<?php
/***************************************************************************
 *                            lang_main.php [Breton]
 *                              -------------------
 *     begin                : Mon sep 13 2004
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.85.2.18 2005/10/05 22:26:02 psotfx Exp $
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
	http://malomorvan.free.fr/
      Thanks to Titeuf51 for the pictures.
*/ 

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'iso-8859-1';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] = 'd M Y'; // This should be changed to the default date format for your language, php date() format


// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION'] = 'Troet gant: <a href="http://malomorvan.free.fr/" target="_blank">Malo Morvan</a>';
$lang['TRANSLATION_INFO'] = 'Troet gant: <a href="http://malomorvan.free.fr/" target="_blank">Malo Morvan</a>';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Forum';
$lang['Category'] = 'Rummad';
$lang['Topic'] = 'Sujed';
$lang['Topics'] = 'Sujedoù';
$lang['Replies'] = 'Respontoù';
$lang['Views'] = 'Gwelet';
$lang['Post'] = 'Kemennadenn';
$lang['Posts'] = 'Kemennadennoù';
$lang['Posted'] = 'Kaset d\'an';
$lang['Username'] = 'Anv implijer';
$lang['Password'] = 'Ger tremen';
$lang['Email'] = 'Postel';
$lang['Poster'] = 'Kaser';
$lang['Author'] = 'Aozer';
$lang['Time'] = 'Amzer';
$lang['Hours'] = 'Eur';
$lang['Message'] = 'Kemennadenn';

$lang['1_Day'] = '1 Deiz';
$lang['7_Days'] = '7 Deiz';
$lang['2_Weeks'] = '2 Sizhun';
$lang['1_Month'] = '1 Miz';
$lang['3_Months'] = '3 miz';
$lang['6_Months'] = '6 Miz';
$lang['1_Year'] = '1 Bloaz';

$lang['Go'] = 'Mont';
$lang['Jump_to'] = 'Lammat betek';
$lang['Submit'] = 'Kas';
$lang['Reset'] = 'Adkorañ';
$lang['Cancel'] = 'Nullañ';
$lang['Preview'] = 'Rakgwelet';
$lang['Confirm'] = 'Gwiriañ';
$lang['Spellcheck'] = 'Gwirier Reizhskrivadur';
$lang['Yes'] = 'Ya';
$lang['No'] = 'Ket';
$lang['Enabled'] = 'War enaou';
$lang['Disabled'] = 'War ziskuizh';
$lang['Error'] = 'Fazi';

$lang['Next'] = 'Da heul';
$lang['Previous'] = 'Kent';
$lang['Goto_page'] = 'Mont d\'ar bajenn';
$lang['Joined'] = 'Enrollet d\'an';
$lang['IP_Address'] = 'Chomlec\'h IP';

$lang['Select_forum'] = 'Dibab ur forum';
$lang['View_latest_post'] = 'Gwelet ar gemennadenn ziwezhañ';
$lang['View_newest_post'] = 'Gwelet ar gemennadenn neveshañ';
$lang['Page_of'] = 'Pajenn <b>%d</b> war <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'Niverenn ICQ';
$lang['AIM'] = 'Chomlec\'h AIM';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s Roll ar Forum';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Kas ur sujed nevez';
$lang['Reply_to_topic'] = 'Respont d\'ar sujed';
$lang['Reply_with_quote'] = 'Respont o venegiñ';

$lang['Click_return_topic'] = 'Klikit %samañ%s evit distreiñ d\'ar gaozeadenn'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Klikit %samañ%s evit klask en-dro';
$lang['Click_return_forum'] = 'Klikit %samañ%s evit distreiñ d\'ar forum';
$lang['Click_view_message'] = 'Klikit %samañ%s evit gwelet ho kemennadenn';
$lang['Click_return_modcp'] = 'Klikit %samañ%s evit distreiñ da banell-merañ ar c\'hasour';
$lang['Click_return_group'] = 'Klikit %samañ%s evit distreiñ da ditouroù ar strollad';

$lang['Admin_panel'] = 'Mont d\'ar banell-merañ';

$lang['Board_disable'] = 'Digarezit, met ne c\'haller ket tizhout ar forum-mañ evit ar mare. Klaskit diwezhatoc\'h.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Implijerien enrollet: ';
$lang['Browsing_forum'] = 'Implijerien war ar forum er mare-mañ: ';
$lang['Online_users_zero_total'] = 'N\'eus implijer kennasket ebet :: ';
$lang['Online_users_total'] = 'En holl ez eus <b>%d</b> implijer kennasket:: ';
$lang['Online_user_total'] = 'En holl ez eus <b>%d</b> implijer kennasket:: ';
$lang['Reg_users_zero_total'] = '0 Enrollet, ';
$lang['Reg_users_total'] = '%d Enrollet, ';
$lang['Reg_user_total'] = '%d Enrollet, ';
$lang['Hidden_users_zero_total'] = '0 Kuzh ha ';
$lang['Hidden_users_total'] = '%d Kuzh ha ';
$lang['Hidden_user_total'] = '%d Kuzh ha ';
$lang['Guest_users_zero_total'] = '0 Gweladenner';
$lang['Guest_users_total'] = '%d Gweladenner';
$lang['Guest_user_total'] = '%d Gweladenner';
$lang['Record_online_users'] = 'An niver vrasañ a implijerien o vezañ bet asambles war ar forum a zo <b>%s</b> d\'an %s'; // first %s = number of users, second %s is the date.

$lang['Legend'] = 'Alc\'hwez';
$lang['Admin_online_color'] = '%sMerour%s';
$lang['Mod_online_color'] = '%sKasour%s';
$lang['User_online_color'] = '%sImplijer%s';

$lang['You_last_visit'] = 'Gweladenn ziwezhañ d\'an %s'; // %s replaced by date/time
$lang['Current_time'] = 'An deiziad hag an eur a zo %s'; // %s replaced by date/time
$lang['Search_new'] = 'Gwelet ar c\'hemennadennoù nevez abaoe ho kweladenn ziwezhañ';
$lang['Search_your_posts'] = 'Gwelet ho kemennadennoù';
$lang['Search_unanswered'] = 'Gwelet ho kemennadennoù chomet direspont';
$lang['Register'] = 'En em enrollañ';
$lang['Profile'] = 'Aelad';
$lang['Edit_profile'] = 'Kemm ho aelad';
$lang['Search'] = 'Klask';
$lang['Memberlist'] = 'Listenn an Izili';
$lang['FAQ'] = 'Goulennoù Muiañ-Savet';
$lang['BBCode_guide'] = 'Sturiell ar BBCode';
$lang['Usergroups'] = 'Strolladoù-Implijerien';
$lang['Last_Post'] = 'Kemennadennoù diwezhañ';
$lang['Moderator'] = 'Kasour';
$lang['Moderators'] = 'Kasourien';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'N\'eus bet kaset kemennadenn ebet gant an izili'; // Number of posts
$lang['Posted_articles_total'] = 'En holl ez eus bet kaset <b>%d</b> a gemennadennoù gant an izili'; // Number of posts
$lang['Posted_article_total'] = 'En holl ez eus bet kaset <b>%d</b> a gemennadennoù gant an izili'; // Number of posts
$lang['Registered_users_zero_total'] = 'N\'eus ezel enrollet ebet'; // # registered users
$lang['Registered_users_total'] = '<b>%d</b> ezel a zo enrollet'; // # registered users
$lang['Registered_user_total'] = '<b>%d</b> ezel a zo enrollet'; // # registered users
$lang['Newest_user'] = '<b>%s%s%s</b> eo an implijer diwezhañ o vezañ enrollet.'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = 'Kemennadenn nevez ebet abaoe ho kweladenn ziwezhañ';
$lang['No_new_posts'] = 'Kemennadenn nevez ebet';
$lang['New_posts'] = 'Kemennadennoù nevez';
$lang['New_post'] = 'Kemennadenn nevez';
$lang['No_new_posts_hot'] = 'Kemennadenn nevez ebet [ Entanus ]';
$lang['New_posts_hot'] = 'Kemennadennoù nevez [ Entanus ]';
$lang['No_new_posts_locked'] = 'Kemennadenn nevez ebet [ Prennet]';
$lang['New_posts_locked'] = 'Kemennadennoù nevez [ Prennet ]';
$lang['Forum_is_locked'] = 'Forum prennet';


//
// Login
//
$lang['Enter_password'] = 'Skrivit ho anv-implijer hag ho ker-tremen evit kennaskañ.';
$lang['Login'] = 'Kennaskañ';
$lang['Logout'] = 'Digennaskañ';

$lang['Forgotten_password'] = 'Ankouaet am eus va ger-tremen';

$lang['Log_me_in'] = 'Kennaskañ diouzhtu da bep gweladenn';

$lang['Error_login'] = 'Direizh eo an anv-implijer pe ar ger-tremen bet roet ganeoc\'h.';


//
// Index page
//
$lang['Index'] = 'Roll';
$lang['No_Posts'] = 'Kemennadenn ebet';
$lang['No_forums'] = 'N\'eus is-forum ebet er forum-se';

$lang['Private_Message'] = 'Gerig prevez';
$lang['Private_Messages'] = 'Gerigoù prevez';
$lang['Who_is_Online'] = 'Piv a zo kennasket ?';

$lang['Mark_all_forums'] = 'Lakaat an holl forumoù evel m\'ho pefe o lennet';
$lang['Forums_marked_read'] = 'An holl forumoù a zo bet lakaet evel m\'ho pefe o lennet';


//
// Viewforum
//
$lang['View_forum'] = 'Gwelet ar forum';

$lang['Forum_not_exist'] = 'N\'eus ket ouzh ar forum ho peus dibabet.';
$lang['Reached_on_error'] = 'Dre fazi oc\'h erru war ar bajenn-se.';

$lang['Display_topics'] = 'Diskouez ar sujedoù abaoe';
$lang['All_Topics'] = 'An holl sujedoù';

$lang['Topic_Announcement'] = '<b>Kemenn:</b>';
$lang['Topic_Sticky'] = '<b>Post-it:</b>';
$lang['Topic_Moved'] = '<b>Dilec\'hiet:</b>';
$lang['Topic_Poll'] = '<b>[ Sontadeg ]</b>';

$lang['Mark_all_topics'] = 'Lakaat an holl sujedoù evel m\'ho pefe o lennet';
$lang['Topics_marked_read'] = 'An holl sujedoù a zo bet lakaet evel m\'ho pefe o lennet.';

$lang['Rules_post_can'] = '<b>Gallout a rit</b> kas sujedoù nevez er forum-mañ';
$lang['Rules_post_cannot'] = '<b>Ne c\'hallit ket</b> kas sujedoù nevez er forum-mañ';
$lang['Rules_reply_can'] = '<b>Gallout a rit</b> respont d\'ar sujedoù er forum-mañ';
$lang['Rules_reply_cannot'] = '<b>Ne c\'hallit ket</b> respont d\'ar sujedoù er forum-mañ';
$lang['Rules_edit_can'] = '<b>Gallout a rit</b> kemm ho kemennadennoù er forum-mañ';
$lang['Rules_edit_cannot'] = '<b>Ne c\'hallit ket</b> kemm ho kemennadennoù er forum-mañ';
$lang['Rules_delete_can'] = '<b>Gallout a rit</b> diverkañ ho kemennadennoù er forum-mañ';
$lang['Rules_delete_cannot'] = '<b>Ne c\'hallit ket</b> diverkañ ho kemennadennoù er forum-mañ';
$lang['Rules_vote_can'] = '<b>Gallout a rit</b> mouezhiañ e sontadegoù ar forum-mañ';
$lang['Rules_vote_cannot'] = '<b>Ne c\'hallit ket</b> mouezhiañ e sontadegoù ar forum-mañ';
$lang['Rules_moderate'] = '<b>Gallout a rit</b> %skuñvaat ar forum-mañ%s'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = 'N\'eus kemennadenn ebet er forum-mañ.<br />Klikit war al liamm <b>Kas ur sujed nevez</b> war ar bajenn-mañ evit kas unan.';

$lang['Stop_watching_forum'] = 'Paouez da evezhiañ ar forum-mañ';
$lang['Start_watching_forum'] = 'Derc\'hel tost da gemennadennoù nevez ar forum-mañ';
$lang['No_longer_watching_forum'] = 'Ne evezhiit ket ar forum-mañ ken';
$lang['You_are_watching_forum'] = 'Evezhiañ a rit ar forum-mañ';

//
// Viewtopic
//
$lang['View_topic'] = 'Gwelet ar sujed';

$lang['Guest'] = 'Gweladenner';
$lang['Post_subject'] = 'Titl ar gemennadenn';
$lang['View_next_topic'] = 'Gwelet ar sujed da-heul';
$lang['View_previous_topic'] = 'Gwelet ar sujed kent';
$lang['Submit_vote'] = 'Mouezhiañ';
$lang['View_results'] = 'Gwelet an disoc\'hoù';

$lang['No_newer_topics'] = 'N\'eus sujed nevez ebet er forum-mañ';
$lang['No_older_topics'] = 'N\'eus kemennadenn kozh ebet er forum-mañ';
$lang['Topic_post_not_exist'] = 'N\'eus ket ouzh ar sujed pe ar gemennadenn a glaskit';
$lang['No_posts_topic'] = 'N\'eus ket a gemennadenn evit ar sujed-se';

$lang['Display_posts'] = 'Diskouez ar c\'hemennadennoù abaoe';
$lang['All_Posts'] = 'An holl gemennadennoù';
$lang['Newest_First'] = 'An hini neveshañ da gentañ';
$lang['Oldest_First'] = 'An hini koshañ da gentañ';

$lang['Back_to_top'] = 'Distreiñ e-krec\'h';

$lang['Read_profile'] = 'Gwelet aelad an implijer'; 
$lang['Send_email'] = 'Kas ar postel';
$lang['Visit_website'] = 'Gweladenniñ lec\'hienn web an implijer';
$lang['ICQ_status'] = 'Statud ICQ';
$lang['Edit_delete_post'] = 'Kemm/Diverkañ ar gemennadenn-se';
$lang['View_IP'] = 'Gwelet chomlec\'h IP ar c\'haser';
$lang['Delete_post'] = 'Diverkañ ar gemennadenn-mañ';

$lang['wrote'] = 'en/he deus skrivet'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Meneg'; // comes before bbcode quote output.
$lang['Code'] = 'Tarzh'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Kemm ziwezhañ gant %s d\'an %s; kemmet %d wech'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Kemm ziwezhañ gant %s d\'an %s; kemmet %d wech'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Prennañ ar sujed';
$lang['Unlock_topic'] = 'Dibrennañ ar sujed';
$lang['Move_topic'] = 'Dilec\'hiañ ar sujed';
$lang['Delete_topic'] = 'Diverkañ ar sujed';
$lang['Split_topic'] = 'Rannañ ar sujed';

$lang['Stop_watching_topic'] = 'Paouez da evezhiañ ar sujed-mañ';
$lang['Start_watching_topic'] = 'Derc\'hel tost da respontoù ar sujed-mañ';
$lang['No_longer_watching'] = 'Ne evezhiit ket ar sujed-mañ ken';
$lang['You_are_watching'] = 'Bremañ e evezhiit ar sujed-mañ';

$lang['Total_votes'] = 'Niver a vouezhioù en holl :';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Korf ar gemennadenn';
$lang['Topic_review'] = 'Adwelet ar gaozeadenn';

$lang['No_post_mode'] = 'N\'eo ket roet doare ar gemennadenn'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Kas ur sujed nevez';
$lang['Post_a_reply'] = 'Kas ur respont';
$lang['Post_topic_as'] = 'Doare ar sujed';
$lang['Edit_Post'] = 'Kemm ar sujed';
$lang['Options'] = 'Dilennoù';

$lang['Post_Announcement'] = 'Kemenn';
$lang['Post_Sticky'] = 'Post-it';
$lang['Post_Normal'] = 'Reizh';

$lang['Confirm_delete'] = 'Ha sur oc\'h ho peus c\'hoant da ziverkañ ar gemennadenn-mañ ?';
$lang['Confirm_delete_poll'] = 'Ha sur oc\'h ho peus c\'hoant da ziverkañ ar sontadeg-mañ ?';

$lang['Flood_Error'] = 'Ne c\'hellit ket kas ur sujed nevez ken buan goude ho hini ziwezhañ, klaskit en-dro a-benn un nebeudig amzer.';
$lang['Empty_subject'] = 'Rankout a rit reiñ titl ar sujet evit ma c\'hellfe bezañ kaset.';
$lang['Empty_message'] = 'Rankout a rit skrivañ un dra-bennak evit ma c\'hallfe ho sujed bezañ kaset.';
$lang['Forum_locked'] = 'Prennet eo ar forum-se, ne c\'hellit na kas, na respont, na kemm kemennadennoù.';
$lang['Topic_locked'] = 'Prennet eo ar sujed-se, ne c\'hellit na kemm na respont d\'ur gemennadenn.';
$lang['No_post_id'] = 'Ret eo deoc\'h resisaat peseurt kemennadenn a zo da gemm';
$lang['No_topic_id'] = 'Rankout a rit resisaat da beseurt sujed e respontit.';
$lang['No_valid_mode'] = 'Kas, respont da, kemm, pe menegiñ kemennadennoù a c\'hellit ober hepken. Kit war-dreñv ha klaskit en-dro.';
$lang['No_such_post'] = 'N\'ez eus ket ouzh kemennadennoù a-seurt-se. Kit war-dreñv ha klaskit en-dro.';
$lang['Edit_own_posts'] = 'Digarez, me ne c\'hellit ket kemm ur gemennadenn ma n\'eo ket ho hini.';
$lang['Delete_own_posts'] = 'Digarez, met ne c\'hellit ket diverkañ ur gemennadenn ma n\'eo ket ho hini.';
$lang['Cannot_delete_replied'] = 'Digarez, met ne c\'hellit ket diverkañ ur gemennadenn ma \'z eus bet respontet outi.';
$lang['Cannot_delete_poll'] = 'Digarez, met ne c\'hellit ket diverkañ ur sontadeg oberiant.';
$lang['Empty_poll_title'] = 'Rankout a rit lakaat un titl d\'ho sontadeg.';
$lang['To_few_poll_options'] = 'Daou zilenn d\'an nebeutañ a rankit lakaat evit ho sontadeg.';
$lang['To_many_poll_options'] = 'Re a zilennoù ho peus lakaet en ho sontadeg.';
$lang['Post_has_no_poll'] = 'N\'ez eus ket a sontadeg stag ouzh ar sujed-mañ.';
$lang['Already_voted'] = 'C\'hoazh ho peus mouezhiet.'; 
$lang['No_vote_option'] = 'Rankout a rit dibab un dilenn evit gallout mouezhiañ.';

$lang['Add_poll'] = 'Stagañ ur sontadeg';
$lang['Add_poll_explain'] = 'Ma n\'ho peus ket c\'hoant da stagañ ur sontadeg ouzh ho kemennadenn, na skrivit netra amañ.';
$lang['Poll_question'] = 'Goulenn ar sontadeg';
$lang['Poll_option'] = 'Dilenn ar sontadeg';
$lang['Add_option'] = 'Ouzhpennañ an dilenn';
$lang['Update'] = 'Hizivaat';
$lang['Delete'] = 'Diverkañ';
$lang['Poll_for'] = 'Padelezh ar sontadeg';
$lang['Days'] = 'Deiz'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Lakait 0 pe netra evit ma vefe peurbadus ar sontadeg ]';
$lang['Delete_poll'] = 'Diverkañ ar sontadeg';

$lang['Disable_HTML_post'] = 'Lakaat an HTML dizoberiant er gemennadenn-mañ';
$lang['Disable_BBCode_post'] = 'Lakaat ar BBCode dizoberiant er gemennadenn-mañ';
$lang['Disable_Smilies_post'] = 'Lakaat ar Smilies dizoberiant er gemennadenn-mañ';

$lang['HTML_is_ON'] = '<u>Oberiant</u> eo an HTML';
$lang['HTML_is_OFF'] = '<u>Dizoberiant</u> eo an HTML';
$lang['BBCode_is_ON'] = '<u>Oberiant</u> eo ar %sBBCode%s'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '<u>Dizoberiant</u>eo ar %sBBCode%s';
$lang['Smilies_are_ON'] = '<u>Oberiant</u> eo ar Smilies';
$lang['Smilies_are_OFF'] = '<u>Dizoberiant</u> eo ar Smilies';

$lang['Attach_signature'] = 'Stagañ ho sinadur (gallout a rit kemm anezhi en ho aelad)';
$lang['Notify'] = 'Kelaouit ac\'hanon pa vez kaset ur respont';
$lang['Delete_post'] = 'Diverkañ ar gemennadenn-mañ';

$lang['Stored'] = 'Enrollet eo bet ho kemennadenn.';
$lang['Deleted'] = 'Diverket eo bet ho kemennadenn.';
$lang['Poll_delete'] = 'Diverket eo bet ho sontadeg.';
$lang['Vote_cast'] = 'Dalc\'het eo bet kont eus ho mouezh.';

$lang['Topic_reply_notification'] = 'Respontet ez eus bet d\'ho sujed';

$lang['bbcode_b_help'] = 'Testenn druz: [b]testenn[/b] (alt+b)';
$lang['bbcode_i_help'] = 'Testenn stouet: [i]testenn[/i] (alt+i)';
$lang['bbcode_u_help'] = 'Testenn islinennet: [u]testenn[/u] (alt+u)';
$lang['bbcode_q_help'] = 'Meneg: [quote]testenn meneget[/quote] (alt+q)';
$lang['bbcode_c_help'] = 'Embann un tarzh: [code]tarzh[/code] (alt+c)';
$lang['bbcode_l_help'] = 'Listenn: [list]testenn[/list] (alt+l) (ha [*] evit ar c\'hwen)';
$lang['bbcode_o_help'] = 'Listenn urzhiet: [list=]testenn[/list] (alt+o)';
$lang['bbcode_p_help'] = 'Diskouez ur skeudenn: [img]http://url_ar_skeudenn/[/img] (alt+p)';
$lang['bbcode_w_help'] = 'Lakaat ul liamm: [url]http://url/[/url] pe [url=http://url/]Anv[/url] (alt+w)';
$lang['bbcode_a_help'] = 'Serriñ an holl balizennoù BBCode bet digoret';
$lang['bbcode_s_help'] = 'Liv an destenn: [color=red]testenn[/color] Korvigell: #FF0000 az a en-dro ivez';
$lang['bbcode_f_help'] = 'Ment an destenn: [size=x-small]testenn vihan[/size]';

$lang['Emoticons'] = 'Smilies';
$lang['More_emoticons'] = 'Kaout muioc\'h a Smilies';

$lang['Font_color'] = 'Liv';
$lang['color_default'] = 'Dre ziouer';
$lang['color_dark_red'] = 'Ruz teñval';
$lang['color_red'] = 'Ruz';
$lang['color_orange'] = 'orañjez';
$lang['color_brown'] = 'Gell';
$lang['color_yellow'] = 'Melen';
$lang['color_green'] = 'Gwer';
$lang['color_olive'] = 'Olivez';
$lang['color_cyan'] = 'Gwerc\'hlas';
$lang['color_blue'] = 'Glas';
$lang['color_dark_blue'] = 'Glas teñval';
$lang['color_indigo'] = 'Glasdu';
$lang['color_violet'] = 'Mouk';
$lang['color_white'] = 'Gwenn';
$lang['color_black'] = 'Du';

$lang['Font_size'] = 'Ment';
$lang['font_tiny'] = 'Bihan-kenañ';
$lang['font_small'] = 'Bihan';
$lang['font_normal'] = 'Reizh';
$lang['font_large'] = 'Bras';
$lang['font_huge'] = 'Bras-kenañ';

$lang['Close_Tags'] = 'Serriñ ar balizennoù';
$lang['Styles_tip'] = 'Korvigell: ur stumm a c\'hall bezañ lakaet e-pleustr evit un destenn diuzet.';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Gerigoù Prevez';

$lang['Login_check_pm'] = 'Kennaskañ evit sellet ouzh ho kerigoù prevez';
$lang['New_pms'] = '%d gerig nevez ho peus'; // You have 2 new messages
$lang['New_pm'] = '%d gerig nevez ho peus'; // You have 1 new message
$lang['No_new_pm'] = 'N\'ho peus gerig nevez ebet';
$lang['Unread_pms'] = '%d gerig n\'int ket bet lennet';
$lang['Unread_pm'] = '%d gerig n\'eo ket bet lennet';
$lang['No_unread_pm'] = 'Lennet ho peus ho holl kerigoù';
$lang['You_new_pm'] = 'Ur gerig prevez nevez a zo o c\'hortoz bezañ lennet en ho poest-degemer';
$lang['You_new_pms'] = 'Gerigoù prevez nevez a zo o c\'hortoz bezañ lennet en ho poest-degemer';
$lang['You_no_new_pm'] = 'N\'eus gerig nevez ebet o c\'hortoz ac\'hanoc\'h';

$lang['Unread_message'] = 'Ket bet lennet'; 
$lang['Read_message'] = 'Bet lennet';

$lang['Read_pm'] = 'Lenn ar gerig'; 
$lang['Post_new_pm'] = 'Kas ar gerig'; 
$lang['Post_reply_pm'] = 'Respont d\'ar gerig'; 
$lang['Post_quote_pm'] = 'Menegiñ ar gerig'; 
$lang['Edit_pm'] = 'Kemm ar gerig'; 

$lang['Inbox'] = 'Boest-degemer';
$lang['Outbox'] = 'Boest-kas';
$lang['Savebox'] = 'Dielloù';
$lang['Sentbox'] = 'Gerigoù bet kaset';
$lang['Flag'] = 'Baniell';
$lang['Subject'] = 'Sujed';
$lang['From'] = 'A';
$lang['To'] = 'Da';
$lang['Date'] = 'Deiziad';
$lang['Mark'] = 'Merkañ';
$lang['Sent'] = 'Kaset';
$lang['Saved'] = 'Miret';
$lang['Delete_marked'] = 'Diverkañ an diuzad';
$lang['Delete_all'] = 'Diverkañ pep tra';
$lang['Save_marked'] = 'Mirout an diuzad'; 
$lang['Save_message'] = 'Mirout ar gerig';
$lang['Delete_message'] = 'Diverkañ ar gerig';

$lang['Display_messages'] = 'Diskouez an holl c\'herigoù abaoe'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'An holl c\'herigoù';

$lang['No_messages_folder'] = 'N\'o peus gerig ebet en teuliad-mañ';

$lang['PM_disabled'] = 'Diaotreet eo bet ar c\'herigoù war ar forum-mañ.';
$lang['Cannot_send_privmsg'] = 'Digarez, met harzet oc\'h bet da gas gerigoù prevez gant ar merour.';
$lang['No_to_user'] = 'Rankout a rit resisaat un anv-implijer a-raok kas ar gerig-mañ.';
$lang['No_such_user'] = 'Digarez, met n\'eus ket ouzh an implijer-se.';

$lang['Disable_HTML_pm'] = 'Lakaat an HTML dizoberiant er gerig-mañ';
$lang['Disable_BBCode_pm'] = 'Lakaat ar BBCode dizoberiant er gerig-mañ';
$lang['Disable_Smilies_pm'] = 'Lakaat ar Smilies dizoberiant er gerig-mañ';

$lang['Message_sent'] = 'Kaset eo bet ho kerig.';

$lang['Click_return_inbox'] = 'Klikit %samañ%s evit distreiñ d\'ho poest-degemer';
$lang['Click_return_index'] = 'Klikit %samañ%s evit distreiñ d\'ar roll';

$lang['Send_a_new_message'] = 'Kas ur gerig prevez nevez';
$lang['Send_a_reply'] = 'Respont d\'ur gerig prevez';
$lang['Edit_message'] = 'Kemm ur gerig prevez';

$lang['Notification_subject'] = 'Emañ ur gerig prevez nevez o paouez erruout.';

$lang['Find_username'] = 'Kavout un anv-implijer';
$lang['Find'] = 'Kavout';
$lang['No_match'] = 'N\'eus bet kavet enrolladenn ebet.';

$lang['No_post_id'] = 'N\'eo ket bet roet ID ar gerig';
$lang['No_such_folder'] = 'N\'ez eus ket ouzh an teuliad-se';
$lang['No_folder'] = 'N\'ho peus ket resisaet peseurt teuliad';

$lang['Mark_all'] = 'Diuz pep tra';
$lang['Unmark_all'] = 'Diuz netra';

$lang['Confirm_delete_pm'] = 'Ha sur oc\'h ho peus c\'hoant da ziverkañ ar gerig-se ?';
$lang['Confirm_delete_pms'] = 'Ha sur oc\'h ho peus c\'hoant da ziverkañ ar gerigoù-se ?';

$lang['Inbox_size'] = '%d%% leun eo ho poest-degemer'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = '%d%% leun eo ho poest Gerigoù kaset'; 
$lang['Savebox_size'] = '%d%% leun eo ho poest Dielloù'; 

$lang['Click_view_privmsg'] = 'Klikit %samañ%s evit gwelet ho poest-degemer';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Gwelet an aelad :: %s'; // %s is username 
$lang['About_user'] = 'Pep tra diwar-benn %s'; // %s is username

$lang['Preferences'] = 'Gwellvezioù';
$lang['Items_required'] = 'Rediet oc\'h da skrivañ un dra bennak pa vez ur *';
$lang['Registration_info'] = 'Enrollañ';
$lang['Profile_info'] = 'Aelad';
$lang['Profile_info_warn'] = 'An titouroù-se a vo hewel d\'an holl';
$lang['Avatar_panel'] = 'Pannell-verañ an Avatarioù';
$lang['Avatar_gallery'] = 'Garidell an Avatarioù';

$lang['Website'] = 'Lec\'hienn Web';
$lang['Location'] = 'Lec\'hiadur';
$lang['Contact'] = 'Kejañ';
$lang['Email_address'] = 'Postel';
$lang['Email'] = 'E-mail';
$lang['Send_private_message'] = 'Kas ur gerig prevez';
$lang['Hidden_email'] = '[ Kuzh ]';
$lang['Interests'] = 'Dedennoù';
$lang['Occupation'] = 'Micher'; 
$lang['Poster_rank'] = 'Renk ar c\'haser';

$lang['Total_posts'] = 'Kemennadennoù';
$lang['User_post_pct_stats'] = '%.2f%% eus an hollad'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f kemennadenn bemdez'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Kavout holl gemennadennoù %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'Digarez, met n\'eus ket ouzh an implijer-se';
$lang['Wrong_Profile'] = 'Ne c\'hellit ket kemm un aelad ma n\'eo ket ho hini';
$lang['Only_one_avatar'] = 'Ne c\'hellit ket reiñ ouzhpenn da un doare Avatar';
$lang['File_no_data'] = 'N\'ez eus road ebet en URL ho peus roet';
$lang['No_connection_URL'] = 'Ne c\'haller ket kennaskañ ouzh an URL ho peus roet';
$lang['Incomplete_URL'] = 'Diglok eo an URL ho peus roet';
$lang['Wrong_remote_avatar_format'] = 'Dirieizh eo URL an Avatar';
$lang['No_send_account_inactive'] = 'Digarez, met ne c\'haller ket adneveshaat ho ker-tremen, dre ma\'z eo dizoberiant ho kont. Kit e-darempred gant merour ar forum evit muioc\'h a ditouroù.';

$lang['Always_smile'] = 'Enaouiñ bepred ar Smilies';
$lang['Always_html'] = 'Aotreañ bepred an HTML';
$lang['Always_bbcode'] = 'Aotreañ bepred ar BBCode';
$lang['Always_add_sig'] = 'Stagañ bepred ho sinadur';
$lang['Always_notify'] = 'Kelaouiñ bepred ac\'hanon pa vez respontet din';
$lang['Always_notify_explain'] = 'Kas a ra ur bostel pa vez respontet ouzh ur sujed kaset ganeoc\'h. Gallout a ra bezañ kemmet bewech pa gasit ur gemennadenn.';

$lang['Board_style'] = 'Tem ar Forum';
$lang['Board_lang'] = 'Yezh ar Forum';
$lang['No_themes'] = 'Tem ebet en diaz-titouroù';
$lang['Timezone'] = 'Gwerzhid-eur';
$lang['Date_format'] = 'Stumm an deiziad';
$lang['Date_format_explain'] = 'Heñvel eo an ereadurezh implijet ouzh an implij <a href=\'http://www.php.net/manual/fr/function.date.php\' target=\'_other\'>date()</a> gant ar PHP.';
$lang['Signature'] = 'Sinadur';
$lang['Signature_explain'] = 'Un destennig a c\'hell bezañ ouzhpennet ouzh ar c\'hemennadennoù a gasit eo se. %d arouez a c\'hellit lakaat d\'ar muiañ';
$lang['Public_view_email'] = 'Diskouez bepred ho postel';

$lang['Current_password'] = 'Ger-tremen evit ar mare';
$lang['New_password'] = 'Ger-tremen nevez';
$lang['Confirm_password'] = 'Gwiriañ ar ger-tremen';
$lang['Confirm_password_explain'] = 'Rankout a rit gwiriañ ho ker-tremen m\'ho peus c\'hoant da gemm anezhañ pe ho postel';
$lang['password_if_changed'] = 'N\'ho peus ket ezhomm da lakaat ur ger-tremen ma n\'ho peus ket c\'hoant da cheñch';
$lang['password_confirm_if_changed'] = 'N\'ho peus ket ezhomm da wiriañ ho ker-tremen ma n\'ho peus ket cheñchet a-us.';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Diskouez a ra ur skeudennig dindan an titouroù diwar ho penn en ho kemennadennoù. Ne c\'hellit ket diskouez ouzhpenn d\'ur skeudenn, ne c\'hell ket bezañ ledanoc\'h eget %d pixel nag uheloc\'h eget %d pixel, ha ne rank ket bezañ pounneroc\'h eget %d ke.';
$lang['Upload_Avatar_file'] = 'Enrollañ un Avatar adalek ho urzhiataerezh';
$lang['Upload_Avatar_URL'] = 'Enrollañ un Avatar adalek un URL';
$lang['Upload_Avatar_URL_explain'] = 'Skrivit URL ur skeudenn-Avatar, enrollet e vo war al lec\'hienn-mañ.';
$lang['Pick_local_Avatar'] = 'Dibab un Avatar er c\'haridenn';
$lang['Link_remote_Avatar'] = 'Liammañ an Avatar adalek ul lec\'hienn all';
$lang['Link_remote_Avatar_explain'] = 'Skrivit URL ar skeudenn-Avatar ho peus c\'hoant da liammañ.';
$lang['Avatar_URL'] = 'URL ar skeudenn-Avatar';
$lang['Select_from_gallery'] = 'Dibab un Avatar er c\'haridenn';
$lang['View_avatar_gallery'] = 'Diskouez garidenn an Avatarioù';

$lang['Select_avatar'] = 'Dibab an Avatar';
$lang['Return_profile'] = 'Nullañ an Avatar';
$lang['Select_category'] = 'Dibab ur rummad';

$lang['Delete_Image'] = 'Diverkañ ar skeudenn';
$lang['Current_Image'] = 'Ar skeudenn \'zo bremañ';

$lang['Notify_on_privmsg'] = 'Kelaouiñ pa vez kaset ur gerig prevez din';
$lang['Popup_on_privmsg'] = 'Digeriñ ur Pop-Up pa vez ur gerig prevez nevez'; 
$lang['Popup_on_privmsg_explain'] = 'Ur prenestrig a c\'hell bezañ digoret pa vez kaset ur gemennadenn brevez deoc\'h'; 
$lang['Hide_user'] = 'Kuzhat ho pezañs';

$lang['Profile_updated'] = 'Kemmet eo bet ho aelad';
$lang['Profile_updated_inactive'] = 'Kemmet eo bet ho aelad. Met, dre m\'ho peus kemmet traoù a-bouez, eo bet lakaet ho kont dizoberiant evit ar mare. Sellit ouzh ho postelioù evit gouzout penaos adenaouiñ anezhañ, pe gortozit un tamm ma vefe graet gant ar merour.';

$lang['Password_mismatch'] = 'Disheñvel eo ar ger-tremen ouzh e wiriadenn.';
$lang['Current_password_mismatch'] = 'Ar ger-tremen ho peus roet n\'eo ket an hini a zo war hon diaz-titouroù.';
$lang['Password_long'] = 'Ne c\'hell ket ho ker-tremen bezañ ouzhpenn 32 arouez.';
$lang['Too_many_registers'] = 'Re a wech ho peus klasket en em enrollañ evit ar gweladenn-mañ. Klaskit en-dro a-benn nebeut.';
$lang['Username_taken'] = 'Digarez, met implijet e vez an anv-implijer-se gant unan bennak all dija.';
$lang['Username_invalid'] = 'Digarez, met un arouez direizh a zo en ho anv-implijer (\', da skouer).';
$lang['Username_disallowed'] = 'Digarez, met difennet eo bet an anv-implijer-se.';
$lang['Email_taken'] = 'Digarez, met ar postel-se a zo bet roet gant unan bennak all dija.';
$lang['Email_banned'] = 'Digarez, met difennet eo bet ar postel-se.';
$lang['Email_invalid'] = 'Digarez, met direizh eo ar postel-se.';
$lang['Signature_too_long'] = 'Re hir eo ho sinadur';
$lang['Fields_empty'] = 'Rankout a rit leuniañ al lec\'hioù gant * d\'an nebeutañ';
$lang['Avatar_filetype'] = 'Er stumm .jpg, .gif pe .png e rank an avatar bezañ';
$lang['Avatar_filesize'] = 'Bihanoc\'h eget %d ke e rank pouez ar skeudenn bezañ'; // The avatar image file size must be less than 6 ko
$lang['Avatar_imagesize'] = 'Bihanoc\'h pe kevatal da %d pixel ledander ha %d pixel uhelder e rank ho avatar bezañ'; 

$lang['Welcome_subject'] = 'Degemer mat war forumoù %s'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Kont-implijer nevez';
$lang['Account_activated_subject'] = 'Kont enaouet';

$lang['Account_added'] = 'Trugarez da vezañ enrollet. Krouet eo bet ho kont, gallout a rit kennaskañ gant ho anv-implijer hag ho ker-tremen';
$lang['Account_inactive'] = 'Krouet eo bet ho kont. Bremañ eo ret ma vefe enaouet. Kaset ez eus bet un alc\'hwez-enaouiñ d\'ar postel roet ganeoc\'h. Sellit ouzh ho postelioù evit muioc\'h a ditouroù.';
$lang['Account_inactive_admin'] = 'Krouet eo bet ho kont, met ret eo gortoz e vefe bet enaouet gant merour ar forum. Kaset ez eus bet ur postel dezhañ, ha kelaouet e voc\'h pa vo bet enaouet ho kont.';
$lang['Account_active'] = 'Enaouet eo bet ho kont. Trugarez da vezañ enrollet.';
$lang['Account_active_admin'] = 'Enaouet eo bet ho kont.';
$lang['Already_activated'] = 'C\'hoazh e oa bet enaouet ho kont.';
$lang['Reactivate'] = 'Adenaouit ho kont !';
$lang['COPPA'] = 'Krouet eo bet ho kont, met rankout a ra bezañ asantet. Sellit ouzh ho postelioù evit muioc\'h a ditouroù.';

$lang['Registration'] = 'Reolennoù-Enrollañ';
$lang['Reg_agreement'] = 'Diverket e vo pep kemennadenn direizh ar buanañ ar gwellañ gant merourien ha kasourien ar forum. A-wechoù koulskoude eo dibosupl dezho gwelet an holl gemennadennoù. Anzav a rit neuze eo savboent ar re a skriv ar c\'hemennadennoù, ha ket hini ar merourien, ar gasourien,pe ar webmestr a vez eztaolet amañ er c\'hemennadoù n\'int ket o re. Ar re-se ne c\'hellfent neuze ket bezañ lakaet kiriek eus ar pezh a vez skrivet amañ.<br /><br />Asantiv a rit neuze da chom hep kas kemennadennoù flemmus, hudur, astut, drouklavarus, reizhel, pe kemennadennoù az afe a-enep d\'al lezenn. M\'hen rafec\'h e c\'hellfec\'h bezañ skarzhet diouzhtu hag en un doare peurbadus, ha gallout a rafe ho kinniger-moned war Internet bezañ kelaouet. Enrollet e vez chomlec\'h IP pep kemennadenn evit sikour ma vefe doujet ouzh ar reolennoù-mañ. A-du oc\'h gant ar fed m\'o deus ar webmestr, ar merourien, pe ar gasourien ar gwir da ziverkañ, kemm, dilec\'hiañ, prennañ forzh peseurt sujed-tabut, forzh pegoulz. Asantiñ a rit ivez ma vefe enrollet an holl ditouroù a roit war un diaz-titouroù. Ne vint diskouezet da zen ebet hep ho asant, met ne c\'hell ket ar webmestr, ar merourien pe ar gasourien bezañ lakaet kiriek ma vefe diskuilhet titouroù goude un tagadenn gant preizherien.<br /><br />Toupinoù (cookies) a vez implijet gant ar forum-mañ evit enrollañ titouroù war hoc\'h urzhiataerezh. Enne n\'ez eus titour ebet roet ganeoc\'h, ne servijont ket da draoù all eget gwellaat aezamant ho kweladennoù. Ne vez ket implijet ho postel evit ober traoù all eget kas titouroù diwar-benn ho enrolladenn, ho kerioù-tremen, pe kelaouiñ ac\'hanoc\'h pa vez skrivet gerigoù prevez deoc\'h, pe pa vez respontet d\'ho kemennadennoù.<br /><hr /><p>Daou bal a zo gant va forum :</p><ul><li>flapiñ e brezhoneg</li><li>kaozeal diwar-benn traoù all eget Breizh, ar brezhoneg hag ar festoù-noz.</li></ul><p>Pep kemennadenn, ma vefe e galleg pe diwar-benn unan deus ar sujedoù meneget a-us, a vo skarzhet prim ha cheuc\'h. Trawalc\'h a forumoù a zo evit kaozeal e galleg, hag e-touez an nebeud re a zo e brezhoneg e kavot peadra da gomz diwar-benn ar sujedoù meneget a-us.</p><hr /><br />Oc\'h enrollañ, e asurit deomp oc\'h a-du gant an holl reolennoù a-us.';

$lang['Agree_under_13'] = 'Degemer a ran ar reolennoù, hag on <b>dindan</b> 13 bloaz.';
$lang['Agree_over_13'] = 'Degemer a ran ar reolennoù hag on <b>13 bloaz rik</b> pe <b>ouzhpenn</b>.';
$lang['Agree_not'] = 'Ne zegemeran ket ar reolennoù.';

$lang['Wrong_activation'] = 'Ne glot ket an alc\'hwez-enaouiñ a skrivit gant an hini hon eus kaset deoc\'h.';
$lang['Send_password'] = 'Kasit ur ger-tremen nevez din mar plij'; 
$lang['Password_updated'] = 'Krouet ez eus bet ur ger-tremen nevez. Sellit ouzh ho posteloù evit gouzout hiroc\'h.';
$lang['No_email_match'] = 'Ne glot ket ar postel ho peus roet ouzh an hini a zo bet implijet gant ho anv-implijer.';
$lang['New_password_activation'] = 'Enaouadur ur ger-tremen nevez';
$lang['Password_activated'] = 'Adenaouet eo bet ho kont. Roit ar ger-tremen a oa er postel emaoc\'h o paouez kaout evit kennaskañ.';

$lang['Send_email_msg'] = 'Kas ur postel';
$lang['No_user_specified'] = 'N\'eus bet resisaet implijer ebet';
$lang['User_prevent_email'] = 'N\'en deus ket c\'hoant an implijer-se da zegemer posteloù. Klaskit kas ur gerig prevez dezhañ.';
$lang['User_not_exist'] = 'N\'eus ket ouzh an implijer-se';
$lang['CC_email'] = 'Kas un eil skouerenn eus ar postel-se deoc\'h ho-unan';
$lang['Email_message_desc'] = 'Testenn hepken a vo stumm ar postel-mañ. Ne lakait tarzh HTML pe BBCode ebet. Ar chomlec\'h evit respont d\'ar gemennadenn a vo ho hini.';
$lang['Flood_email_limit'] = 'Ne c\'hellit ket kas ur postel all evit ar mare, klaskit en-dro diwezhatoc\'h.';
$lang['Recipient'] = 'Degemerer';
$lang['Email_sent'] = 'Kaset eo bet ar postel';
$lang['Send_email'] = 'Kas ar postel';
$lang['Empty_subject_email'] = 'Rankout a rit lakaat un titl d\'ar postel';
$lang['Empty_message_email'] = 'Rankout a rit skrivañ un dra-bennak er postel evit ma vefe kaset.';

//
// Visual confirmation system settings
//
$lang['Confirm_code_wrong'] = 'Ar c\'hod-gwiriañ ho peus roet ne glot ket gant hini ar skeudenn. Klaskit en-dro diwezhatoc\'h.';
$lang['Too_many_registers'] = 'Re a wech ho peus klasket en em enrollañ evit ar gweladenn-mañ. Klaskit en-dro a-benn nebeut.';
$lang['Confirm_code_impaired'] = 'M\'ho peus kudennoù da welet pe me ne teuit ket a-benn da lenn ar c\'hod-se, kit e darempred gant %sAdministrator%s evit kaout sikour.';
$lang['Confirm_code'] = 'Kod-gwiriañ';
$lang['Confirm_code_explain'] = 'Lakit rik ar c\'hod a welit war ar skeudenn (pennlizherennoù hag all...)';


//
// Memberslist
//
$lang['Select_sort_method'] = 'Dibab an hentenn-didoueziañ';
$lang['Sort'] = 'Didoueziañ';
$lang['Sort_Top_Ten'] = 'Top10 ar c\'haserien';
$lang['Sort_Joined'] = 'Enrollet d\'ar';
$lang['Sort_Username'] = 'Anv-implijer';
$lang['Sort_Location'] = 'Lec\'hiadur';
$lang['Sort_Posts'] = 'Kemennadennoù';
$lang['Sort_Email'] = 'Postel';
$lang['Sort_Website'] = 'Lec\'hienn-Web';
$lang['Sort_Ascending'] = 'Kreskus';
$lang['Sort_Descending'] = 'Digreskus';
$lang['Order'] = 'Urzh';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Pannell-verañ ar rummadoù';
$lang['Group_member_details'] = 'Bezañs en ur rummad';
$lang['Group_member_join'] = 'Mont en ur rummad';

$lang['Group_Information'] = 'Titouroù diwar-benn ar rummad';
$lang['Group_name'] = 'Anv ar rummad';
$lang['Group_description'] = 'Deskrivadur ar rummad';
$lang['Group_membership'] = 'Ho statud';
$lang['Group_Members'] = 'Izili ar rummad';
$lang['Group_Moderator'] = 'Kasour ar rummad';
$lang['Pending_members'] = 'Izili war c\'hortoz';

$lang['Group_type'] = 'Doare-rummad';
$lang['Group_open'] = 'Rummad digor';
$lang['Group_closed'] = 'Rumad serret';
$lang['Group_hidden'] = 'Rummad kuzh';

$lang['Current_memberships'] = 'Ezel eus ar rummad';
$lang['Non_member_groups'] = 'Ket ezel eus ar rummad';
$lang['Memberships_pending'] = 'Emezeladurioù war c\'hortoz';

$lang['No_groups_exist'] = 'N\'eus rummad ebet';
$lang['Group_not_exist'] = 'N\'eus ket ouzh ar rummad-mañ';

$lang['Join_group'] = 'Mont er rummad';
$lang['No_group_members'] = 'N\'eus ezel ebet er rummad-mañ';
$lang['Group_hidden_members'] = 'Kuzh eo ar rummad-se, ne c\'hellit ket gwelet piv \'zo e-barzh';
$lang['No_pending_group_members'] = 'N\'eus den o c\'hortoz evit ar rummad-mañ';
$lang['Group_joined'] = 'Emezelet mat oc\'h er rummad.<br />Kelaouet e voc\'h pa vo asantet ho emezeladur gant kasour ar rummad';
$lang['Group_request'] = 'Ur goulenn emezeliñ a zo bet graet en ho rummad';
$lang['Group_approved'] = 'Asantet eo bet ho koulenn';
$lang['Group_added'] = 'Ouzhpennet oc\'h bet d\'ar rummad-mañ';
$lang['Already_member_group'] = 'C\'hoazh oc\'h ezel deus ar rummad-mañ';
$lang['User_is_member_group'] = 'C\'hoazh eo an implijer-mañ ezel eus ar rummad-mañ';
$lang['Group_type_updated'] = 'Kemmet eo bet doare ar rummad';

$lang['Could_not_add_user'] = 'N\'eus ket ouzh an implijer ho peus dibabet';
$lang['Could_not_anon_user'] = 'Ne c\'hellit ket lakaat implijerien dizanv da vezañ izili eus ur rummad';

$lang['Confirm_unsub'] = 'Ha sur oc\'h ho peus c\'hoant da guitaat ar rummad-mañ ?';
$lang['Confirm_unsub_pending'] = 'N\'eo ket bet asantet c\'hoazh ho emezeladur er rummad. Ha sur oc\'h ho peus c\'hoant da guitaat ar rummad-mañ ?';

$lang['Unsub_success'] = 'Tennet oc\'h bet deus ar rummad-mañ';

$lang['Approve_selected'] = 'Asantiñ an diuzad';
$lang['Deny_selected'] = 'Nac\'hañ an diuzad';
$lang['Not_logged_in'] = 'Rankout a rit bezañ kennasket evit mont en ur rummad.';
$lang['Remove_selected'] = 'Diverkañ an dibab';
$lang['Add_member'] = 'Ouzhpennañ an ezel';
$lang['Not_group_moderator'] = 'N\'oc\'h ket kasour ar rummad-mañ. Ne c\'hellit ket ober se.';

$lang['Login_to_join'] = 'Kennaskit evit mont er rummad pe merañ e oberoù';
$lang['This_open_group'] = 'Ur rummad digor eo : klikit evit goulenn emezeliñ';
$lang['This_closed_group'] = 'Ur rummad serret eo: ne vez degemeret implijer ebet ken';
$lang['This_hidden_group'] = 'Ur rummad kuzh eo: ne vez ket aotreet ouzhpennañ implijerien en un doare emgefreek';
$lang['Member_this_group'] = 'Ezel eus ar rummad oc\'h';
$lang['Pending_this_group'] = 'War c\'hortoz emañ ho emezeladur er rummad-mañ';
$lang['Are_group_moderator'] = 'Kasour ar rummad oc\'h';
$lang['None'] = 'Ebet';

$lang['Subscribe'] = 'En em enrollañ';
$lang['Unsubscribe'] = 'Kuitaat';
$lang['View_Information'] = 'Gwelet an titouroù';


//
// Search
//
$lang['Search_query'] = 'Klask';
$lang['Search_options'] = 'Dilennoù klask';

$lang['Search_keywords'] = 'Klask gant gerioù-stur';
$lang['Search_keywords_explain'] = 'Gallout a rit implijout <u>AND</u> evit ar gerioù a RANK bezañ en disoc\'hoù, <u>OR</u> evit ar re a C\'HELL bezañ en disoc\'hoù, ha <u>NOT</u> evit ar re n\'o deus ket da vezañ en disoc\'hoù. Implijit * evel ur joker evit klask tammoù gerioù';
$lang['Search_author'] = 'Klask ur c\'haser';
$lang['Search_author_explain'] = 'Implijit * evel ur joker evit klask tammoù gerioù';

$lang['Search_for_any'] = 'Klask forzh pehini eus ar gerioù-se';
$lang['Search_for_all'] = 'Klask an holl c\'herioù';
$lang['Search_title_msg'] = 'Klask en titloù hag er c\'hemennadennoù';
$lang['Search_msg_only'] = 'Klask er c\'hemennadennoù hepken';

$lang['Return_first'] = 'Klask e'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'Arouez kentañ ar gemennadenn';

$lang['Search_previous'] = 'Klask abaoe'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Renkañ dre';
$lang['Sort_Time'] = 'Eur ar gemenadenn';
$lang['Sort_Post_Subject'] = 'Sujed ar gemennadenn';
$lang['Sort_Topic_Title'] = 'Titl ar sujed';
$lang['Sort_Author'] = 'Kaser';
$lang['Sort_Forum'] = 'Forum';

$lang['Display_results'] = 'Diskouez an disoc\'hoù e-stumm';
$lang['All_available'] = 'Holl da gaout';
$lang['No_searchable_forums'] = 'N\'oc\'h ket aotreet da glask ur forum bennak war al lec\'hienn-mañ';

$lang['No_search_match'] = 'N\'eus sujed na kemennadenn ebet o klotañ ouzh ar pezh a glaskit';
$lang['Found_search_match'] = '%d disoc\'h bet kavet'; // eg. Search found 1 match
$lang['Found_search_matches'] = '%d disoc\'h bet kavet'; // eg. Search found 24 matches

$lang['Search_Flood_Error'] = 'N\'hallit ket klask un dra all ken buan goude an hini diwezhañ, gortozit un tamm mar-plij.';

$lang['Close_window'] = 'Serriñ ar prenestr';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Digarez, met n\'eus nemet ar/an %s a c\'hell kas kemennoù er forum-mañ';
$lang['Sorry_auth_sticky'] = 'Digarez, met n\'eus nemet ar/an %s a c\'hell kas postoù-it er forum-mañ';
$lang['Sorry_auth_read'] = 'Digarez, met n\'eus nemet ar/an %s a c\'hell lenn sujedoù ar forum-mañ';
$lang['Sorry_auth_post'] = 'Digarez, met n\'eus nemet ar/an %s a c\'hell kas er forum-mañ';
$lang['Sorry_auth_reply'] = 'Digarez, met n\'eus nemet ar/an %s a c\'hell respont er forum-mañ';
$lang['Sorry_auth_edit'] = 'Digarez, met n\'eus nemet ar/an %s a c\'hell kemm ur gemennadenn er forum-mañ';
$lang['Sorry_auth_delete'] = 'Digarez, met n\'eus nemet ar/an %s a c\'hell diverkañ kemennadennoù ar forum-mañ';
$lang['Sorry_auth_vote'] = 'Digarez, met n\'eus nemet ar/an %s a c\'hell mouezhiañ e sontadegoù ar forum-mañ';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>implijerien dizanv</b>';
$lang['Auth_Registered_Users'] = '<b>implijerien enrollet</b>';
$lang['Auth_Users_granted_access'] = '<b>implijerien ispisial</b>';
$lang['Auth_Moderators'] = '<b>gasourien</b>';
$lang['Auth_Administrators'] = '<b>merourien</b>';

$lang['Not_Moderator'] = 'N\'oc\'h ket kasour war ar forum-mañ';
$lang['Not_Authorised'] = 'Ket aotreet';

$lang['You_been_banned'] = 'Skarzhet oc\'h bet diouzh ar forum-mañ. <br />Kit e darempred gant webmestr al lec\'hienn pe merour ar forum evit gouzout hiroc\'h';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Er mare-mañ n\'ez eus implijer ebet enrollet ha'; // There are 5 Registered and
$lang['Reg_users_online'] = 'Er mare-mañ ez eus %d implijer enrollet ha'; // There are 5 Registered and
$lang['Reg_user_online'] = 'Er mare-mañ ez eus %d implijer enrollet ha'; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = 'implijer kuzh ebet kennasket'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d implijer kuzh kennasket'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d implijer kuzh kennasket'; // 6 Hidden users online
$lang['Guest_users_zero_online'] = 'Er mare-mañ n\'ez eus gweladenner ebet kennasket'; // There are 10 Guest users online
$lang['Guest_users_online'] = 'Er mare-mañ ez eus %d gweladenner kennasket'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Er mare-mañ ez eus %d gweladenner kennasket'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Er mare-mañ, n\'eus den war ar forum';

$lang['Online_explain'] = 'Diazezet eo ar roadoù-se war an implijerien oberiant e-pad ar pemp minutenn diwezhañ';

$lang['Forum_Location'] = 'Lec\'hiadur war ar forum';
$lang['Last_updated'] = 'Nevezadur diwezhañ';

$lang['Forum_index'] = 'Roll ar Forum';
$lang['Logging_on'] = 'a zo o kennaskañ';
$lang['Posting_message'] = 'a zo o kas ur gemennadenn';
$lang['Searching_forums'] = 'a zo o klask war ar forum';
$lang['Viewing_profile'] = 'a zo o sellout ouzh un aelad';
$lang['Viewing_online'] = 'a zo o sellout ouzh piv \'zo kennasket';
$lang['Viewing_member_list'] = 'a zo o sellout ouzh listenn an izili';
$lang['Viewing_priv_msgs'] = 'a zo o sellout ouzh e c\'herigoù prevez';
$lang['Viewing_FAQ'] = 'a zo o lenn ar Goulennoù Muiañ-Savet';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Pannell-verañ ar c\'huñvaat';
$lang['Mod_CP_explain'] = 'Gant ar furmskrid dindan e c\'hellit merañ lodennoù eus ar forum : Gallout a rit prennañ, dibrennañ, dilec\'hiañ, pe diverkañ forzh pe niver a sujedoù.';

$lang['Select'] = 'Diuz';
$lang['Delete'] = 'Diverkañ';
$lang['Move'] = 'Dilec\'hiañ';
$lang['Lock'] = 'Prennañ';
$lang['Unlock'] = 'Dibrennañ';

$lang['Topics_Removed'] = 'Diverket eo bet ar sujedoù(où) diuzet.';
$lang['Topics_Locked'] = 'Prennet eo bet ar sujed(où) diuzet.';
$lang['Topics_Moved'] = 'Dilec\'hiet eo bet ar sujed(où) diuzet.';
$lang['Topics_Unlocked'] = 'Dibrennet eo bet ar sujed(où) diuzet.';
$lang['No_Topics_Moved'] = 'N\'eus bet dilec\'hiet sujed ebet.';

$lang['Confirm_delete_topic'] = 'Ha sur oc\'h ho peus c\'hoant da ziverkañ ar sujed(où) diuzet ?';
$lang['Confirm_lock_topic'] = 'Ha sur oc\'h ho peus c\'hoant da brennañ ar sujed(où) diuzet ?';
$lang['Confirm_unlock_topic'] = 'Ha sur oc\'h ho peus c\'hoant da zibrennañ ar sujed(où) diuzet ?';
$lang['Confirm_move_topic'] = 'Ha sur oc\'h ho peus c\'hoant da zilec\'hiañ ar sujed(où) diuzet ?';

$lang['Move_to_forum'] = 'Dilec\'hiañ davet ar forum';
$lang['Leave_shadow_topic'] = 'Lezel ur sujed-heulier er forum kozh.';

$lang['Split_Topic'] = 'Pannell-verañ rannadur ar sujedoù';
$lang['Split_Topic_explain'] = 'Gant ar furmskrid amañ-dindan e c\'hellit rannañ ur sujed e daou, pe o tibab ar c\'hemennadennoù un-hag-un, pe o rannañ adalek ur gemennadenn bet diuzet.';
$lang['Split_title'] = 'Titl ar sujed nevez';
$lang['Split_forum'] = 'Forum ar sujed nevez';
$lang['Split_posts'] = 'Rannañ ar c\'hemennadennoù diuzet';
$lang['Split_after'] = 'Rannañ adalek ar c\'hemennadennoù diuzet';
$lang['Topic_split'] = 'Rannet eo bet ar sujed dibabet.';

$lang['Too_many_error'] = 'Re a c\'hemennadennoù ho peus diuzet. Ne c\'hellit ket dibab ouzhpenn ur gemennadenn m\'ho peus c\'hoant da rannañ ar sujed adalek hennezh.';

$lang['None_selected'] = 'N\'ho peus dibabet sujed ebet evit kas an oberenn-se da benn. Kit war-dreñv ha diuzit ur sujed d\'an nebeutañ.';
$lang['New_forum'] = 'Forum nevez';

$lang['This_posts_IP'] = 'Chomlec\'h IP ar gemennadenn-se';
$lang['Other_IP_this_user'] = 'Chomlec\'hioù IP all m\'eo bet kaset kemennadennoù diwarne gant an implijer-se';
$lang['Users_this_IP'] = 'Implijerien o kas adalek ar chomlec\'h IP-se';
$lang['IP_info'] = 'Titouroù diwar-benn ar chomlec\'h IP';
$lang['Lookup_IP'] = 'Klask ar chomlec\'h IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'An eurioù a zo lakaet e stumm %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 Eur';
$lang['-11'] = 'GMT - 11 Eur';
$lang['-10'] = 'GMT - 10 Eur';
$lang['-9'] = 'GMT - 9 Eur';
$lang['-8'] = 'GMT - 8 Eur';
$lang['-7'] = 'GMT - 7 Eur';
$lang['-6'] = 'GMT - 6 Eur';
$lang['-5'] = 'GMT - 5 Eur';
$lang['-4'] = 'GMT - 4 Eur';
$lang['-3.5'] = 'GMT - 3:30 Eur';
$lang['-3'] = 'GMT - 3 Eur';
$lang['-2'] = 'GMT - 2 Eur';
$lang['-1'] = 'GMT - 1 Eur';
$lang['0'] = 'GMT';
$lang['1'] = 'Eur ar goañv';
$lang['2'] = 'Eur an hañv';
$lang['3'] = 'GMT + 3 Eur';
$lang['3.5'] = 'GMT + 3:30 Eur';
$lang['4'] = 'GMT + 4 Eur';
$lang['4.5'] = 'GMT + 4:30 Eur';
$lang['5'] = 'GMT + 5 Eur';
$lang['5.5'] = 'GMT + 5:30 Eur';
$lang['6'] = 'GMT + 6 Eur';
$lang['6.5'] = 'GMT + 6:30 Eur';
$lang['7'] = 'GMT + 7 Eur';
$lang['8'] = 'GMT + 8 Eur';
$lang['9'] = 'GMT + 9 Eur';
$lang['9.5'] = 'GMT + 9:30 Eur';
$lang['10'] = 'GMT + 10 Eur';
$lang['11'] = 'GMT + 11 Eur';
$lang['12'] = 'GMT + 12 Eur';
$lang['13'] = 'GMT + 13 Eur';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 Eur';
$lang['tz']['-11'] = 'GMT - 11 Eur';
$lang['tz']['-10'] = 'GMT - 10 Eur';
$lang['tz']['-9'] = 'GMT - 9 Eur';
$lang['tz']['-8'] = 'GMT - 8 Eur';
$lang['tz']['-7'] = 'GMT - 7 Eur';
$lang['tz']['-6'] = 'GMT - 6 Eur';
$lang['tz']['-5'] = 'GMT - 5 Eur';
$lang['tz']['-4'] = 'GMT - 4 Eur';
$lang['tz']['-3.5'] = 'GMT - 3:30 Eur';
$lang['tz']['-3'] = 'GMT - 3 Eur';
$lang['tz']['-2'] = 'GMT - 2 Eur';
$lang['tz']['-1'] = 'GMT - 1 Eur';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'Eur ar goañv';
$lang['tz']['2'] = 'Eur an hañv';
$lang['tz']['3'] = 'GMT + 3 Eur';
$lang['tz']['3.5'] = 'GMT + 3:30 Eur';
$lang['tz']['4'] = 'GMT + 4 Eur';
$lang['tz']['4.5'] = 'GMT + 4:30 Eur';
$lang['tz']['5'] = 'GMT + 5 Eur';
$lang['tz']['5.5'] = 'GMT + 5:30 Eur';
$lang['tz']['6'] = 'GMT + 6 Eur';
$lang['tz']['6.5'] = 'GMT + 6:30 Eur';
$lang['tz']['7'] = 'GMT + 7 Eur';
$lang['tz']['8'] = 'GMT + 8 Eur';
$lang['tz']['9'] = 'GMT + 9 Eur';
$lang['tz']['9.5'] = 'GMT + 9:30 Eur';
$lang['tz']['10'] = 'GMT + 10 Eur';
$lang['tz']['11'] = 'GMT + 11 Eur';
$lang['tz']['12'] = 'GMT + 12 Eur';
$lang['tz']['13'] = 'GMT + 13 Eur';

$lang['datetime']['Sunday'] = 'Sul';
$lang['datetime']['Monday'] = 'Lun';
$lang['datetime']['Tuesday'] = 'Meurzh';
$lang['datetime']['Wednesday'] = 'Merc\'her';
$lang['datetime']['Thursday'] = 'Yaou';
$lang['datetime']['Friday'] = 'Gwener';
$lang['datetime']['Saturday'] = 'Sadorn';
$lang['datetime']['Sun'] = 'Sul';
$lang['datetime']['Mon'] = 'Lun';
$lang['datetime']['Tue'] = 'Meu';
$lang['datetime']['Wed'] = 'Mer';
$lang['datetime']['Thu'] = 'Yao';
$lang['datetime']['Fri'] = 'Gwe';
$lang['datetime']['Sat'] = 'Sad';
$lang['datetime']['January'] = 'Genver';
$lang['datetime']['February'] = 'C\'hwevrer';
$lang['datetime']['March'] = 'Meurzh';
$lang['datetime']['April'] = 'Ebrel';
$lang['datetime']['May'] = 'Mae';
$lang['datetime']['June'] = 'Even';
$lang['datetime']['July'] = 'Gouere';
$lang['datetime']['August'] = 'Eost';
$lang['datetime']['September'] = 'Gwengolo';
$lang['datetime']['October'] = 'Here';
$lang['datetime']['November'] = 'Du';
$lang['datetime']['December'] = 'Kerzu';
$lang['datetime']['Jan'] = 'Gvr';
$lang['datetime']['Feb'] = 'C\'hr';
$lang['datetime']['Mar'] = 'Mzh';
$lang['datetime']['Apr'] = 'Ebr';
$lang['datetime']['May'] = 'Mae';
$lang['datetime']['Jun'] = 'Evn';
$lang['datetime']['Jul'] = 'Gre';
$lang['datetime']['Aug'] = 'Eos';
$lang['datetime']['Sep'] = 'Ggo';
$lang['datetime']['Oct'] = 'Her';
$lang['datetime']['Nov'] = 'Du';
$lang['datetime']['Dec'] = 'Kzu';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Titouroù';
$lang['Critical_Information'] = 'Titouroù arvar';

$lang['General_Error'] = 'Fazi Hollek';
$lang['Critical_Error'] = 'Fazi arvar';
$lang['An_error_occured'] = 'Ur fazi \'zo bet';
$lang['A_critical_error'] = 'Ur fazi arvar \'zo bet';

$lang['Admin_reauthenticate'] = 'Evit merañ ar banell e rankit adskrivañ ho ker-tremen hag ho anv-implijer.';

$lang['Login_attempts_exceeded'] = 'Aet oc\'h dreist an niver a %s kennaskadenn aotreet. Dav \'vo deoc\'h gortoz %s minutenna-raok gallout klask en-dro. ';
$lang['Please_remove_install_contrib'] = 'Bezit asur eo bet diverket an teulioù install/ ha contrib/.';

//
// That's all Folks!
// -------------------------------------------------

?>