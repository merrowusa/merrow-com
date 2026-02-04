<?php
// File: spanish.tutorial.php3
// Spanish translation from version 0.14.3 made by Josep Román (josep.roman@zuerich-see.ch)
// Date: 3th June 2001

// Get the names and values for vars sent by the script that called this one
if (isset($HTTP_GET_VARS))
{
	while(list($name,$value) = each($HTTP_GET_VARS))
	{
		$$name = $value;
	};
};
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>

<HEAD>
<TITLE>Tutorial en Español para <?php echo(APP_NAME." - ".APP_VERSION); ?></TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<STYLE>
A.topLink
{
	text-decoration: underline;
	color: #0000C0;
}

A.topLink:hover, A.topLink:active
{
	color: #FF9900;
	text-decoration: none;
	font-weight: 800;
}

.redText
{
	font-weight: 800;
	color: #FF0000;
}
</STYLE>
</HEAD>

<BODY BGCOLOR="#CCCCFF">

<P><A NAME="top"></P>
<TABLE BORDER="5" CELLPADDING="5">
<TR>
	<TD><FONT SIZE="+2">Contenido de este Tutorial</FONT></TD>
</TR>
</TABLE><BR>

<P CLASS="redText">
Aviso: Los usuarios de Netscape tienen que definir su lenguaje por defecto o cada caracter en los mensajes serán sustituidos por un '?'.<BR>
Este cambio se puede hacer desde la opción: Ver/Juego de Caracteres/su idioma, Auto-Detectar y luego Ver/Juego de Caracteres/Por defecto.
</P>

<?php
if (C_MULTI_LANG == "1") 
{
	?>
	<A HREF="#language" CLASS="topLink">Seleccionar el idioma</A><BR>
	<?php
}
?>
<A HREF="#login" CLASS="topLink">Entrar en el Chat</A><BR>
<A HREF="#register" CLASS="topLink">Registrarse</A><BR>
<A HREF="#modProfile" CLASS="topLink">Modificar<?php if (C_SHOW_DEL_PROF == "1") echo("/borrar"); ?> tus datos</A><BR>
<?php
if (C_VERSION == "2") 
{
	?>
	<A HREF="#create_room" CLASS="topLink">Crear una sala de chat</A><BR>
	<?php
};
if ($Ver == "H") 
{
	?>
	<A HREF="#connection_state" CLASS="topLink">Qué indica el simbolo de estado de la conexión</A><BR>
	<?php
};
?>
<A HREF="#sending" CLASS="topLink">Enviar un Mensaje</A><BR>
<A HREF="#usuarios_list" CLASS="topLink">Elementos de la lista de usuarios</A><BR>
<A HREF="#exit" CLASS="topLink">Abandonar la sala de chat</A><BR>
<A HREF="#usuarios_popup" CLASS="topLink">Saber quién está chateando sin entrar en el chat</A><BR>
<P>
<A HREF="#customize" CLASS="topLink">Personalizar la vista del chat</A><BR>
<P>
<A HREF="#comandos" CLASS="topLink">Opciones y comandos:</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#help" CLASS="topLink">Comando Ayuda (Help)</A><BR>
<?php
if (C_USE_SMILIES == "1")
{
	?>
	&nbsp&nbsp&nbsp&nbsp<A HREF="#smilies" CLASS="topLink">Caritas gráficas</A><BR>
	<?php
};
if (C_HTML_TAGS_KEEP != "none")
{
	?>
	&nbsp&nbsp&nbsp&nbsp<A HREF="#text" CLASS="topLink">Dando formato al texto</A><BR>
	<?php
};
?>
&nbsp&nbsp&nbsp&nbsp<A HREF="#invite" CLASS="topLink">Invitar a un usuario a entrar en tu actual sala de chat</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#changeroom" CLASS="topLink">Cambiar de una sala de chat a otra</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#private" CLASS="topLink">Mensajes Privados</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#actions" CLASS="topLink">Acciones</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#ignore" CLASS="topLink">Ignorar a otros Usuarios</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#whois" CLASS="topLink">Obtener Información Pública de otros Usuarios</A><BR>
<?php
if (C_SAVE != "0")
{
	?>
	&nbsp&nbsp&nbsp&nbsp<A HREF="#save" CLASS="topLink">Guardar mensajes</A><BR>
	<?php
};
?>
<P>
<A HREF="#moderador" CLASS="topLink">Comandos especiales para moderadores y/o el administrador:</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#announce" CLASS="topLink">Enviar un anuncio</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#kick" CLASS="topLink">Expulsar un usuario</A><BR>
<?php
if (C_BANISH != "0")
{
	?>
	&nbsp&nbsp&nbsp&nbsp<A HREF="#banish" CLASS="topLink">Desautorizar un usuario</A><BR>
	<?php
};
?>
&nbsp&nbsp&nbsp&nbsp<A HREF="#promote" CLASS="topLink">Convertir un usuario en moderador</A><BR>
<P>
<HR>


