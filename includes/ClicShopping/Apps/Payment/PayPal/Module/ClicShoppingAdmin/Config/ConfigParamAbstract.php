<?php
/*
 * ConfigParamAbstract.php
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse

*/

namespace ClicShopping\Apps\Payment\PayPal\Module\ClicShoppingAdmin\Config;

  use ClicShopping\OM\Registry;

  abstract class ConfigParamAbstract extends \ClicShopping\Sites\ClicShoppingAdmin\ConfigParamAbstract {
    protected $app;
    protected $config_module;

    protected $key_prefix = 'clicshopping_app_paypal_';
    public $app_configured = true;

    public function __construct($config_module) {
        $this->app = Registry::get('PayPal');

        if ($config_module != 'G') {
          $this->key_prefix .= strtolower($config_module) . '_';
        }

        $this->config_module = $config_module;

        $this->code = (new \ReflectionClass($this))->getShortName();

        $this->app->loadDefinitions('modules/' . $config_module . '/Params/' . $this->code);

        parent::__construct();
    }
  }
