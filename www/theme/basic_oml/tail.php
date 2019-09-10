<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}


if($_SERVER['PHP_SELF'] !== "index.php"){
    echo "
    </div>

    ";
}

?>





    <!-- Footer -->
    <footer>
        <div class="container">
            <ul class="quicklinks">
                <li><a href="">회사소개</a></li>
                <li> | </li>
                <li><a href="<?=G5_URL;?>/sp/provision/provision.php">서비스이용약관</a></li>
                <li> | </li>
                <li><a href="<?=G5_URL;?>/sp/provision/privacy.php">개인정보 취급방침</a></li>
            </ul>

            <p>
                회사명 행운컴퍼니 주소 인천광역시 미추홀구 매소홀로 562번길 5-44,302호(문학동,성원프라자) <br />
                사업자 등록번호 476-09-00229 대표 김길년 전화 032-724-8091 팩스 070-4814-0607<br />
                통신판매업신고번호 2016-인천미추홀구-0213 개인정보관리책임자 박진영 <br /><br />
                Copyright © 2019 행운컴퍼니. All Rights Reserved.
            </p>
            <p style="font-size:9px;line-height:13px;">
              오마이로또의 자료실/분석시스템은 오마이로또의 지적재산이므로, 무단도용 및 모방시에는 엄증 법적조치를 받을 수 있습니다. <br />
              오마이로또에서 제공하는 자료실은 오마이로또만의 획기적인 분석프로그램으로 지적재산권의 보호를 받고있습니다.
              <br /><br />
              문자발송서비스(SMS,MMS)전산오류(핸드폰기종/스팸설정/통신사사정)으로 문자 미전송 될 수 있습니다.<br />
              본 서비스 이용자는 매주 전송하는 서비스의 최종 확인은 오마이로또 사이트 내정보확인에서 확인해야할 의무가 있습니다. <br />
              문자 미전송으로 관련하여 오마이로또는 어떠한 법적책임도 지지 않음을 알려드립니다.
            </p>
        </div>
    </footer>




<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
