<?php get_header(); ?>



<main>

  <!-- <section class="p-paint__mv c-section">

    <?php
    // get_template_part('template-parts/section-mv');
    ?>


  </section> -->



  <section class="p-news__content c-section">

    <div class="p-news_item">
      <?php
      $thumbnail_id = get_post_thumbnail_id();
      $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full');
      if ($thumbnail_url) {
        echo '<img src="' . $thumbnail_url[0] . '" alt="">';
      } else {
        echo '<img src="' . get_template_directory_uri() . '/assets/img/default-image.jpg" alt="">';
      }
      ?>
      <h2><?php the_title(); ?></h2>
      <div><?php the_content(); ?></div>
    </div>

    <div class="p-news__archive">
      <a href="<?php echo home_url('news'); ?>">ニュース一覧へ</a>
    </div>

  </section>



  <?php
  if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
  }
  ?>


</main>

<?php get_footer(); ?>