$(document).ready(function(){
	
	// Bootstrap Dropdown Menu
	$('#main-menu ul').addClass('nav');
	$('#main-menu ul').removeClass('menu')
	$('#main-menu ul ul').removeClass('nav')
	$('#main-menu ul li.expanded').addClass('dropdown');
	$('#main-menu ul li.expanded a').addClass('dropdown-toggle');
	$('#main-menu ul li.expanded a').attr('data-toggle', 'dropdown');
	$('#main-menu ul li.expanded ul').addClass('dropdown-menu');
	$('#main-menu ul.dropdown-menu li').removeClass('active');
	$('#main-menu ul li').removeClass('expanded collapsed leaf')
	$('#main-menu ul li:has(.active)').addClass('active');
	$('#main-menu ul.nav > li > a.dropdown-toggle').append(' <b class="caret"></b>');
	
	// Header Drupal Search Box
	$('#header [name=search_theme_form]').val('Search this site...');
	$('#header [name=search_theme_form]').focus(function () {
	$('#header [name=search_theme_form]').val('');
	});
	
	// Hide border for image links
	$('a:has(img)').css('border', 'none');

	if (document.documentElement.clientWidth <= 480) {
	  // Mobile dropdown menu conversion
	  $('.sidebar ul.menu').each(function(){
	  var list=$(this),
		  select=$(document.createElement('select')).insertBefore($(this).hide()).change(function(){
		window.location.href=$(this).val();
	  });
	  $('>li a', this).each(function(){
		var option=$(document.createElement('option'))
		 .appendTo(select)
		 .val(this.href)
		 .html($(this).html());
		if($(this).attr('class') === 'selected'){
		  option.attr('selected','selected');
		}
	  });
	  list.remove();
	  });
	}
});

// Hide Address Bar in Mobile View
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){
		if (window.pageYOffset < 1) {
		window.scrollTo(0, 1);
	}
}


