<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class SearchPolicyAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/policies/search";
		
	
	public function getPath(){
		return $this->path;
	}
	
	public function getRequestParameters(){
		return $this->path;
	}
	
	public $requestParameters = array();
	
	public function setPolicyNumber($val){
		$this->requestParameters['policyNumber'] = $val;
	}
	
	public function setPolicyCoverageType($val){
		$this->requestParameters['policyCoverageType'] = $val;
	}
	
	public function setCarrier($val){
		$this->requestParameters['carrier'] = $val;
	}
	
	public function setAppSubmitDateAfter($val){
		$this->requestParameters['appSubmitDateAfter'] = $val;
	}
	
	public function setAppSubmitDateBefore($val){
		$this->requestParameters['appSubmitDateBefore'] = $val;
	}
	
	public function setUpdatedDTM($val){
		$this->requestParameters['updatedDTM'] = $val;
	}
	

	public function setEntityID($val){
		$this->requestParameters['entityID'] = $val;
		
	}
	public function setEntityTypeID($val){
		$this->requestParameters['entityTypeID'] = $val;
	}
	
	public function setLimit($val){
		$this->requestParameters['limit'] = $val;
	}
	
	
	public function setServicingAgentID($val){
		$this->requestParameters['servicingAgentID'] = $val;
	}
	
	public function setServicingAgentLastName($val){
		$this->requestParameters['servicingAgentLastName'] = $val;
	}
	
	public function setServicingAgentFirstName($val){
		$this->requestParameters['servicingAgentFirstName'] = $val;
	}
	
}