<?php
/**
 * @file
 * reach_webform.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function reach_webform_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'webform_node_types';
  $strongarm->value = array(
    0 => 'donation',
    1 => 'form',
    2 => 'webform',
  );
  $export['webform_node_types'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'webform_template_src';
  $strongarm->value = array(
    'webform' => 'webform',
    'donation' => 0,
    'form' => 0,
  );
  $export['webform_template_src'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'webform_use_cookies';
  $strongarm->value = 0;
  $export['webform_use_cookies'] = $strongarm;

  return $export;
}
