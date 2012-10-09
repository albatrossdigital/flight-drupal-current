<?php

/**
* Modify the drupal mail system to use smtp when sending emails.
* Include the option to choose between plain text or HTML
*/

/**
* Modify the drupal mail system to use smtp when sending emails.
* Include the option to choose between plain text or HTML
*/
class DefaultMailer implements MailSystemInterface {

  /**
   * Concatenate and wrap the e-mail body for either
   * plain-text or HTML emails.
   *
   * @param $message
   *   A message array, as described in hook_mail_alter().
   *
   * @return
   *   The formatted $message.
   */
  public function format(array $message) {
    parent::format($message);
  }

  /**
   * Send the e-mail message.
   *
   * @see drupal_mail()
   *
   * @param $message
   *   A message array, as described in hook_mail_alter().
   * @return
   *   TRUE if the mail was successfully accepted, otherwise FALSE.
   */
  public function mail(array $message) {
	  parent::mail($message);
  }
  
  /**
   * Tokenize the mailing.
   **/
  public function tokenize($body, $version = 'html', $recipient = NULL){
    $unsubscribe_url = url(CRM_MAILING_UNSUBSCRIBE, array('absolute' => TRUE));
    if ($version == 'html'){
      return str_replace(array('[unsubscribe]'), array('<a href="'. $unsubscribe_url .'">Unsubscribe</a>'), $body);
    } else {
      return str_replace(array('[unsubscribe]'), array('Unsubscribe: ' .$unsubscribe_url), $body);
    }
  }
  
}
