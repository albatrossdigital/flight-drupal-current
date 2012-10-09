/**
 * Custom JS crm_mailing
 */

/* New D7 Wrapper --> */(function ($) {

Drupal.behaviors.crm_mailing_preview = {
  attach: function(context, settings) { //new attach function
    
    $('#mailing-preview').tabs().find('.ui-tabs-panel').css('min-height', '300px').css('max-height', '500px').css('overflow', 'scroll');

    
  }//attach
};//behaviors

/* New D7 Wrapper --> */ })(jQuery);
