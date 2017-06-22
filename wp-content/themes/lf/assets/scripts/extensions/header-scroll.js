 (function ($) {
	$.scroll = function (element, options) {
		// **************************************************************
		// Public Properties
		// **************************************************************

		var $c = $(element), // Context 

			scroll = (function ($c, o) {
				var defaults = {
					'entryPoint':400,
					'scrollClass':'scrolled'
				}; 

				var _o = {},
					$scroll = null
				;

				var _InitObjects = function () {
					_o = $.extend({}, defaults, o);
				},

				_CheckPos = function () {
					var top = $(window).scrollTop();
					if (top >= _o.entryPoint) {
						_AddClass();
					}else{
						$($c).removeClass(_o.scrollClass);
					}
				},

				_AddClass = function () {
					$($c).addClass(_o.scrollClass);
				},

				_RemoveClass = function () {
					$($c).removeClass(_o.scrollClass);
				},

				_BindEvents = function () {
					$(document).on('scroll', function(){
						_CheckPos();
					});
				},

				init = (function() {
					_InitObjects();
					_BindEvents();
				})();
			}) ($c, options);
	};

	$.fn.scroll = function (options) {
		return this.each(function () {
			if (undefined === $(this).data('scroll')) {
				var plugin = new $.scroll(this, options);
				$(this).data('scroll', plugin);
			}
		});
	};
})(jQuery);

jQuery('.header').scroll();