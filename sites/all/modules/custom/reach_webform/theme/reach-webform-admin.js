
(function ($) {


Drupal.behaviors.reach_webform_admin = {
  attach: function(context, settings) { 
    
    $('#edit-reach-add-type', context).change(function(){
      console.log($(this).val());
      var $option = $(this).find('option[value=' + $(this).val() + ']');
      // Update the field label
      $('#edit-reach-add-name', context).val($option.text().substr($option.text().indexOf(': ') + 1));
      // Check the required box?
      if ($(this).find('option').index($option) <= 3) {
        $('#edit-reach-add-mandatory', context).attr('checked', 'checked');
      } else {
        $('#edit-reach-add-mandatory', context).attr('checked', 0);
      }
    });
      
  }//attach
};//behaviors

})(jQuery);

