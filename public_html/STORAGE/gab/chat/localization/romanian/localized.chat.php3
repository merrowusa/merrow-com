<?php
// File : romanian.lang.php3
// Original file by Radu Swider <swidera@satline.ro>
// Modified and update by Ciprian Popovici-Oana <floppy@kermit.cs.pub.ro>

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "Tutorial");

define("L_WEL_1", "Mesajele sunt sterse dupa");
define("L_WEL_2", "ore si utilizatorii dupa");
define("L_WEL_3", "minute ...");

define("L_CUR_1", "Acum");
define("L_CUR_2", "pe chat.");
define("L_CUR_3", "Utilizatori aflati in camere chat");
define("L_CUR_4", "utilizatori in camere private");

define("L_SET_1", "Actualizeaza ...");
define("L_SET_2", "porecla");
define("L_SET_3", "numarul de mesaje de afisat");
define("L_SET_4", "timpul de actualizare");
define("L_SET_5", "Selecteaza o camera de chat...");
define("L_SET_6", "camere disponibile");
define("L_SET_7", "Faceti alegerea ...");
define("L_SET_8", "camere publice create de utilizatori");
define("L_SET_9", "creeaza a ta");
define("L_SET_10", "publica");
define("L_SET_11", "privata");
define("L_SET_12", "camera");
define("L_SET_13", "Apoi treci la");
define("L_SET_14", "chat");

define("L_SRC", "este disponibil gratuit de la");

define("L_SECS", "secunde");
define("L_MIN", "minut");
define("L_MINS", "minute");

// registration stuff:
define("L_REG_1", "parola");
define("L_REG_1r", "(numai cind esti inregistrat)");
define("L_REG_2", "Utilizatori inregistrati");
define("L_REG_3", "Inregistreaza-te");
define("L_REG_4", "Editeaza profilul");
define("L_REG_5", "Sterge utilizator");
define("L_REG_6", "Inregistrare utilizator");
define("L_REG_7", "parola ta");
define("L_REG_8", "email-ul tau");
define("L_REG_9", "Ai fost inregistrat cu succes.");
define("L_REG_10", "Inapoi");
define("L_REG_11", "Editing");
define("L_REG_12", "Schimba informatiile despre utilizator");
define("L_REG_13", "Sterge utilizator");
define("L_REG_14", "Login");
define("L_REG_15", "Intra");
define("L_REG_16", "Schimba");
define("L_REG_17", "Datele tale au fost schimbate cu succes.");
define("L_REG_18", "Ai fost dat afara din camera de catre moderator.");
define("L_REG_19", "Chiar vrei sa fii sters?");
define("L_REG_20", "Da");
define("L_REG_21", "Ai fost sters cu succes.");
define("L_REG_22", "Nu");
define("L_REG_23", "Utilizatori");
define("L_REG_24", "Stergerea activata");
define("L_REG_25", "Inchide");
define("L_REG_26", "Numele");
define("L_REG_27", "Permisii");
define("L_REG_28", "Camere moderate");
define("L_REG_29", "Camerele moderate sunt separate de virgula (,) fara spatii.");
define("L_REG_30", "prenumele");
define("L_REG_31", "numele");
define("L_REG_32", "WEB");
define("L_REG_33", "arata e-mail cind se da comanda /whois");
define("L_REG_34", "Editeaza profilul");
define("L_REG_35", "Administration");
define("L_REG_36", "limbi vorbite");
define("L_REG_37", "Cimpurile care contin <span class=\"error\">*</span> trebuiesc completate.");
define("L_REG_38", "Lista camerelor existente");
define("L_REG_39", "Camera in care te aflai a fost stearsa de administrator.");
define("L_REG_40", "Actualizare");
define("L_REG_41", "Clean selected rooms");
define("L_REG_42", "There is neither registered user (except yourself), neither room to clean.");
define("L_REG_43", "%s is no more moderator for this room.");
define("L_REG_44", "Clean a \"non-default\" room will also remove all moderator<BR>status for this room.");
define("L_REG_45", "gender");
define("L_REG_46", "male");
define("L_REG_47", "Female");

// e-mail validation stuff
define("L_EMAIL_VAL_1", "Your settings to enter the chat");
define("L_EMAIL_VAL_2", "Welcome to our chat server.");
define("L_EMAIL_VAL_Err", "Internal error, please contact the administrator: <a href=\"mailto:%s\">%s</a>.");
define("L_EMAIL_VAL_Done", "Your password has been sent to your e-mail address.");

// admin stuff
define("L_ADM_1", "%s is no more moderator for this room.");
define("L_ADM_2", "You're no more a registered user.");

