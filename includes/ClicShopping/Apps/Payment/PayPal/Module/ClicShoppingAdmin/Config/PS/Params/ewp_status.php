<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse

   */

namespace ClicShopping\Apps\Payment\PayPal\Module\ClicShoppingAdmin\Config\PS\Params;

use ClicShopping\OM\HTML;

class ewp_status extends \ClicShopping\Apps\Payment\PayPal\Module\ClicShoppingAdmin\Config\ConfigParamAbstract
{
    public $default = '-1';
    public $sort_order = 700;

    protected function init()
    {
        $this->title = $this->app->getDef('cfg_ps_ewp_status_title');
        $this->description = $this->app->getDef('cfg_ps_ewp_status_desc');
    }

    public function getInputField()
    {
        $value = $this->getInputValue();

        $input =  HTML::radioField($this->key, '1', $value, 'autocomplete="off"') . $this->app->getDef('cfg_ps_ewp_status_true') . '<br /> ';
        $input .=  HTML::radioField($this->key, '-1', $value, 'autocomplete="off"') . $this->app->getDef('cfg_ps_ewp_status_false') . '<br />';

        return $input;
    }
}
