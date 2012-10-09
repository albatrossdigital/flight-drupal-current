<?php
/**
 * @file
 * reach_crm_party.relation_type_default.inc
 */

/**
 * Implements hook_relation_default_relation_types().
 */
function reach_crm_party_relation_default_relation_types() {
  $export = array();

  $relation_type = new stdClass();
  $relation_type->disabled = FALSE; /* Edit this to true to make a default relation_type disabled initially */
  $relation_type->api_version = 1;
  $relation_type->relation_type = 'donation';
  $relation_type->label = 'Donation';
  $relation_type->reverse_label = 'Donation';
  $relation_type->directional = 0;
  $relation_type->transitive = 0;
  $relation_type->r_unique = 0;
  $relation_type->min_arity = 3;
  $relation_type->max_arity = 3;
  $relation_type->source_bundles = array(
    0 => 'node:donation',
    1 => 'party:*',
    2 => 'webform_submission_entity:*',
  );
  $relation_type->target_bundles = array();
  $export['donation'] = $relation_type;

/*
  $relation_type = new stdClass();
  $relation_type->disabled = FALSE; 
  $relation_type->api_version = 1;
  $relation_type->relation_type = 'form_submitted';
  $relation_type->label = 'Form is submitted';
  $relation_type->reverse_label = 'Form is submitted';
  $relation_type->directional = 0;
  $relation_type->transitive = 0;
  $relation_type->r_unique = 0;
  $relation_type->min_arity = 3;
  $relation_type->max_arity = 3;
  $relation_type->source_bundles = array(
    0 => 'node:form',
    1 => 'party:*',
    2 => 'webform_submission_entity:*',
  );
  $relation_type->target_bundles = array();
  $export['form_submitted'] = $relation_type;*/

  return $export;
}
