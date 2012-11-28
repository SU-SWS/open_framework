(function ($) {

  Drupal.behaviors.open_framework = {
    attach: function (context, settings) {


			// Reset iPhone, iPad, and iPod zoom on orientation change to landscape
			var mobile_timer = false;
			if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/iPod/i))) {
				$('#viewport').attr('content','width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0');
				$(window).bind('gesturestart',function () {
					clearTimeout(mobile_timer);
					$('#viewport').attr('content','width=device-width,minimum-scale=1.0,maximum-scale=10.0');
				}).bind('touchend',function () {
					clearTimeout(mobile_timer);
					mobile_timer = setTimeout(function () {
						$('#viewport').attr('content','width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0');
					},1000);
				});
			}

			// Header Drupal Search Box
			$('#header [name=search_block_form]').val('Search this site...');
			$('#header [name=search_block_form]').focus(function () {
			$('#header [name=search_block_form]').val('');
			});

			// Hide border for image links
			$('a:has(img)').css('border', 'none');

		}
	}
}(jQuery));



// Hide Address Bar in Mobile View
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){
		if (window.pageYOffset < 1) {
		window.scrollTo(0, 1);
	}
}


