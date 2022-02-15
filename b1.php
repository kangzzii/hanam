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
            <img src="img/b1back.jpg">
            <img src="img/backpng.png" style="position: absolute;top: 0;">
        </div>
        <div class="space_mainT" style="font-size: 1.5em;top:35%">
            
        </div>
    </div>
    <div id="space_content_wrap">
        <div class="space_menu">
            <div class="space_title"style="font-size:1.4em">
                교육문화사업<br>
                <span style="font-size:small;">교육문화 이용안내</span>
            </div>
            <ul class="space_list">
                <li onclick="location.href='b1.php'">교육문화 이용안내</li>
                <li onclick="location.href='b2.php'">교육문화 프로그램</li>
                <li><a href="https://holthanam.e-ncom.co.kr/main/index.do">프로그램신청</a></li>
            </ul>
        </div>
    </div>
    <div id="a_content">
        <div class="a_title">
            교육문화 이용안내
        </div>
        <div id="a2_content">
                <span style="font-size:1.3em;font-weight: bold;">
                이용안내
                </span><br><br>
                <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span><span style="font-size: 1.1em;font-weight: bold;">접수안내</span><br>
                <br>
                <div style="padding-left: 5px;">
                -'하남시종합사회복지관 홈페이지' '교육문화사업' →'교육문화프로그램' 참고
                <br>-접수문의 : 031-790-2900
                <br>-코로나 19로 인해 10명 이하로 진행 가능한 강좌를 한 달 단위로 모집합니다.
                <br>-기관 방문 시 마스크 착용 후 방명록을 작성해 주시기 바랍니다.
                </div>
                <br><br>
                
                <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span><span style="font-size: 1.1em;font-weight: bold;">이용시 유의사항</span><br>
                <br>
                <div style="padding-left: 5px;">
                -재료비, 교재비 및 기타 비용은 수강료와 별도입니다. 모든 재료비는 담당 강사에게 직접 납부해 주시기 바랍니다.
                <br>-법정공휴일은 수업이 없으며, 공휴일로 인한 휴강은 보강하지 않습니다.
                <br>-주차공간이 협소하오니 가급적 대중교통을 이용해주시기 바라며, 지하주차장(무료) 만차 시 인근 공영주차장(유료)을 이용해주시기 바랍니다.
                <br>(수강료에는 주차료가 포함되어있지 않습니다.)
                </div>
                <br><br>

                <span style="color: crimson;font-size: 1.5em;font-weight: bold;">・</span><span style="font-size: 1.1em;font-weight: bold;">환불안내</span><br>
                <br>
                <div style="padding-left: 5px;">
                    -개강일 이전 : 환불 신청서 작성 후 전액 환불됩니다.(온라인 환불은 불가하오니 신중하게 선택해 주세요.)
                    <br>-개강일 이후 :	‘평생교육법 시행령’ 학습비 반환 기준 의거 환불됩니다.
                    <br> 1개월 이내 → 1/3, 1/2 경과 전 각 2/3, 1/2 환불
                    <br>1개월 초과 → 1개월 이내 기준 적용 환불 + 잔여분 환불
                    <br>-수강개시 1/2 경과 후 환불하지 않습니다.
                    <br>-환불금은 매월 10일, 25일 본인 통장 계좌로 입금됩니다.
                </div>
                <br><br>
                <span style="font-size:1.3em;font-weight: bold;">
                    감면안내
                </span><br><br>
                <table class="b1_table">
                    <tr>
                        <th>대상</th>
                        <th>감면</th>
                        <th>할인율</th>
                        <th>제출증빙서류(15일 이내)</th>
                    </tr>
                    <tr>
                        <td>수급자</td>
                        <td>1 가구당 2강좌</td>
                        <td>100%</td>
                        <td>등본, 수급자 증명서</td>
                    </tr>
                    <tr>
                        <td>차상위계층(중위소등 50%이하)</td>
                        <td>1 가구당 2강좌</td>
                        <td>50%</td>
                        <td>등본, 차상위 증명서</td>
                    </tr>
                    <tr>
                        <td>한부모 가정</td>
                        <td>1 가구당 2강좌</td>
                        <td>50%</td>
                        <td>등본, 한부모가족증명서</td>
                    </tr>
                    <tr>
                        <td>국가유공자</td>
                        <td>본인 1강좌</td>
                        <td>50%</td>
                        <td>등본, 국가유공자증</td>
                    </tr>
                    <tr>
                        <td>장애인</td>
                        <td>본인 2강좌(보호자 동반요청가능)</td>
                        <td>50%</td>
                        <td>등본, 장애인등록증 사본 또는 복지카드 사본</td>
                    </tr>
                    <tr>
                        <td>다자녀가구</td>
                        <td>1 가구당 1강좌</td>
                        <td>30%</td>
                        <td>등본</td>
                    </tr>
                </table>
                <br>
                <span style="color: crimson;">
                    ※ ‘감면신청’ 및 ‘감면프로그램 접수’는 내방만 가능합니다.(인터넷 접수 불가)
                </span><br><br>
                <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span><span style="font-size: 1.1em;font-weight: bold;">유의사항</span><br>
                <br>
                <div style="padding-left: 5px;">
                    -다자녀가구란 두 자녀이상 중 만 15세 이하자녀가 포함된 가정을 말합니다.
                    <br>-서류제출 완료 이후부터 감면이 적용됩니다.(서류 미제출 시 감면신청 불가)
                    <br>-재 감면을 원하시는 수강생은 1년에 한 번씩 서류를 재 제출바랍니다.
                    <br>-수강료 감면에 소요되는 재료비, 교재비 및 기타비용은 이용자가 부담합니다.
                    <br>-감면 인원은 각 프로그램 정원 내 20%내에서 이용가능하며, 기존 이용자가 있을 시에는 대기할 수 있습니다.
                    <br>-감면받은 이용프로그램의 출석일수가 50%미만일 경우 해당 프로그램의 감면비용을 전액 지불하여야 합니다.
                    <br>-감면신청은 프로그램 접수기간 내 가능하며, 개강 후에는 신청 및 프로그램 변경이 불가합니다.
                </div>
                <br><br>
                <span style="color: #6485c0;font-size: 1.5em;font-weight: bold;">・</span><span style="font-size: 1.1em;font-weight: bold;">강사 모집</span><br>
                <br>
                <div style="padding-left: 5px;">
                    -새로운 교육문화프로그램 강좌 개설을 희망하시면 이력서와 강의계획서를 보내주시기 바랍니다.
                    <br>-문의 : 031)790-2932, holthanam@daum.net
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