<?php
// File: spanish.admin.php3
// Spanish translation from version 0.14.3 made by Josep Román (josep.roman@zuerich-see.ch)
// Date: 3th June 2001

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// Top frame
define("A_MENU_0", "Administración para %s");
define("A_MENU_1", "Usuarios registrados");
define("A_MENU_2", "Usuarios desautorizados");
define("A_MENU_3", "Inicializar salas");
define("A_MENU_4", "Enviar mensajes");

// Frame for registered users
define("A_SHEET1_1", "Listado de los usuarios registrados y sus permisos");
define("A_SHEET1_2", "Usuario");
define("A_SHEET1_3", "Permisos");
define("A_SHEET1_4", "Salas moderadas");
define("A_SHEET1_5", "Las salas moderadas se separan por comas (,) y sin espacios.");
define("A_SHEET1_6", "Eliminar perfiles chequeados");
define("A_SHEET1_7", "Cambiar");
define("A_SHEET1_8", "No hay usuarios registrados excepto usted.");
define("A_SHEET1_9", "Perfiles desautorizados chequeados");
define("A_SHEET1_10", "Ahora vaya a la lista de usuarios desautorizados para refinar su selección.");
define("A_SHEET1_11", "Ultima conexión");
define("A_USER", "Usuario");
define("A_MODER", "Moderador");
define("A_PAGE_CNT", "Página %s de %s");

// Frame for banished users
define("A_SHEET2_1", "Listado de los usuarios desautorizados y salas relacionadas");
define("A_SHEET2_2", "IP");
define("A_SHEET2_3", "Salas relacionadas");
define("A_SHEET2_4", "Hasta");
define("A_SHEET2_5", "sin fin");
define("A_SHEET2_6", "Salas se separan por comas  (,) y sin espacios si hay menos de 4, sino el signo '<B>&nbsp;*&nbsp;</B>' indica<BR>desautorización para todas los salas.");
define("A_SHEET2_7", "Eliminar la desautorización para usuario(s) chequeado(s)");
define("A_SHEET2_8", "No hay usuarios desautorizados.");

// Frame for cleaning rooms
define("A_SHEET3_1", "Listado de las salas existentes");
define("A_SHEET3_2", "Inicializar una sala que no es la sala \"por-defecto\" eliminará el status de moderador<BR>para esta sala.");
define("A_SHEET3_3", "Inicializar salas seleccionadas");
define("A_SHEET3_4", "No hay salas para inicializar.");

// Frame for sending mails
define("A_SHEET4_0", "Usted no ha definido las variables requeridas en el script <BR>'chat/admin/mail4admin.php3'.");
define("A_SHEET4_1", "Enviar e-mails");
define("A_SHEET4_2", "A:");
define("A_SHEET4_3", "Seleccionar todo");
define("A_SHEET4_4", "Tema:");
define("A_SHEET4_5", "Mensaje:");
define("A_SHEET4_6", "Comenzar a enviar");
define("A_SHEET4_7", "Todos los e-mails han sido enviados.");
define("A_SHEET4_8", "Error interno al enviar los e-mails.");
define("A_SHEET4_9", "Dirección(nes), el tema del mensaje o el propio mensaje incompletos!");
?>