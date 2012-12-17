$(document).ready(function(){
	
	// Bootstrap Dropdown Menu
	$('#main-menu ul').addClass('nav');
	$('#main-menu ul').removeClass('menu');
	$('#main-menu ul ul').removeClass('nav');
	$('#main-menu ul li.expanded').addClass('dropdown');
	$('#main-menu ul li.expanded a').addClass('dropdown-toggle');
	$('#main-menu ul li.expanded ul').addClass('dropdown-menu');
	$('#main-menu ul.dropdown-menu li').removeClass('active');
	$('#main-menu ul li').removeClass('expanded collapsed leaf');
	$('#main-menu ul li:has(.active)').addClass('active');
	$('#main-menu ul.nav > li > a.dropdown-toggle').append(' <b class="caret"></b>');	
	
	// Bootstrap Search Form
	$('#search-block-form').addClass('form-search');
	$('#search-block-form .container-inline').addClass('input-append');
    $('#search-block-form .form-text').addClass('input-medium search-query');
    $('#search-block-form .form-submit').addClass('btn');
	$('#search-block-form .form-item').addClass('pull-left');
    $('#search-block-form .form-actions').addClass('pull-left');
	$('#header-search #search-block-form').addClass('pull-right');
});