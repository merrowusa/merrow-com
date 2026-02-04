<?php
// File : swedish.lang.php3
// Compiled by Martin Edelius <martin.edelius@spirex.se>

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "Tutorial");

define("L_WEL_1", "Meddelanden raderas efter");
define("L_WEL_2", "timmar och användarnamn efter");
define("L_WEL_3", "minuter ...");

define("L_CUR_1", "Det är för närvarande");
define("L_CUR_2", "i chatten.");
define("L_CUR_3", "Användare för närvarande i kanalerna");
define("L_CUR_4", "användare i privata kanaler");

define("L_SET_1", "Vänligen välj ...");
define("L_SET_2", "ditt användarnamn");
define("L_SET_3", "antal meddelanden att visa");
define("L_SET_4", "tiden mellan uppdateringarna");
define("L_SET_5", "Välj en kanal ...");
define("L_SET_6", "standardkanaler");
define("L_SET_7", "Gör ditt val ...");
define("L_SET_8", "publika kanaler skapade av användare");
define("L_SET_9", "skapa din egen");
define("L_SET_10", "publika");
define("L_SET_11", "privata");
define("L_SET_12", "kanal");
define("L_SET_13", "Sedan, ");
define("L_SET_14", "chatta på");

define("L_SRC", "kan hämtas gratis från");

define("L_SECS", "sekunder");
define("L_MIN", "minut");
define("L_MINS", "minuter");

// registration stuff:
define("L_REG_1", "ditt lösenord");
define("L_REG_1r", "(endast för registrerade användare)");
define("L_REG_2", "Registrerade användare");
define("L_REG_3", "Registrera");
define("L_REG_4", "Editera användarprofil");
define("L_REG_5", "Radera användare");
define("L_REG_6", "Användarregistrering");
define("L_REG_7", "ditt lösenord");
define("L_REG_8", "din e-mail");
define("L_REG_9", "Dina uppgifter sparades korrekt.");
define("L_REG_10", "Tillbaka");
define("L_REG_11", "Editerar");
define("L_REG_12", "Uppdaterar användarinformation");
define("L_REG_13", "Raderar användare");
define("L_REG_14", "Login");
define("L_REG_15", "Logga in");
define("L_REG_16", "Ändra");
define("L_REG_17", "Din information uppdaterades korrekt.");
define("L_REG_18", "Du blev utslängd ur kanalen av moderatorn");
define("L_REG_19", "Vill du verkligen bli borttagen?");
define("L_REG_20", "Ja");
define("L_REG_21", "Du blev borttagen korrekt.");
define("L_REG_22", "Nej");
define("L_REG_25", "Stäng");
define("L_REG_30", "förnamn");
define("L_REG_31", "efternamn");
define("L_REG_32", "WEB");
define("L_REG_33", "visa e-mail vid /whois kommando");
define("L_REG_34", "Editerar användarprofil");
define("L_REG_35", "Administration");
define("L_REG_36", "talade språk");
define("L_REG_37", "Fält med ett <span class=\"error\">*</span> måste vara kompletta.");
define("L_REG_39", "Kanalen du var inloggad på har tagits bort av administratören.");
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
define("L_ERR_USR_1", "Det här användarnamnet är upptaget. Vänligen välj ett annat.");
define("L_ERR_USR_2", "Du måste välja ett användarnamn.");
define("L_ERR_USR_3", "Detta användarnamn är registrerat. Vänligen fyll i lösenord eller välj ett nytt.");
define("L_ERR_USR_4", "Felaktigt lösenord angivet.");
define("L_ERR_USR_5", "Du måste ange ett användarnamn.");
define("L_ERR_USR_6", "Du måste ange ett lösenord.");
define("L_ERR_USR_7", "Du måste ange din e-mail.");
define("L_ERR_USR_8", "Du måste ange en korrekt e-mail adress.");
define("L_ERR_USR_9", "Det är användarnamnet är upptaget.");
define("L_ERR_USR_10", "Felaktigt användarnamn eller lösenord.");
define("L_ERR_USR_11", "Du måste vara administratör.");
define("L_ERR_USR_12", "Du är administratör så du kan ej tas bort.");
define("L_ERR_USR_13", "Du måste registrera dig för att få skapa egna kanaler.");
define("L_ERR_USR_14", "Du måste registrera dig för att få chatta.");
define("L_ERR_USR_15", "Du måste skriva hela ditt namn.");
define("L_ERR_USR_16", "Användarnamnet får inte innehålla mellanslag, komma eller backslash (\\).");
define("L_ERR_USR_17", "Den här kanalen finns inte och du är inte tillåten att skapa en ny.");
define("L_ERR_USR_18", "Banned word found in your username.");
define("L_ERR_USR_19", "You cannot be in more than one room at the same time.");
define("L_ERR_USR_20", "You have been banished from this room or from the chat.");
define("L_ERR_ROM_1", "Kanalens namn får inte innehålla komma eller backslash (\\).");
define("L_ERR_ROM_2", "Banned word found in the room's name you want to create.");
define("L_ERR_ROM_3", "Det finns redan en publik kanal med det här namnet.");
define("L_ERR_ROM_4", "Ogiltigt kanalnamn.");

