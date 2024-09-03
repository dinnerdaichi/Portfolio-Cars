<?php get_header(); ?>



<main>

  <section class="p-insurance c-section">
    <?php get_template_part('template-parts/section-mv'); ?>

    <div class="p-insurance__mv-wrap inner">

      <div class="p-insurance__content">
        <p class="p-insurance__text">私たちが売っているのは、安心と安全です。 </p>
        <p class="p-insurance__text">自動車保険もカトウ自動車にお任せください!</p>
        <p class="p-insurance__sub-text">「大丈夫」 と思っていても、 意外と勘違いが多いのが自動車保険。 カトウ自動車では、お客様の安心・安全なカーライフのため、 自動車保 険についてもお話させていただくことも使命であると考えています。 「現在の保険の内容で問題ないか?」 「もしかして払い過ぎていない か?」 など、自動車保険についてご心配やご不明点があれば、ぜひお気軽にご相談ください。 自動車のプロとして私たちが安心・安全な 自動車保険をご案内します。</p>
      </div>
    </div>

  </section>

  <section class="p-insurance__point">
    <div class="inner">

      <?php echo get_template_part('template-parts/component/point'); ?>
    </div>

  </section>


  <section class="p-insurance__patner c-section">
    <div class="inner">

      <div class="p-insurance__patner-content">

        <h3>損害保険代理店</h3>
        <p class="p-insurance__patner-logo">
          <img class="p-insurance__patner-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/patner_logo1.webp" alt="">
          <img class="p-insurance__patner-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/patner_logo1.webp" alt="">
          <img class="p-insurance__patner-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/patner_logo1.webp" alt="">
        </p>
      </div>

      <div class="p-insurance__policy">

        <h3>損害保険代理店ポリシー</h3>
        <p class="p-insurance__policy-text">不十分不適切な自動車保険契約は意外に多く、<br>それらはすべて契約者であるお客様の不利益となります。</p>
        <p class="p-insurance__policy-text">私どもは、損害保険代理店として、お客様の安全で安心できるカーライフのために<br>自動車保険の証券内容の確認とアドバイスを行っています。</p>
        <p class="p-insurance__policy-text">これは自動車保険の契約をお願いするものではありません。</p>
        <p class="p-insurance__policy-text">弊社が指摘させて頂きました内容につきましては、<br>お取引のある損害保険代理店にご相談頂ければそれで結構です。</p>
        <p class="p-insurance__policy-text">私たちは、お客様がより良い自動車保険に加入されますことを願っています。</p>
      </div>

    </div>
  </section>

  <section class="c-tel">
    <div class="c-tel__content">
      <h3>お気軽にお問い合わせください</h3>
      <p class="c-tel__text">無料保険診断</p>
      <p class="c-tel__number">TEL <span>080-4398-9999</span></p>
    </div>
  </section>


</main>

<?php get_footer(); ?>