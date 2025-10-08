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
        <a href="<?php echo HOME_URL; ?>" class="header__symbol-wrap">
          <img src="<?php echo IMAGEPATH; ?>/common/symbol.svg" alt="音符をモチーフにしたシンボル"
            class="header__symbol-img header__symbol-img--default" width="40" height="40" loading="eager"
            fetchpriority="high">
          <?php if (is_front_page()): ?>
          <img src="<?php echo IMAGEPATH; ?>/common/symbol-white.svg" alt=""
            class="header__symbol-img header__symbol-img--white" width="40" height="40" loading="eager"
            aria-hidden="true">
          <?php endif; ?>
        </a>
        <nav class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-item"><a href="<?php echo HOME_URL; ?>" class="header__nav-link">about</a></li>
            <li class="header__nav-item"><a href="<?php echo HOME_URL; ?>" class="header__nav-link">artist</a></li>
          </ul>
        </nav>
      </div>
      <a href="<?php echo HOME_URL; ?>" class="header__logo-link">
        <?php $logo_tag = (is_front_page() || is_home()) ? 'h1' : 'div'; ?>
        <<?php echo $logo_tag; ?> class="header__logo">
          <img src="<?php echo IMAGEPATH; ?>/common/logo.svg" alt="Boogie Lineのロゴ"
            class="header__logo-img header__logo-img--default" width="103.477" height="30" loading="eager"
            fetchpriority="high">
          <?php if (is_front_page()): ?>
          <img src="<?php echo IMAGEPATH; ?>/common/logo-white.svg" alt=""
            class="header__logo-img header__logo-img--white" width="103.477" height="30" loading="eager"
            aria-hidden="true">
          <?php endif; ?>
        </<?php echo $logo_tag; ?>>
      </a>
      <button class="header__hamburger-btn js-hamburger" type="button" aria-label="メニューを開く">
        <span></span>
        <span></span>
      </button>
    </div>
  </header>