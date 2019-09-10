<?php
include "../common.php";
$wid = 'mbt-mcb';

$sql_turn = '';
if($_REQUEST['turn']!=''){
    $sql_turn = " AND hit_turn = '{$_REQUEST['turn']}' ";
}
$que = "SELECT * FROM lotto_hit_result WHERE 1 {$sql_turn} ORDER BY idx DESC LIMIT 1";
//echo $que;
$lotto = sql_fetch($que);

$turn = $lotto['hit_turn'];

$person = explode("|",$lotto['hit_money_person']);
$money = explode("|",$lotto['hit_get_money']);
$ball = explode("|",$lotto['hit_num']);


//$member = sql_fetch("SELECT * FROM g5_member WHERE mb_id = '{$_SESSION['ss_mb_id']}'");

//상담내용 신청을 했다면 저장한다.
if(isset($_POST['hp'])) {
    $hp = $_POST['hp'];
    $que  = "INSERT INTO quick_memo SET ";
    $que .= "q_hp       = '{$hp}', ";
    $que .= "q_memo     = '{$_POST['memo']}', ";
    $que .= "q_regdate  = NOW() ";
    $res = sql_query($que);
    if($res){
        alert('빠른상담 신청이 완료되었습니다.');
        unset($_POST);
        unset($hp);
    } else {
        alert('신청시 오류가 발생했습니다. 다시 시도해주세요.');
    }
}

//관리회원 확인
$rows = array();
$que = "SELECT mb_id FROM g5_auth WHERE 1 GROUP BY mb_id";
$res = sql_query($que);
while($arr = sql_fetch_array($res)){
    $rows[] = $arr['mb_id'];
}



?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>로또1등은 로또메이저 입니다.</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-shrink fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img src="/img/logo_dark.png">

      </a>
      
      
   
   
<style>
.navbar-toggle{
	display:none;
}
.navbar-area a{
	color:#000000;  
}
.navbar-area a:hover{
	text-decoration:none;
}
.navbar-area li{
	list-style:none;
	display: inline-block;
	cursor:pointer;
}
.navbar-area .navbar-menu > li{
	position: relative;
	padding:1.5em 0.5em;
}
.navbar-area .navbar-menu > li:hover{
	color:#0061b3;
}
.navbar-area .navbar-menu{
	margin:0;
}
.navbar-area .navbar-menu>li .navbar-smenu{
	display:none; 
	overflow: hidden;
	position: absolute;
    background: #fff;
    padding:0;
    margin:0.6em 0 0 0;
    left: 0;
}
.navbar-area .navbar-menu>li.on-menu .navbar-smenu{
	display:block; 
}
.navbar-area .navbar-menu .navbar-smenu>li>a{
	color:#ffffff;
	font-size: 0.9rem;
}
.navbar-area .navbar-menu .navbar-smenu>li{
	width:180px;
	display: block;
	padding:10px 18px;
	background:#383838;
	border-top:#000000 1px solid;
}
.navbar-area .navbar-menu .navbar-smenu>li:hover{
	background:#0064b8;
	border-top:#494949 1px solid;
}
.navbar-area .navbar-area .mob-icon {
	display: inline-block;
	position: relative;
	font-size: 15px;
	font-weight: bold;
	color: #000000;
	text-rendering: auto;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}	
.navbar-area .navbar-menu>li.on-menu .mob-icon{
	transform: rotate(180deg);
}
.navbar-area .mob-icon:before {
	content: "\f107";
}
@media all and (max-width:1000px) {
	.navbar-toggle{
		display:block;
		font-size: 12px;
	    right: 0;
	    padding: 13px;
	    text-transform: uppercase;
	    color: #ffffff;
	    border: 0;
	    background-color: #fed136;
	    border-radius: .25rem;
	    line-height: 1;
	    font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
	}
	a.navbar-toggle:not([href]):not([tabindex]){
		color:#ffffff;
	}
	.navbar-area{
		float:left;
		width: 100%;
	}
	.navbar-area li{
		display: block;
	}
	.navbar-area .navbar-menu{
		display:none;  
		width: 100%;
	    padding: 0;
	    margin: 0;
	}
	.navbar-area .navbar-menu>li{
		font-size: 0.9em;
	    padding: 0.75em 0 0;
	    letter-spacing: 1px;
	    color: #000;
	    font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
	}
	.navbar-area .navbar-menu>li>a{
		color: #000000;
	}
	.navbar-area .navbar-menu>li .navbar-smenu{
		display:none;
		position: initial;
		padding:0;
		margin: 10px 0;
	    letter-spacing: 1px;
	}
	.navbar-area .navbar-menu>li.on-menu .navbar-smenu{
	display:none; 
}
	.navbar-area .navbar-menu>li .navbar-smenu>li{
	    padding: 0.5em;
	    letter-spacing: 1px;
	    width:100%;
	}
}	
</style>      
      
