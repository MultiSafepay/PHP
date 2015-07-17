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
        <h1 class="black">Thank you for your order.</h1>
        <br />

        <p>You transaction has been processed, if your payment was successful then you can start processing the order. </p>
        <br>

        <p>You had selected the Connect example, this transaction was requested using the following data (example):</p>
        <br />
        <pre><?php
          $order_id = time();

          $order = array(
              "type" => "redirect",
              "order_id" => $order_id,
              "currency" => "EUR",
              "amount" => 1000,
              "description" => "Demo Transaction",
              "var1" => "1",
              "var2" => "2",
              "var3" => "3",
              "items" => "items list",
              "manual" => "false",
              "gateway" => "",
              "days_active" => "30",
              "payment_options" => array(
                  "notification_url" => BASE_URL . "notificationController.php?type=initial",
                  "redirect_url" => BASE_URL . "mainController.php?view=connectComplete",
                  "cancel_url" => BASE_URL . 'cancelController.php',
                  "close_window" => "true"
              ),
              "customer" => array(
                  "locale" => "nl_NL",
                  "ip_address" => "127.0.0.1",
                  "forwarded_ip" => "127.0.0.1",
                  "first_name" => "Jan",
                  "last_name" => "Modaal",
                  "address1" => "Kraanspoor",
                  "address2" => "",
                  "house_number" => "39",
                  "zip_code" => "1032 SC",
                  "city" => "Amsterdam",
                  "state" => "",
                  "country" => "NL",
                  "phone" => "0208500500",
                  "email" => "test@test.nl",
              ),
              "google_analytics" => array(
                  "account" => "UA-XXXXXXXXX",
              ),
              "plugin" => array(
                  "shop" => "ideal demo",
                  "shop_version" => "1.0.0",
                  "plugin_version" => "1.0.1",
                  "partner" => "MultiSafepay",
                  "shop_root_url" => "http://www.demo.nl",
              ),
              "custom_info" => array(
                  "custom_1" => "value1",
                  "custom_2" => "value2",
              )
          );
print_r($order);?>
						
        </pre>
        <p>The JSON request would then be:</p>
        <br />
        <pre><?php echo json_encode($order); ?></pre>

        <br />
        <p>You can click <a href="index.php">here</a> to return to the MultiSafepay toolkit</p>

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