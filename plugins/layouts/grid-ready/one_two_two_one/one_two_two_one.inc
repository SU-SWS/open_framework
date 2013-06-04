<?php

$plugin = array(
  'title' => t('One by Two two by One'),
  'icon' => 'one_two_two_one.png',
  'category' => t('Grid ready'),
  'theme' => 'one_two_two_one',
  'css' => 'one_two_two_one.admin.css',
  'regions' => array(
    'one_two_two_one_top'    => t('Top (conditional)'),
    'top_two_two_one_first'  => t('Top Left'),
    'top_two_two_one_second' => t('Top Right'),
    'bottom_two_two_one_first'  => t('Bottom Left'),
    'bottom_two_two_one_second' => t('Bottom Right'),
    'one_two_two_one_bottom' => t('Bottom (conditional)'),
  ),
);
