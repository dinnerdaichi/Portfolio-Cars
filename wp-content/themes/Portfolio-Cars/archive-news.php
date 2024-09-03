<?php get_header(); ?>



<main>

  <!-- <section class="p-paint__mv c-section">

    <?php
    //get_template_part('template-parts/section-mv');
    ?>


  </section> -->



  <section class="p-news__content c-section">


    <div class="p-news__head">

      <h3>ニュース一覧</h3>
    </div>


    <?php
    // 現在のページ番号を取得（デフォルトは1）
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(
      'post_type' => 'news',            // カスタム投稿タイプを指定
      'posts_per_page' => 5,            // 1ページに表示する投稿数を5件に設定
      'paged' => $paged                 // 現在のページ番号を設定
    );

    $news_query = new WP_Query($args);

    if ($news_query->have_posts()) :
      while ($news_query->have_posts()) : $news_query->the_post();
    ?>
        <div class="p-news_item">
          <div class="p-news__title">
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="p-news__contents">
            <?php
            $tags = get_the_terms(get_the_ID(), 'news_tag');
            if ($tags) {
              echo '<ul>';
              foreach ($tags as $tag) {
                echo '<li><a href="' . get_term_link($tag->term_id, 'news_tag') . '">' . $tag->name . '</a></li>';
              }
              echo '</ul>';
            }
            ?>
          </div>
          <div><?php the_content(); ?></div>
        </div>


      <?php
      endwhile; ?>
      <div class="p-news__pagenation">
      <?php
      // ページネーションの表示
      $pagination_args = array(
        'total'        => $news_query->max_num_pages, // 全ページ数
        'current'      => $paged,                    // 現在のページ
        'prev_text'    => __('« Previous'),          // 前へボタンのテキスト
        'next_text'    => __('Next »'),              // 次へボタンのテキスト
      );

      echo paginate_links($pagination_args);

    else :
      echo '<p>ニュースが見つかりませんでした。</p>';
    endif;

    wp_reset_postdata();
      ?>

      </div>




  </section>






</main>

<?php get_footer(); ?>