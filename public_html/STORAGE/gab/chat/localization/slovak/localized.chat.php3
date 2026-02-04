<?php
// File : slovak.lang.php3
// Translation by Peter Belak <pepek@pobox.sk> & Marek Rybar <webmaster@satelit.sk>
//	& Richard Marko <spirit@feeha.sk>

// extra header for charset
$Charset = "windows-1250";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "Príruèka");

define("L_WEL_1", "Správy sa maú po");
define("L_WEL_2", "hodinách a uívate¾ské mená po");
define("L_WEL_3", "minutách ...");

define("L_CUR_1", "Teraz je ");
define("L_CUR_2", "v chate");
define("L_CUR_3", "Aktuálny ¾udia v chatovacích miestnostiach");
define("L_CUR_4", "¾udia v súkromnıch miestnostiach");

define("L_SET_1", "Prosím zadajte ...");
define("L_SET_2", "Vaše uívate¾ské meno");
define("L_SET_3", "poèet zobrazenıch správ");
define("L_SET_4", "Èas medzi kadou obnovou");
define("L_SET_5", "Vyberte si chatovaciu miestnos...");
define("L_SET_6", "implicitné miestnosti");
define("L_SET_7", "Vyberte si ...");
define("L_SET_8", "verejné miestnosti vytvorené uívate¾mi");
define("L_SET_9", "vytvori vlastnú");
define("L_SET_10", "verejnú");
define("L_SET_11", "súkromnú");
define("L_SET_12", "miestnos");
define("L_SET_13", "Teraz u iba");
define("L_SET_14", "chatujte");

define("L_SRC", "je vo¾ne k dispozícii na");

define("L_SECS", "sekúnd");
define("L_MIN", "minúta");
define("L_MINS", "minúty");

// registration stuff:
define("L_REG_1", "Heslo");
define("L_REG_1r", "(len ak ste zaregistrovanı)");
define("L_REG_2", "Nastavenia ...");
define("L_REG_3", "Registrácia");
define("L_REG_4", "Nastavenia profilu");
define("L_REG_5", "Zrušenie profilu");
define("L_REG_6", "Zaregistrovanie sa do chatu");
define("L_REG_7", "Vaše heslo");
define("L_REG_8", "Váš e-mail");
define("L_REG_9", "Registrácia prebehla úspešne.");
define("L_REG_10", "Spä");
define("L_REG_11", "Zmena");
define("L_REG_12", "Nastavenie uívate¾skıch informácií");
define("L_REG_13", "Vymazanie profilu");
define("L_REG_14", "Prihlásenie");
define("L_REG_15", "Vstúpte");
define("L_REG_16", "Zmeò");
define("L_REG_17", "Vaše informácie boli úspešne modifikované.");
define("L_REG_18", "Boli ste vykopnutı z miestnosti moderátorom.");
define("L_REG_19", "Skutoène ho chcete zruši?");
define("L_REG_20", "Áno");
define("L_REG_21", "Profil bol uspešne odstránenı.");
define("L_REG_22", "Nie");
define("L_REG_25", "Ukonèi");
define("L_REG_30", "Krstné meno");
define("L_REG_31", "Priezvisko");
define("L_REG_32", "WEB");
define("L_REG_33", "Sprístupni e-mail pomocou príkazu /whois");
define("L_REG_34", "Nastavenia/zmena profilu");
define("L_REG_35", "Administrácia");
define("L_REG_36", "Ovládate jazyky");
define("L_REG_37", "Polia oznaèené <span class=\"error\">*</span> musia by vyplnené.");
define("L_REG_39", "Miestnos v ktorej ste sa nachádzali bola zrušená administrátorom.");
define("L_REG_45", "Pohlavie");
define("L_REG_46", "Mu");
define("L_REG_47", "ena");

// e-mail validation stuff
define("L_EMAIL_VAL_1", "Vaše nastavenia pre vstup do chat-u");
define("L_EMAIL_VAL_2", "Vítame Vás na našom i Vašom chatovacom serveri.");
define("L_EMAIL_VAL_Err", "Interná chyba, kontaktujte prosím administrátorov: <a href=\"mailto:%s\">%s</a>.");
define("L_EMAIL_VAL_Done", "Vaše heslo bolo poslané na Vašu e-mail adresu.");

