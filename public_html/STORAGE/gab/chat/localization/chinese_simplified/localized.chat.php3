<?php
// File : chinese_simplified.lang.php3
// Translation by BoyStudio <zrr@371.net and kde@371.net> and Che Dong <chedong@yeah.net>

// extra header for charset
$Charset = "gb2312";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "Tutorial");

define("L_WEL_1", "信息每");
define("L_WEL_2", "小时清理一次, 用户名每");
define("L_WEL_3", "分钟清理一次...");

define("L_CUR_1", "这里有");
define("L_CUR_2", "在聊天.");
define("L_CUR_3", "用户在公共频道中");
define("L_CUR_4", "用户在私有频道中");

define("L_SET_1", "请设置参数 ...");
define("L_SET_2", "设置用户名");
define("L_SET_3", "每屏显示信息");
define("L_SET_4", "刷新频率");
define("L_SET_5", "请选择频道 ...");
define("L_SET_6", "缺省频道");
define("L_SET_7", "请选择 ...");
define("L_SET_8", "用户所建公共频道");
define("L_SET_9", "建立自己的频道");
define("L_SET_10", "公共");
define("L_SET_11", "私有");
define("L_SET_12", "频道");
define("L_SET_13", "那么,请");
define("L_SET_14", "进入");

define("L_SRC", "的网页连接");

define("L_SECS", "秒");
define("L_MIN", "分钟");
define("L_MINS", "分钟");

// registration stuff:
define("L_REG_1", "your password");
define("L_REG_1r", "(only when you are registered)");
define("L_REG_2", "Account management");
define("L_REG_3", "Register");
define("L_REG_4", "Edit your profile");
define("L_REG_5", "Delete user");
define("L_REG_6", "User registration");
define("L_REG_7", "your password");
define("L_REG_8", "your e-mail");
define("L_REG_9", "You have been successfully registered.");
define("L_REG_10", "Back");
define("L_REG_11", "Editing");
define("L_REG_12", "Modifying user's informations");
define("L_REG_13", "Deleting user");
define("L_REG_14", "Login");
define("L_REG_15", "Log In");
define("L_REG_16", "Change");
define("L_REG_17", "Your informations were succesfully modified.");
define("L_REG_18", "You have been kicked away from room by moderator.");
define("L_REG_19", "Do you really want to be removed ?");
define("L_REG_20", "Yes");
define("L_REG_21", "You were successfully removed.");
define("L_REG_22", "No");
define("L_REG_25", "Close");
define("L_REG_30", "firstname");
define("L_REG_31", "lastname");
define("L_REG_32", "WEB");
define("L_REG_33", "show e-mail by /whois command");
define("L_REG_34", "Editing user profile");
define("L_REG_35", "Administration");
define("L_REG_36", "spoken languages");
define("L_REG_37", "Fields with a <span class=\"error\">*</span> must be completed.");
define("L_REG_39", "The room you were in have been removed by the administrator.");
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

// error messages
define("L_ERR_USR_1", "这个用户名已经被使用. 请另外选择一个.");
define("L_ERR_USR_2", "你必须指定用户名.");
define("L_ERR_USR_3", "This username is registered. Please type your password or chose another username.");
define("L_ERR_USR_4", "You typed a wrong password.");
define("L_ERR_USR_5", "You must type your username.");
define("L_ERR_USR_6", "You must type your password.");
define("L_ERR_USR_7", "You must type your e-mail.");
define("L_ERR_USR_8", "You must type a correct e-mail address.");
define("L_ERR_USR_9", "This username is already in use.");
define("L_ERR_USR_10", "Wrong username or password.");
define("L_ERR_USR_11", "You must be administrator.");
define("L_ERR_USR_12", "You are administrator, so you cannot be removed.");
define("L_ERR_USR_13", "To create your own room you must be registered.");
define("L_ERR_USR_14", "You must be registered before chating.");
define("L_ERR_USR_15", "You must type your full name.");
define("L_ERR_USR_16", "Username cannot contain space, comma or backslash (\\).");
define("L_ERR_USR_17", "This room doesn't exist and you are not allowed to create one.");
define("L_ERR_USR_18", "Banned word found in your username.");
define("L_ERR_USR_19", "You cannot be in more than one room at the same time.");
define("L_ERR_USR_20", "You have been banished from this room or from the chat.");
define("L_ERR_ROM_1", "Room's name cannot contain comma or backslash (\\).");
define("L_ERR_ROM_2", "Banned word found in the room's name you want to create.");
define("L_ERR_ROM_3", "此频道已是公共频道.");
define("L_ERR_ROM_4", "无效频道名.");

// users frame or popup
define("L_EXIT", "退出");
define("L_DETACH", "用户列表");
define("L_EXPCOL_ALL", "展开/缩进 用户名");
define("L_CONN_STATE", "Connection state");
define("L_CHAT", "聊天");
define("L_USER", "个用户");
define("L_USERS", "个用户");
define("L_NO_USER", "没人");
define("L_ROOM", "频道");
define("L_ROOMS", "频道");
define("L_EXPCOL", "展开/收缩 频道名");
define("L_BEEP", "Beep/no beep at user entrance");
define("L_PROFILE", "Display profile");
define("L_NO_PROFILE", "No profile");

