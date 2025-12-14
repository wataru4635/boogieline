<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!---------  header  --------->

  <header class="header">
    <div class="header__inner">
      <div class="header__nav-wrap">
        <nav class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-item"><a href="<?php echo HOME_URL; ?>" class="header__nav-link">アーティスト紹介</a></li>
            <li class="header__nav-item"><a href="<?php echo HOME_URL; ?>" class="header__nav-link">レッスン料金</a></li>
            <li class="header__nav-item"><a href="<?php echo HOME_URL; ?>" class="header__nav-link">ブギーラインとは</a></li>
          </ul>
        </nav>
      </div>
      <a href="<?php echo HOME_URL; ?>" class="header__logo-link">
        <?php $logo_tag = (is_front_page() || is_home()) ? 'h1' : 'div'; ?>
        <<?php echo esc_html($logo_tag); ?> class="header__logo">
          <img src="<?php echo IMAGEPATH; ?>/common/logo.svg" alt="Boogie Lineのロゴ" class="header__logo-img header__logo-img--default" width="103.477" height="30" loading="eager" fetchpriority="high">
          <?php if (is_front_page()): ?>
          <img src="<?php echo IMAGEPATH; ?>/common/logo-white.svg" alt="" class="header__logo-img header__logo-img--white" width="103.477" height="30" loading="eager" aria-hidden="true">
          <?php endif; ?>
        </<?php echo esc_html($logo_tag); ?>>
      </a>
      <div class="header__right-link-wrap">
        <a href="#" class="header__my-page-link">
          <span class="header__my-page-link-text">MY PAGE</span>
          <span class="header__my-page-link-icon">
            <img src="<?php echo IMAGEPATH; ?>/common/my-page-icon.svg" alt="MY PAGEのアイコン" width="29" height="28" loading="eager" fetchpriority="high" class="header__my-page-link-icon-img">
          </span>
        </a>
        <button class="header__hamburger-btn js-hamburger" type="button" aria-label="メニューを開く">
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
    <div class="header__pc-drawer pc-drawer">
      <div class="pc-drawer__content">
        <div class="pc-drawer__content-badge">
          <img src="<?php echo IMAGEPATH; ?>/common/badge.webp" alt="BOOGIE LINE開設記念" width="103.477" height="30" class="pc-drawer__content-badge-img">
        </div>
        <div class="pc-drawer__content-left">
          <div class="pc-drawer__content-left-inner">
            <h2 class="pc-drawer__content-left-title">GOODS &amp; SHOP</h2>
            <p class="pc-drawer__lead">オリジナルグッズ、ローンチ予定！</p>
            <div class="pc-drawer__goods-img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/common/goods-items.webp" alt="BOOGIE LINEオリジナルグッズ" width="682" height="312" class="pc-drawer__goods-img">
            </div>
            <div class="pc-drawer__goods-btn-wrap">
              <a href="#" class="pc-drawer__goods-btn">SHOPを見る</a>
            </div>
          </div>
        </div>
        <div class="pc-drawer__content-right">
          <div class="pc-drawer__content-right-inner">
            <a href="<?php echo HOME_URL; ?>" class="pc-drawer__content-right-logo-link">
              <img src="<?php echo IMAGEPATH; ?>/common/logo.svg" alt="Boogie Lineのロゴ" width="103.477" height="30" class="pc-drawer__content-right-logo-img">
            </a>
            <div class="pc-drawer__nav">
              <ul class="pc-drawer__nav-list">
                <li class="pc-drawer__nav-item">
                  <a href="#" class="pc-drawer__nav-link">
                    <p class="pc-drawer__nav-title pc-drawer__nav-title--artist">ARTIST</p>
                  </a>
                  <ul class="pc-drawer__nav-sub-list">
                    <li class="pc-drawer__nav-sub-item">
                      <a href="#" class="pc-drawer__nav-sub-link">GUITAR</a>
                    </li>
                    <li class="pc-drawer__nav-sub-item">
                      <a href="#" class="pc-drawer__nav-sub-link">BASS</a>
                    </li>
                    <li class="pc-drawer__nav-sub-item">
                      <a href="#" class="pc-drawer__nav-sub-link">PIANO・KEYS</a>
                    </li>
                    <li class="pc-drawer__nav-sub-item">
                      <a href="#" class="pc-drawer__nav-sub-link">DRUMS</a>
                    </li>
                    <li class="pc-drawer__nav-sub-item">
                      <a href="#" class="pc-drawer__nav-sub-link">MPS</a>
                    </li>
                    <li class="pc-drawer__nav-sub-item">
                      <a href="#" class="pc-drawer__nav-sub-link">DANCE</a>
                    </li>
                  </ul>
                </li>
                <li class="pc-drawer__nav-item">
                  <a href="#" class="pc-drawer__nav-link">
                    <p class="pc-drawer__nav-title">SYSTEM &amp; PRICE</p>
                    <p class="pc-drawer__nav-text">システム＆レッスン料金</p>
                  </a>
                </li>
              </ul>
              <ul class="pc-drawer__nav-pair-area">
                <li class="pc-drawer__nav-pair">
                  <a href="#" class="pc-drawer__nav-link">
                    <p class="pc-drawer__nav-title">FAQ</p>
                    <p class="pc-drawer__nav-text">よくある質問</p>
                  </a>
                </li>
                <li class="pc-drawer__nav-pair">
                  <a href="#" class="pc-drawer__nav-link">
                    <p class="pc-drawer__nav-title">INTERVIEW</p>
                    <p class="pc-drawer__nav-text">アーティストインタビュー</p>
                  </a>
                </li>
                <li class="pc-drawer__nav-pair">
                  <a href="#" class="pc-drawer__nav-link">
                    <p class="pc-drawer__nav-title">GOODS &amp; SHOP</p>
                    <p class="pc-drawer__nav-text">オリジナルグッズ紹介</p>
                  </a>
                </li>
                <li class="pc-drawer__nav-pair">
                  <a href="#" class="pc-drawer__nav-link">
                    <p class="pc-drawer__nav-title">CONTACT</p>
                    <p class="pc-drawer__nav-text">お問い合わせ</p>
                  </a>
                </li>
              </ul>
            </div>
            <div class="pc-drawer__content-right-btn-wrap">
              <a href="#" class="pc-drawer__content-right-btn">会員登録する</a>
            </div>
            <ul class="pc-drawer__content-right-sns-list">
              <li class="pc-drawer__content-right-sns-item">
                <a href="#" class="pc-drawer__content-right-sns-link">
                  <img src="<?php echo IMAGEPATH; ?>/common/instagram-icon.webp" alt="Instagramのアイコン" width="46" height="46" class="pc-drawer__content-right-sns-img">
                </a>
              </li>
              <li class="pc-drawer__content-right-sns-item">
                <a href="#" class="pc-drawer__content-right-sns-link">
                  <img src="<?php echo IMAGEPATH; ?>/common/youtube-icon.webp" alt="YouTubeのアイコン" width="46" height="46" class="pc-drawer__content-right-sns-img">
                </a>
              </li>
              <li class="pc-drawer__content-right-sns-item">
                <a href="#" class="pc-drawer__content-right-sns-link">
                  <img src="<?php echo IMAGEPATH; ?>/common/line-icon.webp" alt="LINEのアイコン" width="46" height="46" class="pc-drawer__content-right-sns-img">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header__sp-drawer sp-drawer">
      <div class="sp-drawer__content">
        <div class="sp-drawer__content-inner">
          <div class="sp-drawer__content-logo-wrap">
            <img src="<?php echo IMAGEPATH; ?>/common/large-logo.svg" alt="Boogie Lineのロゴ" width="103.477" height="30" class="sp-drawer__content-logo-img">
          </div>
          <div class="sp-drawer__content-nav-wrap">
            <ul class="sp-drawer__content-nav-list">
              <li class="sp-drawer__content-nav-item">
                <a href="#" class="sp-drawer__content-nav-link">ARTIST</a>
                <ul class="sp-drawer__content-nav-sub-list">
                  <li class="sp-drawer__content-nav-sub-item">
                    <a href="#" class="sp-drawer__content-nav-sub-link">GUITAR</a>
                  </li>
                  <li class="sp-drawer__content-nav-sub-item">
                    <a href="#" class="sp-drawer__content-nav-sub-link">BASS</a>
                  </li>
                  <li class="sp-drawer__content-nav-sub-item">
                    <a href="#" class="sp-drawer__content-nav-sub-link">PIANO・KEYS</a>
                  </li>
                  <li class="sp-drawer__content-nav-sub-item">
                    <a href="#" class="sp-drawer__content-nav-sub-link">DRUMS</a>
                  </li>
                  <li class="sp-drawer__content-nav-sub-item">
                    <a href="#" class="sp-drawer__content-nav-sub-link">MPS</a>
                  </li>
                  <li class="sp-drawer__content-nav-sub-item">
                    <a href="#" class="sp-drawer__content-nav-sub-link">DANCE</a>
                  </li>
                </ul>
              </li>
              <li class="sp-drawer__content-nav-item">
                <a href="#" class="sp-drawer__content-nav-link">SYSTEM &amp; PRICE</a>
                <p class="sp-drawer__content-nav-text">システム＆レッスン料金</p>
              </li>
              <li class="sp-drawer__content-nav-item">
                <a href="#" class="sp-drawer__content-nav-link">FAQ</a>
                <p class="sp-drawer__content-nav-text">よくある質問</p>
              </li>
              <li class="sp-drawer__content-nav-item">
                <a href="#" class="sp-drawer__content-nav-link">GOODS &amp; SHOP</a>
                <p class="sp-drawer__content-nav-text">オリジナルグッズ紹介</p>
              </li>
              <li class="sp-drawer__content-nav-item">
                <a href="#" class="sp-drawer__content-nav-link">INTERVIEW</a>
                <p class="sp-drawer__content-nav-text">アーティストインタビュー</p>
              </li>
              <li class="sp-drawer__content-nav-item">
                <a href="#" class="sp-drawer__content-nav-link">CONTACT</a>
                <p class="sp-drawer__content-nav-text">お問い合わせ</p>
              </li>
            </ul>
          </div>
          <ul class="sp-drawer__content-sns-list">
            <li class="sp-drawer__content-sns-item">
              <a href="#" class="sp-drawer__content-sns-link">
                <img src="<?php echo IMAGEPATH; ?>/common/instagram-icon.webp" alt="Instagramのアイコン" width="46" height="46" class="sp-drawer__content-sns-img">
              </a>
            </li>
            <li class="sp-drawer__content-sns-item">
              <a href="#" class="sp-drawer__content-sns-link">
                <img src="<?php echo IMAGEPATH; ?>/common/youtube-icon.webp" alt="YouTubeのアイコン" width="46" height="46" class="sp-drawer__content-sns-img">
              </a>
            </li>
            <li class="sp-drawer__content-sns-item">
              <a href="#" class="sp-drawer__content-sns-link">
                <img src="<?php echo IMAGEPATH; ?>/common/line-icon.webp" alt="LINEのアイコン" width="46" height="46" class="sp-drawer__content-sns-img">
              </a>
            </li>
          </ul>
          <div class="sp-drawer__content-btn-wrap">
            <a href="#" class="sp-drawer__content-btn">会員登録する</a>
          </div>
        </div>
      </div>
    </div>
  </header>