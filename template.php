<?php
function open_framework_preprocess_page(&$vars) {
  // Add page template suggestions based on the aliased path. For instance, if the current page has an alias of about/history/early, we'll have templates of:
  // page-about-history-early.tpl.php, page-about-history.tpl.php, page-about.tpl.php
  // Whichever is found first is the one that will be used.
  if (module_exists('path')) {
    $alias = drupal_get_path_alias(str_replace('/edit','',$_GET['q']));
    if ($alias != $_GET['q']) {
      $template_filename = 'page';
      foreach (explode('/', $alias) as $path_part) {
        $template_filename = $template_filename . '-' . $path_part;
        $vars['template_files'][] = $template_filename;
      }
    }
  }
}

function open_framework_preprocess_block(&$vars) {
  // Count number of blocks in a given theme region
	$vars['block_count'] = count(block_list($vars['block']->region));
}

function region_has_block($test_region) {
  // Check to see if a region is occupied and returns 1 if it's full
  $test_empty = 0;
  $result = db_query_range('SELECT n.pages, n.visibility FROM {blocks} n WHERE n.region="%s" AND n.theme="%s"', $test_region, $GLOBALS['theme'], 0, 10);
  if (count($result) > 0) {
    while ($node = db_fetch_object($result))
    {
      if ($node->visibility < 2) {
        $path = drupal_get_path_alias($_GET['q']);
        // Compare with the internal and path alias (if any).
        $page_match = drupal_match_path($path, $node->pages);
        if ($path != $_GET['q']) {
          $page_match = $page_match || drupal_match_path($_GET['q'], $node->pages);
        }
        // When $block->visibility has a value of 0, the block is displayed on all pages except those listed in $block->pages. When set to 1, it is displayed only on those pages listed in $block->pages.
        $page_match = !($node->visibility xor $page_match);
      } else {
        $page_match = drupal_eval($block->pages);
      }
      if ($page_match)
        $test_empty = 1;
    }
  }
  return $test_empty;
}

/* Status Messages (Error, Status, Alert) */
function open_framework_status_messages($display = NULL) {
  $output = '';
  foreach (drupal_get_messages($display) as $type => $messages) {
	if ($type == "error") {$alert = 'alert alert-error';}
  	elseif ($type == "status") {$alert = 'alert alert-success';}
    else {$alert = 'alert';}
    $output .= "<div class=\"messages $type " . $alert . " \">\n";
    if (count($messages) > 1) {
      $output .= " <ul>\n";
      foreach ($messages as $message) {
        $output .= '  <li>'. $message ."</li>\n";
      }
      $output .= " </ul>\n";
    }
    else {
      $output .= $messages[0];
    }
    $output .= "</div>\n";
  }
  return $output;
}

