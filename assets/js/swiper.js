import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'


const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed:1000,

    // if your optionals
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    // autoplay
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },

    // responsive breakpoint
    breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        992: {
          slidesPerView: 4,
          spaceBetween: 50,
        },
      },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });