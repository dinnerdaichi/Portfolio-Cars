<h3 class="c-point__title">カトウ自動車の<?php the_title(); ?>3つのポイント</h3>


<div class="c-point__item">
  <ul>
    <?php
    for ($i = 1; $i <= 3; $i++) {
      // 現在の投稿オブジェクトを取得
      global $post;
      $slug = $post->post_name;  // 現在の固定ページのスラッグを取得

      // 取得したスラッグに基づいて固定ページオブジェクトを取得
      $slug_page = get_page_by_path($slug);

      // フィールド名を動的に設定
      $point_title_field = 'point' . sprintf('%02d', $i);
      $point_text_field = $point_title_field . '_text';
      $point_img_field = $point_title_field . '_img';

      // リストアイテムの出力
    ?>
      <li class="c-point__item_list">
        <div class="c-point__item_flex">
          <div class="c-point__item-num">
            <p>POINT<span><?php echo sprintf('%02d', $i); ?></span></p>
          </div>
          <?php
          if ($slug_page) {
            $slug_page_id = $slug_page->ID;
          ?>
            <h4 class="c-point__item_title"><?php the_field($point_title_field, $slug_page_id); ?></h4>
          <?php
          } else {
            echo '<h4 class="c-point__item_title">ページが見つかりません</h4>';
          }
          ?>
        </div>
        <?php
        if ($slug_page) {
          $slug_page_id = $slug_page->ID;
          if (is_page('rental')) {
        ?>
            <img src="<?php the_field($point_img_field, $slug_page_id); ?>" alt="">
          <?php
          } else {
          ?>
            <p class="c-point__item_text"><?php the_field($point_text_field, $slug_page_id); ?></p>
        <?php
          }
        } else {
          echo '<p class="c-point__item_text">ページが見つかりません</p>';
        }
        ?>
      </li>
    <?php
    }
    ?>
  </ul>

</div>