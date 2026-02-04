<?php
// File : polish.lang.php3
// Translation by Krzysztof Szatanik (Diablo/MAO) <diabl0@linuxpl.org>
// based on old translation of Piotr Gapiñski <narg@narg.dhs.org>

// extra header for charset
$Charset = "iso-8859-2";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "Przewodnik");

define("L_WEL_1", "Wiadomo¶ci zostan± skasowane po");
define("L_WEL_2", "godzinach a nazwy u¿ytkowników po");
define("L_WEL_3", "minutach ...");

define("L_CUR_1", "Aktualnie w systemie jest");
define("L_CUR_2", ".");
define("L_CUR_3", "u¿ytkowników w kana³ach publicznych");
define("L_CUR_4", "uzytkowników w kana³nach prywatnych");

define("L_SET_1", "Proszê wprowad¼ ...");
define("L_SET_2", "nazwa u¿ytkownika (nick)");
define("L_SET_3", "liczba wy¶wietlanych wiadomo¶ci");
define("L_SET_4", "odstêp czasowy do odswie¿enia wiadomo¶ci");
define("L_SET_5", "Wybierz kana³ tematyczny ...");
define("L_SET_6", "kana³ tematyczny");
define("L_SET_7", "Wybierz ...");
define("L_SET_8", "publiczny kana³ utworzony przez u¿ytkownika");
define("L_SET_9", "utwórz swój w³asny");
define("L_SET_10", "publiczny");
define("L_SET_11", "prywatny");
define("L_SET_12", "kana³");
define("L_SET_13", "Potem tylko");
define("L_SET_14", "po³acz sie!");

define("L_SRC", "jest dostêpny na");

define("L_SECS", "sekund");
define("L_MIN", "minuta");
define("L_MINS", "minuty");

