<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class UpdateAgentAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/agents/update";
		
	
	public function getPath(){
		return $this->path;
	}
	
	public function getRequestParameters(){
		return $this->path;
	}
	
	public $requestParameters = array();
	
	public function setAgentID($val){
		$this->requestParameters['agentID'] = $val;
	}
	
	public function setFirstName($val){
		$this->requestParameters['firstName'] = $val;
	}
	
	public function setLastName($val){
		$this->requestParameters['lastName'] = $val;
	}
	
	public function setMiddleInitial($val){
		$this->requestParameters['middleInitial'] = $val;
	}
	
	public function setNickName($val){
		$this->requestParameters['nickName'] = $val;
	}
	
	public function setBirthDate($val){
		$this->requestParameters['birthDate'] = $val;
	}	
	
	public function setSsn($val){
		$this->requestParameters['ssn'] = $val;
	}
	
	public function setEmail($val){
		$this->requestParameters['email'] = $val;
	}
	
	public function setSecondaryEmail($val){
		$this->requestParameters['secondaryEmail'] = $val;
	}
	
	public function setStatus($val){
		$this->requestParameters['status'] = $val;
	}
	
	public function setType($val){
		$this->requestParameters['type'] = $val;
	}
	
	public function setClassification($val){
		$this->requestParameters['classification'] = $val;
	}
	
	
	public function setLeadSource($val){
		$this->requestParameters['leadSource'] = $val;
	}
	
	public function setLeadSourceOther($val){
		$this->requestParameters['leadSourceOther'] = $val;
	}
	
	public function setBusinessName($val){
		$this->requestParameters['businessName'] = $val;
	}
	
	public function setNpn($val){
		$this->requestParameters['npn'] = $val;
	}
	
	
	public function setHomePhone($val){
		$this->requestParameters['homePhone'] = $val;
	}
	
	public function setCellPhone($val){
		$this->requestParameters['cellPhone'] = $val;
	}
	
	public function setBusinessPhone($val){
		$this->requestParameters['businessPhone'] = $val;
	}
	
	
}