
jQuery(document).ready(function($){
	

	$('.Slider-slider.bxslider').bxSlider({
	  mode: 'fade',
	  minSlides: 1,
	  maxSlides: 1,
	  startSlide: 1,
	  //slideWidth: 1200,
	  slideMargin: 0,
	  // captions: true,
	  pause: 4000,
	  auto: true,
	  speed: 1500,
	  infiniteLoop: true,
	  hideControlOnEnd: true, 
	  touchEnabled:false,
	  pager: false
	});
});

// $(window).resize(function() {
// 	renderRecensies();
// 	renderOffer();

// });

$(document).ready(function(){
	renderRecensies();
	renderOffer();
});

function renderRecensies(){
	if ($(window).width() <= 800) {
		$('.Review-slider.bxslider').bxSlider({
			minSlides: 2,
			maxSlides: 2,
			captions: true,
			mode: 'vertical',
			// slideMargin: 5,
			auto: true,
			speed: 800,
			pause: 9000,
			//infiniteLoop: true,
			preventDefaultSwipeX: true,
			// touchEnabled:false,
			// controls: true,
			pager: false
		});
	}
	else{
	    $('.Review-slider.bxslider').bxSlider({
		  minSlides: 3,
		  maxSlides: 3,
		  slideWidth: 300,
		  slideMargin: 60,
		  captions: true,
		  auto: true,
		  speed: 800,
		  pause: 9000,
		  // adaptiveHeight: true,
		  // preventDefaultSwipeX: true,
		  // touchEnabled:false,
		  infiniteLoop: true
		});
	}
}

function renderOffer(){
	if ($(window).width() <= 800) {
		$('.Offer-slider.bxslider').bxSlider({
			minSlides: 1,
			maxSlides: 1,
			// mode: 'vertical',
			slideWidth: 500,
			slideMargin: 40,
			captions: true,
			auto: true,
			speed: 800,
			// startSlide: 7,
			//infiniteLoop: true,
			// touchEnabled:false,
			pause: 4200,
			// preventDefaultSwipeX: true,
			pager: false
		});
	}
	else{
		$('.Offer-slider.bxslider').bxSlider({
		  minSlides: 3,
		  maxSlides: 3,
		  slideWidth: 500,
		  slideMargin: 40,
		  captions: true,
		  auto: true,
		  speed: 800,
		  infiniteLoop: true,
		  // touchEnabled:false,
		  pause: 8000,
		  // preventDefaultSwipeX: true,
		  pager: false
		});
	}
}