<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" />
  <?php wp_head(); ?>
</head>

<body>
  <div class="popup-bg-cover"></div>
  <header class="header">

    <?php if (!is_user_logged_in()) : ?>
      <style type="text/css">
        .header {
          margin-top: -32px;
        }
      </style>
    <?php endif; ?>

    <div class="header__logo">
      <a href="<?php echo home_url(); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""></a>
    </div>
    <div class="openbtn1"><span></span><span></span><span></span></div>

    <div class="sp_header">
      <div class="sp_menu">
        <ul class="nav_items">

          <li class="nav_item"><a href="<?php echo home_url('/'); ?>" class="links">TOP</a></li>
          <li class="nav_item"><a href="<?php echo home_url('/news'); ?>" class="links">News<span>最新ニュース</span></a></li>
          <li class="nav_item"><a href="<?php echo home_url('/paint'); ?>" class="links">Paint<span>塗装</span></a></li>
          <li class="nav_item"><a href="<?php echo home_url('/maintenance'); ?>" class="links">Maintenance<span>車検</span></a></li>
          <li class="nav_item"><a href="<?php echo home_url('/rental'); ?>" class="links">Rental<span>レンタカー</span></a></li>
          <!-- <li class="nav_item"><a href="<?php echo home_url('/sale'); ?>" class="links">Sale<span>車両販売</span></a></li> -->
          <li class="nav_item"><a href="<?php echo home_url('/insurance'); ?>" class="links">Insurance<span>保険</span></a></li>
          <li class="nav_item"><a href="<?php echo home_url('/contact'); ?>" class="links">Contact<span>問い合わせ</span></a></li>
          <li class="hide_btn">→</li>
        </ul>
      </div>
    </div>


  </header>