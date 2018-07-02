<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse

   */

namespace ClicShopping\Apps\Payment\PayPal\Module\ClicShoppingAdmin\Config\PS\Params;

class ewp_paypal_cert extends \ClicShopping\Apps\Payment\PayPal\Module\ClicShoppingAdmin\Config\ConfigParamAbstract
{
    public $sort_order = 1100;

    protected function init()
    {
        $this->title = $this->app->getDef('cfg_ps_ewp_paypal_cert_title');
        $this->description = $this->app->getDef('cfg_ps_ewp_paypal_cert_desc');
    }
}
