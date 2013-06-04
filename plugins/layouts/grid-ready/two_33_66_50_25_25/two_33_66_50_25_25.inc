<?php

$plugin = array(
  'title' => t('Two column 33/66 & 3 Column 50/25/25'),
  'icon' => 'two_33_66_50_25_25.png',
  'category' => t('Grid ready'),
  'theme' => 'two_33_66_50_25_25',
  'css' => 'two_33_66_50_25_25.admin.css',
  'regions' => array(
    'two_33_66_top'    => t('Top (conditional)'),
    'two_33_66_first'  => t('Left'),
    'two_33_66_second' => t('Right'),
    'two_33_66_50'  => t('First Half'),
    'two_33_66_25_first'  => t('Second Half - First 25%'),
    'two_33_66_25_second'  => t('Second Half - Second 25%'),
    'two_33_66_bottom' => t('Bottom (conditional)'),
  ),
);
