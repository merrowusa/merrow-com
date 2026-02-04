<?php
// File : argentinian_spanish/localized.tutorial.php3
// Traducido y Adaptado al español de uso corriente en Argentina 
//   por Jorge Colaccini <jrc@informas.com>

// Get the names and values for vars sent by the script that called this one
if (isset($HTTP_GET_VARS))
{
	while(list($name, $value) = each($HTTP_GET_VARS))
	{
		$$name = $value;
	}
}
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
	<TD><FONT SIZE="+2">Contenidos del tutorial</FONT></TD>
</TR>
</TABLE><BR>

<P CLASS="redText">
<b>Atención</b>: Los usuarios de Netscape, deben definir sus idiomas por omisión o cada carácter en los mensajes será reemplazado por '?'.<BR>
Esto puede realizarse de la siguiente manera: View/CharacterSet/your language
Auto-Detect, entonces View/CharacterSet/SetDefault.
</P>

<?php
if (C_MULTI_LANG == "1") 
{
	?>
	<A HREF="#language" CLASS="topLink">Cambiar de idioma</A><BR>
	<?php
}
?>
<A HREF="#login" CLASS="topLink">Loguearse para el Chat</A><BR>
<A HREF="#register" CLASS="topLink">Registrarse</A><BR>
<A HREF="#modProfile" CLASS="topLink">Modificar<?php if (C_SHOW_DEL_PROF == "1") echo("/borrar "); ?> su perfil (datos)</A><BR>
<?php
if (C_VERSION == "2") 
{
	?>
	<A HREF="#create_room" CLASS="topLink">Crear un salón de chat</A><BR>
	<?php
};
if ($Ver == "H") 
{
	?>
	<A HREF="#connection_state" CLASS="topLink"></A><BR>
	<?php
};
?>
<A HREF="#sending" CLASS="topLink">Enviar un mensaje</A><BR>
<A HREF="#users_list" CLASS="topLink"></A><BR>
<A HREF="#exit" CLASS="topLink">Salir de un salón de chat</A><BR>
<A HREF="#users_popup" CLASS="topLink">Saber quien está chateando sin estar logueado</A><BR>
<P>
<A HREF="#customize" CLASS="topLink">Diagramar la vista del
Chat</A><BR>
<P>
<A HREF="#commands" CLASS="topLink">Fisonomía y comandos:</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#help" CLASS="topLink">Comando Ayuda (help)</A><BR>
<?php
if (C_USE_SMILIES == "1")
{
	?>
	&nbsp&nbsp&nbsp&nbsp<A HREF="#smilies" CLASS="topLink">Imágenes de caritas</A><BR>
	<?php
};
if (C_HTML_TAGS_KEEP != "none")
{
	?>
	&nbsp&nbsp&nbsp&nbsp<A HREF="#text" CLASS="topLink">Formato de texto</A><BR>
	<?php
};
?>
&nbsp&nbsp&nbsp&nbsp<A HREF="#invite" CLASS="topLink">Invitar
a un usuario a ingresar a su salón</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#changeroom" CLASS="topLink">Cambiar
de un salón a otro</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#private" CLASS="topLink">Mensajes Privados</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#actions" CLASS="topLink">Acciones</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#ignore" CLASS="topLink">Ignorar a otros usuarios</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#whois" CLASS="topLink">Obtener
información pública de otros usuarios</A><BR>
<?php
if (C_SAVE != "0")
{
	?>
	&nbsp&nbsp&nbsp&nbsp<A HREF="#save" CLASS="topLink">Salvar mensajes</A><BR>
	<?php
};
?>
<P>
<A HREF="#moderator" CLASS="topLink">Comandos especiales para
moderador(es) y/o el administrador:</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#announce" CLASS="topLink">Enviar
un anuncio</A><BR>
&nbsp&nbsp&nbsp&nbsp<A HREF="#kick" CLASS="topLink">Kickear a un usuario</A><BR>
<?php
if (C_BANISH != "0")
{
	?>
	&nbsp&nbsp&nbsp&nbsp<A HREF="#banish" CLASS="topLink">Banear a un usuario</A><BR>
	<?php
};
?>
&nbsp&nbsp&nbsp&nbsp<A HREF="#promote" CLASS="topLink">Promover
a un usuario a moderador del salón</A><BR>
<P>
<HR>
<HR>

