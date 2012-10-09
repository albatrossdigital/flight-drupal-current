<?php
/**
 * Expose themes as context reactions.
 */
class context_reaction_page_title extends context_reaction {
  /**
   * Allow admins to provide additional body classes.
   */
  function options_form($context) {
    $values = $this->fetch_from_context($context);
    $form = array(
      'use_active_menu' => array(
        '#title' => t('Use active menu item as page title'),
        '#type' => 'checkbox',
        '#default_value' => $values['use_active_menu'] ? $values['use_active_menu'] : 0
      ),
      'override_value' => array(
        '#title' => t('Override value'),
        '#type' => 'textfield',
        '#default_value' => $values['override_value'] ? $values['override_value'] : FALSE,
        '#description' => t('Enter a value to use if active menu not available')
      ),
    );
    return $form;
  }

  /**
   * Switch the page title.
   */
  function execute(&$vars) {
    foreach ($this->get_contexts() as $k => $v) {
      // use active menu?
      $use_active_menu = $v->reactions[$this->plugin]['use_active_menu'];
      // have override value?
      $override_value = $v->reactions[$this->plugin]['override_value'];
      // set flag to negative
      $changed = FALSE;
      // using active menu
      if($use_active_menu) {
        $trail = menu_get_active_trail();
        //we're on a child
        if(isset($trail[1])) {
          if($trail[1]['menu_name'] == 'main_menu' || $trail[1]['menu_name'] == 'main-menu') {
            $vars = $trail[1]['link_title'];
            $changed = TRUE;
          }
        }
      }
      //if we haven't already changed it, and there is an override value
      if(!empty($override_value) && !$changed) {
        $vars = $override_value;
      }
    }
  }
}
