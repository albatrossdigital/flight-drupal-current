<?php
/**
 * @file
 * reach_blog.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function reach_blog_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'blog_content_type';
  $context->description = 'For blog entries';
  $context->tag = 'Content types';
  $context->conditions = array(
    'node' => array(
      'values' => array(
        'blog' => 'blog',
      ),
      'options' => array(
        'node_form' => '0',
      ),
    ),
    'path' => array(
      'values' => array(
        'campaign-trail*' => 'campaign-trail*',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'reach_social_blocks-likebox_0' => array(
          'module' => 'reach_social_blocks',
          'delta' => 'likebox_0',
          'region' => 'sidebar_second',
          'weight' => '-10',
        ),
        'reach_social_blocks-twitter_0' => array(
          'module' => 'reach_social_blocks',
          'delta' => 'twitter_0',
          'region' => 'sidebar_second',
          'weight' => '-9',
        ),
      ),
    ),
    'menu' => 'campaign-trail',
    'page_title' => array(
      'use_active_menu' => 1,
      'override_value' => 'The Campaign Trail',
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Content types');
  t('For blog entries');
  $export['blog_content_type'] = $context;

  return $export;
}
