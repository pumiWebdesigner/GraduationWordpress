<?php get_header(); ?>

    <!-- 画面横のWEB予約ボタン -->
    <a href="./reservation.html" class="aside__button">
      <div class="aside__button--label">
        <div class="button--icon">
          <svg width="52" height="32" viewBox="0 0 52 32" fill="none">
            <path
              d="M47.79 7.55811H38.1414C36.9999 7.55811 36.0739 8.4842 36.0739 9.62566V27.5444C36.0739 28.6859 36.9999 29.612 38.1414 29.612H47.79C48.9315 29.612 49.8576 28.6859 49.8576 27.5444V9.62566C49.8576 8.4842 48.9315 7.55811 47.79 7.55811ZM42.9657 28.2336C42.2033 28.2336 41.5873 27.6176 41.5873 26.8552C41.5873 26.0928 42.2033 25.4769 42.9657 25.4769C43.7281 25.4769 44.3441 26.0928 44.3441 26.8552C44.3441 27.6176 43.7281 28.2336 42.9657 28.2336ZM47.79 23.5816C47.79 23.8659 47.5574 24.0985 47.2731 24.0985H38.6583C38.374 24.0985 38.1414 23.8659 38.1414 23.5816V10.1425C38.1414 9.85825 38.374 9.62566 38.6583 9.62566H47.2731C47.5574 9.62566 47.79 9.85825 47.79 10.1425V23.5816Z"
              fill="white"
            />
            <path
              d="M30.5069 0.999512H3.68256C2.20163 0.999512 1.00012 2.20102 1.00012 3.68194V21.5648C1.00012 23.0457 2.20163 24.2472 3.68256 24.2472H14.4123L13.5181 26.9296H9.49449C8.75124 26.9296 8.15328 27.5276 8.15328 28.2709C8.15328 29.0141 8.75124 29.6121 9.49449 29.6121H24.695C25.4382 29.6121 26.0362 29.0141 26.0362 28.2709C26.0362 27.5276 25.4382 26.9296 24.695 26.9296H20.6713L19.7772 24.2472H30.5069C31.9878 24.2472 33.1893 23.0457 33.1893 21.5648V3.68194C33.1893 2.20102 31.9878 0.999512 30.5069 0.999512ZM29.6127 20.6706H4.5767V4.57608H29.6127V20.6706Z"
              fill="white"
            />
          </svg>
        </div>
        <div class="button--text">WEB予約<br /><span>はこちら</span></div>
      </div>
    </a>

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
            <a href="./blog.html"><div class="mv__news-header-past">過去のお知らせはこちら</div> </a>
          </div>
          <div class="mv__news-body">
            <a href="./page-name.html" class="mv__news-body--text">
              <time class="mv__news-body--text-data" datetime="2021-01-01"><span class="hidden-sp">2021.01.01</span><span class="hidden-pc">2021/01/01</span></time>
              <p class="mv__news-body--text-title">年末年始の営業時間のお知らせ</p>
            </a>
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
            <a href="./about.html" class="button button--arrow-right">当院について</a>
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
            <div class="recommend__text">歯の治療において、小さな違和感は大きなストレスにつながります。 <br />私たちは常に快適な歯科医療技術の研究を行っております。</div>
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
              <a href="./medical.html#general-practice" class="medical__item">
                <div class="medical__img"><img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri() ?>/img/medical-img-1.webp" alt="歯ブラシ" width="460" height="290" /></div>
                <div class="medical__text">
                  <h3 class="medical__text--title">一般診療</h3>
                  <div class="medical__text--text">虫歯・入れ歯・小児歯科</div>
                </div>
              </a>
              <a href="./medical.html#special-practice" class="medical__item">
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
            <?php if (have_posts()) : // 記事があれば表示 ?>
              <?php $count = 0; // 記事数のカウンターを初期化 ?>
              <?php while(have_posts() && $count < 6) : // 記事数分ループ ?>
                <?php the_post(); ?>
                    <li class="blog__item">
                      <div class="blog__item-tag">New</div>

                      <a href="./page-name.html" class="blog__link">
                        <div class="blog__img">
                          <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 ?>
                            <?php the_post_thumbnail(); ?>
                          <?php else : // なければnoimage画像をデフォルトで表示 ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.webp" alt="">
                          <?php endif; ?>
                        </div>
                        
                        <div class="blog__text">
                          <?php $category = get_the_category(); ?>
                          <?php if ($category[0]) : ?>
                          <div class="blog__category"><?php echo $category[0]->cat_name; ?></div><!-- /entry-item-tag -->
                          <?php endif; ?>
                        <div class="blog__title"><?php the_title(); ?></div>
                        <time class="blog__data" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                        </div>
                      </a>
                    </li>
                    <?php $count++; // カウンターをインクリメント ?>
                <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <div class="blog__button">
            <a href="./blog.html" class="button button--arrow-right">スタッフブログ一覧はこちら</a>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
