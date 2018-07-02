<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse
   
   */

namespace ClicShopping\Apps\Payment\PayPal\API;

use ClicShopping\OM\CLICSHOPPING;

class PayflowSetExpressCheckout extends \ClicShopping\Apps\Payment\PayPal\APIAbstract
{
    protected $type = 'payflow';

    public function execute(array $extra_params = null)
    {
        $params = [
                  'USER' => $this->app->hasCredentials('DP', 'payflow_user') ? $this->app->getCredentials('DP', 'payflow_user') : $this->app->getCredentials('DP', 'payflow_vendor'),
                  'VENDOR' => $this->app->getCredentials('DP', 'payflow_vendor'),
                  'PARTNER' => $this->app->getCredentials('DP', 'payflow_partner'),
                  'PWD' => $this->app->getCredentials('DP', 'payflow_password'),
                  'TENDER' => 'P',
                  'TRXTYPE' => (CLICSHOPPING_APP_PAYPAL_DP_TRANSACTION_METHOD == '1') ? 'S' : 'A',
                  'ACTION' => 'S',
                  'RETURNURL' => CLICSHOPPING::link('index.php', 'order&callback&paypal&ec&action=retrieve', false, false),
                  'CANCELURL' => CLICSHOPPING::link('index.php', 'Cart')
                  ];

        if (!empty($extra_params)) {
            $params = array_merge($params, $extra_params);
        }

        $headers = [];

        if (isset($params['_headers'])) {
            $headers = $params['_headers'];

            unset($params['_headers']);
        }

        $response = $this->getResult($params, $headers);

        if ($response['RESULT'] != '0') {
            switch ($response['RESULT']) {
                case '1':
                case '26':
                    $error_message = $this->app->getDef('module_ec_error_configuration');
                    break;

                case '1000':
                    $error_message = $this->app->getDef('module_ec_error_express_disabled');
                    break;

                default:
                    $error_message = $this->app->getDef('module_ec_error_general');
            }

            $response['CLICSHOPPING_ERROR_MESSAGE'] = $error_message;
        }

        return [
            'res' => $response,
            'success' => ($response['RESULT'] == '0'),
            'req' => $params
        ];
    }
}
