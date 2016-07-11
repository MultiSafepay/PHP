<div id="body-wrapper">
  <div id="main-menu">
    <div id="container">
      <a id="logo" href="https://www.multisafepay.com/">
        <img class="logo" src="http://multisafepay-demo.com:80/plugingroup/education/jelle/quickstart/img/multisafepay-logo-white.svg" alt="MultiSafepay">
      </a>
      <div style="clear:both;"></div>
    </div>
  </div>
  <div id="main-wrapper">
    <div id="container">
      <div class="content-description left-align">
        <h2>This toolkit demonstrates all MultiSafepay API calls and explains how they work.  </h2><Br />
        <h3>How it works:</h3>
        <p class="black">You can click on the function of your choice. When you are testing normal transaction like Connect, FastCheckout, iDEAL etc, then you will go through the payment process, if additional information is needed then this will be requested. For direct iDEAL we will show you an issuer selection like how it can be added to your webshop.</p>
        <p class="black"><br >Whenever you want to test a function that isn't a "transaction" but a change of a transaction etc, then first you will go through the transaction process so you can simulate the requested function onto that transaction. Like, refunding, updating etc of the transaction</p>
      </div>
      <div class="examples">
        <ul>
          <li><a href="<?php echo BASE_URL ?>controllers/connectController.php" style="color:#1fa67a !important;"><i class="fa msp-connect fa-5x"></i><br/>Connect</a></li>
          <li><a href="<?php echo BASE_URL ?>controllers/fastcheckoutController.php" style="color:#1fa67a !important;"><i class="fa msp-fastcheckout fa-5x"></i><br/>FastCheckout</a></li>
          <li><a href="<?php echo BASE_URL ?>index.php?view=directideal" style="color:#008dcb !important;"><i class="fa msp-ideal fa-5x"></i><br/>Direct iDEAL</a></li>
          <li><a href="<?php echo BASE_URL ?>index.php?view=gateways" style="color:#008dcb !important;"><i class="fa msp-gateways fa-5x"></i><br/>Gateway Request</a></li>
          <li><a href="<?php echo BASE_URL ?>controllers/refundController.php?issuer=3151" style="color:#f30 !important;"><i class="fa msp-transaction fa-5x"></i><br/>Transaction & Refund</a></li>
          <li><a href="<?php echo BASE_URL ?>controllers/payafterdeliveryController.php" style="color:#924099 !important;"><i class="fa msp-payafter fa-5x"></i><br/>Pay After Delivery</a></li>
          <!--<li><a href="<?php echo BASE_URL ?>controllers/klarnaController.php" style="color:#205081 !important;"><i class="fa msp-klarna fa-5x"></i><br/>Klarna</a></li>
          <li><a href="#" style="color:#205081 !important;"><i class="fa msp-update fa-5x"></i><br/>Update Transaction</a></li>-->
          <li><a href="<?php echo BASE_URL ?>index.php?view=details" style="color:#205081 !important;"><i class="fa msp-details fa-5x"></i><br/>Get details</a></li>
          <li><a href="<?php echo BASE_URL ?>index.php?view=splitpayment" style="color:#000 !important;"><i class="fa msp-splitpayment fa-5x"></i><br/>Split Payments</a></li>
          <li><a href="<?php echo BASE_URL ?>index.php?view=recurringpayment" style="color:#000 !important;"><i class="fa msp-recurring fa-5x"></i><br/>Recurring Transaction</a></li>		
        </ul>

        <div style="clear:both;"></div>
      </div>
      <div class="content-description left-align">
        <h3>Authentication</h3>
        <p class="black">
          All requests to the MultiSafepay API require authentication. Authentication is provided by including an API Key as an HTTP header in your request. Each website has it's own API Key so if you are operating multiple websites be sure to use the correct API Key for each site. The API Key can be found under the website settings in MultiSafepay Control.<br />
          <br/>The HTTP header name for the API Key is: api_key
        </p>
        <br />
        <h3>Code Examples</h3>
        <p class="black">
          Whenever you want to start building your own MultiSafepay integration then you can use the examples within this Toolkit as your base. Within the "Models" folder you can find our API code that is used to communicatie with our payment servers.
          <br />
          You can also take a closer look at the controllers within the controllers folder. The following controllers are being used for some specific API calls.
          <br />
        <ol>
          <li>connectController.php</li>
          <li>fastcheckoutController.php</li>
          <li>idealController.php</li>
          <li>gatewayController.php</li>
          <li>refundController.php</li>
          <li>payafterdeliveryController.php</li>
          <li>klarnaController.php</li>
          <li>updateController.php</li>
          <li>detailsController.php</li>
          <li>splitpaymentController.php</li>
          <li>recurringController.php</li>

        </ol>
        <br/>
        </p>
        
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