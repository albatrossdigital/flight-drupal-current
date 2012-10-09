<?php
/**
 * @file
 * reach_page.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function reach_page_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'page_content_type';
  $context->description = 'For pages/subpages';
  $context->tag = 'Content types';
  $context->conditions = array(
    'node' => array(
      'values' => array(
        'page' => 'page',
      ),
      'options' => array(
        'node_form' => '0',
      ),
    ),
  );
  $context->reactions = array();
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Content types');
  t('For pages/subpages');
  $export['page_content_type'] = $context;

  return $export;
}
