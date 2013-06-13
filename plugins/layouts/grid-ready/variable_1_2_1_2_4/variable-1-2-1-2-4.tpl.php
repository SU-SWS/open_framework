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
<div class="panel-display var-1-2-1-2-4 clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['variable_1_2_1_2_4_top']): ?>
    <div class="top-full-width">
      <div class="container">
        <div class="region region-var-1-2-1-2-4-top region-conditional-stack span12">
          <div class="region-inner clearfix">
            <?php print $content['variable_1']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="top-two-column">
    <div class="container clearfix">
      <div class="region region-var-1-2-1-2-4-left span6">
        <div class="region-inner clearfix">
          <?php print $content['variable_1_2_left']; ?>
        </div>
      </div>
      <div class="region region-var-1-2-1-2-4-right span6">
        <div class="region-inner clearfix">
          <?php print $content['variable_1_2_right']; ?>
        </div>
      </div>
    </div>
  </div>
  <?php if ($content['variable_1_2_1_2_4_middle']): ?>
    <div class="middle-full-width">
      <div class="container">
        <div class="region region-var-1-2-1-2-4-middle region-conditional-stack span12">
          <div class="region-inner clearfix">
            <?php print $content['variable_1_2_1']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="bottom-two-column">
    <div class="container clearfix">
      <div class="region region-var-1-2-1-2-4-left-bottom span6">
        <div class="region-inner clearfix">
          <?php print $content['variable_1_2_1_2_left']; ?>
        </div>
      </div>
      <div class="region region-var-1-2-1-2-4-right-bottom span6">
        <div class="region-inner clearfix">
          <?php print $content['variable_1_2_1_2_right']; ?>
        </div>
      </div>
    </div>
  </div>
    <div class="bottom-4-column">
      <div class="container">
        <div class="region region-var-1-2-1-2-4-left-nar span2">
          <div class="region-inner clearfix">
            <?php print $content['variable_1_2_1_2_4_left']; ?>
          </div>
        </div>
        <div class="region region-var-1-2-1-2-4-middle-nar span2">
          <div class="region-inner clearfix">
            <?php print $content['variable_1_2_1_2_4_middle']; ?>
          </div>
        </div>
        <div class="region region-var-1-2-1-2-4-right-nar span2">
          <div class="region-inner clearfix">
            <?php print $content['variable_1_2_1_2_4_middle2']; ?>
          </div>
        </div>
        <div class="region region-var-1-2-1-2-4-right span6">
          <div class="region-inner clearfix">
            <?php print $content['variable_1_2_1_2_4_right']; ?>
          </div>
        </div>
      </div>
    </div>
