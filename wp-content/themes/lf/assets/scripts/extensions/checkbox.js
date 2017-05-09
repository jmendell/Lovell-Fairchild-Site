(function ($) {
	$.checkbox = function (element, options) {

		var $c = $(element),

			checkbox = (function ($c, o) {
				var defaults = {
					
				}; 

				var _o = {},
					$checkbox = null
				;

				var _InitObjects = function () {
					_o = $.extend({}, defaults, o);
				},

				_Setup = function () {
					$c.wrap('<span class="checkbox-wrapper"></span>');
				},

				_ChangeState = function ($$) {
					$$.toggleClass('checked');
					$c.prop('checked', !$c.prop('checked'));
				},

				_BindEvents = function () {
					$(document).on('click', '.checkbox-wrapper', function (){
						_ChangeState($(this));
					});
				},

				init = (function() {
					_InitObjects();
					_BindEvents();
					_Setup();
				})();
			}) ($c, options);
	};

	$.fn.checkbox = function (options) {
		return this.each(function () {
			if (undefined === $(this).data('checkbox')) {
				var plugin = new $.checkbox(this, options);
				$(this).data('checkbox', plugin);
			}
		});
	};
})(jQuery);