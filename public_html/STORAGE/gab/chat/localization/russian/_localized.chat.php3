<?php
// File : russian.lang.php3
// Translation by Stas Gobunov <stas@komus.net>
//	& Alexei Shalin <happyalex@totel.kg>

// extra header for charset
$Charset = "koi8-r";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "Век живи, Век учись");

define("L_WEL_1", "Сообщения будут удалены после");
define("L_WEL_2", "часов и имена пользователей после");
define("L_WEL_3", "минут ...");

define("L_CUR_1", "Сейчас");
define("L_CUR_2", "в системе.");
define("L_CUR_3", "Пользователей сейчас в каналах");
define("L_CUR_4", "пользователей в частных каналах");

define("L_SET_1", "Пожалуйста установите ...");
define("L_SET_2", "Ваше имя");
define("L_SET_3", "Число показываемых сообщений");
define("L_SET_4", "Время между обновлениями");
define("L_SET_5", "Выберите канал ...");
define("L_SET_6", "Каналы по умолчанию");
define("L_SET_7", "Выберите ...");
define("L_SET_8", "Общедоступные каналы созданные пользователем");
define("L_SET_9", "Создайте ваш собственный");
define("L_SET_10", "общедоступный");
define("L_SET_11", "частный");
define("L_SET_12", "канал");
define("L_SET_13", "А теперь");
define("L_SET_14", "чат");

define("L_SRC", "общедоступно в");

define("L_SECS", "секунд");
define("L_MIN", "минут");
define("L_MINS", "минут");

// registration stuff:
define("L_REG_1", "Ваш пароль");
define("L_REG_1r", "(если Вы зарегистрировались)");
define("L_REG_2", "Зарегистрированные чатлане");
define("L_REG_3", "Регистрация");
define("L_REG_4", "Изменить профаил");
define("L_REG_5", "Удалить чатлана");
define("L_REG_6", "Регистрация Чатлана");
define("L_REG_7", "Ваш пароль");
define("L_REG_8", "Ваш емаил");
define("L_REG_9", "Поздравляемс! Вы зарегистрированы.");
define("L_REG_10", "Назад");
define("L_REG_11", "Редактирование");
define("L_REG_12", "Изменение информации о чатлане");
define("L_REG_13", "Удалить чатлана");
define("L_REG_14", "Чатлан");
define("L_REG_15", "Зайти");
define("L_REG_16", "Изменить");
define("L_REG_17", "Изменения внесены.");
define("L_REG_18", "Вас выдворили из комнаты.");
define("L_REG_19", "Вы действительно хотите удалить ?");
define("L_REG_20", "Да");
define("L_REG_21", "Вы успешно удалены.");
define("L_REG_22", "Нет");
define("L_REG_25", "закрыть");
define("L_REG_30", "Имя");
define("L_REG_31", "Фамилия");
define("L_REG_32", "WEB");
define("L_REG_33", "Показывать емаил при команде /whois ");
define("L_REG_34", "Редактирование профайла");
define("L_REG_35", "Администрация");
define("L_REG_36", "Говорите на языках");
define("L_REG_37", "Поля с <span class=\"error\">*</span> должны быть заполнены.");
define("L_REG_39", "В комнате, где Вы были удалена админом.");
define("L_REG_45", "Пол");
define("L_REG_46", "парень");
define("L_REG_47", "девушка");

// e-mail validation stuff
define("L_EMAIL_VAL_1", "Ваши установки для входа в чат ");
define("L_EMAIL_VAL_2", "добро пожаловать к нам в чат.");
define("L_EMAIL_VAL_Err", "Что-то случилось страшное. Сообщите об этом админу: <a href=\"mailto:%s\">%s</a>.");
define("L_EMAIL_VAL_Done", "Ваш пароль был выслан вам на емаил.");

// admin stuff
define("L_ADM_1", "%s вы короче больше не модератор.");
define("L_ADM_2", "А Вы больше не зарегистрированы.");

