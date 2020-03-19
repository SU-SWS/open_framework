<?php

/**
 * @file
 * Display Suite Postcard Right configuration.
 */

function ds_postcard_right() {
  return array(
    'label' => t('Postcard Right'),
    'regions' => array(
      'image' => t('Image'),
      'text' => t('Text'),
    ),
    // Uncomment if you want to include a CSS file for this layout (postcard_right.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (postcard_right.png)
    // 'image' => TRUE,
  );
}
