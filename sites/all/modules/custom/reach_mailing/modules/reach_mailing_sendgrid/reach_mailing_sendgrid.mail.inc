<?php


/**
* Modify the drupal mail system to use smtp when sending emails.
* Include the option to choose between plain text or HTML
*/

/**
* Modify the drupal mail system to use smtp when sending emails.
* Include the option to choose between plain text or HTML
*/
class SendgridMailer implements MailSystemInterface {
  
  protected $debug_mode = FALSE;

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
    return $message;
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
	  
	  $client = http_client(NULL, new HttpClientBaseFormatter(HttpClientBaseFormatter::FORMAT_JSON));
	  
	  // Add the basic data
	  $auth = $this->get_auth();
	  $from = $this->parse_address($message['from']);
	  $to = $this->parse_address($message['to']);
	  
	  $data = array(
	    'to' => $to[0]['mail'],
	    'toname' => $to[0]['name'],
	    'subject' => $message['subject'],
	    'from' => $from[0]['mail'],
	    'fromname' => $from[0]['name'],
	    'api_user' => $auth['user'],
	    'api_key' => $auth['pass'],
	  );
	  
	  // Add text/html body
	  if ($message['body']['html']) {
	    $data['html'] = $message['body']['html'];
	  }
	  if ($message['body']['text']) {
	    $data['text'] = $message['body']['text'];
	  }
	  
	  // Handle headers
    if (isset($message['headers'])) {
		  foreach ($message['headers'] as $name => $value) {
			  if ($name == 'Reply-To') {
				  $reply_to = $this->parse_address($message['headers']['Reply-To']);
				  $data['replyto'] = $reply_to[0]['mail'];
			  } else {
			    $data['headers'][$name] = $value;
			  }
		  }
		}
		
		// Add the Sendgrid smtp api vals
	  if (is_array($message['recipients'])) {
	    $data['x-smtpapi']['sub'] = $this->get_subs($message['recipients']);
	    if (isset($data['x-smtpapi']['sub']['[email]'])) {
	      $data['x-smtpapi']['to'] = $data['x-smtpapi']['sub']['[email]'];
	    }
	  }
	  if (isset($message['category'])) {
	    $data['x-smtpapi']['category'] = $message['category'];
	  }
	  dpm($data);
	  if (isset($data['x-smtpapi'])) {
	    $data['x-smtpapi'] = json_encode($data['x-smtpapi']);
	  }
	  
	  
	  // Send it!
    if (!$this->debug_mode) {
	    try {
        $return = $client->get('https://sendgrid.com/api/mail.send.json', $data);
      } catch (Exception $e) {
        $return = array('error' => $e);
      }
    } else {
      drupal_set_message('Sendgrid in TEST mode.  Below is the data that would have been sent:');
      dpm($data);
    }
    //dpm($data);
    //dpm($return);

  }
  
  /**
   * Tokenize the mailing.
   **/
  public function tokenize($body, $version = 'html', $recipient = NULL){
    $unsubscribe_url = url(CRM_MAILING_UNSUBSCRIBE, array('absolute' => TRUE)) . '/[id]';
    if ($version == 'html'){
      return str_replace(array('[unsubscribe]'), array('<a href="'. $unsubscribe_url .'">Unsubscribe</a>'), $body);
    } else {
      return str_replace(array('[unsubscribe]'), array('Unsubscribe: ' .$unsubscribe_url), $body);
    }
  }
  
  /**
   * Turn the recipients array into a Sendgrid smtpapi-safe 'subs' array.
   */
  private function get_subs($recipients) {
    $subs = array();
    foreach ($recipients as $recipient) {
      foreach ($recipient as $key => $value) {
        $subs['[' . $key . ']'][] = $value;
      }
    }
    return $subs;
  }
  

  /**
   * Get auth info from Drupal variable table.
   */
  private function get_auth() {
    return array(
      'user' => variable_get('sendgrid_user', 'albatrossdigital'),
      'pass' => variable_get('sendgrid_user', 'gamallama'),
    );
  }
  
  
  /**
   * Extract address and optional display name of an e-mail address.
   *
   * @param $address
   *   A string containing one or more valid e-mail address(es) separated with
   *   commas.
   *
   * @return
   *   An array containing all found e-mail addresses split into mail and name.
   *
   * @see http://tools.ietf.org/html/rfc5322#section-3.4
   */
  private function parse_address($address) {
    $parsed = array();
    $regexp = "/^(.*) <([a-z0-9]+(?:[_\\.-][a-z0-9]+)*@(?:[a-z0-9]+(?:[\.-][a-z0-9]+)*)+\\.[a-z]{2,})>$/i";

    // Split multiple addresses and process each.
    foreach (explode(',', $address) as $email) {
      $email = trim($email);
      if (preg_match($regexp, $email, $matches)) {
        $parsed[] = array('mail' => $matches[2], 'name' => trim($matches[1], '"'));
      }
      else {
        $parsed[] = array('mail' => $email, 'name' => '');
      }
    }
    return $parsed;
  }
}
