<?php
/**
 * @file
 * reach_blog.ds.inc
 */

/**
 * Implements hook_ds_field_settings_info().
 */
function reach_blog_ds_field_settings_info() {
  $export = array();

  $ds_fieldsetting = new stdClass();
  $ds_fieldsetting->api_version = 1;
  $ds_fieldsetting->id = 'node|blog|teaser';
  $ds_fieldsetting->entity_type = 'node';
  $ds_fieldsetting->bundle = 'blog';
  $ds_fieldsetting->view_mode = 'teaser';
  $ds_fieldsetting->settings = array(
    'title' => array(
      'weight' => '2',
      'label' => 'hidden',
      'format' => 'default',
      'formatter_settings' => array(
        'link' => '1',
        'wrapper' => 'h2',
        'class' => '',
      ),
    ),
    'links' => array(
      'weight' => '1',
      'label' => 'hidden',
      'format' => 'default',
    ),
    'post_date' => array(
      'weight' => '0',
      'label' => 'hidden',
      'format' => 'ds_post_date_long',
    ),
  );
  $export['node|blog|teaser'] = $ds_fieldsetting;

  return $export;
}

/**
 * Implements hook_ds_layout_settings_info().
 */
function reach_blog_ds_layout_settings_info() {
  $export = array();

  $ds_layout = new stdClass();
  $ds_layout->api_version = 1;
  $ds_layout->id = 'node|blog|teaser';
  $ds_layout->entity_type = 'node';
  $ds_layout->bundle = 'blog';
  $ds_layout->view_mode = 'teaser';
  $ds_layout->layout = 'ds_2col';
  $ds_layout->settings = array(
    'hide_empty_regions' => 0,
    'hide_sidebars' => 0,
    'regions' => array(
      'left' => array(
        0 => 'post_date',
        1 => 'links',
      ),
      'right' => array(
        0 => 'title',
        1 => 'field_content_media',
        2 => 'body',
        3 => 'field_tags',
      ),
    ),
    'fields' => array(
      'post_date' => 'left',
      'links' => 'left',
      'title' => 'right',
      'field_content_media' => 'right',
      'body' => 'right',
      'field_tags' => 'right',
    ),
    'classes' => array(
      'right' => array(
        'main-display' => 'main-display',
      ),
    ),
  );
  $export['node|blog|teaser'] = $ds_layout;

  return $export;
}
