<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class UpdateIndividualAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/individuals/update";
		
	
	public function getPath(){
		return $this->path;
	}
	
	public function getRequestParameters(){
		return $this->path;
	}
	
	public $requestParameters = array();
	
	public function setIndividualID($val){
		$this->requestParameters['individualID'] = $val;
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
	
	public function setTitle($val){
		$this->requestParameters['title'] = $val;
	}
	
	public function setBirthDate($val){
		$this->requestParameters['birthDate'] = $val;
	}
	
	public function setSsn($val){
		$this->requestParameters['ssn'] = $val;
	}
	
	public function setGender($val){
		$this->requestParameters['gender'] = $val;
	}
	
	public function setEmail($val){
		$this->requestParameters['email'] = $val;
	}
	
	public function setStatus($val){
		$this->requestParameters['status'] = $val;
	}
	
	public function setType($val){
		$this->requestParameters['type'] = $val;
	}
	
	public function setProjectCode($val){
		$this->requestParameters['projectCode'] = $val;
	}
	
	public function setLeadSource($val){
		$this->requestParameters['leadSource'] = $val;
	}
	
	public function setLeadSourceOther($val){
		$this->requestParameters['leadSourceOther'] = $val;
	}
	
	public function setLeadDate($val){
		$this->requestParameters['leadDate'] = $val;
	}
	
	public function setExternalID($val){
		$this->requestParameters['externalID'] = $val;
	}
	
	public function setGroupID($val){
		$this->requestParameters['groupID'] = $val;
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