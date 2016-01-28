<?php

/**
 * @file
 * Display Suite Postcard Left configuration.
 */

function ds_postcard_left() {
  return array(
    'label' => t('Postcard Left'),
    'regions' => array(
      'image' => t('Image'),
      'text' => t('Text'),
    ),
    // Uncomment if you want to include a CSS file for this layout (postcard_left.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (postcard_left.png)
    // 'image' => TRUE,
  );
}
