<?php
// File: korean.lang.php3
// Translation by Hongki Lee <genius@mail.chonga.pe.kr> & TaeHwan Bae <bth1202@hanmail.net>

// extra header for charset
$Charset = "euc-kr";

// medium font size in pt.
$FontSize = 10;

// welcome page
define("L_TUTORIAL", "사용자 도움말");

define("L_WEL_1", "대화 내용은 ");
define("L_WEL_2", "시간 후에, 사용자이름은");
define("L_WEL_3", "분 후에 지워집니다.");

define("L_CUR_1", "현재");
define("L_CUR_2", "가 채팅중입니다.");
define("L_CUR_3", "명의 사용자가 현재 대화방에 있습니다.");
define("L_CUR_4", "명의 사용자가 비공개 대화방에 있습니다.");

define("L_SET_1", "선택하세요...");
define("L_SET_2", "사용자명");
define("L_SET_3", "몇 라인까지 화면에 표시할 것인지..");
define("L_SET_4", "각 업데이트 사이에는 타임아웃이 있습니다.");
define("L_SET_5", "대화방을 선택..");
define("L_SET_6", "기본 대화방");
define("L_SET_7", "선택하세요.");
define("L_SET_8", "사용자가 만든 공개 대화방 목록");
define("L_SET_9", "대화방 유형");
define("L_SET_10", "공개");
define("L_SET_11", "비공개");
define("L_SET_12", "대화방 이름");
define("L_SET_13", "");
define("L_SET_14", "대화방 참여");

define("L_SRC", "은 다음동안 자유롭게 사용가능합니다.:");

define("L_SECS", "초");
define("L_MIN", "분");
define("L_MINS", "분");

// registration stuff:
define("L_REG_1", "비밀번호");
define("L_REG_1r", "(등록 사용자인 경우만 사용)");
define("L_REG_2", "사용자 등록/정보수정");
define("L_REG_3", "등록");
define("L_REG_4", "사용자 정보 수정");
define("L_REG_5", "사용자 삭제");
define("L_REG_6", "사용자 등록");
define("L_REG_7", "비밀번호");
define("L_REG_8", "email주소");
define("L_REG_9", "등록에 성공했습니다.");
define("L_REG_10", "뒤로");
define("L_REG_11", "수정");
define("L_REG_12", "사용자 정보를 변경하고 있습니다.");
define("L_REG_13", "사용자를 삭제하고 있습니다.");
define("L_REG_14", "로그인");
define("L_REG_15", "로그인");
define("L_REG_16", "변경");
define("L_REG_17", "사용자 정보가 변경되었습니다.");
define("L_REG_18", "방장에 의해 대화방을 쫓겨났습니다.");
define("L_REG_19", "정말 삭제하시겠습니까?");
define("L_REG_20", "예");
define("L_REG_21", "성공적으로 삭제됨");
define("L_REG_22", "아니요");
define("L_REG_25", "닫기");
define("L_REG_30", "이름");
define("L_REG_31", "성");
define("L_REG_32", "홈페이지");
define("L_REG_33", "/whois명령에 email주소 공개");
define("L_REG_34", "사용자 정보 수정");
define("L_REG_35", "관리");
define("L_REG_36", "모국어");
define("L_REG_37", "<span class=\"error\">*</span>로 표시된 부분은 반드시 채워주십시오.");
define("L_REG_39", "관리자에의해 대화방이 제거되었습니다.");
define("L_REG_45", "성별");
define("L_REG_46", "남자");
define("L_REG_47", "여자");

// e-mail validation stuff
define("L_EMAIL_VAL_1", "대화에 설정이 반영되었습니다.");
define("L_EMAIL_VAL_2", "채팅서버에 오신 것을 환영합니다.");
define("L_EMAIL_VAL_Err", "내부 오류(Internal Error)입니다. <a href=\"mailto:%s\">%s</a>로 연락을 주십시오.");
define("L_EMAIL_VAL_Done", "패스워드가 지정한 e-mail 주소로 발송되었습니다.");

// admin stuff
define("L_ADM_1", "%s님은 더이상 이 대화방의 방장이 아닙니다.");
define("L_ADM_2", "더이상 등록된 사용자가 아닙니다.");

