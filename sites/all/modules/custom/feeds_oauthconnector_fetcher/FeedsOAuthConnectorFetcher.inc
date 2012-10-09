<?php

/**
 * Result of FeedsHTTPFetcher::fetch().
 */
class FeedsOAuthConnectorFetcherResult extends FeedsFetcherResult {
  protected $config;

  /**
   * Constructor.
   */
  public function __construct($config = NULL) {
    $this->config = $config;
    parent::__construct('');
  }

  /**
   * Overrides FeedsFetcherResult::getRaw();
   */
  public function getRaw() {
    $return = oauthconnector_endpoint_call_for_user($this->config['endpoint'], $params=array(), $this->config['provider'], $account=NULL, $this->config['method'], $format='RAW');
    
    if (is_array($return) && $return['error']) {
      drupal_set_message(t('There was an error loading the OAuth feed: !error', array('!error' => $return['error_str'])), 'error');
    }
    
    // This helps import items from Facebook (ex: https://graph.facebook.com/406487839366844).
    // @TODO: Not sure if we want to do this here.  Maybe add this as a hook?
    if (strpos($return, '[') === FALSE) {
      $return = '[' . $return . ']';
    }
    
    dpm($return);
    return $return;
  }
}




/**
 * Fetches data via SOAP.
 */
class FeedsOAuthConnectorFetcher extends FeedsFetcher {

  /**
   * Implementation of FeedsFetcher::fetch().
   */
  public function fetch(FeedsSource $source) {
    //$fb_return = oauthconnector_endpoint_call_for_user(REACH_FB_API . '/me/links', $data, REACH_CONNECTOR_FB, $account=NULL, 'POST', $format='JSON');
    
    $source_config = $source->getConfigFor($this);
    return new FeedsOAuthConnectorFetcherResult($source_config);
  }

  /**
   * Source form.
   */
  public function sourceForm($source_config) {

    $form = array();

    $form['endpoint'] = array(
      '#type'  => 'textfield',
      '#title' => t('Endpoint URL'),
      '#size'  => 60,
      '#maxlength'   => 256,
      '#description' => t('Enter the absolute endpoint URL of the service.'),
      '#default_value' => isset($source_config['endpoint']) ? $source_config['endpoint'] : '',
      '#required'    => TRUE
    );
    
    $providers = array('' => t('- Select a Provider -'));
    $providers += oauthconnector_provider_list();
    $form['provider'] = array(
      '#type'  => 'select',
      '#title' => t('OAuth Provider'),
      '#options' => $providers,
      '#default_value' => isset($source_config['provider']) ? $source_config['provider'] : '',
    );
    
    global $user;
    $form['account'] = array(
      '#type' => 'textfield', 
      '#title' => t('Account to use for OAuth connection'), 
      '#maxlength' => 60, 
      '#autocomplete_path' => 'user/autocomplete',
      '#default_value' => isset($source_config['account']) ? $source_config['account'] : $user->name,
    );
    
    $form['method'] = array(
      '#type' => 'select', 
      '#title' => t('Method'),
      '#options' => array(
        'GET' => t('GET'),
        'PUSH' => t('PUSH'),
      ),
      '#default_value' => isset($source_config['method']) ? $source_config['method'] : 'GET',
    );
    
    $form['params'] = array(
      '#type' => 'textarea', 
      '#title' => t('TODO: Parameters'), 
      '#default_value' => isset($source_config['params']) ? $source_config['params'] : '',
    );

    return $form;
  }
}
