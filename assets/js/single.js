(function( $ ) {
	var gallery = function(){
		var gallery = $('.gallery-wrapper');
		var galleryChildren = gallery.children();
		var childLength = gallery.children().length;
		var zidx = childLength+1;
		var idx = 0;
		var loader = $('.loader-containner');

		var init = function(){
			setInterval(() => {
			  	interval();
			}, 4000)
		}
		var interval = function(){
			galleryChildren.removeClass("active");
			galleryChildren.eq(idx).addClass("active");
			galleryChildren.eq(idx).css({"z-index" : zidx})
			if(idx == childLength - 1){
				idx = 0;
			}else{
				idx++;
			}
			if(zidx == childLength+1){
				loader.html('');
			}
			zidx++;
		}
		return {
			init : init,
			interval : interval
		}
	}
	
	$( document ).ready( function() {
		var Gallery = new gallery();
		Gallery.init();
	});

})( jQuery );
