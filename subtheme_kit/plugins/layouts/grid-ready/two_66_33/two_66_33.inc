<?php

$plugin = array(
  'title' => t('Two column 66/33'),
  'icon' => 'two_66_33.png',
  'category' => t('Grid ready'),
  'theme' => 'two_66_33',
  'css' => 'two_66_33.admin.css',
  'regions' => array(
    'two_66_33_top'    => t('Top (conditional)'),
    'two_66_33_first'  => t('Left'),
    'two_66_33_second' => t('Right'),
    'two_66_33_bottom' => t('Bottom (conditional)'),
  ),
);