// registration stuff:
define("L_REG_1", "twoje has³o");
define("L_REG_1r", "(tylko je¿eli jeste¶ zarejestrowany)");
define("L_REG_2", "Zarejestrowani u¿ytkownicy");
define("L_REG_3", "Zarejestruj siê");
define("L_REG_4", "Edytuj swoje ustawienia");
define("L_REG_5", "Wyrejestruj siê");
define("L_REG_6", "Rejestracja u¿ytkownika");
define("L_REG_7", "twoje has³o");
define("L_REG_8", "twój e-mail");
define("L_REG_9", "Zosta³e¶ poprawnie zarejestrowany.");
define("L_REG_10", "Powrót");
define("L_REG_11", "Edycja");
define("L_REG_12", "Zmiana informacji o u¿ytkowniku");
define("L_REG_13", "Kasowanie u¿ytkownika");
define("L_REG_14", "Wej¶cie");
define("L_REG_15", "Wejd¼");
define("L_REG_16", "Zmieñ");
define("L_REG_17", "Twoje ustawienia zosta³y zmienione.");
define("L_REG_18", "Zosta³e¶ wyrzucony z kana³u przez zarz±dcê.");
define("L_REG_19", "Czy na pewno chcesz siê usun±æ? ");
define("L_REG_20", "Tak");
define("L_REG_21", "Twoje informacje osobiste zosta³y skasowane z bazy danych i zosta³e¶ wyrejestrowany.");
define("L_REG_22", "Nie");
define("L_REG_25", "Zamknij");
define("L_REG_30", "Imiê");
define("L_REG_31", "Nazwisko");
define("L_REG_32", "Strona");
define("L_REG_33", "Pokazuj adres e-mail przez komendê /whois");
define("L_REG_34", "Edycja ustawieñ u¿ytkownika");
define("L_REG_35", "Administracja");
define("L_REG_36", "u¿ywane jêzyki");
define("L_REG_37", "Pola pomiêdzy <span class=\"error\">*</span> musz± byæ wype³nione.");
define("L_REG_39", "Kana³ w którym by³e¶ zosta³ usuniêty przez administratora.");
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
define("L_ERR_USR_1", "Nazwa jest ju¿ w u¿yciu. Proszê wybierz inn± nazwê u¿ytkownika.");
define("L_ERR_USR_2", "Musisz wybraæ nazwê u¿ytkownika.");
define("L_ERR_USR_3", "Ten nick jest ju¿ zarejestrowany. Proszê podaæ has³o lub wybraæ innego nicka.");
define("L_ERR_USR_4", "Poda³e¶ z³e has³o.");
define("L_ERR_USR_5", "Musisz podaæ swój nick.");
define("L_ERR_USR_6", "Musisz podaæ swoje has³o.");
define("L_ERR_USR_7", "Musisz podaæ swój adres e-mail.");
define("L_ERR_USR_8", "Musisz podaæ prawid³owy adres e-mail.");
define("L_ERR_USR_9", "Ten nick jest ju¿ w u¿yciu.");
define("L_ERR_USR_10", "Z³y nick lub has³o.");
define("L_ERR_USR_11", "Musisz byæ administratorem.");
define("L_ERR_USR_12", "Jeste¶ administratorem, wiêc nie mo¿esz siê usun±æ.");
define("L_ERR_USR_13", "Aby stworzyæ w³asny kana³ musisz byæ zarejestrowanym u¿ytkownikiem.");
define("L_ERR_USR_14", "Musisz siê zarejestrowaæ zanim zaczniesz pogawêdki.");
define("L_ERR_USR_15", "Musisz podaæ swoje pe³ne imiê i nazwisko.");
define("L_ERR_USR_16", "Nick nie mo¿e zawieraæ spacji, kropek, przecinków czy uko¶ników (\\).");
define("L_ERR_USR_17", "Ten kana³ nie istnieje a ty nie jeste¶ uprawniony do tworzenia kana³ów.");
define("L_ERR_USR_18", "Zakazane s³owo znalezione twojej nazwie u¿ytkownika.");
define("L_ERR_USR_19", "Nie mo¿esz przebywaæ jednocze¶nie na kilku kana³ach.");
define("L_ERR_USR_20", "You have been banished from this room or from the chat.");
define("L_ERR_ROM_1", "Nazwy kana³ów nie mog± zawieraæ spacji lub uko¶ników (\\).");
define("L_ERR_ROM_2", "Zakazane s³owo wystêpuje w nazwie kana³u ktury chcesz utworzyæ.");
define("L_ERR_ROM_3", "Ten kana³ nadal istnieje jako publiczny.");
define("L_ERR_ROM_4", "Nieprawid³owa nazwa kana³u.");

// users frame or popup
define("L_EXIT", "Wyj¶cie");
define("L_DETACH", "Od³±czenie");
define("L_EXPCOL_ALL", "Expand/Collapse All");
define("L_CONN_STATE", "Connection state");
define("L_CHAT", "Po³aczenie");
define("L_USER", "u¿ytkownik(ów)");
define("L_USERS", "u¿ytkownik(ów)");
define("L_NO_USER", "brak u¿ytkowników");
define("L_ROOM", "kana³");
define("L_ROOMS", "kana³y");
define("L_EXPCOL", "Expand/Collapse room");
define("L_BEEP", "Wydaj d¼wiêk/nie wydawaj d¼wiêku kiedy kto¶ wchodzi na kana³.");
define("L_PROFILE", "Display profile");
define("L_NO_PROFILE", "No profile");

