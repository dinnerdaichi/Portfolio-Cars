<?php get_header(); ?>

<main class="l-main">

  <div class="l-main__mv">
    <!-- MVスライド読み込み -->
    <?php get_template_part('template-parts/component/swiper-mv'); ?>
    <div class="mv-logo wow animated wobble slower" data-wow-iteration="2" data-wow-duration="5s">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mv_logo.png" alt="">
    </div>
  </div>

  <section class="p-top-concept c-section wow animated slideInLeft">
    <div class="inner">

      <div class="p-top-concept">
        <h2>株式会社daici 経営理念</h2>

        <div class="p-top-concept__wrapper">
          <div class="p-top-concept__left">
            <p class="p-top-concept__text">お客様第一に徹し<br>確かな技術と<br>高品質なサービスを<br>提供します </p>
            <ul>
              <li>Lorem ipsum dolor sit amet adipisicing elit.</li>
              <li>Lorem ipsum dolor sit amet adipisicing elit.</li>
              <li>Lorem ipsum dolor sit amet adipisicing elit.</li>
              <li>Lorem ipsum dolor sit amet adipisicing elit.</li>
              <li>Lorem ipsum dolor sit amet adipisicing elit.</li>
            </ul>
          </div>
          <div class="p-top-concept__right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maintenance01.jpg" alt="">
            <div class="p-top-concept__flex">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maintenance02.jpg" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maintenance03.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

    </div>


  </section>


  <section class="p-top-service c-section">
    <div class="inner">

      <div class="p-top-service__titleWrapper">
        <div class="p-top-service__title line"></div>
        <div class="p-top-service__title">SERVICE<span>サービス紹介</span></div>
        <div class="p-top-service__title line"></div>
      </div>

      <div class="p-top-service__wrapper">
        <ul class="p-top-service__grid">

          <li class="p-top-service__item wow animated slideInLeft">
            <a href="">
              <div class="p-top-service__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maintenance01.jpg" alt="">
              </div>
              <h3>車検</h3>
              <p>Lorem, ipsum dolor sit amet </p>
            </a>
          </li>

          <li class="p-top-service__item wow animated slideInLeft">
            <a href="">
              <div class="p-top-service__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paint01.jpg" alt="">
              </div>
              <h3>板金・塗装</h3>
              <p>Lorem, ipsum dolor sit amet </p>
            </a>
          </li>

          <li class="p-top-service__item wow animated slideInLeft">
            <a href="<?php echo home_url('/sale') ?>">
              <div class="p-top-service__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/carsale01.jpg" alt="">
              </div>
              <h3>車両販売</h3>
              <p>Lorem, ipsum dolor sit amet </p>
            </a>
          </li>

          <li class="p-top-service__item wow animated slideInLeft"> <a href="<?php echo home_url('/insurance') ?>">
              <div class="p-top-service__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/insurance01.jpg" alt="">
              </div>
              <h3>保険</h3>
              <p>Lorem, ipsum dolor sit amet </p>
            </a>
          </li>

          <li class="p-top-service__item wow animated slideInLeft">
            <a href="<?php echo home_url('/roadservice') ?>">
              <div class="p-top-service__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/roadservice01.jpg" alt="">
              </div>
              <h3>ロードサービス</h3>
              <p>Lorem, ipsum dolor sit amet </p>
            </a>
          </li>

          <li class="p-top-service__item wow animated slideInLeft">
            <a href="<?php echo home_url('/wagashi') ?>">
              <div class="p-top-service__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wagashi01.jpg" alt="">
              </div>
              <h3>和菓子</h3>
              <p>Lorem, ipsum dolor sit amet </p>
            </a>
          </li>

        </ul>
      </div>
    </div>

  </section>



  <section class="p-top-pickup c-section">
    <div class="inner">
      <div class="p-top-pickup__wrapper">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum facilis at </p>
        <a href="page-rental.html">キャンピングカーレンタル</a>

      </div>

  </section>

  <!-- スライド読み込み -->
  <?php echo get_template_part('template-parts/component/swiper2'); ?>


  <section class="p-top-news c-section wow animated slideInLeft">
    <div class="inner">

      <h3>NEWS</h3>

      <div class="p-top-news__wrapper">
        <div class="p-top-news__left">
          <ul>
            <?php
            $args = array(
              'post_type' => 'news',
              'posts_per_page' => 6,
              'orderby' => 'date',
              'order' => 'DESC'
            );
            $news_query = new WP_Query($args);
            if ($news_query->have_posts()) :
              while ($news_query->have_posts()) : $news_query->the_post();
            ?>
                <li class="p-top-news__item">
                  <a href="<?php the_permalink(); ?>">
                    <p class="date"><?php the_time('Y/m/d'); ?></p>
                    <p class="text"><?php the_title(); ?></p>
                    <p>→</p>
                  </a>
                </li>
            <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>
          </ul>
        </div>
        <div class="p-top-news__right">
          <div class="p-top-news__youtube">
            <iframe width="" height="400" src="https://www.youtube.com/embed/mKci2gErqJo?si=rzDZewuibu0z6qkx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>

      </div>

    </div>
  </section>




  <div class="bg-fixed mt-100"></div>
  <section class="p-top-map c-section">

    <div class="inner">
      <div class="p-top-map__wrapper">
        <div class="p-top-map__info">
          <h3>daichi cars SERVICE</h3>
          <p class="p-top-map__detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque necessitatibus beatae quidem in, dolores quia eaque</p>
          <p class="p-top-map__address">大阪府大阪市浪速区</p>
          <p class="p-top-map__tel">080-4398-4398</p>
          <p class="p-top-map__time">日曜・祝日も営業 / 営業時間 9:00~18:30</p>
        </div>
        <div class="p-top-map__google-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1641.0916272866448!2d135.50032043875436!3d34.65007464323443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1724520390948!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>

  </section>
  <div class="bg-fixed"></div>

  <section class="p-top-partnership c-section wow animated fadeInUp">
    <div class="inner">
      <div class="p-top-partnership__wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car-logo.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car-logo02.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo03.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car-logo04.jpg" alt="">
      </div>
    </div>
  </section>

</main>



<?php get_footer(); ?>