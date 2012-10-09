<?php
/**
 * @file
 * reach_crm.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function reach_crm_views_default_views() {
  $export = array();

  $view = new view;
  $view->name = 'reach_actions';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'action';
  $view->human_name = 'actions';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'actions';
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['access']['perm'] = 'administer nodes';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '50';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'action_id' => 'action_id',
    'name' => 'name',
    'field_mailing_from' => 'field_mailing_from',
    'views_bulk_operations' => 'views_bulk_operations',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'action_id' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'name' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_mailing_from' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'views_bulk_operations' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  $handler->display->display_options['style_options']['override'] = 1;
  $handler->display->display_options['style_options']['sticky'] = 0;
  $handler->display->display_options['style_options']['empty_table'] = 0;
  /* Field: Bulk operations: Action */
  $handler->display->display_options['fields']['views_bulk_operations']['id'] = 'views_bulk_operations';
  $handler->display->display_options['fields']['views_bulk_operations']['table'] = 'action';
  $handler->display->display_options['fields']['views_bulk_operations']['field'] = 'views_bulk_operations';
  $handler->display->display_options['fields']['views_bulk_operations']['label'] = '';
  $handler->display->display_options['fields']['views_bulk_operations']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['alter']['external'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['views_bulk_operations']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['views_bulk_operations']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['alter']['html'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['views_bulk_operations']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['views_bulk_operations']['hide_empty'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['empty_zero'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo']['entity_load_capacity'] = '10';
  $handler->display->display_options['fields']['views_bulk_operations']['vbo']['operations'] = array(
    'action::crm_mailing_add_recipients_action' => array(
      'selected' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
    ),
    'action::views_bulk_operations_delete_item' => array(
      'selected' => 1,
      'use_queue' => 0,
      'skip_confirmation' => 1,
      'override_label' => 0,
      'label' => '',
    ),
    'action::system_message_action' => array(
      'selected' => 0,
      'use_queue' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
    ),
    'action::views_bulk_operations_script_action' => array(
      'selected' => 0,
      'use_queue' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
    ),
    'action::views_bulk_operations_modify_action' => array(
      'selected' => 0,
      'use_queue' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
      'settings' => array(
        'show_all_tokens' => 1,
        'display_values' => array(
          '_all_' => '_all_',
        ),
      ),
    ),
    'action::views_bulk_operations_argument_selector_action' => array(
      'selected' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
      'settings' => array(
        'url' => '',
      ),
    ),
    'action::system_goto_action' => array(
      'selected' => 0,
      'use_queue' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
    ),
    'action::crm_mailing_remove_recipients_action' => array(
      'selected' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
    ),
    'action::system_send_email_action' => array(
      'selected' => 0,
      'use_queue' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
    ),
    'action::crm_mailing_send_action' => array(
      'selected' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
    ),
  );
  $handler->display->display_options['fields']['views_bulk_operations']['vbo']['enable_select_all_pages'] = 1;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo']['display_type'] = '1';
  $handler->display->display_options['fields']['views_bulk_operations']['vbo']['display_result'] = 1;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo']['merge_single_action'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo']['force_single'] = 0;
  /* Field: Action: Action ID */
  $handler->display->display_options['fields']['action_id']['id'] = 'action_id';
  $handler->display->display_options['fields']['action_id']['table'] = 'action';
  $handler->display->display_options['fields']['action_id']['field'] = 'action_id';
  /* Field: Action: Name */
  $handler->display->display_options['fields']['name']['id'] = 'name';
  $handler->display->display_options['fields']['name']['table'] = 'action';
  $handler->display->display_options['fields']['name']['field'] = 'name';
  $handler->display->display_options['fields']['name']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['name']['alter']['make_link'] = 1;
  $handler->display->display_options['fields']['name']['alter']['path'] = 'action/[action_id]';
  $handler->display->display_options['fields']['name']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['name']['alter']['external'] = 0;
  $handler->display->display_options['fields']['name']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['name']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['name']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['name']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['name']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['name']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['name']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['name']['alter']['html'] = 0;
  $handler->display->display_options['fields']['name']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['name']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['name']['hide_empty'] = 0;
  $handler->display->display_options['fields']['name']['empty_zero'] = 0;
  $handler->display->display_options['fields']['name']['hide_alter_empty'] = 1;
  /* Field: Action: Form */
  $handler->display->display_options['fields']['field_action_form']['id'] = 'field_action_form';
  $handler->display->display_options['fields']['field_action_form']['table'] = 'field_data_field_action_form';
  $handler->display->display_options['fields']['field_action_form']['field'] = 'field_action_form';
  $handler->display->display_options['fields']['field_action_form']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_action_form']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_action_form']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_action_form']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['field_action_form']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_action_form']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_action_form']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_action_form']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['field_action_form']['settings'] = array(
    'link' => 1,
  );
  $handler->display->display_options['fields']['field_action_form']['field_api_classes'] = 0;

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['path'] = 'admin/content/actions';
  $translatables['reach_actions'] = array(
    t('Master'),
    t('actions'),
    t('more'),
    t('Apply'),
    t('Reset'),
    t('Sort by'),
    t('Asc'),
    t('Desc'),
    t('Items per page'),
    t('- All -'),
    t('Offset'),
    t('Action ID'),
    t('.'),
    t(','),
    t('Name'),
    t('action/[action_id]'),
    t('Form'),
    t('Page'),
  );
  $export['reach_actions'] = $view;

  $view = new view;
  $view->name = 'reach_actions_by_party';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'action';
  $view->human_name = 'Reach actions by party';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Recent Actions';
  $handler->display->display_options['access']['type'] = 'none';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '25';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'entity';
  $handler->display->display_options['row_options']['view_mode'] = 'default';
  /* Field: Action: Action ID */
  $handler->display->display_options['fields']['action_id']['id'] = 'action_id';
  $handler->display->display_options['fields']['action_id']['table'] = 'action';
  $handler->display->display_options['fields']['action_id']['field'] = 'action_id';
  /* Field: Action: Form */
  $handler->display->display_options['fields']['field_action_form']['id'] = 'field_action_form';
  $handler->display->display_options['fields']['field_action_form']['table'] = 'field_data_field_action_form';
  $handler->display->display_options['fields']['field_action_form']['field'] = 'field_action_form';
  $handler->display->display_options['fields']['field_action_form']['label'] = '';
  $handler->display->display_options['fields']['field_action_form']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_action_form']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_action_form']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_action_form']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_action_form']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_action_form']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_action_form']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_action_form']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_action_form']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_action_form']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['field_action_form']['settings'] = array(
    'link' => 1,
  );
  $handler->display->display_options['fields']['field_action_form']['field_api_classes'] = 0;
  /* Field: Broken/missing handler */
  $handler->display->display_options['fields']['field_action_party']['id'] = 'field_action_party';
  $handler->display->display_options['fields']['field_action_party']['table'] = 'field_data_field_action_party';
  $handler->display->display_options['fields']['field_action_party']['field'] = 'field_action_party';
  $handler->display->display_options['fields']['field_action_party']['label'] = '';
  $handler->display->display_options['fields']['field_action_party']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_action_party']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_action_party']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_action_party']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_action_party']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_action_party']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_action_party']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_action_party']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_action_party']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_action_party']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_action_party']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_action_party']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_action_party']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_action_party']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_action_party']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_action_party']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_action_party']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_action_party']['hide_alter_empty'] = 1;
  /* Field: Action: Type */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'action';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  $handler->display->display_options['fields']['type']['label'] = '';
  $handler->display->display_options['fields']['type']['exclude'] = TRUE;
  $handler->display->display_options['fields']['type']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['type']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['type']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['type']['alter']['external'] = 0;
  $handler->display->display_options['fields']['type']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['type']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['type']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['type']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['type']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['type']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['type']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['type']['alter']['html'] = 0;
  $handler->display->display_options['fields']['type']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['type']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['type']['hide_empty'] = 0;
  $handler->display->display_options['fields']['type']['empty_zero'] = 0;
  $handler->display->display_options['fields']['type']['hide_alter_empty'] = 1;

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block');
  $translatables['reach_actions_by_party'] = array(
    t('Master'),
    t('Recent Actions'),
    t('more'),
    t('Apply'),
    t('Reset'),
    t('Sort by'),
    t('Asc'),
    t('Desc'),
    t('Action ID'),
    t('.'),
    t(','),
    t('Block'),
  );
  $export['reach_actions_by_party'] = $view;

  $view = new view;
  $view->name = 'reach_actions_by_user';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'action';
  $view->human_name = 'Reach actions by user';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Reach actions by user';
  $handler->display->display_options['access']['type'] = 'none';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '25';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'entity';
  /* Field: Action: Action ID */
  $handler->display->display_options['fields']['action_id']['id'] = 'action_id';
  $handler->display->display_options['fields']['action_id']['table'] = 'action';
  $handler->display->display_options['fields']['action_id']['field'] = 'action_id';

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block');
  $translatables['reach_actions_by_user'] = array(
    t('Master'),
    t('Reach actions by user'),
    t('more'),
    t('Apply'),
    t('Reset'),
    t('Sort by'),
    t('Asc'),
    t('Desc'),
    t('Action ID'),
    t('.'),
    t(','),
    t('Block'),
  );
  $export['reach_actions_by_user'] = $view;

  return $export;
}
