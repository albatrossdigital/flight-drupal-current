
(function ($) {


Drupal.behaviors.media_browser_facebook = {
  attach: function (context, settings) {
    var browser_settings = settings.media.browser.media_browser_facebook;
    
    if (typeof browser_settings.sections.stream == 'object') {
      browser_settings.sections.stream.search.thumbCallback = function(data) {
        var items = new Array();
        $.each(data.data, function(key, photo) {
          items.push(facebook_build_array(photo));
        }); // each
        return items;
      };
    }
    
    if (typeof browser_settings.sections.albums == 'object') {
      browser_settings.sections.albums.categories.thumbCallback = function(data) {
        var items = new Array();
        $.each(data.data, function(key, gallery) {
          items.push({
            thumb: '<div class="media-thumbnail-item fb-gallery-thumbnail-'+ gallery.cover_photo +'"></div>',
            value: gallery.id,
            caption: 'caption',
            title: gallery.name,
            //href: 'http://www.facebook.com/photos/' + photo.owner + '/' + photo.id + '/',
            hoverCallback: function() {
              return '<h3>'+ gallery.name +'</h3><div>'+ gallery.created_time +'</div><div>'+ gallery.count +' photos</div>';
            }
          });
          
          $.ajax({
            url: browser_settings.sections.albums.categories.itemUrl + gallery.cover_photo,
            type: 'GET',
            dataType: 'json',
            data: browser_settings.params,
            success: function(data) {
              $('.fb-gallery-thumbnail-' + data.id).css('background-image', 'url(' + data.images[2].source + ')');
            }
          });
    
        }); // each
        return items;
      };
      
      browser_settings.sections.albums.items.thumbCallback = browser_settings.sections.stream.search.thumbCallback;
      
    } //if 
    
    
    
    
    facebook_build_array = function(photo) {
      var title = (photo.name) ? photo.name : '';
      return {
        thumb: '<div class="media-thumbnail-item" style="background-image: url('+ photo.picture +')"></div>',
        value: photo.source,
        caption: 'caption',
        title: title,
        //href: 'http://www.facebook.com/photos/' + photo.owner + '/' + photo.id + '/',
        hoverCallback: function() {
          return '<h3>'+ title +'</h3><img src="'+ photo.images[1].source +'">';
        }
      };
    }
    
    browser_settings.pagerCallback = function(page, limit) {
      return {
        page: page,
        per_page: limit
      };
    };
    
    
    
    var browser = new mediaBrowserInternet(browser_settings);
    browser.buildForm();
    $('#media-browser-tabset').bind('tabsshow', function (event, ui) {
      if (ui.tab.hash === '#media-tab-media_browser_facebook') {
        browser.start();
        
        
        /**
        * Fake form submit handler
        */
        $('.fake-ok', browser.selector).click(function(){
          var $form = $('#remote-stream-wrapper-media-browser-form');
          $('#edit-url', $form).val(browser.selectedMediaFiles[0]);
          $form.trigger('submit');
        });
      }
    });
  }
};

}(jQuery));
