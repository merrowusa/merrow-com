<?php
// File : danish.lang.php3
// Translation by Jonas Koch Bentzen <post@jonaskochbentzen.dk>
// Finished by Kenneth Kristiansen <kk@linuxfreak.adsl.dk>

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "Tutorial");

define("L_WEL_1", "Beskederne slettes efter");
define("L_WEL_2", "timer og brugernavnene efter");
define("L_WEL_3", "minutter...");

define("L_CUR_1", "Lige nu er der");
define("L_CUR_2", "i chatten.");
define("L_CUR_3", "Antal brugere lige nu i chatværelserne");
define("L_CUR_4", "Antal brugere i de private værelser");

define("L_SET_1", "Indtast venligst...");
define("L_SET_2", "Dit brugernavn");
define("L_SET_3", "Antal beskeder, der skal vises");
define("L_SET_4", "Tidsrummet mellem hver opdatering");
define("L_SET_5", "Vælg et chatværelse...");
define("L_SET_6", "standardværelser");
define("L_SET_7", "Vælg...");
define("L_SET_8", "offentlige værelser, der er oprettet af brugerne");
define("L_SET_9", "opret dit eget");
define("L_SET_10", "offentlige");
define("L_SET_11", "private");
define("L_SET_12", "værelse");
define("L_SET_13", "Og så er det bare om at...");
define("L_SET_14", "chatte");

define("L_SRC", "kan gratis hentes på");

define("L_SECS", "sekunder");
define("L_MIN", "minut");
define("L_MINS", "minutter");

// registration stuff:
define("L_REG_1", "dit kodeord");
define("L_REG_1r", "(kun når du er registrede)");
define("L_REG_2", "Konto vedligeholdelse");
define("L_REG_3", "Registrer");
define("L_REG_4", "Ret din profil");
define("L_REG_5", "Slet bruger");
define("L_REG_6", "Bruger registrering");
define("L_REG_7", "Dit kodeord");
define("L_REG_8", "Din e-mail");
define("L_REG_9", "Du er nu registreret.");
define("L_REG_10", "Tilbage");
define("L_REG_11", "Retter");
define("L_REG_12", "Modifisere bruger information");
define("L_REG_13", "Sletter bruger");
define("L_REG_14", "Login");
define("L_REG_15", "Log In");
define("L_REG_16", "Skift");
define("L_REG_17", "Dine informationer er nu modifiseret.");
define("L_REG_18", "Du er smidt ud af rummet af moderator.");
define("L_REG_19", "Ønsker du virkelig at blive slettet ?");
define("L_REG_20", "Ja");
define("L_REG_21", "Du er nu blevet slettet.");
define("L_REG_22", "Nej");
define("L_REG_25", "Luk");
define("L_REG_30", "Fornavn");
define("L_REG_31", "Efternavn");
define("L_REG_32", "WEB");
define("L_REG_33", "Vis e-mail ved /whois kommando");
define("L_REG_34", "Retter bruger profil");
define("L_REG_35", "Administration");
define("L_REG_36", "Talte sprog");
define("L_REG_37", "Felter med en <span class=\"error\">*</span> skal udfyldes.");
define("L_REG_39", "Rummet du var i er slettet af administratoren.");
define("L_REG_45", "Køn");
define("L_REG_46", "Mand");
define("L_REG_47", "Kvinde");

// e-mail validation stuff
define("L_EMAIL_VAL_1", "Dine oplysninger til brug i chatten");
define("L_EMAIL_VAL_2", "Velkommen til chatten.");
define("L_EMAIL_VAL_Err", "Internt fejl, Venligst - kontakt administrator: <a href=\"mailto:%s\">%s</a>.");
define("L_EMAIL_VAL_Done", "Dit password er sendt til din e-mail adresse.");

// admin stuff
define("L_ADM_1", "%s er ikke længere moderator for dette rum.");
define("L_ADM_2", "Du er ikke længere en registreret bruger.");