// error messages
define("L_ERR_USR_1", "사용자는 이미 사용중입니다.");
define("L_ERR_USR_2", "사용자명을 선택해야합니다.");
define("L_ERR_USR_3", "이 사용자명은 등록된 상태입니다. 다른 것을 선택해주십시오.");
define("L_ERR_USR_4", "패스워드를 좀더 복잡하게 만드세요.");
define("L_ERR_USR_5", "사용자명을 입력해주십시오.");
define("L_ERR_USR_6", "비밀번호를 입력해주십시오.");
define("L_ERR_USR_7", "email주소를 입력해주십시오.");
define("L_ERR_USR_8", "올바른 email주소를 넣어주십시오.");
define("L_ERR_USR_9", "이 사용자명은 이미 등록되어있습니다.");
define("L_ERR_USR_10", "올바르지 못한 사용자 명이나 비밀번호입니다.");
define("L_ERR_USR_11", "관리자 권한입니다.");
define("L_ERR_USR_12", "당신은 관리자이므로 삭제될 수 없습니다.");
define("L_ERR_USR_13", "방을 만들기 위해서는 등록을 먼저 하셔야합니다.");
define("L_ERR_USR_14", "대화를 하시기전에 사용자 등록을 먼저 하셔야합니다.");
define("L_ERR_USR_15", "이름을 모두 기입하셔야합니다.");
define("L_ERR_USR_16", "사용자명에는 공백이나 컴마, 그리고 역슬래쉬가 들어가서는 안됩니다.");
define("L_ERR_USR_17", "이 대화방은 더이상 존재하지 않습니다. 새로 만들 수 없습니다.");
define("L_ERR_USR_18", "사용자 이름에 Banished word가 존재합니다.");
define("L_ERR_USR_19", "동시에 하나 이상의 대화방에 들어갈 수 없습니다.");
define("L_ERR_USR_20", "대화방으로부터 사용제한이 된 상태입니다.");
define("L_ERR_ROM_1", "방이름에는 공백이나 컴마(,) 그리고  역슬래쉬(\)가 들어가서는 안됩니다.");
define("L_ERR_ROM_2", "대화방이름에 사용제한이 된 단어를 쓰셨습니다.");
define("L_ERR_ROM_3", "이 대화방은 공개 상태로 존재합니다.");
define("L_ERR_ROM_4", "잘못된 대화방이름.");

// users frame or popup
define("L_EXIT", "나가기");
define("L_DETACH", "창띄우기");
define("L_EXPCOL_ALL", "모두 확장/축소");
define("L_CONN_STATE", "접속 상태");
define("L_CHAT", "대화방");
define("L_USER", "명의 사용자");
define("L_USERS", "명의 사용자");
define("L_NO_USER", "아무도없음");
define("L_ROOM", "대화방");
define("L_ROOMS", "대화방");
define("L_EXPCOL", "대화방 확장/축소");
define("L_BEEP", "사용자가 들어오면 비프음 On/Off");
define("L_PROFILE", "사용자 정보 표시");
define("L_NO_PROFILE", "No profile");

// input frame
define("L_HLP", "도움말");
define("L_BAD_CMD", "명령어가 틀렸습니다.");
define("L_ADMIN", "%s님은 이미 관리자입니다!");
define("L_IS_MODERATOR", "%s님은 이미 방장입니다!");
define("L_NO_MODERATOR", "방장만이 사용할 수 있는 명령입니다.");
define("L_MODERATOR", "%s님은 지금부터 이 대화방의 방장입니다.");
define("L_NONEXIST_USER", "%s님은 현재 이 방에 없습니다.");
define("L_NONREG_USER", "%s님은 등록되지 않았습니다.");
define("L_NONREG_USER_IP", "사용자의 IP 는: %s.");
define("L_NO_KICKED", "%s님은 방장이거나 관리자이므로 추방할 수 없습니다.");
define("L_KICKED", "%s님이 추방되었습니다.");
define("L_NO_BANISHED", "%s님은 방장이거나 관리자이므로 사용제한을 설정할 수 없습니다.");
define("L_BANISHED", "%s님이 사용제한이 되었습니다.");
define("L_SVR_TIME", "서버 시간: ");
define("L_NO_SAVE", "저장할 메세지가 없습니다!");
define("L_NO_ADMIN", "관리자에게만 주어진 명령입니다.");
define("L_ANNOUNCE", "알림");
define("L_INVITE", "%s님이 <a href=\"#\" onClick=\"window.parent.runCmd('%s','%s')\">%s</a> 방에서 당신을 초청했습니다.");
define("L_INVITE_REG", " 이방에 들어가려면 사용자등록이 되어있어야 합니다.");
define("L_INVITE_DONE", "%s님을 초청했습니다.");
define("L_OK", "보내기");

