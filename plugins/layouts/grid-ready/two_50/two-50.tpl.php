<?php
/**
 * @file
 * Implementation of a panels grid ready layout.
 *
 * Available variables:
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout.
 * - $css_id: unique id if present.
 */

?>
<div class="panel-display two-50 clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['two_50_top']): ?>
    <div class="container row-fluid">
      <div class="region region-two-50-top region-conditional-stack span12">
        <div class="region-inner clearfix">
          <?php print $content['two_50_top']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
    <div class="container row-fluid">
      <div class="region region-two-50-first span6">
        <div class="region-inner clearfix">
          <?php print $content['two_50_first']; ?>
        </div>
      </div>
      <div class="region region-two-50-second span6">
        <div class="region-inner clearfix">
          <?php print $content['two_50_second']; ?>
        </div>
      </div>
    </div>
  <?php if ($content['two_50_bottom']): ?>
    <div class="container row-fluid">
      <div class="region region-two-50-bottom region-conditional-stack span12">
        <div class="region-inner clearfix">
          <?php print $content['two_50_bottom']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
