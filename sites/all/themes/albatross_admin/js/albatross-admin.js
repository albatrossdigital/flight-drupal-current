/*
 *
 * Copyright (c) 2010 Jeff Lyon, Albatross Digital
 * Dual licensed under the MIT and GPL licenses.
 * Uses the same license as jQuery, see:
 * http://docs.jquery.com/License
 *
 * @version 0.1
 *//**
 * Custom JS for STARTERKIT theme
 */

/* New D7 Wrapper --> */(function ($) {


Drupal.behaviors.albatross_admin = {
  attach: function(context, settings) { //new attach function
       
    // Hide operations fieldsets by default
    $('fieldset#edit-select a.fieldset-title', context).once(function(){
      $(this).trigger('click');
    });
    $('input.vbo-table-select-all, input.vbo-select', context).click(function(){
      console.log($('input.vbo-table-select-all:checked, input.vbo-select:checked', context).eq(0).val());
      if ($('input.vbo-table-select-all:checked, input.vbo-select:checked').eq(0).val()) {
        if ($('fieldset#edit-select.collapsed', context).length) {
          console.log('collap');
          $('fieldset#edit-select a.fieldset-title', context).trigger('click');
        }
      } else {
        if (!$('fieldset#edit-select.collapsed', context).length) {
          $('fieldset#edit-select a.fieldset-title', context).trigger('click');
        }
      }
    });
    
    /*
     * Draw the tooltip (via qtips)
     */
    /*function albatross_admin_tooltip($this, $description, at, my, context) {
      if ($description.length){
        $($this, context).once(function(){
          $this.qtip({
            content: $description.html(),
            style: {
             classes: 'ui-tooltip-tipsy ui-tooltip-shadow'
            },
            position: {
              at: at, // Position the tooltip above the link
              my: my,
              viewport: $(window), // Keep the tooltip on-screen at all times
              effect: false // Disable positioning animation
            },
          });
          $description.hide();
        });
      } // if
    } // function
    */
  }//attach
};//behaviors




/* New D7 Wrapper --> */ })(jQuery);