// admin stuff
define("L_ADM_1", "%s u viac nie je moderátorom tejto miestnosti.");
define("L_ADM_2", "U nie ste registrovanım uívate¾om.");

//error messages
define("L_ERR_USR_1", "Toto uívate¾ské meno je u pouité. Prosím zvo¾te si iné.");
define("L_ERR_USR_2", "Musíte si vybra uívate¾ské meno.");
define("L_ERR_USR_3", "Toto uívate¾ské meno je u zaregistrované. Prosím, zadajte preò heslo, alebo si zvo¾te iné meno.");
define("L_ERR_USR_4", "Heslo je neplatné.");
define("L_ERR_USR_5", "Uívate¾ské meno nebolo korektne zadané.");
define("L_ERR_USR_6", "Heslo nebolo korektne zadané.");
define("L_ERR_USR_7", "E-mail nebol korektne zadanı.");
define("L_ERR_USR_8", "E-mailová adresa nebola korektne zadaná.");
define("L_ERR_USR_9", "Toto uívate¾ské meno je u zaregistrované.");
define("L_ERR_USR_10", "Neplatné uívate¾ské meno a heslo.");
define("L_ERR_USR_11", "Na toto má právo iba administrátor.");
define("L_ERR_USR_12", "Ste administrátorom, take nemôete by odstránenı.");
define("L_ERR_USR_13", "Pre vytvorenie si vlastnej súkromnej miestnosti musíte ma zaregistrované uívateské meno.");
define("L_ERR_USR_14", "Pred vstupom do chatovacej miestnosti sa musíte zaregistrova.");
define("L_ERR_USR_15", "Musíte zada Krstné meno aj Priezvisko.");
define("L_ERR_USR_16", "Uívate¾ské meno nesmie obsahova èiarky, medzery, alebo späné lomítka (\\).");
define("L_ERR_USR_17", "Takáto miestnos neexistuje, no zároveò nemáte dovoli vytvori ju!");
define("L_ERR_USR_18", "Vaše uívate¾ské meno obsahuje nevhodné slovo alebo frázu.");
define("L_ERR_USR_19", "Nemôete by naraz vo viacerıch miestnostiach.");
define("L_ERR_USR_20", "Bol Vám znemonenı prístup do tejto miestnosti alebo do chat-u.");
define("L_ERR_ROM_1", "Meno miestnosti nemôe obsahova èiarky alebo spätné lomítka (\\).");
define("L_ERR_ROM_2", "Meno miestnosti obsahuje nevhodné slovo alebo frázu a preto nemôe by vytvorná.");
define("L_ERR_ROM_3", "Takáto miestnos u existuje ako verejná.");
define("L_ERR_ROM_4", "Nesprávny názov miestnosti");

// users frame or popup
define("L_EXIT", "Odís z miestnosti");
define("L_DETACH", "Odlepi");
define("L_EXPCOL_ALL", "Rozbali/Zbali všetko");
define("L_CONN_STATE", "Stav spojenia");
define("L_CHAT", "Chat");
define("L_USER", "uívate¾/ov");
define("L_USERS", "uívatelia/ov");
define("L_NO_USER", "iadny uívatelia");
define("L_ROOM", "miestnos");
define("L_ROOMS", "miestnosti");
define("L_EXPCOL", "Rozbali/Zbali miestnos");
define("L_BEEP", "Povoli/zakáza pípanie keï vstúpi novı uívate¾");
define("L_PROFILE", "Profil zobrazovania");
define("L_NO_PROFILE", "No profile");

