
(function ($) {


Drupal.behaviors.media_browser_youtube = {
  attach: function (context, settings) {
    var browser_settings = settings.media.browser.media_browser_youtube;
    
    browser_settings.sections.community.search.thumbCallback = function(data) {
      var items = new Array();
      $.each(data.feed.entry, function(key, entry) {
        items.push(youtube_build_array(entry));
      }); // each
      return items;
    };
    
    if (typeof browser_settings.sections.uploads == 'object') {
      browser_settings.sections.uploads.search.thumbCallback = browser_settings.sections.community.search.thumbCallback;
    }
    if (typeof browser_settings.sections.favorites == 'object') {
      browser_settings.sections.favorites.search.thumbCallback = browser_settings.sections.community.search.thumbCallback;
    }
    
    //browser_settings.sections.container.items.thumbCallback = browser_settings.sections.community.search.thumbCallback;
    
    youtube_build_array = function(entry) {
      //console.log(entry);
      return {
        thumb: '<div class="media-thumbnail-item" style="background-image: url('+ entry.media$group.media$thumbnail[0].url +')"></div>',
        value: 'http://www.youtube.com/watch?v=' + entry.media$group.yt$videoid.$t,
        //href: 'http://www.youtube.com/photos/' + photo.owner + '/' + photo.id + '/',
        title: entry.title.$t,
        hoverCallback: function() {
          var duration = entry.media$group.yt$duration.seconds;
          duration = (duration < 60) ? duration + ' seconds' : parseInt(duration / 60) + ' minutes';
          return '<h3>'+ entry.media$group.media$title.$t +'</h3><div>'+ duration +' long</div><div>Uploaded: '+ entry.published.$t + '</div><div>' + entry.yt$statistics.viewCount +' views</div>';
        },
        /*eventsCallback: {
          render: function(event, api) {
            console.log(entry.media$group.yt$videoid.$t);
            new YT.Player(entry.media$group.yt$videoid.$t, {
              playerVars: {
                autoplay: 1,
                enablejsapi: 1,
                origin: document.location.host
              },
              origin: document.location.host,
              height: 180,
              width: 275,
              videoId: entry.media$group.yt$videoid.$t,
              events: {
                'onReady': function(e) {
                  // Store the player in the API
                  api.player = e.target;
                },
              }
            });
          },
          hide: function(event, api){
            // Pause the video when tooltip is hidden
            if(api.player && api.player.stopVideo) {
              api.player.stopVideo();
            }
          }
        } // end eventsCallback */
      }
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
      if (ui.tab.hash === '#media-tab-media_browser_youtube') {
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
        $('.fake-ok', browser.selector).click(function(){
          var $form = $('#media-internet-add');
          $('#edit-embed-code', $form).val(browser.selectedMediaFiles[0]);
          $form.trigger('submit');
        });
      }
    });
  }
};

}(jQuery));
