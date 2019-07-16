<?php
$thisPageName = 'about';
include_once('../app_config.php');
include(APP_PATH.'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/about.min.css">
</head>
<body id="about" class='about'>
  <?php include(APP_PATH.'libs/header-other.php'); ?>
  <div class="bread_cumb_box">
    <h1 class="ttl_h1">About <span style="color: #fff;">us</span></h1>
    <p class="txt_bread">
      <a href="<?php echo APP_URL; ?>">Home</a>
      <span>/ About</span>
    </p>
  </div>
  <div id="wrap" class="about_wrap">
    <section class="about_box1">
      <div class="inner_box">
        <h2 class="ttl">ABOUT SMK <span>FURNITURE VIETNAM</span></h2>
        <div class="content clearfix">
          <div class="box1">
            <p class="img">
              <img src="<?php echo APP_ASSETS ?>img/about/img_1.jpg" alt="">
            </p>
            <p class="txt">
              Gregory Schneider, CEO<br>SMK Corporation.
            </p>
          </div>
          <div class="box2" style="animation-delay: 0.2s;">
            <h3 class="ttl_sub">
              SMK furniture Vietnam best quality, price and timely delivery
            </h3>
            <p class="txt">
              In 1990, SMK Furniture factory was established at Qing Dao, China by MK Shin. Mr.Shin shifted production to Binh Duong, Viet Nam to capitalize on the manufacturing climate. At that point, Mr.Shin and I partnered to bring our products to North America.<br><br>
              SMK has been growing through our constant efforts for perfection, quality, and customer service. SMK takes pride in delivering the highest quality, competitively priced furniture on your time schedule.<br><br>
              SMK has over 30 years in the furniture industry. We know what it takes to provide the best product using the most recent technology and construction standards.<br><br>
              We are confident you will be pleased with what SMK can offer designers and clients as we provide your project needs.
            </p>
            <p class="txt_sign">
              Thank you<br>
              Gregory Schneider, CEO<br>
              SMK Corporation.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="about_box2">
      <div class="inner_box">
        <h3 class="ttl">
          SMK production capacity allows us to complete multiple projects simultaneously, <br class="pc">we are also happy to build smaller public space projects.
        </h3>
      </div>
    </section>
    <section class="about_box3">
      <div class="inner_box">
        <div class="box1">
          <h3 class="ttl">Action Plan for Quality Control </h3>
          <div class="txt">
            We have a FF&E project team with long standing experience Of all manufacturing process. They make sure you get the best quality for your projects. Their action plan for perfect quality is: 
          </div>
          <p class="txt1">Inspect all process starting from drawings, MR samples, materials, assembly and packing prior to proceeding to the next step in manufacturing </p>
          <p class="txt1">Quantity check and final inspection prior to delivery </p>
          <p class="txt1">Provide instructions on how to unpack and how to install </p>
          <p class="txt1">Report final inspection to General Manager for approval to ship</p>
        </div>
        <div class="box2" style="animation-delay: 0.2s;">
          <p class="img">
            <img src="<?php echo APP_ASSETS ?>img/about/img_3.jpg" alt="SMK China factory">
          </p>
          <p class="txt">SMK China factory</p>
          <p class="img">
            <img src="<?php echo APP_ASSETS ?>img/about/img_4.jpg" alt="SMK Vietnam factory">
          </p>
          <p class="txt">SMK Vietnam factory</p>
        </div>
      </div>
    </section>
    <section class="about_box4">
      <div class="inner_box">
        <h3 class="ttl pc">
          SMK Furniture technology
        </h3>
        <h3 class="ttl sp">SMK FURNITURE & <br>SUB FACTORIES</h3>
        <div class="box1 clearfix">
          <figure class="img">
            <img src="<?php echo APP_ASSETS ?>img/about/img_5.jpg" alt="Robots for polishing">
            <p class="txt_icon">Robots for polishing</p>
          </figure>
          <figure class="img">
            <img src="<?php echo APP_ASSETS ?>img/about/img_6.jpg" alt="Conveyor">
            <p class="txt_icon">Conveyor</p>
          </figure>
        </div>
        <div class="box2">
          <figure class="img">
            <img src="<?php echo APP_ASSETS ?>img/about/img_7.jpg" alt="Sub contractor" class="pc">
            <img src="<?php echo APP_ASSETS ?>img/about/img_7_sp.jpg" alt="Sub contractor" class="sp">
            <p class="txt_icon">Sub contractor</p>
          </figure>
        </div>
        <div class="box3">
          <p class="img">
            <img src="<?php echo APP_ASSETS ?>img/about/img_8.jpg" alt="">
          </p>
          <div class="txt_box" style="animation-delay: 0.8s;">
            <p class="txt">
              We employ polishing robots to get that perfect <br class="pc">
              surface on stainless steel as well as other metals.<br><br>
              This gives you top quality of metal products.
            </p>
          </div>
        </div>
      </div>
    </section>
  </div> <!-- #wrap -->
  
  <?php include(APP_PATH.'libs/footer.php'); ?>

  <script>
    $(".about_box1 .box1, .about_box1 .box2, .about_box3 .box1, .about_box3 .box2, .about_box4 .box1, .about_box4 .box2, .about_box4 .box3").on('inview', function(event, isInView) {
      if(isInView) {
        $(this).addClass('fadeInUp');
      } else {
        $(this).removeClass('fadeInUp');
      }
    });
  </script>
</body>
</html>