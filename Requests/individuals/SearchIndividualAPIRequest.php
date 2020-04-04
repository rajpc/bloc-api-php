<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class SearchIndividualAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/individuals/search";
		
	
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
	
	public function setBirthDate($val){
		$this->requestParameters['birthDate'] = $val;
	}
	
	public function setSsn($val){
		$this->requestParameters['ssn'] = $val;
	}
	
	public function setEmail($val){
		$this->requestParameters['email'] = $val;
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
	
	public function setGroupID($val){
		$this->requestParameters['groupID'] = $val;
	}
	
	public function setUpdatedDTM($val){
		$this->requestParameters['updatedDTM'] = $val;
	}
	
	public function setLimit($val){
		$this->requestParameters['limit'] = $val;
	}
	
	
}