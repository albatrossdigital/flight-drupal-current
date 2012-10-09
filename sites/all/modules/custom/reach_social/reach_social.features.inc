<?php
/**
 * @file
 * reach_social.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function reach_social_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "oauthconnector" && $api == "") {
    return array("version" => "");
  }
}
