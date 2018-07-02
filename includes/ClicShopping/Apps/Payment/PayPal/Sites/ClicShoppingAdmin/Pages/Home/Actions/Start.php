<?php
/**
 *
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse

 */

  namespace ClicShopping\Apps\Payment\PayPal\Sites\ClicShoppingAdmin\Pages\Home\Actions;

  class Start extends \ClicShopping\OM\PagesActionsAbstract
  {
      public function execute()
      {
          $this->page->data['action'] = 'Start';
      }
  }
