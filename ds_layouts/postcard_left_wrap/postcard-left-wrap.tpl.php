<?php
/**
 * @file
 * Display Suite Postcard Left Wrap template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout.
 *
 * Regions:
 *
 * - $image: Rendered content for the "Image" region.
 * - $image_classes: String of classes that can be used to style the "Image" region.
 *
 * - $text: Rendered content for the "Text" region.
 * - $text_classes: String of classes that can be used to style the "Text" region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <div class="postcard-left-wrap">
    <<?php print $image_wrapper; ?> class="ds-image<?php print $image_classes; ?>">
      <?php print $image; ?>
    </<?php print $image_wrapper; ?>>

    <<?php print $text_wrapper; ?> class="ds-text<?php print $text_classes; ?>">
      <?php print $text; ?>
    </<?php print $text_wrapper; ?>>
  </div>

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
