<?php

$plugin = array(
  'title' => t('Three column 50/25/25'),
  'icon' => 'three_50_25_25.png',
  'category' => t('Grid ready'),
  'theme' => 'three_50_25_25',
  'css' => 'three_50_25_25.admin.css',
  'regions' => array(
    'three_50_25_25_top'    => t('Top (conditional)'),
    'three_50_25_25_first'  => t('Left'),
    'three_50_25_25_second' => t('Center'),
    'three_50_25_25_third'  => t('Right'),
    'three_50_25_25_bottom' => t('Bottom (conditional)'),
  ),
);
