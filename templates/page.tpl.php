<div id="site-content">
  <div id="skipnav">
    <p>Skip to:</p>
    <ul>
      <li><a href="#main" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a></li>
      <?php if ($main_menu): ?>
      <li><a href="#nav" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a></li>
      <?php endif; ?>
    </ul>
  </div>
  <!-- /#skipnav -->
  <div id="page-content">
    <div class="container">
      <?php if ($page['top']): ?>
      <div id="top" class="row"><?php print render($page['top']); ?></div>
      <?php endif; ?>
      <div id="header" role="banner" class="clearfix">
        <?php if ($page['header']): ?>
        <?php print render($page['header']); ?>
        <?php endif; ?>
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
      </div>
      <!-- /#header -->
      <?php if ($main_menu || !empty($page['nav'])): ?>
      <div id="navigation-primary" role="navigation" class="clearfix">
        <?php if ($page['nav']): ?>
        <?php print render($page['nav']); ?>
        <?php endif; ?>
        <?php if (empty($page['nav'])): ?>
        <?php if ($main_menu): ?>
        <div id="main-menu"> <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?> </div>
        <!-- /#main-menu -->
        <?php endif; ?>
        <?php endif; ?>
      </div>
      <?php endif; ?>
      <!-- /#navigation-primary -->
      
      <?php if ($page['upper']): ?>
      <div id="upper" class="row"><?php print render($page['upper']); ?></div>
      <?php endif; ?>
      <div id="main-content">
        <div id="content-header" class="row">
          <div class="span12"> <?php print $messages; ?> <?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <?php if (!$is_front): ?>
            <h1 class="title" id="page-title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php endif; ?>
            <?php if ($tabs): ?>
            <div id="tabs-wrapper" class="clearfix"><?php print render($tabs); ?></div>
            <?php endif; ?>
            <?php print render($tabs2); ?> <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
            <?php if ($page['feature']): ?>
            <div id="feature" class="row"><?php print render($page['feature']); ?></div>
            <?php endif; ?>
          </div>
        </div>
        <!-- /#content-header -->
        <div id="content" class="row">
          <?php if ($page['sidebar_first']): ?>
          <div id="sidebar-first" class="sidebar span3"><?php print render($page['sidebar_first']); ?></div>
          <?php endif; ?>
          <!-- /#sidebar-first -->
          <div id="main" role="main" class="<?php if (($page['sidebar_first']) && ($page['sidebar_second'])): print 'span6'; elseif (($page['sidebar_first']) || ($page['sidebar_second'])): print 'span9'; else: print 'span12';	endif; ?>">
            <?php if ($page['content_top']): ?>
            <div id="content-top" class="row"><?php print render($page['content_top']); ?></div>
            <?php endif; ?>
            <?php if ($page['content_upper']): ?>
            <div id="content-upper" class="row"><?php print render($page['content_upper']); ?></div>
            <?php endif; ?>
            <?php if ($breadcrumb): print $breadcrumb; endif;?>
            <?php if ($page['highlighted']): ?>
            <div id="highlighted" class="row"><?php print render($page['highlighted']); ?></div>
            <?php endif; ?>
            <?php print render($page['content']); ?>
            <?php if ($page['content_lower']): ?>
            <div id="content-lower" class="row"><?php print render($page['content_lower']); ?></div>
            <?php endif; ?>
            <?php if ($page['content_bottom']): ?>
            <div id="content-bottom" class="row"><?php print render($page['content_bottom']); ?></div>
            <?php endif; ?>
          </div>
          <!-- /#main -->
          <?php if ($page['sidebar_second']): ?>
          <div id="sidebar-second" class="sidebar span3"><?php print render($page['sidebar_second']); ?></div>
          <?php endif; ?>
          <!-- /#sidebar-second --> 
        </div>
        <!-- /#content -->
        <?php if ($page['lower']): ?>
        <div id="lower" class="row"><?php print render($page['lower']); ?></div>
        <?php endif; ?>
      </div>
      <!--/#main-content--> 
    </div>
  </div>
  <!--/#page-content-->
  <div id="footer" class="clearfix">
    <div class="container">
      <div id="footer-content" role="contentinfo">
        <?php if (!empty($footer_message)): ?>
        <?php print $footer_message; ?>
        <?php endif; ?>
        <?php if ($secondary_menu): ?>
        <div id="navigation-secondary" role="navigation" class="clearfix across-<?php print count($secondary_menu); ?>">
          <div id="secondary-menu">
            <?php $linknum_secondary = count($secondary_menu); print theme('links__system_main_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
          </div>
          <!-- /#secondary-menu --> 
        </div>
        <?php endif; ?>
        <!-- /#navigation-secondary -->
        <?php if ($page['bottom']): ?>
        <div id="bottom" class="row"><?php print render($page['bottom']); ?></div>
        <?php endif; ?>
        <!-- /#bottom --> 
      </div>
    </div>
  </div>
  <!--/#footer--> 
</div>
<!-- /#site-content -->