<?php

// Plugin definition
$plugin = array(
  'title' => t('Three column 25/50/25'),
  'icon' => 'three_25_50_25.png',
  'category' => t('Grid ready'),
  'theme' => 'three_25_50_25',
  'css' => 'three_25_50_25.admin.css',
  'regions' => array(
    'three_25_50_25_top'    => t('Top (conditional)'),
    'three_25_50_25_first'  => t('Left'),
    'three_25_50_25_second' => t('Center'),
    'three_25_50_25_third'  => t('Right'),
    'three_25_50_25_bottom' => t('Bottom (conditional)'),
  ),
);

