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
<div class="panel-display two-brick clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['two_brick_top']): ?>
    <div class="region region-two-brick-top region-conditional-stack">
      <div class="region-inner clearfix">
        <?php print $content['two_brick_top']; ?>
      </div>
    </div>
  <?php endif; ?>
  <div class="panel-row row-1 clearfix">
    <div class="region region-two-brick-left-above">
      <div class="region-inner clearfix">
        <?php print $content['two_brick_left_above']; ?>
      </div>
    </div>
    <div class="region region-two-brick-right-above">
      <div class="region-inner clearfix">
        <?php print $content['two_brick_right_above']; ?>
      </div>
    </div>
  </div>
  <?php if ($content['two_brick_middle']): ?>
    <div class="region region-two-brick-middle region-conditional-stack">
      <div class="region-inner clearfix">
        <?php print $content['two_brick_middle']; ?>
      </div>
    </div>
  <?php endif; ?>
  <div class="panel-row row-2 clearfix">
    <div class="region region-two-brick-left-below">
      <div class="region-inner clearfix">
        <?php print $content['two_brick_left_below']; ?>
      </div>
    </div>
    <div class="region region-two-brick-right-below">
      <div class="region-inner clearfix">
        <?php print $content['two_brick_right_below']; ?>
      </div>
    </div>
  </div>
  <?php if ($content['two_brick_bottom']): ?>
    <div class="region region-two-brick-bottom region-conditional-stack">
      <div class="region-inner clearfix">
        <?php print $content['two_brick_bottom']; ?>
      </div>
    </div>
  <?php endif; ?>
</div>
