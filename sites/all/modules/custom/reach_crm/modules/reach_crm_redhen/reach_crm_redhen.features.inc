<?php
/**
 * @file
 * reach_crm_redhen.features.inc
 */

/**
 * Implements hook_views_api().
 */
function reach_crm_redhen_views_api() {
  return array("version" => "3.0");
}

/**
 * Implements hook_default_redhen_contact_type().
 */
function reach_crm_redhen_default_redhen_contact_type() {
  $items = array();
  $items['supporter'] = entity_import('redhen_contact_type', '{
    "name" : "supporter",
    "label" : "Supporter",
    "locked" : "0",
    "weight" : "0",
    "data" : null,
    "metatags" : []
  }');
  return $items;
}
