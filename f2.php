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
                이용안내<br>
                <span style="font-size:small;">이용약관</span>
            </div>
            <ul class="space_list">
                <li onclick="location.href='f1.php'">개인정보처리방침</li>
                <li onclick="location.href='f2.php'">이용약관</li>
            </ul>
        </div>
    </div>
    <div id="a_content">
        <div class="a_title">
            이용약관
        </div>
        <div id="a2_content">
            <span style="font-size: 2em ;font-weight: bold;">제1장 총칙</span>
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제1조(목적)</span>
            <br>
            이 이용약관(이하 '약관')은 하남시종합사회복지관(이하 ‘복지관’)이 이용자에게 공동으로 제공하는 www.holthanam.or.kr 사이트의 이용에 관한 제반 사항과 기타 필요한 사항을 총체적으로 규정함을 목적으로 합니다.
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제2조(이용약관의 효력 및 변경)</span>
            <br>
            1. 이 약관은 서비스 초기화면에 공지되거나 전자우편의 방법으로 이용자에게 공지됨으로써 그 효력이 발생됩니다.
            <Br>
            2. 합리적인 사유가 발생할 경우, 복지관은 관계법령에 위배되지 않는 범위 내에서 본 약관을 개정할 수 있습니다.
                <br>
            3. 이 약관에 동의하는 것은 정기적으로 서비스페이지를 방문하여 약관의 변경 사항을 확인하는 것에 동의함을 의미합니다. 변경된 약관에 대한 정보를 알지 못해 발생하는 이용자의 피해는 복지관에서 책임지지 않습니다.
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제3조(약관 외 준칙)</span>
            <br>
            본 약관에 명시되지 아니한 사항에 대해서는 서비스별 약관의 취지, 전기통신기본법, 전기통신사업법, 정보통신망이용촉진및정보보호등에관한법률, 청소년보호법 기타 대한민국의 관련 법령 규정에 따릅니다.
            <br><br><br>
            <span style="font-size: 2em ;font-weight: bold;">제2장 서비스 이용계약의 체결</span>
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제4조(서비스 이용계약의 성립)</span>
            <br>
            1. 이용계약은 이용고객의 본 이용약관 내용에 대한 동의와 이용신청에 대하여 복지관이 이용 승낙을 함으로써 성립합니다.
                            <br>
            2. 본 이용약관에 대한 동의는 해당 신청 페이지의 신청버튼을 누름으로써 이 약관에 동의하는 것으로 간주됩니다.
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제5조(서비스 이용 신청)</span>
            <br>
            1. 본 서비스를 이용하고자 하는 이용고객은 복지관에서 요청하는 정보를 제공하여야 합니다. 단, 이용자가 제공한 정보는 개인정보보호정책에 따라 관리됩니다.
                <br>
            2. 모든 이용자, 후원자 및 자원봉사자는 반드시 본인의 이름과 관련정보를 제공하여야만 서비스를 이용할 수 있으며, 실명으로 등록하지 않은 사용자는 일체의 권리를 주장할 수 없습니다. 주민등록번호는 동명이인의 구분과 복지관 프로그램, 후원 및 자원봉사 관리 목적 외에는 그 어떠한 용도로도 사용되지 않습니다.
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제6조(개인정보의 보호 및 사용)</span>
            <br>
            1. 복지관은 관계 법령이 정하는 바에 따라 이용자 등록정보를 포함한 이용자의 개인정보를 보호하기 위해 노력합니다. 이용자 개인정보의 보호 및 사용에 대해서는 관련 법령 및 복지관의 개인정보보호정책에 따릅니다. 단, 서비스 페이지상에 링크된 사이트에서는 복지관이 아닌 링크된 사이트 운영사의 개인정보보호정책에 따릅니다. 또한 복지관은 이용자의 귀책 사유로 인해 노출된 정보에 대해서 일체의 책임을 지지 않습니다.
                <br>
            2. 하남시종합사회복지관은 「정보통신망 이용촉진 및 정보보호 등에 관한 법률 제2조 1항의 3」에 해당되지 않는 '비영리 사회복지법인' 으로 프로그램을 신청하거나 후원하신 내역 제공(예; 국세청 연말정산간소화서비스 등록 등)을 위해 최소한의 절차로 부득이하게 주민등록번호를 요청하고 있습니다. 또한 회원가입은 복지관 프로그램 신청을 위한 절차로, 위에 언급한 사항 외에 대부분의 홈페이지 메뉴는 회원가입 절차 없이 이용하실 수 있습니다. 이점 참고하시어 회원가입을 진행해 주시기 바랍니다.
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제7조(이용 신청의 승낙과 제한)</span>
            <br>
            1. 복지관은 제 5조의 규정에 의한 이용 신청 고객에 대하여 업무 수행상 또는 기술상 지장이 없는 경우에 원칙적으로 접수 순서에 따라 서비스 이용을 승낙합니다.
                <br>
            2. 복지관은 아래 사항에 해당하는 경우에는 서비스 이용을 승낙하지 아니 합니다.
                <div style="padding-left: 30px;"> 
                    ○ 실명이 아니거나 타인의 명의를 이용하여 신청한 경우
                    <br>
                    ○ 신청서의 내용을 허위로 기재한 경우
                  <br>
                    ○ 형법에서 규정한 범죄 행위의 목적으로 본 서비스를 이용하고자 하는 경우
                  <br>
                    ○ 청소년보호법의 취지에 위배되는 목적으로 본 서비스를 이용하고자 하는 경우
                  <br>
                    ○ 기타 현행 법령에 위배되는 목적으로 본 서비스를 이용하고자 하는 경우
                  <br>
                    ○ 영리를 추구할 목적으로 본 서비스를 이용하고자 하는 경우
                  <br>
                    ○ 본 서비스와 경쟁 관계에 있는 이용자가 복지관 이익을 저해하려는 목적으로 신청하는 경우
                  <br>
                    ○ 기타 규정한 제반 사항을 위반하며 신청하는 경우</div>
                3. 복지관은 서비스 이용신청이 다음 각 호에 해당하는 경우에는 그 신청에 대하여 승낙 제한 사유가 해소될 때까지 승낙을 유보할 수 있습니다.
                    <div style="padding-left: 30px;">○ 복지관의 설비의 여유가 없는 경우
                        <br>
                        ○ 복지관의 기술상 지장이 있는 경우
                      <br>
                        ○ 기타 복지관의 사정으로 이용 승낙이 곤란한 경우</div>
                4.지관은 이용 신청 고객이 만 14세 미만의 아동일 경우 정보통신망이용촉진 및 정보보호등에관한법률 등에 따라 법정 대리인의 동의가 필요할 수 있습니다.
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제8조(회원번호 부여 및 변경 등)</span>
            <br>    
            1. 복지관은 프로그램 신청에 대하여 회원가입시 약관에 정하는 바에 따라 이용자 ID를 부여합니다.
            <br>
            2. 이용자 ID는 다음 각 호의 1에 해당하는 경우에 이용 고객의 요청에 의하여 변경할 수 있습니다.
            <div style="padding-left: 30px;">
            ○ 이용자 ID가 고객의 연락처 또는 주민등록번호 등으로 사생활 침해의 우려가 있는 경우
                <br>
            ○ 타인에게 혐오감을 주거나 특히 청소년 및 아동에 유해하다고 판단되는 경우
                <br>
            ○ 기타 이용 고객이 합리적인 사유를 제시하는 경우
            </div>
            3. 서비스 이용자 ID 및 비밀번호의 관리책임은 이용자에게 있습니다. 이용자 ID 및 비밀번호의 관리를 소홀이 하여 발생하는 서비스 이용 상의 손해 또는 제3자에 의한 부정 이용 등에 대한 책임은 이용자 본인에게 있으며 복지관은 그에 대한 책임을 일절 지지 않습니다.
            <br>
            4. 기타 이용자 개인정보 관리 및 변경 등에 관한 사항은 서비스별 안내에서 정하는 사항에 따릅니다.
            <br><br><br>
            <span style="font-size: 2em ;font-weight: bold;">제3장 계약 당사자의 의무</span>
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제9조(복지관의 의무)</span>
            <br>    
            1. 복지관은 이용고객이 희망한 서비스 제공 개시일에 특별한 사정이 없는 한 서비스를 이용할 수 있도록 합니다.
            <br>
            2. 복지관은 계속적이고 안정적인 서비스의 제공을 위하여 설비에 장애가 생길 때에는 부득이한 사유가 없는 한 지체 없이 이를 수리 또는 복구합니다.
            <br>
            3. 복지관은 개인정보 보호를 위해 개인정보보호정책을 공시하고 준수합니다.
            <br>
            4. 복지관은 이용 고객으로부터 제기되는 의견이나 불만이 정당하다고 객관적으로 인정될 경우에는 적절한 절차를 거쳐 즉시 처리합니다. 다만, 즉시 처리가 곤란한 경우는 이용자에게 그 사유와 처리 일정을 통보합니다.
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제10조(이용자의 의무)</span>
            <br>
            1. 복지관 프로그램, 후원 및 자원봉사신청 시 실명으로 모든 사항을 사실에 근거하여 작성하여야 합니다. 허위 또는 타인의 정보를 이용한 사실이 발견된 경우 서비스 이용과 관련한 일체의 권리를 주장할 수 없습니다.
            <br>
            2. 이용자는 본 약관에서 규정하는 사항과 기타 복지관이 정한 제반 규정, 공지하는 사항을 준수하여야 합니다. 또한 이용자는 복지관 업무에 방해가 되는 행위, 명예를 손상시키는 행위를 해서는 안됩니다.
            <br>
            3. 이용자는 청소년보호법 등 관계 법령을 준수하여야 합니다. 청소년보호법 등 관계 법령을 위반한 경우는 해당 법령에 의거 처벌을 받게 됩니다.
            <br>
            4. 이용자는 주소, 연락처, 전자우편 주소 등 이용계약 사항이 변경된 경우에 온라인상에서 이를 수정해야 합니다. 수정을 하지 않거나 수정 지연으로 발생되는 문제에 대한 책임은 이용자에게 있습니다.
            <br>
            5. 이용자는 이용자에게 부여된 ID와 비밀번호를 직접 관리해야 합니다. 이용자의 관리 소홀로 발생한 문제의 책임은 이용자에게 있습니다.
            <br>
            6. 이용자는 복지관의 사전 승낙 없이 서비스를 이용하여 영업 활동을 할 수 없으며, 그 영업 활동의 결과에 대한 책임은 이용자에게 있습니다. 또한 이용자는 이와 같은 영업 활동으로 복지관에 손해를 끼칠 경우, 복지관에 대해 손해배상 의무를 지며 해당 이용자에 대해 서비스 이용 제한 및 적법한 절차를 거쳐 손해배상 등을 청구할 수 있습니다.
            <br>
            7. 이용자는 복지관 및 제 3자의 지적 재산권을 침해해서는 안됩니다.
            <br>
            8. 만 14세 미만의 아동이 회원가입을 하기 위해서는 특수한 경우를 제외하고는 그 법정대리인이 아동의 회원가입에 대해 동의를 해야만 합니다.
            <br>
            9. 이용자는 다음 각 호에 해당하는 행위를 하여서는 안되며, 해당 행위를 하는 경우에 서비스 이용제한 및 적법 조치를 포함한 제재를 가할 수 있습니다.
            <div style="padding-left: 30px;">
                ○ 회원가입 신청 또는 회원정보 변경 시 허위 내용을 등록하는 행위
                <br>
                ○ 다른 이용자의 ID, 비밀번호, 주민등록번호 등을 도용하는 행위
              <Br>
                ○ 이용자 ID를 타인과 거래하는 행위
              <br>
                ○ 복지관의 운영진, 직원 또는 관계자를 사칭하는 행위
              <br>
                ○ 복지관으로부터 특별한 권리를 받지 않고 프로그램을 변경하거나, 서버를 해킹 하거나 웹사이트 또는 게시된 정보의 일부분 또는 전체를 임의로 변경하거나, 서비스를 비정상적인 방법으로 사용하는 행위
              <br>
                ○ 복지관 프로그램 상의 버그를 악용하는 행위
              <br>
                ○ 서비스에 위해를 가하거나 서비스를 고의로 방해하는 행위
              <br>
                ○ 복지관 사전 승낙 없이 서비스를 이용하여 영업활동을 하는 행위
              <br>
                ○ 본 서비스를 통해 얻은 정보를 복지관의 사전 승낙 없이 서비스 이용 외의 목적으로 복제하거나, 이를 출판 및 방송 등에 사용하거나, 제 3자에게 제공하는 행위
              <br>
                ○ 타인의 특허, 상표, 영업비밀, 저작권, 기타 지적재산권을 침해하는 내용을. 전송, 게시, 전자우편 또는 기타의 방법으로 타인에게 유포하는 행위
              <br>
                ○ 청소년보호법 또는 형법에 위반되는 저속, 음란한 내용의 정보, 문장, 도형, 음향, 동영상을 전송, 게시, 전자우편 또는 기타의 방법으로 타인에게 유포하는 행위
              <br>
                ○ 심히 모욕적이거나 개인 신상에 대한 내용이고 타인의 명예나 프라이버시를 침해할 수 있는 내용을 전송, 게시, 전자우편 또는 기타의 방법으로 타인에게 유포하는 행위
              <br>
                ○ 다른 이용자를 희롱 또는 위협하거나, 특정 이용자에게 지속적으로 고통. 또는 불편을 주는 행위
              <br>
                ○ 복지관 승인을 받지 않고 다른 사용자의 개인정보를 수집 또는 저장하는 행위
              <br>
                ○ 범죄와 결부된다고 객관적으로 판단되는 행위
              <br>
                ○ 본 약관을 포함하여 기타 복지관이 정한 제반 규정 또는 이용 조건을 위반하는 행위
              <br>
                ○ 기타 관계 법령에 위배되는 행위</div>
            <br><br><Br>
                <span style="font-size: 2em ;font-weight: bold;">제4장 서비스 이용</span>
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제11조(서비스 이용 시간)</span>
            <br>
            1. 서비스 이용은 복지관의 업무상 또는 기술상 특별한 지장이 없는 한 연중무휴, 1일 24시간 운영을 원칙으로 합니다. 단, 복지관은 시스템 정기점검, 증설 및 교체를 위해 복지관이 정한 날이나 시간에 서비스를 일시 중단할 수 있으며, 예정되어 있는 작업으로 인한 서비스 일시 중단은 서비스 페이지를 통해 사전에 공지합니다.
                <br>
            2. 복지관은 긴급한 시스템 점검, 증설 및 교체 등 부득이한 사유로 인하여 예고 없이 일시적으로 서비스를 중단할 수 있으며, 새로운 서비스로의 교체 등 복지관이 적절하다고 판단하는 사유에 의하여 현재 제공되는 서비스를 완전히 중단할 수 있습니다.
                <Br>
            3. 복지관은 국가비상사태, 정전, 서비스 설비의 장애 또는 서비스 이용의 폭주 등으로 정상적인 서비스 제공이 불가능할 경우, 서비스의 전부 또는 일부를 제한하거나 중지할 수 있습니다. 다만 이 경우 그 사유 및 기간 등을 이용자에게 사전 또는 사후에 공지합니다.
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제12조(이용자 관리)</span>
            <br>
            1. 이용자ID와 비밀번호에 관한 모든 관리 책임은 이용자에게 있습니다.
                    <br>
            2. 복지관 이용자 ID에 의하여 제반 이용자 관리업무를 수행 하므로 이용자가 이용자 ID를 변경하고자 하는 경우 복지관이 인정할 만한 사유가 있어야만 이용자 ID를 변경할 수 있습니다.
                    <br>
            3. 이용 고객이 등록한 이용자 ID 및 비밀번호에 의하여 발생되는 사용상의 과실 또는 제 3자에 의한 부정사용 등에 대한 모든 책임은 해당 이용 고객에게 있습니다.
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제13조(게시물의 관리)</span>
            <br>
            1. 복지관은 다음 각 호에 해당하는 게시물이나 자료를 사전 통지 없이 삭제하거나 이동 또는 등록을 거부할 수 있습니다.
            <div style="padding-left: 30px;">
            ○ 다른 이용자 또는 제 3자에게 심한 모욕을 주거나 중상모략으로 명예를 손상시키는 내용인 경우
                <br>
            ○ 청소년보호법에 위반되는 내용의 정보, 문장, 도형 등을 게시거나 링크 시키는 경우
                <br>
            ○ 청소년보호법에 위반되는 음란한 내용이거나 음란사이트를 링크 시키는 경우
                <br>
            ○ 이용자 ID 또는 게임 머니 등 사이버 자산의 매매에 관련된 내용인 경우
                <br>
            ○ 불법복제 또는 해킹을 조장하는 내용인 경우
                <br>
            ○ 영리를 목적으로 하는 광고일 경우
                <br>
            ○ 범죄와 결부된다고 객관적으로 인정되는 내용일 경우
                <br>
            ○ 다른 이용자 또는 제 3자의 저작권 등 기타 권리를 침해하는 내용인 경우
                <br>
            ○ 복지관에서 규정한 게시물 원칙에 어긋나거나, 게시판 성격에 부합하지 않는 경우
                <br>
            ○ 기타 관계 법령에 위배된다고 판단되는 경우
            </div>
            2. 서비스를 이용하던 이용자가 탈퇴(해지)를 하는 경우 본인이 직접 작성한 게시물은 직접 삭제해야 하며, 남아 있는 게시물에 대해서 복지관은 책임지지 않습니다.
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제14조(게시물에 대한 저작권)</span>
            <br>
            1. 이용자가 서비스 화면 내에 게시한 게시물의 저작권은 게시한 이용자에게 귀속됩니다. 또한 복지관은 게시자의 동의 없이 게시물을 상업적으로 이용할 수 없습니다.
            <br>
            2. 이용자는 서비스를 이용하여 취득한 정보를 임의 가공, 판매하는 행위 등 서비스에 게재된 자료를 상업적으로 사용할 수 없습니다.
            <Br>
            3. 이용자는 이용자가 게시하거나 등록하는 서비스 내의 내용물, 게시 내용에 대해 본 약관 제13조 각 호에 해당된다고 판단되는 경우 사전통지 없이 삭제하거나 이동 또는 등록 거부할 수 있습니다.
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제15조(정보의 제공)</span>
            <br>
            1. 복지관은 이용자에게 서비스 이용에 필요가 있다고 인정되는 각종 정보에 대해서 서비스 화면이나 전자 우편 또는 서신 등의 방법으로 이용자에게 제공할 수 있습니다.
                <br>
            2. 복지관은 서비스 개선 및 이용자 대상의 서비스 소개 등의 목적으로 동의 하에 추가적인 개인 정보를 요구할 수 있습니다.
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제16조(서비스 이용 제한)</span>
            <br>
            복지관은 이용자가 서비스 이용내용에 있어서 본 약관 제10조 내용을 위반하거나, 다음 각 호에 해당하는 경우 사전통보 없이 서비스 이용을 제한할 수 있습니다.
            <div style="padding-left: 30px;">
                ○ 미풍양속을 저해하는 비속한 ID 및 별명 사용
                <br>
                ○ 다른 이용자의 ID, 비밀번호 또는 주민등록번호 등을 도용한 경우
                <br>
                ○ 허위 또는 타인의 명의로 ID를 등록한 경우
                <br>
                ○ 타 이용자에게 심한 모욕을 주거나, 서비스 이용을 방해한 경우
                <br>
                ○ 서비스에 위해를 가하거나 고의로 방해한 경우
                <br>
                ○ 기타 정상적인 서비스 운영에 방해가 될 경우
                <br>
                ○ 청소년보호법 등 관계 법령에 금지되어 있는 정보를 전송 또는 게시했을 경우
                <br>
                ○ 정보통신 윤리위원회 등 관련 공공 기관의 시정 요구가 있는 경우
                <br>
                ○ 본 약관을 포함하여 기타 복지관이 정한 제반 규정 또는 이용 조건을 위반한 경우
                <br>
                ○ 기타 관계 법령에 위배되는 행위를 한 경우
                </div>
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제17조(서비스의 삭제 및 사이트의 분리)</span>
            <br>
            복지관은 수준 높은 서비스의 제공을 위하여 필요에 따라 수시로 서비스를 수정 및 삭제할 수 있습니다. 이러한 수정, 삭제로 인해 이용자들에게 심각한 불이익이 발생할 수 있는 사항에 대하여는 내용을 사전에 공지합니다.
            <br><br><br>
            <span style="font-size: 2em ;font-weight: bold;">제5장 계약 해지</span>
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제18조(계약 변경 및 해지)</span>
            <br>
            1. 이용자가 이용 계약을 해지하고자 하는 때에는 본인이 서비스 페이지상의 메뉴를 이용해 가입 해지를 해야 합니다.
                <br>
            2. 후원자의 경우, 별도로 후원 중단을 원할 경우 중단 의사를 사이트를 통하거나 전화 등을 통해 의사를 밝혀야 하며, 중단하는 경우에도 개인정보는 추후 각종 증명서 발급 또는 회원관리 업무를 위해 복지관에서 계속 보유하되 이용자가 사이트 이용 계약을 해지하고자 할 경우는 등록되어있는 개인정보를 폐기합니다.
                <br>
            3. 복지관은 이용자가 서비스 이용 내용에 있어서 본 약관 제10조, 제16조 내용을 위반하는 경우 사전통보 없이 이용 계약을 해지할 수 있습니다.
                <br>
            제6장 분쟁 조정 및 기타 사항
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제19조(손해 배상)</span>
            <br>
            1. 복지관에서 제공하는 무료 서비스 이용과 관련하여 이용자에게 발생한 어떠한 손해에 대해서도 책임을 지지 않습니다.
                <br>
            2. 복지관이 개별서비스 제공자와 제휴 협정을 맺고 이용자에게 개별서비스를 제공함에 있어 이용자가 개별서비스 이용약관에 동의를 한 뒤 개별서비스 제공자의 귀책사유로 인해 손해가 발생할 경우 관련 손해에 대해서는 개별서비스 제공자가 책임을 집니다.
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제20조(면책 조항)</span>
            <br>
            1. 복지관은 천재지변, 전쟁 및 기타 이에 준하는 불가항력으로 인하여 서비스를 제공할 수 없는 경우에는 서비스 제공에 대한 책임이 면제됩니다.
                <br>
            2. 복지관은 기간통신 사업자가 전기통신 서비스를 중지하거나 정상적으로 제공하지 아니하여 손해가 발생한 경우 책임이 면제됩니다.
            <br>
            3. 복지관은 서비스용 설비의 보수, 교체, 정기점검, 공사 등 부득이한 사유로 발생한 손해에 대한 책임이 면제됩니다.
            <br>
            4. 복지관은 이용자의 귀책사유로 인한 서비스 이용의 장애 또는 손해에 대하여 책임을 지지 않습니다.
            <br>
            5. 복지관은 이용자의 컴퓨터 오류에 의해 손해가 발생한 경우, 또는 이용자가 신상정보 및 전자우편 주소를 부실하게 기재하여 손해가 발생한 경우 책임을 지지 않습니다.
            <br>
            6. 복지관은 이용자가 서비스를 이용하면서 얻은 자료로 인한 손해에 대하여 책임을 지지 않습니다. 또한 복지관은 이용자가 서비스를 이용하며 타 이용자로 인해 입게 되는 
            
               정신적 피해에 대하여 보상할 책임을 지지 않습니다.
            <br>
            7. 복지관은 이용자가 서비스에 게재한 각종 정보, 자료, 사실의 신뢰도, 정확성 등 내용에 대하여 책임을 지지 않습니다.
            <br>
            8. 복지관은 이용자 상호간 및 이용자와 제 3자 상호 간에 서비스를 매개로 발생한 분쟁에 대해 개입할 의무가 없으며, 이로 인한 손해를 배상할 책임도 없습니다.
            <br>
            9. 복지관에서 이용자에게 무료로 제공하는 서비스의 이용과 관련하여 발생하는 손해에 대해서는 책임을 지지 않습니다.
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제21조(재판권 및 준거법)</span>
            <br>
            1. 이 약관에 명시되지 않은 사항이 관계법령에 규정되어 있을 경우에는 해당 법령을 따릅니다.
                <br>
            2. 서비스 이용으로 발생한 분쟁에 대해 소송이 제기되는 경우 법령에 정한 절차에 따른 법원을 관할 법원으로 합니다.
            <br><br><br>
            <span style="font-weight: bold;font-size: 1.3em;">제22조(후원금의 사용)</span>
            <br>
            1. 후원금은 복지관을 통해 지역사회 내 어려운 이웃에게 사용됩니다.
                <br>
            2. 후원금 내역은 이용자들이 확인할 수 있도록 투명하게 공개됩니다.

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