<?php

/**
 * @file
 * Action editing UI.
 *
 * We make very little use of the EntityAPI interface for this - preferring instead to use
 * views. That offers more flexibility to change a UI that will, more often than not,
 * be end-user facing.
 */

/**
 * UI controller.
 */
class ActionUIController extends EntityDefaultUIController {

  /**
   * Overrides hook_menu() defaults. Main reason for doing this is that
   * parent class hook_menu() is optimized for entity type administration.
   */
  public function hook_menu() {
    
    $items = array();
    $id_count = count(explode('/', $this->path));
    $wildcard = isset($this->entityInfo['admin ui']['menu wildcard']) ? $this->entityInfo['admin ui']['menu wildcard'] : '%' . $this->entityType;

    $items[$this->path] = array(
      'title' => 'Actions',
      'description' => 'Add edit and update actions.',
      'page callback' => 'system_admin_menu_block_page',
      'access arguments' => array('access administration pages'),
      'file path' => drupal_get_path('module', 'system'),
      'file' => 'system.admin.inc',
    );
    
    // Change the overview menu type for the list of actions.
    $items[$this->path]['type'] = MENU_LOCAL_TASK;
    
    // Change the add page menu to multiple types of entities
    $items[$this->path . '/add'] = array(
      'title' => 'Add a action',
      'description' => 'Add a new action',
      'page callback'  => 'action_add_page',
      'access callback'  => 'action_access',
      'access arguments' => array('edit'),
      'type' => MENU_NORMAL_ITEM,
      'weight' => 20,
      'file' => 'action.admin.inc',
      'file path' => drupal_get_path('module', $this->entityInfo['module'])

    );
    
    // Add menu items to add each different type of entity.
    foreach (action_get_types() as $type) {
      $items[$this->path . '/add/' . $type->type] = array(
        'title' => 'Add ' . $type->label,
        'page callback' => 'action_form_wrapper',
        'page arguments' => array(action_create(array('type' => $type->type))),
        'access callback' => 'action_access',
        'access arguments' => array('edit', 'edit ' . $type->type),
        'file' => 'action.admin.inc',
        'file path' => drupal_get_path('module', $this->entityInfo['module'])
      );
    }

    // Loading and editing action entities
    $items[$this->path . '/action/' . $wildcard] = array(
      'page callback' => 'action_form_wrapper',
      'page arguments' => array($id_count + 1),
      'access callback' => 'action_access',
      'access arguments' => array('edit', $id_count + 1),
      'weight' => 0,
      'context' => MENU_CONTEXT_PAGE | MENU_CONTEXT_INLINE,
      'file' => 'action.admin.inc',
      'file path' => drupal_get_path('module', $this->entityInfo['module'])
    );
    $items[$this->path . '/action/' . $wildcard . '/edit'] = array(
      'title' => 'Edit',
      'type' => MENU_DEFAULT_LOCAL_TASK,
      'weight' => -10,
      'context' => MENU_CONTEXT_PAGE | MENU_CONTEXT_INLINE,
    );
    
    $items[$this->path . '/action/' . $wildcard . '/delete'] = array(
      'title' => 'Delete',
      'page callback' => 'action_delete_form_wrapper',
      'page arguments' => array($id_count + 1),
      'access callback' => 'action_access',
      'access arguments' => array('edit', $id_count + 1),
      'type' => MENU_LOCAL_TASK,
      'context' => MENU_CONTEXT_INLINE,
      'weight' => 10,
      'file' => 'action.admin.inc',
      'file path' => drupal_get_path('module', $this->entityInfo['module'])
    );
    
    // Menu item for viewing actions
    $items['action/' . $wildcard] = array(
      //'title' => 'Title',
      'title callback' => 'action_page_title',
      'title arguments' => array(1),
      'page callback' => 'action_page_view',
      'page arguments' => array(1),
      'access callback' => 'action_access',
      'access arguments' => array('view', 1),
      'type' => MENU_CALLBACK,
    );
    return $items;
  }
  
  
  /**
   * Create the markup for the add Action Entities page within the class
   * so it can easily be extended/overriden.
   */ 
  public function addPage() {
    $item = menu_get_item();
    $content = system_admin_menu_block($item);

    if (count($content) == 1) {
      $item = array_shift($content);
      drupal_goto($item['href']);
    }    
        
    return theme('action_add_list', array('content' => $content));
  }
  
}


/**
 * Form callback wrapper: create or edit a action.
 *
 * @param $action
 *   The action object being edited by this form.
 *
 * @see action_edit_form()
 */
function action_form_wrapper($action) {
  // Add the breadcrumb for the form's location.
  action_set_breadcrumb();
  return drupal_get_form('action_edit_form', $action);
}


/**
 * Form callback wrapper: delete a action.
 *
 * @param $action
 *   The action object being edited by this form.
 *
 * @see action_edit_form()
 */
function action_delete_form_wrapper($action) {
  // Add the breadcrumb for the form's location.
  //action_set_breadcrumb();
  return drupal_get_form('action_delete_form', $action);
}


/**
 * Form callback: create or edit a action.
 *
 * @param $action
 *   The action object to edit or for a create form an empty action object
 *     with only a action type defined.
 */
