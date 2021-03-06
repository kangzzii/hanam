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
        <div class="space_main" >
            <img src="img/contentback1.jpg"style="filter: grayscale(0);">
        </div>
        <div class="space_mainT" style="font-size: 1.5em;top:35%">
            
        </div>
    </div>
    <div id="space_content_wrap">
        <div class="space_menu">
            <div class="space_title"style="font-size:1.4em">
                복지관소개<br>
                <span style="font-size:small;">연혁</span>
            </div>
            <ul class="space_list">
            <li onclick="location.href='e1.php'">인사말</li>
                <li onclick="location.href='e2.php'">미션&비전</li>
                <li onclick="location.href='e3.php'">법인소개</li>
                <li onclick="location.href='e4.php'">연혁</li>
                <li onclick="location.href='e5.php'">조직도</li>
                <li onclick="location.href='e6.php'">기관현황</li>
                <li onclick="location.href='e8.php'">오시는길</li>
            </ul>
        </div>
    </div>
    <div id="a_content">
        <div class="a_title">
            연혁
        </div>
       <div id="a2_content">
            <ul class="e4_list">
                <li>2011 ~ 현재</li>
                <li>2005 ~ 2010</li>
            </ul>
            <ul class="e4_content">
                <li>
                    <div class="e4_contentwrap">
                        <table class="e4_table">
                            <tr>
                                <td></td>
                                <td>
                                    <div class="e4_nian"style="left:-8px">
                                    <span style="font-size: 2em;">•</span>&emsp;2021
                                    </div>
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        06월
                                    </span> &emsp; 
                                    제10대 명은주 관장 부임
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="e4_nian"style="right:-8px">
                                    2020 &emsp; <span style="font-size: 2em;">•</span>
                                    </div>
                                    <br>
                                    제9대 이수연 관장 부임 &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        01월
                                    </span><br>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="e4_nian"style="left:-8px">
                                    <span style="font-size: 2em;">•</span>&emsp;2019
                                    </div>
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        01월
                                    </span> &emsp; 
                                    제8대 정순규 관장 부임
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="e4_nian"style="right:-8px">
                                    2018 &emsp; <span style="font-size: 2em;">•</span>
                                    </div>
                                    <br>
                                    실버인력뱅크 치매서포터 “가치동행” 시범사업 협약 체결
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        08월
                                    </span><br>
                                    한국전력공사 상호협조체계 구축 협약 체결
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        10월
                                    </span>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="e4_nian"style="left:-8px">
                                    <span style="font-size: 2em;">•</span>&emsp;2017
                                    </div>
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        02월
                                    </span> &emsp; 
                                    복지관 재수탁(2017. 2. 1 ~ 2022. 1. 31)
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        02월
                                    </span> &emsp; 
                                        착한이웃 1호점 하남도시공사 선정
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        05월
                                    </span> &emsp; 
                                        청소년 나눔무버 파견기관 업무협약   
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        06월
                                    </span> &emsp; 
                                    실버인력뱅크 “스쿨존 안전지킴이” 사업 시행(하남시) 
                                    <br><br>
                                    <span style="color: gray;font-weight: bold;">
                                        09월
                                    </span> &emsp; 
                                    <div style="width: 230px;display: inline-block;">
                                        장애아재활치료교육센터 재수탁(2017.9.25 ~ 2022.9.24)
                                    </div>      
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="e4_nian"style="right:-8px">
                                    2016 &emsp; <span style="font-size: 2em;">•</span>
                                    </div>
                                    <br>
                                    이마트 하남점 업무협약
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        04월
                                    </span><br><br>
                                    <div style="width: 330px;position: absolute;">
                                        국민연금공단 강동하남지사, 하남시지역사회보장협의체 반부패, 청렴 실천 및 나눔 관련 협약한국전력공사 상호협조체계 구축 협약 체결
                                    </div>
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        06월
                                    </span>
                                    <br><br><br><br>
                                    제7대 신상문 관장 부임
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        07월
                                    </span>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="e4_nian"style="left:-8px">
                                    <span style="font-size: 2em;">•</span>&emsp;2015
                                    </div>
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        04월
                                    </span> &emsp; 
                                    개관 10주년 기념식
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        09월
                                    </span> &emsp; 
                                    노인일자리사업 사회공헌분야 우수수행기관 선정
                                    <br><br>
                                    <span style="color: gray;font-weight: bold;">
                                        09월
                                    </span> &emsp; 
                                    <div style="width: 230px;display: inline-block;">
                                     경기도 하남시 지원사업 '바른 인성 함양 프로젝트 인성의 조건' 실시
                                    </div>
                                    <br><br>
                                    <span style="color: gray;font-weight: bold;">
                                        12월
                                    </span> &emsp; 
                                    <div style="width:230px;display:inline-block">
                                        사회복지법인 아이들과미래 희망샘기금 장학생 지원프로그램 관련 업무협약
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="e4_nian"style="right:-8px">
                                    2014 &emsp; <span style="font-size: 2em;">•</span>
                                    </div>
                                    <br>
                                    복지관 재수탁(2014. 2. 1 ~ 2017. 1. 31)
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        02월
                                    </span><br>
                                    실버까페 ‘마실’ 개소
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        08월
                                    </span><br>
                                    장애아재활치료교육센터 재수탁
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        09월
                                    </span><br>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="e4_nian"style="left:-8px">
                                    <span style="font-size: 2em;">•</span>&emsp;2013
                                    </div>
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        03월
                                    </span> &emsp; 
                                    드림 스타트 업무 협약 체결
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        10월
                                    </span> &emsp; 
                                    제6대 황환윤 관장 부임
                                    <br>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="e4_nian"style="right:-8px">
                                    2012 &emsp; <span style="font-size: 2em;">•</span>
                                    </div>
                                    <br>
                                    우리아이심리지원서비스 제공기관 등록
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        11월
                                    </span><br>
                                    지역사회서비스투자사업 품질평가 우수기관선정
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        12월
                                    </span><br>
                                    제5대 이진희 관장 부임
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        12월
                                    </span><br>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="e4_nian"style="left:-8px">
                                    <span style="font-size: 2em;">•</span>&emsp;2011
                                    </div>
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        01월
                                    </span> &emsp; 
                                    하남시노인자살예방센터 위탁운영 협약 체결
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        02월
                                    </span> &emsp; 
                                    복지관 재수탁(2011. 2. 1 ~ 2014. 1. 31)
                                    <br>
                                    
                                </td>
                            </tr>
                            
                        </table>
                    </div>
                </li>
                <li>
                    <div class="e4_contentwrap">
                        <table class="e4_table">
                            <tr>
                                <td>
                                    <div class="e4_nian"style="right:-8px">
                                    2010 &emsp; <span style="font-size: 2em;">•</span>
                                    </div>
                                    <br>
                                    제4대 조철행 관장 부임 &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        02월
                                    </span><br>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="e4_nian"style="left:-8px">
                                    <span style="font-size: 2em;">•</span>&emsp;2009
                                    </div>
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        01월
                                    </span> &emsp; 
                                    장애아재활치료서비스 제공기관 선정
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        01월
                                    </span> &emsp; 
                                    제3대 김대열 관장 부임
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        04월
                                    </span> &emsp; 
                                    문제행동아동조기개입서비스 제공기관 선정
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        05월
                                    </span> &emsp; 
                                    건강가정지원센터 개소
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="e4_nian"style="right:-8px">
                                    2008 &emsp; <span style="font-size: 2em;">•</span>
                                    </div>
                                    <br>
                                    지역사회서비스혁신사업 위탁기관 지정
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        01월
                                    </span><br>
                                    제2대 이종수 관장 부임
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        01월
                                    </span>
                                    <br>
                                    복지관 재수탁(2008. 2. 1 ~ 2011. 1. 31)
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        02월
                                    </span>
                                    <br>
                                    하남시장애아재활치료교육센터 개소
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        12월
                                    </span>
                                    <br>
                                    하남시 아이돌보미지원사업 수탁 협약체결
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        12월
                                    </span>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="e4_nian"style="left:-8px">
                                    <span style="font-size: 2em;">•</span>&emsp;2007
                                    </div>
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        01월
                                    </span> &emsp; 
                                    지역아동센터 확장
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        02월
                                    </span> &emsp; 
                                        은방울어린이집 여성가족부 평가인증 보육시설 지정
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        03월
                                    </span> &emsp; 
                                        지역아동센터 정원 확대(29명) 
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        06월
                                    </span> &emsp; 
                                    노인일자리사업 위탁기관지정 
                                    <br><br>
                                    <span style="color: gray;font-weight: bold;">
                                        12월
                                    </span> &emsp; 
                                    <div style="width: 230px;display: inline-block;">
                                        아동 통합발달지원 서비스 제공기관 선정
                                    </div>      
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="e4_nian"style="right:-8px">
                                    2006 &emsp; <span style="font-size: 2em;">•</span>
                                    </div>
                                    <br>
                                    실버인력뱅크 개원
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        01월
                                    </span><br><br>
                                    <br>
                                    하남 후원회 창립
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        03월
                                    </span><br><br>
                                    <br>
                                    아동가족상담센터 확장
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        08월
                                    </span><br>
                                    <br>
                                    하남시와 별관동 위탁운영 협약체결
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        11월
                                    </span><br><br>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="e4_nian"style="left:-8px">
                                    <span style="font-size: 2em;">•</span>&emsp;2005
                                    </div>
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        02월
                                    </span> &emsp; 
                                    하남시 위탁운영 협약 체결
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        02월
                                    </span> &emsp; 
                                    제1대 김호현 관장 부임
                                    <br><br>
                                    <span style="color: gray;font-weight: bold;">
                                        04월
                                    </span> &emsp; 
                                    <div style="width: 230px;display: inline-block;">
                                     하남시종합사회복지관 개관
                                    </div>
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        04월
                                    </span> &emsp; 
                                    은방울어린이집 개원
                                    <br>
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        05월
                                    </span> &emsp; 
                                    심리 및 장애치료센터 개원
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        06월
                                    </span> &emsp; 
                                    지역아동센터 '큰나무교실' 개원
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        07월
                                    </span> &emsp; 
                                    월간 '하남사랑'창간호 발간
                                    <br>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="e4_nian"style="right:-8px">
                                    2014 &emsp; <span style="font-size: 2em;">•</span>
                                    </div>
                                    <br>
                                    복지관 재수탁(2014. 2. 1 ~ 2017. 1. 31)
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        02월
                                    </span><br>
                                    실버까페 ‘마실’ 개소
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        08월
                                    </span><br>
                                    장애아재활치료교육센터 재수탁
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        09월
                                    </span><br>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="e4_nian"style="left:-8px">
                                    <span style="font-size: 2em;">•</span>&emsp;2013
                                    </div>
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        03월
                                    </span> &emsp; 
                                    드림 스타트 업무 협약 체결
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        10월
                                    </span> &emsp; 
                                    제6대 황환윤 관장 부임
                                    <br>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="e4_nian"style="right:-8px">
                                    2012 &emsp; <span style="font-size: 2em;">•</span>
                                    </div>
                                    <br>
                                    우리아이심리지원서비스 제공기관 등록
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        11월
                                    </span><br>
                                    지역사회서비스투자사업 품질평가 우수기관선정
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        12월
                                    </span><br>
                                    제5대 이진희 관장 부임
                                     &emsp; 
                                    <span style="color: gray;font-weight: bold;">
                                        12월
                                    </span><br>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="e4_nian"style="left:-8px">
                                    <span style="font-size: 2em;">•</span>&emsp;2011
                                    </div>
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        01월
                                    </span> &emsp; 
                                    하남시노인자살예방센터 위탁운영 협약 체결
                                    <br>
                                    <span style="color: gray;font-weight: bold;">
                                        02월
                                    </span> &emsp; 
                                    복지관 재수탁(2011. 2. 1 ~ 2014. 1. 31)
                                    <br>
                                    
                                </td>
                            </tr>
                            
                        </table>
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