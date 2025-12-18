"use strict";

var _document$querySelect, _document$querySelect2;
/* ===============================================
# ARTIST：メインスライダー
=============================================== */
const remToPx = rem => {
  return rem * parseFloat(getComputedStyle(document.documentElement).fontSize);
};
const artistSwiperConfig = {
  loop: true,
  speed: 600,
  slidesPerView: 1.35,
  spaceBetween: 20,
  centeredSlides: true,
  breakpoints: {
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
      centeredSlides: false
    },
    1250: {
      slidesPerView: 4,
      spaceBetween: 65,
      centeredSlides: false
    },
    1700: {
      slidesPerView: 5,
      spaceBetween: 65,
      centeredSlides: false
    }
  }
};
const artistSliders = {};

// 各スライダーを初期化
document.querySelectorAll('.js-artist-swiper').forEach(swiperEl => {
  const category = swiperEl.dataset.category;
  const config = {
    ...artistSwiperConfig,
    navigation: {
      nextEl: swiperEl.querySelector('.top-artist__swiper-button-next'),
      prevEl: swiperEl.querySelector('.top-artist__swiper-button-prev')
    }
  };
  artistSliders[category] = new Swiper(swiperEl, config);
});

// カテゴリータブの切り替え
const categoryLinks = document.querySelectorAll('.js-artist-category');
const artistSwiperEls = document.querySelectorAll('.js-artist-swiper');
categoryLinks.forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    const targetCategory = link.dataset.category;
    categoryLinks.forEach(l => l.classList.remove('is-active'));
    link.classList.add('is-active');
    artistSwiperEls.forEach(swiper => {
      swiper.setAttribute('aria-hidden', 'true');
    });
    const targetSwiper = document.querySelector(`.js-artist-swiper[data-category="${targetCategory}"]`);
    if (targetSwiper) {
      targetSwiper.setAttribute('aria-hidden', 'false');
      if (artistSliders[targetCategory]) {
        setTimeout(() => {
          artistSliders[targetCategory].update();
        }, 50);
      }
    }
  });
});

/* ===============================================
# ARTIST：ループスライダー
=============================================== */

const slider = new Swiper('.js-artist-loop-swiper', {
  loop: true,
  slidesPerView: 2.6,
  speed: 4000,
  spaceBetween: 15,
  allowTouchMove: false,
  autoplay: {
    delay: 0,
    disableOnInteraction: false
  },
  breakpoints: {
    768: {
      slidesPerView: 5,
      spaceBetween: 30,
      centeredSlides: false
    },
    1250: {
      slidesPerView: 6.2,
      spaceBetween: 50,
      centeredSlides: false
    },
    1700: {
      slidesPerView: 7,
      spaceBetween: 50,
      centeredSlides: false
    }
  }
});
document.querySelectorAll('.js-goods-loop').forEach(list => {
  const parent = list.parentElement;
  const listWidth = list.scrollWidth;
  const parentWidth = parent.clientWidth;
  const repeatCount = Math.ceil(parentWidth / listWidth) + 1;
  for (let i = 0; i < repeatCount; i++) {
    list.innerHTML += list.innerHTML;
  }
});

/* ===============================================
# INTERVIEW：メインスライダー
=============================================== */
const interviewSlider = new Swiper('.js-interview-swiper', {
  loop: false,
  speed: 600,
  slidesPerView: 'auto',
  spaceBetween: 0,
  navigation: {
    nextEl: '.top-interview__swiper-button-next',
    prevEl: '.top-interview__swiper-button-prev'
  }
});
(_document$querySelect = document.querySelector('.js-interview-prev')) === null || _document$querySelect === void 0 ? void 0 : _document$querySelect.addEventListener('click', () => {
  interviewSlider.slidePrev();
});
(_document$querySelect2 = document.querySelector('.js-interview-next')) === null || _document$querySelect2 === void 0 ? void 0 : _document$querySelect2.addEventListener('click', () => {
  interviewSlider.slideNext();
});