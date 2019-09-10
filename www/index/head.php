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
                margin:1.55em 0 0 0;
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
                        <li><a href="/index/system.php">로또메이저 시스템</a></li>
                        <li><a href="/bbs/1010.php">회원등급안내</a></li>
                    </ul>
                </li>
                <li>로또자료실 <i class="mob-icon fa"></i>
                    <ul class="navbar-smenu">
                        <li><a href="/bbs/240.php">회차별 당첨번호</a></li>
                        <li><a href="/bbs/230.php">확률과 분석</a></li>
                        <li><a href="/bbs/220.php">회차별당첨번호</a></li>
                        <li><a href="/bbs/250.php">1,2등 당첨지역</a></li>
                        <li><a href="/bbs/board.php?bo_table=2500">번호별통계</a></li>
                    </ul>
                </li>
                <li>당첨커뮤니티 <i class="mob-icon fa"></i>
                    <ul class="navbar-smenu">
                        <li><a href="/bbs/board.php?bo_table=3100">명예의전당</a></li>
                        <li><a href="/bbs/board.php?bo_table=3200">회원 당첨후기</a></li>
                        <li><a href="/bbs/board.php?bo_table=3300">자유게시판</a></li>
                    </ul>
                </li>
                <li>고객센터 <i class="mob-icon fa"></i>
                    <ul class="navbar-smenu">
                        <li><a href="/bbs/board.php?bo_table=4100">공지사항</a></li>
                        <li><a href="/bbs/board.php?bo_table=4200">로토메이저 뉴스</a></li>
                        <li><a href="/bbs/board.php?bo_table=4300">이벤트</a></li>
                        <li><a href="/bbs/board.php?bo_table=4400">자주하는 질문</a></li>
                    </ul>
                </li>
                <li><a href="/bbs/1010.php">이용가이드</a></li>
                <li>내정보관리 <i class="mob-icon fa"></i>
                    <ul class="navbar-smenu">
                        <li><a href="/bbs/mypage.php?left_menu=6002">나의조합 및 당첨</a></li>
                        <li><a href="/bbs/mypage.php?left_menu=6001">회원정보관리</a></li>
                        <li><a href="/bbs/board.php?bo_table=6300">나의 1:1문의</a></li>
                        <li><a href="/bbs/board.php?bo_table=6400">회원탈퇴</a></li>
                    </ul>
                </li>
                <?php
                if($_SESSION['ss_mb_id']==''){
                    ?>

                    <li>로그인 <i class="mob-icon fa"></i>
                        <ul class="navbar-smenu">

                            <li><a href="/bbs/login.php">로그인</a></li>

                            <li><a href="/bbs/register.php">회원가입</a></li>
                        </ul>
                    </li>
                <?php } else { ?>
                    <li>로그아웃 <i class="mob-icon fa"></i>
                        <ul class="navbar-smenu">
                            <?php
                            if(in_array($_SESSION['ss_mb_id'],$rows) || $_SESSION['ss_mb_id']=='admin') {
                                ?>
                                <li><a href="">관리자</a></li>
                            <?php } ?>
                            <li><a href="">로그아웃</a></li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </div>




        <!--
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger font-weight-bolder dropdown-toggle" >로또분석시스템</a>
              <ul class="dropdown-menu">
                  <li class="dropdown">
                      <a class="dropdown-toggle" href="/bbs/1010.php">
                          이번주 1등번호받기
                      </a>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" href="/bbs/1020.php">
                          로또메이저만의 시스템
                      </a>
                  </li>
              </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger font-weight-bolder" >로또자료실</a>
              <ul class="dropdown-menu">
                  <li class="dropdown">
                      <a class="dropdown-toggle" >
                          회차별 당첨번호
                      </a>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" >
                          회차별 당첨번호
                      </a>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" >
                          1,2등 당첨지역
                      </a>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" >
                          1,2등 당첨지역
                      </a>
                  </li>
              </ul>
          </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger font-weight-bolder" >당첨커뮤니티</a>
                <ul class="dropdown-menu">
                    <li class="dropdown">
                        <a class="dropdown-toggle" >
                            명예의전당
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" >
                            회원 당첨후기
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" >
                            회원 당첨후기
                        </a>
                    </li>
                </ul>
            </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger font-weight-bolder" >고객센터</a>
              <ul class="dropdown-menu">
                  <li class="dropdown">
                      <a class="dropdown-toggle" >
                          공지사항
                      </a>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" >
                          오마이로또 뉴스
                      </a>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" >
                          이벤트
                      </a>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" >
                          자주하는 질문
                      </a>
                  </li>
              </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger font-weight-bolder" >이용가이드</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger font-weight-bolder" >내정보관리</a>
              <ul class="dropdown-menu">
                  <li class="dropdown">
                      <a class="dropdown-toggle" >
                          나의조합 및 당첨
                      </a>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" >
                          회원정보관리
                      </a>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" >
                          나의 1:1문의
                      </a>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" >
                          회원탈퇴
                      </a>
                  </li>
              </ul>
          </li>
            <?php
        if($_SESSION['ss_mb_id']==''){
            ?>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger font-weight-bolder" >로그인</a>
            </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger font-weight-bolder">로그아웃</a>
                </li>
            <?php } ?>
            <?php
        if(in_array($_SESSION['ss_mb_id'],$rows) || $_SESSION['ss_mb_id']=='admin') {
            ?>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger font-weight-bolder">관리자</a>
            </li>
            <?php } ?>
        </ul>
      </div>
      -->

    </div>
</nav>