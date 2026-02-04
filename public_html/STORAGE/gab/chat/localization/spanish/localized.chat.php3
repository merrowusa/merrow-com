<?php
// File: spanish.chat.php3
// Spanish translation from version 0.14.3 made by Josep Román (josep.roman@zuerich-see.ch)
// Date: 3th June 2001

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "Tutorial");

define("L_WEL_1", "Los mensajes se borran después de");
define("L_WEL_2", "horas y usuarios después de");
define("L_WEL_3", "minutos ...");

define("L_CUR_1", "Hay actualmente");
define("L_CUR_2", "en el chat.");
define("L_CUR_3", "Usuarios en las salas de chat");
define("L_CUR_4", "usuarios en salas privadas");

define("L_SET_1", "Por favor introduzca ...");
define("L_SET_2", "su nombre de usuario");
define("L_SET_3", "el número de mensajes a mostrar");
define("L_SET_4", "el tiempo entre cada actualización");
define("L_SET_5", "Seleccione una sala de chat ...");
define("L_SET_6", "Salas por defecto");
define("L_SET_7", "Haga su elección ...");
define("L_SET_8", "salas públicas creadas por usuarios");
define("L_SET_9", "crear la suya propia");
define("L_SET_10", "pública");
define("L_SET_11", "privada");
define("L_SET_12", "sala");
define("L_SET_13", "Y ahora, hacer click en");
define("L_SET_14", "Chatear!");

define("L_SRC", "es libre para entrar");

define("L_SECS", "segundos");
define("L_MIN", "minuto");
define("L_MINS", "minutos");

// registration stuff:
define("L_REG_1", "su contraseña");
define("L_REG_1r", "(solo si usted está registrado)");
define("L_REG_2", "Administración de cuenta");
define("L_REG_3", "Registrarse primero");
define("L_REG_4", "Edite sus datos");
define("L_REG_5", "Borrar usuario");
define("L_REG_6", "Registro de usuario");
define("L_REG_7", "Su contraseña");
define("L_REG_8", "Su e-mail");
define("L_REG_9", "Usted ha sido registrado satisfactoriamente.");
define("L_REG_10", "Atrás");
define("L_REG_11", "Editando");
define("L_REG_12", "Modificando datos del usuario");
define("L_REG_13", "Borrando usuario");
define("L_REG_14", "Entrar");
define("L_REG_15", "Entrar");
define("L_REG_16", "Cambiar");
define("L_REG_17", "Sus datos han sido actualizados satisfactoriamente.");
define("L_REG_18", "Usted ha sido expulsado de la sala por el moderador.");
define("L_REG_19", "Quiere ser realmente borrado?");
define("L_REG_20", "Si");
define("L_REG_21", "Usted ha sido borrado satisfactoriamente.");
define("L_REG_22", "No");
define("L_REG_25", "Cerrar");
define("L_REG_30", "Nombre");
define("L_REG_31", "Apellido");
define("L_REG_32", "WEB");
define("L_REG_33", "mostrar públicamente su e-mail");
define("L_REG_34", "Editando datos del usuario");
define("L_REG_35", "Administración");
define("L_REG_36", "idiomas posibles");
define("L_REG_37", "Campos con un <span class=\"error\">*</span> deben ser introducidos.");
define("L_REG_39", "La sala en la que se encontraba ha sido borrada por el administrador.");
define("L_REG_45", "Sexo");
define("L_REG_46", "Masculino");
define("L_REG_47", "Femenino");

// e-mail validation stuff
define("L_EMAIL_VAL_1", "Sus datos para entrar en el chat");
define("L_EMAIL_VAL_2", "Bienvenido/a a nuestro servidor de chat.");
define("L_EMAIL_VAL_Err", "Error interno, contacte con el administrador en: <a href=\"mailto:%s\">%s</a>.");
define("L_EMAIL_VAL_Done", "Su contraseña ha sido enviada a la dirección de<BR>e-mail.");

// admin stuff
define("L_ADM_1", "%s no es un moderador de esta sala.");
define("L_ADM_2", "Usted no es un usuario registrado.");

