"use strict";

/* ===============================================
# ARTIST：メインスライダー
=============================================== */
const remToPx = rem => {
  return rem * parseFloat(getComputedStyle(document.documentElement).fontSize);
};
const artistSlider = new Swiper('.js-artist-swiper', {
  loop: true,
  speed: 1500,
  slidesPerView: 1.3,
  spaceBetween: 20,
  centeredSlides: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
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
  },
  navigation: {
    nextEl: '.top-artist__swiper-button-next',
    prevEl: '.top-artist__swiper-button-prev'
  }
});

/* ===============================================
# ARTIST：ループスライダー
=============================================== */

const slider = new Swiper('.js-artist-loop-swiper', {
  loop: true,
  slidesPerView: 2.8,
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
      slidesPerView: 6,
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

/* ===============================================
# TOP：オープニング
=============================================== */

document.addEventListener('DOMContentLoaded', () => {
  const root = document.documentElement;
  const opening = document.getElementById('js-opening');
  const FLAG = 'opening_played';
  if (sessionStorage.getItem(FLAG)) return;
  const endOpening = () => {
    opening.classList.add('is-done');
    root.classList.remove('is-opening');
    setTimeout(() => opening.remove(), 800);
  };
  setTimeout(endOpening, 10000);
  sessionStorage.setItem(FLAG, '1');
});