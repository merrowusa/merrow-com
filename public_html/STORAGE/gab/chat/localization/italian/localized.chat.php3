<?php
// File : italian.lang.php3
// Translation by Andrea D'Alessandro <andrea@abol.it> & Massimo Fubini <massimo@tomato.it>
//	& Giuliano Yurij Beccaria <yurij@e-pages.it> & Marco Borrini <borrini@tradimento.it>
//      & Bartolotta Gioachino <developers@rockitalia.com> & Silvia M. Carrassi <silvia@ladysilvia.net>

// extra header for charset - Informazioni extra sul set di caratteri
$Charset = "iso-8859-1";

// medium font size in pt. - Dimensioni dei Font in punti
$FontSize = 10;

// welcome page - Pagina di Benvenuto
define("L_TUTORIAL", "Guida pratica");

define("L_WEL_1", "I messaggi verranno cancellati dopo");
define("L_WEL_2", "ore e i nomi degli utenti dopo");
define("L_WEL_3", "minuti...");

define("L_CUR_1", "Attualmente ci sono");
define("L_CUR_2", "nella chat.");
define("L_CUR_3", "Utenti attualmente nelle chat pubbliche");
define("L_CUR_4", "utenti nelle aree private");

define("L_SET_1", "Inserisci ...");
define("L_SET_2", "Nome utente");
define("L_SET_3", "Numero massimo di messaggi da visualizzare");
define("L_SET_4", "Tempo di aggiornamento");
define("L_SET_5", "Seleziona un'area di chat ...");
define("L_SET_6", "Aree di default");
define("L_SET_7", "Fai la tua scelta ...");
define("L_SET_8", "Aree pubbliche create dagli utenti");
define("L_SET_9", "Crea la tua area");
define("L_SET_10", "pubblica");
define("L_SET_11", "privata");
define("L_SET_12", "");
define("L_SET_13", "Ora puoi");
define("L_SET_14", "Entrare!");

define("L_SRC", "è disponibile gratuitamente su");

define("L_SECS", "secondi");
define("L_MIN", "minuto");
define("L_MINS", "minuti");

// registration - registrazione:
define("L_REG_1", "password");
define("L_REG_1r", "(solo se sei registrato)");
define("L_REG_2", "Utenti registrati");
define("L_REG_3", "Registrati");
define("L_REG_4", "Imposta il tuo profilo");
define("L_REG_5", "Cancella utenti");
define("L_REG_6", "Registrazione utenti");
define("L_REG_7", "la tua password");
define("L_REG_8", "la tua e-mail");
define("L_REG_9", "Sei stato registrato.");
define("L_REG_10", "Indietro");
define("L_REG_11", "Modifica");
define("L_REG_12", "Modifico le informazioni sull'utente");
define("L_REG_13", "Cancello l'utente");
define("L_REG_14", "Login");
define("L_REG_15", "Log In");
define("L_REG_16", "Cambia");
define("L_REG_17", "Le tue informazioni sono state modificate con successo.");
define("L_REG_18", "Sei stato allontanato dalla chat dal moderatore.");
define("L_REG_19", "Vuoi realmente essere rimosso?");
define("L_REG_20", "Si");
define("L_REG_21", "Sei stato rimosso con successo.");
define("L_REG_22", "No");
define("L_REG_25", "Chiudi");
define("L_REG_30", "Nome");
define("L_REG_31", "Cognome");
define("L_REG_32", "WEB");
define("L_REG_33", "Mostra l'e-mail al comando /whois");
define("L_REG_34", "Modifica del profilo utente");
define("L_REG_35", "Administrazione");
define("L_REG_36", "lingue parlate");
define("L_REG_37", "I campi con <span class=\"error\">*</span> devono essere completati.");
define("L_REG_39", "La chat in cui eri è stata rimossa dall'Amministratore.");
define("L_REG_45", "Sesso");
define("L_REG_46", "maschile");
define("L_REG_47", "femminile");

// e-mail validation stuff
define("L_EMAIL_VAL_1", "Le tue impostazioni per entrare nella chat.");
define("L_EMAIL_VAL_2", "Benvenuto nel nostro chat server.");
define("L_EMAIL_VAL_Err", "Internal error, per favore contattate l'amministratore: <a href=\"mailto:%s\">%s</a>.");
define("L_EMAIL_VAL_Done", "La vostra password è stata inviata al vostro indirizzo email.");

// admin stuff - Amministrazione
define("L_ADM_1", "%s non è più il moderatore di questa chat.");
define("L_ADM_2", "Non sei più un utente registrato.");