/* Pager and Pagination */
function open_framework_pager($tags = array(), $limit = 10, $element = 0, $parameters = array(), $quantity = 9) {
  global $pager_page_array, $pager_total;
  // Calculate various markers within this pager piece:
  // Middle is used to "center" pages around the current page.
  $pager_middle = ceil($quantity / 2);
  // current is the page we are currently paged to
  $pager_current = $pager_page_array[$element] + 1;
  // first is the first page listed by this pager piece (re quantity)
  $pager_first = $pager_current - $pager_middle + 1;
  // last is the last page listed by this pager piece (re quantity)
  $pager_last = $pager_current + $quantity - $pager_middle;
  // max is the maximum page number
  $pager_max = $pager_total[$element];
  // End of marker calculations.
  // Prepare for generation loop.
  $i = $pager_first;
  if ($pager_last > $pager_max) {
    // Adjust "center" if at end of query.
    $i = $i + ($pager_max - $pager_last);
    $pager_last = $pager_max;
  }
  if ($i <= 0) {
    // Adjust "center" if at start of query.
    $pager_last = $pager_last + (1 - $i);
    $i = 1;
  }
  // End of generation loop preparation.
  $li_first = theme('pager_first', (isset($tags[0]) ? $tags[0] : t('« first')), $limit, $element, $parameters);
  $li_previous = theme('pager_previous', (isset($tags[1]) ? $tags[1] : t('‹ previous')), $limit, $element, 1, $parameters);
  $li_next = theme('pager_next', (isset($tags[3]) ? $tags[3] : t('next ›')), $limit, $element, 1, $parameters);
  $li_last = theme('pager_last', (isset($tags[4]) ? $tags[4] : t('last »')), $limit, $element, $parameters);
  if ($pager_total[$element] > 1) {
    if ($li_first) {
      $items[] = array(
        'class' => '',
        'data' => $li_first,
      );
    }
    if ($li_previous) {
      $items[] = array(
        'class' => '',
        'data' => $li_previous,
      );
    }
    // When there is more than one page, create the pager list.
    if ($i != $pager_max) {
      if ($i > 1) {
        $items[] = array(
          'class' => 'disabled',
          'data' => '<a href="#">…</a>',
        );
      }
      // Now generate the actual pager piece.
      for (; $i <= $pager_last && $i <= $pager_max; $i++) {
        if ($i < $pager_current) {
          $items[] = array(
            'class' => '',
            'data' => theme('pager_previous', $i, $limit, $element, ($pager_current - $i), $parameters),
          );
        }
        if ($i == $pager_current) {
          $items[] = array(
            'class' => 'active',
            'data' => '<a href="#">' . $i . '</a>',
          );
        }
        if ($i > $pager_current) {
          $items[] = array(
            'class' => '',
            'data' => theme('pager_next', $i, $limit, $element, ($i - $pager_current), $parameters),
          );
        }
      }
      if ($i < $pager_max) {
        $items[] = array(
          'class' => 'disabled',
          'data' => '<a href="#">…</a>',
        );
      }
    }
    // End generation.
    if ($li_next) {
      $items[] = array(
        'class' => 'pager-next',
        'data' => $li_next,
      );
    }
    if ($li_last) {
      $items[] = array(
        'class' => 'pager-last',
        'data' => $li_last,
      );
    }
    return '<div class="pagination pagination-centered">' . theme('item_list', $items, NULL, 'ul', array('class' => '')) . '</div>';
  }
}

function open_framework_item_list($items = array(), $title = NULL, $type = 'ul', $attributes = NULL) {
  if (isset($title)) {
    $output .= '<h3>' . $title . '</h3>';
  }
  if (!empty($items)) {
    $output .= "<$type" . drupal_attributes($attributes) . '>';
    $num_items = count($items);
    foreach ($items as $i => $item) {
      $attributes = array();
      $children = array();
      if (is_array($item)) {
        foreach ($item as $key => $value) {
          if ($key == 'data') {
            $data = $value;
          }
          elseif ($key == 'children') {
            $children = $value;
          }
          else {
            $attributes[$key] = $value;
          }
        }
      }
      else {
        $data = $item;
      }
      if (count($children) > 0) {
        $data .= theme_item_list($children, NULL, $type, $attributes); // Render nested list
      }
      if ($i == 0) {
        $attributes['class'] = empty($attributes['class']) ? 'first' : ($attributes['class'] . ' first');
      }
      if ($i == $num_items - 1) {
        $attributes['class'] = empty($attributes['class']) ? 'last' : ($attributes['class'] . ' last');
      }
      $output .= '<li' . drupal_attributes($attributes) . '>' . $data . "</li>\n";
    }
    $output .= "</$type>";
  }
  return $output;
}

/* Primary and Secondary Tabs */
function open_framework_menu_local_tasks() {
  $output = '';
  if ($primary = menu_primary_local_tasks()) {
    $output .= "<ul class=\"tabs primary nav-tabs\">\n". $primary ."</ul>\n";
  }
  if ($secondary = menu_secondary_local_tasks()) {
    $output .= "<ul class=\"tabs secondary\">\n". $secondary ."</ul>\n";
  }
  return $output;
}