// help popup
define("L_HELP_TIT_1", "감정표시(웃는 그림)");
define("L_HELP_TIT_2", "대화 꾸미기");
define("L_HELP_FMT_1", "&lt;B&gt; &lt;/B&gt;, &lt;I&gt; &lt;/I&gt; or &lt;U&gt; &lt;/U&gt; 태그들을 이용해 굵은글씨, 기울임, 밑줄을 만들 수 있습니다. .<BR>예를들면, &lt;B&gt;안녕하세요?&lt;/B&gt;는 <B>안녕하세요? </B>로 표시됩니다.");
define("L_HELP_FMT_2", "하이퍼링크를 메세지에 추가하고 싶으면 별다른 태그없이 자동으로 URL이나 email주소를 해석하여 링크를 만들어 줍니다.");
define("L_HELP_TIT_3", "명령들");
define("L_HELP_USR", "사용자");
define("L_HELP_MSG", "메세지");
define("L_HELP_ROOM", "방");
define("L_HELP_CMD_0", "{}는 반드시 필요한 설정이고,  []는 선택적인 설정입니다. ");
define("L_HELP_CMD_1a", "화면에 표시될 메세지의 줄 수를 설정합니다. 최소 5이상입니다.");
define("L_HELP_CMD_1b", "대화방 화면을 갱신하고, n개의 최근 메세지를 표시해줍니다. n의 최소값은 5입니다.");
define("L_HELP_CMD_2a", "초단위로 화면을 갱신할 비율을 설정합니다.<BR>만약에 3이하거나 설정값이 없으면 화면 갱신을 하지 않거나 10초 간격으로 갱신하도록 토글합니다.");
define("L_HELP_CMD_2b", "메세지와 사용자 목록의 갱신 시간을 변경합니다. 시간을 지정하지 않거나 3보다 작으면 갱신을 하지 않거나 10초의 갱신시간으로 토글됩니다.");
define("L_HELP_CMD_3", "메세지 출력 순서를 반대로 합니다.");
define("L_HELP_CMD_4", "다른 대화방에 참여합니다., 권한이 있고 대화방이 존재하지 않으면 생성하게됩니다.<BR>n이 0이면 비공개, 1이면 공개입니다. 지정하지 않으면 공개입니다.");
define("L_HELP_CMD_5", "선택한 메세지를 보낸후 대화방을 떠납니다.");
define("L_HELP_CMD_6", "대화명이 지정된 경우, 사용자의 메세지를 수신거부합니다.<BR>해제하려면 대화명과 -를 함께 지정하면 됩니다. 대화명을 지정하지 않고 -를 지정하면 수신거부자를 모두 풀어줍니다.<BR>옵션을 지정하지 않으면 수신거부자 목록을 창을 띄워 보여줍니다.");
define("L_HELP_CMD_7", "최근에 입력한 메세지를 다시 부릅니다.");
define("L_HELP_CMD_8", "메세지가 출력된 후 나타났다 사라지는 시간을 설정합니다.");
define("L_HELP_CMD_9", "방장에게 주어진 기능으로, 선택한 사용자를 대화방으로부터 추방합니다.");
define("L_HELP_CMD_10", "(지정한 사용자에게) 귓속말을 보냅니다.");
define("L_HELP_CMD_11", "지정한 사용자의 정보를 보여줍니다.");
define("L_HELP_CMD_12", "사용자의 정보를 창을 띄워 보여줍니다.");
define("L_HELP_CMD_13", "현재 대화방을 떠나는 사용자에 대해 알려주는 기능을 토글합니다.");
define("L_HELP_CMD_14", "현재 대화방의 방장이나 관리자에게만 주어진 기능으로, 같은 대화방에 있는 등록된 다른 사용자에게 방장 권한을 부여합니다.");
define("L_HELP_CMD_15", "대화창의 메세지를 지우고 최근 5개 메세지만 보여줍니다.");
define("L_HELP_CMD_16", "공지 메세지를 제외한 최근 n개의 메세지를 HTML파일로 저장합니다. n 값을 지정하지 않으면 저장가능한 메세지가 저장됩니다.");
define("L_HELP_CMD_17", "관리자에게만 주어진 기능으로 전체 대화방 사용자에게 메세지를 보냅니다.");
define("L_HELP_CMD_18", "다른 대화방의 사용자를 초청합니다.");
define("L_HELP_CMD_19", "관리자가 지정한 시간에 방장이나 관리자가 대화방으로부터 사용자를 사용제한 설정할 수 있도록 합니다. 나중에는 사용자가 들어가 그가 들어가있는 대화방보다는 다른 대화방에서의 대화를 하지 못하도록 그 사용자를 사용제시킬 수 있으며, '<B>&nbsp;*&nbsp;</B>'을 설정해서, 모든 대화방에 대해 영원히 사용제한을 설정을 할 수도 있습니다.");
define("L_HELP_CMD_20", "Describe what you're doing without refer yourself.");

// messages frame
define("L_NO_MSG", "현재 아무런 메세지가 없습니다.");
define("L_TODAY_DWN", "오늘 보내진 메세지가 아래에 시작됩니다");
define("L_TODAY_UP", "오는 보내진 메세지가 위에 시작됩니다");

// message colors
$TextColors = array(	"Black" => "#000000",
					"Red" => "#FF0000",
					"Green" => "#009900",
					"Blue" => "#0000FF",
					"Purple" => "#990099",
					"Dark red" => "#990000",
					"Dark green" => "#006600",
					"Dark blue" => "#000099",
					"Maroon" => "#996633",
					"Aqua blue" => "#006699",
					"Carrot" => "#F5671B");

// ignored popup
define("L_IGNOR_TIT", "수신거부");
define("L_IGNOR_NON", "수신거부한 유저 없음.");

// whois popup
define("L_WHOIS_ADMIN", "관리자");
define("L_WHOIS_MODER", "방장");
define("L_WHOIS_USER", "사용자");

// Notification messages of user entrance/exit
define("L_ENTER_ROM", "%s 님이 입장하셨습니다.");
define("L_EXIT_ROM", "%s 님이 나가셨습니다.");
?>