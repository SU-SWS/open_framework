<?php

$plugin = array(
  'title' => t('Two column 66/33 & 4 Column 25/25/25/25'),
  'icon' => 'two_66_33_4x25.png',
  'category' => t('Grid ready'),
  'theme' => 'two_66_33_4x25',
  'css' => 'two_66_33_4x25.admin.css',
  'regions' => array(
    'two_66_33_top'    => t('Top (conditional)'),
    'two_66_33_first'  => t('Left'),
    'two_66_33_second' => t('Right'),
    'two_66_33_25_first'  => t('1 - 25%'),
    'two_66_33_25_second'  => t('2 - 25%'),
    'two_66_33_25_third'  => t('3 - 25%'),
    'two_66_33_25_fourth'  => t('4 - 25%'),
    'two_66_33_bottom' => t('Bottom (conditional)'),
  ),
);
