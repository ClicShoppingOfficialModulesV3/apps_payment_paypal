<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse
   
   */

namespace ClicShopping\Apps\Payment\PayPal\API;

class PayflowVoid extends \ClicShopping\Apps\Payment\PayPal\APIAbstract
{
    protected $type = 'payflow';

    public function execute(array $extra_params = null)
    {
        $params = [
            'USER' => $this->app->hasCredentials('DP', 'payflow_user') ? $this->app->getCredentials('DP', 'payflow_user') : $this->app->getCredentials('DP', 'payflow_vendor'),
            'VENDOR' => $this->app->getCredentials('DP', 'payflow_vendor'),
            'PARTNER' => $this->app->getCredentials('DP', 'payflow_partner'),
            'PWD' => $this->app->getCredentials('DP', 'payflow_password'),
            'TENDER' => 'C',
            'TRXTYPE' => 'V'
        ];

        if (!empty($extra_params)) {
            $params = array_merge($params, $extra_params);
        }

        $response = $this->getResult($params);

        return [
            'res' => $response,
            'success' => ($response['RESULT'] == '0'),
            'req' => $params
        ];
    }
}
