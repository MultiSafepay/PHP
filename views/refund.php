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
        <h1 class="black">Your transaction is processed, you can now refund the transaction.</h1>
        <br />
        <p>Click the refund button to refund the transaction</p>
        <form action="<?php echo BASE_URL ?>controllers/refundController.php" method="GET">
          <input type="hidden" name="transactionid" value="<?php echo $_GET['transactionid'] ?>"/>
          <input type="hidden" name="task" value="doRefund"/>
          <br />	
          <input type="submit" value="Refund" class="submitbutton"/>
        </form>
        <br />
        <br />
        <p>When refunding a transaction, the following data is being used</p>
        <br />
        <pre>array(
    "type" => "refund",
    "amount" => "20",
    "currency" => "EUR",
    "description" => "PHP Wrapper Toolkit Refund",
)</pre>
      </div>

      <p>This would be a JSON request like</p>
      <br />
      <pre><?php
        $array = array(
            "type" => "refund",
            "amount" => "20",
            "currency" => "EUR",
            "description" => "PHP Wrapper Toolkit Refund",
        );

        echo json_encode($array);
        ?>
      </pre>

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