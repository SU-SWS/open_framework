<?php
$edit_links = l(t('edit block'), 'admin/build/block/configure/'. $block->module .'/'. $block->delta, array('title' => t('edit the content of this block'), 'class' => 'block-edit', 'query' => drupal_get_destination()));
?>

<?php $span_class = 'span' . open_framework_get_span($block_count, $block_id, TRUE);  ?>

<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="<?php print $span_class . ' clear-block' ?> block block-<?php print $block->module ?>">
  <?php if ($block->subject): ?>
  <h2><?php print $block->subject ?></h2>
  <?php endif;?>
  <div class="content clear-block"><?php print $block->content ?></div>
  <?php if (user_access('administer blocks')) :?>
  <p><span class="label"><i class="icon-edit icon-white"></i> <?php print $edit_links; ?></span></p>
  <?php endif; ?>
</div>
