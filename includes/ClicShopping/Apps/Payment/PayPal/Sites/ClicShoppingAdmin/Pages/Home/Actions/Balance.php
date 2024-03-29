<?php
  /**
   *
   * @copyright 2008 - https://www.clicshopping.org
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @Licence GPL 2 & MIT

   * @Info : https://www.clicshopping.org/forum/trademark/
   *
   */

  namespace ClicShopping\Apps\Payment\PayPal\Sites\ClicShoppingAdmin\Pages\Home\Actions;

  use ClicShopping\OM\Registry;

  class Balance extends \ClicShopping\OM\PagesActionsAbstract
  {
    public function execute()
    {
      $CLICSHOPPING_PayPal = Registry::get('PayPal');

      $this->page->setFile('balance.php');
      $this->page->data['action'] = 'Balance';

      $CLICSHOPPING_PayPal->loadDefinitions('ClicShoppingAdmin/balance');
    }
  }