<a class="navbar-toggle">MENU <i class="fas fa-bars"></i></a>
<div class="navbar-area">
	<ul class="navbar-menu">
		<li>로또분석시스템 <i class="mob-icon fa"></i>
			<ul class="navbar-smenu">
			<li><a href="">이번주 1등번호받기</a></li>
			<li><a href="">로또메이저 시스템</a></li>
			</ul>
		</li>
		<li>로또자료실 <i class="mob-icon fa"></i>
			<ul class="navbar-smenu">
			<li><a href="">회차별 당첨번호</a></li>
			<li><a href="">1,2등 당첨지역</a></li>
			</ul>
		</li>
		<li>당첨커뮤니티 <i class="mob-icon fa"></i>
			<ul class="navbar-smenu">
			<li><a href="">명예의전당</a></li>
			<li><a href="">회원 당첨후기</a></li>
			</ul>
		</li>
		<li>고객센터 <i class="mob-icon fa"></i>
			<ul class="navbar-smenu">
			<li><a href="">공지사항</a></li>
			<li><a href="">오마이로또 뉴스</a></li>
			<li><a href="">이벤트</a></li>
			<li><a href="">자주하는 질문</a></li>
			</ul>
		</li>
		<li><a href="">이용가이드</a></li>
		<li>내정보관리 <i class="mob-icon fa"></i>
			<ul class="navbar-smenu">
			<li><a href="">나의조합 및 당첨</a></li>
			<li><a href="">회원정보관리</a></li>
			<li><a href="">나의 1:1문의</a></li>
			<li><a href="">회원탈퇴</a></li>
			</ul>
		</li>
        <?php
        if($_SESSION['ss_mb_id']==''){
        ?>
		<li><a href="/bbs/login.php">로그인</a></li>
        <?php } else { ?>
        <li>로그아웃 <i class="mob-icon fa"></i>
            <ul class="navbar-smenu">
                <li><a href="/bbs/logout.php">로그아웃</a></li>
            <?php
            if(in_array($_SESSION['ss_mb_id'],$rows) || $_SESSION['ss_mb_id']=='admin') {
                ?>
                <li><a href="/adm/">관리자</a></li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>

	</ul>
</div>
      
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead"
          style="text-align: center;
                  color: white;
                  background-image: url(/img/new/31-min.jpg);
                  background-repeat: no-repeat;
                  background-attachment: scroll;
                  background-position: center center;
                  background-size: cover;
                  height:300px;

"
  >
    <div class="container">
      <div class="intro-text" style="padding-top:200px;">
        <div class="intro-heading text-uppercase" style="letter-spacing: -5px;
    text-shadow: rgba(0, 0, 0, 1) 2px 2px 1px; line-height:0px; margin-bottom:0px; font-size:40px;"> <span style="color:#fff;">로또메이저 시스템소개</span></div>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services"
           style="text-align: center;
                  color: white;
                  background-image: url(/img/system/1_bg.png);
                  background-repeat: no-repeat;
                  background-attachment: scroll;
                  background-position: center center;
                  background-size: cover;
                  min-height:434px !important;

"
  >
    <div class="container">
      <div class="row">
          <div class="col-md-12 col-xs-12" style="display: flex; justify-content: center;">
            <img src="/img/system/system2.png" class="img-fluid">
          </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" style="background-repeat: no-repeat; background-image: url(/img/system/second_bg.png); max-height: 725px;">
    <div class="container">
      <div class="row">
          <div class="col-md-12 col-xs-12" style="display: flex; position: relative;">
              <img src="/img/system/second_img.png" class="img-fluid" style="bottom:0px;">
          </div>
      </div>
    </div>
  </section>

  <!-- 회차 당첨번호 -->

  <!-- About -->

  <header class="masthead" style="background:url(/img/system/business-2089534_1920.jpg) no-repeat; background-size: cover;">>
      <div class="container">
          <div class="intro-text">
              <div class="intro-lead-in" style="color:#000; font-weight: bold;">세계야구의 최고봉인 메이저리그를 표방한 분석시스템 사용</div>
              <div class="intro-heading text-uppercase" style="letter-spacing: -5px; color:yellow !important; text-shadow: rgba(0, 0, 0, 0.7) 2px 2px 1px;"><span style="">로또메이저는 메이저리그를 표방</span></div>
              <div class="shtext-uppercase" style="font-size:2em;text-shadow: rgba(0, 0, 0, 0.7) 2px 2px 1px;">최신 시스템으로 고액당첨의 기회를 높여드립니다.</div>
              <div class=" text-uppercase" style="margin-bottom:20px;font-size:2em;text-shadow: rgba(0, 0, 0, 0.7) 2px 2px 1px;">메이저만의 시스템으로 고액당첨의 등불이 되어 드리겠습니다.<span style="color:#50aeff;" class="font-weight-bold"></span></div>
              <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#services">메이저로또 분석번호 받기</a>
          </div>
      </div>
  </header>
 <!-- 회차 당첨번호 -->
  <!--<section class="bg-light page-section" id="about">
    <div class="containers">
      <div class="rows">
      	<div class="about_left_bg">
      		<div class="about_left">
			<h1 class="text-white"><span class="text-primary">로또메이저는</span> 세계 야구 최고봉</h1>
                <h1 class="text-white">메이저리그를 표방하여, 최신 시스템으로</h1>
                <h1 class="text-white">고액당첨의 기회를 높여드립니다.</h1>
                <h1 class="text-white">메이저만의 시스템으로 고액당첨의 등불이 되어 드리겠습니다.</h1>
        </div>
      </div>
    </div>
  </section>-->
  <!-- About -->
   

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h3 class="section-subheading text-white">개인정보처리방침 | 서비스이용약관 | 이용가이드 | 고객센터</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5">
          <h3 class="section-subheading text-white">
            <div class="contact-us">회사명 : (주)로또메이져</div>
            <div class="contact-us">대표자 : 김길년</div>
            <div class="contact-us">사업자등록번호 : 476-09-00229</div>
            <div class="contact-us">고객센터 이메일: lottomajor@gmail.com</div>
          </h3>
        </div>
        <div class="col-lg-7">
          <h3 class="section-subheading text-white">
            <div class="contact-us">주소 : 인천광역시 미추홀구 매소홀로 562번길 5-44,302호(문학동,성원프라자)</div>
            <div class="contact-us">전화 : 032-724-8091 팩스 : 070-4814-0607</div>
            <div class="contact-us">통신판매신고번호 : 2016-인천미추홀구-0213</div>
            <div class="contact-us">개인정보관리책임자 : 박진영</div>
          </h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; lottomajor 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>
  <script>
     /* $(document).ready(function(){
          $('.dropdown-toggle').dropdown()
      });*/
  </script>
  
  <script>
    $(document).ready(function(){
    
    
    	$(".navbar-toggle").click(function(){
    		if($(".navbar-area>.navbar-menu").is(":visible") ){
    			$(".navbar-area>.navbar-menu").slideUp();
    			$(".navbar-area>.navbar-menu>li>ul").slideUp();
    			$(".navbar-area>.navbar-menu>li i").slideUp();
            }else{
            	$(".navbar-area>.navbar-menu").slideDown();
            	$(".navbar-area>.navbar-menu>li>ul").slideUp();
				$(".navbar-area>.navbar-menu>li i").slideDown();
            }
    	});
		$(".navbar-menu>li").mouseover(function(){
			$(".navbar-area>.navbar-menu>li>ul").slideUp();
				$(".navbar-area>.navbar-menu>li").removeClass("on-menu");
			if( $(this).children("ul").is(":visible") ){
				$(this).children("ul").slideUp();
			}else{
				$(this).addClass("on-menu");
				$(this).children("ul").slideDown();
			}
		});
		$(".navbar-menu>li").mouseout(function(){
			$(".navbar-area>.navbar-menu>li").removeClass("on-menu");
			$(".navbar-area>.navbar-menu.on-menu>li").removeClass("on-menu");
		});
    });
</script>


</body>

</html>
