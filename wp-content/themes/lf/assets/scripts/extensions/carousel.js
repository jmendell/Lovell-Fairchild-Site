(function($){
	$('.media-slides').slick({
		infinite: true,
		speed:2000,
		slidesToShow: 5,
		slidesToScroll: 1,
		fade:false,
		pauseOnHover:false,
		autoplay:true,
		cssEasing: 'linear',
		autoplaySpeed:0,
		arrows: false,

		responsive: [{

	      breakpoint: 900,
	      settings: {
	        slidesToShow: 3,
	        infinite: true
	      }

	    }, {

	      breakpoint: 650,
	      settings: {
	        slidesToShow: 1,
	      }

	    }, {

	      breakpoint: 300,
	      settings: "unslick" // destroys slick

	    }]
	});
})(jQuery);

(function($){
	$('.vid-slides').slick({
		infinite: true,
		slidesToScroll: 1,
		slidesToShow:4,
		autoplay:false,
		prevArrow:'<div class="slider-button prev"><div class="button-inner"><span class="arrow prev"></span><span class="center-line"></span></div></div>',
		nextArrow:'<div class="slider-button next"><div class="button-inner"><span class="arrow next"></span><span class="center-line"></span></div></div>',

	responsive: [{

	      breakpoint: 770,
	      settings: {
	        slidesToShow: 2,
	        arrows:false
	      }

	    }, {

	      breakpoint: 600,
	      settings: {
	        slidesToShow: 1,
	        arrows:false
	      },

	    }]
	  
	});
})(jQuery);

//Testimonial Slider
(function($){
	$('.testimonial-slider').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  infinite:true,
	  fade:true,
	  autoplay:true,
	  autoplaySpeed:3500,
	  arrows:false,
	  dots:true,
	});
})(jQuery);

//Client Hero Slider
function nextSlide() {
	var slidespeed = 5500;
	var slidetimer = null;
    jQuery('figure.current').each(function() {
        var next = jQuery(this).next('figure');
        if (!next.size()) next = jQuery(this).siblings('figure').eq(0);
        jQuery(this).fadeOut(1000).removeClass('current');
        next.fadeIn(1000).addClass('current');
        slidetimer = setTimeout('nextSlide()',slidespeed);
    }); 
    
}