//error messages
define("L_ERR_USR_1", "Det ønskede brugernavn bruges af en anden. Vælg venligst et andet navn.");
define("L_ERR_USR_2", "Du skal vælge et brugernavn.");
define("L_ERR_USR_3", "Dette er navn er registreret. Indtast kodeord eller vælg et andet brugernavn.");
define("L_ERR_USR_4", "Dit kodeord er forkert.");
define("L_ERR_USR_5", "Indtast venligst dit brugernavn.");
define("L_ERR_USR_6", "Indtast venligst dit kodeord.");
define("L_ERR_USR_7", "Indtast venligst din e-mail adresse.");
define("L_ERR_USR_8", "Du skal skrive en korrekt e-mail adresse.");
define("L_ERR_USR_9", "Dette brugernavn er allerede brug.");
define("L_ERR_USR_10", "Forkert brugernavn eller kodeord.");
define("L_ERR_USR_11", "Du skal være administrator.");
define("L_ERR_USR_12", "Du er administrator, så du kan ikke fjernes.");
define("L_ERR_USR_13", "For at oprette dit eget rum, skal du være registreret her.");
define("L_ERR_USR_14", "Du skal være registreret for at kunne chatte.");
define("L_ERR_USR_15", "Du skal indtaste dit fulde navn.");
define("L_ERR_USR_16", "Brugernavn må ikke indeholde mellemrum, komma eller backslash (\\).");
define("L_ERR_USR_17", "Dette rum eksistere ikke og du har ikke tilladelse til at oprette et.");
define("L_ERR_USR_18", "Ikke tilladt ord i dit brugernavn.");
define("L_ERR_USR_19", "Du kan ikke være i mere end et rum ad gangen.");
define("L_ERR_USR_20", "Du er blevet afvist af dette rum eller denne chat.");
define("L_ERR_ROM_1", "Rummets navn kan ikke indeholde komma'er eller backslash (\\).");
define("L_ERR_ROM_2", "Ikke tilladt ord fundet i rummet navn du forsøger at oprette.");
define("L_ERR_ROM_3", "Dette værelse findes allerede som offentligt værelse.");
define("L_ERR_ROM_4", "Værelsesnavnet er ugyldigt.");

// users frame or popup
define("L_EXIT", "Farvel");
define("L_DETACH", "Løsriv");
define("L_EXPCOL_ALL", "Udvid/sammentræk alle");
define("L_CONN_STATE", "Tilslutningstilstand");
define("L_CHAT", "Chat");
define("L_USER", "bruger");
define("L_USERS", "brugere");
define("L_NO_USER", "Ingen bruger");
define("L_ROOM", "værelse");
define("L_ROOMS", "værelser");
define("L_EXPCOL", "Udvid/sammentræk værelset");
define("L_BEEP", "Beep/ingen beep ved bruger ankomst");
define("L_PROFILE", "Vis profil");
define("L_NO_PROFILE", "Ingen profil");

// input frame
define("L_HLP", "Hjælp");
define("L_BAD_CMD", "Kommandoen er ugyldig.");
define("L_ADMIN", "%s er allerede administrator !");
define("L_IS_MODERATOR", "%s er allerede moderator!");
define("L_NO_MODERATOR", "Kun moderator af dette rum kan bruge denne kommando.");
define("L_MODERATOR", "%s er nu moderator for dette rum.");
define("L_NONEXIST_USER", "Bruger %s er ikke i dette rum.");
define("L_NONREG_USER", "Bruger %s er ikke registreret.");
define("L_NONREG_USER_IP", "Brugerens IP er: %s.");
define("L_NO_KICKED", "Bruger %s er moderator eller administrator og kan derfor ikke kickes.");
define("L_KICKED", "Bruger %s er nu blevet sparket ud.");
define("L_NO_BANISHED", "Bruger %s er moderator eller administrator og kan derfor ikke afvises.");
define("L_BANISHED", "Bruger %s er nu blevet afvist.");
define("L_SVR_TIME", "Server tid: ");
define("L_NO_SAVE", "Ingen beskeder at gemme!");
define("L_NO_ADMIN", "Kun administrator kan bruge denne kommando.");
define("L_ANNOUNCE", "Annonce");
define("L_INVITE", "%s invitere dig til at tilslutte dig hos ham/hende i <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a> rummet.");
define("L_INVITE_REG", " Du skal være registreret for at komme ind her.");
define("L_INVITE_DONE", "Din invitation er sendt til %s.");
define("L_OK", "Send!");

