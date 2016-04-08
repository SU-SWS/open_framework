<?php

/**
 * @file
 * OFW  view template to add a grouping div to a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="grouping">
  <?php if (!empty($title)): ?>
    <h2><?php print $title; ?></h2>
  <?php endif; ?>
  <?php foreach ($rows as $id => $row): ?>
    <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
      <?php print $row; ?>
    </div>
  <?php endforeach; ?>
</div><!--end grouping div-->