//error messages
define("L_ERR_USR_1", "Acest nume este folosit. Alege-ti altul.");
define("L_ERR_USR_2", "Trebuie sa-ti alegi un nume.");
define("L_ERR_USR_3", "Acest nume este inregistrat. Introdu parola sau alege-ti alt nume.");
define("L_ERR_USR_4", "Ai scris o parola incorecta.");
define("L_ERR_USR_5", "Trebuie sa scrii numele.");
define("L_ERR_USR_6", "Trebuie sa scrii parola.");
define("L_ERR_USR_7", "Trebuie sa scrii adresa ta de e-mail.");
define("L_ERR_USR_8", "Trebuie sa scrii o adresa de e-mail corecta.");
define("L_ERR_USR_9", "Acest nume este deja folosit.");
define("L_ERR_USR_10", "Nume sau parola incorecta.");
define("L_ERR_USR_11", "Trebuie sa fii administrator.");
define("L_ERR_USR_12", "Esti administrator, nu poti fi sters.");
define("L_ERR_USR_13", "Pentru a crea o camera trebuie sa fii inregistrat.");
define("L_ERR_USR_14", "Trebuie sa fii inregistrat inainte de a intra pe chat.");
define("L_ERR_USR_15", "Trebuie sa scrii numele complet.");
define("L_ERR_USR_16", "Numele nu poate contine spatii, virgula sau backslash (\\).");
define("L_ERR_USR_17", "This room doesn't exist and you are not allowed to create one.");
define("L_ERR_USR_18", "Banned word found in your username.");
define("L_ERR_USR_19", "You cannot be in more than one room at the same time.");
define("L_ERR_USR_20", "You have been banished from this room or from the chat.");
define("L_ERR_ROM_1", "Numele camerei nu poate contine virgula sau backslash (\\).");
define("L_ERR_ROM_2", "Banned word found in the room's name you want to create.");
define("L_ERR_ROM_3", "O camera publica cu acest nume exista.");
define("L_ERR_ROM_4", "Numele camerei este invalid.");

// users frame or popup
define("L_EXIT", "Iesire");
define("L_DETACH", "Detasare");
define("L_EXPCOL_ALL", "Extinde/Comprima Tot");
define("L_CONN_STATE", "Connection state");
define("L_CHAT", "Chat");
define("L_USER", "utilizator este");
define("L_USERS", "utilizatori sunt");
define("L_NO_USER", "Nici un utlizator");
define("L_ROOM", "camera");
define("L_ROOMS", "camere");
define("L_EXPCOL", "Extinde/Comprima camera");
define("L_BEEP", "Beep/no beep at user entrance");
define("L_PROFILE", "Display profile");
define("L_NO_PROFILE", "No profile");

// input frame
define("L_HLP", "Ajutor");
define("L_BAD_CMD", "Comanda invalida !");
define("L_ADMIN", "%s este deja administrator !");
define("L_IS_MODERATOR", "%s este deja moderatorul !");
define("L_NO_MODERATOR", "Aceasta comanda o poate folosi numai moderatorul acestei camere.");
define("L_MODERATOR", "%s este acum moderatorul acestei camere.");
define("L_NONEXIST_USER", "Utilizatorul %s nu este in camera curenta.");
define("L_NONREG_USER", "Utilizatorul %s nu este inregistrat.");
define("L_NONREG_USER_IP", "His IP is: %s.");
define("L_NO_KICKED", "Utilizatorul %s este moderator sau administrator si nu poate fi dat afara.");
define("L_KICKED", "Utilizatorul %s a fost dat afara!");
define("L_NO_BANISHED", "User %s is moderator or administrator and can't be banished.");
define("L_BANISHED", "User %s has successfully been banished.");
define("L_SVR_TIME", "Timpul curent pe server: ");
define("L_NO_SAVE", "No message to save!");
define("L_NO_ADMIN", "Only the administrator can use this command.");
define("L_ANNOUNCE", "ANNOUNCE");
define("L_INVITE", "%s suggest you to join her/him into the <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a> room.");
define("L_INVITE_REG", " You have to be registered to enter this room.");
define("L_INVITE_DONE", "Your invitation has been sent to %s.");
define("L_OK", "Send");

