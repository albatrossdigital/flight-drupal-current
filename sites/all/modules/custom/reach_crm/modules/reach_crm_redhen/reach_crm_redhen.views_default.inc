<?php
/**
 * @file
 * reach_crm_redhen.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function reach_crm_redhen_views_default_views() {
  $export = array();

  $view = new view;
  $view->name = 'reach_contacts_redhen';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'redhen_contact';
  $view->human_name = 'Reach Contacts Redhen';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Contacts';
  $handler->display->display_options['access']['type'] = 'none';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '50';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'contact_id' => 'contact_id',
    'views_bulk_operations' => 'views_bulk_operations',
    'redhen_contact_email' => 'redhen_contact_email',
    'first_name' => 'first_name',
    'last_name' => 'last_name',
    'updated' => 'updated',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'contact_id' => array(
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
    'redhen_contact_email' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'first_name' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'last_name' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'updated' => array(
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
  /* Field: Contact: Contact ID */
  $handler->display->display_options['fields']['contact_id']['id'] = 'contact_id';
  $handler->display->display_options['fields']['contact_id']['table'] = 'redhen_contact';
  $handler->display->display_options['fields']['contact_id']['field'] = 'contact_id';
  $handler->display->display_options['fields']['contact_id']['exclude'] = TRUE;
  $handler->display->display_options['fields']['contact_id']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['contact_id']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['contact_id']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['contact_id']['alter']['external'] = 0;
  $handler->display->display_options['fields']['contact_id']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['contact_id']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['contact_id']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['contact_id']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['contact_id']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['contact_id']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['contact_id']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['contact_id']['alter']['html'] = 0;
  $handler->display->display_options['fields']['contact_id']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['contact_id']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['contact_id']['hide_empty'] = 0;
  $handler->display->display_options['fields']['contact_id']['empty_zero'] = 0;
  $handler->display->display_options['fields']['contact_id']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['contact_id']['format_plural'] = 0;
  /* Field: Bulk operations: Contact */
  $handler->display->display_options['fields']['views_bulk_operations']['id'] = 'views_bulk_operations';
  $handler->display->display_options['fields']['views_bulk_operations']['table'] = 'redhen_contact';
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
  $handler->display->display_options['fields']['views_bulk_operations']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['views_bulk_operations']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['views_bulk_operations']['hide_empty'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['empty_zero'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo']['entity_load_capacity'] = '10';
  $handler->display->display_options['fields']['views_bulk_operations']['vbo']['operations'] = array(
    'action::views_bulk_operations_delete_item' => array(
      'selected' => 1,
      'use_queue' => 0,
      'skip_confirmation' => 0,
      'override_label' => 1,
      'label' => 'Delete contact',
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
      'selected' => 1,
      'use_queue' => 0,
      'skip_confirmation' => 1,
      'override_label' => 1,
      'label' => 'Add to Group',
      'settings' => array(
        'show_all_tokens' => 1,
        'display_values' => array(
          'supporter::field_group' => 'supporter::field_group',
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
    'action::system_send_email_action' => array(
      'selected' => 0,
      'use_queue' => 0,
      'skip_confirmation' => 0,
      'override_label' => 0,
      'label' => '',
    ),
    'action::redhen_fields_email_action' => array(
      'selected' => 0,
      'use_queue' => 0,
      'skip_confirmation' => 1,
      'override_label' => 0,
      'label' => '',
    ),
  );
  $handler->display->display_options['fields']['views_bulk_operations']['vbo']['enable_select_all_pages'] = 1;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo']['display_type'] = '0';
  $handler->display->display_options['fields']['views_bulk_operations']['vbo']['display_result'] = 1;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo']['merge_single_action'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo']['force_single'] = 0;
  /* Field: Contact: First Name */
  $handler->display->display_options['fields']['first_name']['id'] = 'first_name';
  $handler->display->display_options['fields']['first_name']['table'] = 'redhen_contact';
  $handler->display->display_options['fields']['first_name']['field'] = 'first_name';
  $handler->display->display_options['fields']['first_name']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['first_name']['alter']['make_link'] = 1;
  $handler->display->display_options['fields']['first_name']['alter']['path'] = 'redhen/contact/[contact_id]';
  $handler->display->display_options['fields']['first_name']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['first_name']['alter']['external'] = 0;
  $handler->display->display_options['fields']['first_name']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['first_name']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['first_name']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['first_name']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['first_name']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['first_name']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['first_name']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['first_name']['alter']['html'] = 0;
  $handler->display->display_options['fields']['first_name']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['first_name']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['first_name']['hide_empty'] = 0;
  $handler->display->display_options['fields']['first_name']['empty_zero'] = 0;
  $handler->display->display_options['fields']['first_name']['hide_alter_empty'] = 1;
  /* Field: Contact: Last Name */
  $handler->display->display_options['fields']['last_name']['id'] = 'last_name';
  $handler->display->display_options['fields']['last_name']['table'] = 'redhen_contact';
  $handler->display->display_options['fields']['last_name']['field'] = 'last_name';
  $handler->display->display_options['fields']['last_name']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['last_name']['alter']['make_link'] = 1;
  $handler->display->display_options['fields']['last_name']['alter']['path'] = 'redhen/contact/[contact_id]';
  $handler->display->display_options['fields']['last_name']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['last_name']['alter']['external'] = 0;
  $handler->display->display_options['fields']['last_name']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['last_name']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['last_name']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['last_name']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['last_name']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['last_name']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['last_name']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['last_name']['alter']['html'] = 0;
  $handler->display->display_options['fields']['last_name']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['last_name']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['last_name']['hide_empty'] = 0;
  $handler->display->display_options['fields']['last_name']['empty_zero'] = 0;
  $handler->display->display_options['fields']['last_name']['hide_alter_empty'] = 1;
  /* Field: Contact: Email */
  $handler->display->display_options['fields']['redhen_contact_email']['id'] = 'redhen_contact_email';
  $handler->display->display_options['fields']['redhen_contact_email']['table'] = 'field_data_redhen_contact_email';
  $handler->display->display_options['fields']['redhen_contact_email']['field'] = 'redhen_contact_email';
  $handler->display->display_options['fields']['redhen_contact_email']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['redhen_contact_email']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['redhen_contact_email']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['redhen_contact_email']['alter']['external'] = 0;
  $handler->display->display_options['fields']['redhen_contact_email']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['redhen_contact_email']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['redhen_contact_email']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['redhen_contact_email']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['redhen_contact_email']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['redhen_contact_email']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['redhen_contact_email']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['redhen_contact_email']['alter']['html'] = 0;
  $handler->display->display_options['fields']['redhen_contact_email']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['redhen_contact_email']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['redhen_contact_email']['hide_empty'] = 0;
  $handler->display->display_options['fields']['redhen_contact_email']['empty_zero'] = 0;
  $handler->display->display_options['fields']['redhen_contact_email']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['redhen_contact_email']['type'] = 'redhen_email_primary';
  $handler->display->display_options['fields']['redhen_contact_email']['group_rows'] = 1;
  $handler->display->display_options['fields']['redhen_contact_email']['delta_offset'] = '0';
  $handler->display->display_options['fields']['redhen_contact_email']['delta_reversed'] = 0;
  $handler->display->display_options['fields']['redhen_contact_email']['delta_first_last'] = 0;
  $handler->display->display_options['fields']['redhen_contact_email']['field_api_classes'] = 0;
  /* Field: Contact: Type */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'redhen_contact';
  $handler->display->display_options['fields']['type']['field'] = 'type';
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
  $handler->display->display_options['fields']['type']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['type']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['type']['hide_empty'] = 0;
  $handler->display->display_options['fields']['type']['empty_zero'] = 0;
  $handler->display->display_options['fields']['type']['hide_alter_empty'] = 1;
  /* Field: Contact: Updated */
  $handler->display->display_options['fields']['updated']['id'] = 'updated';
  $handler->display->display_options['fields']['updated']['table'] = 'redhen_contact';
  $handler->display->display_options['fields']['updated']['field'] = 'updated';
  $handler->display->display_options['fields']['updated']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['updated']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['updated']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['updated']['alter']['external'] = 0;
  $handler->display->display_options['fields']['updated']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['updated']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['updated']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['updated']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['updated']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['updated']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['updated']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['updated']['alter']['html'] = 0;
  $handler->display->display_options['fields']['updated']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['updated']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['updated']['hide_empty'] = 0;
  $handler->display->display_options['fields']['updated']['empty_zero'] = 0;
  $handler->display->display_options['fields']['updated']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['updated']['date_format'] = 'short';
  /* Filter criterion: Contact: First Name */
  $handler->display->display_options['filters']['first_name']['id'] = 'first_name';
  $handler->display->display_options['filters']['first_name']['table'] = 'redhen_contact';
  $handler->display->display_options['filters']['first_name']['field'] = 'first_name';
  $handler->display->display_options['filters']['first_name']['operator'] = 'contains';
  $handler->display->display_options['filters']['first_name']['group'] = 1;
  $handler->display->display_options['filters']['first_name']['exposed'] = TRUE;
  $handler->display->display_options['filters']['first_name']['expose']['operator_id'] = 'first_name_op';
  $handler->display->display_options['filters']['first_name']['expose']['label'] = 'First Name';
  $handler->display->display_options['filters']['first_name']['expose']['operator'] = 'first_name_op';
  $handler->display->display_options['filters']['first_name']['expose']['identifier'] = 'first_name';
  $handler->display->display_options['filters']['first_name']['expose']['required'] = 0;
  $handler->display->display_options['filters']['first_name']['expose']['multiple'] = FALSE;
  /* Filter criterion: Contact: Last Name */
  $handler->display->display_options['filters']['last_name']['id'] = 'last_name';
  $handler->display->display_options['filters']['last_name']['table'] = 'redhen_contact';
  $handler->display->display_options['filters']['last_name']['field'] = 'last_name';
  $handler->display->display_options['filters']['last_name']['operator'] = 'contains';
  $handler->display->display_options['filters']['last_name']['group'] = 1;
  $handler->display->display_options['filters']['last_name']['exposed'] = TRUE;
  $handler->display->display_options['filters']['last_name']['expose']['operator_id'] = 'last_name_op';
  $handler->display->display_options['filters']['last_name']['expose']['label'] = 'Last Name';
  $handler->display->display_options['filters']['last_name']['expose']['operator'] = 'last_name_op';
  $handler->display->display_options['filters']['last_name']['expose']['identifier'] = 'last_name';
  $handler->display->display_options['filters']['last_name']['expose']['required'] = 0;
  $handler->display->display_options['filters']['last_name']['expose']['multiple'] = FALSE;
  /* Filter criterion: Contact: Email (redhen_contact_email) */
  $handler->display->display_options['filters']['redhen_contact_email_value']['id'] = 'redhen_contact_email_value';
  $handler->display->display_options['filters']['redhen_contact_email_value']['table'] = 'field_data_redhen_contact_email';
  $handler->display->display_options['filters']['redhen_contact_email_value']['field'] = 'redhen_contact_email_value';
  $handler->display->display_options['filters']['redhen_contact_email_value']['operator'] = 'contains';
  $handler->display->display_options['filters']['redhen_contact_email_value']['group'] = 1;
  $handler->display->display_options['filters']['redhen_contact_email_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['redhen_contact_email_value']['expose']['operator_id'] = 'redhen_contact_email_value_op';
  $handler->display->display_options['filters']['redhen_contact_email_value']['expose']['label'] = 'Email';
  $handler->display->display_options['filters']['redhen_contact_email_value']['expose']['operator'] = 'redhen_contact_email_value_op';
  $handler->display->display_options['filters']['redhen_contact_email_value']['expose']['identifier'] = 'email';
  $handler->display->display_options['filters']['redhen_contact_email_value']['expose']['required'] = 0;
  $handler->display->display_options['filters']['redhen_contact_email_value']['expose']['multiple'] = FALSE;
  /* Filter criterion: Field: Groups (field_group) */
  $handler->display->display_options['filters']['field_group_tid']['id'] = 'field_group_tid';
  $handler->display->display_options['filters']['field_group_tid']['table'] = 'field_data_field_group';
  $handler->display->display_options['filters']['field_group_tid']['field'] = 'field_group_tid';
  $handler->display->display_options['filters']['field_group_tid']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_group_tid']['expose']['operator_id'] = 'field_group_tid_op';
  $handler->display->display_options['filters']['field_group_tid']['expose']['label'] = 'Groups';
  $handler->display->display_options['filters']['field_group_tid']['expose']['operator'] = 'field_group_tid_op';
  $handler->display->display_options['filters']['field_group_tid']['expose']['identifier'] = 'group';
  $handler->display->display_options['filters']['field_group_tid']['expose']['reduce'] = 0;
  $handler->display->display_options['filters']['field_group_tid']['reduce_duplicates'] = 0;
  $handler->display->display_options['filters']['field_group_tid']['type'] = 'select';
  $handler->display->display_options['filters']['field_group_tid']['vocabulary'] = 'groups';
  $handler->display->display_options['filters']['field_group_tid']['error_message'] = 1;

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['path'] = 'admin/contacts';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'Contacts';
  $handler->display->display_options['menu']['name'] = 'management';
  $translatables['reach_contacts_redhen'] = array(
    t('Master'),
    t('Contacts'),
    t('more'),
    t('Apply'),
    t('Reset'),
    t('Sort by'),
    t('Asc'),
    t('Desc'),
    t('Items per page'),
    t('- All -'),
    t('Offset'),
    t('Contact ID'),
    t('.'),
    t(','),
    t('First Name'),
    t('redhen/contact/[contact_id]'),
    t('Last Name'),
    t('Email'),
    t('Type'),
    t('Updated'),
    t('Groups'),
    t('Page'),
  );
  $export['reach_contacts_redhen'] = $view;

  return $export;
}
