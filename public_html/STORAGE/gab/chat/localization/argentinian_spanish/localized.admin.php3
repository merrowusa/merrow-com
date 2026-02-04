<?php
// File : argentinian_spanish/localized.admin.php3
// Traducido y Adaptado al español de uso corriente en Argentina 
//   por Jorge Colaccini <jrc@informas.com>

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// Top frame
define("A_MENU_0", "Administración para %s");
define("A_MENU_1", "Usuarios registrados");
define("A_MENU_2", "Usuarios bloqueados");
define("A_MENU_3", "Limpiar salones");
define("A_MENU_4", "Enviar e-mails");

// Frame for registered users
define("A_SHEET1_1", "Listado de usuarios registrados y sus permisos");
define("A_SHEET1_2", "Usuario");
define("A_SHEET1_3", "Permisos");
define("A_SHEET1_4", "Salones moderados");
define("A_SHEET1_5", "Salones moderados son separados por coma (,) sin espacios.");
define("A_SHEET1_6", "Remover perfiles marcados");
define("A_SHEET1_7", "Cambiar");
define("A_SHEET1_8", "No hay usuarios registrados excepto vos.");
define("A_SHEET1_9", "Bloquear los perfiles marcados");
define("A_SHEET1_10", "Ahora tenés que ir a <b>Usuarios bloqueados</b> para ajustar la lista.");
define("A_SHEET1_11", "Ultima conexión");
define("A_USER", "Usuario");
define("A_MODER", "Moderador");
define("A_PAGE_CNT", "Página %s de %s");

// Frame for banished users
define("A_SHEET2_1", "Listado de usuarios bloqueados y salones correspondientes");
define("A_SHEET2_2", "IP");
define("A_SHEET2_3", "Salones correspondientes");
define("A_SHEET2_4", "Hasta");
define("A_SHEET2_5", "no termina");
define("A_SHEET2_6", "Los salones son separados por comas sin espacios (,) si hay menos de 4, más '<B>&nbsp;*&nbsp;</B>' señalar<BR>bloqueados para todos los salones.");
define("A_SHEET2_7", "Remover <b>bloqueo</B> para usuario/s marcado/s");
define("A_SHEET2_8", "No hay usuarios bloqueados.");

// Frame for cleaning rooms
define("A_SHEET3_1", "Listado de salones existentes");
define("A_SHEET3_2", "Al limpiar cualquier salón que no sea el \"predeterminado\" se removerá también<BR>la condición de moderador para cualquier usuario asignado al mismo como tal.");
define("A_SHEET3_3", "Limpiar salones seleccionados");
define("A_SHEET3_4", "No hay salones para limpiar.");

// Frame for sending mails
define("A_SHEET4_0", "No ingresaste las variables requeridas en<BR>'chat/admin/mail4admin.php3' script.");
define("A_SHEET4_1", "Enviar e-mails");
define("A_SHEET4_2", "A:");
define("A_SHEET4_3", "Seleccionar todo");
define("A_SHEET4_4", "Detalle:");
define("A_SHEET4_5", "Mensaje:");
define("A_SHEET4_6", "Comenzar a enviar");
define("A_SHEET4_7", "Todos los e-mails han sido enviados.");
define("A_SHEET4_8", "Error interno al enviar los e-mails.");
define("A_SHEET4_9", "Dirección/es, detalle o mensaje perdido!");
?>