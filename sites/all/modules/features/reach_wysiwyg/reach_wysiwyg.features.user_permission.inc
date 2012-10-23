<?php
/**
 * @file
 * reach_wysiwyg.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function reach_wysiwyg_user_default_permissions() {
  $permissions = array();

  // Exported permission: use text format rich_text.
  $permissions['use text format rich_text'] = array(
    'name' => 'use text format rich_text',
    'roles' => array(
      0 => 'authenticated user',
    ),
    'module' => 'filter',
  );

  return $permissions;
}
