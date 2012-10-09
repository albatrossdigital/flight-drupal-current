/*
 *
 * Copyright (c) 2010 Jeff Lyon, Albatross Digital
 * Dual licensed under the MIT and GPL licenses.
 * Uses the same license as jQuery, see:
 * http://docs.jquery.com/License
 *
 * @version 0.1
 *//**
 * Custom JS for alpinesource theme
 */

/* New D7 Wrapper --> */(function ($) {


Drupal.behaviors.albatross_theme = {
  attach: function(context, settings) { //new attach function
    
    // Open new links in new window
    // TODO
    
    // Add loading icon to overlay
    $('<div class="overlay-modal-background-image">').appendTo('.overlay-modal-background');
      
  }//attach
};//behaviors

/* New D7 Wrapper --> */ })(jQuery);

