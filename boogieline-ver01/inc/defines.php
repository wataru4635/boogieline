<?php
// ==========================================================================
// 定義
// ==========================================================================

/* ---------- パスの短縮 ---------- */
define('IMAGEPATH', get_template_directory_uri() . '/assets/images');
define('VIDEOPATH', get_template_directory_uri() . '/assets/video');

/* ---------- 各ページのリンク ---------- */
define('HOME_URL',  esc_url(home_url('/')));  // トップページ