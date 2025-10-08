<?php
// ==========================================================================
// TOP：オープニング
// ==========================================================================
add_action('wp_head', function () {
  if ( !is_front_page() ) return;

  echo "<script>
    (function(){
      if (!sessionStorage.getItem('opening_played')) {
        document.documentElement.classList.add('is-opening');
      } else {
        document.documentElement.insertAdjacentHTML('beforeend','<style>#js-opening{display:none!important;}</style>');
      }
    })();
  </script>";

  echo '<style>
    .header__logo-img--white,
    .header__symbol-img--white { display:none; }

    html.is-opening .header { background:transparent; }
    html.is-opening .header__logo-img--default,
    html.is-opening .header__symbol-img--default { display:none; }
    html.is-opening .header__logo-img--white,
    html.is-opening .header__symbol-img--white { display:inline; }
  </style>';

  echo '<link rel="preload" as="image" href="' . esc_url(IMAGEPATH) . '/common/logo-white.svg">';
  echo '<link rel="preload" as="image" href="' . esc_url(IMAGEPATH) . '/common/symbol-white.svg">';
}, 1);
