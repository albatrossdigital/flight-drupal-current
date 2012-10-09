<?php
/**
 * @file
 * reach_form.ds.inc
 */

/**
 * Implements hook_ds_layout_settings_info().
 */
function reach_form_ds_layout_settings_info() {
  $export = array();

  $ds_layout = new stdClass();
  $ds_layout->api_version = 1;
  $ds_layout->id = 'action|form_submission|default';
  $ds_layout->entity_type = 'action';
  $ds_layout->bundle = 'form_submission';
  $ds_layout->view_mode = 'default';
  $ds_layout->layout = 'ds_1col';
  $ds_layout->settings = array(
    'hide_empty_regions' => 0,
    'hide_sidebars' => 0,
    'regions' => array(
      'ds_content' => array(
        0 => 'action_form_submission',
      ),
    ),
    'fields' => array(
      'action_form_submission' => 'ds_content',
    ),
    'classes' => array(),
  );
  $export['action|form_submission|default'] = $ds_layout;

  $ds_layout = new stdClass();
  $ds_layout->api_version = 1;
  $ds_layout->id = 'node|form|default';
  $ds_layout->entity_type = 'node';
  $ds_layout->bundle = 'form';
  $ds_layout->view_mode = 'default';
  $ds_layout->layout = 'ds_2col';
  $ds_layout->settings = array(
    'hide_empty_regions' => 1,
    'hide_sidebars' => 0,
    'regions' => array(
      'left' => array(
        0 => 'webform',
      ),
      'right' => array(
        0 => 'field_content_media',
        1 => 'body',
      ),
    ),
    'fields' => array(
      'webform' => 'left',
      'field_content_media' => 'right',
      'body' => 'right',
    ),
    'classes' => array(),
  );
  $export['node|form|default'] = $ds_layout;

  return $export;
}