//error messages - Messaggi di errore
define("L_ERR_USR_1", "Questo nick è gia in uso. Seleziona un nuovo nick.");
define("L_ERR_USR_2", "Devi scegliere un nome utente.");
define("L_ERR_USR_3", "Questo username e' registrato. Usane un'altro.");
define("L_ERR_USR_4", "Hai scritto una password sbagliata.");
define("L_ERR_USR_5", "Devi avere uno username.");
define("L_ERR_USR_6", "Devi scrivere una password.");
define("L_ERR_USR_7", "Devi scrivere il tuo e-mail.");
define("L_ERR_USR_8", "Devi scrivere un valido indirizzo e-mail.");
define("L_ERR_USR_9", "Questo username e' gia' utilizzato.");
define("L_ERR_USR_10", "Username o password sbagliata.");
define("L_ERR_USR_11", "Devi essere un Amministratore.");
define("L_ERR_USR_12", "Sei un Amministratore, quindi non puoi essere rimosso.");
define("L_ERR_USR_13", "Per creare una tua chat devi essere registrato.");
define("L_ERR_USR_14", "Per chattare devi essere registrato.");
define("L_ERR_USR_15", "Devi scrivere il tuo nome.");
define("L_ERR_USR_16", "L'Username non può contenere spazi vuoti, virgole o backslash (\\).");
define("L_ERR_USR_17", "Questa chat non esiste, tu non sei abilitato a crearne una nuova.");
define("L_ERR_USR_18", "Nel tuo nome utente è stata trovata una parola censurabile.");
define("L_ERR_USR_19", "Non puoi essere in più di una chat contemporaneamente.");
define("L_ERR_USR_20", "You have been banished from this room or from the chat.");
define("L_ERR_ROM_1", "Il nome delle chat non può contenere virgole o backslash (\\).");
define("L_ERR_ROM_2", "Nel nome di chat è stata trovata una parola censurabile.");
define("L_ERR_ROM_3", "Già esiste un'area pubblica con questo nome.");
define("L_ERR_ROM_4", "Nome area non valido.");

// users frame or popup - frame utente o menù a cascata
define("L_EXIT", "Esci");
define("L_DETACH", "Trasforma in finestra");
define("L_EXPCOL_ALL", "Espandi/Chiudi tutto");
define("L_CONN_STATE", "Connection state");
define("L_CHAT", "Chat");
define("L_USER", "utente");
define("L_USERS", "utenti");
define("L_NO_USER", "Nessun utente");
define("L_ROOM", "area");
define("L_ROOMS", "aree");
define("L_EXPCOL", "Espandi/Chiudi area");
define("L_NO_ADMIN", "Solo l'amministratore può usare questo comando.");
define("L_BEEP", "Beep/no beep all'ingresso dell utente");
define("L_PROFILE", "Mostra il Profilo utente");
define("L_NO_PROFILE", "No profile");

// input frame - frame di inserimento
define("L_HLP", "Aiuto");
define("L_BAD_CMD", "Questo non è un comando valido !");
define("L_ADMIN", "%s è già amministratore !");
define("L_IS_MODERATOR", "%s è già moderatore !");
define("L_NO_MODERATOR", "Solo il moderatore può usare questo comando.");
define("L_MODERATOR", "%s è ora moderatore di questa chat.");
define("L_NONEXIST_USER", "L'utente %s non è in questa chat.");
define("L_NONREG_USER", "L'utente %s non è registrato.");
define("L_NONREG_USER_IP", "Il suo IP è: %s.");
define("L_NO_KICKED", "L'utente %s è moderatore o amministratore e non può essere allontanato dalla chat.");
define("L_KICKED", "L'utente %s è stato allontanato con successo.");
define("L_NO_BANISHED", "L'utente %s èun moderatore o amministratore e non può essre bandito.");
define("L_BANISHED", "L'utente %s èstato bandito con successo.");
define("L_SVR_TIME", "Server time: ");
define("L_NO_SAVE", "Nesun messaggio da salvare!");
define("L_ANNOUNCE", "ANNUNCIO");
define("L_INVITE", "%s ti invita ad unirti a lei/lui nella chat <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a>.");
define("L_INVITE_REG", " Devi essere registrato per accedere in quest'area.");
define("L_INVITE_DONE", "Il tuo invito è stato inviato a %s.");
define("L_OK", "Invia");

