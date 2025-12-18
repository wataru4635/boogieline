<?php
// ==========================================================================
// 定義
// ==========================================================================

/* ---------- パスの短縮 ---------- */
define('IMAGEPATH', get_template_directory_uri() . '/assets/images');
define('VIDEOPATH', get_template_directory_uri() . '/assets/video');

/* ---------- 各ページのリンク ---------- */
define('HOME_URL',  esc_url(home_url('/')));  // トップページ

// メインページ
define('ARTIST_URL', esc_url(home_url('/artist/')));  // アーティスト紹介
define('ABOUT_URL', esc_url(home_url('/about/')));  // ブギーラインとは
define('SYSTEM_URL', esc_url(home_url('/system/')));  // システム・レッスン料金
define('FAQ_URL', esc_url(home_url('/faq/')));  // よくあるご質問
define('GOODS_URL', esc_url(home_url('/goods/')));  // GOODS & SHOP
define('INTERVIEW_URL', esc_url(home_url('/interview/')));  // INTERVIEW

// 会員登録・ログイン
define('REGISTER_URL', esc_url(home_url('/register/')));  // 無料会員登録
define('GUIDANCE_URL', esc_url(home_url('/guidance/')));  // レッスン前ガイダンス申込み
define('MEMBERSHIP_URL', esc_url(home_url('/membership/')));  // メンバーシップ登録画面
define('MYPAGE_URL', esc_url(home_url('/mypage/')));  // マイページ（ログイン画面）

// お問合せ・企業情報
define('CONTACT_URL', esc_url(home_url('/contact/')));  // お問合せ
define('COMPANY_URL', esc_url(home_url('/company/')));  // 会社概要
define('PRIVACY_URL', esc_url(home_url('/privacy-policy/')));  // プライバシーポリシー
define('TOKUSHOHO_URL', esc_url(home_url('/tokushoho/')));  // 特定商取引法に基づく表記