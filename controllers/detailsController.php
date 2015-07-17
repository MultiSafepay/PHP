<?php

//autoload
require_once dirname(__FILE__) . "/../models/API/Autoloader.php";

//load config
include("config/config.php");

class detailsController {

  private $api_key = '';
  private $api_url = '';

  function __construct() {
    $this->api_key = API_KEY;
    $this->api_url = API_URL;
  }

  function getDetails() {
    $msp = new Client;
    $msp->setApiKey($this->api_key);
    $msp->setApiUrl($this->api_url);
    try {
      $transactionid = '1437027267';

      //get the order
      $order = $msp->orders->get($endpoint = 'orders', $transactionid, $body = array(), $query_string = false);
    } catch (Exception $e) {
      echo "Error " . htmlspecialchars($e->getMessage());
    }
    return $order;
  }

}

?>