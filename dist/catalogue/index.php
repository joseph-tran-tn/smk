<?php
$thisPageName = 'catalogue';
include_once('../app_config.php');
include(APP_PATH.'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>photoswipe/photoswipe.css">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>photoswipe/default-skin/default-skin.css">

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
          <a href="<?php echo APP_ASSETS; ?>img/catalogue/img1.jpg" itemprop="contentUrl" data-size="720x405">
            <img src="<?php echo APP_ASSETS; ?>img/catalogue/img1.jpg" itemprop="thumbnail">
          </a>
        </div>
        <div class="item galBox">
          <a href="<?php echo APP_ASSETS; ?>img/catalogue/img1.jpg" itemprop="contentUrl" data-size="720x405">
            <img src="<?php echo APP_ASSETS; ?>img/catalogue/img1.jpg" itemprop="thumbnail">
          </a>
        </div>
        <div class="item galBox">
          <a href="<?php echo APP_ASSETS; ?>img/catalogue/img1.jpg" itemprop="contentUrl" data-size="720x405">
            <img src="<?php echo APP_ASSETS; ?>img/catalogue/img1.jpg" itemprop="thumbnail">
          </a>
        </div>      
      </div>  
      <div id="counter"></div>   
    </section>
  </div> <!-- #wrap -->

  <!-- Root element of PhotoSwipe. Must have class pswp. -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>
      <div class="pswp__ui pswp__ui--hidden">
        <div class="pswp__top-bar">
          <div class="pswp__counter"></div>
          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
          <button class="pswp__button pswp__button--share" title="Share"></button>
          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div> 
        </div>
        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
        <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
        </div>
      </div>
    </div>
  </div>  

  <?php include(APP_PATH.'libs/footer.php'); ?>

  <!-- photoswipe -->
  <script src="<?php echo APP_ASSETS ?>photoswipe/photoswipe.min.js"></script>
  <script src="<?php echo APP_ASSETS ?>photoswipe/photoswipe-ui-default.min.js"></script>
  <script src="<?php echo APP_ASSETS ?>photoswipe/script-min.js"></script>
  <!-- //photoswipe -->

  <script src="<?php echo APP_ASSETS ?>libs/owlCarousel2/owlCarousel.min.js"></script>
  <script>
    $(".hamberger").on("click", function(e){
      $(".gnavi").slideToggle(500);
      $("body").toggleClass("isFixed")
    })
    $(document).ready(function() {
      $(".slide_box").owlCarousel({
        items: 1,
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
          },
          300:{
            stagePadding: 50,
            loop: false,
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

    });
  </script>
</body>
</html>