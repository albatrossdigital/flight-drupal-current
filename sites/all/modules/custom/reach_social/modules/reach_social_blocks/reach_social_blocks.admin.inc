<?php

/**
 * Variable management strongarm form.
 */
function reach_social_blocks_admin_form($form_state) {
  
  // Add the main share links config form data
  $form = array();
  
  $form['block_deltas'] = array(
    '#type' => 'fieldset',
    '#title' => t('Number of blocks'),
  );
  
  $blocks = reach_social_blocks_data();
  $form['block_deltas'] = array(
    '#type' => 'fieldset',
    '#title' => t('Number of blocks'),
  );
  
  dpm($blocks);
  foreach($blocks as $key => $block) {
    
    $field = 'reach_social_blocks_' . $key . '_deltas';
    $form['block_deltas'][$field] = array(
      '#type' => 'textfield',
      '#title' => t(ucfirst($key)),
      '#default_value' => variable_get($field, 1),
      '#size' => 2,
    );
  }
  
  
  
  $form['share'] = array(
    '#type' => 'fieldset',
    '#title' => t('Display share links on nodes'),
  );
  
  $form['share'] += reach_social_blocks_block_configure('share_nodes');
  
  $node_types = array();
  foreach (_node_types_build()->types as $name=>$data) {
    $node_types[$name] = $data->name;
  }
  $form['share']['reach_social_blocks_share_nodes_types'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Display sharing links nodes of type'),
    '#default_value' => variable_get('reach_social_blocks_share_nodes_types', array('blog')),
    '#options' => $node_types,
  );

  $node_info = entity_get_info('node');
  $options = array();
  foreach($node_info['view modes'] as $key => $value) {
    $options[$key] = $value['label'];
  }
  
  $form['share']['reach_social_blocks_share_nodes_modes'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Display sharing links on'),
    '#default_value' => variable_get('reach_social_blocks_share_nodes_modes', array('teaser')),
    '#options' => $options,
  );
  
  $form['fbcomments'] = array(
    '#type' => 'fieldset',
    '#title' => t('Facebook Comments'),
  );
  
  $form['fbcomments']['reach_social_blocks_fbcomments_types'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Display Facebook comments on'),
    '#default_value' => variable_get('reach_social_blocks_fbcomments_types', array()),
    '#options' => $node_types,
  );
  
  $form['fbcomments']['reach_social_blocks_fbcomments_count'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Display the comment count on'),
    '#default_value' => variable_get('reach_social_blocks_fbcomments_count', array('teaser')),
    '#options' => array(
      'page' => t('Node view'),
      'teaser' => t('Node teaser'),
    ),
    '#description' => t('The count will be added to the links'),
  );
  
  
  $form = system_settings_form($form);
  return $form;
}
