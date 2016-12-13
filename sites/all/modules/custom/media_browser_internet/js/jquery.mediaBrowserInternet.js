
(function ($) {


/*Drupal.behaviors.mediaLibrary = {
  attach: function (context, settings) {
    var library = new mediaBrowserInternet(Drupal.settings.media.browser.library);
    $('#media-browser-tabset').bind('tabsshow', function (event, ui) {
      if (ui.tab.hash === '#media-tab-library') {
        // Grab the parameters from the Drupal.settings object
        var params = {};
        for (var parameter in Drupal.settings.media.browser.library) {
          params[parameter] = Drupal.settings.media.browser.library[parameter];
        }
        library.start($(ui.panel), params);
        $('#scrollbox').bind('scroll', library, library.scrollUpdater);
      }
    });
  }
};*/

mediaBrowserInternet = function (settings) {
  this.settings = mediaBrowserInternet.getDefaults();
  $.extend(this.settings, settings);

  this.done = false; // Keeps track of if the last request for media returned 0 results.

  this.cursor = 0; // keeps track of what the last requested media object was.
  //this.mediaFiles = []; // An array of loaded media files from the server.
  this.selectedMediaFiles = [];
  this.container = $(this.settings.container);
};

mediaBrowserInternet.getDefaults = function () {
  return {
    emtpyMessage: Drupal.t('There is nothing in your media library. Select the Upload tab above to add a file.'),
    limit: 15
  };
};

mediaBrowserInternet.prototype.start = function () {
  //this.renderElement = renderElement;
  //this.params = params;
  // Change the behavior dependent on multiselect
  if (this.settings.multiselect) {
    this.clickFunction = this.multiSelect;
  } else {
    this.clickFunction = this.singleSelect;
  }
  this.refresh(false);
};

mediaBrowserInternet.prototype.refresh = function (action) {
  this.clearMedia();
  if (action) {
    this.action = action;
  } else {
    this.setAction();
  }
  this.loadMedia();
};


/**
 * Builds the filter form
 */
mediaBrowserInternet.prototype.buildForm = function () {
  var that = this;
  var $form = $('<form id="media-internet-form" class="views-exposed-form">').prependTo(this.container);
  
  // Add section options
  $tabs = $('<div class="section-tabs">').appendTo($form);
  $.each(this.settings.sections, function(key, settings){
    $input = $('<a href="#'+ key +'" rel="'+ key +'">'+ settings.label +'</a>').click(function(){
      that.activeSection = key;
      that.refresh(false);
      $(this).parent().find('a').removeClass('selected');
      $(this).addClass('selected');
      return false;
    }).appendTo($tabs);
    
    //var $input = $('<input name="section" value="'+ key +'" type="radio" id="section-'+ key +'" class="edit-section" /> <label for="section-'+ key +'">'+ settings.label +'</label>').appendTo($form);
  });
  $activeSection = $tabs.find('a:first').addClass('selected') ? $tabs.find('a:first').addClass('selected') : this.mediaBrowserInternet.prototype.setAction;
  this.activeSection = $activeSection.attr('rel');
  that.setAction();
  
  // Drupal FAPI-lite for filters
  if (typeof this.settings.sections[this.activeSection] == 'object') {
    $.each(this.settings.sections[this.activeSection].form, function(key, settings){
      switch (settings['#type']) {
        case 'textfield':
          var $input = $('<input name="'+ key +'" type="text" class="form-text" id="edit-'+ key +'" />').appendTo($form);
          break;
        case 'select':
          var $input = $('<select name="'+ key +'" class="form-select" id="edit-'+ key +'" />').appendTo($form);
          $.each(settings['#options'], function(value, label){
            $('<option value="'+ value +'">'+ label +'</option>').appendTo($input);
          });
          break;
      }
      //$input.wrap('<div class="form-item">');
      //$item.prepend('<label>'+ settings['#title'] +'</label>')
      //  .wrap('<div class="views-exposed-widget">');
      if (settings['#default_value']) {
        $input.attr('value', settings['#default_value']);
      }
    });
  }
  
  this.settings.sections[this.activeSection]
  
  // Add submit button
  $('<input type="submit" value="Update" class="media-browser-form-submit" />').click(function(){
    that.refresh('search');
    return false;
  }).appendTo($form);
};

/**
 * Clear the media and reset the page counter
 */
mediaBrowserInternet.prototype.clearMedia = function () {
  $('.media-browser-internet-list, .breadcrumb', this.container).html('');
  this.cursor = 0;
  this.categoryId = undefined;
}

/**
 * Set the default action
 */
mediaBrowserInternet.prototype.setAction = function () { 
  if (typeof this.settings.sections[this.activeSection] != 'object') {
    this.action = 'search';
  }
  else if (typeof this.settings.sections[this.activeSection].categories == 'object') {
    this.action = 'categories';
  }
  else {
    this.action = 'search';
  }
  //if (typeof this.settings.sections[this.activeSection].categories == 'object') {
  //  
  //}
  return this.action;
}


/**
 * Appends more media onto the list
 */
mediaBrowserInternet.prototype.loadMedia = function () {
  var that = this;
  
  
  // Add connect code if necessary
  //'.media-browser-internet-list'
  if (typeof this.settings.sections[this.activeSection].content == 'string') {
    $('.scrollbox', this.container).html(this.settings.sections[this.activeSection].content);
    return;
  }

  
  
  $('.ajax-status', this.container).text(Drupal.t('Loading...')).show();
  
  
  
  var gotMedia = function (data, status) {
    that.data = data;
    $('.ajax-status', this.container).text('').hide();
    var items = that.settings.sections[that.activeSection][that.action].thumbCallback(data);
    // Remove the flag that prevents loading of more media
    that.loading = false;
    $.each(items, function(key, item) {
      
      if (typeof item.value == 'object') {
        item.value = $.param(item.value);
      }
      
      var $item = $('<li><div class="media-item" rel="'+ item.value +'"><div class="media-thumbnail">'+ item.thumb +'</div><div class="label-wrapper"><label class="media-filename">'+ item.title +'</label></div></div></li>')
        .click(function(event){
          if (that.action == 'categories') {
            that.clearMedia();
            that.action = 'items';
            $('<a href="#">'+ that.settings.sections[that.activeSection].label +'</a>').click(function(){
              that.refresh(false);
            }).appendTo('.breadcrumb', this.container);
            $('<span> &raquo; '+ item.title + '</span>').appendTo('.breadcrumb', this.container);
            that.categoryId = item.value;
            that.loadMedia();
          } else {
            that.clickFunction($(this));
          }
        })
        .appendTo('.media-browser-internet-list', this.container);
      //console.log(item.eventsCallback);
      if ($.isFunction(item.hoverCallback)) {
        $item.find('.media-item').qtip({
          content: item.hoverCallback,
          position: {
            at: 'top center',
            my: 'bottom center',
            viewport: $(window),
          },
          style: {
            classes: 'ui-tooltip-youtube'
          },
          show: {
            solo: true, // ...and hide all others when its shown
            event: item.thumbEvent,
            delay: 500,
            effect: function(offset) {
              $(this).fadeIn(300);
            }
          },
          events: item.eventsCallback
        });
      }
    
    });
    
    //Drupal.media.browser.resizeIframe();
  };
  
  
  var params = new Object();
  $form = $('#media-internet-form');
  var url = this.settings.sections[this.activeSection][this.action].url;
  switch (this.action) {
    case 'categories':
      break;
    case 'items':
      if (url.indexOf('[id]') != -1) {
        url = url.replace('[id]', this.categoryId);
        
      } else {
        url += this.categoryId;
      }
      break;
    case 'search':
      $.each(this.settings.sections[that.activeSection].form, function(key, settings){
        params[key] = $('#edit-' + key, that.container).val();
      });
      break;
  }
  this.cursor ++;

  $.extend(params, this.settings.params, this.settings.pagerCallback(this.cursor, this.limit));
  
  //$.extend(this.params, {start: this.cursor, limit: this.settings.limit});

  var errorCallback = function () {
    $('.media-browser-internet-list', this.container).html(Drupal.t('Error getting media.'));
    $('.ajax-status', this.container).hide();
    //alert(Drupal.t('Error getting media.'));
  };
  //console.log(url);
  $.ajax({
    url: url,
    type: 'GET',
    dataType: 'json',
    data: params,
    error: errorCallback,
    success: gotMedia
  });
  
  
  
};

mediaBrowserInternet.prototype.scrollUpdater = function (e){
  if (!e.data.loading) {
    var scrollbox = $('.scrollbox', this.container);
    var scrolltop = scrollbox.attr('scrollTop');
    var scrollheight = scrollbox.attr('scrollHeight');
    var windowheight = scrollbox.attr('clientHeight');
    var scrolloffset = 20;

    if(scrolltop >= (scrollheight - (windowheight + scrolloffset))) {
      // Set a flag so we don't make multiple concurrent AJAX calls
      e.data.loading = true;
      // Fetch new items
      e.data.loadMedia();
    }
  }
};

/**
 * Fetches the next media object and increments the cursor.
 */
mediaBrowserInternet.prototype.getNextMedia = function () {
  if (this.cursor >= this.mediaFiles.length) {
    return false;
  }
  var ret = this.mediaFiles[this.cursor];
  this.cursor += 1;
  return ret;
};

mediaBrowserInternet.prototype.render = function (renderElement) {

  if (this.mediaFiles.length < 1) {
    $('<div id="media-empty-message" class="media-empty-message"></div>').appendTo(renderElement)
      .html(this.emptyMessage);
    return;
  }
  else {
    var mediaList = $('#media-browser-library-list', renderElement);
    // If the list doesn't exist, bail.
    if (mediaList.length === 0) {
      throw('Cannot continue, list element is missing');
    }
  }

  while (this.cursor < this.mediaFiles.length) {
    var mediaFile = this.getNextMedia();

    var data = {};
    data.obj = this;
    data.file = mediaFile;

    var listItem = $('<li></li>').appendTo(mediaList)
      .attr('id', 'media-item-' + mediaFile.fid)
      .html(mediaFile.preview)
      .bind('click', data, this.clickFunction);
  }
};

mediaBrowserInternet.prototype.mediaSelected = function (media) {
  Drupal.media.browser.selectMedia(media);
};

mediaBrowserInternet.prototype.singleSelect = function ($this) {
  $('.media-item').removeClass('selected');
  $('.media-item', $this).addClass('selected');
  this.selectedMediaFiles = new Array($('.media-item', $this).attr('rel'));
  return false;
}

mediaBrowserInternet.prototype.multiSelect = function ($this) {
  $('.media-item', $this).toggleClass('selected');
  
  var file = $('.media-item', $this).attr('rel');
  var index = $.inArray(file, this.selectedMediaFiles);
  if (index == -1) {
    this.selectedMediaFiles.push(file);
  } else {
    this.selectedMediaFiles.splice(index, 1);
  }
  return false;
}




// Helper function form http://stackoverflow.com/questions/1131630/javascript-jquery-param-inverse-function
// Deparams a paramaterized array
// TODO: REMOVE?
mediaBrowserInternet.prototype.unparam = function (value) {
    var
    // Object that holds names => values.
    params = {},
    // Get query string pieces (separated by &)
    pieces = value.split('&'),
    // Temporary variables used in loop.
    pair, i, l;

    // Loop through query string pieces and assign params.
    for (i = 0, l = pieces.length; i < l; i++) {
        pair = pieces[i].split('=', 2);
        // Repeated parameters with the same name are overwritten. Parameters
        // with no value get set to boolean true.
        params[decodeURIComponent(pair[0])] = (pair.length == 2 ?
            decodeURIComponent(pair[1].replace(/\+/g, ' ')) : true);
    }

    return params;
};



}(jQuery));
