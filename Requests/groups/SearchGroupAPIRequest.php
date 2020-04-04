<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class SearchGroupAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/groups/search";
		
	
	public function getPath(){
		return $this->path;
	}
	
	public function getRequestParameters(){
		return $this->path;
	}
	
	public $requestParameters = array();
	
	public function setGroupName($val){
		$this->requestParameters['groupName'] = $val;
	}
	
	public function setType($val){
		$this->requestParameters['type'] = $val;
	}
	
	public function setFedTaxID($val){
		$this->requestParameters['fedTaxID'] = $val;
	}
	
	public function setBusinessPhone($val){
		$this->requestParameters['businessPhone'] = $val;
	}
	
	public function setUpdatedDTM($val){
		$this->requestParameters['updatedDTM'] = $val;
	}
	
	public function setLimit($val){
		$this->requestParameters['limit'] = $val;
	}
	
}