<div id="skipnav" class="element-invisible">
  <div class="container">
    <p>Skip to:</p>
    <ul>
      <li><a href="#content" class="element-invisible element-focusable"><?php print t('Skip to content'); ?></a></li>
      <?php if ($main_menu): ?>
      <li><a href="#main-menu" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a></li>
      <?php endif; ?>
    </ul>
  </div>
</div>
<!-- /#skipnav -->
<div id="header" class="clearfix">
  <div class="container">
    <?php if ($logo): ?>
    <div id="logo"> <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a></div>
    <?php endif; ?>
    <?php if ($site_name || $site_slogan): ?>
    <div id="name-and-slogan">
      <?php if ($site_name): ?>
      <div id="site-name">
        <h1><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1>
      </div>
      <?php endif; ?>
      <?php if ($site_slogan): ?>
      <div id="site-slogan">
        <h2><?php print $site_slogan; ?></h2>
      </div>
      <?php endif; ?>
    </div>
    <!-- /#name-and-slogan -->
    <?php endif; ?>
    <div id="header-content"><?php print render($page['header']); ?> </div>
  </div>
</div>
<!-- /#header -->
<?php if ($main_menu): ?>
<div id="main-menu" class="clearfix">
  <div class="container"> <?php print render($main_menu_expanded); ?> </div>
</div>
<!-- /#main-menu -->
<?php endif; ?>
<?php if ($messages): ?>
<div id="messages" class="clearfix">
  <div class="container"> <?php print $messages; ?> </div>
</div>
<!-- /#messages -->
<?php endif; ?>
<div id="main" class="clearfix">
  <div class="container">
    <?php if ($breadcrumb): ?>
    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>
    <?php if ($page['page_top']): ?>
    <div id="page-top" class="row"> <?php print render($page['page_top']); ?> </div>
    <?php endif; ?>
    <?php if ($page['page_upper']): ?>
    <div id="page-upper" class="row"> <?php print render($page['page_upper']); ?> </div>
    <?php endif; ?>
    <div class="row">
      <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="sidebar span3">
        <div class="row-fluid"><?php print render($page['sidebar_first']); ?></div>
      </div>
      <!-- /#sidebar-first -->
      <?php endif; ?>
      <div id="content" class="<?php if (($page['sidebar_first']) && ($page['sidebar_second'])): print 'span6'; elseif (($page['sidebar_first']) || ($page['sidebar_second'])): print 'span9'; else: print 'span12'; endif; ?>">
        <?php if ($page['highlighted']): ?>
        <div id="highlighted" class="row-fluid"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>
        <?php if ($page['content_top']): ?>
        <div id="content-top" class="row-fluid"> <?php print render($page['content_top']); ?> </div>
        <?php endif; ?>
        <?php if ($page['content_upper']): ?>
        <div id="content-upper" class="row-fluid"> <?php print render($page['content_upper']); ?> </div>
        <?php endif; ?>
        <div id="main-content" class="row-fluid"> <?php print render($title_prefix); ?>
          <?php if ($title): ?>
          <h1 class="title" id="page-title"> <?php print $title; ?> </h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php if ($tabs): ?>
          <div class="tabs"> <?php print render($tabs); ?> </div>
          <?php endif; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
          <?php endif; ?>
          <?php print render($page['content']); ?> <?php print $feed_icons; ?> </div>
        <?php if ($page['content_lower']): ?>
        <div id="content-lower" class="row-fluid"> <?php print render($page['content_lower']); ?> </div>
        <?php endif; ?>
        <?php if ($page['content_bottom']): ?>
        <div id="content-bottom" class="row-fluid"> <?php print render($page['content_bottom']); ?> </div>
        <?php endif; ?>
      </div>
      <!-- /#content -->
      <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="sidebar span3">
        <div class="row-fluid"><?php print render($page['sidebar_second']); ?></div>
      </div>
      <!-- /#sidebar-second -->
      <?php endif; ?>
    </div>
    <?php if ($page['page_lower']): ?>
    <div id="page-lower" class="row"> <?php print render($page['page_lower']); ?> </div>
    <?php endif; ?>
    <?php if ($page['page_bottom']): ?>
    <div id="page-bottom" class="row"> <?php print render($page['page_bottom']); ?> </div>
    <?php endif; ?>
  </div>
</div>
<!-- /#main, /#main-wrapper -->
<?php if ($secondary_menu): ?>
<div id="secondary-menu" class="navigation">
  <div class="container"> <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?> </div>
</div>
<!-- /#secondary-menu -->
<?php endif; ?>
<div id="footer-wrapper">
  <div class="container">
    <?php if ($page['footer']): ?>
    <div id="footer" class="clearfix"> <?php print render($page['footer']); ?> </div>
    <!-- /#footer -->
    <?php endif; ?>
  </div>
</div>
<!-- /.section, /#footer-wrapper -->
