<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class DeleteAddressAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/addresses/detail";
		
	
	public function getPath(){
		return $this->path;
	}
	
	public function getRequestParameters(){
		return $this->path;
	}
	
	public $requestParameters = array();
	
	
	public function setAddressID($val){
		$this->requestParameters['addressID'] = $val;	
	}
	
}