<?php
if (C_MULTI_LANG == "1") 
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="language"><B>Seleccionar el idioma:</B></A></FONT>
	<P>
	Puede seleccionar uno de los idiomas al cual <?php echo(APP_NAME); ?> haya sido traducido haciendo un click en una de las banderas de la página inicial. En el ejemplo siguiente, un usuario selecciona el idioma francés:
	<P ALIGN="center">
	<IMG SRC="/chat/tutorials/flags.gif" HEIGHT="44" WIDTH="424" ALT="Banderas para seleccionar el idioma">
	<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
	<HR>
	<?php
}
?>

<P>
<FONT SIZE="+1"><A NAME="login"><B>Entrar en el chat:</B></A></FONT>
<P>
Si ya está registrado, simplemente introduzca su nombre de usuario y su contraseña. Luego, seleccione la sala de chat a la que quiera acceder y pulse el botón de Chatear!.<BR>
<?php
if (C_REQUIRE_REGISTER == "1")
{
	?>
	<P>
	Sino está registrado, lo primero que debe hacer es <A HREF="#register">registrarse</A>.
	<?php
}
else
{
	?>
	<P>
	Sino está registrado, puede <A HREF="#register">registrarse</A> primero o simplemente entrar con un nombre cualquiera a una sala. De esta forma, su nombre no se reservará y cualquier otro usuario podrá usarlo más tarde una vez que usted haya abandonado el chat.
	<?php
}
?>
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="register"><B>Para Registrarse:</B></A></FONT> 
<P>
Si no se ha registrado todavía <?php if (C_REQUIRE_REGISTER == "0") echo("y le gustaría hacerlo"); ?>, use la opción de registrarse. Aparecerá una pequeña ventana para entrar los datos.
<P>	
<UL>
	<LI>Primero, introduzca un nombre de usuario <?php if (!C_EMAIL_PASWD) echo(" y la contraseña"); ?> que quiera. El nombre de usuario que elija (y que no esté ya registrado) será el nombre que aparecerá en el chat. No puede contener comas ni barras invertidas (\).
<?php if (C_NO_SWEAR == "1") echo("Tampoco puede contener palabras malsonantes."); ?>
	<LI>Despues, entre su nombre, apellidos y dirección de e-mail. Esta información es obligatoria para poderse registrar. Indicar el sexo es opcional.
	<LI>Si tiene una página web, también la puede introducir.
	<LI>El campo del idioma puede ayudar en discusiones en el chat. Otros usuarios sabrán que idiomas entiende usted.
	<LI>Si desea que su email sea visible por otros usuarios del chat, active la casilla que dice "mostrar mi e-mail como información pública". En caso contrario, deje esa casilla sin activar.
	<LI>Finalmente, pulse el botón de Registrarse y su cuenta será creada. Pulsando el botón de Cerrar se anulará la creación de su cuenta.
</UL>
<P>
<A NAME="modProfile"></A>Por supuesto, los usuarios registrados pueden cambiar sus datos <?php if (C_SHOW_DEL_PROF == "1") echo(" y/o borrarlos"); ?> pulsando en <?php echo((C_SHOW_DEL_PROF == "0" ? "el enlace apropiado" : "los enlaces apropiados")); ?>.<BR>
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>
<HR>

