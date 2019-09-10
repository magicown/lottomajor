<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>

</div>





</div>
</section>






<section class="page-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="section-subheading text-white">개인정보처리방침 | 서비스이용약관 | 이용가이드 | 고객센터</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <h3 class="section-subheading text-white">
                    <div class="contact-us">회사명 : (주)라윤컴퍼니</div>
                    <div class="contact-us">대표자 : 김대윤</div>
                    <div class="contact-us">사업자등록번호 : 650-05-01696</div>
                    <div class="contact-us">고객센터 이메일: lottomajor@gmail.com</div>
                </h3>
            </div>
            <div class="col-lg-7">
                <h3 class="section-subheading text-white">
                    <div class="contact-us">주소 : 인천광역시 미추홀구 인주대로 13, 3층(숭의동)</div>
                    <div class="contact-us">전화 : 032-710-9551,9556~7 <!--팩스 : 070-4814-0607--></div>
                    <div class="contact-us">통신판매신고번호 : 2016-인천미추홀구-0213</div>
                    <div class="contact-us">개인정보관리책임자 : 박진영</div>
                </h3>
            </div>
        </div>
    </div>
</section>


<!-- FOOTER -->
<footer id="footer">

    <div class="copyright">
        <div class="container">

            &copy; All Rights Reserved, lottomajor
        </div>
    </div>
</footer>
<!-- /FOOTER -->

</div>

<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>


<!-- PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div><!-- /PRELOADER -->

<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo THEMA_URL;?>/assets/js/respond.js"></script>
<![endif]-->

<!-- JavaScript -->
<script>
var sub_show = "<?php echo $at_set['subv'];?>";
var sub_hide = "<?php echo $at_set['subh'];?>";
var menu_startAt = "<?php echo ($m_sat) ? $m_sat : 0;?>";
var menu_sub = "<?php echo $m_sub;?>";
var menu_subAt = "<?php echo ($m_subsat) ? $m_subsat : 0;?>";
</script>
<script>
    $(document).ready(function(){
       $('#mobile-close-btn').on('click',function(){
          if($(this).parent().parent().find('.submenu-dark').hasClass('in')==true){
              setTimeout(
                  function(){
                      $('#mobile-close-btn').parent().parent().find('.submenu-dark').removeClass('in');
                      $(this).removeClass('in');
                  }
                  ,500);
          }
       });
    });
</script>
<script type="text/javascript" src="<?php echo THEMA_URL;?>/assets/bs3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo THEMA_URL;?>/assets/js/sly.min.js"></script>
<script type="text/javascript" src="<?php echo THEMA_URL;?>/assets/js/custom.js"></script>
<?php if($is_sticky_nav) { ?>
<script type="text/javascript" src="<?php echo THEMA_URL;?>/assets/js/sticky.js"></script>
<?php } ?>

<?php echo apms_widget('miso-sidebar'); //사이드바 및 모바일 메뉴(UI) ?>

<?php if($is_designer || $is_demo) //include_once(THEMA_PATH.'/assets/switcher.php'); //Style Switcher ?>

<!-- JAVASCRIPT FILES -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
    var plugin_path = '/js/';
</script>

<script type="text/javascript" src="/js/jquery-2.2.3.min.js"></script>

<script type="text/javascript" src="/js/scripts.js"></script>
