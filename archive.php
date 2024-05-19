<!-- 通常投稿自体のアーカイブはhome.php -->
<!-- 通常投稿のカテゴリーアーカイブ -->
<!-- カスタム投稿自体のアーカイブ -->
<!-- カスタム投稿のタクソノミーアーカイブ -->

<?php get_header(); ?>

<section class="section staff-blog wow fadeInUp">
  <div class="section__inner">
    <div class="staff-blog__wrapper">
      <div class="staff-blog__blog-container">
        <?php
        // ページネーションを利用するためには今どこのページかを取得する必要がある
        $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
        // 通常投稿のカテゴリーアーカイブ
        // カテゴリーを指定しないと通常投稿自体のアーカイブ（全カテゴリー）がthe_post()で取得されてしまう
        if(is_category()){
          $args = array(
              'post_type'      => 'post', // 投稿タイプ
              'category_name'  => single_cat_title('', false), // URLのカテゴリー名
              'posts_per_page' => 10,      // 取得する投稿数_1ページ10記事になるように設定
              'orderby'        => 'date', // 日付で並び替え
              'order'          => 'DESC',  // 降順で取得
              'paged'          => $paged
          );
        }
        // カスタム投稿自体のアーカイブ
        elseif (is_post_type_archive('blog')) {
          $args = array(
            'post_type'      => get_post_type(), // 投稿タイプ
            'posts_per_page' => 10,      // 取得する投稿数_1ページ10記事になるように設定
            'orderby'        => 'date', // 日付で並び替え
            'order'          => 'DESC',  // 降順で取得
            'paged' => $paged
          );
        }
        // カスタム投稿のタクソノミーアーカイブ
        else{
          $taxonomySlug = get_queried_object()->taxonomy;
          $termSlug = get_queried_object()->slug;
          $terms = wp_get_post_terms( $post->ID, $taxonomySlug, array('fields' => 'names') );
          // タームが存在し、エラーがないことを確認
          if ( !is_wp_error($terms) && !empty($terms) ) 
            $args = array(
                'post_type'      => get_post_type(), // 投稿タイプ
                'tax_query'      => array( 
                  array(
                    'taxonomy'   => $taxonomySlug,  // タクソノミー名
                    'field'      => 'slug',  // 'slug'でタームを比較
                    'terms'      => $termSlug  // タームのスラッグ
                  )
                ),
                'posts_per_page' => 10,      // 取得する投稿数_1ページ10記事になるように設定
                'orderby'        => 'date', // 日付で並び替え
                'order'          => 'DESC',  // 降順で取得
                'paged' => $paged
            );
        }
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
                    <?php
                    // 通常投稿の場合
                      if(is_category()){
                        // アーカイブのカテゴリー名（URLのカテゴリー名）を取得
                        my_the_post_category($anchor = false); 
                      }
                      // カスタム投稿の場合（staff-type以外投稿一覧表示無し）
                      else {
                        $taxonomySlug = 'staff-type';
                        $terms = wp_get_post_terms( $post->ID, $taxonomySlug, array('fields' => 'names') );
                        // タームが存在し、エラーがないことを確認
                        if ( !is_wp_error($terms) && !empty($terms) ) {
                          echo $terms[0];// 最初のターム(タクソノミー）の名前を表示
                        } 
                      }
                    ?>   
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
