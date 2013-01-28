(function ($) {

  Drupal.behaviors.open_framework = {
    attach: function (context, settings) {
		
			// Bootstrap dropdown menu in top nav bar
			$('nav ul > li:has(.active)').addClass('active');
			$('nav ul > li:has(ul .active)').removeClass('active');			
	        $('nav ul > li > ul > li:has(.active)').removeClass('active');	
			$('nav ul ul a').removeAttr('data-toggle','data-target');
			
			// Bootstrap dropdown menu in secondary menu
			$('#secondary-menu ul > li:has(.active)').addClass('active');
			$('#secondary-menu ul > li:has(ul .active)').removeClass('active');			
	        $('#secondary-menu ul > li > ul > li:has(.active)').removeClass('active');	
			$('#secondary-menu ul ul a').removeAttr('data-toggle','data-target');
			
			// Turn off Bootstrap dropdown data attributes in sidebars
			$('#sidebar-first a').removeAttr('data-toggle','data-target');
			$('#sidebar-first ul').removeClass('dropdown-menu','dropdown-submenu');
			$('#sidebar-second a').removeAttr('data-toggle','data-target');
			$('#sidebar-second ul').removeClass('dropdown-menu','dropdown-submenu');
			
			// Set up theme specific responsive behaviors
			function responsive_behaviors () {
				var width = $(window).width();
				
				if (width < 751) {
				$('nav li li.expanded').removeClass('dropdown-submenu');
				$('nav ul ul ul').removeClass('dropdown-menu');
				}
				
				else {
				$('nav li li.expanded').addClass('dropdown-submenu');
				$('nav ul ul ul').addClass('dropdown-menu');
				}
				
				if ((width >= 751) && (width < 963)) {
				$('.two-sidebars #sidebar-first').removeClass('span3');
				$('.two-sidebars #sidebar-first').addClass('span4');
				$('.two-sidebars #sidebar-second').removeClass('span3');
				$('.two-sidebars #sidebar-second').addClass('span12');
				$('.two-sidebars #content').removeClass('span6');
				$('.two-sidebars #content').addClass('span8');
				$('.two-sidebars .region-sidebar-second .block').addClass('span4');
		    	$('.sidebar-first #sidebar-first').removeClass('span3');
				$('.sidebar-first #sidebar-first').addClass('span4');
				$('.sidebar-first #content').removeClass('span9');
				$('.sidebar-first #content').addClass('span8');
				$('.sidebar-second #sidebar-second').removeClass('span3');
				$('.sidebar-second #sidebar-second').addClass('span12');
				$('.sidebar-second #content').removeClass('span9');
				$('.sidebar-second #content').addClass('span12');
				$('.sidebar-second .region-sidebar-second .block').addClass('span4');
				}

				else {
				$('.two-sidebars #sidebar-first').removeClass('span4');
				$('.two-sidebars #sidebar-first').addClass('span3');
				$('.two-sidebars #sidebar-second').removeClass('span12');
				$('.two-sidebars #sidebar-second').addClass('span3');
				$('.two-sidebars #content').removeClass('span8');
				$('.two-sidebars #content').addClass('span6');
				$('.two-sidebars .region-sidebar-second .block').removeClass('span4');
		    	$('.sidebar-first #sidebar-first').removeClass('span4');
				$('.sidebar-first #sidebar-first').addClass('span3');
				$('.sidebar-first #content').removeClass('span8');
				$('.sidebar-first #content').addClass('span9');
				$('.sidebar-second #sidebar-second').removeClass('span12');
				$('.sidebar-second #sidebar-second').addClass('span3');
				$('.sidebar-second #content').removeClass('span12');
				$('.sidebar-second #content').addClass('span9');
				$('.sidebar-second .region-sidebar-second .block').removeClass('span4');
				}
			}
			
			// Update CSS classes based on window load and resize
			$(window).load(responsive_behaviors);
			$(window).resize(responsive_behaviors);

		}
	}
}(jQuery));



