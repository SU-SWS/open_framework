<?php

$plugin = array(
  'title' => t('Two column 33/66 & 4 Column 25/25/25/25'),
  'icon' => 'two_33_66_4x25.png',
  'category' => t('Grid ready'),
  'theme' => 'two_33_66_4x25',
  'css' => 'two_33_66_4x25.admin.css',
  'regions' => array(
    'two_33_66_top'    => t('Top (conditional)'),
    'two_33_66_first'  => t('Left'),
    'two_33_66_second' => t('Right'),
    'two_33_66_25_first'  => t('1 - 25%'),
    'two_33_66_25_second'  => t('2 - 25%'),
    'two_33_66_25_third'  => t('3 - 25%'),
    'two_33_66_25_fourth'  => t('4 - 25%'),
    'two_33_66_bottom' => t('Bottom (conditional)'),
  ),
);
