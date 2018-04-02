(function( $ ) {
	$( document ).ready( function() {
		var heroSwiper = new Swiper ('.landing-slider .swiper-container', {
      		loop: true,
      		effect: 'fade',
      		speed:5000,
      		autoplay: {
        		delay: 4000,
        		disableOnInteraction: false,
      		},
    	})
    var newsSwiper = new Swiper ('.news-carousel .swiper-container', {
        loop: true,
        slidesPerView: 'auto',
        navigation: {
          nextEl: '.carousel-controler .right',
          prevEl: '.carousel-controler .left',
       },
    })
	});

})( jQuery );
