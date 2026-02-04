<?php
// File : czech.lang.php3
// Translation by Martin Dvorak <jezek2@penguin.cz>

// extra header for charset
$Charset = "iso-8859-2";

// medium font size in pt.
$FontSize = 10;

// Top frame
define("A_MENU_0", "Administrace %s");
define("A_MENU_1", "Registrovaní u¾ivatelé");
define("A_MENU_2", "Zakázaní u¾ivatelé");
define("A_MENU_3", "Èi¹tìní místností");
define("A_MENU_4", "Send mails");

// Frame for registered users
define("A_SHEET1_1", "Seznam registrovných u¾ivatelù a jejich práva");
define("A_SHEET1_2", "U¾ivatel");
define("A_SHEET1_3", "Práva");
define("A_SHEET1_4", "Moderované místnosti");
define("A_SHEET1_5", "Moderované místnosti jsou oddìleny èárkou (,) bez mezer.");
define("A_SHEET1_6", "Zru¹it oznaèené");
define("A_SHEET1_7", "Zmìnit");
define("A_SHEET1_8", "Není registrován ¾ádný u¾ivatel kromì vás.");
define("A_SHEET1_9", "Zakázat oznaèené u¾ivatele");
define("A_SHEET1_10", "Nyní se mù¾ete pøesunout do zálo¾ky 'Zakázaní u¾ivatelé' pro úpravu seznamu zakázaných u¾ivatelù.");
define("A_SHEET1_11", "Poslední pøipojení");
define("A_USER", "U¾ivatel");
define("A_MODER", "Moderátor");
define("A_PAGE_CNT", "Page %s of %s");

// Frame for banished users
define("A_SHEET2_1", "Seznam zakázaných u¾ivatelù");
define("A_SHEET2_2", "IP");
define("A_SHEET2_3", "Zakázané místnosti");
define("A_SHEET2_4", "Do");
define("A_SHEET2_5", "¾ádný konec");
define("A_SHEET2_6", "jména místností jsou oddìleny èárkou bez mezer (,) pokud je jich ménì ne¾ ètyøi,<BR> jinak oznaèení '<B>&nbsp;*&nbsp;</B>' zaká¾e pøístup u¾ivateli do v¹ech místností.");
define("A_SHEET2_7", "Odstranit zákaz pøístupu oznaèeným u¾ivatelùm");
define("A_SHEET2_8", "®ádnému u¾ivateli není zakázan pøístup.");

// Frame for cleaning rooms
define("A_SHEET3_1", "Seznam existujících místností");
define("A_SHEET3_2", "Vyèi¹tìní neimplicitní místnosti odstraní také pravomoce<BR> moderátora v¹em stávajícím moderátorùm zvolené místnosti.");
define("A_SHEET3_3", "Vyèistit oznaèené místnosti");
define("A_SHEET3_4", "®ádná místnost není k dispozici k vyèi¹tìní.");

// Frame for sending mails
define("A_SHEET4_0", "You haven't set required variables in the<BR>'chat/admin/mail4admin.php3' script.");
define("A_SHEET4_1", "Send e-mails");
define("A_SHEET4_2", "To:");
define("A_SHEET4_3", "Select all");
define("A_SHEET4_4", "Subject:");
define("A_SHEET4_5", "Messages:");
define("A_SHEET4_6", "Start sending");
define("A_SHEET4_7", "All e-mails have been sent.");
define("A_SHEET4_8", "Internal error while sending the mails.");
define("A_SHEET4_9", "Addresse(s), subject or message is missing!");
?>