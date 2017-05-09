(function ($) {
	$.menu = function (element, options) {

		var $c = $(element),

			menu = (function ($c, o) {
				var defaults = {
					'logoDefault' : $('.brand').find('img').attr('src'),
					'toggle' : $('.menu-toggle')
				}; 

				var _o = {},
					$menu = null
				;

				var _InitObjects = function () {
					_o = $.extend({}, defaults, o);
				},

				_GetParams = function () {
					var modalOpen = _o.toggle.hasClass('open');

					if (modalOpen) {
						_HideModal();
					}else{
						_ShowModal();
					}
				},

				_ShowModal = function () {
					_RegisterEvent('logoDark');
					_o.toggle.addClass('open');
					$('.main-menu-modal').fadeIn();
				},

				_HideModal = function () {
					var logoToShow = _o.logoDefault == $lf.logo ? 'logoLight' : 'logoDark';

					_RegisterEvent(logoToShow);
					_o.toggle.removeClass('open');
					$('.main-menu-modal').fadeOut();
				},

				_RegisterEvent = function (event) {
					var evt = new CustomEvent(event);
					window.dispatchEvent(evt);
				},

				_BindEvents = function () {
					$('.menu-toggle').click(function(){
						_GetParams();
					});
					$(document).keyup(function(e){
						if(e.keyCode === 27){
							_CloseMenu();
						}
					});
				},

				init = (function() {
					_InitObjects();
					_BindEvents();
				})();
			}) ($c, options);
	};

	$.fn.menu = function (options) {
		return this.each(function () {
			if (undefined === $(this).data('menu')) {
				var plugin = new $.menu(this, options);
				$(this).data('menu', plugin);
			}
		});
	};
})(jQuery);