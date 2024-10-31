(function($){

jQuery(document).ready(function(){

	jQuery(window).scroll(function(){
		var scrolltop = jQuery(window).scrollTop();

		if(scrolltop > 500){
			jQuery('.scroll-to-top').fadeIn();
		}else{
			jQuery('.scroll-to-top').fadeOut();
		}

	});


	jQuery('.scroll-to-top a').on('click', function(){

		jQuery('html').animate({'scrollTop' : 0}, 1000);

		return false;
	});


});

}(jQuery));
