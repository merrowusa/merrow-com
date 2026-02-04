<?php
// File : brazilian_portuguese.lang.php3
// Translation by Fabiano R. Prestes <zoso@post.com>

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// Top frame
define("A_MENU_0", "Administração para %s");
define("A_MENU_1", "Usuários registrados");
define("A_MENU_2", "Usuários banidos");
define("A_MENU_3", "Salas vazias");
define("A_MENU_4", "Send mails");

// Frame for registered users
define("A_SHEET1_1", "Lista de usuários registrados e suas permissões");
define("A_SHEET1_2", "Nome do usuário");
define("A_SHEET1_3", "Permissões");
define("A_SHEET1_4", "Moderar salas");
define("A_SHEET1_5", "Salas moderadas são separadas por vírgulas (,) sem espaços.");
define("A_SHEET1_6", "Remover usuários selecionados");
define("A_SHEET1_7", "Modificar");
define("A_SHEET1_8", "Não existe nenhum usuário registrado com exceção de você.");
define("A_SHEET1_9", "Banir usuários selecionados");
define("A_SHEET1_10", "Agora você deve ir à página de usuários banidos para refinar suas escolhas.");
define("A_SHEET1_11", "Última conexão");
define("A_USER", "Usuário");
define("A_MODER", "Moderador");
define("A_PAGE_CNT", "Page %s of %s");

// Frame for banished users
define("A_SHEET2_1", "Lista de usuários banidos e salas relacionadas");
define("A_SHEET2_2", "IP");
define("A_SHEET2_3", "Salas relacionadas");
define("A_SHEET2_4", "Até");
define("A_SHEET2_5", "sem fim");
define("A_SHEET2_6", "salas são separadas por vírgulas sem espaços (,) se forem menos que 4, caso contrário o '<B>&nbsp;*&nbsp;</B>') <BR>bane de todas as salas.");
define("A_SHEET2_7", "Remover banimento para usuário marcado(s)");
define("A_SHEET2_8", "Não existe nenhum usuário banido.");

// Frame for cleaning rooms
define("A_SHEET3_1", "Lista das salas existentes");
define("A_SHEET3_2", "Esvaziar uma sala \"não-padrão\" vai remover todos os status de moderador<BR>para esta sala.");
define("A_SHEET3_3", "Esvaziar sala selecionada");
define("A_SHEET3_4", "Não existe nenhuma sala para esvaziar.");

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