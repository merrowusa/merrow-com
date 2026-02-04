<?php
// File : catalan.lang.php3
// Translation by Jan Arbona <jan@myp.ad>

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "Tutorial");

define("L_WEL_1", "Els missatges s'esborren després de");
define("L_WEL_2", "hores, i els noms dels usuaris després de");
define("L_WEL_3", "minuts ...");

define("L_CUR_1", "Hi ha actualment");
define("L_CUR_2", "dins el xat.");
define("L_CUR_3", "Usuaris en aquest moment a les sales");
define("L_CUR_4", "usuaris en sales privades");

define("L_SET_1", "Si us plau establiu ...");
define("L_SET_2", "el vostre nom d'usuari");
define("L_SET_3", "el nombre de missatges a veure");
define("L_SET_4", "el temps entre actualitzacions");
define("L_SET_5", "Seleccioneu una sala de xat ...");
define("L_SET_6", "sales per defecte");
define("L_SET_7", "Escolliu una opció ...");
define("L_SET_8", "sales públiques creades pels usuaris");
define("L_SET_9", "crear la vostra propia sala");
define("L_SET_10", "pública");
define("L_SET_11", "privada");
define("L_SET_12", "sala");
define("L_SET_13", "A les hores, només");
define("L_SET_14", "xerrar");

define("L_SRC", "es troba disponible de forma gratuita a");

define("L_SECS", "segons");
define("L_MIN", "minut");
define("L_MINS", "minuts");

// registration stuff:
define("L_REG_1", "password d'accés");
define("L_REG_1r", "(només quan esteu registrats)");
define("L_REG_2", "Registre de usuaris");
define("L_REG_3", "Registrar-se");
define("L_REG_4", "Editar les vostres dades");
define("L_REG_5", "Eliminar un usuari");
define("L_REG_6", "Registre d'usuari");
define("L_REG_7", "Password d'accés");
define("L_REG_8", "el vostre e-mail");
define("L_REG_9", "Heu estat correctament registrats.");
define("L_REG_10", "Tornar");
define("L_REG_11", "Editant");
define("L_REG_12", "Canviant dades d'usuari");
define("L_REG_13", "Esborrant usuari");
define("L_REG_14", "Login");
define("L_REG_15", "Entrar");
define("L_REG_16", "Modificar");
define("L_REG_17", "Les vostres dades han estat correctament canviades.");
define("L_REG_18", "Heu estat expulsats per un Moderador.");
define("L_REG_19", "Realment voleu ésser eliminat?");
define("L_REG_20", "Si");
define("L_REG_21", "Eliminació correcte.");
define("L_REG_22", "No");
define("L_REG_25", "Tancar");
define("L_REG_30", "nom");
define("L_REG_31", "cognom");
define("L_REG_32", "WEB");
define("L_REG_33", "permetre veure l'e-mail amb el comandament /whois");
define("L_REG_34", "Editant les dades de l'usuari");
define("L_REG_35", "Administració");
define("L_REG_36", "idiomes parlats");
define("L_REG_37", "Els camps amb <span class=\"error\">*</span> s'han d'omplir.");
define("L_REG_39", "L'administrador ha donat de baixa aquesta sala.");
define("L_REG_45", "perfil");
define("L_REG_46", "home");
define("L_REG_47", "dona");

// e-mail validation stuff
define("L_EMAIL_VAL_1", "Les vostres dades i configuració per a entrar al Xat");
define("L_EMAIL_VAL_2", "Benvinguts al Xat de l'Educand.");
define("L_EMAIL_VAL_Err", "Errada interna, us agrairem ho notifiqueu a l'administrador: <a href=\"mailto:%s\">%s</a>.");
define("L_EMAIL_VAL_Done", "La vostra Password us ha estat enviada al vostre e-mail.");

// admin stuff
define("L_ADM_1", "%s no consta com a moderador actual de la sala.");
define("L_ADM_2", "No consteu com a usuari registrat.");

