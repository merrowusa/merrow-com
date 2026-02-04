<?php
// File : german.lang.php3
// Translation by Silke Oettle <silke@beardedcollie.de> & Robert Schaller <robert@schaller.com>
//    & Wolfgang Schneider <schneider@bibelcenter.de> & Martin Sander <Martin.Sander@touch-screen.de>
//    & Bernard Piller <bernard@bmpsystems.com> & Reinhard Hofmann <e9625556@student.tuwien.ac.at>

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "Tutorial");

define("L_WEL_1", "Mitteilungen werden nach");
define("L_WEL_2", "Stunden und Benutzernamen nach");
define("L_WEL_3", "Minuten gelöscht ...");

define("L_CUR_1", "Es befinden sich momentan");
define("L_CUR_2", "im Chat.");
define("L_CUR_3", "Benutzer momentan in den Chaträumen");
define("L_CUR_4", "Benutzer in privaten Räumen");

define("L_SET_1", "Bitte wähle ...");
define("L_SET_2", "Dein Benutzername");
define("L_SET_3", "die Anzahl angezeigter Mitteilungen");
define("L_SET_4", "Zeit zwischen Updates");
define("L_SET_5", "Wähle bitte einen Raum aus ...");
define("L_SET_6", "Voreingestellte Räume");
define("L_SET_7", "Wähle ...");
define("L_SET_8", "Vom Benutzer erstellte öffentliche Räume");
define("L_SET_9", "Erstelle Deinen eigenen");
define("L_SET_10", "öffentlichen");
define("L_SET_11", "privaten");
define("L_SET_12", "Raum");
define("L_SET_13", "Und jetzt,");
define("L_SET_14", "auf in den Chat!");

define("L_SRC", "ist kostenlos verfügbar bei");

define("L_SECS", "Sekunden");
define("L_MIN", "Minute");
define("L_MINS", "Minuten");

// registration stuff:
define("L_REG_1", "Dein Passwort");
define("L_REG_1r", "(nur wenn Du registriert bist)");
define("L_REG_2", "Registrierte Benutzer");
define("L_REG_3", "Registrieren");
define("L_REG_4", "Benutzerprofil ändern");
define("L_REG_5", "Benutzer löschen");
define("L_REG_6", "Benutzerregistrierung");
define("L_REG_7", "Dein Passwort");
define("L_REG_8", "Deine E-Mail-Adresse");
define("L_REG_9", "Du hast Dich erfolgreich registriert.");
define("L_REG_10", "Zurück");
define("L_REG_11", "Bearbeiten");
define("L_REG_12", "Benutzerinformation ändern");
define("L_REG_13", "Benutzer löschen");
define("L_REG_14", "Anmeldung");
define("L_REG_15", "Anmelden");
define("L_REG_16", "Ändern");
define("L_REG_17", "Deine Daten wurden erfolgreich geändert.");
define("L_REG_18", "Du wurdest vom Moderator aus dem Raum gekickt.");
define("L_REG_19", "Willst Du wirklich gelöscht werden?");
define("L_REG_20", "Ja");
define("L_REG_21", "Du wurdest erfolgreich gelöscht.");
define("L_REG_22", "Nein");
define("L_REG_25", "Schließen");
define("L_REG_30", "Vorname");
define("L_REG_31", "Nachname");
define("L_REG_32", "Homepage");
define("L_REG_33", "E-Mail-Adresse bei /whois Befehl anzeigen");
define("L_REG_34", "Benutzerdaten ändern");
define("L_REG_35", "Administration");
define("L_REG_36", "Sprachen");
define("L_REG_37", "Felder mit <span class=\"error\">*</span> müssen ausgefüllt werden.");
define("L_REG_39", "Der Raum in dem Du warst, wurde vom Administrator gelöscht.");
define("L_REG_45", "Geschlecht");
define("L_REG_46", "männlich");
define("L_REG_47", "weiblich");

