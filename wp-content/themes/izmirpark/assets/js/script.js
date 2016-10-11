$(document).ready(function(e) {
  
	var miniSlideAdeti = 7;
	if ($(window).width() < 481) {
		miniSlideAdeti = 2;
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
	
	$('.slide-etkinlik-arsivi').bxSlider({
		minSlides: miniSlideAdeti,
		maxSlides: miniSlideAdeti,
		slideWidth: 1280,
		slideMargin: 10,
		pager: false,
		hideControlOnEnd: true
	});	
  
});