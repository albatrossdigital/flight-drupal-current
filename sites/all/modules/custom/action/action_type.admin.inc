<?php

/**
 * @file
 * Action type editing UI.
 */

/**
 * UI controller.
 */
class ActionTypeUIController extends EntityDefaultUIController {

  /**
   * Overrides hook_menu() defaults.
   */
  public function hook_menu() {
    $items = parent::hook_menu();
		$items[$this->path]['description'] = 'Manage action entity types, including adding
		and removing fields and the display of fields.';
    return $items;
  }
}

/**
 * Generates the action type editing form.
 */
function action_type_form($form, &$form_state, $action_type, $op = 'edit') {

  if ($op == 'clone') {
    $action_type->label .= ' (cloned)';
    $action_type->type = '';
  }

  $form['label'] = array(
    '#title' => t('Label'),
    '#type' => 'textfield',
    '#default_value' => $action_type->label,
    '#description' => t('The human-readable name of this action type.'),
    '#required' => TRUE,
    '#size' => 30,
  );
  // Machine-readable type name.
  $form['type'] = array(
    '#type' => 'machine_name',
    '#default_value' => isset($action_type->type) ? $action_type->type : '',
    '#maxlength' => 32,
//    '#disabled' => $action_type->isLocked() && $op != 'clone',
    '#machine_name' => array(
      'exists' => 'action_get_types',
      'source' => array('label'),
    ),
    '#description' => t('A unique machine-readable name for this action type. It must only contain lowercase letters, numbers, and underscores.'),
  );

  $form['data']['#tree'] = TRUE;
  $form['data']['sample_data'] = array(
    '#type' => 'checkbox',
    '#title' => t('An interesting action switch'),
    '#default_value' => !empty($action_type->data['sample_data']),
  );

  $form['actions'] = array('#type' => 'actions');
  $form['actions']['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Save action type'),
    '#weight' => 40,
  );

  //Locking not supported yet
  /*if (!$action_type->isLocked() && $op != 'add') {
    $form['actions']['delete'] = array(
      '#type' => 'submit',
      '#value' => t('Delete action type'),
      '#weight' => 45,
      '#limit_validation_errors' => array(),
      '#submit' => array('action_type_form_submit_delete')
    );
  }*/
  return $form;
}

/**
 * Form API submit callback for the type form.
 */
function action_type_form_submit(&$form, &$form_state) {
  $action_type = entity_ui_form_submit_build_entity($form, $form_state);
  $action_type->save();
  $form_state['redirect'] = 'admin/structure/action_types';
}

/**
 * Form API submit callback for the delete button.
 */
function action_type_form_submit_delete(&$form, &$form_state) {
  $form_state['redirect'] = 'admin/structure/action_types/manage/' . $form_state['action_type']->type . '/delete';
}
