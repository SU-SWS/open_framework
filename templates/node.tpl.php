<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>"> <?php print $picture ?>
  <?php if ($page == 0): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <?php endif; ?>
  <div class="content"> <?php print $content ?>
    <?php if ($submitted): ?>
    <p class="last-modified">Last modified <?php print format_date($node->changed, 'custom', 'D, j M, Y \a\\t G:i') ?> </p>
    <?php endif; ?>
  </div>
  <?php if ($links||$taxonomy){ ?>
  <div class="meta">
    <?php if ($links): ?>
    <div class="links"> <?php print $links; ?> </div>
    <?php endif; ?>
    <?php if ($taxonomy): ?>
    <div class="terms"> <?php print $terms ?> </div>
    <?php endif;?>
    <span class="clear"></span> </div>
  <?php }?>
</div>
