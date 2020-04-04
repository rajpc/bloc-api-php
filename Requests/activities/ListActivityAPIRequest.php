<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class ListActivityAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/activity/list";
		
	
	public function getPath(){
		return $this->path;
	}
	
	public function getRequestParameters(){
		return $this->path;
	}
	
	public $requestParameters = array();
	
	public function setActivityIDs($val){
		$this->requestParameters['activityIDs'] = $val;
		
	}
	
}