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
<div class="panel-display one-two-two-one clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['one_two_two_one_top']): ?>
  <div class="top_fullwidth">
    <div class="container">
      <div class="region region-one-two-two-one-top region-conditional-stack span12">
        <div class="region-inner clearfix">
          <?php print $content['one_two_two_one_top']; ?>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="top_two-fullwidth">
    <div class="container">
      <div class="region region-one-two-two-one-first span6">
        <div class="region-inner clearfix">
          <?php print $content['top_two_two_one_first']; ?>
        </div>
      </div>
      <div class="region region-one-two-two-one-second span6">
        <div class="region-inner clearfix">
          <?php print $content['top_two_two_one_second']; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom_two-fullwidth">
    <div class="container">
      <div class="region region-one-two-two-one-first span6">
        <div class="region-inner clearfix">
          <?php print $content['bottom_two_two_one_first']; ?>
        </div>
      </div>
      <div class="region region-one-two-two-one-second span6">
        <div class="region-inner clearfix">
          <?php print $content['bottom_two_two_one_second']; ?>
        </div>
      </div>
    </div>
  </div>
  <?php if ($content['one_two_two_one_bottom']): ?>
  <div class="bottom_fullwidth">
    <div class="container">
      <div class="region region-one-two-two-one-bottom region-conditional-stack span12">
        <div class="region-inner clearfix">
          <?php print $content['one_two_two_one_bottom']; ?>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
</div>
