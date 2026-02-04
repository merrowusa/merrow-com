<?php
// File : japanese.lang.php3
// Translation by Yosuke Hamamoto <yosuke@key-net.ne.jp>

// extra header for charset
$Charset = "x-euc-jp";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "チャットの説明");

define("L_WEL_1", "メッセージは");
define("L_WEL_2", "時間後に削除されます。ユーザーは");
define("L_WEL_3", "分間発言が無いと削除されます。");

define("L_CUR_1", "現在チャットに参加している人数：");
define("L_CUR_2", "");
define("L_CUR_3", "ユーザーは、チャットルームにいます。");
define("L_CUR_4", "ユーザーは、プライベートルームにいます。");

define("L_SET_1", "ユーザー設定");
define("L_SET_2", "あなたの名前");
define("L_SET_3", "メッセージ表示行数");
define("L_SET_4", "自動更新時間");
define("L_SET_5", "部屋選択");
define("L_SET_6", "公共の部屋");
define("L_SET_7", "部屋を選択して下さい");
define("L_SET_8", "ユーザーが作った部屋");
define("L_SET_9", "あなたの部屋を作る");
define("L_SET_10", "オープン");
define("L_SET_11", "プライベート");
define("L_SET_12", "部屋");
define("L_SET_13", "チャットに");
define("L_SET_14", "参加");

define("L_SRC", "は、無料です。");

define("L_SECS", "秒");
define("L_MIN", "分");
define("L_MINS", "分");

// registration stuff:
define("L_REG_1", "パスワード");
define("L_REG_1r", "(登録していない人は不要)");
define("L_REG_2", "アカウント編集");
define("L_REG_3", "登録する");
define("L_REG_4", "プロフィールを変更する");
define("L_REG_5", "ユーザー削除");
define("L_REG_6", "ユーザー登録");
define("L_REG_7", "パスワード");
define("L_REG_8", "メールアドレス");
define("L_REG_9", "登録が完了しました");
define("L_REG_10", "戻る");
define("L_REG_11", "編集しています");
define("L_REG_12", "ユーザーの情報を変更しています");
define("L_REG_13", "ユーザーを削除しています");
define("L_REG_14", "ログイン");
define("L_REG_15", "ログイン");
define("L_REG_16", "変更");
define("L_REG_17", "ユーザー情報の変更が更新されました");
define("L_REG_18", "あなたは、モデレーターから追い出されました");
define("L_REG_19", "本当に削除してもいいですか？");
define("L_REG_20", "はい");
define("L_REG_21", "ユーザーの削除に成功しました");
define("L_REG_22", "いいえ");
define("L_REG_25", "閉じる");
define("L_REG_30", "名");
define("L_REG_31", "姓");
define("L_REG_32", "HP");
define("L_REG_33", "メールアドレスを公開する");
define("L_REG_34", "ユーザー情報を変更中・・・");
define("L_REG_35", "管理モード");
define("L_REG_36", "使用言語");
define("L_REG_37", "<span class=\"error\">*</span>の項目は必ず入力してください");
define("L_REG_39", "あなたがいた部屋は管理者により削除されました");
define("L_REG_45", "性別");
define("L_REG_46", "男");
define("L_REG_47", "女");

// e-mail validation stuff
define("L_EMAIL_VAL_1", "チャットに入るための設定");
define("L_EMAIL_VAL_2", "チャットにようこそ！");
define("L_EMAIL_VAL_Err", "Internal error です。 管理者(<a href=\"mailto:%s\">%s</a>)に連絡してください");
define("L_EMAIL_VAL_Done", "パスワードは、貴方のメールアドレスに送信されました");

// admin stuff
define("L_ADM_1", "%s は、もうモデレーターではありません");
define("L_ADM_2", "貴方は、もうチャット登録者ではありません");

