<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$skin_url.'/style.css" media="screen">', 0);

if($header_skin)
    include_once('./header.php');


$sql_turn = '';
if($_REQUEST['turn']!=''){
    $sql_turn = " AND turn = '{$_REQUEST['turn']}' ";
    $turn = $_REQUEST['turn'];
    $que = "SELECT * FROM lotto_shop WHERE 1 {$sql_turn} ORDER BY turn DESC LIMIT 1";
//echo $que;
    $lotto = sql_fetch($que);
} else {
    $que = "SELECT * FROM lotto_shop WHERE 1 {$sql_turn} ORDER BY turn DESC LIMIT 1";
//echo $que;
    $lotto = sql_fetch($que);
    $turn = $lotto['turn'];
}

$cont = str_replace("ortb","table table-bordered table-striped",$lotto['content']);
$cont = str_replace("▶","*",$cont);

?>
<link rel="stylesheet" type="text/css" href="/css/skin/default.css">
<link rel="stylesheet" type="text/css" href="/css/skin/contents.css">
<link rel="stylesheet" type="text/css" href="/css/skin/common.css">
<style>
    .g-title { margin:15px 0 15px 0;}
</style>
<div id="article" class="contentsArticle">
    <div class="header_article" style="margin-top:30px;">
        <h3 class="sub_title">1,2등 당첨판매점</h3>
        <p class="location">
        <form name="frm">
            <span class="unit label">회차 바로가기</span>
            <select name="turn" title="회차 선택" style="margin-bottom:0px;">
                <?php
                $que = "SELECT * FROM lotto_shop WHERE 1  ORDER BY turn DESC";
                echo $que;
                $res = sql_query($que);
                while($rows = sql_fetch_array($res)){
                    ?>
                    <option value="<?php echo $rows['turn']; ?>" <?php echo ($rows['turn']==$turn)?'selected':''; ?>><?php echo $rows['turn']; ?></option>
                <?php } ?>
            </select>
            <a id="searchBtn" class="btn_common form blu" onclick="frm.submit();">조회</a>
        </form>
        </p>
    </div>
    <?php echo $cont; ?>
</div>