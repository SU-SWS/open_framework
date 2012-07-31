<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<title><?php print $head_title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php print $head; ?><?php print $styles; ?><?php print $scripts; ?>
<script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
<!--[if lt IE 9]>
<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body class="<?php print $body_classes; ?> <?php if($search_box): ?>searchbox<?php endif; ?>">
<div id="site-content">
  <div id="skipnav">
    <p>Skip to:</p>
    <ul>
      <li><a href="#content">Main Content</a></li>
    </ul>
  </div>
  <!--/#skipnav -->
  <div id="page-content">
    <div class="container">
      <?php if ($top): ?>
      <div id="top" class="row"><?php print $top ?></div>
      <?php endif; ?>
      <div id="header" role="banner" class="clear-block">
        <?php if ($logo): ?>
        <div id="logo"> <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></a> </div>
        <?php endif; ?>
        <div id="site">
          <?php if ($site_name): ?>
          <div id="name"><a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>"><?php print $site_name; ?></a></div>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
          <div id="slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div>
        <?php if($search_box): ?>
        <div id="search" role="search"><?php print $search_box; ?></div>
        <?php endif; ?>
      </div>
      <!-- /#header -->
      <?php if (($primary_links && (isset($primary_links))) || $nav): ?>
      <div id="navigation-primary" role="navigation" class="clear-block">
        <?php if (($primary_links && (isset($primary_links))) && empty($nav)): $menu_primary = variable_get('menu_primary_links_source', 'primary-links'); print menu_tree($menu_primary); endif; ?>
        <?php if ($nav): print $nav; endif; ?>
      </div>
      <?php endif; ?>
      <!-- /#navigation-primary -->
      <?php if ($upper): ?>
      <div id="upper" class="row"><?php print $upper ?></div>
      <?php endif; ?>
      <div id="main-content">
        <div id="content-header" class="row">
          <div class="span12">
            <?php if ($show_messages && $messages): print $messages; endif; ?>
            <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
            <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
            <?php if ($tabs): print $tabs; endif; ?>
            <?php if ($tabs2): print $tabs2; endif; ?>
            <?php if ($tabs): print '</div>'; endif; ?>
            <?php if ($help): ?>
            <div id="help"><?php print $help; ?></div>
            <?php endif; ?>
            <?php if ($feature): ?>
            <div id="feature" class="row"><?php print $feature ?></div>
            <?php endif; ?>
          </div>
        </div>
        <!-- /#content-header -->
        <div id="content" class="row">
          <?php if ($left): ?>
          <div id="sidebar-first" class="sidebar span3"><?php print $left; ?></div>
          <?php endif; ?>
          <!-- /#sidebar-first -->
          <div id="main" role="main" class="<?php if ($left && $right): print 'span6'; elseif ($left || $right): print 'span9'; else: print 'span12';	endif; ?>">
            <?php if ($content_top): ?>
            <div id="content-top" class="row"><?php print $content_top; ?></div>
            <?php endif; ?>
            <?php if ($content_upper): ?>
            <div id="content-upper" class="row"><?php print $content_upper; ?></div>
            <?php endif; ?>
            <?php print $content; ?>
            <?php if ($content_lower): ?>
            <div id="content-lower" class="row"><?php print $content_lower; ?></div>
            <?php endif; ?>
            <?php if ($content_bottom): ?>
            <div id="content-bottom" class="row"><?php print $content_bottom; ?></div>
            <?php endif; ?>
          </div>
          <!-- /#main -->
          <?php if ($right): ?>
          <div id="sidebar-second" class="sidebar span3"><?php print $right; ?></div>
          <?php endif; ?>
          <!-- /#sidebar-second --> 
        </div>
        <!-- /#content -->
        <?php if ($lower): ?>
        <div id="lower" class="row"><?php print $lower ?></div>
        <?php endif; ?>
      </div>
      <!--/#main-content-->
      <div id="footer" role="contentinfo" class="clear-block">
        <?php if (!empty($footer_message)): ?>
        <?php print $footer_message; ?>
        <?php endif; ?>
        <?php if ($secondary_links && (isset($secondary_links))): ?>
        <?php $linknum_secondary = count($secondary_links); print '<div id="navigation-secondary" role="navigation" class="clear-block across-' . $linknum_secondary . '">'; $menu_secondary = variable_get('menu_secondary_links_source', 'secondary-links'); print menu_tree($menu_secondary); print '</div>'; ?>
        <?php endif; ?>
        <!-- /#navigation-secondary --> 
      </div>
      <!--/#footer-->
      <?php if ($bottom): ?>
      <div id="bottom" class="row"><?php print $bottom ?></div>
      <?php endif; ?>
      <!-- /#bottom --> 
    </div>
  </div>
  <!--/#page-content--> 
  <?php print $closure; ?></div>
<!-- /#site-content -->
</body>
</html>
