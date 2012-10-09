<?php
/**
 * @file
 * reach_multi_content_blog.features.inc
 */

/**
 * Implements hook_views_api().
 */
function reach_multi_content_blog_views_api() {
  list($module, $api) = func_get_args();
  if ($module == "views" && $api == "views_default") {
    return array("version" => "3.0");
  }
}
