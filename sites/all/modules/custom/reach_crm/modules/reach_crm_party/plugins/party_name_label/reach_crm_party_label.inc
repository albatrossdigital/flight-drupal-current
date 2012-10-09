<?php

/**
 * @file
 *
 * Sample plugin to output just the party id as a label.
 * This is just a proof of concept / example.
 */

/**
 * Plugins are described by creating a $plugin array which will be used
 * by the system that includes this file.
 *
 * @todo: document our plugin settings somewhere!
 *  - 'title': The admin name of the plugin.
 *  - 'description': Description for the admin UI.
 *  - 'label callback': The callback to use for generating a label.
 *    The signature is $callback($party).
 *  - 'options form callback': The callback for the settings form.
 *    Eg, for a FieldAPI label plugin this would let you choose which field(s)
 *    to take the label text from.
 */
$plugin = array(
  'title' => t("Reach CRM Label"),
  'description' => t('Form a label from the party id.'),
  'label callback' => 'reach_crm_party_label',
  //'options form callback' => 'reach_crm_party_label_form',
);

/**
 * Generate the label for a party.
 */
function reach_crm_party_label($party) {
dpm($party);
  $name = $party->field_first_name['und'][0]['value'] . ' ' . $party->field_last_name['und'][0]['value'];
  $email = $party->field_email['und'][0]['email'];
  dpm('|'.$name.'|');
  $name = ($name != ' ') ? $name : ($email ? $email : t('Unknown'));
  dpm($name);
  return $name;
}

