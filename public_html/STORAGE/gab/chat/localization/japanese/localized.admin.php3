<?php
// File : japanese.admin.php3
// Translation by Yosuke Hamamoto <yosuke@key-net.ne.jp>

// extra header for charset
$Charset = "x-euc-jp";

// medium font size in pt.
$FontSize = 10;

// Top frame
define("A_MENU_0", "%s の管理モード");
define("A_MENU_1", "登録されたユーザー");
define("A_MENU_2", "追放されたユーザー");
define("A_MENU_3", "部屋を初期化する");
define("A_MENU_4", "メールを送る");

// Frame for registered users
define("A_SHEET1_1", "登録されたユーザーと権限を表示する");
define("A_SHEET1_2", "ユーザー名");
define("A_SHEET1_3", "権限");
define("A_SHEET1_4", "モデレーターである部屋");
define("A_SHEET1_5", "モデレーターである部屋はスペース無しのコンマ(,)で分けられています");
define("A_SHEET1_6", "チェックされたユーザーを削除する");
define("A_SHEET1_7", "変更");
define("A_SHEET1_8", "貴方以外に登録されたユーザーはいません");
define("A_SHEET1_9", "チェックされたユーザーを追放する");
define("A_SHEET1_10", "決定を変更する場合は、追放されたユーザーのページを見てください");
define("A_SHEET1_11", "最後の接続時間");
define("A_USER", "ユーザー");
define("A_MODER", "モデレーター");
define("A_PAGE_CNT", "%s ページ目 (全 %s ページ)");

// Frame for banished users
define("A_SHEET2_1", "追放されたユーザーと心配な部屋のリスト");
define("A_SHEET2_2", "IPアドレス");
define("A_SHEET2_3", "心配な部屋");
define("A_SHEET2_4", "まで");
define("A_SHEET2_5", "永遠");
define("A_SHEET2_6", "部屋はスペースなしでコンマ(,)で区切られています。４つ以上ある場合は、省略されます。");
define("A_SHEET2_7", "チェックの付いたユーザーの追放を解除する");
define("A_SHEET2_8", "追放されたユーザーはいません");

// Frame for cleaning rooms
define("A_SHEET3_1", "現在ある部屋のリスト");
define("A_SHEET3_2", "部屋を初期化するとその部屋の全てのモデレーターは削除されます");
define("A_SHEET3_3", "選択された部屋を初期化する");
define("A_SHEET3_4", "初期化する部屋はありません");

// Frame for sending mails
define("A_SHEET4_0", "'chat/admin/mail4admin.php3'の中にある設定が終わっていません！");
define("A_SHEET4_1", "メールを送信する");
define("A_SHEET4_2", "宛先:");
define("A_SHEET4_3", "全て選択");
define("A_SHEET4_4", "件名:");
define("A_SHEET4_5", "メッセージ:");
define("A_SHEET4_6", "送信を始める");
define("A_SHEET4_7", "全てのメールは送信されました");
define("A_SHEET4_8", "メールを送信している最中に、Internal errorが発生しました");
define("A_SHEET4_9", "アドレス、件名、またはメッセージが入力されていません");
?>