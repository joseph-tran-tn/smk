<?php
$thisPageName = 'catalogue';
include_once('../app_config.php');
include(APP_PATH.'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>js/style.css">

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

    <!-- DIV YOUR WEBSITE --> 
    <div class="flip_box">  

    <!-- BEGIN FLIPBOOK STRUCTURE -->  
      <div id="fb5-ajax" class="inner_box"> 
        <!-- BEGIN HTML BOOK -->      
        <div data-current="book5" class="fb5" id="fb5">  
          <!-- BEGIN CONTAINER BOOK -->
          <div id="fb5-container-book">
              
            <!-- BEGIN ABOUT -->
            <section id="fb5-about">
              <div class="item galBox">
                <img src="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-01.jpg" itemprop="thumbnail">
              </div>
            </section>
            <!-- END ABOUT -->

            <!-- BEGIN BOOK -->
            <div id="fb5-book">

              <!-- BEGIN PAGE 1-->          
              <div data-background-image="" class=""> 
                <div class="fb5-cont-page-book">
                  <div class="item galBox">
                    <img src="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-02.jpg" itemprop="thumbnail">
                  </div>
                </div>                         
              </div>
              <!-- END PAGE 1 -->

              <!-- BEGIN PAGE 2-->           
              <div data-background-image="" class=""> 
                <div class="fb5-cont-page-book">
                  <div class="item galBox">
                    <img src="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-03.jpg" itemprop="thumbnail">
                  </div>
                </div>                         
              </div>
              <!-- END PAGE 2 -->

              <!-- BEGIN PAGE 3 --> 
              <div data-background-image="" class=""> 
                <div class="fb5-cont-page-book">
                  <div class="item galBox">
                    <img src="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-04.jpg" itemprop="thumbnail">
                  </div>
                </div>                         
              </div>
              <!-- END PAGE 3 -->

              <!-- BEGIN PAGE 4 --> 
              <div data-background-image="" class=""> 
                <div class="fb5-cont-page-book">
                  <div class="item galBox">
                    <img src="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-05.jpg" itemprop="thumbnail">
                  </div>
                </div>                         
              </div>
              <!-- END PAGE 4 -->

              <!-- BEGIN PAGE 5 --> 
              <div data-background-image="" class=""> 
                <div class="fb5-cont-page-book">
                  <div class="item galBox">
                    <img src="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-06.jpg" itemprop="thumbnail">
                  </div>
                </div>                         
              </div>
              <!-- END PAGE 5 -->

              <!-- BEGIN PAGE 6 --> 
              <div data-background-image="" class=""> 
                <div class="fb5-cont-page-book">
                  <div class="item galBox">
                    <img src="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-07.jpg" itemprop="thumbnail">
                  </div>
                </div>                         
              </div>
              <!-- END PAGE 6 -->

              <!-- BEGIN PAGE 7 --> 
              <div data-background-image="" class=""> 
                <div class="fb5-cont-page-book">
                  <div class="item galBox">
                    <img src="<?php echo APP_ASSETS; ?>img/catalogue/catalogue-08.jpg" itemprop="thumbnail">
                  </div>
                </div>                         
              </div>
              <!-- END PAGE 7 -->

            </div>
            <!-- END BOOK -->

            <!-- arrows -->
            <a class="fb5-nav-arrow prev"></a>
            <a class="fb5-nav-arrow next"></a>
          </div>
          <!-- END CONTAINER BOOK -->
        </div>
        <!-- END HTML BOOK -->
      </div>
      <!-- END FLIPBOOK STRUCTURE --> 
    </div> 
    <!-- END DIV YOUR WEBSITE -->     
  </div> <!-- #wrap -->

  

  <?php include(APP_PATH.'libs/footer.php'); ?>


  <script src="<?php echo APP_ASSETS ?>js/turn.js"></script>
  <script src="<?php echo APP_ASSETS ?>js/jquery.address-1.6.min.js"></script>
  <script src="<?php echo APP_ASSETS ?>js/wait.js"></script>
  <script src="<?php echo APP_ASSETS ?>js/onload.js"></script>

  <script>
    $(".hamberger").on("click", function(e){
      $(".gnavi").slideToggle(500);
      $("body").toggleClass("isFixed")
    })
    $(document).ready(function() {
      
    });
  </script>
  <script>    
    jQuery('#fb5').data('config',
    {
    "page_width":"550",
    "page_height":"715",
    "zoom_double_click":"1",
    "zoom_step":"0.06",
    "double_click_enabled":"true",
    "tooltip_visible":"true",
    "toolbar_visible":"true",
    "deeplinking_enabled":"true",
    "rtl":"false",
    'full_area':'false',
  'lazy_loading_thumbs':'false',
  'lazy_loading_pages':'false'
    })
    </script>
</body>
</html>