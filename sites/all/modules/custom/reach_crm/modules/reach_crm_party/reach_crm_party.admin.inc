<?php

/**
 * Reach config form.
 */
function reach_crm_party_admin_form($form_state) {
  $form = _reach_crm_party_admin_form_fields();
  
  //dpm($form);
  
  //$product = commerce_product_new('donation');
  //dpm($product);
  //commerce_product_save($product);
  
  /*$form['reach_points'] = array(
    '#type' => 'fieldset',
    '#title' => t('Default Reach point values'),
  );
  
  $form['reach_points']['reach_webform_points'] = $form['reach_webform_points'];
  $form['reach_points']['reach_webform_points']['#title'] = t('Form submission');
  unset($form['reach_webform_points']);
  
  if (module_exists('reach_social_blocks_analytics')) {
    $form['reach_points']['reach_social_blocks_analytics_points_share'] = array(
      '#title' => t('Sharing a page'),
      '#default_value' => variable_get('reach_social_blocks_analytics_points_share', 3),
    }
  }*/
  
  $form = system_settings_form($form);
  return $form;
}

/**
 * Returns the fields for the config form.
 */
function _reach_crm_party_admin_form_fields($defaults = FALSE) {
  $form = array();
  
  dpm($defaults);
  
  /*if (!$defaults) {
    $defaults = array(
      'reach_cookie' => variable_get('reach_cookie', TRUE),
      'reach_webform_fbconnect' => variable_get('reach_webform_fbconnect', TRUE),
      'reach_webform_points' => variable_get('reach_webform_points', 5),
    );
  }
  
  dpm($defaults);*/
  
  $form['reach_cookie'] = array(
    '#type' => 'select',
    '#title' => t('Set user cookies'),
    '#options' => array(
      0 => t('Do no save any user cookies'),
      1 => t('Add checkbox to forms allowing users to opt-out'),
      2 => t('Always save cookies'),
    ),
    '#default_value' => $defaults['cookie'] ? $defaults['cookie'] : variable_get('reach_cookie', TRUE),
    '#description' => t('Set cookies linking supporters\'s browsers to their profiles so they do not need to re-enter information such as their name or email address.'),
  );
  
  $form['reach_webform_fbconnect'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable Facebook Connect on webforms'),
    '#default_value' => $defaults['fbconnect'] ? $defaults['fbconnect'] : variable_get('reach_webform_fbconnect', TRUE),
    '#description' => t('Add a Connect button to automatically grab the email, first name, last name and city from Facebook Connect.'),
  );
  
  $form['reach_webform_points'] = array(
    '#type' => 'textfield',
    '#size' => 2,
    '#title' => t('Default Reach point value'),
    '#default_value' => $defaults['points'] ? $defaults['points'] : variable_get('reach_webform_points', 5),
    '#description' => t('How many Activity Points should we add for each form submission?'),
  );
  
  return $form;
}
