<?php
// File : brazilian_portuguese.lang.php3
// Translation by Fabiano R. Prestes <zoso@post.com>

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

define("L_SET_1", "Por favor, escolha ...");
define("L_SET_2", "seu nick");
define("L_SET_3", "o número de mensagens a serem mostradas");
define("L_SET_4", "o intervalo entre cada atualização");
define("L_SET_5", "Escolha uma sala de chat ...");
define("L_SET_6", "salas padrão");
define("L_SET_7", "Faça sua escolha ...");
define("L_SET_8", "salas públicas criadas por usuários");
define("L_SET_9", "crie a sua própria");
define("L_SET_10", "pública");
define("L_SET_11", "privativa");
define("L_SET_12", "sala");
define("L_SET_13", "Agora, é só");
define("L_SET_14", "conversar");

define("L_SRC", "está disponível gratuitamente em");

define("L_SECS", "segundos");
define("L_MIN", "minuto");
define("L_MINS", "minutos");

// registration stuff:
define("L_REG_1", "sua senha");
define("L_REG_1r", "(somente quando for registrado)");
define("L_REG_2", "Usuários registrados");
define("L_REG_3", "Registrar-se");
define("L_REG_4", "Editar seus detalhes");
define("L_REG_5", "Deletar usuário");
define("L_REG_6", "Registro de usuário");
define("L_REG_7", "sua senha");
define("L_REG_8", "seu email");
define("L_REG_9", "Você foi registrado com sucesso.");
define("L_REG_10", "Voltar");
define("L_REG_11", "Editando");
define("L_REG_12", "Modificando detalhes de usuário");
define("L_REG_13", "Deletando usuário");
define("L_REG_14", "Login");
define("L_REG_15", "Log In");
define("L_REG_16", "Modificar");
define("L_REG_17", "Seus detalhes foram modificados.");
define("L_REG_18", "Você foi chutado da sala pelo moderador.");
define("L_REG_19", "Você realmente quer ser removido?");
define("L_REG_20", "Sim");
define("L_REG_21", "Você foi removido.");
define("L_REG_22", "Não");
define("L_REG_25", "Fechar");
define("L_REG_30", "nome");
define("L_REG_31", "sobrenome");
define("L_REG_32", "website");
define("L_REG_33", "mostrar email com comando /whois");
define("L_REG_34", "Editando detalhes do usuário");
define("L_REG_35", "Administração");
define("L_REG_36", "línguas faladas");
define("L_REG_37", "Campos com <span class=\"error\">*</span> precisam ser completados.");
define("L_REG_39", "A sala em que você estava foi removida pelo administrador.");
define("L_REG_45", "sexo");
define("L_REG_46", "masculino");
define("L_REG_47", "feminino");

// e-mail validation stuff
define("L_EMAIL_VAL_1", "Suas configurações para entrar no chat");
define("L_EMAIL_VAL_2", "Bem-vindo ao nosso servidor de chat.");
define("L_EMAIL_VAL_Err", "Erro interno, por favor avise o administrador: <a href=\"mailto:%s\">%s</a>.");
define("L_EMAIL_VAL_Done", "Sua senha foi enviada para o seu email.");

// admin stuff
define("L_ADM_1", "%s não é mais moderador desta sala.");
define("L_ADM_2", "Você não é mais um usuário registrado.");

//error messages;
define("L_ERR_USR_1", "Este nick já está sendo usado. Por favor escolha outro.");
define("L_ERR_USR_2", "Você deve escolher um nick.");
define("L_ERR_USR_3", "Este nick é registrado. Por favor, digite a senha correta ou escolha outro.");
define("L_ERR_USR_4", "Você digitou a senha errada.");
define("L_ERR_USR_5", "Você precisa escolher um nick.");
define("L_ERR_USR_6", "Você precisa fornecer uma senha.");
define("L_ERR_USR_7", "Você precisa fornecer um email.");
define("L_ERR_USR_8", "Você precisa fornecer um email válido.");
define("L_ERR_USR_9", "Este nick já está registrado.");
define("L_ERR_USR_10", "Nick ou senha inválida.");
define("L_ERR_USR_11", "Você precisar ser o Administrador.");
define("L_ERR_USR_12", "Você é o Administrador então não pode ser removido.");
define("L_ERR_USR_13", "Para poder criar sua própria sala você precisa ser registrado.");
define("L_ERR_USR_14", "Você precisa ser registrado antes de usar o chat.");
define("L_ERR_USR_15", "Você precisa escrever o seu nome completo.");
define("L_ERR_USR_16", "Nicks não podem conter espaços, vírgulas ou barras (\\).");
define("L_ERR_USR_17", "Esta sala não existe e você não tem autorização para criar uma.");
define("L_ERR_USR_18", "Palavra proibida encontrada no seu nick.");
define("L_ERR_USR_19", "Você não pode estar em mais de uma sala ao mesmo tempo.");
define("L_ERR_USR_20", "Você foi banido desta sala ou do chat.");
define("L_ERR_ROM_1", "O nome da sala não pode conter vírgulas ou barras (\\).");
define("L_ERR_ROM_2", "Palavra proibida encontrada no nome da sala que você quer criar.");
define("L_ERR_ROM_3", "Esta sala já existe como pública.");
define("L_ERR_ROM_4", "Nome de sala inválido.");

