<?php

/**
 * @file
 * Example tpl file for theming a single action-specific theme
 *
 * Available variables:
 * - $status: The variable to theme (while only show if you tick status)
 * 
 * Helper variables:
 * - $action: The Action object this status is derived from
 */
?>

<div class="action-status">
  <?php print '<strong>Action Sample Data:</strong> ' . $action_sample_data = ($action_sample_data) ? 'Switch On' : 'Switch Off' ?>
</div>