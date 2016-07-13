<?php
include('config/config.php');
include('controllers/gatewayController.php');
$gateways = new gatewayController();
$selection = $gateways->getGateways();
?>

<div id="body-wrapper">
  <div id="main-menu">
    <div id="container">
      <a id="logo" href="https://www.multisafepay.com/">
        <img class="logo" src="assets/images/multisafepay-logo-white.svg" alt="MultiSafepay">
      </a>
      <div style="clear:both;"></div>
    </div>
  </div>
  <div id="main-wrapper">
    <div id="container">
      <div class="content-description left-align">
        <h1 class="black">You have selected gateway request.</h1>
        <br />

        <p>Normally, a gateway request is done to request all gateways active within your MultiSafepay account, based on currency, locale and amount. The request is done in the background, the returned gateways should be added to your checkout process within your store so that customers can use those payment methods to pay their order.</p>
        <br>
        <br />
        <p>Please select the payment method of your choice and start your transaction</p>
        <form action="<?php echo BASE_URL ?>controllers/gatewayController.php" method="GET">
          <?php echo $selection; ?>
          <br />
          <br />	
          <input type="submit" value="Start transaction" class="submitbutton"/>
        </form>
        <br />
        <br />
        <br />
        <p>While loading this page, a gateway request API call was done in the background by using the url below and by using the correct headers</p>
        <br />
        <pre>https://testapi.multisafepay.com/v1/json/gateways?country=NL&currency=USD&amount=1000&locale=nl-NL</pre>
        <br />
        <p>The following response was given:</p>
        <br />
        <pre>{
    "success": true,
    "data": [
        {
            "id": "VISA",
            "description": "Visa"
        },
        {
            "id": "DIRDEB",
            "description": "Direct Debit \/ Eenmalige machtiging"
        },
        {
            "id": "MASTERCARD",
            "description": "MasterCard"
        },
        {
            "id": "BANKTRANS",
            "description": "Overboeking"
        },
        {
            "id": "PAYAFTER",
            "description": "Betaal Na Ontvangst"
        },
        {
            "id": "PAYPAL",
            "description": "PayPal"
        },
        {
            "id": "IDEAL",
            "description": "iDEAL"
        },
        {
            "id": "INTERSOLVE",
            "description": "Intersolve"
        }
    ]
}</pre>
<br />
        <p>You can click <a href="index.php">here</a> to return to the MultiSafepay toolkit</p>
        <Br />

      </div>
      <div class="examples">

        <div style="clear:both;"></div>
      </div>
    </div>
  </div>
  <div id="main-footer">
    <div id="container">
      <div style="clear:both;"></div>
    </div>
    <div id="main-copyright">
      <div id="container"><img width="230" src="<?php echo BASE_URL ?>assets/images/multisafepaylogo.svg" alt="MultiSafepay"><br/>&copy; 2015 MultiSafepay. All rights reserved.</div>
    </div>
  </div>
</div>