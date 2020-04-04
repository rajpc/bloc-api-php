<?php
require_once(__DIR__."/../GenericAPIRequest.php");


class CreateIndividualAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/individuals/create";
	
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
	
	public function setTitle($val){
		$this->requestParameters['title'] = $val;
	}
	
	public function setNickName($val){
		$this->requestParameters['nickName'] = $val;
	}
	
	public function setBirthDate($val){
		$this->requestParameters['birthDate'] = $val;
	}
	
	public function setDeceasedDate($val){
		$this->requestParameters['deceasedDate'] = $val;
	}
	
	public function setSsn($val){
		$this->requestParameters['ssn'] = $val;
	}
	
	public function setDriversLicenseNum($val){
		$this->requestParameters['driversLicenseNum'] = $val;
	}
	
	public function setMedicareBeneficiaryID($val){
		$this->requestParameters['medicareBeneficiaryID'] = $val;
	}
	
	public function setMedicareEffectiveDatePartA($val){
		$this->requestParameters['medicareEffectiveDatePartA'] = $val;
	}
	
	public function setMedicareEffectiveDatePartB($val){
		$this->requestParameters['medicareEffectiveDatePartB'] = $val;
	}
	
	public function setGender($val){
		$this->requestParameters['gender'] = $val;
	}
	
	public function setSmokerStatus($val){
		$this->requestParameters['smokerStatus'] = $val;
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
	
	public function setServicingAgentID($val){
		$this->requestParameters['servicingAgentID'] = $val;
	}
	
	public function setServicingAgentLastName($val){
		$this->requestParameters['servicingAgentLastName'] = $val;
	}
	
	public function setServicingAgentFirstName($val){
		$this->requestParameters['servicingAgentFirstName'] = $val;
	}
	
	public function setLeadSourceAgentID($val){
		$this->requestParameters['leadSourceAgentID'] = $val;
	}
	
	public function setLeadSourceAgentLastName($val){
		$this->requestParameters['leadSourceAgentLastName'] = $val;
	}
	
	public function setLeadSourceAgentFirstName($val){
		$this->requestParameters['leadSourceAgentFirstName'] = $val;
	}
	
}