<?php
/**
 * @file
 * reach_form.features.inc
 */

/**
 * Implements hook_default_action_type().
 */
function reach_form_default_action_type() {
  $items = array();
  $items['form_submission'] = entity_import('action_type', '{
    "type" : "form_submission",
    "label" : "Form submission",
    "weight" : "0",
    "data" : { "sample_data" : 0 }
  }');
  return $items;
}

/**
 * Implements hook_ctools_plugin_api().
 */
function reach_form_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "ds" && $api == "ds") {
    return array("version" => "1");
  }
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function reach_form_node_info() {
  $items = array(
    'form' => array(
      'name' => t('Form'),
      'base' => 'node_content',
      'description' => t('Build custom forms to collect information about your visitors.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