//error messages
define("L_ERR_USR_1", "その名前（ハンドル名）はすでに誰かが使っています");
define("L_ERR_USR_2", "名前（ハンドル名）を記入して下さい");
define("L_ERR_USR_3", "指定されたユーザー名は既に登録されています。別のユーザー名を指定してください。");
define("L_ERR_USR_4", "パスワードエラー");
define("L_ERR_USR_5", "ユーザー名を入力してください");
define("L_ERR_USR_6", "パスワードを入力してください");
define("L_ERR_USR_7", "メールアドレスを入力してください");
define("L_ERR_USR_8", "メールアドレスの形式が一致しません。確認してください。");
define("L_ERR_USR_9", "このユーザー名は既に登録されています");
define("L_ERR_USR_10", "ユーザー名とパスワードが一致しません");
define("L_ERR_USR_11", "管理者の権限が必要です");
define("L_ERR_USR_12", "管理者は削除することが出来ません");
define("L_ERR_USR_13", "あなたの部屋を作るためには、登録していないと出来ません");
define("L_ERR_USR_14", "チャットをするには、必ず登録が必要です");
define("L_ERR_USR_15", "あなたの名前を正確に入力してください");
define("L_ERR_USR_16", "ユーザー名には、スペースやコンマ、またバックスペース(\\)は含めません");
define("L_ERR_USR_17", "この部屋は存在しません。また、貴方には部屋を作る権限がありません。");
define("L_ERR_USR_18", "禁止用語がユーザー名に発見されました");
define("L_ERR_USR_19", "２つの部屋に同時に居る事は出来ません");
define("L_ERR_USR_20", "あなたはチャットもしくは１つの部屋より追放されました");
define("L_ERR_ROM_1", "部屋の名前にはコンマやバックスラッシュ (\\)は含めません");
define("L_ERR_ROM_2", "禁止用語が部屋名に発見されました");
define("L_ERR_ROM_3", "この部屋の名前は、公共の場で公開されています");
define("L_ERR_ROM_4", "無効な部屋名です");

// users frame or popup
define("L_EXIT", "退出");
define("L_DETACH", "外す");
define("L_EXPCOL_ALL", "展開/収縮します");
define("L_CONN_STATE", "接続状況");
define("L_CHAT", "チャット");
define("L_USER", "人");
define("L_USERS", "人");
define("L_NO_USER", "０人");
define("L_ROOM", "部屋");
define("L_ROOMS", "部屋");
define("L_EXPCOL", "部屋を展開/収縮します");
define("L_BEEP", "ユーザーが新しく入った時にビープ音を鳴らす/鳴らさない");
define("L_PROFILE", "プロフィールを表示する");
define("L_NO_PROFILE", "No profile");

// input frame
define("L_HLP", "ヘルプ");
define("L_BAD_CMD", "有効なコマンド名ではありません");
define("L_ADMIN", "%s は既に管理者です");
define("L_IS_MODERATOR", "%s は既にモデレーターです");
define("L_NO_MODERATOR", "モデレーターのみがこのコマンドを使用できます");
define("L_MODERATOR", "%s はこの部屋のモデレーターとして設定されました");
define("L_NONEXIST_USER", "%s は、現在指定された部屋には居ません");
define("L_NONREG_USER", "%s は、登録されたユーザーではありません");
define("L_NONREG_USER_IP", "ユーザーのIPアドレスは、 %s です");
define("L_NO_KICKED", "ユーザー %s は、管理者かモデレーターであるため、追放できません");
define("L_KICKED", "ユーザー %s は、追放されました");
define("L_NO_BANISHED", "ユーザー %s は、管理者かモデレーターであるため、追放できません");
define("L_BANISHED", "ユーザー %s は、追放されました");
define("L_SVR_TIME", "サーバー時刻: ");
define("L_NO_SAVE", "保存するメッセージがありません");
define("L_NO_ADMIN", "管理者のみがこのコマンドを使用できます");
define("L_ANNOUNCE", "アナウンス");
define("L_INVITE", "%s があなたを <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a> に紹介しています.");
define("L_INVITE_REG", " この部屋に入るためには、登録が必要です");
define("L_INVITE_DONE", "招待文は、%s に送信されました");
define("L_OK", "送信");

