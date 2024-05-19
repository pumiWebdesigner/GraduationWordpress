<div class="staff-blog__archive-item">
    <div class="staff-blog__archive-title">
        <div class="staff-blog__archive-title--icon">
            <img src="<?php echo get_template_directory_uri();?>/img/sidebar-icon_1.svg" alt="病院アイコン" width="24" height="24" loading="lazy" decoding="async" />
        </div>
        <div class="staff-blog__archive-title--text">クリニックの紹介</div>
    </div>
    <div class="introduction-archive__img">
     <img src="<?php echo get_template_directory_uri();?>/img/sidebar-img_1.webp" alt="診察室風景" width="600" height="376" loading="lazy" decoding="async" />
    </div>
    <div class="introduction-archive__text">
        <div class="introduction-archive__text-title">みなみ歯科クリニック</div>
        <div class="introduction-archive__text-message">お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</div>
        <a href="<?php echo esc_url(home_url('/')); ?>about/" class="introduction-archive__link arrow-right">
            当院について
        </a>
    </div>
</div>

<div class="staff-blog__archive-item new-post">

    <div class="staff-blog__archive-title">
    <div class="staff-blog__archive-title--icon">
        <img src="<?php echo get_template_directory_uri();?>/img/sidebar-icon_2.svg" alt="記事アイコン" width="24" height="24" loading="lazy" decoding="async" />
    </div>
    <div class="staff-blog__archive-title--text">新着記事</div>
    </div>
   
    <?php
              
    if(get_post_type() === 'post'){
        $args = array(
            'post_type'      => 'post', // 投稿タイプ
            'posts_per_page' => 5,      // 取得する投稿数
            'orderby'        => 'date', // 日付で並び替え
            'order'          => 'DESC'  // 降順で取得
        );
    }
    elseif (get_post_type() === 'blog'){
        $args = array(
            'post_type'      => 'blog', // 投稿タイプ
            'posts_per_page' => 5,      // 取得する投稿数
            'orderby'        => 'date', // 日付で並び替え
            'order'          => 'DESC'  // 降順で取得
        );
    }

    $query = new WP_Query($args);

    // ループを開始
    if ($query->have_posts()) : 
        while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="post">
                <div class="staff-blog__blog-item">
                <a href="<?php the_permalink(); ?>" class="staff-blog__blog-item is-news">
                    <div class="staff-blog__blog-img">
                        <?php my_the_post_thumbnail(); ?>
                    </div>
                    <div class="staff-blog__blog-text">
                    <div class="staff-blog__blog-category">
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
                    </div><!-- /entry-item-tag -->
                    <div class="staff-blog__blog-text--title"><?php the_title(); ?></div>
                    <time class="staff-blog__blog-text--data" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                    </div>
                </a>
                </div>
            </div>
            <?php
        endwhile;
    endif;

    // ポストデータをリセット
    wp_reset_postdata();
    ?>

</div>

<div class="staff-blog__archive-item category">
    <div class="staff-blog__archive-title">
    <div class="staff-blog__archive-title--icon">
        <img src="<?php echo get_template_directory_uri();?>/img/sidebar-icon_3.svg" alt="カテゴリアイコン" width="24" height="24" loading="lazy" decoding="async" />
    </div>
    <div class="staff-blog__archive-title--text">カテゴリー</div>
    </div>

    <?php: 
    // 通常投稿の場合
    if(get_post_type() === 'post'){
        $categories = get_categories(
            array(
                'orderby' => 'name', // 名前順に並び替え
                'order'   => 'ASC',  // 昇順で表示
                'hide_empty' => true // 投稿がないカテゴリは非表示
            )
        );
    }
    // カスタム投稿の場合
    else if (get_post_type() === 'blog'){
        $taxonomySlug = 'staff-type';
        $categories = get_terms(
            array(
                'taxonomy' => $taxonomySlug,
                'orderby' => 'name', // 名前順に並び替え
                'order'   => 'ASC',  // 昇順で表示
                'hide_empty' => true // 投稿がないカテゴリは非表示
            )
        );
    }

    echo '<ul>';
    foreach ($categories as $category) {
        echo '
        <a href="' 
        . get_category_link($category->term_id) 
        . '" class="category__item">
        <li class="category__item--text" >
        ' . esc_html($category->name) 
        . '</li>
        </a>';
    }
    echo '</ul>';
    ?>
</div>