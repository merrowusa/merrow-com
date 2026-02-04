<?php
// File : french.lang.php3
// Translation by Loïc Chapeaux <lolo@phpheaven.net>

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "Tutoriel");

define("L_WEL_1", "Messages et pseudos sont respectivement effacés au bout de");
define("L_WEL_2", "heures et de");
define("L_WEL_3", "minutes ...");

define("L_CUR_1", "Actuellement, il y a");
define("L_CUR_2", "sur ce serveur.");
define("L_CUR_3", "Utilisateurs actuellement connectés");
define("L_CUR_4", "utilisateurs dans des salons privés");

define("L_SET_1", "Choisissez ...");
define("L_SET_2", "votre pseudo");
define("L_SET_3", "le nombre de messages à afficher");
define("L_SET_4", "la fréquence des mises à jour");
define("L_SET_5", "Sélectionnez un salon de discussion ...");
define("L_SET_6", "salons par défaut");
define("L_SET_7", "Faites votre choix ...");
define("L_SET_8", "autres salons publics");
define("L_SET_9", "créez votre propre salon");
define("L_SET_10", "public");
define("L_SET_11", "privé");
define("L_SET_12", "");
define("L_SET_13", "Et maintenant vous pouvez");
define("L_SET_14", "discuter");

define("L_SRC", "est disponible gratuitement sur");

define("L_SECS", "secondes");
define("L_MIN", "minute");
define("L_MINS", "minutes");

// registration and admin stuff:
define("L_REG_1", "votre mot de passe");
define("L_REG_1r", "(utilisateurs enregistrés seuls)");
define("L_REG_2", "Utilisateurs enregistrés");
define("L_REG_3", "S'enregistrer");
define("L_REG_4", "Editer son profil");
define("L_REG_5", "Se désenregistrer");
define("L_REG_6", "Enregistrement d'un utilisateur");
define("L_REG_7", "votre mot de passe");
define("L_REG_8", "votre e-mail");
define("L_REG_9", "Vous avez été enregistré.");
define("L_REG_10", "Retour");
define("L_REG_11", "Edition");
define("L_REG_12", "Modification du profil d'un utilisateur");
define("L_REG_13", "Désenregistrement");
define("L_REG_14", "Login");
define("L_REG_15", "Entrer");
define("L_REG_16", "Modifier");
define("L_REG_17", "Votre profil a été modifié.");
define("L_REG_18", "Vous avez été éjecté par le modérateur.");
define("L_REG_19", "Voulez-vous vraiment vous désenregistrer ?");
define("L_REG_20", "Oui");
define("L_REG_21", "Vous n'êtes plus enregistré.");
define("L_REG_22", "Non");
define("L_REG_25", "Fermer");
define("L_REG_30", "prénom");
define("L_REG_31", "nom");
define("L_REG_32", "WEB");
define("L_REG_33", "e-mail visible via la commande /whois");
define("L_REG_34", "Edition de votre profil");
define("L_REG_35", "Administration");
define("L_REG_36", "langues parlées");
define("L_REG_37", "Les champs marqués du sigle <span class=\"error\">*</span> doivent être renseignés.");
define("L_REG_39", "Le salon dans lequel vous discutiez a été détruit par l'administrateur.");
define("L_REG_45", "sexe");
define("L_REG_46", "masculin");
define("L_REG_47", "féminin");

// e-mail validation stuff
define("L_EMAIL_VAL_1", "Vos paramètres de connexion");
define("L_EMAIL_VAL_2", "Bienvenue(e) sur notre chat.");
define("L_EMAIL_VAL_Err", "Erreur interne, veuillez contacter l'administrateur&nbsp;: <a href=\"mailto:%s\">%s</a>.");
define("L_EMAIL_VAL_Done", "Votre mot de passe vous a été envoyé<BR>par e-mail.");

// admin stuff
define("L_ADM_1", "%s n'est plus modérateur pour ce salon.");
define("L_ADM_2", "Vous n'êtes plus enregistré.");

