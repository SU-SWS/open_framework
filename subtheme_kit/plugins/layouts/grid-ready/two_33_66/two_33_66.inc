<?php

$plugin = array(
  'title' => t('Two column 33/66'),
  'icon' => 'two_33_66.png',
  'category' => t('Grid ready'),
  'theme' => 'two_33_66',
  'css' => 'two_33_66.admin.css',
  'regions' => array(
    'two_33_66_top'    => t('Top (conditional)'),
    'two_33_66_first'  => t('Left'),
    'two_33_66_second' => t('Right'),
    'two_33_66_bottom' => t('Bottom (conditional)'),
  ),
);
