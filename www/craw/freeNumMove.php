<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 2019-03-26
 * Time: 오전 10:40
 */


//===========================================================================
// 사용자 설정부분
//===========================================================================
$root_path = "/home/lotto/www"; //그누보드 설치된 물리적 위치, 끝에 "/"을 붙이지 않음
//===========================================================================
// 이하 수정금지
//===========================================================================


include($root_path."/common.php");


set_time_limit(0);
ini_set("memory_limit", -1);


//금주에 회차를 구한다.
$sql = "SELECT hit_turn FROM lotto_hit_result WHERE 1 ORDER BY idx DESC LIMIT 1";
echo $sql."<br>";
$rs = sql_fetch($sql);
$turn = $rs['hit_turn']+1;




        $que1 = "SELECT * FROM member_lotto_num_temp WHERE mb_id = '{$rs['mb_id']}' AND lotto_turn = '{$turn}' AND move_yn = 'n' AND mb_id != '' ";
        echo $que1."<br>";
        $que1_res = sql_query($que1);
        while($rs1 =  sql_fetch_array($que1_res)){
            $que2  = "INSERT INTO member_lotto_num SET ";
            $que2 .= "lotto_idx = '{$rs1['lotto_idx']}', ";
            $que2 .= "mb_id = '{$rs1['mb_id']}', ";
            $que2 .= "lotto_num = '{$rs1['lotto_num']}', ";
            $que2 .= "lotto_turn = '{$rs1['lotto_turn']}', ";
            $que2 .= "lotto_result = '', ";
            $que2 .= "lotto_result_yn  = 'n', ";
            $que2 .= "direct_send = 'N', ";
            $que2 .= "pay_yn = 'N', ";
            $que2 .= "reg_date = NOW() ";
            echo $que2."<br>";
            $que2_res = sql_query($que2);
            sql_query("UPDATE member_lotto_num_temp SET move_yn = 'y' WHERE idx = '{$rs1['idx']}'");


        }
   