// e-mail validation stuff
define("L_EMAIL_VAL_1", "Deine Einstellungen zum Einstieg in den Chat");
define("L_EMAIL_VAL_2", "Willkommen auf unserem Chat-Server.");
define("L_EMAIL_VAL_Err", "Interner Fehler, bitte kontaktiere den Administrator: <a href=\"mailto:%s\">%s</a>.");
define("L_EMAIL_VAL_Done", "Dein Passwort wurde an Deine E-Mail-Adresse geschickt.");

// admin stuff
define("L_ADM_1", "%s ist nicht mehr Moderator für diesen Raum.");
define("L_ADM_2", "Du bist kein registrierter Benutzer mehr.");

// error messages:
define("L_ERR_USR_1", "Dieser Benutzername wird schon verwendet. Wähle einen neuen.");
define("L_ERR_USR_2", "Du musst einen Benutzernamen wählen.");
define("L_ERR_USR_3", "Dieser Benutzername wird schon verwendet. Bitte gib das Passwort ein oder wähle einen anderen Benutzernamen.");
define("L_ERR_USR_4", "Du hast ein falsches Passwort angegeben.");
define("L_ERR_USR_5", "Du mußt einen Benutzernamen angeben.");
define("L_ERR_USR_6", "Du mußt ein Passwort angeben.");
define("L_ERR_USR_7", "Du mußt Dein E-Mail angeben.");
define("L_ERR_USR_8", "Du mußt eine korrekte E-Mail-Adresse angeben.");
define("L_ERR_USR_9", "Dieser Benutzername ist bereits vergeben.");
define("L_ERR_USR_10", "Falscher Benutzername oder Passwort.");
define("L_ERR_USR_11", "Dafür mußt Du Administrator sein.");
define("L_ERR_USR_12", "Als Administrator können Sie nicht gelöscht werden.");
define("L_ERR_USR_13", "Du mußt registriert sein, um eigene Räume anlegen zu können.");
define("L_ERR_USR_14", "Du mußt registriert sein, um zu chatten.");
define("L_ERR_USR_15", "Du mußt Deinen vollen Namen angeben.");
define("L_ERR_USR_16", "Der Benutzername darf keine Leerzeichen, Kommata und Backslashes (\\) enthalten.");
define("L_ERR_USR_17", "Dieser Raum existiert nicht und Du darfst keinen anlegen.");
define("L_ERR_USR_18", "Dein Benutzername enthält ein verbotenes Wort.");
define("L_ERR_USR_19", "Du kannst nicht in mehreren Räumen zugleich sein.");
define("L_ERR_USR_20", "Du wurdest aus diesem Raum oder aus dem Chat verbannt.");
define("L_ERR_ROM_1", "Der Name des Raums darf keine Kommata und Backslashes (\\) enthalten.");
define("L_ERR_ROM_2", "Der Name des Raumes den Du anlegen willst enthält ein verbotenes Wort.");
define("L_ERR_ROM_3", "Dieser Raum existiert schon als öffentlicher Raum.");
define("L_ERR_ROM_4", "Ungültiger Raumname.");

// users frame or popup
define("L_EXIT", "Abmelden");
define("L_DETACH", "Popup");
define("L_EXPCOL_ALL", "Alles ausklappen/einklappen");
define("L_CONN_STATE", "Verbindungs-Status");
define("L_CHAT", "zur Anmeldung");
define("L_USER", "Benutzer");
define("L_USERS", "Benutzer");
define("L_NO_USER", "Kein Benutzer");
define("L_ROOM", "Raum");
define("L_ROOMS", "Räume");
define("L_EXPCOL", "Raum ausklappen/einklappen");
define("L_BEEP", "Piep/Kein Piep bei Benutzer-Eintritt");
define("L_PROFILE", "Profil anzeigen");
define("L_NO_PROFILE", "No profile");

