<?php
// File : finnish.lang.php3
// Translation by Jani Peltola <webmaster@melnworld.com>

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// Top frame
define("A_MENU_0", "Ylläpito %s:lle");
define("A_MENU_1", "Rekisteröityneet käyttäjät");
define("A_MENU_2", "Karkoitetut käyttäjät");
define("A_MENU_3", "Huoneiden tyhjennys");
define("A_MENU_4", "Lähetä e-mailia");

// Frame for registered users
define("A_SHEET1_1", "Lista rekisteröityneistä käyttäjistä ja heidän käyttöoikeuksistaan");
define("A_SHEET1_2", "Käyttäjätunnus");
define("A_SHEET1_3", "Käyttöoikeudet");
define("A_SHEET1_4", "Valvotut huoneet");
define("A_SHEET1_5", "Valvotut huoneet erotetaan toisistaan pilkulla (,) ilman välejä.");
define("A_SHEET1_6", "Poista valitut profiilit");
define("A_SHEET1_7", "Muokkaa");
define("A_SHEET1_8", "Ei ole muita rekisteröityjä käyttäjiä kuin sinä.");
define("A_SHEET1_9", "Karkoita valitut profiilit");
define("A_SHEET1_10", "Nyt sinun täytyy siirtyä karkoitettujen käyttäjien lomakkeelle muuttaaksesi valintojasi.");
define("A_SHEET1_11", "Yhteys viimeksi");
define("A_USER", "Käyttäjä");
define("A_MODER", "Valvoja");
define("A_PAGE_CNT", "Sivu %s / %s");

// Frame for banished users
define("A_SHEET2_1", "Lista karkoitetuista käyttäjistä ja huoneista");
define("A_SHEET2_2", "IP");
define("A_SHEET2_3", "Huoneet");
define("A_SHEET2_4", "Kunnes");
define("A_SHEET2_5", "Ikuisesti");
define("A_SHEET2_6", "Huoneet erotetaan toisistaan pilkulla ilman välejä (,) jos alle 4, muuten käytetään '<B>&nbsp;*&nbsp;</B>' merkkiä<BR>karkoitukseen kaikista huoneista.");
define("A_SHEET2_7", "Poista valittujen käyttäjien karkoitus");
define("A_SHEET2_8", "Ei karkoitettuja käyttäjiä.");

// Frame for cleaning rooms
define("A_SHEET3_1", "Lista olemassaolevista huoneista");
define("A_SHEET3_2", " \"ei-oletus\" huoneen tyhjennys poistaa myös kaikki<BR>tämän huoneen valvoja statukset.");
define("A_SHEET3_3", "Tyhjennä valitut huoneet");
define("A_SHEET3_4", "Ei tyhjennettäviä huoneita.");

// Frame for sending mails
define("A_SHEET4_0", "Et ole asettanut tarvittavia muuttujia<BR>'chat/admin/mail4admin.php3' skriptistä.");
define("A_SHEET4_1", "Lähetä e-mailit");
define("A_SHEET4_2", "Kohde:");
define("A_SHEET4_3", "Valitse kaikki");
define("A_SHEET4_4", "Aihe:");
define("A_SHEET4_5", "Viesti:");
define("A_SHEET4_6", "Aloita postitus");
define("A_SHEET4_7", "Kaikki e-mailit on lähetetty.");
define("A_SHEET4_8", "Sisäinen virhe lähetyksen aikana.");
define("A_SHEET4_9", "Osoite, aihe tai viesti puuttuu!");
?>