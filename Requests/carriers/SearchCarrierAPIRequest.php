<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class SearchCarrierAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/carriers/search";
		
	
	public function getPath(){
		return $this->path;
	}
	
	public function getRequestParameters(){
		return $this->path;
	}
	
	public $requestParameters = array();
	
	
	public function setCarrierName($val){
		$this->requestParameters['carrierName'] = $val;
	}
	
	public function setLimiit($val){
		$this->requestParameters['limit'] = $val;
	}
	
}