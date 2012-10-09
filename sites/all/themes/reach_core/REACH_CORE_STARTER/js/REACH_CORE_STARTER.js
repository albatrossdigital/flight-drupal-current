/* New D7 Wrapper --> */(function ($) {

Drupal.behaviors.REACH_CORE_STARTER = {
  attach: function(context, settings) { //new attach function
    
    /**
     *  Mobile Menu
     */
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
    }
    
  }//attach
};//behaviors

/* New D7 Wrapper --> */ })(jQuery);
