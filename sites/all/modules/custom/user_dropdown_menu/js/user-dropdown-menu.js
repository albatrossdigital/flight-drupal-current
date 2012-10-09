/*
 *
 * Copyright (c) 2010 Jeff Lyon, Albatross Digital
 * Dual licensed under the MIT and GPL licenses.
 * Uses the same license as jQuery, see:
 * http://docs.jquery.com/License
 *
 * @version 0.1
 */

/* New D7 Wrapper --> */(function ($) {


Drupal.behaviors.user_dropdown_menu = {
  attach: function(context, settings) { //new attach function
    
    $('#block-user_dropdown_menu-dropdown, #block-user-dropdown-menu-dropdown', context).once(function(){
      $(this).hover(function(){
        if ($(this).width() > $(this).find('.content').width()) {
          $(this).find('.content').css('width', $(this).width() + 10 + 'px').addClass('full-width');
        }
        $(this).addClass('open').find('.content').slideDown();
      }, function(){
        $(this).removeClass('open').find('.content').hide();
      });
    });
    
  }//attach
};//behaviors

/* New D7 Wrapper --> */ })(jQuery);

