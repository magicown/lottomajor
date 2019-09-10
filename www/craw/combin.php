<?php

$root_path = "/home/lottomajor/www"; //그누보드 설치된 물리적 위치, 끝에 "/"을 붙이지 않음
$root_url = "http://www.lottorico.co.kr"; //그누보드가 설치된 위치의 url, 끝에 "/"을 붙이지 않음

//===========================================================================
// 이하 수정금지
//===========================================================================


include($root_path."/common.php");

ini_set('memory_limit',-1);
$cnt = $cnt2 = $cnt3 = $cnt4 = 0;
class caserow{
    private $user_select = 0; //사용자의 선택값 저장
    private $str_count = 0; //현재 줄 번호 출력용
    private $str_char = Array(3,5,12,13,33,39,38); //출력 할 문자조합
    public function caserow($cnt = 0){
        $this->user_select = $cnt; //선택값을 저장
        $this->get_combination();
    }
    private function get_combination($start = NULL,$end = NULL){
        if($start == NULL) $start = 0;
        if($end == NULL) $end = $this->user_select  - 1;
        $p = &$this->str_char;
        if($start == $end){
            $this->print_case($p);
        }
        else{
            for ($i=$start;$i<=$end;$i++)  //시작배열부터 끝 배열까지 반복
            {
                $this->str_swap($p[$start],$p[$i]);
                $this->get_combination($start+1,$end);
                $this->str_swap($p[$start],$p[$i]);
            }
        }
    }
    private function str_swap(&$str1,&$str2){
        $temp = $str1;
        $str1 = $str2;
        $str2 = $temp;
    }
    private function print_case($p = Array()){
        $this->str_count ++;
        echo "{$this->str_count} \t";
        for($i=0;$i<$this->user_select;$i++){
            echo $p[$i].",";
        }
        echo "\n";
    }
}
if(isset($_GET['input'])){
    $inputnum = $_GET['input'];
}
else{
    $inputnum = 6;
}
if(!is_numeric($inputnum) || $inputnum < 1 || $inputnum > 8) $inputnum = 5;
echo "<pre>\n";
$caserow = new caserow($inputnum);
echo "</pre>";
?>