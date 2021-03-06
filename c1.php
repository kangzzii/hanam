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
            <img src="img/c1back.jpeg">
        </div>
        <div class="space_mainT" style="font-size: 1.5em;top:35%">
            
        </div>
    </div>
    <div id="space_content_wrap">
        <div class="space_menu">
            <div class="space_title"style="font-size:1.4em">
                후원ㆍ자원봉사<br>
                <span style="font-size:small;">후원안내</span>
            </div>
            <ul class="space_list">
                <li onclick="location.href='c1.php'">후원안내</li>
                <li onclick="location.href='c2.php'">후원신청</li>
                <li onclick="location.href='c3.php'">홀트패밀리#</li>
                <li onclick="location.href='c4.php'">자원봉사안내</li>
                <li onclick="location.href='c5.php'">자원봉사신청</li>
            </ul>
        </div>
    </div>
    <div id="a_content">
        <div class="a_title">
            후원안내
        </div>
        <div id="a2_content">
                <span style="font-size:1.3em;">
                    하남시종합사회복지관은 여러 후원자들의 도움으로 <br>
                    지역사회 어려운 이웃들의 자립과 활기찬 미래를 위하여 노력하고 있습니다.<br>
                    여러분이 보내주신 후원금은 다양한 사업을 통해 소중하게 사용됩니다.
                </span><br><br>
                <div style="display: flex;">
                    <div style="display: flex;width: 500px;">
                        <div class="c1_box">
                            <div class="c1_img">
                                <img src="img/c1_1.png">
                            </div>
                            <div class="c1_text">
                                아동·청소년 지원사업 
                            </div>
                        </div>
                        <div class="c1_roll">
                            <span style="font-size: 1.5em;font-weight: bold;">ㆍ</span> 채움놀이터<br>
                            <span style="font-size: 1.5em;font-weight: bold;">ㆍ</span>2030서포터즈<br>
                            <span style="font-size: 1.5em;font-weight: bold;">ㆍ</span>꿈나무나눔실천교실<Br>
                            <span style="font-size: 1.5em;font-weight: bold;">ㆍ</span>도담도담 멘토링<br>
                            <span style="font-size: 1.5em;font-weight: bold;">ㆍ</span>문화공연 지원<br>
                            <span style="font-size: 1.5em;font-weight: bold;">ㆍ</span>외식 지원<br>
                        </div>
                    </div>
                    <div style="display: flex;width: 500px;">
                        <div class="c1_box">
                            <div class="c1_img">
                                <img src="img/c1_2.png">
                            </div>
                            <div class="c1_text">
                                어르신 지원사업
                            </div>
                        </div>
                        <div class="c1_roll">
                            <br><span style="font-size: 1.5em;font-weight: bold;">ㆍ</span> 방문 이·미용
                            <br><span style="font-size: 1.5em;font-weight: bold;">ㆍ</span> 밑반찬 지원
                            <br><span style="font-size: 1.5em;font-weight: bold;">ㆍ</span> 건강음료 지원
                            <br><span style="font-size: 1.5em;font-weight: bold;">ㆍ</span> 병원동행 지원
                            <br><span style="font-size: 1.5em;font-weight: bold;">ㆍ</span> 물리치료 지원
                        </div>
                    </div>
                </div>
                <div style="display: flex;margin-top: 30px;">
                    <div style="display: flex;width: 500px;">
                        <div class="c1_box">
                            <div class="c1_img">
                                <img src="img/c1_3.png">
                            </div>
                            <div class="c1_text">
                                한부모지원사업 
                            </div>
                        </div>
                        <div class="c1_roll">
                            <br><span style="font-size: 1.5em;font-weight: bold;">ㆍ</span>생계비 지원
                            <br><span style="font-size: 1.5em;font-weight: bold;">ㆍ</span>자원 연계 지원
                            <br><span style="font-size: 1.5em;font-weight: bold;">ㆍ</span>교육문화 지원
                            <br><span style="font-size: 1.5em;font-weight: bold;">ㆍ</span>백미 지원
                            <br><span style="font-size: 1.5em;font-weight: bold;">ㆍ</span>공동배움터
                        </div>
                    </div>
                    <div style="display: flex;width: 500px;">
                        <div class="c1_box">
                            <div class="c1_img">
                                <img src="img/c1_4.png">
                            </div>
                            <div class="c1_text">
                                위기가정지원사업
                            </div>
                        </div>
                        <div class="c1_roll">
                            <br><span style="font-size: 1.5em;font-weight: bold;">ㆍ</span>사례관리
                            <br><span style="font-size: 1.5em;font-weight: bold;">ㆍ</span>경제적지원서비스
                            <br><span style="font-size: 1.5em;font-weight: bold;">ㆍ</span>의료지원서비스
                            <br><span style="font-size: 1.5em;font-weight: bold;">ㆍ</span>정서지원서비스
                            <br><span style="font-size: 1.5em;font-weight: bold;">ㆍ</span>명절선물 지원
                        </div>
                    </div>
                </div>
                <br><br>
                <span style="font-size:1.3em;font-weight: bold;">
                    후원종류
                </span><br><br>
               <table style="width: 1000px;">
                <tr>
                    <td><img src="img/c1_5.png"></td>
                    <td>
                        <span style="font-weight: bold;">일반후원</span>
                        <br>복지관의 전반적인 프로그램 및 운영을 위한 정기후원
                    </td>
                    <td><img src="img/c1_6.png"></td>
                    <td>
                        <span style="font-weight: bold;">결연후원</span>
                        <br>
                        복지관에서 지원하는 저소득 가정과 연결한 정기후원
                    </td>
                </tr>
                <tr>
                    <td><img src="img/c1_7.png"></td>
                    <td>
                        <span style="font-weight: bold;">물품후원</span>
                        <br> 
                        저소득 가정 지원 및 상설매장(바자회)판매를 위한 물품 후원
                    </td>
                    <td><img src="img/c1_8.png"></td>
                    <td>
                        <span style="font-weight: bold;">저금통후원</span>
                        <br>
                        상가 및 가정에 “희망 나눔 저금통”을 설치하여 후원
                    </td>
                </tr>
                <tr>
                    <td><img src="img/c1_7.png"></td>
                    <td>
                        <span style="font-weight: bold;"> 온라인후원</span>
                        <br>
                        해피빈 등 포털 사이트를 통한 후원
                    </td>
                    <td></td>
                    <td>
                        
                    </td>
                </tr>
               </table>
               <br><br>
               <span style="font-size:1.3em;font-weight: bold;">
                   후원참여방법
               </span><br><br>
               <table class="c1_table">
                    <tr>
                        <td>CMS후원</td>
                        <td>우리 복지관과 금융결제원의 계약으로 매월 지정일에 자동이체로 후원금 입금이 되는 방법 (복지관에서 신청)</td>
                    </tr>
                   <tr>
                       <td>계좌이체</td>
                       <td>복지관 전용 후원계좌에 직접 후원금을 기부하는 방법<br>
                        농협중앙회 560-17-001796 (예금주 : 하남시종합사회복지관)</td>
                   </tr>
                   <tr>
                        <td>방문후원</td>
                        <td>복지관에 직접 방문하여 후원금(품)을 기부하는 방법</td>
                    </tr>
                    <tr>
                        <td>물품후원</td>
                        <td>생활용품, 식료품, 가전제품, 의류 등 물품을 후원하는 방법</td>
                    </tr>
               </table>
               <br><br>
               <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span><span style="font-size: 1.1em;font-weight: bold;">후원자 혜택</span><br>
                <br>
                <div style="padding-left: 5px;">
                    기부금영수증 발급(법인세법 제24조, 소득세법 제34조에 의해 세금공제 혜택)
                <br>복지관 소식지 발송
                <Br>후원자 감사 행사 초청
                <br>후원자 개인 및 후원 단체에 대해 복지관 소식지를 통한 홍보
                </div>
                <br><br>
                <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span><span style="font-size: 1.1em;font-weight: bold;">문의 및 신청</span><br>
                <br>
                <div style="padding-left: 5px;">
                    후원 담당자 :
                    <br>031-790-2954
                </div>
                <br><br>
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