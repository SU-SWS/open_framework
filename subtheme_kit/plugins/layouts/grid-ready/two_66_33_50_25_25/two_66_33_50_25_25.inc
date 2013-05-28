<?php

$plugin = array(
  'title' => t('Two column 66/33 & 3 Column 50/25/25'),
  'icon' => 'two_66_33_50_25_25.png',
  'category' => t('Grid ready'),
  'theme' => 'two_66_33_50_25_25',
  'css' => 'two_66_33_50_25_25.admin.css',
  'regions' => array(
    'two_66_33_top'    => t('Top (conditional)'),
    'two_66_33_first'  => t('Left'),
    'two_66_33_second' => t('Right'),
    'two_66_33_50'  => t('First Half'),
    'two_66_33_25_first'  => t('First - 25%'),
    'two_66_33_25_second'  => t('Second - 25%'),
    'two_66_33_bottom' => t('Bottom (conditional)'),
  ),
);
