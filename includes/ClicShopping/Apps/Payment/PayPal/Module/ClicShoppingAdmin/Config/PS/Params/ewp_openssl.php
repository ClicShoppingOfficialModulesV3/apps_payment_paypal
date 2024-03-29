<?php
  /**
   *
   * @copyright 2008 - https://www.clicshopping.org
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @Licence GPL 2 & MIT

   * @Info : https://www.clicshopping.org/forum/trademark/
   *
   */

  namespace ClicShopping\Apps\Payment\PayPal\Module\ClicShoppingAdmin\Config\PS\Params;

  class ewp_openssl extends \ClicShopping\Apps\Payment\PayPal\Module\ClicShoppingAdmin\Config\ConfigParamAbstract
  {
    public $default = '/usr/bin/openssl';
    public ?int $sort_order = 1300;

    protected function init()
    {
      $this->title = $this->app->getDef('cfg_ps_ewp_openssl_title');
      $this->description = $this->app->getDef('cfg_ps_ewp_openssl_desc');
    }
  }
