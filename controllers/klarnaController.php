<?php

//autoload
require_once dirname(__FILE__) . "/../models/API/Autoloader.php";

//load config
include("../config/config.php");


$klarna = new klarnaController();
$klarna->startTransaction();

class klarnaController {

  private $api_key = '';
  private $api_url = '';

  function __construct() {
    $this->api_key = API_KEY;
    $this->api_url = API_URL;
  }

  function startTransaction() {
    $msp = new Client;
    $msp->setApiKey($this->api_key);
    $msp->setApiUrl($this->api_url);
    try {
      $order_id = time();
      $order = $msp->orders->post(array(
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
              "email" => "test@test.nl",
          ),
          "gateway_info" => array(
              "birthday" => "10071970",
              "bank_account" => "",
              "phone" => "0612345678",
              "referrer" => "http://google.nl",
              "user_agent" => "msp01",
              "gender" => "male",
              "email" => "test@test.nl",
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
              "shop" => "MultiSafepay Toolkit",
              "shop_version" => TOOLKIT_VERSION,
              "plugin_version" => TOOLKIT_VERSION,
              "partner" => "MultiSafepay",
              "shop_root_url" => "http://www.demo.nl",
          )
      ));

      header("Location: " . $msp->orders->getPaymentLink());
    } catch (Exception $e) {
      echo "Error " . htmlspecialchars($e->getMessage());
    }
  }

}

?>