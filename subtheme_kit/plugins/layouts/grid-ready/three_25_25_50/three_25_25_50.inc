<?php

// Plugin definition
$plugin = array(
  'title' => t('Three column 25/25/50'),
  'icon' => 'three_25_25_50.png',
  'category' => t('Grid ready'),
  'theme' => 'three_25_25_50',
  'css' => 'three_25_25_50.admin.css',
  'regions' => array(
    'three_25_25_50_top'    => t('Top (conditional)'),
    'three_25_25_50_first'  => t('Left'),
    'three_25_25_50_second' => t('Center'),
    'three_25_25_50_third'  => t('Right'),
    'three_25_25_50_bottom' => t('Bottom (conditional)'),
  ),
);

