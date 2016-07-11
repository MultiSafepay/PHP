<?php

//autoload
require_once dirname(__FILE__) . "/../models/API/Autoloader.php";

//load config
if (file_exists("config/config.php")) {
  include("config/config.php");
} else {
  include("../config/config.php");
}


$update = new updateController();
$update->startUpdateTransaction();

class updateController {

  private $api_key = '';
  private $api_url = '';

  function __construct() {
    $this->api_key = API_KEY;
    $this->api_url = API_URL;
  }

  function startUpdateTransaction() {
    $msp = new Client;
    $msp->setApiKey($this->api_key);
    $msp->setApiUrl($this->api_url);

    $transactionid = '1441193361';
	$endpoint = 'orders/' . $transactionid;
	
	try 
    {
      $order = $msp->orders->patch(
            array(
                "tracktrace_code" => 'null',
                "carrier"=> 'null',
                "ship_date"=> date('Y-m-d H:i:s'),
                "reason" => 'Shipped'
            ), $endpoint);
	} catch (Exception $e) 
    {
      echo "Error " . htmlspecialchars($e->getMessage());
    }
  }
}

?>