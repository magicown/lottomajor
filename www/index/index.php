<?php include_once $_SERVER['DOCUMENT_ROOT']."/index/head.php"; ?>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in" style="text-shadow: rgba(0, 0, 0, 0.7) 2px 2px 1px;">10년간의 분석데이터를 집대성한</div>
        <div class="intro-heading text-uppercase" style="letter-spacing: -5px;
    text-shadow: rgba(0, 0, 0, 0.7) 2px 2px 1px;">2019 <span style="color:#50aeff;">마이닝</span>시스템</div>
          <div class="shtext-uppercase" style="font-size:2em;text-shadow: rgba(0, 0, 0, 0.7) 2px 2px 1px;">빅데이터 & 데이터마이닝을 기반으로 한 AI 분석시스템으로</div>
          <div class=" text-uppercase" style="margin-bottom:20px;font-size:2em;text-shadow: rgba(0, 0, 0, 0.7) 2px 2px 1px;">최단기간 고액당첨에 근접한 <span style="color:#50aeff;" class="font-weight-bold">로또메이져</span></div>
        <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#services">분석번호 받기</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
            <div class="section-subheading" style="font-size:30px;">로또메이저 통계 분석 솔루션</div>
            <h2 class="section-heading" style="letter-spacing: -1px;">차원이 다른 <span style="color:#50aeff; text-shadow: rgba(0, 0, 0, 0.7) 2px 2px 1px; ">로또분석시스템</span></h2>

        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-3" style="margin-top:10px;">
            <div class="section2-box">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-success"></i>
            <i class="fas fa-chart-line fa-stack-1x fa-inverse"></i>

          </span>
          <h4 class="service-heading">차세대 분석통계 <br>Ai시스템</h4>
            </div>
        </div>

        <div class="col-md-3" style="margin-top:10px;">
            <div class="section2-box">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-warning"></i>
            <i class="fas fa-compress-arrows-alt fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">보다 높은<br>당첨확률</h4>
            </div>
        </div>

        <div class="col-md-3" style="margin-top:10px;">
            <div class="section2-box">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-info"></i>
            <i class="fas fa-sms fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">SMS문자발송<br>서비스</h4>
            </div>
        </div>

      <div class="col-md-3" style="margin-top:10px;">
          <div class="section2-box">
              <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-funnel-dollar fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Big Data<br>통계자료실</h4>
          </div>
      </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
          <div class="col-md-5 hit-personal" style="margin-left:0px;">
              <div class="section2-box">
                  <h4 class="service-heading text-white">로또메이져 <span class="text-primary" style="margin-right:7px;"><?php echo $turn; ?></span>회차</h4>
                  <h4 class="service-heading text-white" style="font-size:35px;">당첨자 배출현황</h4>
              </div>
          </div>
          <div class="col-md-2">
              <div class="section2-box">
                  <h4 class="service-heading text-white" style="padding-bottom:40px; text-align: right;">1등 배출</h4>
                  <h4 class="text-white align-right" style="text-align: right;">1명</h4>
              </div>
          </div>
          <div class="col-md-2">
              <div class="section2-box">
                  <h4 class="service-heading text-white" style="padding-bottom:40px; text-align: right;">2등 배출</h4>
                  <h4 class="text-white" style="text-align: right;">1명</h4>
              </div>
          </div>
          <div class="col-md-2">
              <div class="section2-box">
                  <h4 class="service-heading text-white" style="padding-bottom:40px; text-align: right;">3등 배출</h4>
                  <h4 class="text-white" style="text-align: right;">1명</h4>
              </div>
          </div>
      </div>

    </div>
  </section>

  <!-- 회차 당첨번호 -->

  <!-- About -->


 <!-- 회차 당첨번호 -->
  <form name="f" method="get" action="./">
  <section class="bg-light page-section" name="about" id="about">
    <div class="containers">
      <div class="rows">
      	<div class="about_left_bg">
      		<div class="about_left">
			<h1 class="text-white"><span class="text-primary"><?php echo $turn; ?></span>회차 당첨번호</h1>
			<span class="about_date">추첨일 : <?php echo date("Y.m.d",strtotime($lotto['hit_date']));?></span>
                <select name="turn" id="turn" class="form-group" style="color:#000; font-size:30px; padding:10px 80px; border-radius: 10px;" onchange="document.f.submit();">
                <?php
                   $sql = "SELECT * FROM lotto_hit_result WHERE 1 ORDER BY hit_turn DESC";
                   echo $sql;
                   $res = sql_query($sql);
                   while($rows = sql_fetch_array($res)){
                ?>
                       <option value="<?php echo $rows['hit_turn']; ?>" <?php echo ($rows['hit_turn']==$_REQUEST['turn'])?'selected':''; ?>><?php echo $rows['hit_turn']; ?>회차</option>
                <?php } ?>
                </select>
			</div>
        </div>
        <div class="about_right">
        	<div class="about_right_circle">
	        	<div class="circle <?php echo makeLottoNumCss($ball[0]);?>"><span><?php echo $ball[0]; ?></span></div>
	        	<div class="circle <?php echo makeLottoNumCss($ball[1]);?>"><span><?php echo $ball[1]; ?></span></div>
	        	<div class="circle <?php echo makeLottoNumCss($ball[2]);?>"><span><?php echo $ball[2]; ?></span></div>
	        	<div class="circle <?php echo makeLottoNumCss($ball[3]);?>"><span><?php echo $ball[3]; ?></span></div>
	        	<div class="circle <?php echo makeLottoNumCss($ball[4]);?>"><span><?php echo $ball[4]; ?></span></div>
	        	<div class="circle <?php echo makeLottoNumCss($ball[5]);?>"><span><?php echo $ball[5]; ?></span></div>
	        	<div class="plus">+</div>
	        	<div class="circle <?php echo makeLottoNumCss($ball[6]);?>"><span><?php echo $ball[6]; ?></span></div>
	        </div>
        	<div class="winner">
				<ul>
				<li>1등 당첨자 <span><b><?php echo $person[0]; ?></b>명</span></li>
				<li>1등 당첨금 <span><b><?php echo $money[0]; ?></b>원</span></li>
				</ul>
				<ul>
				<li>2등 당첨자  <span><b><?php echo $person[1]; ?></b>명</span></li>
				<li>2등 당첨금  <span><b><?php echo $money[1]; ?></b>원</span></li>
				</ul>
				<ul>
				<li>3등 당첨자  <span><b><?php echo $person[2]; ?></b>명</span></li>
				<li>3등 당첨금  <span><b><?php echo $money[2]; ?></b>원</span></li>
				</ul>
        	</div>
		</div>
      </div>
    </div>
  </section>
  </form>
  <!-- About -->

  <!-- 명예의전당 -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
            <h2 class="text-white">로또메이져</h2>
            <h1 class="text-white" style="font-size:65px; margin-bottom:20px;">명예의전당</h1>
            <h2 class="text-white">로또메이져의 철저한관리로 인하여</h2>
            <h3 class="text-white">당첨되신 회원님들의 소중한 자료입니다.</h3>
            <a class="btn  btn-xl text-uppercase js-scroll-trigger show-more-btn" >자세히보기 <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </section>


  <!-- 당신의 차례입니다. -->
  <section class="bg-light page-section" id="your">
    <div class="container">
      <div class="row">
          <div class="col-md-12 col-lg-12">
              <h2 class="text-white" style="text-align: center;">대한민국의 로또분석의 메이저</h2>
              <h1 class="text-white" style="font-size:65px; margin-bottom:20px; text-align: center;">메이저로또와 함께하면 다음1등은</h1>
              <h1 class="text-white" style="font-size:65px; text-align: center; margin-bottom:20px;">당신의 차례입니다.</h1>
              <h3 class="text-white" style="text-align: center;">로또분석의 메이저 로또메이저와 1등의 꿈을 함께하세요.</h3>
          </div>
      </div>
    </div>
  </section>
  <!-- Clients -->
    <script>
        var turn = '<?php echo $_REQUEST['turn']; ?>';

            if(turn!=''){
                console.log('fasdf');
                location.href='#about';
            }


    </script>
<?php
    include_once $_SERVER['DOCUMENT_ROOT']."/index/tail.php";
?>