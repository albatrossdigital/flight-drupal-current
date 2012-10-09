<?php

/**
 * @file
 * Webform module pay component.
 */

/**
 * Implements _webform_defaults_component().
 */
function _webform_defaults_pay() {
  return array(
    'name' => '',
    'form_key' => NULL,
    'pid' => 0,
    'weight' => 0,
    'value' => '',
    'mandatory' => 0,
    'extra' => array(
      'pfid' => NULL, // Pay form ID.
      'pmid' => NULL, // Pay method ID.
      'price_components' => array(),
      'other_components' => array(
        'mail' => '',
        'first_name' => '',
        'last_name' => '',
        'billto' => '<none>',
        'street1' => '<none>',
        'street2' => '<none>',
        'city' => '<none>',
        'state' => '<none>',
        'zip' => '<none>',
        'country' => '<none>',
        'phone' => '<none>',
      ),
      'fieldset' => 1,
    ),
  );
}

/**
 * Implements _webform_theme_component().
 */
function _webform_theme_pay() {
  return array(
    'webform_display_pay' => array(
      'render element' => 'element',
    ),
  );
}

/**
 * Implements _webform_edit_component().
 */
function _webform_edit_pay($component) {
  pay_load_handler('pay_form', 'pay_form');

  $form = array();
  $form['value'] = array(
    '#type' => 'value',
    '#value' => '',
  );
  $form['extra']['description'] = array(
    '#type' => 'value',
    '#value' => '',
    '#parents' => array('extra', 'description'),
  );

  $options = array();
  $info = pay_handlers('pay_method');
  foreach (pay_form::pay_method_list() as $pmid => $pay_method) {
    $options[$pmid] = $pay_method;
  }

  $form['extra']['pfid'] = array(
    '#type' => 'value',
    '#value' => $component['extra']['pfid'],
    '#parents' => array('extra', 'pfid'),
  );

  $form['extra']['pmid'] = array(
    '#title' => t('Payment method'),
    '#type' => 'select',
    '#options' => $options,
    '#default_value' => $component['extra']['pmid'],
    '#required' => TRUE,
    '#parents' => array('extra', 'pmid'),
  );

  if (empty($options)) {
    $message = t('No payment methods are available. At least <a href="!url">one payment method</a> must be added before payment information is accepted.', array('!url' => url('admin/config/pay')));
    drupal_set_message($message, 'error');
    $form['extra']['handler']['#options'][] = t('No methods available');
    $form['extra']['handler']['#disabled'] = TRUE;
    $form['extra']['handler']['#description'] = $message;
  }

  $node = node_load($component['nid']);
  $price_components = webform_component_list($node, 'price', FALSE, FALSE);
  $form['extra']['price_components'] = array(
    '#type' => 'select',
    '#title' => t('Price components'),
    '#options' => $price_components,
    '#default_value' => $component['extra']['price_components'],
    '#multiple' => TRUE,
    '#size' => 10,
    '#description' => t('Select the components that contain price values. The total value of these components will be charged to the user.'),
    '#process' => array('webform_component_select'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
    '#all_checkbox' => FALSE,
    '#required' => TRUE,
    '#parents' => array('extra', 'price_components'),
  );

  $email_components = webform_component_list($node, 'email_address', TRUE, TRUE);
  $name_components = webform_component_list($node, 'email_name', TRUE, TRUE);
  $address_components = webform_component_list($node, 'address', TRUE, TRUE);
  $bill_components = $name_components;

  $built_in = array('' => t('Use built-in field'));
  $do_not_collect = array('<none>' => t('Do not collect'));
  $separate_fields = array('<none>' => t('Use individual fields'));

  $form['extra']['other_components'] = array(
    '#type' => 'fieldset',
    '#title' => t('Other component mappings'),
    '#description' => t('Additional information may also be sent to the payment provider. Note that not all fields may be supported by all payment systems.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['extra']['other_components']['mail'] = array(
    '#type' => 'select',
    '#title' => t('E-mail'),
    '#options' => $built_in + $do_not_collect + $email_components,
    '#default_value' => $component['extra']['other_components']['mail'],
    '#parents' => array('extra', 'other_components', 'mail'),
  );
  $form['extra']['other_components']['first_name'] = array(
    '#type' => 'select',
    '#title' => t('First name'),
    '#options' => $built_in + $do_not_collect + $name_components,
    '#default_value' => $component['extra']['other_components']['first_name'],
    '#parents' => array('extra', 'other_components', 'first_name'),
  );
  $form['extra']['other_components']['last_name'] = array(
    '#type' => 'select',
    '#title' => t('Last name'),
    '#options' => $built_in + $do_not_collect + $name_components,
    '#default_value' => $component['extra']['other_components']['last_name'],
    '#parents' => array('extra', 'other_components', 'last_name'),
  );
  $form['extra']['other_components']['billto'] = array(
    '#type' => 'select',
    '#title' => t('Billing address'),
    '#options' => $separate_fields + $address_components,
    '#default_value' => $component['extra']['other_components']['billto'],
    '#access' => !empty($address_components),
    '#description' => t('A combined address field may be used if you have a dedicated address component available. If used, do not specify any of the fields below.'),
    '#parents' => array('extra', 'other_components', 'billto'),
  );
  $form['extra']['other_components']['street1'] = array(
    '#type' => 'select',
    '#title' => t('Street 1'),
    '#options' => $do_not_collect + $bill_components,
    '#default_value' => $component['extra']['other_components']['street1'],
    '#parents' => array('extra', 'other_components', 'street1'),
  );
  $form['extra']['other_components']['street2'] = array(
    '#type' => 'select',
    '#title' => t('Street 2'),
    '#options' => $do_not_collect + $bill_components,
    '#default_value' => $component['extra']['other_components']['street2'],
    '#description' => t('Note that Street 2 may not be recorded by some payment gateways.'),
    '#parents' => array('extra', 'other_components', 'street2'),
  );
  $form['extra']['other_components']['city'] = array(
    '#type' => 'select',
    '#title' => t('City'),
    '#options' => $do_not_collect + $bill_components,
    '#default_value' => $component['extra']['other_components']['city'],
    '#parents' => array('extra', 'other_components', 'city'),
  );
  $form['extra']['other_components']['state'] = array(
    '#type' => 'select',
    '#title' => t('State/Province'),
    '#options' => $do_not_collect + $bill_components,
    '#default_value' => $component['extra']['other_components']['state'],
    '#parents' => array('extra', 'other_components', 'state'),
  );
  $form['extra']['other_components']['zip'] = array(
    '#type' => 'select',
    '#title' => t('Postal code'),
    '#options' => $do_not_collect + $bill_components,
    '#default_value' => $component['extra']['other_components']['zip'],
    '#parents' => array('extra', 'other_components', 'zip'),
  );
  $form['extra']['other_components']['country'] = array(
    '#type' => 'select',
    '#title' => t('Country'),
    '#options' => $do_not_collect + $bill_components,
    '#default_value' => $component['extra']['other_components']['country'],
    '#parents' => array('extra', 'other_components', 'country'),
  );
  $form['extra']['other_components']['phone'] = array(
    '#type' => 'select',
    '#title' => t('Phone'),
    '#options' => $do_not_collect + $bill_components,
    '#default_value' => $component['extra']['other_components']['phone'],
    '#parents' => array('extra', 'other_components', 'phone'),
  );

  $form['display']['fieldset'] = array(
    '#title' => t('Show payment label as fieldset'),
    '#type' => 'checkbox',
    '#default_value' => $component['extra']['fieldset'],
    '#description' => t('Payment information includes multiple fields which you may want to visually group together. The label will be used as the fieldset title.'),
    '#parents' => array('extra', 'fieldset'),
  );

  return $form;
}




/**
 * Implements _form_builder_webform_form_builder_types_component().
 */
function _form_builder_webform_form_builder_types_pay() {
  $fields = array();

  $fields['pay'] = array(
    'title' => t('Payment Info'),
    'weight' => 2,
  );

  //module_load_include('inc', 'form_builder_webform', 'form_builder_webform.include');
  $fields['pay']['default'] = _form_builder_webform_default('pay'); //array();

  $fields['pay']['default']['first'] = array(
    '#type' => 'textfield',
    '#title' => t('First name'),
  );
  $fields['pay']['default']['cc_number'] = array(
    '#type' => 'textfield',
    '#title' => t('cc_number'),
  );

  //$fields['pay']['default']['#pre_render'] = array('webform_pay_prerender');

  $form = array();
  $form['#node'] = node_load(arg(1));
  $pay_cid = $node->webform_pay_cid;
  $component = $node->webform['components'][$pay_cid];
  $pay_form = pay_form_load($component['extra']['pfid']);

  $fields['#pre_render'][] = 'webform_pay_prerender';
  $fields['#validate'][] = 'webform_pay_validate';
  $pay_form->form($form, $form_state, 'webform');
  $fields['#after_build'][] = 'webform_pay_after_build';

  $fields['pay']['default']['pay'] = $form['pay_form'];


  /*dpm(_form_builder_webform_default('pay'));
  $element = _form_builder_webform_default('pay');




  dpm($node);
  */


//  $fields['pay']['default'] = array(
//  );
  /*$node =
  $pay = $node->webform['components'][$node->webform_pay_cid];//['extra'];//['pfid'];
  dpm($node);
  dpm($pay);
  dpm(pay_form_load($pay['extra']['pfid']));

    $fields['pay']['default']['#pre_render'] = array('webform_pay_prerender');
  /*
  dpm($element);
  //$fields['pay']['default']['#node'] = );


  //$element['#attributes'] = array('class' => 'webform-component-pay');
  // element['#pre_render'] = array('_webform_pay_fieldset_prerender');

  //$fields['pay']['default']['#title'] = t('Add Payment Info');
dpm($fields);*/

  return $fields;
}


/**
 * Implements _form_builder_webform_form_builder_map_component().
 */
function _form_builder_webform_form_builder_map_pay() {
  return array(
    'form_builder_type' => 'pay',
    'properties' => array(
      'description' => array(
        'form_parents' => array('default', 'description'),
        'storage_parents' => array('extra', 'description'),
      ),
      'pfid' => array(
        'form_parents' => array('extra', 'pfid'),
        'storage_parents' => array('extra', 'pfid'),
      ),
      'pmid' => array(
        'form_parents' => array('extra', 'pmid'),
        'storage_parents' => array('extra', 'pmid'),
      ),
      'fieldset' => array(
        'form_parents' => array('display', 'fieldset'),
        'storage_parents' => array('extra', 'fieldset'),
      ),
      'price_components' => array(
        'form_parents' => array('extra', 'price_components'),
        'storage_parents' => array('extra', 'price_components'),
      ),
      'other_components' => array(
        'form_parents' => array('extra', 'other_components'),

        'mail' => array(
          'form_parents' => array('extra', 'other_components', 'mail'),
          'storage_parents' => array('extra', 'other_components', 'mail'),
        ),
        'first_name' => array(
          'form_parents' => array('extra', 'other_components', 'first_name'),
          'storage_parents' => array('extra', 'other_components', 'first_name'),
        ),
        'last_name' => array(
          'form_parents' => array('extra', 'other_components', 'last_name'),
          'storage_parents' => array('extra', 'other_components', 'last_name'),
        ),
        'billto' => array(
          'form_parents' => array('extra', 'other_components', 'billto'),
          'storage_parents' => array('extra', 'other_components', 'billto'),
        ),
        'street1' => array(
          'form_parents' => array('extra', 'other_components', 'street1'),
          'storage_parents' => array('extra', 'other_components', 'street1'),
        ),
        'street2' => array(
          'form_parents' => array('extra', 'other_components', 'street2'),
          'storage_parents' => array('extra', 'other_components', 'street2'),
        ),
        'city' => array(
          'form_parents' => array('extra', 'other_components', 'city'),
          'storage_parents' => array('extra', 'other_components', 'city'),
        ),
        'city' => array(
          'form_parents' => array('extra', 'other_components', 'city'),
          'storage_parents' => array('extra', 'other_components', 'city'),
        ),
        'state' => array(
          'form_parents' => array('extra', 'other_components', 'state'),
          'storage_parents' => array('extra', 'other_components', 'state'),
        ),
        'zip' => array(
          'form_parents' => array('extra', 'other_components', 'zip'),
          'storage_parents' => array('extra', 'other_components', 'zip'),
        ),
        'country' => array(
          'form_parents' => array('extra', 'other_components', 'country'),
          'storage_parents' => array('extra', 'other_components', 'country'),
        ),
        'phone' => array(
          'form_parents' => array('extra', 'other_components', 'phone'),
          'storage_parents' => array('extra', 'other_components', 'phone'),
        ),
      ),
    ),
  );
}

/*

  return array(
    'name' => '',
    'form_key' => NULL,
    'pid' => 0,
    'weight' => 0,
    'value' => '',
    'mandatory' => 0,
    'extra' => array(
      'pfid' => NULL, // Pay form ID.
      'pmid' => NULL, // Pay method ID.
      'price_components' => array(),
      'other_components' => array(
        'mail' => '',
        'first_name' => '',
        'last_name' => '',
        'billto' => '<none>',
        'street1' => '<none>',
        'street2' => '<none>',
        'city' => '<none>',
        'state' => '<none>',
        'zip' => '<none>',
        'country' => '<none>',
        'phone' => '<none>',
      ),
      'fieldset' => 1,
    ),
  );
}8/

/**
 * Implements _webform_render_component().
 */
function _webform_render_pay($component, $value = NULL, $filter = TRUE) {
  // This is a merely a placeholder element, since pay forms need to be located
  // at a specific location in the form. This will be populated with the actual
  // form in webform_pay_prerender().
  $element = array(
    '#value' => $value,
    '#weight' => $component['weight'],
    '#webform_component' => $component,
  );
  //dpm($component);

  if ($component['extra']['fieldset']) {
    $element['#type'] = 'fieldset';
    $element['#title'] = $filter ? _webform_filter_xss($component['name']) : $component['name'];
    $element['#title_display'] = $component['extra']['title_display'] ? $component['extra']['title_display'] : NULL;
    $element['#attributes'] = array('class' => 'webform-component-pay');
    $element['#pre_render'] = array('_webform_pay_fieldset_prerender');
  }
  else {
    // Wrap in the normal component wrapper if not a fieldset.
    $element['#theme_wrappers'] = array('webform_element');
  }

  return $element;
}

/**
 * Pre-render function to set a fieldset ID.
 */
function _webform_pay_fieldset_prerender($element) {
  $element['#attributes']['id'] = 'webform-component-' . str_replace('_', '-', implode('--', array_slice($element['#parents'], 1)));
  return $element;
}

/**
 * Implements _webform_submit_component().
 */
function _webform_submit_pay($component, $value) {
  if (isset($value['cc_type']) && isset($value['cc_number'])) {
    // Mask the credit card number and discard the CCV2 number entirely.
    $stars = $value['cc_type'] == 'amex' ? '**** ** ***** *' : '**** **** **** ';
    $value['cc_number'] = $stars . substr($value['cc_number'], -4);
  }

  // Only keep the following values to prevent any accidental, insecure storage.
  $value = array_intersect_key($value, drupal_map_assoc(array(
    'pmid',
    'payment_type',
    'first_name',
    'last_name',
    'cc_type',
    'cc_number',
    'cc_exp_month',
    'cc_exp_year',
    'total',
  )));

  return $value;
}

/**
 * Implements _webform_display_component().
 */
function _webform_display_pay($component, $value, $format = 'html') {
  return array(
    '#title' => $component['name'],
    '#weight' => $component['weight'],
    '#theme' => 'webform_display_pay',
    '#theme_wrappers' => $format == 'html' ? array('webform_element') : array('webform_element_text'),
    '#post_render' => array('webform_element_wrapper'),
    '#webform_component' => $component,
    '#pmid' => $component['extra']['pmid'],
    '#format' => $format,
    '#value' => $value,
  );
}

/**
 * Format the output of data for this component.
 */
function theme_webform_display_pay($variables) {
  $element = $variables['element'];

  $output = array();
  $value = $element['#value'];

  if (!empty($value['first_name']) || !empty($value['last_name'])) {
    $name = implode(' ', array($value['first_name'], $value['last_name']));
    $output[] = ($element['#format'] == 'html') ? check_plain($name) : $name;
  }

  if ($value['cc_number'] && $pay_method = pay_method_load($value['pmid'])) {
    $payment_types = $pay_method->payment_types();
    $output[] = t('@card expires @date', array('@card' => $payment_types[$value['cc_type']], '@date' => $value['cc_exp_month'] . '/' . $value['cc_exp_year']));
    $output[] = check_plain($value['cc_number']);
  }

  if ($value['total']) {
    $output[] = t('Total: @amount', array('@amount' => sprintf("%01.2f", $value['total'])));
  }

  if (!empty($output)) {
    $glue = ($element['#format'] == 'html') ? '<br />' : "\n";
    $output = implode($glue, $output);
  }
  else {
    $output = t('No payment information provided');
  }

  return $output;
}

/**
 * Implements _webform_analysis_component().
 */
function _webform_analysis_pay($component, $sids = array()) {
  $submissions = 0;
  $payments = 0;
  $payment_amount = 0;

  $result = db_select('webform_submitted_data', 'wsd')
    ->fields('wsd', array('data'))
    ->condition('nid', $component['nid'])
    ->condition('cid', $component['cid'])
    ->condition('no', 'total')
    ->condition('sid', $sids)
    ->execute();
  while ($data = $result->fetchAssoc()) {
    if ($data['data'] > 0) {
      $payments++;
      $payment_amount += (float) $data['data'];
    }
    $submissions++;
  }

  $payment_average = $payments ? number_format($payment_amount / $payments, 2) : 0;

  $rows[0] = array(t('No payment'), ($submissions - $payments));
  $rows[1] = array(t('Payment received'), $payments);
  $rows[2] = array(t('Average amount'), theme('pay_money', array('value' => $payment_average, 'currency' => 'USD')));
  return $rows;
}

/**
 * Implements _webform_table_component().
 */
function _webform_table_pay($component, $value) {
  $total = $value['total'] ? number_format($payment_amount / $payments, 2) : 0;
  return theme('pay_money', array('value' => $payment_average, 'currency' => 'USD'));
}

/**
 * Implements _webform_csv_headers_component().
 */
function _webform_csv_headers_pay($component, $export_options) {
  $header = array();
  $header[0] = array_fill(0, 6, '');
  $header[1] = $header[0];
  $header[1][0] = $component['name'];
  $header[2] = array(
    t('First name'),
    t('Last name'),
    t('CC type'),
    t('CC number'),
    t('CC expiration'),
    t('Total'),
  );
  return $header;
}

/**
 * Implements _webform_csv_data_component().
 */
function _webform_csv_data_pay($component, $export_options, $value) {
  return array(
    $value['first_name'],
    $value['last_name'],
    $value['cc_type'],
    $value['cc_number'],
    $value['cc_exp_month'] . '/' . $value['cc_exp_year'],
    $value['total'],
  );
}