// input frame
define("L_HLP", "Hilfe");
define("L_BAD_CMD", "Dies ist kein gültiger Befehl!");
define("L_ADMIN", "%s ist bereits Administrator!");
define("L_IS_MODERATOR", "%s ist bereits Moderator!");
define("L_NO_MODERATOR", "Nur der Moderator dieses Raums darf diesen Befehl verwenden.");
define("L_MODERATOR", "%s ist nun Moderator für diesen Raum.");
define("L_NONEXIST_USER", "Benutzer %s ist nicht in diesem Raum");
define("L_NONREG_USER", "Benutzer %s ist nicht angemeldet.");
define("L_NONREG_USER_IP", "Seine IP ist: %s.");
define("L_NO_KICKED", "Der Benutzer %s ist Moderator oder Administrator und kann nicht gekickt werden.");
define("L_KICKED", "Der Benutzer %s wurde erfolgreich gekickt.");
define("L_NO_BANISHED", "Der Benutzer %s ist Moderator oder Administrator und kann nicht verbannt werden.");
define("L_BANISHED", "Der Benutzer %s wurde erfolgreich verbannt.");
define("L_SVR_TIME", "Server Zeit: ");
define("L_NO_SAVE", "Keine Nachricht zum Speichern!");
define("L_NO_ADMIN", "Nur der Administrator kann diesen Befehl verwenden.");
define("L_ANNOUNCE", "ANKÜNDIGUNG");
define("L_INVITE", "%s lädt Dich in den Raum <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a> ein.");
define("L_INVITE_REG", " Du hast Dich zum Betritt für diesen Raum registriert.");
define("L_INVITE_DONE", "Deine Einladung wurde an %s geschickt.");
define("L_OK", "Senden");

