<?php
/**
 * @file
 * reach_mailing.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function reach_mailing_views_default_views() {
  $export = array();

  $view = new view;
  $view->name = 'mailings';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Mailings';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Mailings';
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['access']['perm'] = 'create mailing content';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '50';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'title' => 'title',
    'field_mailing_status' => 'field_mailing_status',
    'publish_on' => 'publish_on',
    'created' => 'created',
  );
  $handler->display->display_options['style_options']['default'] = 'field_mailing_status';
  $handler->display->display_options['style_options']['info'] = array(
    'title' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_mailing_status' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'publish_on' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'created' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  $handler->display->display_options['style_options']['override'] = 1;
  $handler->display->display_options['style_options']['sticky'] = 0;
  $handler->display->display_options['style_options']['empty_table'] = 0;
  /* Header: Global: Link */
  $handler->display->display_options['header']['link']['id'] = 'link';
  $handler->display->display_options['header']['link']['table'] = 'views';
  $handler->display->display_options['header']['link']['field'] = 'link';
  $handler->display->display_options['header']['link']['empty'] = FALSE;
  /* No results behavior: Global: Text area */
  $handler->display->display_options['empty']['area']['id'] = 'area';
  $handler->display->display_options['empty']['area']['table'] = 'views';
  $handler->display->display_options['empty']['area']['field'] = 'area';
  $handler->display->display_options['empty']['area']['empty'] = FALSE;
  $handler->display->display_options['empty']['area']['content'] = 'You do not have any mailings.';
  $handler->display->display_options['empty']['area']['format'] = 'wysiwyg_editor';
  $handler->display->display_options['empty']['area']['tokenize'] = 0;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = 'Name';
  $handler->display->display_options['fields']['title']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['title']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['title']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['title']['alter']['external'] = 0;
  $handler->display->display_options['fields']['title']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['title']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = 0;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = 0;
  $handler->display->display_options['fields']['title']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['title']['alter']['html'] = 0;
  $handler->display->display_options['fields']['title']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['title']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['title']['hide_empty'] = 0;
  $handler->display->display_options['fields']['title']['empty_zero'] = 0;
  $handler->display->display_options['fields']['title']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['title']['link_to_node'] = 1;
  /* Field: Content: Status */
  $handler->display->display_options['fields']['field_mailing_status']['id'] = 'field_mailing_status';
  $handler->display->display_options['fields']['field_mailing_status']['table'] = 'field_data_field_mailing_status';
  $handler->display->display_options['fields']['field_mailing_status']['field'] = 'field_mailing_status';
  $handler->display->display_options['fields']['field_mailing_status']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_mailing_status']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_mailing_status']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_mailing_status']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_mailing_status']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_mailing_status']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_mailing_status']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_mailing_status']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_mailing_status']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_mailing_status']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_mailing_status']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_mailing_status']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_mailing_status']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['field_mailing_status']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_mailing_status']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_mailing_status']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_mailing_status']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['field_mailing_status']['field_api_classes'] = 0;
  /* Field: Scheduler: Publish on */
  $handler->display->display_options['fields']['publish_on']['id'] = 'publish_on';
  $handler->display->display_options['fields']['publish_on']['table'] = 'scheduler';
  $handler->display->display_options['fields']['publish_on']['field'] = 'publish_on';
  $handler->display->display_options['fields']['publish_on']['label'] = 'Scheduled';
  $handler->display->display_options['fields']['publish_on']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['publish_on']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['publish_on']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['publish_on']['alter']['external'] = 0;
  $handler->display->display_options['fields']['publish_on']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['publish_on']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['publish_on']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['publish_on']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['publish_on']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['publish_on']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['publish_on']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['publish_on']['alter']['html'] = 0;
  $handler->display->display_options['fields']['publish_on']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['publish_on']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['publish_on']['hide_empty'] = 0;
  $handler->display->display_options['fields']['publish_on']['empty_zero'] = 0;
  $handler->display->display_options['fields']['publish_on']['hide_alter_empty'] = 1;
  /* Field: Content: Post date */
  $handler->display->display_options['fields']['created']['id'] = 'created';
  $handler->display->display_options['fields']['created']['table'] = 'node';
  $handler->display->display_options['fields']['created']['field'] = 'created';
  $handler->display->display_options['fields']['created']['label'] = 'Sent';
  $handler->display->display_options['fields']['created']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['created']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['created']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['created']['alter']['external'] = 0;
  $handler->display->display_options['fields']['created']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['created']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['created']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['created']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['created']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['created']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['created']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['created']['alter']['html'] = 0;
  $handler->display->display_options['fields']['created']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['created']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['created']['hide_empty'] = 0;
  $handler->display->display_options['fields']['created']['empty_zero'] = 0;
  $handler->display->display_options['fields']['created']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['created']['date_format'] = 'short';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'mailing' => 'mailing',
  );

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['path'] = 'admin/content/mailing';
  $handler->display->display_options['menu']['type'] = 'tab';
  $handler->display->display_options['menu']['title'] = 'Mailings';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['context'] = 0;
  $export['mailings'] = $view;

  return $export;
}
