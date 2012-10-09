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
function action_rules_action_info() {
  $return = array();

  $return['action_action_create'] = array(
    'label' => t('Create a new action entity'),
    'named parameter' => TRUE,
    'parameter' => array(
      'bundle' => array(
        'type' => 'text',
        'label' => t('Action type'),
        'options list' => 'action_type_options',
        'description' => t('Specifies the type of the action that should be created.'),
        'restriction' => 'input',
      ),
    ),
    'provides' => array(
      'action' => array(
        'type' => 'action',
        'label' => t('Created action entity'),
        'save' => TRUE,
      ),
    ),
    'base' => 'action_action_create',
    'group' => t('Action'),
    //'access callback' => 'rules_entity_access',
    'callbacks' => array(
      //'access' => 'rules_entity_createfetch_access',
      //'form_alter' => 'rules_type_form_alter',
    ),
  );

  return $return;
}


/**
 * Returns options containing entity types having the given key set in the info.
 *
 * Additionally, we exclude all entity types that are marked as configuration.
 */
function action_type_options() {
  $info = entity_get_info('action');

  foreach ($info['bundles'] as $type => $bundle_info) {
    $types[$type] = $bundle_info['label'];
  }
  return $types;
}

/**
 * Action: Create entities.
 */
function action_action_create($args, $element) {

  $values = array();
  foreach ($element->pluginParameterInfo() as $name => $info) {
    $values['type'] = $args[$name];
  }

  try {
    $data = entity_property_values_create_entity('action', $values);
    return array('action' => $data);
  }
  catch (EntityMetadataWrapperException $e) {
    throw new RulesEvaluationException('Unable to create entity @type": ' . $e->getMessage(), array('@type' => $args['type']), $element);
  }
}






