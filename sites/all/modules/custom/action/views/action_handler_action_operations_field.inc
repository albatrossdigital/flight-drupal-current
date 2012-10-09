<?php

/**
 * This field handler aggregates operations that can be done on a action
 * under a single field providing a more flexible way to present them in a view
 */
class action_handler_action_operations_field extends views_handler_field {
  function construct() {
    parent::construct();

    $this->additional_fields['action_id'] = 'action_id';
  }

  function query() {
    $this->ensure_my_table();
    $this->add_additional_fields();
  }

  function render($values) {

    $links = menu_contextual_links('action', 'admin/content/actions/action', array($this->get_value($values, 'action_id')));
    
    if (!empty($links)) {
      return theme('links', array('links' => $links, 'attributes' => array('class' => array('links', 'inline', 'operations'))));
    }
  }
}
