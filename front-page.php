<?php get_header(); ?>

<!-- main visual -->
<div class="mv wow fadeInUp">
  <div class="mv__inner">
    <div class="mv__swiper--container">
      <div class="swiper mv__swiper js-mv-swiper">
        <ul class="swiper-wrapper">
          <li class="swiper-slide mv__slider">
            <div class="mv__slider--img">
              <picture>
                <source media="(max-width: 1023px)" srcset="<?php echo get_template_directory_uri() ?>/img/top-01-sp.webp" />
                <source media="not (max-width: 1023px)" srcset="<?php echo get_template_directory_uri() ?>/img/top-01.webp" />
                <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri() ?>/img/top-01-sp.webp" alt="治療席画像（斜め後ろ）" width="335" height="447" />
              </picture>
            </div>
          </li>
          <li class="swiper-slide mv__slider">
            <div class="mv__slider--img">
              <picture>
                <source media="(max-width: 1023px)" srcset="<?php echo get_template_directory_uri() ?>/img/top-02-sp.webp" />
                <source media="not (max-width: 1023px)" srcset="<?php echo get_template_directory_uri() ?>/img/top-02.webp" />
                <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri() ?>/img/top-02-sp.webp" alt="治療席画像（後ろ）" width="335" height="447" />
              </picture>
            </div>
          </li>
          <li class="swiper-slide mv__slider">
            <div class="mv__slider--img">
              <picture>
                <source media="(max-width: 1023px)" srcset="<?php echo get_template_directory_uri() ?>/img/top-03-sp.webp" />
                <source media="not (max-width: 1023px)" srcset="<?php echo get_template_directory_uri() ?>/img/top-03.webp" />
                <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri() ?>/img/top-03-sp.webp" alt="治療席画像（横）" width="335" height="447" />
              </picture>
            </div>
          </li>
        </ul>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
        <div class="mv__text--top dotted-underline">街の皆さまの笑顔を守る</div>
        <div class="mv__text--bottom dotted-underline">アットホームな歯医者さん</div>
      </div>
      <div class="mv__time-schedule">
        
      <img
          loading="lazy"
          decoding="async"
          src="<?php echo get_template_directory_uri() ?>/img/time-schedule.webp"
          alt="水曜日午後は休診日となります。土日祝日含め午前の診療時間は9:00〜12:00、午後の診療時間は13:00〜22:00となります。"
          width="477"
          height="166"
        />
      </div>
    </div>
    <div class="mv__news">
      <div class="mv__news-header">
        <div class="mv__news-header--text">
          <div class="mv__news-header--text-main">お知らせ</div>
          <div class="mv__news-header--text-sub">NEWS</div>
        </div>
        
        <a href="<?php echo esc_url(home_url('news')); ?>/"><div class="mv__news-header-past">過去のお知らせはこちら</div> </a>
      </div>
      <div class="mv__news-body">

<?php
// WP_Query のインスタンスを生成します。
$args = array(
'post_type'      => 'post', // 投稿タイプ
'posts_per_page' => 1,      // 取得する投稿数
'orderby'        => 'date', // 日付で並び替え
'order'          => 'DESC'  // 降順で取得
);

$query = new WP_Query($args);

// ループを開始
if ($query->have_posts()) : 
while ($query->have_posts()) : $query->the_post();
?>
            <a href="<?php the_permalink(); ?>" class="mv__news-body--text">
            <time class="mv__news-body--text-data" datetime="<?php the_time('c'); ?>">
              <span class="hidden-sp">
                <?php the_time('Y.m.d'); ?>
              </span>
              <span class="hidden-pc">
                <?php the_time('Y/m/d'); ?>
              </span>
            </time>
            <p class="mv__news-body--text-title"><?php the_title(); ?></p>
          </a>
<?php
endwhile;
endif;

// ポストデータをリセット
wp_reset_postdata();
?>

        <div class="mv__news-body--arrow">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M1 8H15" stroke="#393939" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M8.39453 1L15.0001 8L8.39453 15" stroke="#393939" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- concept -->
<section class="concept wow fadeInUp">
  <!-- <div class="section__inner"> -->
  <div class="concept__container">
    <div class="concept__contents">
      <h2 class="concept__title">CONCEPT</h2>
      <div class="concept__message--main">健康的で素敵な笑顔あふれる<br />街づくりを目指して</div>
      <div class="concept__message--sub">
        私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。<br />
        お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
      </div>
      <div class="cencept__button">
        <a href="<?php echo esc_url(home_url('/')); ?>about/" class="button button--arrow-right">当院について</a>
      </div>
    </div>
    <div class="concept__img">
      <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri() ?>/img/concept-img.webp" alt="女医の丁寧な治療" width="668" height="460" />
    </div>
  </div>
  <!-- </div> -->
