<?php

/**
 * @file
 *  Rules integration for reach_crm module.
 *
 */

/************************** Rules Events **************************************/

/**
 * Implements hook_rules_event_info().
 */
function reach_webform_rules_event_info() {
  return array(
    'reach_webform_submitted' => array(
      'label' => t('Reach webform submitted'),
      'group' => t('reach_crm'),
      'variables' => array(
        'contact' => array('type' => reach_crm_contact_type(), 'label' => t('contact')),
        'webform' => array('type' => 'node', 'label' => t('node')),
        'webform_submission' => array('type' => 'webform_submission_entity', 'label' => t('webform_submission_entity')),
        'points' => array('type' => 'integer', 'label' => t('Activity Points')),
      ),
    ),
  );
}


