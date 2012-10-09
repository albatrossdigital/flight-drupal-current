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


// The WYSIWYG gets attached after the Drupal.behaviors calls, so it has to go in a .ready() call
$(document).ready(function() {
  $('.wysiwyg-toggle-wrapper:not(.wysiwyg-processed)').hide().addClass('wysiwyg-processed').parent().append('<div class="wysiwyg-toggle-tabs"><a rel="toggle-tab-enable" class="active" href="#">Rich Text Editor</a><a rel="toggle-tab-disable" href="#">HTML Source</a></div>')
    .parents('.form-item').eq(0).addClass('elegant-backend-wysiwyg');
  $('.wysiwyg-toggle-tabs a').click(function(){
    var action = $(this).attr('rel').replace('toggle-tab-', '');
    $link = $(this).parent().parent().find('.wysiwyg-toggle-wrapper.wysiwyg-processed a');
    // Only take action if we can
    if ($link.text().toLowerCase().indexOf(action) != -1) {
      
      // Make the inputs the same height
      if (action == 'disable') {
        var $parent = $(this).parents('.form-textarea-wrapper');
        $parent.find('.form-textarea').height($parent.find('.cke_wrapper').height());
      }
      
      $link.trigger('click');
      $(this).parent().find('a').removeClass('active');
      $(this).addClass('active');
      
    }
    return false;
  });
});

/* New D7 Wrapper --> */ })(jQuery);



