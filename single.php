<?php get_header(); ?>

    <section class="section staff-blog staff-blog-single wow fadeInUp">
      <div class="section__inner">
        <div class="staff-blog__wrapper">
          <div class="staff-blog__post-container">

            <?php
            $args = array(
              'post_type'      => get_post_type(), // 投稿タイプ
              'posts_per_page' => 6,      // 取得する投稿数
              'orderby'        => 'date', // 日付で並び替え
              'order'          => 'DESC'  // 降順で取得
            );

            $query = new WP_Query($args);
            if (have_posts()) : // 記事があれば表示 
              while(have_posts()):  the_post(); ?>

                <article class="blog-post">
                  <div class="blog-post__h1">
                    <h1 class="blog-post__h1--title">
                      <?php the_title(); ?>
                    </h1>
                    <div class="blog-post__h1--param">
                      <time class="blog-post__h1--data" datetime="<?php the_time('c'); ?>">
                        <?php the_time('Y.m.d'); ?>
                      </time>
                      <div class="blog-post__h1--category">
                        <?php
                          // 通常投稿の場合
                          if(get_post_type() === 'post'){
                            my_the_post_category($anchor = false); 
                          }
                          // カスタム投稿の場合
                          else if (get_post_type() === 'blog'){
                            $taxonomySlug = 'staff-type';
                            $terms = wp_get_post_terms( $post->ID, $taxonomySlug, array('fields' => 'names') );
                            // タームが存在し、エラーがないことを確認
                            if ( !is_wp_error($terms) && !empty($terms) ) {
                            // 最初のタームの名前を表示
                              echo $terms[0];
                            }
                          }
                        ?>
                      </div>
                    </div>
                  </div>
                  <div class="blog-post--texts">
                    <?php the_content(); ?>
                  </div>
                </article>
              <?php endwhile; ?>
            <?php endif; ?>

            <!-- previous_post_linkでaタグ作成できるが、クラス名をつけれないので、フィルターフックを使ってクラス名を追加する         -->
            <div class="blog-post__blog-pagenation">
              <?php
                add_class_to_previous_post_link(
                previous_post_link('%link', '<span class="hidden-pc">前の記事</span><span class="hidden-sp">前の記事へ</span>')
              ); 
              // カスタム投稿のスタッフブログの場合
               if ('blog' === get_post_type() ){
                echo '<a href="' 
                . esc_url(home_url('/')) 
                . 'blog/" class="blog-post__blog-pagenation--page">記事一覧</a>';
                }
                //  通常投稿の場合
                elseif ('post' === get_post_type() ){
                echo '<a href='
                . esc_url(home_url('news'))
                . '" class="blog-post__blog-pagenation--page">記事一覧</a>';
                }
              add_class_to_next_post_link(
              next_post_link('%link', '<span class="hidden-pc">次の記事</span><span class="hidden-sp">次の記事へ</span>')
              ); ?>
            </div>
          </div>

  
          <div class="staff-blog__archive-container">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </section>

  <?php get_footer(); ?>