<?php

/**
 * Settings form callback
 */
function reach_social_admin_settings($form, &$form_state) {
  $form['reach_social_types'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Node types'),
    '#options' => node_type_get_names(),
    '#default_value' => array_values(variable_get('reach_social_types', array('story' => 'story', 'blog' => 'blog'))),
  );
  
  $form['reach_social_fb_message'] = array(
    '#type' => 'textfield',
    '#title' => t('Default Facebook message'),
    '#default_value' => variable_get('reach_social_fb_message', ''),
    '#description' => t('The this text will be posted to as the link description. You can use !url, !title and !user as replacement text.'),
    '#maxlength' => 420,
  );
  
  $form['reach_social_twitter_message'] = array(
    '#type' => 'textfield',
    '#title' => t('Default Twitter Tweet'),
    '#maxlength' => 140,
    '#default_value' => variable_get('reach_social_twitter_message', 'New post: !title !url'),
    '#description' => t('Enter the message your would like to tweet. You can use !url, !title and !user as replacement text.'),
  );

  $form['reach_social_post_message'] = array(
    '#type' => 'textfield',
    '#title' => t('Default !social message', array(!social => l('Social Post', 'social-post'))),
    '#maxlength' => 140,
    '#default_value' => variable_get('reach_social_post_message', ''),
    '#description' => t('Enter the message your would like to appear on the !social page.', array('!social' => l('Social Post', 'social-post'))),
  );
  
  $form['reach_social_post_url'] = array(
    '#type' => 'textfield',
    '#title' => t('!social URL', array('!social' => l('Social Post', 'social-post'))),
    '#default_value' => variable_get('reach_social_post_url', url('', array('absolute' => TRUE))),
    '#description' => t('Enter the message your would like to appear on the !social page.', array('!social' => l('Social Post', 'social-post'))),
  );

  return system_settings_form($form);
}