//error messages
define("L_ERR_USR_1", "Aquest nom d'usuari ja es troba registrat. Si us plau escolliu-ne un altre.");
define("L_ERR_USR_2", "Cal escollir un nom d'usuari.");
define("L_ERR_USR_3", "Aquest usuari ja es troba registrat. Especifiqueu la vostra password o escolliu un altre nom.");
define("L_ERR_USR_4", "Password incorrecte.");
define("L_ERR_USR_5", "Cal escriure un nom d'usuari.");
define("L_ERR_USR_6", "Cal escriure una password.");
define("L_ERR_USR_7", "Cal escriure el vostre e-mail.");
define("L_ERR_USR_8", "L'adreça e-mail cal que sigui correcte.");
define("L_ERR_USR_9", "Aquest nom d'usuari ja existeix.");
define("L_ERR_USR_10", "Nom d'usuari o password incorrectes.");
define("L_ERR_USR_11", "Cal ésser administrador.");
define("L_ERR_USR_12", "L'administrador no es pot esborrar.");
define("L_ERR_USR_13", "Cal estar registrat per a poder crear la vostra sala.");
define("L_ERR_USR_14", "Us cal registrar-vos per a poder entrar al xat.");
define("L_ERR_USR_15", "Si us plau, especifiqueu el vostre nom complet.");
define("L_ERR_USR_16", "El nom d'usuari no pot tenir espais, o barres invertides (\\).");
define("L_ERR_USR_17", "Aquesta sala no existeix i no us està permés de crear-ne una.");
define("L_ERR_USR_18", "El vostre nom d'usuari te una paraula no permesa.");
define("L_ERR_USR_19", "No es pot estar en més d'una sala a l'hora.");
define("L_ERR_USR_20", "Heu estat marcats en aquesta sala o en el xat. No podeu entrar.");
define("L_ERR_ROM_1", "El nom de la sala no pot tenir una barra invertida (\\).");
define("L_ERR_ROM_2", "No podeu crear la sala perquè te una paraula no permesa.");
define("L_ERR_ROM_3", "Aquesta sala ja existeix com a sala pública.");
define("L_ERR_ROM_4", "Nom de la sala incorrecte.");

// users frame or popup
define("L_EXIT", "Sortir");
define("L_DETACH", "Separa");
define("L_EXPCOL_ALL", "Expandir/contraure tot");
define("L_CONN_STATE", "Estat de la connexió");
define("L_CHAT", "Xerrar");
define("L_USER", "usuari");
define("L_USERS", "usuaris");
define("L_NO_USER", "Sense usuaris");
define("L_ROOM", "sala");
define("L_ROOMS", "sales");
define("L_EXPCOL", "Expandir/contraure sala");
define("L_BEEP", "So/sense so quan entri un usuari");
define("L_PROFILE", "Veure perfil");
define("L_NO_PROFILE", "No profile");

// input frame
define("L_HLP", "Ajut");
define("L_BAD_CMD", "ordre no permesa !");
define("L_ADMIN", "%s ja és administrador!");
define("L_IS_MODERATOR", "%s ja és moderador!");
define("L_NO_MODERATOR", "Només un moderador de la sala pot emprar aquesta ordre.");
define("L_MODERATOR", "%s és un moderador d'aquesta sala.");
define("L_NONEXIST_USER", "L'usuari %s no es troba a la sala.");
define("L_NONREG_USER", "L'usuari %s no es troba registrat.");
define("L_NONREG_USER_IP", "Aquesta IP és: %s.");
define("L_NO_KICKED", "L'usuari %s és un moderador o administrador i no es pot expulsar de la sala.");
define("L_KICKED", "L'usuari %s ha estat correctament expulsat.");
define("L_NO_BANISHED", "L'usuari %s és moderador o administrador i no pot ésser marcat.");
define("L_BANISHED", "L'usuari %s ha estat correctament marcat.");
define("L_SVR_TIME", "Hora del Servidor MYP: ");
define("L_NO_SAVE", "Cap missatge per a desar!");
define("L_NO_ADMIN", "Només l'administrador pot emprar aquest comandament.");
define("L_ANNOUNCE", "ANUNCI");
define("L_INVITE", "%s us suggereix d'entrar a la sala <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a> a xerrar.");
define("L_INVITE_REG", " Cal estar registrat per a poder entrar a aquesta sala.");
define("L_INVITE_DONE", "la vostra invitació ha estat enviada a %s.");
define("L_OK", "Enviar");