//error messages
define("L_ERR_USR_1", "Un utilisateur dispose déjà de ce pseudo. Veuillez en choisir un autre.");
define("L_ERR_USR_2", "Vous n'avez pas choisi votre pseudo or il en faut un !");
define("L_ERR_USR_3", "Ce pseudo est celui d'un utilisateur enregistré.<BR>Entrez le mot de passe associé ou choisissez un autre pseudo.");
define("L_ERR_USR_4", "Mot de passe invalide.");
define("L_ERR_USR_5", "Vous devez choisir un pseudo.");
define("L_ERR_USR_6", "Vous devez choisir un mot de passe.");
define("L_ERR_USR_7", "Vous devez entrer votre adresse e-mail.");
define("L_ERR_USR_8", "Adresse e-mail invalide.");
define("L_ERR_USR_9", "Ce pseudo est déjà reservé.");
define("L_ERR_USR_10", "Pseudo et/ou mot de passe invalide(s).");
define("L_ERR_USR_11", "Seul l'administrateur peut accéder à cette page.");
define("L_ERR_USR_12", "En tant qu'administrateur votre profil ne peut être supprimé.");
define("L_ERR_USR_13", "Seuls les utilisateurs enregistrés sont autorisés à créer un salon.");
define("L_ERR_USR_14", "Vous devez vous enregistrer.");
define("L_ERR_USR_15", "Les champs nom et prénom ne sont pas correctement renseignés.");
define("L_ERR_USR_16", "Un pseudo ne peut contenir ni espace, ni virgule, ni anti-slash (\\).");
define("L_ERR_USR_17", "Ce salon n'existe pas et vous n'êtes pas autorisé à en créer un.");
define("L_ERR_USR_18", "Mot interdit dans votre pseudo.");
define("L_ERR_USR_19", "Vous ne pouvez discuter dans deux salons simultanément.");
define("L_ERR_USR_20", "Vous avez été banni(e) du salon ou du chat.");
define("L_ERR_ROM_1", "Le nom d'un salon ne peut contenir ni virgule, ni anti-slash (\\).");
define("L_ERR_ROM_2", "Mot interdit dans le nom du salon à créer.");
define("L_ERR_ROM_3", "Ce salon existe déjà et son accès est public.");
define("L_ERR_ROM_4", "Ce nom de salon est invalide.");

// users frame or popup
define("L_EXIT", "Quitter");
define("L_DETACH", "Détacher");
define("L_EXPCOL_ALL", "Afficher/Réduire tout");
define("L_CONN_STATE", "Etat de la connexion");
define("L_CHAT", "Discuter");
define("L_USER", "utilisateur");
define("L_USERS", "utilisateurs");
define("L_NO_USER", "Pas d'utilisateur");
define("L_ROOM", "salon");
define("L_ROOMS", "salons");
define("L_EXPCOL", "Afficher/Réduire le salon");
define("L_BEEP", "Bip ou non à l'entrée d'un nouvel utilisateur");
define("L_PROFILE", "Voir le profil");
define("L_NO_PROFILE", "Pas de profil");

// input frame
define("L_HLP", "Aide");
define("L_BAD_CMD", "Commande invalide !");
define("L_ADMIN", "%s est déjà administrateur !");
define("L_IS_MODERATOR", "%s est déjà modérateur !");
define("L_NO_MODERATOR", "Cette commande est réservée au(x) modérateur(s) de ce salon.");
define("L_MODERATOR", "%s est maintenant modérateur pour ce salon.");
define("L_NONEXIST_USER", "Pas d'utilisateur %s dans le salon courant.");
define("L_NONREG_USER", "%s n'est pas un utilisateur enregistré.");
define("L_NONREG_USER_IP", "Son adresse IP est : %s.");
define("L_NO_KICKED", "L'utilisateur %s est modérateur ou administrateur et ne peut être éjecté.");
define("L_KICKED", "L'utilisateur %s a été éjecté.");
define("L_NO_BANISHED", "L'utilisateur %s est modérateur ou administrateur et ne peut être banni.");
define("L_BANISHED", "L'utilisateur %s a été banni.");
define("L_SVR_TIME", "Heure serveur : ");
define("L_NO_SAVE", "Aucun message à sauvegarder !");
define("L_NO_ADMIN", "Cette commande est réservée à l'administrateur.");
define("L_ANNOUNCE", "ANNONCE");
define("L_INVITE", "%s vous suggère de la/le rejoindre dans le salon <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s'); return false\">%s</a>.");
define("L_INVITE_REG", " Ce salon n'est accessible qu'aux utilisateurs enregistrés.");
define("L_INVITE_DONE", "Votre invitation a été envoyée à %s.");
define("L_OK", "Envoyer");