// help popup
define("L_HELP_TIT_1", "Imagini pe care le poti introduce in mesaje.");
define("L_HELP_TIT_2", "Formatarea textului pentru mesaje");
define("L_HELP_FMT_1", "Textul poate fi ingrosat (bold), inclinat (italic) sau subliniat (underline) prin simpla sa incadrare intre cuvintele cheie  &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; sau &lt;U&gt; &lt;/U&gt;<BR>Exemplu, &lt;B&gt;acest text&lt;/B&gt; va produce <B>acest text</B>.");
define("L_HELP_FMT_2", "Pentru a crea un hyperlink (pentru e-mail sau pagina www) in mesajul tau, tasteaza pur-si-simplu adresa corespunzatoare. Hyperlink-ul va fi creat automat.");
define("L_HELP_TIT_3", "Comenzi");
define("L_HELP_USR", "utilizator");
define("L_HELP_MSG", "mesaj");
define("L_HELP_ROOM", "camera");
define("L_HELP_CMD_0", "{} obligatoriu, [] optional.");
define("L_HELP_CMD_1", "Stabileste cite mesaje sa fie aratate, 5 cel putin.");
define("L_HELP_CMD_1a", "Set number of messages to show, minimum and default are 5.");
define("L_HELP_CMD_1b", "Reload the message frame and display the n latest messages, minimum and default are 5.");
define("L_HELP_CMD_2a", "Modifica timpul de reactualizare a mesajelor (in secunde).");
define("L_HELP_CMD_2b", "Modify messages and users lists refresh delay (in seconds).<BR>If n is not specified or less than 3, toggles between no refresh and 10s refresh.");
define("L_HELP_CMD_3", "Schimba ordinea mesajelor.");
define("L_HELP_CMD_4", "Intra in alta camera; daca aceasta camera nu exista si ai dreptul o poti crea.<BR>n este 0 pentru camere private si 1 pentru camere publice. Daca n nu este specificat, valuarea sa implicita este 1.");
define("L_HELP_CMD_5", "Paraseste chat-ul dupa ce ai scris un mesaj optional.");
define("L_HELP_CMD_6", "Ignora mesaje de la utilizatorul a carui porecla este specificata.<BR>Fara nici o optiune va aparea o ferestra care va afisa toti utilizatori ignorati.");
define("L_HELP_CMD_7", "Recheama textul introdus anterior (comanda sau mesaj).");
define("L_HELP_CMD_8", "Arata/Ascunde timpul din fata mesajelor.");
define("L_HELP_CMD_9", "Expulzeaza utilizatori din chat. Aceasta comanda poate fi data numai de moderator.");
define("L_HELP_CMD_10", "Trimite un mesaj privat catre utilizatorul specificat (alti utilizatori nu vor vede mesajul).");
define("L_HELP_CMD_11", "Arata informatii despre utilizatorul specificat.");
define("L_HELP_CMD_12", "Afiseaza o fereastra pentru editarea profilului utilizatorului.");
define("L_HELP_CMD_13", "Te anunta daca un utilizator a intrat/iesit in camera.");
define("L_HELP_CMD_14", "Permite administratorului sau moderatorului(moderatorilor) camerei curente sa avanseze ca moderator pentru aceeasi camera un utilizator inregistrat.");
define("L_HELP_CMD_15", "Clear the message frame and show only the last 5 messages.");
define("L_HELP_CMD_16", "Save the last n messages (notifications ones excluded) to an HTML file. If n is not specified, all available messages will be taken into account.");
define("L_HELP_CMD_17", "Allow the administrator to send an announce to all users whatever the room they are chatting into.");
define("L_HELP_CMD_18", "Suggest an user chatting in an other room to join the one you are into.");
define("L_HELP_CMD_19", "Allow the moderator(s) of a room or the administrator to \"banish\" an user from the room for a time defined by the administrator.<BR>The later can banish an user chatting in an other room than the one he is into and use the '<B>&nbsp;*&nbsp;</B>' setting to banish \"for ever\" an user from the chat as the whole.");
define("L_HELP_CMD_20", "Describe what you're doing without refer yourself.");

// messages frame
define("L_NO_MSG", "Nu este nici un mesaj ...");
define("L_TODAY_DWN", "The messages that have been sent today start below");
define("L_TODAY_UP", "The messages that have been sent today start above");

// message colors
$TextColors = array(	"Negru" => "#000000",
				"Rosu" => "#FF0000",
				"Verde" => "#009900",
				"Albastru" => "#0000FF",
				"Mov" => "#9900FF",
				"Rosu inchis" => "#990000",
				"Verde inchis" => "#006600",
				"Albastru inchis" => "#000099",
				"Maro" => "#996633",
				"Albastru deschis" => "#006699",
				"Portocaliu" => "#FF6600");

// ignored popup
define("L_IGNOR_TIT", "Ignorati:");
define("L_IGNOR_NON", "Nici un utilizator nu e ignorat");

// whois popup
define("L_WHOIS_ADMIN", "Administrator");
define("L_WHOIS_MODER", "Moderator");
define("L_WHOIS_USER", "Utilizator");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s a intrat in camera");
define("L_EXIT_ROM", "%s a iesit din camera");
?>