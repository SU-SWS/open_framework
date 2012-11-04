$(document).ready(function(){

	// Bootstrap Dropdown Menu
	$('#main-menu ul').addClass('nav');
	$('#main-menu ul').removeClass('menu');
	$('#main-menu ul ul').removeClass('nav');
	$('#main-menu ul li.expanded').addClass('dropdown');
	$('#main-menu ul li.expanded a').addClass('dropdown-toggle');
	// $('#main-menu ul li.expanded a').attr('data-toggle', 'dropdown');
	$('#main-menu ul li.expanded ul').addClass('dropdown-menu');
	$('#main-menu ul.dropdown-menu li').removeClass('active');
	$('#main-menu ul li').removeClass('expanded collapsed leaf');
	$('#main-menu ul li:has(.active)').addClass('active');
	$('#main-menu ul.nav > li > a.dropdown-toggle').append(' <b class="caret"></b>');
});