// help popup - menù di aiuto
define("L_HELP_TIT_1", "Smilies");
define("L_HELP_TIT_2", "Formattazione dei testi per i messaggi");
define("L_HELP_FMT_1", "Puoi usare elementi di decorazione del testo come <B>grassetto</B>, <I>italic</I> o <U>sottolineato</U> racchiudendo la parte di testo interessata con &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; or &lt;U&gt; &lt;/U&gt; tags.<BR>Per esempio, &lt;B&gt;questo testo&lt;/B&gt; produrr&agrave <B>questo testo</B>.");
define("L_HELP_FMT_2", "Per creare un hyperlink (per e-mail o URL) nel tuo messaggio, digita semplicemente il testo senza alcun tag. L'hyperlink sarà creato automaticamente.");
define("L_HELP_TIT_3", "Comandi");
define("L_HELP_USR", "utente");
define("L_HELP_MSG", "messaggio");
define("L_HELP_ROOM", "area");
define("L_HELP_CMD_0", "{} è un comando obbligatorio, [] è opzionale.");
define("L_HELP_CMD_1", "Imposta il numero di messaggi da visualizzare, minimo 5");
define("L_HELP_CMD_1a", "Imposta il numero di messaggi da mostrare, il minimo sono 5.");
define("L_HELP_CMD_1b", "Ricarica il frame dei messaggi e mostra gli ultimi, il minimo sono 5.");
define("L_HELP_CMD_2a", "Modifica il tempo di aggiornamento dell'elenco messaggi (in secondi).<BR>Se n non viene specificato o è minore di 3, selezionare tra nessun aggiornamento e 10s di aggiornamento.");
define("L_HELP_CMD_2b", "Modifica il tempo di aggiornamento degli elenchi di utenti e messaggi (in secondi).<BR>Se n non viene specificato o è minore di 3, selezionare tra nessun aggiornamento e 10s di aggiornamento.");
define("L_HELP_CMD_3", "Inverte l'ordine dei messaggi.");
define("L_HELP_CMD_4", "Entra in un'altra area, creandola se non esiste e se ti è consentito.<BR>n è 0 se è privata e 1 se è pubblica, il valore di default è 1 se non specificato.");
define("L_HELP_CMD_5", "Abbandona la chat dopo aver scritto il messaggio opzionale.");
define("L_HELP_CMD_6", "Ignora i messaggi di un utente se viene specificato il suo nick.<BR>Per ripristinare la normale visualizzazione dei messaggi è sufficiente inserire un \"-\" e il nick, quando invece viene inserito solo il \"-\" viene ripristinata la visualizzazione di tutti gli utenti.<BR>Senza alcuna opzione, questo comando mostra i nick attualmente ignorati.");
define("L_HELP_CMD_7", "Richiama l'ultima linea inserita (comando o messaggio).");
define("L_HELP_CMD_8", "Mostra/Nasconde l'orario prima dei messaggi.");
define("L_HELP_CMD_9", "Allontana un utente dalla chat. Questo comando pu$ograve essere usato solo dal moderatore.");
define("L_HELP_CMD_10", "Invia un messaggio ad un utente specifico (gli altri utenti non lo vedranno).");
define("L_HELP_CMD_11", "Mostra le informazioni su un utente specifico.");
define("L_HELP_CMD_12", "Nuova finestra per modificare il profilo utente.");
define("L_HELP_CMD_13", "Attiva le informazioni sull'ingresso o uscita dalla chat corrente.");
define("L_HELP_CMD_14", "Abilita l'amministratore o il moderatore della chat a creare nuovi moderatori tra gli utenti registrati.");
define("L_HELP_CMD_15", "Cancella il frame dei messaggi e mostra gli ultimi 5.");
define("L_HELP_CMD_16", "Salva gli ultimi n messaggi (notifiche escluse) in un file HTML. Se n non è specificato, verranno inseriti tutti i messaggi.");
define("L_HELP_CMD_17", "Abilita l'amministratore a mandare messaggi agli utenti in tutte le chat.");
define("L_HELP_CMD_18", "Invita un utente di un'altra chat a partecipare alla tua.");
define("L_HELP_CMD_19", "Consente al moderatore di un area o all'amministratore di \"bandire\" o \"bannare\" un utente dall'area per un periodo definito dall'amministratore.<BR>Si potrà bannare un utente che stà chattando in un altra area (diversa da quella in cui ci si trova) usando l'asterisco '<B>&nbsp;*&nbsp;</B>' per bannarlo \"per sempre\" da tutta la chat.");
define("L_HELP_CMD_20", "Describe what you're doing without refer yourself.");

//message frame - frame segnalazioni messaggi
define("L_NO_MSG", "Nessun messaggio");
define("L_TODAY_DWN", "The messages that have been sent today start below");
define("L_TODAY_UP", "The messages that have been sent today start above");

// message colors - colore messaggi
$TextColors = array(	"Nero" => "#000000",
				"Rosso" => "#FF0000",
				"Verde" => "#009900",
				"Blu" => "#0000FF",
				"Porpora" => "#9900FF",
				"Rosso scuro" => "#990000",
				"Verde scuro" => "#006600",
				"Blu scuro" => "#000099",
				"Marrone" => "#996633",
				"Blu acqua" => "#006699",
				"Arancione" => "#FF6600");

//ignored popup
define("L_IGNOR_TIT", "Ignorato");
define("L_IGNOR_NON", "Nessun utente ignorato");

// whois popup
define("L_WHOIS_ADMIN", "Administratore");
define("L_WHOIS_MODER", "Moderatore");
define("L_WHOIS_USER", "Utente");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s entra nella chat");
define("L_EXIT_ROM", "%s esce dalla chat");
?>