<?php
if (C_VERSION == "2") 
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="create_room"><B>Para crear una sala:</B></A></FONT> 
	<P>
	Los usuarios registrados pueden crear nuevas salas. Las salas privadas solo pueden ser accedidas por los usuarios que saben sus nombres, los cuales nunca son mostrados salvo para los usuarios que ya se encuentran dentro de ellas.<BR>
	<P>
	El nombre de una sala no puede contener comas ni la barra invertida (\).<?php if (C_NO_SWEAR == "1") echo(" Tampoco puede contener palabras malsonantes."); ?>
	<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
	<P>
	<HR>
	<?php
};
if ($Ver == "H")
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="connection_state"><B>Qué indica el simbolo de estado de la conexión:</B></A></FONT> 
	<P>
	Un simbolo circular representado el estado de su conexión se muestra en la parte superior derecha de la pantalla. Puede tener tres formas :
	<P>	
	<UL>
		<LI><IMG SRC="/chat/connectOff.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="No hay conexión"> cuando no se require conexión;
		<LI><IMG SRC="/chat/connectOn.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="Conectando"> cuando se está efectuando una conexión;
		<LI><IMG SRC="/chat/connectError.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="Fallo de conexión"> cuando una conexión ha fallado.
	</UL>
	<P>
	En el tercer caso, haciendo un click en el botón rojo re-intentará nuevamente la conexión.
	<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
	<P>
	<HR>
	<?php
};
?>

<P>
<FONT SIZE="+1"><A NAME="sending"><B>Enviar mensajes:</B></A></FONT> 
<P>
Para enviar un mensaje a la sala de chat, escriba el texto en el recuadro situado en la parte inferior izquierda de la pantalla y luego pulse la tecla Enter/Return para enviarlo. Los mensajes de los usuarios aparecen y se desplazan por la ventana de chat.<BR>
<?php if (C_NO_SWEAR == "1") echo("Las palabras malsonantes son ignoradas en los mensajes."); ?>
<P>
El color del texto de sus mensajes puede ser cambiado haciendo un click en uno de los colores de la lista de colores situada en la parte derecha inferior.
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="usuarios_list"><B>Elementos de lista de usuarios (que aparece en la pantalla principal del chat):</B></A></FONT> 
<P>
<OL>
Existen definidas dos reglas básicas para la lista de usuarios :<BR>
	<LI>Un pequeño icono muestra el sexo del usuario si este está registrado (haciendo un click encima del icono mostrará la <A HREF="#whois">ventana de información</A> de este usuario). Los usuarios no registrados no tienen nada delante de su nombre.<BR>
	<LI>El nombre del administrador o del moderador se muestra en itálica.
</OL>
<P><I>Por ejemplo</I>, de la siguiente lista, se puede deducir que: 
<TABLE BORDER=0 CELLSPACING=10>
<TR>
	<TD>
		<IMG SRC="/chat/tutorials/usersList.gif" WIDTH=128 HEIGHT=145 BORDER=0 ALT="lista de usuarios">
	</TD>
	<TD>
	<UL>
		<LI>Nicolas es el administrador o uno de los moderadores del la sala phpMyChat (su nombre sale en cursiva).<BR><BR>
		<LI>alien (cuyo sexo se desconoce), Jezek2 y Caridad son usuarios registrados sin ningún tipo de privilegio especial en la sala phpMyChat;<BR><BR>
		<LI>lolo es simple usuario no registrado.
	</UL>
	</TD>
</TR>
</TABLE>
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="exit"><B>Salir de la sala de chat:</B></A></FONT>
<P>
Para salir del chat, hay que hacer un click en "Salir".<BR>Otra manera de salir, es escribiendo uno de los siguientes comandos:<BR>
/exit<BR>
/bye<BR>
/quit<BR>
Estos comandos pueden ser completados con un mensaje para ser enviado antes de salir.<BR>
<I>Por ejemplo :</I> /quit Hasta pronto!
<P>
enviaría el mensaje "Hasta pronto!" en la ventana de chat y luego saldría.

