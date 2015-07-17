<?php

include('../config/config.php');

$cancel = new cancelController();
$cancel->cancelTransaction();

class cancelController {

  public function cancelTransaction() {

    $cancel_url = substr(BASE_URL, 0, -12) . 'index.php?view=cancel';
    header("Location: " . $cancel_url);
  }

}

?>