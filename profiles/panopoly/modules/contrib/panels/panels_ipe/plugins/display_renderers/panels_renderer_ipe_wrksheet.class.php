<?php

/**
 * Renderer class for all In-Place Editor (IPE) behavior.
 */
class panels_renderer_ipe_wrksheet {
  // The IPE operates in normal render mode, not admin mode.
  var $admin = FALSE;


  function add_meta() {
    $meta = parent::add_meta($pane);
    dpm($meta);
    dpm('11asdf');
    return $meta;
  
  /*
    ctools_include('display-edit', 'panels');
    ctools_include('content');

    if (empty($this->display->cache_key)) {
      $this->cache = panels_edit_cache_get_default($this->display);
    }
    // @todo we may need an else to load the cache, but I am not sure we
    // actually need to load it if we already have our cache key, and doing
    // so is a waste of resources.

    ctools_include('cleanstring');
    $this->clean_key = ctools_cleanstring($this->display->cache_key);
    $button = array(
      '#type' => 'link',
      '#title' => t('Customize this page'),
      '#href' => $this->get_url('save_form'),
      '#id' => 'panels-ipe-customize-page',
      '#attributes' => array(
        'class' => array('panels-ipe-startedit', 'panels-ipe-pseudobutton'),
      ),
      '#ajax' => array(
        'progress' => 'throbber',
        'ipe_cache_key' => $this->clean_key,
      ),
      '#prefix' => '<div class="panels-ipe-pseudobutton-container">',
      '#suffix' => '</div>',
    );

    panels_ipe_toolbar_add_button($this->clean_key, 'panels-ipe-startedit', $button);

    // @todo this actually should be an IPE setting instead.
    if (user_access('change layouts in place editing')) {
      $button = array(
        '#type' => 'link',
        '#title' => t('Change layout'),
        '#href' => $this->get_url('change_layout'),
        '#attributes' => array(
          'class' => array('panels-ipe-change-layout', 'panels-ipe-pseudobutton', 'ctools-modal-layout'),
        ),
        '#ajax' => array(
          'progress' => 'throbber',
          'ipe_cache_key' => $this->clean_key,
        ),

      '#prefix' => '<div class="panels-ipe-pseudobutton-container">',
      '#suffix' => '</div>',
      );

      panels_ipe_toolbar_add_button($this->clean_key, 'panels-ipe-change-layout', $button);
    }

    ctools_include('ajax');
    ctools_include('modal');
    ctools_modal_add_js();

    ctools_add_css('panels_dnd', 'panels');
    ctools_add_css('panels_admin', 'panels');
    ctools_add_js('panels_ipe', 'panels_ipe');
    ctools_add_css('panels_ipe', 'panels_ipe');

    drupal_add_js(array('PanelsIPECacheKeys' => array($this->clean_key)), 'setting');

    drupal_add_library('system', 'ui.draggable');
    drupal_add_library('system', 'ui.droppable');
    drupal_add_library('system', 'ui.sortable');

    parent::add_meta();*/
  }

}