<p><a name=language><?php if (C_MULTI_LANG == "1")  {  ?><b><span
style='font-size:13.5pt'>Cambiando de idioma:</span></b></a> </p>

<p>Podés cambiar a un idioma al cual <?php echo(APP_NAME); ?> ha sido
traducido haciendo click en una de las banderas de la página inicial. En el
ejemplo de abajo, un usuario ha seleccionado el idioma Francés: </p>

<p align=center style='text-align:center'><img border=0 width=424 height=44
id="_x0000_i1027" src="images\tutorials\flags.gif"
alt="Banderas para la selección de idiomas"></p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name=login><?php } ?><b><span style='font-size:13.5pt'>Login: </span></b></a>
</p>

<p>Si ya estás registrado, simplemente ingresá tu nombre de usuario y
contraseña. Luego seleccioná el salón de chat al que deseas ingresar y después presioná el
botón <b>Chat</b>.<br style='mso-special-character:line-break'>
<![if !supportLineBreakNewLine]><br style='mso-special-character:line-break'>
<![endif]><?php if (C_REQUIRE_REGISTER == "1") {  ?></p>

<p>Tienes que <a href="#register">registrarte</a> primero. <?php } else {  ?></p>

<p>Puedes <a href="#register">registrarte</a> primero o simplemente
ingresar a un salón pero en ese caso tu <i>nick</i> (alias) no podrá ser reservado (otro usuario puede
utilizar ese mismo <i>nick</i> una vez que vos hayas salido del chat). <?php } ?></p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name=register><b><span style='font-size:13.5pt'>Registrándose:</span></b></a>
</p>

<p>Si todavía no estás registrado <?php if (C_REQUIRE_REGISTER == "0") echo("y deseas hacerlo "); ?>,
elije la opción de registración. Una pequeña ventana se abrirá. </p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l3 level1 lfo1;tab-stops:list 36.0pt'>Primero, crear un nombre de
     usuario<?php if (!C_EMAIL_PASWD) echo(" y una contraseña"); ?> para vos
     ingresando en los lugares apropiados. El nombre de usuario que elijas,
     será, automáticamente, mostrado en el salón de chat. No puede contener
     espacios, comas o barras (\). <?php if (C_NO_SWEAR == "1") echo(" No puede contener \"malas palabras\"."); ?></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l3 level1 lfo1;tab-stops:list 36.0pt'>Segundo, Ingresá tu nombre,
     apellido, y tu dirección de email. Para ser registrado como usuario
     en el chat, toda esta información debe ser provista. La
     información sobre sexo es opcional. </li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l3 level1 lfo1;tab-stops:list 36.0pt'>Si tenés una página
     Web, podés ingresar su URL en la casilla correspondiente. </li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l3 level1 lfo1;tab-stops:list 36.0pt'>El campo del idioma puede
     ayudar a otros usuarios en futuras discusiones. Ellos sabrán los idiomas
     que conocés. </li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l3 level1 lfo1;tab-stops:list 36.0pt'>Finalmente, si te interesa que
     que tu dirección de email pueda ser vista por otros usuarios, marcá la
     casilla &quot;mostrar e-mail en información pública&quot;. Si no
     deseas que tu dirección de e-mail sea vista, dejá la casilla sin marcar. </li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l3 level1 lfo1;tab-stops:list 36.0pt'>Luego presioná el botón
     de Registro y tu cuenta será creada. Si deseas detener en algún
     momento la registración, presioná el botón Cerrar. </li>
</ul>

