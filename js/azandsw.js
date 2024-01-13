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

// $(window).resize(function () {
// 	if($(window).width() < 760){
// 		var swiperSlider = new Swiper(".mySwiperSlider", {
// 			slidesPerView: 1,
// 			centeredSlides: false,
// 			slidesPerGroupSkip: 1,
// 			grabCursor: true,
// 			keyboard: {
// 			  enabled: true,
// 			},
// 			scrollbar: {
// 			  el: ".swiper-scrollbar",
// 			},
// 			autoplay: {
// 				delay: 2500,
// 				disableOnInteraction: false,
// 			  },
// 			navigation: {
// 			  nextEl: ".swiper-button-next",
// 			  prevEl: ".swiper-button-prev",
// 			},
// 			pagination: {
// 			  el: ".swiper-pagination",
// 			  clickable: true,
// 			},
// 		  });
// 	}
// });


(function() {
	'use strict';
	// breakpoint where swiper will be destroyed
	// and switches to a dual-column layout
	const breakpoint = window.matchMedia( '(min-width:760px)' );
	// keep track of swiper instances to destroy later
	let swiperSlider;
  
	//////////////////////////////////////////////////////////////////
  
	const breakpointChecker = function() {
	  // if larger viewport and multi-row layout needed
	  if ( breakpoint.matches === true ) {
		// clean up old instances and inline styles when available
		if ( swiperSlider !== undefined ) swiperSlider.destroy( true, true );
		// or/and do nothing
		return;
		// else if a small viewport and single column layout needed
		} else if ( breakpoint.matches === false ) {
		  // fire small viewport version of swiper
		  return enableSwiper();
		}
	};
	
	//////////////////////////////////////////////////////////////////
  
	const enableSwiper = function() {
		swiperSlider = new Swiper ('.mySwiperSlider', {
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
	};
  
	//////////////////////////////////////////////////////////////////
  
	// keep an eye on viewport size changes
	breakpoint.addListener(breakpointChecker);
	// kickstart
	breakpointChecker();
  
})(); /* IIFE end */