

// 검색기능
function search(){
    if(d1_frm.search.value==""){
        alert("검색어를 입력하세요");
        d1_frm.search.focus();return false;
    }
    location.href="notice_search.php?search="+d1_frm.search.value;
}
function search2(){
    if(d2_frm.search.value==""){
        alert("검색어를 입력하세요");
        d2_frm.search.focus();return false;
    }
    location.href="job_search.php?search="+d2_frm.search.value;
}
// login
$(".searchIcon").click(function(){
    $("#login_modal").fadeIn();
})
$(".idpw_content>li").eq(0).siblings().css("display","none")
$(".idpw_tap>li").click(function(){
    $(this).css("border-bottom","3px solid #008dbb")
    $(this).siblings().css("border","none")
})
$(".idpw_tap>li").eq(0).click(function(){
    $(".idpw_content>li").eq(0).css("display","block")
    $(".idpw_content>li").eq(0).siblings().css("display","none")
})
$(".idpw_tap>li").eq(1).click(function(){
    $(".idpw_content>li").eq(1).css("display","block")
    $(".idpw_content>li").eq(1).siblings().css("display","none")
})
$(".close_login").click(function(){
    $("#login_modal").fadeOut()
})
$(".signupmove").click(function(){
    $("#signup_modal").fadeIn();
    $("#login_modal").css("display","none")
})
$(".close_login").click(function(){
    $("#signup_modal").fadeOut()
})
// menu
$(".menu>li").stop().mouseover(function(){
    var idx=$(this).index();
    var submenu=150*idx;
    $(this).children(".subwrap").slideDown()
    $(this).children(".subwrap").css("left",-(300+submenu))
    $("#submenu_back").slideDown("fast")
})
$(".menu>li").stop().mouseleave(function(){
    $(this).children(".subwrap").css("display","none")
    $("#submenu_back").css("display","none")
})

