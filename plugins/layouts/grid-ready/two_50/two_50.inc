<?php

$plugin = array(
  'title' => t('Two column 50/50'),
  'icon' => 'two_50.png',
  'category' => t('Grid ready'),
  'theme' => 'two_50',
  'css' => 'two_50.admin.css',
  'regions' => array(
    'two_50_top'    => t('Top (conditional)'),
    'two_50_first'  => t('Left'),
    'two_50_second' => t('Right'),
    'two_50_bottom' => t('Bottom (conditional)'),
  ),
);
