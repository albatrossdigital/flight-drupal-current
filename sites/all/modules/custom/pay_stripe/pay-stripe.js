(function ($) {

Drupal.behaviors.pay_stripe = {
  attach: function (context, settings)  {
    var selectors = settings.stripe.selectors;
    var $form = $(selectors.form, context).eq(0);
    
    $(selectors.cc_num, $form).removeAttr('name').removeAttr('disabled').parents('.form-item:eq(0)').removeClass('form-disabled');
    $(selectors.cc_ccv2, $form).removeAttr('name').removeAttr('disabled').parents('.form-item:eq(0)').removeClass('form-disabled'); 

    $form.bind('submit', function(){return false;});
    $('.form-submit', $form).eq(0).bind('click', function(){stripe_submit();});

    // Set the Stripe key
    $form.once(function(){
      Stripe.setPublishableKey(settings.stripe.pubkey);
    });
    
    // Form submit() function
    // Returns false.  The stripeResponseHandler function below actually submits the form.
    function stripe_submit() {      
      $('.payment-errors.messages.error').remove();

      Stripe.createToken({
        number: $(selectors.cc_number, $form).val(),
        cvc: $(selectors.cc_ccv2, $form).val(),
        exp_month: $(selectors.cc_exp_month, $form).val(),
        exp_year: 2000 + parseInt($(selectors.cc_exp_year, $form).val())
      }, stripeResponseHandler);
      // prevent the form from submitting with the default action
      return false;
    }
    
    // Form submit() function
    // This is called after we've talked to Stripe. It actually submits the form.
    var stripeResponseHandler = function(status, response) {
      $selectors = Drupal.settings.stripe.selectors;
      var $form = $(selectors.form).eq(0);

      if (response.error) {
        //show the errors on the form
        $form.after($('<div class="payment-errors messages error"></div>').html(response.error.message));
      }
      else {
        
        // token contains id, last4, and card type
        var token = response['id'];

        // insert the token into the form so it gets submitted to the server
        $(selectors.stripe_token, $form).val(token);

        // Blank out the values of these fields to avoid PCI complications
        //$(selectors.cc_ccv2, $form).val('xxx');
        //$(selectors.cc_number, $form).val('xxxx-xxxx-xxxx-' + $(selectors.cc_number, $form).val().replace(/\-| /gi, '').substring(12,16));
        
        // and submit
        $form.get(0).submit();
      }
    }
  }
}
})(jQuery);
