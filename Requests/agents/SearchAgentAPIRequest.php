<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class SearchAgentAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/agents/search";
		
	
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
	
	public function setSecondaryEmail($val){
		$this->requestParameters['secondaryEmail'] = $val;
	}
	
	public function setLimiit($val){
		$this->requestParameters['limit'] = $val;
	}
	
}