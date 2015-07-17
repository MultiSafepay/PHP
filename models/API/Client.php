<?php

class Client {

    public $orders;
    public $issuers;
    public $transactions;
    public $gateways;
    protected $api_key;
    public $api_url;
    public $api_endpoint;
    public $request;
    public $response;
	public $debug;
    
    public function __construct() {
        $this->orders = new Object_Orders($this);
        $this->issuers = new Object_Issuers($this);
        $this->gateways = new Object_Gateways($this);
    }
    
    public function getRequest() {
        return $this->request;
    }
	
    public function getResponse() {
        return $this->response;
    } 

    public function setApiUrl($url) {
        $this->api_url = trim($url);
    }
    
    public function setDebug($debug) {
        $this->debug = trim($debug);
    }

    public function setApiKey($api_key) {
        $this->api_key = trim($api_key);
    }
    

    public function processAPIRequest($http_method, $api_method, $http_body = NULL) {
        if (empty($this->api_key)) {
            throw new Exception("Please configure your MultiSafepay API Key.");
        }

        $url = $this->api_url . $api_method;
        $ch = curl_init($url);
        
        $request_headers = array(
            "Accept: application/json",
            "api_key:" . $this->api_key,
        );
        
        if ($http_body !== NULL) {
            $request_headers[] = "Content-Type: application/json";
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $http_body);
        }
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_ENCODING, "");
        curl_setopt($ch, CURLOPT_TIMEOUT, 120);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $http_method);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
        
        $body = curl_exec($ch);
		
		if($this->debug){
			$this->request = $http_body;
			$this->response = $body;
		}

        if (curl_errno($ch)) {
            throw new Exception("Unable to communicatie with the MultiSafepay payment server (" . curl_errno($ch) . "): " . curl_error($ch) . ".");
        }
		
		curl_close($ch);
        return $body;
    }
}