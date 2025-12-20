<?php
/*
* Template Name: トップページ
*/
?>
<?php get_header(); ?>

<main>

  <section class="top-artist">
    <div class="top-artist__inner">
      <h2 class="top-artist__title section-title js-section-title-split">ARTIST</h2>
      <h3 class="top-artist__subtitle">音楽に愛されてきた<br>アーティストたちと繋がろう</h3>
      <div class="top-artist__category-list-wrap">
        <ul class="top-artist__category-list">
          <li class="top-artist__category-item">
            <a href="#" class="top-artist__category-link js-artist-category is-active" data-category="guitar">GUITAR</a>
          </li>
          <li class="top-artist__category-item">
            <a href="#" class="top-artist__category-link js-artist-category" data-category="bass">BASS</a>
          </li>
          <li class="top-artist__category-item">
            <a href="#" class="top-artist__category-link js-artist-category" data-category="piano-keys">PIANO・KEYS</a>
          </li>
          <li class="top-artist__category-item">
            <a href="#" class="top-artist__category-link js-artist-category" data-category="drums">DRUMS</a>
          </li>
          <li class="top-artist__category-item">
            <a href="#" class="top-artist__category-link js-artist-category" data-category="mps">MPS</a>
          </li>
          <li class="top-artist__category-item">
            <a href="#" class="top-artist__category-link js-artist-category" data-category="dance">DANCE</a>
          </li>
        </ul>
      </div>

      <div class="top-artist__swiper-container">

        <!-- GUITAR スライダー -->
        <div class="swiper top-artist__swiper js-artist-swiper" data-category="guitar" aria-hidden="false">
          <ul class="swiper-wrapper top-artist__slides">
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp" alt="仰木亮彦のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">仰木亮彦</p>
                  <p class="top-artist-card__meta">ex.在日ファンク<br>STUTS／赤えんぴつ／butaji</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" alt="竹村郁哉（Yogee New Waves）のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">竹村郁哉</p>
                  <p class="top-artist-card__meta">Yogee New Waves</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp" alt="Boxerのアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">Boxer</p>
                  <p class="top-artist-card__meta">Makara<br>Nulbarich</p>
                </div>
              </a>
            </li>
            <!-- 2セット目 -->
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp" alt="仰木亮彦のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">仰木亮彦</p>
                  <p class="top-artist-card__meta">ex.在日ファンク<br>STUTS／赤えんぴつ／butaji</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" alt="竹村郁哉（Yogee New Waves）のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">竹村郁哉</p>
                  <p class="top-artist-card__meta">Yogee New Waves</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp" alt="Boxerのアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">Boxer</p>
                  <p class="top-artist-card__meta">Makara<br>Nulbarich</p>
                </div>
              </a>
            </li>
          </ul>
          <div class="swiper-button-next top-artist__swiper-button-next"><img src="<?php echo IMAGEPATH; ?>/common/slider-arrow-left.svg" alt="左にスライドする矢印" width="80" height="80" loading="lazy"></div>
          <div class="swiper-button-prev top-artist__swiper-button-prev"><img src="<?php echo IMAGEPATH; ?>/common/slider-arrow-right.svg" alt="右にスライドする矢印" width="80" height="80" loading="lazy"></div>
        </div>

        <!-- BASS スライダー -->
        <div class="swiper top-artist__swiper js-artist-swiper" data-category="bass" aria-hidden="true">
          <ul class="swiper-wrapper top-artist__slides">
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" alt="竹村郁哉（Yogee New Waves）のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">竹村郁哉</p>
                  <p class="top-artist-card__meta">Yogee New Waves</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp" alt="Boxerのアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">Boxer</p>
                  <p class="top-artist-card__meta">Makara<br>Nulbarich</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp" alt="仰木亮彦のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">仰木亮彦</p>
                  <p class="top-artist-card__meta">ex.在日ファンク<br>STUTS／赤えんぴつ／butaji</p>
                </div>
              </a>
            </li>
            <!-- 2セット目 -->
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" alt="竹村郁哉（Yogee New Waves）のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">竹村郁哉</p>
                  <p class="top-artist-card__meta">Yogee New Waves</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp" alt="Boxerのアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">Boxer</p>
                  <p class="top-artist-card__meta">Makara<br>Nulbarich</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp" alt="仰木亮彦のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">仰木亮彦</p>
                  <p class="top-artist-card__meta">ex.在日ファンク<br>STUTS／赤えんぴつ／butaji</p>
                </div>
              </a>
            </li>
          </ul>
          <div class="swiper-button-next top-artist__swiper-button-next"><img src="<?php echo IMAGEPATH; ?>/common/slider-arrow-left.svg" alt="左にスライドする矢印" width="80" height="80" loading="lazy"></div>
          <div class="swiper-button-prev top-artist__swiper-button-prev"><img src="<?php echo IMAGEPATH; ?>/common/slider-arrow-right.svg" alt="右にスライドする矢印" width="80" height="80" loading="lazy"></div>
        </div>

        <!-- PIANO・KEYS スライダー -->
        <div class="swiper top-artist__swiper js-artist-swiper" data-category="piano-keys" aria-hidden="true">
          <ul class="swiper-wrapper top-artist__slides">
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp" alt="Boxerのアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">Boxer</p>
                  <p class="top-artist-card__meta">Makara<br>Nulbarich</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp" alt="仰木亮彦のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">仰木亮彦</p>
                  <p class="top-artist-card__meta">ex.在日ファンク<br>STUTS／赤えんぴつ／butaji</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" alt="竹村郁哉（Yogee New Waves）のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">竹村郁哉</p>
                  <p class="top-artist-card__meta">Yogee New Waves</p>
                </div>
              </a>
            </li>
            <!-- 2セット目 -->
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp" alt="Boxerのアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">Boxer</p>
                  <p class="top-artist-card__meta">Makara<br>Nulbarich</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp" alt="仰木亮彦のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">仰木亮彦</p>
                  <p class="top-artist-card__meta">ex.在日ファンク<br>STUTS／赤えんぴつ／butaji</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" alt="竹村郁哉（Yogee New Waves）のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">竹村郁哉</p>
                  <p class="top-artist-card__meta">Yogee New Waves</p>
                </div>
              </a>
            </li>
          </ul>
          <div class="swiper-button-next top-artist__swiper-button-next"><img src="<?php echo IMAGEPATH; ?>/common/slider-arrow-left.svg" alt="左にスライドする矢印" width="80" height="80" loading="lazy"></div>
          <div class="swiper-button-prev top-artist__swiper-button-prev"><img src="<?php echo IMAGEPATH; ?>/common/slider-arrow-right.svg" alt="右にスライドする矢印" width="80" height="80" loading="lazy"></div>
        </div>

        <!-- DRUMS スライダー -->
        <div class="swiper top-artist__swiper js-artist-swiper" data-category="drums" aria-hidden="true">
          <ul class="swiper-wrapper top-artist__slides">
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp" alt="Boxerのアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">Boxer</p>
                  <p class="top-artist-card__meta">Makara<br>Nulbarich</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" alt="竹村郁哉（Yogee New Waves）のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">竹村郁哉</p>
                  <p class="top-artist-card__meta">Yogee New Waves</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp" alt="仰木亮彦のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">仰木亮彦</p>
                  <p class="top-artist-card__meta">ex.在日ファンク<br>STUTS／赤えんぴつ／butaji</p>
                </div>
              </a>
            </li>
            <!-- 2セット目 -->
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp" alt="Boxerのアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">Boxer</p>
                  <p class="top-artist-card__meta">Makara<br>Nulbarich</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" alt="竹村郁哉（Yogee New Waves）のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">竹村郁哉</p>
                  <p class="top-artist-card__meta">Yogee New Waves</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp" alt="仰木亮彦のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">仰木亮彦</p>
                  <p class="top-artist-card__meta">ex.在日ファンク<br>STUTS／赤えんぴつ／butaji</p>
                </div>
              </a>
            </li>
          </ul>
          <div class="swiper-button-next top-artist__swiper-button-next"><img src="<?php echo IMAGEPATH; ?>/common/slider-arrow-left.svg" alt="左にスライドする矢印" width="80" height="80" loading="lazy"></div>
          <div class="swiper-button-prev top-artist__swiper-button-prev"><img src="<?php echo IMAGEPATH; ?>/common/slider-arrow-right.svg" alt="右にスライドする矢印" width="80" height="80" loading="lazy"></div>
        </div>

        <!-- MPS スライダー -->
        <div class="swiper top-artist__swiper js-artist-swiper" data-category="mps" aria-hidden="true">
          <ul class="swiper-wrapper top-artist__slides">
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" alt="竹村郁哉（Yogee New Waves）のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">竹村郁哉</p>
                  <p class="top-artist-card__meta">Yogee New Waves</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp" alt="仰木亮彦のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">仰木亮彦</p>
                  <p class="top-artist-card__meta">ex.在日ファンク<br>STUTS／赤えんぴつ／butaji</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp" alt="Boxerのアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">Boxer</p>
                  <p class="top-artist-card__meta">Makara<br>Nulbarich</p>
                </div>
              </a>
            </li>
            <!-- 2セット目 -->
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" alt="竹村郁哉（Yogee New Waves）のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">竹村郁哉</p>
                  <p class="top-artist-card__meta">Yogee New Waves</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp" alt="仰木亮彦のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">仰木亮彦</p>
                  <p class="top-artist-card__meta">ex.在日ファンク<br>STUTS／赤えんぴつ／butaji</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp" alt="Boxerのアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">Boxer</p>
                  <p class="top-artist-card__meta">Makara<br>Nulbarich</p>
                </div>
              </a>
            </li>
          </ul>
          <div class="swiper-button-next top-artist__swiper-button-next"><img src="<?php echo IMAGEPATH; ?>/common/slider-arrow-left.svg" alt="左にスライドする矢印" width="80" height="80" loading="lazy"></div>
          <div class="swiper-button-prev top-artist__swiper-button-prev"><img src="<?php echo IMAGEPATH; ?>/common/slider-arrow-right.svg" alt="右にスライドする矢印" width="80" height="80" loading="lazy"></div>
        </div>

        <!-- DANCE スライダー -->
        <div class="swiper top-artist__swiper js-artist-swiper" data-category="dance" aria-hidden="true">
          <ul class="swiper-wrapper top-artist__slides">
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp" alt="Boxerのアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">Boxer</p>
                  <p class="top-artist-card__meta">Makara<br>Nulbarich</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" alt="竹村郁哉（Yogee New Waves）のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">竹村郁哉</p>
                  <p class="top-artist-card__meta">Yogee New Waves</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp" alt="仰木亮彦のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">仰木亮彦</p>
                  <p class="top-artist-card__meta">ex.在日ファンク<br>STUTS／赤えんぴつ／butaji</p>
                </div>
              </a>
            </li>
            <!-- 2セット目 -->
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp" alt="Boxerのアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">Boxer</p>
                  <p class="top-artist-card__meta">Makara<br>Nulbarich</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" alt="竹村郁哉（Yogee New Waves）のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">竹村郁哉</p>
                  <p class="top-artist-card__meta">Yogee New Waves</p>
                </div>
              </a>
            </li>
            <li class="swiper-slide top-artist__slide">
              <a href="#" class="top-artist-card">
                <div class="top-artist-card__img-wrap">
                  <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp" alt="仰木亮彦のアーティスト写真" width="311.51" height="311.51" loading="lazy" class="top-artist-card__img">
                </div>
                <div class="top-artist-card__body">
                  <p class="top-artist-card__name">仰木亮彦</p>
                  <p class="top-artist-card__meta">ex.在日ファンク<br>STUTS／赤えんぴつ／butaji</p>
                </div>
              </a>
            </li>
          </ul>
          <div class="swiper-button-next top-artist__swiper-button-next"><img src="<?php echo IMAGEPATH; ?>/common/slider-arrow-left.svg" alt="左にスライドする矢印" width="80" height="80" loading="lazy"></div>
          <div class="swiper-button-prev top-artist__swiper-button-prev"><img src="<?php echo IMAGEPATH; ?>/common/slider-arrow-right.svg" alt="右にスライドする矢印" width="80" height="80" loading="lazy"></div>
        </div>

      </div>

      <div class="swiper top-artist__loop-swiper js-artist-loop-swiper">
        <ul class="swiper-wrapper top-artist__loop-slides">
          <!-- アーティスト画像スライダー（1セット目）：無限ループ用に同じ内容を2セット配置 -->
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp" alt="仰木亮彦のアーティスト写真" width="188" height="188"></li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" alt="竹村郁哉（Yogee New Waves）のアーティスト写真" width="188" height="188"></li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp" alt="Boxerのアーティスト写真" width="188" height="188">
          </li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/shogun_beatz.webp" alt="SHOGUN BEATZのアーティスト写真" width="188" height="188"></li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/iwami_keigo.webp" alt="岩見慶悟のアーティスト写真" width="188" height="188"></li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/hayami_dan.webp" alt="速水丹のアーティスト写真" width="188" height="188"></li>
          <!-- アーティスト画像スライダー（2セット目） -->
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko-02.webp" width="188" height="188" aria-hidden="true"></li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya-02.webp" width="188" height="188" aria-hidden="true">
          </li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/boxer.webp" width="188" height="188" aria-hidden="true">
          </li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/shogun_beatz.webp" width="188" height="188" aria-hidden="true"></li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/iwami_keigo.webp" width="188" height="188" aria-hidden="true"></li>
          <li class="swiper-slide top-artist__loop-slide"><img src="<?php echo IMAGEPATH; ?>/artist/hayami_dan.webp" width="188" height="188" aria-hidden="true"></li>
        </ul>
      </div>
      <div class="top-artist__link-wrap">
        <a href="<?php echo ARTIST_URL; ?>" class="link-btn">
          ALL ARTIST
        </a>
      </div>
    </div>
  </section>

  <section class="lesson">
    <div class="lesson__inner inner">
      <h2 class="lesson__title section-title js-section-title-split">ONLINE&nbsp;LESSON</h2>
      <div class="lesson__content">
        <h3 class="lesson__lead">自宅にいながら<br>最高のレッスンを受けよう</h3>

        <div class="lesson__img-desc-wrap">
          <div class="lesson__img-wrap js-fade-up">
            <img src="<?php echo IMAGEPATH; ?>/top/lesson-illust.webp" alt="オンラインレッスン中の人物のイラスト" width="479" height="440" loading="lazy" class="lesson__img">
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
          <video class="lesson__video" src="<?php echo VIDEOPATH; ?>/lesson-scene.mp4" autoplay muted loop playsinline></video>
          <span class="lesson__badge">#音楽のある日常</span>
          <div class="lesson__illust-deco lesson__illust-deco--01 js-bounce-in">
            <img src="<?php echo IMAGEPATH; ?>/top/lesson-illust-deco01.webp" class="lesson__illust-deco-img" alt="" width="173" height="173" loading="lazy" aria-hidden="true">
          </div>
          <div class="lesson__illust-deco lesson__illust-deco--02 js-bounce-in">
            <img src="<?php echo IMAGEPATH; ?>/top/lesson-illust-deco02.webp" class="lesson__illust-deco-img" alt="" width="288" height="198" loading="lazy" aria-hidden="true">
          </div>
        </div>
      </div>
      <div class="lesson__link-wrap">
        <a href="<?php echo SYSTEM_URL; ?>" class="link-btn">
          もっと詳しく知る
        </a>
      </div>
    </div>
  </section>

  <section class="select-plan">
    <div class="select-plan__inner inner">
      <div class="select-plan__title-wrap">
        <h2 class="select-plan__title js-section-title-split">SELECT<br>YOUR&nbsp;PLAN</h2>
        <p class="select-plan__subtitle">ライフスタイルに<br>合わせて選べる２つのプラン</p>
      </div>
      <div class="select-plan__content">
        <div class="select-plan__plans-wrap">
          <div class="select-plan__plans">
            <div class="select-plan__plan select-plan__plan--member">
              <p class="select-plan__plan-heading">MEMBERSHIP</p>
              <div class="select-plan__plan-content">
                <p class="select-plan__plan-type">定期レッスン（月1回〜）</p>
                <div class="select-plan__time-wrap">
                  <div class="select-plan__time-item">
                    <span class="select-plan__time-label">45分</span>
                    <span class="select-plan__amount">6,000<span class="select-plan__unit">円〜</span></span>
                  </div>
                  <div class="select-plan__time-item">
                    <span class="select-plan__time-label">25分</span>
                    <span class="select-plan__amount">4,150<span class="select-plan__unit">円〜</span></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="select-plan__plan select-plan__plan--spot">
              <p class="select-plan__plan-heading">SPOT</p>
              <div class="select-plan__plan-content">
                <p class="select-plan__plan-type">単発レッスン</p>
                <div class="select-plan__time-wrap">
                  <div class="select-plan__time-item">
                    <span class="select-plan__time-label">45分</span>
                    <span class="select-plan__amount">8,000<span class="select-plan__unit">円〜</span></span>
                  </div>
                  <div class="select-plan__time-item">
                    <span class="select-plan__time-label">25分</span>
                    <span class="select-plan__amount">4,570<span class="select-plan__unit">円〜</span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="select-plan__features">
          <div class="select-plan__feature">
            <div class="select-plan__feature-icon">
              <img src="<?php echo IMAGEPATH; ?>/top/select-plan-icon01.webp" alt="音符のアイコン" width="36" height="48" loading="lazy" class="select-plan__feature-icon-img">
            </div>
            <p class="select-plan__feature-text">一回だけのお試しOK! <br class="u-mobile">SPOTレッスンが可能。</p>
          </div>
          <div class="select-plan__feature">
            <div class="select-plan__feature-icon">
              <img src="<?php echo IMAGEPATH; ?>/top/select-plan-icon02.webp" alt="一時停止ボタンのアイコン" width="45" height="45" loading="lazy" class="select-plan__feature-icon-img">
            </div>
            <p class="select-plan__feature-text">サブスクリプション会員の<br class="u-mobile">スキップ・停止可能</p>
          </div>
          <div class="select-plan__feature">
            <div class="select-plan__feature-icon">
              <img src="<?php echo IMAGEPATH; ?>/top/select-plan-icon03.webp" alt="ノートパソコンのアイコン" width="62" height="45" loading="lazy" class="select-plan__feature-icon-img">
            </div>
            <p class="select-plan__feature-text">ZOOM・インターフェイス設定<br class="u-mobile">などを完全サポート！<br class="u-mobile">スムーズにレッスン開始。</p>
          </div>
        </div>
        <p class="select-plan__note">※アーティストの予定や意向により、レッスンの受講が難しい場合がございます。あらかじめご了承ください。<br>※予約変更はレッスン2日前まで振替可能です。前日～当日での予約キャンセルや振替は原則不可となっております。<br>※当日の無断でのレッスンキャンセルはレッスン料の100%を申受けます。<br>※レッスンはZOOMを使って行います。回線速度の安定したインターネット環境、オーディオインターフェイス等の機材が必要になります。<a href="<?php echo SYSTEM_URL; ?>" class="select-plan__note-link">詳しくはこちら</a>をご確認ください。</p>
      </div>
    </div>
  </section>

  <section class="question">
    <div class="question__inner inner">
      <div class="question__title-wrap">
        <h2 class="question__title js-section-title-split">
          QUESTIONS
        </h2>
        <p class="question__subtitle">よくある質問</p>
      </div>
      <div class="question__items">
        <div class="question__item js-fade-up">
          <div class="question__q">
            <div class="question__q-inner">
              <span class="question__q-icon">Q</span>
              <p class="question__q-text">初心者（子供）ですが<br>大丈夫でしょうか？​</p>
            </div>
          </div>
          <div class="question__a">
            <p class="question__a-text">初心者（子供）向けのレッスンが可能かどうかはアーティストによって異なります。スキルレベルをフィルターで絞り込み、初心者対応が可能なアーティストをお探しください。また、ご自身のスキルレベルに迷う場合は、BoogieLineとの最初の面談でご相談いただけますので、ご安心ください。</p>
          </div>
        </div>
        <div class="question__item js-fade-up --delay-2">
          <div class="question__q">
            <div class="question__q-inner">
              <span class="question__q-icon">Q</span>
              <p class="question__q-text">どのアーティストに<br>習えばよいか迷っています</p>
            </div>
          </div>
          <div class="question__a">
            <p class="question__a-text">レッスン開始前にBoogieLineとの事前面談を行い、そこで習得したい内容をお伺いします。<br>また、アーティストとのマッチングが適切であるかどうかについても相談可能です。</p>
          </div>
        </div>
        <div class="question__item js-fade-up --delay-3">
          <div class="question__q">
            <div class="question__q-inner">
              <span class="question__q-icon">Q</span>
              <p class="question__q-text">授業内容は？</p>
            </div>
          </div>
          <div class="question__a">
            <p class="question__a-text">BoogieLineでは、特定のカリキュラムは設けておりません。<br>そのため、授業内容は生徒の皆さんのレベルや、アーティストとのやり取りを通じて、個別に決まります。</p>
          </div>
        </div>
      </div>
      <div class="question__link-wrap">
        <a href="<?php echo FAQ_URL; ?>" class="link-btn link-btn--border">
          もっと詳しく知る
        </a>
      </div>
    </div>
  </section>

  <section class="flow">
    <div class="flow__inner inner">
      <div class="flow__sidebar js-sticky-sidebar">
        <div class="flow__sidebar-inner">
          <h2 class="flow__title js-section-title-split">FLOW</h2>
          <h3 class="flow__lead">レッスンまでの流れ</h3>
          <div class="flow__img-wrap js-bounce-in">
            <img src="<?php echo IMAGEPATH; ?>/top/flow-character.webp" alt="オンラインレッスンの流れを考えるキャラクターのイラスト" width="270" height="280" loading="lazy" class="flow__img">
          </div>
        </div>
      </div>
      <div class="flow__content">
        <ol class="flow__list js-flow-list">
          <li class="flow__item">
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
            <div class="flow__arrow"></div>
          </li>

          <li class="flow__item">
            <div class="flow__step">
              <span class="flow__step-num">
                <span class="flow__step-label">STEP</span>
                <span class="flow__step-count">2</span>
              </span>
              <div class="flow__step-body">
                <p class="flow__step-title">レッスン前<br class="u-mobile">オンライン登録会</p>
                <p class="flow__step-text">
                  BOOGIE LINE事務局とレッスンに向けたセットアップ＆ガイダンスを行います
                </p>
              </div>
            </div>
            <div class="flow__arrow"></div>
          </li>

          <li class="flow__item">
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
            <div class="flow__arrow"></div>
          </li>

          <li class="flow__item">
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
          <a href="<?php echo SYSTEM_URL; ?>" class="link-btn">
            もっと詳しく知る
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="goods">
    <div class="goods__inner">
      <div class="goods__header">
        <h2 class="goods__title section-title js-section-title-split">GOODS&nbsp;&amp;&nbsp;SHOP</h2>
        <p class="goods__subtitle">オリジナルグッズ、ローンチ予定！</p>
        <p class="goods__description">デザインはBOOGIE LINEのロゴも制作してくれたyunosukeが担当！<br class="u-desktop">BOOGIE LINEのスピリットを纏い、日常にグルーヴを。</p>
        <div class="goods__badge goods__badge--pc">
          <img src="<?php echo IMAGEPATH; ?>/common/badge.webp" alt="BOOGIE LINE開設記念" width="210" height="212" class="goods__badge-img">
        </div>
      </div>

      <div class="goods__loop-wrap">
        <div class="goods__badge goods__badge--sp">
          <img src="<?php echo IMAGEPATH; ?>/common/badge.webp" alt="BOOGIE LINE開設記念" width="210" height="212" class="goods__badge-img">
        </div>
        <!-- 上段：右から左へ流れるスライダー -->
        <div class="goods__loop goods__loop--rtl">
          <ul class="goods__loop-list js-goods-loop">
            <li class="goods__loop-item goods__loop-item--01"><img src="<?php echo IMAGEPATH; ?>/top/goods-01.webp" alt="Boogie Lineロゴ入りベージュの斑点模様マグカップ" width="174" height="156" class="goods__loop-img"></li>
            <li class="goods__loop-item goods__loop-item--02"><img src="<?php echo IMAGEPATH; ?>/top/goods-02.webp" alt="胸元にBoogie Lineの音符ロゴが入った黒いTシャツ" width="246" height="223" class="goods__loop-img"></li>
            <li class="goods__loop-item goods__loop-item--03"><img src="<?php echo IMAGEPATH; ?>/top/goods-03.webp" alt="Funk IPA（黒）とIPA（水色）の2種類のBoogie Lineオリジナルクラフトビール缶" width="213" height="180" class="goods__loop-img"></li>
            <li class="goods__loop-item goods__loop-item--04"><img src="<?php echo IMAGEPATH; ?>/top/goods-04.webp" alt="Boogie Line Mellow Soul Blendのロゴが入った茶色いパッケージ" width="149" height="166" class="goods__loop-img"></li>
            <li class="goods__loop-item goods__loop-item--05"><img src="<?php echo IMAGEPATH; ?>/top/goods-05.webp" alt="胸元にBoogie Lineの音符ロゴが入った白いTシャツ" width="245" height="217" class="goods__loop-img"></li>
          </ul>
        </div>

        <!-- 下段：左から右へ流れるスライダー -->
        <div class="goods__loop goods__loop--ltr">
          <ul class="goods__loop-list js-goods-loop">
            <li class="goods__loop-item goods__loop-item--05"><img src="<?php echo IMAGEPATH; ?>/top/goods-05.webp" alt="胸元にBoogie Lineの音符ロゴが入った白いTシャツ" width="245" height="217" class="goods__loop-img"></li>
            <li class="goods__loop-item goods__loop-item--04"><img src="<?php echo IMAGEPATH; ?>/top/goods-04.webp" alt="Boogie Line Mellow Soul Blendのロゴが入った茶色いパッケージ" width="149" height="166" class="goods__loop-img"></li>
            <li class="goods__loop-item goods__loop-item--06"><img src="<?php echo IMAGEPATH; ?>/top/goods-06.webp" alt="Boogie Lineの音符ロゴと文字が白い糸で刺繍された黒いベースボールキャップ" width="192" height="167" class="goods__loop-img"></li>
            <li class="goods__loop-item goods__loop-item--01"><img src="<?php echo IMAGEPATH; ?>/top/goods-01.webp" alt="Boogie Lineロゴ入りベージュの斑点模様マグカップ" width="174" height="156" class="goods__loop-img"></li>
            <li class="goods__loop-item goods__loop-item--03"><img src="<?php echo IMAGEPATH; ?>/top/goods-03.webp" alt="Funk IPA（黒）とIPA（水色）の2種類のBoogie Lineオリジナルクラフトビール缶" width="213" height="180" class="goods__loop-img"></li>
          </ul>
        </div>
      </div>

      <div class="goods__link-wrap">
        <a href="<?php echo GOODS_URL; ?>" class="link-btn">SHOPを見る</a>
      </div>
    </div>
  </section>

  <section class="top-interview">
    <div class="top-interview__inner">
      <div class="top-interview__header">
        <div class="top-interview__header-left">
          <h2 class="top-interview__title js-section-title-split">INTERVIEW</h2>
        </div>
        <div class="top-interview__header-nav">
          <button type="button" class="top-interview__swiper-button-prev js-interview-prev">
            <img src="<?php echo IMAGEPATH; ?>/common/slider-arrow.webp" alt="右にスライドする矢印" width="72" height="72">
          </button>
          <button type="button" class="top-interview__swiper-button-next js-interview-next">
            <img src="<?php echo IMAGEPATH; ?>/common/slider-arrow.webp" alt="左にスライドする矢印" width="72" height="72">
          </button>
        </div>
      </div>

      <div class="swiper top-interview__swiper js-interview-swiper">
        <ul class="swiper-wrapper top-interview__slides">

          <!-- インタビュー1 -->
          <li class="swiper-slide top-interview__slide">
            <a href="#" class="top-interview-card">
              <div class="top-interview-card__badge">
                <img src="<?php echo IMAGEPATH; ?>/common/new-icon.svg" alt="NEW" width="95" height="95" class="top-interview-card__badge-img">
              </div>
              <div class="top-interview-card__img-wrap">
                <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya.webp" alt="竹村郁哉の写真" width="225" height="225" loading="lazy" class="top-interview-card__img">
              </div>
              <div class="top-interview-card__body">
                <p class="top-interview-card__date">2025.07.30</p>
                <h3 class="top-interview-card__title">インタビューを公開しました！</h3>
                <p class="top-interview-card__name">竹村郁哉（yogee new waves）</p>
              </div>
            </a>
          </li>

          <!-- インタビュー2 -->
          <li class="swiper-slide top-interview__slide">
            <a href="#" class="top-interview-card">
              <div class="top-interview-card__img-wrap">
                <img src="<?php echo IMAGEPATH; ?>/artist/kodera_ryota.webp" alt="小寺良太の写真" width="225" height="225" loading="lazy" class="top-interview-card__img">
              </div>
              <div class="top-interview-card__body">
                <p class="top-interview-card__date">2025.07.30</p>
                <h3 class="top-interview-card__title">インタビューを公開しました！</h3>
                <p class="top-interview-card__name">竹村郁哉（yogee new waves）</p>
              </div>
            </a>
          </li>

          <!-- インタビュー3 -->
          <li class="swiper-slide top-interview__slide">
            <a href="#" class="top-interview-card">
              <div class="top-interview-card__img-wrap">
                <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko.webp" alt="仰木亮彦の写真" width="225" height="225" loading="lazy" class="top-interview-card__img">
              </div>
              <div class="top-interview-card__body">
                <p class="top-interview-card__date">2025.07.30</p>
                <h3 class="top-interview-card__title">インタビューを公開しました！</h3>
                <p class="top-interview-card__name">竹村郁哉（yogee new waves）</p>
              </div>
            </a>
          </li>

          <!-- インタビュー1 -->
          <li class="swiper-slide top-interview__slide">
            <a href="#" class="top-interview-card">
              <div class="top-interview-card__img-wrap">
                <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya.webp" alt="竹村郁哉の写真" width="225" height="225" loading="lazy" class="top-interview-card__img">
              </div>
              <div class="top-interview-card__body">
                <p class="top-interview-card__date">2025.07.30</p>
                <h3 class="top-interview-card__title">インタビューを公開しました！</h3>
                <p class="top-interview-card__name">竹村郁哉（yogee new waves）</p>
              </div>
            </a>
          </li>

          <!-- インタビュー2 -->
          <li class="swiper-slide top-interview__slide">
            <a href="#" class="top-interview-card">
              <div class="top-interview-card__img-wrap">
                <img src="<?php echo IMAGEPATH; ?>/artist/kodera_ryota.webp" alt="小宮良太の写真" width="225" height="225" loading="lazy" class="top-interview-card__img">
              </div>
              <div class="top-interview-card__body">
                <p class="top-interview-card__date">2025.07.30</p>
                <h3 class="top-interview-card__title">インタビューを公開しました！</h3>
                <p class="top-interview-card__name">竹村郁哉（yogee new waves）</p>
              </div>
            </a>
          </li>

          <!-- インタビュー3 -->
          <li class="swiper-slide top-interview__slide">
            <a href="#" class="top-interview-card">
              <div class="top-interview-card__img-wrap">
                <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko.webp" alt="仰木亮彦の写真" width="225" height="225" loading="lazy" class="top-interview-card__img">
              </div>
              <div class="top-interview-card__body">
                <p class="top-interview-card__date">2025.07.30</p>
                <h3 class="top-interview-card__title">インタビューを公開しました！</h3>
                <p class="top-interview-card__name">竹村郁哉（yogee new waves）</p>
              </div>
            </a>
          </li>

          <!-- インタビュー1 -->
          <li class="swiper-slide top-interview__slide">
            <a href="#" class="top-interview-card">
              <div class="top-interview-card__img-wrap">
                <img src="<?php echo IMAGEPATH; ?>/artist/takemura_fumiya.webp" alt="竹村郁哉の写真" width="225" height="225" loading="lazy" class="top-interview-card__img">
              </div>
              <div class="top-interview-card__body">
                <p class="top-interview-card__date">2025.07.30</p>
                <h3 class="top-interview-card__title">インタビューを公開しました！</h3>
                <p class="top-interview-card__name">竹村郁哉（yogee new waves）</p>
              </div>
            </a>
          </li>

          <!-- インタビュー2 -->
          <li class="swiper-slide top-interview__slide">
            <a href="#" class="top-interview-card">
              <div class="top-interview-card__img-wrap">
                <img src="<?php echo IMAGEPATH; ?>/artist/kodera_ryota.webp" alt="小宮良太の写真" width="225" height="225" loading="lazy" class="top-interview-card__img">
              </div>
              <div class="top-interview-card__body">
                <p class="top-interview-card__date">2025.07.30</p>
                <h3 class="top-interview-card__title">インタビューを公開しました！</h3>
                <p class="top-interview-card__name">竹村郁哉（yogee new waves）</p>
              </div>
            </a>
          </li>

          <!-- インタビュー3 -->
          <li class="swiper-slide top-interview__slide">
            <a href="#" class="top-interview-card">
              <div class="top-interview-card__img-wrap">
                <img src="<?php echo IMAGEPATH; ?>/artist/ogi_akihiko.webp" alt="仰木亮彦の写真" width="225" height="225" loading="lazy" class="top-interview-card__img">
              </div>
              <div class="top-interview-card__body">
                <p class="top-interview-card__date">2025.07.30</p>
                <h3 class="top-interview-card__title">インタビューを公開しました！</h3>
                <p class="top-interview-card__name">竹村郁哉（yogee new waves）</p>
              </div>
            </a>
          </li>

        </ul>

        <!-- ナビゲーションボタン -->
        <div class="top-interview__swiper-button-prev swiper-button-prev">
          <img src="<?php echo IMAGEPATH; ?>/common/slider-arrow.webp" alt="前へ" width="72" height="72">
        </div>
        <div class="top-interview__swiper-button-next swiper-button-next">
          <img src="<?php echo IMAGEPATH; ?>/common/slider-arrow.webp" alt="次へ" width="72" height="72">
        </div>
      </div>

    </div>
    <div class="top-interview__link-wrap">
      <a href="<?php echo INTERVIEW_URL; ?>" class="link-btn link-btn--border">もっと詳しく知る</a>
    </div>
  </section>

  <section class="catch-the-groove">
    <div class="catch-the-groove__inner inner">
      <div class="catch-the-groove__content">
        <div class="catch-the-groove__logo-wrap">
          <img src="<?php echo IMAGEPATH; ?>/top/catch-the-groove-logo.svg" alt="catch the groove" width="661" height="64" loading="lazy" class="catch-the-groove__logo">
        </div>
        <p class="catch-the-groove__text">"生きた音"に出会える、<br class="u-mobile">レッスンレーベル。<br>あなたの音楽ライフに、<br class="u-mobile">かつてない刺激を。</p>
        <div class="catch-the-groove__btn-wrap">
          <a href="<?php echo REGISTER_URL; ?>" class="link-btn link-btn--yellow">
            会員登録する
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>