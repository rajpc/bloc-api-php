<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class CreatePolicyAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/policies/create";
		
	
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
	public function setEntityTypeID($val){
		$this->requestParameters['entityTypeID'] = $val;
	}
	
	public function setPolicyCoverageType($val){
		$this->requestParameters['policyCoverageType'] = $val;
	}
	
	public function setPolicyStatus($val){
		$this->requestParameters['policyStatus'] = $val;
	}
	
	public function setCarrier($val){
		$this->requestParameters['carrier'] = $val;
	}
	
	public function setPolicyNumber($val){
		$this->requestParameters['policyNumber'] = $val;
	}
	
	public function setAppSubmitDate($val){
		$this->requestParameters['appSubmitDate'] = $val;
	}
	
	public function setEffectiveDate($val){
		$this->requestParameters['effectiveDate'] = $val;
	}
	
	public function setRenewalDate($val){
		$this->requestParameters['renewalDate'] = $val;
	}
	
	public function setRenewalIncrease($val){
		$this->requestParameters['renewalIncrease'] = $val;
	}
	
	public function setTermDate($val){
		$this->requestParameters['termDate'] = $val;
	}
	
	public function setPremium($val){
		$this->requestParameters['premium'] = $val;
	}
	
	public function setPayFrequency($val){
		$this->requestParameters['payFrequency'] = $val;
	}
	
	public function setLives($val){
		$this->requestParameters['lives'] = $val;
	}
	
	public function setProjectCode($val){
		$this->requestParameters['projectCode'] = $val;
	}
	
	public function setWaitingPeriod($val){
		$this->requestParameters['waitingPeriod'] = $val;
	}
	
	public function setClassifications($val){
		$this->requestParameters['classifications'] = $val;
	}
	
	public function setNotes($val){
		$this->requestParameters['notes'] = $val;
	}
	
	public function setCarrierProduct($val){
		$this->requestParameters['carrierProduct'] = $val;
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
	
	public function setSignedByAgentID($val){
		$this->requestParameters['signedByAgentID'] = $val;
	}
	
	public function setSignedByAgentFirstName($val){
		$this->requestParameters['signedByAgentFirstName'] = $val;
	}
	
	public function setSignedByAgentLastName($val){
		$this->requestParameters['signedByAgentLastName'] = $val;
	}
	
	public function setAccountManagerUserID($val){
		$this->requestParameters['accountManagerUserID'] = $val;
	}
	
	public function setAccountManagerLastName($val){
		$this->requestParameters['accountManagerLastName'] = $val;
	}
	
	public function setAccountManagerFirstName($val){
		$this->requestParameters['accountManagerFirstName'] = $val;
	}
	
	
}