/*
 *
 * Copyright (c) 2010 Jeff Lyon, Albatross Digital
 * Dual licensed under the MIT and GPL licenses.
 * Uses the same license as jQuery, see:
 * http://docs.jquery.com/License
 *
 * @version 0.1
 *//**
 * Custom JS for iranwatchlist theme
 */
 
function recordOutboundLink(link, category, action) {
  if (typeof _gat == 'object') {
    if (typeof _gat._getTrackerByName == 'function') {
      _gat._getTrackerByName()._trackEvent(category, action);
    }
  }
}

/* New D7 Wrapper --> */(function ($) {


Drupal.behaviors.reach_social_blocks_reach_share = {
  attach: function(context, settings) { //new attach function
      
    $('a.share-link').unbind();
    $('a.share-link').bind('click', function(){
      recordOutboundLink($(this), 'Social Share', $(this).attr('href'));
      window.open($(this).attr('href'), $(this).parent().attr('class'), $(this).attr('rel') + ',location=0,menubar=0,scrollbars=0,status=0,toolbar=0,resizable=0');
      return false;
    });

  }//attach
};//behaviors

/* New D7 Wrapper --> */ })(jQuery);