// users frame or popup
define("L_EXIT", "Sluta");
define("L_DETACH", "Fristående");
define("L_EXPCOL_ALL", "Expandera/Fäll ihop alla");
define("L_CONN_STATE", "Connection state");
define("L_CHAT", "Chatta");
define("L_USER", "användare");
define("L_USERS", "användare");
define("L_NO_USER", "Inga användare");
define("L_ROOM", "kanal");
define("L_ROOMS", "kanaler");
define("L_EXPCOL", "Expandera/Fäll ihop kanal");
define("L_BEEP", "Beep/no beep at user entrance");
define("L_PROFILE", "Display profile");
define("L_NO_PROFILE", "No profile");

// input frame
define("L_HLP", "Hjälp");
define("L_BAD_CMD", "Inte ett giltigt kommando!");
define("L_ADMIN", "%s är redan administratör!");
define("L_IS_MODERATOR", "%s är redan moderator!");
define("L_NO_MODERATOR", "Endast moderatorn för den här kanalen får använda detta kommandot.");
define("L_MODERATOR", "%s är nu moderator för den här kanalen.");
define("L_NONEXIST_USER", "Användare %s finns inte i den här kanalen.");
define("L_NONREG_USER", "Användare %s är inte registrerad.");
define("L_NONREG_USER_IP", "His IP is: %s.");
define("L_NO_KICKED", "Användare %s är moderator eller admin och kan inte bli utslängd.");
define("L_KICKED", "Användare %s blev utslängd ok.");
define("L_NO_BANISHED", "User %s is moderator or administrator and can't be banished.");
define("L_BANISHED", "User %s has successfully been banished.");
define("L_SVR_TIME", "Servertid: ");
define("L_NO_SAVE", "No message to save!");
define("L_NO_ADMIN", "Only the administrator can use this command.");
define("L_ANNOUNCE", "ANNOUNCE");
define("L_INVITE", "%s suggest you to join her/him into the <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a> room.");
define("L_INVITE_REG", " You have to be registered to enter this room.");
define("L_INVITE_DONE", "Your invitation has been sent to %s.");
define("L_OK", "Send");