<p style='margin-bottom:12.0pt'><a name=modProfile></a>Por supuesto, los
usuarios registrados podrán modificar<?php if (C_SHOW_DEL_PROF == "1") echo("/borrar "); ?>
sus propios datos haciendo click en el campo apropiado.</p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name="create_room"><?php if (C_VERSION == "2")  {  ?><b><span
style='font-size:13.5pt'>Creando un salón:</span></b></a> </p>

<p>Los usuarios registrados pueden crear salones. Los salones Privados pueden ser
accedidos solamente por usuarios que conocen su nombre y nunca se muestran
excepto para usuarios que están registrados para el mismo.</p>

<p>Los nombres de salones no pueden contener comas o barras (\).<?php if (C_NO_SWEAR == "1") echo(" No pueden contener \"malas palabras\"."); ?>
</p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name="connection_state"><?php }; if ($Ver == "H") {  ?><b><span
style='font-size:13.5pt'>Verificando estado de la conexión:</span></b></a> </p>

<p>Un símbolo, arriba y a la derecha de la pantalla le muestra el estado de su
conexión. Puede tomar 3 formas: </p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l0 level1 lfo2;tab-stops:list 36.0pt'><img border=0 width=13
     height=13 id="_x0000_i1032" src="images\connectOff.gif" alt="Sin conexión">cuando
     la conexión no es requerida; </li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l0 level1 lfo2;tab-stops:list 36.0pt'><img border=0 width=13
     height=13 id="_x0000_i1033" src="images\connectOn.gif" alt="Conectando">cuando
     la conexión está en progreso; </li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l0 level1 lfo2;tab-stops:list 36.0pt'><img border=0 width=13
     height=13 id="_x0000_i1034" src="images\connectError.gif"
     alt="La conexión ha fallado">cuando hay una falla en la conexión. </li>
</ul>

<p>En el tercer caso, haciendo click en el botón rojo podrá establecer una
nueva conexión. </p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name=sending><?php }; ?><b><span style='font-size:13.5pt'>Enviando
mensajes:</span></b></a> </p>

<p>Para incluir un mensaje en el salón de chat, escribí adentro de la barra de
abajo desde la izquierda y presione el Enter/Return para enviarlo. Mensajes de
todos los usuarios pasan por la pantalla.<br style='mso-special-character:line-break'>
<![if !supportLineBreakNewLine]><br style='mso-special-character:line-break'>
<![endif]><?php if (C_NO_SWEAR == "1") echo("Notará que las \"malas palabras\" son salteadas en los mensajes."); ?></p>

<p>Usted puede cambiar el color de texto de sus mensajes por otro color de la
lista que se encuentra en la caja de la derecha. </p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name="users_list"><b><span style='font-size:13.5pt'>Verificando la lista
de usuarios (no para usuarios de ventana activa):</span></b></a> </p>

<p class=MsoNormal style='margin-left:36.0pt'>Dos reglas básicas han sido
definidas para la lista de usuarios:</p>

<ol start=1 type=1>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l4 level1 lfo3;tab-stops:list 36.0pt'>Un pequeño icono (que
     indica también su sexo) es mostrado antes del nick de un usuario registrado.
     Haciendo click sobre él, se abrirá <a href="#whois">la ventana de búsqueda</a>
     para este usuario, mientras que para usuarios no registrados no se presenta
     ningún signo o ícono asociado a su <i>nick</i> (alias);</li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l4 level1 lfo3;tab-stops:list 36.0pt'>El nick del administrador o
     del moderador aparece con caracteres itálicos. </li>
</ol>

<p><i>Por ejemplo</i>, en la figura de abajo puedes observar: </p>

<table border=0 cellspacing=10 cellpadding=0 style='mso-cellspacing:7.5pt'>
 <tr>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal><img border=0 width=128 height=145 id="_x0000_i1038"
  src="images\tutorials\usersList.gif" alt="lista de usuarios"></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <ul type=disc>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l1 level1 lfo4;tab-stops:list 36.0pt'>Nicolas es el administrador
       o uno de los moderadores del salón phpMyChat;</li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l1 level1 lfo4;tab-stops:list 36.0pt'>alien (cuyo sexo
       no se ha especificado), Jezek2 y Caridad son usuarios registrados sin
       "atributos" especiales para el salón phpMyChat;</li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l1 level1 lfo4;tab-stops:list 36.0pt'>lolo es un simple
       usuario no registrado.</li>
  </ul>
  </td>
 </tr>
</table>

<p><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name=exit><b><span style='font-size:13.5pt'>Dejando un salón de chat:</span></b></a>
</p>

<p>Para salir del chat, simplemente haga click sobre &quot;Salir&quot;.
Alternativamente, usted puede también ingresar uno de los siguientes comandos
en la barra de escritura:<br>
/exit<br>
/bye<br>
/quit Estos comandos pueden ser complementados por mensajes antes de dejar el
salón de chat. <i>Por ejemplo:</i> /quit CU pronto! </p>

<p>Se enviará el mensaje &quot;CU pronto!&quot; en la pantalla general y
entonces usted saldrá del chat. </p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name="users_popup"><b><span style='font-size:13.5pt'>Conociendo quién
esta chateando sin estar logueado:</span></b></a> </p>

