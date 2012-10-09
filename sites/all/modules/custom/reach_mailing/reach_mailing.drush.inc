<?php

/**
 * @file
 * Drush integration for the reach_mailing module.
 */

/**
 * Implements hook_drush_command().
 */
function reach_mailing_drush_command() {
  $items['crm-mailing-process-queue'] = array(
    'description' => dt('Processes the CRM Mailing queue outside of cron.'),
  );
  return $items;
}

/**
 * Drush callback wrapper.
 */
function drush_reach_mailing_process_queue() {

  //Run the scheduler to queue up any scheduled mailings
  if (module_exists('scheduler')) {
    _scheduler_run_cron();
  }
  
  reach_mailing_queue_process();
}


