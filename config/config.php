<?php

// Report all PHP errors
error_reporting(-1);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);


if (!defined('BASE_URL')) {
  define('BASE_URL', ($_SERVER['SERVER_PORT'] == 443 ? 'https://' : 'http://') . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['SCRIPT_NAME']) . "/");
}
if (!defined('API_KEY')) {
  define('API_KEY', '0ff28d5cc3a6e7475be5fa174703788fa155fc94');
}

if (!defined('API_URL')) {
  define('API_URL', 'https://testapi.multisafepay.com/v1/json/'); //test is https://testapi.multisafepay.com/v1/json/, for live environment use https://api.multisafepay.com/v1/json/
}

if (!defined('TOOLKIT_VERSION')) {
  define('TOOLKIT_VERSION', '2.0.0');
}
?>