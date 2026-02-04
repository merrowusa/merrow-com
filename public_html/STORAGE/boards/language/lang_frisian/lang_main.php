<?php
/***************************************************************************
 *                            lang_main.php [Frisian]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.20.2.1 2002/05/27 11:58:06 psotfx Exp $
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
// Add your details here if wanted, e.g. Name, username, email address, website
// Thaeke Johannes Kuipers, thaeke@thaeke.com, www.thaeke.com
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'iso-8859-1';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'lofts';
$lang['RIGHT'] = 'rjochts';
$lang['DATE_FORMAT'] = 'j-n-Y'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION_INFO'] = 'Fryske oersetting troch <a href="http://www.thaeke.com" target="_blank" class="copyright">Thaeke.com</a>';
//
// Common, these terms are used
// extensively on several pages
//


$lang['Forum'] = 'Foarum';
$lang['Category'] = 'Kattegoary';
$lang['Topic'] = 'Underwerp';
$lang['Topics'] = 'Underwerpen';
$lang['Replies'] = 'Antwurden';
$lang['Views'] = 'Besjoen';
$lang['Post'] = 'Berjocht';
$lang['Posts'] = 'Berjochten';
$lang['Posted'] = 'Pleatst';
$lang['Username'] = 'Brûkersnamme';
$lang['Password'] = 'Wachtwurd';
$lang['Email'] = 'Eamel';
$lang['Poster'] = 'Brûker';
$lang['Author'] = 'Skriuwer';
$lang['Time'] = 'Tiid';
$lang['Hours'] = 'Oeren';
$lang['Message'] = 'Berjocht';

$lang['1_Day'] = '1 Dei';
$lang['7_Days'] = '7 Dagen';
$lang['2_Weeks'] = '2 Wiken';
$lang['1_Month'] = '1 Moanne';
$lang['3_Months'] = '3 Moannen';
$lang['6_Months'] = '6 Moannen';
$lang['1_Year'] = '1 Jier';

$lang['Go'] = ' OK ';
$lang['Jump_to'] = 'Gean nei';
$lang['Submit'] = 'OK';
$lang['Reset'] = 'Opnij';
$lang['Cancel'] = 'Ofbrekke';
$lang['Preview'] = 'Foarbyld';
$lang['Confirm'] = 'Befestigje';
$lang['Spellcheck'] = 'Staveringshifker';
$lang['Yes'] = 'Ja';
$lang['No'] = 'Nee';
$lang['Enabled'] = 'Ynskeakelje';
$lang['Disabled'] = 'Utskeakelje';
$lang['Error'] = 'Flater';

$lang['Next'] = 'Folgjende';
$lang['Previous'] = 'Foarige';
$lang['Goto_page'] = 'Gean nei side';
$lang['Joined'] = 'Registreard op';
$lang['IP_Address'] = 'IP adres';

$lang['Select_forum'] = 'Kies foarum';
$lang['View_latest_post'] = 'Besjoch lêste berjocht';
$lang['View_newest_post'] = 'Besjoch nijste berjocht';
$lang['Page_of'] = 'Side <b>%d</b> fan <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ nûmer';
$lang['AIM'] = 'AIM namme';
$lang['MSNM'] = 'MSN messenger';
$lang['YIM'] = 'Yahoo messenger';

$lang['Forum_Index'] = '%s -> yndeks';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Pleats nij berjocht';
$lang['Reply_to_topic'] = 'Pleats reaksje';
$lang['Reply_with_quote'] = 'Reagear mei in kwote';

$lang['Click_return_topic'] = 'Klik %shjir%s om nei it ûnderwerp werom te gean'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Klik %shjir%s om it jitris te besykjen';
$lang['Click_return_forum'] = 'Klik %shjir%s om terug te keren naar de onderwerpenlijst';
$lang['Click_view_message'] = 'klik %shjir%s om dyn berjocht te besjen';
$lang['Click_return_modcp'] = 'klik %shjir%s om werom te gean nei it Moderator Kontrôle Paneel';
$lang['Click_return_group'] = 'Klik %shjir%s om werom te gean nei it groepen oersjoch';

$lang['Admin_panel'] = 'Gean nei it Administraasjepaneel';

$lang['Board_disable'] = 'It spyt ús mar dit foarum is efkes bûten gebrûk, besykje it letter jitris.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Registrearre brûkers:';
$lang['Browsing_forum'] = 'brûkers op dit foarum:';
$lang['Online_users_zero_total'] = 'Der bin op dit stuit gjin brûkers online :: ';
$lang['Online_users_total'] = 'Der bin op dit stuit <b>%d</b> brûkers online :: ';
$lang['Online_user_total'] = 'Der is op dit stuit <b>%d</b> brûker online :: ';
$lang['Reg_users_zero_total'] = '0 Registrearre, ';
$lang['Reg_users_total'] = '%d Registrearre, ';
$lang['Reg_user_total'] = '%d Registrearre, ';
$lang['Hidden_users_zero_total'] = '0 ferburchen en ';
$lang['Hidden_user_total'] = '%d ferburchen en ';
$lang['Hidden_users_total'] = '%d ferburchen en ';
$lang['Guest_users_zero_total'] = '0 gasten';
$lang['Guest_users_total'] = '%d gasten';
$lang['Guest_user_total'] = '%d gast';
$lang['Record_online_users'] = 'It grutste tal besikers ea tagelyk online wie <b>%s</b> op %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sBehearder%s';
$lang['Mod_online_color'] = '%sMasters%s';

$lang['You_last_visit'] = 'Dyn lêste besite wie op %s'; // %s replaced by date/time
$lang['Current_time'] = 'It is no %s'; // %s replaced by time

$lang['Search_new'] = 'Berjochten sûnt dyn lêste besite';
$lang['Search_your_posts'] = 'Besjoch dyn berjochten';
$lang['Search_unanswered'] = 'Besjoch ûnbeantwurde berjochten';

$lang['Register'] = 'Registrear';
$lang['Profile'] = 'Profyl';
$lang['Edit_profile'] = 'Bewurkje dyn profyl';
$lang['Search'] = 'Sykje';
$lang['Memberlist'] = 'Brûkerslist';
$lang['FAQ'] = 'FFS';
$lang['BBCode_guide'] = 'BBKoade oersjoch';
$lang['Usergroups'] = 'Brûkersgroepen';
$lang['Last_Post'] = 'Lêste berjocht';
$lang['Moderator'] = 'Master';
$lang['Moderators'] = 'Masters';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'De brûkers hawwe noch gjin berjochten pleatst'; // Number of posts
$lang['Posted_articles_total'] = 'De brûkers hawwe op dit stuit <b>%d</b> berjochten pleatst'; // Number of posts
$lang['Posted_article_total'] = 'De brûkers hawwe op dit stuit noch mar ien berjocht pleatst'; // Number of posts
$lang['Registered_users_zero_total'] = 'Wy hawwe gjin registrearre brûkers'; // # registered users
$lang['Registered_users_total'] = 'Wy hawwe <b>%d</b> registrearre brûkers'; // # registered users
$lang['Registered_user_total'] = 'Wy hawwe ien registrearre brûker'; // # registered users
$lang['Newest_user'] = 'De nijste brûker is <b>%s%s%s</b>'; // a href, username, /a

$lang['No_new_posts_last_visit'] = 'Gjin nije berjochten sûnt dyn lêste besite.';
$lang['No_new_posts'] = 'Gjin nije berjochten';
$lang['New_posts'] = 'Nije berjochten';
$lang['New_post'] = 'Nij berjocht';
$lang['No_new_posts_hot'] = 'Gjin nije berjochten [ Populêr ]';
$lang['New_posts_hot'] = 'Nije berjochten [ Populêr ]';
$lang['No_new_posts_locked'] = 'Gjin nije berjochten [ Sletten ]';
$lang['New_posts_locked'] = 'Nije berjochten [ Sletten ]';
$lang['Forum_is_locked'] = 'Foarum is sletten';


//
// Login
//
$lang['Enter_password'] = 'Om yn te loggen moatst dyn brûkersnamme en dyn wachtwurd ynfolje';
$lang['Login'] = 'Ynlogge';
$lang['Logout'] = 'Utlogge';

$lang['Forgotten_password'] = 'Wachtwurd fergetten';

$lang['Log_me_in'] = 'Loch my automatysk yn at ik hjir wer kom';

$lang['Error_login'] = 'Do hast in flater makke by de brûkersnamme as dyn brûkersnamme is noch net aktyf as dyn wachtwurd is net goed.';


//
// Index page
//
$lang['Index'] = 'Yndeks';
$lang['No_Posts'] = 'Gjin berjochten';
$lang['No_forums'] = 'Dit foarum hat gjin berjochten';

$lang['Private_Message'] = 'Privee berjocht';
$lang['Private_Messages'] = 'Privee berjochten';
$lang['Who_is_Online'] = 'Wa binne hjir?';

$lang['Mark_all_forums'] = 'Markear alle foarums as lêzen';
$lang['Forums_marked_read'] = 'Alle foarums waarden as lêzen markearre';


//
// Viewforum
//
$lang['View_forum'] = 'Besjoch it ûnderwerp';

$lang['Forum_not_exist'] = 'It ûnderwerp datst keazen hast bestiet net';
$lang['Reached_on_error'] = 'Der is earne in flater ûntstien';

$lang['Display_topics'] = 'Underwerpen fan ôfrûne';
$lang['All_Topics'] = 'Alle ûnderwerpen';

$lang['Topic_Announcement'] = '<b>Meidieling:</b>';
$lang['Topic_Sticky'] = '<b>Plakkerke:</b>';
$lang['Topic_Moved'] = '<b>Ferpleatst:</b>';
$lang['Topic_Poll'] = '<b>[ Fraachpetearke ]</b>';

$lang['Mark_all_topics'] = 'Markear alle ûnderwerpen as lêzen';
$lang['Topics_marked_read'] = 'Alle ûnderwerpen waarden as lêzen markearre';

$lang['Rules_post_can'] = 'Do <b>meist</b> nije ûnderwerpen pleatse';
$lang['Rules_post_cannot'] = 'Do <b>meist gjin</b> nije ûnderwerpen pleatse';
$lang['Rules_reply_can'] = 'Do <b>meist</b> reaksjes pleatse';
$lang['Rules_reply_cannot'] = 'Do <b>meist gjin</b> reaksjes pleatse';
$lang['Rules_edit_can'] = 'Do <b>meist</b> dyn berjochten oanpasse';
$lang['Rules_edit_cannot'] = 'Do <b>meist</b> dyn berjochten <b>net</b>oanpasse';
$lang['Rules_delete_can'] = 'Do <b>meist</b> dyn berjochten fuorthelje';
$lang['Rules_delete_cannot'] = 'Do <b>meist</b> dyn berjochten <b>net</b> fuorthelje';
$lang['Rules_vote_can'] = 'Do <b>meist</b> stimme op fraachpetearkes';
$lang['Rules_vote_cannot'] = 'Do <b>meis net</b> stimme op fraachpetearkes';
$lang['Rules_moderate'] = 'Do <b>kinst</b> dit ûnderdiel %sbemasterje%s'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'Der binne noch gjin berjochten yn dit foarum<br />Klik op de <b>nij ûnderwerp</b> knop op dizze side om in berjocht te pleatsen.';


//
// Viewtopic
//
$lang['View_topic'] = 'Besjoch ûnderwerp';

$lang['Guest'] = 'Gast';
$lang['Post_subject'] = 'Underwerp';
$lang['View_next_topic'] = 'Folgjende ûnderwerp';
$lang['View_previous_topic'] = 'Foarige ûnderwerp';
$lang['Submit_vote'] = 'Bring dyn stim út';
$lang['View_results'] = 'Besjoch it risseltaat';

$lang['No_newer_topics'] = 'Der binne gjin nijere berjochten yn dit foarum';
$lang['No_older_topics'] = 'Der binne gjin âldere berjochten yn dit foarum';
$lang['Topic_post_not_exist'] = 'It ûnderwerp as berjocht datst do sikest bestiet net';
$lang['No_posts_topic'] = 'Der bin noch gjin reaksjes op dit ûnderwerp';

$lang['Display_posts'] = 'Berjochten fan ôfrûne';
$lang['All_Posts'] = 'Alle berjochten';
$lang['Newest_First'] = 'Nijste earst';
$lang['Oldest_First'] = 'Aldste earst';

$lang['Back_to_top'] = 'Nei boppe';

$lang['Read_profile'] = 'Besjoch it brûkersprofyl';
$lang['Send_email'] = 'Ferstjoer in eamel';
$lang['Visit_website'] = 'Besjoch de thússide';
$lang['ICQ_status'] = 'ICQ Status';
$lang['Edit_delete_post'] = 'Bewurkje dit berjocht as helje it fuort';
$lang['View_IP'] = 'Besjoch it IP fan dizze brûker';
$lang['Delete_post'] = 'Helje dit berjocht fuort';

$lang['wrote'] = 'schreau'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Kwote'; // comes before bbcode quote output.
$lang['Code'] = 'Koade'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Lêst oanpast troch %s op %s, ien kear bewurke'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Lêst oanpast troch %s op %s, yn totaal %d kear bewurke'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Slút dit ûnderwerp';
$lang['Unlock_topic'] = 'Iepenje dit ûnderwerp';
$lang['Move_topic'] = 'Ferpleats dit ûnderwerp';
$lang['Delete_topic'] = 'Helje dit ûnderwerp fuort';
$lang['Split_topic'] = 'Splits dit ûnderwerp';

$lang['Stop_watching_topic'] = 'Gjin abonnemint mear op dit ûnderwerp';
$lang['Start_watching_topic'] = 'Abonnemint op dit ûnderwerp';
$lang['No_longer_watching'] = 'Do bist net mear abonearre op dit ûnderwerp';
$lang['You_are_watching'] = 'Do bist abbonearre op dit ûnderwerp';

$lang['Total_votes'] = 'Totaal oantal stimmen';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Berjocht';
$lang['Topic_review'] = 'Underwerp';

$lang['No_post_mode'] = 'Der waard gjin aksje oanjûn'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Nij ûnderwerp';
$lang['Post_a_reply'] = 'Pleats reaksje';
$lang['Post_topic_as'] = 'Soart berjocht';
$lang['Edit_Post'] = 'Bewurkje berjocht';
$lang['Options'] = 'Opsjes';

$lang['Post_Announcement'] = 'Meidieling';
$lang['Post_Sticky'] = 'Plakkerke';
$lang['Post_Normal'] = 'Gewoan';

$lang['Confirm_delete'] = 'Bisto der wis fan datst do dit berjocht fuorthelje wolst?';
$lang['Confirm_delete_poll'] = 'Bisto der wis fan datst do dit fraachpetear fuorthelje wolst?';

$lang['Flood_Error'] = 'Do meist net sa rap wer in berjocht pleatse, besykje it letter jitris.';
$lang['Empty_subject'] = 'Do moatst yn alle gefallen in titel opjaan atst in nij ûnderwerp begjinne wolst.';
$lang['Empty_message'] = 'Do moatst yn alle gefallen wat te melden ha.';
$lang['Forum_locked'] = 'Dit foarum waard sletten. It pleatsen as bewurkjen fan berjochten as ûnderwerpen is net mear mooglik';
$lang['Topic_locked'] = 'Dit ûnderwerp waard sletten. It pleatsen as bewurkjen fan berjochten is net mear mooglik';
$lang['No_post_id'] = 'Der waard gjin PostID opjûn';
$lang['No_topic_id'] = 'Do moatst oanjaan op hokker ûnderwerp atst do reagearje wolst.';
$lang['No_valid_mode'] = 'Unjildige aksje.';
$lang['No_such_post'] = 'Dit berjocht bestiet net (mear)';
$lang['Edit_own_posts'] = 'It spyt ús mar do meist allinnich dyn eigen berjochten oanpasse';
$lang['Delete_own_posts'] = 'It spyt ús mar do meist allinnich dyn eigen berjochten fuorthelje';
$lang['Cannot_delete_replied'] = 'It spyt ús mar do meist gjin berjochten fuorthelje dêr\'t al op antwurde is.';
$lang['Cannot_delete_poll'] = 'It spyt ús mar do meist gjin aktive fraachpetearkes fuorthelje';
$lang['Empty_poll_title'] = 'Do moatst in titel foar dyn fraachpetearke opjaan.';
$lang['To_few_poll_options'] = 'Der moat minimaal in kar út twa wêze.';
$lang['To_many_poll_options'] = 'Do hast tefolle mooglikheden opjûn.';
$lang['Post_has_no_poll'] = 'Dit ûnderwerp hat gjin fraachpetearke.';
$lang['Already_voted'] = 'Do hast dyn stim al útbrocht.';
$lang['No_vote_option'] = 'Do moatst in kar meitsje atst stimme wolst.';

$lang['Add_poll'] = 'Heakje in fraachpetearke ta.';
$lang['Add_poll_explain'] = 'Wolsto gjin fraachpetearke taheakje? Lit dizze fjilden dan leech.';
$lang['Poll_question'] = 'Fraachpetearke';
$lang['Poll_option'] = 'Antwurdmooglikheid';
$lang['Add_option'] = 'Heakje in antwurd ta';
$lang['Update'] = 'Bywurkje';
$lang['Delete'] = 'Fuorthelje';
$lang['Poll_for'] = 'Fraachpetearke bliuwt jildich foar';
$lang['Days'] = 'dagen'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Leech litte as 0 ynfolje by ûneinich ]';
$lang['Delete_poll'] = 'Fraachpetearke fuorthelje';

$lang['Disable_HTML_post'] = 'Skeakelje HTML út yn dit berjocht';
$lang['Disable_BBCode_post'] = 'Skeakelje BBCode út yn dit berjocht';
$lang['Disable_Smilies_post'] = 'Skeakelje emoasjeikoantsjes út yn dit berjocht';

$lang['HTML_is_ON'] = 'HTML is <u>OAN</u>';
$lang['HTML_is_OFF'] = 'HTML is <u>UT</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s is <u>OAN</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s is <u>UT</u>';
$lang['Smilies_are_ON'] = 'Emoasje ikoantsjes stean <u>OAN</u>';
$lang['Smilies_are_OFF'] = 'Emoasje ikoantsjes stean <u>UT</u>';

$lang['Attach_signature'] = 'Underskrift brûke (ûnderskrift kin oanpast wurde yn it profyl)';
$lang['Notify'] = 'Warskôgje at immen reageart';
$lang['Delete_post'] = 'Helje dit berjocht fuort';

$lang['Stored'] = 'Dyn berjocht waard pleatst';
$lang['Deleted'] = 'Dyn berjocht waard fuorthelle';
$lang['Poll_delete'] = 'It fraachpetear is fuorthelle';
$lang['Vote_cast'] = 'Dyn kar waard opnaam';

$lang['Topic_reply_notification'] = 'Melding by it pleatsen fan in reaksje';

$lang['bbcode_b_help'] = 'Fette tekst: [b]tekst[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Skeane tekst: [i]tekst[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Understreke tekst: [u]tekst[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Kwote tekst: [quote]tekst[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Koade werjefte: [code]code[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'List: [list]tekst[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Oardene list: [list=]tekst[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Ofbylding: [img]http://www.phpbb.nl/fotos/foto.jpg[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Ferwizing: [url]http://www.phpbb.nl/[/url] as [url=http://www.phpbb.nl/]Dit is in ferwizing[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Alle iepen BBKoade tags slute';
$lang['bbcode_s_help'] = 'Letter kleur: [color=red]tekst[/color]  Tip: Do kinst ek dizze koades brûke: =#FF0000';
$lang['bbcode_f_help'] = 'Letter grutte: [size=small]Lytse tekst[/size]';

$lang['Emoticons'] = 'Emoasje ikoantsjes';
$lang['More_emoticons'] = 'Mear emoasje ikoantsjes';

$lang['Font_color'] = 'Letter kleur';
$lang['color_default'] = 'Standert';
$lang['color_dark_red'] = 'Donkerread';
$lang['color_red'] = 'Read';
$lang['color_orange'] = 'Oranje';
$lang['color_brown'] = 'Brún';
$lang['color_yellow'] = 'Giel';
$lang['color_green'] = 'Grien';
$lang['color_olive'] = 'Oliif';
$lang['color_cyan'] = 'Syaan';
$lang['color_blue'] = 'Blau';
$lang['color_dark_blue'] = 'Donkerblau';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'Fiolet';
$lang['color_white'] = 'Wyt';
$lang['color_black'] = 'Swart';

$lang['Font_size'] = 'Letter grutte';
$lang['font_tiny'] = 'Hiel lyts';
$lang['font_small'] = 'Lyts';
$lang['font_normal'] = 'Gewoan';
$lang['font_large'] = 'Grut';
$lang['font_huge'] = 'Hiel grut';

$lang['Close_Tags'] = 'Slút tags';
$lang['Styles_tip'] = 'Tip: BBKoade kin ek tapast wurde op selektearre tekst';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Privee berjochten';

$lang['Login_check_pm'] = 'Loch yn om dyn privee berjochten te besjen';
$lang['New_pms'] = 'Do hast %d nije berjochten'; // You have 2 new messages
$lang['New_pm'] = 'Do hast %d nij berjocht'; // You have 1 new message
$lang['No_new_pm'] = 'Do hast gjin nije berjochten';
$lang['Unread_pms'] = 'Do hast %d net lêzen berjochten';
$lang['Unread_pm'] = 'Do hast %d net lêzen berjocht';
$lang['No_unread_pm'] = 'Do hast alle berjochten lêzen';
$lang['You_new_pm'] = 'Do hast in nij privee berjocht yn dyn ynboks';
$lang['You_new_pms'] = 'Do hast nije privee berjochten yn dyn ynboks';
$lang['You_no_new_pm'] = 'Do hast gjin nije privee berjochten yn dyn ynboks';

$lang['Unread_message'] = 'Net lêzen berjocht';
$lang['Read_message'] = 'Lêzen berjocht';

$lang['Read_pm'] = 'Lês berjocht';
$lang['Post_new_pm'] = 'Pleats berjocht';
$lang['Post_reply_pm'] = 'Beantwurdzje berjocht';
$lang['Post_quote_pm'] = 'Kwote berjocht';
$lang['Edit_pm'] = 'Bewurkje berjocht';

$lang['Inbox'] = 'Ynboks';
$lang['Outbox'] = 'Utboks';
$lang['Savebox'] = 'Bewarboks';
$lang['Sentbox'] = 'Ferstjoerdboks';
$lang['Flag'] = 'Merk oan';
$lang['Subject'] = 'Underwerp';
$lang['From'] = 'Fan';
$lang['To'] = 'Oan';
$lang['Date'] = 'Datum';
$lang['Mark'] = 'Merk oan';
$lang['Sent'] = 'Ferstjoerd';
$lang['Saved'] = 'Bewarre';
$lang['Delete_marked'] = 'Selektearre berjochten fuorthelje';
$lang['Delete_all'] = 'Alle berjochten fuorthelje';
$lang['Save_marked'] = 'Bewarje selektearre berjochten';
$lang['Save_message'] = 'Bewarje berjocht';
$lang['Delete_message'] = 'Berjocht fuorthelje';

$lang['Display_messages'] = 'Besjoch berjochten fan de ôfrûne'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Alle berjochten';

$lang['No_messages_folder'] = 'Do hast gjin berjochten yn dizze map';

$lang['PM_disabled'] = 'Privee berjochten bin útskeakele op dit foarum ';
$lang['Cannot_send_privmsg'] = 'De behearder hat der foar soarge datsto gjin privee berjochten mear ferstjoere kinst';
$lang['No_to_user'] = 'Do moatst in brûkersnamme opjaan om in berjocht te ferstjoeren';
$lang['No_such_user'] = 'It spyt ús, dizze brûker bestiet net';

$lang['Disable_HTML_pm'] = 'Gjin HTML yn dit berjocht';
$lang['Disable_BBCode_pm'] = 'Gjin BBKoade yn dit berjocht';
$lang['Disable_Smilies_pm'] = 'Gjin emoasje ikoantsjes yn dit berjocht';

$lang['Message_sent'] = 'Dyn berjocht waard ferstjoerd';

$lang['Click_return_inbox'] = 'Klik %shjir%s om werom te gean nei dyn ynboks';
$lang['Click_return_index'] = 'Klik %shjir%s om werom te gean nei de haadside';

$lang['Send_a_new_message'] = 'Stjoer in privee berjocht';
$lang['Send_a_reply'] = 'Beantwurdzje in privee berjocht';
$lang['Edit_message'] = 'Bewurkje in privee berjocht';

$lang['Notification_subject'] = 'Der is in nij berjocht';

$lang['Find_username'] = 'Sykje in brûker';
$lang['Find'] = 'Sykje';
$lang['No_match'] = 'Gjin risseltaat fûn';

$lang['No_post_id'] = 'Der waard gjin PostID opjûn';
$lang['No_such_folder'] = 'Dizze map bestiet net';
$lang['No_folder'] = 'Gjin map oanjûn';

$lang['Mark_all'] = 'Selektearje alles';
$lang['Unmark_all'] = 'Selektearje neat';

$lang['Confirm_delete_pm'] = 'Bisto der wis fan datst dit berjocht fuorthelje wolst?';
$lang['Confirm_delete_pms'] = 'Bisto der wis fan datst dizze berjochten fuorthelje wolst?';

$lang['Inbox_size'] = 'Dyn ynboks is foar %d%% fol'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Dyn ferstjoerdboks is foar %d%% fol';
$lang['Savebox_size'] = 'Dyn opslachboks is foar %d%% fol';

$lang['Click_view_privmsg'] = 'Klik %shjir%s om nei dyn ynboks te gean';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Profyl fan :: %s'; // %s is username
$lang['About_user'] = 'Alles oer %s'; // %s is username

$lang['Preferences'] = 'Foarkar';
$lang['Items_required'] = 'Underdielen mei in * bin ferplicht';
$lang['Registration_info'] = 'Registraasje ynformaasje';
$lang['Profile_info'] = 'Profyl ynformaasje';
$lang['Profile_info_warn'] = 'Dizze ynformaasje is te besjen troch oare brûkers';
$lang['Avatar_panel'] = 'Plaatsjes paniel';
$lang['Avatar_gallery'] = 'Plaatsjes gallerij';

$lang['Website'] = 'Thússide';
$lang['Location'] = 'Wenplak';
$lang['Contact'] = 'Kontakt';
$lang['Email_address'] = 'Eameladres';
$lang['Email'] = 'Eamel';
$lang['Send_private_message'] = 'Ferstjoer privee berjocht';
$lang['Hidden_email'] = '[ Ferburgen ]';
$lang['Search_user_posts'] = 'Sykje alle berjochten fan %s';
$lang['Interests'] = 'Ynteresses';
$lang['Occupation'] = 'Berop';
$lang['Poster_rank'] = 'Rang';

$lang['Total_posts'] = 'Totaal berjochten';
$lang['User_post_pct_stats'] = '%.2f%% fan it totaal'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f berichten per dei'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Sykje alle berjochten fan %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'It spyt ús mar dizze brûker bestiet net';
$lang['Wrong_Profile'] = 'Do kinst allinnich dyn eigen profyl bywurkje';

$lang['Only_one_avatar'] = 'Do kinst mar ien soart plaatsje brûke';
$lang['File_no_data'] = 'It troch dy opjûne bestân liket leech te wêzen.';
$lang['No_connection_URL'] = 'Der kin gjin ferbining fûn wurde mei de troch dy opjûne server';
$lang['Incomplete_URL'] = 'De troch dy opjûne ferwizing is net folslein';
$lang['Wrong_remote_avatar_format'] = 'De troch dy opjûne ferwizing is net jildich';
$lang['No_send_account_inactive'] = 'It spyt ús mar dyn wachtwurd kin net opfrege wurde omt dyn brûkersnamme blokkeart is. Nim kontakt op mei de foarum behearder foar mear ynformaasje';

$lang['Always_smile'] = 'Gebrûk altyd emoasje ikoantsjes';
$lang['Always_html'] = 'Gebrûk altyd HTML';
$lang['Always_bbcode'] = 'Gebrûk altyd BBKoade';
$lang['Always_add_sig'] = 'Gebrûk altyd in ûnderskrift';
$lang['Always_notify'] = 'Bring my standaard op de hichte fan reaksjes';
$lang['Always_notify_explain'] = 'Stjoert in eamel at immen reageart op in ûnderwerp dêr\'tst do ek yn skreaun hast. Dit kin altyd feroare wurde atst in berjocht pleatst.';

$lang['Board_style'] = 'Foarum styl';
$lang['Board_lang'] = 'Foarum taal';
$lang['No_themes'] = 'Gjin tema yn de databank';
$lang['Timezone'] = 'Tiidsône';
$lang['Date_format'] = 'Datum sjen litte';
$lang['Date_format_explain'] = 'De syntaks dy\'t brûkt wurdt is gelyk oan de syntaks fan de PHP funksje <a href=\"http://nl.php.net/manual/nl/function.date.php\" target=\"_other\">date()</a>';
$lang['Signature'] = 'Underschrift';
$lang['Signature_explain'] = 'Dit is in stikje tekst dat ûnder dyn berjochten komt te stean. Der is in limyt fan %d tekens.';
$lang['Public_view_email'] = 'Elkenien mei myn eameladres sjen';

$lang['Current_password'] = 'Notiidske wachtwurd';
$lang['New_password'] = 'Nije wachtwurd';
$lang['Confirm_password'] = 'Befestigje wachtwurd';
$lang['Confirm_password_explain'] = 'Do moatst dyn notiidske wachtwurd ynfolje atst dyn wachtwurd en/as dyn eameladres oanpasse wolst';
$lang['password_if_changed'] = 'Folje allinnich in wachtwurd yn atst it feroarje wolst';
$lang['password_confirm_if_changed'] = 'Do hoechst allinnich dyn wachtwurd te befestigjen atst it feroarje wolst.';

$lang['Avatar'] = 'Plaatsje';
$lang['Avatar_explain'] = 'Lit in lyts plaatsje sjen ûnder dyn namme by elk berjocht. Do kinst mar ien ôfbylding tagelyk brûke, de breedte mei net mear as %d piksels wêze, de hichte moat ûnder de %d piksels bliuwe. De maksimale bestânsgrutte is %dKB';
$lang['Upload_Avatar_file'] = 'Helje it plaatsje fan myn kompjûter';
$lang['Upload_Avatar_URL'] = 'Helje it plaatsje fan in ynternetlokaasje (URL)';
$lang['Upload_Avatar_URL_explain'] = 'Jou de URL wêr\'t dyn plaatsje stiet, de ôfbylding sil kopieard wurde nei dizze side.';
$lang['Pick_local_Avatar'] = 'Selektearje in plaatsje út de galerij';
$lang['Link_remote_Avatar'] = 'Brûk in plaatsje fan in oare side';
$lang['Link_remote_Avatar_explain'] = 'Jou de URL fan it plaatsje dat op in oare side stiet.';
$lang['Avatar_URL'] = 'URL fan it plaatsje';
$lang['Select_from_gallery'] = 'Selektearje in plaatsje út de galerij';
$lang['View_avatar_gallery'] = 'Besjoch de galerij';

$lang['Select_avatar'] = 'Selektearje in plaatsje';
$lang['Return_profile'] = 'Ofbrekke';
$lang['Select_category'] = 'Selektearje kattegoary';

$lang['Delete_Image'] = 'Helje plaatsje fuort';
$lang['Current_Image'] = 'Notiidsk plaatsje';

$lang['Notify_on_privmsg'] = 'Bring my op \'e hichte wannear\'t ik nije privee berjochten haw';
$lang['Popup_on_privmsg'] = 'Lit in pop-up sjen wannear\'t ik nije privee berjochten haw';
$lang['Popup_on_privmsg_explain'] = 'Guon templates iepenje in nij skerm (pop-up) wannear\'t der nije privee berjochten binne';
$lang['Hide_user'] = 'Net te sjen yn \'Online brûkers\' list';

$lang['Profile_updated'] = 'Dyn profyl is bugewurke';
$lang['Profile_updated_inactive'] = 'Dyn profyl is bugewurke, mar do hast wichtige ynformaasje oanpast wêrtroch\'t dyn brûkersnamme tydlik net te brûken is. Besjoch dyn eamel om te sjen hoe\'t dyn brûkersnamme wer aktyf wurdt, as wannear\'t dit troch in behearder dien is. wachtsje dan oant de behearder dit foar dy dien hat.';

$lang['Password_mismatch'] = 'Dyn wachtwurden binne net gelyk.';
$lang['Current_password_mismatch'] = 'It wachtwurd datst brûkt hast komt net oerien mei dat yn ús databank.';
$lang['Password_long'] = 'Dyn wachtwurd mei út maksimaal 32 tekens bestean';
$lang['Username_taken'] = 'It spyt ús mar dizze nammme is al yn gebrûk.';
$lang['Username_invalid'] = 'It spyt ús mar yn dizze brûkersnamme sit ien as mear ûnjildige tekens lykas  \"';
$lang['Username_disallowed'] = 'It spyt ús mar dizze brûkersnamme is net tastien';
$lang['Email_taken'] = 'It spyt ús mar dit eameladres wurdt al brûkt troch in oar';
$lang['Email_banned'] = 'It spyt ús mar dit eameladres krijt gjin tagong mear op dit foarum';
$lang['Email_invalid'] = 'It spyt ús mar dit eameladres is net jildich';
$lang['Signature_too_long'] = 'Dyn ûnderskrift is te lang';
$lang['Fields_empty'] = 'Do moatst alle ferplichte fjilden ynfolje';
$lang['Avatar_filetype'] = 'It plaatsje moat in .jpg, .gif as .png wêze';
$lang['Avatar_filesize'] = 'It plaatsje moat minder as %dKB grut wêze'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = 'It plaatsje moat minder as %d piksels breed en %d piksels heech wêze';

$lang['Welcome_subject'] = 'Wolkom op %s '; // Welcome to my.com forums
$lang['New_account_subject'] = 'Nije brûker';
$lang['Account_activated_subject'] = 'brûkersnamme aktivearre';

$lang['Account_added'] = 'Dankewol foar it registrearjen. Dyn brûkersnamme is oanmakke. Do kinst no ynlogge mei dyn wachtwurd';
$lang['Account_inactive'] = 'Dyn brûkersnamme is oanmakke mar moat noch efkes aktivearre wurde. In spesjale aktivearringskoade waard opstjoerd nei it troch dy opjûne eameladres. Kontrolearje dyn eamel foar mear ynformaasje';
$lang['Account_inactive_admin'] = 'Dyn brûkersnamme is oanmakke mar dizze moat noch troch in behearder aktivearre wurde. Sa gau at dit bart is wurdt der kontakt mei dy opnaam.';
$lang['Account_active'] = 'Dyn brûkersnamme is aktivearre, bedankt foar de registraasje';
$lang['Account_active_admin'] = 'De brûkersnamme waard aktivearre';
$lang['Reactivate'] = 'Do moatst dyn brûkersnamme oppenij aktivearje!';
$lang['Already_activated'] = 'Dyn brûkersnamme is al aktivearre';
$lang['COPPA'] = 'Dyn brûkersnamme is al oanmakke mar moat noch goedkard wurde, hâld dyn eamel yn de gaten foar mear ynformaasje.';

$lang['Registration'] = 'Registraasje foarwaarden';
$lang['Reg_agreement'] = 'De behearder en de masters fan dizze side sille besykje net winske materiaal sa rap mooglik fan de side te heljen. It is allinnich net mooglik om elk berjocht te kontrolearjen. Troch yn te stimmen mei de foarwaarden fan dit foarum erkenst do dat alle berjochten op dit foarum de mieningen en gesichtspunten fan de brûkers binne en net fan de behearders, masters as webmasters (útsein de troch harren pleatste berjochten). De behearders kin net oanspraaklik stelt wurde foar de ynhâld fan de berjochten.<br /><br />Do joust fierder oan datst gjin kwetsende, obsene, fulgêre, lasterlikke, haatdragende, bedriigjende, seksueel-orriëntearre berjochten pleatse silst. Fierder moatst dy hâlde oan de wetten en regels fan dit foarum. Wannear\'tst dy net hâldst oan dizze foarwaarden as de oanwizings fan it behear wurde net opfolge dan kinsto fuortdaalks en foar altyd útsluten wurde en sil wy faaks ek dyn provider op de hichte stelle fan dyn gedrach. It IP adres fan dyn kompjûter wurdt by elk berjocht opslein om it behear fan de side te ferienfâldigjen. Fierder bewarret it systeem koekjes op dyn kompjûter. Dizze koekjes befetsje gjin gegevens út dyn profyl. Troch dizze foarwaarden te akseptearjen stimst der mei yn dat dizze gegevens byhâlden wurde. Dizze ynformaasje sil net oan tredde partijen trochjûn wurde sûnder dyn tastimming. De behearders fan dizze side bin net oanspraaklik foar mooglike hackpogings dy\'t it gefolch binne fan it eventueel bekend wurden fan dizze ynformaasje.<br /><br />De behearders fan de side hawwe it rjocht om alle berjochten fuort te heljen, te bewurkjen as fan plak te feroarjen. Dêrneist hawwe hja it rjocht om ûnderwerpen en foara te sluten op it momint dat hja dat needsaaklik achtsje. It troch dy opjûne eameladres wurdt allinnich brûkt foar it ferstjoeren fan dyn wachtwurd en it ferstjoeren fan in nij wachtwurd wannear\'tst dyn wachtwurd fergetten bist.<br >';

$lang['Agree_under_13'] = 'Ik stim yn mei dizze foarwaarden en bin <b>jonger</b> as 13 jier';
$lang['Agree_over_13'] = 'Ik stim yn mei dizze foarwaarden en bin <b>âlder</b> as 13 jier';
$lang['Agree_not'] = 'Ik bin it net iens mei de foarwaarden';

$lang['Wrong_activation'] = 'De aktivearringskoade is net goed';
$lang['Send_password'] = 'Stjoer my in nij wachtwurd';
$lang['Password_updated'] = 'In nij wachtwurd waard oanmakke, besjoch dyn eamel foar mear gegevens oer hoe\'t dizze aktivearre wurde kin';
$lang['No_email_match'] = 'It eameladres komt net oerien mei it adres dat by ús bekend is foar dizze brûker.';
$lang['New_password_activation'] = 'Nij wachtwurd aktivearring';
$lang['Password_activated'] = 'Dyn brûkersnamme is oppenij aktivearre. Meitsje gebrûk fan it nije wachtwurd datst krigen hast om yn te loggen.';

$lang['Send_email_msg'] = 'Ferstjoert in eameltsje';
$lang['No_user_specified'] = 'Gjin brûker oanjûn';
$lang['User_prevent_email'] = 'Dizze brûker winsket gjin eamels te ûntfangen, besykje it ris mei in priveeberjocht';
$lang['User_not_exist'] = 'Dizze brûker bestiet net';
$lang['CC_email'] = 'Stjoer dysels in kopy fan dit eameltsje';
$lang['Email_message_desc'] = 'Dit berjocht wurd ferstjoerd as ienfâldige tekst, meitsje gjin gebrûk fan HTML as BBKOADE. It antwurd adres wurdt dyn eigen eameladres.';
$lang['Flood_email_limit'] = 'Do kinst noch gjin nije eamel ferstjoere, besykje it letter jitris';
$lang['Recipient'] = 'Adressearde';
$lang['Email_sent'] = 'De eamel waard ferstjoerd';
$lang['Send_email'] = 'Ferstjoer eamel';
$lang['Empty_subject_email'] = 'Do moatst in ûnderwerp ynfolje';
$lang['Empty_message_email'] = 'Do moatst in berjocht ynfolje';

//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'De ynfierde befestigingskoade is net goed';
$lang['Too_many_registers'] = 'Do hast op dit stuit te faak besocht te registrearjen. Besykje it letter jitris.';
$lang['Confirm_code_impaired'] = 'Wannear\'tst do de befestigingskoade net goed lêze kinst, nim dan kontakt op mei de %sAdministrator%s.';
$lang['Confirm_code'] = 'Befestigingskoade';
$lang['Confirm_code_explain'] = 'Nim de koade eksakt oer. Tink om de haadletters, in nul is trochstreke mei in skeane line.';

//
// Memberslist
//
$lang['Select_sort_method'] = 'Kies sortear folchoarder';
$lang['Sort'] = 'Sortearje';
$lang['Sort_Top_Ten'] = 'Top tsien ynstjoerders';
$lang['Sort_Joined'] = 'Oanmeld datum';
$lang['Sort_Username'] = 'brûkersnamme';
$lang['Sort_Location'] = 'Wenplak';
$lang['Sort_Posts'] = 'Pleatste berjochten';
$lang['Sort_Email'] = 'Eamel';
$lang['Sort_Website'] = 'Thússide';
$lang['Sort_Ascending'] = 'Oprinnend';
$lang['Sort_Descending'] = 'Ofrinnend';
$lang['Order'] = 'Folchoarder';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Groepen oersjoch';
$lang['Group_member_details'] = 'Groepslid details';
$lang['Group_member_join'] = 'Wurdt lid fan in groep';

$lang['Group_Information'] = 'Groepsynformaasje';
$lang['Group_name'] = 'Groepsnamme';
$lang['Group_description'] = 'Groepsomskriuwing';
$lang['Group_membership'] = 'Groepslidmaatskip';
$lang['Group_Members'] = 'Groepsleden';
$lang['Group_Moderator'] = 'Groepsmaster';
$lang['Pending_members'] = 'Noch net talitten brûkers';

$lang['Group_type'] = 'Groepstype';
$lang['Group_open'] = 'Iepen groep';
$lang['Group_closed'] = 'Sletten groep';
$lang['Group_hidden'] = 'Ferburgen groep';

$lang['Current_memberships'] = 'Notiidske leden';
$lang['Non_member_groups'] = 'Net-leden groep';
$lang['Memberships_pending'] = 'Lidmaatskip yn oanfraach';

$lang['No_groups_exist'] = 'Der binne gjin groepen';
$lang['Group_not_exist'] = 'Dy groep bestiet net';

$lang['Join_group'] = 'Wurd lid';
$lang['No_group_members'] = 'Dizze groep hat gjin leden';
$lang['Group_hidden_members'] = 'Dizze groep is ferburgen, do kinst de ledelyst net besjen';
$lang['No_pending_group_members'] = 'Dizze groep hat gjin wachtsjende leden';
$lang['Group_joined'] = 'Do hast dy súksesfol oanmeld foar dizze groep.<br />Wannear\'t de groepsmaster dyn oanmelding goedkard krijsto dêrfan berjocht.';
$lang['Group_request'] = 'Fersyk om ta te treden ta in groep';
$lang['Group_approved'] = 'Dyn oanmelding is goedkard';
$lang['Group_added'] = 'Do bist taheakke oan dizze groep';
$lang['Already_member_group'] = 'Do bist al lid fan dizze groep';
$lang['User_is_member_group'] = 'brûker is al lid fan dizze groep';
$lang['Group_type_updated'] = 'Groepstype is feroare';

$lang['Could_not_add_user'] = 'De opjûne brûkersnamme bestiet net';
$lang['Could_not_anon_user'] = 'Anonime brûkers kinne net lid wurde fan in groep';

$lang['Confirm_unsub'] = 'Bisto der wis fan datst dy ôfmelde wolst foar dizze groep?';
$lang['Confirm_unsub_pending'] = 'Dyn oanmelding foar dizze groep waard noch net goedkard, bist der wol wis fan datst dy no al wer ôfmelde wolst?';

$lang['Unsub_success'] = 'Do makkest net langer diel út fan dizze groep.';

$lang['Approve_selected'] = 'Selektearre brûkers talitte';
$lang['Deny_selected'] = 'Selektearre brûkers ôfwize';
$lang['Not_logged_in'] = 'Do moatst ynlogd wêze om lid te wurden.';
$lang['Remove_selected'] = 'Selektearre brûkers fuorthelje';
$lang['Add_member'] = 'Lid taheakje';
$lang['Not_group_moderator'] = 'Do bist net de master fan dizze groep, dêrom is dizze aksje yn dyn gefal net tastien.';

$lang['Login_to_join'] = 'Loch yn om lid te wurden as om de groep te behearen';
$lang['This_open_group'] = 'Dit is in iepen groep, klik om lid te wurden';
$lang['This_closed_group'] = 'Dit is in sletten groep, der wurde gjin nije brûkers akseptearre';
$lang['This_hidden_group'] = 'Dit is een ferburgen groep, it automatysk taheakjen fan brûkers is útskeakele';
$lang['Member_this_group'] = 'Do bist lid fan dizze groep';
$lang['Pending_this_group'] = 'Dyn lidmaatskip is noch net goedkard';
$lang['Are_group_moderator'] = 'Do bist de groepsmaster';
$lang['None'] = 'Gjin';

$lang['Subscribe'] = 'Oanmelde';
$lang['Unsubscribe'] = 'Ofmelde';
$lang['View_Information'] = 'Besjoch gegevens';


//
// Search
//
$lang['Search_query'] = 'Sykopdracht';
$lang['Search_options'] = 'Sykmooglikheden';

$lang['Search_keywords'] = 'Sykje op kaaiwurden';
$lang['Search_keywords_explain'] = 'Do kinst <u>AND</u> brûke om wurden oan te jaan dy\'t yn it risseltaat foarkomme MOATTE, <u>OR</u> om wurden oan te jaan dy\'t foarkomme MEIE yn it risseltaat as <u>NOT</u> om wurden oan te jaan dy\'t NET yn it risseltaat foarkomme meie. Gebrûk in * (wylde kaart) om te sykjen op in part fan in wurd.';
$lang['Search_author'] = 'Sykje op de skriuwer';
$lang['Search_author_explain'] = 'Gebrûk in * (wylde kaart) om op in part fan in namme te sykjen';

$lang['Search_for_any'] = 'Sykje op <i>ien</i> fan de wurden as meitsje gebrûk fan AND, OR en NOT';
$lang['Search_for_all'] = 'Sykje op <i>alle</i> wurden';
$lang['Search_title_msg'] = 'Sykje yn berjochten, titels en tekst';
$lang['Search_msg_only'] = 'Sykje allinnich yn de tekst';

$lang['Return_first'] = 'Besjoch de foarste'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'tekens fan it berjocht';

$lang['Search_previous'] = 'Sykje yn de foargeande'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Sortearje op';
$lang['Sort_Time'] = 'Pleatsingstiid';
$lang['Sort_Post_Subject'] = 'Titel reaksje';
$lang['Sort_Topic_Title'] = 'Titel ûnderwerp';
$lang['Sort_Author'] = 'Skriuwer';
$lang['Sort_Forum'] = 'Underwerp';

$lang['Display_results'] = 'Toan de risseltaten as';
$lang['All_available'] = 'Alle foarums';
$lang['No_searchable_forums'] = 'Do hast net it rjocht om in sykaksje út te fieren';

$lang['No_search_match'] = 'Der waarden gjin risseltaten fûn dy\'t foldogge oan dyn sykopdracht';
$lang['Found_search_match'] = '%d risseltaat fûn'; // eg. Search found 1 match
$lang['Found_search_matches'] = '%d risseltaten fûn'; // eg. Search found 24 matches
$lang['Search_Flood_Error'] = 'It is net mooglik om sa rap nei elkoar in sykopdracht te jaan; Wachtsje efkes in momintsje en besykje it dan jitris.';

$lang['Close_window'] = 'Slút dit finster';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'It spyt ús, allinnich %s kinne meidielings pleatse yn dit foarum';
$lang['Sorry_auth_sticky'] = 'It spyt ús, allinnich %s kinne fan berjochten plakkerkes meitsje yn dit foarum';
$lang['Sorry_auth_read'] = 'It spyt ús, allinnich %s kinne ûnderwerpen lêze yn dit foarum';
$lang['Sorry_auth_post'] = 'It spyt ús, allinnich %s kinne berjochten pleatse yn dit foarum';
$lang['Sorry_auth_reply'] = 'It spyt ús, allinnich %s kinne reagearje op berjochten yn dit foarum';
$lang['Sorry_auth_edit'] = 'It spyt ús, allinnich %s kinne berjochten bewurkje yn dit forum';
$lang['Sorry_auth_delete'] = 'It spyt ús, allinnich %s kinne berjochten fuorthelje yn dit foarum';
$lang['Sorry_auth_vote'] = 'It spyt ús, allinnich %s kinne stimme op fraachpetearkes yn dit foarum';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>anonime brûker</b>';
$lang['Auth_Registered_Users'] = '<b>registrearre brûkers</b>';
$lang['Auth_Users_granted_access'] = '<b>brûkers mei spesjale tagongsrjochten</b>';
$lang['Auth_Moderators'] = '<b>masters</b>';
$lang['Auth_Administrators'] = '<b>behearders</b>';

$lang['Not_Moderator'] = 'Do bist gjin master op dit forum';
$lang['Not_Authorised'] = 'Gjin tagong';

$lang['You_been_banned'] = 'Do bist net langer wolkom op dit foarum.<br />Nim kontakt op mei de behearder as de webmaster foar mear ynformaasje.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Der binne 0 registrearre en '; // There ae 5 Registered and
$lang['Reg_users_online'] = 'Der binne %d registrearre en '; // There ae 5 Registered and
$lang['Reg_user_online'] = 'Der binne %d registrearre en '; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = '0 ferburgen brûkers oanwêzich'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d ferburgen brûkers oanwêzich'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d ferburgen brûker oanwêzich'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Der binne %d gasten oanwêzich'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Der binne gjin gasten oanwêzich'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Der is %d gast oanwêzich'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Der bin op dit stuit gjin brûkers oanwêzich';

$lang['Online_explain'] = 'Dizze list toant de brûkers dy\'t yn de foargeande 5 minuten aktyf wiene';

$lang['Forum_Location'] = 'Foarum lokaasje';
$lang['Last_updated'] = 'Lêste feroaring';

$lang['Forum_index'] = 'Foarum yndeks';
$lang['Logging_on'] = 'Ynlogge';
$lang['Posting_message'] = 'Berjocht pleatse';
$lang['Searching_forums'] = 'Trochsykje fan foarums';
$lang['Viewing_profile'] = 'Profyl toane';
$lang['Viewing_online'] = 'Oanwêzige brûkers toane';
$lang['Viewing_member_list'] = 'Brûkerslist toane';
$lang['Viewing_priv_msgs'] = 'Privee berjochten toane';
$lang['Viewing_FAQ'] = 'FFS toane';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Master kontrôlepaneel';
$lang['Mod_CP_explain'] = 'Mei dit formulier is it mooglik om grutskealige oanpassings te meitsjen yn dit foarum. Do kinst elts ûnderwerp slute, iepenje, ferpleatse as fuorthelje';

$lang['Select'] = 'Selektearje';
$lang['Delete'] = 'Fuorthelje';
$lang['Move'] = 'Ferpleatse';
$lang['Lock'] = 'Slute';
$lang['Unlock'] = 'Iepenje';

$lang['Topics_Removed'] = 'De selektearre ûnderwerpen bin fuorthelle út de databank.';
$lang['Topics_Locked'] = 'De selektearre ûnderwerpen binne sletten';
$lang['Topics_Moved'] = 'De selektearre ûnderwerpen waarden ferpleatst';
$lang['Topics_Unlocked'] = 'De selektearre ûnderwerpen waarden iepene';
$lang['No_Topics_Moved'] = 'Der bin gjin ûnderwerpen ferpleatst';

$lang['Confirm_delete_topic'] = 'Bisto der wis fan datst de selektearre ûnderwerpen fuorthelje wolst?';
$lang['Confirm_lock_topic'] = 'Bisto der wis fan datst de selektearre ûnderwerpen slute wolst?';
$lang['Confirm_unlock_topic'] = 'Bisto der wis fan datst de selektearre ûnderwerpen iepenje wolst?';
$lang['Confirm_move_topic'] = 'Bisto der wis fan datst de selektearre ûnderwerpen ferpleatse wolst?';

$lang['Move_to_forum'] = 'Ferpleats nei foarum';
$lang['Leave_shadow_topic'] = 'Lit in ferwizing efter op it âlde foarum';

$lang['Split_Topic'] = 'Kontrôlepaneel foar it opdielen fan ûnderwerpen';
$lang['Split_Topic_explain'] = 'Mei it ûndersteande formulier kinsto in ûnderwerp opdiele. Dit kin troch it apart selektearjen fan de bydragen as troch op te dielen op it plak fan de selektearre bydrage.';
$lang['Split_title'] = 'Titel nij ûnderwerp';
$lang['Split_forum'] = 'Foarum foar nij ûnderwerp';
$lang['Split_posts'] = 'Diel selektearre berjochten op';
$lang['Split_after'] = 'Diel fanôf selektearre berjocht op';
$lang['Topic_split'] = 'It ûnderwerp waard mei súkses opdield';

$lang['Too_many_error'] = 'Do hast tefolle berjochten selektearre. Do kinst mar ien berjocht selektearje om in ûnderwerp nei dit berjocht op te dielen!';

$lang['None_selected'] = 'Do hast gjin inkeld ûnderdiel selektearre om dizze aksje op út te fieren. Gean werom en selektearje op syn minst 1 ûnderwerp.';
$lang['New_forum'] = 'Nij part';

$lang['This_posts_IP'] = 'IP foar dit berjocht';
$lang['Other_IP_this_user'] = 'Oare IP\'s dêr\'t dizze brûker gebrûk fan makke hat';
$lang['Users_this_IP'] = 'Berjochten fan brûkers op dit IP';
$lang['IP_info'] = 'IP Ynformaasje';
$lang['Lookup_IP'] = 'Sykje it IP op';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Tiiden binne yn %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 oeren';
$lang['-11'] = 'GMT - 11 oeren';
$lang['-10'] = 'GMT - 10 oeren';
$lang['-9'] = 'GMT - 9 oeren';
$lang['-8'] = 'GMT - 8 oeren';
$lang['-7'] = 'GMT - 7 oeren';
$lang['-6'] = 'GMT - 6 oeren';
$lang['-5'] = 'GMT - 5 oeren';
$lang['-4'] = 'GMT - 4 oeren';
$lang['-3.5'] = 'GMT - 3.5 oere';
$lang['-3'] = 'GMT - 3 oeren';
$lang['-2'] = 'GMT - 2 oeren';
$lang['-1'] = 'GMT - 1 oere';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 oere';
$lang['2'] = 'GMT + 2 oeren';
$lang['3'] = 'GMT + 3 oeren';
$lang['3.5'] = 'GMT + 3.5 oere';
$lang['4'] = 'GMT + 4 oeren';
$lang['4.5'] = 'GMT + 4.5 oere';
$lang['5'] = 'GMT + 5 oeren';
$lang['5.5'] = 'GMT + 5.5 oere';
$lang['6'] = 'GMT + 6 oeren';
$lang['6.5'] = 'GMT + 6.5 oere';
$lang['7'] = 'GMT + 7 oeren';
$lang['8'] = 'GMT + 8 oeren';
$lang['9'] = 'GMT + 9 oeren';
$lang['9.5'] = 'GMT + 9.5 oere';
$lang['10'] = 'GMT + 10 oeren';
$lang['11'] = 'GMT + 11 oeren';
$lang['12'] = 'GMT + 12 oeren';
$lang['13'] = 'GMT + 13 Hours';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 oeren';
$lang['tz']['-11'] = 'GMT - 11 oeren';
$lang['tz']['-10'] = 'GMT - 10 oeren';
$lang['tz']['-9'] = 'GMT - 9 oeren';
$lang['tz']['-8'] = 'GMT - 8 oeren';
$lang['tz']['-7'] = 'GMT - 7 oeren';
$lang['tz']['-6'] = 'GMT - 6 oeren';
$lang['tz']['-5'] = 'GMT - 5 oeren';
$lang['tz']['-4'] = 'GMT - 4 oeren';
$lang['tz']['-3.5'] = 'GMT - 3.5 oere';
$lang['tz']['-3'] = 'GMT - 3 oeren';
$lang['tz']['-2'] = 'GMT - 2 oeren';
$lang['tz']['-1'] = 'GMT - 1 oere';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 oere';
$lang['tz']['2'] = 'GMT + 2 oeren';
$lang['tz']['3'] = 'GMT + 3 oeren';
$lang['tz']['3.5'] = 'GMT + 3.5 oere';
$lang['tz']['4'] = 'GMT + 4 oeren';
$lang['tz']['4.5'] = 'GMT + 4.5 oere';
$lang['tz']['5'] = 'GMT + 5 oeren';
$lang['tz']['5.5'] = 'GMT + 5.5 oere';
$lang['tz']['6'] = 'GMT + 6 oeren';
$lang['tz']['6.5'] = 'GMT + 6.5 oere';
$lang['tz']['7'] = 'GMT + 7 oeren';
$lang['tz']['8'] = 'GMT + 8 oeren';
$lang['tz']['9'] = 'GMT + 9 oeren';
$lang['tz']['9.5'] = 'GMT + 9.5 oere';
$lang['tz']['10'] = 'GMT + 10 oeren';
$lang['tz']['11'] = 'GMT + 11 oeren';
$lang['tz']['12'] = 'GMT + 12 oeren';

$lang['datetime']['Sunday'] = 'Snein';
$lang['datetime']['Monday'] = 'Moandei';
$lang['datetime']['Tuesday'] = 'Tiisdei';
$lang['datetime']['Wednesday'] = 'Woansdei';
$lang['datetime']['Thursday'] = 'Tongerdei';
$lang['datetime']['Friday'] = 'Freed';
$lang['datetime']['Saturday'] = 'Sneon';
$lang['datetime']['Sun'] = 'Sn';
$lang['datetime']['Mon'] = 'Mo';
$lang['datetime']['Tue'] = 'Ti';
$lang['datetime']['Wed'] = 'Wo';
$lang['datetime']['Thu'] = 'To';
$lang['datetime']['Fri'] = 'Fr';
$lang['datetime']['Sat'] = 'Sn';
$lang['datetime']['January'] = 'Jannewaris';
$lang['datetime']['February'] = 'Febrewaris';
$lang['datetime']['March'] = 'Maart';
$lang['datetime']['April'] = 'April';
$lang['datetime']['May'] = 'Maaie';
$lang['datetime']['June'] = 'Juny';
$lang['datetime']['July'] = 'July';
$lang['datetime']['August'] = 'Augustus';
$lang['datetime']['September'] = 'Septimber';
$lang['datetime']['October'] = 'Oktober';
$lang['datetime']['November'] = 'Novimber';
$lang['datetime']['December'] = 'Desimber';
$lang['datetime']['Jan'] = 'Jan';
$lang['datetime']['Feb'] = 'Feb';
$lang['datetime']['Mar'] = 'Mrt';
$lang['datetime']['Apr'] = 'Apr';
$lang['datetime']['May'] = 'Maaie';
$lang['datetime']['Jun'] = 'Jun';
$lang['datetime']['Jul'] = 'Jul';
$lang['datetime']['Aug'] = 'Aug';
$lang['datetime']['Sep'] = 'Sep';
$lang['datetime']['Oct'] = 'Okt';
$lang['datetime']['Nov'] = 'Nov';
$lang['datetime']['Dec'] = 'Des';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Ynformaasje';
$lang['Critical_Information'] = 'Wichtige ynformaasje';

$lang['General_Error'] = 'Algemiene flater';
$lang['Critical_Error'] = 'Fatale flater';
$lang['An_error_occured'] = 'Der is in flater';
$lang['A_critical_error'] = 'Der is in fatale flater';

$lang['Admin_reauthenticate'] = 'Om as behearder oan \'e slach te gean moat jitris ynlogt wurde.';
$lang['Login_attempts_exceeded'] = 'Der waard al %s earder besocht yn te loggen. Om feiligheidsredens is it de kommende %s minuten net mooglik om yn te loggen.';
$lang['Please_remove_install_contrib'] = 'Helje asjeblyft de install/ en de contrib/ directorys fuort';

//
// That's all Folks!
// -------------------------------------------------

?>