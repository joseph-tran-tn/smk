<?php
$thisPageName = 'contact';
include_once('../app_config.php');
include(APP_PATH.'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/contact.min.css">
</head>
<body id="contact" class='contact'>
  <?php include(APP_PATH.'libs/header-other.php'); ?>
  <div class="bread_cumb_box">
    <h1 class="ttl_h1">About <span style="color: #fff;">us</span></h1>
    <p class="txt_bread">
      <a href="<?php echo APP_URL; ?>">Home</a>
      <span>/ About</span>
    </p>
  </div>
  <div id="wrap" class="contact_wrap">
    <div class="contact_box1">
      <div class="tab_box">
        <a href="javascript:void(0)" data-id="tab2">
          <span>USA</span>
        </a>
        <a href="javascript:void(0)" class="active" data-id="tab1">
          <span>VIETNAM</span>
        </a>
      </div>
      <div class="content_box clearfix active" id="tab1">
        <div class="box1">
          <div class="map_box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.5129541804504!2d106.71144881584092!3d10.924571192221078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d76f41d6df9f%3A0xd7395100398c7e22!2sIndustrial+Park+Vietnam+-+Singapore!5e0!3m2!1sen!2snl!4v1563326966649!5m2!1sen!2snl" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="box2">
          <ul class="inner_box">
            <li>
              <div class="box icon1">
                <h3 class="ttl">SMK FURNITURE FACTORY</h3>
                <p class="txt">
                  VN: Land No.67,68,172, Map No.13, Tan Phuoc Khanh 10<br>
                  Str, Tan Phuoc Khanh Ward, Tan Uyen Town, Binh Duong Province.
                </p>
              </div>
            </li>
            <li>
              <div class="box icon2">
                <h3 class="ttl">Phone</h3>
                <p class="txt">+84 089 814 5650</p>
              </div>
            </li>
            <li>
              <div class="box icon3">
                <h3 class="ttl">Email</h3>
                <p class="txt">mk@smk-resources.com</p>
              </div>
            </li>
            <li>
              <div class="box icon4">
                <h3 class="ttl">Website</h3>
                <p class="txt">www.smk-furniture.com</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="content_box clearfix" id="tab2">
        <div class="box1">
          <div class="map_box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.759997554834!2d-74.00066328379236!3d40.745306279328375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259ba50d97867%3A0x932c8beac8cf50d!2sW+23rd+St%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2snl!4v1563335328244!5m2!1sen!2snl" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="box2">
          <ul class="inner_box">
            <li>
              <div class="box icon1">
                <h3 class="ttl">SMK FURNITURE FACTORY</h3>
                <p class="txt">
                  VN: Land No.67,68,172, Map No.13, Tan Phuoc Khanh 10<br>
                  Str, Tan Phuoc Khanh Ward, Tan Uyen Town, Binh Duong Province.
                </p>
              </div>
            </li>
            <li>
              <div class="box icon2">
                <h3 class="ttl">Phone</h3>
                <p class="txt">+84 089 814 5650</p>
              </div>
            </li>
            <li>
              <div class="box icon3">
                <h3 class="ttl">Email</h3>
                <p class="txt">mk@smk-resources.com</p>
              </div>
            </li>
            <li>
              <div class="box icon4">
                <h3 class="ttl">Website</h3>
                <p class="txt">www.smk-furniture.com</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="contact_box2">
      <div class="inner_box">
        <h2 class="ttl">SEND US <span>MESSAGE</span></h2>
        <form action="#" method="post" class="frm">
          <div class="form_box">
            <div class="box">
              <p class="input">
                <input type="text" name="username" value="" placeholder="Your name" />
              </p>
              <p class="input">
                <input type="email" name="email" value="" placeholder="Your email" />
              </p>
              <p class="input">
                <input type="tel" name="tel" value="" placeholder="Your phone" />
              </p>
            </div>
            <div class="box">
              <textarea name="txtcomment" id="txtcomment" cols="30" rows="10" placeholder="Your message"></textarea>
            </div>
          </div>
          <div class="btn_box">
            <button class="btn" type="submit" value="send">SEND</button>
          </div>
        </form>
      </div>
    </div>
  </div> <!-- #wrap -->
  
  <?php include(APP_PATH.'libs/footer.php'); ?>

  <script>
    $(window).on("load", function() {
      $(".tab_box a").on("click", function() {
        $(".tab_box a").removeClass('active');
        $(this).addClass('active')

        var id = $(this).attr("data-id");
        console.log(id)
        if( id == "tab1"){
          $("#tab1").addClass('active')
          $("#tab2").removeClass('active')
        }
        if( id == "tab2"){
          $("#tab1").removeClass('active')
          $("#tab2").addClass('active')
        }
      })
    })
  </script>
</body>
</html>