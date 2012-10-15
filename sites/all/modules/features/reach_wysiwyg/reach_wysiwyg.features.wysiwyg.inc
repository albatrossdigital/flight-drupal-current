<?php
/**
 * @file
 * reach_wysiwyg.features.wysiwyg.inc
 */

/**
 * Implements hook_wysiwyg_default_profiles().
 */
function reach_wysiwyg_wysiwyg_default_profiles() {
  $profiles = array();

  // Exported profile: rich_text
  $profiles['rich_text'] = array(
    'format' => 'rich_text',
    'editor' => 'ckeditor',
    'settings' => array(
      'default' => 1,
      'user_choose' => 0,
      'show_toggle' => 1,
      'theme' => 'advanced',
      'language' => 'en',
      'buttons' => array(
        'default' => array(
          'Bold' => 1,
          'Italic' => 1,
          'Underline' => 1,
          'BulletedList' => 1,
          'NumberedList' => 1,
          'Outdent' => 1,
          'Indent' => 1,
          'Link' => 1,
          'Unlink' => 1,
          'Anchor' => 1,
          'Image' => 1,
          'PasteText' => 1,
          'Format' => 1,
          'Table' => 1,
        ),
        'drupal' => array(
          'media' => 1,
          'break' => 1,
        ),
      ),
      'toolbar_loc' => 'top',
      'toolbar_align' => 'left',
      'path_loc' => 'bottom',
      'resizing' => 1,
      'verify_html' => 1,
      'preformatted' => 0,
      'convert_fonts_to_spans' => 1,
      'remove_linebreaks' => 1,
      'apply_source_formatting' => 0,
      'paste_auto_cleanup_on_paste' => 1,
      'block_formats' => 'p,h2,h3,h4',
      'css_setting' => 'none',
      'css_path' => '',
      'css_classes' => '',
    ),
  );

  return $profiles;
}
