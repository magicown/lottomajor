<?php

$root_path = "/home/lottomajor/www"; //그누보드 설치된 물리적 위치, 끝에 "/"을 붙이지 않음
$root_url = "http://www.lottorico.co.kr"; //그누보드가 설치된 위치의 url, 끝에 "/"을 붙이지 않음

//===========================================================================
// 이하 수정금지
//===========================================================================


include($root_path."/common.php");

ini_set('memory_limit',-1);
$cnt = $cnt2 = $cnt3 = $cnt4 = 0;

//1등번호
/*$sql = "SELECT hit_num FROM lotto_hit_result WHERE 1  ";
echo $sql."<br>";
$res = sql_query($sql);
while($rs = sql_fetch_array($res)) {
    $num = explode("|", $rs['hit_num']);
    $que1 = "SELECT idx FROM lotto_num WHERE  no1 = '{$num[0]}' AND no2 = '{$num[1]}' AND no3 = '{$num[2]}' AND no4 = '{$num[3]}' AND no5 = '{$num[4]}' AND no6 = '{$num[5]}' ";
    $rs = sql_fetch($que1);
    //echo $rs[idx]."<br>";
    $que = "UPDATE lotto_num SET before_hit_1 = 'Y' WHERE idx = '{$rs['idx']}' ";
    //echo $que."<br>";
    sql_query($que);
}*/


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
        /*print_r($lotto_num);
        echo "<p>";
        print_r($num);
        echo "<p>";*/
        for($i=0;$i<=5;$i++){
            if(in_array($lotto_num[$i],$num)){
                $cnt++;
            }
        }

        echo $cnt."<br>";

        if($cnt == 6) {
            $que2 = "UPDATE lotto_num SET before_hit_2 = 'Y' WHERE idx = '{$rs1['idx']}' ";
            //echo $que2."<br>";
            sql_query($que2);
        } else if($cnt == 5){
            $que2 = "UPDATE lotto_num SET before_hit_3 = 'Y' WHERE idx = '{$rs1['idx']}' ";
            //echo $que2."<br>";
            sql_query($que2);
        }
        //$que2 = "UPDATE lotto_num SET before_hit_2_1 = 'Y' WHERE idx = '{$rs1['idx']}' ";
        //echo $que2."<br>";
        //sql_query($que2);
    }
}


//2등번호
/*$sql = "SELECT hit_num FROM lotto_hit_result WHERE 1 limit 10  ";
echo $sql."<br>";
$res = sql_query($sql);
while($rs = sql_fetch_array($res)) {
    $num = explode("|", $rs['hit_num']);//역대 당첨번호

    $que1 = "SELECT idx,no1,no2,no3,no4,no5,no6 FROM lotto_num WHERE before_hit_1 = 'N' AND before_hit_2_1 = 'N'  ";
    echo $que1."<br>";
    $res1 = sql_query($que1);
    while($rs1 = sql_fetch_array($res1)) {
        $num1 =  array($rs1['no1'],$rs1['no2'],$rs1['no3'],$rs1['no4'],$rs1['no5'],$rs1['no6']);
        print_r($num1);
echo "<p></p>";

        for($i=0;$i<=5;$i++){
            if(in_array($num1[$i],$num)){
                $cnt++;
            }
        }*/

        //echo $cnt."<br>";
        /*if($cnt == 6) {
            $que2 = "UPDATE lotto_num SET before_hit_2 = 'Y' WHERE idx = '{$rs1['idx']}' ";
            //echo $que2."<br>";
            sql_query($que2);
        } else if($cnt == 5){
            $que2 = "UPDATE lotto_num SET before_hit_3 = 'Y' WHERE idx = '{$rs1['idx']}' ";
            //echo $que2."<br>";
            sql_query($que2);
        } else {
            $que2 = "UPDATE lotto_num SET before_hit_2_1 = 'Y' WHERE idx = '{$rs1['idx']}' ";
            //echo $que2."<br>";
            sql_query($que2);
        }*/
   /* }

}*/



