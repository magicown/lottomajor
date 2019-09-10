<?php
/**
 * Created by PhpStorm.
 * User: 김명준(phpprogram47@gmail.com)
 * Date: 2019-03-31
 * Time: 오후 4:45
 */
$root_path = "/home/lottomajor/www"; //그누보드 설치된 물리적 위치, 끝에 "/"을 붙이지 않음
$root_url = "http://www.lottorico.co.kr"; //그누보드가 설치된 위치의 url, 끝에 "/"을 붙이지 않음

//===========================================================================
// 이하 수정금지
//===========================================================================


include($root_path."/common.php");
include("./Snoopy.class.php");

$snoopy = new Snoopy;

$que = "SELECT hit_turn FROM lotto_hit_result WHERE 1 ORDER BY hit_turn DESC LIMIT 1";
$turn = sql_fetch($que);



$snoopy->fetch("http://firstlotto.co.kr/result/local.php?round=".$i);
$content = $snoopy->results;


preg_match_all('/<h3>(.*?)<\/div>/isx', $content, $text);
$shop = iconv("cp949","utf-8",$text[0][0]);

$sql = "SELECT count(*) as cnt FROM lotto_shop WHERE turn = '{$turn['hit_turn']}' ";
$cnt = sql_fetch($sql);
if(!$cnt['cnt']) {
    $sql = "INSERT INTO lotto_shop SET ";
    $sql .= "turn = '{$i}', ";
    $sql .= "content = '" . sql_real_escape_string($shop) . "' ";
//echo $sql;
    sql_query($sql);
}




