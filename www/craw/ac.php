<?php

$root_path = "/home/lottomajor/www"; //그누보드 설치된 물리적 위치, 끝에 "/"을 붙이지 않음
$root_url = "http://www.lottorico.co.kr"; //그누보드가 설치된 위치의 url, 끝에 "/"을 붙이지 않음

//===========================================================================
// 이하 수정금지
//===========================================================================


include($root_path."/common.php");

ini_set('memory_limit',-1);
$cnt = $cnt2 = $cnt3 = $cnt4 = 0;


$sql = "SELECT * FROM lotto_num WHERE 1   ";
echo $sql."<br>";
$res = sql_query($sql);
while($rs = sql_fetch_array($res)) {
    unset($acValue);
    unset($num_array);
$ac_array = array();
    $num_array = array($rs[no1],$rs[no2],$rs[no3],$rs[no4],$rs[no5],$rs[no6]);
    //$num_array = array(1,2,3,4,5,6);
    $cnt = 0;
    for ($a = 0; $a < 5; $a++) {
        for ($b = $a + 1; $b < 6; $b++) {

            $k = $num_array[$b] - $num_array[$a];
            $ac_array[] = $k;
        }
    }

    $ac = array_count_values($ac_array);
    foreach( $ac as $key => $value ){


        if($value>1){
            $cnt++;
        }

    }
 $ac_value = (15-$cnt)-5;


    $que = "UPDATE lotto_num SET ac = '{$ac_value}' WHERE idx = '{$rs[idx]}' ";
    echo $que."<br>";
    sql_query($que);
}