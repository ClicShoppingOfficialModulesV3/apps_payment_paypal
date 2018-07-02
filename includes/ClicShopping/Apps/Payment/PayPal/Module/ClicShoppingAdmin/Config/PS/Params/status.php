<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse
   
   */

namespace ClicShopping\Apps\Payment\PayPal\Module\ClicShoppingAdmin\Config\PS\Params;

use ClicShopping\OM\HTML;

class status extends \ClicShopping\Apps\Payment\PayPal\Module\ClicShoppingAdmin\Config\ConfigParamAbstract {
    public $default = '1';
    public $sort_order = 100;

    protected function init() {
        $this->title = $this->app->getDef('cfg_ps_status_title');
        $this->description = $this->app->getDef('cfg_ps_status_desc');
    }

    public function getInputField() {
      $value = $this->getInputValue();

      $array_menu = array(array('id' => '1',  'text' =>  $this->app->getDef('cfg_ps_status_live')),
                          array('id' => '0',  'text' =>  $this->app->getDef('cfg_ps_status_sandbox')),
                          array('id' => '-1',  'text' =>  $this->app->getDef('cfg_ps_status_disabled'))
                    );

      $input = HTML::selectField($this->key, $array_menu, $value, $this->getInputValue());

      return $input;
    }
}