<p>Usted puede hacer click en el vínculo que muestra el número de usuarios
conectados en el comienzo de la página, o, si usted está chateando, haga click
en la imagen <img border=0 width=13 height=13 id="_x0000_i1041"
src="images\popup.gif" alt="Ventana de usuarios">hacia arriba y a la derecha de la
pantalla, para abrir una ventana independiente que mostrará la lista de usuarios
conectados, los salones en que ellos están, y casi en tiempo real.<br>
El título de esta ventana contiene el nombre de los usuarios, si ellos son
menos que tres, el número de usuarios y salones abiertos. </p>

<p>Haciendo click en el icono <img border=0 width=13 height=13 id="_x0000_i1042"
src="images\sound.gif" alt=Beeps>arriba de esta imagen serán
activados/desactivados los sonidos de los usuarios entrantes. </p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<div class=MsoNormal align=center style='text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name=customize><b><span style='font-size:13.5pt'>Diagramando la vista del
Chat:</span></b></a> </p>

<p>Hay varias formas de diagramar cómo se verán las ventanas del chat. Para
cambiar las configuraciones, simplemente escribe el comando apropiado dentro de la caja
de texto y presione Intro/Enter/Return. <o:p></o:p></p>

<ul type=disc>
 <?php  if ($Ver == "H")  {   ?>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l2 level1 lfo5;tab-stops:list 36.0pt'>El <b>comando Clear</b>
     te permite limpiar la pantalla general y mostrar los últimos 5
     mensajes enviados a tu pantalla.<br>
     Escribí &quot;/clear&quot; sin comillas. <o:p></o:p></li>
</ul>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l2 level1 lfo5;
tab-stops:list 36.0pt'><?php  }  else  {   ?><![if !supportLists]><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]>El <b>comando Order</b> te permite verificar
nuevos mensajes que aparecen arriba o abajo de la pantalla.<br>
Escribí &quot;/order&quot; sin comillas. <o:p></o:p></p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l2 level1 lfo5;
tab-stops:list 36.0pt'><?php  };  ?><![if !supportLists]><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]>El <b>comando Notify</b> te permite saber cuándo
otros usuarios están adentro o afuera del salón de chat. Por omisión, esta
opción es <?php echo(C_NOTIFY ? "on" : "off"); ?>y las notas <?php echo(C_NOTIFY ? "" : "no "); ?>serán
vistas.<br>
Escribí &quot;/notify&quot; sin comillas. </p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l2 level1 lfo5;
tab-stops:list 36.0pt'><![if !supportLists]><span style='font-size:10.0pt;
mso-bidi-font-size:12.0pt;font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]>El <b>comando Timestamp</b> te permite saber el
tiempo (hora) en que un mensaje ha sido enviado, y la hora del servidor en la barra de
estado. Por omisión esta opción es <?php echo(C_SHOW_TIMESTAMP ? "on" : "off"); ?>.
<br>
Escribí &quot;/timestamp&quot; sin comillas. </p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l2 level1 lfo5;
tab-stops:list 36.0pt'><![if !supportLists]><span style='font-size:10.0pt;
mso-bidi-font-size:12.0pt;font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]>El <b>comando Refresh</b> te permite ajustar la
frecuencia con la cual los mensajes son actualizados en tu pantalla. La frecuencia por omisióno es, <?php echo(C_MSG_REFRESH); ?>segundos.
Para cambiar esta frecuencia escribí &quot;/refresh n&quot; sin comillas donde n es el
tiempo en segundos de la nueva frecuencia de actualización. </p>

<p style='margin-left:36.0pt'><i>Por ejemplo:</i> /refresh 5 </p>

<p style='margin-left:36.0pt'>cambiará la frecuencia a 5 segundos. *Advertencia, si n es
menor que 3, no se efectuará actualización. (Esta opción se usa generalmente cuando querés
leer muchos mensajes viejos sin ser perturbado)!* <o:p></o:p></p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l2 level1 lfo5;
tab-stops:list 36.0pt'><?php  if ($Ver == "L")  {   ?><![if !supportLists]><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]>El <b>comando Show</b> te permite ajustar el número de
mensajes mostrados en tu pantalla. Para cambiar el valor por
omisión, escribí &quot;/show n&quot; sin comillas, donde n es el número de
mensajes a ser mostrados. </p>

