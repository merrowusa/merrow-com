<?php
// File : french.lang.php3
// Translation by Loïc Chapeaux <lolo@phpheaven.net>

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// Top frame
define("A_MENU_0", "Administration de %s");
define("A_MENU_1", "Utilisateurs enregistrés");
define("A_MENU_2", "Utilisateurs bannis");
define("A_MENU_3", "Dépoussièrage des salons");
define("A_MENU_4", "Envoyer un e-mail");

// Frame for registered users
define("A_SHEET1_1", "Liste des utilisateurs enregistrés et de leurs droits");
define("A_SHEET1_2", "Pseudo");
define("A_SHEET1_3", "Autorisations");
define("A_SHEET1_4", "Salons modérés");
define("A_SHEET1_5", "Les salons modérés sont séparés par une virgule sans espace (,).");
define("A_SHEET1_6", "Supprimer les profils selectionnés");
define("A_SHEET1_7", "Modifier");
define("A_SHEET1_8", "Il n'y a pas d'utilisateur enregistré hors vous-même.");
define("A_SHEET1_9", "Bannir les profils selectionnés");
define("A_SHEET1_10", "Vous devez maintenant vous rendre dans la feuille concernant les utiliseurs bannis afin d'affiner vos choix.");
define("A_SHEET1_11", "Dernier accès");
define("A_USER", "Utilisateur");
define("A_MODER", "Modérateur");
define("A_PAGE_CNT", "Page %s de %s");

// Frame for banished users
define("A_SHEET2_1", "Liste des utilisateurs bannis et des salons concernés");
define("A_SHEET2_2", "IP");
define("A_SHEET2_3", "Salons concernés");
define("A_SHEET2_4", "Jusqu'au");
define("A_SHEET2_5", "pas de limite");
define("A_SHEET2_6", "Les salons sont séparés par une virgule sans espace (,) s'ils sont moins de 4, au-delà<BR>le sigle '<B>&nbsp;*&nbsp;</B>' bannit de tout salon.");
define("A_SHEET2_7", "Révoquer le bannissement des utilisateurs selectionnés");
define("A_SHEET2_8", "Aucun utilisateur n'est banni.");

// Frame for cleaning rooms
define("A_SHEET3_1", "Liste des salons existants");
define("A_SHEET3_2", "Purger un salon qui n'appartient pas aux salons \"par défaut\"<BR>supprimera aussi, pour les utilisateurs concernés, le statut de<BR>modérateur pour ce salon.");
define("A_SHEET3_3", "Purger les salons selectionnés");
define("A_SHEET3_4", "Il n'est aucun salon contenant des messages.");

// Frame for sending mails
define("A_SHEET4_0", "Des variables requises n'ont pas été renseignées dans<BR>le script 'chat/admin/mail4admin.php3'.");
define("A_SHEET4_1", "Envoyer un e-mail");
define("A_SHEET4_2", "A :");
define("A_SHEET4_3", "Selectionner tout");
define("A_SHEET4_4", "Objet :");
define("A_SHEET4_5", "Message :");
define("A_SHEET4_6", "Envoyer");
define("A_SHEET4_7", "Les e-mails ont été envoyés.");
define("A_SHEET4_8", "Une erreur interne est survenue lors de l'envoi des e-mails.");
define("A_SHEET4_9", "Aucun destinataire n'a été selectionné ou bien l'objet ou le message est vide !");
?>