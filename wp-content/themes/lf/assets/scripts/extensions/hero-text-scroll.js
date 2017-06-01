(function ($) {
	$.scrollText = function (element, options) {

		var $c = $(element),

			scrollText = (function ($c, o) {
				var defaults = {
					'tree' : '.tree',
					'breakpoint' : 768
				}; 

				var _o = {},
					$scrollText = null
				;

				var _InitObjects = function () {
					_o = $.extend({}, defaults, o);
				},

				_GetParams = function () {
					var treeHeight = $(_o.tree).height(),
						screenWidth = $(window).width();

					if (screenWidth > _o.breakpoint) {
						_InitScene(treeHeight * .7);
					}
				},

				_InitScene = function (duration) {
					var controller = new ScrollMagic.Controller();

					new ScrollMagic.Scene({
							triggerElement: '.tree',
							duration: duration
						})
						.setPin(".title-wrap")
						.addTo(controller);
				}

				_BindEvents = function () {
					
				},

				init = (function() {
					_InitObjects();
					_BindEvents();
					_GetParams();
				})();
			}) ($c, options);
	};

	$.fn.scrollText = function (options) {
		return this.each(function () {
			if (undefined === $(this).data('scrollText')) {
				var plugin = new $.scrollText(this, options);
				$(this).data('scrollText', plugin);
			}
		});
	};
})(jQuery);