</section>

<!-- recommend -->
<section class="recommend wow fadeInUp">
  <div class="section__inner">
    <h2 class="section__title">当院の3つのおすすめ</h2>
    <div class="recommend__wrapper">
      <div class="recommend__item">
        <div class="recommend__label">
          <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri() ?>/img/recommend-label-1.webp" alt="おすすめ01" width="177" height="33" />
        </div>
        <div class="recommend__img">
          <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri() ?>/img/recommend-img-1.webp" alt="歯の画像" width="220" height="220" />
        </div>
        <div class="recommend__message">痛くない歯科医療の追求</div>
        <div class="recommend__text">歯の治療において、小さな違和感は大きなストレスにつながります。 <br />私たちは常に快適な歯科医療技術の研究を<span class="inline-block">行っております。</span></div>
      </div>
      <div class="recommend__item">
        <div class="recommend__label"><img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri() ?>/img/recommend-label-2.webp" alt="おすすめ02" width="182" height="33" /></div>
        <div class="recommend__img"><img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri() ?>/img/recommend-img-2.webp" alt="電車画像" width="220" height="220" /></div>
        <div class="recommend__message">駅から徒歩3分</div>
        <div class="recommend__text">「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</div>
      </div>
      <div class="recommend__item">
        <div class="recommend__label"><img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri() ?>/img/recommend-label-3.webp" alt="おすすめ03" width="182" height="33" /></div>
        <div class="recommend__img"><img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri() ?>/img/recommend-img-3.webp" alt="時計画像" width="220" height="220" /></div>
        <div class="recommend__message">夜20:30まで営業</div>
        <div class="recommend__text">
          朝から夜までお仕事をされている方のために、診療時間を見直しました。<br />
          <strong class="text-accent">※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</strong>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- medical -->
<section class="medical wow fadeInUp">
  <div class="medical__body">
    <div class="section__inner">
      <h2 class="section__title medical__title">診療案内</h2>
      <div class="medical__inner">
        <div class="medical__wrapper">
          
          <a href="<?php echo esc_url(home_url('/')); ?>medical#general-practice" class="medical__item">
            <div class="medical__img"><img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri() ?>/img/medical-img-1.webp" alt="歯ブラシ" width="460" height="290" /></div>
            <div class="medical__text">
              <h3 class="medical__text--title">一般診療</h3>
              <div class="medical__text--text">虫歯・入れ歯・小児歯科</div>
            </div>
          </a>
          <a href="<?php echo esc_url(home_url('/')); ?>medical#special-practice" class="medical__item">
            <div class="medical__img"><img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri() ?>/img/medical-img-2.webp" alt="歯茎" width="460" height="290" /></div>
            <div class="medical__text">
              <h3 class="medical__text--title">特殊診療</h3>
              <div class="medical__text--text">
                インプラント・ホワイトニング<br />
                予防歯科・口腔外科・審美歯科
              </div>
            </div>
          </a>
        </div>
        <div class="medical__message">
          当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。<br />
          痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。<br />
          <strong class="text-accent">※特殊性の高い矯正治療などは保険の適応外となります。 これらの治療を行う際は事前に詳細と費用のご説明いたします。</strong>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- blog -->
<section class="blog wow fadeInUp">
  <div class="section__inner">
    <h2 class="section__title">スタッフブログ</h2>
    <div class="blog__wrapper">
      <ul class="blog__list">
      <?php
        $args = array(
          'post_type'      => 'blog', // 投稿タイプ
          'posts_per_page' => 6,      // 取得する投稿数
          'orderby'        => 'date', // 日付で並び替え
          'order'          => 'DESC'  // 降順で取得
        );
        $news_query = new WP_Query($args);
        if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post();
?>
   
                <li class="blog__item">
                  <?php add_is_new(); ?>
                  <a href="<?php the_permalink(); ?>" class="blog__link">
                    <div class="blog__img">
                      <?php my_the_post_thumbnail(); ?>
                    </div>
                    
                    <div class="blog__text">
                      <div class="blog__category">
                      <?php
                        $taxonomySlug = 'staff-type';
                        $terms = wp_get_post_terms( $post->ID, $taxonomySlug, array('fields' => 'names') );

                        // タームが存在し、エラーがないことを確認
                        if ( !is_wp_error($terms) && !empty($terms) ) {
                          // 最初のタームの名前を表示
                          echo $terms[0];
                        } 
                      ?>                    
                      </div><!-- /entry-item-tag -->
                    <div class="blog__title"><?php the_title(); ?></div>
                    <time class="blog__data" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                    </div>
                  </a>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>
      </ul>
      <div class="blog__button">
        <a href="<?php echo esc_url(home_url('/')); ?>blog" class="button button--arrow-right">スタッフブログ一覧はこちら</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
