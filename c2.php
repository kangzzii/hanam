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
                <span style="font-size:small;">후원신청</span>
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
            후원신청
        </div>
        <div id="a2_content">
            <ul class="c2_list">
                <li>
                    <div style="position: absolute;z-index: 1;
                    height: 60px;top: 20px;left: 50px;width: 180px">
                        <span style="font-size: small;">STEP1</span><br>
                        개인정보 관련 동의
                    </div>
                    <div class="angle" style="background-color: #6485c0;"></div>
                </li>
                <li>
                    <div style="position: absolute;z-index: 1;
                    height: 60px;top: 20px;left: 90px;width: 150px">
                        <span style="font-size: small;">STEP2</span><br>
                        후원자정보
                    </div>
                    <div class="angle"></div>
                </li>
                <li>
                    <div style="position: absolute;z-index: 1;
                    height: 60px;top: 20px;left: 90px;width: 150px">
                        <span style="font-size: small;">STEP3</span><br>
                        납입방법
                    </div>
                    <div class="angle"></div>
                </li>
                <li>
                    <div style="position: absolute;z-index: 1;
                    height: 60px;top: 20px;left: 90px;width: 150px">
                        <span style="font-size: small;">STEP4</span><br>
                        완료
                    </div>
                    <div class="angle"></div>
                </li>
            </ul>
            <br><br>
            <span style="font-size:1.3em;font-weight: bold;">
                개인정보 수집ㆍ이용 동의서
            </span>
            <br>
            <div style="width: 980px;left: 20px;
            padding: 10px;
            border: 1px solid lightgray;">
                <span style="font-weight: bold;font-size: 1.2em;">1. 개인정보의 수집ㆍ이용 목적</span><br>
                1.후원자 등록 및 후원 실적 입력
                <br>2.후원자 연말정산 소득공제 증빙을 위한 기부금 영수증 발행 및 국세청 연말정산 간소화
                <br>3.서비스로의 정보제공
                <div style="padding-left: 50px;">
                    01.사회복지법인 재무ㆍ회계 규칙 제20조에 의거한 후원금 수입 및 사용결과 보고서 작성
                    <br>02.CMS 신규/해지 및 출금요청을 위한 정보제공(금융결제원)
                </div>
                <span style="font-weight: bold;font-size: 1.2em;">2. 수집하려는 개인정보의 항목</span>
                <br>1.인적사항 : 성명, 주민등록번호, 연락처, 주소, 이메일 등
                <br>2.후원사항 : 후원종류, 후원방법, 납입방법, 계좌 정보 등 후원활동과 관련된 사항
                <br><span style="font-weight: bold;font-size: 1.2em;">3. 개인정보의 보유 및 이용 기간</span>
                <br>1.신청서 접수 ~ 신청해지 및 기관운영 종료일
                <br>2.신청해지일로부터 5년까지 보관 후 삭제
            </div>
            <div style="text-align: center;width: 1000px;padding-top: 10px;">
                <input type="checkbox"> 개인정보 사용에 동의합니다.
            </div>
            <br><br>
            <span style="font-size:1.3em;font-weight: bold;">
                개인정보 제3자 제공 동의서
            </span>
            <div style="width: 980px;left: 20px;
            padding: 10px;
            border: 1px solid lightgray;">
            1.개인정보를 제공받는 자 : 사단법인 금융결제원, 국세청
            <br>2.개인정보를 제공받는 자의 개인정보 이용 목적
            <div style="padding-left: 30px;">
                1.CMS 출금이체 서비스 제공 및 출금동의 확인, 출금이체 신규 등록 및 해지 사실 통지
               <br>2.국세청 연말정산 간소화 서비스로의 정보제공
            </div>
            3.제공하는 개인정보의 항목
            <div style="padding-left: 30px;">
            1.성명, 금융기관명, 계좌번호, 생년월일, 전화번호, (은행 등 금융회사 및 이용기관 보유)휴대폰번호
            </div>
            4.개인정보를 제공받는 자의 개인정보 보유 및 이용기간
            <div style="padding-left: 30px;">
                1.CMS 출금이체 서비스 제공 및 출금동의 확인 목적을 달성할 때까지
            </div>
            5.신청자는 개인정보에 대해 금융결제원 에 제공하는 것을 거부할 권리가 있으며, 거부 시 출금이체 신청이 거부될 수 있습니다.
            </div>
            <div style="text-align: center;width: 1000px;padding-top: 10px;">
                <input type="checkbox">  CMS 출금이체 약관에 동의합니다.
            </div>
            <br>
            <span style="color: red;">
                ※ 개인정보 제공 동의 거부권리 및 동의 거부에 따른 불이익 내용 동의를 거부할 권리가 있으며,<br>
                 거부 시 기부금 영수증 발급 등 활동에 어려움이 있을 수 있습니다.
            </span>
        </div>
        <div class="c2_bt">
            다음단계
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