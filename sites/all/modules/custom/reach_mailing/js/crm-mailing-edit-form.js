/**
 * Custom JS crm_mailing
 */


/* New D7 Wrapper --> */(function ($) {

/* console.log(CKEDITOR.instances['edit-body-und-0-value']);
CKEDITOR.on("instanceReady", function(){           alert('r');         
  this.document.on("keyup", function(){
      alert('a');
  });
});



CKEDITOR.on( 'dialogDefinition', function( ev )
{
alert('a');
});
*/

Drupal.behaviors.crm_mailing_edit_form = {
  attach: function(context, settings) { //new attach function

    
    /**
     * Auto-generate plain text logic
     */
    var $checkbox = $('#edit-field-mailing-auto-text-version-und');
    var text_version_was_manual = !$checkbox.is(':checked');
    text_version_checkbox_toggle($checkbox);
    $checkbox.click(function() {
      text_version_checkbox_toggle($(this));
    });

    $(document, context).keypress(function(e){
      console.log(e);
    });

    
    $('form#mailing-node-form input.form-submit').click(function(){
      if ($checkbox.is(':checked')) {
        $('#edit-field-body-plain-und-0-value').val($('#'+Drupal.wysiwyg.instances['edit-body-und-0-value'].field).val());
      }
    });
    
    //$('#'+Drupal.wysiwyg.instances['edit-body-und-0-value'].field).change(function(){alert('a');});
    
    
    // Deals with the checkbox check/uncheck logic
    function text_version_checkbox_toggle($checkbox) {
      if ($checkbox.is(':checked')) {
        $('#edit-field-body-plain-und-0-value').attr('disabled', 1).addClass('textarea-disabled');
        if (text_version_was_manual) {
          if (confirm(Drupal.t('This will replace any of the plain text you are written. Are you sure you want to continue?'))) {
            update_text_version();
          } else {
            $checkbox.attr('checked', false);
          }
        } else {
          update_text_version();
          $('#edit-field-body-plain').hide();
        }
      } else {
        update_text_version();
        $('#edit-field-body-plain-und-0-value').attr('disabled', 0).removeClass('textarea-disabled');
        $('#edit-field-body-plain').slideDown();
        text_version_was_manual = true;
      }
    }
    

    // Function updates the text version from the html (looks for the htmlToText library)
    // Only works for CKEDITOR currently TODO:
    function update_text_version() {
      if (typeof CKEDITOR.instances['edit-body-und-0-value'] == 'object') {
        var html = CKEDITOR.instances['edit-body-und-0-value'].getData();
        
        if (typeof window.htmlToText == 'function') {
          var text = htmlToText(html, false);
        } else {
          var text = $(html).text();
        }
        
        $('#edit-field-body-plain-und-0-value').val(text);
      }
    }



    
  }//attach
};//behaviors

/* New D7 Wrapper --> */ })(jQuery);
