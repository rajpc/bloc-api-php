<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class DetailPolicyAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/policies/detail";
		
	
	public function getPath(){
		return $this->path;
	}
	
	public function getRequestParameters(){
		return $this->path;
	}
	
	public $requestParameters = array();
	
	public function setPolicyID($val){
		$this->requestParameters['policyID'] = $val;
	}
	
}