<p style='margin-left:36.0pt'><i>Por ejemplo:</i> /show 50 </p>

<p style='margin-left:36.0pt'>causará que 50 nuevos mensajes sean mostrados
en tu pantalla. Si todos los mensajes no pueden ser mostrados a través de la
caja, una barra de scroll aparecerá a la derecha de la misma.<o:p></o:p></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman"'><?php  }  else  {   ?>·</span><span
style="mso-spacerun: yes">&nbsp; </span>El <b>comandos Show y Last</b> te permiten
a limpiar la pantalla y mostrar los <i>n</i> mensajes enviados a tu
pantalla. Escribí &quot;/show n&quot; o &quot;/last n&quot; sin comillas, donde n
es el número de mensajes a mostrar. </p>

<p><i>Por ejemplo:</i> /show 50 o /last 50 </p>

<p>limpiará la pantalla y provocará que 50 nuevos mensajes sean mostrados.
Si todos los mensajes no pueden ser vistos en la caja, una barra de scroll
aparecerá a la derecha de la misma.<o:p></o:p></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<?php  };  ?>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name=commands><b><u><span style='font-size:18.0pt'>Fisonomía y comandos</span></u></b></a>
</p>

<p><a name=help><b><span style='font-size:13.5pt'>comando Help (Ayuda):</span></b></a> </p>

<p>Una vez que estés en un salón, puedes acceder a la pantalla de ayuda (<i>help</i>)
haciendo <i>click</i> en el ícono <img border=0 width=15 height=15 id="_x0000_i1047" src="images\helpOff.gif" alt="?"> 
situado justo antes de la caja de mensajes. Si no, podés escribir <b>&quot;/help&quot;
o &quot;/?&quot; comandos</b> en la caja de mensajes. </p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><a
name=smilies><?php if (C_USE_SMILIES == "1") {  include("./lib/smilies.lib.php3");  $Nb = count($SmiliesTbl);  $ResultTbl = Array();  DisplaySmilies($ResultTbl,$SmiliesTbl,$Nb,"tutorial");  unset($SmiliesTbl);  ?><b><span
style='font-size:13.5pt'>Caritas (<i>emoticons</i>):</span></b></a> </p>

<p>Podés insertar caritas en los mensajes. Observá abajo los códigos que
tenés que escribir para obtener las diferentes caritas. <o:p></o:p></p>

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

<p><i>Por ejemplo</i>, enviando el texto &quot;Hola Jack :)&quot; sin comillas,
se mostrará el mensaje completo así Hola Jack <img border=0 width=15 height=15
id="_x0000_i1049" src="images\smilies\smile1.gif" alt=":)">en la pantalla
general o principal. </p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><a
name=text><?php };  if (C_HTML_TAGS_KEEP != "none") {  ?><b><span
style='font-size:13.5pt'>Formato de texto:</span></b></a> </p>

<p>El texto puede ser con negritas, itálicas o subrayado aplicando &lt;B&gt;
&lt;/B&gt;, &lt;I&gt; &lt;/I&gt; o &lt;U&gt; &lt;/U&gt; HTML tags. </p>

<p><i>Por ejemplo</i>, &lt;B&gt;este texto&lt;/B&gt; producirá <b>este texto</b>.
</p>

<p>Para crear un hipervínculo para una dirección de e-mail o URL, escribí la
dirección (sin HTML tags). El hipervínculo será creado automáticamente. </p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name=invite><?php }; ?><b><span style='font-size:13.5pt'>Invitando a un
usuario a ingresar a su salón:</span></b></a> </p>

<p>Usted puede utilizar el <b>comando invite</b> para invitar a un usuario a
ingresar a su salón de chat. </p>

<p><i>Por ejemplo:</i> /invite Jack </p>

<p>enviará un mensaje privado a Jack sugiriéndole que entre a su salón. Este
mensaje contiene el nombre del salón específico, y este nombre aparece como un
vínculo. </p>

<p>Note que usted puede poner más de un nombre de usuario en el comando invite
(eg &quot;/invite Jack,Helen,Alf&quot;). Ellos tienen que estar separados por
comas (,) pero sin espacios. </p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name=changeroom><b><span style='font-size:13.5pt'>Cambiando de salones:</span></b></a>
</p>

