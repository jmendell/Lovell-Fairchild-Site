(function ($) {
	$.videoModal = function (element, options) {

		var $c = $(element),

			videoModal = (function ($c, o) {
				var defaults = {
					'inner' : $c.find('.modal-inner')
				}; 

				var _o = {},
					$videoModal = null
				;

				var _InitObjects = function () {
					_o = $.extend({}, defaults, o);
				},

				_GetParams = function ($$) {
					var type = $$.attr('data-video-type');
					var modalData = $$.attr('data-video-modal');

					switch(type) {
						case 'youtube':
							_Youtube(modalData);
							break;
					}
				},

				_Youtube = function (id) {
					var html = "<iframe src='https://www.youtube.com/embed/" + id + "?rel=0&showinfo=0&autoplay=1' frameborder='0' allowfullscreen></iframe>";

					_o.inner.html(html);
					_ShowModal();
				},

				_ShowModal = function () {
					$c.fadeIn();
				},

				_CloseModal = function () {
					_o.inner.html('');
					$c.fadeOut();
				},

				_BindEvents = function () {
					$('*[data-video-type]').click(function(){
						_GetParams($(this));
					});
					$('.overlay').click(function(){
						_CloseModal();
					});
					$('.escape').click(function(){
						_CloseModal();
					});
					$(document).keyup(function(e){
						if(e.keyCode === 27){
							_CloseModal();
						}
					});
				},

				init = (function() {
					_InitObjects();
					_BindEvents();
				})();
			}) ($c, options);
	};

	$.fn.videoModal = function (options) {
		return this.each(function () {
			if (undefined === $(this).data('videoModal')) {
				var plugin = new $.videoModal(this, options);
				$(this).data('videoModal', plugin);
			}
		});
	};
})(jQuery);