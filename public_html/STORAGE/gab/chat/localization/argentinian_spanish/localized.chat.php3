<?php
// File : argentinian_spanish/localized.chat.php3
// Traducido y Adaptado al español de uso corriente en Argentina 
//   por Jorge Colaccini <jrc@informas.com>

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "Tutorial");

define("L_WEL_1", "Los mensajes se borrarán después de");
define("L_WEL_2", "horas y los usuarios después de");
define("L_WEL_3", "minutos ...");

define("L_CUR_1", "Hay actualmente");
define("L_CUR_2", "en el chat.");
define("L_CUR_3", "Usuarios en los salones de chat");
define("L_CUR_4", "usuarios en salones privados");

define("L_SET_1", "Por favor identificate...");
define("L_SET_2", "tu nombre de usuario");
define("L_SET_3", "el número de mensajes a mostrar");
define("L_SET_4", "el tiempo entre cada actualización");
define("L_SET_5", "Seleccioná un salón de chat ...");
define("L_SET_6", "Salón elegido la última vez");
define("L_SET_7", "Hacé tu elección ...");
define("L_SET_8", "salones públicos creados por usuarios");
define("L_SET_9", "crear tu propio salón");
define("L_SET_10", "público");
define("L_SET_11", "privado");
define("L_SET_12", "salón");
define("L_SET_13", "Para chatear, hacé click aquí");
define("L_SET_14", "chat");

define("L_SRC", "están habilitados");

define("L_SECS", "segundos");
define("L_MIN", "minuto");
define("L_MINS", "minutos");

// registration stuff:
define("L_REG_1", "tu contraseña");
define("L_REG_1r", "(sólo si ya estás registrado/a)");
define("L_REG_2", "Administración de cuenta");
define("L_REG_3", "Registrate");
define("L_REG_4", "Editá tus datos");
define("L_REG_5", "Borrate como usuario");
define("L_REG_6", "Registración de usuario");
define("L_REG_7", "tu contraseña");
define("L_REG_8", "tu e-mail");
define("L_REG_9", "Has sido registrado/a satisfactoriamente.");
define("L_REG_10", "Atrás");
define("L_REG_11", "Editando");
define("L_REG_12", "Modificando información de usuarios");
define("L_REG_13", "Borrando usuario");
define("L_REG_14", "Identificación");
define("L_REG_15", "Acceder");
define("L_REG_16", "Cambiar");
define("L_REG_17", "Tus datos han sido ingresados satisfactoriamente.");
define("L_REG_18", "Has ha sido echado/a fuera del salón por el moderador.");
define("L_REG_19", "Realmente quiere ser eliminado/a?");
define("L_REG_20", "Si");
define("L_REG_21", "Has sido removido/a satisfactoriamente.");
define("L_REG_22", "No");
define("L_REG_25", "Cerrar");
define("L_REG_30", "Nombre");
define("L_REG_31", "Apellido");
define("L_REG_32", "WEB");
define("L_REG_33", "mostrar públicamente tu e-mail");
define("L_REG_34", "Editando datos del usuario");
define("L_REG_35", "Administración");
define("L_REG_36", "idiomas posibles");
define("L_REG_37", "Los campos con un <span class=\"error\">*</span> necesariamente deben ser completados.");
define("L_REG_39", "El salón en el que te encontrabas ha sido removido por el administrador.");
define("L_REG_45", "Sexo");
define("L_REG_46", "Masculino");
define("L_REG_47", "Femenino");

// e-mail validation stuff
define("L_EMAIL_VAL_1", "Tus datos para ingresar al chat");
define("L_EMAIL_VAL_2", "Bienvenido(a) a nuestro servidor de chat.");
define("L_EMAIL_VAL_Err", "Error interno, contactarse con el administrador a: <a href=\"mailto:%s\">%s</a>.");
define("L_EMAIL_VAL_Done", "Tu contraseña ha sido enviada a la dirección de<BR>e-mail.");

// admin stuff
define("L_ADM_1", "%s no es un moderador para este salón.");
define("L_ADM_2", "No sos un usuario registrado.");