// error messages
define("L_ERR_USR_1", "Este nombre de usuario ya está siendo utilizado. Elija otro, por favor.");
define("L_ERR_USR_2", "Usted debe elegir un nombre de usuario.");
define("L_ERR_USR_3", "Este nombre de usuario está registrado. Escriba su contraseña o elija otro nombre de usuario.");
define("L_ERR_USR_4", "Usted ha introducido incorrectamente su contraseña.");
define("L_ERR_USR_5", "Usted debe introducir su nombre de usuario.");
define("L_ERR_USR_6", "Usted debe introducir su contraseña.");
define("L_ERR_USR_7", "Usted debe introducir su e-mail.");
define("L_ERR_USR_8", "Usted debe introducir una dirección correcta de e-mail.");
define("L_ERR_USR_9", "Este nombre de usuario está en uso.");
define("L_ERR_USR_10", "Nombre de usuario o contraseña incorrecta.");
define("L_ERR_USR_11", "Usted debe ser administrador.");
define("L_ERR_USR_12", "Usted es el administrador, por lo tanto no puede ser eliminado.");
define("L_ERR_USR_13", "Para crear su propia sala, usted debe estar registrado.");
define("L_ERR_USR_14", "Usted debe estar registrado antes de chatear.");
define("L_ERR_USR_15", "Usted debe introducir su nombre completo.");
define("L_ERR_USR_16", "El nombre de usuario no puede contener espacios, comas o barras (\\).");
define("L_ERR_USR_17", "Esta sala no existe, y usted no está habilitado para crear una.");
define("L_ERR_USR_18", "Su nombre de usuario está deshabilitado.");
define("L_ERR_USR_19", "Usted no puede estar en más de una sala al mismo tiempo.");
define("L_ERR_USR_20", "Usted ha sido desautorizado a entrar o a esta sala o al chat.");
define("L_ERR_ROM_1", "Los nombres de las salas no pueden contener comas o barras (\\).");
define("L_ERR_ROM_2", "Palabra desautorizada en el nombre de la sala que usted quiere crear.");
define("L_ERR_ROM_3", "Esta sala ya existe como pública.");
define("L_ERR_ROM_4", "Nombre de sala inválido.");

// users frame or popup
define("L_EXIT", "Salir");
define("L_DETACH", "Separar");
define("L_EXPCOL_ALL", "Expandir/Contraer todo");
define("L_CONN_STATE", "Conexión establecida");
define("L_CHAT", "Chat");
define("L_USER", "usuario");
define("L_USERS", "usuarios");
define("L_NO_USER", "No hay usuario");
define("L_ROOM", "sala");
define("L_ROOMS", "salas");
define("L_EXPCOL", "Expandir/Contraer la sala");
define("L_BEEP", "Bip/no bip cuando entra un usuario ");
define("L_PROFILE", "mostrar datos");
define("L_NO_PROFILE", "No mostrar datos");

// input frame
define("L_HLP", "Ayuda");
define("L_BAD_CMD", "Este no es un comando válido!");
define("L_ADMIN", "%s es ya el administrador!");
define("L_IS_MODERATOR", "%s es ya el moderador!");
define("L_NO_MODERATOR", "Solo un moderador de esta sala puede utilizar este comando.");
define("L_MODERATOR", "%s es ahora un moderador de esta sala.");
define("L_NONEXIST_USER", "Usuario %s no está en esta sala.");
define("L_NONREG_USER", "Usuario %s no está registrado.");
define("L_NONREG_USER_IP", "Su IP es: %s.");
define("L_NO_KICKED", "Usuario %s es un moderador o el administrador y no puede ser expulsado.");
define("L_KICKED", "Usuario %s ha sido expulsado satisfactoriamente.");
define("L_NO_BANISHED", "Usuario %s es un moderador o el administrador y no puede ser desautorizado.");
define("L_BANISHED", "Usuario %s ha sido desautorizado.");
define("L_SVR_TIME", "Hora del servidor: ");
define("L_NO_SAVE", "No hay mensajes para guardar!");
define("L_NO_ADMIN", "Solamente el administrador puede utilizar este comando.");
define("L_ANNOUNCE", "ANUNCIO");
define("L_INVITE", "%s le pide que entre a la sala <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a>.");
define("L_INVITE_REG", " Usted debe estar registrado para entrar en esta sala.");
define("L_INVITE_DONE", "Su invitación ha sido enviada a %s.");
define("L_OK", "Enviar");

