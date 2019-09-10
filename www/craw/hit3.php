<?php

$root_path = "/home/lottomajor/www"; //그누보드 설치된 물리적 위치, 끝에 "/"을 붙이지 않음
$root_url = "http://www.lottorico.co.kr"; //그누보드가 설치된 위치의 url, 끝에 "/"을 붙이지 않음

//===========================================================================
// 이하 수정금지
//===========================================================================


include($root_path."/common.php");

ini_set('memory_limit',-1);
$cnt = $cnt2 = $cnt3 = $cnt4 = 0;

sql_query("UPDATE lotto_num SET before_hit_3 = 'N' WHERE 1");

$que1 = "SELECT idx,no1,no2,no3,no4,no5,no6 FROM lotto_num WHERE 1 order by idx asc   ";
echo $que1."<br>";
$res1 = sql_query($que1);
while($rs1 = sql_fetch_array($res1)) {
    $lotto_num =  array($rs1['no1'],$rs1['no2'],$rs1['no3'],$rs1['no4'],$rs1['no5'],$rs1['no6']);
    $sql = "SELECT hit_num FROM lotto_hit_result WHERE 1   ";
    echo $sql."<br>";
    $res = sql_query($sql);
    while($rs = sql_fetch_array($res)) {
        unset($cnt);
        $num = explode("|", $rs['hit_num']);//역대 당첨번호
        $num2 = array($num[0],$num[1],$num[2],$num[3],$num[4],$num[5]);
        /*print_r($lotto_num);
        echo "<p>";
        print_r($num);
        echo "<p>";*/
        for($i=0;$i<=5;$i++){
            if(in_array($lotto_num[$i],$num2)){
                $cnt++;
            }
        }

        echo $cnt."<br>";

        if($cnt == 5){
            $que2 = "UPDATE lotto_num SET before_hit_3 = 'Y' WHERE idx = '{$rs1['idx']}' ";
            //echo $que2."<br>";
            sql_query($que2);
        }
    }
}
