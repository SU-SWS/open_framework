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
<div class="panel-display two-66-33 clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['two_66_33_top']): ?>
    <div class="region region-two-66-33-top region-conditional-stack">
      <div class="region-inner clearfix">
        <?php print $content['two_66_33_top']; ?>
      </div>
    </div>
  <?php endif; ?>
  <div class="region region-two-66-33-first">
    <div class="region-inner clearfix">
      <?php print $content['two_66_33_first']; ?>
    </div>
  </div>
  <div class="region region-two-66-33-second">
    <div class="region-inner clearfix">
      <?php print $content['two_66_33_second']; ?>
    </div>
  </div>
  <?php if ($content['two_66_33_bottom']): ?>
    <div class="region region-two-66-33-bottom region-conditional-stack">
      <div class="region-inner clearfix">
        <?php print $content['two_66_33_bottom']; ?>
      </div>
    </div>
  <?php endif; ?>
</div>
