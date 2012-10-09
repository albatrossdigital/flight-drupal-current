<?php

/**
 * @file
 * Contains a Views field handler to take care of displaying edit links
 * as fields
 */


class action_handler_edit_link_field extends action_handler_link_field {
  function construct() {
    parent::construct();
    $this->additional_fields['type'] = 'type';
  }


  function render($values) {
    $type = $values->{$this->aliases['type']};
    
    //Creating a dummy action to check access against
    $dummy_action = (object) array('type' => $type);
    if (!action_access('edit', $dummy_action)) {
      return;
    }
    
    $text = !empty($this->options['text']) ? $this->options['text'] : t('edit');
    $action_id = $values->{$this->aliases['action_id']};
    
    return l($text, 'admin/content/actions/action/' . $action_id . '/edit');
  }
}
