<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class DetailAgentAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/agents/detail";
		
	
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
	
	public function setIncludeActivities($val){
		$this->requestParameters['includeActivities'] = $val;
	}
	
}