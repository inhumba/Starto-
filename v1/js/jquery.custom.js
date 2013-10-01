jQuery(document).ready(function() {

	//Element
	$('.box:last-child()').css({'margin-right':'0','width':'200px'});

	//Superfish Dropdown Menu
	$('ul.sf-menu').supersubs({
		minWidth: 10,
		maxWidth: 15,
		extraWidth: 1
	}).superfish({
		delay: 300,
		speed: 'fast',
		animation: {opacity:'show',height:'show'},
		autoArrows: false
	});

	//Slider
	if(jQuery().nivoSlider){
		$('#slider').nivoSlider();
	}

	//Carousel
	if(jQuery().carouFredSel){
		$('#carousel').carouFredSel({
			prev: '#prev',
			next: '#next',
			scroll: {
				items: 1,
				duration: 800,
				easing: 'quadratic'
			}
		});
	}

	//Scroll to top
	$(window).scroll(function() {
		if($(this).scrollTop() > 300) {
			$('.totop').fadeIn();
		} else {
			$('.totop').fadeOut();
		}
	});
	$('.totop').click(function() {
		$('body,html').animate({scrollTop:0},700);
		return false;
	});

});