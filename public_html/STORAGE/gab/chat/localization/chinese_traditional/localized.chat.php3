<?php
// File : chinese_traditional.lang.php3
// Original file by Wei Shou-da <shouda@ms14.url.com.tw>
// Second Edition by Dean Lin <dean@xlinux.com>

// extra header for charset
$Charset = "big5";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "Tutorial");

define("L_WEL_1", "聊天內容將於");
define("L_WEL_2", "小時後，使用者姓名將於");
define("L_WEL_3", "分鐘後刪除");

define("L_CUR_1", "目前有");
define("L_CUR_2", "在聊天");
define("L_CUR_3", "在聊天室中的人");
define("L_CUR_4", "在私人聊天室中的使用者");

define("L_SET_1", "請輸入 ...");
define("L_SET_2", "您的姓名");
define("L_SET_3", "每個視窗顯示的訊息則數");
define("L_SET_4", "更新頻率");
define("L_SET_5", "請選擇一個聊天室 ...");
define("L_SET_6", "預設聊天室");
define("L_SET_7", "您選擇 ...");
define("L_SET_8", "使用者自設的公開聊天室");
define("L_SET_9", "自設您自己的聊天室");
define("L_SET_10", "公開");
define("L_SET_11", "私人");
define("L_SET_12", "房間");
define("L_SET_13", "設定好後, 請進來");
define("L_SET_14", "聊天");

define("L_SRC", "開放");

define("L_SECS", "秒");
define("L_MIN", "分鐘");
define("L_MINS", "分鐘");

