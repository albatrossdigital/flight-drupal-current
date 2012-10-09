<?php
/**
 * @file
 * reach_contact.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function reach_contact_views_default_views() {
  $export = array();

  $view = new view;
  $view->name = 'party_organization_location_list';
  $view->description = 'Lists the organization location information';
  $view->tag = 'default';
  $view->base_table = 'party';
  $view->human_name = 'Party (Organization) location list';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Organization location list';
  $handler->display->display_options['access']['type'] = 'none';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'entity';
  $handler->display->display_options['row_options']['view_mode'] = 'address_and_location';
  /* Header: Global: Link */
  $handler->display->display_options['header']['link']['id'] = 'link';
  $handler->display->display_options['header']['link']['table'] = 'views';
  $handler->display->display_options['header']['link']['field'] = 'link';
  $handler->display->display_options['header']['link']['label'] = 'Add more locations';
  $handler->display->display_options['header']['link']['empty'] = FALSE;
  $handler->display->display_options['header']['link']['text'] = '+ Add new location';
  $handler->display->display_options['header']['link']['path'] = 'party/add/organisation';
  /* Field: Party: Party ID */
  $handler->display->display_options['fields']['pid']['id'] = 'pid';
  $handler->display->display_options['fields']['pid']['table'] = 'party';
  $handler->display->display_options['fields']['pid']['field'] = 'pid';
  /* Filter criterion: Party: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'party';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'organisation' => 'organisation',
  );
  /* Filter criterion: Party: Site Organization (field_site_organisation) */
  $handler->display->display_options['filters']['field_site_organisation_value']['id'] = 'field_site_organisation_value';
  $handler->display->display_options['filters']['field_site_organisation_value']['table'] = 'field_data_field_site_organisation';
  $handler->display->display_options['filters']['field_site_organisation_value']['field'] = 'field_site_organisation_value';
  $handler->display->display_options['filters']['field_site_organisation_value']['value'] = array(
    1 => '1',
  );

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block');
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '5';
  $export['party_organization_location_list'] = $view;

  return $export;
}
