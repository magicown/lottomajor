<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$skin_url.'/style.css" media="screen">', 0);

if($header_skin)
	include_once('./header.php');


$sql_turn = '';
if($_REQUEST['turn']!=''){
    $sql_turn = " AND hit_turn = '{$_REQUEST['turn']}' ";
    $turn = $_REQUEST['turn'];
    $que = "SELECT * FROM lotto_hit_result WHERE 1 {$sql_turn} ORDER BY hit_turn DESC LIMIT 1";
//echo $que;
    $lotto = sql_fetch($que);
} else {
    $que = "SELECT * FROM lotto_hit_result WHERE 1 {$sql_turn} ORDER BY hit_turn DESC LIMIT 1";
//echo $que;
    $lotto = sql_fetch($que);
    $turn = $lotto['hit_turn'];
}


$person = explode("|",$lotto['hit_money_person']);
$money_all = explode("|",$lotto['hit_money_money']);
$money = explode("|",$lotto['hit_get_money']);
$ball = explode("|",$lotto['hit_num']);


?>
<link rel="stylesheet" type="text/css" href="/css/skin/default.css">
<link rel="stylesheet" type="text/css" href="/css/skin/contents.css">
<link rel="stylesheet" type="text/css" href="/css/skin/common.css">
<div id="article" class="contentsArticle">
    <div class="header_article" style="margin-top:30px;">
        <h3 class="sub_title">회차별 당첨번호</h3>
        <p class="location">
        <form name="frm">
            <span class="unit label">회차 바로가기</span>
            <select name="turn" title="회차 선택" style="margin-bottom:0px;">
                <?php
                $que = "SELECT * FROM lotto_hit_result WHERE 1  ORDER BY hit_turn DESC";
                echo $que;
                $res = sql_query($que);
                while($rows = sql_fetch_array($res)){
                ?>
                <option value="<?php echo $rows['hit_turn']; ?>" <?php echo ($rows['hit_turn']==$turn)?'selected':''; ?>><?php echo $rows['hit_turn']; ?></option>
                <?php } ?>
            </select>
            <a id="searchBtn" class="btn_common form blu" onclick="frm.submit();">조회</a>
        </form>
        </p>
    </div>
    <div>
        <div class="content_wrap content_winnum_645" style="margin-bottom:30px;">
            <div class="win_result">
                <h4><strong><?php echo $turn; ?>회</strong> 당첨결과</h4>
                <p class="desc">(<?php echo date("Y년 m월 d일",strtotime($lotto['hit_date'])); ?> 추첨)</p>
                <div class="nums">
                    <div class="num win">
                        <strong>당첨번호</strong>
                        <p>
                            <span class="ball_645 lrg <?php echo makeLottoNumCss1($ball[0]); ?>"><?php echo $ball[0]; ?></span>
                            <span class="ball_645 lrg <?php echo makeLottoNumCss1($ball[1]); ?>"><?php echo $ball[1]; ?></span>
                            <span class="ball_645 lrg <?php echo makeLottoNumCss1($ball[2]); ?>"><?php echo $ball[2]; ?></span>
                            <span class="ball_645 lrg <?php echo makeLottoNumCss1($ball[3]); ?>"><?php echo $ball[3]; ?></span>
                            <span class="ball_645 lrg <?php echo makeLottoNumCss1($ball[4]); ?>"><?php echo $ball[4]; ?></span>
                            <span class="ball_645 lrg <?php echo makeLottoNumCss1($ball[5]); ?>"><?php echo $ball[5]; ?></span>
                        </p>
                    </div>
                    <div class="num bonus">
                        <strong>보너스</strong>
                        <p><span class="ball_645 lrg <?php echo makeLottoNumCss1($ball[6]); ?>"><?php echo $ball[6];?></span></p>
                    </div>
                </div>
            </div>
            <table class="tbl_data tbl_data_col">
                <caption>871회  순위별 등위별 총 당첨금액, 당첨게임 수, 1게임당 당첨금액, 당첨기준, 비고 안내</caption>
                <colgroup>
                    <col style="width:85px">
                    <col style="width:180px">
                    <col style="width:145px">
                    <col style="width:180px">
                    <col>
                    <col style="width:110px">
                </colgroup>
                <thead>
                <tr>
                    <th scope="col">순위</th>
                    <th scope="col">등위별 총 당첨금액</th>
                    <th scope="col">당첨게임 수</th>
                    <th scope="col">1게임당 당첨금액</th>
                    <th scope="col">당첨기준</th>
                    <th scope="col">비고</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1등</td>
                    <td class="tar"><strong class="color_key1"><?php echo $money_all[0]; ?>원</strong></td>
                    <td><?php echo $person[0]; ?></td>
                    <td class="tar"><?php echo $money[0]; ?>원</td>
                    <td>당첨번호 <strong class="length">6개</strong> 숫자일치</td>
                    <td rowspan="5">
                        <!--1등<br>
                        자동6<br>
                        수동1<br>-->
                    </td>
                </tr>
                <tr>
                    <td>2등</td>
                    <td class="tar"><strong class="color_key1"><?php echo $money_all[1]; ?>원</strong></td>
                    <td><?php echo $person[1]; ?></td>
                    <td class="tar"><?php echo $money[1]; ?>원</td>
                    <td class="nobd_right">당첨번호 <strong class="length">5개</strong> 숫자일치<br>+<strong class="length">보너스</strong> 숫자일치</td>
                </tr>
                <tr>
                    <td>3등</td>
                    <td class="tar"><strong class="color_key1"><?php echo $money_all[2]; ?>원</strong></td>
                    <td><?php echo $person[2]; ?></td>
                    <td class="tar"><?php echo $money[2]; ?>원</td>
                    <td class="nobd_right">당첨번호 <strong class="length">5개</strong> 숫자일치</td>
                </tr>
                <tr>
                    <td>4등</td>
                    <td class="tar"><strong class="color_key1"><?php echo $money_all[3]; ?>원</strong></td>
                    <td><?php echo $person[3]; ?></td>
                    <td class="tar"><?php echo $money[3]; ?>원</td>
                    <td class="nobd_right">당첨번호 <strong class="length">4개</strong> 숫자일치</td>
                </tr>
                <tr>
                    <td>5등</td>
                    <td class="tar"><strong class="color_key1"><?php echo $money_all[4]; ?>원</strong></td>
                    <td><?php echo $person[4]; ?></td>
                    <td class="tar"><?php echo $money[4]; ?>원</td>
                    <td class="nobd_right">당첨번호 <strong class="length">3개</strong> 숫자일치</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>