!function ($) {

	$(function(){

		// Prevent jumping around if it is an anchor
		$('a[href^=#]').click(function (evt) {
			evt.preventDefault();
		});


		// Fix sub nav on scroll
		var $win = $(window);
		var $nav = $('.subnav');
		var navTop = $('.subnav').length && $('.subnav').offset().top;
		var isFixed = 0;

		processScroll();

		$win.on('scroll', processScroll);

		function processScroll()
		{
			var scrollTop = $win.scrollTop();

			if (scrollTop >= navTop && ! isFixed)
			{
				isFixed = 1;
				$nav.addClass('subnav-fixed');
			}

			else if (scrollTop <= navTop && isFixed)
			{
				isFixed = 0;
				$nav.removeClass('subnav-fixed');
			}
		}

	});

}(window.jQuery);