// input frame
define("L_HLP", "Pomoc");
define("L_BAD_CMD", "To nie jest prawid³owe polecenie!");
define("L_ADMIN", "%s jest administratorem !");
define("L_IS_MODERATOR", "%s jest zarz±dc± !");
define("L_NO_MODERATOR", "Tylko zarz±dca kana³u mo¿e u¿ywaæ tej komendy.");
define("L_MODERATOR", "%s jest teraz zarz±dc± tego kana³u.");
define("L_NONEXIST_USER", "U¿ytkownik %s nie znajduje siê na tym kanale.");
define("L_NONREG_USER", "U¿ytkownik %s nie jest zarejestrowany.");
define("L_NONREG_USER_IP", "His IP is: %s.");
define("L_NO_KICKED", "U¿ytkownik %s jest zarz±dc± lub administratorem i nie mo¿e zostaæ wyrzucony z tego kana³u.");
define("L_KICKED", "U¿ytkownik %s zosta³ wyrzucony z kana³u.");
define("L_NO_BANISHED", "User %s is moderator or administrator and can't be banished.");
define("L_BANISHED", "User %s has successfully been banished.");
define("L_SVR_TIME", "Godzina: ");
define("L_NO_SAVE", "No message to save!");
define("L_NO_ADMIN", "Only the administrator can use this command.");
define("L_ANNOUNCE", "ANNOUNCE");
define("L_INVITE", "%s suggest you to join her/him into the <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a> room.");
define("L_INVITE_REG", " You have to be registered to enter this room.");
define("L_INVITE_DONE", "Your invitation has been sent to %s.");
define("L_OK", "Send");

