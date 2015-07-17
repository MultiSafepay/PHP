<?php

class Object_Gateways extends Object_Core {

  public $success;
  public $data;

  public function get($endpoint = 'gateways', $type = '', $body = array(), $query_string = false) {
    $result = parent::get($endpoint, $type, json_encode($body), $query_string);
    $this->success = $result->success;
    $this->data = $result->data;

    return $this->data;
  }

}
