var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 25,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
      autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
});
