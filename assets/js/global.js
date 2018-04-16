(function( $ ) {
	var isMobile = function(){
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
			return true;
		}else{
			return false;
		}
	}
	var nav = function(){
		var menu = $('.hunberger-menu');
		var mainNav = $('.main-nav');
		var mobileNav = $('.mobile-nav');
		var secNav = $('.menu-secondary');

		menu.click(function(){
			if(menu.attr('aria-expanded') == 'false'){
				menu.attr('aria-expanded','true');
				mainNav.attr('aria-expanded','true')
			}else{
				menu.attr('aria-expanded','false');
				mainNav.attr('aria-expanded','false');
			}
			
		})
		var secNavClick = function(_target){
			var _this = _target;

			$('.second-trigger').removeClass('active');
			secNav.attr('aria-expanded','false');

			_this.addClass('active');
			_this.parent().find(secNav).attr('aria-expanded','true');

		}
		if(isMobile()== true){
			secNav.each(function(){
				$(this).parent().find("a").eq(0).addClass('second-trigger');
			});
			$('.second-trigger').bind('click',function(){
				secNavClick($(this));
				return false;
			})
		}
		

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
		if(isMobile()==false){
			//Back to Top Button Adjustment
			var backToTopBtn = $('.back-to-top');
			var hitTheButtom = "";
			var scroll = "";

			$( window ).scroll(function() {
				if(backToTopBtn){
					scroll = $(document).scrollTop()
				 	hitTheButtom = $('.newsletter').offset().top - $('.newsletter').height() - $('.sitemap').height();
				 	console.log(scroll);
				 	console.log(hitTheButtom);
					if(scroll > hitTheButtom){
						backToTopBtn.addClass('fixed');
					}else{
						backToTopBtn.removeClass('fixed');
					}
				}
			});
			// End;
		}
	});

})( jQuery );
