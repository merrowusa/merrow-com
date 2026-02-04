<?php
/***************************************************************************
 *                            lang_main.php [Turkish]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.85.2.16 2005/05/06 20:50:13 acydburn Exp $
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
// Translation by:
//
// ESQARE (taNGo) :: admin@turkiyeforum.com :: http://www.phpbbturkey.com :: http://www.turkiyeforum.com
//
// For questions and comments use: admin@turkiyeforum.com
//

// Comment out the line below if you use windows based server
// setlocale(LC_ALL, 'tr_TR.ISO-8859-9');

$lang['ENCODING'] = 'iso-8859-9';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION_INFO'] = 'Türkçe Çeviri: <a href="http://www.phpbbturkey.com" target="_blank" class="copyright">phpBB Turkey</a> & Erdem Çorapçýoðlu';
$lang['TRANSLATION'] = 'Türkçe Çeviri: <a href="http://www.phpbbturkey.com" target="_blank" class="copyright">phpBB Turkey</a> & Erdem Çorapçýoðlu';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Forum';
$lang['Category'] = 'Kategori';
$lang['Topic'] = 'Baþlýk';
$lang['Topics'] = 'Baþlýklar';
$lang['Replies'] = 'Cevaplar';
$lang['Views'] = 'Görüntüleme';
$lang['Post'] = 'Mesaj';
$lang['Posts'] = 'Mesajlar';
$lang['Posted'] = 'Tarih';
$lang['Username'] = 'Kullanýcý Adý';
$lang['Password'] = 'Þifre';
$lang['Email'] = 'E-posta';
$lang['Poster'] = 'Gönderen';
$lang['Author'] = 'Yazar';
$lang['Time'] = 'Zaman';
$lang['Hours'] = 'Saat';
$lang['Message'] = 'Mesaj';

$lang['1_Day'] = '1 Günlük';
$lang['7_Days'] = '7 Günlük';
$lang['2_Weeks'] = '2 Haftalýk';
$lang['1_Month'] = '1 Aylýk';
$lang['3_Months'] = '3 Aylýk';
$lang['6_Months'] = '6 Aylýk';
$lang['1_Year'] = '1 Yýllýk';

$lang['Go'] = 'Git';
$lang['Jump_to'] = 'Geçiþ Yap';
$lang['Submit'] = 'Gönder';
$lang['Reset'] = 'Sýfýrla';
$lang['Cancel'] = 'Ýptal';
$lang['Preview'] = 'Önizleme';
$lang['Confirm'] = 'Onayla';
$lang['Spellcheck'] = 'Yazým denetimi';
$lang['Yes'] = 'Evet';
$lang['No'] = 'Hayýr';
$lang['Enabled'] = 'Açýk';
$lang['Disabled'] = 'Kapalý';
$lang['Error'] = 'Hata';

$lang['Next'] = 'Sonraki';
$lang['Previous'] = 'Önceki';
$lang['Goto_page'] = 'Sayfaya git';
$lang['Joined'] = 'Kayýt';
$lang['IP_Address'] = 'IP Adresi';

$lang['Select_forum'] = 'Bir Forum Seçin';
$lang['View_latest_post'] = 'Son Mesajý Görüntüle';
$lang['View_newest_post'] = 'Yeni Mesajý Görüntüle';
$lang['Page_of'] =  '<b>%d</b>. sayfa  (Toplam <b>%d</b> sayfa)'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ Numarasý';
$lang['AIM'] = 'AIM Adresi';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s Forum Ana Sayfa';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Yeni baþlýk gönder';
$lang['Reply_to_topic'] = 'Baþlýða cevap gönder';
$lang['Reply_with_quote'] = 'Alýntýyla Cevap Gönder';

$lang['Click_return_topic'] = 'Baþlýða dönmek için %sburaya%s týklayýn'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Tekrar denemek için %sburaya%s týklayýn';
$lang['Click_return_forum'] = 'Foruma dönmek için %sburaya%s týklayýn';
$lang['Click_view_message'] = 'Mesajýnýzý görüntülemek için %sburaya%s týklayýn';
$lang['Click_return_modcp'] = 'Moderatör Kontrol Paneline dönmek için %sburaya%s týklayýn';
$lang['Click_return_group'] = 'Grup bilgilerine dönmek için %sburaya%s týklayýn';

$lang['Admin_panel'] = 'Yönetim Paneline Git';

$lang['Board_disable'] = 'Üzgünüz, fakat bu mesaj panosu þimdilik kullanýlamýyor. Lütfen daha sonra tekrar deneyin.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Kayýtlý Kullanýcýlar:';
$lang['Browsing_forum'] = 'Bu forumu gözden geçiren kullanýcýlar:';
$lang['Online_users_zero_total'] = 'Toplam <b>0</b> kullanýcý çevrimiçi :: ';
$lang['Online_users_total'] = 'Toplam <b>%d</b> kullanýcý çevrimiçi :: ';
$lang['Online_user_total'] = $lang['Online_users_total'];
$lang['Reg_users_zero_total'] = '0 Kayýtlý, ';
$lang['Reg_users_total'] = '%d Kayýtlý, ';
$lang['Reg_user_total'] = '%d Kayýtlý, ';
$lang['Hidden_users_zero_total'] = '0 Gizli ve ';
$lang['Hidden_user_total'] = '%d Gizli ve ';
$lang['Hidden_users_total'] = '%d Gizli ve ';
$lang['Guest_users_zero_total'] = '0 Misafir';
$lang['Guest_users_total'] = '%d Misafir';
$lang['Guest_user_total'] = '%d Misafir';
$lang['Record_online_users'] = 'Þimdiye kadar en çok <b>%s</b> kullanýcý %s tarihinde çevrimiçi oldu.'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sYönetici%s';
$lang['Mod_online_color'] = '%sModeratör%s';

$lang['You_last_visit'] = 'Son ziyaretiniz: %s'; // %s replaced by date/time
$lang['Current_time'] = 'Geçerli Zaman: %s'; // %s replaced by time

$lang['Search_new'] = 'Son ziyaretinizden bu yana gönderilen mesajlar';
$lang['Search_your_posts'] = 'Kendi mesajlarýnýz';
$lang['Search_unanswered'] = 'Cevaplanmayan mesajlar';

$lang['Register'] = 'Kayýt';
$lang['Profile'] = 'Profil';
$lang['Edit_profile'] = 'Profilinizi Deðiþtirin';
$lang['Search'] = 'Arama';
$lang['Memberlist'] = 'Üye Listesi';
$lang['FAQ'] = 'SSS';
$lang['BBCode_guide'] = 'BBCode Kýlavuzu';
$lang['Usergroups'] = 'Kullanýcý Gruplarý';
$lang['Last_Post'] = 'Son Mesaj';
$lang['Moderator'] = 'Moderatör';
$lang['Moderators'] = 'Moderatör';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Kullanýcýlarýmýz toplam <b>0</b> mesaj gönderdiler'; // Number of posts
$lang['Posted_articles_total'] = 'Kullanýcýlarýmýz toplam <b>%d</b> mesaj gönderdiler'; // Number of posts
$lang['Posted_article_total'] = 'Kullanýcýlarýmýz toplam <b>%d</b> mesaj gönderdiler'; // Number of posts
$lang['Registered_users_zero_total'] = 'Toplam <b>0</b> kayýtlý kullanýcýmýz var'; // # registered users
$lang['Registered_users_total'] = 'Toplam <b>%d</b> kayýtlý kullanýcýmýz var'; // # registered users
$lang['Registered_user_total'] = 'Toplam <b>%d</b> kayýtlý kullanýcýmýz var'; // # registered users
$lang['Newest_user'] = 'Son kaydolan kullanýcýmýz: <b>%s%s%s</b>'; // a href, username, /a

$lang['No_new_posts_last_visit'] = 'Son ziyaretinizden bu yana hiç yeni mesaj yok';
$lang['No_new_posts'] = 'Yeni mesaj yok';
$lang['New_posts'] = 'Yeni mesaj var';
$lang['New_post'] = 'Yeni mesaj var';
$lang['No_new_posts_hot'] = 'Yeni mesaj yok [ Popüler ]';
$lang['New_posts_hot'] = 'Yeni mesaj var [ Popüler ]';
$lang['No_new_posts_locked'] = 'Yeni mesaj yok [ Kilitli ]';
$lang['New_posts_locked'] = 'Yeni mesaj var [ Kilitli ]';
$lang['Forum_is_locked'] = 'Forum kilitlendi';


//
// Login
//
$lang['Enter_password'] = 'Lütfen Kullanýcý Ýsminizi ve Þifrenizi Giriniz';
$lang['Login'] = 'Giriþ';
$lang['Logout'] = 'Çýkýþ';

$lang['Forgotten_password'] = 'Þifremi unuttum';

$lang['Log_me_in'] = 'Her ziyaretimde otomatik giriþ yap';

$lang['Error_login'] = 'Hatalý ya da aktif edilmemiþ bir kullanýcý adý veya yanlýþ bir þifre girdiniz';


//
// Index page
//
$lang['Index'] = 'Ana Sayfa';
$lang['No_Posts'] = 'Mesaj Yok';
$lang['No_forums'] = 'Bu mesaj panosunun hiç forumu yok';

$lang['Private_Message'] = 'Özel Mesaj';
$lang['Private_Messages'] = 'Özel Mesajlar';
$lang['Who_is_Online'] = 'Kimler Çevrimiçi';

$lang['Mark_all_forums'] = 'Tüm forumlarý okunmuþ say';
$lang['Forums_marked_read'] = 'Tüm forumlar okunmuþ sayýldý';


//
// Viewforum
//
$lang['View_forum'] = 'Forum görüntüleniyor';

$lang['Forum_not_exist'] = 'Seçtiðiniz forum bu mesaj panosunda bulunmamaktadýr';
$lang['Reached_on_error'] = 'Bu sayfaya bir hata sonucu geldiniz';

$lang['Display_topics'] = 'Önceki baþlýklarý göster';
$lang['All_Topics'] = 'Tüm Baþlýklar';

$lang['Topic_Announcement'] = '<b>Duyuru:</b>';
$lang['Topic_Sticky'] = '<b>Sabit:</b>';
$lang['Topic_Moved'] = '<b>Taþýndý:</b>';
$lang['Topic_Poll'] = '<b>[ Anket ]</b>';

$lang['Mark_all_topics'] = 'Tüm mesajlarý okunmuþ say';
$lang['Topics_marked_read'] = 'Bu forumdaki tüm mesajlar okunmuþ sayýldý';

$lang['Rules_post_can'] = 'Bu forumda yeni baþlýklar <b>açabilirsiniz</b>';
$lang['Rules_post_cannot'] = 'Bu forumda yeni baþlýklar <b>açamazsýnýz</b>';
$lang['Rules_reply_can'] = 'Bu forumdaki baþlýklara cevap <b>verebilirsiniz</b>';
$lang['Rules_reply_cannot'] = 'Bu forumdaki baþlýklara cevap <b>veremezsiniz</b>';
$lang['Rules_edit_can'] = 'Bu forumdaki mesajlarýnýzý <b>deðiþtirebilirsiniz</b>';
$lang['Rules_edit_cannot'] = 'Bu forumdaki mesajlarýnýzý <b>deðiþtiremezsiniz</b>';
$lang['Rules_delete_can'] = 'Bu forumdaki mesajlarýnýzý <b>silebilirsiniz</b>';
$lang['Rules_delete_cannot'] = 'Bu forumdaki mesajlarýnýzý <b>silemezsiniz</b>';
$lang['Rules_vote_can'] = 'Bu forumdaki anketlerde oy <b>kullanabilirsiniz</b>';
$lang['Rules_vote_cannot'] = 'Bu forumdaki anketlerde oy <b>kullanamazsýnýz</b>';
$lang['Rules_moderate'] = 'Bu forumun %syönetimini%s <b>yapabilirsiniz</b>'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'Bu forumda hiç mesaj yok<br />Yeni bir tane göndermek için <b>Yeni Baþlýk Yolla</b> baðlantýsýna týklayýn';


//
// Viewtopic
//
$lang['View_topic'] = 'Baþlýk görüntüleniyor';

$lang['Guest'] = 'Misafir';
$lang['Post_subject'] = 'Mesaj konusu';
$lang['View_next_topic'] = 'Sonraki baþlýk';
$lang['View_previous_topic'] = 'Önceki baþlýk';
$lang['Submit_vote'] = 'Oy Ver';
$lang['View_results'] = 'Sonuçlar';

$lang['No_newer_topics'] = 'Bu forumda daha yeni baþlýk yok';
$lang['No_older_topics'] = 'Bu forumda daha eski baþlýk yok';
$lang['Topic_post_not_exist'] = 'Seçtiðiniz baþlýk veya mesaj bulunamýyor';
$lang['No_posts_topic'] = 'Bu baþlýk için mesaj bulunmuyor';

$lang['Display_posts'] = 'Önceki mesajlarý göster';
$lang['All_Posts'] = 'Tüm Mesajlar';
$lang['Newest_First'] = 'En Yeniden Baþlayarak';
$lang['Oldest_First'] = 'En Eskiden Baþlayarak';

$lang['Back_to_top'] = 'Baþa dön';

$lang['Read_profile'] = 'Kullanýcýnýn profilini görüntüle';
$lang['Visit_website'] = 'Yazarýn web sitesini ziyaret et';
$lang['ICQ_status'] = 'ICQ Durumu';
$lang['Edit_delete_post'] = 'Bu mesajý düzenle/sil';
$lang['View_IP'] = 'Yazarýn IP adresini görüntüle';
$lang['Delete_post'] = 'Bu mesajý sil';

$lang['wrote'] = 'yazmýþ'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Alýntý'; // comes before bbcode quote output.
$lang['Code'] = 'Kod'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'En son %s tarafýndan %s tarihinde deðiþtirildi, toplam %d kere deðiþtirildi'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'En son %s tarafýndan %s tarihinde deðiþtirildi, toplam %d kere deðiþtirildi'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Bu baþlýðý kilitle';
$lang['Unlock_topic'] = 'Bu baþlýðýn kilidini aç';
$lang['Move_topic'] = 'Bu baþlýðý taþý';
$lang['Delete_topic'] = 'Bu baþlýðý sil';
$lang['Split_topic'] = 'Bu baþlýðý böl';

$lang['Stop_watching_topic'] = 'Bu baþlýðý takip etmeyi býrak';
$lang['Start_watching_topic'] = 'Bu baþlýðý cevaplar için takip et';
$lang['No_longer_watching'] = 'Artýk bu baþlýðý takip etmiyorsunuz';
$lang['You_are_watching'] = 'Þu anda bu baþlýðý takip ediyorsunuz';

$lang['Total_votes'] = 'Toplam Oylar';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Mesaj Gövdesi';
$lang['Topic_review'] = 'Orjinal Mesaj';

$lang['No_post_mode'] = 'Hiçbir mesaj modu seçilmedi'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Yeni baþlýk gönder';
$lang['Post_a_reply'] = 'Cevap gönder';
$lang['Post_topic_as'] = 'Mesaj türü';
$lang['Edit_Post'] = 'Mesajý düzenle';
$lang['Options'] = 'Seçenekler';

$lang['Post_Announcement'] = 'Duyuru';
$lang['Post_Sticky'] = 'Sabit';
$lang['Post_Normal'] = 'Normal';

$lang['Confirm_delete'] = 'Bu mesajý silmek istediðinize emin misiniz?';
$lang['Confirm_delete_poll'] = 'Bu anketi silmek istediðinize emin misiniz?';

$lang['Flood_Error'] = 'Diðer mesajýnýzdan bu kadar kýsa süre sonra bir yenisini gönderemezsiniz, lütfen kýsa bir süre sonra tekrar deneyin';
$lang['Empty_subject'] = 'Yeni bir baþlýk açarken bir konu belirlemelisiniz';
$lang['Empty_message'] = 'Boþ bir mesaj gönderemezsiniz';
$lang['Forum_locked'] = 'Bu forum kilitlendi: mesaj gönderemez, cevap yazamaz ya da baþlýklarý deðiþtiremezsiniz';
$lang['Topic_locked'] = 'Bu baþlýk kilitlendi: mesajlarý deðiþtiremez ya da cevap yazamazsýnýz';
$lang['No_post_id'] = 'Deðiþtirmek için bir mesaj seçmelisiniz';
$lang['No_topic_id'] = 'Cevap göndermek için bir mesaj seçmelisiniz';
$lang['No_valid_mode'] = 'Sadece mesaj gonderebilir, cevap gönderebilir, deðiþtirebilir veya alýntý yapabilirsiniz; lütfen geri dönüp tekrar deneyin';
$lang['No_such_post'] = 'Böyle bir mesaj yok, lütfen geri dönüp tekrar deneyin';
$lang['Edit_own_posts'] = 'Üzgünüz, sadece kendi mesajlarýnýzý deðiþtirebilirsiniz';
$lang['Delete_own_posts'] = 'Üzgünüz, sadece kendi mesajlarýnýzý silebilirsiniz';
$lang['Cannot_delete_replied'] = 'Üzgünüz, cevap gönderilmiþ olan mesajlarýnýzý silemezsiniz';
$lang['Cannot_delete_poll'] = 'Üzgünüz, aktif bir anketi silemezsiniz';
$lang['Empty_poll_title'] = 'Anketiniz için bir baþlýk girmelisiniz';
$lang['To_few_poll_options'] = 'Anket için en az iki seçenek girmelisiniz';
$lang['To_many_poll_options'] = 'Anket için çok fazla seçenek girdiniz';
$lang['Post_has_no_poll'] = 'Bu mesajda anket yok';
$lang['Already_voted'] = 'Bu anket için zaten oy kullandýnýz';
$lang['No_vote_option'] = 'Oy kullanýrken bir seçenek belirtmelisiniz';

$lang['Add_poll'] = 'Anket Ekle';
$lang['Add_poll_explain'] = 'Eðer mesajýnýza bir anket eklemek istemiyorsanýz, aþaðýdaki bölümleri boþ býrakýn';
$lang['Poll_question'] = 'Anket sorusu';
$lang['Poll_option'] = 'Anket seçeneði';
$lang['Add_option'] = 'Seçeneði ekle';
$lang['Update'] = 'Güncelle';
$lang['Delete'] = 'Sil';
$lang['Poll_for'] = 'Gösterim süresi';
$lang['Days'] = 'Gün'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Anket süresinin bitmemesi için 0 yazýn ya da boþ býrakýn ]';
$lang['Delete_poll'] = 'Anketi sil';

$lang['Disable_HTML_post'] = 'Bu mesajda HTML kullanma';
$lang['Disable_BBCode_post'] = 'Bu mesajda BBCode kullanma';
$lang['Disable_Smilies_post'] = 'Bu mesajda Ýfadeleri kullanma';

$lang['HTML_is_ON'] = 'HTML <u>Açýk</u>';
$lang['HTML_is_OFF'] = 'HTML <u>Kapalý</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>Açýk</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s <u>Kapalý</u>';
$lang['Smilies_are_ON'] = 'Ýfadeler <u>Açýk</u>';
$lang['Smilies_are_OFF'] = 'Ýfadeler <u>Kapalý</u>';

$lang['Attach_signature'] = 'Ýmzamý ekle (imzalar profilden deðiþtirilebilir)';
$lang['Notify'] = 'Mesaja cevap geldiði zaman bana bildir';

$lang['Stored'] = 'Mesajýnýz baþarýyla gönderilmiþtir';
$lang['Deleted'] = 'Mesajýnýz baþarýyla silinmiþtir';
$lang['Poll_delete'] = 'Anketiniz baþarýyla silinmiþtir';
$lang['Vote_cast'] = 'Oyunuz ankete eklendi';

$lang['Topic_reply_notification'] = 'Baþlýk Cevap Bildirisi';

$lang['bbcode_b_help'] = 'Kalýn yazý: [b]metin[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Ýtalik yazý: [i]metin[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Altý çizgili yazý: [u]metin[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Alýntý yazýsý: [quote]metin[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Kod görüntüleme: [code]kod[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Liste: [list]liste[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Sýralý liste: [list=]metin[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Resim ekle: [img]http://adres[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'URL ekle: [url]http://url[/url] ya da [url=http://url]metin[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Tüm açýk BBCode etiketlerini kapat.';
$lang['bbcode_s_help'] = 'Font rengi: [color=red]metin[/color]  Tiyo: color=#FF0000 diye de kullanýlailbir';
$lang['bbcode_f_help'] = 'Font boyutu: [size=x-small]küçük font[/size]';

$lang['Emoticons'] = 'Ýfadeler';
$lang['More_emoticons'] = 'Daha çok ifade görüntüle';

$lang['Font_color'] = 'Font rengi';
$lang['color_default'] = 'Varsayýlan';
$lang['color_dark_red'] = 'Koyu kýrmýzý';
$lang['color_red'] = 'Kýrmýzý';
$lang['color_orange'] = 'Turuncu';
$lang['color_brown'] = 'Kahverengi';
$lang['color_yellow'] = 'Sarý';
$lang['color_green'] = 'Yeþil';
$lang['color_olive'] = 'Zeytin Yeþili';
$lang['color_cyan'] = 'Turkuaz';
$lang['color_blue'] = 'Mavi';
$lang['color_dark_blue'] = 'Koyu mavi';
$lang['color_indigo'] = 'Mor';
$lang['color_violet'] = 'Eflatun';
$lang['color_white'] = 'Beyaz';
$lang['color_black'] = 'Siyah';

$lang['Font_size'] = 'Font boyutu';
$lang['font_tiny'] = 'Ufacýk';
$lang['font_small'] = 'Küçük';
$lang['font_normal'] = 'Normal';
$lang['font_large'] = 'Büyük';
$lang['font_huge'] = 'Kocaman';

$lang['Close_Tags'] = 'Etiketleri Sonlandýr';
$lang['Styles_tip'] = 'Ýpucu: Yazýyý seçerek burdaki stilleri daha kolay uygulayabilirsiniz';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Özel Mesajlar';

$lang['Login_check_pm'] = 'Özel mesajlarýnýzý kontrol etmek için giriþ yapýn';
$lang['New_pms'] = '%d yeni mesajýnýz var'; // You have 2 new messages
$lang['New_pm'] = '%d yeni mesajýnýz var'; // You have 1 new message
$lang['No_new_pm'] = 'Yeni mesajýnýz yok';
$lang['Unread_pms'] = '%d okunmamýþ mesajýnýz var';
$lang['Unread_pm'] = '%d okunmamýþ mesajýnýz var';
$lang['No_unread_pm'] = 'Okunmamýþ mesajýnýz yok';
$lang['You_new_pm'] = 'Gelen kutunuzda bir yeni özel mesaj sizi bekliyor';
$lang['You_new_pms'] = 'Gelen kutunuzda yeni özel mesajlar sizi bekliyor';
$lang['You_no_new_pm'] = 'Sizi bekleyen yeni özel mesajýnýz yok';

$lang['Unread_message'] = 'Okunmamýþ mesaj';
$lang['Read_message'] = 'Okunmuþ mesaj';

$lang['Read_pm'] = 'Mesajý oku';
$lang['Post_new_pm'] = 'Mesaj gönder';
$lang['Post_reply_pm'] = 'Mesaja cevap gönder';
$lang['Post_quote_pm'] = 'Mesajý alýntý yap';
$lang['Edit_pm'] = 'Mesajý düzenle';

$lang['Inbox'] = 'Gelen Kutusu';
$lang['Outbox'] = 'Gönderilen Kutusu';
$lang['Savebox'] = 'Kaydedilen Kutusu';
$lang['Sentbox'] = 'Ulaþan Kutusu';
$lang['Flag'] = 'Durum';
$lang['Subject'] = 'Konu';
$lang['From'] = 'Kimden';
$lang['To'] = 'Kime';
$lang['Date'] = 'Tarih';
$lang['Mark'] = 'Ýþaret';
$lang['Sent'] = 'Gönderildi';
$lang['Saved'] = 'Kaydedildi';
$lang['Delete_marked'] = 'Ýþaretlileri Sil';
$lang['Delete_all'] = 'Hepsini Sil';
$lang['Save_marked'] = 'Ýþaretlileri Kaydet';
$lang['Save_message'] = 'Mesajý Kaydet';
$lang['Delete_message'] = 'Mesajý Sil';

$lang['Display_messages'] = 'Önceki mesajlarý göster'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Tüm Mesajlar';

$lang['No_messages_folder'] = 'Bu klasörde hiç mesajýnýz yok';

$lang['PM_disabled'] = 'Bu mesaj panosunda özel mesajlaþma kapatýldý';
$lang['Cannot_send_privmsg'] = 'Üzgünüz, mesaj panosu yöneticisi sizin özel mesaj göndermenizi engelledi';
$lang['No_to_user'] = 'Bu mesajý göndermek için bir kullanýcý adý belirlemelisiniz';
$lang['No_such_user'] = 'Üzgünüz, böyle bir kullanýcý bulunmuyor';

$lang['Disable_HTML_pm'] = 'Bu mesajda HTML kullanma';
$lang['Disable_BBCode_pm'] = 'Bu mesajda BBCode kullanma';
$lang['Disable_Smilies_pm'] = 'Bu mesajda Ýfadeleri kullanma';

$lang['Message_sent'] = 'Mesajýnýz gönderildi';

$lang['Click_return_inbox'] = 'Gelen Kutusuna dönmek için %sburaya%s týklayýn';
$lang['Click_return_index'] = 'Ana Sayfaya dönmek için %sburaya%s týklayýn';

$lang['Send_a_new_message'] = 'Yeni bir özel mesaj gönder';
$lang['Send_a_reply'] = 'Özel bir mesaja cevap gönder';
$lang['Edit_message'] = 'Özel mesajý düzenle';

$lang['Notification_subject'] = 'Yeni Özel Mesaj geldi!';

$lang['Find_username'] = 'Bir kullanýcý adý bul';
$lang['Find'] = 'Bul';
$lang['No_match'] = 'Uygun sonuç bulunamadý';

$lang['No_post_id'] = 'Mesaj ID\'si belirtilmedi';
$lang['No_such_folder'] = 'Böyle bir klasör bulunmuyor';
$lang['No_folder'] = 'Klasör belirtilmedi';

$lang['Mark_all'] = 'Tümünü iþaretle';
$lang['Unmark_all'] = 'Ýþaretleri kaldýr';

$lang['Confirm_delete_pm'] = 'Bu mesajý silmek istediðinize emin misiniz?';
$lang['Confirm_delete_pms'] = 'Bu mesajlarý silmek istediðinize emin misiniz?';

$lang['Inbox_size'] = 'Gelen Kutunuz %d%% dolu'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Ulaþan Kutunuz %d%% dolu';
$lang['Savebox_size'] = 'Kaydedilen Kutunuz %d%% dolu';

$lang['Click_view_privmsg'] = 'Gelen Kutunuzu ziyaret etmek için %sburaya%s týklayýnýz';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Profil görüntüleniyor :: %s'; // %s is username
$lang['About_user'] = '%s hakkýnda her þey'; // %s is username

$lang['Preferences'] = 'Seçenekler';
$lang['Items_required'] = '* iþaretli bölümler aksi belirtilmedikçe doldurulmak zorundadýr';
$lang['Registration_info'] = 'Kayýt Bilgileri';
$lang['Profile_info'] = 'Profil Bilgileri';
$lang['Profile_info_warn'] = 'Bu bilgiler herkes tarafýndan görüntülenebilecektir';
$lang['Avatar_panel'] = 'Avatar kontrol paneli';
$lang['Avatar_gallery'] = 'Avatar galerisi';

$lang['Website'] = 'Web sitesi';
$lang['Location'] = 'Konum';
$lang['Contact'] = 'Ýletiþim';
$lang['Email_address'] = 'E-posta adresi';
$lang['Send_private_message'] = 'Özel mesaj gönder';
$lang['Hidden_email'] = '[ Gizli ]';
$lang['Interests'] = 'Ýlgi alanlarý';
$lang['Occupation'] = 'Meslek';
$lang['Poster_rank'] = 'Yazar rütbesi';

$lang['Total_posts'] = 'Toplam mesajlar';
$lang['User_post_pct_stats'] = 'Toplamýn %.2f%%'; // 1.25% of total
$lang['User_post_day_stats'] = 'Hergün %.2f mesaj'; // 1.5 posts per day
$lang['Search_user_posts'] = '%s tarafýndan gönderilen tüm mesajlarý bul'; // Find all posts by username

$lang['No_user_id_specified'] = 'Üzgünüz, böyle bir kullanýcý bulunmuyor';
$lang['Wrong_Profile'] = 'Kendinizin olmayan bir profili deðiþtiremezsiniz';

$lang['Only_one_avatar'] = 'Sadece bir tip avatar seçilebilir';
$lang['File_no_data'] = 'Verdiðiniz URL\'deki dosya veri içermiyor';
$lang['No_connection_URL'] = 'Verdiðiniz URL ile baðlantý kurulamadý';
$lang['Incomplete_URL'] = 'Verdiðiniz URL tamamlanmamýþ';
$lang['Wrong_remote_avatar_format'] = 'Uzak avatarýn URL\'si geçerli deðil';
$lang['No_send_account_inactive'] = 'Üzgünüz, þifreniz belirlenemiyor çünkü hesabýnýz þu an aktif deðil. Lütfen daha fazla bilgi için forum yöneticisi ile görüþün';

$lang['Always_smile'] = 'Her zaman ifadeleri kullan';
$lang['Always_html'] = 'Her zaman HTML kullan';
$lang['Always_bbcode'] = 'Her zaman BBCode kullan';
$lang['Always_add_sig'] = 'Her zaman imzamý ekle';
$lang['Always_notify'] = 'Her zaman bana cevaplarý bildir';
$lang['Always_notify_explain'] = 'Gönderdiðiniz baþlýða herhangi birinden cevap geldiði zaman size bir e-posta gönderilir. Bu özellik mesaj göndereceðiniz zaman deðiþtirilebilinir.';

$lang['Board_style'] = 'Mesaj Panosu Stili';
$lang['Board_lang'] = 'Mesaj Panosu Dili';
$lang['No_themes'] = 'Veritabanýnda kayýtlý tema yok';
$lang['Timezone'] = 'Zaman dilimi';
$lang['Date_format'] = 'Tarih formatý';
$lang['Date_format_explain'] = 'Kullanýlan yazým tarzý PHP\'deki <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> fonksiyonuna eþtir';
$lang['Signature'] = 'Ýmza';
$lang['Signature_explain'] = 'Bu gönderdiðiniz mesajlara eklenebilecek bir yazý bloðudur. %d karakterlik bir limit vardýr';
$lang['Public_view_email'] = 'Herzaman e-posta adresimi göster';

$lang['Current_password'] = 'Þimdiki þifreniz';
$lang['New_password'] = 'Yeni þifreniz';
$lang['Confirm_password'] = 'Yeni þifrenizi tekrar girin';
$lang['Confirm_password_explain'] = 'Þifrenizi ya da e-posta adresinizi deðiþtirmek için þifrenizi tekrar girerek onaylamanýz gerekmektedir';
$lang['password_if_changed'] = 'Sadece deðiþtirmek istiyorsanýz þifrenizi yazmalýsýnýz';
$lang['password_confirm_if_changed'] = 'Sadece þifrenizi deðiþtirdiyseniz yeni þifrenizi onaylamalýsýnýz';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Mesajlarýnýzýn yanýndaki küçük resim. Bir seferde sadece bir resim gösterilebilir, geniþliði %d pixelden, yüksekliði %d pixelden ve boyutu %dkB\'tan büyük olamaz.';
$lang['Upload_Avatar_file'] = 'Bilgisayarýnýzdan bir avatar yollayýn';
$lang['Upload_Avatar_URL'] = 'Bir URL\'den Avatar gönderin';
$lang['Upload_Avatar_URL_explain'] = 'Avatar\'ýn olduðu sitenin URL\'sini girin, bu mesaj panosuna kopyalanacaktýr';
$lang['Pick_local_Avatar'] = 'Galeriden Avatar seçin';
$lang['Link_remote_Avatar'] = 'Baþka bir siteden Avatar baðlantýsý verin';
$lang['Link_remote_Avatar_explain'] = 'Ýstediðiniz baþka bir Avatar resminin URL adresini girerek bu resme baðlantý verebilirsiniz.';
$lang['Avatar_URL'] = 'Avatar Resminin URL adresi';
$lang['Select_from_gallery'] = 'Galeriden Avatar seçin';
$lang['View_avatar_gallery'] = 'Galeriyi göster';

$lang['Select_avatar'] = 'Avatarý Seç';
$lang['Return_profile'] = 'Avatarý Ýptal Et';
$lang['Select_category'] = 'Kategori seç';

$lang['Delete_Image'] = 'Avatarý sil';
$lang['Current_Image'] = 'Geçerli Avatar';

$lang['Notify_on_privmsg'] = 'Yeni Özel Mesaj geldiðinde bildir';
$lang['Popup_on_privmsg'] = 'Yeni Özel Mesaj geldiðinde küçük bir pencere aç';
$lang['Popup_on_privmsg_explain'] = 'Bazý temalar yeni özel mesaj geldiðinde yeni bir pencere açarak haberdar eder';
$lang['Hide_user'] = 'Çevrimiçi durumunuzu gizleyin';

$lang['Profile_updated'] = 'Profiliniz güncellendi';
$lang['Profile_updated_inactive'] = 'Profiliniz güncellendi, ama bazý önemli bilgileri deðiþtirdiðiniz için hesabýnýz aktif deðil. Yeniden aktif hale getirmek için yapmanýz gerekenleri bulmak için e-posta\'nýzý kontrol edin, eðer yönetici onayý gerekiyorsa, mesaj panosu yöneticisinin onaylamasýný bekleyin';

$lang['Password_mismatch'] = 'Girdiðiniz þifreler uyuþmuyor';
$lang['Current_password_mismatch'] = 'Þu anki þifre veritabanýnda kayýtlý olanla uyuþmuyor';
$lang['Password_long'] = 'Þifreniz 32 karakterden uzun olamaz';
$lang['Username_taken'] = 'Üzgünüz, bu kullanýcý adý zaten alýnmýþ';
$lang['Username_invalid'] = 'Üzgünüz, bu kullanýcý adý \' gibi izin verilmeyen bir karakter içeriyor';
$lang['Username_disallowed'] = 'Üzgünüz, bu kullanýcý adýna izin verilmiyor';
$lang['Email_taken'] = 'Üzgünüz, bu e-posta adresi ile zaten bir kullanýcý kayýt olmuþ';
$lang['Email_banned'] = 'Üzgünüz, bu e-posta adresi yasaklanmýþ';
$lang['Email_invalid'] = 'Üzgünüz, bu e-posta adresi hatalý';
$lang['Signature_too_long'] = 'Ýmzanýz çok uzun';
$lang['Fields_empty'] = 'Zorunlu bölümleri doldurmalýsýnýz';
$lang['Avatar_filetype'] = 'Avatarýn dosya tipi .jpg, .gif ya da .png olmalýdýr';
$lang['Avatar_filesize'] = 'Avatar resim dosyasý %d KB boyutundan az olmalýdýr'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = 'Avatarýn geniþliði %d pixelden, yüksekliði %d pixelden küçük olmalýdýr';

$lang['Welcome_subject'] = '%s Forumlarýna Hoþgeldiniz'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Yeni kullanýcý hesabý';
$lang['Account_activated_subject'] = 'Hesap aktif edildi';

$lang['Account_added'] = 'Kayýt olduðunuz için teþekkür ederiz, hesabýnýz oluþturuldu. Kullanýcý adýnýz ve þifrenizle giriþ yapabilirsiniz';
$lang['Account_inactive'] = 'Hesabýnýz oluþturuldu. Aktivasyon kodu e-posta adresinize gönderilmiþtir. Daha fazla bilgi için e-posta kutunuzu kontrol edin';
$lang['Account_inactive_admin'] = 'Hesabýnýz oluþturuldu. Ama, bu forum hesabýn aktif edilmesi için yönetici tarafýndan onaylanmasýný istiyor. Onlara bir e-posta gönderilmiþtir ve hesabýnýz aktif edildiðinde size haber verilecektir';
$lang['Account_active'] = 'Hesabýnýz aktif edildi. Kayýt olduðunuz için teþekkür ederiz';
$lang['Account_active_admin'] = 'Hesap þimdi aktif edildi';
$lang['Reactivate'] = 'Hesabýnýzý tekrar aktif edin!';
$lang['Already_activated'] = 'Hesabýnýzý zaten aktif etmiþtiniz';
$lang['COPPA'] = 'Hesabýnýz oluþturuldu fakat onaylanmasý gerekmektedir, detaylar için e-posta kutunuzu kontrol edin.';

$lang['Registration'] = 'Kayýt Anlaþma Koþullarý';
$lang['Reg_agreement'] = 'Bu forumun yöneticileri ve moderatörleri her ne kadar itiraz edilebilecek her türlü materyali mümkün olduðu kadar kýsa sürede mesaj panosundan kaldýracak da olsa, bütün mesajlarýn incelenmesi mümkün olmamaktadýr. Bu durumda siz buraya gönderilen her mesajýn, onu gönderen kullanýcýnýn görüþlerini yansýttýðýný, moderatörlerin, yöneticilerin ya da webmasterlarýn (kendilerine ait mesajlar dýþýnda) sorumlu tutulamýyacaðýný peþinen kabul etmiþ bulunuyorsunuz.<br /><br />Aþaðýlayýcý, müstehcen, kaba, iftira niteliðinde, nefret dolu, tehdit edici, sekse yönelik ya da kanunlarla çeliþecek içerikler göndermeyeceðinizi kabul ediyorsunuz. Bunlarý dikkate almamanýz durumunda hemen ve süresizce mesaj panosundan uzaklaþtýrýlýrsýnýz (ve servis saðlayýcýnýz da haberdar edilir). Her mesajýn IP adresi bunlarý engellemek için kaydedilmektedir. Bu forumun moderatörleri, yöneticileri ya da webmasterýnýn, kendi iradeleri doðrultusuna herhangi bir baþlýðý silme, taþýma, kilitleme yetkisi olduðunu kabul ediyorsunuz. Bir kullanýcý olarak her girdiðiniz bilginin veritabanýnda saklanacaðýný kabul ediyorsunuz. Her ne kadar bu bilgiler sizin bilginiz dýþýnda 3. þahýslara verilmeyecek olsa da, herhangi bir \'hack\' olayý sonucunda bu bilgiler 3. þahýslara daðýlýrsa bundan webmaster, moderatör ya da yöneticileri sorumlu tutamazsýnýz.<br /><br />Bu forum sistemi, bazý bilgileri bilgisayarýnýzda saklamak için cookie\'leri kullanmaktadýr. Girdiðiniz özel bilgilerin hiçbiri bu cookie\'lerde bulunmamaktadýr, bunlarýn tek amacý forumda daha rahat bir gezinti yapabilmenizdir. E-posta adresiniz sadece kaydýnýzý onaylamak ve þifrenizi yollamak içindir (Ve unuttuðunuz zaman þifrenizi yeniden yollamak için).<br /><br />Aþaðýdaki kabul ediyorum baðlantýsýna basmak sureti ile yukarýdaki bütün koþullarýn baðlayýcýlýðýný kabul edersiniz.';

$lang['Agree_under_13'] = 'Bu koþullarý kabul ediyorum ve 13 yaþýn <b>altýndayým</b>';
$lang['Agree_over_13'] = 'Bu koþullarý kabul ediyorum ve 13 yaþýn <b>üstündeyim</b>';
$lang['Agree_not'] = 'Bu koþullarý kabul etmiyorum';

$lang['Wrong_activation'] = 'Girdiðiniz aktivasyon kodu veritabanýndaki ile uyuþmuyor.';
$lang['Send_password'] = 'Bana yeni bir þifre gönder';
$lang['Password_updated'] = 'Yeni þifreniz oluþturuldu, nasýl aktif edeceðinizi öðrenmek için e-posta adresinizi kontrol edin';
$lang['No_email_match'] = 'Bu kullanýcý için verdiðiniz e-posta adresi veritabanýndaki ile uyuþmuyor';
$lang['New_password_activation'] = 'Yeni þifre aktivasyonu';
$lang['Password_activated'] = 'Hesabýnýz yeniden aktif edildi. Giriþ yapmak için e-posta adresinize gönderilen þifreyi kullanýn';

$lang['Send_email_msg'] = 'Bir E-posta mesajý gönder';
$lang['No_user_specified'] = 'Kullanýcý adý belirtilmedi';
$lang['User_prevent_email'] = 'Bu kullanýcý e-posta almak istemiyor. Ona özel mesaj göndermeyi deneyin';
$lang['User_not_exist'] = 'Böyle bir kullanýcý bulunmuyor';
$lang['CC_email'] = 'Bu e-posta\'nýn bir kopyasýný kendinize gönderin';
$lang['Email_message_desc'] = 'Bu mesaj düz metin içercektir, BBCode ya da HTML kullanýlmayacaktýr. Cevap adresi olarak sizin e-posta adresiniz girilmiþtir';
$lang['Flood_email_limit'] = 'Þu anda baþka bir e-posta gönderemezsiniz. Daha sonra tekrar deneyin';
$lang['Recipient'] = 'Alýcý';
$lang['Email_sent'] = 'E-posta gönderildi';
$lang['Send_email'] = 'E-posta gönder';
$lang['Empty_subject_email'] = 'E-posta için bir konu belirlemelisiniz';
$lang['Empty_message_email'] = 'E-posta olarak gönderilecek bir mesaj yazmalýsýnýz';

// 
// Visual confirmation system strings 
// 
$lang['Confirm_code_wrong'] = 'Onay kodunu yanlýþ girdiniz'; 
$lang['Too_many_registers'] = 'Bir defada çok sayýda kayýt olma giriþiminde bulundunuz. Lütfen daha sonra tekrar deneyin.'; 
$lang['Confirm_code_impaired'] = 'Eðer kodu göremiyor veya okuyamýyorsanýz lütfen %sYönetici%s ile iletiþime geçiniz.'; 
$lang['Confirm_code'] = 'Onay kodu'; 
$lang['Confirm_code_explain'] = 'Lütfen yukarýda görmüþ olduðunuz kodu büyük ve küçük harflere dikkat ederek giriniz.';

//
// Memberslist
//
$lang['Select_sort_method'] = 'Sýralama stilini seçiniz';
$lang['Sort'] = 'Sýrala';
$lang['Sort_Top_Ten'] = 'Top On Yazarlar';
$lang['Sort_Joined'] = 'Giriþ Tarihi';
$lang['Sort_Username'] = 'Kullanýcý Adý';
$lang['Sort_Location'] = 'Konum';
$lang['Sort_Posts'] = 'Toplam mesajlar';
$lang['Sort_Email'] = 'E-posta';
$lang['Sort_Website'] = 'Web sitesi';
$lang['Sort_Ascending'] = 'Artan';
$lang['Sort_Descending'] = 'Azalan';
$lang['Order'] = 'Düzen';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Grup Kontrol Paneli';
$lang['Group_member_details'] = 'Grup Üyeliði Detaylarý';
$lang['Group_member_join'] = 'Bir Gruba Katýl';

$lang['Group_Information'] = 'Grup Bilgileri';
$lang['Group_name'] = 'Grup adý';
$lang['Group_description'] = 'Grup açýklamasý';
$lang['Group_membership'] = 'Grup üyeliði';
$lang['Group_Members'] = 'Grup Üyeleri';
$lang['Group_Moderator'] = 'Grup Moderatörü';
$lang['Pending_members'] = 'Askýdaki Üyeler';

$lang['Group_type'] = 'Grup tipi';
$lang['Group_open'] = 'Açýk grup';
$lang['Group_closed'] = 'Kapalý grup';
$lang['Group_hidden'] = 'Gizli grup';

$lang['Current_memberships'] = 'Þu anki üyelikler';
$lang['Non_member_groups'] = 'Üye olunmamýþ gruplar';
$lang['Memberships_pending'] = 'Askýdaki üyelikler';

$lang['No_groups_exist'] = 'Hiç Bir Kullanýcý Grubu Bulunmuyor';
$lang['Group_not_exist'] = 'Böyle bir kullanýcý grubu bulunmuyor';

$lang['Join_group'] = 'Gruba katýl';
$lang['No_group_members'] = 'Bu grubun hiç üyesi yok';
$lang['Group_hidden_members'] = 'Bu grup gizli, üyelikleri göremezsiniz';
$lang['No_pending_group_members'] = 'Bu grupta askýda olan üyelik yok';
$lang['Group_joined'] = 'Bu gruba baþarýyla kayýt oldunuz<br />Üyeliðiniz moderatör tarafýndan onaylandýðýnda haberdar edileceksiniz';
$lang['Group_request'] = 'Grubunuza katýlmak için bir abonelik baþvurusu var';
$lang['Group_approved'] = 'Baþvurunuz onaylandý';
$lang['Group_added'] = 'Bu kullanýcý grubuna eklendiniz';
$lang['Already_member_group'] = 'Zaten bu grubun üyesisiniz';
$lang['User_is_member_group'] = 'Kullanýcý zaten bu grubun üyesi';
$lang['Group_type_updated'] = 'Grup tipi baþarýyla güncellendi';

$lang['Could_not_add_user'] = 'Seçtiðiniz kullanýcý bulunmuyor';
$lang['Could_not_anon_user'] = 'Ýsimsiz kiþileri bir grup üyesi yapamazsýnýz';

$lang['Confirm_unsub'] = 'Bu gruptan aboneliðinizi silmek istediðinize emin misiniz?';
$lang['Confirm_unsub_pending'] = 'Bu gruba aboneliðiniz henüz onaylanmadý; aboneliðinizi silmek istediðinize emin misiniz?';

$lang['Unsub_success'] = 'Bu gruptan aboneliðiniz silindi.';

$lang['Approve_selected'] = 'Seçilenleri onayla';
$lang['Deny_selected'] = 'Seçilenleri reddet';
$lang['Not_logged_in'] = 'Bir gruba katýlmak için giriþ yapmanýz lazým.';
$lang['Remove_selected'] = 'Seçilenleri çýkar';
$lang['Add_member'] = 'Üye Ekle';
$lang['Not_group_moderator'] = 'Bu grubun moderatöru deðilsiniz, bu eylemi yapamazsýnýz.';

$lang['Login_to_join'] = 'Gruba katýlmak ya da grubu yönetmek için giriþ yapmalýsýnýz';
$lang['This_open_group'] = 'Bu açýk bir grup: üyelik istemek için týklayýn';
$lang['This_closed_group'] = 'Bu kapalý bir grup: daha fazla üye kabul edilmiyor';
$lang['This_hidden_group'] = 'Bu gizli bir grup: otomatik üye alýmýna izin verilmiyor';
$lang['Member_this_group'] = 'Bu grubun üyesisiniz';
$lang['Pending_this_group'] = 'Bu gruba üyeliðiniz askýda';
$lang['Are_group_moderator'] = 'Bu grubun moderatörüsünüz';
$lang['None'] = 'Yok';

$lang['Subscribe'] = 'Abone Ol';
$lang['Unsubscribe'] = 'Aboneliði Sil';
$lang['View_Information'] = 'Bilgileri Görüntüle';

//
// Search
//
$lang['Search_query'] = 'Arama Sorgusu';
$lang['Search_options'] = 'Arama Seçenekleri';

$lang['Search_keywords'] = 'Anahtar Kelimeler için Ara';
$lang['Search_keywords_explain'] = '<u>AND</u> ile sonuçlarda bulunmasý zorunlu kelimeleri, <u>OR</u> ile sonuçlarda olabilecek kelimeleri ve <u>NOT</u> ile sonuçta olmamasý gereken kelimeleri tanýmlayabilirsiniz. Kýsmen uyuþanlar için * iþaretini joker olarak kullanabilirsiniz';
$lang['Search_author'] = 'Yazar için Ara';
$lang['Search_author_explain'] = 'Kýsmen uyuþanlar için * iþaretini joker olarak kullanabilirsiniz';

$lang['Search_for_any'] = 'Herhangi bir terim için ya da girilen sorguyu kullanarak ara';
$lang['Search_for_all'] = 'Bütün terimler için ara';
$lang['Search_title_msg'] = 'Baþlýk ve mesaj metninde ara';
$lang['Search_msg_only'] = 'Sadece mesaj metninde ara';

$lang['Return_first'] = 'Mesajýn ilk'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'karakterini göster';

$lang['Search_previous'] = 'Süre'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Sýralama';
$lang['Sort_Time'] = 'Mesaj Zamaný';
$lang['Sort_Post_Subject'] = 'Mesaj Konusu';
$lang['Sort_Topic_Title'] = 'Konu Baþlýðý';
$lang['Sort_Author'] = 'Yazar';
$lang['Sort_Forum'] = 'Forum';

$lang['Display_results'] = 'Sonuçlar';
$lang['All_available'] = 'Tümü';
$lang['No_searchable_forums'] = 'Bu mesaj panosundaki herhangi bir forumda arama yapma yetkiniz yok';

$lang['No_search_match'] = 'Arama kriterlerinize uygun mesaj ya da baþlýk bulunamadý';
$lang['Found_search_match'] = 'Arama sonucunda %d uyan sonuç bulundu'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Arama sonucunda %d uyan sonuç bulundu'; // eg. Search found 24 matches
$lang['Search_Flood_Error'] = 'Son aramanýzdan belirli bir süre geçmedikten sonra yeni bir arama yapamazsýnýz, lütfen kýsa bir süre sonra tekrar deneyin.';

$lang['Close_window'] = 'Pencereyi kapat';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Üzgünüz, sadece %s bu foruma duyurular gönderebilir';
$lang['Sorry_auth_sticky'] = 'Üzgünüz, sadece %s bu foruma sabit mesajlar gönderebilir';
$lang['Sorry_auth_read'] = 'Üzgünüz, sadece %s bu forumdaki baþlýklarý okuyabilir';
$lang['Sorry_auth_post'] = 'Üzgünüz, sadece %s bu foruma baþlýklar gönderebilir';
$lang['Sorry_auth_reply'] = 'Üzgünüz, sadece %s bu forumdaki mesajlara cevap gönderebilir';
$lang['Sorry_auth_edit'] = 'Üzgünüz, sadece %s bu forumdaki mesajlarý deðiþtirebilir';
$lang['Sorry_auth_delete'] = 'Üzgünüz, sadece %s bu forumdaki mesajlarý silebilir';
$lang['Sorry_auth_vote'] = 'Üzgünüz, sadece %s bu forumdaki anketlere oy verebilir';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>isimsiz kullanýcýlar</b>';
$lang['Auth_Registered_Users'] = '<b>kayýtlý kullanýcýlar</b>';
$lang['Auth_Users_granted_access'] = '<b>özel haklara sahip kullanýcýlar</b>';
$lang['Auth_Moderators'] = '<b>moderatörler</b>';
$lang['Auth_Administrators'] = '<b>yöneticiler</b>';

$lang['Not_Moderator'] = 'Bu forumun moderatörü deðilsiniz';
$lang['Not_Authorised'] = 'Yetki Yok';

$lang['You_been_banned'] = 'Bu forumdan yasaklandýnýz<br />Daha fazla bilgi için webmaster ya da mesaj panosu yöneticisi ile baðlantýya geçin';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = '0 kayýtlý kullanýcý ve '; // There ae 5 Registered and
$lang['Reg_users_online'] = '%d kayýtlý kullanýcý ve '; // There ae 5 Registered and
$lang['Reg_user_online'] = '%d kayýtlý kullanýcý ve '; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = '0 gizli kullanýcý çevrimiçi'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d gizli kullanýcý çevrimiçi'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d gizli kullanýcý çevrimiçi'; // 6 Hidden users online
$lang['Guest_users_online'] = '%d misafir çevrimiçi'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = '0 misafir çevrimiçi'; // There are 10 Guest users online
$lang['Guest_user_online'] = '%d misafir çevrimiçi'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Þu anda bu foruma göz atan kullanýcý yok';

$lang['Online_explain'] = 'Bu veri son 5 dakika öncesinde aktif olan kullanýcýlara dayanmaktadýr';

$lang['Forum_Location'] = 'Forum Yeri';
$lang['Last_updated'] = 'Son güncelleme';

$lang['Forum_index'] = 'Forum Ana Sayfa';
$lang['Logging_on'] = 'Giriþ yapýlýyor';
$lang['Posting_message'] = 'Mesaj gönderiliyor';
$lang['Searching_forums'] = 'Arama yapýlýyor';
$lang['Viewing_profile'] = 'Profil görüntüleniyor';
$lang['Viewing_online'] = 'Kimlerin çevrimiçi olduðu görüntüleniyor';
$lang['Viewing_member_list'] = 'Üye listesi görüntüleniyor';
$lang['Viewing_priv_msgs'] = 'Özel mesajlar görüntüleniyor';
$lang['Viewing_FAQ'] = 'SSS görüntüleniyor';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moderatör Kontrol Paneli';
$lang['Mod_CP_explain'] = 'Aþaðýdaki formu kullanarak bu forumu yönetebilirsiniz. Ýstediðiniz sayýda forumu silebilir, taþýyabilir, kilitleyebilir ya da kilidini açabilirsiniz';

$lang['Select'] = 'Seç';
$lang['Delete'] = 'Sil';
$lang['Move'] = 'Taþý';
$lang['Lock'] = 'Kilitle';
$lang['Unlock'] = 'Kilidi Aç';

$lang['Topics_Removed'] = 'Seçilen baþlýklar veritabanýndan baþarýyla silindi.';
$lang['Topics_Locked'] = 'Seçilen baþlýklar kilitlendi.';
$lang['Topics_Moved'] = 'Seçilen baþlýklar taþýndý.';
$lang['Topics_Unlocked'] = 'Seçilen baþlýklarýn kilidi açýldý.';
$lang['No_Topics_Moved'] = 'Hiçbir baþlýk taþýnmadý.';

$lang['Confirm_delete_topic'] = 'Seçilen baþlýðýn/baþlýklarýn silinmesini istediðinize emin misiniz?';
$lang['Confirm_lock_topic'] = 'Seçilen baþlýðýn/baþlýklarýn kilitlenmesini istediðinize emin misiniz?';
$lang['Confirm_unlock_topic'] = 'Seçilen baþlýðýn/baþlýklarýn kilitinin açýlmasýný istediðinize emin misiniz?';
$lang['Confirm_move_topic'] = 'Seçilen baþlýðýn/baþlýklarýn taþýnmasýný istediðinize emin misiniz?';

$lang['Move_to_forum'] = 'Foruma taþý:';
$lang['Leave_shadow_topic'] = 'Eski forumda gölgesini býrak';

$lang['Split_Topic'] = 'Baþlýk Bölme Kontrol Paneli';
$lang['Split_Topic_explain'] = 'Bu form ile bir ana baþlýðý, ister tek tek mesaj seçerek ister belli bir mesajdan ayýrarak ikiye bölebilirsiniz';
$lang['Split_title'] = 'Yeni konu baþlýðý';
$lang['Split_forum'] = 'Yeni baþlýk için forum';
$lang['Split_posts'] = 'Seçilen mesajlarý böl';
$lang['Split_after'] = 'Seçilen mesajdan böl';
$lang['Topic_split'] = 'Seçilen baþlýk baþarýyla bölündü';

$lang['Too_many_error'] = 'Çok fazla mesaj seçtiniz. Baþlýðý sadece bir mesajdan ayýrabilirsiniz!';

$lang['None_selected'] = 'Bu iþlemi yapmak için hiçbir baþlýðý seçmediniz. Lütfen geri dönüp en az bir tane seçin';
$lang['New_forum'] = 'Yeni forum';

$lang['This_posts_IP'] = 'Bu mesaj için IP adresi';
$lang['Other_IP_this_user'] = 'Bu kullanýcýnýn mesaj gönderdiði diðer IP adresleri';
$lang['Users_this_IP'] = 'Bu IP adresinden mesaj gönderen diðer kullanýcýlar';
$lang['IP_info'] = 'IP bilgisi';
$lang['Lookup_IP'] = 'Bu IP adresini tara';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Tüm zamanlar %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 Saat';
$lang['-11'] = 'GMT - 11 Saat';
$lang['-10'] = 'GMT - 10 Saat';
$lang['-9'] = 'GMT - 9 Saat';
$lang['-8'] = 'GMT -8 Saat';
$lang['-7'] = 'GMT -7 Saat';
$lang['-6'] = 'GMT -6 Saat';
$lang['-5'] = 'GMT -5 Saat';
$lang['-4'] = 'GMT - 4 Saat';
$lang['-3.5'] = 'GMT - 3.5 Saat';
$lang['-3'] = 'GMT - 3 Saat';
$lang['-2'] = 'GMT -2 Saat';
$lang['-1'] = 'GMT - 1 Saat';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT +1 Saat';
$lang['2'] = 'GMT +2 Saat';
$lang['3'] = 'GMT + 3 Saat';
$lang['3.5'] = 'GMT + 3.5 Saat';
$lang['4'] = 'GMT + 4 Saat';
$lang['4.5'] = 'GMT + 4.5 Saat';
$lang['5'] = 'GMT + 5 Saat';
$lang['5.5'] = 'GMT + 5.5 Saat';
$lang['6'] = 'GMT + 6 Saat';
$lang['6.5'] = 'GMT + 6.5 Saat';
$lang['7'] = 'GMT + 7 Saat';
$lang['8'] = 'GMT +8 Saat';
$lang['9'] = 'GMT + 9 Saat';
$lang['9.5'] = 'GMT +9.5 Saat';
$lang['10'] = 'GMT +10 Saat';
$lang['11'] = 'GMT + 11 Saat';
$lang['12'] = 'GMT + 12 Saat';
$lang['13'] = 'GMT + 13 Saat';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 Saat';
$lang['tz']['-11'] = 'GMT - 11 Saat';
$lang['tz']['-10'] = 'GMT - 10 Saat';
$lang['tz']['-9'] = 'GMT - 9 Saat';
$lang['tz']['-8'] = 'GMT - 8 Saat';
$lang['tz']['-7'] = 'GMT - 7 Saat';
$lang['tz']['-6'] = 'GMT - 6 Saat';
$lang['tz']['-5'] = 'GMT - 5 Saat';
$lang['tz']['-4'] = 'GMT - 4 Saat';
$lang['tz']['-3.5'] = 'GMT - 3.5 Saat';
$lang['tz']['-3'] = 'GMT - 3 Saat';
$lang['tz']['-2'] = 'GMT - 2 Saat';
$lang['tz']['-1'] = 'GMT - 1 Saat';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 Saat';
$lang['tz']['2'] = 'GMT + 2 Saat';
$lang['tz']['3'] = 'GMT + 3 Saat';
$lang['tz']['3.5'] = 'GMT + 3.5 Saat';
$lang['tz']['4'] = 'GMT + 4 Saat';
$lang['tz']['4.5'] = 'GMT + 4.5 Saat';
$lang['tz']['5'] = 'GMT + 5 Saat';
$lang['tz']['5.5'] = 'GMT + 5.5 Saat';
$lang['tz']['6'] = 'GMT + 6 Saat';
$lang['tz']['6.5'] = 'GMT + 6.5 Saat';
$lang['tz']['7'] = 'GMT + 7 Saat';
$lang['tz']['8'] = 'GMT + 8 Saat';
$lang['tz']['9'] = 'GMT + 9 Saat';
$lang['tz']['9.5'] = 'GMT + 9.5 Saat';
$lang['tz']['10'] = 'GMT + 10 Saat';
$lang['tz']['11'] = 'GMT + 11 Saat';
$lang['tz']['12'] = 'GMT + 12 Saat';
$lang['tz']['13'] = 'GMT + 13 Saat';

$lang['datetime']['Sunday'] = 'Pazar';
$lang['datetime']['Monday'] = 'Pazartesi';
$lang['datetime']['Tuesday'] = 'Salý';
$lang['datetime']['Wednesday'] = 'Çarþamba';
$lang['datetime']['Thursday'] = 'Perþembe';
$lang['datetime']['Friday'] = 'Cuma';
$lang['datetime']['Saturday'] = 'Cumartesi';
$lang['datetime']['Sun'] = 'Pzr';
$lang['datetime']['Mon'] = 'Pts';
$lang['datetime']['Tue'] = 'Sal';
$lang['datetime']['Wed'] = 'Çrþ';
$lang['datetime']['Thu'] = 'Prþ';
$lang['datetime']['Fri'] = 'Cum';
$lang['datetime']['Sat'] = 'Cmt';
$lang['datetime']['January'] = 'Ocak';
$lang['datetime']['February'] = 'Þubat';
$lang['datetime']['March'] = 'Mart';
$lang['datetime']['April'] = 'Nisan';
$lang['datetime']['May'] = 'Mayýs';
$lang['datetime']['June'] = 'Haziran';
$lang['datetime']['July'] = 'Temmuz';
$lang['datetime']['August'] = 'Aðustos';
$lang['datetime']['September'] = 'Eylül';
$lang['datetime']['October'] = 'Ekim';
$lang['datetime']['November'] = 'Kasým';
$lang['datetime']['December'] = 'Aralýk';
$lang['datetime']['Jan'] = 'Oca';
$lang['datetime']['Feb'] = 'Þub';
$lang['datetime']['Mar'] = 'Mar';
$lang['datetime']['Apr'] = 'Nis';
$lang['datetime']['May'] = 'May';
$lang['datetime']['Jun'] = 'Hzr';
$lang['datetime']['Jul'] = 'Tem';
$lang['datetime']['Aug'] = 'Aðu';
$lang['datetime']['Sep'] = 'Eyl';
$lang['datetime']['Oct'] = 'Ekm';
$lang['datetime']['Nov'] = 'Ksm';
$lang['datetime']['Dec'] = 'Arl';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Bilgi';
$lang['Critical_Information'] = 'Kritik Bilgi';

$lang['General_Error'] = 'Genel Hata';
$lang['Critical_Error'] = 'Kritik Hata';
$lang['An_error_occured'] = 'Bir hata oluþtu';
$lang['A_critical_error'] = 'Kritik bir hata oluþtu';

$lang['Admin_reauthenticate'] = 'Mesaj panosunu yönetebilmek için kendinizi tekrar tanýtýn.';
$lang['Login_attempts_exceeded'] = 'En fazla %s kere yapýlabilen giriþ deneme sayýsý aþýldý. Gelecek %s dakika için giriþ yapma izniniz yok.'; 
$lang['Please_remove_install_contrib'] = 'Lütfen install/ ve contrib/ klasörlerini silin';
$lang['Session_invalid'] = 'Geçersiz Oturum. Lütfen formu yeniden gönderin.';

//
// That's all Folks!
// -------------------------------------------------

?>