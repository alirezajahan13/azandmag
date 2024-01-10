var $ = jQuery;

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 35,
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
  breakpoints: {
	769: {
	  slidesPerView: 3,
	},
	980: {
	  slidesPerView: 4,
	},
  },
});

$(document).ready(function () {
	if($(window).width() < 760){
		var swiperSlider = new Swiper(".mySwiperSlider", {
			slidesPerView: 1,
			centeredSlides: false,
			slidesPerGroupSkip: 1,
			grabCursor: true,
			keyboard: {
			  enabled: true,
			},
			scrollbar: {
			  el: ".swiper-scrollbar",
			},
			autoplay: {
				delay: 2500,
				disableOnInteraction: false,
			  },
			navigation: {
			  nextEl: ".swiper-button-next",
			  prevEl: ".swiper-button-prev",
			},
			pagination: {
			  el: ".swiper-pagination",
			  clickable: true,
			},
		  });
	  
	}
});