/**
 * Custom JS crm_mailing
 */

/* New D7 Wrapper --> */(function ($) {


Drupal.behaviors.crm_mailing_analytics_page = {
  attach: function(context, settings) { //new attach function
    
    $('body', context).once(function(){
      
      // Save active state when analytics sections are clicked
      $('a.use-ajax').click(function(){
        $('a.use-ajax').removeClass('active');
        $(this).addClass('active');
      });
      
    }); // body.once


      $('.email-list a[rel^="reach_mailing_analytics_tooltip"]', context).each(function(){
        var rel = $(this).attr('rel').split(':');
        var url = settings.reach_mailing_analytics.tooltip_callback + rel[1];
        $(this).qtip(
	      {
		      content: {
			      // Set the text to an image HTML string with the correct src URL to the loading image you want to use
			      text: 'Loading...',
			      ajax: {
				      url: url,
				      success: function(data, status) {
				        this.set('content.text', data.data);
			        }
			      }
		      },
		      position: {
			      at: 'bottom center', // Position the tooltip above the link
			      my: 'top center',
			      viewport: $(window), // Keep the tooltip on-screen at all times
			      effect: false // Disable positioning animation
		      },
		      show: {

			      solo: true // Only show one tooltip at a time
		      },
		      hide: 'unfocus',
		      style: {
			      classes: 'ui-tooltip-wiki ui-tooltip-light ui-tooltip-shadow'
		      }
	      })
      });


    
  }//attach
};//behaviors

/* New D7 Wrapper --> */ })(jQuery);
