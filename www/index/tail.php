<!-- Contact -->
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
                    <div class="contact-us">전화 : 032-710-9551,9556~7 <!--팩스 : 070-4814-0607</di--></div>
                    <div class="contact-us">통신판매신고번호 : 2016-인천미추홀구-0213</div>
                    <div class="contact-us">개인정보관리책임자 : 박진영</div>
                </h3>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; lottomajor 2019</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</footer>

<!-- Portfolio Modals -->


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/agency.min.js"></script>
<script>
    /* $(document).ready(function(){
         $('.dropdown-toggle').dropdown()
     });*/
</script>

<script>
    $(document).ready(function(){


        $(".navbar-toggle").click(function(){
            if($(".navbar-area>.navbar-menu").is(":visible") ){
                $(".navbar-area>.navbar-menu").slideUp();
                $(".navbar-area>.navbar-menu>li>ul").slideUp();
                $(".navbar-area>.navbar-menu>li i").slideUp();
            }else{
                $(".navbar-area>.navbar-menu").slideDown();
                $(".navbar-area>.navbar-menu>li>ul").slideUp();
                $(".navbar-area>.navbar-menu>li i").slideDown();
            }
        });
        $(".navbar-menu>li").mouseover(function(){
            $(".navbar-area>.navbar-menu>li>ul").slideUp();
            $(".navbar-area>.navbar-menu>li").removeClass("on-menu");
            if( $(this).children("ul").is(":visible") ){
                $(this).children("ul").slideUp();
            }else{
                $(this).addClass("on-menu");
                $(this).children("ul").slideDown();
            }
        });
        $(".navbar-menu>li").mouseout(function(){
            $(".navbar-area>.navbar-menu>li").removeClass("on-menu");
            $(".navbar-area>.navbar-menu.on-menu>li").removeClass("on-menu");
        });
    });
</script>


</body>

</html>