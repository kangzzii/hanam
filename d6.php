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
    <script src="script.js" defer="defer" ></script>
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
            <img src="img/d_back.jpeg" style="filter: grayscale(0);">
        </div>
        <div class="space_mainT" style="font-size: 1.5em;top:35%">
            
        </div>
    </div>
    <div id="space_content_wrap">
        <div class="space_menu">
            <div class="space_title"style="font-size:1.4em">
                소통공간<br>
                <span style="font-size:small;">기관방문및대관안내</span>
            </div>
            <ul class="space_list">
                <li onclick="location.href='d1.php'">공지사항</li>
                <li onclick="location.href='d2.php'">채용공고</li>
                <li onclick="location.href='d3.php'">참여자 모집</li>
                <li onclick="location.href='d4.php'">복지관소식</li>
                <li onclick="location.href='d5.php'">1:1온라인문의</li>
                <li onclick="location.href='d6.php'">기관방문및대관안내</li>
            </ul>
        </div>
    </div>
    <div id="a_content">
        <div class="a_title">
           기관방문 및 대관안내
        </div>
       <div id="a2_content">
            <ul class="e4_list">
                <li>기관방문</li>
                <li>대관안내</li>
            </ul>
            <ul class="e4_content">
                <li>
                    <div class="d6_wrap">
                        <img src="img/d6_1.jpeg" style="width: 1000px;border-radius: 10px;">
                        <br><br>
                        하남시종합사회복지관에서는 복지관의 사업과 시설을 견학하고자 하는 단체를 위하여 기관 안내를 해드리고 있습니다.
                        <br><br>
                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span> 방문일 : 매주 화요일(일정은 조율 가능하며 최소 2주 전 방문 신청 부탁드립니다.)<br>
                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span> 진행내용 : 복지관 사업 소개, 질의응답, 기관 라운딩<br>
                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span> 신청절차 : 방문일정 확인 → 공문ㆍ신청서 제출 → 기관견학<br>
                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span> 문의 : 031-790-2945, holthanam@daum.net<br>
                        <br><br>
                        <div class="d6_bt">
                            신청서 다운로드
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d6_wrap">
                        <img src="img/d6_2.jpeg" style="width: 1000px;border-radius: 10px;">
                        <br><br>
                        하남시종합사회복지관에서는 복지관의 시설을 이용하고자 하는 단체를 위하여 대관 안내를 해드리고 있습니다.
                        <br><br><br>
                        <span style="font-size: 1.2em;font-weight: bold;">대관</span><br>
                        <div style="display:inline-block ;padding-left: 10px;"><span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span> 하남시종합사회복지관 시설대관운영지침에 의거하여 강당 또는 이에 준하는 회의실, 강의실, 교육실을 대관할 수 있음을 알려드립니다. 단 복지관 자체 프로그램이나 기관의 사정상 대관 가능여부를 확인하여야 함을 참고하시기 바랍니다.</div>
                        <div style="display:inline-block ;padding-left: 10px;"><span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span> 다음 각 호에 해당하는 사항에서는 대관이 불가하오니 유의하시기 바랍니다.</div>
                        <div style="padding-left: 40px;">
                            1.정치성의 행사
                            <br>2.사회교육실 및 주변 분위기를 문란케 하는 성격의 집회
                            <br>3.세미나 및 설명회를 빙자한 영업을 겸한 각종 집회
                            <br>4.식사 등 음식을 반입하는 집회 또는 예식
                            <br>5.시설사용 계약을 만성적으로 위반하는 업체
                            <br>6.시설사용 대관료를 미납한 업체
                            <br>7.본 기관의 동의 없이 시설물(집기 및 비품)의 이동 위치변경 및 파손의 우려가 있는 경우
                            <br>8.사전 허가 없이 간판 현수막 등의 설치 및 부착행위
                            <br>9.기타 본 기관에 나쁜 영향을 줄 수 있다고 판단되는 행사 및 집회
                        </div>
                        <br>
                        <span style="font-size: 1.2em;font-weight: bold;">대관시설 및 이용료 안내</span><br>
                        <table class="d6_table">
                            <tr>
                                <td>구분</td>
                                <td>수용인원(명)</td>
                                <td>대관료(기본 2시간)</td>
                                <td>옵션(추가 1시간당)</td>
                            </tr>
                            <tr>
                                <td>대강당(본관4층)</td>
                                <td>150</td>
                                <td>60,000원</td>
                                <td>12,000원</td>
                            </tr>
                            <tr>
                                <td>사회교육실(본관,별관 3층))</td>
                                <td>20</td>
                                <td>30,000원</td>
                                <td>6,000원</td>
                            </tr>
                        </table>
                        <br>
                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                        <span style="font-weight: bold;">현수막 사이즈</span>
                        <div style="padding-left: 20px;">
                            - 대강당(전면) :가로6m, 세로0.45m
                        </div>
                        <br>
                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>
                        <span style="font-weight: bold;">부장비 대여료</span>
                        <div style="padding-left: 20px;margin-bottom: 30px;">
                            - 냉‧난방비 : 대강당 100,000원, 사회교육실 50,000원
                           <br>- 빔프로젝트 : 50,000원(전동스크린 포함)
                            <br>- 노트북 : 30,000원
                            <br>- 스크린 : 25,000원
                           <br> ※ 야간, 주말 및 공휴일은 전체 요금에서 각 50% 할증 적용됩니다.
                        </div>
                        <span style="font-size: 1.2em;font-weight: bold;">대관시간</span><br>
                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>평일 : 9:00~21:00 대관가능(18시 이후 할증적용)
                        <br>
                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>일요일 포함 국가 공휴일은 대관불허
                        <br><br>
                        <span style="font-size: 1.2em;font-weight: bold;">대관문의</span><br>
                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>전화 : 031-790-2925
                        <br>
                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>팩스 : 031-796-2935<br>
                        <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span>이메일 : hanam@holt.or.kr
                        <br><br><br>
                        <div class="d6_bt">
                            신청서 다운로드
                        </div>
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