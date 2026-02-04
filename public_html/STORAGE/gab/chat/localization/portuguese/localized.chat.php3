<?php
// File : portuguese.lang.php3
// Translation by Gustavo Felisberto <humpback@d-attitude.com> and
//   Jose' Carlos Pereira <phpHeaven@abismo.org>

// extra header for charset
$Charset = "iso-8859-1";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "Tutorial");

define("L_WEL_1", "Mensagens são apagadas após");
define("L_WEL_2", "horas e nicks após");
define("L_WEL_3", "minutos ...");

define("L_CUR_1", "No momento, existem");
define("L_CUR_2", "no chat.");
define("L_CUR_3", "Usuários nas salas de chat neste momento");
define("L_CUR_4", "usuários em salas privadas");

define("L_SET_1", "Por favor, configure ...");
define("L_SET_2", "o seu nick");
define("L_SET_3", "o número de mensagens a serem mostradas");
define("L_SET_4", "o intervalo entre cada atualização");
define("L_SET_5", "Escolha uma sala de chat ...");
define("L_SET_6", "salas default");
define("L_SET_7", "Faça sua escolha ...");
define("L_SET_8", "salas publicas criadas por usuários");
define("L_SET_9", "crie a sua própria");
define("L_SET_10", "pública");
define("L_SET_11", "privada");
define("L_SET_12", "sala");
define("L_SET_13", "Agora, basta");
define("L_SET_14", "conversar");

define("L_SRC", "está disponível gratuitamente em");

define("L_SECS", "segundos");
define("L_MIN", "minuto");
define("L_MINS", "minutos");

// registration stuff:
define("L_REG_1", "A sua password");
define("L_REG_1r", "(apenas quando está registado)");
define("L_REG_2", "Gestão da sua conta");
define("L_REG_3", "Registar");
define("L_REG_4", "Editar as preferências");
define("L_REG_5", "Apagar utilizador");
define("L_REG_6", "Registo do utilizador");
define("L_REG_7", "a sua palavra-chave");
define("L_REG_8", "o seu e-mail");
define("L_REG_9", "O seu registo foi completado sem problemas.");
define("L_REG_10", "Back");
define("L_REG_11", "A Editar");
define("L_REG_12", "A modificar a informação do utilizador");
define("L_REG_13", "A Apagar utilizador");
define("L_REG_14", "Login");
define("L_REG_15", "Log In");
define("L_REG_16", "Mudar");
define("L_REG_17", "As suas informações foram alteradas com sucesso.");
define("L_REG_18", "Voce foi kickado por um moderador.");
define("L_REG_19", "Tem a certeza que deseja ser removido ?");
define("L_REG_20", "Sim");
define("L_REG_21", "Voce foi removido com sucesso.");
define("L_REG_22", "Não");
define("L_REG_25", "Fechar");
define("L_REG_30", "nome próprio");
define("L_REG_31", "apelido");
define("L_REG_32", "WEB");
define("L_REG_33", "mostrar e-mail ao comando /whois");
define("L_REG_34", "A editar perfil do utilizador");
define("L_REG_35", "Administração");
define("L_REG_36", "linguas faladas");
define("L_REG_37", "Campos com <span class=\"error\">*</span> devem ser completos.");
define("L_REG_39", "A sala onde se encontrava foi removida por um administrador.");
define("L_REG_45", "gender");
define("L_REG_46", "male");
define("L_REG_47", "Female");

// e-mail validation stuff
define("L_EMAIL_VAL_1", "Comunicação de Password");
define("L_EMAIL_VAL_2", "Bem vindo ao serviço de chat.");
define("L_EMAIL_VAL_Err", "Internal error, please contact the administrator: <a href=\"mailto:%s\">%s</a>.");
define("L_EMAIL_VAL_Done", "Your password has been sent to your e-mail address.");

// admin stuff
define("L_ADM_1", "%s não é moderador desta sala.");
define("L_ADM_2", "You're no more a registered user.");

