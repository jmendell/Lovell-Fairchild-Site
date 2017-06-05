(function($){
	$('.media-slides').slick({
		infinite: true,
		slidesToShow: 4,
		fade:false,
		pauseOnHover:false,
		autoplay:true,
		autoplaySpeed:3000,
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