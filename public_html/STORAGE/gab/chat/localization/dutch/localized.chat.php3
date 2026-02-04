<?php
// File : dutch.lang.php3
// Translation by Hans Paijmans <paai@kub.nl>, Kasper Souren <guaka@industree.org>
// and Sander Corbesir <rock@jascrc.com>

// extra meta-tag for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "Tutorial");

define("L_WEL_1", "Berichten worden gewist na");
define("L_WEL_2", "tijden en namen na");
define("L_WEL_3", "minuten...");
define("L_CUR_1", "Op het ogenblik is");
define("L_CUR_2", "in de chat.");
define("L_CUR_3", "op dit ogenblik in de chatroom");
define("L_CUR_4", "in de prive kamers");
define("L_SET_1", "geef");
define("L_SET_2", "uw naam");
define("L_SET_3", "aantal zichtbare berichten");
define("L_SET_4", "tijd tussen twee updates");
define("L_SET_5", "kies een chat ruimte");
define("L_SET_6", "standaard ruimtes");
define("L_SET_7", "kies...");
define("L_SET_8", "openbare ruimte door gebruikers aangemaakt");
define("L_SET_9", "maak uw eigen");
define("L_SET_10", "publiek");
define("L_SET_11", "prive");
define("L_SET_12", "ruimte");
define("L_SET_13", "En dan maar");
define("L_SET_14", "chatten");

define("L_SRC", "vrijelijk verkrijgbaar op");

define("L_SECS", "seconden");
define("L_MIN", "minuut");
define("L_MINS", "minuten");

// registration stuff:
define("L_REG_1", "je wachtwoord");
define("L_REG_1r", "(alleen als je geregistreerd bent)");
define("L_REG_2", "Geregistreerde gebruikers");
define("L_REG_3", "Registreer");
define("L_REG_4", "Pas gebruikersprofiel aan");
define("L_REG_5", "Wis gebruiker");
define("L_REG_6", "Gebruikers registratie");
define("L_REG_7", "je wachtwoord");
define("L_REG_8", "je e-mail adres");
define("L_REG_9", "Je bent geregistreerd.");
define("L_REG_10", "Terug");
define("L_REG_11", "Edit");
define("L_REG_12", "Verander gebruikersinformatie");
define("L_REG_13", "Gebruiker wissen");
define("L_REG_14", "Inloggen");
define("L_REG_15", "Inloggen");
define("L_REG_16", "Veranderen");
define("L_REG_17", "Je informatie is gewijzigd.");
define("L_REG_18", "Je bent uit de ruimte gekickt door de moderator.");
define("L_REG_19", "Wil je echt verwijderd worden?");
define("L_REG_20", "Ja");
define("L_REG_21", "Je bent verwijderd.");
define("L_REG_22", "Nee");
define("L_REG_24", "Remove checked profiles");
define("L_REG_25", "Sluiten");
define("L_REG_30", "voornaam");
define("L_REG_31", "achternaam");
define("L_REG_32", "WEB");
define("L_REG_33", "laat e-mail zien met /whois commando");
define("L_REG_34", "Gebruikersprofiel wijzigen");
define("L_REG_35", "Administratie");
define("L_REG_36", "gesproken talen");
define("L_REG_37", "Fields with a <span class=\"error\">*</span> must be completed.");
define("L_REG_39", "De kamer waar je in ben geweest is verwijderd door administratie.");
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
define("L_ERR_USR_1", "Naam is al in gebruik. Kies een andere.");
define("L_ERR_USR_2", "Een naam is verplicht.");
define("L_ERR_USR_3", "Deze gebruikersnaam is al geregistreerd. Geef het wachtwoord of kies een andere gebruikersnaam.");
define("L_ERR_USR_4", "Je heb foutieve wachtwoord ingevoerd.");
define("L_ERR_USR_5", "Je ben jou gebruikersnaam vergeten.");
define("L_ERR_USR_6", "Je ben jou wachtwoord vergeten.");
define("L_ERR_USR_7", "Je ben jou email vergeten.");
define("L_ERR_USR_8", "Je moet correcte emailadres invoeren.");
define("L_ERR_USR_9", "Deze gebruikersnaam wordt al gebruikt.");
define("L_ERR_USR_10", "Verkeerde wachtwoord of gebruikersnaam.");
define("L_ERR_USR_11", "Je moet administrateur zijn.");
define("L_ERR_USR_12", "Je ben zelf administrateur, dus je kan niet zichzelf verwijderen.");
define("L_ERR_USR_13", "Om je eigen kamer te maken, moet je geregisteerd zijn.");
define("L_ERR_USR_14", "Je moet geregisteerd zijn voordat je kan chatten.");
define("L_ERR_USR_15", "Je moet jou naam voluit typen.");
define("L_ERR_USR_16", "Jou gebruikersnaam kan niet met spatie, komma en backslash (\\).");
define("L_ERR_USR_16", "Gebruikersnaam kan niet met spatie, komma en backslash (\\).");
define("L_ERR_USR_17", "Deze kamer is niet beschikbaar en je ben niet bevoegd om nieuwe kamer te maken.");
define("L_ERR_USR_18", "Banned word found in your username.");
define("L_ERR_USR_19", "You cannot be in more than one room at the same time.");
define("L_ERR_USR_20", "You have been banished from this room or from the chat.");
define("L_ERR_ROM_1", "Kamernaam kan niet met komma en backslash (\\).");
define("L_ERR_ROM_2", "Banned word found in the room's name you want to create.");
define("L_ERR_ROM_3", "Deze ruimte is al in gebruik als openbare ruimte.");
define("L_ERR_ROM_4", "Onbruikbare naam.");

