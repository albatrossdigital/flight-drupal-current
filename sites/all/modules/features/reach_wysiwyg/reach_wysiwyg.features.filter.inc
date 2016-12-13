<?php
/**
 * @file
 * reach_wysiwyg.features.filter.inc
 */

/**
 * Implements hook_filter_default_formats().
 */
function reach_wysiwyg_filter_default_formats() {
  $formats = array();

  // Exported format: Rich Text.
  $formats['rich_text'] = array(
    'format' => 'rich_text',
    'name' => 'Rich Text',
    'cache' => '1',
    'status' => '1',
    'weight' => '0',
    'filters' => array(
      'filter_html' => array(
        'weight' => '-49',
        'status' => '1',
        'settings' => array(
          'allowed_html' => '<a> <em> <strong> <cite> <blockquote> <code> <ul> <ol> <li> <dl> <dt> <dd> <p> <br> <u> <h2> <h3> <h4> <table> <thead> <tbody> <tr> <td> <object> <iframe>',
          'filter_html_help' => 1,
          'filter_html_nofollow' => 0,
        ),
      ),
      'filter_url' => array(
        'weight' => '-45',
        'status' => '1',
        'settings' => array(
          'filter_url_length' => '72',
        ),
      ),
      'media_filter' => array(
        'weight' => '-44',
        'status' => '1',
        'settings' => array(),
      ),
      'filter_autop' => array(
        'weight' => '-43',
        'status' => '1',
        'settings' => array(),
      ),
    ),
  );

  return $formats;
}
