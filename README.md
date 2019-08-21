<p align="center">
  <img src="https://www.multisafepay.com/img/multisafepaylogo.svg" width="400px" position="center">
</p>

# PHP toolkit for the MultiSafepay API
This is a MultiSafepay Toolkit. With this Toolkit you can test the most common API calls the MultiSafepay JSON API supports.

## About MultiSafepay
MultiSafepay is a collecting payment service provider which means we take care of the agreements, technical details and payment collection required for each payment method. You can start selling online today and manage all your transactions from one place.

## Requirements
- To use the toolkit you need a MultiSafepay account. You can create a test account on https://testmerchant.multisafepay.com/signup

## Authentication
All requests to the MultiSafepay API require authentication. Authentication is provided by including an API Key as an HTTP header in your request. 

The HTTP header name for the API Key is: api_key

## Usage
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
9. recurringController.php## Usage

## Support
If you have any issues, problems or questions you can create an issue on this repository or contact us at <a href="mailto:integration@multisafepay.com">integration@multisafepay.com</a>

## Mistakes and improvements 
If you spot mistakes or want to contribute in improving this toolkit, feel free to [create pull requests](https://github.com/MultiSafepay/PHP/pulls)

## API Documentation
[Click here](https://docs.multisafepay.com/api/) for the MultiSafepay API documentation.
## License
[MIT License](https://github.com/MultiSafepay/PHP/blob/master/LICENSE.md)

