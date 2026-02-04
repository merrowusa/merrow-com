<?php
// File : german.lang.php3
// Translation by Robert Schaller <robert@schaller.com> & Wolfgang Schneider <schneider@bibelcenter.de>
//    & Martin Sander <Martin.Sander@touch-screen.de> & Bernard Piller <bernard@bmpsystems.com>
//    & Reinhard Hofmann <e9625556@student.tuwien.ac.at> & Christian Hacker <c.hacker@dreamer-chat.de>

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// Top frame
define("A_MENU_0", "Administration für %s");
define("A_MENU_1", "Registrierte Benutzer");
define("A_MENU_2", "Verbannte Benutzer");
define("A_MENU_3", "Räume leeren");
define("A_MENU_4", "e-Mails senden");

// Frame for registered users
define("A_SHEET1_1", "Liste registrierter Benutzer und deren Rechte");
define("A_SHEET1_2", "Benutzername");
define("A_SHEET1_3", "Rechte");
define("A_SHEET1_4", "Moderierte Räume");
define("A_SHEET1_5", "Moderierte Räume werden durch Komma (,) ohne Leerzeichen getrennt.");
define("A_SHEET1_6", "Markierte entfernen");
define("A_SHEET1_7", "Ändern");
define("A_SHEET1_8", "Es existiert kein registrierter Benutzer außer Dir.");
define("A_SHEET1_9", "Markierte Profile verbannen");
define("A_SHEET1_10", "Jetzt musst Du Deine Auswahl auf der Seite Verbannte Benutzer verfeinern.");
define("A_SHEET1_11", "Letzte Verbindung");
define("A_USER", "Benutzer");
define("A_MODER", "Moderator");
define("A_PAGE_CNT", "Page %s of %s");

// Frame for banished users
define("A_SHEET2_1", "Liste Verbannter Benutzer und der jeweiligen Räume");
define("A_SHEET2_2", "IP");
define("A_SHEET2_3", "Betroffener Raum");
define("A_SHEET2_4", "Bis");
define("A_SHEET2_5", "ohne Ende");
define("A_SHEET2_6", "Räume werden durch Kommas (,) ohne Abstand getrennt, wenn es weniger als 4 sind, ansonsten verbannt das '<B>&nbsp;*&nbsp;</B>' Zeichen<BR>aus allen Räumen.");
define("A_SHEET2_7", "Verbannung für gewählte(n) Benutzer aufheben");
define("A_SHEET2_8", "Es existieren keine verbannten Benutzer.");

// Frame for cleaning rooms
define("A_SHEET3_1", "Liste der bestehenden Räume.");
define("A_SHEET3_2", "Das Löschen eines \"nicht-Default\" Raumes entfernt auch alle Moderator<BR>Status dieses Raums.");
define("A_SHEET3_3", "Gewählte Räume löschen");
define("A_SHEET3_4", "Es existiert kein Raum zum Löschen.");

// Frame for sending mails
define("A_SHEET4_0", "Du hast die erforderlichen Variablen in 'chat/admin/mail4admin.php3'<BR>noch nicht angepasst.");
define("A_SHEET4_1", "e-Mails versenden");
define("A_SHEET4_2", "Empfänger:");
define("A_SHEET4_3", "Alle auswählen");
define("A_SHEET4_4", "Betreff:");
define("A_SHEET4_5", "Nachricht:");
define("A_SHEET4_6", "Rundsendung starten");
define("A_SHEET4_7", "Alle e-Mails wurden gesendet.");
define("A_SHEET4_8", "Interner Fehler während des Sendevorganges.");
define("A_SHEET4_9", "Adresse, Betreff oder Nachricht fehlt!");
?>