<p>La lista a la derecha de la pantalla provee una lista de salones de chat y
los usuarios que están en esos salones. Para dejar un salón y pasar a otro,
simplemente haga click en el salón adonde quiere ingresar. Salones vacíos no
aparecen en la lista. Usted puede moverse a un salón vacío tipeando <b>comando
&quot;/join #nombresalón&quot;</b> sin comillas. </p>

<p><i>Por ejemplo:</i> /join #Salónrojo </p>

<p>lo llevará a usted al nuevo salón llamado Salónrojo. <?php if (C_VERSION == "2") {  echo(C_REQUIRE_REGISTER == "0" ? "<P>Si usted es un usuario registrado, usted" : "<BR><P>Usted");  ?> puede
crear un nuevo salón con este comando. Pero entonces usted tiene que
especificar el tipo: 0 para salones privados, 1 para salones públicos (valor
por defecto). </p>

<p><i>Por ejemplo:</i> /join 0 #MiSalón </p>

<p>crea un nuevo salón privado (asumiendo que no hay un salón público creado
con ese mismo nombre) llamado MiSalón y usted ingresa a ese salón. </p>

<p>Los nombres de los salones no pueden contener comas o barras (\).<?php if (C_NO_SWEAR == "1") echo(" No pueden contener \"malas palabras\"."); ?>
<?php } ?></p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><b><span style='font-size:13.5pt'>Modificando su perfil(datos) adentro del
chat:</span></b> </p>

<p>El <b>comando Profile</b> Crea una ventana separada con la que puede editar
sus datos y modificarlos excepto el nick y la contraseña (usted tiene que utilizar
el vínculo en el comienzo de la página para realizar esto).<br>
Escribí /profile </p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><b><span style='font-size:13.5pt'>Rellamando el último mensaje o comando que
has realizado:</span></b> </p>

<p>El <b>comando ! </b>rellama el último mensaje o comando que has 
realizado.<br>
Escribí /! </p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><b><span style='font-size:13.5pt'>Respondiendo a un usuario específico:</span></b>
</p>

<p>Haciendo click sobre el nombre de otro usuario de la lista (a la derecha de
la pantalla) causará que su &quot;nombre de usuario&gt;&quot; aparezca en la
caja de texto. Esta acción te permitirá dirigirle un mensaje público a ese
usuario. </p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name=private><b><span style='font-size:13.5pt'>Mensajes Privados:</span></b></a>
</p>

<p>Para enviar un mensaje privado a otro usuario del salón, escribí el <b>comando
&quot;/msg usuario texto&quot; o &quot;/to usuario texto&quot;</b>
sin comillas. </p>

<p><i>Por ejemplo, donde Jack es el nombre de usuario:</i> /msg Jack Hola,
cómo estás? </p>

<p>Este mensaje le aparecerá a Jack y a vos, pero otros usuarios no podrán
verlo. </p>

<p>Notá que haciendo click sobre el nick de un usuario en la
pantalla general, automáticamente, se añade este comando en el campo para mensajes.
</p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name=actions><b><span style='font-size:13.5pt'>Acciones:</span></b></a> </p>

<p>Para describir lo que estás haciendo puede utilizar el <b>comando
&quot;/me acción&quot;</b> sin comillas. </p>

<p><i>Por ejemplo:</i> Si Jack envía el mensaje &quot;/me está fumando un
cigarrillo&quot; en la pantalla se mostrará &quot;<b>* Jack</b>&quot; está
fumando un cigarrillo&quot;. </p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name=ignore><b><span style='font-size:13.5pt'>Ignorando a otros usuarios:</span></b></a>
</p>

<p>Para ignorar todos los mensajes de otro usuario, escribí el <b>comando
&quot;/ignore usuario&quot;</b> sin comillas. </p>

<p><i>Por ejemplo:</i> /ignore Jack </p>

<p>Durante el tiempo en que estés chateando, no te aparecerán mensajes de Jack. </p>

<p>Para tener una lista de usuarios cuyos mensajes son ignorados, escribí el <b>comando
&quot;/ignore&quot;</b> sin comillas. </p>

<p>Para volver a recibir mensajes de un usuario al que previamente habías indicado ignorar, escribí el <b>comando
&quot;/ignore - usuario&quot;</b> sin comillas, donde &quot;-&quot; es un
guión. </p>

<p><i>Por ejemplo:</i> /ignore - Jack </p>

