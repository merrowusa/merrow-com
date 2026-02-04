<?php
// File : danish.admin.php3
// Translation by Kenneth Kristiansen <kk@linuxfreak.adsl.dk>

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// Top frame
define("A_MENU_0", "Administration for %s");
define("A_MENU_1", "Registerede brugere");
define("A_MENU_2", "Forviste brugere");
define("A_MENU_3", "Tømme chatrummene");
define("A_MENU_4", "Send mails");

// Frame for registered users
define("A_SHEET1_1", "Liste af registrede brugere og deres rettigheder");
define("A_SHEET1_2", "Brugernavn");
define("A_SHEET1_3", "Rettigheder");
define("A_SHEET1_4", "Modererede rum");
define("A_SHEET1_5", "Modererede rums er delt af et (,) uden mellemrum.");
define("A_SHEET1_6", "Slet markerede profiler");
define("A_SHEET1_7", "Ændre");
define("A_SHEET1_8", "Der er ingen registrerede brugere ud over dig selv.");
define("A_SHEET1_9", "Forvise markerede profiler");
define("A_SHEET1_10", "Nu skal du klikke på 'Forviste brugere' fanebladet for at opfriske dine ændringer.");
define("A_SHEET1_11", "Sidst tilsluttet");
define("A_USER", "Bruger");
define("A_MODER", "Moderator");
define("A_PAGE_CNT", "Side %s af %s");

// Frame for banished users
define("A_SHEET2_1", "Liste af forviste brugere og berørte chatrum");
define("A_SHEET2_2", "IP");
define("A_SHEET2_3", "Berørte chatrum");
define("A_SHEET2_4", "Indtil");
define("A_SHEET2_5", "For altid");
define("A_SHEET2_6", "Rummene er adskilte af (,) uden mellemrum hvis der er mindre end 4, ellers '<b>&nbsp;*&nbsp;</b>' tegnet<br />forvist fra samtlige chatrum.");
define("A_SHEET2_7", "Fjern forvist flaget fra markerede bruger(e)");
define("A_SHEET2_8", "Der er ingen forviste brugere.");

// Frame for cleaning rooms
define("A_SHEET3_1", "Liste af eksisterende chatrum");
define("A_SHEET3_2", "Tømning af et 'non-default' chatrum vil også fjerne alle moderatorer <br /> for dette rum.");
define("A_SHEET3_3", "Tøm markerede chatrums");
define("A_SHEET3_4", "Der er ingen chatrum at tømme.");

// Frame for sending mails
define("A_SHEET4_0", "Du har ikke sat de nødvendige variabler i<BR>'chat/admin/mail4admin.php3' scriptet.");
define("A_SHEET4_1", "Send e-mails");
define("A_SHEET4_2", "Til:");
define("A_SHEET4_3", "Vælg alle");
define("A_SHEET4_4", "Emne:");
define("A_SHEET4_5", "Besked:");
define("A_SHEET4_6", "Start forsendelse");
define("A_SHEET4_7", "Alle e-mails er blevet sendt.");
define("A_SHEET4_8", "Internal error while sending the mails.");
define("A_SHEET4_9", "Adresse(r), emne eller beskeden mangler!");
?>