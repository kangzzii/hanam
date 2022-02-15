<?php
include "include.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>하남 프로젝트</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="//code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="script.js" defer="defer"></script>
</head>
<body>
    <div id="fixed">
        <div class="fixed_box">
            <ul>
                <div class="fixed_boxC">X</div>
                <li><a href="c1.php">
                    <img src="img/quick1.png">
                </a></li>
                <li><a href="c4.php">
                    <img src="img/quick2.png">
                </a></li>
                <li><a href="https://blog.naver.com/holthanam_2030">
                    <img src="img/quick3.png">
                </a></li>
                <li><a href="https://www.facebook.com/holthanam/">
                    <img src="img/quick4.png">
                </a></li>
                <li><a href="https://pf.kakao.com/_UUAxfxl">
                    <img src="img/quick5.png">
                </a></li>
            </ul>
        </div>
        <ul class="fixed_list">
            <li>+<br>More</li>
            <li>^<br>Up</li>
        </ul>
    </div>
    <div id="login_modal">
        <div id="login_wrap">
            <div class="login_title">
             <span class="close_login">X</span>
            </div>
            <div class="login">
                <span class="l1">Login</span>   <div class="signupmove">회원가입하기</div>
                <form name="frm_login" method="post" action="login_ok.php"  >
                    <ul class="login_list">
                        <li>계정</li>
                        <li><input type="text" name="id" placeholder="계정을 입력하세요"
                            class="logintext" required></li>
                        <li>비밀번호</li>
                        <li><input type="password" name="pw" placeholder="비밀번호를 입력하세요"
                            class="logintext" required></li>
                        <li><input type="submit" value="Login" class="login_bt"></li>
                    </ul>
                </form>
            </div>
            <div style="width: 3px;height:400px;background-color: #008dbb;"></div>
            <div class="id_pw">
                <ul class="idpw_tap">
                    <li>계정찾기</li>
                    <li>비밀번호찾기</li>
                </ul>
                <ul class="idpw_content">
                    <li>
                        <form name="frm_id" method="post" action="id_ok.php"  >
                            <ul class="login_list">
                                <li>이름</li>
                                <li><input type="text" name="name" placeholder="이름을 입력하세요"
                                    class="logintext" required></li>
                                <li>비밀번호</li>
                                <li><input type="password" name="pw" placeholder="비밀번호를 입력하세요"
                                    class="logintext" required></li>
                                <li><input type="submit" value="계정찾기" class="login_bt"></li>
                            </ul>
                        </form>
                    </li>
                    <li>
                        <form name="frm_pw" method="post" action="pw_ok.php"  >
                            <ul class="login_list">
                                <li>이름</li>
                                <li><input type="text" name="name" placeholder="이름을 입력하세요"
                                    class="logintext" required></li>
                                <li>계정</li>
                                <li><input type="password" name="id" placeholder="계정을 입력하세요"
                                    class="logintext" required></li>
                                <li><input type="submit" value="비밀번호 찾기" class="login_bt"></li>
                            </ul>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="signup_modal">
        <div id="signup_wrap">
            <div class="login_title" style="width:950px ;">
                 <span class="close_login">X</span>
            </div>
            <div class="singup"style="margin-top:0;">
                <div style="font-size: 2em;font-weight: bold;text-align: center;color: #333;">회원가입</div>
                <form name="frm_signup" method="post" action="signup_ok.php" style="width: 800px;margin-top: 50px;">
                    <ul style="float: left;">
                        <li>계정</li>
                        <li><input type="text" name="id" required placeholder="계정을 입력해주세요" class="logintext"></li>
                        <li>이름</li>
                        <li><input type="text" name="name" required placeholder="이름을 입력해주세요" class="logintext"></li>
                    </ul>
                    <ul style="float: right;">
                        <li>비밀번호</li>
                        <li><input type="password" name="pw" required placeholder="비밀번호를 입력해주세요" class="logintext"></li>
                        <li> 회원가입</li>
                        <li><input type="submit" value="SignUp" class="login_bt"></li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <header>
        <div id="header_top">
            <ul class="header_t">
                <li><a href="#">
                    <div class="header_tImg"><img src="img/top1.png"></div>
                    실버 인력뱅크
                </a></li>
                <li><a href="#">
                    <div class="header_tImg"><img src="img/top2.png"></div>
                    장애아재활치료교육센터
                </a></li>
                <li><a href="#">
                    <div class="header_tImg"><img src="img/top3.png"></div>
                    큰나무교실지역아동센터
                </a></li>
            </ul>
        </div>
        <div id="header_bot">
            <div id="header_bot_wrap">
                <div id="t_logo" onclick="location.href='front.php'">
                    <img src="img/logo.png">
                </div>
                <ul class="menu">
                    <li><a href="a1.php">사업안내</a>
                        <div class="subwrap">
                            <ul class="sub1">
                                <div class="submenu_title">
                                    사업안내
                                </div>
                                <div class="li_wrap">
                                    <li><a href="a1.php">사례관리기능</a></li>
                                    <li><a href="a2.php">서비스제공기능</a></li>
                                    <li><a href="a3.php">지역조직화기능</a></li>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li><a href="b1.php">교육문화사업</a>
                        <div class="subwrap">
                        <ul class="sub2">
                            <div class="submenu_title">
                                교육문화사업
                            </div>
                            <div class="li_wrap">
                                <li><a href="b1.php">교육문화 이용안내</a></li>
                                <li><a href="b2.php">교육문화 프로그램</a></li>
                                <li><a href="https://holthanam.e-ncom.co.kr/main/index.do">프로그램 신청</a></li>
                            </div>
                        </ul>
                        </div>
                    </li>
                    <li><a href="c1.php">후원ㆍ자원봉사</a>
                        <div class="subwrap">
                            <ul class="sub3">
                                <div class="submenu_title">
                                    후원ㆍ자원봉사
                                </div>
                                <div class="li_wrap">
                                <li><a href="c1.php">후원 안내</a></li>
                                <li><a href="c2.php">후원신청</a></li>
                                <li><a href="c3.php">홀트패밀리#</a></li>
                                </div>
                                <div class="li_wrap">
                                <li><a href="c4.php">자원봉사안내</a></li>
                                <li><a href="c5.php">자원봉사신청</a></li>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li><a href="d1.php">소통공간</a>
                        <div class="subwrap">
                            <ul class="sub4">
                                <div class="submenu_title">
                                    소통공간
                                </div>
                                <div class="li_wrap">
                                <li><a href="d1.php">공지사항</a></li>
                                <li><a href="d2.php">채용공고</a></li>
                                <li><a href="d3.php">참여자 모집</a></li>
                                <li><a href="d4.php">복지관소식</a></li>
                                </div>
                                <div class="li_wrap">
                                <li><a href="d5.php">1:1 온라인문의</a></li>
                                <li><a href="d6.php">기관방문 및 대관안내</a></li>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li><a href="e1.php">복지관소개</a>
                        <div class="subwrap">
                            <ul class="sub5">
                                <div class="submenu_title">
                                    복지관소개
                                </div>
                                <div class="li_wrap">
                                <li><a href="e1.php">인사말</a></li>
                                <li><a href="e2.php">미션&비전</a></li>
                                <li><a href="e3.php">법인소개</a></li>
                                <li><a href="e4.php">연혁</a></li>
                                </div>
                                <div class="li_wrap">
                                <li><a href="e5.php">조직도</a></li>
                                <li><a href="e6.php">기관현황</a></li>
                                <li><a href="e8.php">오시는길</a></li>
                                </div>
                            </ul>
                        </div>
                    </li>
                </ul>
                <?php if(!isset($_SESSION["id"])){ ?>
                <div class="searchIcon">
                   <img src="img/login.png">
                </div><?php } else{?>
                <div class="logout" onclick="location.href='logout.php'">
                    <img src="img/logout.png">
                </div>
                <?php }?>
            </div>
        </div>
        <div id="submenu_back"></div>
    </header>
    <div id="space_main">
        <div class="space_main">
            <img src="img/a3.jpg">
        </div>
        <div class="space_mainT" style="font-size: 1.5em;top:35%">
            지역주민들이 지역사회의 문제에 공동체 의식을 가지고<Br> 스스로 참여하고 해결하며
            함께 더불어 살아갈 수 있도록<br> 모임과 활동을 지원합니다
        </div>
    </div>
    <div id="space_content_wrap">
        <div class="space_menu">
            <div class="space_title">
                사업안내<br>
                <span style="font-size:small;">지역조직화기능</span>
            </div>
            <ul class="space_list">
                <li onclick="location.href='a1.php'">사례관리기능</li>
                <li onclick="location.href='a2.php'">서비스제공기능</li>
                <li onclick="location.href='a3.php'">지역조직화기능</li>
            </ul>
        </div>
    </div>
    <div id="a_content">
        <div class="a_title">
            지역조직화기능
        </div>
        <div id="a2_content">
            <ul class="a3_tap">
                <li style="width: 350px;">복지네트워크</li>
                <li style="width: 350px;">주민조직화</li>
                <li style="width: 350px;">자원개발 및 관리</li>
            </ul>
            <ul class="a3_tap2">
                <li>
                    <div class="a2_tap_content" style="margin-top: 40px;">
                        <ul class="a2_tapC" style="display: flex;flex-wrap: wrap;">
                            <li>
                                <div class="a2_box">
                                    <div class="a2_img">
                                        <img src="img/a3_1.jpg">
                                        <div class="a2_text">
                                            사회복지 현장실습
                                        </div>
                                    </div>
                                    <div class="a2_bt">
                                        <a href="#">더 보기</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_box">
                                    <div class="a2_img">
                                        <img src="img/a3_2.jpg">
                                        <div class="a2_text">
                                            지역주민 욕구조사
                                        </div>
                                    </div>
                                    <div class="a2_bt">
                                        더 보기
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="a2_tapM">
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0">
                                            사회복지 현장실습<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            사회복지 및 관련학과 전공 3학년 이상 재학생
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            사회복지관 사업이해, 사업별 실무참여, 프로그램 기획 및 진행에 대한 평가<br>
                                            * 연 2회 / 방학 중
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2941
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0">
                                            지역주민 욕구조사<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            지역주민
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            하남시 지역주민의 욕구 파악 및 복지관 사업방향 수립을 위한 욕구조사
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2942
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                <div class="a2_tap_content" style="margin-top: 40px;">
                    <ul class="a2_tapC" style="display: flex;flex-wrap: wrap;">
                        <li>
                            <div class="a2_box">
                                <div class="a2_img">
                                    <img src="img/a32_1.jpg">
                                    <div class="a2_text" style="line-height: 40px;">
                                        하남이음프로젝트<br>
                                        찾아가는 이동복지관<br>
                                        ‘다(多)잇다’
                                    </div>
                                </div>
                                <div class="a2_bt">
                                    <a href="#">더 보기</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_box">
                                <div class="a2_img">
                                    <img src="img/a32_2.jpg">
                                    <div class="a2_text"style="line-height:40px">
                                        우리동네에서 놀자<br>
                                        "채움놀이터"
                                    </div>
                                </div>
                                <div class="a2_bt">
                                    더 보기
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_box">
                                <div class="a2_img">
                                    <img src="img/a32_3.jpg">
                                    <div class="a2_text"style="line-height:40px">
                                        마을선생님이 알려주는<br>
                                        공동배움터
                                    </div>
                                </div>
                                <div class="a2_bt">
                                    더 보기
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_box">
                                <div class="a2_img">
                                    <img src="img/a32_4.jpg">
                                    <div class="a2_text"style="line-height:40px">
                                        주민교육 및<br>
                                        주민동아리
                                    </div>
                                </div>
                                <div class="a2_bt">
                                    더 보기
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_box">
                                <div class="a2_img">
                                    <img src="img/a32_5.jpg">
                                    <div class="a2_text"style="line-height:40px">
                                        응답하라2030!<br>
                                        서포터즈
                                    </div>
                                </div>
                                <div class="a2_bt">
                                    더 보기
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_box">
                                <div class="a2_img">
                                    <img src="img/a32_6.jpg">
                                    <div class="a2_text"style="line-height:40px">
                                        따뜻함을 나누는 봉사단<br>
                                        '따봉 요리봉사단'
                                    </div>
                                </div>
                                <div class="a2_bt">
                                    더 보기
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_box">
                                <div class="a2_img">
                                    <img src="img/a32_7.jpg">
                                    <div class="a2_text"style="line-height:40px">
                                        따뜻함을 나누는 봉사단<br>
                                        '따봉-네일봉사단'
                                    </div>
                                </div>
                                <div class="a2_bt">
                                    더 보기
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_box">
                                <div class="a2_img">
                                    <img src="img/a32_8.jpg">
                                    <div class="a2_text">
                                        꿈나무 나눔실천교실
                                    </div>
                                </div>
                                <div class="a2_bt">
                                    더 보기
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_box">
                                <div class="a2_img">
                                    <img src="img/a32_9.jpg">
                                    <div class="a2_text">
                                        도담도담 멘토링 봉사단
                                    </div>
                                </div>
                                <div class="a2_bt">
                                    더 보기
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_box">
                                <div class="a2_img">
                                    <img src="img/a32_10.jpg">
                                    <div class="a2_text">
                                        경기먹거리 그냥드림
                                    </div>
                                </div>
                                <div class="a2_bt">
                                    더 보기
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_box">
                                <div class="a2_img">
                                    <img src="img/a32_11.jpg">
                                    <div class="a2_text">
                                        해피프라이데이
                                    </div>
                                </div>
                                <div class="a2_bt">
                                    더 보기
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_box">
                                <div class="a2_img">
                                    <img src="img/a32_12.jpg">
                                    <div class="a2_text">
                                        희망나눔바자회
                                    </div>
                                </div>
                                <div class="a2_bt">
                                    더 보기
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="a2_tapM">
                        <li>
                            <div class="a2_modal">
                                <div class="a2_Mcontent">
                                    <div class="a_boxBtitle" style="left:0;height: 80px;">
                                        하남이음프로젝트<br>
                                        찾아가는 이동복지관-‘다(多)잇다’<div class="a2_Mclose">&#9747;</div>
                                    </div>
                                    <br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                    <div style="padding-left: 30px;">
                                        지역주민
                                    </div><br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                    <div style="padding-left: 30px;">
                                        지역 현장으로 찾아가 체험 및 나눔 활동, 주민교육 등 진행<br>
                                                * 연 2회
                                    </div><br>
                                   
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                    <div style="padding-left: 30px;">
                                        031-790-2943
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_modal">
                                <div class="a2_Mcontent">
                                    <div class="a_boxBtitle" style="left:0;height: 80px;">
                                        우리 동네에서 놀자!<br> ‘채움놀이터’’<div class="a2_Mclose">&#9747;</div>
                                    </div>
                                    <br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                    <div style="padding-left: 30px;">
                                        지역주민
                                    </div><br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                    <div style="padding-left: 30px;">
                                        놀이 활동가가 진행하는 동네 놀이터 프로그램
                                    </div><br>
                                   
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                    <div style="padding-left: 30px;">
                                        031-790-2943
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_modal">
                                <div class="a2_Mcontent">
                                    <div class="a_boxBtitle" style="left:0;">
                                        마을선생님이 알려주는 공동배움터<div class="a2_Mclose">&#9747;</div>
                                    </div>
                                    <br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                    <div style="padding-left: 30px;">
                                        지역주민
                                    </div><br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                    <div style="padding-left: 30px;">
                                        지역주민이 선생님이 되어 다양한 주제의 강좌를 제공하는 재능기부 프로그램
                                    </div><br>
                                   
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                    <div style="padding-left: 30px;">
                                        031-790-2943
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_modal">
                                <div class="a2_Mcontent">
                                    <div class="a_boxBtitle" style="left:0;">
                                        주민교육 및 주민동아리<div class="a2_Mclose">&#9747;</div>
                                    </div>
                                    <br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                    <div style="padding-left: 30px;">
                                        지역주민
                                    </div><br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                    <div style="padding-left: 30px;">
                                        지역주민을 위한 교육 및 다양한 동아리 활동 지원
                                    </div><br>
                                   
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                    <div style="padding-left: 30px;">
                                        031-790-2943
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_modal">
                                <div class="a2_Mcontent">
                                    <div class="a_boxBtitle" style="left:0;">
                                        응답하라 2030! 서포터즈<div class="a2_Mclose">&#9747;</div>
                                    </div>
                                    <br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                    <div style="padding-left: 30px;">
                                        20·30대 청년
                                    </div><br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                    <div style="padding-left: 30px;">
                                        복지관 SNS 및 홍보부스 등 온·오프라인 활동 진행
                                    </div><br>
                                   
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                    <div style="padding-left: 30px;">
                                        031-790-2945
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_modal">
                                <div class="a2_Mcontent">
                                    <div class="a_boxBtitle" style="left:0;height:80px ;">
                                        따뜻함을 나누는 봉사단<br>
                                            ‘따봉-요리봉사단’<div class="a2_Mclose">&#9747;</div>
                                    </div>
                                    <br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                    <div style="padding-left: 30px;">
                                        봉사에 관심 있는 지역주민       
                                    </div><br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                    <div style="padding-left: 30px;">
                                        취약계층 어르신을 위한 밑반찬 및 명절음식 조리 활동
                                    </div><br>
                                   
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                    <div style="padding-left: 30px;">
                                        031-790-2945
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_modal">
                                <div class="a2_Mcontent">
                                    <div class="a_boxBtitle" style="left:0;height:80px ;">
                                        따뜻함을 나누는 봉사단<br>
                                ‘따봉-네일봉사단’’<div class="a2_Mclose">&#9747;</div>
                                    </div>
                                    <br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                    <div style="padding-left: 30px;">
                                        봉사에 관심 있는 지역주민       
                                    </div><br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                    <div style="padding-left: 30px;">
                                        어르신을 위한 손마사지&네일서비스 제공
                                        <br>*월 2회
                                    </div><br>
                                   
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                    <div style="padding-left: 30px;">
                                        031-790-2945
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_modal">
                                <div class="a2_Mcontent">
                                    <div class="a_boxBtitle" style="left:0;">
                                        꿈나무 나눔실천교실<div class="a2_Mclose">&#9747;</div>
                                    </div>
                                    <br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                    <div style="padding-left: 30px;">
                                        초등학교 4학년 ~ 6학년      
                                    </div><br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                    <div style="padding-left: 30px;">
                                        아동 나눔리더 양성을 위한 교육 및 활동
                                    </div><br>
                                   
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                    <div style="padding-left: 30px;">
                                        031-790-2943
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_modal">
                                <div class="a2_Mcontent">
                                    <div class="a_boxBtitle" style="left:0;">
                                        도담도담 멘토링 봉사단<div class="a2_Mclose">&#9747;</div>
                                    </div>
                                    <br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                    <div style="padding-left: 30px;">
                                        멘티 - 정서지원이 필요한 아동<br>
                                    멘토 - 봉사활동을 희망하는 20세 이상 지역주민    
                                    </div><br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                    <div style="padding-left: 30px;">
                                        아동의 건강한 성장을 돕기 위한 1:1 정서지원 활동
                                    </div><br>
                                   
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                    <div style="padding-left: 30px;">
                                        031-790-2944
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_modal">
                                <div class="a2_Mcontent">
                                    <div class="a_boxBtitle" style="left:0;">
                                        경기먹거리 그냥드림<div class="a2_Mclose">&#9747;</div>
                                    </div>
                                    <br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                    <div style="padding-left: 30px;">
                                        긴급하게 먹거리가 필요한 지역주민
                                    </div><br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                    <div style="padding-left: 30px;">
                                        1인 3종의 식료품 및 생필품 지원
                                    </div><br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">이용시간 :</span><br>
                                    <div style="padding-left: 30px;">
                                        매주 목 금 15~17시
                                    </div><br>
                                   
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                    <div style="padding-left: 30px;">
                                        031-790-2954
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_modal">
                                <div class="a2_Mcontent">
                                    <div class="a_boxBtitle" style="left:0;">
                                        해피프라이데이<div class="a2_Mclose">&#9747;</div>
                                    </div>
                                    <br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                    <div style="padding-left: 30px;">
                                        지역주민 
                                    </div><br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                    <div style="padding-left: 30px;">
                                        취약계층 지원 사업비 모금을 위한 상설매장 운영
                                    </div><br>
                                   
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                    <div style="padding-left: 30px;">
                                        031-790-2954
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="a2_modal">
                                <div class="a2_Mcontent">
                                    <div class="a_boxBtitle" style="left:0;">
                                        희망나눔바자회<div class="a2_Mclose">&#9747;</div>
                                    </div>
                                    <br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                    <div style="padding-left: 30px;">
                                        지역주민 
                                    </div><br>
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                    <div style="padding-left: 30px;">
                                        지역사회 기부 물품 판매를 통한 나눔 문화 확산<br>
                                        * 연 1회
                                    </div><br>
                                   
                                    <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                    <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                    <div style="padding-left: 30px;">
                                        031-790-2954
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                </li>
                <li>
                    <div class="a2_tap_content" style="margin-top: 40px;">
                        <ul class="a2_tapC" style="display: flex;flex-wrap: wrap;">
                            <li>
                                <div class="a2_box">
                                    <div class="a2_img">
                                        <img src="img/a33_1.jpg">
                                        <div class="a2_text">
                                            자원봉사자 양성·관리
                                        </div>
                                    </div>
                                    <div class="a2_bt">
                                        <a href="#">더 보기</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_box">
                                    <div class="a2_img">
                                        <img src="img/a33_2.jpg">
                                        <div class="a2_text">
                                            후원자 개발 및 관리
                                        </div>
                                    </div>
                                    <div class="a2_bt">
                                        더 보기
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_box">
                                    <div class="a2_img">
                                        <img src="img/a33_3.jpg">
                                        <div class="a2_text">
                                            홀트패밀리#
                                        </div>
                                    </div>
                                    <div class="a2_bt">
                                        더 보기
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_box">
                                    <div class="a2_img">
                                        <img src="img/a33_4.jpg">
                                        <div class="a2_text">
                                           홀트하남후원회
                                        </div>
                                    </div>
                                    <div class="a2_bt">
                                        더 보기
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_box">
                                    <div class="a2_img">
                                        <img src="img/a33_5.jpg">
                                        <div class="a2_text">
                                            홍보사업
                                        </div>
                                    </div>
                                    <div class="a2_bt">
                                        더 보기
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="a2_tapM">
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0">
                                            자원봉사자 양성·관리<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            자원봉사를 희망하는 지역주민
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            자원봉사자 교육, 간담회, 감사행사 진행
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2945
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0">
                                            후원자 개발 및 관리<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            지역사회 기업 및 주민
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            신규 후원자 개발, 감사행사 진행
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2954
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0">
                                            홀트패밀리#<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            후원 의사가 있는 기업 및 단체
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            도움이 필요한 아이들을 위해 매월 일정 금액을 후원하는 중소상공인 나눔 실천 캠페인
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2954
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0">
                                            홀트하남후원회<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            지역주민
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            복지관 사업 지원 및 서포터즈 활동
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2954
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0">
                                            홍보사업<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            지역주민
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            복지관 온·오프라인 홍보 활동, 소식지 ‘함께하남’ 발간, 리플렛 제작 등
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2954
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <footer>
        <div id="footer_top">
            <div class="footer_topwrap">
            </div>
        </div>
        <div id="footer_m">
            <div class="footer_m_wrap">
                <ul class="footer_m_left">
                    <li><a href="f1.php">개인정보처리방침</a></li>
                    <li><a href="f2.php">이용약관</a></li>
                    <li><a href="e8.php">오시는길</a></li>
                </ul>
                <ul class="footer_m_right">
                    <li><a href="https://blog.naver.com/holthanam_2030"><img src="img/blog.png"></a></li>
                    <li><a href="https://www.facebook.com/holthanam/"><img src="img/facebook.png"></a></li>
                    <li><a href="https://pf.kakao.com/_UUAxfxl"><img src="img/kakao.png"></a></li>
                </ul>
            </div>
        </div>
        <div id="footer_bt">
            <div id="ft_wrap">
                <div style="width: 180px;">
                    <img src="img/f_logo.png" style="width: 180px;">
                </div>
                <div style="width: 350px;padding-left: 50px;">
                <ul style="font-size: 0.9em;">
                    <li style="color: white;">
                        12947) 경기도 하남시 덕풍천서로 9(신장동)
                        <br>전화 : 031-790-2900
                        <br>팩스 : 031-796-2935
                        <br>이메일 : hanam@holt.or.kr
                        <br>대표자 : 명은주
                        <br>사업자번호 : 126-82-08315
                    </li>
                    <li style="font-size: 0.8em;color: gray;">
                        COPYRIGHT 2020 하남시종합사회복지관. ALL RIGHTS RESERVED.
                    </li>
                </ul>
                </div>
                <div style="width: 350px;">
                <ul style="color: #75e3ff;font-size: 0.9em;">
                      <li style="margin-bottom: 20px;">   
                        <div style="color: white;background-color:#212738;width: 60px;margin-right: 10px;text-align: center;display: inline-block;">후원계좌</div>	
                        농협 560-17-001796 하남시종합사회복지관
                      </li>
                      <li>
                        <div style="color: white;background-color:#212738;width: 60px;margin-right: 10px;text-align: center;display: inline-block;">후원문의</div>	031-790-2954
                        </li>
                </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>