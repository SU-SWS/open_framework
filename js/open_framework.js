$(document).ready(function(){
		
	// Header Drupal Search Box
	$('#header [name=search_block_form]').val('Search this site...');
	$('#header [name=search_block_form]').focus(function () {
	$('#header [name=search_block_form]').val('');
	});
	
	// Hide border for image links
	$('a:has(img)').css('border', 'none');
	
});

// Hide Address Bar in Mobile View
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){
		if (window.pageYOffset < 1) {
		window.scrollTo(0, 1);
	}
}