<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="usuarios_popup"><B>Saber quién está chateando sin entrar en el chat:</B></A></FONT> 
<P>
Haciendo un click en el enlace que muestra el número de usuarios conectados en la página de inicio, o, desde dentro de la sala de chat, haciendo un click en la imagen <IMG SRC="/chat/popup.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="Ventana de usuarios"> de la parte superior derecha de la pantalla.<BR>En ambos casos, se abre una ventana separada que muestra los usuarios conectados y en qué salas se encuentran, casi en tiempo real.<BR>
El titulo de esta ventana contiene el nombre de los usuarios, sin son menos de 3. Sino, el número total de usuarios.
<P>
Haciendo un click en el icono <IMG SRC="/chat/sound.gif" WIDTH=13 HEIGHT=13 BORDER=0 ALT="Bips"> de esa ventana, activa/desactiva un bip cada vez que un nuevo usuario entra en el chat.
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="customize"><B>Personalizando la vista del chat:</B></A></FONT>
<P>
Existen varias formas de personalizar la vista del chat. Para cambiar las diferentes opciones, entre el comando apropiado desde la ventana de introducción del texto y pulse la tecla Enter/Return.
<P>
<UL>
	<?php
	if ($Ver == "H")
	{
		?>
		<LI>El comando <B>Clear</B> permite borrar la pantalla principal del chat y mostrar los últimos 5 mensajes enviados.<BR>Escriba "/clear" sin las comillas.
		<P>
		<?php
	}
	else
	{
		?>
		<LI>El comando <B>Order</B> permite variar entre que los nuevos mensajes aparezcan al principio de la pantalla del chat o al final.<BR>Escriba "/order" sin las comillas.
		<P>
		<?php
	};
	?>
	<LI>El comando <B>Notify</B> permite activar/desactivar el recibir en pantalla cuando un usuario entra o abandona la sala del chat. Por defecto, está opción está <?php echo(C_NOTIFY ? "activada" : "desactivada"); ?> y las notificaciones <?php echo(C_NOTIFY ? "se" : "no se"); ?> veen.<BR>Escriba "/notify" sin las comillas.
	<P>
	<LI>El comando <B>Timestamp</B>  permite activar/desactivar el ver en la pantalla de chat la hora de cada mensaje que se envia y de ver la hora actual que tiene el servidor de chat, la cual, se muestra en la barra inferior del navegador. Por defecto está opción está <?php echo(C_SHOW_TIMESTAMP ? "activada" : "desactivada"); ?>.<BR>Escriba "/timestamp" sin las comillas.
	<P>
	<LI>El comando <B>Refresh </B> permite ajusta cada cuantos segundos se actualiza la pantalla del chat, mostrando los nuevos mensajes. El valor por defecto es de <?php echo(C_MSG_REFRESH); ?> segundos. Para cambiar dicho valor, introduzca el comando "/refresh n" sin las comillas donde n es el tiempo en segundos del valor de refresco de pantalla.
	<P>
	<I>Por ejemplo:</I> /refresh 5
	<P>
	cambiará el valor a 5 segundos.<BR><BR> *ATENCION*, si n es menor que 3, el tiempo de refresco no se cambia, sino todo lo contrario, no se produce ningún refresco de pantalla (util para poder leer los mensajes de la pantalla, en caso de que sean muchos sin ser molestados por el refresco de pantalla)
	<P>
	<?php
	if ($Ver == "L")
	{
		?>
		<LI>El comando <B>Show </B> permite ajustar el número de mensajes visualizables simultaneamente en su pantalla. Para cambiar el valor por defecto, escribe "/show n" sin las comillas, donde n es el numero de mensajes visualizables.
		<P>
		<I>Por ejemplo:</I> /show 50
		<P>
		visualizaría los 50 mensajes más recientes en su pantalla. Si todos los mensajes no pueden ser visualizados en la pantalla, aparecería una barra de desplazamiento en la parte derecha de la pantalla de chat.</UL>
		<?php
	}
	else
	{
		?>
		<LI>Los comandos <B>Show y Last</B> permiten limpiar la pantalla y mostrar los últimos <I>n</I> mensajes enviados. Escriba "/show n" o "/last n" sin las comillas, donde n es el número de mensajes a visualizar.
		<P>
		<I>Por ejemplo:</I> /show 50 o /last 50
		<P>
		borraría la pantalla y mostraría los 50 mensajes más recientes. Si todos los mensajes no pueden ser visualizados en la pantalla, aparecería una barra de desplazamiento en la parte derecha de la pantalla de chat.</UL>
		<?php
	};
	?>
	<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
	<P>
