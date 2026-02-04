<?php
// File : estonian.lang.php3
// Original file by Tarmo Protsin <tarmo@gt.ee>

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "Tutvustus");

define("L_WEL_1", "Sõnumid kustutatakse peale");
define("L_WEL_2", "tundi ja kasutajanimed peale");
define("L_WEL_3", "minutit ...");

define("L_CUR_1", "Hetkel on ");
define("L_CUR_2", "jututoas.");
define("L_CUR_3", "Hetke kasutajad jututubades");
define("L_CUR_4", "kasutajad privaat ruumides");

define("L_SET_1", "Palun täida ...");
define("L_SET_2", "kasutajanimi");
define("L_SET_3", "sõnumite arv, mida näidatakse");
define("L_SET_4", "vahe iga uuendamise vahel");
define("L_SET_5", "Vali tuba ...");
define("L_SET_6", "vaikimisi toad");
define("L_SET_7", "Tee oma valik ...");
define("L_SET_8", "avalikud kasutajate tekitatud toad");
define("L_SET_9", "tekita enda");
define("L_SET_10", "avalik");
define("L_SET_11", "privaatne");
define("L_SET_12", "tuba");
define("L_SET_13", "Ja siis");
define("L_SET_14", "jutusta");

define("L_SRC", "is freely available on");

define("L_SECS", "sekundit");
define("L_MIN", "minut");
define("L_MINS", "minutit");

// registration stuff:
define("L_REG_1", "salasõna");
define("L_REG_1r", "(ainult registreerinutele)");
define("L_REG_2", "Andmete käsitlemine");
define("L_REG_3", "Registreeru");
define("L_REG_4", "Muuda oma andmeid");
define("L_REG_5", "Kustuta kasutaja");
define("L_REG_6", "Kasutaja registreerimine");
define("L_REG_7", "salasõna");
define("L_REG_8", "e-mail");
define("L_REG_9", "Oled edukalt registreeritud.");
define("L_REG_10", "Tagasi");
define("L_REG_11", "Muutmine");
define("L_REG_12", "Muudan kasutaja andmeid");
define("L_REG_13", "Kustutan kasutajat");
define("L_REG_14", "Login");
define("L_REG_15", "Log In");
define("L_REG_16", "Muuda");
define("L_REG_17", "Andmed edukalt muudetud.");
define("L_REG_18", "Sind visati toast välja moderaatori poolt.");
define("L_REG_19", "Oled kindel, et soovid ennast eemaldada ?");
define("L_REG_20", "Jah");
define("L_REG_21", "Oled edukalt eemaldatud.");
define("L_REG_22", "Ei");
define("L_REG_25", "Sulge");
define("L_REG_30", "eesnimi");
define("L_REG_31", "perenimi");
define("L_REG_32", "kodulehekülg");
define("L_REG_33", "näita e-maili avaliku informatsioonina");
define("L_REG_34", "Muudan kasutaja andmeid");
define("L_REG_35", "Administratsioon");
define("L_REG_36", "osatavad keeled");
define("L_REG_37", "Väljad tähistatud <SPAN CLASS=error>*</SPAN> peavad olema täidetud.");
define("L_REG_39", "The room you were in has been removed by the administrator.");
define("L_REG_45", "sugu");
define("L_REG_46", "Mees");
define("L_REG_47", "Naine");

// e-mail validation stuff
define("L_EMAIL_VAL_1", "Sinu seaded tuppa sisenemiseks");
define("L_EMAIL_VAL_2", "Tere tulemast meie jututuppa.");
define("L_EMAIL_VAL_Err", "Sisemine viga, palun võta ühendust administraatorigar: <A HREF=\"mailto:%s\">%s</A>.");
define("L_EMAIL_VAL_Done", "Salasõna saadeti sinu<BR>e-mail aadressile.");

// admin stuff
define("L_ADM_1", "%s ei ole enam moderator selles ruumis.");
define("L_ADM_2", "Sa ei ole enam registreeritud kasutaja.");

