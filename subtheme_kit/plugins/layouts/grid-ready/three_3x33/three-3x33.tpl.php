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
<div class="panel-display three-3x33 clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['three_33_top']): ?>
    <div class="container">
      <div class="region region-top region-conditional-stack span12">
        <div class="region-inner clearfix">
          <?php print $content['three_33_top']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="three-middle-stacked">
    <div class="container">
      <div class="region region-first span3">
        <div class="region-inner clearfix">
          <?php print $content['three_33_first_stacked']; ?>
        </div>
      </div>
      <div class="region region-second span3">
        <div class="region-inner clearfix">
          <?php print $content['three_33_second_stacked']; ?>
        </div>
      </div>
      <div class="region region-third span3">
        <div class="region-inner clearfix">
          <?php print $content['three_33_third_stacked']; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="three-middle-flow">
    <div class="container">
      <div class="region region-content-row3 clearfix">
        <div class="span12 block">
          <?php print $content['three_33_flow']; ?>
        </div>
      </div>
    </div>
  </div>

  <?php if ($content['three_33_bottom']): ?>
    <div class="container">
      <div class="region region-bottom region-conditional-stack span12">
        <div class="region-inner clearfix">
          <?php print $content['three_33_bottom']; ?>
       </div>
     </div>
   </div>
  <?php endif; ?>
</div>