</UL>
<HR>


<P>
<FONT SIZE="+2"><A NAME="comandos"><B><U>Opciones y Comandos</U></B></A></FONT> 
<P>

<FONT SIZE="+1"><A NAME="help"><B>Comando Help:</B></A></FONT>
<P>
Dentro de la sala de chat, puede consultar la ayuda mediante un click en la imagen <IMG SRC="/chat/helpOff.gif" WIDTH=15 HEIGHT=15 BORDER=0 ALT="?"> que se encuentra a la izquierda del recuadro de introducir texto. También puede introducir el comando <B>"/help" o "/?"</B> en el area de introducir texto.
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>
<P>
<HR>

<?php
if (C_USE_SMILIES == "1")
{
	include("./lib/smilies.lib.php3");
	$Nb = count($SmiliesTbl);
	$ResultTbl = Array();
	DisplaySmilies($ResultTbl,$SmiliesTbl,$Nb,"tutorial");
	unset($SmiliesTbl);
	?>
	<FONT SIZE="+1"><A NAME="smilies"><B>Caritas Sonrientes (Smilies):</B></A></FONT>
	<P>Puede incluir caritas sonrientes gráficas en sus mensajes. Consulte la siguiente tabla para saber qué tiene que escribir para que aparezcan las siguientes caritas:
	<P ALIGN="center">
	<TABLE BORDER=0 CELLPADDING=3 CELLSPACING=5>
	<?php
	$i = "0";
	$Nb = count($ResultTbl);
	while($i < $Nb)
	{
		if ($i > 0) echo("\t");
		echo("<TR VALIGN=\"BOTTOM\">\n");
		echo("$ResultTbl[$i]");
		echo("\t</TR>\n\t<TR>\n");
		$i++;
		echo("$ResultTbl[$i]");
		echo("\t</TR>\n");
		$i++;
	};
	unset($ResultTbl);
	?>
	</TABLE>
	<P>
	<I>Por ejemplo</I>, si envia el texto "Hola Carlos :)" sin las comillas, aparecería el mensaje Hola Carlos <IMG SRC="/chat/smilies/smile1.gif" WIDTH=15 HEIGHT=15 ALT=":)"> en el area de chat.
	<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
	<P>
	<HR>
	<?php
};

if (C_HTML_TAGS_KEEP != "none")
{
	?>
	<FONT SIZE="+1"><A NAME="text"><B>Dando formato al texto:</B></A></FONT>
	<P>
	El texto se puede escribir en negrita, itálica o subrayado. Para ello, el texto a formatear hay que introducirlo dentro de &LT;B&GT; &LT;/B&GT, &LT;I&GT; &LT;/I&GT; o &LT;U&GT; &LT;/U&GT respectivamente (que son etiquetas HTML).
	<P>
	<I>Por ejemplo</I>, &LT;B&GT;este texto&LT;/B&GT; produciría <B>este texto</B>.
	<P>
	Para crear un enlace o hipervinculo para una dirección de e-mail o una URL, escriba la dirección (sin ninguna etiqueta HTML). El enlace se creará automaticamente.
	<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
	<P>
	<P>
	<HR>
	<?php
};
?>

