<?php
/**
 * Created by PhpStorm.
 * User: 김명준 (phpprogram47@gmail.com)
 * Date: 2019-04-03
 * Time: 오전 11:10
 */

    include_once('./_common.php');

    $mode = $_REQUEST['mode'];
    $numDay = $_REQUEST['numDay'];

    switch($mode){
        case 'numWeekChange':
            $flg = false;
            $sql = "UPDATE g5_member SET mon_sms_cnt = '{$mon}',tue_sms_cnt = '{$tue}',wed_sms_cnt = '{$wed}',thu_sms_cnt = '{$thu}',fri_sms_cnt = '{$fri}',sat_sms_cnt = '{$sat}' WHERE mb_id = '{$mb_id}'";
            //echo $sql;
            $res = sql_query($sql);
            if($res){
                $flg = true;
            }

            $result['flag'] = $flg;
            echo json_encode($result);
            break;
        case 'getNumChange':
            $flg = false;
            $sql = "UPDATE g5_member SET mb_3 = '{$cnt}' WHERE mb_id = '{$mb_id}'";
            //echo $sql;
            $res = sql_query($sql);
            if($res){
                $flg = true;
            }

            $result['flag'] = $flg;
            echo json_encode($result);
            break;
    }


?>