function action_edit_form($form, &$form_state, $action) {
  // Add the default field elements.
  $form['name'] = array(
    '#type' => 'textfield',
    '#title' => t('Action Name'),
    '#default_value' => isset($action->name) ? $action->name : '',
    '#maxlength' => 255,
    '#required' => TRUE,
    '#weight' => -5,
  );
  
  $form['data']['#tree'] = TRUE;
  $form['data']['sample_data'] = array(
    '#type' => 'checkbox',
    '#title' => t('An interesting action switch'),
    '#default_value' => isset($action->data['sample_data']) ? $action->data['sample_data'] : 1,
  );

  // Add the field related form elements.
  $form_state['action'] = $action;
  field_attach_form('action', $action, $form, $form_state);

  $form['actions'] = array(
    '#type' => 'container',
    '#attributes' => array('class' => array('form-actions')),
    '#weight' => 400,
  );

  // We add the form's #submit array to this button along with the actual submit
  // handler to preserve any submit handlers added by a form callback_wrapper.
  $submit = array();

  if (!empty($form['#submit'])) {
    $submit += $form['#submit'];
  }

  $form['actions']['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Save action'),
    '#submit' => $submit + array('action_edit_form_submit'),
  );
  
  if (!empty($action->name)) {
    $form['actions']['delete'] = array(
      '#type' => 'submit',
      '#value' => t('Delete action'),
      '#suffix' => l(t('Cancel'), 'admin/content/actions'),
      '#submit' => $submit + array('action_form_submit_delete'),
      '#weight' => 45,
    );
  }

  // We append the validate handler to #validate in case a form callback_wrapper
  // is used to add validate handlers earlier.
  $form['#validate'][] = 'action_edit_form_validate';
  return $form;
}


/**
 * Form API validate callback for the action form
 */
function action_edit_form_validate(&$form, &$form_state) {
  $action = $form_state['action'];
  
  // Notify field widgets to validate their data.
  field_attach_form_validate('action', $action, $form, $form_state);
}


/**
 * Form API submit callback for the action form.
 * 
 * @todo remove hard-coded link
 */
function action_edit_form_submit(&$form, &$form_state) {
  
  $action = entity_ui_controller('action')->entityFormSubmitBuildEntity($form, $form_state);
  // Save the action and go back to the list of actions
  
  // Add in created and changed times.
  if ($action->is_new = isset($action->is_new) ? $action->is_new : 0){
    $action->created = time();
  }

  $action->changed = time();
  
  $action->save();
  $form_state['redirect'] = 'admin/content/actions';
}

/**
 * Form API submit callback for the delete button.
 * 
 * @todo Remove hard-coded path
 */
function action_form_submit_delete(&$form, &$form_state) {
  $form_state['redirect'] = 'admin/content/actions/action/' . $form_state['action']->action_id . '/delete';
}


/**
 * Form callback: confirmation form for deleting a action.
 *
 * @param $action
 *   The action to delete
 *
 * @see confirm_form()
 */
function action_delete_form($form, &$form_state, $action) {
  $form_state['action'] = $action;

  $form['#submit'][] = 'action_delete_form_submit';

  $form = confirm_form($form,
    t('Are you sure you want to delete action %name?', array('%name' => $action->name)),
    'admin/content/actions/action',
    '<p>' . t('This action cannot be undone.') . '</p>',
    t('Delete'),
    t('Cancel'),
    'confirm'
  );
  
  return $form;
}

/**
 * Submit callback for action_delete_form
 */
function action_delete_form_submit($form, &$form_state) {
  $action = $form_state['action'];

  action_delete($action);

  drupal_set_message(t('The action %name has been deleted.', array('%name' => $action->name)));
  watchdog('action', 'Deleted action %name.', array('%name' => $action->name));

  $form_state['redirect'] = 'admin/content/actions';
}



/**
 * Page to add Action Entities.
 *
 * @todo Pass this through a proper theme function
 */
function action_add_page() {
  $controller = entity_ui_controller('action');
  return $controller->addPage();
}


/**
 * Displays the list of available action types for action creation.
 *
 * @ingroup themeable
 */
function theme_action_add_list($variables) {
  $content = $variables['content'];
  $output = '';
  if ($content) {
    $output = '<dl class="action-type-list">';
    foreach ($content as $item) {
      $output .= '<dt>' . l($item['title'], $item['href']) . '</dt>';
      $output .= '<dd>' . filter_xss_admin($item['description']) . '</dd>';
    }
    $output .= '</dl>';
  }
  else {
    if (user_access('administer action types')) {
      $output = '<p>' . t('Action Entities cannot be added because you have not created any action types yet. Go to the <a href="@create-action-type">action type creation page</a> to add a new action type.', array('@create-action-type' => url('admin/structure/action_types/add'))) . '</p>';
    }
    else {
      $output = '<p>' . t('No action types have been created yet for you to use.') . '</p>';
    }
  }

  return $output;
}





/**
 * Sets the breadcrumb for administrative action pages.
 */
function action_set_breadcrumb() {
  $breadcrumb = array(
    l(t('Home'), '<front>'),
    l(t('Administration'), 'admin'),
    l(t('Content'), 'admin/content'),
    l(t('Actions'), 'admin/content/actions'),
  );

  drupal_set_breadcrumb($breadcrumb);
}