// help popup
define("L_HELP_TIT_1", "Smilies");
define("L_HELP_TIT_2", "Text-Formatierungen der Nachrichten");
define("L_HELP_FMT_1", "Du kannst den Text Deiner Nachrichten fett, kursiv oder unterstrichen formatieren, wenn Du den Text entweder mit &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; oder &lt;U&gt; &lt;/U&gt; Tags umgibst.<BR>z.B.: &lt;B&gt;dieser Text&lt;/B&gt; erzeugt <B>diesen Text</B>");
define("L_HELP_FMT_2", "Um einen Hyperlink in einer Nachricht zu erzeugen (für E-Mail oder eine URL), gib einfach die Adresse ohne einen Tag ein. Der Link wird automatisch erzeugt.");
define("L_HELP_TIT_3", "Befehle");
define("L_HELP_USR", "Benutzer");
define("L_HELP_MSG", "Mitteilung");
define("L_HELP_ROOM", "Raum");
define("L_HELP_CMD_0", "{} steht für eine erforderliche Einstellung, [] für eine optionale.");
define("L_HELP_CMD_1", "Einstellung der Anzahl angezeigter Mitteilungen, mindestens 5.");
define("L_HELP_CMD_1a", "Einstellung der Anzahl angezeigter Mitteilungen, mindestens 5.");
define("L_HELP_CMD_1b", "Nachrichten neu laden und die letzten n Nachrichten anzeigen, mindestens 5.");
define("L_HELP_CMD_2a", "Einstellung der Verzögerung bei der Mitteilungsaktualisierung (in Sekunden).<br>Wird n nicht bestimmt oder ist n kleiner als 3, dann wird zwischen keiner Aktualisierung und 10 Sekunden gewechselt.");
define("L_HELP_CMD_2b", "Einstellung der Verzögerung bei der Mitteilungsaktualisierung (in Sekunden).<br>Wird n nicht bestimmt oder ist n kleiner als 3, dann wird zwischen keiner Aktualisierung und 10 Sekunden gewechselt.");
define("L_HELP_CMD_3", "Mitteilungsreihenfolge umkehren.");
define("L_HELP_CMD_4", "Zu einem anderen Raum wechseln. Der Raum wird neu erstellt, falls er noch nicht existiert und man dazu die Erlaubnis hat.<BR>n = 0 für private und n = 1 für öffentliche Räume. Falls keine Eingabe erfolgt, wird n = 1 angenommen.");
define("L_HELP_CMD_5", "Den Chat nach einer optionalen Mitteilung verlassen.");
define("L_HELP_CMD_6", "Anzeige von Mitteilungen eines Benutzers ignorieren, wenn ein Benutzername angegeben ist.<BR>Anzeige für alle Benutzer, wenn nur - ohne Benutzername angegeben wird.<BR>Ohne Zusatz öffnet dieser Befehl ein Fenster, in dem alle ignorierten Namen angezeigt werden.");
define("L_HELP_CMD_7", "Den zuletzt getippten Text wieder anzeigen (Befehl oder Mitteilung).");
define("L_HELP_CMD_8", "Zeitangabe vor Mitteilungen ein/aus.");
define("L_HELP_CMD_9", "Schließt einen Benutzer vom Chat aus. Diesen Befehl kann nur der Moderator verwenden.");
define("L_HELP_CMD_10", "Eine private Nachricht an den angegebenen Benutzer schicken (andere Benutzer sehen diese Nachricht nicht).");
define("L_HELP_CMD_11", "Informationen zu einem angegebenen Benutzer anzeigen.");
define("L_HELP_CMD_12", "Popup Fenster zur Änderung des Benutzerprofils.");
define("L_HELP_CMD_13", "Schaltet um ob Du über das Kommen oder Gehen von Benutzern in einem Raum informiert wirst oder nicht.");
define("L_HELP_CMD_14", "Erlaubt dem Administrator oder den Moderatoren des aktuellen Raumes Moderator von anderen Räumen eines registrierten Benutzers zu werden.");
define("L_HELP_CMD_15", "Nachrichten löschen und nur die letzten 5 zeigen.");
define("L_HELP_CMD_16", "Die letzten 5 Nachrichten als HTML-Datei speichern (ausgenommen Mitteilungen). Wird n nicht bestimmt, dann werden alle Nachrichten eingeschlossen.");
define("L_HELP_CMD_17", "Erlaubt dem Administrator Ankündigungen an alle Benutzer zu senden, egal in welchem Raum diese chatten.");
define("L_HELP_CMD_18", "Einem Benutzer eines anderen Raumes vorschlagen, in den eigenen zu wechseln.");
define("L_HELP_CMD_19", "Erlaubt den Moderatoren/Administrator einen Benutzer für eine vom Administrator bestimmte Zeit aus dem Raum zu \"verbannen\".<BR>Der Administrator kann auch Benutzer anderer Räume verbannen und die Einstellung '<B>&nbsp;*&nbsp;</B>' verwenden um Benutzer \"für immer\" aus dem gesamten Chat zu verbannen.");
define("L_HELP_CMD_20", "Beschreiben, was du grade tust, ohne Dich selbst zu erwähnen.");

//message frame
define("L_NO_MSG", "keine Mitteilungen.");
define("L_TODAY_DWN", "Die Nachrichten werden von oben nach unten angezeigt");
define("L_TODAY_UP", "Die Nachrichten werden von unten nach oben angezeigt");

// message colors
$TextColors = array(	"Schwarz" => "#000000",
				"Rot" => "#FF0000",
				"Grün" => "#009900",
				"Blau" => "#0000FF",
				"Lila" => "#9900FF",
				"Dunkelrot" => "#990000",
				"Dunkelgrün" => "#006600",
				"Dunkelblau" => "#000099",
				"Kastanienbraun" => "#996633",
				"Aquablau" => "#006699",
				"Orange" => "#FF6600");

//ignored popup
define("L_IGNOR_TIT", "Ignoriert");
define("L_IGNOR_NON", "Keine ignorierten Benutzer");

// whois popup
define("L_WHOIS_ADMIN", "Administrator");
define("L_WHOIS_MODER", "Moderator");
define("L_WHOIS_USER", "Benutzer");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s betritt den Raum");
define("L_EXIT_ROM", "%s verläßt den Raum");
?>