// help popup
define("L_HELP_TIT_1", "Smiley'er");
define("L_HELP_TIT_2", "Tekst formatering for beskeder");
define("L_HELP_FMT_1", "Du kan skrive fed, kursiv eller understreget tekst i beskeder ved at bruge den respektive html kode for dette: &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; eller &lt;U&gt; &lt;/U&gt; tags.<BR>Feks., &lt;B&gt;denne tekst&lt;/B&gt; vil frembringe <B>denne tekst</B>.");
define("L_HELP_FMT_2", "For at lave et hyperlink (for e-mail eller URL) i dine beskeder, så bare skriv den respektive adresse uden specielle tags. Hyperlinket vil således blive oprettet automatisk.");
define("L_HELP_TIT_3", "Kommandoer");
define("L_HELP_USR", "bruger");
define("L_HELP_MSG", "besked");
define("L_HELP_ROOM", "værelse");
define("L_HELP_CMD_0", "{} er en obligatorisk indstilling, mens [] en en valgfri en.");
define("L_HELP_CMD_1", "Vælg antallet af beskeder, der skal vises - mindst fem.");
define("L_HELP_CMD_1a", "Set antallet af beskeder der skal vises, minimum og standard er 5.");
define("L_HELP_CMD_1b", "Genskab besked vinduet og vis n sidste beskeder, minimum og standard er 5.");
define("L_HELP_CMD_2a", "Indstil antallet af sekunder mellem hver opfriskning af beskedlisten.<BR>Hvis antallet ikke er skrevet eller er mindre end 3, så skiftes der mellem ingen opfriskning og 10 sekunder mellem hver opfriskning.");
define("L_HELP_CMD_2b", "Ændre beskeds- og brugerliste opfriskningstid (i sekunder).<BR>Hvis antallet ikke er skrevet eller er mindre end 3, så skiftes der mellem ingen opfriskning og 10 sekunder mellem hver opfriskning.");
define("L_HELP_CMD_3", "Sorter beskerne omvendt.");
define("L_HELP_CMD_4", "Gå ind i et andet værelse (som bliver lavet, hvis det ikke findes i forvejen, og hvis du har rettighederne til det).<BR>Nummeret 0 betyder privat værelse, 1 betyder offentligt. Nummeret bliver sat til 1, hvis det ikke udfyldes.");
define("L_HELP_CMD_5", "Forlad chatværelset efter at have skrevet den valgfrie besked.");
define("L_HELP_CMD_6", "Vis ikke beskeder fra en bruger der ikke har noget kælenavn.<BR>Ignorer ikke en bruger, hvis kælenavn og - begge findes. Ignorer ikke alle brugere når - ikke er et kælenavn.<BR>Vælges der ikke noget her, dukker der et vindue op, der viser alle ignorerede navne.");
define("L_HELP_CMD_7", "Genkald den forrige linje (kommando eller besked).");
define("L_HELP_CMD_8", "Vis/gem tidspunkt før beskeder.");
define("L_HELP_CMD_9", "Smid bruger ud af chatten. Denne kommado er kun for moderatorer.");
define("L_HELP_CMD_10", "Send en privat besked til en specifik bruger (andre brugere ser den ikke).");
define("L_HELP_CMD_11", "Viser information om den specifikke bruger.");
define("L_HELP_CMD_12", "Popup vindue for at tilrette egen profil.");
define("L_HELP_CMD_13", "Ændre besked ved brugers ind- og udgang i chat rummet.");
define("L_HELP_CMD_14", "Tillader administrator eller moderator af det pågældende rum til at gøre andre registrerede brugere til moderator for selvsamme rum.");
define("L_HELP_CMD_15", "Rens chat vinduet og vis 5 seneste beskeder.");
define("L_HELP_CMD_16", "Gem sidste n beskeder til en HTML fil. Hvis ikke n er angivet, gemmes alle tilgængelige beskeder i rummet.");
define("L_HELP_CMD_17", "Tillader administrator at sende en besked til samtlige brugere på chatten.");
define("L_HELP_CMD_18", "Invitere en given bruger til at chatte i dit nuværende rum.");
define("L_HELP_CMD_19", "Tillader moderator af rummet eller administrator at \"forvise\" en bruger fra rummet for en tid defineret af administrator.<BR>Administrator kan \"forvise\" en bruger på tværs af chatten.<br>Senere kan brugeren \"forvises\" for altid i hele chatten ved brug af '<B>&nbsp;*&nbsp;</B>' muligheden.");
define("L_HELP_CMD_20", "Skriv hvad du fortager dig nu. F.eks /me drikker kaffe - skriver følgende besked: * <brugernick> drikker kaffe.");

//message frame
define("L_NO_MSG", "Ingen besked");
define("L_TODAY_DWN", "Nyeste beskeder starter forneden");
define("L_TODAY_UP", "Nyeste beskeder starter foroven");

// message colors
$TextColors = array(	"Sort" => "#000000",
				"Rød" => "#FF0000",
				"Grøn" => "#009900",
				"Blå" => "#0000FF",
				"Lilla" => "#9900FF",
				"Mørkerød" => "#990000",
				"Mørkegrøn" => "#006600",
				"Mørkeblå" => "#000099",
				"Rødbrun" => "#996633",
				"Havblå" => "#006699",
				"Orange" => "#FF6600");

//ignored popup
define("L_IGNOR_TIT", "Ignoreret");
define("L_IGNOR_NON", "Ingen ignoreret bruger");

// whois popup
define("L_WHOIS_ADMIN", "Admin");
define("L_WHOIS_MODER", "Moderator");
define("L_WHOIS_USER", "Bruger");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s er tiltrådt chatten");
define("L_EXIT_ROM", "%s har afsluttet chatten");
?>