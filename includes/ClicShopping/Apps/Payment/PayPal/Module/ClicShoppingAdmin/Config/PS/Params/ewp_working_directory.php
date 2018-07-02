<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse
   
   */

namespace ClicShopping\Apps\Payment\PayPal\Module\ClicShoppingAdmin\Config\PS\Params;

class ewp_working_directory extends \ClicShopping\Apps\Payment\PayPal\Module\ClicShoppingAdmin\Config\ConfigParamAbstract
{
    public $sort_order = 1200;

    protected function init()
    {
        $this->title = $this->app->getDef('cfg_ps_ewp_working_directory_title');
        $this->description = $this->app->getDef('cfg_ps_ewp_working_directory_desc');
    }
}
