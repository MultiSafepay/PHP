# PHP

This is a MultiSafepay Toolkit. With this Toolkit you can test the most common API calls the MultiSafepay JSON API supports.

At this point there are examples for:

1. MultiSafepay Connect
2. MultiSafepay FastCheckout
3. Direct iDEAL (Issuer selection within your store)
4. Gateway requests (Request the payment methods that are active within your MultiSafepay account)
5. Refunding
6. Pay After Delivery
7. Transaction details request
8. Split Payments
9. Recurring Payments



This Toolkit can also be a base for your own integration. Within the models folder you can find the API classes to connect with the MultiSafepay payment server, the controllers folder contains the controllers that can be used
to create your integration. The following controllers contain the API request structures:

 
1. connectController.php
2. fastcheckoutController.php
3. idealController.php
4. gatewayController.php
5. refundController.php
6. payafterdeliveryController.php
7. detailsController.php
8. splitpaymentController.php
9. recurringController.php



Authentication
All requests to the MultiSafepay API require authentication. Authentication is provided by including an API Key as an HTTP header in your request. Each website has it's own API Key so if you are operating multiple websites be sure to use the correct API Key for each site. The API Key can be found under the website settings in MultiSafepay Control.

The HTTP header name for the API Key is: api_key


The complete API Reference can be found at:
https://www.multisafepay.com/documentation/doc/API-Reference/

