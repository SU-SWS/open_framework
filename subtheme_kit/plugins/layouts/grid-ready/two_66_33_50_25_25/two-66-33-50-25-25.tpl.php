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
    <div class="container row-fluid">
      <div class="region region-two-66-33-top region-conditional-stack span12">
        <div class="region-inner clearfix">
          <?php print $content['two_66_33_top']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="container row-fluid">
    <div class="region region-two-66-33-first span9">
      <div class="region-inner clearfix">
        <?php print $content['two_66_33_first']; ?>
      </div>
    </div>
    <div class="region region-two-66-33-second span3">
      <div class="region-inner clearfix">
        <?php print $content['two_66_33_second']; ?>
      </div>
    </div>
  </div>
  <div class="container row-fluid clearfix">
    <div class="region region-two-66-33-50 span6">
      <div class="region-inner clearfix">
        <?php print $content['two_66_33_50']; ?>
      </div>
    </div>
    <div class="region region-two-66-33-25-first span3">
      <div class="region-inner clearfix">
        <?php print $content['two_66_33_25_first']; ?>
      </div>
    </div>
    <div class="region region-two-66-33-25-second span3">
      <div class="region-inner clearfix">
        <?php print $content['two_66_33_25_second']; ?>
      </div>
    </div>
  </div>
    <?php if ($content['two_66_33_bottom']): ?>
    <div class="container row-fluid">
      <div class="region region-two-66-33-bottom region-conditional-stack span12">
        <div class="region-inner clearfix">
          <?php print $content['two_66_33_bottom']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
