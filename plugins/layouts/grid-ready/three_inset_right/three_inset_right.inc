<?php

$plugin = array(
  'title' => t('Inset right'),
  'icon' => 'three_inset_right.png',
  'category' => t('Grid ready'),
  'theme' => 'three_inset_right',
  'css' => 'three_inset_right.admin.css',
  'regions' => array(
    'three_inset_right_sidebar' => t('Sidebar'),
    'three_inset_right_top'     => t('Top (conditional)'),
    'three_inset_right_middle'  => t('Middle'),
    'three_inset_right_inset'   => t('Inset'),
    'three_inset_right_bottom'  => t('Bottom (conditional)'),
  ),
);
