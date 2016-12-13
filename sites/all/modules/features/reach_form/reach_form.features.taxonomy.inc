<?php
/**
 * @file
 * reach_form.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function reach_form_taxonomy_default_vocabularies() {
  return array(
    'tags' => array(
      'name' => 'Tags',
      'machine_name' => 'tags',
      'description' => 'Use tags to group articles on similar topics into categories.',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
    ),
  );
}
