<?php

class Object_Issuers extends Object_Core {

  public $success;
  public $data;

  public function get($endpoint = 'issuers', $type = 'ideal', $body = array(), $query_string = false) {

    $result = parent::get($endpoint, $type, $body, $query_string);
    $this->success = $result->success;
    $this->data = $result->data;

    return $this->data;
  }

}
