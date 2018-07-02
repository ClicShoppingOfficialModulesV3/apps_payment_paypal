<?php
/**
 *
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse

 */

  namespace ClicShopping\Apps\Payment\PayPal\Module\ClicShoppingAdmin\Config\G;

  class G extends \ClicShopping\Apps\Payment\PayPal\Module\ClicShoppingAdmin\Config\ConfigAbstract
  {
      public $is_installed = true;
      public $sort_order = 100000;

      protected function init()
      {
          $this->title = $this->app->getDef('module_g_title');
          $this->short_title = $this->app->getDef('module_g_short_title');
      }

      public function install()
      {
          return false;
      }

      public function uninstall()
      {
          return false;
      }
  }
