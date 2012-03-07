<?php
$edit_links = l(t('edit block'), 'admin/build/block/configure/'. $block->module .'/'. $block->delta, array('title' => t('edit the content of this block'), 'class' => 'block-edit'), drupal_get_destination(), NULL, FALSE, TRUE);
?>

<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="<?php
if (((region_has_block('left')) && (region_has_block('right'))) && (($block_count == 4) && ($block_id == 1))): print 'span2 clear-block';
elseif (((region_has_block('left')) && (region_has_block('right'))) && (($block_count == 4) && ($block_id == 2))): print 'span2 clear-block';
elseif (((region_has_block('left')) && (region_has_block('right'))) && ($block_count == 4)) : print 'span1 clear-block'; 
elseif (((region_has_block('left')) && (region_has_block('right'))) && ($block_count == 3)) : print 'span2 clear-block'; 
elseif (((region_has_block('left')) && (region_has_block('right'))) && ($block_count == 2)) : print 'span3 clear-block';
elseif (((region_has_block('left')) && (region_has_block('right'))) && ($block_count == 1)) : print 'span6 clear-block'; 
elseif (((region_has_block('left')) || (region_has_block('right'))) && (($block_count == 4) && ($block_id == 1))): print 'span3 clear-block';
elseif (((region_has_block('left')) || (region_has_block('right'))) && ($block_count == 4)) : print 'span2 clear-block'; 
elseif (((region_has_block('left')) || (region_has_block('right'))) && ($block_count == 3)) : print 'span3 clear-block'; 
elseif (((region_has_block('left')) || (region_has_block('right'))) && (($block_count == 2) && ($block_id == 1))): print 'span6 clear-block';
elseif (((region_has_block('left')) || (region_has_block('right'))) && (($block_count == 2) && ($block_id == 2))): print 'span3 clear-block'; 
elseif (((region_has_block('left')) || (region_has_block('right'))) && ($block_count == 1)) : print 'span9 clear-block'; 
elseif ($block_count == 4) : print 'span3 clear-block';
elseif ($block_count == 3) : print 'span4 clear-block';
elseif ($block_count == 2) : print 'span6 clear-block';
else: print 'span12 clear-block'; 
endif; 
?> block block-<?php print $block->module ?>">
  <?php if ($block->subject): ?>
  <h2><?php print $block->subject ?></h2>
  <?php endif;?>
  <div class="content clear-block"><?php print $block->content ?></div>
  <?php if (user_access('administer blocks')) :?>
  <p><span class="label"><i class="icon-edit icon-white"></i> <?php print $edit_links; ?></span></p>
  <?php endif; ?>
</div>
