<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse

   */

namespace ClicShopping\Apps\Payment\PayPal\Sites\ClicShoppingAdmin\Pages\Home\Actions;

use ClicShopping\OM\Registry;

class Info extends \ClicShopping\OM\PagesActionsAbstract
{
    public function execute()
    {
        $CLICSHOPPING_PayPal = Registry::get('PayPal');

        $this->page->setFile('info.php');
        $this->page->data['action'] = 'Info';

        $CLICSHOPPING_PayPal->loadDefinitions('ClicShoppingAdmin/info');
    }
}