// 슬라이드2
start();
function start(){
    $(".imgs>img").eq(0).css("left","-670px")
    $(".imgs>img").eq(1).css("left","0px")
    $(".imgs>img").eq(2).css("left","670px")
    $(".box>.box1").css("left","-720px")
    $(".box>.box2").css("left","0px")
    $(".box>.box3").css("left","-720px")
    $(".dot_box").children().eq(1).css({"background-color":"#6485c0"});
    setInterval(function(){slide()},4000)
}
var now=0;
var img=2;
function slide(){
    if(now==img){
        now=0;
    }else{
        now++
    }
    slide2(now);
}
$(".slidenext").click(function(){
    if(now==2){
        now=0;
    }else{now++}
    slide2(now)
})
$(".slideprev").click(function(){
    if(now==0){
        now=2;
    }else{now--}
    slide2(now)
})
$(".dot_box .dot").click(function(){
    now=$(this).index();
    slide2(now);
})
function slide2(){
    if(now==0){
        $(".imgs>img").eq(2).css("left","-670px")
        $(".imgs>img").eq(0).css("left","0px")
        $(".imgs>img").eq(1).css("left","670px")
        $(".box>.box3").css("left","-720px")
        $(".box>.box1").css("left","0px")
        $(".box>.box2").css("left","-720px")
        $(".dot_box").children().eq(0).css({"background-color":"#6485c0"});
        $(".dot_box").children().eq(0).siblings().css({"background-color":"white"});
    }
    if(now==1){
        $(".imgs>img").eq(0).css("left","-670px")
        $(".imgs>img").eq(1).css("left","0px")
        $(".imgs>img").eq(2).css("left","670px")
        $(".box>.box1").css("left","-720px")
        $(".box>.box2").css("left","0px")
        $(".box>.box3").css("left","-720px")
        $(".dot_box").children().eq(1).css({"background-color":"#6485c0"});
        $(".dot_box").children().eq(1).siblings().css({"background-color":"white"});
    }
    if(now==2){
        $(".imgs>img").eq(1).css("left","-670px")
        $(".imgs>img").eq(2).css("left","0px")
        $(".imgs>img").eq(0).css("left","670px")
        $(".box>.box2").css("left","-720px")
        $(".box>.box3").css("left","0px")
        $(".box>.box1").css("left","-720px")
        $(".dot_box").children().eq(2).css({"background-color":"#6485c0"});
        $(".dot_box").children().eq(2).siblings().css({"background-color":"white"});
    }
}
// f_noticeSlide
noticeslide();
function noticeslide(){
    $(".f_noticeSlide>img").eq(2).css("left","-1020px")
    $(".f_noticeSlide>img").eq(3).css("left","-510px")
    $(".f_noticeSlide>img").eq(0).css("left","0px")
    $(".f_noticeSlide>img").eq(1).css("left","510px")
    $(".f_notice_dotbox").children().eq(0).css({"background-color":"#6485c0"});
    $(".f_notice_dotbox").children().eq(0).siblings().css({"background-color":"white"});
    setInterval(function(){noticeslide2()},4000)
}
var notice_now=0;
var notice_img=3;
$(".f_notice_dotbox .f_notice_dot").click(function(){
    notice_now=$(this).index();
    noticeslide3(notice_now);
})
function noticeslide2(){
    if(notice_now==notice_img){
        notice_now=0;
    }else{notice_now++}
   noticeslide3()
}
function noticeslide3(){
    if(notice_now==0){
        $(".f_noticeSlide>img").eq(2).css("left","-1020px")
        $(".f_noticeSlide>img").eq(3).css("left","-510px")
        $(".f_noticeSlide>img").eq(0).css("left","0px")
        $(".f_noticeSlide>img").eq(1).css("left","510px")
        $(".f_notice_dotbox").children().eq(0).css({"background-color":"#6485c0"});
        $(".f_notice_dotbox").children().eq(0).siblings().css({"background-color":"white"});
    }
    if(notice_now==1){
        $(".f_noticeSlide>img").eq(3).css("left","-1020px")
        $(".f_noticeSlide>img").eq(0).css("left","-510px")
        $(".f_noticeSlide>img").eq(1).css("left","0px")
        $(".f_noticeSlide>img").eq(2).css("left","510px")
        $(".f_notice_dotbox").children().eq(1).css({"background-color":"#6485c0"});
        $(".f_notice_dotbox").children().eq(1).siblings().css({"background-color":"white"});
    }
    if(notice_now==2){
        $(".f_noticeSlide>img").eq(0).css("left","-1020px")
        $(".f_noticeSlide>img").eq(1).css("left","-510px")
        $(".f_noticeSlide>img").eq(2).css("left","0px")
        $(".f_noticeSlide>img").eq(3).css("left","510px")
        $(".f_notice_dotbox").children().eq(0).css({"background-color":"#6485c0"});
        $(".f_notice_dotbox").children().eq(0).siblings().css({"background-color":"white"});
    }
    if(notice_now==3){
        $(".f_noticeSlide>img").eq(1).css("left","-1020px")
        $(".f_noticeSlide>img").eq(2).css("left","-510px")
        $(".f_noticeSlide>img").eq(3).css("left","0px")
        $(".f_noticeSlide>img").eq(0).css("left","510px")
        $(".f_notice_dotbox").children().eq(1).css({"background-color":"#6485c0"});
        $(".f_notice_dotbox").children().eq(1).siblings().css({"background-color":"white"});
    }
}

// a2
    $(".a2_tap2>li").eq(0).css("display","block")
    $(".a2_tap>li").eq(1).css("background-color","lightgray")
    $(".a2_tap>li").eq(1).siblings().css("background-color","white")
    $(".a2_tap2>li").eq(0).siblings().css("display","none")
