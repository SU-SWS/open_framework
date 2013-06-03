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
<div class="panel-display one-column clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <div class="container row-fluid">
    <div id="content" class="region region-one-main span12">
      <div id="content-wrapper" class="region-inner clearfix content-wrapper">
        <?php print $content['one_main']; ?>
      </div>
    </div>
  </div>
</div>
