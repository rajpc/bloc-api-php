<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class CreateAgentAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/agents/create";
		
	
	public function getPath(){
		return $this->path;
	}
	
	public function getRequestParameters(){
		return $this->path;
	}
	
	public $requestParameters = array();
	
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
	
	public function setAgencyName($val){
		$this->requestParameters['agencyName'] = $val;
	}
	public function setAgentNumber($val){
		$this->requestParameters['agentNumber'] = $val;
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
	
	public function setAgencyBusPhone($val){
		$this->requestParameters['agencyBusPhone'] = $val;
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