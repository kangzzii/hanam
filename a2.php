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
            <img src="img/a2.jpg">
        </div>
        <div class="space_mainT" style="font-size: 1.5em;top:35%">
            지역주민의 욕구 및 문제해결을 위해<br> 다양한 복지 프로그램을 기획 및 운영하여 ,<br>
            가족 구성원의 전인적 발달과 도움이 필요한 주민의 안정된 생활을 도모합니다<br>
        </div>
    </div>
    <div id="space_content_wrap">
        <div class="space_menu">
            <div class="space_title">
                사업안내<br>
                <span style="font-size:small;">서비스제공기능</span>
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
            서비스제공기능
        </div>
        <div id="a2_content">
            <ul class="a2_tap">
                <li>가족기능강화</li>
                <li>지역사회보호</li>
            </ul>
            <ul class="a2_tap2">
                <li>
                    <span style="font-size:1.1em;font-weight: bold;">
                        가족관계 증진사업
                    </span><br><br>
                    <div class="a2_tap_content">
                        <ul class="a2_tapC" style="display: flex;flex-wrap: wrap;">
                            <li>
                                <div class="a2_box">
                                    <div class="a2_img">
                                        <img src="img/a2_1.jpg">
                                        <div class="a2_text">
                                            가족문화행사
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
                                        <img src="img/a2_2.jpg">
                                        <div class="a2_text">
                                            가족체험행사
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
                                            가족문화행사<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            공연단 초청을 통한 뮤지컬·연극·마술 등 문화공연 진행
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2955
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0">
                                            가족체험행사<div class="a2_Mclose">&#9747;</div>
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
                                            가족과 함께 참여하는 공연 및 체험부스 운영<BR>
                                            * 연 2회
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2955
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <br><br>
                    <span style="font-size:1.1em;font-weight: bold;">
                        가족기능보완사업
                    </span><br><br>
                    <div class="a2_tap_content">
                        <ul class="a2_tapC" style="display: flex;flex-wrap: wrap;">
                            <li>
                                <div class="a2_box">
                                    <div class="a2_img">
                                        <img src="img/a2_3.jpg">
                                        <div class="a2_text">
                                            아동방학특별·체험활동
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
                                        <img src="img/a2_4.jpg">
                                        <div class="a2_text" style="line-height:40px">
                                            바른인성함양 프로젝트<br>
                                            '인성의 조건'
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
                                        <img src="img/a2_5.jpg">
                                        <div class="a2_text"style="line-height:40px">
                                            배워서 남주자!<br>
                                            행복을 전하는<br>
                                            '파티플래너'
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
                                        <img src="img/a2_6.jpg">
                                        <div class="a2_text" style="line-height:40px">
                                            성인문해교육<br>
                                            (한글교실)
                                            
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
                                            아동방학특별·체험활동 <div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            초등학생
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            방학중 건전한 여가활동을 위한 특강 및 체험활동
                                        </div>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2932
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0;height: 80px;">
                                            바른인성함양 프로젝트
                                            <br>‘인성의조건’<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            초등학생
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            아동의 올바른 인성을 위한 교육 및 체험활동<br>
                                            * 총 16회기
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2955
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0;height: 80px;">
                                            배워서남주자!<br>행복을 전하는 ‘파티플래너’<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            신중년층 지역주민
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            파티플래너 자격증 취득 과정 및 지역사회 재능 나눔 활동
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2932
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0">
                                            성인문해교육(한글교실)<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            비문해 어르신
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            어르신의 일상생활 불편 해소를 위한 수준별 한글교육
                                            <br>* 주 2회활동
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2932
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                    <br><br>
                    <span style="font-size:1.1em;font-weight: bold;">
                        부양가족지원사업
                    </span><br><br>
                    <div class="a2_tap_content">
                        <ul class="a2_tapC" style="display: flex;flex-wrap: wrap;">
                            <li>
                                <div class="a2_box">
                                    <div class="a2_img">
                                        <img src="img/a2_7.jpg">
                                        <div class="a2_text" style="line-height:40px">
                                            장애아동·청소년
                                            <br>방과후교실
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
                                        <img src="img/a2_8.jpg">
                                        <div class="a2_text"style="line-height:40px">
                                            장애아동·청소년<br>
                                             방학 중 계절학교 ‘늘해랑학교’
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
                                        <div class="a_boxBtitle" style="left:0;">
                                            장애아동·청소년 방과후교실<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            만 7~24세 장애아동·청소년
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            장애아동·청소년을 위한 컴퓨터·음악·체육 등 다양한 강좌 제공
                                            <br>* 학기 중 운영
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2932
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0;height: 80px;">
                                            장애아동·청소년 방학 중 계절학교<br>
                                            ‘늘해랑학교’<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            특수교육대상 아동·청소년
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            방학 중 특수교육 대상학생에게 자립·지역사회적응·체험학습·예체능 활동을 통한 교육 및 돌봄 지원
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2955
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <br><br>
                    <span style="font-size:1.1em;font-weight: bold;">
                        가족문제해결 및 치료사업
                    </span><br><br>
                    <div class="a2_tap_content">
                        <ul class="a2_tapC" style="display: flex;flex-wrap: wrap;">
                            <li>
                                <div class="a2_box">
                                    <div class="a2_img">
                                        <img src="img/a2_9.jpg">
                                        <div class="a2_text">
                                            아동가족상담
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
                                        <img src="img/a2_10.jpg">
                                        <div class="a2_text" style="line-height:40px">
                                            발달재활서비스<br>
                                        사회서비스(보건복지부)
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
                                        <img src="img/a2_11.jpg">
                                        <div class="a2_text"style="line-height:40px">
                                            우리아이심리지원서비스<br>
                                            사회서비스(보건복지부)
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
                                        <img src="img/a2_12.jpg">
                                        <div class="a2_text" style="line-height:40px">
                                            방과후교실(자유수강권)<Br>
                                            사회서비스(교육부)
                                            
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
                                        <img src="img/a2_13.jpg">
                                        <div class="a2_text" style="line-height:40px">
                                            방과후교실(자유수강권)<Br>
                                            사회서비스(교육부)
                                            
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
                                            아동가족상담 <div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            만3세 이상의 지역주민
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            정서・행동 발달상의 어려움을 겪는 아동 및 청소년을 위한 치료서비스 제공 (언어치료, 인지학습치료, 놀이치료, 미술치료, 감각통합치료, 심리운동(그룹))
                                        </div>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2952
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0;">
                                            발달재활서비스<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            만18세 미만 장애아동<br>
                                            전국가구평균소득 150% 이하 (소득별 차등 지원)
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            언어치료
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            주민등록상 주소지 주민센터
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0">
                                            우리아이심리지원서비스<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            만18세 이하 범위 내에서 지역 여건에 따라 설정,<br>
                                            기준중위소득 140% 이하 (소득별 차등 지원)
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            놀이치료, 미술치료
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            주민등록상 주소지 주민센터
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0">
                                            방과후교실(자유수강권)<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            경기도교육청 소속 특수교육대상자
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            언어치료, 인지학습치료, 감각통합치료, 놀이치료, 미술치료, 심리운동
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            재학 중인 학교
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0">
                                            치료지원서비스<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            경기도교육청 소속 특수교육대상자
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            언어치료, 감각통합치료, 놀이치료, 미술치료
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            재학 중인 학교
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <img src="img/a22_1.png" style="width: 1000px;margin-bottom: 100px;">
                    <div class="a2_tap_content">
                        <ul class="a2_tapC" style="display: flex;flex-wrap: wrap;">
                            <li>
                                <div class="a2_box">
                                    <div class="a2_img">
                                        <img src="img/a22_2.jpg">
                                        <div class="a2_text">
                                            결식아동급식지원사업
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
                                        <img src="img/a22_3.jpg">
                                        <div class="a2_text">
                                            햄버거 나눔지원사업<br>
                                            '행복배달'
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
                                        <img src="img/a22_4.jpg">
                                        <div class="a2_text">
                                            어르신 건강증진 프로그램<br>
                                            '온기종기'
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
                                        <img src="img/a22_5.jpg">
                                        <div class="a2_text">
                                            다시 찾은 이팔청춘<br>
                                            -염색서비스
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
                                        <img src="img/a22_6.jpg">
                                        <div class="a2_text">
                                            사랑의 연탄 지원 사업
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
                                        <img src="img/a22_7.jpg">
                                        <div class="a2_text">
                                            보장구 대여
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
                                            결식아동급식지원사업<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            만 18세 이하 아동·청소년
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            결식위험에 놓인 아동·청소년에게 주 2회 밑반찬 제공
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2955
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0;height: 80px;">
                                            햄버거 나눔지원사업<br> ‘행복배달’<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            아동·청소년
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                                                                        
                                            롯데GRS의 후원을 통해 방학 중 햄버거·치킨 등 간식 제공
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2955
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="a2_modal">
                                    <div class="a2_Mcontent">
                                        <div class="a_boxBtitle" style="left:0;height: 80px;">
                                            어르신 건강증진 프로그램<br> ‘온기종기’<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            65세 이상 어르신
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            신체·정서 건강 관리를 위한 교육·체조 및 영양식 제공
                                             <br>   * 주 1회
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
                                        <div class="a_boxBtitle" style="left:0;height: 80px;">
                                            
                                            다시 찾은 이팔청춘 <br>- 염색서비스<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            65세 이상 어르신
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            동성제약 염색봉사단과 함께하는 염색지원<br>
                                            * 연 4회
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
                                            사랑의 연탄 지원사업<div class="a2_Mclose">&#9747;</div>
                                        </div>
                                        <br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">대상 :</span><br>
                                        <div style="padding-left: 30px;">
                                            연탄 사용 가정
                                        </div><br>
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">내용 :</span><br>
                                        <div style="padding-left: 30px;">
                                            하남도시공사와 함께하는 연탄 지원 서비스
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
                                            보장구대여<div class="a2_Mclose">&#9747;</div>
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
                                            일시적으로 보장구가 필요한 지역주민에게 휠체어 및 실버카 대여
                                        </div><br>
                                       
                                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                                        <span style="font-size: 1.1em;font-weight: bold;">문의 :</span><br>
                                        <div style="padding-left: 30px;">
                                            031-790-2944
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