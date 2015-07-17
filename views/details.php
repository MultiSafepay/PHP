<?php
include('config/config.php');
include('controllers/detailsController.php');
$details = new detailsController();
$transaction_details = $details->getDetails();
?>

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
        <h1 class="black">This example requests the transaction details for an existing transaction</h1>
        <br />
        <p>The transaction details shown are from an existing transaction on the MultiSafepay test environment with transaction ID 1437027267.<br/>
          This example is from an iDEAL transaction. The details shown are all available details for this example transaction.	
        </p>
        <br />
        <pre><?php print_r($transaction_details); ?></pre>
        <br>
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