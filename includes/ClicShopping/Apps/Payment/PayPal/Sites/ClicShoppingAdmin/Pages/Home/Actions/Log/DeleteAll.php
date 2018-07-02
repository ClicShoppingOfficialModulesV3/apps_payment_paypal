<?php
/**
 *
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse
 
 */

namespace ClicShopping\Apps\Payment\PayPal\Sites\ClicShoppingAdmin\Pages\Home\Actions\Log;

use ClicShopping\OM\Registry;

class DeleteAll extends \ClicShopping\OM\PagesActionsAbstract
{
    public function execute()
    {
        $CLICSHOPPING_MessageStack = Registry::get('MessageStack');
        $CLICSHOPPING_PayPal = Registry::get('PayPal');

        $CLICSHOPPING_PayPal->db->delete('clicshopping_app_paypal_log');

        $CLICSHOPPING_MessageStack->add($CLICSHOPPING_PayPal->getDef('alert_delete_success'), 'success', 'PayPal');

        $CLICSHOPPING_PayPal->redirect('Log');
    }
}
