/**
 * Custom JS crm_mailing
 */

/* New D7 Wrapper --> */(function ($) {

Drupal.behaviors.crm_mailing_send_form = {
  attach: function(context, settings) { //new attach function
    
    $('#crm-mailing-overview-unsent-form .form-submit', context).click(function(){
      if ($('#edit-action input:checked', context).val() == 'send') {
        if (!confirm(Drupal.t('Are you sure you are ready to send this mailing?'))) {
          return false;
        }
      }
    });
    
    $('#edit-action input', context).click(function() {
      action_select_click();
    });
    action_select_click();
    
    function action_select_click() {
      $('#edit-test-email-fieldset, #edit-scheduler-settings', context).hide();
      var val = $('#edit-action input:checked', context).val();
      var $submit = $('#crm-mailing-overview-unsent-form .form-submit', context);
      switch (val) {
        case 'save':
          $submit.val(Drupal.t('Save Changes'));
          break;
          
        case 'test':
          $('#edit-test-email-fieldset', context).slideDown();
          $submit.val(Drupal.t('Send Test'));
          break;
          
        case 'schedule':
          $('#edit-scheduler-settings', context).slideDown();
          $submit.val(Drupal.t('Schedule sending'));
          break;
          
        case 'send':
          $submit.val(Drupal.t('Send Mailing'));
          break;
          
      }
    } //function
    
  }//attach
};//behaviors

/* New D7 Wrapper --> */ })(jQuery);