// error messages
define("L_ERR_USR_1", "Este nombre de usuario ya está siendo utilizado. Elegí otro, por favor.");
define("L_ERR_USR_2", "Debes elegir un nombre de usuario.");
define("L_ERR_USR_3", "Este nombre de usuario está registrado. Escribí su contraseña o elegí otro nombre de usuario.");
define("L_ERR_USR_4", "Has ingresado incorrectamente tu contraseña.");
define("L_ERR_USR_5", "Debes ingresar tu nombre de usuario.");
define("L_ERR_USR_6", "Debes ingresar tu contraseña.");
define("L_ERR_USR_7", "Debes ingresar tu e-mail."); 
define("L_ERR_USR_8", "Debes ingresar una dirección de e-mail válida.");
define("L_ERR_USR_9", "Este nombre de usuario está en uso.");
define("L_ERR_USR_10", "Nombre de usuario o contraseña incorrectos.");
define("L_ERR_USR_11", "Debes ser administrador.");
define("L_ERR_USR_12", "Eres el administrador, por lo tanto no puedes ser removido.");
define("L_ERR_USR_13", "Para crear tu propio salón, debes estar registrado como usuario.");
define("L_ERR_USR_14", "Debes estar registrado como usuario antes de chatear.");
define("L_ERR_USR_15", "Debes ingresar tu nombre completo.");
define("L_ERR_USR_16", "El nombre de usuario no puede contener espacios, comas o barras (\\).");
define("L_ERR_USR_17", "Este salón no existe, y no estás habilitado para crear uno.");
define("L_ERR_USR_18", "Tu nombre de usuario está bloqueado."); 
define("L_ERR_USR_19", "No puedes estar en más de un salón al mismo tiempo.");
define("L_ERR_USR_20", "Has sido bloqueado desde este salón o desde el chat.");
define("L_ERR_ROM_1", "Los nombres de los salones no pueden contener comas o barras (\\).");
define("L_ERR_ROM_2", "Hay palabras no válidas en el nombre del salón que quieres crear.");
define("L_ERR_ROM_3", "Este salón ya existe como público.");
define("L_ERR_ROM_4", "Nombre de salón inválido.");

// users frame or popup
define("L_EXIT", "Salir");
define("L_DETACH", "Desplegar");
define("L_EXPCOL_ALL", "Desplegar/Replegar todas");
define("L_CONN_STATE", "Conexión establecida");
define("L_CHAT", "Chat");
define("L_USER", "usuario");
define("L_USERS", "usuarios");
define("L_NO_USER", "No hay usuarios");
define("L_ROOM", "salón");
define("L_ROOMS", "salones");
define("L_EXPCOL", "Desplegar/Replegar este salón");
define("L_BEEP", "Beep/no beep cuando el usuario ingresa");
define("L_PROFILE", "mostrar perfil de usuario (datos)");
define("L_NO_PROFILE", "No hay perfil de usuario (datos)");

// input frame
define("L_HLP", "Ayuda");
define("L_BAD_CMD", "Este no es un comando válido!");
define("L_ADMIN", "%s ya es el administrador!");
define("L_IS_MODERATOR", "%s ya es el moderador!");
define("L_NO_MODERATOR", "Solo un moderador de este salón puede utilizar este comando.");
define("L_MODERATOR", "%s es ahora un moderador de este salón.");
define("L_NONEXIST_USER", "El usuario %s no está en este salón.");
define("L_NONREG_USER", "El usuario %s no está registrado.");
define("L_NONREG_USER_IP", "Su dirección de IP es: %s.");
define("L_NO_KICKED", "El usuario %s es un moderador o el administrador y no puede ser expulsado.");
define("L_KICKED", "El usuario %s ha sido expulsado satisfactoriamente.");
define("L_NO_BANISHED", "El usuario %s es un moderador o el administrador y no puede ser bloqueado.");
define("L_BANISHED", "El usuario %s ha sido bloqueado satisfactoriamente.");
define("L_SVR_TIME", "Hora del servidor: ");
define("L_NO_SAVE", "No hay mensajes para guardar!");
define("L_NO_ADMIN", "Solamente el administrador puede utilizar este comando.");
define("L_ANNOUNCE", "ANUNCIO");
define("L_INVITE", "%s solicitud para que ingrese al usuario a <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a> salón.");
define("L_INVITE_REG", " Debes estar registrado para ingresar en este salón.");
define("L_INVITE_DONE", "Su invitación ha sido enviada a %s.");
define("L_OK", "Enviar");

