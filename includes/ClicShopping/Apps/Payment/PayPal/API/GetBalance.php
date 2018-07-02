<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse

   */

namespace ClicShopping\Apps\Payment\PayPal\API;

class GetBalance extends \ClicShopping\Apps\Payment\PayPal\APIAbstract
{
    public function execute(array $extra_params = null)
    {
        $params = [
            'USER' => $this->app->getApiCredentials($this->server, 'username'),
            'PWD' => $this->app->getApiCredentials($this->server, 'password'),
            'SIGNATURE' => $this->app->getApiCredentials($this->server, 'signature'),
            'METHOD' => 'GetBalance',
            'RETURNALLCURRENCIES' => '1'
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
