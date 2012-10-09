
(function ($) {

Drupal.behaviors.reach_webform_cookie = {
  attach: function(context, settings) { 
    
    var cookie_data = $.parseJSON($.cookie('reach_crm_cookie_data'));
    if (cookie_data) {
      $('.webform-client-form').each(function(){
        $form = $(this);
        $.each(cookie_data, function(index, value){
          $field = $('form input[name*=' + index.replace('field_', '') + ']');
          $($field, $form).val(value.replace(/\+/gi, ' '));
          $field.parents('form.infieldlabels').find('label').hide();
        });
      });
    }
    
  }//attach
};//behaviors

})(jQuery);