// help popup
define("L_HELP_TIT_1", "Somriures");
define("L_HELP_TIT_2", "Format del texte pels missatges");
define("L_HELP_FMT_1", "Es pot escriure texte amb negreta, cursiva o remarcat, incloent els textes entre els marcadors &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; o &lt;U&gt; &lt;/U&gt; .<BR>Per exemple, &lt;B&gt;aquest texte&lt;/B&gt; es veurà com <B>aquest texte</B>.");
define("L_HELP_FMT_2", "Per a establir enllaços (per a e-mail o pàgina WEB) dins el missatge, només cal escriure l'adreça e-mail sense cap marcador especial. El mateix per a enllaços a pàgines Web.");
define("L_HELP_TIT_3", "Comandaments estil IRC");
define("L_HELP_USR", "usuari");
define("L_HELP_MSG", "missatge");
define("L_HELP_ROOM", "sala");
define("L_HELP_CMD_0", "{} representa una configuració necessaria, [] i una configuració opcional.");
define("L_HELP_CMD_1a", "Configureu el nombre màxim de missatges a veure, 5 com a mínim.");
define("L_HELP_CMD_1b", "Actualiza els missatges i amplia la finestra dels missatges, el mínim i establert per defecte és de 5.");
define("L_HELP_CMD_2a", "Modifica el temps d'actualització dels missatges (en segons).<BR>Si el valor de n no s'especifica o és menor que 3, s'activa sense temps d'actualització o amb 10 segons d'actualització.");
define("L_HELP_CMD_2b", "Modifica els missatges i la llista dels usuaris en temps (en segons).<BR>Si no s'especifica o s'especifica un temps menor de 3 ho desa establert en 10");
define("L_HELP_CMD_3", "Inverteis l'ordre dels missatges.");
define("L_HELP_CMD_4", "Entra en una altra sala, el crea i registra si no existeix i si us està permés (en cas de que disposseu de permís per a fer-ho).<BR>n és 0 per a privat i 1 per a públic, si no s'especifica serà públic.");
define("L_HELP_CMD_5", "Surt del Xat.  Opcionalment es pot deixar un missatge de comiat.");
define("L_HELP_CMD_6", "Ignora tots els missatges de l'usuari, si s'especifica el nom d'usuari.<BR>Sense opcions, aquest comandament obre una finestra auxiliar amb tots els noms dels usuaris ignorats.");
define("L_HELP_CMD_7", "Repeteix l'últim missatge escrit (comandament o missatge).");
define("L_HELP_CMD_8", "Veure/Amagar l'hora dels missatges.");
define("L_HELP_CMD_9", "Expulsa a un usuari del Xat. Comandament només habilitat per a moderadors.");
define("L_HELP_CMD_10", "Envia un missatge privat a un usuari en particular (la resta dels usuaris no veuen aquest missatge).");
define("L_HELP_CMD_11", "Informació d'un usuari en particular.");
define("L_HELP_CMD_12", "Us obre una finestra que us permet de modificar les dades de registre.");
define("L_HELP_CMD_13", "Activa la notificació d'entrada/sortida d'un usuari de la sala.");
define("L_HELP_CMD_14", "Permeten a l'administrador o moderador(s) de la sala promoure a determinats usuaris a la categoria de moderadors.");
define("L_HELP_CMD_15", "Neteja la finestra de missatges i permet veure els darrers 5 enviats.");
define("L_HELP_CMD_16", "Desa el darrers n missatges (les notificacions no s'inclouen) en una pàgina HTML. Si no especifiqueu el valor de n tots els misstges són desats. Rebreu una notificació per a desar l'arxiu al vostre ordinador.");
define("L_HELP_CMD_17", "Permet als administradors a enviar un missatge a tots els usuaris en totes les sales.");
define("L_HELP_CMD_18", "Suggereix a un usuari a canviar de sala i seguir xerrant en una altre sala.");
define("L_HELP_CMD_19", "Permet als moderadors d'una sala o a l'administradors a \"marcar\" a un usuari de la sala per un temps definit per l'administrador en que np podrà tornar a entrar.<BR>En cas de que un usuari es vulgui marcar per a sempre en aquella sala es pot emprar el comandament '<B>&nbsp;*&nbsp;</B>' per a marcar \"per sempre\" i prohibir la seva entrada.");
define("L_HELP_CMD_20", "Describe what you're doing without refer yourself.");

//message frame
define("L_NO_MSG", "No hi han missatges ...");
define("L_TODAY_DWN", "The messages that have been sent today start below");
define("L_TODAY_UP", "The messages that have been sent today start above");

// message colors
$TextColors = array(	"Negre" => "#000000",
				"Vermell" => "#FF0000",
				"Verd" => "#009900",
				"Blau" => "#0000FF",
				"Morat" => "#9900FF",
				"Vermell fosc" => "#990000",
				"Verd fosc" => "#006600",
				"Blau fosc" => "#000099",
				"Marró" => "#996633",
				"Blau clar" => "#006699",
				"Taronja" => "#FF6600");

//ignored popup
define("L_IGNOR_TIT", "Ignorat");
define("L_IGNOR_NON", "No ignorat");

// whois popup
define("L_WHOIS_ADMIN", "Administrador");
define("L_WHOIS_MODER", "Moderador");
define("L_WHOIS_USER", "Usuari");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s entra a la sala");
define("L_EXIT_ROM", "%s surt de la sala");
?>