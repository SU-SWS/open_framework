(function ($) {

Drupal.behaviors.open_framework = {
  attach: function (context, settings) {
    // Reset iPhone, iPad, and iPod zoom on orientation change to landscape
    var mobile_timer = false;
    if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/iPod/i))) {
      $('#viewport').attr('content', 'width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0');
      $(window)
        .bind('gesturestart', function () {
          clearTimeout(mobile_timer);
          $('#viewport').attr('content', 'width=device-width,minimum-scale=1.0,maximum-scale=10.0');
        })
        .bind('touchend', function () {
          clearTimeout(mobile_timer);
          mobile_timer = setTimeout(function () {
            $('#viewport').attr('content', 'width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0');
          }, 1000);
        });
    }
	
    // Header Drupal Search Box
    $('#header [name=search_block_form]')
      .val('Search this site...')
      .focus(function () {
        $(this).val('');
      });
	  
    // Hide border for image links
    $('a:has(img)').css('border', 'none');
	
	// Equal Column Height on load and resize
	// Credit: http://codepen.io/micahgodbolt/pen/FgqLc
	equalheight = function(container){

	var currentTallest = 0,
		 currentRowStart = 0,
		 rowDivs = new Array(),
		 $el,
		 topPosition = 0;
	 $(container).each(function() {
	
	   $el = $(this);
	   $($el).height('auto')
	   topPostion = $el.position().top;
	
	   if (currentRowStart != topPostion) {
		 for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
		   rowDivs[currentDiv].height(currentTallest);
		 }
		 rowDivs.length = 0; // empty the array
		 currentRowStart = topPostion;
		 currentTallest = $el.height();
		 rowDivs.push($el);
	   } else {
		 rowDivs.push($el);
		 currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
	  }
	   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
		 rowDivs[currentDiv].height(currentTallest);
	   }
	 });
	}
	
	$(window).load(function() {
	  equalheight('.column');
	});
	
	$(window).resize(function(){
	  equalheight('.column');
	});

		
	// Add keyboard focus to .element-focusable elements in webkit browsers.
	$('.element-focusable').on('click', function() {
		$($(this).attr('href')).attr('tabindex', '-1').focus();
		});
		
	// Add placeholder value support for older browsers
    $('input, textarea').placeholder();

  }
}

})(jQuery);

//Add legacy IE addEventListener support (http://msdn.microsoft.com/en-us/library/ms536343%28VS.85%29.aspx#1)
if (!window.addEventListener) {
  window.addEventListener = function (type, listener, useCapture) {
    attachEvent('on' + type, function() { listener(event) });
  }
}
//end legacy support addition

// Hide Address Bar in Mobile View
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){
  if (window.pageYOffset < 1) {
    window.scrollTo(0, 1);
  }
}