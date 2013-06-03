<?php

// Plugin definition
$plugin = array(
  'title' => t('Three column 3x33'),
  'icon' => 'three_3x33.png',
  'category' => t('Grid ready'),
  'theme' => 'three_3x33',
  'css' => 'three_3x33.admin.css',
  'regions' => array(
    'three_33_top'    => t('Top (conditional)'),
    'three_33_flow'  => t('Three Block Flow'),
    'three_33_first_stacked'  => t('Left Stacked'),
    'three_33_second_stacked' => t('Center Stacked'),
    'three_33_third_stacked'  => t('Right Stacked'),
    'three_33_bottom' => t('Bottom (conditional)'),
  ),
);

