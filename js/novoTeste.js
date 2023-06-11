const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,

  slidesPerView: 5,
  centeredSlides: true,
  freeMode: true,
  spaceBetween: 40,
  grabCursor: true,
  mousewheel: true,

  keyboard: {
    enabled: true
  },

  pagination: {
    el: '.swiper-pagination',
    dynamicBullets: true,    
    clickable: true,
  },

  navigation: {
    nextEl: '.fa-angle-right',
    prevEl: '.fa-angle-left',
  },
});