// error messages
define("L_ERR_USR_1", "Kasutajanimi on juba kasutuses. Palun vali uus.");
define("L_ERR_USR_2", "Sa pead valima kasutajanime.");
define("L_ERR_USR_3", "Kasutajanimi on registreeritud. Palun sisesta salasõna või vali teine kasutajanimi.");
define("L_ERR_USR_4", "Sisestasid vale salasõna.");
define("L_ERR_USR_5", "Sa pead sisestama oma kasutajanime.");
define("L_ERR_USR_6", "Sa pead sisestama oma salasõna.");
define("L_ERR_USR_7", "Sa pead sisestama oma e-maili aadressi.");
define("L_ERR_USR_8", "Sa pead sisestama õige e-maili aadressi.");
define("L_ERR_USR_9", "Kasutajanimi on juba kasutuses.");
define("L_ERR_USR_10", "Vale kasutajanimi või salasõna.");
define("L_ERR_USR_11", "Sa pead olema administraator.");
define("L_ERR_USR_12", "Sa oled administraator, seega ei saa sind eemaldada.");
define("L_ERR_USR_13", "Oma ruumi tekitamiseks pead olema registreerunud.");
define("L_ERR_USR_14", "Sisenemiseks pead olema registreerunud.");
define("L_ERR_USR_15", "Sa pead sisestama oma täispika nime.");
define("L_ERR_USR_16", "Kasutajanimi ei tohi sisaldada tühikut, koma või backslash'i (\\).");
define("L_ERR_USR_17", "Tuba ei eksisteeri ja sul ei ole lubatud tuba tekitada.");
define("L_ERR_USR_18", "Kasutajanimes leidus keelatud sõna.");
define("L_ERR_USR_19", "Sa ei saa olla samal ajal mitmes toas.");
define("L_ERR_USR_20", "Sa oled sellest toast või jutukast blokeeritud.");
define("L_ERR_ROM_1", "Toa nimi ei tohi sisaldada tühikut, koma või backslash'i (\\).");
define("L_ERR_ROM_2", "Tekitatava toa nimes leiti keelatud sõna.");
define("L_ERR_ROM_3", "Tuba eksisteerib juba avaliku toana.");
define("L_ERR_ROM_4", "Vigane toa nimi.");

// users frame or popup
define("L_EXIT", "Lahku");
define("L_DETACH", "Lase lahti");
define("L_EXPCOL_ALL", "Lahti/Kokku Kõik");
define("L_CONN_STATE", "Ühenduse seis");
define("L_CHAT", "Jutusta");
define("L_USER", "kasutaja");
define("L_USERS", "kasutajat");
define("L_NO_USER", "Ei ole kasutajat");
define("L_ROOM", "tuba");
define("L_ROOMS", "tuba");
define("L_EXPCOL", "Lahti/Kokku tuba");
define("L_BEEP", "Hääl/mitte kasutaja sisenemisel");
define("L_PROFILE", "Näita andmeid");
define("L_NO_PROFILE", "No profile");

// input frame
define("L_HLP", "Abi");
define("L_BAD_CMD", "See käsk ei ole õige!");
define("L_ADMIN", "%s on juba administraator!");
define("L_IS_MODERATOR", "%s on juba moderaator!");
define("L_NO_MODERATOR", "Ainult toa moderator saab kasutada seda käsku.");
define("L_MODERATOR", "%s on nüüd selle toa moderaator.");
define("L_NONEXIST_USER", "Kasutaja %s ei ole selles toas.");
define("L_NONREG_USER", "Kasutaja %s ei ole registereeritud.");
define("L_NONREG_USER_IP", "Tema IP on: %s.");
define("L_NO_KICKED", "Kasutaja %s on moderaator või administraator ja teda ei saa välja visata.");
define("L_KICKED", "Kasutaja %s visati edukalt toast välja.");
define("L_NO_BANISHED", "Kasutaja %s on moderaator või administraator ja teda ei saa blokeerida.");
define("L_BANISHED", "Kasutaja %s blokeeriti edukalt.");
define("L_SVR_TIME", "Serveri aeg: ");
define("L_NO_SAVE", "Pole sõnumeid, mida salvestada!");
define("L_NO_ADMIN", "Ainult administraator saab seda käsku kasutada.");
define("L_ANNOUNCE", "TEADE");
define("L_INVITE", "%s palub sind enda juurde <A HREF=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</A> tuppa.");
define("L_INVITE_REG", " Siia tuppa sisenemiseks pead olema registreerunud.");
define("L_INVITE_DONE", "Sinu kutse on saadetud kasutajale %s.");
define("L_OK", "Saada");

// help popup
define("L_HELP_TIT_1", "Smilies");
define("L_HELP_TIT_2", "Sõnumite teksti formateerimine");
define("L_HELP_FMT_1", "Võid panna bold, italic või underlined teksti sõnumitesse ümbritsedes vastava koha kas &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; või &lt;U&gt; &lt;/U&gt; tagidega.<BR>Näiteks, &lt;B&gt;see tekst&lt;/B&gt; annab tulemuseks <B>see tekst</B>.");
define("L_HELP_FMT_2", "Lingi tekitamiseks (e-maili või URLi) sõnumites, lihtsalt sisesta vastav aadress ilma tagidetta. Link tekitatakse automaatselt.");
define("L_HELP_TIT_3", "Käsud");
define("L_HELP_USR", "kasutaja");
define("L_HELP_MSG", "sõnum");
define("L_HELP_ROOM", "tuba");
define("L_HELP_CMD_0", "{} esindab nõutud seadet, [] valikulist seadet.");
define("L_HELP_CMD_1a", "Sea näidatavate sõnumite arv. Minimaalne ja vaikimisi on 5.");
define("L_HELP_CMD_1b", "Värskenda sõnumite akent ja näita n viimast sõnummit, minimaalne ja vaikimisi on 5.");
define("L_HELP_CMD_2a", "Muuda sõnumite ridade uuendamise ajavahemikku (sekundites).<BR>Kui n ei ole määratud või väikse kui 3, siis kas ei värskendata või siis värskendatakse 10s tagant.");
define("L_HELP_CMD_2b", "Muuda sõnumite ja kasutajate ridade uuendamise ajavahemikku (sekundites).<BR>Kui n ei ole määratud või väikse kui 3, siis kas ei värskendata või siis värskendatakse 10s tagant.");
define("L_HELP_CMD_3", "Järjestab sõnumid vastupidi.");
define("L_HELP_CMD_4", "Mine teise tuppa, tekitades selle, kui see ei eksisteeri ja sul on õigused selle tekitamiseks.<BR>n on 0 privaat ja 1 avalik, vaikimisi 1 kui ei ole määratud.");
define("L_HELP_CMD_5", "Lahku jututoast pärast valikulise sõnumi näitamist.");
define("L_HELP_CMD_6", "Ära näita sõnumeid kasutajalt, kui hüüdnimi on määratud.<BR>Ignoreerimine maha kasutajale, kui hüüdnimi ja - on mõlemad määratud. Kõikidele kasutajatele, kui - on aga mitte hüüdnimi.<BR>Ilma võtmetetta avab akna, mis näitab kõikiignoreeritud hüüdnimesid.");
define("L_HELP_CMD_7", "Korda eelmist sisestatud teksti (käsk või sõnum).");
define("L_HELP_CMD_8", "Näita/Peida aega sõnumite ees.");
define("L_HELP_CMD_9", "Viska kasutaja jututoast välja. Seda käsku saab kasutada ainult moderaator.");
define("L_HELP_CMD_10", "Saada privaatne sõnum määratud kasutajale (teised kasutajad ei näe seda).");
define("L_HELP_CMD_11", "Näita informatsiooni määratud kasutaja kohta.");
define("L_HELP_CMD_12", "Ava aken kasutaja andmete muutmiseks.");
define("L_HELP_CMD_13", "Näita/Peida märkmed kasutaja tuppa sisenemise/lahkumise kohta.");
define("L_HELP_CMD_14", "Luba administraatoril või selle toa moderaatori(te)l muuta registreeritud kasutaja sama ruumi moderaatoriks.");
define("L_HELP_CMD_15", "Puhasta sõnumite ala ja näita ainult viimast 5 sõnumit.");
define("L_HELP_CMD_16", "Salvesta viimased n sõnumit (sisaldades märkeid) HTML faili. Kui n ei ole määratud, võetakse kõik saadaval olevad sõnumid.");
define("L_HELP_CMD_17", "Luba administraatoril saata teade kõikidele kasutajatele kõikides tubades.");
define("L_HELP_CMD_18", "Kutsu teises toas olev kasutaja tuppa, kus sa ise viibid.");
define("L_HELP_CMD_19", "Luba toa moderaatori(te)l või administraatoritel \"blokeerida\" kasutaja toast ajaks, mis on defineeritud administraatori poolt.<BR>The later can banish an user chatting in an other room than the one he is into and use the '<B>&nbsp;*&nbsp;</B>' setting to banish \"for ever\" an user from the chat as the whole.");

// messages frame
define("L_NO_MSG", "Hetkel ei ole sõnumeid ...");
define("L_TODAY_DWN", "Sõnumid, mis on saadetud täna algavad all");
define("L_TODAY_UP", "Sõnumid, mis on saadetud täna algavad ülal");

// message colors
$TextColors = array(	"Black" => "#000000",
				"Red" => "#FF0000",
				"Green" => "#009900",
				"Blue" => "#0000FF",
				"Purple" => "#9900FF",
				"Dark red" => "#990000",
				"Dark green" => "#006600",
				"Dark blue" => "#000099",
				"Maroon" => "#996633",
				"Aqua blue" => "#006699",
				"Carrot" => "#FF6600");

// ignored popup
define("L_IGNOR_TIT", "Ignoreeritud");
define("L_IGNOR_NON", "Mitte ignoreeritud kasutaja");

// whois popup
define("L_WHOIS_ADMIN", "Administraator");
define("L_WHOIS_MODER", "Moderaator");
define("L_WHOIS_USER", "Kasutaja");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s siseneb siia tuppa");
define("L_EXIT_ROM", "%s lahkub siit toast");
?>