// error messages
define("L_ERR_USR_1", "Имя пользователя уже используется пожалуйста выберите другое.");
define("L_ERR_USR_2", "Вы можете выбрать имя пользователя.");
define("L_ERR_USR_3", " Имя пользователя уже используется пожалуйста выберите другое.");
define("L_ERR_USR_4", "Ошибка с паролем. Хатцкер!!!!!!.");
define("L_ERR_USR_5", "А Как Вас Звать-то?! Указали бы!.");
define("L_ERR_USR_6", "А пароль обязателен.");
define("L_ERR_USR_7", "Ну какой у вас емаил ?!.");
define("L_ERR_USR_8", "Слухай, а емаил должен быть нормальным.");
define("L_ERR_USR_9", "Ну, такой ник уже есть.");
define("L_ERR_USR_10", "ошибка с ником или паролем. Хатцкеррррр!.");
define("L_ERR_USR_11", "ты должен быть АДМИНОМ.");
define("L_ERR_USR_12", "Вы Админ,и Вас не могут удалить.");
define("L_ERR_USR_13", "хочь создать комнату, регистрируйся.");
define("L_ERR_USR_14", "Зарегистрируйся,а потом чатай.");
define("L_ERR_USR_15", "Нукася, укажите полное имя.");
define("L_ERR_USR_16", "Ник не может содержать пробелы, запятые и (\\).");
define("L_ERR_USR_17", "Комната не существует и Вам не позволено ее создавать.");
define("L_ERR_USR_18", "Ругательство в нике не допустимо.");
define("L_ERR_USR_19", "Ну, ты же не можешь быть в нескольких местах одновременно.");
define("L_ERR_USR_20", "Ну, Вас только что забанили.");
define("L_ERR_ROM_1", "Название комнаты не может содержать пробелы, запятые и (\\).");
define("L_ERR_ROM_2", " Ругательство в названии комнаты не допустимо.");
define("L_ERR_ROM_3", "Этот канал уже существует как общедоступный.");
define("L_ERR_ROM_4", "Неправильное имя канала.");

// users frame or popup
define("L_EXIT", "Выйти");
define("L_DETACH", "Отсоединить");
define("L_EXPCOL_ALL", "Свернуть/Развернуть все");
define("L_CONN_STATE", "Статус соединения");
define("L_CHAT", "чат");
define("L_USER", "пользователь");
define("L_USERS", "пользователя(ей)");
define("L_NO_USER", "Нет пользователя");
define("L_ROOM", "канал");
define("L_ROOMS", "каналов");
define("L_EXPCOL", "Свернуть/Развернуть канал");
define("L_BEEP", "Звук/нет звука при входе чатлана");
define("L_PROFILE", "Показать профаил");
define("L_NO_PROFILE", "No profile");

// input frame
define("L_HLP", "Помощь");
define("L_BAD_CMD", "Это недопустимая команда !");
define("L_ADMIN", "%s ну ты же админ!");
define("L_IS_MODERATOR", "%s модератор уже!");
define("L_NO_MODERATOR", "Только модератор может использовать данную команду.");
define("L_MODERATOR", "%s ну модератор, в данной комнате.");
define("L_NONEXIST_USER", "Чатлан %s вне данной комнаты.");
define("L_NONREG_USER", "Чатлан %s не зарегистрирован.");
define("L_NONREG_USER_IP", "Его IP: %s.");
define("L_NO_KICKED", "Чатлан %s модератор или админ и ты его не можешь Выкинуть.");
define("L_KICKED", "Чатлана %s выпнули.");
define("L_NO_BANISHED", "Чатлан %s модератор или админ и ты его не может быть забанин");
define("L_BANISHED", "Чатлана %s забанили.");
define("L_SVR_TIME", "Время: ");
define("L_NO_SAVE", "Нечего сохранять!");
define("L_NO_ADMIN", "Только админ может использовать данную команду.");
define("L_ANNOUNCE", "Объявление");
define("L_INVITE", "%s приглашает Вас в <a href=\"#\" onclick=\"parent.runCmd('%s','%s')\">%s</a> комнату.");
define("L_INVITE_REG", " You have to be registered to enter this room.");
define("L_INVITE_DONE", "Приглашение чатлану %s отправлено.");
define("L_OK", "Send");

