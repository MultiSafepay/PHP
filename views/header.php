<?php
define('BASE_URL', ($_SERVER['SERVER_PORT'] == 443 ? 'https://' : 'http://') . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['SCRIPT_NAME']) . "/");
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito:300" media="all">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="<?php echo BASE_URL ?>assets/images/favicon.ico" type="image/x-icon; charset=binary">
    <link rel="icon" href="<?php echo BASE_URL ?>assets/images/favicon.ico" type="image/x-icon; charset=binary">
    <script src="https://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
    <meta charset="UTF-8">
    <title>PHP Wrapper | MultiSafepay</title>
  </head>
  <body>
