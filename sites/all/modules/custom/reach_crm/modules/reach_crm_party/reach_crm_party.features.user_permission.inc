<?php
/**
 * @file
 * reach_crm_party.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function reach_crm_party_user_default_permissions() {
  $permissions = array();

  // Exported permission: create parties.
  $permissions['create parties'] = array(
    'name' => 'create parties',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'party',
  );

  // Exported permission: delete terms in 1.
  $permissions['delete terms in 1'] = array(
    'name' => 'delete terms in 1',
    'roles' => array(),
    'module' => 'taxonomy',
  );

  // Exported permission: edit parties.
  $permissions['edit parties'] = array(
    'name' => 'edit parties',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'party',
  );

  // Exported permission: edit terms in 1.
  $permissions['edit terms in 1'] = array(
    'name' => 'edit terms in 1',
    'roles' => array(),
    'module' => 'taxonomy',
  );

  // Exported permission: view parties.
  $permissions['view parties'] = array(
    'name' => 'view parties',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'party',
  );

  return $permissions;
}