// input frame
define("L_HLP", "Help - nápoveda");
define("L_BAD_CMD", "Toto nie je platnı príkaz!");
define("L_ADMIN", "%s je u nastavenı ako administrátor!");
define("L_IS_MODERATOR", "%s je u nastavenı ako moderátor !");
define("L_NO_MODERATOR", "Tento príkaz môe poui iba moderátor.");
define("L_MODERATOR", "%s je nastavenı ako moderátor tejto miestnosti.");
define("L_NONEXIST_USER", "Uívate¾ %s sa nenachádza v tejto miestnosti.");
define("L_NONREG_USER", "Uívate¾ %s nie je zaregistrovanı.");
define("L_NONREG_USER_IP", "IP je: %s.");
define("L_NO_KICKED", "Uívate¾ %s je moderátorom alebo administrátorom a preto nemôe by vykopnutı!");
define("L_KICKED", "Uívate¾ %s bol vykopnutı.");
define("L_NO_BANISHED", "Uívate¾ %s je moderátorom alebo administrátorom a nemôe by vyhostenı.");
define("L_BANISHED", "Uívate¾ %s bol úspešne vyhostenı.");
define("L_SVR_TIME", "Èas serveru: ");
define("L_NO_SAVE", "Nie sú iadne správy na uloenie!");
define("L_NO_ADMIN", "Iba administrátor môe poui tento príkaz.");
define("L_ANNOUNCE", "OZNÁMENIE");
define("L_INVITE", "%s navrhuje aby ste prešli do <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a> miestnosti.");
define("L_INVITE_REG", " Pre vstup do tejto miestnosti musíte by zaregistrovanı.");
define("L_INVITE_DONE", "Vaše pozvanie bolo poslané uívate¾ovi %s.");
define("L_OK", "Pošli");

