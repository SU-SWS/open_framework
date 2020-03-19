<?php

/**
 * @file
 * Display Suite Postcard Left Wrap configuration.
 */

function ds_postcard_left_wrap() {
  return array(
    'label' => t('Postcard Left Wrap'),
    'regions' => array(
      'image' => t('Image'),
      'text' => t('Text'),
    ),
    // Uncomment if you want to include a CSS file for this layout (postcard_left_wrap.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (postcard_left_wrap.png)
    // 'image' => TRUE,
  );
}
