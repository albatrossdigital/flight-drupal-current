<?php

/**
 * @file
 * Hooks provided by Reach CRM.
 */

/**
 * Return the entity type.
 * Required.
 */
function hook_reach_crm_contact_type() {
  return 'party';
}

/**
 * Return the entity type.
 *
 * @param array $entity
 *   The contact entity.
 */
function hook_reach_crm_contact_email($entity) {
  return $entity->field_email[LANGUAGE_NONE][0]['email'];
}


/**
 * Return the entity type.
 *
 * @param array $values
 *   An array of values for fields on the entity.
 * @param array $type
 *   The entity type.
 * @param array $points
 *   The number of points to add to the contact entity.
 * @TODO: this should be done in rules probably.
 */
function reach_crm_party_reach_crm_contact_save_update($values, $type, $points) {
  
  return $contact;
}

