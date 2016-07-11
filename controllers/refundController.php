<?php

//autoload
require_once dirname(__FILE__) . "/../models/API/Autoloader.php";

//load config
if (file_exists("config/config.php")) {
  include("config/config.php");
} else {
  include("../config/config.php");
}


$refund = new refundController();

if (isset($_GET['issuer'])) {
  $refund->startTransaction($_GET['issuer']);
} elseif (isset($_GET['task'])) {

  if ($_GET['task'] == 'refund') {
    $refund->loadRefundView();
  } else {
    $refund->doRefund();
  }
}

class refundController {

  private $api_key = '';
  private $api_url = '';

  function __construct() {
    $this->api_key = API_KEY;
    $this->api_url = API_URL;
  }

  function startTransaction($issuer) {
    $msp = new Client;
    $msp->setApiKey($this->api_key);
    $msp->setApiUrl($this->api_url);

    try {
      $order_id = time();

      $order = $msp->orders->post(array(
          "type" => "direct",
          "order_id" => $order_id,
          "currency" => "EUR",
          "amount" => 1000,
          "description" => "Demo Transaction",
          "var1" => "1",
          "var2" => "2",
          "var3" => "3",
          "items" => "items list",
          "manual" => "false",
          "gateway" => "IDEAL",
          "days_active" => "30",
          "payment_options" => array(
              "notification_url" => BASE_URL . "notificationController.php?type=initial",
              "redirect_url" => BASE_URL . "refundController.php?task=refund",
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
          "gateway_info" => array(
              "issuer_id" => $issuer,
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

  public function loadRefundView() {
    $return_url = substr(BASE_URL, 0, -12) . 'index.php?view=refund&transactionid=' . $_GET['transactionid'];

    header("location: " . $return_url);
  }

  public function doRefund() {

    $msp = new Client;
    $msp->setApiKey($this->api_key);
    $msp->setApiUrl($this->api_url);

    $transactionid = $_GET['transactionid'];

    //get the order status
    $order = $msp->orders->get($type = 'orders', $transactionid, $body = array(), $query_string = false);


    if ($order->status == "completed") {
      //the transaction status was competed, now we will refund the transaction
      $endpoint = 'orders/' . $transactionid . '/refunds';
      try {
        $order = $msp->orders->post(array(
            "type" => "refund",
            "amount" => "20",
            "currency" => "EUR",
            "description" => "PHP Wrapper Toolkit Refund",
                ), $endpoint);
      } catch (Exception $e) {
        echo "Error " . htmlspecialchars($e->getMessage());
      }
    }
    $return_url = substr(BASE_URL, 0, -12) . 'index.php?view=refundComplete';

    header("location: " . $return_url);
  }

}

?>