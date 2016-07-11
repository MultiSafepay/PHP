<?php
include('config/config.php');
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
        <h1 class="black">You have selected the split payment example</h1>
        <br />

        <p class="black">When using Split Payments you can transfer a fixed amount or percentage of the original transaction to another MultiSafepay account.<br />
          Using Split Payments can be done by adding specific settings to the transaction request. These settings should be adde to "var3". You can use (examples):
          <br />
          <br />
          1. <b>affiliate;1001001;1%;split payment;</b> this example will transfer 1% of the original transaction to MultiSafepay account 1001001 with the description "split payment".
          <br />
          2. <b>affiliate;1001001;100;split payment;</b> this example will transfer 1 EUR of the original transaction to MultiSafepay account 1001001 with the description "split payment".
        </p>
        <br>
        <br />
        <a href="controllers/splitpaymentController.php" class="submitbutton">Start Split Payment</a>
        <br /><br />
        <br />
        <p>You can click <a href="index.php">here</a> to return to the MultiSafepay toolkit</p>
        <Br />
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