<P>
<FONT SIZE="+1"><A NAME="invite"><B>Invitar a un usuario a entrar en su actual sala de chat:</B></A></FONT>
<P>
Puede usar el comando <B>invite</B> para invitar a un usuario a reunirse en la sala que usted se encuentra.
<P>
<I>Por ejemplo:</I> /invite Carlos 
<P>
le enviaría un mensaje privado a Carlos sugiriéndole de unirse a usted en la sala que se encuentra. Este mensaje contiene el nombre de la sala y además, aparece como un enlace.
<P>
Puede poner más de un usuario en su invitación a la vez (por ejemplo: "/invite Carlos,Helen,Alf"). Los nombres tienen que ir separados por comas y sin espacios en el medio.
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="changeroom"><B>Cambiar de salas:</B></A></FONT>
<P>
La lista de la parte derecha de la pantalla muestra la lista de todas las salas chat y los usuarios que hay actualmente en cada una. Para abandonar la sala en la que está e irse a otra, simplemente hay que hacer un click en el nombre de la sala a la que se quiere ir.  Puede cambiar de sala escribiendo el comando <B>"/join #nombre_de_sala"</B> sin las comillas.
<P>
<I>Por ejemplo:</I> /join #MiSala 
<P>
le trasladaría a la sala MiSala.
<?php
if (C_VERSION == "2")
{
	echo(C_REQUIRE_REGISTER == "0" ? "<P>Si usted es un usuario registrado, tú " : "<BR><P>Tú");
	?>
	 Puede crear una sala con este comando. Tiene que especificar su tipo: 0 para privada y 1 para pública (que es el valor por defecto).
	<P>
	<I>Por ejemplo:</I> /join 0 #MiSala 
	<P>
	crearía una nueva sala privada (siempre que no existiera ya una pública con ese mismo nombre) llama MiSala y le llevaría a ella.
	<P>
	El nombre de la sala no puede contener comas ni la barra invertida (\).<?php if (C_NO_SWEAR == "1") echo(" Tampoco puede contener palabras malsonantes."); ?>
	<?php
}
?>
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><B>Cambiar sus propios datos desde dentro del chat:</B></FONT>
<P>
El comando <B>Profile</B> crea una ventana emergente separada en la cual puede editar sus datos personales a excepción de su alias y la contraseña (para cambiar eso, tiene que usar el enlace existente en la página del inicio).<BR>Escriba /profile
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><B>Recuperar el ultimo mensaje o comando que ha enviado:</B></FONT>
<P>
El comando <B>!</B> recupera el ultimo mensaje o comando que ha enviado.<BR>Escriba /!
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><B>Responder a un usuario específico:</B></FONT>
<P>
Haciendo un click en el nombre de un usuario de la lista que aparece en la parte derecha de la pantalla, muestra su "nombre>" en la parte donde se entra el texto. Esto sirve para enviar publicamente un mensaje a ese usuario, quizás para responder algo que él/ella ha escrito antes. Esto no es para enviar mensajes privados.
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="private"><B>Mensajes privados:</B></A></FONT>
<P>
Para enviar un mensaje privado a un usuario que se encuentra en su misma sala de chat, utilice el comando <B>"/msg nombre_usuario" o "/to nombre_usuario mensaje</B> sin las comillas.
<P>
<I>Por ejemplo, supongamos que Carlos es un usuario:</I> /msg Carlos Hola, cómo estás?
<P>
El mensaje le aparecería a Carlos y a usted, pero no a los demás usuarios que haya en la sala en ese momento.
<P>
Otra posibilidad es haciendo un click en el nombre del usuario de un mensaje existente en la ventana del chat. Esto crea automaticamente el comando y sólo hay que escribir el mensaje al final del mismo.
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="actions"><B>Acciones:</B></A></FONT>
<P>
Para describir que está usted haciendo puede usar el comando <B>"/me acción"</B> sin las comillas.
<P>
<I>Por ejemplo:</I> Si Carlos envía el mensaje "/me estoy bebiendo un café" el mensaje que se mostraría a los usuarios sería "<B>* Carlos</B> está bebiendo café".
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="ignore"><B>Ignorar otros usuarios:</B></A></FONT>
<P>
Para ignorar los mensajes de un usuario, escriba el comando <B>"/ignore nombre_usuario"</B> sin las comillas.
<P>
<I>Por ejemplo:</I> /ignore Carlos
<P>
A partir de ese comando, los mensajes que escriba Carlos no se mostrarán en su pantalla de chat.
<P>
Para saber de qué usuarios se ignoran los mensajes, escriba el comando <B>"/ignore"</B> sin las comillas. 
<P>
Para anular el comando y volver a ver los mensajes de un usuario, escriba el comando <B>"/ignore - nombre_usuario"</B> sin las comillas. El "-" es un guión. <P> 
<P>
<I>Por ejemplo:</I> /ignore - Carlos 
<P>
A partir de ese comando, todos los mensajes enviados por Carlos serán mostrados en su pantalla, incluyendo los que haya escrito antes de este comando.
Si no se especifica un nombre de usuario después del guión, se volverán a ver los mensajes de todos los usuarios.
<P>
Con el comando ignore se puede poner más de un usuario a la vez (por ejemplo "/ignore Carlos,Elena,Mario" o "/ignore - Carlos,Elena"). Los nombres tienen que ir separados con una coma (,) sin espacios.
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="whois"><B>Obtener información de otros Usuarios:</B></A></FONT>
<P>
Para ver información pública de otro usuario, escriba el comando <B>"/whois nombre_usuario"</B> sin las comillas.
<P>
<I>Por ejemplo:</I> /whois Carlos
<P>
donde 'Carlos' es el nombre de usuario. Este comando crearía una ventana separada donde se mostraría la información pública de ese usuario.
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>
<HR>

