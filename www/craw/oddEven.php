<?php

$root_path = "/home/lottomajor/www"; //그누보드 설치된 물리적 위치, 끝에 "/"을 붙이지 않음
$root_url = "http://www.lottorico.co.kr"; //그누보드가 설치된 위치의 url, 끝에 "/"을 붙이지 않음

//===========================================================================
// 이하 수정금지
//===========================================================================


include($root_path."/common.php");

ini_set('memory_limit',-1);
$cnt = $cnt2 = $cnt3 = $cnt4 = 0;



$que1 = "SELECT idx,no1,no2,no3,no4,no5,no6 FROM lotto_num WHERE 1 order by idx asc   ";
echo $que1."<br>";
$res1 = sql_query($que1);
while($rs1 = sql_fetch_array($res1)) {
    unset($odd);
    unset($low);
    $low = 0;
    $lotto_num =  array($rs1['no1'],$rs1['no2'],$rs1['no3'],$rs1['no4'],$rs1['no5'],$rs1['no6']);
    print_r($lotto_num);
    for($i=0;$i<6;$i++) {

        if ($lotto_num[$i] % 2 == 0) {
            $even++;
        } else {
            $odd++;
        }

        if($lotto_num[$i]>22){
            $low++;
        }
    }

    $que = "UPDATE lotto_num SET odd_cnt = '{$odd}', number_high = '{$low}' WHERE idx = '{$rs1[idx]}'";
    echo $que."<br>";
    sql_query($que);
}


