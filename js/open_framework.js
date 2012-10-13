$(document).ready(function(){
		
	// Header Drupal Search Box
	$('#header [name=search_block_form]').val('Search this site...');
	$('#header [name=search_block_form]').focus(function () {
	$('#header [name=search_block_form]').val('');
	});
	
	// Hide border for image links
	$('a:has(img)').css('border', 'none');
	
	// Update CSS classes based on window load
	$(window).load(function() {
		var width = $(window).width();
		
		if ((width >= 751) && (width < 963)) {
		$('.two-sidebars #sidebar-first').removeClass('span3');
		$('.two-sidebars #sidebar-first').addClass('span4');
		$('.two-sidebars #sidebar-second').removeClass('span3');
		$('.two-sidebars #sidebar-second').addClass('span12');
		$('.two-sidebars #content').removeClass('span6');
		$('.two-sidebars #content').addClass('span8');
		$('.two-sidebars .region-sidebar-second .block').addClass('span4');

    	$('.one-sidebar #sidebar-first').removeClass('span3');
		$('.one-sidebar #sidebar-first').addClass('span4');
		$('.one-sidebar #sidebar-second').removeClass('span3');
		$('.one-sidebar #sidebar-second').addClass('span4');
		$('.one-sidebar #content').removeClass('span9');
		$('.one-sidebar #content').addClass('span8');
		}
		
		else {
		$('.two-sidebars #sidebar-first').removeClass('span4');
		$('.two-sidebars #sidebar-first').addClass('span3');
		$('.two-sidebars #sidebar-second').removeClass('span12');
		$('.two-sidebars #sidebar-second').addClass('span3');
		$('.two-sidebars #content').removeClass('span8');
		$('.two-sidebars #content').addClass('span6');
		$('.two-sidebars .region-sidebar-second .block').removeClass('span4');

    	$('.one-sidebar #sidebar-first').removeClass('span4');
		$('.one-sidebar #sidebar-first').addClass('span3');
		$('.one-sidebar #sidebar-second').removeClass('span4');
		$('.one-sidebar #sidebar-second').addClass('span3');
		$('.one-sidebar #content').removeClass('span8');
		$('.one-sidebar #content').addClass('span9');
		}
	});
	
	// Update CSS classes based on window resize
	$(window).resize(function() {
		var width = $(window).width();
		
		if ((width >= 751) && (width < 963)) {
		$('.two-sidebars #sidebar-first').removeClass('span3');
		$('.two-sidebars #sidebar-first').addClass('span4');
		$('.two-sidebars #sidebar-second').removeClass('span3');
		$('.two-sidebars #sidebar-second').addClass('span12');
		$('.two-sidebars #content').removeClass('span6');
		$('.two-sidebars #content').addClass('span8');
		$('.two-sidebars .region-sidebar-second .block').addClass('span4');
    	$('.one-sidebar #sidebar-first').removeClass('span3');
		$('.one-sidebar #sidebar-first').addClass('span4');
		$('.one-sidebar #sidebar-second').removeClass('span3');
		$('.one-sidebar #sidebar-second').addClass('span4');
		$('.one-sidebar #content').removeClass('span9');
		$('.one-sidebar #content').addClass('span8');
		}

		else {
		$('.two-sidebars #sidebar-first').removeClass('span4');
		$('.two-sidebars #sidebar-first').addClass('span3');
		$('.two-sidebars #sidebar-second').removeClass('span12');
		$('.two-sidebars #sidebar-second').addClass('span3');
		$('.two-sidebars #content').removeClass('span8');
		$('.two-sidebars #content').addClass('span6');
		$('.two-sidebars .region-sidebar-second .block').removeClass('span4');
    	$('.one-sidebar #sidebar-first').removeClass('span4');
		$('.one-sidebar #sidebar-first').addClass('span3');
		$('.one-sidebar #sidebar-second').removeClass('span4');
		$('.one-sidebar #sidebar-second').addClass('span3');
		$('.one-sidebar #content').removeClass('span8');
		$('.one-sidebar #content').addClass('span9');
		}
	});
});

// Hide Address Bar in Mobile View
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){
		if (window.pageYOffset < 1) {
		window.scrollTo(0, 1);
	}
}


