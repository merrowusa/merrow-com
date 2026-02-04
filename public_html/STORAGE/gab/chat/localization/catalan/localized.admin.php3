<?php
// File : catalan.lang.php3
// Translation by Jan Arbona <jan@myp.ad>

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// Top frame
define("A_MENU_0", "Administració per a %s");
define("A_MENU_1", "Usuaris registrats");
define("A_MENU_2", "Usuaris marcats");
define("A_MENU_3", "Netejar sales");
define("A_MENU_4", "Send mails");

// Frame for registered users
define("A_SHEET1_1", "Llista dels usuaris registrats i quins permissos tenen");
define("A_SHEET1_2", "Nom d'usuari");
define("A_SHEET1_3", "Permissos");
define("A_SHEET1_4", "Sales moderades");
define("A_SHEET1_5", "Les sales moderades es troben separades per comes (,) sense espais en blanc.");
define("A_SHEET1_6", "Eliminar les dades seleccionades");
define("A_SHEET1_7", "Modificar");
define("A_SHEET1_8", "Cap més usuari registrat a excepció de vos.");
define("A_SHEET1_9", "Marcar els perfils assenyalats");
define("A_SHEET1_10", "Aneu ara a Usuaris marcats per a modificar les dades i les sales.");
define("A_SHEET1_11", "Darrera connexió");
define("A_USER", "Usuari");
define("A_MODER", "Moderador");
define("A_PAGE_CNT", "Page %s of %s");

// Frame for banished users
define("A_SHEET2_1", "Llista dels usuaris marcats i a quines sales");
define("A_SHEET2_2", "IP");
define("A_SHEET2_3", "Sales especificades");
define("A_SHEET2_4", "Entre");
define("A_SHEET2_5", "sense final");
define("A_SHEET2_6", "les sales es troben separades per comes (,) si son més de 4, llavors empreu '<B>&nbsp;*&nbsp;</B>' com a signe<BR>per a marcar en totes les sales.");
define("A_SHEET2_7", "Esborrar marques de: usuari(s) marcat(s)");
define("A_SHEET2_8", "Cap usuari marcat.");

// Frame for cleaning rooms
define("A_SHEET3_1", "Llista de sales existents");
define("A_SHEET3_2", "Netejar \"sales no del sistema\" també neteja els moderadors i els seus status<BR>per a aquesta sala.");
define("A_SHEET3_3", "Netejar sales seleccionades");
define("A_SHEET3_4", "Cap sala per a netejar.");

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