<footer id="footer" class="footer">
  <div class="footer__contact">
    <div class="container">
      <div class="footer__contact__left__text">Let's<br>Talk<br><span>with us...</span></div>
      <div class="footer__contact__right">
        <div class="footer__contact__right__inner">
          <div class="footer__contact__right__block footer__contact__right__phone">
            <div class="inner">
              <div class="footer__contact__boxIcon">
                <div class="footer__contact__icon">
                  <img src="<?php echo APP_ASSETS ?>img/common/ico_phone.svg" alt="">
                </div>
                <div class="footer__contact__text">Phone</div>
              </div>
              <div class="footer__contact__info">
                <p>USA: +1 404 579 0690</p>
                <p>VN: +84 089 814 5650</p>
              </div>
            </div>
          </div>
          <div class="footer__contact__right__block footer__contact__right__email" style="animation-delay: 0.2s;">
            <div class="inner">
              <div class="footer__contact__boxIcon">
                <div class="footer__contact__icon">
                  <img src="<?php echo APP_ASSETS ?>img/common/ico_email.svg" alt="">
                </div>
                <div class="footer__contact__text">Email</div>
              </div>
              <div class="footer__contact__info">
                <p>USA: <br class="sp">greg@smk-resources.com</p>
                <p>VN: <br class="sp">mk@smk-resources.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="footer__contact__right__inner">
          <div class="footer__contact__right__block footer__contact__right__address" style="animation-delay: 0.4s;">
            <div class="inner">
              <div class="footer__contact__boxIcon">
                <div class="footer__contact__icon">
                  <img src="<?php echo APP_ASSETS ?>img/common/ico_address.svg" alt="">
                </div>
                <div class="footer__contact__text">Address</div>
              </div>
              <div class="footer__contact__info">
                <p>USA: <br class="sp">3329 Woodward Down Trail, Buford, GA 30519</p>
                <p>VN: <br class="sp">Land No.67,68,172, Map No.13, Tan Phuoc Khanh 10 Str, Tan Phuoc Khanh Ward, Tan Uyen Town, Binh Duong Province.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__copyright">
    <div class="container">
      <div class="footer__navigator">
        <ul>
          <li><a href="">About us</a></li>
          <li><a href="">Product</a></li>
          <li><a href="">Contact us</a></li>
        </ul>
      </div>
      <div class="copyrightText">© SMK 2019 All Rights Resevered</div>
    </div>
  </div>
</footer>
<a href="" class="goToTop">Go To Top</a>

<script src="<?php echo APP_ASSETS; ?>js/lib/jquery1-12-4.min.js"></script>
<script src="<?php echo APP_ASSETS; ?>js/lib/smoothscroll.min.js"></script>
<script src="<?php echo APP_ASSETS; ?>js/lib/jquery.matchHeight.min.js"></script>
<script src="<?php echo APP_ASSETS; ?>js/lib/jquery.inview.min.js"></script>
<script src="<?php echo APP_ASSETS; ?>js/common.min.js"></script>
<script src="<?php echo APP_ASSETS; ?>js/functions.min.js"></script>

<script>
  $(window).on('scroll', function(event) {
    var sT = $(this).scrollTop();
    var vH = $(this).height();

    if(sT > vH) $(".goToTop").addClass('show');
    else $(".goToTop").removeClass('show');
  });

  $(".goToTop").on('click', function(event) {
    event.preventDefault();
    $("html, body").animate({scrollTop: 0}, 300);
  });

  if($(window).width() > 767) {
    $(".footer__contact__right__block").on('inview', function(event, isInView) {
      if(isInView) {
        $(this).addClass('fadeInUp');
      } else {
        $(this).removeClass('fadeInUp');
      }
    });
  }
</script>