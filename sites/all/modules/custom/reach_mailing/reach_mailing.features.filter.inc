<?php
/**
 * @file
 * reach_mailing.features.filter.inc
 */

/**
 * Implements hook_filter_default_formats().
 */
function reach_mailing_filter_default_formats() {
  $formats = array();

  // Exported format: Mailing HTML Message
  $formats['mailing_html_message'] = array(
    'format' => 'mailing_html_message',
    'name' => 'Mailing HTML Message',
    'cache' => '1',
    'status' => '1',
    'weight' => '0',
    'filters' => array(
      'filter_url' => array(
        'weight' => '0',
        'status' => '1',
        'settings' => array(
          'filter_url_length' => '72',
        ),
      ),
      'reach_mailing_html_url' => array(
        'weight' => '0',
        'status' => '1',
        'settings' => array(),
      ),
      'media_filter' => array(
        'weight' => '2',
        'status' => '1',
        'settings' => array(),
      ),
      'filter_htmlcorrector' => array(
        'weight' => '10',
        'status' => '1',
        'settings' => array(),
      ),
    ),
  );

  // Exported format: Mailing Text Message
  $formats['mailing_text_message'] = array(
    'format' => 'mailing_text_message',
    'name' => 'Mailing Text Message',
    'cache' => '1',
    'status' => '1',
    'weight' => '0',
    'filters' => array(
      'reach_mailing_text_url' => array(
        'weight' => '0',
        'status' => '1',
        'settings' => array(),
      ),
    ),
  );

  return $formats;
}
