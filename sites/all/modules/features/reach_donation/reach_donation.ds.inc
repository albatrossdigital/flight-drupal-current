<?php
/**
 * @file
 * reach_donation.ds.inc
 */

/**
 * Implements hook_ds_layout_settings_info().
 */
function reach_donation_ds_layout_settings_info() {
  $export = array();

  $ds_layout = new stdClass();
  $ds_layout->api_version = 1;
  $ds_layout->id = 'node|donation|default';
  $ds_layout->entity_type = 'node';
  $ds_layout->bundle = 'donation';
  $ds_layout->view_mode = 'default';
  $ds_layout->layout = 'ds_2col';
  $ds_layout->settings = array(
    'hide_empty_regions' => 1,
    'hide_sidebars' => 0,
    'regions' => array(
      'right' => array(
        0 => 'body',
      ),
      'left' => array(
        0 => 'webform',
      ),
    ),
    'fields' => array(
      'body' => 'right',
      'webform' => 'left',
    ),
    'classes' => array(
      'left' => array(
        'main-display' => 'main-display',
      ),
    ),
  );
  $export['node|donation|default'] = $ds_layout;

  return $export;
}
