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
<div class="panel-display two-33-66 clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['two_33_66_top']): ?>
    <div class="container row-fluid">
      <div class="region region-two-33-66-top region-conditional-stack span12">
        <div class="region-inner clearfix">
          <?php print $content['two_33_66_top']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="container row-fluid">
    <div class="region region-two-33-66-first span3">
      <div class="region-inner clearfix">
        <?php print $content['two_33_66_first']; ?>
      </div>
    </div>
    <div class="region region-two-33-66-second span9">
      <div class="region-inner clearfix">
        <?php print $content['two_33_66_second']; ?>
      </div>
    </div>
  </div>
  <div class="container row-fluid clearfix">
    <div class="region region-two-33-66-50 span6">
      <div class="region-inner clearfix">
        <?php print $content['two_33_66_50']; ?>
      </div>
    </div>
    <div class="region region-two-33-66-25-first span3">
      <div class="region-inner clearfix">
        <?php print $content['two_33_66_25_first']; ?>
      </div>
    </div>
    <div class="region region-two-33-66-25-second span3">
      <div class="region-inner clearfix">
        <?php print $content['two_33_66_25_second']; ?>
      </div>
    </div>
  </div>
    <?php if ($content['two_33_66_bottom']): ?>
    <div class="container row-fluid">
      <div class="region region-two-33-66-bottom region-conditional-stack span12">
        <div class="region-inner clearfix">
          <?php print $content['two_33_66_bottom']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
