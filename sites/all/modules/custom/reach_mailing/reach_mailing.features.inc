<?php
/**
 * @file
 * reach_mailing.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function reach_mailing_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function reach_mailing_views_api() {
  return array("version" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function reach_mailing_node_info() {
  $items = array(
    'mailing' => array(
      'name' => t('Mailing'),
      'base' => 'node_content',
      'description' => t('Creates a new mailing that can be sent with the CRM mailing collection of modules.'),
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
  );
  return $items;
}
