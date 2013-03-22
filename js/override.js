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

    // Turn off Bootstrap dropdown data attributes in sidebars
    $('#sidebar-first, #sidebar-second')
      .find('a')
        .removeAttr('data-toggle')
        .removeAttr('data-target')
      .end()
      .find('ul')
        .removeClass('dropdown-menu', 'dropdown-submenu')
      .end();

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
          .find('#sidebar-first')
            .removeClass('span3')
            .addClass('span4')
          .end()
          .find('#sidebar-second')
            .removeClass('span3')
            .addClass('span12')
          .end()
          .find('#content')
            .removeClass('span6')
            .addClass('span8')
          .end()
          .find('.region-sidebar-second .block')
            .addClass('span4')
          .end();
        $('.sidebar-first')
          .find('#sidebar-first')
            .removeClass('span3')
            .addClass('span4')
          .end()
          .find('#content')
            .removeClass('span9')
            .addClass('span8')
          .end();
        $('.sidebar-second')
          .find('#sidebar-second')
            .removeClass('span3')
            .addClass('span12')
          .end()
          .find('#content')
            .removeClass('span9')
            .addClass('span12')
          .end()
          .find('.region-sidebar-second .block')
            .addClass('span4')
          .end();
      }

      else {
        $('.two-sidebars')
          .find('#sidebar-first')
            .removeClass('span4')
            .addClass('span3')
          .end()
          .find('#sidebar-second')
            .removeClass('span12')
            .addClass('span3')
          .end()
          .find('#content')
            .removeClass('span8')
            .addClass('span6')
          .end()
          .find('.two-sidebars .region-sidebar-second .block')
            .removeClass('span4')
          .end();
        $('.sidebar-first')
          .find('#sidebar-first')
            .removeClass('span4')
            .addClass('span3')
          .end()
          .find('#content')
            .removeClass('span8')
            .addClass('span9')
          .end();
        $('.sidebar-second')
          .find('#sidebar-second')
            .removeClass('span12')
            .addClass('span3')
          .end()
          .find('#content')
            .removeClass('span12')
            .addClass('span9')
          .end()
          .find('.sidebar-second .region-sidebar-second .block')
            .removeClass('span4')
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
