<?php

$root_path = "/home/lottomajor/www"; //그누보드 설치된 물리적 위치, 끝에 "/"을 붙이지 않음
$root_url = "http://www.lottorico.co.kr"; //그누보드가 설치된 위치의 url, 끝에 "/"을 붙이지 않음

//===========================================================================
// 이하 수정금지
//===========================================================================


include($root_path."/common.php");

ini_set('memory_limit',-1);
$cnt = $cnt2 = $cnt3 = $cnt4 = 0;

$sql = "SELECT hit_num FROM lotto_hit_result WHERE 1   ";
echo $sql."<br>";
$res = sql_query($sql);
while($rs = sql_fetch_array($res)) {
    unset($cnt);
    $num = explode("|", $rs['hit_num']);//역대 당첨번호

    $org = array($num[0],$num[1],$num[2],$num[3],$num[4],$num[5]);
    for($i=0;$i<=5;$i++){
        if($i==0){
            $que = "UPDATE lotto_num SET before_hit_2 = 'Y' WHERE no1='{$num[6]}' AND no2='{$num[1]}' AND no3='{$num[2]}' AND no4='{$num[3]}' AND no5='{$num[4]}' AND no6='{$num[5]}'";
            echo $que."<br>";
            sql_query($que);
        }
        if($i==1){

            $que = "UPDATE lotto_num SET before_hit_2 = 'Y' WHERE no1='{$num[0]}' AND no2='{$num[6]}' AND no3='{$num[2]}' AND no4='{$num[3]}' AND no5='{$num[4]}' AND no6='{$num[5]}'";
            echo $que."<br>";
            sql_query($que);
        }
        if($i==2){

            $que = "UPDATE lotto_num SET before_hit_2 = 'Y' WHERE no1='{$num[0]}' AND no2='{$num[1]}' AND no3='{$num[6]}' AND no4='{$num[3]}' AND no5='{$num[4]}' AND no6='{$num[5]}'";
            echo $que."<br>";
            sql_query($que);
        }
        if($i==3){

            $que = "UPDATE lotto_num SET before_hit_2 = 'Y' WHERE no1='{$num[0]}' AND no2='{$num[1]}' AND no3='{$num[2]}' AND no4='{$num[6]}' AND no5='{$num[4]}' AND no6='{$num[5]}'";
            echo $que."<br>";
            sql_query($que);
        }
        if($i==4){

            $que = "UPDATE lotto_num SET before_hit_2 = 'Y' WHERE no1='{$num[0]}' AND no2='{$num[1]}' AND no3='{$num[2]}' AND no4='{$num[3]}' AND no5='{$num[6]}' AND no6='{$num[5]}'";
            echo $que."<br>";
            sql_query($que);
        }
        if($i==5){

            $que = "UPDATE lotto_num SET before_hit_2 = 'Y' WHERE no1='{$num[0]}' AND no2='{$num[1]}' AND no3='{$num[2]}' AND no4='{$num[3]}' AND no5='{$num[4]}' AND no6='{$num[6]}'";
            echo $que."<br>";
            sql_query($que);
        }
        echo "<p>";

    }
}
echo $cnt."<br>";

