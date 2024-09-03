<?php get_header(); ?>



<main>

  <!-- <section class="p-paint__mv c-section">

    <?php
    //get_template_part('template-parts/section-mv');
    ?>


  </section> -->



  <section class="p-news__content c-section">


    <div class="p-news__head">

      <h3>問い合わせ</h3>
    </div>


    <div class="inner">
      <div class="p-contact__table">
        <table>
          <tr>
            <th class="required">お問い合わせ種別：</th>
            <td>
              <select>
                <option value="">選択してください</option>
                <option value="">選択してください</option>
                <option value="">選択してください</option>
                <option value="">選択してください</option>
                <!-- 他の選択肢を追加 -->
              </select>
            </td>
          </tr>
          <tr>
            <th class="required">お名前：</th>
            <td>
              <input type="text" placeholder="加藤 太郎">
            </td>
          </tr>
          <tr>
            <th class="required">ふりがな：</th>
            <td>
              <input type="text" placeholder="かとう　たろう">
            </td>
          </tr>
          <tr>
            <th class="required">電話番号：</th>
            <td>
              <input type="tel" placeholder="000-0000-0000">
            </td>
          </tr>
          <tr>
            <th class="required">E-mail：</th>
            <td>
              <input type="email" placeholder="sample@mail.com">
            </td>
          </tr>
          <tr>
            <th class="required">お問い合わせ内容：</th>
            <td>
              <textarea placeholder="お問い合わせ内容をご記入ください。"></textarea>
            </td>
          </tr>
        </table>
        <button>確認画面へ</button>
      </div>
    </div>


  </section>






</main>

<?php get_footer(); ?>