// help popup
define("L_HELP_TIT_1", "Smileys");
define("L_HELP_TIT_2", "Textformattering för meddelanden");
define("L_HELP_FMT_1", "Du kan göra text fet, kursiv eller understruken genom att innesluta textavsnittet med &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; or &lt;U&gt; &lt;/U&gt; taggar.<BR>Till exempel, &lt;B&gt;den här texten&lt;/B&gt; genererar <B>den här texten</B>.");
define("L_HELP_FMT_2", "För att skapa en hyperlänk i dina meddelanden så skriver du bara in adressen utan några taggar. Länken skapas automatiskt.");
define("L_HELP_TIT_3", "Kommandon");
define("L_HELP_USR", "användare");
define("L_HELP_MSG", "meddelande");
define("L_HELP_ROOM", "kanal");
define("L_HELP_CMD_0", "{} innebär ett obligatoriskt alternativ, [] ett valfritt.");
define("L_HELP_CMD_1", "Sätt antal meddelanden att visa, minst 5.");
define("L_HELP_CMD_1a", "Set number of messages to show, minimum and default are 5.");
define("L_HELP_CMD_1b", "Reload the message frame and display the n latest messages, minimum and default are 5.");
define("L_HELP_CMD_2a", "Modifiera uppdateringsfrekvensen på meddelanden (i sekunder).<BR>Om n inte är specifierad eller mindre än 3 så växlar kommandot mellan 10 sekunder och ingen uppdatering.");
define("L_HELP_CMD_2b", "Modify messages and users lists refresh delay (in seconds).<BR>If n is not specified or less than 3, toggles between no refresh and 10s refresh.");
define("L_HELP_CMD_3", "Byt ordningsföljd på meddelanden.");
define("L_HELP_CMD_4", "Anslut till en kanal, skapandes den om den inte finns (förutsatt att du får skapa kanaler).<BR>Sätt n till 0 för en privat kanal och 1 för en publik, default är 1.");
define("L_HELP_CMD_5", "Lämna chatten efter att du lämnar ett frivillig meddelande.");
define("L_HELP_CMD_6", "Ignorera meddelanden från den användare du anger.<BR>Sluta ignorera specifik användare när du anger både - och användarnamn eller sluta ignorera alla användare när enbart - anges.<BR>Utan alternativ så poppar ett fönster upp med en lista över alla ignorerade användare.");
define("L_HELP_CMD_7", "Upprepa föregående text (kommando eller meddelande).");
define("L_HELP_CMD_8", "Visa/dölj tid före meddelanden.");
define("L_HELP_CMD_9", "Slänger ut användare från en kanal. Kan endast användas av moderator.");
define("L_HELP_CMD_10", "Skicka ett privat meddelande till specifierad användare (ingen annan ser det).");
define("L_HELP_CMD_11", "Visa information om specifierad användare.");
define("L_HELP_CMD_12", "Poppar upp fönster för editering av användarens uppgifter.");
define("L_HELP_CMD_13", "Växlar notifiering när användare loggar på och lämnar kanalen.");
define("L_HELP_CMD_14", "Gör det möjligt för administratören eller den aktualla kanalens moderator att befodra en annan användare till moderator för den aktualla kanalen.");
define("L_HELP_CMD_15", "Clear the message frame and show only the last 5 messages.");
define("L_HELP_CMD_16", "Save the last n messages (notifications ones excluded) to an HTML file. If n is not specified, all available messages will be taken into account.");
define("L_HELP_CMD_17", "Allow the administrator to send an announce to all users whatever the room they are chatting into.");
define("L_HELP_CMD_18", "Suggest an user chatting in an other room to join the one you are into.");
define("L_HELP_CMD_19", "Allow the moderator(s) of a room or the administrator to \"banish\" an user from the room for a time defined by the administrator.<BR>The later can banish an user chatting in an other room than the one he is into and use the '<B>&nbsp;*&nbsp;</B>' setting to banish \"for ever\" an user from the chat as the whole.");
define("L_HELP_CMD_20", "Describe what you're doing without refer yourself.");

// messages frame
define("L_NO_MSG", "Det finns för närvarande inga meddelanden ...");
define("L_TODAY_DWN", "The messages that have been sent today start below");
define("L_TODAY_UP", "The messages that have been sent today start above");

// message colors
$TextColors = array(	"Svart" => "#000000",
				"Röd" => "#FF0000",
				"Grön" => "#009900",
				"Blå" => "#0000FF",
				"Lila" => "#9900FF",
				"Mörkröd" => "#990000",
				"Mörkgrön" => "#006600",
				"Mörkblå" => "#000099",
				"Ljusbrun" => "#996633",
				"Ljusblå" => "#006699",
				"Morot" => "#FF6600");

//ignored popup
define("L_IGNOR_TIT", "Ignorerad");
define("L_IGNOR_NON", "Inga ignorerade användare");

// whois popup
define("L_WHOIS_ADMIN", "Administratör");
define("L_WHOIS_MODER", "Moderator");
define("L_WHOIS_USER", "Användare");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s enters this room");
define("L_EXIT_ROM", "%s exit this room");
?>