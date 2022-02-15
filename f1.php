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
                <span style="font-size:small;">개인정보처리방침</span>
            </div>
            <ul class="space_list">
                <li onclick="location.href='f1.php'">개인정보처리방침</li>
                <li onclick="location.href='f2.php'">이용약관</li>
            </ul>
        </div>
    </div>
    <div id="a_content">
        <div class="a_title">
            개인정보처리방침
        </div>
       <div id="a2_content">
            <하남시종합사회복지관>은 개인정보 보호법 제30조에 따라 정보주체의 개인정보를 보호하고 이와 관련한 고충을 신속하고 원활하게 처리할 수 있도록 하기 위하여 다음과 같이 처리지침을 수립 ‧ 공개합니다.
            <br><br>
            <span style="font-size: 1.3em;font-weight: bold;">제1조(개인정보의 처리 목적)</span>
            <br>
            <하남시종합사회복지관>은 다음의 목적을 위하여 개인정보를 처리합니다. 처리하고 있는 개인정보는 다음의 목적 이외의 용도로는 이용되지 않으며, 이용 목적이 변경되는 경우에는 개인정보보호법 제18조에 따라 별도의 동의를 받는 등 필요한 조치를 이행하고 있습니다.
            <br><br>
            1. 민원사무 처리
            <br>
            민원인의 신원 확인, 민원사항 확인, 사실조사를 위한 연락‧통지, 처리결과 통보 등을 목적으로 개인정보를 처리합니다.
            <br>
            2. 재화 또는 서비스 제공
            <br>    
            서비스 제공, 맞춤 서비스 제공, 본인인증, 연령인증, 기부금영수증, 자원봉사, 대관, 기관방문교육, 요금결제‧정산 등을 목적으로 개인정보를 처리합니다.   
            <br>
            3. 홍보에서의 활용
            <br>    
            신규 서비스 및 맞춤 서비스제공, 이벤트 및 홍보성 정보제공 및 참여기회 제공, 인구통계학정 특성에 따른 서비스 제공, 서비스의 유효성 확인, 서비스 이용에 대한 통계 등을 목적으로 개인정보를 처리합니다.
            <br><br><br>
            <span style="font-size: 1.3em;font-weight: bold;">제2조(개인정보의 처리 및 보유기간)</span>
            <br>
            <하남시종합사회복지관>은 법령에 따른 개인정보 보유·이용기간 또는 정보주체로부터 개인정보 수집 시에 동의받은 개인정보 보유·이용기간 내에서 개인정보를 처리·보유합니다. 각각의 개인정보 처리 및 보유 기간은 다음과 같습니다.
            <br><br>
            1. 프로그램 신청을 위한 회원가입 및 관리 : 홈페이지 탈퇴시까지
            <br>
            2. 관련법령에 의한 보유기간
            <div style="padding-left: 30px;">
            가. 계약 또는 청약철회 등에 관한 기록 : 5년(전자상거래 등에서 소비자보호에 관한 법률)
            <br>
            나. 대금결재 및 재화 등의 공급에 관한 기록 : 5년(전자상거래 등에서 소비자보호에 대한 법률)
                <br>
            다. 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년(전자상거래 등에서의 소비자보호에 관한 법률)
            <br>
            라. 본인확인에 관한 기록 : 6개월(정보통신망 이용촉진 및 정보보호 등에 관한 법률)
                <br>
            마. 방문에 관한 기록 : 3개월(통신비밀보호법)
            </div>
            3. 회사 내부 방침에 의한 보유항목 및 기간
            <div style="padding-left: 30px;">
            가. 보유항목 : 후원자 인적사항 및 후원사항, 자원봉사자 필수정보 및 선택정보
                <Br>
            나. 보유기간 : 후원관련(신청해지일로부터 5년까지 보관), 자원봉사관련(파기요청시까지)
                    <br>
            다. 보유근거 : 후원자 연말정산 소득공제 증빙을 위한 기부금 영수증 발행, 자원봉사VMS사이트 실적입력
            </div>
            <br><br>
            <span style="font-size: 1.3em;font-weight: bold;">제3조(개인정보의 제3자 제공 및 취급위탁에 관한 사항)</span>
            <br>
            1. <하남시종합사회복지관>은 정보주체의 개인정보를 제1조(개인정보의 처리 목적)에서 명시한 범위 내에서만 처리하며, 정보주체의 동의, 법률의 특별한 규정 등 개인정보 보호법 제17조 및 제18조에 해당하는 경우에만 개인정보를 제3자에게 제공합니다.
            <br>
            2. <하남시종합사회복지관>은 다음과 같이 개인정보를 제3자에게 제공하고 있습니다.
            <br>
            <table class="f1_table">
                <tr>
                    <th>위탁대상자</th>
                    <th>제공항목</th>
                    <th>위탁업무내용</th>
                </tr>
                <tr>
                    <td>사단법인 금융결제원</td>
                    <td>성명, 금융기관명, 계좌번호, 생년월일, 전화번호, 기타 개인정보 등</td>
                    <td>CMS출금이체 서비스제공 및 출금이체 신규 등록 및 해지 사실 통지,프로그램 신청 결제를 위한 신용카드 정보</td>
                </tr>
                <tr>
                    <td>국세청</td>
                    <td>상동</td>
                    <td>국세청 연말정산 간소화 서비스</td>
                </tr>
                <tr>
                    <td>사회복지자원봉사인증</td>
                    <td>상동</td>
                    <td>자원봉사 실적 입력을 위한 정보</td>
                </tr>
                <tr>
                    <td>지자체,교육청 등</td>
                    <td>상동</td>
                    <td>지도감독 등 요청시 제공</td>
                </tr>
                <tr>
                    <td>올가이드</td>
                    <td>상동</td>
                    <td>홈페이지 유지보수 업무</td>
                </tr>
            </table>
            3. 최소한 정보 외의 개인정보 수집에 대한 미동의에 따른 불이익 여부 : 신청 불가
            <br><br><Br>
            <span style="font-size: 1.3em;font-weight: bold;">제4조(정보주체의 권리‧의무 및 그 행사방법)</span>
            <br>
            1. 이용자는 개인정보주체로서 <하남시종합사회복지관>과 관련하여 다음과 같은 권리를 행사할 수 있습니다.
            <div style="padding-left: 30px;">
            - 개인정보 열람요구, 오류 등이 있을 경우 정정 요구, 삭제요구, 처리정지 요구
                </div>
            2. 제1항에 따른 권리 행사는 <하남시종합사회복지관>에 대해 개인정보보호법 시행령 제41조제1항에 따라 서면, 전자우편, 모사전송(FAX) 등을 통하여 하실 수 있으며, <하남시종합사회복지관>은 이에 대해 지체 없이 조치하겠습니다.
                    <br>
            3. 제1항에 따른 권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보 보호법 시행규칙 별지 제11호 서식에 따른위임장을 제출하셔야 합니다.
            <br>
            4. 개인정보 열람 및 처리정지 요구는 개인정보보호법 제35조 제5항, 제37조 제2항에 의하여 정보주체의 권리가 제한 될 수 있습니다.
            <br>
            5. 개인정보의 정정 및 삭제 요구는 다른 법령에서 그 개인정보가 수집 대상으로 명시되어 있는 경우에는 그 삭제를 요구할 수 없습니다.
            <br>
            6. <하남시종합사회복지관>은 정보주체 권리에 따른 열람의 요구, 정정·삭제의 요구, 처리정지의 요구 시 요구를 한 자가 본인이거나 정당한 대리인 인지 확인합니다.
                <br><br><br>
            <span style="font-size: 1.3em;font-weight: bold;">제5조(처리하는 개인정보의 항목)</span>
                <br>
            <하남시종합사회복지관>은 다음의 개인정보 항목을 처리하고 있습니다.
            <br><br>
            1. 프로그램신청 : 이름, 성별, 생년월일, 이메일, 주소, 아이디, 비밀번호, 휴대전화번호 등
            <br>
            2. 후원신청 : 성명, 주민번호, 연락처, 예금주, 계좌번호 등
            <br>
            3. 자원봉사신청 : 성명, 생년월일, 연락처 등
            <br>
            4. 선택항목 : 후원동기, 추천인, 직업 등
            <br><br><br>
            <span style="font-size: 1.3em;font-weight: bold;">제6조(개인정보의 파기)</span>
            <br>
            <하남시종합사회복지관>은 원칙적으로 개인정보 처리목적이 달성된 경우에는 지체없이 해당 개인정보를 파기합니다. 파기의 절차, 기한 및 방법은 다음과 같습니다.
            <br><br>
            1. 파기절차 : 이용자가 입력한 정보는 목적 달성 후 별도의 데이터베이스에 옮겨져 내부방침 및 기타 관련 법령에 따라 일정기간 저장된 후 혹은 즉시 파기됩니다. 이 때, 데이터베이스로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 다른 목적으로 이용되지 않습니다.
                <br>
            2. 파기기한 : 이용자의 개인정보는 개인정보의 보유기간이 경과된 경우에는 보유기간 종료일로부터 5일 이내에, 개인정보의 처리 목적 달성, 해당서비스의 폐지, 사업의 종료 등 그 개인정보가 불필요하게 되었을 때에는 개인정보의 처리가 불필요한 것으로 인정되는 날로부터 5일 이내에 그 개인정보를 파기합니다.
            <br>
            3. 파기방법 : 서버에 저장된 DB를 삭제시키거나 종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기합니다.
            <br><Br><br>
            <span style="font-size: 1.3em;font-weight: bold;">제7조(개인정보의 안전성 확보조치)</span>
            <br>
            <하남시종합사회복지관>은 개인정보보호법 제29조에 따라 다음과 같이 안전성 확보에 필요한 기술적/관리적 조치를 취하고 있습니다.
            <br><br>
            1. 개인정보 취급 직원의 최소화 및 교육
            <div style="padding-left: 30px;">
            - 개인정보를 취급하는 직원을 지정하고 담당자에 한정시켜 최소화하고 매년 개인정보 보호교육을 실시하여 
                <br>
                개인정보를 관리하는 대책을 시행하고 있습니다.
            </div>
            2. 개인정보의 암호화
            <div style="padding-left: 30px;">
            - 이용자의 개인정보는 비밀번호가 암호화 되어 저장 및 관리되고 있어 본인만이 알 수 있으며, 
                <br>
                중요한 데이터는 파일 및 전송 데이터를 암호화해 보안기능을 사용합니다.
            </div>    
            3. 개인정보에 대한 접근 제한
            <div style="padding-left: 30px;">
            - 개인정보에 대한 접근 통제를 위하여 개인정보를 처리하는 데이터베이스시스템에 대한 접근권한의 부여, 변경, 삭제를 통해 
                <br>
                필요한 조치를 하고 있으며 네트워크 보안장비시스템(UTM)을 이용하여 외부로부터의 무단 접근을 통제하고 있습니다.
            </div>
            4. 문서보안을 위한 잠금장치 사용
            <div style="padding-left: 30px;">
            - 개인정보가 포함된 서류, 보조저장매체 등을 잠금장치가 있는 안전한 장소에 보관하고 있습니다.
            </div>
            <br><Br><br>
                <span style="font-size: 1.3em;font-weight: bold;">제8조(개인정보 보호 책임자)</span>
                <br>
                1. <하남시종합사회복지관>은 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 정보주체의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보 보호 책임자를 지정하고 있습니다.
                <br><br>
                <div style="padding-left: 30px;">
                    ○ 개인정보관리 책임자 : 하남시종합사회복지관장 
                    <br>
                    ○ 담당부서 : 기획총무팀  
                    <br>
                    ○ 연 락 처 : 031-790-2925, hanam@holt.or.kr
                </div>
                <br><br>
                2. 정보주체는 <하남시종합사회복지관>의 서비스(또는 사업)를 이용하시면서 발생한 모든 개인정보 보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 보호책임자 및 담당부서로 문의하실 수 있습니다. <하남시종합사회복지관> 정보주체의 문의에 대해 지체 없이 답변 및 처리해드릴 것입니다.
                <br><Br><br>
                    <span style="font-size: 1.3em;font-weight: bold;">제9조(권익침해 구제방법)</span>
                <br>
                1. 정보주체는 아래의 기관에 대해 개인정보 침해에 대한 피해구제, 상담 등을 문의하실 수 있습니다.
                    <br>
                2. 아래의 기관은 <하남시종합사회복지관>과는 별개의 기관으로서,
                    <br>
                <하남시종합사회복지관>의 자체적인 개인정보 불만처리, 피해구제 결과에 만족하지 못하시거나 보다 자세한 도움이 필요하시면 문의하여 주시기 바랍니다.
                    <br><br>
                    <table class="f1_table"> 
                        <tr>
                            <th>기관명</th>
                            <th>전화번호</th>
                            <th>홈페이지 주소</th>
                        </tr>
                        <tr>
                            <td>개인정보 침해신고센터</td>
                            <td>(국번없이)118</td>
                            <td>privacy.kisa.or.kr</td>
                        </tr>
                        <tr>
                            <td>개인정보 분쟁조정위원회</td>
                            <td>(국번없이)1833-6972</td>
                            <td>www.kopico.go.kr</td>
                        </tr>
                        <tr>
                            <td>대검찰청사이버범죄수사단</td>
                            <td>02-3480-3573</td>
                            <td>www.spo.go.kr</td>
                        </tr>
                        <tr>
                            <td>경찰청 사이버안전국</td>
                            <td>(국번없이)182</td>
                            <td>http://cyberbureau.police.go.kr</td>
                        </tr>
                    </table>
                    <br><br><br>
                    <span style="font-size: 1.3em;font-weight: bold;">제10조(처리방침 변경)</span>
                    <br>
                    이 개인정보 처리방침은 시행일로부터 적용되며, 법령 및 방침에 따른 변경내용의 추가, 삭제 및 정정이 있는 경우에는 변경사항의 시행 7일 전부터 공지사항을 통하여 고지할 것입니다.
                    <br><br><br>
                    <span style="font-size: 1.3em;font-weight: bold;">부 칙</span>
                    <br>
                    본 개인정보 처리방침은 2013년 12월부터 시행합니다.

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