<?php
/**
 * @file
 * reach_crm.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function reach_crm_taxonomy_default_vocabularies() {
  return array(
    'groups' => array(
      'name' => 'Groups',
      'machine_name' => 'groups',
      'description' => 'Groups are used to separate Contacts',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
      'metatags' => array(),
    ),
  );
}
