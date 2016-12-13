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



Drupal.behaviors.elegant_backend_qtip = {
  attach: function(context, settings) { //new attach function
     
    // Rich text toggle
    $('.wysiwyg-toggle-wrapper').each(function(){
      $(this).append('asdf');
    });
    //$('.wysiwyg-toggle-wrapper').append('<div class="wysiwyg-toggle-tabs"><a class="toggle-tab-wysiwyg" href="#">Rich Text Editor</a><a class="toggle-tab-html" href="#">HTML Source</a></div>');
    
    
    
    // Deal with the basic form elements
    $('.form-wrapper .form-type-textfield').find('input, select').each(function(){
      albatross_admin_tooltip($(this), $(this).parents('.form-item').find('.description'), 'right center', 'left center', 'focus', 'blur', context);
    });
    
    // Deal with selects (incl. WYSIWYG input formats)
    $('.form-wrapper .filter-wrapper').each(function(){
      albatross_admin_tooltip($(this), $(this).find('.filter-guidelines'), 'top left', 'bottom right', 'click mouseenter', 'mouseleave', context);
    });
   
    
    /*
     * Draw the tooltip (via qtips)
     */
    function albatross_admin_tooltip($this, $description, at, my, show, hide, context) {
      if ($description.length){
        $($this, context).once(function(){
          $this.qtip({
            show: show,
            hide: hide,
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
    
  }//attach
};//behaviors




/* New D7 Wrapper --> */ })(jQuery);



