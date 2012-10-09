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
function reach_social_blocks_rules_event_info() {
  if (module_exists('reach_crm')) {
    return array(
      'reach_social_action' => array(
        'label' => t('Reach social click'),
        'group' => t('reach_crm'),
        'variables' => array(
          'contact' => array('type' => reach_crm_contact_type(), 'label' => t('contact')),
          'url' => array('type' => 'uri', 'label' => t('Link')),
          'points' => array('type' => 'integer', 'label' => t('Activity Points')),
          //'node' => array('type' => 'node', 'label' => t('node')),
        ),
      ),
    );
  }
}


