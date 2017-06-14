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