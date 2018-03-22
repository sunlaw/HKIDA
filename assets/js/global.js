(function( $ ) {
	var nav = function(){
		var menu = $('.hunberger-menu');
		var mainNav = $('#main-nav');

		menu.click(function(){
			if(menu.attr('aria-expanded') == 'false'){
				menu.attr('aria-expanded','true');
				mainNav.attr('aria-expanded','true')
			}else{
				menu.attr('aria-expanded','false');
				mainNav.attr('aria-expanded','false');
			}
			
		})
	}
	var back_to_top = function(){
		var backToTop = $('.back-to-top');

		backToTop.click(function(){
			$('html, body').animate({scrollTop:0},500)
			return false;
		})
	}
	
	$( document ).ready( function() {
		var Nav = new nav();
		var backToTop = new back_to_top();
	});

})( jQuery );
