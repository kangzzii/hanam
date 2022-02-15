<?php
include "include.php";
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
    <div id="imgslide">
        <div id="imgs">
            <div class="box">
                <div class="box1">
                    <div class="box_content">
                        <br>
                        코로나 관련<br>
                        1:1문의<br>
                        <span style="font-size: 0.5em;">"코로나로 인한 수업 미참여 사유 발생시"</span>
                    </div>
                </div>
                <div class="box2">
                    <div class="box_content">
                        <br>
                        하남시종합사회복지관이<br>
                        마음을 잇겠습니다<br>
                        <span style="font-size: 0.5em;">"우리의 행복을 이어갑니다"</span>
                    </div>
                </div>
                <div class="box3">
                    <div class="box_content">
                        <br>
                        사람중심의<br>
                        복지를 이어갑니다<br>
                        <span style="font-size: 0.5em;">"주민참여형 복지로 행복한 하남만들기"</span>
                    </div>
                </div>
            </div>
            <div class="imgs">
                <img src="img/slide1.png">
                <img src="img/slide2.png">
                <img src="img/slide3.png">
            </div>
            <div class="slideprev">&#8249;</div>
            <div class="slidenext">&#8250;</div>
            <div class="dot_box">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
        
    </div>
    <div id="fast_bar">
        <ul class="fast_bar">
            <li><a href="c1.php"><img src="img/icon1.png">후원</a></li>
            <li><a href="c4.php"><img src="img/icon2.png">자원봉사</a></li>
            <li><a href="d6.php"><img src="img/icon3.png">시설대관</a></li>
            <li><a href="d6.php"><img src="img/icon4.png">기관방문</a></li>
            <li><a href="e8.php"><img src="img/icon5.png">오시는 길</a></li>
        </ul>
    </div>
    
    <div id="content">
        <div style="display: flex;width: 1100px;position: relative;">
            <div class="f_notice">
                <div class="f_title">
                    공지사항 <span style="float: right;"><a href="d1.php">+</a></span>
                </div>
                <table class="f_notice_table">
                    <tr>
                        <th>제목</th>
                        <th>작성일</th>
                    <tr>
                    <?php
                    $sql="select * from hanam_notice limit 0,5";
                    $rs=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($rs)){
                    ?>
                    <tr>
                        <td><a href="d1_content.php?no=<?php echo $row["no"]?>"><?php echo $row["title"]?></a></td>
                        <td><?php echo $row["date"]?></td>
                    <tr>
                    <?php }?>
                </table>
            </div>
            <div class="f_noticeSlide_wrap">
                <div class="f_noticeSlide">
                    <img src="img/2slide1.jpg">
                    <img src="img/2slide2.jpg">
                    <img src="img/2slide1.jpg">
                    <img src="img/2slide2.jpg">
                </div>
                <div class="f_notice_dotbox">
                    <div class="f_notice_dot"></div>
                    <div class="f_notice_dot"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="content" style="width:1300px">
        <div class="f_title">
            참여자 모집<span style="float: right;"><a href="d3.php">+</a></span>
        </div>
        <div style="width:1300px;display:flex;">
            <?php
            $sql2="select * from hanam_d3 order by no desc limit 0,3 ";
            $rs2=mysqli_query($conn,$sql2);
            while($row=mysqli_fetch_array($rs2)){
            ?>
            <div class="front_box">
                <div class="content_box">
                    <div class="content_img">
                        <?php 
                        $dir=$_SERVER["DOCUMENT_ROOT"]."/file/";
                        $fname="../file/".$row["file"];
                        ?>
                        <a href="d3_content.php?no=<?php echo $row["no"]?>">
                            <img src="<?php echo $fname ?>" style="width:280px">
                        </a>
                    </div>
                    <div class="content_text">
                        <a href="d3_content.php?no=<?php echo $row["no"]?>"><?php echo $row["name"] ?></a><br>
                        <span style="font-size: 0.8em;font-weight: normal;">
                            모집일 : <?php echo $row["date1"] ?> ~ <?php echo $row["date11"] ?><br>
                            활동일 : <?php echo $row["date2"] ?> ~ <?php echo $row["date22"] ?>
                        </span>
                    </div>
            </div>
            </div>
            <?php }?>
        </div>
    </div>
    <div id="content2">
        <div class="content2_wrap">
            <div class="content2_box1">
                <div style="position: relative;top: 100px;left: 140px;">
                    지역주민들과 함께 하는<br>
                    우리 복지관 사업을 소개합니다.
                </div>
            </div>
            <div class="content2_box2">
                <div style="display: flex;flex-wrap: wrap;padding-left: 80px;">
                    <div class="content2_box">
                        <div class="card" onclick="location.href='a1.php'">
                            <img src="img/back2.png" class="front">
                            <img src="img/back2_1.png" class="back">
                        </div>
                    </div>
                    <div class="content2_box">
                        <div class="card" onclick="location.href='a2.php'" >
                            <img src="img/back3.png" class="front">
                            <img src="img/back3_1.png" class="back">
                        </div>
                    </div>
                    <div class="content2_box">
                        <div class="card" onclick="location.href='a3.php'">
                            <img src="img/back4.png" class="front">
                            <img src="img/back4_1.png" class="back">
                        </div>
                    </div>
                    <div class="content2_box">
                        <div class="card" onclick="location.href='b1.php'">
                            <img src="img/back5.png" class="front">
                            <img src="img/back5_1.png" class="back">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div id="content">
        <div class="f_title">
            복지관 소식<span style="float: right;"><a href="d4.php">+</a></span>
        </div>
        <div class="content3"><!-- DB -->
        <?php
            $sql="select * from hanam_d4 order by no desc limit 0,6";
            $rs=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($rs)){
            ?>
            <div class="content3_box">
                <div class="content3_img">
                    <?php 
                     $dir=$_SERVER["DOCUMENT_ROOT"]."/file/";
                     $fname="../file/".$row["main"];
                    ?>
                    <a href="d4_content.php?no=<?php echo $row["no"]?>">
                        <img src="<?php echo $fname ?>" style="width:320px">
                    </a>
                </div>
                <div class="content3_text">
                <a href="d4_content.php?no=<?php echo $row["no"]?>"><?php echo $row["name"]?></a><br>
                    <span style="font-size: 0.8em;font-weight: normal;">
                        <?php echo $row["date"]?> 조회수 <?php echo $row["hit"]?>
                    </span>
                </div>
            </div>
            <?php }?>
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