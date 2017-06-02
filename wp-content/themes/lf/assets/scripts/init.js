jQuery('.responsive').bgResponsiveImage();
jQuery(document).menu();
jQuery(document).toggleLogo();
jQuery('.video-modal').videoModal();
//jQuery('.tree').scrollText();
jQuery('input[type="checkbox"]').checkbox();


jQuery(document).ready(function($){
	$(window).scroll(function(){
		var scroll = $(window).scrollTop()-175;
		console.log(scroll);
		if( $(window).width()>768 ) {
			if(scroll <180){
				$('.title-wrap').css({
					//'margin-top': scroll
					'transform': 'translate(0,'+(scroll+175)+'px)',
					'transition': 'all .75s'
				});
			}
			if(scroll >90 && scroll <176) {
				$('.title-wrap').css({
					
					//'zoom': (scroll/.875)+'%'
					//'transform': 'scale('+(scroll+1)+')'
				});
			}
		}
	});
});