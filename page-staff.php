<?php get_header(); ?>

    <section class="section greeting wow fadeInUp" id="greeting">
      <div class="section__inner">
        <h2 class="section__title">院長のあいさつ</h2>
        <div class="greeting__container">
          <!-- メッセージ -->
          <div class="greeting__message">
            <div class="greeting__message--main">
              気軽に相談できる<br />
              街の歯医者さんでありたい。
            </div>
            <div class="greeting__message--sub">
              <p>当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。</p>
              <p>「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。</p>
            </div>
            <div class="greeting__name">
              みなみ歯科クリニック<br />
              院長　南 俊雄
            </div>
          </div>
          <!-- 院長画像 -->
          <div class="greeting__img">
            <img src="<?php echo get_template_directory_uri();?>/img/staff1.webp" alt="院長画像" width="920" height="1226" />
          </div>
          <!-- 経歴・資格 -->
          <div class="greeting__profile">
            <!-- 経歴 -->
            <div class="greeting__brief-history">
              <h3 class="greeting__brief-history--title">経歴</h3>
              <div class="greeting__brief-history--texts">
                <div class="greeting__brief-history--year">2004年</div>
                <div class="greeting__brief-history--text">東京医科歯科大学歯学部 卒業</div>
              </div>
              <div class="greeting__brief-history--texts">
                <div class="greeting__brief-history--year">2008年</div>
                <div class="greeting__brief-history--text">
                  東京歯科大学歯学研究科大学院修了<br />
                  博士(歯学)取得
                </div>
              </div>
              <div class="greeting__brief-history--texts">
                <div class="greeting__brief-history--year">2012年</div>
                <div class="greeting__brief-history--text">みなみ歯科クリニック 開院</div>
              </div>
            </div>
            <!-- 資格 -->
            <div class="greeting__qualification">
              <h3 class="greeting__title">資格</h3>
              <div class="greeting__text">歯科医師臨床研修指導歯科医</div>
              <div class="greeting__text">博士(歯学)</div>
              <div class="greeting__text">衛生検査技師</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="greeting__slider">
      <div class="swiper staff-swiper">
        <div class="swiper-wrapper staff-wrapper">
          <div class="swiper-slide staff-slide">
            
            <img src="<?php echo get_template_directory_uri();?>/img/staff-slide-1.webp" alt="治療中イメージ1" width="610" height="458" />
          </div>
          <div class="swiper-slide staff-slide">
            <img src="<?php echo get_template_directory_uri();?>/img/staff-slide-2.webp" alt="治療中イメージ2" width="610" height="458" />
          </div>
          <div class="swiper-slide staff-slide">
            <img src="<?php echo get_template_directory_uri();?>/img/staff-slide-3.webp" alt="治療中イメージ3" width="610" height="458" />
          </div>
          <div class="swiper-slide staff-slide">
            <img src="<?php echo get_template_directory_uri();?>/img/staff-slide-4.webp" alt="治療中イメージ4" width="610" height="458" />
          </div>
          <div class="swiper-slide staff-slide">
            <img src="<?php echo get_template_directory_uri();?>/img/staff-slide-5.webp" alt="治療中イメージ5" width="610" height="458" />
          </div>
          <div class="swiper-slide staff-slide">
            <img src="<?php echo get_template_directory_uri();?>/img/staff-slide-1.webp" alt="治療中イメージ1" width="610" height="458" />
          </div>
          <div class="swiper-slide staff-slide">
            <img src="<?php echo get_template_directory_uri();?>/img/staff-slide-2.webp" alt="治療中イメージ2" width="610" height="458" />
          </div>
          <div class="swiper-slide staff-slide">
            <img src="<?php echo get_template_directory_uri();?>/img/staff-slide-3.webp" alt="治療中イメージ3" width="610" height="458" />
          </div>
          <div class="swiper-slide staff-slide">
            <img src="<?php echo get_template_directory_uri();?>/img/staff-slide-4.webp" alt="治療中イメージ4" width="610" height="458" />
          </div>
          <div class="swiper-slide staff-slide">
            <img src="<?php echo get_template_directory_uri();?>/img/staff-slide-5.webp" alt="治療中イメージ5" width="610" height="458" />
          </div>
        </div>
      </div>
    </div>

    <section class="section introduction wow fadeInUp" id="introduction">
      <div class="section__inner">
        <h2 class="section__title">スタッフ紹介</h2>
        <div class="introduction__container is-hygienist">
          <h3 class="introduction__title">歯科衛生士</h3>
          <div class="introduction__wrapper">

          <?php
            $args = array(
              'post_type' => 'staffs',  // カスタム投稿タイプのスラッグ
              'posts_per_page' => -1,  // 全ての投稿を取得
              'orderby' => 'date',  // 日付で並べ替え
              'order' => 'ASC',  // 昇順で表示（古いものから新しいものへ）
              'tax_query' => array(  // タクソノミークエリ
                array(
                    'taxonomy' => 'staff-type',  // タクソノミー名
                    'field' => 'slug',  // 'slug'でタームを比較
                    'terms' => 'hygienist'  // タームのスラッグ
                )
              )
            );

            // クエリを実行
            $query = new WP_Query($args);

            // 抽出した投稿のタイトルを表示
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                  $query->the_post();
          ?>

            <div class="introduction__item">
              <div class="introduction__img">
              <?php my_the_post_thumbnail(); ?>
              </div>
              <div class="introduction__name">
                <div class="introduction__name--position">歯科衛生士</div>
                <div class="introduction__name--full-name"><?php the_title();?></div>
              </div>
              <div class="introduction__profile">
                <dl>
                  <dt>出身地</dt>
                  <dd><?php the_field('birthplace');?></dd>
                </dl>
                <dl>
                  <dt>趣味</dt>
                  <dd><?php the_field('hobbies');?></dd>
                </dl>
                <dl>
                  <dt>好きな食べ物</dt>
                  <dd><?php the_field('favoritefood');?></dd>
                </dl>
              </div>
            </div>
          <?php
          }
          } else {
            echo 'No posts found.';
          }
          // クエリをリセット
          wp_reset_postdata();
          ?>
  
          </div>
        </div>
        <div class="introduction__container is-assistant">
          <h3 class="introduction__title">歯科助手</h3>
          <div class="introduction__wrapper">

          <?php
            $args = array(
              'post_type' => 'staffs',  // カスタム投稿タイプのスラッグ
              'posts_per_page' => -1,  // 全ての投稿を取得
              'orderby' => 'date',  // 日付で並べ替え
              'order' => 'ASC',  // 昇順で表示（古いものから新しいものへ）
              'tax_query' => array(  // タクソノミークエリ
                array(
                    'taxonomy' => 'staff-type',  // タクソノミー名
                    'field' => 'slug',  // 'slug'でタームを比較
                    'terms' => 'assistant'  // タームのスラッグ
                )
              )
            );

            // クエリを実行
            $query = new WP_Query($args);

            // 抽出した投稿のタイトルを表示
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                  $query->the_post();
          ?>

            <div class="introduction__item">
              <div class="introduction__img">
              <?php my_the_post_thumbnail(); ?>
              </div>
              <div class="introduction__name">
                <div class="introduction__name--position">歯科助手</div>
                <div class="introduction__name--full-name"><?php the_title();?></div>
              </div>
              <div class="introduction__profile">
                <dl>
                  <dt>出身地</dt>
                  <dd><?php the_field('birthplace');?></dd>
                </dl>
                <dl>
                  <dt>趣味</dt>
                  <dd><?php the_field('hobbies');?></dd>
                </dl>
                <dl>
                  <dt>好きな食べ物</dt>
                  <dd><?php the_field('favoritefood');?></dd>
                </dl>
              </div>
            </div>
          <?php
          }
          } else {
            echo 'No posts found.';
          }
          // クエリをリセット
          wp_reset_postdata();
          ?>

          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>