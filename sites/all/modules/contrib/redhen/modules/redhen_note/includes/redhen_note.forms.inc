<?php

/**
 * @file
 * Form definition and handling for redhen notes.
 */

/**
 * Return a form array for adding/editing a connection.
 *
 * @param $form
 * @param $form_state
 * @param RedhenContact|RedhenOrg $entity
 * @param $entity_type
 * @param stdClass $redhen_note
 *
 * @return array
 */
function redhen_note_form($form, &$form_state, $redhen_note) {
  $form_state['redhen_note'] = $redhen_note;

  field_attach_form('redhen_note', $redhen_note, $form, $form_state);

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Save Note'),
    '#weight' => 999,
  );
  return $form;
}

/**
 * Validation handler for redhen_note_form().
 */
function redhen_note_form_validate($form, &$form_state) {
  $redhen_note = $form_state['redhen_note'];
  field_attach_form_validate('redhen_note', $redhen_note, $form, $form_state);
}

/**
 * Submit handler for redhen_note_form().
 */
function redhen_note_form_submit($form, &$form_state) {
  $redhen_note = $form_state['redhen_note'];

  list($entity_id, ,) = entity_extract_ids($redhen_note->entity_type, $redhen_note->entity);
  $redhen_note->entity_id = $entity_id;

  field_attach_submit('redhen_note', $redhen_note, $form, $form_state);

  if ($redhen_note->save()) {
    $entity = $redhen_note->entity;
    $entity_type = $redhen_note->entity_type;
    drupal_set_message(t('The note has been saved.'));
    $uri = entity_uri($entity_type, $entity);
    $form_state['redirect'] = $uri['path'] . "/notes";
  }
  else {
    drupal_set_message(t('There has been an issue saving this note. Please contact the site administrator.'));
    watchdog('redhen_note', 'Issue saving note %note_id.', array('%title' => $redhen_note->note_id), WATCHDOG_NOTICE);
  }
}

/**
 * Form callback: confirmation form for deleting an note.
 *
 * @param $note
 *   The ntoe object to be deleted.
 *
 * @see confirm_form()
 */
function redhen_note_delete_form($form, &$form_state, $note) {
  $form_state['redhen_note'] = $note;

  $form['#submit'][] = 'redhen_note_delete_form_submit';

  $title = $note->label();

  $form = confirm_form($form,
    t('Are you sure you want to delete %title?', array('%title' => $title)),
    entity_uri('redhen_note', $note),
    '<p>' . t('Deleting this note cannot be undone.') . '</p>',
    t('Delete'),
    t('Cancel'),
    'confirm'
  );

  return $form;
}

/**
 * Submit callback for redhen_note_delete_form().
 */
function redhen_note_delete_form_submit($form, &$form_state) {
  $note = $form_state['redhen_note'];

  $title = $note->label();

  // No status returned from delete(), assume it worked
  $note->delete();
  drupal_set_message(t('%title has been deleted.', array('%title' => $title)));
  watchdog('redhen_note', 'Deleted note %title.', array('%title' => $title), WATCHDOG_NOTICE);
}
