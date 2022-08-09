<?php

namespace Drupal\openid_connect_accessci_client\Plugin\OpenIDConnectClient;

use Drupal\Core\Form\FormStateInterface;
use Drupal\openid_connect\Plugin\OpenIDConnectClientBase;

/**
 * ACCESS CI OpenID Connect client.
 *
 * @OpenIDConnectClient(
 *   id = "accessci",
 *   label = @Translation("ACCESS CI")
 * )
 */
class ACCESSCI extends OpenIDConnectClientBase {

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);

    $form['authorization_endpoint'] = [
       '#title' => $this->t('Authorization endpoint'),
       '#type' => 'textfield',
       '#default_value' => $this->configuration['authorization_endpoint'],
    ];
    $form['token_endpoint'] = [
       '#title' => $this->t('Token endpoint'),
       '#type' => 'textfield',
       '#default_value' => $this->configuration['token_endpoint'],
    ];
    $form['userinfo_endpoint'] = [
       '#title' => $this->t('UserInfo endpoint'),
       '#type' => 'textfield',
       '#default_value' => $this->configuration['userinfo_endpoint'],
    ];
    $form['requested_scopes'] = [
       '#title' => $this->t('Requested scopes'),
       '#type' => 'textfield',
       '#default_value' => $this->configuration['requested_scopes'],
    ];
    $form['login_redirection'] = [
       '#title' => $this->t('Login redirection path'),
       '#type' => 'textfield',
       '#default_value' => $this->configuration['login_redirection'],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function getEndpoints() {
    return array(
      'authorization' => 'https://cilogon.org/authorize',
      'token' => 'https://cilogon.org/oauth2/token',
      'userinfo' => 'https://cilogon.org/oauth2/userinfo',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getClientScopes() {
    $scopes_string = $this->configuration['requested_scopes'];
    $scopes_array = explode(',', $scopes_string);
    return $scopes_array;
  }

}
