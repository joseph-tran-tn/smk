<?php
$thisPageName = 'catalogue';
include_once('../app_config.php');
include(APP_PATH.'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/jquery.fancybox.min.css">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/catalogue.min.css">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>libs/owlCarousel2/owlCarousel.min.css">
</head>
<body id="catalogue" class='catalogue'>
  <?php include(APP_PATH.'libs/header-other.php'); ?>
  <div class="bread_cumb_box">
    <h1 class="ttl_h1">CATALOGUE</h1>
    <p class="txt_bread">
      <a href="<?php echo APP_URL; ?>">Home</a>
      <span>/ Cataloague</span>
    </p>
  </div>
  <div id="wrap" class="catalogue_wrap">
    <section class="catalogue_box">
      <h2 class="ttl">Please take a look at our catalogue below.</h2>
      <div class="slide_box owl-carousel picture itemGal">
        <div class="item galBox">
          <a class="fancybox" rel="group" href="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-01-01.jpg">
            <img src="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-01-01.jpg">
          </a>
        </div>
        <div class="item galBox">
          <a class="fancybox" rel="group" href="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-01-02.jpg">
            <img src="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-01-02.jpg">
          </a>
        </div>
        <?php
          for( $i = 2; $i < 28; $i++ ){
        ?> 
            <div class="item galBox">
              <a class="fancybox" rel="group" href="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-<?php echo ($i<10) ? '0'.$i : $i; ?>.jpg">
                <img src="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-<?php echo ($i<10) ? '0'.$i : $i; ?>.jpg">
              </a>
            </div> 
        <?php
          }
        ?>
        <div class="item galBox">
          <a class="fancybox" rel="group" href="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-28-01.jpg">
            <img src="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-28-01.jpg">
          </a>
        </div>
         <div class="item galBox">
          <a class="fancybox" rel="group" href="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-28-02.jpg">
            <img src="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-28-02.jpg">
          </a>
        </div>
      </div>
      <div id="counter"></div>
    </section>
  </div> <!-- #wrap -->
  
  <?php include(APP_PATH.'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/jquery.fancybox.min.js"></script>
  <!-- //photoswipe -->
  <script src="<?php echo APP_ASSETS ?>libs/owlCarousel2/owlCarousel.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".slide_box").owlCarousel({
        items: 2,
        startPosition: 0,
        loop: true,
        nav: true,
        dots: false,
        //autoplay: true,
        smartSpeed: 1000,
        slideSpeed: 1000,
        onInitialized  : counter, 
        onTranslated : counter,
        responsive:{
          640:{
            stagePadding: 0,
            loop: true,
            items: 2,
          },
          300:{
            stagePadding: 50,
            loop: false,
            items: 1,
          }
        }
      });

      function counter(event) {
        var element   = event.target;
        var items     = event.item.count;
        var item      = event.item.index + 1;

        if(item > items) {
          item = item - items
        }
        $('#counter').html( item +" / " +items)
      }

      $(".fancybox").fancybox();

    });
  </script>
</body>
</html>