// help popup
define("L_HELP_TIT_1", "Смайлы");
define("L_HELP_TIT_2", "тествое форматирование для сообщений");
define("L_HELP_FMT_1", "Вы можете использовать жирный, наклонный тестк в сообщении набрав сообщения с этим : &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; or &lt;U&gt; &lt;/U&gt; тэгами.<BR>Пример, &lt;B&gt;this text&lt;/B&gt; will produce <B>БЛА БЛА БЛА</B>.");
define("L_HELP_FMT_2", "Создание ссылки (e-mail or URL) в вашем сообщении просто напишите адрес.");
define("L_HELP_TIT_3", "Команды");
define("L_HELP_USR", "пользователь");
define("L_HELP_MSG", "message");
define("L_HELP_ROOM", "канал");
define("L_HELP_CMD_0", "{} для обязательных параметров, [] для необязательных параметров.");
define("L_HELP_CMD_1", "Установить число показываемых сообщений, не менее 5.");
define("L_HELP_CMD_1a", "Количество выводимых сообщений.");
define("L_HELP_CMD_1b", "Через скоко обновлять фрейм с сообщениями.");
define("L_HELP_CMD_2a", "Изменить время обновления списка сообщений (в секундах).<BR>Если n не указано или менее 3, переключает между режимами \"Не обновлять\" и \"Обновление - 10 секунд\".");
define("L_HELP_CMD_2b", "Через скоко обновить список чатланов в (сек).<BR> По умолчанию и если меньше 3 сек, то 10 сек.");
define("L_HELP_CMD_3", "Изменить порядок сортировки сообщений на обратный.");
define("L_HELP_CMD_4", "Подключиться к другому каналу, создать, если его не существует и вы имеете на это право.<BR>Параметр n равен 0 для частного и 1 для общедоступного, по умолчанию 1 если не указано.");
define("L_HELP_CMD_5", "Выйти из чата, написав сообщение (опционально).");
define("L_HELP_CMD_6", "Не показывать сообщения от пользователя (nick), если nick указан.<BR>Показывать сообщения от пользователя если параметры nick и - указаны.<BR>Показывать сообщения от всех пользователей, когда указан только -.<BR>Без параметров эта команда показывает окно со всеми nick, сообщения от которых не показываются.");
define("L_HELP_CMD_7", "Вызвать ранее введенную строку (команду или сообщение).");
define("L_HELP_CMD_8", "Показывать/Прятать время перед сообщением.");
define("L_HELP_CMD_9", "Выпнуть чатлана из комнаты. Только админы и модераторы.");
define("L_HELP_CMD_10", "Приват.");
define("L_HELP_CMD_11", "Показать информацию о выбранном чатлане.");
define("L_HELP_CMD_12", "Редактировать профаил.");
define("L_HELP_CMD_13", "Показывать сообщение о входе/выходе чатлана.");
define("L_HELP_CMD_14", "Позволяет делать модератором другого чатлана.");
define("L_HELP_CMD_15", "Очистить фрейм сообшений. Оставить только 5 последних.");
define("L_HELP_CMD_16", "Сохранить сообщения.");
define("L_HELP_CMD_17", "Позволяет отправлять объявления всех чатланам.");
define("L_HELP_CMD_18", "Пригласить другого чатлана в гости.");
define("L_HELP_CMD_19", "Позволяет банить чатлана в данной комнате.<BR> Так же можно забанить его во всех комнатах указав '<B>&nbsp;*&nbsp;</B>'");
define("L_HELP_CMD_20", "Describe what you're doing without refer yourself.");

// message colors
$TextColors = array(	"Чёрный" => "#000000",
				"Красный" => "#FF0000",
				"Зелёный" => "#009900",
				"Синий" => "#0000FF",
				"Лиловый" => "#9900FF",
				"Темно красный" => "#990000",
				"Темно зеленый" => "#006600",
				"Темно синий" => "#000099",
				"Maroon" => "#996633",
				"Морская волна" => "#006699",
				"Carrot" => "#FF6600");

//message frame
define("L_NO_MSG", "Здесь пока нет сообщений ...");
define("L_TODAY_DWN", "The messages that have been sent today start below");
define("L_TODAY_UP", "The messages that have been sent today start above");

//ignored popup
define("L_IGNOR_TIT", "Проигнорировано");
define("L_IGNOR_NON", "Нет игнорируемых пользователей");

// whois popup
define("L_WHOIS_ADMIN", "Админ");
define("L_WHOIS_MODER", "Модератор");
define("L_WHOIS_USER", "Чатлан");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s приветствует Вас!");
define("L_EXIT_ROM", "%s прощается с Вами!");
?>