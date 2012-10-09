<?php
/**
 * @file
 * reach_video.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function reach_video_taxonomy_default_vocabularies() {
  return array(
    'day' => array(
      'name' => 'Day',
      'machine_name' => 'day',
      'description' => 'Taxonomy for selecting day of experience',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
    ),
  );
}
