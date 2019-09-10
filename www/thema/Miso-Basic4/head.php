<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
include_once(THEMA_PATH.'/assets/thema.php');
?>
<link rel="stylesheet" type="text/css" href="/css/skin/default.css">
<link rel="stylesheet" type="text/css" href="/css/skin/contents.css">
<link rel="stylesheet" type="text/css" href="/css/skin/common.css">
<div id="wrapper">
    <div id="header" class="sticky transparent clearfix">

        <!-- TOP NAV -->
        <header id="topNav" style="background-color: #fff;">
            <div class="container">

                <!-- Mobile Menu Button -->
                <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars" id="mobile-close-btn"></i>
                </button>

                <!-- Logo -->
                <a class="logo pull-left" href="/index/">
                    <img src="/img//logo_dark.png" alt="" style="width:200px; height:40px;"  />
                    <img src="/img/logo_dark.png" alt="" style="width:200px; height:40px;"  />
                </a>

                <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
                    <nav class="nav-main">
                        <ul id="topMain" class="nav nav-pills nav-main">
                            <li class="dropdown size-16 font-weight-bold"><!-- HOME -->
                                <a class="dropdown-toggle" href="#">
                                    로또분석시스템
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="/index/system.php">
                                            로또메이저의 시스템
                                        </a>

                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="/bbs/1010.php">
                                            회원등급안내
                                        </a>

                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="dropdown  size-16 font-weight-bold"><!-- PAGES -->
                                <a class="dropdown-toggle" href="#">
                                    로또자료실
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown active">
                                        <a class="dropdown-toggle" href="/bbs/240.php">
                                            번호별통계
                                        </a>                                        
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="/bbs/230.php">
                                            확률과분석
                                        </a>                                       
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="/bbs/220.php">
                                            회차별당첨번호
                                        </a>
                                      
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="/bbs/250.php">
                                            1/2등 당첨지역
                                        </a>
                                       
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="/bbs/board.php?bo_table=2500">
                                            회원당첨후기
                                        </a>
                                      
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown size-16 font-weight-bold"><!-- PAGES -->
                                <a class="dropdown-toggle" href="#">
                                    당첨커뮤니티
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown active">
                                        <a class="dropdown-toggle" href="/bbs/board.php?bo_table=3100">
                                            명예의전당
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="/bbs/board.php?bo_table=3200">
                                            회원당첨후기
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="/bbs/board.php?bo_table=3300">
                                            자유게시판
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown size-16 font-weight-bold"><!-- FEATURES -->
                                <a class="dropdown-toggle" href="#">
                                    고객센터
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="/bbs/board.php?bo_table=4100">
                                            <i class="et-browser"></i> 공지사항
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="/bbs/board.php?bo_table=4200">
                                            <i class="et-hotairballoon"></i> 로또메이저 뉴스
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="/bbs/board.php?bo_table=4300">
                                            <i class="et-anchor"></i> 이벤트
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="/bbs/board.php?bo_table=4400">
                                            <i class="et-circle-compass"></i> 자주하는질문
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown mega-menu size-16 font-weight-bold"><!-- PORTFOLIO -->
                                <a class="dropdown-toggle" href="/bbs/1010.php">
                                    이용가이드
                                </a>
                            </li>
                            <li class="dropdown size-16 font-weight-bold"><!-- BLOG and SHOP -->
                                <a class="dropdown-toggle" href="#">
                                    내정보관리
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="/bbs/mypage.php?left_menu=6001">
                                            회원정보관리
                                        </a>

                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="/bbs/mypage_hit.php?left_menu=6002">
                                            나의조합 및 당첨
                                        </a>

                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="/bbs/board.php?bo_table=6300">
                                            나의 1:1문의
                                        </a>

                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="/bbs/board.php?bo_table=6400">
                                            회원탈퇴
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php
                            if($_SESSION['ss_mb_id']==''){
                                ?>
                                <li class="dropdown size-16 font-weight-bold"><!-- BLOG and SHOP -->
                                    <a class="dropdown-toggle" href="#">
                                        로그인
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown ">
                                            <a class="dropdown-toggle" href="/bbs/login.php">
                                                로그인
                                            </a>
                                        </li>
                                        <li class="dropdown ">
                                            <a class="dropdown-toggle" href="/bbs/register.php">
                                                회원가입
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            <?php } else { ?>
                                <li class="dropdown size-16 font-weight-bold"><!-- BLOG and SHOP -->
                                    <a class="dropdown-toggle" href="#">
                                        로그아웃
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown ">
                                            <a class="dropdown-toggle" href="/bbs/logout.php">
                                                로그아웃
                                            </a>
                                        </li>
                                        <?php
                                        if($member['admin']) {
                                        ?>
                                        <li class="dropdown ">
                                            <a class="dropdown-toggle" href="/adm/member_list.php">
                                                관리
                                            </a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </li>

                            <?php } ?>

                        </ul>

                    </nav>
                </div>

            </div>
        </header>
        <!-- /Top Nav -->

    </div>


    <?php
        $ig = array('/img/title/1.jpg','/img/title/2.jpg','/img/title/3.jpg','/img/title/4.jpg','/img/title/5.png');
        //echo rand(0,3);

        $bg_img = $ig[rand(0,3)];
        $url = $_SERVER['PHP_SELF'];
        //print_r($url);
        if(strpos($url,"1010.php")!==false){
            $cate_title = "로또분석시스템";
            $page_title = "등급안내";
            $sub_title = "로또메이저의 회원별 등급 상세 내용입니다.";
            $link_step1 = "로또분석시스템";
            $link_step2 = "등급안내";
            //$bg_img = "/demo_files/images/1200x800/31-min.jpg";
        } else if(strpos($url,"1020.php")!==false){
            $page_title = "로또메이저만의 시스템";
            $sub_title = "전등급 철저한 데이터 분석으로 특별한 번호가 제공됩니다.";
            $link_step1 = "로또분석시스템";
            $link_step2 = "로또메이저만의 시스템";
            //$bg_img = "/demo_files/images/1200x800/31-min.jpg";
        } else if(strpos($url,"240.php")!==false){
            $page_title = "로또메이저 번호별 통계";
            $sub_title = "역대 번호별 통계가 제공 됩니다.";
            $link_step1 = "로또자료실";
            $link_step2 = "번호별통계";
            //$bg_img = "/img/network-2402637.jpg";
        } else if(strpos($url,"230.php")!==false){
            $page_title = "로또메이저 확률과 분석";
            $sub_title = "로또메이저만의 확률과 분석시스템";
            $link_step1 = "로또자료실";
            $link_step2 = "확률과분석";
            //$bg_img = "/img/network-2402637.jpg";
        } else if(strpos($url,"250.php")!==false){
            $page_title = "동행복권 1,2등 당첨지역";
            $sub_title = "동행복권 1,2등 당첨지역 리스트를 확인하실 수 있습니다.";
            $link_step1 = "로또자료실";
            $link_step2 = "1,2등 당첨지역";
            //$bg_img = "/img/network-2402637.jpg";
        } else if(strpos($url,"220.php")!==false){
            $page_title = "로또메이저 회차별당첨번호";
            $sub_title = "동행복권 회차별 당첨 번호 및 로또메이저의 회차별 당첨결과를 알려드립니다.";
            $link_step1 = "로또자료실";
            $link_step2 = "회차별당첨번호";
            //$bg_img = "/img/network-2402637.jpg";
        } else if($_REQUEST['bo_table']==2100){
            $page_title = "로또메이저만 회차별 당첨번호 안내";
            $sub_title = "전회차별 당첨번호 안내";
            $link_step1 = "로또자료실";
            $link_step2 = "회차별당첨번호";
            //$bg_img = "/img/network-2402637.jpg";
        } else if($_REQUEST['bo_table']==2300){
            $page_title = "1/2등 당첨지역 안내";
            $sub_title = "전등급 철저한 데이터 분석으로 특별한 번호가 제공됩니다.";
            $link_step1 = "로또자료실";
            $link_step2 = "1/2등 당첨지역";
            //$bg_img = "/img/network-2402637.jpg";
        } else if($_REQUEST['bo_table']==2500){
            $page_title = "회원들의 당첨후기 ";
            $sub_title = "전등급 철저한 데이터 분석으로 특별한 번호가 제공됩니다.";
            $link_step1 = "로또자료실";
            $link_step2 = "회원당첨후기";
            //$bg_img = "/img/network-2402637.jpg";
        } else if($_REQUEST['bo_table']==4100){
            $cate_title = "고객센터";
            $page_title = "공지사항";
            $sub_title = "회원 여러분에게 도움이 되실 내용을 알려드립니다.";
            $link_step1 = "고객센터";
            $link_step2 = "공지사항";
        } else if($_REQUEST['bo_table']==4200){
            $cate_title = "고객센터";
            $page_title = "로또메이저 뉴스";
            $sub_title = "로또메이저의 최신 소식을 전해드립니다.";
            $link_step1 = "고객센터";
            $link_step2 = "로또메이저 뉴스";
        } else if($_REQUEST['bo_table']==4300){
            $page_title = "이벤트";
            $sub_title = "로또메이저는 회원들을 위해 항상 새로운 이벤트를 준비하고 있습니다.";
            $link_step1 = "고객센터";
            $link_step2 = "이벤트";
        } else if($_REQUEST['bo_table']==4400){
            $page_title = "자주하는 질문들 모음";
            $sub_title = "회원님들이 사이트 이용도중 궁그한 사항 및 자주질문하시는 사항을 모아놓았습니다.";
            $link_step1 = "고객센터";
            $link_step2 = "자주하는 질문";
        } else if(strpos($url,"500.php")!==false){
            $page_title = "이용가이드";
            $sub_title = "가장 빠르고 확률높은 당첨의 길";
            $link_step1 = "이용가이드";
        } else if(strpos($url,"login.php")!==false){
            $page_title = "회원로그인";
            $sub_title = "회원 로그인 페이지";
            $link_step1 = "로그인";
        } else if(strpos($url,"register")!==false){
            $page_title = "회원가입";
            $sub_title = "회원 가입 페이지";
            $link_step1 = "회원가입";
        } else if(strpos($url,"mypage_hit.php")!==false){
            $page_title = "나의조합 및 당첨내역";
            $sub_title = "내가 받은 로또메이저 최적의 조합으로 당첨내역을 조회하실 수 있습니다.";
            $link_step1 = "내정보관리";
            $link_step2 = "나의조합 및 당첨";
        } else if(strpos($url,"mypage.php")!==false){
            $page_title = "회원정보관리";
            $sub_title = "나의 정보를 변경하실 수 있습니다.";
            $link_step1 = "내정보관리";
            $link_step2 = "회원정보관리";
        } else if($_REQUEST['bo_table']==6300){
            $page_title = "나의 1:1문의";
            $sub_title = "로또메이저에 궁금한점을 남겨주세요.";
            $link_step1 = "내정보관리";
            $link_step2 = "나의 1:1문의";
        } else if($_REQUEST['bo_table']==6400){
            $page_title = "회원탈퇴";
            $sub_title = "회원탈퇴요청 게시판 입니다.";
            $link_step1 = "내정보관리";
            $link_step2 = "회원탈퇴";
        } else if($_REQUEST['bo_table']==2100){
            $page_title = "회차별당첨번호";
            $sub_title = "회차별당첨번호 게시판 입니다.";
            $link_step1 = "로또자료실";
            $link_step2 = "회차별당첨번호";
        } else if($_REQUEST['hid']=='provision'){
            $page_title = "로또메이저 이용약관";
            $sub_title = "로또메이저 이용약관 입니다.";
            $link_step1 = "이용약관";
            $link_step2 = "이용약관";
        } else if($_REQUEST['hid']=='privacy'){
            $page_title = "개인정보보호정책";
            $sub_title = "로또메이저 개인정보보호정책 입니다.";
            $link_step1 = "개인정보보호정책";
            $link_step2 = "개인정보보호정책";
        }
    ?>
    <!-- PAGE HEADER -->
    <section class="page-header page-header-lg parallax parallax-4" style="background-image:url('<?php echo $bg_img;?>'); padding-bottom:30px; margin-bottom:20px !important;">
        <div class="overlay dark-4"><!-- dark overlay [1 to 9 opacity] --></div>

        <div class="container">

            <h1><?php echo $page_title; ?></h1>
            <span class="font-lato size-18 weight-300"><?php echo $sub_title; ?></span>

            <!-- breadcrumbs -->
            <ol class="breadcrumb">
                <li><a href="#">홈</a></li>
                <li><a href="#"><?php echo $link_step1; ?></a></li>
                <li class="active"><?php echo $link_step2; ?></li>
            </ol><!-- /breadcrumbs -->

        </div>
    </section>
    <!-- /PAGE HEADER -->


    <section>
        <div class="container">

            <div class="row">

                <!-- RIGHT -->
                <div class="col-lg-12 col-md-12 col-sm-12 ">

