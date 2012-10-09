<?php
/**
 * @file
 * reach_crm_party.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function reach_crm_party_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "relation" && $api == "relation_type_default") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function reach_crm_party_views_api() {
  return array("version" => "3.0");
}
