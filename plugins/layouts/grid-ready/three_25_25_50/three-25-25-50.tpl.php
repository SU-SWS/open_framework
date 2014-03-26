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
<div class="panel-display three-25-25-50 clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['three_25_25_50_top']): ?>
    <div class="container row-fluid">
      <div class="region region-top region-conditional-stack span12">
        <div class="region-inner clearfix">
          <?php print $content['three_25_25_50_top']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="container row-fluid">
    <div class="region region-first span3">
      <div class="region-inner clearfix">
        <?php print $content['three_25_25_50_first']; ?>
      </div>
    </div>
    <div class="region region-second span3">
      <div class="region-inner clearfix">
        <?php print $content['three_25_25_50_second']; ?>
      </div>
    </div>
    <div class="region region-third span6">
      <div class="region-inner clearfix">
        <?php print $content['three_25_25_50_third']; ?>
      </div>
    </div>
  </div>
  <?php if ($content['three_25_25_50_bottom']): ?>
    <div class="container row-fluid">
      <div class="region region-bottom region-conditional-stack">
        <div class="region-inner clearfix">
          <?php print $content['three_25_25_50_bottom']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