//error messages
define("L_ERR_USR_1", "Este nick já está a ser usado. Por favor escolha outro.");
define("L_ERR_USR_2", "Você deve escolher um nick.");
define("L_ERR_USR_3", "Este nick está registado. Por favor introduza a sua password ou escolha outro nome.");
define("L_ERR_USR_4", "Introduziu uma palavra-chave errada.");
define("L_ERR_USR_5", "Deve introduzir um nick.");
define("L_ERR_USR_6", "Deve introduzir uma password.");
define("L_ERR_USR_7", "Deve introduzir um e-mail.");
define("L_ERR_USR_8", "Deve introduzir um e-mail válido.");
define("L_ERR_USR_9", "Este nick já está a ser usado.");
define("L_ERR_USR_10", "Nick ou password incorrectos.");
define("L_ERR_USR_11", "Tem de ser administrador.");
define("L_ERR_USR_12", "Você é administrador, por isso não pode ser removido.");
define("L_ERR_USR_13", "Para criar a sua própria sala tem de estar registado.");
define("L_ERR_USR_14", "Tem de estar registado antes de conversar.");
define("L_ERR_USR_15", "Tem de escrever o seu nome completo.");
define("L_ERR_USR_16", "O nick não pode conter espaços, vírgulas nem backslash (\\).");
define("L_ERR_USR_17", "Esta sala não existe e você não esta autorizado a criar uma.");
define("L_ERR_USR_18", "O seu nick contem uma palavra banida.");
define("L_ERR_USR_19", "Você não pode estar em mais de uma sala simultaneamente.");
define("L_ERR_USR_20", "You have been banished from this room or from the chat.");
define("L_ERR_ROM_1", "O nome da sala não pode conter vírgulas nem backslash (\\).");
define("L_ERR_ROM_2", "Foi encontrada uma palavra banida no nome da sala que pretende criar.");
define("L_ERR_ROM_3", "Esta sala já existe e é pública.");
define("L_ERR_ROM_4", "Nome de sala inválido.");

// users frame or popup
define("L_EXIT", "Sair");
define("L_DETACH", "Destacar");
define("L_EXPCOL_ALL", "Expandir/Fechar tudo");
define("L_CONN_STATE", "Connection state");
define("L_CHAT", "Conversa");
define("L_USER", "utilizador");
define("L_USERS", "utilizadores");
define("L_NO_USER", "Nenhum utilizador");
define("L_ROOM", "sala");
define("L_ROOMS", "salas");
define("L_EXPCOL", "Expandir/Fechar sala");
define("L_BEEP", "Apitar/não apitar quando entra utilizador");
define("L_PROFILE", "Display profile");
define("L_NO_PROFILE", "No profile");

// input frame
define("L_HLP", "Ajuda");
define("L_BAD_CMD", "Isto não é um comando valido !");
define("L_ADMIN", "%s já é administrador !");
define("L_IS_MODERATOR", "%s já é moderador !");
define("L_NO_MODERATOR", "So o moderador desta sala pode usar este comando.");
define("L_MODERATOR", "%s é agora o moderador desta sala.");
define("L_NONEXIST_USER", "O utilizador %s não esta nesta sala.");
define("L_NONREG_USER", "O utlizador %s não esta registado.");
define("L_NONREG_USER_IP", "His IP is: %s.");
define("L_NO_KICKED", "O utilizador %s é moderador ou administrador e não pode ser expulso.");
define("L_KICKED", "O utilizador %s foi expulso.");
define("L_NO_BANISHED", "User %s is moderator or administrator and can't be banished.");
define("L_BANISHED", "User %s has successfully been banished.");
define("L_SVR_TIME", "Server time: ");
define("L_NO_SAVE", "Não há mensagens para guardar.");
define("L_NO_ADMIN", "Só o administrador pode usar este comando.");
define("L_ANNOUNCE", "ANUNCIAR");
define("L_INVITE", "%s suggest you to join her/him into the <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a> room.");
define("L_INVITE_REG", " You have to be registered to enter this room.");
define("L_INVITE_DONE", "Your invitation has been sent to %s.");
define("L_OK", "Send");

