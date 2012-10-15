<?php
/**
 * @file
 * reach_form.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function reach_form_user_default_permissions() {
  $permissions = array();

  // Exported permission: create form content.
  $permissions['create form content'] = array(
    'name' => 'create form content',
    'roles' => array(
      0 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any form content.
  $permissions['delete any form content'] = array(
    'name' => 'delete any form content',
    'roles' => array(
      0 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own form content.
  $permissions['delete own form content'] = array(
    'name' => 'delete own form content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: edit any form content.
  $permissions['edit any form content'] = array(
    'name' => 'edit any form content',
    'roles' => array(
      0 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own form content.
  $permissions['edit own form content'] = array(
    'name' => 'edit own form content',
    'roles' => array(),
    'module' => 'node',
  );

  return $permissions;
}