<?php
if (C_SAVE != "0")
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="save"><B>Guardar mensajes:</B></A></FONT>
	<P>
	Para exportar mensajes (incluyendo los de notificación) a un fichero local en formato HTML, escriba el comando <B>"/save n"</B> sin las comillas.
	<P>
	<I>Por ejemplo:</I> /save 5
	<P>
	donde '5' es el número de mensajes a guardar. Si el número no se especifica, todos los mensajes disponibles enviados a esa sala serán guardados.
	<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
	<P>
	<HR>
	<?php
};
?>


<P>
<FONT SIZE="+2"><A NAME="moderador"><B><U>Comandos sólo para el administrador y/o moderadores</U></B></A></FONT> 

<P>
<FONT SIZE="+1"><A NAME="announce"><B>Anunciar algo:</B></A></FONT>
<P>
El administrador puede anunciar algo a todos los usuarios que estén en el chat, independientemente de la sala en que se encuentren con el comando <B>announce </B>.
<P>
<I>Por ejemplo: /announce El chat estará esta noche cerrado por mantenimiento a partir de las 8.</I>
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>
<HR>

<P>
<FONT SIZE="+1"><A NAME="kick"><B>Expulsar un usuario:</B></A></FONT>
<P>
Los moderadores pueden expulsar a un usuario y el administrador puede expulsar un usuario o un moderador con el comando <B>kick</B>. Excepto para el administrador, el usuario a ser expulsado tiene que estar en la misma sala.
<P>
<I>Por ejemplo</I>, si Carlos es el nombre del usuario a expulsar:</I> /kick Carlos</I>
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>
<HR>

<?php
if (C_BANISH != "0")
{
	?>
	<P>
	<FONT SIZE="+1"><A NAME="banish"><B>Desterrar an usuario:</B></A></FONT>
	<P>
	Los moderadores pueden desautorizar un usuario y el administrador puede desautorizar un usuario o un moderador con el comando <B>ban</B>.<BR>
	El administrador puede desautorizar un usuario de otra sala diferente a la que él se encuentra. Puede incluso desautorizar un usuario para siempre con el parámetro '<B>&nbsp;*&nbsp;</B>' que tiene que ser insertado antes que el alias del usuario a ser desautorizado.
	<P>
	<I>Por ejemplo</I>, si Carlos es el nombre del usuario a desautorizar: <I>/ban Carlos</I> o <I>/ban * Carlos</I>
	<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
	<P>
	<HR>
	<?php
};
?>

<P>
<FONT SIZE="+1"><A NAME="promote"><B>Promover un usuario a moderador:</B></A></FONT>
<P>
Los moderadores y el administrador pueden promover otro usuario a moderador con el comando <B>promote</B>.
<P>
<I>Por ejemplo</I>, si Carlos es el nombre del usuario a promover:<I> /promote Carlos</I>
<P>
Sólo el administrador puede acceder a la acción contraria (convertir un moderador en simple usuario) desde una página especial. No hay un comando para hacerlo.
<BR><P ALIGN="right"><A HREF="#top">Volver al inicio</A></P>
<P>


</BODY>
</HTML>
