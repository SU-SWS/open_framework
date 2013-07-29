(function ($) {

Drupal.behaviors.open_framework_override = {
  attach: function (context, settings) {

    // Bootstrap dropdown menu in top nav bar
    // Bootstrap dropdown menu in secondary menu
    $('nav ul, #secondary-menu ul')
      .children('li')
        .filter(':has(.active)')
          .addClass('active')
        .end()
        .filter(':has(ul .active)')
          .removeClass('active')
        .end()
      .end()
      .find('ul a')
        .removeAttr('data-toggle')
        .removeAttr('data-target')

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
        $('.two-sidebars')
          .find('.site-sidebar-first')
            .removeClass('col-lg-3')
            .addClass('col-lg-4')
          .end()
          .find('.site-sidebar-second')
            .removeClass('col-lg-3')
            .addClass('col-lg-12')
          .end()
          .find('.mc-content')
            .removeClass('col-lg-6')
            .addClass('col-lg-8')
          .end()
          .find('.region-sidebar-second .block')
            .addClass('col-lg-4')
          .end();
        $('.sidebar-first')
          .find('.site-sidebar-first')
            .removeClass('col-lg-3')
            .addClass('col-lg-4')
          .end()
          .find('.mc-content')
            .removeClass('col-lg-9')
            .addClass('col-lg-8')
          .end();
        $('.sidebar-second')
          .find('.site-sidebar-second')
            .removeClass('col-lg-3')
            .addClass('col-lg-12')
          .end()
          .find('.mc-content')
            .removeClass('col-lg-9')
            .addClass('col-lg-12')
          .end()
          .find('.region-sidebar-second .block')
            .addClass('col-lg-4')
          .end();
      }

      else {
        $('.two-sidebars')
          .find('.site-sidebar-first')
            .removeClass('col-lg-4')
            .addClass('col-lg-3')
          .end()
          .find('.site-sidebar-second')
            .removeClass('col-lg-12')
            .addClass('col-lg-3')
          .end()
          .find('.mc-content')
            .removeClass('col-lg-8')
            .addClass('col-lg-6')
          .end()
          .find('.region-sidebar-second .block')
            .removeClass('col-lg-4')
          .end();
        $('.sidebar-first')
          .find('.site-sidebar-first')
            .removeClass('col-lg-4')
            .addClass('col-lg-3')
          .end()
          .find('.mc-content')
            .removeClass('col-lg-8')
            .addClass('col-lg-9')
          .end();
        $('.sidebar-second')
          .find('.site-sidebar-second')
            .removeClass('col-lg-12')
            .addClass('col-lg-3')
          .end()
          .find('.mc-content')
            .removeClass('col-lg-12')
            .addClass('col-lg-9')
          .end()
          .find('.region-sidebar-second .block')
            .removeClass('col-lg-4')
          .end();
      }
    }

    // Update CSS classes based on window load and resize
    $(window)
      .load(responsive_behaviors)
      .resize(responsive_behaviors);
  }
}

})(jQuery);
