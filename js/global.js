$(document).ready(function() {
	var nav = $('.top-navigation')
	var navTop = nav.offset().top;
	var goTop = $('.go-top-button');
	goTop.on('click', function(e){
		e.preventDefault();
	})
	if ($('table').length > 0) {
		$('table').addClass('uk-table uk-table-striped uk-table-condensed');
	};
	$(window).scroll(function(e) {
		if ( $(this).scrollTop() > navTop ) {
			nav.addClass('fixed-top'); // add class
		}else{
			nav.removeClass('fixed-top'); // remove class
		};
	})

	if ( $('.entry-content p').find('iframe').length > 0 ) {
		var container =  $('.entry-content p').find('iframe').parent('p');
		container.addClass('videoWrapper');
	};

});