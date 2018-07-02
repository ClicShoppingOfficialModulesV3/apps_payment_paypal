<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse

   */

namespace ClicShopping\Apps\Payment\PayPal\Sites\ClicShoppingAdmin\Pages\Home\Actions;

use ClicShopping\OM\Registry;

class Privacy extends \ClicShopping\OM\PagesActionsAbstract
{
    public function execute()
    {
        $CLICSHOPPING_PayPal = Registry::get('PayPal');

        $this->page->setFile('privacy.php');
        $this->page->data['action'] = 'Privacy';

        $CLICSHOPPING_PayPal->loadDefinitions('ClicShoppingAdmin/privacy');
    }
}
