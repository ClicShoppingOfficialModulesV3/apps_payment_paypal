<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse

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
