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

        <p>Your Klarna transaction has been processed, you can now start the order processing</p>
        <br />
        <p>You had selected the Klarna example, this transaction was requested using the following data (example):</p>
        <br />
        <pre><?php
          $order_id = time();

          $order = array(
              "type" => "redirect",
              "order_id" => $order_id,
              "currency" => "EUR",
              "amount" => 2000,
              "description" => "Demo Transaction",
              "var1" => "",
              "var2" => "",
              "var3" => "",
              "items" => "items list",
              "manual" => "false",
              "gateway" => "KLARNA",
              "days_active" => "30",
              "payment_options" => array(
                  "notification_url" => BASE_URL . "notificationController.php?type=initial",
                  "redirect_url" => BASE_URL . "mainController.php?view=klarnaComplete",
                  "cancel_url" => BASE_URL . 'cancelController.php',
                  "close_window" => "true"
              ),
              "customer" => array(
                  "locale" => "nl_NL",
                  "ip_address" => "127.0.0.1",
                  "forwarded_ip" => "127.0.0.1",
                  "first_name" => "Testperson-nl",
                  "last_name" => "Approved",
                  "address1" => "Neherkade",
                  "address2" => "",
                  "house_number" => "1 XI",
                  "zip_code" => "2521VA",
                  "city" => "Gravenhage",
                  "state" => "Zuid holland",
                  "country" => "NL",
                  "phone" => "0612345678",
                  "email" => "dirk.meij@klarna.com",
              ),
              "gateway_info" => array(
                  "birthday" => "10071970",
                  "bank_account" => "",
                  "phone" => "0612345678",
                  "referrer" => "http://google.nl",
                  "user_agent" => "msp01",
                  "gender" => "male",
                  "email" => "dirk.meij@klarna.com",
              ),
              "shopping_cart" => array(
                  "items" => array(
                      array(
                          "name" => "Test",
                          "description" => "",
                          "unit_price" => "10",
                          "quantity" => "2",
                          "merchant_item_id" => "test123",
                          "tax_table_selector" => "BTW0",
                          "weight" => array(
                              "unit" => "KB",
                              "value" => "20",
                          )
                      )
                  )
              ),
              "checkout_options" => array(
                  "tax_tables" => array(
                      "default" => array(
                          "shipping_taxed" => "true",
                          "rate" => "0.21"
                      ),
                      "alternate" => array(
                          array(
                              "standalone" => "true",
                              "name" => "BTW0",
                              "rules" => array(
                                  array("rate" => "0.00")
                              ),
                          )
                      )
                  )
              ),
              "plugin" => array(
                  "shop" => "ideal demo",
                  "shop_version" => "1.0.0",
                  "plugin_version" => "1.0.1",
                  "partner" => "MultiSafepay",
                  "shop_root_url" => "http://www.demo.nl",
              )
          );
          print_r($order);
          ?></pre>
        <p>The JSON request would then be:</p>
        <br />
        <pre><?php echo json_encode($order); ?></pre>

        <br />

        <p>You can click <a href="index.php">here</a> to return to the MultiSafepay toolkit</p>
        <br />
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