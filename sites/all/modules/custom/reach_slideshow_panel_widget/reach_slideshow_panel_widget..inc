<?php
/**
 * @file
 * reach_slideshow_panel_widget..inc
 */

/**
 * Implements hook_default_fieldable_panels_panes_type().
 */
function reach_slideshow_panel_widget_default_fieldable_panels_panes_type() {
  $export = array();

  $fieldable_panels_panes_type = new stdClass();
  $fieldable_panels_panes_type->disabled = FALSE; /* Edit this to true to make a default fieldable_panels_panes_type disabled initially */
  $fieldable_panels_panes_type->name = 'reach_slideshow_widget';
  $fieldable_panels_panes_type->title = 'Slideshow';
  $fieldable_panels_panes_type->description = 'Slideshow widget that utilizes field collection and views';
  $export['reach_slideshow_widget'] = $fieldable_panels_panes_type;

  return $export;
}
