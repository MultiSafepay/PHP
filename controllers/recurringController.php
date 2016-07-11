<?php

//autoload
require_once dirname(__FILE__) . "/../models/API/Autoloader.php";

//load config
include("../config/config.php");


$recurringpayment = new recurringController();
$recurringpayment->startTransaction();

class recurringController {

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
          "type" => "direct",
          "order_id" => $order_id,
          "currency" => "EUR",
          "amount" => 1000,
          "description" => "Demo Transaction",
          "gateway" => "DIRDEB", //DIRDEB When iDEAL was used for the initial transaction. For VISA, Mastercard etc you can use the same gateway code.
          "recurring_id" => "9985046659087797728", // The recurring ID can be found within the response of a status update API call for the initial transaction
          "days_active" => "30",
      ));

      //do redirect to recurring view
      $return_url = substr(BASE_URL, 0, -12) . 'index.php?view=recurringComplete';

      header("Location: " . $return_url);
    } catch (Exception $e) {
      echo "Error " . htmlspecialchars($e->getMessage());
    }
  }

}

?>