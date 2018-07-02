<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse

   */

namespace ClicShopping\Apps\Payment\PayPal\API;

use ClicShopping\OM\HTTP;

class DoDirectPayment extends \ClicShopping\Apps\Payment\PayPal\APIAbstract
{
    public function execute(array $extra_params = null)
    {
        $params = [
          'USER' => $this->app->getCredentials('DP', 'username'),
          'PWD' => $this->app->getCredentials('DP', 'password'),
          'SIGNATURE' => $this->app->getCredentials('DP', 'signature'),
          'METHOD' => 'DoDirectPayment',
          'PAYMENTACTION' => (CLICSHOPPING_APP_PAYPAL_DP_TRANSACTION_METHOD == '1') ? 'Sale' : 'Authorization',
          'IPADDRESS' => HTTP::getIpAddress(),
          'BUTTONSOURCE' => $this->app->getIdentifier()
        ];

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