// help popup
define("L_HELP_TIT_1", "Smilies");
define("L_HELP_TIT_2", "Formatação de texto para mensagens");
define("L_HELP_FMT_1", "Pode colocar texto em negrito, italico e sublinhado usando os simbolos apropriados &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; ou &lt;U&gt; &lt;/U&gt;.<BR>Por exemplo, &lt;B&gt;este texto&lt;/B&gt; irá aparecer como <B>este texto</B>.");
define("L_HELP_FMT_2", "Para criar um hyperlink (para e-mail ou página web) nas suas mensagens, simplesmente escreva a morada sem tages. O hyperlink será gerado automáticamente.");
define("L_HELP_TIT_3", "Comandos");
define("L_HELP_USR", "utilizador");
define("L_HELP_MSG", "mensagem");
define("L_HELP_ROOM", "sala");
define("L_HELP_CMD_0", "{} representa algo requerido, [] algo opcional.");
define("L_HELP_CMD_1a", "Numero de mensagens a mostrar, minimo e por defeito 5.");
define("L_HELP_CMD_1b", "refresh da frame das mensagens a mostrar as ultimas n mensagens, minimo e por defeito são 5.");
define("L_HELP_CMD_2a", "Modificar o intervalo (em segundos) do refresh da frame das mensagens.<BR>Se n não é indicado ou menor que 3, alterna entre não refresh e 10s de refresh.");
define("L_HELP_CMD_2b", "Modify messages and users lists refresh delay (in seconds).<BR>If n is not specified or less than 3, toggles between no refresh and 10s refresh.");
define("L_HELP_CMD_3", "Inverte a ordem das mensagens.");
define("L_HELP_CMD_4", "Muda para outra sala, cria a sala se esta não existe (caso seja permitido).<BR>n igual a 0 para salas privadas, 1 para salas publicas, por defeito 1.");
define("L_HELP_CMD_5", "Sai do chat depois de escrever a mensagem opcional.");
define("L_HELP_CMD_6", "Evita mostrar mensagens do utilizador se o ick foi escolhido.<BR>Set ignoring off for an user when nick and - are both specified, for all users when - is but not nick.<BR>With no option, this command pops up a window that shows all ignored nicks.");
define("L_HELP_CMD_7", "Chama a umtima mensagem (ou comando) escritos.");
define("L_HELP_CMD_8", "Mostra/Esconde a hora antes das mensagens.");
define("L_HELP_CMD_9", "Kika o utilizador da sala. Apenas um moderador pode fazer isto.");
define("L_HELP_CMD_10", "Envia uma mensafem privada para o utilizador escolhido (apenas esse utilizador a vai ver a mensagem).");
define("L_HELP_CMD_11", "Mostra informações sobre o utilizador.");
define("L_HELP_CMD_12", "Abre uma janela para editar as informações sobre o utilizador.");
define("L_HELP_CMD_13", "Liga/Desliga notificações sobre entrada/saida de pessoas na sala..");
define("L_HELP_CMD_14", "Permite ao administrador ou moderador da sala, promover outro utilizador a moderador.");
define("L_HELP_CMD_15", "Limpa a janela de mensagens e mostra apenas as ultimas 5 mensagens.");
define("L_HELP_CMD_16", "Grava as ultimas n mensagens (mensagens de notificação excluidas) para um ficheiro HTML file. Se n não é indicado salta todas as mensagens.");
define("L_HELP_CMD_17", "Permite ao administrador enviar um anuncio para todos os utilizadores (independentemente da sala onde estão.");
define("L_HELP_CMD_18", "Suggest an user chatting in an other room to join the one you are into.");
define("L_HELP_CMD_19", "Allow the moderator(s) of a room or the administrator to \"banish\" an user from the room for a time defined by the administrator.<BR>The later can banish an user chatting in an other room than the one he is into and use the '<B>&nbsp;*&nbsp;</B>' setting to banish \"for ever\" an user from the chat as the whole.");
define("L_HELP_CMD_20", "Describe what you're doing without refer yourself.");

//message frame
define("L_NO_MSG", "Não existe neste momento nenhuma mensagem ...");
define("L_TODAY_DWN", "The messages that have been sent today start below");
define("L_TODAY_UP", "The messages that have been sent today start above");

// message colors
$TextColors = array(	"Negro" => "#000000",
				"Vermelho" => "#FF0000",
				"Verde" => "#009900",
				"Azul" => "#0000FF",
				"Purple" => "#9900FF",
				"Vermelho Escuro" => "#990000",
				"Verde Escuro" => "#006600",
				"Azul Escuro" => "#000099",
				"Castanho" => "#996633",
				"Azul Marinho" => "#006699",
				"Cenoura" => "#FF6600");

//ignored popup
define("L_IGNOR_TIT", "Ignorado");
define("L_IGNOR_NON", "Nenhum utilizador ignorado");

// whois popup
define("L_WHOIS_ADMIN", "Administrador");
define("L_WHOIS_MODER", "Moderador");
define("L_WHOIS_USER", "Utilizador");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s entrou nesta sala");
define("L_EXIT_ROM", "%s saiu desta sala");
?>