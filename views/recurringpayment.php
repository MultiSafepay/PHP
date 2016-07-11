<?php
include('config/config.php');
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
        <h1 class="black">You have selected the Recurring payment example</h1>
        <br />

        <p class="black">You can using recurring payments by storing the recurringID from an original transaction. When the recurringID is added to the transaction request, then a new recurring transaction will be created using those details. A recurring payment transaction request would then look like (example) :
        </p>
        <br>
        <pre><?php
          $order_id = time();
          $order = array(
              "type" => "direct",
              "order_id" => $order_id,
              "currency" => "EUR",
              "amount" => 1000,
              "description" => "Demo Transaction",
              "var3" => "3",
              "var2" => "2",
              "var1" => "1",
              "items" => "items list",
              "manual" => "false",
              "gateway" => "DIRDEB",
              "recurring_id" => "9985046659087797728",
              "days_active" => "30",
          );

          print_r($order);
          ?>
        </pre>
        <br />
        <a href="controllers/recurringController.php" class="submitbutton">Start Recurring Payment</a>
        <br /><br />
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