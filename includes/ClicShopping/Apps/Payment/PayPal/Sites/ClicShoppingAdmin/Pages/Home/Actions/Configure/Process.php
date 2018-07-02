<?php
/*
 * ActionConfigure.php
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse
*/

  namespace ClicShopping\Apps\Payment\PayPal\Sites\ClicShoppingAdmin\Pages\Home\Actions\Configure;

  use ClicShopping\OM\Registry;

  class Process extends \ClicShopping\OM\PagesActionsAbstract {
    public function execute() {
      $CLICSHOPPING_MessageStack = Registry::get('MessageStack');
      $CLICSHOPPING_PayPal = Registry::get('PayPal');

      $current_module = $this->page->data['current_module'];

      $m = Registry::get('PayPalAdminConfig' . $current_module);

      foreach ($m->getParameters() as $key) {
          $p = strtolower($key);

          if (isset($_POST[$p])) {
              $CLICSHOPPING_PayPal->saveCfgParam($key, $_POST[$p]);
          }
      }

      $CLICSHOPPING_MessageStack->add($CLICSHOPPING_PayPal->getDef('alert_cfg_saved_success'), 'success', 'PayPal');

      $CLICSHOPPING_PayPal->redirect('Configure&module=' . $current_module);
    }
  }
