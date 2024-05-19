<?php get_header(); ?>

<section class="section staff-blog wow fadeInUp">
  <div class="section__inner">
    <div class="staff-blog__wrapper">
      <div class="staff-blog__blog-container">

      <?php
    // WP_Query のインスタンスを生成します。
    $args = array(
        'post_type'      => 'post', // 投稿タイプ
        'category_name'  => 'blog', // カテゴリースラッグ
        'posts_per_page' => 10,      // 取得する投稿数
        'orderby'        => 'date', // 日付で並び替え
        'order'          => 'DESC'  // 降順で取得
    );

    $query = new WP_Query($args);

    // ループを開始
    if ($query->have_posts()) : 
        while ($query->have_posts()) : $query->the_post();
            ?>
             <div class="staff-blog__blog-item">
              

             <?php add_is_new(); ?>

              <a href="<?php the_permalink(); ?>" class="staff-blog__blog-link">
                <div class="staff-blog__blog-img">
                      <?php my_the_post_thumbnail(); ?>
                </div>
                <div class="staff-blog__blog-text">
                    <div class="staff-blog__blog-category">
                        <?php my_the_post_category($anchor = false); ?>
                    </div>
                  <div class="staff-blog__blog-text--title"><?php the_title(); ?></div>
                  <time class="staff-blog__blog-text--data" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
              </a>
            </div>

            <?php
        endwhile;
    endif;

    // ポストデータをリセット
    wp_reset_postdata();
    ?>

        <?php get_template_part('template-parts/pagination'); ?>
      </div>

      <div class="staff-blog__archive-container">
      <?php get_sidebar(); ?>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
