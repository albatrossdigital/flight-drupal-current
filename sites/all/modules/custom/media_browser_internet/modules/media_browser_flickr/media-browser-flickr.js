
(function ($) {


Drupal.behaviors.media_browser_flickr = {
  attach: function (context, settings) {
    
    /**
     * Update the settings array with callback functions for drawing thumbnails, pager
     */
    var browser_settings = settings.media.browser.media_browser_flickr;
    
    browser_settings.sections.community.search.thumbCallback = function(data) {
      var items = new Array();
      var this_data = (typeof data.photoset == 'object') ? data.photoset.photo : data.photos.photo;
      $.each(this_data, function(key, photo) {
        items.push(flickr_build_array(photo));
      }); // each
      return items;
    };
    
    
    if (typeof browser_settings.sections.container == 'object') {
      browser_settings.sections.container.categories.thumbCallback = function(data) {
        var items = new Array();
        $.each(data.photosets.photoset, function(key, photoset) {
          var item = flickr_build_array({
            farm: photoset.primary_photo_farm,
            server: photoset.primary_photo_server,
            id: photoset.primary_photo_id,
            secret: photoset.primary_photo_secret,
            title: photoset.title._content
          });
          $.extend(item, {
            value: photoset.id,
            hoverCallback: function() {
              return '<h3>'+ photoset.title._content +'</h3><div>'+ photoset.description._content +'</div><div>'+ photoset.date_create +'</div><div>'+ photoset.count_photos +' photos</div>';
            }
          });
          item.thumb = '<div style="width:100px;height:100px;background-color: #ccc;"></div>';
          items.push(item);
        }); // each
        return items;
      };
      
      browser_settings.sections.container.items.thumbCallback = browser_settings.sections.community.search.thumbCallback;
      browser_settings.sections.container.search.thumbCallback = browser_settings.sections.community.search.thumbCallback;
      browser_settings.sections.container.form = browser_settings.sections.community.form;
    } //if
    
    
    
    flickr_build_array = function(photo) {
      return {
        thumb: '<img src="http://farm' + photo.farm + '.static.flickr.com/' + photo.server + '/' + photo.id + '_' + photo.secret + '_' + 's.jpg">',
        //value: 'http://farm' + photo.farm + '.static.flickr.com/' + photo.server + '/' + photo.id + '_' + photo.secret + '_b.jpg',
        value: {
          farm: photo.farm, 
          server: photo.server, 
          id: photo.id, 
          secret: photo.secret
        },
        caption: 'caption',
        //href: 'http://www.flickr.com/photos/' + photo.owner + '/' + photo.id + '/',
        title: photo.title,
        hoverCallback: function() {
          return '<h3>'+ photo.title +'</h3><img src="http://farm' + photo.farm + '.static.flickr.com/' + photo.server + '/' + photo.id + '_' + photo.secret + '_' + 'm.jpg">';
        }
      };
    }
    
    browser_settings.pagerCallback = function(page, limit) {
      return {
        page: page,
        per_page: limit
      };
    };
    
    
    /**
     * Add the mediaBrowserInternet element
     */
    var browser = new mediaBrowserInternet(browser_settings);
    browser.buildForm();
    $('#media-browser-tabset').bind('tabsshow', function (event, ui) {
      if (ui.tab.hash === '#media-tab-media_browser_flickr') {
        // Grab the parameters from the Drupal.settings object
        /*var params = {};
        for (var parameter in Drupal.settings.media.browser.library) {
          params[parameter] = Drupal.settings.media.browser.library[parameter];
        }
        library.start($(ui.panel), params);
        $('#scrollbox').bind('scroll', library, library.scrollUpdater);*/
        browser.start();
        
        /**
         * Fake form submit handler
         */
        $('#flickr-submit', browser.selector).click(function(){
          $('#flickr-files').val(browser.selectedMediaFiles);
        });
      }
    });
  }
};

}(jQuery));
