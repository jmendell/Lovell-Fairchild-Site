(function ($) {
	$.toggleLogo = function (element, options) {

		var $c = $(element),

			toggleLogo = (function ($c, o) {
				var defaults = {
					'logo': $lf.logo,
					'logoAlt': $lf.logoAlt
				}; 

				var _o = {},
					$toggleLogo = null
				;

				var _InitObjects = function () {
					_o = $.extend({}, defaults, o);
				},

				_LoadLogos = function () {
					var logo = _o.logoAlt;
					_PreloadImage(logo, function (){});
				},

				_ToggleLogo = function (color) {
					var img = $('.brand').find('img');

					img.attr('src', color);
				},

				_PreloadImage = function (url, callback) {
					var img = new Image();
					img.src = url;

					img.onload = function() {
						callback();
					}
				},

				_BindEvents = function () {
					$(window).on('logoDark', function() {
						_ToggleLogo(_o.logoAlt);
					});
					$(window).on('logoLight', function() {
						_ToggleLogo(_o.logo);
					});

				},

				init = (function() {
					_InitObjects();
					_BindEvents();
					_LoadLogos();
				})();
			}) ($c, options);
	};

	$.fn.toggleLogo = function (options) {
		return this.each(function () {
			if (undefined === $(this).data('toggleLogo')) {
				var plugin = new $.toggleLogo(this, options);
				$(this).data('toggleLogo', plugin);
			}
		});
	};
})(jQuery);