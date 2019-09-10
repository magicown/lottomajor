<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$skin_url.'/style.css" media="screen">', 0);
ini_set("display_errors",1);
if($header_skin)
	include_once('./header.php');

?>
<link rel="stylesheet" type="text/css" href="/css/skin/default.css">
<link rel="stylesheet" type="text/css" href="/css/skin/contents.css">

<link rel="stylesheet" type="text/css" href="/css/skin/common.css">
<div class="heading-title heading-border-bottom">
    <h1>로또메이저 <span>번호별통계</span></h1>
</div>

<div class="panel panel-danger">

    <div class="nopadding panel-body">
        <table class="table nomargin">
            <thead>
            <tr>
                <th style="width:10%; text-align: center;">번호</th>
                <th style="text-align: center;">그래프</th>
                <th style="width:10%; text-align: center">나온횟수</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $que = "SELECT COUNT(*) AS cnt FROM lotto_num_cnt ";
            $total = sql_fetch($que);

            $que = "SELECT * FROM lotto_num_cnt WHERE 1 ORDER BY lotto_num ASC";
            $res = sql_query($que);
            while($rs = sql_fetch_array($res)){
                $avg = ($rs['cnt']/$total[cnt]);
                if($rs['lotto_num']>=1 && $rs['lotto_num']<11) {
                    $color = "fbc400";
                } else if($rs['lotto_num']>=11 && $rs['lotto_num']<21){
                    $color = "69c8f2";
                } else if($rs['lotto_num']>=21 && $rs['lotto_num']<31){
                    $color = "ff7272";
                } else if($rs['lotto_num']>=31 && $rs['lotto_num']<41){
                    $color = "aaa";
                } else if($rs['lotto_num']>=41){
                    $color = "b0d840";
                }
                ?>
                <tr>
                    <td style="text-align: center"><div class="ball_645 lrg <?php echo makeLottoNumCss1($rs[lotto_num]);?>" style="box-shadow: 2px 2px 2px gray"><span><?php echo $rs[lotto_num]; ?></span></div></td>
                    <td><div style="width:<?php echo ceil($avg*25);?>%; height:10px; background-color: #<?php echo $color; ?>"></div><span><?php echo substr($avg,0,5); ?>%</span></td>
                    <td style="text-align: center; font-weight: bold;"><?php echo $rs[cnt]; ?>회</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>