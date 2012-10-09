<?php 

/**
 * Implements hook_preprocess_block().
 */
function reach_core_alpha_preprocess_block(&$vars) {
  if(!empty($vars['block']->region)) {
    // Replace with dashes anything that isn't A-Z, numbers, dashes, or underscores.
    $string = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', 'block-region-' . $vars['block']->region));
    $vars['classes_array'][] = $string;
    $vars['attributes_array']['class'][] = $string;
  }
}
