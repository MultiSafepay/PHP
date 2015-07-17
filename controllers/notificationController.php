<?php

include('../config/config.php');

$notification = new notificationController();

if (isset($_GET['type'])) {
  $notification->linkNotification();
} else {
  $notification->updateOrder();
}

class notificationController {

  /**
   * 	This function is used for Notification urls that are beeing used to update the order, but as an answer to MultiSafepay respond with a link back to the store
   */
  public function linkNotification() {


    /*
     * 	Within this function you should request the status of the transaction to get all transaction details, based on that information you should update the order and respond with a link	
     */

    $return_url = substr(BASE_URL, 0, -12) . 'index.php';

    echo '<a href="' . $return_url . '">Click here to return to the store.</a>';
  }

  public function updateOrder() {
    /*
     * 	Within this function you should request the status of the transaction to get all transaction details, based on that information you should update the order and respond with an OK to inform 		*	MultiSafepay that the updating of the order was succesful 
     */

    echo "ok";
  }

}

?>