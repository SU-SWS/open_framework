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

/**
 * Determines if the region has at least one block for this user
 *
 * @param $region
 *   A string containing the region name
 *
 * @return
 *   TRUE if the region has at least one block. FALSE if it doesn't.
 */

function open_framework_region_has_block($region) {
  $number_of_blocks = count(block_list($region));
  if ($number_of_blocks > 0) {
    return TRUE;
  }
  else {
    return FALSE;
  }
}

/**
 * Determine the span for a blocka
 *
 * @param $block_count
 *  The number of blocks in the region
 *
 * @param $block_id
 *  The position of the block (starts at 1)
 *
 * @param $count_sidebars
 *  A boolean indicating whether sidebars should be counted
 * 
 * @return
 *   The span value for the block at this location and region
 */

function open_framework_get_span($block_count, $block_id, $count_sidebars) {
  // @petechen (6.27.12) This method of applying a value to span assumes that there
  // is at least 1 block. If there are no blocks, you end up with a calculation
  // dividing by 0 generating a php error.  Suggest the following change:
  
  // default span if calculations fail
  // Use this default value instead as an "else" condition below:
  // $span = 12;

  // there are 12 columsn in bootstrap
  $available_width = 12;

  if ($count_sidebars) {
    // we assume that the left and right regions have a span of 3
    // if present, we remove that much from the available width
    if (open_framework_region_has_block('sidebar_first')) {
      $available_width = $available_width - 3;
    }

    if (open_framework_region_has_block('sidebar_second')) {
      $available_width = $available_width - 3;
    }
  }

  // @petechen - surroung this condition with another if else to account for $block_count = 0
  
  if ($block_count != 0) {

  // if the number of blocks divides evenly into the available width, that's our span width
  if (($available_width % $block_count) == 0) {
    $span = $available_width / $block_count;
  }
  // if the number of blocks does not divide evenly, we look up the span widths in an array
  // where then indexes are available width, number of blocks, and block position
  // e.g. [9][2][1] is the span of the first block, out of two when the available width is 9.
  else {
    $exceptions[6][4][1] = 2;
    $exceptions[6][4][2] = 2;
    $exceptions[6][4][3] = 1;
    $exceptions[6][4][4] = 1;

    $exceptions[6][5][1] = 1;
    $exceptions[6][5][2] = 1;
    $exceptions[6][5][3] = 1;
    $exceptions[6][5][4] = 1;
    $exceptions[6][5][5] = 1;

    $exceptions[9][2][1] = 3;
    $exceptions[9][2][2] = 6;

    $exceptions[9][4][1] = 3;
    $exceptions[9][4][2] = 2;
    $exceptions[9][4][3] = 2;
    $exceptions[9][4][4] = 2;

    $exceptions[9][5][1] = 3;
    $exceptions[9][5][2] = 1;
    $exceptions[9][5][3] = 1;
    $exceptions[9][5][4] = 1;
    $exceptions[9][5][5] = 3;

    $exceptions[9][6][1] = 2;
    $exceptions[9][6][2] = 2;
    $exceptions[9][6][3] = 2;
    $exceptions[9][6][4] = 1;
    $exceptions[9][6][5] = 1;
    $exceptions[9][6][6] = 1;

    $exceptions[12][5][1] = 3;
    $exceptions[12][5][2] = 2;
    $exceptions[12][5][3] = 2;
    $exceptions[12][5][4] = 2;
    $exceptions[12][5][5] = 3;

    $span = $exceptions[$available_width][$block_count][$block_id];
  }
  return $span;
}
// @petechen: so if $block_count = 0, use this as the default
  else $span = 12;
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