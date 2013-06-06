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
<div class="panel-display five-column clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <div class="five-column-full-width">
    <div class="container clearfix">
      <div class="region region-five-column-first span3">
        <div class="region-inner clearfix">
          <?php print $content['five_first']; ?>
        </div>
      </div>
      <div class="region region-five-column-second span2">
        <div class="region-inner clearfix">
          <?php print $content['five_second']; ?>
        </div>
      </div>
      <div class="region region-five-column-third span2">
        <div class="region-inner clearfix">
          <?php print $content['five_third']; ?>
        </div>
      </div>
      <div class="region region-five-column-fourth span2">
        <div class="region-inner clearfix">
          <?php print $content['five_fourth']; ?>
        </div>
      </div>
      <div class="region region-five-column-five span2">
        <div class="region-inner clearfix">
          <?php print $content['five_five']; ?>
        </div>
      </div>
    </div>
  </div>
</div>
