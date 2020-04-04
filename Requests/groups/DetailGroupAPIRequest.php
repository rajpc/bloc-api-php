<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class DetailGroupAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/groups/detail";
		
	
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
	
	public function setIncludeActivities($val){
		$this->requestParameters['includeActivities'] = $val;
	}
}