// registration stuff:
define("L_REG_1", "密碼");
define("L_REG_1r", "(如果您已經註冊)");
define("L_REG_2", "已經註冊的使用者");
define("L_REG_3", "註冊");
define("L_REG_4", "修改你的個人資料");
define("L_REG_5", "刪除使用者");
define("L_REG_6", "使用者註冊");
define("L_REG_7", "你的密碼");
define("L_REG_8", "電子郵件");
define("L_REG_9", "你已經註冊成功\");
define("L_REG_10", "回上一頁");
define("L_REG_11", "修改");
define("L_REG_12", "更改使用者資料");
define("L_REG_13", "刪除使用者");
define("L_REG_14", "登入");
define("L_REG_15", "登入");
define("L_REG_16", "修改");
define("L_REG_17", "你的個人資料修改成功!");
define("L_REG_18", "你被聊天室管理者踢出聊天室");
define("L_REG_19", "你真的確定要移除嗎 ?");
define("L_REG_20", "是的");
define("L_REG_21", "你已經成功的移除了");
define("L_REG_22", "不");
define("L_REG_25", "關閉視窗");
define("L_REG_30", "名字");
define("L_REG_31", "姓");
define("L_REG_32", "個人網頁");
define("L_REG_33", "使用 /whois 命令時顯示 Email ?");
define("L_REG_34", "修改使用者個人資料");
define("L_REG_35", "系統管理");
define("L_REG_36", "常用語言");
define("L_REG_37", "<span class=\"error\">*</span> 號的欄位是必需要填寫的欄位.");
define("L_REG_39", "這個聊天室已經被系統管理員移除.");
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
define("L_ERR_USR_1", "這個使用者姓名已經在使用，請選擇另外一個名字");
define("L_ERR_USR_2", "您必須輸入一個使用者姓名");
define("L_ERR_USR_3", "這個使用者姓名已經被註冊，請輸入密碼或選擇另外一個名字");
define("L_ERR_USR_4", "你輸入的密碼錯誤");
define("L_ERR_USR_5", "你必需輸入使用者姓名");
define("L_ERR_USR_6", "你必需輸入密碼");
define("L_ERR_USR_7", "你必需輸入 Email");
define("L_ERR_USR_8", "你必需輸入正確的 Email");
define("L_ERR_USR_9", "這個使用者名稱已經有人使用");
define("L_ERR_USR_10", "使用者名稱或密碼錯誤");
define("L_ERR_USR_11", "你必需是系統管理員");
define("L_ERR_USR_12", "你是系統管理員所以你不能移除你自己");
define("L_ERR_USR_13", "你必需先註冊, 才可以新開聊天室");
define("L_ERR_USR_14", "你在進聊天室之前, 你必需先註冊");
define("L_ERR_USR_15", "你必需輸入你的全名");
define("L_ERR_USR_16", "使用者名稱不能有空白, 逗號或倒斜線 (\\).");
define("L_ERR_USR_17", "This room doesn't exist and you are not allowed to create one.");
define("L_ERR_USR_18", "Banned word found in your username.");
define("L_ERR_USR_19", "You cannot be in more than one room at the same time.");
define("L_ERR_USR_20", "You have been banished from this room or from the chat.");
define("L_ERR_ROM_1", "聊天室名稱不能有逗號或倒斜線 (\\).");
define("L_ERR_ROM_2", "Banned word found in the room's name you want to create.");
define("L_ERR_ROM_3", "這個聊天室的名字已經被已存在的公開聊天室所使用");
define("L_ERR_ROM_4", "聊天室的名字錯誤");

// users frame or popup
define("L_EXIT", "不聊了");
define("L_DETACH", "所有房間");
define("L_EXPCOL_ALL", "展開/疊起所有");
define("L_CONN_STATE", "Connection state");
define("L_CHAT", "聊天吧");
define("L_USER", "個使用者");
define("L_USERS", "個使用者");
define("L_NO_USER", "沒人");
define("L_ROOM", "房間");
define("L_ROOMS", "房間");
define("L_EXPCOL", "展開/疊起房間");
define("L_BEEP", "Beep/no beep at user entrance");
define("L_PROFILE", "Display profile");
define("L_NO_PROFILE", "No profile");

// input frame
define("L_HLP", "求助");
define("L_BAD_CMD", "指令錯誤 !");
define("L_ADMIN", "%s 已經是系統管理員 !");
define("L_IS_MODERATOR", "%s is already moderator!");
define("L_NO_MODERATOR", "這個指令只有聊天室的主人可以使用");
define("L_MODERATOR", "%s is now moderator for this room.");
define("L_NONEXIST_USER", "使用者 %s 現在不在這個聊天室");
define("L_NONREG_USER", "使用者 %s 沒有註冊過");
define("L_NONREG_USER_IP", "His IP is: %s.");
define("L_NO_KICKED", "使用者 %s 是系統管理員或聊天室主人, 你不能踢除他.");
define("L_NO_BANISHED", "User %s is moderator or administrator and can't be banished.");
define("L_BANISHED", "User %s has successfully been banished.");
define("L_KICKED", "使用者 %s 已經成功的被踢出聊天室");
define("L_SVR_TIME", "系統時間: ");
define("L_NO_SAVE", "No message to save!");
define("L_NO_ADMIN", "Only the administrator can use this command.");
define("L_ANNOUNCE", "ANNOUNCE");
define("L_INVITE", "%s suggest you to join her/him into the <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a> room.");
define("L_INVITE_REG", " You have to be registered to enter this room.");
define("L_INVITE_DONE", "Your invitation has been sent to %s.");
define("L_OK", "Send");

// help popup
define("L_HELP_TIT_1", "表情符號");
define("L_HELP_TIT_2", "訊息格式表示");
define("L_HELP_FMT_1", "在發送的訊息中你可以使用粗體, 斜體和底線的 HTML Tag 來表示 &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; 或 &lt;U&gt; &lt;/U&gt; <BR>例如： 使用　&lt;B&gt;訊息&lt;/B&gt; 將會出現 <B>訊息</B>.");
define("L_HELP_FMT_2", "如果訊息是 Email 或 URL 你不需要特別寫任何tag. 系統將會自己幫助你加上.");
define("L_HELP_TIT_3", "指令");
define("L_HELP_USR", "個使用者");
define("L_HELP_MSG", "message");
define("L_HELP_ROOM", "房間");
define("L_HELP_CMD_0", "[] 中的設定一定要有, {} 中的設定則是可設可不設.");
define("L_HELP_CMD_1", "設定每個視窗顯示的訊息則數, n 在 5 到 100 之間.");
define("L_HELP_CMD_1a", "Set number of messages to show, minimum and default are 5.");
define("L_HELP_CMD_1b", "Reload the message frame and display the n latest messages, minimum and default are 5.");
define("L_HELP_CMD_2a", "修改訊息更新頻率 (單位：秒).<BR>如果未指定 n 或者 n 小於 3, 將在不更新或每 10 秒更新的設定之間來回切換.");
define("L_HELP_CMD_2b", "Modify messages and users lists refresh delay (in seconds).<BR>If n is not specified or less than 3, toggles between no refresh and 10s refresh.");
define("L_HELP_CMD_3", "切換訊息上下排列順序.");
define("L_HELP_CMD_4", "加入別的聊天室, 但你必須被允許加入, 若未存在則自動設立.<BR>私人聊天室 n 為 0, 公開聊天室 n 為 1, 未指定 n 則預設為公開聊天室.");
define("L_HELP_CMD_5", "留下 message 中的訊息後, 就離開聊天室.");
define("L_HELP_CMD_6", "忽略使用者(nick)的訊息.<BR>同時指定 nick 和 - 則取消此項功能, 如果指定 - 而不使用 nick, 則顯示所有使用者的訊息 .<BR>不指定任何選項, 將會顯示所有被你忽略的使用者清單.");
define("L_HELP_CMD_7", "取回前次鍵入內容 (指令, 或訊息).");
define("L_HELP_CMD_8", "切換訊息之前的時間顯示.");
define("L_HELP_CMD_9", "把使用者踢出聊天室, 只有聊天室主人才能下這個指令.");
define("L_HELP_CMD_10", "傳送私人訊息給特定的人 (其他人不會看到訊息).");
define("L_HELP_CMD_11", "顯示使用者的資料.");
define("L_HELP_CMD_12", "修改個人資料.");
define("L_HELP_CMD_13", "切換顯示或不顯示使用者進入和離開聊天室的訊息.");
define("L_HELP_CMD_14", "系統管理員或聊天室主人可以將已註冊的使用者提拔成為聊天室主人.");
define("L_HELP_CMD_15", "Clear the message frame and show only the last 5 messages.");
define("L_HELP_CMD_16", "Save the last n messages (notifications ones excluded) to an HTML file. If n is not specified, all available messages will be taken into account.");
define("L_HELP_CMD_17", "Allow the administrator to send an announce to all users whatever the room they are chatting into.");
define("L_HELP_CMD_18", "Suggest an user chatting in an other room to join the one you are into.");
define("L_HELP_CMD_19", "Allow the moderator(s) of a room or the administrator to \"banish\" an user from the room for a time defined by the administrator.<BR>The later can banish an user chatting in an other room than the one he is into and use the '<B>&nbsp;*&nbsp;</B>' setting to banish \"for ever\" an user from the chat as the whole.");
define("L_HELP_CMD_20", "Describe what you're doing without refer yourself.");

// messages frame
define("L_NO_MSG", "這個聊天室目前沒有任何訊息 ...");
define("L_TODAY_DWN", "The messages that have been sent today start below");
define("L_TODAY_UP", "The messages that have been sent today start above");

// message colors
$TextColors = array(	"黑" => "#000000",
				"紅" => "#FF0000",
				"綠" => "#009900",
				"藍" => "#0000FF",
				"紫" => "#9900FF",
				"深紅" => "#990000",
				"深綠" => "#006600",
				"深藍" => "#000099",
				"咖啡" => "#996633",
				"藍綠" => "#006699",
				"粉紅" => "#FF6600");

//ignored popup
define("L_IGNOR_TIT", "忽略");
define("L_IGNOR_NON", "沒有被忽略的使用者");

// whois popup
define("L_WHOIS_ADMIN", "系統管理員");
define("L_WHOIS_MODER", "聊天室主人");
define("L_WHOIS_USER", "一般使用者");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s enters this room");
define("L_EXIT_ROM", "%s exit this room");
?>