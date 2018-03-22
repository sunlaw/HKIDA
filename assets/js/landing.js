(function( $ ) {
	$( document ).ready( function() {
		var mySwiper = new Swiper ('.swiper-container', {
      		loop: true,
      		effect: 'fade',
      		speed:5000,
      		autoplay: {
        		delay: 4000,
        		disableOnInteraction: false,
      		},
    	})
	});

})( jQuery );
