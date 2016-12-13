<?php

/**
 * @file
 *  Rules integration for Reach module.
 *
 */

/**
 * Implements hook_rules_event_info().
 */
function reach_form_rules_event_info() {
  return array(
    'reach_form_submission' => array(
      'label' => t('Reach form submitted'),
      'group' => t('Reach CRM'),
      'variables' => array(
        'party' => array('type' => 'party', 'label' => t('party')),
        'form' => array('type' => 'node', 'label' => t('node')),
        'webform_submission' => array('type' => 'webform_submission_entity', 'label' => t('webform_submission_entity')),
        'points' => array('type' => 'integer', 'label' => t('points')),
      ),
    ),
  );
}




