  <footer>
    <div class="l-footer__wrapper">
      <div class="l-footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo2.png" alt=""></div>
      <!-- <div class="l-footer__info">大阪府大阪市浪速区恵美須西</div> -->
    </div>
    <!-- <copy>sdfsdfsdfsdf</copy> -->
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const swiper2 = new Swiper('#swiper2', {
      // Optional parameters
      loop: true,
      spaceBetween: 0,
      speed: 10000,
      autoplay: { // 自動再生
        delay: 0, // 1秒後に次のスライド（初期値：3000）
        // disableOnInteraction: false, // 矢印をクリックしても自動再生を止めない
      },
      slidesPerView: 1,
      //見せる枚数
      centeredSlides: true,

      breakpoints: {
        // スライドの表示枚数：500px以上の場合
        768: {
          slidesPerView: 3.5,
          spaceBetween: 20,


        }
      }
      //真ん中寄せ
      // initialSlide: 1,

      // // If we need pagination
      // pagination: {
      //   el: '.swiper-pagination',
      // },

      // // Navigation arrows
      // navigation: {
      //   nextEl: '.swiper-button-next',
      //   prevEl: '.swiper-button-prev',
      // },

      // // And if we need scrollbar
      // scrollbar: {
      //   el: '.swiper-scrollbar',
      // },
    });
  </script>
  <script>
    const swiperMv = new Swiper('#swiper-mv', {
      // Optional parameters
      loop: true,
      effect: "fade",
      speed: 3000,
      autoplay: { // 自動再生
        delay: 3000, // 1秒後に次のスライド（初期値：3000）
        // disableOnInteraction: false, // 矢印をクリックしても自動再生を止めない
      },
      slidesPerView: 1, //見せる枚数
      // centeredSlides: true,//真ん中寄せ
      // initialSlide: 1,

    });
  </script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

  <script>
    new WOW().init();
  </script>
  <?php wp_footer(); ?>
  </body>

  </html>