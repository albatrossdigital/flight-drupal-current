/* New D7 Wrapper --> */(function ($) {

Drupal.behaviors.reach_core = {
  attach: function(context, settings) { //new attach function
    
    $.extend({
      getUrlVars: function(){
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
          hash = hashes[i].split('=');
          vars.push(hash[0]);
          vars[hash[0]] = hash[1];
        }
        return vars;
      },
      getUrlVar: function(name){
        return $.getUrlVars()[name];
      }
    });
    
    /**
     *  Mobile Menu
     
    $('#block-superfish-1 h2.block-title').unbind();
    $('#block-superfish-1 h2.block-title').not('.clicked').bind('click', function() {
      var $container = $(this).parent();
      var height;
      if($container.hasClass('menu-open')) {
        height = 40;
      }
      else {
        height = 140;
      }
      $container.toggleClass('menu-open').addClass('opening');
      openMenu($container, $(this), height);
    });
    
    
    function openMenu($container, $button, height) {
      $button.toggleClass('clicked');
      $container.animate({
          height: height
        }, 500, function() {
          $button.toggleClass('clicked');
          $container.removeClass('opening');
      });
    }*/
    
    $('a.qtip-link').click(function() {
      return false;
    });
    
    $('a.qtip-link').qtip('option', {
      'style.width': 200
    });
    
    /*var pos1, pos2;
    if(window.matchMedia("all and (min-width: 600px)").matches) {
      pos1 = 'bottom center'; 
      pos2 = 'top center';
    }
    else {
      pos1 = 'top center';
      pos2 = 'bottom center';
    }*/
    
  }//attach
};//behaviors

/* New D7 Wrapper --> */ })(jQuery);