// help popup
define("L_HELP_TIT_1", "Emoticons");
define("L_HELP_TIT_2", "Mises en forme du texte des messages");
define("L_HELP_FMT_1", "Vos messages peuvent contenir du texte en gras, en italique ou souligné. Pour ce faire il vous suffit d'encadrer la section concernée par les tags &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; ou &lt;U&gt; &lt;/U&gt;.<BR>Par exemple, en tapant &lt;B&gt;ce texte&lt;/B&gt; vous obtiendrez <B>ce texte</B>.");
define("L_HELP_FMT_2", "Pour obtenir des hyperliens (URL ou e-mail) tapez simplement l'adresse en question dans votre message sans aucun tag. Elle sera automatiquement traitée.");
define("L_HELP_TIT_3", "Commandes");
define("L_HELP_USR", "utilisateur");
define("L_HELP_MSG", "message");
define("L_HELP_ROOM", "salon");
define("L_HELP_CMD_0", "{} signale un paramètre nécessaire, [] un paramètre optionnel.");
define("L_HELP_CMD_1a", "Définit le nombre de messages à afficher, 5 étant la valeur par défaut et le minimum");
define("L_HELP_CMD_1b", "Réinitialise le cadre des messages et affiche les n derniers d'entre eux, 5 étant la valeur par défaut et le minimum.");
define("L_HELP_CMD_2a", "Modifie le délai de rafraîchissement du cadre contenant les messages (n est exprimé en secondes).<BR>Si n n'est pas spécifié ou est inférieur à 3 le rafraîchissement n'est plus assuré.");
define("L_HELP_CMD_2b", "Modifie le délai de rafraîchissement des cadres contenant les messages et la liste des utilisateurs connectés (n est exprimé en secondes).<BR>Si n n'est pas spécifié ou est inférieur à 3 le rafraîchissement n'est plus assuré.");
define("L_HELP_CMD_3", "Inverse l'ordre d'affichage des messages.");
define("L_HELP_CMD_4", "Permet de se rendre dans un nouveau salon après l'avoir créé si nécessaire et si vous êtes autorisé à le faire.<BR>n prend la valeur 0 pour un salon privé et 1 pour un salon public (valeur par défaut).");
define("L_HELP_CMD_5", "Permet de quitter le chat après avoir envoyé le message (optionnel).");
define("L_HELP_CMD_6", "Supprime l'affichage des messages provenant d'un utilisateur si nick est spécifié.<BR>Restaure cet affichage si nick et - apparaissent tous deux ; si - l'est mais pas nick, restaure l'affichage des messages de tous les utilisateurs.<BR>Sans aucune des options, affiche une fenêtre qui contient l'ensemble des utilisateurs \"ignorés\".");
define("L_HELP_CMD_7", "Rappelle la dernière ligne envoyée (commande ou message).");
define("L_HELP_CMD_8", "Active/supprime l'affichage de l'heure à laquelle les messages ont été postés.");
define("L_HELP_CMD_9", "Expulse un utilisateur du salon courant pour un modérateur, du chat pour l'administrateur. Commande réservée au modérateur du salon.");
define("L_HELP_CMD_10", "Envoie un message privé à l'utilisateur spécifié (message invisible pour les autres).");
define("L_HELP_CMD_11", "Affiche le profil de l'utilisateur spécifié.");
define("L_HELP_CMD_12", "Permet de modifier son profil.");
define("L_HELP_CMD_13", "Active/désactive l'affichage des notifications pour l'entrée/la sortie d'un utilisateur dans le salon courant.");
define("L_HELP_CMD_14", "Permet à l'administrateur ou au(x) modérateur(s) du salon courant de rendre un autre utilisateur enregistré modérateur de ce même salon.");
define("L_HELP_CMD_15", "Réinitialise le cadre des messages en ne conservant que les 5 derniers d'entre eux.");
define("L_HELP_CMD_16", "Sauvegarde les n derniers messages hors notifications dans un fichier HTML. Si n n'est pas spécifié, tous les messages disponibles seront concernés.");
define("L_HELP_CMD_17", "Permet à l'administrateur d'envoyer une annonce visible par tous les utilisateurs quelque soit le salon dans lequel ils discutent.");
define("L_HELP_CMD_18", "Suggère à un utilisateur discutant dans un autre salon de se joindre à votre salon de discussion.");
define("L_HELP_CMD_19", "Permet au(x) modérateur(s) d'un salon ou à l'administrateur de \"bannir\" un utilisateur du salon pendant un temps déterminé par l'administrateur.<BR>Ce dernier peut bannir un utilisateur discutant dans un salon autre que le sien et utiliser le paramètre '<B>&nbsp;*&nbsp;</B>' pour bannir \"à jamais\" un utilisateur du chat, tous salons confondus.");
define("L_HELP_CMD_20", "Affiche ce que vous êtes en train de faire sans qu'il soit besoin de taper votre pseudo en début de message.");

// message frame
define("L_NO_MSG", "Pas de message");
define("L_TODAY_DWN", "Les messages envoyés aujourd'hui commencent ci-dessous");
define("L_TODAY_UP", "Les messages envoyés aujourd'hui commencent ci-dessus");

// message colors
$TextColors = array(	"Noir" => "#000000",
				"Rouge vif" => "#FF0000",
				"Rouge" => "#990000",
				"Vert vif" => "#009900",
				"Vert" => "#006600",
				"Bleu vif" => "#0000FF",
				"Bleu lagon" => "#006699",
				"Bleu" => "#000099",
				"Violet" => "#9900FF",
				"Marron" => "#996633",
				"Carotte" => "#FF6600");

//ignored popup
define("L_IGNOR_TIT", "Ignorés");
define("L_IGNOR_NON", "Pas d'utilisateur ignoré");

// whois popup
define("L_WHOIS_ADMIN", "Administrateur");
define("L_WHOIS_MODER", "Modérateur");
define("L_WHOIS_USER", "Utilisateur");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s entre dans ce salon");
define("L_EXIT_ROM", "%s a quitté ce salon");
?>