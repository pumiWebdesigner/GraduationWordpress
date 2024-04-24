<!DOCTYPE html>

<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- nodndexの記載 -->
    <meta name="robots" content="noindex" />
    <!-- twitterｶｰﾄﾞ,OGP -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@pumiWebcoder" />
    <meta property="og:url" content="http://pumiwebcoder.xsrv.jp/" />
    <meta property="og:title" content="みなみ歯科クリニック" />
    <meta property="og:description" content="みなみ歯科クリニックです。街の皆さまの笑顔を守るアットホームな歯医者さんです。" />
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/favicon.webp" />
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.webp" type="image/png" />
    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500;700&display=swap" rel="stylesheet" />
    <?php wp_head(); ?>
  </head>

  <body>
    <!-- header -->
    <header class="header">
      <div class="header__inner">
        <h1 class="header__logo">
          <a href="./index.php">
            <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri() ?>/img/logo.webp" alt="みなみ歯科クリニック" width="808" height="82" />
          </a>
        </h1>
        <div class="header__nav--contents">
          <button id="js-drawer__btn" class="header__hamburger--button" aria-label="ハンバーガーメニュー">
            <span class="drawer-bar"></span>
            <span class="drawer-bar"></span>
            <span class="drawer-bar"></span>
          </button>
          <nav class="header__nav">
            <?php
              wp_nav_menu(
                array(
                  'depth' => 1,
                  'theme_location' => 'global',
                  'container' => '',
                  'menu_class' => 'header__nav--list'
                )
              );
            ?>
          </nav>
          <nav class="drawer__nav">
            <?php
              wp_nav_menu(
                array(
                  'depth' => 1,
                  'theme_location' => 'drawer', // ドロワーメニューをここに表示すると指定
                  'container' => '',
                  'menu_class' => 'drawer__nav--list'
                )
              );
            ?>
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

    <div class="test" style="display:none;">
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
    </div>