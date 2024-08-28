<footer>
  <div class="l-footer__wrapper">
    <div class="l-footer__logo">daichi cars SERVICE</div>
    <div class="l-footer__info">大阪府大阪市浪速区恵美須西</div>
  </div>
  <copy>sdfsdfsdfsdf</copy>
</footer>



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    spaceBetween: 20,
    speed: 10000,
    autoplay: { // 自動再生
      delay: 0, // 1秒後に次のスライド（初期値：3000）
      // disableOnInteraction: false, // 矢印をクリックしても自動再生を止めない
    },
    slidesPerView: 3.5, //見せる枚数
    centeredSlides: true, //真ん中寄せ
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

<?php wp_footer() ;?>
</body>

</html>