<?php
require_once(__DIR__."/../GenericAPIRequest.php");


class UpdateGroupAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/groups/update";
		
	
	public function getPath(){
		return $this->path;
	}
	
	public function getRequestParameters(){
		return $this->path;
	}
	
	public $requestParameters = array();
	
	public function setGroupID($val){
		$this->requestParameters['groupID'] = $val;
	}
	public function setGroupName($val){
		$this->requestParameters['groupName'] = $val;
		
	}
	public function setDBA($val){
		$this->requestParameters['dba'] = $val;
	}
	
	public function setType($val){
		$this->requestParameters['type'] = $val;
	}
	
	public function setFedTaxID($val){
		$this->requestParameters['fedTaxID'] = $val;
	}
	
	public function setIndustry($val){
		$this->requestParameters['industry'] = $val;
	}
	
	public function setEmployees($val){
		$this->requestParameters['employees'] = $val;
	}
	
	public function setDescription($val){
		$this->requestParameters['description'] = $val;
	}
	
	public function setWebsite($val){
		$this->requestParameters['website'] = $val;
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
	
	public function setAccountManager($val){
		$this->requestParameters['accountManager'] = $val;
	}
	
	public function setBusinessPhone($val){
		$this->requestParameters['businessPhone'] = $val;
	}
	public function setFaxNumber($val){
		$this->requestParameters['faxNumber'] = $val;
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