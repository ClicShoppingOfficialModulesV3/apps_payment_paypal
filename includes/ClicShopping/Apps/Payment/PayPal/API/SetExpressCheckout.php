<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse
   
   */

namespace ClicShopping\Apps\Payment\PayPal\API;

use ClicShopping\OM\CLICSHOPPING;

class SetExpressCheckout extends \ClicShopping\Apps\Payment\PayPal\APIAbstract
{
    public function execute(array $extra_params = null)
    {
        $params = [
            'METHOD' => 'SetExpressCheckout',
            'PAYMENTREQUEST_0_PAYMENTACTION' => ((CLICSHOPPING_APP_PAYPAL_EC_TRANSACTION_METHOD == '1') || !$this->app->hasCredentials('EC') ? 'Sale' : 'Authorization'),
            'RETURNURL' => CLICSHOPPING::link('index.php', 'order&callback&paypal&ec&action=retrieve', false, false),
            'CANCELURL' => CLICSHOPPING::link('index.php', 'order&callback&paypal&ec&action=cancel', false, false),
            'BRANDNAME' => STORE_NAME,
            'SOLUTIONTYPE' => (CLICSHOPPING_APP_PAYPAL_EC_ACCOUNT_OPTIONAL == '1') ? 'Sole' : 'Mark'
        ];

        if ($this->app->hasCredentials('EC')) {
            $params['USER'] = $this->app->getCredentials('EC', 'username');
            $params['PWD'] = $this->app->getCredentials('EC', 'password');
            $params['SIGNATURE'] = $this->app->getCredentials('EC', 'signature');
        } else {
            $params['SUBJECT'] = $this->app->getCredentials('EC', 'email');
        }

        if (!empty($extra_params)) {
            $params = array_merge($params, $extra_params);
        }

        $response = $this->getResult($params);

        return [
            'res' => $response,
            'success' => in_array($response['ACK'], ['Success', 'SuccessWithWarning']),
            'req' => $params
        ];
    }
}