<p>Ahora todos los mensajes de Jack durante la sesión serán mostrados,
incluyendo todos los mensajes enviados por Jack antes de escribir este
comando. 
<p>
Si no especificás ningún nombre de usuario después del guión,
tu &quot;lista de usuarios ignorados&quot; será limpiada. </p>

<p>Notá que podés poner más de un usuario con el comando ignore (p.ej.
&quot;/ignore Jack,Helen,Alf&quot; o &quot;/ignore - Jack,Alf&quot;). Ellos
deben ser agregados separados por comas (,) sin espacios. </p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name=whois><b><span style='font-size:13.5pt'>Obteniendo información
acerca de otros usuarios:</span></b></a> </p>

<p>Para ver la información pública de otros usuarios, escribí el <b>comando
&quot;/whois usuario&quot;</b> sin comillas. </p>

<p><i>Por ejemplo:</i> /whois Jack </p>

<p>donde 'Jack' es el nombre de usuario. Este comando abre una ventana
separada que te mostrará la información pública declarada por el usuario. </p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name=save><?php if (C_SAVE != "0") {  ?><b><span style='font-size:13.5pt'>Salvando
mensajes:</span></b></a> </p>

<p>Para exportar mensajes (notificaciones excluídas) a un archivo local HTML,
escribí el <b>comando &quot;/save n&quot;</b> sin comillas. </p>

<p><i>Por ejemplo:</i> /save 5 </p>

<p>donde '5' es el número de mensajes a salvar. Si n no está especificado,
todos los mensajes correspondientes al salón actual serán añadidos en la
cuenta. </p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>

<?php }; ?>

<p><a name=moderator><b><u><span style='font-size:18.0pt'>Comandos para el
administrador y/o moderadores solamente</span></u></b></a> </p>

<P>
<FONT SIZE="+1"><A NAME="announce"><B>Enviando un anuncio:</B></A></FONT>
<P>

<p>El administrador puede enviar un anuncio a todos los usuarios con el <b>comando
announce</b>. </p>

<p><i>Por ejemplo: /announce El sistema de chat quedará fuera de funcionamiento
por mantenimiento a las 8 p.m..</i> </p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name=kick><b><span style='font-size:13.5pt'>Expulsando (<i>Kickeando</i>) a un usuario:</span></b>
</a></p>

<p><span style='mso-bookmark:kick'>Los moderadores pueden <i>kickear</i> (expulsar) a un usuario, y el
administrador puede <i>kickear</i> a un usuario o al moderador con el <b>comando kick</b>.
Excepto para el administrador, el usuario a ser <i>kickeado</i> debe estar en el
salón actual. </span></p>

<p><span style='mso-bookmark:kick'><i>Por ejemplo</i>, si Jack es el nombre del
usuario a <i>kickear</i>: /kick Jack </span></p>

<span style='mso-bookmark:kick'></span>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name=banish><?php if (C_BANISH != "0") {  ?><b><span style='font-size:
13.5pt'>Bloqueando <i>Baneando</i> a un usuario:</span></b></a> </p>

<p>Los moderadores pueden <i>banear</i> (bloquear) a un usuario, o a un moderador con el <b>comando
ban</b>.<br>
El administrador puede <i>banear</i> a un usuario que está chateando en otro salón. 
El administrador también puede <i>banear</i> a un usuario para siempre de un salón, o
de <b>todos los salones<b> anteponiendo un '<b>&nbsp;*&nbsp;</b>'
al nick del usuario que va a ser baneado. </p>

<p><i>Por ejemplo</i>, si Jack es el nombre del usuario a ser baneado: <i>/ban
Jack</i> o <i>/ban * Jack</i> </p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>


<div class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center'>

<hr size=2 width="100%" align=center>

</div>


<p><a name=promote><?php }; ?><b><span style='font-size:13.5pt'>Promoviendo a un
usuario al nivel de moderador:</span></b></a> </p>

<p>Los Moderadores y el Administrador pueden promover a otros usuarios a
moderadores con el <b>comando promote</b>. </p>

<p><i>Por ejemplo</i>, si Jack es el nombre del usuario a ser promovido:<i>
/promote Jack</i> </p>

<p>Solamente el administrador puede oponerse a esta acción (reduce al moderador
a un simple usuario) en una página dedicada. No hay comando para realizar esto.
</p>

<p align=right style='text-align:right'><a href="#top">Volver al comienzo</a></p>

</div>

</body>

</html>