// help popup
define("L_HELP_TIT_1", "U¶mieszki");
define("L_HELP_TIT_2", "Formatowanie tekstu dla wiadomo¶ci");
define("L_HELP_FMT_1", "Mo¿esz u¿ywaæ pogrubienia, pochylenia lub podkre¶lenia w wiadomo¶ciach u¿ywaj±c odpowiednich znaczników HTML: &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; lub &lt;U&gt; &lt;/U&gt; tags.<BR>Na przyk³ad, &lt;B&gt;ten tekst&lt;/B&gt; wy¶wietli <B>ten tekst</B>.");
define("L_HELP_FMT_2", "Aby utworzyæ link (dla adresu e-mail lub strony WWW) w twojej wiadomo¶ci po prostu podaj ten adres bez ¿adnych tagów HTML'a. Odno¶nik zostanie stworzony automatycznie.");
define("L_HELP_TIT_3", "Polecenia");
define("L_HELP_USR", "u¿ytkownik(ów)");
define("L_HELP_MSG", "wiadomo¶ci");
define("L_HELP_ROOM", "kana³");
define("L_HELP_CMD_0", "{} jest dla wymaganych parametrów, natomiast [] jest dla opcjonalnych.");
define("L_HELP_CMD_1a", "Ustawia ilo¶æ wiadomo¶ci jednocze¶nie wy¶wietlanych w oknie (minimum i domy¶lnie 5).");
define("L_HELP_CMD_1b", "Wczytuje ponownie okno wiadomo¶ci i wy¶wietla n ostatnich wiadomosci (warto¶æ minimalna n to 5).");
define("L_HELP_CMD_2a", "Zmienia czêstotliwo¶æ od¶wierzania wiadomo¶ci (w sekundach).<BR>je¶li n nie jest podane lub mniejsze od 3, zamienia pomiêdzy brakiem od¶wierzania i od¶wierzaniem co 10 sekund.");
define("L_HELP_CMD_2b", "Modify messages and users lists refresh delay (in seconds).<BR>If n is not specified or less than 3, toggles between no refresh and 10s refresh.");
define("L_HELP_CMD_3", "Odwróæ kolejno¶æ wy¶wietlania wiadomo¶ci.");
define("L_HELP_CMD_4", "Do³±cz do innego kana³u, tworz±c go je¿eli dotychczas nie istnieje i masz do tego uprawnienia.<BR>n równe 0 dla kana³ów prywatnych i 1 dla publicznych. Domy¶lnie 1 je¿eli nie podano inaczej.");
define("L_HELP_CMD_5", "Opuszczenie systemu po wys³aniu opcjonalnej wiadomo¶ci.");
define("L_HELP_CMD_6", "Ignoruje wiadomo¶ci wys³±ne przez u¿ytkownika je¿eli jego nazwa u¿ytkownika (nick) s± podane.<BR>Wy³±cza ignorowanie podanego u¿ytkownika po podaniu nazwy tego u¿ytkownika (nicka) i '-' (minusa), lub wy³±cza ignorowanie wszystkich u¿ytkowników po podaniu samego znaku '-' (minus).<BR>Bez podania ¿adnej opcji, te polecenie otworzy okienko z wyszczególnionymi nickami wszystkich ignorowanych u¿ytkowników.");
define("L_HELP_CMD_7", "Przywróæ poprzednio wpisan± liniê (polecenie lub wiadomo¶æ)");
define("L_HELP_CMD_8", "Poka¿/Ukryj czas przed wiadomo¶ciami.");
define("L_HELP_CMD_9", "Wyrzuca u¿ytkownika z kana³u. Ta komenda mo¿e zostaæ u¿yta tylko przez zarz±dcê kana³u.");
define("L_HELP_CMD_10", "Wysy³a prywatn± wiadomo¶æ do wybranego u¿ytkownika (inni u¿ytkownicy nie zobacz± tej wiadomo¶ci).");
define("L_HELP_CMD_11", "Pokazuje dodatkowe informacje na temat wybranego u¿ytkownika.");
define("L_HELP_CMD_12", "Wy¶wietla okno do edycji ustawieñ u¿ytkownika.");
define("L_HELP_CMD_13", "W³±cza lub wy³±cza pokazywanie informacji o wej¶ciu lub wyj¶ciu u¿ytkownika.");
define("L_HELP_CMD_14", "Pozwala administratorowi lub zarz±dcy kana³u na nadanie praw zarz±dcy innemu zarejestrowanemu u¿ytkownikowi kana³u.");
define("L_HELP_CMD_15", "Czy¶ci okno wiadomo¶ci i wy¶wietla tylko ostatnie piêc wiadomo¶ci.");
define("L_HELP_CMD_16", "Save the last n messages (notifications ones excluded) to an HTML file. If n is not specified, all available messages will be taken into account.");
define("L_HELP_CMD_17", "Allow the administrator to send an announce to all users whatever the room they are chatting into.");
define("L_HELP_CMD_18", "Suggest an user chatting in an other room to join the one you are into.");
define("L_HELP_CMD_19", "Allow the moderator(s) of a room or the administrator to \"banish\" an user from the room for a time defined by the administrator.<BR>The later can banish an user chatting in an other room than the one he is into and use the '<B>&nbsp;*&nbsp;</B>' setting to banish \"for ever\" an user from the chat as the whole.");
define("L_HELP_CMD_20", "Describe what you're doing without refer yourself.");

//message frame
define("L_NO_MSG", "Aktualnie nie ma ¿adnych wiadomo¶ci...");
define("L_TODAY_DWN", "The messages that have been sent today start below");
define("L_TODAY_UP", "The messages that have been sent today start above");

// message colors
$TextColors = array(	"Czarny" => "#000000",
				"Czerwony" => "#FF0000",
				"Zielony" => "#009900",
				"Niebieski" => "#0000FF",
				"Purpurowy" => "#9900FF",
				"Ciemny czerwony" => "#990000",
				"Ciemny zielony" => "#006600",
				"Ciemny niebieski" => "#000099",
				"Br±zowy" => "#996633",
				"Srebrny" => "#006699",
				"Carrot" => "#FF6600");

//ignored popup
define("L_IGNOR_TIT", "Zignorowany");
define("L_IGNOR_NON", "brak ignorowanych u¿ytkowników");

// whois popup
define("L_WHOIS_ADMIN", "Administrator");
define("L_WHOIS_MODER", "Zarz±dca");
define("L_WHOIS_USER", "U¿ytkownik");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s do³±czy³(a) do tego kana³u.");
define("L_EXIT_ROM", "%s opu¶ci³(a) ten kana³.");
?>