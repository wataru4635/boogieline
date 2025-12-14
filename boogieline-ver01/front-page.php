<?php
/*
* Template Name: トップページ
*/
?>
<?php get_header(); ?>

<main>

  <section class="pickup">
    <div class="pickup__inner inner">
      <h2 class="pickup__title section-title js-section-title-split">PICK&nbsp;UP</h2>
      <ul class="pickup__list">
        <li class="pickup__item js-fade-up">
          <a href="#" class="pickup__link">
            <div class="pickup__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya.webp" alt="竹村郁哉の写真" width="225" height="225"
                loading="lazy" class="pickup__img">
              <div class="pickup__img-wrap-new">
                <img src="<?php echo IMAGEPATH; ?>/common/new-icon.svg" alt="newと書かれたアイコン" width="95" height="95"
                  loading="lazy" class="pickup__img-new">
              </div>
            </div>
            <div class="pickup__content">
              <p class="pickup__content-title">インタビューを公開しました！</p>
              <p class="pickup__content-name">竹村郁哉（yogee new waves）</p>
            </div>
          </a>
        </li>

        <li class="pickup__item js-fade-up --delay-1">
          <a href="#" class="pickup__link">
            <div class="pickup__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/boogieline_tote.webp" alt="Boogie Lineのオリジナルトートバッグ" width="225"
                height="225" loading="lazy" class="pickup__img">
            </div>
            <div class="pickup__content">
              <p class="pickup__content-title">Boogie Lineのオリジナルトートバッグが完成！</p>
            </div>
          </a>
        </li>

        <li class="pickup__item js-fade-up --delay-2">
          <a href="#" class="pickup__link">
            <div class="pickup__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/artist/kodera_ryota.webp" alt="小宮良太の写真" width="225" height="225"
                loading="lazy" class="pickup__img">
            </div>
            <div class="pickup__content">
              <p class="pickup__content-title">インタビューを公開しました！</p>
              <p class="pickup__content-name">小寺良太（椿屋四重奏,ザ・ぶどうかんズ）</p>
            </div>
          </a>
        </li>

        <li class="pickup__item js-fade-up --delay-3">
          <a href="#" class="pickup__link">
            <div class="pickup__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko.webp" alt="仰木亮彦の写真" width="225" height="225"
                loading="lazy" class="pickup__img">
            </div>
            <div class="pickup__content">
              <p class="pickup__content-title">インタビューを公開しました！</p>
              <p class="pickup__content-name">仰木 亮彦（ex.在日ファンク,STUTS）</p>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="lesson">
    <div class="lesson__inner inner">
      <h2 class="lesson__title section-title js-section-title-split">ONLINE&nbsp;LESSON</h2>
      <div class="lesson__content">
        <h3 class="lesson__lead">自宅にいながら<br>最高のレッスンを受けよう</h3>

        <div class="lesson__img-desc-wrap">
          <div class="lesson__img-wrap js-fade-up">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/lesson-illust-sp.webp" media="(max-width: 767px)"
                type="image/webp" width="238" height="272">
              <img class="lesson__img" src="<?php echo IMAGEPATH; ?>/top/lesson-illust.webp" alt="オンラインレッスン中の人物のイラスト"
                width="479" height="440" loading="lazy" class="lesson__img">
            </picture>
          </div>

          <div class="lesson__desc">
            <p class="lesson__text">
              所属アーティストからオンラインで1対1のレッスンを受けられます。<br>レッスンの予約や、ZOOM・インターフェイス設定、月謝の振込、コミュニケーションなど、Boogie
              Lineがサポートすることで、スムーズに進行します。</p>
            <p class="lesson__note">※アーティストによっては、希望するレッスン内容に関して審査が行われる場合があります。<br>※レッスンを受ける際は、当社のポリシーを遵守いただく必要があります。</p>
          </div>
        </div>
      </div>

      <div class="lesson__media">
        <div class="lesson__video-wrap">
          <video class="lesson__video" src="<?php echo VIDEOPATH; ?>/lesson-scene.mp4" autoplay muted loop
            playsinline></video>
          <span class="lesson__badge">#音楽のある日常</span>
          <div class="lesson__illust-deco lesson__illust-deco--01 js-bounce-in">
            <img src="<?php echo IMAGEPATH; ?>/top/lesson-illust-deco01.webp" class="lesson__illust-deco-img" alt=""
              width="173" height="173" loading="lazy" aria-hidden="true">
          </div>
          <div class="lesson__illust-deco lesson__illust-deco--02 js-bounce-in">
            <img src="<?php echo IMAGEPATH; ?>/top/lesson-illust-deco02.webp" class="lesson__illust-deco-img" alt=""
              width="288" height="198" loading="lazy" aria-hidden="true">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="top-artist">
    <div class="top-artist__inner">
      <h2 class="top-artist__title section-title js-section-title-split">ARTIST</h2>
      <h3 class="top-artist__subtitle">音楽に愛されてきた<br>アーティストたちと繋がろう</h3>

      <div class="swiper top-artist__swiper js-artist-swiper">
        <ul class="swiper-wrapper top-artist__slides">

          <!-- アーティスト画像スライダー（1セット目） -->
          <!-- 仰木 亮彦 -->
          <li class="swiper-slide top-artist__slide">
            <a href="#" class="top-artist-card">
              <div class="top-artist-card__img-wrap">
                <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp" alt="仰木亮彦のアーティスト写真" width="311.51"
                  height="311.51" loading="lazy" class="top-artist-card__img">
              </div>
              <div class="top-artist-card__body">
                <p class="top-artist-card__name">仰木亮彦</p>
                <p class="top-artist-card__meta">ex.在日ファンク<br><span
                    class="top-artist-card__meta-sub">STUTS／赤えんぴつ／butaji</span></p>
                <ul class="top-artist-card__tags">
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Part</span>
                    <span class="top-artist-card__tag-text">Guitar</span>
                  </li>
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Genre</span>
                    <span class="top-artist-card__tag-text">Rock</span>
                  </li>
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Level</span>
                    <span class="top-artist-card__tag-text">Beginner〜Advanced</span>
                  </li>
                </ul>
              </div>
            </a>
          </li>

          <!-- 竹村郁哉 -->
          <li class="swiper-slide top-artist__slide">
            <a href="#" class="top-artist-card">
              <div class="top-artist-card__img-wrap">
                <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" alt="竹村郁哉（Yogee New Waves）のアーティスト写真"
                  width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
              </div>
              <div class="top-artist-card__body">
                <p class="top-artist-card__name">竹村郁哉</p>
                <p class="top-artist-card__meta">Yogee New Waves</p>
                <ul class="top-artist-card__tags">
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Part</span>
                    <span class="top-artist-card__tag-text">Guitar</span>
                  </li>
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Genre</span>
                    <span class="top-artist-card__tag-text">Rock</span>
                  </li>
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Level</span>
                    <span class="top-artist-card__tag-text">Beginner〜Advanced</span>
                  </li>
                </ul>
              </div>
            </a>
          </li>

          <!-- Boxer -->
          <li class="swiper-slide top-artist__slide">
            <a href="#" class="top-artist-card">
              <div class="top-artist-card__img-wrap">
                <img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp" alt="Boxerのアーティスト写真" width="311.51"
                  height="311.51" loading="lazy" class="top-artist-card__img">
              </div>
              <div class="top-artist-card__body">
                <p class="top-artist-card__name">Boxer</p>
                <p class="top-artist-card__meta">Makara<br><span class="top-artist-card__meta-sub">Nulbarich</span></p>
                <ul class="top-artist-card__tags">
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Part</span>
                    <span class="top-artist-card__tag-text">Guitar</span>
                  </li>
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Genre</span>
                    <span class="top-artist-card__tag-text">Rock</span>
                  </li>
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Level</span>
                    <span class="top-artist-card__tag-text">Beginner〜Advanced</span>
                  </li>
                </ul>
              </div>
            </a>
          </li>

          <!-- アーティスト画像スライダー（2セット目）：シームレスなループ表示のための複製 -->
          <!-- 仰木 亮彦 -->
          <li class="swiper-slide top-artist__slide">
            <a href="#" class="top-artist-card">
              <div class="top-artist-card__img-wrap">
                <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp" alt="仰木亮彦のアーティスト写真" width="311.51"
                  height="311.51" loading="lazy" class="top-artist-card__img">
              </div>
              <div class="top-artist-card__body">
                <p class="top-artist-card__name">仰木亮彦</p>
                <p class="top-artist-card__meta">ex.在日ファンク<br><span
                    class="top-artist-card__meta-sub">STUTS／赤えんぴつ／butaji</span></p>
                <ul class="top-artist-card__tags">
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Part</span>
                    <span class="top-artist-card__tag-text">Guitar</span>
                  </li>
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Genre</span>
                    <span class="top-artist-card__tag-text">Rock</span>
                  </li>
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Level</span>
                    <span class="top-artist-card__tag-text">Beginner〜Advanced</span>
                  </li>
                </ul>
              </div>
            </a>
          </li>

          <!-- 竹村郁哉 -->
          <li class="swiper-slide top-artist__slide">
            <a href="#" class="top-artist-card">
              <div class="top-artist-card__img-wrap">
                <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" alt="竹村郁哉（Yogee New Waves）のアーティスト写真"
                  width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
              </div>
              <div class="top-artist-card__body">
                <p class="top-artist-card__name">竹村郁哉</p>
                <p class="top-artist-card__meta">Yogee New Waves</p>
                <ul class="top-artist-card__tags">
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Part</span>
                    <span class="top-artist-card__tag-text">Guitar</span>
                  </li>
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Genre</span>
                    <span class="top-artist-card__tag-text">Rock</span>
                  </li>
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Level</span>
                    <span class="top-artist-card__tag-text">Beginner〜Advanced</span>
                  </li>
                </ul>
              </div>
            </a>
          </li>

          <!-- Boxer -->
          <li class="swiper-slide top-artist__slide">
            <a href="#" class="top-artist-card">
              <div class="top-artist-card__img-wrap">
                <img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp" alt="Boxerのアーティスト写真" width="311.51"
                  height="311.51" loading="lazy" class="top-artist-card__img">
              </div>
              <div class="top-artist-card__body">
                <p class="top-artist-card__name">Boxer</p>
                <p class="top-artist-card__meta">Makara<br><span class="top-artist-card__meta-sub">Nulbarich</span></p>
                <ul class="top-artist-card__tags">
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Part</span>
                    <span class="top-artist-card__tag-text">Guitar</span>
                  </li>
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Genre</span>
                    <span class="top-artist-card__tag-text">Rock</span>
                  </li>
                  <li class="top-artist-card__tag">
                    <span class="top-artist-card__tag-chip">Level</span>
                    <span class="top-artist-card__tag-text">Beginner〜Advanced</span>
                  </li>
                </ul>
              </div>
            </a>
          </li>

        </ul>
        <div class="swiper-button-next top-artist__swiper-button-next"><img
            src="<?php echo IMAGEPATH; ?>/common/slider-arrow-left.svg" alt="左にスライドする矢印" width="80" height="80"
            loading="lazy"></div>
        <div class="swiper-button-prev top-artist__swiper-button-prev"><img
            src="<?php echo IMAGEPATH; ?>/common/slider-arrow-right.svg" alt="右にスライドする矢印" width="80" height="80"
            loading="lazy"></div>
      </div>

      <div class="swiper top-artist__loop-swiper js-artist-loop-swiper">
        <ul class="swiper-wrapper top-artist__loop-slides">
          <!-- アーティスト画像スライダー（1セット目）：無限ループ用に同じ内容を2セット配置 -->
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp"
              alt="仰木亮彦のアーティスト写真" width="188" height="188"></li>
          <li class="swiper-slide top-artist__loop-slide"><img
              src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" alt="竹村郁哉（Yogee New Waves）のアーティスト写真" width="188" height="188"></li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp"
              alt="Boxerのアーティスト写真" width="188" height="188">
          </li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/shogun_beatz.webp"
              alt="SHOGUN BEATZのアーティスト写真" width="188" height="188"></li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/iwami_keigo.webp"
              alt="岩見慶悟のアーティスト写真" width="188" height="188"></li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/hayami_dan.webp"
              alt="速水丹のアーティスト写真" width="188" height="188"></li>
          <!-- アーティスト画像スライダー（2セット目）：シームレスなループ表示のための複製 -->
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp"
              width="188" height="188" aria-hidden="true"></li>
          <li class="swiper-slide top-artist__loop-slide"><img
              src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" width="188" height="188" aria-hidden="true">
          </li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp"
              width="188" height="188" aria-hidden="true">
          </li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/shogun_beatz.webp"
              width="188" height="188" aria-hidden="true"></li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/iwami_keigo.webp"
              width="188" height="188" aria-hidden="true"></li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/hayami_dan.webp"
              width="188" height="188" aria-hidden="true"></li>
        </ul>
      </div>
      <div class="top-artist__link-wrap">
        <a href="#" class="link-more">
          → ALL ARTIST
        </a>
      </div>
    </div>
  </section>

  <section class="flow">
    <div class="flow__inner inner">
      <h2 class="flow__title section-title js-section-title-split">FLOW</h2>
      <h3 class="flow__lead">レッスンまでの流れ</h3>
      <div class="flow__img-wrap js-bounce-in">
        <img src="<?php echo IMAGEPATH; ?>/top/flow-illust.webp" alt="オンラインレッスンの流れを考えるキャラクターのイラスト" width="270"
          height="280" loading="lazy" class="flow__img">
      </div>
      <ol class="flow__list">
        <li class="flow__item js-fade-up">
          <div class="flow__step">
            <span class="flow__step-num">
              <span class="flow__step-label">STEP</span>
              <span class="flow__step-count">1</span>
            </span>
            <div class="flow__step-body">
              <p class="flow__step-title">会員登録する</p>
              <p class="flow__step-text">
              会員登録ボタンより、入会フォームに必要な情報をご入力ください。
              </p>
            </div>
          </div>
          <p class="flow__note">※入会に際しては、当レーベルのポリシーに同意・遵守いただくことが必須となります。</p>
        </li>

        <li class="flow__item js-fade-up">
          <div class="flow__step">
            <span class="flow__step-num">
              <span class="flow__step-label">STEP</span>
              <span class="flow__step-count">2</span>
            </span>
            <div class="flow__step-body">
              <p class="flow__step-title">レッスン前オンライン登録会</p>
              <p class="flow__step-text">
              BOOGIE LINE事務局とレッスンに向けたセットアップ＆ガイダンスを行います
              </p>
            </div>
          </div>
        </li>

        <li class="flow__item js-fade-up">
          <div class="flow__step">
            <span class="flow__step-num">
              <span class="flow__step-label">STEP</span>
              <span class="flow__step-count">3</span>
            </span>
            <div class="flow__step-body">
              <p class="flow__step-title">レッスン日程調整</p>
              <p class="flow__step-text">
                公式LINEを使って日程調整が可能です。
              </p>
            </div>
          </div>
        </li>

        <li class="flow__item js-fade-up">
          <div class="flow__step">
            <span class="flow__step-num">
              <span class="flow__step-label">STEP</span>
              <span class="flow__step-count">4</span>
            </span>
            <div class="flow__step-body">
              <p class="flow__step-title">レッスン当日</p>
              <p class="flow__step-text">
                送られてくるリンクより、ZOOMに入ってレッスンを受けましょう。
              </p>
            </div>
          </div>
        </li>
      </ol>
      <div class="flow__link-wrap">
        <a href="#" class="link-more">
          → もっと詳しく知る
        </a>
      </div>
    </div>
  </section>

  <section class="price">
    <div class="price__inner inner">
      <h2 class="price__title section-title js-section-title-split">PRICE</h2>
      <h3 class="price__lead">選べる２つのプランと所要時間</h3>
      <div class="price__plans">
        <div class="price__plan price__plan--spot js-fade-up">
          <p class="price__plan-heading">SPOT</p>
          <div class="price__plan-content">
            <p class="price__plan-type">単発レッスン</p>
            <div class="price__time-wrap">
              <div class="price__time-item">
                <span class="price__time-label">45分</span>
                <span class="price__amount">8,000<span class="price__unit">円〜</span></span>
              </div>
              <div class="price__time-item">
                <span class="price__time-label">25分</span>
                <span class="price__amount">4,570<span class="price__unit">円〜</span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="price__plan price__plan--member js-fade-up --delay-2">
          <p class="price__plan-heading">MEMBERSHIP</p>
          <div class="price__plan-content">
            <p class="price__plan-type">定期レッスン（月1回〜）</p>
            <div class="price__time-wrap">
              <div class="price__time-item">
                <span class="price__time-label">45分</span>
                <span class="price__amount">6,000<span class="price__unit">円〜</span></span>
              </div>
              <div class="price__time-item">
                <span class="price__time-label">25分</span>
                <span class="price__amount">4,150<span class="price__unit">円〜</span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p class="price__note">
        ※入会に際しては、当レーベルのポリシーに同意・遵守いただくことが必須となります。<br class="u-desktop">※入会に際しては、当レーベルのポリシーに同意・遵守いただくことが必須となります。<br
          class="u-desktop">※入会に際しては、当レーベルのポリシーに同意・遵守いただくことが必須となります。<br
          class="u-desktop">※入会に際しては、当レーベルのポリシーに同意・遵守いただくことが必須となります。<br
          class="u-desktop">※入会に際しては、当レーベルのポリシーに同意・遵守いただくことが必須となります。
      </p>
      <div class="price__present">
        <div class="price__present-item price__present-item--pink js-fade-up">
          <div class="price__present-img-wrap">
            <img src="<?php echo IMAGEPATH; ?>/top/present-text.svg" alt="PRESENTの見出し画像" width="100" height="24"
              loading="lazy" class="price__present-img">
          </div>

          <p class="price__present-lead"><span class="price__present-lead-text">レッスン会員登録で</span></p>

          <div class="price__coupon-img-wrap">
            <img src="<?php echo IMAGEPATH; ?>/top/price-coupon01.svg" alt="初回クーポン15%OFF画像" width="399.71"
              height="157.26" loading="lazy" class="price__coupon-img">
          </div>

          <div class="price__plus-img-wrap">
            <img src="<?php echo IMAGEPATH; ?>/top/price-plus.svg" alt="プラス記号" width="24" height="24" loading="lazy"
              class="price__plus-img">
          </div>

          <div class="price__gift">
            <p class="price__gift-text">
              BOOGIE LINE<br>オリジナルコーヒーブレンドバッグセット<br>（ステッカー付き）をプレゼント！
            </p>
            <div class="price__img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/price-present01.webp" alt="オリジナルコーヒーブレンドバッグ" width="165.12"
                height="165.12" loading="lazy" class="price__img">
            </div>
          </div>
        </div>

        <div class="price__present-item price__present-item--blue js-fade-up --delay-2">
          <div class="price__present-img-wrap">
            <img src="<?php echo IMAGEPATH; ?>/top/present-text.svg" alt="PRESENTの見出し画像" width="100" height="24"
              loading="lazy" class="price__present-img">
          </div>

          <p class="price__present-lead"><span class="price__present-lead-text">定期レッスン／45分<br>まとめ買い割引き</span></p>

          <p class="price__present-lead-desc">45分×6回分のレッスンをまとめて購入すると…</p>

          <div class="price__coupon-img-wrap">
            <img src="<?php echo IMAGEPATH; ?>/top/price-coupon02.svg" alt="定期レッスン6回割引クーポン画像" width="399.71"
              height="157.26" loading="lazy" class="price__coupon-img">
          </div>
          <div class="price__plus-img-wrap">
            <img src="<?php echo IMAGEPATH; ?>/top/price-plus.svg" alt="プラス記号" width="24" height="24" loading="lazy"
              class="price__plus-img">
          </div>
          <div class="price__gift">
            <p class="price__gift-text">BOOGIE LINE<br>オリジナルマグorトートバッグを<br>プレゼント！</p>
            <div class="price__img-wrap price__img-wrap--double">
              <img src="<?php echo IMAGEPATH; ?>/top/price-present01.webp" alt="オリジナルトートバッグ1" width="165.12"
                height="165.12" loading="lazy" class="price__img">
              <img src="<?php echo IMAGEPATH; ?>/top/price-present01.webp" alt="オリジナルトートバッグ2" width="165.12"
                height="165.12" loading="lazy" class="price__img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="question">
    <div class="question__inner inner">
      <p class="question__title section-title"><span
          class="question__title-deco js-section-title-split">QUESTIONS</span></p>
      <ul class="question__list">
        <li class="question__item">
          <div class="question__q">
            <span class="question__q-icon" aria-hidden="true">Q</span>
            <p class="question__q-text">レッスン形式を教えてください</p>
          </div>
          <div class="question__a">
            <p class="question__a-text">
              BOOGIE LINEでは、基本的に1対1のマンツーマンレッスンとなります。<br>
              ご友人や家族の方とのグループレッスンをご希望の場合は別途ご相談ください。
            </p>
          </div>
        </li>
        <li class="question__item">
          <div class="question__q question__q--primary">
            <span class="question__q-icon" aria-hidden="true">Q</span>
            <p class="question__q-text">完全な初心者ですが大丈夫でしょうか？</p>
          </div>
          <div class="question__a">
            <p class="question__a-text">
              初心者向けのレッスンはアーティストによって異なりますので、スキルレベルをフィルターで絞り込み、初心者対応が可能なアーティストをお探しください。<br>
              ご自身のスキルレベルに迷う場合は、BOOGIE LINEとの最初の面談でご相談いただけますので、ご安心ください。
            </p>
          </div>
        </li>
      </ul>
      <div class="question__link-wrap js-deco">
        <a href="#" class="link-more">
          → もっと詳しく知る
        </a>
      </div>
    </div>
  </section>

  <section class="goods">
    <div class="goods__inner inner">
      <p class="goods__title section-title js-section-title-split">GOODS&nbsp;&amp;&nbsp;SHOP</p>
      <p class="goods__lead">
        BOOGIE LINE開設記念<br>オリジナルグッズ、ローンチ予定！
      </p>
      <p class="goods__text">
        デザインはBOOGIE LINEのロゴも制作してくれたyunosukeが担当！BOOGIE LINEのスピリットを纏い、日常にグルーヴを。
      </p>
      <div class="goods__items">
        <div class="goods__item">
          <div class="goods__img-wrap">
            <img src="<?php echo IMAGEPATH; ?>/top/goods-tote.webp" alt="BOOGIE LINEオリジナルトートバッグ" width="445"
              height="487" loading="lazy" class="goods__img">
          </div>
          <p class="goods__caption">トートバッグ</p>
        </div>

        <div class="goods__item goods__item--sticker">
          <div class="goods__img-wrap">
            <img src="<?php echo IMAGEPATH; ?>/top/goods-sticker.webp" alt="BOOGIE LINEオリジナルステッカーセット" width="445"
              height="487" loading="lazy" class="goods__img">
          </div>
          <p class="goods__caption">ステッカー</p>
        </div>
      </div>

      <div class="goods__btn-wrap">
        <a href="#" class="goods__btn">SHOPをみる</a>
      </div>
    </div>
  </section>

  <section class="top-interview">
    <div class="top-interview__inner inner">
      <p class="top-interview__title section-title js-section-title-split">INTERVIEW</p>
      <p class="top-interview__lead">
        ダミーアーティストたちの<br>インタビューを公開！
      </p>
      <p class="top-interview__text">
        ダミーダミー□□□□■デザインはBOOGIE LINEのロゴも制作してくれたyunosukeが担当！BOOGIE LINEのスピリットを纏い、日常にグルーヴを。
      </p>
      <div class="top-interview__video-wrap">
        <iframe width="800" height="450" src="https://www.youtube-nocookie.com/embed/DamwLTqvXFk?si=sFvKSznJJsFOWdpp"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <div class="top-interview__link-wrap">
        <a href="#" class="link-more">
          → インタビュー 一覧へ
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>