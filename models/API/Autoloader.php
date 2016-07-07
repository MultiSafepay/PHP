<?php

namespace MultiSafepayAPI;

class API_Autoloader {

  public static function autoload($class_name) {
    $name = join("/", array_slice(explode('\\', $class_name), 1));
    $file_name = realpath(dirname(__FILE__) . "/{$name}.php");

    if (file_exists($file_name)) {
      require $file_name;
    }
  }

  public static function register() {
    return spl_autoload_register(array(__CLASS__, "autoload"));
  }

  public static function unregister() {
    return spl_autoload_unregister(array(__CLASS__, "autoload"));
  }

}

API_Autoloader::register();
