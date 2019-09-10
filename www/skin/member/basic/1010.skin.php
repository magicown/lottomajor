<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$skin_url.'/style.css" media="screen">', 0);

if($header_skin)
	include_once('./header.php');

?>
<script type="text/javascript" src="http://dev.payup.co.kr/resources/api/js/payupPayment_v2.js"></script>
<link rel="stylesheet" href="http://dev.payup.co.kr/resources/api/css/payupPayment.css">
<!-- THEME CSS -->
<link href="/css/skin/essentials.css" rel="stylesheet" type="text/css" />
<link href="/css/skin/layout.css" rel="stylesheet" type="text/css" />

<!-- PAGE LEVEL SCRIPTS -->
<link href="/css/skin/header-1.css" rel="stylesheet" type="text/css" />
<link href="/css/skin/green.css" rel="stylesheet" type="text/css" id="color_scheme" />

<section class="page-section" style="min-height: 400px; padding-top:0px;">
    <div class="row">
        <div class="row">
            <div class="col-md-6">
                <div class="box-static box-transparent box-border-top box-bordered padding-30">

                    <div class="box-title margin-bottom-30">
                        <h1>챌린저 서비스</h1>
                        <h2 class="size-30" style="text-align: right;">11,000원</h2>
                    </div>
                    <span>챌린저 서비스는 한달동안 20조합 번호를 받으실 수 있는 서비스 입니다.</span>
                    <p></p>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <a href="#" class="btn btn-featured btn-success">
                                <span>상담요청</span>
                                <i class="et-megaphone"></i>
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <a href="#" class="btn btn-featured btn-blue">
                                <span>결제하기</span>
                                <i class="fa fa-tablet"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="box-static box-transparent box-border-top box-bordered padding-30">

                    <div class="box-title margin-bottom-30">
                        <h1 >트리플 서비스</h1>
                        <h2 class="size-30" style="text-align: right;">99,000원</h2>
                    </div>
                    1년동안 10~20조합을 원하시는 요일에 LMS문자로 전송받는 서비스 입니다.
                    <p></p>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <a href="#" class="btn btn-featured btn-success">
                                <span>상담요청</span>
                                <i class="et-megaphone"></i>
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <a href="#" class="btn btn-featured btn-blue">
                                <span>결제하기</span>
                                <i class="fa fa-tablet"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-6">
                <div class="box-static box-transparent box-border-top box-bordered padding-30" style="background:url(/img/price/vip.png) no-repeat; background-size: cover;">

                    <div class="box-title margin-bottom-30">
                        <h1 class="white" style="text-shadow: 2px 2px 2px black;">메이져 서비스</h1>
                        <h2 class="size-30 white" style="text-align: right;text-shadow: 2px 2px 2px black;">660,000원</h2>
                    </div>

                    <span class="white" style="text-shadow: 2px 2px 2px black;">1년 10~20조합</span>
                    <p></p>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <a href="#" class="btn btn-featured btn-success">
                                <span>상담요청</span>
                                <i class="et-megaphone"></i>
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <a href="#" class="btn btn-featured btn-blue">
                                <span>결제하기</span>
                                <i class="fa fa-tablet"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-static box-transparent box-border-top box-bordered padding-30" style="background:url(/img/price/vvip.png) no-repeat; background-size: cover;">
                    <div class="box-title margin-bottom-30">
                        <h1 class="white" style="text-shadow: 2px 2px 2px black;"> 프리미엄 서비스</h1>
                        <h2 class="size-30 white" style="text-align: right;text-shadow: 2px 2px 2px black;">상담진행</h2>
                    </div>
                    <span class="white" style="text-shadow: 2px 2px 2px black;">3년 30조합</span>
                    <p></p>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <a href="#" class="btn btn-featured btn-success">
                                <span>상담요청</span>
                                <i class="et-megaphone"></i>
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <a href="#" class="btn btn-featured btn-blue">
                                <span>결제하기</span>
                                <i class="fa fa-tablet"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button onclick="payStart();">결제하기</button>
</section>

<script>

    function payStart(){
        Payup.setParam({s1:"major2019",
            s2:"TESTCP20171010333",
            s3:"1005",
            s4:"test상품",
            s5:"테스터",
            s6:"e89c500ec3cd420fb75c8823304931d8",
            s7: f_paySuccess,
            s8:"https://payup.co.kr/pay_logo.png",
            s9:"#0C75BB",
            s10:"Y"
        });
        Payup.payCall();
    }
    function f_paySuccess(data){
        console.log(data);
    }
</script>