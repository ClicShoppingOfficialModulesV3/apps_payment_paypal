<?php
  use ClicShopping\OM\HTML;

  require(__DIR__ . '/template_top.php');
?>
<div class="contentBody">
  <div class="separator"></div>

  <div class="row">
    <div class="col-md-12">
      <div class="card card-block headerCard">
        <div class="row">
          <div class="col-md-12"><?php echo '&nbsp;' . $CLICSHOPPING_PayPal->getDef('onboarding_intro_body'); ?></div>

          <div class="col-md-12 text-md-right">
<?php echo
  $CLICSHOPPING_PayPal->getDef('manage_credentials_body', [
    'button_manage_credentials' => HTML::button($CLICSHOPPING_PayPal->getDef('button_manage_credentials'), null, $CLICSHOPPING_PayPal->link('Credentials'), 'info')
  ]);
?>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  require(__DIR__ . '/template_bottom.php');