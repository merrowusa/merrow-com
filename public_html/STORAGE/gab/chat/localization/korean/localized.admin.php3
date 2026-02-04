<?php
// File : korean.admin.php3
// Translation by Hongki Lee <genius@mail.chonga.pe.kr> & TaeHwan Bae <bth1202@hanmail.net>

// extra header for charset
$Charset = "euc-kr";

// medium font size in pt.
$FontSize = 10;

// Top frame
define("A_MENU_0", "%s를 위한 관리");
define("A_MENU_1", "등록된 사용자");
define("A_MENU_2", "사용제한된 사용자");
define("A_MENU_3", "대화방정리");
define("A_MENU_4", "이메일보내기");

// Frame for registered users
define("A_SHEET1_1", "등록된 사용자과 권한 목록");
define("A_SHEET1_2", "사용자명");
define("A_SHEET1_3", "권한");
define("A_SHEET1_4", "방장있는 방");
define("A_SHEET1_5", "방장인 방들은 공백없이 컴마(,)로 분리되어있습니다.");
define("A_SHEET1_6", "사용자 삭제");
define("A_SHEET1_7", "변경");
define("A_SHEET1_8", "당신을 제외하고는 등록된 사용자가 없습니다.");
define("A_SHEET1_9", "사용제한");
define("A_SHEET1_10", "사용제한된 사용자 목록에서 확인해보십시오.");  
define("A_SHEET1_11", "마지막 접속");
define("A_USER", "사용자");
define("A_MODER", "방장");
define("A_PAGE_CNT", "%s / %s 쪽");

// Frame for banished users
define("A_SHEET2_1", "사용제한된 사용자와 관계된 대화방");
define("A_SHEET2_2", "IP");
define("A_SHEET2_3", "관계된 대화방");
define("A_SHEET2_4", "까지");
define("A_SHEET2_5", "기간제한없음");
define("A_SHEET2_6", "4보다 작으면 공백없이 (,)로 구분되며,  <B>*&nbsp;</B>' 로 표시하면 모든 대화방을 사용할 수 없습니다.");
define("A_SHEET2_7", "선택된 사용자에 대한 사용제한을 풀어줍니다.");
define("A_SHEET2_8", "사용제한 상태인 사용자가 존재하지 않습니다.");

// Frame for cleaning rooms
define("A_SHEET3_1", "현재 대화방의 목록");
define("A_SHEET3_2", "\"기본이 아닌 대화방\"을 소거하면 해당하는 모든 방장의 권한이 사라집니다.");
define("A_SHEET3_3", "선택된 대화방 삭제");
define("A_SHEET3_4", "정리할 대화방이 없습니다.");

// Frame for sending mails
define("A_SHEET4_0", "'chat/admin/mail4admin.php3' script에 <BR>필요한 변수들을 설정해야 합니다.");
define("A_SHEET4_1", "이메일 보내기");
define("A_SHEET4_2", "받는이:");
define("A_SHEET4_3", "모두 선택");
define("A_SHEET4_4", "제목:");
define("A_SHEET4_5", "내용:");
define("A_SHEET4_6", "보내기");
define("A_SHEET4_7", "모든 이메일이 보내졌습니다.");
define("A_SHEET4_8", "이메일을 보내는 중에 내부오류가 발생했습니다.");
define("A_SHEET4_9", "주소,제목 혹은 내용이 빠졌습니다!");
?>