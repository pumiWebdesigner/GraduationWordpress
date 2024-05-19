<!-- 通常投稿自体のアーカイブ -->
<!-- 通常投稿のカテゴリーアーカイブはarchive.php -->
<!-- カスタム投稿自体のアーカイブはarchive.php -->
<!-- カスタム投稿のタクソノミーアーカイブはarchive.php -->

<?php get_header(); ?>

<section class="section staff-blog wow fadeInUp">
  <div class="section__inner">
    <div class="staff-blog__wrapper">
      <div class="staff-blog__blog-container">
        <?php
        // ページネーションを利用するためには今どこのページかを取得する必要がある
        $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
        
        // 通常投稿自体のアーカイブ
        $args = array(
          'post_type'      => 'post', // 投稿タイプ
          'posts_per_page' => 10,      // 取得する投稿数_1ページ10記事になるように設定
          'orderby'        => 'date', // 日付で並び替え
          'order'          => 'DESC',  // 降順で取得
          'paged' => $paged
        );
        $query = new WP_Query($args);
        // ループを開始
        if ($query->have_posts()) : 
          while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="staff-blog__blog-item">
              <!-- newタグの付与 -->
              <?php add_is_new(); ?>
              <a href="<?php the_permalink(); ?>" class="staff-blog__blog-link">
                <div class="staff-blog__blog-img">
                  <?php my_the_post_thumbnail(); ?>
                </div>
                <div class="staff-blog__blog-text">
                  <div class="staff-blog__blog-category">
                    <!-- アーカイブのカテゴリー名（URLのカテゴリー名）を取得 -->
                    <?php my_the_post_category($anchor = false); ?>
                  </div>
                  <div class="staff-blog__blog-text--title">
                    <?php the_title(); ?>
                  </div>
                  <time class="staff-blog__blog-text--data" datetime="<?php the_time('c'); ?>">
                    <?php the_time('Y.m.d'); ?>
                  </time>
                </div>
              </a>
            </div>

            <?php
          endwhile;
        endif;
        ?>
        
        <!-- ページネーション -->
        <div class="staff-blog__blog-pagenation">
          <?php 
          if(paginate_links())
            get_template_part('template-parts/pagination');
          // ポストデータをリセット
          wp_reset_postdata();
          ?>
        </div>
      </div>
      <!-- サイドバー -->
      <div class="staff-blog__archive-container">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
