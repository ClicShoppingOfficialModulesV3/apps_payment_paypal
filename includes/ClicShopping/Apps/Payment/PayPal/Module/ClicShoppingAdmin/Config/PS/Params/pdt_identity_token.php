<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse

   */

namespace ClicShopping\Apps\Payment\PayPal\Module\ClicShoppingAdmin\Config\PS\Params;

class pdt_identity_token extends \ClicShopping\Apps\Payment\PayPal\Module\ClicShoppingAdmin\Config\ConfigParamAbstract
{
    public $sort_order = 650;

    protected function init()
    {
        $this->title = $this->app->getDef('cfg_ps_pdt_identity_token_title');
        $this->description = $this->app->getDef('cfg_ps_pdt_identity_token_desc');
    }
}
