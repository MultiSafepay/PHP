<?php

class Object_Core {

  protected $mspapi;
  public $result;

  public function __construct(Client $mspapi) {
    $this->mspapi = $mspapi;
  }

  public function post($body, $endpoint = 'orders') {
    $this->result = $this->processRequest('POST', $endpoint, $body);
    return $this->result;
  }

  public function patch($body, $endpoint = '') {
    $this->result = $this->processRequest('PATCH', $endpoint, $body);
    return $this->result;
  }

  public function getResult() {
    return $this->result;
  }

  public function get($endpoint, $id, $body = array(), $query_string = false) {
    if (!$query_string) {
      $url = "{$endpoint}/{$id}";
    } else {
      $url = "{$endpoint}?{$query_string}";
    }


    $this->result = $this->processRequest('GET', $url, $body);
    return $this->result;
  }

  protected function processRequest($http_method, $api_method, $http_body = NULL) {
    $body = $this->mspapi->processAPIRequest($http_method, $api_method, $http_body);
    if (!($object = @json_decode($body))) {
      throw new Exception("'{$body}'.");
    }

    if (!empty($object->error_code)) {
      $exception = new Exception("{$object->error_code}: {$object->error_info}.");
      throw $exception;
    }
    return $object;
  }

}
