<?php
global $post;
$slug = $post->post_name;

$white = 'white';
?>
<div class="c-section__mv">
  <div class="c-section__title-wrap">
    <div class="c-section__title-line"></div>
    <div class="c-section__title <?php if (is_page('rental')) echo 'white'; ?>">
      <h2><?php echo ucfirst($slug); ?></h2>
      <span><?php the_title(); ?></span>
    </div>
    <div class="c-section__title-line"></div>
  </div>
  <div class="c-section__mv-img">

    <?php if (!(is_page('archive-news') || is_single('single-news'))) : ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $slug; ?>01.jpg" alt="">
      <div class="mv-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mv_logo.png" alt="">
      </div>
    <?php endif; ?>

    <?php remove_filter('the_content', 'wpautop'); ?>
    <p class="c-section__sub-title"><?php the_content(); ?></p>
  </div>
</div>