// users frame or popup
define("L_EXIT", "Sair");
define("L_DETACH", "Destacar");
define("L_EXPCOL_ALL", "Expandir/Minimizar todos");
define("L_CONN_STATE", "Estado da conexão");
define("L_CHAT", "Chat");
define("L_USER", "usuário");
define("L_USERS", "usuários");
define("L_NO_USER", "Nenhum usuário");
define("L_ROOM", "sala");
define("L_ROOMS", "salas");
define("L_EXPCOL", "Expandir/Minimizar sala");
define("L_BEEP", "Liga/Desliga do bipe de aviso de entrada");
define("L_PROFILE", "Mostrar detalhes");
define("L_NO_PROFILE", "No profile");

// input frame
define("L_HLP", "Ajuda");
define("L_BAD_CMD", "Este não é um comando válido!");
define("L_ADMIN", "%s já é administrador !");
define("L_IS_MODERATOR", "%s já é moderador !");
define("L_NO_MODERATOR", "Só o moderador pode usar este comando.");
define("L_MODERATOR", "%s agora é um moderador para esta sala.");
define("L_NONEXIST_USER", "Usuário %s não está na sala atual.");
define("L_NONREG_USER", "Usuário %s não é registrado.");
define("L_NONREG_USER_IP", "O IP do usuário é: %s.");
define("L_NO_KICKED", "Usuário %s é moderador ou administrador e não pode ser chutado.");
define("L_KICKED", "Usuário %s foi chutado com sucesso.");
define("L_NO_BANISHED", "Usuário %s é moderador ou administrador e não pode ser banido.");
define("L_BANISHED", "Usuário %s foi banido com sucesso.");
define("L_SVR_TIME", "Hora do servidor: ");
define("L_NO_SAVE", "Sem mensagem para salvar!");
define("L_NO_ADMIN", "Só o administrador pode usar este comando.");
define("L_ANNOUNCE", "ANÚNCIO");
define("L_INVITE", "%s sugere que você junte-se a ele(a) na sala <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a>.");
define("L_INVITE_REG", " You have to be registered to enter this room.");
define("L_INVITE_DONE", "Seu convite foi enviado para %s.");
define("L_OK", "Send");