// users frame or popup
define("L_EXIT", "Afsluiten");
define("L_DETACH", "Verlaat");
define("L_EXPCOL_ALL", "Alles uit-/inklappen");
define("L_CONN_STATE", "Connection state");
define("L_CHAT", "Chat");
define("L_USER", "gebruiker");
define("L_USERS", "gebruikers");
define("L_NO_USER", "Geen gebruiker");
define("L_ROOM", "ruimte");
define("L_ROOMS", "ruimtes");
define("L_EXPCOL", "ruimte in-/uit laten klappen");
define("L_BEEP", "Beep/no beep at user entrance");
define("L_PROFILE", "Display profile");
define("L_NO_PROFILE", "No profile");

// input frame
define("L_HLP", "Help");
define("L_BAD_CMD", "Onjuiste opdracht!");
define("L_ADMIN", "%s is al administrateur !");
define("L_IS_MODERATOR", "%s is al supervisor !");
define("L_NO_MODERATOR", "Alleen supervisor van deze kamer kan die gebruiken.");
define("L_MODERATOR", "%s is nu supervisor van dit kamer.");
define("L_NONEXIST_USER", "Gebruiker %s is niet in aanwezige kamer.");
define("L_NONREG_USER", "Gebruiker %s is niet geregisteerd.");
define("L_NONREG_USER_IP", "His IP is: %s.");
define("L_NO_KICKED", "Gebruiker %s is supervisor of administrateur en kan niet weggestemd.");
define("L_KICKED", "Gebruiker %s is met succes weggestemd.");
define("L_NO_BANISHED", "User %s is moderator or administrator and can't be banished.");
define("L_BANISHED", "User %s has successfully been banished.");
define("L_SVR_TIME", "Server time: ");
define("L_NO_SAVE", "No message to save!");
define("L_NO_ADMIN", "Only the administrator can use this command.");
define("L_ANNOUNCE", "ANNOUNCE");
define("L_INVITE", "%s suggest you to join her/him into the <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a> room.");
define("L_INVITE_REG", " You have to be registered to enter this room.");
define("L_INVITE_DONE", "Your invitation has been sent to %s.");
define("L_OK", "Send");

