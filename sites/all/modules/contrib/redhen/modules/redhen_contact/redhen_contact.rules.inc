<?php

/**
 * @file
 *  Rules integration for Reach module.
 *
 */


/**
 * Implements hook_rules_action_info()
 * @see rules_core_modules()
 */
function redhen_contact_rules_action_info() {
  $return = array();

  $return['redhen_contact_fetch_contact_from_account'] = array(
    'label' => t('Fetch a Redhen Contact from an account'),
    //'named parameter' => TRUE,
    'parameter' => array(
      'user' => array(
        'type' => 'user',
        'label' => t('Account'),
      ),
    ),
    'provides' => array(
      'redhen_contact' => array(
        'type' => 'redhen_contact',
        'label' => t('Created Redhen Contact entity'),
        'save' => TRUE,
      ),
    ),
    'base' => 'redhen_contact_user_contact',
    'group' => t('Redhen'),
    //'access callback' => 'rules_entity_access',
    'callbacks' => array(
      //'access' => 'rules_entity_createfetch_access',
      //'form_alter' => 'rules_type_form_alter',
    ),
  );

  return $return;
}


/**
 * Action: Create entities.
 */
function redhen_contact_contact_from_user($args, $element) {
 //foreach ($element->pluginParameterInfo() as $name => $info) {
 //   $user = $args[$name];
  //}
  dpm($args);
  //return array('action' => redhen_contact_user_contact($user));
}






