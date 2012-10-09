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

/* New D7 Wrapper --> */(function ($) {

Drupal.behaviors.reach_fbconnect = {

  attach: function(context, settings) { //new attach function
    
    if (typeof(settings.reach_social.fbkey) !== 'string' && typeof(console) != 'undefined') {
      console.error('You need to add an oAuth Connector preset for Facebook');
    }
    
    $('<div>').attr('id', 'fb-root').prependTo('body');
    
    window.fbAsyncInit = function() {
      
      FB.init({
        appId      : settings.reach_social.fbkey,
        status     : true, 
        cookie     : true,
        xfbml      : true,
        oauth      : true,
      });

      /* 
       * Handle FB connect login status.
       * TODO: Always do this?
       */

      if (settings.reach_social.fbconnect_selector) {
        FB.getLoginStatus(function(response) {
          $(settings.reach_social.fbconnect_selector).each(function (i) {
            if (response.status === 'connected') {
              $(this).parents('.fbconnect-wrapper').eq(0).find('.fbconnect-tooltip').attr('title', Drupal.t('We are pulling your information from Facebook because you previously connected with this site.')).css('display', 'block').fadeIn('fast');
              FB.api('/me', function(info) {
                fbmap(info);
              });
            } else {
              $(this).parents('.fbconnect-wrapper').eq(0).find('a').css('display', 'block').fadeIn('fast');
            }
          });
        });
      }
      
      /*FB.Event.subscribe('edge.create',
        function(response) {
          alert('You liked the URL: ' + response);
        }
      );*/

    };
    (function(d){
      var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
      js = d.createElement('script'); js.id = id; js.async = true;
      js.src = "//connect.facebook.net/en_US/all.js";
      d.getElementsByTagName('head')[0].appendChild(js);
    }(document));
    
    /* 
     * Click handler for the Connect button.
     */
    if (settings.reach_social.fbconnect_selector) {
      $(settings.reach_social.fbconnect_selector).click(function() {

        FB.login(function(response) {
          if (response.authResponse) {
            FB.api('/me', function(info) {
              fbmap(info);
            });
          } else {

          }
        }, {scope:'email'});
      });
      return false;
    }
    
    /* 
     * Funtion maps the fb values to form items.
     */
    function fbmap(info) {
      if (settings.reach_social.fbmapping) {
        
        $(settings.reach_social.fbconnect_form_selector).each(function(){
          var $form = $(this);
          var infieldlabels = $form.hasClass('infieldlabels');
        
          $.each(settings.reach_social.fbmapping, function(key, value) {
            $field = $form.find('input[name*="[' + value + ']"]');

            if (info[key] && !$field.val()) {
              $field.val(info[key]).addClass('fbconnected');
              
              // Fix to hide an infieldlabel label
              if (infieldlabels) {
                $field.parent().find('label').hide();
              }
            }
 
          }); // each
          
        }); // each
      }
    } // function

  }//attach
};//behaviors

/* New D7 Wrapper --> */ })(jQuery);
