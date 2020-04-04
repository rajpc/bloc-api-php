<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class CreateAddressAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/addresses/create";
		
	
	public function getPath(){
		return $this->path;
	}
	
	public function getRequestParameters(){
		return $this->path;
	}
	
	public $requestParameters = array();
	
	public function setEntityID($val){
		$this->requestParameters['entityID'] = $val;
		
	}
	public function setEntityType($val){
		$this->requestParameters['entityType'] = $val;
	}
	
	public function setAddrType($val){
		$this->requestParameters['addrType'] = $val;
	}
	
	public function setStreet1($val){
		$this->requestParameters['street1'] = $val;
	}
	
	public function setStreet2($val){
		$this->requestParameters['street2'] = $val;
	}
	
	public function setCity($val){
		$this->requestParameters['city'] = $val;
	}
	
	public function setStateAbbrev($val){
		$this->requestParameters['stateAbbrev'] = $val;
	}
	
	public function setZip($val){
		$this->requestParameters['zip'] = $val;
	}
	
}