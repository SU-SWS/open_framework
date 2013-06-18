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
<div class="panel-display var-1-2-4-6 clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['var_1']): ?>
    <div class="top-full-width">
      <div class="container">
        <div class="region region-var-1-2-4-6-top region-conditional-stack span12">
          <div class="region-inner clearfix">
            <?php print $content['var_1']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
   <div class="top-two-column-full-width">
    <div class="container clearfix">
      <div class="region region-var-1-2-4-6-first-top span6">
        <div class="region-inner clearfix">
          <?php print $content['var_1_2_first']; ?>
        </div>
      </div>
      <div class="region region-var-1-2-4-6-second-top span6">
        <div class="region-inner clearfix">
          <?php print $content['var_1_2_second']; ?>
        </div>
      </div>
    </div>
  </div>
    <div class="four-column-full-width">
      <div class="container">
        <div class="region region-var-1-2-4-6-first-nar span2">
          <div class="region-inner clearfix">
            <?php print $content['var_1_2_4_first']; ?>
          </div>
        </div>
        <div class="region region-var-1-2-4-6-second-nar span2">
          <div class="region-inner clearfix">
            <?php print $content['var_1_2_4_second']; ?>
          </div>
        </div>
        <div class="region region-var-1-2-4-6-third-nar span2">
          <div class="region-inner clearfix">
            <?php print $content['var_1_2_4_third']; ?>
          </div>
        </div>
        <div class="region region-var-1-2-4-6-fourth-nar span6">
          <div class="region-inner clearfix">
            <?php print $content['var_1_2_4_fourth']; ?>
          </div>
        </div>
      </div>
    </div>
  <div class="six-column-full-width">
    <div class="container clearfix">
      <div class="region region-var-1-2-4-6-first span2">
        <div class="region-inner clearfix">
          <?php print $content['var_1_2_4_6_first']; ?>
        </div>
      </div>
      <div class="region region-var-1-2-4-6-second span2">
        <div class="region-inner clearfix">
          <?php print $content['var_1_2_4_6_second']; ?>
        </div>
      </div>
      <div class="region region-var-1-2-4-6-third span2">
        <div class="region-inner clearfix">
          <?php print $content['var_1_2_4_6_third']; ?>
        </div>
      </div>
      <div class="region region-var-1-2-4-6-fourth span2">
        <div class="region-inner clearfix">
          <?php print $content['var_1_2_4_6_fourth']; ?>
        </div>
      </div>
      <div class="region region-var-1-2-4-6-fifth span2">
        <div class="region-inner clearfix">
          <?php print $content['var_1_2_4_6_fifth']; ?>
        </div>
      </div>
      <div class="region region-var-1-2-4-6-sixth span2">
        <div class="region-inner clearfix">
          <?php print $content['var_1_2_4_6_sixth']; ?>
        </div>
      </div>
    </div>
  </div>
  <?php if ($content['var_1_2_4_6_1']): ?>
    <div class="middle-full-width">
      <div class="container">
        <div class="region region-var-1-2-4-6-middle region-conditional-stack span12">
          <div class="region-inner clearfix">
            <?php print $content['var_1_2_4_6_1']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
    <div class="bottom-two-column-full-width">
      <div class="container">
        <div class="region region-var-1-2-4-6-left span8">
          <div class="region-inner clearfix">
            <?php print $content['var_1_2_4_6_1_2_first']; ?>
          </div>
        </div>
        <div class="region region-var-1-2-4-6-right span4">
          <div class="region-inner clearfix">
            <?php print $content['var_1_2_4_6_1_2_second']; ?>
          </div>
        </div>
      </div>
   </div>
  <?php if ($content['var_1_2_4_6_1_2_1']): ?>
    <div class="bottom-full-width">
      <div class="container">
        <div class="region region-var-1-2-4-6-bottom region-conditional-stack span12">
          <div class="region-inner clearfix">
            <?php print $content['var_1_2_4_6_1_2_1']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
