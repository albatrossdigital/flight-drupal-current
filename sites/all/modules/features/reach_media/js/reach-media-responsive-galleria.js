/**
 * Custom JS crm_mailing
 */

/* New D7 Wrapper --> */(function ($) {

Drupal.behaviors.reach_media_galleria_responsive = {
  attach: function(context, settings) { //new attach function
    
    /*$.each(settings.viewsSlideshowGalleria, function(key, value) {
      $('#' + key, context).once(function() {
        $(this).watch('width', function(item){
          var item_settings = settings.viewsSlideshowGalleria[$(this).attr('id')];
          var new_height = $(this).width() * (item_settings.height / item_settings.width);
          $(this).find('.galleria-container:not(.fullscreen)').height(new_height);
        }, 100, 'slideshow_galleria_' + key + '_watcher');
      });
      
      
    });*/
    
  }//attach
};//behaviors

/* New D7 Wrapper --> */ })(jQuery);
