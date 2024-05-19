<?php get_header(); ?>


    <div class="practice-nav wow fadeInUp">
      <div class="practice-nav__inner">
        <div class="practice-nav--items">
          <div class="practice-nav--item">
            <a href="#general-practice" class="practice-nav__title">
              <h2 class="practice-nav__title--text">一般診療</h2>
              <div class="practice-nav__title--label general--label">保険対象</div>
            </a>
            <div class="practice-nav__menu">
              <?php
                $args = array(
                  'post_type' => 'plan',  // カスタム投稿タイプのスラッグ（plan:診療種類）
                  'posts_per_page' => -1,  // 全ての投稿を取得
                  'orderby' => 'date',  // 日付で並べ替え
                  'order' => 'ASC',  // 昇順で表示（古いものから新しいものへ）
                  'tax_query' => array(  // タクソノミークエリ
                    array(
                        'taxonomy' => 'medical-type',  // タクソノミー名
                        'field' => 'slug',  // 'slug'でタームを比較
                        'terms' => 'general-practice'  // タームのスラッグ（一般診療）
                    )
                  )
                );

                // クエリを実行
                $query = new WP_Query($args);

                // 抽出した投稿のタイトルを表示
                if ($query->have_posts()) :
                  while ($query->have_posts()) : $query->the_post();
                    ?>
                    <a href="#<?php echo get_post_field('post_name', get_the_ID());?>" class="practice-nav__menu--item">
                      <?php the_title();?>
                    </a>
                  <?php
                  endwhile;
                endif;
                // クエリをリセット
                wp_reset_postdata();
              ?>
            </div>
          </div>
          <div class="practice-nav--item">
            <a href="#general-practice" class="practice-nav__title">
              <h2 class="practice-nav__title--text">特殊診療</h2>
              <div class="practice-nav__title--label special--label">実費</div>
            </a>
            <div class="practice-nav__menu">
              <?php
                $args = array(
                  'post_type' => 'plan',  // カスタム投稿タイプのスラッグ
                  'posts_per_page' => -1,  // 全ての投稿を取得
                  'orderby' => 'date',  // 日付で並べ替え
                  'order' => 'ASC',  // 昇順で表示（古いものから新しいものへ）
                  'tax_query' => array(  // タクソノミークエリ
                    array(
                        'taxonomy' => 'medical-type',  // タクソノミー名
                        'field' => 'slug',  // 'slug'でタームを比較
                        'terms' => 'special-practice'  // タームのスラッグ
                    )
                  )
                );

                // クエリを実行
                $query = new WP_Query($args);

                // 抽出した投稿のタイトルを表示
                if ($query->have_posts()) :
                  while ($query->have_posts()) : $query->the_post();
                    ?>
                    <a href="#<?php echo get_post_field('post_name', get_the_ID());?>" class="practice-nav__menu--item">
                      <?php the_title();?>
                    </a>
                  <?php
                  endwhile;
                endif;
                // クエリをリセット
                wp_reset_postdata();
                ?>
              </div>
          </div>
        </div>
      </div>
    </div>

    <section class="general-practice medical wow fadeInUp" id="general-practice">
      <div class="medical-u__body">
        <div class="section__inner">
          <h2 class="section__title">一般診療</h2>
          <div class="medical-u__inner">
            <div class="medical-u__items">

              <?php
              $args = array(
                'post_type' => 'plan',  // カスタム投稿タイプのスラッグ
                'posts_per_page' => -1,  // 全ての投稿を取得
                'orderby' => 'date',  // 日付で並べ替え
                'order' => 'ASC',  // 昇順で表示（古いものから新しいものへ）
                'tax_query' => array(  // タクソノミークエリ
                  array(
                      'taxonomy' => 'medical-type',  // タクソノミー名
                      'field' => 'slug',  // 'slug'でタームを比較
                      'terms' => 'general-practice'  // タームのスラッグ
                  )
                )
              );

              // クエリを実行
              $query = new WP_Query($args);

              // 抽出した投稿のタイトルを表示
              if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                  ?>  

                  <article id="<?php echo get_post_field('post_name', get_the_ID());?>" class="medical-u__item">
                    <div class="medical-u__item--inner">
                      <div class="medical-u__label">保険対象</div>
                      <div class="medical-u__title">
                        <h3 class="medical-u__title--main"><?php the_title();?></h3>
                        <div class="medical-u__title--sub"><?php the_field('issue');?></div>
                      </div>
                      <div class="medical-u__contents">
                        <div class="medical-u__contents--texts">
                          <div class="medical-u__contents--text">
                            <?php the_field('overview'); ?>  
                          </div>
                        </div>
                        <div class="medical-u__contents--img">
                        <?php my_the_post_thumbnail(); ?>
                        </div>
                      </div>
                    </div>
                  </article>

                  <?php
                  endwhile;
                else :
                  echo 'No posts found.';
                endif;
                // クエリをリセット
                wp_reset_postdata();
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="special-practice medical wow fadeInUp" id="special-practice">
      <div class="medical-u__body">
        <div class="section__inner">
          <h2 class="section__title">特殊診療</h2>
          <div class="medical-u__inner">
            <div class="medical-u__items">

              <?php
                $args = array(
                  'post_type' => 'plan',  // カスタム投稿タイプのスラッグ
                  'posts_per_page' => -1,  // 全ての投稿を取得
                  'orderby' => 'date',  // 日付で並べ替え
                  'order' => 'ASC',  // 昇順で表示（古いものから新しいものへ）
                  'tax_query' => array(  // タクソノミークエリ
                    array(
                        'taxonomy' => 'medical-type',  // タクソノミー名
                        'field' => 'slug',  // 'slug'でタームを比較
                        'terms' => 'special-practice'  // タームのスラッグ
                    )
                  )
                );

                // クエリを実行
                $query = new WP_Query($args);

                // 抽出した投稿のタイトルを表示
                if ($query->have_posts()) :
                  while ($query->have_posts()) : $query->the_post();
                  ?>

                  <article id="<?php echo get_post_field('post_name', get_the_ID());?>" class="medical-u__item">
                    <div class="medical-u__item--inner">
                      <div class="medical-u__label">実費</div>
                      <div class="medical-u__title">
                        <h3 class="medical-u__title--main"><?php the_title();?></h3>
                        <div class="medical-u__title--sub"><?php the_field('issue');?></div>
                      </div>
                      <div class="medical-u__contents">
                        <div class="medical-u__contents--texts">
                          <div class="medical-u__contents--text">
                            <?php the_field('overview'); ?>  
                          </div>
                        </div>
                        <div class="medical-u__contents--img">
                        <?php my_the_post_thumbnail(); ?>
                        </div>
                      </div>
                    </div>
                  </article>
           
                  <?php
                  endwhile;
                else :
                  echo 'No posts found.';
                endif;
                // クエリをリセット
                wp_reset_postdata();
              ?>  

            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>