$(".a2_tap>li").eq(0).click(function(){
    $(".a2_tap2>li").eq(0).css("display","block")
    $(".a2_tap>li").eq(1).css("background-color","lightgray")
    $(".a2_tap>li").eq(1).siblings().css("background-color","white")
    $(".a2_tap2>li").eq(0).siblings().css("display","none")
})
$(".a2_tap>li").eq(1).click(function(){
    $(".a2_tap2>li").eq(1).css("display","block")
    $(".a2_tap>li").eq(0).css("background-color","lightgray")
    $(".a2_tap>li").eq(0).siblings().css("background-color","white")
    $(".a2_tap2>li").eq(1).siblings().css("display","none")
})

$(".a2_tapC>li").click(function(){
    var tap=$(".a2_tapC>li").index(this);
    $(".a2_modal").fadeIn();
    $(".a2_tapM>li").eq(tap).fadeIn();
    $(".a2_tapM>li").eq(tap).siblings().css("display","none")
})
$(".a2_Mclose").click(function(){
    var tap=$(".a2_tapC>li").index(this);
    $(".a2_modal").css("display","none")
    $(".a2_tapM>li").eq(tap).css("display","none")
})
// a3
    $(".a3_tap2>li").eq(0).css("display","block")
    $(".a3_tap2>li").eq(0).siblings().css("display","none")
    $(".a3_tap>li").eq(0).css("background-color","white")
    $(".a3_tap>li").eq(0).siblings().css("background-color","lightgray")
$(".a3_tap>li").eq(0).click(function(){
    $(".a3_tap2>li").eq(0).css("display","block")
    $(".a3_tap2>li").eq(0).siblings().css("display","none")
    $(".a3_tap>li").eq(0).css("background-color","white")
    $(".a3_tap>li").eq(0).siblings().css("background-color","lightgray")
})
$(".a3_tap>li").eq(1).click(function(){
    $(".a3_tap2>li").eq(1).css("display","block")
    $(".a3_tap2>li").eq(1).siblings().css("display","none")
    $(".a3_tap>li").eq(1).css("background-color","white")
    $(".a3_tap>li").eq(1).siblings().css("background-color","lightgray")
})
$(".a3_tap>li").eq(2).click(function(){
    $(".a3_tap2>li").eq(2).css("display","block")
    $(".a3_tap2>li").eq(2).siblings().css("display","none")
    $(".a3_tap>li").eq(2).css("background-color","white")
    $(".a3_tap>li").eq(2).siblings().css("background-color","lightgray")
})
//  e4
$(".e4_content>li").eq(0).css("display","block")
$(".e4_content>li").eq(0).siblings().css("display","none")
$(".e4_list>li").eq(0).click(function(){
    $(".e4_list>li").eq(0).css("background-color","white")
    $(".e4_list>li").eq(0).siblings().css("background-color","lightgray")
    $(".e4_content>li").eq(0).fadeIn()
    $(".e4_content>li").eq(0).siblings().css("display","none")
})
$(".e4_list>li").eq(1).click(function(){
    $(".e4_list>li").eq(1).css("background-color","white")
    $(".e4_list>li").eq(1).siblings().css("background-color","lightgray")
    $(".e4_content>li").eq(1).fadeIn()
    $(".e4_content>li").eq(1).siblings().css("display","none")
})
// e5
$(".e5_list2>li").eq(0).siblings().css("display","none")
$(".e5_list>li").click(function(){
    var e5=$(".e5_list>li").index(this);
    $(".e5_list>li").eq(e5).css("background-color","white")
    $(".e5_list>li").eq(e5).siblings().css("background-color","lightgray")
    $(".e5_list2>li").eq(e5).fadeIn();
    $(".e5_list2>li").eq(e5).siblings().css("display","none")
})

// fixed
$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".fixed_list>li").eq(1).fadeIn();
    } else {
        $(".fixed_list>li").eq(1).fadeOut()
    }
  })
  $(".fixed_list>li").eq(1).click(function () {
    $('html, body').animate({scrollTop: 0}, 200);
  })
  $(".fixed_list>li").eq(0).click(function(){
      $(".fixed_box").fadeIn()
  })
  $(".fixed_boxC").click(function(){
    $(".fixed_box").css("display","none")
  })