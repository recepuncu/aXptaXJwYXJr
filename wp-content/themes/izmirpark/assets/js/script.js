$(document).ready(function(e) {
  
	var miniSlideAdeti = 7;
	if ($(window).width() <= 544) { //phone
		miniSlideAdeti = 2;
	}
	if ( ($(window).width() > 544)&&($(window).width() <= 768) ) { //tablet
		miniSlideAdeti = 4;
	}
	if ($(window).width() > 768) { //screen
		miniSlideAdeti = 7;
	}
  
	$('.slide-magaza-logolari').bxSlider({
		minSlides: miniSlideAdeti,
		maxSlides: miniSlideAdeti,
		slideWidth: 1280,
		slideMargin: 10,
		ticker: true,		
		tickerHover: true,
		speed: 30000, 
	});
	
	$('.slide-etkinlik-arsivi, .slide-magaza-arsivi, .slide-sinema-arsivi').bxSlider({
		minSlides: miniSlideAdeti,
		maxSlides: miniSlideAdeti,
		slideWidth: 1280,
		slideMargin: 10,
		pager: false,
		hideControlOnEnd: true
	});	
  
});