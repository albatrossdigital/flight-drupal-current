<?php
/**
 * @file
 * reach_slideshow_panel_widget.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function reach_slideshow_panel_widget_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "fieldable_panels_panes" && $api == "") {
    return array("version" => "");
  }
  list($module, $api) = func_get_args();
  if ($module == "fieldable_panels_panes" && $api == "fieldable_panels_panes_type") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function reach_slideshow_panel_widget_views_api() {
  return array("version" => "3.0");
}
