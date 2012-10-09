<?php
/**
 * @file
 * reach_search_api_blog.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function reach_search_api_blog_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'blog_section';
  $context->description = 'For blog listing and entries';
  $context->tag = 'Site sections';
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
        'blog' => 'blog',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'search_api_sorts-search-sorts' => array(
          'module' => 'search_api_sorts',
          'delta' => 'search-sorts',
          'region' => 'sidebar_second',
          'weight' => '-10',
        ),
        'facetapi-4gI5WdFCoSOkkViIbV8T6ILiEjiiwanR' => array(
          'module' => 'facetapi',
          'delta' => '4gI5WdFCoSOkkViIbV8T6ILiEjiiwanR',
          'region' => 'sidebar_second',
          'weight' => '-8',
        ),
        'facetapi-gOaXl1zBE0PvdZntThPsGwj6eiVvMxk4' => array(
          'module' => 'facetapi',
          'delta' => 'gOaXl1zBE0PvdZntThPsGwj6eiVvMxk4',
          'region' => 'sidebar_second',
          'weight' => '-7',
        ),
      ),
    ),
    'page_title' => array(
      'use_active_menu' => 1,
      'override_value' => 'Blog',
    ),
    'theme_html' => array(
      'class' => 'alternate-content-layout',
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('For blog listing and entries');
  t('Site sections');
  $export['blog_section'] = $context;

  return $export;
}
