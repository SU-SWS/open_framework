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
<div class="panel-display one-6-1-2-1 clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['one_6_1_2_1_top']): ?>
    <div class="container">
      <div class="region region-one-6-1-2-1-top region-conditional-stack span12">
        <div class="region-inner clearfix">
          <?php print $content['one_6_1_2_1_top']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="six-column-full-width">
    <div class="container clearfix">
      <div class="region region-one-6-1-2-1-first span2">
        <div class="region-inner clearfix">
          <?php print $content['one_6_1_2_1_first']; ?>
        </div>
      </div>
      <div class="region region-one-6-1-2-1-second span2">
        <div class="region-inner clearfix">
          <?php print $content['one_6_1_2_1_second']; ?>
        </div>
      </div>
      <div class="region region-one-6-1-2-1-third span2">
        <div class="region-inner clearfix">
          <?php print $content['one_6_1_2_1_third']; ?>
        </div>
      </div>
      <div class="region region-one-6-1-2-1-fourth span2">
        <div class="region-inner clearfix">
          <?php print $content['one_6_1_2_1_fourth']; ?>
        </div>
      </div>
      <div class="region region-one-6-1-2-1-fifth span2">
        <div class="region-inner clearfix">
          <?php print $content['one_6_1_2_1_fifth']; ?>
        </div>
      </div>
      <div class="region region-one-6-1-2-1-six span2">
        <div class="region-inner clearfix">
          <?php print $content['one_6_1_2_1_six']; ?>
        </div>
      </div>
    </div>
  </div>
  <?php if ($content['one_6_1_2_1_middle']): ?>
    <div class="middle-full-width">
      <div class="container">
        <div class="region region-one-6-1-2-1-middle region-conditional-stack span12">
          <div class="region-inner clearfix">
            <?php print $content['one_6_1_2_1_middle']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
    <div class="two-column-full-width">
      <div class="container">
        <div class="region region-one-6-1-2-1-left span3">
          <div class="region-inner clearfix">
            <?php print $content['one_6_1_2_1_left']; ?>
          </divright
        </div>
        <div class="region region-one-6-1-2-1-right span9">
          <div class="region-inner clearfix">
            <?php print $content['one_6_1_2_1_right']; ?>
          </div>
        </div>
      </div>
   </div>
  <?php if ($content['one_6_1_2_1_bottom']): ?>
    <div class="bottom-full-width">
      <div class="container">
        <div class="region region-one-6-1-2-1-bottom region-conditional-stack span12">
          <div class="region-inner clearfix">
            <?php print $content['one_6_1_2_1_bottom']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
