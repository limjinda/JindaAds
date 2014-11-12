$(document).ready(function() {
	var nav = $('.top-navigation')
	var navTop = nav.offset().top;
	var goTop = $('.go-top-button');
	goTop.on('click', function(e){
		// $(window).scrollTop(0);
		e.preventDefault();
	})
	$(window).scroll(function(e) {
		if ( $(this).scrollTop() > navTop ) {
			nav.addClass('fixed-top'); // add class
		}else{
			nav.removeClass('fixed-top'); // remove class
		};
	})
});