/*$que = "SELECT idx,no1,no2,no3,no4,no5,no6 FROM lotto_num WHERE 1 ";
$res = sql_query($que);
while($rows = sql_fetch_array($res)) {
    $no = array($rows['no1'],$rows['no2'],$rows['no3'],$rows['no4'],$rows['no5'],$rows['no6'], $rows['idx']);

    //hit_num_sum($rows['idx'],$no);
    //hit_num_last_sum($rows['idx'],$no);
    before_hit_1($rows['idx'],$no);
}*/


//이전 1등 당첨번호
function before_hit_1($idx, $no){

}


//당첨번호 합
/*function hit_num_sum($idx,$no){
    $sum = 0;
    $sum = $no[0]+$no[1]+$no[2]+$no[3]+$no[4]+$no[5];
    $sql = "UPDATE lotto_num SET num_sum = '{$sum}' WHERE idx = '{$idx}'";
    //echo $sql."<br>";
    sql_query($sql);
}*/

//당첨번호 끝수 합
/*function hit_num_last_sum($idx, $no){
    $sum = 0;
    $num = 0;
    for($i=0;$i<6;$i++){
        echo $i;
        if(strlen($no[$i])==2){
            $num = substr($no[$i],1,1);
        } else {
            $num = $no[$i];
        }

        $sum += $num;
        //$sum += $num;
    }
    $sql = "UPDATE lotto_num SET num_last_sum = '{$sum}' WHERE idx = '{$idx}'";
    //echo $sql."<br>";
    sql_query($sql);
}*/

//연번 조합 시작
/*$que = "SELECT idx,no1,no2,no3,no4,no5,no6 FROM lotto_num WHERE 1  ";
$res = sql_query($que);
while($rows = sql_fetch_array($res)) {
    $no = array($rows['no1'],$rows['no2'],$rows['no3'],$rows['no4'],$rows['no5'],$rows['no6']);
    chk($rows['idx'],$no);
}


function chk($idx, $no)
{
    //print_r($no);
    $one_chain_cnt = 0;
    for ($i = 0; $i < 6; $i++) {
        $res = 0;
        $res = abs($no[$i] - $no[($i + 1)]) . "<br>";
        //echo $res . "<br>";
        if ($res == 1) {
            //1연번
            $sql = "UPDATE lotto_num SET chain_yn = 'y', chain_is_1 = 'Y' WHERE idx = '{$idx}'";
            //echo $sql."<br>";
            //sql_query($sql);
            $cnt++;
            $one_chain_cnt++;
        } else {
            $cnt = 0;
        }

        if ($cnt == 2) {
            $sql = "UPDATE lotto_num SET chain_yn = 'y', chain_is_2 = 'Y' WHERE idx = '{$idx}'";
            //echo $sql."<br>";
            //sql_query($sql);
        }
       if ($cnt == 3) {
            $sql = "UPDATE lotto_num SET chain_yn = 'y', chain_is_3 = 'Y' WHERE idx = '{$idx}'";
            //echo $sql."<br>";
            //sql_query($sql);
       }

        if ($cnt == 4) {
            $sql = "UPDATE lotto_num SET chain_yn = 'y', chain_is_4 = 'Y' WHERE idx = '{$idx}'";
            //echo $sql."<br>";
            //sql_query($sql);
        }

        if ($cnt == 5) {
            $sql = "UPDATE lotto_num SET chain_yn = 'y', chain_is_5 = 'Y' WHERE idx = '{$idx}'";
            //echo $sql."<br>";
            //sql_query($sql);
        }

        if ($cnt == 6) {
            $sql = "UPDATE lotto_num SET chain_yn = 'y', chain_is_6 = 'Y' WHERE idx = '{$idx}'";
            //echo $sql."<br>";
            //sql_query($sql);
        }
        echo $res."-".$cnt."<br>";
    }

    if($one_chain_cnt>1){
        $sql = "UPDATE lotto_num SET chain_pair_yn = 'Y'WHERE idx = '{$idx}'";
        echo $sql."<br>";
        sql_query($sql);
    }
}*/

//연번 조합 끝