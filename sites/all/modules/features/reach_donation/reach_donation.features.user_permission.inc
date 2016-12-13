<?php
/**
 * @file
 * reach_donation.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function reach_donation_user_default_permissions() {
  $permissions = array();

  // Exported permission: create donation content
  $permissions['create donation content'] = array(
    'name' => 'create donation content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any donation content
  $permissions['delete any donation content'] = array(
    'name' => 'delete any donation content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own donation content
  $permissions['delete own donation content'] = array(
    'name' => 'delete own donation content',
    'roles' => array(),
  );

  // Exported permission: edit any donation content
  $permissions['edit any donation content'] = array(
    'name' => 'edit any donation content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own donation content
  $permissions['edit own donation content'] = array(
    'name' => 'edit own donation content',
    'roles' => array(),
  );

  return $permissions;
}