// help popup
define("L_HELP_TIT_1", "Emoticons");
define("L_HELP_TIT_2", "Formatação de texto para mensagens");
define("L_HELP_FMT_1", "Você pode usar texto bold (negrito), itálicos ou sublinhado colocando as tags &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; ou &lt;U&gt; &lt;/U&gt; antes e depois de parte ou de todo o texto.<BR>Exemplo: &lt;B&gt;este texto&lt;/B&gt; vai gerar <B>este texto</B>.");
define("L_HELP_FMT_2", "Para criar um link (para email ou URL) na sua mensagem, simplesmente digite o texto sem tag html alguma. O link será gerado automaticamente.");
define("L_HELP_TIT_3", "Comandos");
define("L_HELP_USR", "usuário");
define("L_HELP_MSG", "mensagem");
define("L_HELP_ROOM", "sala");
define("L_HELP_CMD_0", "{} indicam um parâmetro requerido, [] indicam um opcional.");
define("L_HELP_CMD_1", "Ajuste o número de mensagens a serem mostradas, 5 pelo menos.");
define("L_HELP_CMD_1a", "Número de mensagens à mostrar. O mínimo e padrão é 5.");
define("L_HELP_CMD_1b", "Atualiza o frame de mensagens e mostra as últimas n mensagens. Mínimo e padrão de 5.");
define("L_HELP_CMD_2a", "Modifica o atraso na atualização da lista de mensagens (em segundos).<BR>Se n não for especificado ou for menor do que 3, alterna entre sem atualização e 10 segundos de intervalo.");
define("L_HELP_CMD_2b", "Modifica o atraso na atualização das listas de mensagens e usuários (em segundos).<BR>Se n não for especificado ou for menor do que 3, alterna entre sem atualização e 10 segundos de intervalo.");
define("L_HELP_CMD_3", "Inverte a ordem das mensagens.");
define("L_HELP_CMD_4", "Muda de sala, criando se ela não existir e se você for autorizado.<BR>n igual a 0 para privativa e 1 para pública, o padrão é 1 se não for especificado.");
define("L_HELP_CMD_5", "Deixa a sala após escrever a mensagem opcional.");
define("L_HELP_CMD_6", "Evita mensagens de um usuário se o nick for especificado.<BR>Desliga o \"ignore\" para um nick quando o mesmo for especificado com o sinal de menos e desliga todos quando for somente o sinal.<BR> Sem nenhuma opção, esse comando abre uma janela que mostra os nicks ignorados.");
define("L_HELP_CMD_7", "Busca a última linha enviada (comando ou mensagem).");
define("L_HELP_CMD_8", "Mostra/Oculta data e hora antes das mensagens.");
define("L_HELP_CMD_9", "Tira usuário do chat. Este comando só pode ser usado pelo moderador.");
define("L_HELP_CMD_10", "Envia uma mensagem privativa (reservada) ao usuário especificado (os outros usuários não irão vê-la)");
define("L_HELP_CMD_11", "Mostra informações sobre o usuário especificado.");
define("L_HELP_CMD_12", "Janela pop-up para editar detalhes do usuário.");
define("L_HELP_CMD_13", "Liga/Desliga a notificação de entrada/saída de usuários da sala atual.");
define("L_HELP_CMD_14", "Permite o administrador ou moderador(es) da sala atual a promover a moderador da mesma sala um outro usuário registrado.");
define("L_HELP_CMD_15", "Limpa o frame de mensagens e mostra somente as últimas 5 mensagens.");
define("L_HELP_CMD_16", "Salva as últimas n mensagens (com exceção das notificações) para um arquivo HTML. Se n não for especificado, todas as mensagens disponíveis serão incluídas.");
define("L_HELP_CMD_17", "Permite ao administrador anunciar (enviar mensagem) à todos os usuários do chat, independente da sala onde eles estejam.");
define("L_HELP_CMD_18", "Sugere a um usuário conversando em outra sala que ele entre na sala que você está.");
define("L_HELP_CMD_19", "Permite ao(s) moderador(es) de uma sala ou ao administrador a \"banir\" um usuário de uma sala pelo tempo definido pelo administrador.<BR>Este pode banir um usuário conversando em uma outra sala diferente da que ele está, e usar o parâmetro '<B>&nbsp;*&nbsp;</B>' para baní-lo \"para sempre\" do servidor de chat.");
define("L_HELP_CMD_20", "Describe what you're doing without refer yourself.");

//message frame
define("L_NO_MSG", "Não existe atualmente nenhuma mensagem ...");
define("L_TODAY_DWN", "The messages that have been sent today start below");
define("L_TODAY_UP", "The messages that have been sent today start above");

// message colors
$TextColors = array(	"Preto" => "#000000",
				"Vermelho" => "#FF0000",
				"Verde" => "#009900",
				"Azul" => "#0000FF",
				"Roxo" => "#9900FF",
				"Vermelho Escuro" => "#990000",
				"Verde Escuro" => "#006600",
				"Azul Escuro" => "#000099",
				"Marrom" => "#996633",
				"Azul Claro" => "#006699",
				"Cenoura" => "#FF6600");

//ignored popup
define("L_IGNOR_TIT", "Ignorado");
define("L_IGNOR_NON", "Nenhum usuário ignorado");

// whois popup
define("L_WHOIS_ADMIN", "Administrador");
define("L_WHOIS_MODER", "Moderador");
define("L_WHOIS_USER", "Usuário");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s entra na sala");
define("L_EXIT_ROM", "%s sai da sala");
?>