// help popup
define("L_HELP_TIT_1", "Caritas");
define("L_HELP_TIT_2", "Formato de texto para mensajes");
define("L_HELP_FMT_1", "Usted puede poner negritas, itálicas o texto subrayado en mensajes utilizando &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; o &lt;U&gt; &lt;/U&gt; tags.<BR>Por ejemplo, &lt;B&gt;este texto&lt;/B&gt; producirá <B>este texto</B>.");
define("L_HELP_FMT_2", "Para crear un enlace (para e-mail o URL) en su mensaje, simplemente escriba la correspondiente dirección sin etiquetas HTML. El enlace será creado automáticamente.");
define("L_HELP_TIT_3", "Comandos");
define("L_HELP_USR", "usuario");
define("L_HELP_MSG", "mensaje");
define("L_HELP_ROOM", "sala");
define("L_HELP_CMD_0", "Las llaves {} indican que se debe introducir un parámetro. Los corchetes [] que es opcional.");
define("L_HELP_CMD_1a", "Defini el número de mensajes a mostrar. El valor mínimo y por defecto es 5.");
define("L_HELP_CMD_1b", "Recarga y muestra los n últimos mensajes. Mínimo y por defecto, son 5.");
define("L_HELP_CMD_2a", "Tiempo de actualización de la lista de mensajes (en segundos).<BR>Si n no está especificado o es menor que 3, alterna entre no producir ningún refresco de pantalla o refrescar la pantalla cada 10 segundos.");
define("L_HELP_CMD_2b", "Tiempo de actualización de la lista de mensajes y la lista de usuarios (en segundos).<BR>Si n no está especificado o es menor que 3, alterna entre no producir ningún refresco de pantalla o refrescar la pantalla cada 10 segundos.");
define("L_HELP_CMD_3", "Invierte el orden de aparición de los mensajes.");
define("L_HELP_CMD_4", "Entra en otra sala, creando una si no existe, siempre que usted esté habilitado para hacerlo.<BR>n igual 0 para que la sala sea privada, 1 para pública. Por defecto es siempre 1.");
define("L_HELP_CMD_5", "Deje el chat después de mostrar un mensaje opcional.");
define("L_HELP_CMD_6", "Evita mostrar mensajes de un usuario, si se especifica su nombre.<BR>Desactiva la opción de ignorar a un usuario si se escribe un guión (-) y su nombre.<BR>Si no se le pasa ningún parámetro, este comando abre una ventana mostrando todos los usuarios ignorados.");
define("L_HELP_CMD_7", "Recupera el texto previo escrito (comando o mensaje).");
define("L_HELP_CMD_8", "Muestra/Oculta la hora antes de cada mensaje.");
define("L_HELP_CMD_9", "Expulsa a un usuario de la sala. Este comando solo puede ser utilizado por el moderador.");
define("L_HELP_CMD_10", "Envia un mensaje privado a un usuario específico (otros usuarios no pueden verlo).");
define("L_HELP_CMD_11", "Muestra información acerca de un usuario específico.");
define("L_HELP_CMD_12", "Abre la ventana para editar los datos del usuario");
define("L_HELP_CMD_13", "Notifica cada vez que un usuario entra/sale de la sala actual.");
define("L_HELP_CMD_14", "Permite al administrador o moderador(es) de la sala actual promocionar a otro usuario registrado a moderador de esa misma sala.");
define("L_HELP_CMD_15", "Limpia el area de mensajes del chat y muestra solamente los últimos 5.");
define("L_HELP_CMD_16", "Guarda los últimos n mensajes (las notificaciones son excluídas) en un archivo HTML. Si n no está especificado, todos los mensajes serán guardados.");
define("L_HELP_CMD_17", "Permite al administrador enviar un anuncio a todos los usuarios en todas las salas.");
define("L_HELP_CMD_18", "Invita a un usuario que está chateando a unirse a su sala.");
define("L_HELP_CMD_19", "Permite al(los) moderador(es) de una sala o al administrador a \"desautorizar\" un usuario de una sala por un tiempo determinado definido por el administrador.<BR>Este último, puede desautorizar a un usuario de una sala diferente a la que él se encuentra. Puede incluso utilizar la opción '<B>&nbsp;*&nbsp;</B>' para desautorizar al usuario \"para siempre\" con lo que el usuario es eliminado de todo el chat.");
define("L_HELP_CMD_20", "Describe lo que está usted haciendo, sin referencia de usted mismo.");

// messages frame
define("L_NO_MSG", "No hay mensajes ...");
define("L_TODAY_DWN", "Los mensajes que han sido enviados hoy comienzan abajo");
define("L_TODAY_UP", "Los mensajes que han sido enviados hoy comienzan arriba");

// message colors
$TextColors = array(	"Negro" => "#000000",
				"Rojo" => "#FF0000",
				"Verde" => "#009900",
				"Azul" => "#0000FF",
				"Morado" => "#9900FF",
				"Oscuro rojo" => "#990000",
				"Oscuro verde" => "#006600",
				"Oscuro azul" => "#000099",
				"Marrón" => "#996633",
				"Azul agua" => "#006699",
				"Naranja" => "#FF6600");

// ignored popup
define("L_IGNOR_TIT", "Ignorado");
define("L_IGNOR_NON", "Usuario no ignorado");

// whois popup
define("L_WHOIS_ADMIN", "Administrador");
define("L_WHOIS_MODER", "Moderador");
define("L_WHOIS_USER", "Usuario");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s entró en esta sala");
define("L_EXIT_ROM", "%s salió de esta sala");
?>