<?php if (!$field_empty) : ?>
  <div class="field field-type-<?php print $field_type_css ?> field-<?php print $field_name_css ?>">
    <?php if ($label_display == 'above') : ?>
    <div class="field-label"><?php print t($label) ?>:&nbsp;</div>
    <?php endif;?>
    <div class="field-items row">
      <?php $count = 1;
    foreach ($items as $delta => $item) :
      if (!$item['empty']) : ?>
      <div class="<?php
		if (((region_has_block('left')) && (region_has_block('right'))) && ((count($items) == 4) && ($block_id == 1))): print 'span2 clear-block';
		elseif (((region_has_block('left')) && (region_has_block('right'))) && ((count($items) == 4) && ($block_id == 2))): print 'span2 clear-block';
		elseif (((region_has_block('left')) && (region_has_block('right'))) && (count($items) == 4)) : print 'span1 clear-block'; 
		elseif (((region_has_block('left')) && (region_has_block('right'))) && (count($items) == 3)) : print 'span2 clear-block'; 
		elseif (((region_has_block('left')) && (region_has_block('right'))) && (count($items) == 2)) : print 'span3 clear-block';
		elseif (((region_has_block('left')) && (region_has_block('right'))) && (count($items) == 1)) : print 'span6 clear-block'; 
		elseif (((region_has_block('left')) || (region_has_block('right'))) && ((count($items) == 4) && ($count == 1))): print 'span3 clear-block';
		elseif (((region_has_block('left')) || (region_has_block('right'))) && (count($items) == 4)) : print 'span2 clear-block'; 
		elseif (((region_has_block('left')) || (region_has_block('right'))) && (count($items) == 3)) : print 'span3 clear-block'; 
		elseif (((region_has_block('left')) || (region_has_block('right'))) && ((count($items) == 2) && ($count == 1))): print 'span3 clear-block';
		elseif (((region_has_block('left')) || (region_has_block('right'))) && ((count($items) == 2) && ($count == 2))): print 'span6 clear-block'; 
		elseif (((region_has_block('left')) || (region_has_block('right'))) && (count($items) == 1)) : print 'span9 clear-block'; 
		elseif (count($items) == 4) : print 'span3 clear-block';
		elseif (count($items) == 3) : print 'span4 clear-block';
		elseif (count($items) == 2) : print 'span6 clear-block';
		else: print 'span12 clear-block'; 
		endif; 
		?> field-item <?php print ($count % 2 ? 'odd' : 'even') ?>">
        <?php if ($label_display == 'inline') { ?>
        <div class="field-label-inline<?php print($delta ? '' : '-first')?>"> <?php print t($label) ?>:&nbsp;</div>
        <?php } ?>
        <?php print $item['view'] ?>
        </div>
      <?php $count++;
      endif;
    endforeach;?>
    </div>
  </div>
<?php endif; ?>
