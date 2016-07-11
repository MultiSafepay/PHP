<?php

include('../config/config.php');

$controller = new mainController();
$controller->redirect();

class mainController {

  /**
   * 	This function will be called when returning the consumer back to the webshop. Within this function you can update the order (first request the transaction status then), or redirect the consumer back to your stores thank you page.
   */
  public function redirect() {

    if (isset($_GET['view'])) {
      $view = "view=" . $_GET['view'];
    } else {
      $view = "view=return";
    }

    $return_url = substr(BASE_URL, 0, -12) . 'index.php?' . $view . '&transactionid=' . $_GET['transactionid'];
    header("Location: " . $return_url);
  }

}

?>