// help popup
define("L_HELP_TIT_1", "顔");
define("L_HELP_TIT_2", "テキストを編集しています・・・");
define("L_HELP_FMT_1", "&lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; または &lt;U&gt; &lt;/U&gt; を使用することによって、太字、斜体、下線などを文字に付けることも可能です。<BR>例えば、, &lt;B&gt;テスト&lt;/B&gt; では <B>テスト</B> の様になります。");
define("L_HELP_FMT_2", "ホームページアドレスには自動でリンクが付きます(タグは不要です)");
define("L_HELP_TIT_3", "コマンド");
define("L_HELP_USR", "ユーザー");
define("L_HELP_MSG", "メッセージ");
define("L_HELP_ROOM", "部屋");
define("L_HELP_CMD_0", "{} は必須の設定、[] はオプションを表します。");
define("L_HELP_CMD_1a", "表示される行を設定します。最低は５です。");
define("L_HELP_CMD_1b", "フレームを更新して表示するメッセージの数です。最低は５です。");
define("L_HELP_CMD_2a", "チャットの更新時間を設定します。<BR>指定されていないか、または３秒以内に設定された場合は、１０秒間隔で更新します。");
define("L_HELP_CMD_2b", "ユーザーのリストを更新する時間を設定します。<BR>指定されていないか、または３秒以内に設定された場合は、１０秒間隔で更新します。");
define("L_HELP_CMD_3", "メッセージのリストを逆にします。");
define("L_HELP_CMD_4", "他の部屋に入ります。また、存在しない部屋名が指定された場合は、権限がある場合に限り、その部屋が作成されます。<BR>0 はプライベートチャットを、 1 は公共なチャットを指します。(初期設定は１です。)");
define("L_HELP_CMD_5", "指定された文のメッセージを表示した後に、チャットルームを去ります。");
define("L_HELP_CMD_6", "nick が指定されている場合は、そのユーザーからのメッセージを表示しません。<BR>解除も同じ方法で行います。 <BR>無視をしているユーザーのリストが表示されます。");
define("L_HELP_CMD_7", "前回打ったメッセージかコマンドを呼び出します。");
define("L_HELP_CMD_8", "メッセージの前に時間を表示/隠します。");
define("L_HELP_CMD_9", "指定されたユーザーを追い出します。モデレーターのみがこのコマンドを使用できます。");
define("L_HELP_CMD_10", "プライベートメッセージを送信します。(他の人はこのメッセージを見られません)");
define("L_HELP_CMD_11", "指定されたユーザの情報を表示します。");
define("L_HELP_CMD_12", "ユーザーの情報を変更します。");
define("L_HELP_CMD_13", "部屋に入った時に表示されるメッセージを表示します。");
define("L_HELP_CMD_14", "現在の管理者かモデレーターに、その他に登録されているユーザーをモデレータにさせることを許します。");
define("L_HELP_CMD_15", "メッセージを消去して、最後の５つのメッセージを表示します。");
define("L_HELP_CMD_16", "指定された分のメッセージ数だけをHTMLに保存することが可能です。また、指定されていない場合は、全てのメッセージを保存します。");
define("L_HELP_CMD_17", "管理者がアナウンスをすることを許します。");
define("L_HELP_CMD_18", "他のユーザーを貴方がいるチャットに招待します。");
define("L_HELP_CMD_19", "管理者かモデレーターに指定された時間だけユーザーを追放することを許します。");
define("L_HELP_CMD_20", "貴方が何をしていたかを表します。");

// messages frame
define("L_NO_MSG", "メッセージはありません");
define("L_TODAY_DWN", "今日話されたメッセージは下記から始まります");
define("L_TODAY_UP", "今日話されたメッセージは上記から始まります");

// message colors
$TextColors = array(	"黒" => "#000000",
						"赤" => "#FF0000",
						"緑" => "#009900",
						"青" => "#0000FF",
						"紫" => "#9900FF",
						"朱色" => "#990000",
						"深緑" => "#006600",
						"紺色" => "#000099",
						"茶" => "#996633",
						"水" => "#006699",
						"橙" => "#FF6600");

// ignored popup
define("L_IGNOR_TIT", "無視");
define("L_IGNOR_NON", "無視リストには誰も入っていません");

// whois popup
define("L_WHOIS_ADMIN", "管理者");
define("L_WHOIS_MODER", "モデレーター");
define("L_WHOIS_USER", "ユーザー");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s が入室しました。");
define("L_EXIT_ROM", "%s が退室しました。");
?>