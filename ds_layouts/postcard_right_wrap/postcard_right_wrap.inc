<?php

/**
 * @file
 * Display Suite Postcard Right Wrap configuration.
 */

function ds_postcard_right_wrap() {
  return array(
    'label' => t('Postcard Right Wrap'),
    'regions' => array(
      'image' => t('Image'),
      'text' => t('Text'),
    ),
    // Uncomment if you want to include a CSS file for this layout (postcard_right_wrap.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (postcard_right_wrap.png)
    // 'image' => TRUE,
  );
}