// help popup
define("L_HELP_TIT_1", "Caritas");
define("L_HELP_TIT_2", "Formato de texto para mensajes");
define("L_HELP_FMT_1", "Puedes poner negritas, itálicas o texto subrayado en mensajes utilizando &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; o &lt;U&gt; &lt;/U&gt; tags.<BR>Por ejemplo, &lt;B&gt;este texto&lt;/B&gt; producirá <B>este texto</B>.");
define("L_HELP_FMT_2", "Para crear un hipervínculo (para e-mail o URL) en tu mensaje, simplemente escribe la correspondiente dirección sin <i>tag</i>. El hipervínculo será creado automáticamente.");
define("L_HELP_TIT_3", "Comandos");
define("L_HELP_USR", "usuario");
define("L_HELP_MSG", "mensaje");
define("L_HELP_ROOM", "salón");
define("L_HELP_CMD_0", "{} representa un dato requerido, [] uno opcional.");
define("L_HELP_CMD_1a", "Establece el número de mensajes a mostrar. Mínimo y por defecto, son 5.");
define("L_HELP_CMD_1b", "Recarga y muestra los n últimos mensajes. Mínimo y por defecto, son 5.");
define("L_HELP_CMD_2a", "Modifica el Tiempo de actualización de la lista de mensajes (en segundos).<BR>Si n no está especificado o es menor que 3, cambia entre <b>no actualizar</b> y <b>actualizar cada 10 seg.</b>.");
define("L_HELP_CMD_2b", "Modifica el Tiempo de actualización de la lista de mensajes y lista de usuarios (en segundos).<BR>Si n no está especificado o es menor que 3, cambia entre <b>no actualizar</b> y <b>actualizar cada 10 seg.</b>.");
define("L_HELP_CMD_3", "Inversión del orden de mensajes.");
define("L_HELP_CMD_4", "Ingresar en otro salón, creando uno si no existe, siempre que estés habilitado/a para hacerlo.<BR><b>n</b> igual a <b>0</b> para privado, <b>1</b> para público. Si no se especifica asume <b>1</b>.");
define("L_HELP_CMD_5", "Abandonar el chat después de mostrar un mensaje opcional.");
define("L_HELP_CMD_6", "Evita mostrar mensajes de un usuario, si se especifica su <i></b>nick</B></I>.<BR>Quita <b>ignorar</b> a un usuario cuando se especifica el <i><b>nick</b></I> precedido por un <b>-</b> (guión), y para todos los usuarios cuando se especifica <b>-</b> (guión) pero no se indica ningún <i>nick</I>.<BR>Si no se especifica ni <b>-</b> (guión) ni <i>nicks</I>, este comando abre una ventana que muestra todos los <i>nicks</I> ignorados.");
define("L_HELP_CMD_7", "Vuelve a mostrar texto previamente ingresado (comando o mensaje).");
define("L_HELP_CMD_8", "Muestra/Oculta la hora, antes de los mensajes.");
define("L_HELP_CMD_9", "Expulsa a un usuario fuera del salón. Este comando solo puede ser utilizado por el moderador.");
define("L_HELP_CMD_10", "Enviar un mensaje privado a un usuario específico (otros usuarios no pueden verlo).");
define("L_HELP_CMD_11", "Muestra información acerca de un usuario específico.");
define("L_HELP_CMD_12", "Abre la ventana para editar los perfiles (datos) de los usuarios");
define("L_HELP_CMD_13", "Notificación de entrada o salida de usuarios en o del salón actual.");
define("L_HELP_CMD_14", "Permite al administrador o moderador(es) del salón actual promover a otro usuario registrado a moderador del mismo salón.");
define("L_HELP_CMD_15", "Limpia de mensajes la ventana y muestra solamente los últimos 5.");
define("L_HELP_CMD_16", "Guarda los últimos n mensajes en un archivo HTML (las notificaciones son excluídas). Si n no está especificado, todos los mensajes de la cuenta serán guardados.");
define("L_HELP_CMD_17", "Permite al administrador enviar un anuncio a todos los usuarios en todos los salones.");
define("L_HELP_CMD_18", "Invita a un usuario que está chateando a tu salón.");
define("L_HELP_CMD_19", "Permite al(los) moderador(es) de un salón o al administrador a \"<b>bloquear</b>\" un usuario de un salón por un tiempo determinado por el administrador.<BR>Este último puede banear a un usuario de otro salón adonde él no está y utilizar '<B>&nbsp;*&nbsp;</B>' seteo para ban \"para siempre\" y el usuario es eliminado de todo el chat.");
define("L_HELP_CMD_20", "Describe que estás haciendo, sin refererirte a ti mismo.");

// messages frame
define("L_NO_MSG", "En este momento no hay mensajes ...");
define("L_TODAY_DWN", "Los mensajes que han sido enviados hoy, están al final");
define("L_TODAY_UP", "Los mensajes que han sido enviados hoy, están al principio");

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
define("L_IGNOR_NON", "No hay usuarios ignorados");

// whois popup
define("L_WHOIS_ADMIN", "Administrador");
define("L_WHOIS_MODER", "Moderador");
define("L_WHOIS_USER", "Usuario");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s ingresó a este salón");
define("L_EXIT_ROM", "%s salió de este salón");
?>