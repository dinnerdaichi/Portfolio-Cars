<?php get_header(); ?>



<main class="p-mentenance">

  <section class="p-mentenance__mv c-section">
    <?php get_template_part('template-parts/section-mv'); ?>



  </section>


  <section class="p-mentenance__point">
    <div class="inner">
      <!-- ポイント読み込み -->
      <?php echo get_template_part('template-parts/component/point'); ?>

    </div>

  </section>


  <section class="p-mentenance__price c-section pc">
    <div class="inner">

      <h3>車検料金</h3>

      <div class="p-mentenance__table pc">
        <table border="1" cellpadding="10">

          <tr>
            <th>車輪重量</th>
            <th>軽自動車<br>例：N-BOX</th>
            <th>小型乗用車<br>～1t<br>例：ヤリス</th>
            <th>中型乗用車<br>～1.5t<br>例：プリウス</th>
            <th>大型乗用車<br>～2t<br>例：ステップワゴン</th>
            <th>大型乗用車<br>～2.5t<br>例：アルファード</th>
          </tr>
          <tr>
            <td>重量税</td>
            <td>¥6,600</td>
            <td>¥16,400</td>
            <td>¥24,600</td>
            <td>¥32,800</td>
            <td>¥41,000</td>
          </tr>
          <tr>
            <td>自賠責</td>
            <td>¥17,540</td>
            <td>¥17,650</td>
            <td>¥17,650</td>
            <td>¥17,650</td>
            <td>¥17,650</td>
          </tr>
          <tr>
            <td>印紙・用紙代</td>
            <td>¥1,800</td>
            <td>¥1,800</td>
            <td>¥1,800</td>
            <td>¥1,800</td>
            <td>¥1,800</td>
          </tr>
          <tr>
            <td>代行料、<br>申請手数料・検査代</td>
            <td>¥15,300</td>
            <td>¥15,300</td>
            <td>¥15,300</td>
            <td>¥15,300</td>
            <td>¥15,300</td>
          </tr>
          <tr>
            <td>車検整備代</td>
            <td>¥15,950</td>
            <td>¥15,950</td>
            <td>¥15,950</td>
            <td>¥19,250</td>
            <td>¥19,250</td>
          </tr>
          <tr>
            <td>検査機器使用料他</td>
            <td>¥7,425</td>
            <td>¥7,425</td>
            <td>¥7,425</td>
            <td>¥7,425</td>
            <td>¥7,425</td>
          </tr>
          <tr>
            <td>諸経費・整備費合計</td>
            <td>¥63,615</td>
            <td>¥73,525</td>
            <td>¥81,725</td>
            <td>¥93,225</td>
            <td>¥101,425</td>
          </tr>
        </table>

      </div>

    </div>

    <div class="p-mentenence__benefit">
      <div class="p-mentenence__benefit-wrap">
        <div class="p-mentenence__benefit-title">
          <p>早期ご予約特典</p>
        </div>

        <div class="p-mentenence__benefit-content">
          <div class="p-mentenence__benefit-list">

            <ul>

              <li class="p-mentenence__benefit-item">
                <div class="p-mentenence__benefit-item_title">6ヶ月前</div>
                <div class="p-mentenence__benefit-item_text">
                  <p><span>3000円</span><br>OFF！！</p>
                  <p>ボックスティッシュ<br>プレゼント！</p>
                </div>
              </li>

              <li class="p-mentenence__benefit-item">
                <div class="p-mentenence__benefit-item_title">6ヶ月前</div>
                <div class="p-mentenence__benefit-item_text">
                  <p><span>3000円</span><br>OFF！！</p>
                  <p>ボックスティッシュ<br>プレゼント！</p>
                </div>
              </li>

              <li class="p-mentenence__benefit-item">
                <div class="p-mentenence__benefit-item_title">6ヶ月前</div>
                <div class="p-mentenence__benefit-item_text">
                  <p><span>3000円</span><br>OFF！！</p>
                  <p>ボックスティッシュ<br>プレゼント！</p>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>


    </div>
  </section>


  <section class="p-check">
    <div class="c-section__mv">
      <div class="c-section__title-wrap">
        <div class="c-section__title-line"></div>
        <div class="c-section__title">
          <h2>定期点検</h2>
          <span>Inspection</span>
        </div>
        <div class="c-section__title-line"></div>
      </div>
      <div class="c-section__mv-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maintenance02.jpg" alt="">
        <p class="c-section__sub-title">年間車検数 1800台超! <br>カトウ自動車の安心車検。</p>
      </div>
    </div>

  </section>

  <section class="p-check__point">

    <div class="inner">

      <?php echo get_template_part('template-parts/component/point'); ?>
    </div>
  </section>


  <section class="p-check__reason">
    <div class="inner">


      <h3>定期点検をおすすめする理由</h3>

      <div class="p-check__reason-list">
        <ul>
          <li class="p-check__reason-item fadeInUp wow animated" data-wow-delay='0.4s'>
            <p class="p-check__reason-num">reason<span>01</span></p>
            <p class="p-check__reason-title">愛車の寿命が<br>伸びる！</p>
          </li>
          <li class="p-check__reason-item fadeInUp wow animated" data-wow-delay='0.6s'>
            <p class="p-check__reason-num">reason<span>01</span></p>
            <p class="p-check__reason-title">愛車の寿命が<br>伸びる！</p>
          </li>
          <li class="p-check__reason-item fadeInUp wow animated" data-wow-delay='0.8s'>
            <p class="p-check__reason-num">reason<span>01</span></p>
            <p class="p-check__reason-title">愛車の寿命が<br>伸びる！</p>
          </li>
          <li class="p-check__reason-item fadeInUp wow animated" data-wow-delay='1s'>
            <p class="p-check__reason-num">reason<span>01</span></p>
            <p class="p-check__reason-title">愛車の寿命が<br>伸びる！</p>
          </li>
          <li class="p-check__reason-item fadeInUp wow animated" data-wow-delay='1.2s'>
            <p class="p-check__reason-num">reason<span>01</span></p>
            <p class="p-check__reason-title">愛車の寿命が<br>伸びる！</p>
          </li>
        </ul>
      </div>
    </div>

  </section>



  <section class="p-check__price">
    <div class="inner">

      <div class="p-check__price-flex">
        <h3>法定12ヶ月点検</h3>
        <p>任意保険特約加入時にご提供できるレンタ カーも自社で保有。 特約がないお客様はご入 庫いただきます</p>
      </div>


      <div class="p-check__price-table">
        <table border="1" cellpadding="10">

          <tr>
            <th></th>
            <th>軽自動車</th>
            <th>国産小型乗用車</th>
            <th>国産中型乗用車</th>
          </tr>
          <tr>
            <td>点検料</td>
            <td>¥7,700</td>
            <td>¥8,800</td>
            <td>¥9,900</td>
          </tr>
          <tr>
            <td>検査機器使用料</td>
            <td>¥5,500</td>
            <td>¥5,500</td>
            <td>¥5,500</td>
          </tr>
          <tr>
            <td>合計</td>
            <td>¥13,200</td>
            <td>¥14,300</td>
            <td>¥15,400</td>
          </tr>
        </table>
      </div>

      <div class="p-check__price-flex">
        <h3>6ヶ月12ヶ月18ヶ月点検</h3>
        <p>任意保険特約加入時にご提供できるレンタ カーも自社で保有。 特約がないお客様はご入 庫いただきます</p>
      </div>

  </section>


  <section class="p-general">
    <div class="c-section__mv">
      <div class="c-section__title-wrap">
        <div class="c-section__title-line"></div>
        <div class="c-section__title">
          <h2>一般整備</h2>
          <span>General</span>
        </div>
        <div class="c-section__title-line"></div>
      </div>
      <div class="c-section__mv-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maintenance03.jpg" alt="">
        <p class="c-section__sub-title">年間車検数 1800台超! <br>カトウ自動車の安心車検。</p>
      </div>
    </div>

  </section>

  <section class="p-general__point">
    <div class="inner">

      <?php echo get_template_part('template-parts/component/point'); ?>
    </div>

  </section>

  <section class="p-general__example c-section">
    <div class="inner">

      <div class="p-general__example-head">
        <div class="p-general__example-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maintenance04.jpg" alt="">
        </div>
        <div class="p-general__example-title_wrap">
          <h3 class="p-general__example-title">お車の違和感に気づいたらすぐにご連絡を！</h3>
          <p class="p-general__example-text">国産車から外車など、 どんな車両の鈑金塗装修理も三重県鈴 鹿市のカトウ自動車にお任せください。 お客様のご要望・ご予 算に合わせて対応いたします。 </p>
          <p class="p-general__example-text">カトウ自動車は年間1000台の鈑金塗装修理の実績がありま す。 精度の高いフレーム修正機や塗装ブースを完備し、 最高の 仕上がりを実現します。 アップグレードしてさらに多くの機能を獲得</p>
          <!-- <p class="p-general__example-info">カトウ自動車は高い志と技術・設備をもつ自動車 修理のプロショップだけが加盟する全国ネット ワーク BS サミットの会員です。 アップグレードしてさらに多くの機能を獲得
            </p> -->


        </div>
      </div>
    </div>
  </section>



</main>

<?php get_footer(); ?>