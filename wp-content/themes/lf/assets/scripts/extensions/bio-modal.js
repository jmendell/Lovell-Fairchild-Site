(function ($) {
	$.bioModal = function (element, options) {

		var $c = $(element),

			bioModal = (function ($c, o) {
				var defaults = {
					'inner' : $c.find('.team-bio')
				}; 

				var _o = {},
					$bioModal = null
				;

				var _InitObjects = function () {
					_o = $.extend({}, defaults, o);
				},

				_GetParams = function ($$) {
					var bioIndex = $$.attr('data-index');
					_BuildModal(bioIndex);
				},

				_BuildModal = function ($bioIndex) {
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
					$('.team-member').on('click', function(){
						_GetParams($(this));
					});
					$('.modal-overlay').click(function(){
						_CloseModal();
					});
					$('.escape').click(function(){
						_CloseModal();
					});
				},

				init = (function() {
					_InitObjects();
					_BindEvents();
				})();
			}) ($c, options);
	};

	$.fn.bioModal = function (options) {
		return this.each(function () {
			if (undefined === $(this).data('bioModal')) {
				var plugin = new $.bioModal(this, options);
				$(this).data('bioModal', plugin);
			}
		});
	};
})(jQuery);