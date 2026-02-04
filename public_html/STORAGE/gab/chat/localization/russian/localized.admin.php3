<?php
// File : russian.lang.php3
// Translation by Alexei Shalin <happyalex@totel.kg>,
// Dim Zegebart <keks@rbcmail.ru> & Arsen <arsen@betus.usi.ru>

// extra header for charset
$Charset = "windows-1251";

// medium font size in pt.
$FontSize = 10;

// Top frame
define("A_MENU_0", "Администрирование: %s");
define("A_MENU_1", "Зарегистрированные пользователи");
define("A_MENU_2", "Убитые пользователи");
define("A_MENU_3", "Очистить комнаты");
define("A_MENU_4", "Послать письма");

// Frame for registered users
define("A_SHEET1_1", "Список зарегистрированных пользователей и их статус");
define("A_SHEET1_2", "Ник");
define("A_SHEET1_3", "статус");
define("A_SHEET1_4", "Модерируемые комнаты");
define("A_SHEET1_5", "Модерируемые комнаты перечесляются через запятую, без пробелов.");
define("A_SHEET1_6", "Удалить отмеченные профайлы");
define("A_SHEET1_7", "Изменить");
define("A_SHEET1_8", "Зарегистрированных пользователей, кроме Вас, нет.");
define("A_SHEET1_9", "Убить отмеченные профайлы");
define("A_SHEET1_10", "Для обновления перейдите на страницу убитых пользователей.");
define("A_SHEET1_11", "Последнее соединение");
define("A_USER", "Пользователь");
define("A_MODER", "Модератор");
define("A_PAGE_CNT", "Страница %s из %s");

// Frame for banished users
define("A_SHEET2_1", "Список убитых пользователей и соответствующие комнаты");
define("A_SHEET2_2", "IP");
define("A_SHEET2_3", "Убит в комнатах");
define("A_SHEET2_4", "Убит до");
define("A_SHEET2_5", "навсегда");
define("A_SHEET2_6", "комнаты указываются через запятую, если их больше 4, если указать '<B>&nbsp;*&nbsp;</B>' то <BR>убит во всех комнатах.");
define("A_SHEET2_7", "Восстановить отменченных пользователей");
define("A_SHEET2_8", "Убитых пользователей нет.");

// Frame for cleaning rooms
define("A_SHEET3_1", "Список существующих комнат");
define("A_SHEET3_2", "Очистка любой комнаты, кроме комнаты \"по умолчанию\",<BR> приведет к удалению модераторов в этой комнате.");
define("A_SHEET3_3", "Очистить выбранные комнаты");
define("A_SHEET3_4", "Здесь нечего чистить.");

// Frame for sending mails
define("A_SHEET4_0", "Вы не установили требуемые переменные в файле <BR>'chat/admin/mail4admin.php3'.");
define("A_SHEET4_1", "Послать письма");
define("A_SHEET4_2", "Кому:");
define("A_SHEET4_3", "Выбрать всех");
define("A_SHEET4_4", "Тема:");
define("A_SHEET4_5", "Сообщение:");
define("A_SHEET4_6", "Начать отправку");
define("A_SHEET4_7", "Все письма отправлены.");
define("A_SHEET4_8", "Возникла внутренняя ошибка при отправке почты.");
define("A_SHEET4_9", "Проверьте наличие адреса, темы и сообщения !");
?>