// help popup
define("L_HELP_TIT_1", "Smajlíky");
define("L_HELP_TIT_2", "Formátovanie textu správ");
define("L_HELP_FMT_1", "Text v správach môe by tuènı, sklonenı alebo podèiarknutı ohranièením príslušnej èasti textu s: &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; alebo &lt;U&gt; &lt;/U&gt; tagmi.<BR>Napr.: &lt;B&gt;tento text&lt;/B&gt; vytvorí <B>tento text</B>.");
define("L_HELP_FMT_2", "Na vytvorenie odkazu (e-mail alebo URL) vo vašich správach, napíšte jednoducho adresu bez akéhoko¾vek tagu. Odkaz bude vytvorenı automaticky.");
define("L_HELP_TIT_3", "Príkazy");
define("L_HELP_USR", "uívate¾/ov");
define("L_HELP_MSG", "správy");
define("L_HELP_ROOM", "miestnos");
define("L_HELP_CMD_0", "{} je povinnı parameter, [] je volite¾nı parameter.");
define("L_HELP_CMD_1", "Nastaví poèet zobrazovanıch správ, 5 je minimum.");
define("L_HELP_CMD_1a", "Nastaví poèet zobrazovanıch správ, minimálna a automaticky nastavená hodnota je 5.");
define("L_HELP_CMD_1b", "Opä naèíta správy a zobrazí len poslednıch aktuálnych n správ, minimálna a automaticky nastavená hodnota je 5.");
define("L_HELP_CMD_2a", "Zmení interval obnovovania (v sek.)<BR>Ak n nie je zadané, alebo je menšie ako 3, mení medzi zobrazovaním bez obnovy a obnovovaním po 10 sekundách.");
define("L_HELP_CMD_2b", "Zmení interval obnovovania správ i zoznam uívate¾ov (v sek.).<BR>Ak n nie je zadané, alebo je menšie ako 3, mení medzi zobrazovaním bez obnovy a obnovovaním po 10 sekundách.");
define("L_HELP_CMD_3", "Zmení poradie správ. Pridávanie novıch správ nahor alebo nadol.");
define("L_HELP_CMD_4", "Presunie uívate¾a do inej miestnosti, pokia¾ neexistuje tak ju vytvorí.<BR>n rovné 0 pre súkromnú a 1 pre verejnú, implicitne 1 pokia¾ nie je n zadané.");
define("L_HELP_CMD_5", "Odíde z chatu po vypísaní volite¾nej správy.");
define("L_HELP_CMD_6", "Bude ignorova správy od uívate¾a ak sa zadá jeho uívate¾ské meno.<BR>Vypne ignorovanie pre<BR>- uívate¾a ak je zadané jeho uívate¾ské meno spolu s - (pomlèkou)<BR>- všetkıch uívate¾ov ak sa zadá - (pomlèka) bez uívate¾ského mena.<BR>Ak sa nezadá niè, tento príkaz zobrazí okno so všetkımi ignorovanımi uívate¾mi.");
define("L_HELP_CMD_7", "Znovu vyvolá poslednú správu alebo príkaz, ktorı ste odoslali.");
define("L_HELP_CMD_8", "Ukáe/Skryje èasy pred správami.");
define("L_HELP_CMD_9", "Vykopne uívate¾a z miestnosti. Tento príkaz môe poui iba moderátor.");
define("L_HELP_CMD_10", "Pošle súkromnú správu konkrétnemu uívate¾ovi (ostatní uívatelia túto správu neuvidia).");
define("L_HELP_CMD_11", "Zobrazí informácie o vybranom uívate¾ovi.");
define("L_HELP_CMD_12", "Otvorí popup okno pre nastavenie uívate¾ovho profilu.");
define("L_HELP_CMD_13", "Umoòuje prepína medzi zapnutım a vypnutım zobrazovaním upozornení, keï nejakı inı uívate¾ vojde alebo odíde do/z miestnosti.");
define("L_HELP_CMD_14", "Povo¾uje administrátorovi alebo moderátorovi (moderátorom) miestnosti povıši ïalšieho beného zaregistrovaného uívate¾a na moderátora tej istej miestnosti.");
define("L_HELP_CMD_15", "Vyèistí chatovacie okno a zobrazí poslednıch aktuálnych 5 správ.");
define("L_HELP_CMD_16", "Uloí poslednıch n správ (alebo oznaèenıch) do HTML súboru. Aj nie je n udané, potom sa uloia všetky správy.");
define("L_HELP_CMD_17", "Umoòuje administrátorovi posla správu všetkım uívate¾om bez oh¾adu na to, v akej miestnosti sa nachádzajú.");
define("L_HELP_CMD_18", "Navrhne uívate¾ovi v inej miestnosti aby prešiel do tej kde sa práve nachádzate Vy.");
define("L_HELP_CMD_19", "Povoli moderátorom miestností alebo administrátorovi \"vykáza\" uívate¾a z miestnosti na èas urèenı administrátorom.<BR>To neskoršie moe vykáza uívate¾a chatujúceho v inej miestnosti ako v tej, v ktorej sa nachádza a poui '<B>&nbsp;*&nbsp;</B>' nastavenia zakáza \"navdy\" a tım znemoni prístup do celého chat-u.");
define("L_HELP_CMD_20", "Describe what you're doing without refer yourself.");

//message frame
define("L_NO_MSG", "iadna správa ...");
define("L_TODAY_DWN", "Dnes poslané správy zaèínajú dole");
define("L_TODAY_UP", "Dnes poslané správy zaèínajú hore");

// message colors
$TextColors = array(	"Èierna" => "#000000",
				"Èervená" => "#FF0000",
				"Zelená" => "#009900",
				"Modrá" => "#0000FF",
				"Fialová" => "#9900FF",
				"Tmavo èervená" => "#990000",
				"Tmavo zelená" => "#006600",
				"Tmavo modrá" => "#000099",
				"Hnedá" => "#996633",
				"Morská modrá" => "#006699",
				"Mrkva" => "#FF6600");

//ignored popup
define("L_IGNOR_TIT", "Ignorované");
define("L_IGNOR_NON", "iadny ignorovaní uívatelia");

// whois popup
define("L_WHOIS_ADMIN", "Administrátor");
define("L_WHOIS_MODER", "Moderátor");
define("L_WHOIS_USER", "Uívate¾");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s vstúpil(a) do miestnosti");
define("L_EXIT_ROM", "%s sa odhlásil(a) z tejto miestnosti");
?>