// help popup
define("L_HELP_TIT_1", "Smile");
define("L_HELP_TIT_2", "Text codes voor de berichten");
define("L_HELP_FMT_1", "Je kan bold, italic en onderline tekst gebruiken in bericht in de HTML codes zoals &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; of &lt;U&gt; &lt;/U&gt; tags.<BR>Ter voorbeeld, &lt;B&gt;deze tekst&lt;/B&gt; wordt <B>deze tekst</B>.");
define("L_HELP_FMT_2", "Om link te maken (voor e-mail of URL) in jouw bericht, kun je gemakkelijk jou adres zonder alle tags in te voeren. De URL zal dan automatisch aangemaakt.");
define("L_HELP_TIT_3", "Commando's");
define("L_HELP_USR", "gebruiker");
define("L_HELP_MSG", "bericht");
define("L_HELP_ROOM", "ruimte");
define("L_HELP_CMD_0", "{} is voor een verplichte instelling, [] voor een optionele.");
define("L_HELP_CMD_1", "Aantal berichten dat tegelijk zichtbaar is (minstens vijf).");
define("L_HELP_CMD_1a", "Set number of messages to show, minimum and default are 5.");
define("L_HELP_CMD_1b", "Reload the message frame and display the n latest messages, minimum and default are 5.");
define("L_HELP_CMD_2a", "Tussenpoze voor het bijwerken van de lijst (in seconden).<BR>Als n niet opgegeven of als kleiner dan 3, verspringt het tussen geen bijwerken en bijwerken om de tien seconden.");
define("L_HELP_CMD_2b", "Modify messages and users lists refresh delay (in seconds).<BR>If n is not specified or less than 3, toggles between no refresh and 10s refresh.");
define("L_HELP_CMD_3", "Keer volgorde van berichten om.");
define("L_HELP_CMD_4", "Ga naar een andere ruimte en maak hem indien nodig automatisch aan (als je dat mag tenminste).<BR>n is 0 voor een prive ruimte en 1 voor een openbare, default is 1 (openbaar).");
define("L_HELP_CMD_5", "Vertaat het chatten, eventueel met achterlaten van bericht.");
define("L_HELP_CMD_6", "Vermijd het tonen van de boodschappen van een gebruiker als de nickname is aangegeven.<BR>Zet het ignoreren uit voor een gebruiker als nick en  - beiden zijn aangegeven, voor alle gebruikers als  - is aangegeven maar de nick niet.<BR>Als geen optie is gegeven laat dit commando een venster zien met alle geïgnoreerde nicks.");
define("L_HELP_CMD_7", "Haal de vorige regel terug (commando of boodschap).");
define("L_HELP_CMD_8", "Timestamp voor de boodschap weglaten of laten zien.");
define("L_HELP_CMD_9", "Stem de gebruiker weg uit de kamer. Deze commandos kan alleen worden gebruikt door de supervisor.");
define("L_HELP_CMD_10", "Stuur een prive bericht naar de gespecificeerde gebruiker (andere gebruikers krijgen het niet te zien).");
define("L_HELP_CMD_11", "Laat de informatie zien van gekozen gebruiker.");
define("L_HELP_CMD_12", "Popup window om gebruikersprofiel aan te passen.");
define("L_HELP_CMD_13", "Schakel tussen ander gebruikers, uitloggen van de bestaande kamer.");
define("L_HELP_CMD_14", "Alleen administrateur en supervisor van de huidige kamer kan promoten naar ander kamer te gaan.");
define("L_HELP_CMD_15", "Clear the message frame and show only the last 5 messages.");
define("L_HELP_CMD_16", "Save the last n messages (notifications ones excluded) to an HTML file. If n is not specified, all available messages will be taken into account.");
define("L_HELP_CMD_17", "Allow the administrator to send an announce to all users whatever the room they are chatting into.");
define("L_HELP_CMD_18", "Suggest an user chatting in an other room to join the one you are into.");
define("L_HELP_CMD_19", "Allow the moderator(s) of a room or the administrator to \"banish\" an user from the room for a time defined by the administrator.<BR>The later can banish an user chatting in an other room than the one he is into and use the '<B>&nbsp;*&nbsp;</B>' setting to banish \"for ever\" an user from the chat as the whole.");
define("L_HELP_CMD_20", "Describe what you're doing without refer yourself.");

// message frame
define("L_NO_MSG", "Geen bericht");
define("L_TODAY_DWN", "The messages that have been sent today start below");
define("L_TODAY_UP", "The messages that have been sent today start above");

// message colors
$TextColors = array(	"Zwart" => "#000000",
				"Rood" => "#FF0000",
				"Groen" => "#009900",
				"Blauw" => "#0000FF",
				"Paars" => "#990099",
				"Donker rood" => "#990000",
				"Donker groen" => "#006600",
				"Donker blauw" => "#000099",
				"Maroen" => "#996633",
				"Zee blauw" => "#006699",
				"Oranje" => "#F5671B");

// ignored popup
define("L_IGNOR_TIT", "Niet uitgevoerd");
define("L_IGNOR_NON", "Geen geïgnoreerde gebruiker");

// whois popup
define("L_WHOIS_ADMIN", "Administrateur");
define("L_WHOIS_MODER", "Supervisor");
define("L_WHOIS_USER", "Gebruikers");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s komt binnen");
define("L_EXIT_ROM", "%s is uitlogd");
?>