// input frame
define("L_HLP", "帮助");
define("L_BAD_CMD", "这个命令不对！");
define("L_ADMIN", "%s is already administrator!");
define("L_IS_MODERATOR", "%s is already moderator!");
define("L_NO_MODERATOR", "Only the moderator of this room can use this command.");
define("L_MODERATOR", "%s is now moderator for this room.");
define("L_NONEXIST_USER", "User %s isn't in the current room.");
define("L_NONREG_USER", "User %s isn't registered.");
define("L_NONREG_USER_IP", "His IP is: %s.");
define("L_NO_KICKED", "User %s is moderator or administrator and can't be kicked away.");
define("L_KICKED", "User %s was successfully kicked away.");
define("L_NO_BANISHED", "User %s is moderator or administrator and can't be banished.");
define("L_BANISHED", "User %s has successfully been banished.");
define("L_SVR_TIME", "Server time: ");
define("L_NO_SAVE", "No message to save!");
define("L_NO_ADMIN", "Only the administrator can use this command.");
define("L_ANNOUNCE", "ANNOUNCE");
define("L_INVITE", "%s suggest you to join her/him into the <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a> room.");
define("L_INVITE_REG", " You have to be registered to enter this room.");
define("L_INVITE_DONE", "Your invitation has been sent to %s.");
define("L_OK", "Send");

// help popup
define("L_HELP_TIT_1", "表情符号");
define("L_HELP_TIT_2", "Text formating for messages");
define("L_HELP_FMT_1", "You can put bolded, italicized or underlined text in messages by encasing the applicable sections of your text with either the &lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; or &lt;U&gt; &lt;/U&gt; tags.<BR>For example, &lt;B&gt;this text&lt;/B&gt; will produce <B>this text</B>.");
define("L_HELP_FMT_2", "To create a hyperlink (for e-mail or URL) in your message, simply type the corresponding address without any tag. The hyperlink will be created automatically.");
define("L_HELP_TIT_3", "可用命令");
define("L_HELP_USR", "个用户");
define("L_HELP_MSG", "message");
define("L_HELP_ROOM", "频道");
define("L_HELP_CMD_0", "{}表示闭填选项，[]为可选选项。");
define("L_HELP_CMD_1", "设置每屏显示的信息数.<BR>n 在 5 到 100 之间.");
define("L_HELP_CMD_1a", "Set number of messages to show, minimum and default are 5.");
define("L_HELP_CMD_1b", "Reload the message frame and display the n latest messages, minimum and default are 5.");
define("L_HELP_CMD_2a", "设置信息刷新的间隔(秒).<BR>如果未指定 n 或 n 小于 3, 等于不做任何改变.");
define("L_HELP_CMD_2b", "Modify messages and users lists refresh delay (in seconds).<BR>If n is not specified or less than 3, toggles between no refresh and 10s refresh.");
define("L_HELP_CMD_3", "设置信息显示的上下顺序.");
define("L_HELP_CMD_4", "进入另一个聊天室（如果您被允许进入），如果不存在则创建<BR>n=0表示私有，1表示公共，如果没有指定，缺省为1");
define("L_HELP_CMD_5", "发出一条信息后离开聊天室.");
define("L_HELP_CMD_6", "屏蔽指定昵称用户的消息。<BR>可以使用“昵称-”取消对其屏蔽，用“-”取消对所有用户的屏蔽。<BR>没有其他选项则显示所有被屏蔽用户的列表。");
define("L_HELP_CMD_7", "重复上次内容（命令或消息）");
define("L_HELP_CMD_8", "在消息前 显示/隐藏 时间");
define("L_HELP_CMD_9", "Kick away user from the chat. This command can only be used by a moderator.");
define("L_HELP_CMD_10", "Send a private message to the specified user (other users won't see it).");
define("L_HELP_CMD_11", "Show informations about specified user.");
define("L_HELP_CMD_12", "Popup window for editing user's profile.");
define("L_HELP_CMD_13", "Toggles notifications of user entrance/exit for the current room.");
define("L_HELP_CMD_14", "Allow the administrator or moderator(s) of the curent room to promote as moderator for the same room an other registered user.");
define("L_HELP_CMD_15", "Clear the message frame and show only the last 5 messages.");
define("L_HELP_CMD_16", "Save the last n messages (notifications ones excluded) to an HTML file. If n is not specified, all available messages will be taken into account.");
define("L_HELP_CMD_17", "Allow the administrator to send an announce to all users whatever the room they are chatting into.");
define("L_HELP_CMD_18", "Suggest an user chatting in an other room to join the one you are into.");
define("L_HELP_CMD_19", "Allow the moderator(s) of a room or the administrator to \"banish\" an user from the room for a time defined by the administrator.<BR>The later can banish an user chatting in an other room than the one he is into and use the '<B>&nbsp;*&nbsp;</B>' setting to banish \"for ever\" an user from the chat as the whole.");
define("L_HELP_CMD_20", "Describe what you're doing without refer yourself.");

//message frame
define("L_NO_MSG", "暂无消息");
define("L_TODAY_DWN", "The messages that have been sent today start below");
define("L_TODAY_UP", "The messages that have been sent today start above");

// message colors
$TextColors = array(	"黑" => "#000000",
				"红" => "#FF0000",
				"绿" => "#009900",
				"蓝" => "#0000FF",
				"紫" => "#9900FF",
				"深红" => "#990000",
				"深绿" => "#006600",
				"深蓝" => "#000099",
				"咖啡" => "#996633",
				"蓝绿" => "#006699",
				"粉红" => "#FF6600");

//ignored popup
define("L_IGNOR_TIT", "屏蔽用户");
define("L_IGNOR_NON", "不屏蔽用户");

// whois popup
define("L_WHOIS_ADMIN", "Administrator");
define("L_WHOIS_MODER", "Moderator");
define("L_WHOIS_USER", "User");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s enters this room");
define("L_EXIT_ROM", "%s exit this room");
?>