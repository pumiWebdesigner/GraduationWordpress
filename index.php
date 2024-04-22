<!DOCTYPE html>

<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- nodndexの記載 -->
    <meta name="robots" content="noindex" />
    <title>みなみ歯科クリニック</title>
    <meta name="description" content="みなみ歯科クリニックです。街の皆さまの笑顔を守るアットホームな歯医者さんです。" />
    <!-- twitterｶｰﾄﾞ,OGP -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@pumiWebcoder" />
    <meta property="og:url" content="http://pumiwebcoder.xsrv.jp/" />
    <meta property="og:title" content="みなみ歯科クリニック" />
    <meta property="og:description" content="みなみ歯科クリニックです。街の皆さまの笑顔を守るアットホームな歯医者さんです。" />
    <meta property="og:image" content="./img/favicon.webp" />
    <link rel="icon" href="./img/favicon.webp" type="image/png" />
    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500;700&display=swap" rel="stylesheet" />
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js" defer></script>
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script src="./js/slider.js" defer></script>
    <script src="./js/swiper.js" defer></script>
    <!-- wow -->
    <link rel="stylesheet" href="./css/animate.css" />
    <!-- wow.jsはwow().initより先に実行する必要があるので、deferを外す -->
    <script src="./js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <!-- css読み込み -->
    <link rel="stylesheet" href="./style.css" />
    <!-- JavaScript読み込み -->
    <script src="./js/contact.js" defer></script>
    <script src="./js/script.js" defer></script>
  </head>

  <body>
    <!-- header -->
    <header class="header">
      <div class="header__inner">
        <h1 class="header__logo">
          <a href="./index.php">
            <img loading="lazy" decoding="async" src="./img/logo.webp" alt="みなみ歯科クリニック" width="808" height="82" />
          </a>
        </h1>
        <div class="header__nav--contents">
          <button id="js-drawer__btn" class="header__hamburger--button" aria-label="ハンバーガーメニュー">
            <span class="drawer-bar"></span>
            <span class="drawer-bar"></span>
            <span class="drawer-bar"></span>
          </button>
          <nav class="header__nav drawer__nav">
            <ul class="header__nav--list drawer__nav--list">
              <!-- home -->
              <li class="header__nav--item drawer__nav--item is-active">
                <a href="./index.php" class="header__nav--link drawer__nav--link js-drawer__nav--link">
                  <div class="header__nav--icon drawer__nav--icon">
                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none">
                      <path
                        d="M17.9201 8.17995L10.2101 0.299949C10.0223 0.110636 9.76675 0.00415039 9.50012 0.00415039C9.23348 0.00415039 8.97788 0.110636 8.79012 0.299949L1.08012 8.18995C0.703271 8.56983 0.494369 9.08489 0.500116 9.61995V17.9999C0.498507 19.0629 1.32872 19.9415 2.39011 19.9999H16.6101C17.6715 19.9415 18.5017 19.0629 18.5001 17.9999V9.61995C18.5009 9.08288 18.2929 8.56653 17.9201 8.17995V8.17995ZM7.50012 17.9999V11.9999H11.5001V17.9999H7.50012ZM16.5001 17.9999H13.5001V10.9999C13.5001 10.4477 13.0524 9.99995 12.5001 9.99995H6.50012C5.94783 9.99995 5.50012 10.4477 5.50012 10.9999V17.9999H2.50012V9.57995L9.50012 2.42995L16.5001 9.61995V17.9999Z"
                        fill="#393939"
                        class="header__nav--icon-path drawer__nav--icon-path"
                      />
                    </svg>
                  </div>
                  <div class="header__nav--text drawer__nav--text">ホーム</div>
                  <div class="drawer__nav--arrow-right"></div>
                </a>
              </li>
              <!-- about -->
              <li class="header__nav--item drawer__nav--item">
                <a href="./about.html" class="header__nav--link drawer__nav--link js-drawer__nav--link">
                  <div class="header__nav--icon drawer__nav--icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path
                        d="M8.36761 11.232V9.55462C8.36761 9.27672 8.59292 9.05141 8.87082 9.05141H10.5482C10.8261 9.05141 11.0514 9.27672 11.0514 9.55462V11.232C11.0514 11.5099 10.8261 11.7352 10.5482 11.7352H8.87082C8.59292 11.7352 8.36761 11.5099 8.36761 11.232ZM14.2384 11.7352H15.9158C16.1937 11.7352 16.419 11.5099 16.419 11.232V9.55462C16.419 9.27672 16.1937 9.05141 15.9158 9.05141H14.2384C13.9605 9.05141 13.7352 9.27672 13.7352 9.55462V11.232C13.7352 11.5099 13.9605 11.7352 14.2384 11.7352ZM11.0514 15.2577V13.5803C11.0514 13.3024 10.8261 13.0771 10.5482 13.0771H8.87082C8.59292 13.0771 8.36761 13.3024 8.36761 13.5803V15.2577C8.36761 15.5356 8.59292 15.7609 8.87082 15.7609H10.5482C10.8261 15.7609 11.0514 15.5356 11.0514 15.2577ZM14.2384 15.7609H15.9158C16.1937 15.7609 16.419 15.5356 16.419 15.2577V13.5803C16.419 13.3024 16.1937 13.0771 15.9158 13.0771H14.2384C13.9605 13.0771 13.7352 13.3024 13.7352 13.5803V15.2577C13.7352 15.5356 13.9605 15.7609 14.2384 15.7609ZM21.7866 20.9608V22.4704H3V20.9608C3 20.6829 3.22531 20.4576 3.50321 20.4576H4.32093V4.56589C4.32093 4.07874 4.77152 3.6838 5.32736 3.6838H9.03856V2.00643C9.03856 1.45059 9.48914 1 10.045 1H14.7416C15.2975 1 15.7481 1.45059 15.7481 2.00643V3.6838H19.4593C20.0151 3.6838 20.4657 4.07874 20.4657 4.56589V20.4576H21.2834C21.5613 20.4576 21.7866 20.6829 21.7866 20.9608ZM6.33379 20.4156H11.0514V17.606C11.0514 17.3281 11.2767 17.1028 11.5546 17.1028H13.232C13.5099 17.1028 13.7352 17.3281 13.7352 17.606V20.4156H18.4528V5.69666H15.7481V6.70308C15.7481 7.25892 15.2975 7.70951 14.7416 7.70951H10.045C9.48914 7.70951 9.03856 7.25892 9.03856 6.70308V5.69666H6.33379V20.4156ZM14.1546 3.6838H13.0643V2.59351C13.0643 2.45455 12.9516 2.3419 12.8127 2.3419H11.974C11.835 2.3419 11.7224 2.45455 11.7224 2.59351V3.6838H10.6321C10.4931 3.6838 10.3805 3.79645 10.3805 3.93541V4.7741C10.3805 4.91306 10.4931 5.0257 10.6321 5.0257H11.7224V6.116C11.7224 6.25496 11.835 6.36761 11.974 6.36761H12.8127C12.9516 6.36761 13.0643 6.25496 13.0643 6.116V5.0257H14.1546C14.2935 5.0257 14.4062 4.91306 14.4062 4.7741V3.93541C14.4062 3.79645 14.2935 3.6838 14.1546 3.6838Z"
                        fill="#393939"
                        class="header__nav--icon-path drawer__nav--icon-path"
                      />
                    </svg>
                  </div>
                  <div class="header__nav--text drawer__nav--text">当院について</div>
                  <div class="drawer__nav--arrow-right"></div>
                </a>
              </li>
              <!-- medical -->
              <li class="header__nav--item drawer__nav--item">
                <a href="./medical.html" class="header__nav--link drawer__nav--link js-drawer__nav--link">
                  <div class="header__nav--icon drawer__nav--icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path
                        d="M15 16H9C8.44771 16 8 16.4477 8 17C8 17.5523 8.44772 18 9 18H15C15.5523 18 16 17.5523 16 17C16 16.4477 15.5523 16 15 16Z"
                        fill="#393939"
                        class="header__nav--icon-path drawer__nav--icon-path"
                      />
                      <path
                        d="M9 14H12C12.5523 14 13 13.5523 13 13C13 12.4477 12.5523 12 12 12H9C8.44771 12 8 12.4477 8 13C8 13.5523 8.44772 14 9 14Z"
                        fill="#393939"
                        class="header__nav--icon-path drawer__nav--icon-path"
                      />
                      <path
                        d="M19.74 8.32994L14.3 2.32994C14.1109 2.12046 13.8422 2.00061 13.56 1.99994L6.56 1.99994C5.16268 1.98327 4.01647 3.10262 4 4.49994L4 19.4999C4.01647 20.8973 5.16268 22.0166 6.56 21.9999H17.44C18.8373 22.0166 19.9835 20.8973 20 19.4999V8.99994C19.9994 8.7521 19.9067 8.51334 19.74 8.32994L19.74 8.32994ZM14 4.99994L16.74 7.99994H14.74C14.5285 7.98717 14.3309 7.88994 14.1918 7.7301C14.0526 7.57027 13.9835 7.36122 14 7.14994L14 4.99994ZM17.44 19.9999H6.56C6.41938 20.0081 6.28128 19.96 6.17621 19.8662C6.07114 19.7724 6.00774 19.6406 6 19.4999V4.49994C6.00774 4.35929 6.07114 4.22751 6.17621 4.1337C6.28128 4.03988 6.41938 3.99175 6.56 3.99994L12 3.99994V7.14994C11.9664 8.68334 13.1769 9.95633 14.71 9.99994H18V19.4999C17.9923 19.6406 17.9289 19.7724 17.8238 19.8662C17.7187 19.96 17.5806 20.0081 17.44 19.9999Z"
                        fill="#393939"
                        class="header__nav--icon-path drawer__nav--icon-path"
                      />
                    </svg>
                  </div>
                  <div class="header__nav--text drawer__nav--text">診療案内</div>
                  <div class="drawer__nav--arrow-right"></div>
                </a>
              </li>
              <!-- staff -->
              <li class="header__nav--item drawer__nav--item">
                <a href="./staff.html" class="header__nav--link drawer__nav--link js-drawer__nav--link">
                  <div class="header__nav--icon drawer__nav--icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path
                        d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11H9ZM9 5C10.1046 5 11 5.89543 11 7C11 8.10457 10.1046 9 9 9C7.89543 9 7 8.10457 7 7C7 5.89543 7.89543 5 9 5Z"
                        fill="#393939"
                        class="header__nav--icon-path drawer__nav--icon-path"
                      />
                      <path
                        d="M17 13C18.6569 13 20 11.6569 20 10C20 8.34315 18.6569 7 17 7C15.3431 7 14 8.34315 14 10C14 11.6569 15.3431 13 17 13ZM17 9C17.5523 9 18 9.44772 18 10C18 10.5523 17.5523 11 17 11C16.4477 11 16 10.5523 16 10C16 9.44771 16.4477 9 17 9Z"
                        fill="#393939"
                        class="header__nav--icon-path drawer__nav--icon-path"
                      />
                      <path
                        d="M17 14C15.8918 14.0012 14.8155 14.3706 13.94 15.05C11.9371 13.0549 8.93071 12.4605 6.31923 13.5431C3.70775 14.6258 2.00382 17.173 2 20C2 20.5523 2.44772 21 3 21C3.55229 21 4 20.5523 4 20C4 17.2386 6.23858 15 9 15C11.7614 15 14 17.2386 14 20C14 20.5523 14.4477 21 15 21C15.5523 21 16 20.5523 16 20C16.0024 18.8284 15.7064 17.6756 15.14 16.65C16.0417 15.9375 17.2713 15.8027 18.306 16.303C19.3406 16.8033 19.9985 17.8507 20 19C20 19.5523 20.4477 20 21 20C21.5523 20 22 19.5523 22 19C22 16.2386 19.7614 14 17 14Z"
                        fill="#393939"
                        class="header__nav--icon-path drawer__nav--icon-path"
                      />
                    </svg>
                  </div>

                  <div class="header__nav--text drawer__nav--text">スタッフ紹介</div>
                  <div class="drawer__nav--arrow-right"></div>
                </a>
              </li>
              <!-- blog -->
              <li class="header__nav--item drawer__nav--item">
                <a href="./blog.html" class="header__nav--link drawer__nav--link js-drawer__nav--link">
                  <div class="header__nav--icon drawer__nav--icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path
                        d="M19.4003 7.3401L16.6603 4.6001C15.92 3.90476 14.7761 3.87466 14.0003 4.5301L5.0003 13.5301C4.67707 13.8561 4.47581 14.2833 4.4303 14.7401L4.0003 18.9101C3.97303 19.2066 4.07934 19.4999 4.2903 19.7101C4.47902 19.8973 4.7345 20.0016 5.0003 20.0001H5.0903L9.2603 19.6201C9.7171 19.5746 10.1443 19.3733 10.4703 19.0501L19.4703 10.0501C20.1976 9.28177 20.1663 8.06987 19.4003 7.34011L19.4003 7.3401ZM9.0803 17.6201L6.0803 17.9001L6.3503 14.9001L12.0003 9.3201L14.7003 12.0201L9.0803 17.6201ZM16.0003 10.6801L13.3203 8.0001L15.2703 6.0001L18.0003 8.7301L16.0003 10.6801Z"
                        fill="#393939"
                        class="header__nav--icon-path drawer__nav--icon-path"
                      />
                    </svg>
                  </div>
                  <div class="header__nav--text drawer__nav--text">スタッフブログ</div>
                  <div class="drawer__nav--arrow-right"></div>
                </a>
              </li>
              <!-- contact -->
              <li class="header__nav--item drawer__nav--item">
                <a href="./contact.html" class="header__nav--link drawer__nav--link js-drawer__nav--link">
                  <div class="header__nav--icon drawer__nav--icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path
                        d="M19 4H5C3.34315 4 2 5.34315 2 7V17C2 18.6569 3.34315 20 5 20H19C20.6569 20 22 18.6569 22 17V7C22 5.34315 20.6569 4 19 4V4ZM18.33 6L12 10.75L5.67 6H18.33ZM19 18H5C4.44772 18 4 17.5523 4 17V7.25L11.4 12.8C11.5731 12.9298 11.7836 13 12 13C12.2164 13 12.4269 12.9298 12.6 12.8L20 7.25V17C20 17.5523 19.5523 18 19 18Z"
                        fill="#393939"
                        class="header__nav--icon-path drawer__nav--icon-path"
                      />
                    </svg>
                  </div>
                  <div class="header__nav--text drawer__nav--text">お問い合わせ</div>
                  <div class="drawer__nav--arrow-right"></div>
                </a>
              </li>
            </ul>
          </nav>
          <div class="header__access">
            <div class="header__access--address">〒166-0001 東京都杉並区阿佐谷北7-3-1</div>
            <div class="header__access--tel">
              <div class="header__access--tel-number">03-1234-5678</div>
            </div>
          </div>
        </div>
      </div>
    </header>

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
                    <source media="(max-width: 1023px)" srcset="./img/top-01-sp.webp" />
                    <source media="not (max-width: 1023px)" srcset="./img/top-01.webp" />
                    <img loading="lazy" decoding="async" src="./img/top-01-sp.webp" alt="治療席画像（斜め後ろ）" width="335" height="447" />
                  </picture>
                </div>
              </li>
              <li class="swiper-slide mv__slider">
                <div class="mv__slider--img">
                  <picture>
                    <source media="(max-width: 1023px)" srcset="./img/top-02-sp.webp" />
                    <source media="not (max-width: 1023px)" srcset="./img/top-02.webp" />
                    <img loading="lazy" decoding="async" src="./img/top-02-sp.webp" alt="治療席画像（後ろ）" width="335" height="447" />
                  </picture>
                </div>
              </li>
              <li class="swiper-slide mv__slider">
                <div class="mv__slider--img">
                  <picture>
                    <source media="(max-width: 1023px)" srcset="./img/top-03-sp.webp" />
                    <source media="not (max-width: 1023px)" srcset="./img/top-03.webp" />
                    <img loading="lazy" decoding="async" src="./img/top-03-sp.webp" alt="治療席画像（横）" width="335" height="447" />
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
              src="./img/time-schedule.webp"
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
          <img loading="lazy" decoding="async" src="./img/concept-img.webp" alt="女医の丁寧な治療" width="668" height="460" />
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
              <img loading="lazy" decoding="async" src="./img/recommend-label-1.webp" alt="おすすめ01" width="177" height="33" />
            </div>
            <div class="recommend__img">
              <img loading="lazy" decoding="async" src="./img/recommend-img-1.webp" alt="歯の画像" width="220" height="220" />
            </div>
            <div class="recommend__message">痛くない歯科医療の追求</div>
            <div class="recommend__text">歯の治療において、小さな違和感は大きなストレスにつながります。 <br />私たちは常に快適な歯科医療技術の研究を行っております。</div>
          </div>
          <div class="recommend__item">
            <div class="recommend__label"><img loading="lazy" decoding="async" src="./img/recommend-label-2.webp" alt="おすすめ02" width="182" height="33" /></div>
            <div class="recommend__img"><img loading="lazy" decoding="async" src="./img/recommend-img-2.webp" alt="電車画像" width="220" height="220" /></div>
            <div class="recommend__message">駅から徒歩3分</div>
            <div class="recommend__text">「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</div>
          </div>
          <div class="recommend__item">
            <div class="recommend__label"><img loading="lazy" decoding="async" src="./img/recommend-label-3.webp" alt="おすすめ03" width="182" height="33" /></div>
            <div class="recommend__img"><img loading="lazy" decoding="async" src="./img/recommend-img-3.webp" alt="時計画像" width="220" height="220" /></div>
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
                <div class="medical__img"><img loading="lazy" decoding="async" src="./img/medical-img-1.webp" alt="歯ブラシ" width="460" height="290" /></div>
                <div class="medical__text">
                  <h3 class="medical__text--title">一般診療</h3>
                  <div class="medical__text--text">虫歯・入れ歯・小児歯科</div>
                </div>
              </a>
              <a href="./medical.html#special-practice" class="medical__item">
                <div class="medical__img"><img loading="lazy" decoding="async" src="./img/medical-img-2.webp" alt="歯茎" width="460" height="290" /></div>
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
            <li class="blog__item is-new">
              <a href="./page-name.html" class="blog__link">
                <div class="blog__img">
                  <picture>
                    <source media="(max-width: 767px)" srcset="./img/blog-img-sp.webp" />
                    <source media="not (max-width: 767px)" srcset="./img/blog-img.webp" />
                    <img loading="lazy" decoding="async" src="./img/blog-img-sp.webp" alt="レントゲンを見て診察" width="335" height="447" />
                  </picture>
                </div>
                <div class="blog__text is-other">
                  <div class="blog__title">記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。</div>
                  <time class="blog__data" datetime="2020-02-14">2020.02.14</time>
                </div>
              </a>
            </li>
            <li class="blog__item is-new">
              <a href="./page-name.html" class="blog__link is-new">
                <div class="blog__img">
                  <picture>
                    <source media="(max-width: 767px)" srcset="./img/blog-img-sp.webp" />
                    <source media="not (max-width: 767px)" srcset="./img/blog-img.webp" />
                    <img loading="lazy" decoding="async" src="./img/blog-img-sp.webp" alt="レントゲンを見て診察" width="335" height="447" />
                  </picture>
                </div>
                <div class="blog__text is-other">
                  <div class="blog__title">記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。</div>
                  <time class="blog__data" datetime="2020-02-14">2020.02.14</time>
                </div>
              </a>
            </li>
            <li class="blog__item">
              <a href="./page-name.html" class="blog__link is-new">
                <div class="blog__img">
                  <picture>
                    <source media="(max-width: 767px)" srcset="./img/blog-img-sp.webp" />
                    <source media="not (max-width: 767px)" srcset="./img/blog-img.webp" />
                    <img loading="lazy" decoding="async" src="./img/blog-img-sp.webp" alt="レントゲンを見て診察" width="335" height="447" />
                  </picture>
                </div>
                <div class="blog__text is-other">
                  <div class="blog__title">記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。</div>
                  <time class="blog__data" datetime="2020-02-14">2020.02.14</time>
                </div>
              </a>
            </li>
            <li class="blog__item">
              <a href="./page-name.html" class="blog__link is-new">
                <div class="blog__img">
                  <picture>
                    <source media="(max-width: 767px)" srcset="./img/blog-img-sp.webp" />
                    <source media="not (max-width: 767px)" srcset="./img/blog-img.webp" />
                    <img loading="lazy" decoding="async" src="./img/blog-img-sp.webp" alt="レントゲンを見て診察" width="335" height="447" />
                  </picture>
                </div>
                <div class="blog__text is-other">
                  <div class="blog__title">記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。</div>
                  <time class="blog__data" datetime="2020-02-14">2020.02.14</time>
                </div>
              </a>
            </li>
            <li class="blog__item">
              <a href="./page-name.html" class="blog__link is-new">
                <div class="blog__img">
                  <picture>
                    <source media="(max-width: 767px)" srcset="./img/blog-img-sp.webp" />
                    <source media="not (max-width: 767px)" srcset="./img/blog-img.webp" />
                    <img loading="lazy" decoding="async" src="./img/blog-img-sp.webp" alt="レントゲンを見て診察" width="335" height="447" />
                  </picture>
                </div>
                <div class="blog__text is-other">
                  <div class="blog__title">記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。</div>
                  <time class="blog__data" datetime="2020-02-14">2020.02.14</time>
                </div>
              </a>
            </li>
            <li class="blog__item">
              <a href="./page-name.html" class="blog__link is-new">
                <div class="blog__img">
                  <picture>
                    <source media="(max-width: 767px)" srcset="./img/blog-img-sp.webp" />
                    <source media="not (max-width: 767px)" srcset="./img/blog-img.webp" />
                    <img loading="lazy" decoding="async" src="./img/blog-img-sp.webp" alt="レントゲンを見て診察" width="335" height="447" />
                  </picture>
                </div>
                <div class="blog__text is-other">
                  <div class="blog__title">記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。</div>
                  <time class="blog__data" datetime="2020-02-14">2020.02.14</time>
                </div>
              </a>
            </li>
          </ul>
          <div class="blog__button">
            <a href="./blog.html" class="button button--arrow-right">スタッフブログ一覧はこちら</a>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="footer">
      <div class="footer__inner">
        <div class="footer__contents">
          <div class="footer__info">
            <div class="footer__logo">
              <a href="./index.php">
                <img loading="lazy" decoding="async" src="./img/logo.webp" alt="みなみ歯科クリニック" width="808" height="82" />
              </a>
            </div>
            <div class="footer__info--address">
              <span class="footer__info--address-number">〒166-0001</span>
              <span class="footer__info--address-text">東京都杉並区阿佐谷北7-3-1</span>
            </div>
            <div class="footer__info--tel">
              <div class="footer__info--tel-number">03-1234-5678</div>
              <div class="footer__info--tel-text">(年中無休 AM9:00〜PM22:00)</div>
            </div>
            <div class="footer__buttons">
              <a href="./reservation.html">
                <div class="button button--color-reverse button--reservation">
                  <div class="button--label">
                    <div class="button--icon">
                      <svg width="30" height="20" viewBox="0 0 30 20" fill="none">
                        <path
                          d="M26.988 6.36255H22.0414C21.4562 6.36255 20.9814 6.83733 20.9814 7.42253V16.609C20.9814 17.1942 21.4562 17.669 22.0414 17.669H26.988C27.5732 17.669 28.048 17.1942 28.048 16.609V7.42253C28.048 6.83733 27.5732 6.36255 26.988 6.36255ZM24.5147 16.9624C24.1239 16.9624 23.8081 16.6466 23.8081 16.2557C23.8081 15.8649 24.1239 15.5491 24.5147 15.5491C24.9056 15.5491 25.2214 15.8649 25.2214 16.2557C25.2214 16.6466 24.9056 16.9624 24.5147 16.9624ZM26.988 14.5774C26.988 14.7232 26.8688 14.8424 26.723 14.8424H22.3064C22.1607 14.8424 22.0414 14.7232 22.0414 14.5774V7.68753C22.0414 7.54178 22.1607 7.42253 22.3064 7.42253H26.723C26.8688 7.42253 26.988 7.54178 26.988 7.68753V14.5774Z"
                          fill="white"
                          class="button--icon-path"
                        />
                        <path
                          d="M18.1274 3H4.37522C3.61598 3 3 3.61598 3 4.37521V13.5433C3 14.3025 3.61598 14.9185 4.37522 14.9185H9.87609L9.41769 16.2937H7.35486C6.97381 16.2937 6.66725 16.6003 6.66725 16.9814C6.66725 17.3624 6.97381 17.669 7.35486 17.669H15.1478C15.5288 17.669 15.8354 17.3624 15.8354 16.9814C15.8354 16.6003 15.5288 16.2937 15.1478 16.2937H13.0849L12.6265 14.9185H18.1274C18.8866 14.9185 19.5026 14.3025 19.5026 13.5433V4.37521C19.5026 3.61598 18.8866 3 18.1274 3ZM17.669 13.0849H4.83362V4.83362H17.669V13.0849Z"
                          fill="white"
                          class="button--icon-path"
                        />
                      </svg>
                    </div>
                    <div class="button--text">WEB予約</div>
                  </div>
                </div>
              </a>
              <a href="./contact.html">
                <div class="button button--contact">
                  <div class="button--label">
                    <div class="button--icon">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                          d="M4 3.99976H20C21.1 3.99976 22 4.89976 22 5.99976V17.9998C22 19.0998 21.1 19.9998 20 19.9998H4C2.9 19.9998 2 19.0998 2 17.9998V5.99976C2 4.89976 2.9 3.99976 4 3.99976Z"
                          stroke="#1391E6"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="button--icon-path"
                        />
                        <path d="M22 6.13599L12 13.6125L2 6.13599" stroke="#1391E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="button--icon-path" />
                      </svg>
                    </div>
                    <div class="button--text">お問い合わせ</div>
                  </div>
                </div>
              </a>
            </div>
            <div class="footer__time-schedule">
              <img
                loading="lazy"
                decoding="async"
                src="./img/time-schedule.webp"
                alt="水曜日午後は休診日となります。土日祝日含め午前の診療時間は9:00〜12:00、午後の診療時間は13:00〜22:00となります。"
                width="477"
                height="166"
              />
            </div>
          </div>
          <div class="footer__map">
            <div class="footer__map--img">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1437.3938554349404!2d139.63587009327057!3d35.705251781633315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z6Zi_5L2Q44O26LC36aeF5ZGo6L6644CA55eF6Zmi!5e0!3m2!1sja!2sjp!4v1709192256670!5m2!1sja!2sjp"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="阿佐ヶ谷駅周辺　病院"
              ></iframe>
            </div>
          </div>
        </div>
        <div class="footer__links">
          <div class="footer__link--container">
            <div class="footer__link--head">
              <a href="#"><div class="footer__link--item">TOP</div></a>
            </div>
          </div>
          <div class="footer__link--container">
            <div class="footer__link--head">当院について</div>
            <div class="footer__link--body">
              <div class="footer__link--items">
                <a href="./about.html#policy-feature"><div class="footer__link--item footer__link--item-sub">ポリシーと特徴</div></a>
                <a href="./about.html#inside"><div class="footer__link--item footer__link--item-sub">当院の様子</div></a>
              </div>
            </div>
          </div>
          <div class="footer__link--container">
            <div class="footer__link--head">スタッフ紹介</div>
            <div class="footer__link--body">
              <div class="footer__link--items">
                <a href="./staff.html#greeting"><div class="footer__link--item footer__link--item-sub">院長のあいさつ</div></a>
                <a href="./staff.html#introduction"><div class="footer__link--item footer__link--item-sub">スタッフ</div></a>
                <a href="./blog.html"><div class="footer__link--item footer__link--item-sub">スタッフブログ</div></a>
              </div>
            </div>
          </div>
          <div class="footer__link--container">
            <div class="footer__link--head">診療内容</div>
            <div class="footer__link--body">
              <div class="footer__link--items">
                <a href="./medical.html#general-dental"><div class="footer__link--item footer__link--item-sub">一般歯科</div></a>
                <a href="./medical.html#children-dental"><div class="footer__link--item footer__link--item-sub">小児歯科</div></a>
                <a href="./medical.html#preventive-dental"><div class="footer__link--item footer__link--item-sub">予防歯科</div></a>
                <a href="./medical.html#dentures"><div class="footer__link--item footer__link--item-sub">入れ歯</div></a>
              </div>
              <div class="footer__link--items">
                <a href="./medical.html#orthodontics"><div class="footer__link--item footer__link--item-sub">矯正歯科</div></a>
                <a href="./medical.html#teeth-whitening"><div class="footer__link--item footer__link--item-sub">ホワイトニング</div></a>
                <a href="./medical.html#oral-surgery"><div class="footer__link--item footer__link--item-sub">口腔外科</div></a>
                <a href="./medical.html#laser-treatment"><div class="footer__link--item footer__link--item-sub">レーザー治療</div></a>
              </div>
            </div>
          </div>
          <div class="footer__link--container">
            <div class="footer__link--head">お問い合わせ</div>
            <div class="footer__link--body">
              <div class="footer__link--items">
                <a href="./contact.html"><div class="footer__link--item footer__link--item-sub">お問い合わせフォーム</div></a>
                <a href="./reservation.html"><div class="footer__link--item footer__link--item-sub">WEB予約</div></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <small class="footer__copy">&copy;2020-2021 みなみ歯科クリニック</small>

      <!-- footer nav -->
      <div class="footer__nav">
        <div class="footer__info--tel">
          <div class="footer__info--tel-number footer__nav-info--tel-number">03-1234-5678</div>
          <div class="footer__info--tel-text footer__nav-info--tel-text">(年中無休 AM9:00〜PM22:00)</div>
        </div>

        <a href="./reservation.html" class="button--reservation button button--color-reverse">
          <div class="button--label">
            <div class="button--icon">
              <svg width="46" height="28" viewBox="0 0 46 28" fill="none">
                <path
                  d="M42.6329 6.83838H34.0469C33.0311 6.83838 32.207 7.66277 32.207 8.67887V24.6298C32.207 25.6459 33.0311 26.4703 34.0469 26.4703H42.6329C43.6487 26.4703 44.4728 25.6459 44.4728 24.6298V8.67887C44.4728 7.66277 43.6487 6.83838 42.6329 6.83838ZM38.3399 25.2433C37.6615 25.2433 37.1133 24.695 37.1133 24.0163C37.1133 23.3377 37.6615 22.7893 38.3399 22.7893C39.0184 22.7893 39.5665 23.3377 39.5665 24.0163C39.5665 24.695 39.0184 25.2433 38.3399 25.2433ZM42.6329 21.1022C42.6329 21.3553 42.4259 21.5623 42.173 21.5623H34.5069C34.2539 21.5623 34.0469 21.3553 34.0469 21.1022V9.139C34.0469 8.88593 34.2539 8.67887 34.5069 8.67887H42.173C42.4259 8.67887 42.6329 8.88593 42.6329 9.139V21.1022Z"
                  fill="white"
                  class="button--icon-path"
                />
                <path
                  d="M27.2524 1H3.38214C2.06431 1 0.995117 2.06956 0.995117 3.38785V19.3068C0.995117 20.6251 2.06431 21.6947 3.38214 21.6947H12.9303L12.1346 24.0825H8.55403C7.89263 24.0825 7.36052 24.6148 7.36052 25.2765C7.36052 25.9381 7.89263 26.4704 8.55403 26.4704H22.0805C22.7419 26.4704 23.274 25.9381 23.274 25.2765C23.274 24.6148 22.7419 24.0825 22.0805 24.0825H18.5L17.7043 21.6947H27.2524C28.5702 21.6947 29.6394 20.6251 29.6394 19.3068V3.38785C29.6394 2.06956 28.5702 1 27.2524 1ZM26.4567 18.5109H4.17782V4.1838H26.4567V18.5109Z"
                  fill="white"
                  class="button--icon-path"
                />
              </svg>
            </div>
            <div class="button--text">WEB予約<br /><span>はこちら</span></div>
          </div>
        </a>
      </div>

      <!-- totop -->
      <div class="footer__pagetop">
        <a href="#" aria-label="Go to top">
          <img loading="lazy" decoding="async" src="./img/totop.webp" alt="topへ戻るボタン" width="56" height="56" />
        </a>
      </div>
    </footer>
  </body>
</html>
