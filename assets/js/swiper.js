import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'

var swiper = new Swiper(".mySwiper", {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  }
});
var swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});